@extends('layout.app')
@section('title', 'Профиль')
@section('content')
@include('partials.header')
<section class="px-4 pt-40 pb-32 relative ">
            <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed" style="background-image:url(storage/image/backg.gif)"></div>
             
            </div>
          </section>
          


    <div class="py-12 rounded-lg">
        
        
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6 rounded-xl">
            
            
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


                        

                        <td class=" whitespace-wrap text-right relative h-full border-b border-gray-200 text-sm leading-5 font-medium ">
                            
                            @foreach ($logotips as $logo)
                            @if ($logo->user_id == $user->id)
                            <style>
                                .logotip{
                                   position: relative;
                                   width: 170px;
                                   height: 170px;
                                   margin-left: auto;
                                }
                                .brand{
                                    
                                    border-radius: 0px 0 20px 20px;
                                    margin-left: auto;
                                    text-align: center;
                                    width: 170px;
                
                                }
                                .itog{
                                    padding: auto;
                                    width: 170px;
                                    border-radius: 20px ; 
                                    margin-left: 40PX;
                                    
                                    
                                    
                                }
                            </style>

                            <div class="itog"  id="itog" style="background: {{$logo->back}};">
                                                            
                                <img id="logotip" class="logotip" src="{{$logo->image_path}}" alt="Old Image">
                                <p class="brand " id="brand" style="margin-top:10px; padding-bottom:10px; background: {{$logo->back}}; font-size: {{$logo->size}}rem;
                                font-family: {{$logo->font}}; color: {{$logo->color}}">{{$logo->title}}</p>
                                </img>

                                
                                
                            </div>
                            
                            
                            @endif
                            @break
                            @endforeach
                        <div class="w-10 h-10"></div>
                            

                            

                            
                            
                        
                            
                        </td>
                    </tr>
                
            </tbody>
            </table>
            </div>

            

            
        </div>
    </div>
</div>


    