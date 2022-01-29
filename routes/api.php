<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
Route::apiResource('roles', \App\Http\Controllers\Api\RoleController::class);
Route::apiResource('permissions', \App\Http\Controllers\Api\PermissionController::class);
Route::apiResource('subjects', \App\Http\Controllers\Api\SubjectController::class);
Route::apiResource('{subject}/lessons', \App\Http\Controllers\Api\SubjectLessonController::class);
