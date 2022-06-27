<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\frontview\FrontendController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\category\CategoryController;
use App\Http\Controllers\Backend\subcategory\SubCategoryController;
use App\Http\Controllers\Backend\banner\BannerController;
use App\Http\Controllers\Backend\unit\Unitcontroller;
use App\Http\Controllers\Backend\size\Sizecontroller;
use App\Http\Controllers\Backend\color\Colorcontroller;
use App\Http\Controllers\Backend\brand\Brandcontroller;
use App\Http\Controllers\Backend\product\Productcontroller;
use App\Http\Controllers\Backend\cart\CartController;
use App\Http\Controllers\Backend\chackout\ChackoutController;
use App\Http\Controllers\Backend\order\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::get('/product-view/{id}',[FrontendController::class, 'product_view'])->name('product_view');



// backend
  Route::get('admin', [AdminController::class, 'index'])->name('admin.login.submit');
  Route::post('admin/login', [AdminController::class, 'admin_login'])->name('admin.login');
 

  Route::group(['middleware'=>'admin'],function()
  {

     Route::get('admin/Dashboard', [DashboardController::class, 'admin_dashboard'])->name('admin.dashboard');
     Route::get('admin/logout', [AdminController::class, 'admin_logout'])->name('admin.logout');

  });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// <==================category start========================>

  Route::group(['name' => 'category', 'as' => 'category.'], function ()
   {

        Route::get('Add/category', [CategoryController::class, 'index'])->name('index');
        Route::POST('category-list-store', [CategoryController::class, 'store'])->name('store');
        Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('category-update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('category-datatable-list', [CategoryController::class, 'datatable'])->name('datatable');
        Route::get('category-destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });


  // <==================subcategory start========================>

  Route::group(['name' => 'subcategory', 'as' => 'subcategory.'], function ()
   {

        Route::get('Add/subcategory', [SubCategoryController::class, 'index'])->name('index');
        Route::POST('subcategory-list-store', [SubCategoryController::class, 'store'])->name('store');
        Route::get('/subcategory-edit/{id}', [SubCategoryController::class, 'edit'])->name('edit');
        Route::put('subcategory-update/{id}', [SubCategoryController::class, 'update'])->name('update');
        Route::get('subcategory-datatable-list', [SubCategoryController::class, 'datatable'])->name('datatable');
        Route::get('subcategory-destroy/{id}', [SubCategoryController::class, 'destroy'])->name('destroy');
    });


 // <==================Banner start========================>

  Route::group(['name' => 'banner', 'as' => 'banner.'], function ()
   {

        Route::get('Add/Banner', [BannerController::class, 'index'])->name('index');
        Route::POST('Banner-list-store', [BannerController::class, 'store'])->name('store');
        Route::get('/Banner-edit/{id}', [BannerController::class, 'edit'])->name('edit');
        Route::post('Banner-update/{id}', [BannerController::class, 'update'])->name('update');
        Route::get('Banner-datatable-list', [BannerController::class, 'datatable'])->name('datatable');
        Route::get('Banner-destroy/{id}', [BannerController::class, 'destroy'])->name('destroy');
    });


   // <==================Brand start========================>

  Route::group(['name' => 'brand', 'as' => 'brand.'], function ()
   {

        Route::get('Add/brand', [BrandController::class, 'index'])->name('index');
        Route::POST('brand-list-store', [BrandController::class, 'store'])->name('store');
        Route::get('/brand-edit/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::put('brand-update/{id}', [BrandController::class, 'update'])->name('update');
        Route::get('brand-datatable-list', [BrandController::class, 'datatable'])->name('datatable');
        Route::get('brand-destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');
    });


   // <==================Color start========================>

  Route::group(['name' => 'color', 'as' => 'color.'], function ()
   {

        Route::get('Add/color', [Colorcontroller::class, 'index'])->name('index');
        Route::POST('color-list-store', [Colorcontroller::class, 'store'])->name('store');
        Route::get('/color-edit/{id}', [Colorcontroller::class, 'edit'])->name('edit');
        Route::put('color-update/{id}', [Colorcontroller::class, 'update'])->name('update');
        Route::get('color-datatable-list', [Colorcontroller::class, 'datatable'])->name('datatable');
        Route::get('color-destroy/{id}', [Colorcontroller::class, 'destroy'])->name('destroy');
    });


     // <==================size start========================>

  Route::group(['name' => 'size', 'as' => 'size.'], function ()
   {

        Route::get('Add/size', [Sizecontroller::class, 'index'])->name('index');
        Route::POST('size-list-store', [Sizecontroller::class, 'store'])->name('store');
        Route::get('/size-edit/{id}', [Sizecontroller::class, 'edit'])->name('edit');
        Route::put('size-update/{id}', [Sizecontroller::class, 'update'])->name('update');
        Route::get('size-datatable-list', [Sizecontroller::class, 'datatable'])->name('datatable');
        Route::get('size-destroy/{id}', [Sizecontroller::class, 'destroy'])->name('destroy');
    });


    // <==================unit start========================>

  Route::group(['name' => 'unit', 'as' => 'unit.'], function ()
   {

        Route::get('Add/unit', [Unitcontroller::class, 'index'])->name('index');
        Route::POST('unit-list-store', [Unitcontroller::class, 'store'])->name('store');
        Route::get('/unit-edit/{id}', [Unitcontroller::class, 'edit'])->name('edit');
        Route::put('unit-update/{id}', [Unitcontroller::class, 'update'])->name('update');
        Route::get('unit-datatable-list', [Unitcontroller::class, 'datatable'])->name('datatable');
        Route::get('unit-destroy/{id}', [Unitcontroller::class, 'destroy'])->name('destroy');
    });


      // <==================product start========================>

  Route::group(['name' => 'product', 'as' => 'product.'], function ()
   {

        Route::get('Add/product', [Productcontroller::class, 'index'])->name('index');
        Route::POST('product-list-store', [Productcontroller::class, 'store'])->name('store');
        Route::get('/product-edit/{id}', [Productcontroller::class, 'edit'])->name('edit');
        Route::put('product-update/{id}', [Productcontroller::class, 'update'])->name('update');
        Route::get('product-datatable-list', [Productcontroller::class, 'datatable'])->name('datatable');
        Route::get('product-destroy/{id}', [Productcontroller::class, 'destroy'])->name('destroy');
        
    });

 // <==================cart start========================>
    Route::group(['name' => 'cart', 'as' => 'cart.'], function ()
   {

        Route::post('Add/cart/{id}', [CartController::class, 'add_to_cart'])->name('index');

        Route::get('cart', [CartController::class, 'add_to_cartpage'])->name('cart');

        Route::POST('cart-list-store', [CartController::class, 'store'])->name('store');
        Route::get('/cart-edit/{id}', [CartController::class, 'edit'])->name('edit');
        Route::post('cart-update/{id}', [CartController::class, 'update'])->name('update');
        Route::get('cart-datatable-list', [CartController::class, 'datatable'])->name('datatable');
        Route::get('cart-destroy/{id}', [CartController::class, 'destroy'])->name('destroy');
        
    });


 // <==================chackout========================>

        Route::group(['name' => 'chackout', 'as' => 'chackout.'], function ()
   {

        Route::get('Add/chackout', [ChackoutController::class, 'add_to_chackout'])->name('index');
    
    });

 // <==================order========================>

   Route::group(['name' => 'order', 'as' => 'order.'], function ()
   {

        Route::get('Add/order', [OrderController::class, 'add_to_order'])->name('index');
    
    });     