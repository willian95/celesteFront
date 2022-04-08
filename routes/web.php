<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\DB;

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

/*Route::get('/', function () {
    return view('comingsoon');
});*/

Route::view('/', 'welcome');
Route::view('/nosotros', 'nosotros');
Route::view('/equipo', 'equipo');
Route::view("proyectos", "projects");
Route::view("grupo-tesa", "group-projects");
Route::get("proyecto/{slug}", function ($slug) {
    $project = DB::table("projects")->where("slug", $slug)->first();
    return view("single", ["project" => $project]);
});

Route::view("blogs", "blogs");

Route::get("blog/{slug}", function ($slug) {

    $blog = DB::table("blogs")->where("slug", $slug)->first();
    return view("blog", ["blog" => $blog]);
});

Route::post("/send/message", [ContactController::class, "sendEmail"]);
