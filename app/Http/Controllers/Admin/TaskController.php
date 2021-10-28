<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use App\Models\Project; 
use App\Models\Activity; 
use App\Models\User; 
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /** Permissies voor de Task controller */

    public function __construct()
    {
        $this->middleware('auth'); 
        $this->middleware('permission:index task', ['only' => ['index']]); 
        $this->middleware('permission:show task', ['only' => ['show']]);
        $this->middleware('permission:create task', ['only' => ['create', 'store']]);  
        $this->middleware('permission:edit task', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete task', ['only' => ['delete', 'destroy']]);  
    }



    public function index()
    {
        //*haal alle gegevens op van project en gebruik de nieuwe methode task 
        $tasks = Task::all();   

        return view('admin.tasks.index', compact('tasks')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all(); 

        $projects = Project::all(); 
        // return view ('admin.projects.create', compact('projects')); 

        $activities = Activity::all(); 
        return view ('admin.tasks.create', compact('activities', 'users', 'projects')); 

        
   
        // return view ('admin.users.create', compact('users', 'activities', 'projects')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskStoreRequest $request)
    {
        //

        $task = new Task(); 
        $task->task = $request->task; 
        $task->begindate = $request->begindate; 
        $task->enddate = $request->enddate; 
        $task->project_id = $request->project_id; 
        $task->activity_id = $request->activity_id; 
        $task->user_id = $request->user_id; 
        $task->save(); 

        return redirect()->route('tasks.index')->with('status', 'Succesvol Task Aangemaakt!'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
        return  view('admin.tasks.show', compact('task')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
