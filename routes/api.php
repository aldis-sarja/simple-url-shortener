<?php

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

Route::get('/test', function (Request $request) {
    return response()->json("WTF?!");
    $url = new \App\Models\ShortenUrl([
        'long_url' => 'https://medium.com/next02',
    ]);
//    $url->long_url = 'https://medium.com/@sandeep4.verma/system-design-scalable-url-shortener-service-like-tinyurl-106f30f23a82';
    $url->save();
    $id = $url->id;
    echo "New ID: {$id}\n";
    $url->short_url = 'medium.com/shnxt' . $id;
    $url->update();

});

Route::post('/create', [\App\Http\Controllers\ShortenUrlController::class, 'create']);
Route::get('/{url}', [\App\Http\Controllers\ShortenUrlController::class, 'get']);
