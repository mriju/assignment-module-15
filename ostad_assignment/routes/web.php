<?php
use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\SingleActionControllers;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/",[HomeController::class,'page']);
Route::get("/SingleAction",[SingleActionControllers::class]);
Route::get("/hello1",[DemoController::class, 'DemoAction'])->middleware([DemoMiddleware::class]);
Route::get("/hello/{key}",[DemoController::class, 'DemoAction1'])->middleware([DemoMiddleware::class]);
Route::get("/dashboard",[DemoController::class, 'Dashboard']);