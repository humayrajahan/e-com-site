<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    protected $blog;
    protected $blogs;

    public function addBlog()
    {
        return view('admin.blog.add-blog');
    }

    public function newBlog(Request $request)
    {
        Blog::newBlog($request);
        Session::flash('success_message', 'Blog Has Been Added Successfully');
        return redirect()->back();
    }
    public function manageBlog(){
        $this->blogs = Blog::orderBy('id','DESC')->get();
        return view('admin.blog.manage-blog', ['blogs' => $this->blogs]);
    }
    public function editBlog($id){
        $this->blog = Blog::find($id);
        return view('admin.blog.edit-blog', ['blog'=>$this->blog], ['categories' => Category::all()]);
    }
    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        return redirect('/manage-blog')->with(Session::flash('success_message', 'Blog Has Been Updated Successfully'));
    }
    public function deleteBlog($id){
        $this->blog = Blog::findOrFail($id);
        if (file_exists($this->blog->image)){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        Session::flash('success_message', 'Blog Has Been Deleted Successfully');
        return redirect()->back();
    }
}
