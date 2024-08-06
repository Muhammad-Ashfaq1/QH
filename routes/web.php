<?php

use Illuminate\Support\Facades\Route;

 //use App\Http\Controllers\ContactUsController;
 use App\Http\Controllers\ContactUsController;
 //use App\Http\Controllers\ProductController;
 use App\Http\Controllers\Admin\FrontendController;
 use App\Http\Controllers\Admin\ProductController;
 use App\Http\Controllers\ProductsController;
 use App\Http\Controllers\Admin\AuthController;
 use App\Http\Controllers\Admin\WarrantyController;;





Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/about-us', function () {
//     return view('partials.about-us');
// })->name('about.us');

Route::get('/contact-us', function () {
    return view('partials.contact-us');
})->name('contact.us');

Route::get('/products', function () {
    return view('partials.products');
})->name('products');

Route::get('/products/consumer', function () {
    return view('partials.products-consumer');
})->name('consumer');
Route::get('/products/professional', function () {
    return view('partials.products-professional');
})->name('professional');

Route::get('/products-list', function () {
    return view('partials.products-list');
})->name('products-list');

Route::get('/single-product', function () {
    return view('partials.single-product');
})->name('single-product');
//my code backend


Route::get('admin/login', [FrontendController::class,'login']);


Route::middleware('auth')->controller(FrontendController::class)->prefix('admin')->group(function(){

    Route::get('/about', 'about')->name('about.us');
    Route::get('/banner', 'banner');
    Route::get('/consumer', 'consumer');
   // Route::get('/contact', 'contact');
    Route::get('/old/product', 'oldproduct');
    Route::get('/old/single/product', 'oldsingleproduct');
    Route::get('/product/data', 'productdata');
    Route::get('/product/list', 'productlist
    ');
    Route::get('/product/group', 'productsgroup')->name('product.group');
    Route::get('/video', 'video');
    Route::get('/timeline', 'timeline');
    Route::get('/support', 'suport');
    Route::get('/single/product', 'singleproduct');
    Route::get('/projects', 'projects');
  //  Route::get('/professional', 'professional');
    Route::get('/warranty', 'indexwarranty');
    Route::get('/edit/warranty', 'editwarranty');
    Route::get('/product', 'indexp');
    Route::get('/edit/product', 'indexproduct');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

    Route::controller(App\Http\Controllers\Admin\AuthController::class)->prefix('admin')->group( function () {
        // Route::get('/', 'loginForm')->name('login');
         Route::post('/logindata', 'login')->name('auth.login');
         Route::get('/register', 'register')->name('register');
         Route::post('/register','register')->name('register');
         Route::post('/logout', 'logout')->name('auth.logout');
        // Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
        // Route::post('/forgot-password', 'forgotPassword')->name('forgot-password');
        // Route::get('/reset-password/{token}', 'resetPassword')->name('reset-password');
       //  Route::post('/reset-password', 'resetPassword')->name('reset-password');

     });


     Route::controller(ProductController::class)->prefix('product')->group(function(){

        //  Route::get('/products', 'products')->name('products');
          Route::get('/', 'index')->name('admin.product');
          Route::post('/add', 'store')->name('product.store');
          Route::get('edit/{id}', 'edit')->name('product.edit');
          Route::get('delete/{id}', 'delete')->name('product.delete');
         // Route::get('/projects', 'projects')->name('projects');
         // Route::get('/product-list/{id?}', 'productList')->name('product-list');
      //   Route::get('/products', 'products')->name('products');
              Route::get('/products/consumer', 'consumer')->name('consumer');
            // Route::get('/products/professional', 'professional')->name('professional');
              Route::get('/projects', 'projects')->name('projects');
             Route::get('/product-list/{id?}', 'productList')->name('product-list');
             Route::get('get-all-product-type', 'getAllProductType')->name('product.delete');



      });

      Route::controller(WarrantyController::class)->prefix('warranty')->middleware('auth')->group(function () {
        Route::get('/', 'getAllWarranties')->name('warranty.index');
        Route::post('add', 'store')->name('warranty.store');
        Route::get('/edit/{id}','edit')->name('warranty.edit');
        Route::delete('delete/{id}', 'delete')->name('warranty.delete');
        //image
        Route::get('view/{id}', 'data')->name('image.view');
    });

    Route::controller(ContactUsController::class)->prefix('contact-us')->group(function (){
    //   Route::get('/', 'index')->name('contact.us');
     Route::post('/add', 'store')->name('contact-us.add');
        Route::get('/show', 'show')->name('admin.contact-us');
        Route::get('delete/{id}', 'delete')->name('queries.delete');

    });

    //
    Route::get('/support', [ContactUsController::class, 'support'])->name('support');


