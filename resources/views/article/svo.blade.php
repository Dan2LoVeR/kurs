@extends('layout\app')
@section('title', 'Льготы')
@section('content')
    

  @include('partials.header')
       <div class=" p-10">
                <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl pb-40">

                <!-- Image Column -->
                <div class="w-full h-64 lg:w-1/2 lg:h-auto mb-10">
                    <img class="transform  rounded-xl h-full w-full object-cover" src="{{asset('storage/image/svo.jpg')}}" alt="Winding mountain road">
                </div>
                <!-- Close Image Column -->

                <!-- Text Column -->
                <div
                    class="transform  rounded-xl max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
                    <!-- Text Wrapper -->
                    <div class="flex flex-col p-12 md:px-16 ">
                        <h2 class="text-2xl font-medium uppercase text-indigo-700 lg:text-4xl">ПОДДЕРЖКА СЕМЕЙ УЧАСТНИКОВ СВО</h2>
                        <p class="mt-4">
                            В «Исакогорско-Цигломенском культурном центре» действуют льготы для семей лиц, принимающих участие в специальной военной операции:<br><br>

Во-первых, мы предлагаем бесплатное посещение Учреждения при проведении культурно-массовых представлений. Это означает, что наши герои и их семьи могут посещать концерты, театральные представления, выставки и другие культурные события, проходящие в нашем центре, без всяких затрат. <br><br>

Во-вторых, мы предоставляем бесплатное посещение занятий в клубных формированиях. Наш культурный центр предлагает разнообразные клубные формирования, где гости могут заниматься интересными и полезными видами деятельности. Независимо от того, это танцы, спорт, ремесла или другие хобби. <br><br>

Мы глубоко признательны всем героям и их семьям за их службу и преданность. Льготы, предоставляемые нами, являются лишь небольшим проявлением нашего уважения и признания их важной роли в нашем обществе. <br><br>
                        </p>
                        <!-- Button Container -->
                        <div class="mt-8" >
                            <a href="http://ickc29.ru/component/phocadownload/category/9-inye-dokumenty?download=318:ob-utverzhdenii-poryadka-ustanovleniya-lgot-semyam-lits-priimayushchikh-uchastie-v-svo"
                                class="rounded px-5 py-3 min-w-max overflow-hidden shadow relative bg-indigo-700 text-white hover:bg-opacity-90">Узнать больше</a>
                        </div>
                    </div>
                    <!-- Close Text Wrapper -->
                </div>
                <!-- Close Text Column -->

            </div>
       </div>

<!-- Container -->
    
        
  @include('partials.footer') 
@endsection