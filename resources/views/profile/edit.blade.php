@extends('layout.app')
@section('title', 'Профиль')
@section('content')
@include('partials.header')




    <div class="py-12">
        
       
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white/5 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('partials.update-profile-information-form')
                </div>
            </div>
            <div class="div-horizontal-scroll">
            <table  >
                <thead>
                    <tr>
                        
                        
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Тест 1</th>
                        
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Тест 2</th>
                        
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Тест 3</th>
                        
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Тест 4</th>
                        
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Тест 5</th>
                        
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Тест 6</th>
                        
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Тест 7</th>
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Тест 8</th>
                        <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">задание сделать логотип для {{$user->title}}</th>

                    </tr>
                    </thead>
                <tbody class="bg-white">
               
                    <tr>
                        

                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "1")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                @endif
                                    
                            @endforeach
                            
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "2")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                @endif
                                    
                            @endforeach
                            
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "3")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                @endif
                                    
                            @endforeach
                            
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "4")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                @endif
                                    
                            @endforeach
                            
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "5")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                @endif
                                    
                            @endforeach
                            
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "6")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                @endif
                                    
                            @endforeach
                            
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "7")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                @endif
                                    
                            @endforeach
                            
                        </td>
                        
                        <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">

                            @foreach ($grades as $grade)
                                @if ($grade->user_id == $user->id and $grade->name == "8")
                                    <span class="text-sm leading-5 text-gray-900"> {{ $grade->result }}</span>
                                    
                                @endif
                                    
                            @endforeach
                            
                        </td>

                        <td class=" whitespace-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            
                            
                            @foreach ($path as $pa)
                            @if ($pa->user_id == $user->id)
                            <img src="/storage/{{$pa->path}}" class="w-1/2 h-1/2">
                            @endif
                            @endforeach 
                            
                        
                            
                        </td>
                    </tr>
                
            </tbody>
            </table>
            </div>

            

            <div class="p-4 sm:p-8 bg-white/5 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>


    @include('partials.footer') 