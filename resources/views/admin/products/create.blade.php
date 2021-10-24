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
<form id="form"  class="w-full max-w-lg" action="{{ route('products.store') }}" method="POST">
    @csrf 

    <div class="w-full md:w-auto  px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
         Category 
        </label>
        <select class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="category_id" id="category_id">
            @foreach ($categories as $category)  
      
            <option value="{{ $category->id }}">{{ $category->name }}
                @if (old('category_id') == $category_id)
                selected                 
                @endif
            </option>    
            @endforeach     
        </select>
      </div>

      <div class="w-full md:w-auto px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
          Product Name
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror"
           name="name" id="name" value="{{ old('name') }}"  type="text" placeholder="Product Name" required >
      </div>

      <div class="w-full md:w-auto px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
         Price
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('price') border-red-500 @enderror"  value="{{ old('price') }}" name="price" id="price"  type="text" placeholder="$" required  >
      </div>



      <div class="w-full md:w-auto px-3  mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
         Product  Description
        </label>
        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('description') border-red-500 @enderror"   value="{{ old('description') }}"name="description" id="description"  type="text" placeholder="Lorem Ipsum" required  ></textarea>
      </div>


      <div class="flex flex-wrap -mx-3 mb-2">
        <button id="submit" class="mt-24 ml-5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" >
          Submit
         </button>
      </div>

  </form>
  

</div>

@endsection