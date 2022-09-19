<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'author','blog_title','short_description','long_description', 'status'];

    protected static $blog;
    protected static $blogImage;
    protected static $imageDirectory;
    protected static $imageName;
    protected static $imageUrl;


    public static function saveImage($request)
    {
        self::$blogImage = $request->file('image');
        if(self::$blogImage)
        {
            self::$imageName = 'blog-image'.time().'.'.self::$blogImage->getClientOriginalExtension();
            self::$imageDirectory = 'blog-image/';
            self::$blogImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
            return self::$imageUrl;
        }
        else{
            return '';
        }
    }

    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->image        = self::saveImage($request);
        self::$blog->author       = $request->author;
        self::$blog->blog_title   = $request->blog_title;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->status       = $request->status;
        self::$blog->save();
    }


    public static function updateBlog($request)
    {
        self::$blog = Blog::find($request->id);
        if ($request->file('image'))
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::saveImage($request);
        } else{
            self::$imageUrl = self::$blog->image;
        }

        self::$blog->image        = self::$imageUrl;
        self::$blog->author       = $request->author;
        self::$blog->blog_title   = $request->blog_title;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->status       = $request->status;
        self::$blog->save();
    }
}
