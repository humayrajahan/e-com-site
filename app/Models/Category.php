<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    use HasFactory;
    protected $fillable = ['name','status'];

    protected static $category;
    public static function newCategory ($request)
    {
        self::$category = new Category();
        self::$category->name        = $request->name;
        self::$category->status      = $request->status;
        self::$category->save();
    }
}
