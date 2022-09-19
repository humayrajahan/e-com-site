<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $category;
    protected $categories;

    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function newCategory(Request $request)
    {
        Category::newCategory($request);
        Session::flash('success_message', 'Category Has Been Added Successfully');
        return redirect()->back();
    }
    public function manageCategory(){
        $this->categories = Category::all();
        return view('admin.category.manage-category', ['categories' => $this->categories]);
    }
    public function deleteCategory($id){
        $this->category = Category::findOrFail($id);
        $this->category->delete();
        Session::flash('success_message', 'Category Has Been Deleted Successfully');
        return redirect()->back();
    }
}
