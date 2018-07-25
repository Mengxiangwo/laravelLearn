<?php
/**
 * Created by PhpStorm.
 * User: 10643
 * Date: 2018/7/24
 * Time: 20:09
 */

namespace App\Facade;

use Illuminate\Support\Facades\Facade;

class Ts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Ts';
    }
}