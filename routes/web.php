<?php

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
Route::get('/', 'user\indexController@index')->name('index');
Route::post('/login_form', 'user\indexController@saveCaptin')->name('save_captin');
Route::get('/contact/اتصل بنا', 'user\ContactController@index')->name('contact');
Route::post('/contact', 'user\ContactController@sendEmail')->name('sendmail');
Route::get('/about/من نحن', 'user\AboutController@index')->name('about');
///advantages
Route::get('/advantages/مزايا_التسجيل', 'user\AdvantureController@index')->name('advantages');
Route::get('/login/تسجيل', 'user\AdvantureController@index');

Route::get('/advantages/{id}/{permalink}', 'user\AdvantureController@getOne');
///information
Route::get('/information/معلومات_مهمة', 'user\ArticalController@index')->name('information');
Route::get('/information/{id}/{permalink} ', 'user\ArticalController@getOne');
Route::get('/getcaptains', 'Admin\CaptinController@getcaptins', ['except' => ['show']]);



Route::get('/nav', function () {
   return view('layouts.navbar');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



//Admin routes
Route::prefix('admin-panel')->group(function () {

  //Auth routes
  Route::get('/', 'Auth\LoginController@showLoginForm')->name('home.login');
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');

  // Password Reset Routes...
  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset');


  Route::middleware('auth')->group(function () {
    //Dashboard
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/', 'Admin\DashboardController@index')->name('admin.home');

    //Admins
    Route::resource('/admins', 'Admin\AdminsController', ['except' => ['show']]);

  //captins
    Route::resource('/captins', 'Admin\CaptinController', ['except' => ['show']]);

    //Categories
    // Route::resource('/categories', 'Admin\CategoriesController', ['except' => ['show']]);

    //Products
    Route::resource('/products', 'Admin\ProductsController', ['except' => ['show']]);

    //Products gallery
    Route::get('/product-gallery/{product_id}/show', 'Admin\ProductGalleryController@show')->name('show.product.gallery');
    Route::get('/product-gallery/{product_id}/create', 'Admin\ProductGalleryController@create')->name('create.product.gallery');
    Route::post('/product-gallery/{product_id}/store', 'Admin\ProductGalleryController@store')->name('store.product.gallery');
    Route::delete('/product-gallery/{image_id}/destroy', 'Admin\ProductGalleryController@destroy')->name('destroy.product.gallery');

    //Banners
    Route::resource('/banners', 'Admin\BannersController', ['except' => ['show']]);

    //Agents
    // Route::resource('/agents', 'Admin\AgentsController', ['except' => ['show']]);

    //Jobs
    Route::resource('/jobs', 'Admin\JobsController', ['except' => ['show']]);

    //News
    Route::resource('/news', 'Admin\NewsController', ['except' => ['show']]);

    //Settings
    Route::get('/setting', 'Admin\SettingController@index')->name('setting.index');
    Route::put('/setting', 'Admin\SettingController@update')->name('setting.update');

    //Mails
    Route::resource('{status}/mails', 'Admin\MailsController', ['except' => ['create', 'edit', 'update', 'store']]);
    Route::post('/mails/{mail_id}/reply', 'Admin\MailsController@reply')->name('mails.reply');

    //Pages
    Route::get('/about', 'Admin\AboutController@index')->name('about.index');
    Route::put('/about', 'Admin\AboutController@update')->name('about.update');


    // Profile page
    Route::get('/profile', 'Admin\ProfileController@get')->name('admin.get.profile');
    Route::post('/profile', 'Admin\ProfileController@save')->name('admin.profile.save');
  });
});
