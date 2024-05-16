<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-cache', function () {
Artisan::call('config:clear');
Artisan::call('cache:clear');
return "Cache is cleared";
});
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
/*------- start website routes--------------*/
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('/saveuser', 'App\Http\Controllers\Auth\LoginController@saveuser')->name('saveuser');
Route::get('/userlogin', 'App\Http\Controllers\Auth\LoginController@userlogin')->name('userlogin');
Route::post('/actionlogin', 'App\Http\Controllers\Auth\LoginController@actionlogin')->name('actionlogin');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');
Route::get('/blog', 'App\Http\Controllers\HomeController@blog')->name('blog');
Route::get('/blogdetail/{id}', 'App\Http\Controllers\HomeController@blogdetail')->name('blogdetail');
Route::get('/podcast', 'App\Http\Controllers\HomeController@podcast')->name('podcast');
Route::post('/searchpodcast', 'App\Http\Controllers\HomeController@searchpodcast')->name('searchpodcast');
Route::get('/podcastdetail/{id}', 'App\Http\Controllers\HomeController@podcastdetail')->name('podcastdetail');
Route::get('/episode/{id}', 'App\Http\Controllers\HomeController@episode')->name('episode');
Route::get('/episodedetail/{id}', 'App\Http\Controllers\HomeController@episodedetail')->name('episodedetail');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
Route::get('/subscribe', 'App\Http\Controllers\HomeController@subscribe')->name('subscribe');
Route::get('/privacypolicy', 'App\Http\Controllers\HomeController@privacypolicy')->name('privacypolicy');
Route::get('/termandconditions', 'App\Http\Controllers\HomeController@termandconditions')->name('termandconditions');
Route::get('/gratuity', 'App\Http\Controllers\HomeController@gratuity')->name('gratuity');
Route::post('/savecontact', 'App\Http\Controllers\HomeController@savecontact')->name('savecontact');
Route::post('/savenewsletter', 'App\Http\Controllers\Auth\LoginController@savenewsletter')->name('savenewsletter');
Route::post('/getintouch', 'App\Http\Controllers\HomeController@getintouch')->name('getintouch');
Route::post('/downloadebook', 'App\Http\Controllers\HomeController@downloadebook')->name('downloadebook');
Route::post('/ajaxpodcastlist', 'App\Http\Controllers\HomeController@ajaxpodcastlist')->name('ajaxpodcastlist');
Route::post('/ajaxepisodelist', 'App\Http\Controllers\HomeController@ajaxepisodelist')->name('ajaxepisodelist');
Route::post('/ajaxbloglist', 'App\Http\Controllers\HomeController@ajaxbloglist')->name('ajaxbloglist');
Route::get('/podcast-feeds', 'App\Http\Controllers\HomeController@feed')->name('podcast-feeds');
/*------- admin routes--------------*/
Route::get('/admin', 'App\Http\Controllers\Auth\AdminLoginController@showAdminLoginForm')->name('/admin');
Route::post('/adminLogin', 'App\Http\Controllers\Auth\AdminLoginController@adminLogin')->name('adminLogin');
Route::get('/adminlogout', 'App\Http\Controllers\Auth\AdminLoginController@adminlogout')->name('adminlogout');
Route::get('admin/dashboard', 'App\Http\Controllers\Admin\DashboardController@admin_dashboard')->name('admin/dashboard');
Route::get('admin/profile', 'App\Http\Controllers\Admin\DashboardController@admin_profile')->name('admin/profile');
Route::post('admin_update_profile', 'App\Http\Controllers\Admin\DashboardController@admin_update_profile')->name('admin_update_profile');
Route::get('admin/changePassword', 'App\Http\Controllers\Admin\DashboardController@changePassword')->name('admin/changePassword');
Route::post('admin_update_password', 'App\Http\Controllers\Admin\DashboardController@admin_update_password')->name('admin_update_password');
// category
Route::get('admin/category_list', 'App\Http\Controllers\Admin\CategoryController@category_list')->name('admin/category_list');
Route::post('category_save', 'App\Http\Controllers\Admin\CategoryController@category_save')->name('category_save');
Route::post('category_getvalue', 'App\Http\Controllers\Admin\CategoryController@category_getvalue')->name('category_getvalue');
Route::post('category_update', 'App\Http\Controllers\Admin\CategoryController@category_update')->name('category_update');
Route::get('category_delete/{id}', 'App\Http\Controllers\Admin\CategoryController@category_delete')->name('category_delete');
// company
Route::get('admin/company', 'App\Http\Controllers\Admin\CompanyController@company')->name('admin/company');
Route::post('company_save', 'App\Http\Controllers\Admin\CompanyController@company_save')->name('company_save');
Route::post('company_getvalue', 'App\Http\Controllers\Admin\CompanyController@company_getvalue')->name('company_getvalue');
Route::post('company_update', 'App\Http\Controllers\Admin\CompanyController@company_update')->name('company_update');
Route::get('company_delete/{id}', 'App\Http\Controllers\Admin\CompanyController@company_delete')->name('company_delete');
// banner
Route::get('admin/banner', 'App\Http\Controllers\Admin\HomeController@banner')->name('admin/banner');
Route::post('updatebanner', 'App\Http\Controllers\Admin\HomeController@updatebanner')->name('updatebanner');
// podcast
Route::get('admin/podcast', 'App\Http\Controllers\Admin\PodcastController@podcast_list')->name('admin/podcast');
Route::get('admin/addpodcast', 'App\Http\Controllers\Admin\PodcastController@addpodcast')->name('admin/addpodcast');
Route::post('podcast_save', 'App\Http\Controllers\Admin\PodcastController@podcast_save')->name('podcast_save');
Route::get('admin/editpodcast/{id}', 'App\Http\Controllers\Admin\PodcastController@editpodcast')->name('admin/editpodcast');
Route::post('podcast_update', 'App\Http\Controllers\Admin\PodcastController@podcast_update')->name('podcast_update');
Route::get('admin/viewpodcast/{id}', 'App\Http\Controllers\Admin\PodcastController@viewpodcast')->name('admin/viewpodcast');
Route::get('podcast_delete/{id}', 'App\Http\Controllers\Admin\PodcastController@podcast_delete')->name('podcast_delete');
Route::post('podcastposition', 'App\Http\Controllers\Admin\PodcastController@podcastposition')->name('podcastposition');
// episode
Route::get('admin/episode', 'App\Http\Controllers\Admin\PodcastController@episode_list')->name('admin/episode');
Route::get('admin/addepisode', 'App\Http\Controllers\Admin\PodcastController@addepisode')->name('admin/addepisode');
Route::post('episode_save', 'App\Http\Controllers\Admin\PodcastController@episode_save')->name('episode_save');
Route::get('admin/editepisode/{id}', 'App\Http\Controllers\Admin\PodcastController@editepisode')->name('admin/editepisode');
Route::post('episode_update', 'App\Http\Controllers\Admin\PodcastController@episode_update')->name('episode_update');
Route::get('admin/viewepisode/{id}', 'App\Http\Controllers\Admin\PodcastController@viewepisode')->name('admin/viewepisode');
Route::get('episode_delete/{id}', 'App\Http\Controllers\Admin\PodcastController@episode_delete')->name('episode_delete');
Route::post('getpodcast', 'App\Http\Controllers\Admin\PodcastController@getpodcast')->name('getpodcast');
Route::post('updateposition', 'App\Http\Controllers\Admin\PodcastController@updateposition')->name('updateposition');
// blog
Route::get('admin/bloglist', 'App\Http\Controllers\Admin\BlogController@blog_list')->name('admin/bloglist');
Route::get('admin/addblog', 'App\Http\Controllers\Admin\BlogController@addblog')->name('admin/addblog');
Route::post('blog_save', 'App\Http\Controllers\Admin\BlogController@blog_save')->name('blog_save');
Route::get('admin/editblog/{id}', 'App\Http\Controllers\Admin\BlogController@editblog')->name('admin/editblog');
Route::post('blog_update', 'App\Http\Controllers\Admin\BlogController@blog_update')->name('blog_update');
Route::get('admin/viewblog/{id}', 'App\Http\Controllers\Admin\BlogController@viewblog')->name('admin/viewblog');
Route::get('blog_delete/{id}', 'App\Http\Controllers\Admin\BlogController@blog_delete')->name('blog_delete');
// cms
Route::get('admin/cms', 'App\Http\Controllers\Admin\CmsController@cms')->name('admin/cms');
Route::get('admin/editCms/{id}', 'App\Http\Controllers\Admin\CmsController@editCms')->name('admin/editCms');
Route::post('updateCms', 'App\Http\Controllers\Admin\CmsController@updateCms')->name('updateCms');
Route::get('admin/aboutlist', 'App\Http\Controllers\Admin\CmsController@aboutlist')->name('admin/aboutlist');
Route::post('updateabout', 'App\Http\Controllers\Admin\CmsController@updateabout')->name('updateabout');
Route::get('admin/homelist', 'App\Http\Controllers\Admin\CmsController@homelist')->name('admin/homelist');
Route::post('updatehome', 'App\Http\Controllers\Admin\CmsController@updatehome')->name('updatehome');
// Settings
Route::get('admin/settings', 'App\Http\Controllers\Admin\SettingController@settings')->name('admin/settings');
Route::post('settingsave', 'App\Http\Controllers\Admin\SettingController@settingsave')->name('settingsave');
Route::post('logosave', 'App\Http\Controllers\Admin\SettingController@logosave')->name('logosave');
// users
Route::get('admin/users', 'App\Http\Controllers\Admin\UsersController@userList')->name('admin/users');
Route::get('deleteuser/{id}', 'App\Http\Controllers\Admin\UsersController@deleteuser')->name('deleteuser');
// ebook
Route::get('admin/ebook', 'App\Http\Controllers\Admin\HomeController@ebook')->name('admin/ebook');
Route::post('updateebook', 'App\Http\Controllers\Admin\HomeController@updateebook')->name('updateebook');
Route::get('admin/downloadslist', 'App\Http\Controllers\Admin\HomeController@downloadslist')->name('admin/downloadslist');
Route::get('deletedownload/{id}', 'App\Http\Controllers\Admin\HomeController@deletedownload')->name('deletedownload');
// news letters
Route::get('admin/newsletters', 'App\Http\Controllers\Admin\HomeController@newsletter_list')->name('admin/newsletters');
Route::get('deleteemail/{id}', 'App\Http\Controllers\Admin\HomeController@deleteemail')->name('deleteemail');
// get in touch
Route::get('admin/getintouchlist', 'App\Http\Controllers\Admin\HomeController@getintouchlist')->name('getintouchlist');
Route::get('admin/viewgetintouch/{id}', 'App\Http\Controllers\Admin\HomeController@viewgetintouch')->name('viewgetintouch');
Route::get('deletegetintouch/{id}', 'App\Http\Controllers\Admin\HomeController@deletegetintouch')->name('deletegetintouch');
// conatct list
Route::get('admin/contactList', 'App\Http\Controllers\Admin\HomeController@contactList')->name('admin/contactList');
Route::get('admin/viewcontact/{id}', 'App\Http\Controllers\Admin\HomeController@viewcontact')->name('viewcontact');
Route::get('deletecontact/{id}', 'App\Http\Controllers\Admin\HomeController@deletecontact')->name('deletecontact');
