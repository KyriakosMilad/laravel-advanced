<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditCardPaymentGateway;
use App\Billing\PaymentGatewayContract;
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
//        $this->app->bind(BankPaymentGateway::class, function ($app) {
//					return new BankPaymentGateway('egp');
//				});

			$this->app->singleton(PaymentGatewayContract::class, function () {
				if (request()->path() === 'payBank') {
					return new BankPaymentGateway('egp');
				} elseif (request()->path() === 'payCreditCard') {
					return new CreditCardPaymentGateway('egp');
				}
				abort(422);
			});
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
