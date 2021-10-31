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
<form id="form"  class="w-full max-w-lg" action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
    @method('PUT')
    @csrf 

    <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
         Product Name 
        </label>
        <input 
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500  @enderror"
        name= "name" id="name" value="{{ old('name', $product->name) }}" type="text" required>
    </div>

    <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
         Description 
        </label>
        <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500  @enderror"
        name= "description" id="description" value="{{ old('description', $product->description) }}" required></textarea>
    </div>

    <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
         Price
        </label>
        <input 
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500  @enderror"
        name= "price" id="price" value="{{ old('name', $product->latest_price->price) }}" type="text" required>
    </div>

    <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category_id">
         Category
        </label>
      <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="category_id" id="category_id">
            @foreach ($categories as $category)  
      
            <option value="{{ $category->id }}"
                @if (old('category_id', $product->category_id) == $category->id)
                selected                 
                @endif
                >{{ $category->name }}
            </option>    
            @endforeach     
        </select>
      </div>

      <div class="flex flex-wrap -mx-3 mb-2">
        <button id="submit" class="mt-24 ml-5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" >
          Update
         </button>
      </div>

  </form>
  

</div>

@endsection