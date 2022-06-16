<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TelegramController;



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


// welcome start 
Route::get('/', [MainController::class, 'welcome'])->name('home');
Route::get('/contact', [MainController::class, 'contact']);
Route::POST('/send_book', [MainController::class, 'send_book']);
Route::get('/portfoliodetails/{id}', [MainController::class, 'portfoliodetails']);


// Route::POST('/send_book', [TelegramController::class, 'get_data_from_tg']);

// Route::any('telegramsecret',
//     [\App\Http\Controllers\TelegramController::class,
//         'get_data_from_tg']);



// welcome end 


// Если пользватель  авторизовался Start
Route::middleware('auth')->group(function () {
    Route::get('/exit', [AuthController::class, 'exit']);
    
    // admin layout start
    Route::get('/admin_layout', [AdminController::class, 'admin_home'])->name('admin_layout');
    // admin layout end 
    
    
    Route::get('/cp_home', [AdminController::class, 'home'])->name('cp_home');
    
    
    
    
    // admin navbar start
    Route::get('/admin_navbar', [AdminController::class, 'admin_navbar'])->name('admin_navbar');
    Route::post('/add_navbar', [AdminController::class, 'add_navbar']);
    Route::post('/edit_navbar', [AdminController::class, 'edit_navbar']);
    Route::get('/delete_navbar', [AdminController::class, 'delete_navbar']);
    // admin navbar end 
    
    
    // admin home start
    Route::get('/admin_home', [AdminController::class, 'admin_home'])->name('admin_home');
    Route::post('/add_home', [AdminController::class, 'add_home']);
    Route::post('/edit_home/{id}', [AdminController::class, 'edit_home']);
    Route::get('/delete_home/{id}', [AdminController::class, 'delete_home']);
    // admin home end 
    
    // admin about start
    Route::get('/admin_about', [AdminController::class, 'admin_about'])->name('admin_about');
    Route::post('/add_about', [AdminController::class, 'add_about']);
    Route::post('/edit_about', [AdminController::class, 'edit_about']);
    Route::get('/delete_about', [AdminController::class, 'delete_about']);
    // admin about end 
    
    // admin clients section start
    Route::get('/admin_clients_section', [AdminController::class, 'admin_clients_section'])->name('admin_clients_section');
    // Route::post('/add_clients_section', [AdminController::class, 'add_clients_section']);
    Route::post('/edit_clients_section/{id}', [AdminController::class, 'edit_clients_section']);
    Route::get('/delete_clients_section/{id}', [AdminController::class, 'delete_clients_section']);
    // admin clients section end 

   // admin PointGallery start
   Route::post('/add_point_gallery', [AdminController::class, 'add_point_gallery']);
   Route::post('/edit_point_gallery/{id}', [AdminController::class, 'edit_point_gallery']);
   Route::get('/delete_point_gallery/{id}', [AdminController::class, 'delete_point_gallery']);
   // admin PointGallery end 
    

    // admin pricing start
    Route::get('/admin_pricing', [AdminController::class, 'admin_pricing'])->name('admin_pricing');
    Route::post('/add_pricing', [AdminController::class, 'add_pricing']);
    Route::post('/edit_pricing/{id}', [AdminController::class, 'edit_pricing']);
    Route::get('/delete_pricing/{id}', [AdminController::class, 'delete_pricing']);
    // admin pricing end 

    // admin_servis start
    Route::get('/admin_servis', [AdminController::class, 'admin_servis'])->name('admin_servis');
    Route::post('/add_servis', [AdminController::class, 'add_servis']);
    Route::post('/edit_servis/{id}', [AdminController::class, 'edit_servis']);
    Route::get('/delete_servis/{id}', [AdminController::class, 'delete_servis']);
    //admin_servis end 
    

    // PortfolioCard START 
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::post('/add_cart_gallery', [AdminController::class, 'add_cart_gallery']);
    Route::post('/edit_gallery/{id}', [AdminController::class, 'edit_gallery']);
    Route::get('/delete_gallery/{id}', [AdminController::class, 'delete_gallery']);
    
    // PortfolioCard END 

    // team Section start
    Route::get('/admin_team', [AdminController::class, 'admin_team'])->name('admin_team');
    Route::post('/add_team', [AdminController::class, 'add_team']);
    Route::post('/edit_team/{id}', [AdminController::class, 'edit_team']);
    Route::get('/delete_team/{id}', [AdminController::class, 'delete_team']);

    Route::get('/admin_team_icons', [AdminController::class, 'admin_team_icons'])->name('admin_team_icons');
    Route::post('/add_team_icon/{id}', [AdminController::class, 'add_team_icon']);
    Route::post('/edit_team_icon/{id}', [AdminController::class, 'edit_team_icon']);
    Route::get('/delete_team_icon/{id}', [AdminController::class, 'delete_team_icon']);

    Route::get('/admin_portfoliodetails', [AdminController::class, 'admin_portfoliodetails'])->name('admin_portfoliodetails');
    Route::post('/add_portfoliodetails', [AdminController::class, 'add_portfoliodetails']);
    Route::post('/edit_portfoliodetails/{id}', [AdminController::class, 'edit_portfoliodetails']);
    Route::get('/delete_portfoliodetails/{id}', [AdminController::class, 'delete_portfoliodetails']);
    //Admin_team Section end 
    
    // Contact start
    Route::get('/admin_contact', [AdminController::class, 'admin_contact'])->name('admin_contact');
    // Route::post('/add_contact', [AdminController::class, 'add_contact']);
    Route::post('/edit_contact/{id}', [AdminController::class, 'edit_contact']);
    Route::get('/delete_contact/{id}', [AdminController::class, 'delete_contact']);
    //Contact end 

      // Faq Section start
      Route::get('/admin_faq', [AdminController::class, 'admin_faq'])->name('admin_faq');
      Route::post('/add_faq', [AdminController::class, 'add_faq']);
      Route::post('/edit_faq/{id}', [AdminController::class, 'edit_faq']);
      Route::get('/delete_faq/{id}', [AdminController::class, 'delete_faq']);
      //Faq Section end 


});

// Регистрация и авторизация Start 
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_process']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_process']);
});
// Регистрация и авторизация END 
// Если пользватель  авторизовался  END





