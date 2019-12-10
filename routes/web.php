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
//Route::get('/', function () {
//    $newsfeeds = Newsfeed::all()->take(3);
//    list($first, $second, $third) = $newsfeeds;
//    return view('pages.welcome', compact('first', 'second', 'third'));
//});

Route::get('/contact', function()
{
    return View::make('pages.contact');
});

Route::get('/about', function()
{
    return View::make('pages.about');
});

Route::get('/faq', function()
{
    return View::make('pages.faq');
});



Route::get('/login', function()
{
    return View::make('pages.login');
});

Route::get('/administer', function()
{
    return View::make('auth.register');
});

Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/tafelindelingen', 'TafelindelingenController@index')->name('tafelindelingen');
Route::get('/scores-invoeren', 'ScoresInvoerenController@index')->name('scoresinvoeren');
Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
Route::get('/leaderboard', 'ScoreController@index')->name('Leaderboard');
Route::get('/faq', 'FaqController@index')->name('faq');
//Route::resource('players', 'PlayersController');
Route::get('/juryleden', 'JuryledenController@index')->name('juryleden');
Route::get('/tafelindelingen', 'TableArrangementController@index')->name('tafelindelingen');
//Route::get('/scores-invoeren', 'ScoresInputController@index')->name('scoresinvoeren');
Route::resource('players', 'PlayersController');
Route::resource('judges', 'JudgesController');
Route::get('/privileges', 'PrivilegesController@index')->name('privileges');
Route::get('/userdashboard', 'UserDashboardController@index')->name('userdashboard');
Route::resource('nieuwsfeed', 'NewNewsfeedController');

