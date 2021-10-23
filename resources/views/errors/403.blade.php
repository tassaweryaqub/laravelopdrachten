@extends('layouts.layout')

@section('content')

<div class="container-mx-1 ">
    <div class="ml-2 flex flex-col">

        <h2 class=" my-4 text 2xl font-semibold text-gray-600 dark:gray-400">
            Error
        </h2>
            <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8 ">
                {{ $exception->getMessage() }}
            </div>
    </div>


</div>
@endsection