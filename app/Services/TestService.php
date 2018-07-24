<?php
/**
 * Created by PhpStorm.
 * User: 10643
 * Date: 2018/7/24
 * Time: 9:31
 */

namespace App\Services;


use App\Contracts\TestContract;

class TestService implements TestContract
{
    public function callMe($controller)
    {
        dd("Call Me From TestServiceProvider In ".$controller);
    }
}