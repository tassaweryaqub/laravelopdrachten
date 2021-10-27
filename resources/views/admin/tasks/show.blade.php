@extends('layouts.layout')

@section('content')


<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class=" w-80 bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl hover:scale-105 duration-500 transform transition cursor-pointer">
      <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=859&q=80" alt="">
      <div class="p-5">
        <h1 class="text-2xl font-bold">Task ID : </h1><br>
        <h1 class="text-1xl font-bold"> De Taskname: </h1><br>
        <h1 class="text-1xl font-bold"> Begindate: </h1><br>
        <h1 class="text-1xl font-bold"> Enddate: </h1><br>
        <h1 class="text-1xl font-bold"> De username: </h1><br>
        <h1 class="text-1xl font-bold"> De Projectname: </h1><br>
        <h1 class="text-1xl font-bold"> De Activity Status: </h1><br>
        <h1 class="text-1xl font-bold"> De datum aanmaken task: </h1><br>

        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->id }}</p><br>
        <h1 class="text-1xl font-bold">Task ID: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->task }}</p>
        <h1 class="text-1xl font-bold">De Taskname: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->begindate }}</p>
        <h1 class="text-1xl font-bold">De begindate: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->enddate }}</p>
        <h1 class="text-1xl font-bold">De enddate: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->user->name }}</p>
        <h1 class="text-1xl font-bold">De username: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->project->name }}</p>
        <h1 class="text-1xl font-bold">De projectname: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->activity->name}}</p>
        <h1 class="text-1xl font-bold">De activity id: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $task->created_at}}</p>
        <h1 class="text-1xl font-bold">De datum van task aanmaken: </h1><br>



      </div>
    </div>
  </div>

  @endsection