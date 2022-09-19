<?php

use App\Http\Controllers\CartController;
//use App\Http\Controllers\Front\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [
    'uses' => '\App\Http\Controllers\Admin\AdminController@index',
    'as'  => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified'],
]);
Route::get('redirects','App\Http\Controllers\Admin\AdminController@index');


Route::namespace('App\Http\Controllers\Member')->group(function () {
    Route::get('/member-login','MemberController@show_login_form')->name('member-login');
    Route::get('/member-register','MemberController@show_signup_form')->name('member-register');
});


Route::get('/', [
    'uses' => 'App\Http\Controllers\Front\FrontController@index',
    'as' => '/',
]);

Route::get('/product', [
    'uses' => 'App\Http\Controllers\Front\FrontController@product',
    'as' => 'product',
]);

Route::get('/product-details/{id}', [
    'uses' => '\App\Http\Controllers\Front\FrontController@productDetails',
    'as'  => 'product-details',
]);Route::get('/product-category', [
    'uses' => '\App\Http\Controllers\Front\FrontController@productCategory',
    'as'  => 'product-category',
]);

Route::get('/blog', [
    'uses' => 'App\Http\Controllers\Front\FrontController@blog',
    'as' => 'blog',
]);

Route::get('/course', [
    'uses' => 'App\Http\Controllers\Front\FrontController@course',
    'as' => 'course',
]);
Route::get('/goods', [
    'uses' => 'App\Http\Controllers\Front\FrontController@goods',
    'as' => 'goods',
]);


Route::get('/contact', [
    'uses' => 'App\Http\Controllers\Front\FrontController@contact',
    'as' => 'contact',
]);
Route::get('/about', [
    'uses' => 'App\Http\Controllers\Front\FrontController@about',
    'as' => 'about',
]);
Route::get('/career', [
    'uses' => 'App\Http\Controllers\Front\FrontController@career',
    'as' => 'career',
]);

Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('checkout-proceed', [CartController::class, 'checkoutProceed'])->name('checkout.proceed');
Route::get('cart', [CartController::class, 'cartList'])->name('cart');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/blog-category/{id}', [
    'uses' => '\App\Http\Controllers\Front\FrontController@blogCategory',
    'as'  => 'blog-category',
]);

Route::get('/blog-details/{id}', [
    'uses' => '\App\Http\Controllers\Front\FrontController@blogDetails',
    'as'  => 'blog-details',
]);


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::get('/add-product', [
        'uses' => '\App\Http\Controllers\Admin\ProductController@addProduct',
        'as' => 'add-product',
    ]);

    Route::post('/new-product', [
        'uses' => '\App\Http\Controllers\Admin\ProductController@newProduct',
        'as' => 'new-product',
    ]);

    Route::get('/manage-product', [
        'uses' => '\App\Http\Controllers\Admin\ProductController@manageProduct',
        'as' => 'manage-product',
    ]);

    Route::get('/edit-product/{id}', [
        'uses' => '\App\Http\Controllers\Admin\ProductController@editProduct',
        'as' => 'edit-product',
    ]);
    Route::post('/update-product', [
        'uses' => '\App\Http\Controllers\Admin\ProductController@updateProduct',
        'as' => 'update-product',
    ]);
    Route::get('/delete-product/{id}', [
        'uses' => '\App\Http\Controllers\Admin\ProductController@deleteProduct',
        'as' => 'delete-product',
    ]);

    Route::get('/add-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@addCategory',
        'as' => 'add-category',
    ]);
    Route::post('/new-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@newCategory',
        'as' => 'new-category',
    ]);
    Route::get('/manage-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@manageCategory',
        'as' => 'manage-category',
    ]);
    Route::get('/delete-category/{id}', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@deleteCategory',
        'as' => 'delete-category',
    ]);

    Route::get('/add-subCategory', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@addSubCategory',
        'as'  => 'add-subcategory',
    ]);
    Route::post('/new-subcategory', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@newSubCategory',
        'as'  => 'new-subcategory',
    ]);
    Route::get('/manage-subcategory', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@manageSubCategory',
        'as'  => 'manage-subcategory',
    ]);
    Route::get('/delete-subcategory/{id}', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@deleteSubCategory',
        'as'  => 'delete-subcategory',
    ]);

    Route::get('/add-blog', [
        'uses' => '\App\Http\Controllers\Admin\BlogController@addBlog',
        'as' => 'add-blog',
    ]);
    Route::post('/new-blog', [
        'uses' => '\App\Http\Controllers\Admin\BlogController@newBlog',
        'as' => 'new-blog',
    ]);
    Route::get('/manage-blog', [
        'uses' => '\App\Http\Controllers\Admin\BlogController@manageBlog',
        'as' => 'manage-blog',
    ]);
    Route::get('/edit-blog/{id}', [
        'uses' => '\App\Http\Controllers\Admin\BlogController@editBlog',
        'as' => 'edit-blog',
    ]);
    Route::post('/update-blog', [
        'uses' => '\App\Http\Controllers\Admin\BlogController@updateBlog',
        'as' => 'update-blog',
    ]);
    Route::get('/delete-blog/{id}', [
        'uses' => '\App\Http\Controllers\Admin\BlogController@deleteBlog',
        'as' => 'delete-blog',
    ]);
});
