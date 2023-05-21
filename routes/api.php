<?php

use App\Http\Controllers\Api\ListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/list/consoles', [ListController::class, "getConsoles"]);
Route::get('/list/cartridges', [ListController::class, "getCartridges"]);
Route::get('/list/console-games/{consoleId}', [ListController::class, "getConsoleGames"]);
Route::get('/list/cartridge-games/{consoleId}', [ListController::class, "getCartridgeGames"]);
