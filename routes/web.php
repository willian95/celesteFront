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
    return view('comingsoon');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/equipo', function () {
    return view('equipo');
});


Route::get("proyectos", function(){

    return view("allProjects");

});

Route::get("proyecto/{slug}", function($slug){

    $project = DB::table("projects")->where("slug", $slug)->first();

    return view("single", ["project" => $project]);

});

Route::get("blogs", function(){

    return view("blogs");

});

Route::get("blog/{slug}", function($slug){

    $blog = DB::table("blogs")->where("slug", $slug)->first();

    return view("blog", ["blog" => $blog]);

});