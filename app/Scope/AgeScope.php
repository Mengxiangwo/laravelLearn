<?php
/**
 * Created by PhpStorm.
 * User: 10643
 * Date: 2018/7/31
 * Time: 19:33
 */

namespace App\Scope;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class AgeScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        return $builder->where('age', '>', 28);
    }
}