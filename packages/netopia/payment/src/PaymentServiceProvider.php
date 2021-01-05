<?php

namespace Netopia\Payment;


use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Events\Dispatcher;
use Illuminate\Events\EventDispatcher;
use Illuminate\Support\Carbon as IlluminateCarbon;
use Illuminate\Support\Facades\Date;
use Throwable;

class PaymentServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        
    }


    public function register()
    {
        // Needed for Laravel < 5.3 compatibility
    }

}
