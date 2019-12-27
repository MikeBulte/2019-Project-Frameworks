<?php

use App\Newsfeed;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function()
{
    return view('pages.login');
});

Route::get('/register', function()
{
    return view('auth.register');
})->name('register');

Auth::routes();

// Main routes
Route::resource('/', 'WelcomeController');
Route::resource('home', 'HomeController');

// Page dir routes
Route::resource('about', 'AboutController');
Route::resource('faq', 'FaqController');
Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
Route::resource('contact', 'ContactController');

// UserDashboard routes
Route::resource('usersdashboard', 'UserController');
Route::get('/leaderboard', 'ScoreController@index')->name('leaderboard');

// Dashboard Routes
Route::resource('dashboard', 'DashboardController');
Route::resource('table-arrangement', 'TableArrangementController');
Route::resource('score-input', 'ScoresInputController');
Route::resource('players', 'PlayersController');
Route::resource('judges', 'JudgesController');
Route::resource('privileges', 'PrivilegesController');
Route::resource('nieuwsfeed', 'NewNewsfeedController');
