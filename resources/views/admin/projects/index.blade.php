@extends('layouts.layout')

@section('content')

<div class="space-x-4 ">

<div class="mt-6 ml-5  flex flex-col justify-center ">
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ( $projects as $project)
            <tr>
                <div class="inline-block ">  
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $project->id }}
                </td>
                </div>
                
                <div class="inline-block "> 
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $project->name }}
                </td>
                </div>

                <div class="inline-block "> 
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
            </div>

            @endforeach
        </tbody>

    </div> 

</div>


    @endsection