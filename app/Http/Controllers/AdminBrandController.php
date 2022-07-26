<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;
use App\Models\Brand;
use App\Models\Product;

class AdminBrandController extends Controller
{
    private $category;
    private $product;
    private $brand;

    public function __construct(Category $category, Product $product, Brand $brand)
    {
        $this->category = $category;
        $this->brand = $brand;
        $this->product = $product;
    }
    public function index(){
        $brands = $this->brand->paginate(5);
        return view('admin.brand.brand', compact('brands'));
    }

    public function create(){
        return view('admin.brand.add');
    }

    public function store(Request $request){

        $dataBrandCreate = [
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug
        ];
        // $this->brand->create ([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'slug' => $request->slug,

            
        // ]);

        if ($request->hasFile('logo')) {
            // $destination_path = 'public/images/products';
            $image = $request->file('logo');
            $image_name = $image->getClientOriginalName();
            // $path = $request->file('image_avatar')->storeAs($destination_path, $image_name);
            $image->move('storage/images/brand/', $image_name);
            $dataBrandCreate['logo'] = $image_name;
        }

        $this->brand->create($dataBrandCreate);
        return redirect()->route('brand.index');
        
    }

    public function edit($id){
        $brand = $this->brand->find($id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function update($id, Request $request){
        // $this->brand->find($id)->update([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'slug' => $request->slug
        // ]);

        $dataBrandUpdate = [
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug
        ];

        if ($request->hasFile('logo')) {
            // $destination_path = 'public/images/products';
            $image = $request->file('logo');
            $image_name = $image->getClientOriginalName();
            // $path = $request->file('image_avatar')->storeAs($destination_path, $image_name);
            $image->move('storage/images/brand/', $image_name);
            $dataBrandUpdate['logo'] = $image_name;
        }

        $this->brand->update($dataBrandUpdate);

        return redirect()->route('brand.index');
    }
    

    public function delete($id){
        $this->brand->find($id)->delete();
        return redirect()->route('brand.index');
    }
}
