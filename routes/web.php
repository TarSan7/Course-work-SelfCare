<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Http\Requests\CommentRequest;
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

Route::get('/', [MainController::class, 'firstPage']) -> name('main');

Route::get('/meditation', [MainController::class, 'meditationPage']) -> name('meditation');

Route::get('/yoga', [MainController::class, 'yogaPage']) -> name('yoga');

Route::get('/courseInfo{id}', function($id){
    $course = new Course();
    $advantages = $course->find($id)->advantages;
    $shedules= $course->find($id)->schedules;
    $en_name = $course->find($id)->en_name;
    return view('courseInfo', ['id'=>$id, 'advantages'=>$advantages, 'schedules'=>$shedules, 'en_name'=>$en_name]);
}) -> name('courseInfo');

Route::get('/courses', [MainController::class, 'coursesPage'])->name('courses');

Route::get('/healthyFood', 'App\Http\Controllers\FoodController@getRecipies')->name('foodContainer');

Route::get('/recepie{id}', function($id){
    $par = new App\Http\Controllers\FoodController();
    return $par->getRecipe($id);
})->name('recepie');


Route::post('/main/submit', 'App\Http\Controllers\UserController@submit')->name('question-form');
Route::get('/card', 'App\Http\Controllers\CardController@index')->name('cardIndex');
Route::post('/basket{id}', 'App\Http\Controllers\CardController@addcourse')->name('basketid');

Route::post('/comment-form', 'App\Http\Controllers\UserController@addComment')->name('comment-form');

Route::post('/question-form', 'App\Http\Controllers\UserController@addQuestion')->name('question-form');

Route::post('/order-form', 'App\Http\Controllers\OrderController@submit')->name('order-form');

Route::post('/minus{id}', 'App\Http\Controllers\CardController@minus')->name('minus');
Route::post('/plus{id}', 'App\Http\Controllers\CardController@plus')->name('plus');
Route::post('/delete{id}', 'App\Http\Controllers\CardController@delete')->name('delete');

