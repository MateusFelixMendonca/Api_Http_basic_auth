<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // rate limiting configuration  
        RateLimiter::for('api', function($request) {
            $rateLimit = config('app.rate_limit', 0);

            if($rateLimit > 0){
                return Limit::perMinute($rateLimit)->by($request->ip());    
            } else { 
                return Limit::none();
            }

        });
    }
}
