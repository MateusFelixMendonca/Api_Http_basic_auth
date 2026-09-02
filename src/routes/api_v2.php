<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V2\MainController;

Route::get('/status', function(){
    return response()->json(['status' => 'Version 2 API is running']);
});
 