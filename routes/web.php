<?php

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
Route::get('/', function () {
    return view('pages.welcome');
});

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

Route::get('/leaderboard', 'ScoreController@index')->name('Leaderboard');

Route::get('/login', function()
{
    return View::make('pages.login');
});

Route::get('/administer', function()
{
    return View::make('auth.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/tafelindelingen', 'TableArrangementController@index')->name('tafelindelingen');
Route::get('/scores-invoeren', 'ScoresInputController@index')->name('scoresinvoeren');

Route::resource('players', 'PlayersController');

Route::get('/juryleden', 'JudgesController@index')->name('juryleden');
Route::get('/privileges', 'PrivilegesController@index')->name('privileges');

Route::get('/userdashboard', 'UserDashboardController@index')->name('userdashboard');

Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
