<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }


    protected $guarded = [];

    protected static $product;
    protected static $course;
    protected static $productImage;
    protected static $imageDirectory;
    protected static $imageName;
    protected static $imageUrl;

    public static function saveImage($request)
    {
        self::$productImage = $request->file('image');
        if(self::$productImage)
        {
            self::$imageName = 'product-image'.time().'.'.self::$productImage->getClientOriginalExtension();
            self::$imageDirectory = 'product-image/';
            self::$productImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
            return self::$imageUrl;
        }
        else{
            return '';
        }
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id  = $request->category_id;
        self::$product->sub_category_id  = $request->sub_category_id;
        self::$product->name       = $request->name;
        self::$product->regular_price   = $request->regular_price;
        self::$product->selling_price   = $request->selling_price;
        self::$product->short_description = $request->short_description;
        self::$product->long_description = $request->long_description;
        self::$product->image        = self::saveImage($request);
        self::$product->status       = $request->status;
        self::$product->save();
    }


    public static function updateProduct($request)
    {
        self::$product = Product::find($request->id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::saveImage($request);
        } else{
            self::$imageUrl = self::$product->image;
        }

        self::$product->category_id  = $request->category_id;
        self::$product->sub_category_id  = $request->sub_category_id;
        self::$product->image        = self::$imageUrl;
        self::$product->name       = $request->name;
        self::$product->regular_price   = $request->regular_price;
        self::$product->selling_price   = $request->selling_price;
        self::$product->short_description = $request->short_description;
        self::$product->long_description = $request->long_description;
        self::$product->status       = $request->status;
        self::$product->save();
    }

}
