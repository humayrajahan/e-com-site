<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected $fillable = ['category_id','name','status'];

    protected static $subCategory;

    public static function newSubCategory ($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name        = $request->name;
        self::$subCategory->status      = $request->status;
        self::$subCategory->save();
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
