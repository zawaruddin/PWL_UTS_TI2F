<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        
        $this->routes(function () {
            

            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/01.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/02.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/03.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/04.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/05.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/06.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/07.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/08.php'));
            
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/09.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/10.php'));
            
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/11.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/12.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/13.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/14.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/15.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/16.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/17.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/18.php'));
            
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/19.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/20.php'));
            
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/21.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/22.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/23.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/24.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/25.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/26.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/27.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/28.php'));
            
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/29.php'));
                
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/30.php'));
                
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
