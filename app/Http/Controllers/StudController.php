<?php

namespace App\Http\Controllers;

use App\Models\Stud;
use Illuminate\Http\Request;

class StudController extends Controller
{
    protected $task;

    public function __construct(){
        $this->task = new Stud();
    }


    public function index(){
        $response['tasks'] = $this->task->all();
        return view('pages.stud.index')->with($response);
    }

    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->route('stud');
    }
    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task->delete();

        return redirect()->back();
    }
    public function status($task_id){
        $task = $this->task->find($task_id);
        $task->status = 0;
        $task->update();

        return redirect()->back();
    }
    public function edit(Request $request){
        $response['task'] = StudFacade::get(get($request['task_id']));
        return view('pages.stud.edit')->with($response);

    }
    public function update(Request $request,$task_id){
        StudFacade::update($request->all(),$task_id);
        return redirect()->back();
    }

}

