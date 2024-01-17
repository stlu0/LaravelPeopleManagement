<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("hello", function () {
    return response()->json(["message" => "hello"]);
});

Route::group(["prefix" => "klasura/54342"], function () {
    Route::get("people", [PeopleController::class, "index"]);
    Route::get("people/{id}", [PeopleController::class, "show"]);
    Route::post("people", [PeopleController::class, "create"]);
    Route::put("people/{id}", [PeopleController::class, "update"]);
    Route::delete("people/{id}", [PeopleController::class, "destroy"]);
});