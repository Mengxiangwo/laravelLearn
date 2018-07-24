<?php

namespace App\Http\Controllers;

use App\Contracts\TestContract;
use Illuminate\Http\Request;

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
        $this->test->callMe('TestController');
    }
}
