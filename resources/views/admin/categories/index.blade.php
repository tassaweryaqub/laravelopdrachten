@extends('layouts.layout')

@section('content')



<!-- Table uit Tailwind Component -->
<div class="flex flex-col">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Lastname
              </th>
             
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Modify
              </th>
     
                <button class=" float-right mr-6 btn bg-green-500 hover:bg-green-400 text-white">
                    <a href="{{ route('categories.create')  }}">Create</a>
                  </button>
       
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ( $categories as $category)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                          Id
                    </div>
                    <div class="text-sm text-gray-500">
                     {{ $category->id }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Naam</div>
                <div class="text-sm text-gray-500">  {{ $category->name }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">AchterNaam</div>
                <div class="text-sm text-gray-500">  {{ $category->lastname }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Show
                  <a href="{{ route('categories.show', ['category'=> $category->id ]) }}">Show</a>
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Edit
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
              </td>
            </tr>


            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



    @endsection