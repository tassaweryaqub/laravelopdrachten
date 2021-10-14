@extends('layouts.layout')

@section('content')


<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class=" w-80 bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl hover:scale-105 duration-500 transform transition cursor-pointer">
      <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=859&q=80" alt="">
      <div class="p-5">
        <h1 class="text-2xl font-bold">Categorie details: </h1><br>
        <h1 class="text-1xl font-bold">Categorie name: </h1><br>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $category->name }}</p>

      </div>
    </div>
  </div>

  @endsection