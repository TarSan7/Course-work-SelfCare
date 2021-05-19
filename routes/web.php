<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;

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

Route::get('/main', [MainController::class, 'firstPage']) -> name('main');

Route::get('/meditation', [MainController::class, 'meditationPage']) -> name('meditation');

Route::get('/yoga', [MainController::class, 'yogaPage']) -> name('yoga');

Route::get('/courseInfo{id}', function($id){
    $course = new Course();
    $advantages = $course->find($id)->advantages;
    $shedules= $course->find($id)->schedules;
    return view('courseInfo', ['id'=>$id, 'advantages'=>$advantages, 'schedules'=>$shedules]);
}) -> name('courseInfo');
Route::get('/courses', [MainController::class, 'coursesPage'])->name('courses');
Route::get('/healthyFood', 'App\Http\Controllers\FoodController@getRecipies')->name('foodContainer');

Route::get('/recepie{id}', function($recepieId){
    $par = new App\Http\Controllers\FoodController();
    return $par->getRecipe($recepieId);
})->name('recepie');
