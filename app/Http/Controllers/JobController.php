<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function find($id) {
        $data = Job::find($id);

        var_dump($data);exit;
    }

    public function incr() {
        /*Job::insert(array(
            'name' => "J1", 'salary' => 25000
        ));*/

        $job = new Job(array(
            'name' => 'J2',
            'salary' => 30000
        ));

        $job->save();
    }
}
