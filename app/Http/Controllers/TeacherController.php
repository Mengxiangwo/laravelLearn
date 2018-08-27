<?php

namespace App\Http\Controllers;

use App\Jobs\SendLogs;
use App\Jobs\SendLogs1;
use App\Jobs\SendLogs2;
use Carbon\Carbon;
use Illuminate\Support\Facades\Event;
use App\Events\Test;
use App\Scope\AgeScope;
use App\Teacher;
use Illuminate\Database\Query\Expression;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function find($id)
    {
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
        });*/

        /*$count = DB::table('teachers')->count();
        $max = DB::table('teachers')->max('age');
        $min = DB::table('teachers')->min('age');
        $avg = DB::table('teachers')->avg('age');
        $sum = DB::table('teachers')->sum('age');

        var_dump($sum);*/

        /* $teachers = DB::table('teachers')->distinct()->get();

         var_dump($teachers);*/

        /*$query = DB::table('teachers')->select('name');
        $teachers = $query->addSelect(['age', 'position'])->get();

        var_dump($teachers);*/

        /*$query = DB::table('teachers')->select(DB::raw('name as n, age as a'))->where(DB::raw('tid = 10001'))->get();
        var_dump($query);*/

        /*$query = DB::table('teachers')->selectRaw('tid, name as n, age as a')->havingRaw('tid > 10001')->get();
        var_dump($query);*/

        /*$query = DB::table('teachers')->join('jobs', 'teachers.tid', 'jobs.id')
            ->select('jobs.id', 'teachers.tid', 'jobs.name as jname', 'teachers.name as tname')->get();
        var_dump($query);*/

        /*$query = DB::table('teachers')->join('jobs', function($join){
            $join->on('teachers.tid', '=', 'jobs.id')->where('teachers.tid', '>', 1);
        })->select('teachers.tid', 'jobs.id', 'teachers.name as tname')->get();

        var_dump($query);*/

        /*$query = DB::table('teachers')->where('tid', '1')->union(DB::table('teachers')->where('tid', '2')->select('tid', 'name', 'age'))
                                             ->select('tid', 'name', 'age')->get();
        var_dump($query);*/

        /*$query = DB::table('teachers')->when($id, function ($query) use($id) {
            return $query->where('tid', $id);
        })->get();

        var_dump($query);*/

        /*foreach (Teacher::where('tid', '>', 0)->cursor() as $teacher) {
            echo $teacher['tid'];
        }*/

        //$t = Teacher::where('tid', 1)->first();
        //$t = DB::table('teachers')->where('tid', 1)->count();
        //$t = Teacher::where('tid', 1)->firstOrFail();
        //var_dump($t);

        /*$teacher = new Teacher();
        $teacher = $teacher->find(10007);

        $teacher->name = '張老師';
        $teacher->age = 29;

        $teacher->save();*/

        /*$teacher = Teacher::create([
            ['name'=> '王1老師', 'age' => 29, 'position' => '兼職'],
            ['name'=> '王2老師', 'age' => 30, 'position' => '兼職']
        ]);

        var_dump($teacher);*/

        /*$teacher = Teacher::firstOrCreate(['name'=>'張5老師'], ['age' => 30, 'position' => '全職']);
        var_dump($teacher);*/

        /*$teacher = Teacher::firstOrNew(['name'=>'張7老師'], ['age' => 30, 'position' => '全職']);
        $teacher->save();
        var_dump($teacher['name']);*/

        /*$teacher = Teacher::updateOrCreate(['name'=>'老老師'], ['age' => 35, 'position' => '兼職']);

        var_dump($teacher);*/

        /*$teacher = Teacher::find(10008);
        $teacher->delete();*/

        //$c = Teacher::destroy(10009);

        //$c = Teacher::where('age', 5)->delete();

        /* $teacher = Teacher::find(10011);
         var_dump($teacher->trashed());*/

        /* $c = Teacher::All();
         var_dump($c);*/

        //$c = Teacher::withTrashed()->get();

        //$c = Teacher::All();

        //$c = Teacher::withoutGlobalScopes()->get();

        //$c = Teacher::withoutGlobalScope(AgeScope::class)->get();

        //$c = Teacher::allPosition()->get();

        /*$c = Teacher::position('>', '全職', 'hahah')->get();
        var_dump($c);*/

        //$t = Teacher::find(1);
        /*Event::fire(new Test($t));
        echo "success";*/

        //Event::fire('event.test', ['1', '2']);
        //event(new Test($t));

        /*SendLogs::dispatch()->delay(Carbon::now()->addSeconds(20));
        echo "111";*/

        /*SendLogs::withChain([
            new SendLogs1,
            new SendLogs2,
        ])->dispatch();*/

        //SendLogs1::dispatch()->onConnection('redis')->onQueue('t1');
        //SendLogs2::dispatch()->onConnection('redis')->onQueue('t2');
        SendLogs::dispatch()->onConnection('redis')->onQueue('t');
        //SendLogs1::dispatch()->onConnection('database')->onQueue('t');
        //var_dump(\Redis::get('name'));

    }

    public function incr()
    {
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
