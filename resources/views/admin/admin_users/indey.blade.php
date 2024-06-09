@extends('layout.admin')

@section('title', 'Администраторы')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">ytt</h3>

        <div class="mt-8">
            <a href="{{ route("admin.admin_users.create") }}" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
        </div>

        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Имя</th>
                            
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
                            <th class="px-6 py-3 border-2 border-gray-500 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Задание с логотипом
                            </th>

                        </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-2 border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $user->name }}</div>
                                    </td>

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

                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                        
                                    <style>
                                        .blog{
                                        max-width:300px;
                                        margin:0 auto;
                                        display:block;
                                        text-align:center;
                                        position:relative;
                                        
                                        }
                                        .blog img{
                                        max-width:250px;
                                        }
                                        .blog .text{
                                        opacity:0;
                                        position:absolute;
                                        bottom:0;
                                        border-radius: 40px;
                                        left:50%;
                                        transform:translate(-50%, 0);
                                        transition: 0.5s;
                                        width:100%;
                                        height: 100%;
                                        font-size:22px;
                                        background-color:rgba(0, 0, 0, 0.5);
                                        
                                        padding:10px 5px;
                                        color:#fff;
                                        }
                                        .blog:hover .text{
                                        opacity:1;
                                        }
                                    </style>
                                        
                                        @foreach ($logotips as $logo)
                                        @if ($logo->user_id == $user->id)
                                        <style>
                                            .logotip{
                                                padding: 5px;
                                    
                                            }
                                            .brand{
                                                margin-left: auto;
                                                text-align: center;
                                                border-radius:  0 0 20px 20px; 
                                                
                                            }
                                            .itog{
                                                border-radius: 20px 20px 0 0 ; 
                                                margin: auto;
                                                
                                                width: 170px;
                                                height: 170px;
                                            }
                                        </style>
                                        <div class="itog" class="shadow-sm pb-10" style="background-color: {{$logo->back}};">
                                            
                                            <img id="logotip" src="{{$logo->image_path}}" alt="Old Image">
                                        
                                            <h3 class="brand" class="position-relative rounded-t-lg" style="background-color: {{$logo->back}}; font-size: {{$logo->size}}rem;
                                            font-family: {{$logo->font}}; color: {{$logo->color}}">{{$logo->title}}</h3></img>
                                        </div>
                                        
                                        @endif
                                        @break
                                        @endforeach
                                    <div class="w-10 h-10"></div>
                                        
                                        
                                    
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <div class="w-64 h-64">
                        <canvas id="donut-chart"></canvas>
                    </div>

                    <script>
                        // Get the canvas element
                        var canvas = document.getElementById('donut-chart');

                        // Set the chart data
                        var data = {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: 'My First Dataset',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    '#EF4444',
                                    '#3B82F6',
                                    '#FBBF24',
                                    '#10B981',
                                    '#A78BFA',
                                    '#F59E0B'
                                ],
                                hoverOffset: 4
                            }]
                        };

                        // Set the chart options
                        var options = {
                            plugins: {
                                legend: {
                                    display: false
                                }
                            },
                            aspectRatio: 1,
                            cutout: '50%',
                            animation: {
                                animateRotate: false
                            }
                        };

                        // Create the chart
                        var chart = new Chart(canvas, {
                            type: 'doughnut',
                            data: data,
                            options: options
                        });
                    </script>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
