<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $product;
    protected $products;
    protected $subCategories;

    public function addProduct()
    {
        return view('admin.product.add-product',[
                'categories' => Category::all(),
                'subCategories' => SubCategory::all(),
            ]);
    }
    public function getSubCategoryId($id)
    {
        $this->subCategories = SubCategory::where('category_id', $id)->get();
        return json_encode($this->subCategories);
    }

    public function newProduct(Request $request)
    {
        Product::newProduct($request);
        Session::flash('success_message', 'Product Has Been Added Successfully');
        return redirect()->back();
    }

    public function manageProduct(){
        $this->products = Product::orderBy('id','DESC')->get();
        return view('admin.product.manage-product', ['products' => $this->products]);
    }

    public function editProduct($id){
        $this->product = Product::find($id);
        return view('admin.product.edit-product', ['product'=>$this->product], ['categories' => Category::all()]);
    }
    public function updateProduct(Request $request){
        Product::updateProduct($request);
        return redirect('/manage-product')->with(Session::flash('success_message', 'Product Has Been Updated Successfully'));
    }
    public function deleteProduct($id){
        $this->product = Product::findOrFail($id);
        if (file_exists($this->product->image)){
            unlink($this->product->image);
        }
        $this->product->delete();
        Session::flash('success_message', 'Product Has Been Deleted Successfully');
        return redirect()->back();
    }
}
