<?php

use Illuminate\Http\Request;
use App\Checker;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API endpoint to get all fram DB
Route::get('/checkers', function () {
  return Checker::all();
});
