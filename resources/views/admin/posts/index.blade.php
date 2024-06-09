@extends('layout.admin')

@section('title', 'Статьи')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Статистика</h3>

        

        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
               {{-- @foreach ($groups as $item)
                  <h1>{{$item->name}}</h1> 
               @endforeach --}}
                

                

                <div class="container mx-auto px-4 py-6 mt-20">
                    <canvas id="myChart"></canvas>
                </div>
                
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                
                <div class="container mx-auto px-4 py-6">
                    <canvas id="myChart"></canvas>
                </div>

                {{$names}}
                
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: <?=$names?>,
                            datasets: [{
                                tooltip: false,
                                data: <?=$grade?>,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            plugins: {
      legend: false,
    },
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            
                            }
                        }
                    });
                </script>



                

                       
                </div>
            </div>
        </div>
    </div>
@endsection
