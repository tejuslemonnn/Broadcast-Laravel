<?php

use App\Events\TestEvent;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/allUsers', [UserController::class, "getAllUser"]);
Route::get("/getMessage", [MessageController::class, "getMessages"]);

Route::get('/getAllMessage', function (){

    return response()->json([
        "Message" => Message::all()
    ]);
});


Route::get('/test', function (){
    event(new TestEvent());

    return "message sent";
});