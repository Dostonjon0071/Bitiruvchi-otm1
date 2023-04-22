<?php
// die('gdrgdg');
// dd('dsff');

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
// use Telegram;
use Telegram\Bot\Laravel\Facades\Telegram as FacadesTelegram;

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




 //================= User Controller =======================

//  Route::post('/dashboard', function() {
//     FacadesTelegram::sendMessage([
//         'chat_id' => '989898566',
//         'text' => 'Hello world!'
//     ]);
//     return;
// });


// Route::post('/bot/getupdates', function() {
//     $updates = FacadesTelegram::getUpdates();
//     return (json_encode($updates));
// });

Route::get('/clear', function() {
    Artisan::call('config:cache');
     Artisan::call('cache:clear');
     Artisan::call('config:clear');
     Artisan::call('view:clear');
     Artisan::call('route:clear');
     exec('rm -f ' . storage_path('logs/.log'));
     exec('rm -f ' . base_path('.log'));
     return "Cache is cleared";
     })->name('clear.cache');


Route::get('/dashboard','UserController@dashboard')->name('admin.dashboard');

// Route::get('/talim','TalimEndController@home')->name('home');


Route::get('/','UserController@main')->name('main.tables');
Route::get('/news','UserController@news')->name('new.table');

Route::match(['get', 'post'],'/news/create', 'UserController@newsTable')->name('news.create');
// Route::get('/new/destroy/{id}','UserController@newDestroy')->name('new.destroy');
Route::get('/departments','DepartmentController@index')->name('departments.index');
Route::get('/departments/show/{id}','TeacherController@show')->name('department.show');



Route::get('/login/form','UserController@login_blade')->name('admin.login');

Route::match(['get', 'post'],'/users/login', 'UserController@login_form')->name('user.login');
Route::get('/logout', 'UserController@logout')->name('logout');

//  product
Route::get('/product/table','UserController@productTable')->name('product.tables');
Route::match(['get', 'post'],'/product/table/create', 'UserController@create')->name('user.create');

Route::get('/product/show/{id}','UserController@productShow')->name('product.show');
Route::get('/product/table/edit/{id}','UserController@productEdit')->name('product.edit');
Route::post('/product/table/update','UserController@productUpdate')->name('product.update');
Route::get('/product/table/destroy/{id}','UserController@productDestroy')->name('product.destroy');


Route::get('/user/table/admin','UserController@productTableForUser')->name('product.tables_for_user');
Route::get('/user/table/user','UserController@productTableForUserNew')->name('product.tables_for_user_new');
Route::get('/user/table/front','UserController@productTableForUserNewFront')->name('product.tables_for_user_new_front');
// Route::get('/education/table/front','UserController@productTableForeducationNewFront')->name('product.tables_for_education_new_front');
Route::get('/logout', 'UserController@logout')->name('logout');

//announcement->for admin
Route::match(['get', 'post'],'/announcement/table/create', 'AnnouncementController@create')->name('announcement.create');
Route::get('/announcement/table','AnnouncementController@index')->name('announcement.tables');
Route::get('/announcement/show/{id}','AnnouncementController@show')->name('announcement.show');
Route::get('/announcement/table/edit/{id}','AnnouncementController@edit')->name('announcement.edit');
Route::post('/announcement/table/update','AnnouncementController@announcementUpdate')->name('announcement.update');
Route::get('/announcement/table/destroy/{id}','AnnouncementController@destroy')->name('announcement.destroy');


 //announcement->for user
Route::get('/announcement/table/user','AnnouncementController@userAnnouncement')->name('announcement.tables_for_user');

// // order

// departments->for admin  department.create'
Route::match(['get', 'post'],'/department/table/create', 'DepartmentController@create')->name('department.create');
Route::get('/department/table/admin','DepartmentController@adminIndex')->name('department.tables_for_admin');
Route::get('/department/show/{id}','DepartmentController@show')->name('admin_department.show');
Route::get('/department/table/edit/{id}','DepartmentController@edit')->name('department.edit');
Route::post('/department/table/update','DepartmentController@update')->name('department.update');
Route::get('/department/table/destroy/{id}','DepartmentController@destroy')->name('department.destroy');




// teacher->for admin  department.create'
Route::match(['get', 'post'],'/teacher/table/create', 'TeacherController@create')->name('teacher.create');
Route::get('/teacher/table/admin','TeacherController@index')->name('teacher.for_admin');
Route::get('/teacher/show/{id}','TeacherController@adminShow')->name('teacher.show');
Route::get('/teacher/table/edit/{id}','TeacherController@edit')->name('teacher.edit');
Route::post('/teacher/table/update','TeacherController@update')->name('teacher.update');
Route::get('/teacher/table/destroy/{id}','TeacherController@destroy')->name('teacher.destroy');



// Route::get('/orders','OrderController@index')->name('orders.list');
// Route::get('/order/show/{id}','OrderController@orderShow')->name('order.show');

// // category
// Route::get('/categories','CategoryController@index')->name('categories.list');
// Route::match(['get', 'post'],'/category/table/create', 'CategoryController@create')->name('category.create');
// Route::get('/category/table/edit/{id}','CategoryController@edit')->name('category.edit');
// Route::post('/category/table/update','CategoryController@update')->name('category.update');
// Route::get('/category/table/destroy/{id}','CategoryController@destroy')->name('category.destroy');



// Route::get('/order/show/{id}','OrderController@orderShow')->name('order.show');

// // Route::get('/order/history','OrderController@games_history')->name('games.history');




// Route::get('/user/table/edit/{id}','UserController@edit')->name('customers.edit');
// Route::post('/user/table/update','UserController@update')->name('user.update');

// Route::get('/user/table/destroy/{id}','UserController@destroy')->name('customers.destroy');
// Route::get('/user/table_history/destroy/{id}','UserController@user_history_destroy')->name('customer_history.destroy');







