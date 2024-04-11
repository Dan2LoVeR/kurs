@extends('layout\app')
@section('title', 'Главная')
@section('content')
    

  @include('partials.header')
    
        <div class=" mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5 md:max-w-6xl p-20 bg-white/5 sm:h-200">
            @foreach ($posts as $post)
            @include('posts.partials.item', ["post"=>$post])
            @endforeach
            <div class="w-72 bg-white shadow-md rounded-xl duration-500  hover:shadow-xl ">

                {{$posts->links()}}
            </div>
        </div>





        {{-- афиша --}}

        <div class="max-w-screen-xl px-4 mx-auto mt-8 sm:mt-12 sm:px-6 md:max-w-6xl">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
              <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                <div class="text-sm font-semibold tracking-wide text-gray-900 uppercase sm:text-base lg:text-sm xl:text-base">
                  Где искать события?
                </div>
                <h2
                  class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
                  АФИША ПУШКИНСКОЙ КАРТЫ
                </h2>
                <p class="mt-3 text-base text-gray-900 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                    Используй приложение «Госуслуги.Культура». Оно доступно для скачивания в App Store, Google Play и AppGallery. После оформления карты тебе будет доступна афиша мест и событий по всей стране. <br> Меняй геолокацию и используй фильтры, <br>чтобы найти то, что тебе интересно.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                  <div class="rounded-md shadow">
                    <a href="http://ickc29.ru/afisha-pc"
                      class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 border-2 text-white transition duration-150 ease-in-out bg-indigo-700  rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline md:py-4 md:text-lg md:px-10">
                      Афиша мероприятий
                    </a>
                  </div>
                  <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="https://пушка.рф"
                      class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 md:py-4 md:text-lg md:px-10">
                      Официальный сайт
                    </a>
                  </div>
                </div>
              </div>
              <div
                class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                <svg
                  class="absolute top-0 hidden origin-top transform scale-75 -translate-x-1/2 -translate-y-8 left-1/2 sm:scale-100 lg:hidden"
                  width="640" height="784" fill="none" viewBox="0 0 640 784">
                  <defs>
                    <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
                      patternUnits="userSpaceOnUse">
                      <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                  </defs>
                  <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
                  <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
                </svg>
                <div class="relative justify-end hidden w-full lg:flex">
                    <div class="lg:max-w-lg lg:w-full mb-5 md:mb-0 md:w-1/2 w-3/6">
                        <img class="object-cover object-center rounded-xl border-4" alt="hero" src="{{asset('storage/image/push.jpg')}}">
                    </div>
                </div>
              </div>
            </div>
          </div>

    













        <div class="grid grid-cols-1 md:grid-cols-3 pt-10 pb-10  gap-10 mx-auto pl-20 mt-10 mb-20 md:max-w-6xl bg-white/5 sm:h-200 ">

            
                <a href="{{route("lgots")}}" class="transform  rounded-xl h-40 w-40 sm:h-64 sm:w-64 bg-white text-indigo-700 shadow-xl transition duration-300 hover:bg-indigo-700 hover:translate-x-4 hover:text-white hover:border-4">
                  
                <div class="flex ">
                    <span class="font-bold mx-5 mt-10  ">Льготы семьям участников СВО</span>
                </div></a>
            
        
            
            <a href="{{route("rend")}}"class="transform  rounded-xl h-40 w-40 sm:h-64 sm:w-64 bg-white text-indigo-700 shadow-xl transition duration-300 hover:bg-indigo-700 hover:translate-x-4 hover:text-white hover:border-4">
               
            <div class="flex ">
                    <span class="font-bold mx-5 mt-10 ">Сдача помещений в аренду</span>
                </div></a>
            
        
            
                <a href="{{route("servis")}}" class="transform  rounded-xl h-40 w-40  sm:h-64 sm:w-64 bg-white text-indigo-700 shadow-xl transition duration-300 hover:bg-indigo-700 hover:translate-x-4 hover:text-white hover:border-4">
                   
                    <div class="flex ">
                    <span class="font-bold mx-5 my-10">Оценка качества услуг</span></div></a>
                
           

            
            <a href="{{route("coruption")}}" class="transform  rounded-xl h-40 w-40 sm:h-64 sm:w-64 bg-white text-indigo-700 shadow-xl transition duration-300 hover:bg-indigo-700 hover:translate-x-4 hover:text-white hover:border-4">
               <div class="flex ">
                    <span class="font-bold mx-5 my-10">Противодействие коррупции</span>
                </div></a>
           

            <div
            class="transform  rounded-xl h-40 w-40 sm:h-64 sm:w-64 bg-white text-indigo-700 shadow-xl transition duration-300 ">
                <div class="flex ">
                    <img class="h-full w-full object-cover"
                                     src="{{asset('storage/image/POS_QR.jpg')}}"
                                     alt="Your avatar">
                    
                </div>
            </div>

            
                <a href="http://ickc29.ru/about/doc/category/4-informatsiya-o-deyatelnosti-uchrezhdeniya?download=29:shedule" class="transform  rounded-xl h-40 w-40 sm:h-64 sm:w-64 bg-white text-indigo-700 shadow-xl transition duration-300 hover:bg-indigo-700 hover:translate-x-4 hover:text-white hover:border-4">
                  <div class="flex ">
                    <span class="font-bold mx-5 my-10">Расписание занятий</span>
                </div></a>
            

            
        </div>
	
    
        
        



    @include('partials.footer')    
    @endsection
    