<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $productTime;
    protected $products;
    protected $product;
    protected $categories;
    protected $category;
    protected $subCategories;
    protected $subCategory;
    protected $blogs;
    protected $blog;
    protected $relatedProduct;

    public function index()
    {
        $this->productTime = Carbon::now();
        $this->products = Product::where('category_id',1)->take(3)->get();
        return view('front.home.home', [
            'products'  => $this->products,
        ]);
    }

    public function product()
    {
        $this->products = Product::where('status', 1)->get();
        $this->categories = Category::where('status', 1)->get();
        $this->subCategories = SubCategory::where('status', 1)->get();
        return view('front.product.product', [
            'products'  => $this->products,
            'categories'  => $this->categories,
            'subCategories'  => $this->subCategories,
        ]);
    }

    public function course()
    {
        $this->products = Product::where('category_id',1)->get();
        $this->categories = Category::where('status', 1)->get();
        return view('front.product.course', [
            'products'  => $this->products,
            'categories'  => $this->categories,
        ]);
    }
    public function goods()
    {
        $this->products = Product::where('category_id',2)->get();
        $this->categories = Category::where('status', 1)->get();
        return view('front.product.goods', [
            'products'  => $this->products,
            'categories'  => $this->categories,
        ]);
    }
    public function blog()
    {
        $this->blogs = Blog::where('status', 1)->get();
        return view('front.blog.blog', [
            'blogs'  => $this->blogs,
        ]);
    }

    public function blogDetails($id)
    {
        $this->blog = Blog::find($id);
//        $this->relatedBlog = Blog::where('category_id', $this->blog->category_id)->take(4)->get();
        return view('front.blog.blog-details', [
            'blog' => $this->blog,
            'singleBlog' => Blog::where('id', $this->blog->id)->get(),
        ]);
    }

    public function productCategory($id)
    {
        $this->products = Product::where('category_id', $id)->get();
        return view('front.product.product-category',['products' => $this->products, 'category' => Product::find($id)]);
    }

    public function productDetails($id)
    {
        $this->product = Product::find($id);
        $this->relatedProduct = Product::where('category_id', $this->product->category_id)->take(4)->get();
        return view('front.product.product-details', [
            'product' => $this->product,
            'singleProduct' => Product::where('id', $this->product->id)->get(),
        ]);
    }

    public function contact()
    {
        return view('front.contact.contact');
    }
    public function about()
    {
        return view('front.about.about');
    }

    public function newMessage(Request $request)
    {
        NewMessage::newMessage($request);
        return redirect()->back()->with('message', 'Message sent...');
    }

}
