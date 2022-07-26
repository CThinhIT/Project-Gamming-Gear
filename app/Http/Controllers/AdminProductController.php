<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductImage;
use App\Traits\StorageImageTraits;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class AdminProductController extends Controller
{
    use StorageImageTraits;
    private $category;
    private $product;
    private $brand;
    private $productImage;
    public function __construct(Category $category, Product $product, Brand $brand)
    {
        $this->category = $category;
        $this->brand = $brand;
        $this->product = $product;
        // $this->productImage = $productImage;
    }

    public function index()
    {       
        $data = $this->category->all();
        $data1 = $this->brand->all();
        $recusive = new Recusive($data);
        $recusive1 = new Recusive($data1);
        $htmlOption = $recusive->categoryRecusive();
        $htmlOption1 = $recusive1->brandRecusive();
        if (isset($_GET['category_id']) && isset($_GET['brand_id'])) {
            $cat = $_GET['category_id'];
            $brand = $_GET['brand_id'];
            $products =  $this->product->search()->Where('category_id', $cat)->orWhere('brand_id', $brand)->latest()->paginate(5)->appends(request()->query());
            // $products =  $this->product->search()->Where('brand_id', $brand)->latest()->paginate(5)->appends(request()->query());
            if ($cat == 0 && $brand == 0) {
                $products = $this->product->latest()->search()->paginate(5)->appends(request()->query());
            }
        } else {
            $products = $this->product->latest()->search()->paginate(5)->appends(request()->query());
        }
        return view('admin.product.product' , compact('products', 'htmlOption', 'htmlOption1'));
    }  

    public function create(){
        $data = $this->category->all();
        $data1 = $this->brand->all();
        $recusive = new Recusive($data);
        $recusive1 = new Recusive($data1);
        $htmlOption = $recusive->categoryRecusive();
        $htmlOption1 = $recusive1->brandRecusive();
        return view('admin.product.add', compact('htmlOption', 'htmlOption1'));

    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'popular_status' => $request->popular_status
                
            ];

            if ($request->hasFile('image_avatar')) {
                // $destination_path = 'public/images/products';
                $image = $request->file('image_avatar');
                $image_name = $image->getClientOriginalName();
                // $path = $request->file('image_avatar')->storeAs($destination_path, $image_name);
                $image->move('storage/images/products/', $image_name);
                $dataProductCreate['image_avatar'] = $image_name;
            }

            if ($request->hasFile('image_details_1')) {
                // $destination_path = 'public/images/products';
                $image1 = $request->file('image_details_1');
                $image_name1 = $image1->getClientOriginalName();
                // $path = $request->file('image_details_1')->storeAs($destination_path, $image_name);
                $image1->move('storage/images/products/', $image_name1);
                $dataProductCreate['image_details_1'] = $image_name1;
            }

            if ($request->hasFile('image_details_2')) {
                // $destination_path = 'public/images/products';
                $image2 = $request->file('image_details_2');
                $image_name2 = $image2->getClientOriginalName();
                // $path = $request->file('image_details_2')->storeAs($destination_path, $image_name);
                $image2->move('storage/images/products/', $image_name2);
                $dataProductCreate['image_details_2'] = $image_name2;
            }

            if ($request->hasFile('image_details_3')) {
                // $destination_path = 'public/images/products';
                $image3 = $request->file('image_details_3');
                $image_name3 = $image->getClientOriginalName();
                // $path = $request->file('image_details_3')->storeAs($destination_path, $image_name);
                $image3->move('storage/images/products/', $image_name3);
                $dataProductCreate['image_details_3'] = $image_name3;
            }

            $this->product->create($dataProductCreate);

            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message'. $exception->getMessage(). 'Line: ' . $exception->getLine());
        }
    }


    public function edit($id)
    {
        $product = $this->product->find($id);
        $data1 = $this->brand->all();
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $recusive1 = new Recusive($data1);
        $htmlOption = $recusive->categoryRecusive1($product->category_id);
        $htmlOption1 = $recusive1->brandRecusive1($product->brand_id);
        return view('admin.product.edit', compact('htmlOption', 'htmlOption1', 'product'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataProductUpdate = [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id
                
            ];

            if ($request->hasFile('image_avatar')) {
                // $destination_path = 'public/images/products';
                $image = $request->file('image_avatar');
                $image_name = $image->getClientOriginalName();
                // $path = $request->file('image_avatar')->storeAs($destination_path, $image_name);
                $image->move('storage/images/products/', $image_name);
                $dataProductUpdate['image_avatar'] = $image_name;
            }

            if ($request->hasFile('image_details_1')) {
                // $destination_path = 'public/images/products';
                $image1 = $request->file('image_details_1');
                $image_name1 = $image1->getClientOriginalName();
                // $path = $request->file('image_details_1')->storeAs($destination_path, $image_name);
                $image1->move('storage/images/products/', $image_name1);
                $dataProductUpdate['image_details_1'] = $image_name1;
            }

            if ($request->hasFile('image_details_2')) {
                // $destination_path = 'public/images/products';
                $image2 = $request->file('image_details_2');
                $image_name2 = $image2->getClientOriginalName();
                // $path = $request->file('image_details_2')->storeAs($destination_path, $image_name);
                $image2->move('storage/images/products/', $image_name2);
                $dataProductUpdate['image_details_2'] = $image_name2;
            }

            if ($request->hasFile('image_details_3')) {
                // $destination_path = 'public/images/products';
                $image3 = $request->file('image_details_3');
                $image_name3 = $image3->getClientOriginalName();
                // $path = $request->file('image_details_3')->storeAs($destination_path, $image_name);
                $image3->move('storage/images/products/', $image_name3);
                $dataProductUpdate['image_details_3'] = $image_name3;
            }

            $this->product->find($id)->update($dataProductUpdate);

            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message'. $exception->getMessage(). 'Line: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        try {
            $this->product->find($id)->delete();
            return response()->json([
                'code' => 200,
                'massage' => 'success'
            ], status: 200);
        } catch (Exception $exception) {
            Log::error('Message'. $exception->getMessage(). 'Line: ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'massage' => 'fail'
            ], status: 500);
        }
    }

    public function unactive($id){
        Product::Where('id', $id)->update(['popular_status' => 1]);
        return redirect()->back();
    }

    public function active($id){
        Product::Where('id', $id)->update(['popular_status' => 0]);
        return redirect()->back();
    }
}
