@extends('layouts.layout')

@section('content')


<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class=" w-80 bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl hover:scale-105 duration-500 transform transition cursor-pointer">
      <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=859&q=80" alt="">
      <div class="p-5">
        <h1 class="text-2xl font-bold">Product Name: </h1>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $product->name }}</p><br>
        <h1 class="text-1xl font-bold">Categorie Name: </h1>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $product->category->name }}</p><br>
        <h1 class="text-1xl font-bold">Latest Price: </h1>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $product->latest_price->price }}</p><br>

          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($product->price->sortByDesc('effdate') as $item )
            <tr>
              <h1 class="text-1xl font-bold">Item ID </h1>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{ $item->id }}   
                </td>
                <h1 class="text-1xl font-bold">Item Price: </h1>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{ $item->price }}   
                </td>
                <h1 class="text-1xl font-bold">Item Date</h1>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{ $item->effdate }} 
                </td><br>
                
            @endforeach
              </tbody>
            </table><br>
            <h1 class="text-1xl font-bold">Product Description: </h1>
        <p class="mt-2 text-md font-semibold text-gray-600"> {{ $product->description }}</p>

      </div>
    </div>
  </div>

  @endsection