<?php

namespace App\Providers;

use App\Mixins\StrMixin;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('prefix', function($str) {
					return 'a--' . $str;
				});

				// this will overwrite the first macro with the same name
				Str::mixin(new StrMixin(), true); // set false to not overwrite
    }
}
