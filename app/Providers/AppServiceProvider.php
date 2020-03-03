<?php

namespace App\Providers;

use App\Payment\PaymentDetail;
use Faker\Provider\ar_SA\Payment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->bind(PaymentDetail::class,function(){
            return new PaymentDetail('usd');
        });*/

        $this->app->singleton(PaymentDetail::class,function(){
            return new PaymentDetail('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
