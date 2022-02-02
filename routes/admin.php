
<?php

use Illuminate\Support\Facades\Route;


// Route::get('/login', function(){
//     return view('admin.login');
// });
// Route::get('/',)

Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    // Route::get('register', 'RegisterController@register')->name('register');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    
    // Route::get('login/{provider}', 'LoginController@redirectToProviderLinkedin');
    // Route::get('{provider}/callback', 'LoginController@handleProviderCallback');

    Route::get('login/linkedin', 'LoginController@redirectToProviderLinkedin')->name('linkedin');
    Route::get('login/linkedin/callback', 'LoginController@handleProviderCallback');
    
    
    // Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

    // Route::get('login','LoginController@loginPage')->name('login');
    // Route::get('register','LoginController@register')->name('register');
    // Route::post('login','LoginController@login');
    // Route::post('logout','LoginController@logout')->name('logout');
    // Route::get('profile','LoginController@profile')->name('profile');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('dashboard/content', function () {
        return view('admin.dashboard.content');
    })->name('main');
    Route::get('dashboard/profile', function () {
        return view('admin.dashboard.profile');
    })->name('profile');
    Route::get('dashboard/change-password', function () {
        return view('admin.dashboard.change-password');
    });
    Route::post('change-password', 'Auth\ChangepasswordController@changepassword')->name('changepassword');
    Route::get('change-restaurant-status/{restaurant}', 'Auth\ChangepasswordController@changestatus')->name('changestatus');
    Route::get('change-restaurant-foodstatus/{restaurant}', 'Auth\ChangepasswordController@changefoodstatus')->name('changefoodstatus');
    Route::get('change-category-status/{category}', 'Auth\ChangepasswordController@changecategory')->name('changecategory');
    Route::get('change-subcategory-status/{subcategory}', 'Auth\ChangepasswordController@changesubcategory')->name('changesubcategory');
    Route::get('change-subcategory-status/{subcategory}', 'Auth\ChangepasswordController@changesubcategory')->name('changesubcategory');
    Route::post('edit-restaurant', 'Auth\ChangepasswordController@changerestaurant')->name('editrestaurant');
    Route::post('edit-category', 'Auth\ChangepasswordController@editcategory')->name('editcategory');
    Route::get('edit-category', 'Auth\ChangepasswordController@updateshow')->name('editprofile');
    // Route::get('edit-category', 'ChangepasswordController@editcategory')->name('edit_category');
    Route::post('update-profile', 'Auth\ChangepasswordController@update')->name('updateprofile');
    Route::post('mail/{id}', 'Auth\ChangepasswordController@mail')->name('mail');
    
    Route::resource('dashboard/restaurant', Auth\RestaurantController::class);
    Route::resource('dashboard/category', Auth\CategoryController::class);
    Route::resource('dashboard/subcategory', Auth\SubcategoryController::class);
    Route::resource('dashboard/user', Auth\UserController::class);
    Route::resource('dashboard/food', Auth\FoodController::class);
    Route::resource('dashboard/about_us', Auth\About_usController::class);
    Route::resource('dashboard/service', Auth\ServiceController::class);
    Route::resource('dashboard/news', Auth\NewsController::class);
    Route::resource('dashboard/payment', Auth\PaymentController::class);
    Route::get('paymentcustomer', 'Auth\PaymentController@indexCustomers')->name('paymentcustomer');
    Route::get('showpaymentcustomer/{id}', 'Auth\PaymentController@shpwPaymentCustomer')->name('showpaymentcustomer');
    Route::post('destroypaymentcustomer/{id}', 'Auth\PaymentController@destroyPaymentCustomer')->name('destroypaymentcustomer');
    Route::get('setting', 'Auth\SettingController@setting')->name('setting');
    Route::post('setting', 'Auth\SettingController@settingStore')->name('settingStore');

    Route::get('dashboard/feedback', 'Auth\FeedbackController@showform');
        // datatable change status
    // Route::get('users', ['uses'=>'ChangepasswordController@status', 'as'=>'users.status']);
    
});

// // Route::get('back'. function(){
// //   return view('admin.category.index');
// // })->name('back');


// Route::resource("category", 'Auth\CategoryController');
// Route::resource("blogs", 'Auth\BlogController');
// Route::get("userlist", 'Auth\UserController@showUser');
// Route::get('/status-update/{category}','Auth\CategoryController@statusUpdate')->name('status');
// Route::get('/status-updates/{blog}','Auth\BlogController@statusChange')->name('change');