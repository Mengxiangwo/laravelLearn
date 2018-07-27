<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Database\Query\Expression;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function find($id) {
        //$teacherInfo = Teacher::get();

        //$teacherInfo = DB::table('teachers')->where('tid', $id)->select('name as teacherName')->get();
        //$teacherInfo = DB::table('teachers')->pluck('name');
        //var_dump($teacherInfo);exit;

        /*$i = 0;
        DB::table('teachers')->orderBy('tid')->chunk(2, function ($teachers) use (&$i) {
            $i++;
            echo $i . "********";
            foreach ($teachers as $teacher) {
                echo $teacher->name;
            }
            return false;
        });*/

        /*$count = DB::table('teachers')->count();
        $max = DB::table('teachers')->max('age');
        $min = DB::table('teachers')->min('age');
        $avg = DB::table('teachers')->avg('age');
        $sum = DB::table('teachers')->sum('age');

        var_dump($sum);*/

       /* $teachers = DB::table('teachers')->distinct()->get();

        var_dump($teachers);*/

        $query = DB::table('teachers')->select('name');
        $teachers = $query->addSelect(['age', 'position'])->get();

        var_dump($teachers);
    }

    public function incr() {
        /*Teacher::insert([
            'name' => '李老師', 'age' => 26, 'position' => '兼職'
        ]);*/

        $teacher = new Teacher;
        $teacher->name = '李老師';
        $teacher->age = 26;
        $teacher->position = '兼職';
        $teacher->save();

        DB::table('teachers')->insert();

    }
}
