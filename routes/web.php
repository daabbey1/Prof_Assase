<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\VoteController;

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
    return view('pages.home');
});

Route::get('/test', function(){
	return view('pages.paralax');
});

Route::get('/publications', function(){
	return view('pages.publication');
});

Route::get('/projects', function(){
	return view('pages.project');
});

Route::get('/contacts', function(){
	return view('pages.contact');
});