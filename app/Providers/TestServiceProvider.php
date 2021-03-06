<?php

namespace App\Providers;

use App\Services\TestService;
use function foo\func;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //使用singleton綁定單例
        $this->app->singleton('App\Contracts\TestContract', function() {
            return new TestService();
        });

        //使用bind綁定實例到接口以便依賴注入
        $this->app->bind('App\Contracts\TestContract', function(){
            return new TestService();
        });

        //facade调用的依赖注入
        $this->app->bind('Ts', function(){
            return new TestService();
        });
    }
}
