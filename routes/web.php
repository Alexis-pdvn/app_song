<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('/', [FirstController::class, 'index']);

Route::get('/songs/create', [FirstController::class, "create"])->middleware('auth');
Route::post('/songs', [FirstController::class, "store"])->middleware('auth');

Auth::routes();

Route::get('/utilisateur/{id}', [FirstController::class, "utilisateur"])->where('id','[0-9]+');

Route::get('/suivre/{id}', [FirstController::class, "suivre"])->middleware('auth')->where('id','[0-9]+');

Route::get("/search/{search}", [FirstController::class, "search"]);

Route::post("/utilisateur/updateoverview", [FirstController::class, "updateoverview"])->middleware('auth');

Route::get("/newuser", function() {
    return redirect("/utilisateur/".Auth::id());
});

Route::post('edit', [FirstController::class, "update_avatar"]);