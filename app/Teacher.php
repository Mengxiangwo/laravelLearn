<?php

namespace App;

use App\Scope\AgeScope;
use DeepCopy\f006\A;
use function foo\func;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    public $primaryKey = 'tid';

    protected $fillable = ['name','age','position'];

    protected $dates = ['deleted_at'];

    protected static function boot()
    {
        parent::boot();

        //全局作用域
        //static::addGlobalScope(new AgeScope());

        //匿名全局作用域
        /*static::addGlobalScope('age', function(Builder $builder){
            $builder->where('age', '>', '29');
        });*/

    }

    //本地靜態作用域
    public function scopeAllPosition($query) {
        return $query->where('position', '全職');
    }

    //本地動態作用域
    public function scopePosition($query, $op, $position, $tt) {
        echo $tt;
        return $query->where('position', $op, $position);
    }
}
