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

Route::get('/contact', function()
{
    return view('pages.contact');
});

Route::get('/about', function()
{
    return view('pages.about');
});

Route::get('/faq', function()
{
    return view('pages.faq');
});

Route::get('/login', function()
{
    return view('pages.login');
});

Route::get('/register', function()
{
    return view('auth.register');
})->name('register');

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('root');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('about', 'AboutController');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
Route::get('/leaderboard', 'ScoreController@index')->name('leaderboard');
Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/tafelindelingen', 'TableArrangementController@index')->name('tafelindelingen');
Route::get('/scores-invoeren', 'ScoresInputController@index')->name('scoresinvoeren');
Route::resource('players', 'PlayersController');
Route::resource('judges', 'JudgesController');
Route::resource('privileges', 'privilegesController');
Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
Route::resource('usersdashboard', 'UserController');
Route::resource('nieuwsfeed', 'NewNewsfeedController');
Route::resource('contact', 'ContactController');


