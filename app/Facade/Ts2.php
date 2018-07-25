<?php
/**
 * Created by PhpStorm.
 * User: 10643
 * Date: 2018/7/24
 * Time: 20:32
 */

namespace App\Facade;


use App\Services\TestService;
use Illuminate\Support\Facades\Facade;

class Ts2 extends Facade
{
    public static function getFacadeAccessor()
    {
        return new TestService();
    }
}