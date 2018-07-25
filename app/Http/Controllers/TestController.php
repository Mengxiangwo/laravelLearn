<?php

namespace App\Http\Controllers;

use App\Contracts\TestContract;
use App\Facade\Ts;
use App\Facade\Ts2;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    protected $test;
    //依賴注入
    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    //依賴調用
    public function index() {
        //$this->test->callMe('TestController');

        /*$app = App::getFacadeRoot();
        $t1 = $app->make('App\Contracts\TestContract');
        $t1->controller = "111";
        $t2 = $app->make('App\Contracts\TestContract');
        $t2->controller = "222";

        echo $t1->controller, $t2->controller;
        $t1->callMe("333");*/

        /*$t = app()->make('App\Contracts\TestContract');
        $t->callMe("app");*/

        /*$app = Container::getInstance();
        $tt = $app->make('App\Contracts\TestContract');
        $tt->callMe("container");*/

        //Ts::callMe("Facade 調用");
        Ts2::CallMe("Facade 調用2");
    }
}
