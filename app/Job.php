<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /*const CREATED_AT = 'add_time';
    const UPDATED_AT = 'update_time';*/

    protected $dateFormat = "Y";

    public $timestamps = false;
    //protected $dateFormat = "Y-m-d H:i:s";
    protected $fillable = ['name', 'salary'];
}