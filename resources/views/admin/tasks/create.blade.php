@extends('layouts.layout')

<div>
@if ($errors->any())
    <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

@section('content')

<div class="flex flex-wrap -mx-3 mb-6 ml-5 mt-5">
<form id="form"  class="w-full max-w-lg" action="{{ route('tasks.store') }}" method="POST">
    @csrf 

    <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         User
        </label>
        <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="user_id" id="user_id">
            @foreach ($users as $user)  
            <option value="{{ $user->id }}">{{ $user->name }}
                @if (old('user_id') == $user_id)
                selected                 
                @endif
            </option>    
            @endforeach     
        </select>
      </div>


      <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         Project
        </label>
        <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="project_id" id="project_id">
            @foreach ($projects as $project)  
            <option value="{{ $project->id }}">{{ $project->name }}
                @if (old('project_id') == $project_id)
                selected                 
                @endif
            </option>    
            @endforeach     
        </select>
      </div>


      <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         Activity
        </label>
        <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="activity_id" id="activity_id">
            @foreach ($activities as $activity)  
            <option value="{{ $activity->id }}">{{ $activity->name }}
                @if (old('activity_id') == $activity_id)
                selected                 
                @endif
            </option>    
            @endforeach     
        </select>
      </div>

      <div class="w-full md:w-auto px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="task">
          Task Name
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('task') border-red-500 @enderror"
           name="task" id="task" value="{{ old('task') }}"  type="text" placeholder="Task Name" required >
      </div>

      <div class="w-full md:w-auto px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="begindate">
         Begindate
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('begindate') border-red-500 @enderror"  value="{{ old('begindate') }}" name="begindate" id="begindate"  type="date" placeholder="01-01-2021" required  >
      </div>

      <div class="w-full md:w-auto px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="enddate">
         Enddate
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('enddate') border-red-500 @enderror"  value="{{ old('enddate') }}" name="enddate" id="enddate"  type="date" placeholder="?"  >
      </div>






      <div class="flex flex-wrap -mx-3 mb-2">
        <button id="submit" class="mt-24 ml-5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" >
          Submit
         </button>
      </div>

  </form>
  

</div>

@endsection