<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Collection\paginate;


class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];//ban đầu nè, ò v mới đủ nè
    protected $fillable = ['name', 'price', 'description','category_id', 'brand_id', 'popular_status', 'image_avatar', 'image_details_1', 'image_details_2', 'image_details_3'];
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function productImage()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
    public static function catCount($cat_id)
    {
        // ->whereNull('deleted_at')
        $catCount = Product::where('category_id', $cat_id)->count();
        return $catCount;
    }

    public static function brandCount($cat_brand_id)
    {
        // ->whereNull('deleted_at')
        $brandCount = Product::where('brand_id', $cat_brand_id)->count();
        return $brandCount;
    }

    // localScope
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            // $key_cat = $key->category->name;
            $query = $query->where('name', 'like', '%' . $key . '%')->orWhere('price', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
