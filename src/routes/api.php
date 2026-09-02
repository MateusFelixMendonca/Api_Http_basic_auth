<?php

use Illuminate\Support\Facades\Route;
use App\Services\ApiResponse;

Route::prefix('v1')->group(function(){
    require base_path('routes/api_v1.php');
});

Route::prefix('v2')->group(function(){
    require base_path('routes/api_v2.php');
});

Route::fallback(function(){
    return ApiResponse::error('Endpoint not found', 404);

});