@extends('layouts.layout')

@section('content')

<div class="container-mx-1">
    <div class="ml-2 flex flex-col">
            <h2 class="my-4 text-4xl  font-semibold  text-gray-600  dark:text-gray-500">
            
            </h2>
    </div>

</div>


@endsection

<tbody class="bg-white divide-y divide-gray-200">

    @foreach ( $categories as $category)
    <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{ $category->name }}
        </td>

        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            Details
        </td>

        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            Edit 
        </td>

        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            Delete
        </td>
    </tr>


    @endforeach

</tbody>