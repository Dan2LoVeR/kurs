@extends('layout.app')
@section('title', 'Главная')
@section('content')
    

  @include('partials.header')
    
        
  <div class="w-full h-full flex justify-center items-center ">
    <div class="area ">
        <ul class="circles" class="h-full">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <h1 id="typewriter" class="px-4 text-4xl font-extrabold"></h1>
    <div id="header">
        <div id='myFirstElement'></div>
        <div id='mySecondElement'></div>
    </div>
    </div>

    {{-- В РАМКАХ ЭТОГО КУРСА ВЫ УЗНАЕТЕ --}}
    <div class="max-w-screen mb-30 px-4 mx-auto mt-8 sm:mt-12 sm:px-6 md:max-w-6xl  delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0  [animation-iteration-count:infinite]" data-taos-offset="30">

      
  
        <div class="lg:grid lg:grid-cols-12 lg:gap-8    "   >
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            
            <h2
              class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
              В РАМКАХ ЭТОГО КУРСА ВЫ УЗНАЕТЕ
            </h2>
            <p class="mt-3 text-base text-gray-900 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                 как создавать логотипы, фирменные бланки, баннеры. Познакомитесь с основами верстки и типографики. Для лучшего понимания материала вам необходимо иметь базовые знания, представления о композиции, цветовых схемах, визуальном восприятии информации, векторной и растровой графике.
            </p>
            <div class="relative group inline-flex my-6">
                
                <div class="mt-3 sm:mt-0 sm:ml-3">
                <div
                    class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                </div>
                <a href="{{route("lessons")}}" title="Get quote now"
                    class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    role="button">Перейти к курсам
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
                    <img class="object-cover object-center rounded-xl border-4" alt="hero" src="{{asset('storage/image/gr1.jpg')}}">
                </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>


      

    {{-- ПРОВЕРЬ СЕБЯ --}}
      <section class="px-4 my-30 pt-40 pb-32 relative mt-20">
        <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed" style="background-image:url(storage/image/back.jpg)"></div>
         
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            
            <h2
              class="mt-1 text-4xl font-extrabold leading-10 relative  text-black sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
              ПРОВЕРЬ СЕБЯ
            </h2>
            <p class="mt-3 text-base text-black relative sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
              после изучения всех лекций можно пройти тесты по всем девяти темам. После чего можно будет узнать свои результаты перейдя в профиль. Так же можно будет сделать логотип по предложенной теме в конструкторе или сделав его в произвольной программе 
            </p>
            <div class="relative group inline-flex mt-6 ">
                
                <div class="mt-3 sm:mt-0 sm:ml-3">
                <div
                    class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                </div>
                <a href="{{route("1test")}}" title="Get quote now"
                    class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    role="button">Пройти тесты
                </a>
                </div>

                
                
                </div>
                <div class="relative group inline-flex my-6 ">
                
                  <div class="mt-3 sm:mt-0 sm:ml-3">
                  <div
                      class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                  </div>
                  <a href="{{route("finish")}}" title="Get quote now"
                      class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                      role="button"> Сделать логотип
                  </a>
                  </div>
  
                  
  
                  </div>
                  
                


          
        </div>
      </section>
      
      
      

    <div class="my-40">
      <h2
      class="mt-1 px-4 mx-auto mt-8 sm:mt-12 sm:px-6 md:max-w-6xl text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl   delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30">
      ЧТО ВЫ ПОЛУЧИТЕ ПРОЙДЯ НАШИ КУРСЫ
        </h2>
      <div class=" grid grid-cols-3 gap-8 p-8 md:p-16 bg-white mx-auto delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30">
        
        
        
    
        <div
            class="col-span-4 sm:col-span-2 lg:col-span-1 relative px-5 pt-10 pb-2 flex flex-col justify-start items-center border-2 border-gray-800 rounded-xl text-gray-800">
            <span class="absolute -top-6 p-3 border-2 border-gray-800 rounded-full bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                aria-hidden="true" class="w-7 h-7 text-yellow-640">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
        </span>
            <h2 class="my-1 gradient-red text-base uppercase tracking-wide sm:text-xl lg:text-lg xl:text-xl  ">Новые навыки</h2>
            <p class="py-2 text-center  sm:text-xl lg:text-lg xl:text-xl   ">Занятия проходят в формате статей и доступны к изучению в любое удобное для вас время.</p>
        </div>
    
    
        <div
            class="col-span-4 sm:col-span-2 lg:col-span-1 relative px-5 pt-10 pb-2 flex flex-col justify-start items-center border-2 border-gray-800 rounded-xl text-gray-800">
            <span class="absolute -top-6 p-3 border-2 border-gray-800 rounded-full bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                aria-hidden="true" class="w-7 h-7 text-yellow-640">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
            </svg>
        </span>
            <h2 class="my-1 gradient-red text-base uppercase tracking-wide sm:text-xl lg:text-lg xl:text-xl">Закрепление знаний</h2>
            <p class="py-2 text-center sm:text-xl lg:text-lg xl:text-xl">Для закрепления изученного материала и самопроверки в курсе предусмотрены тесты.</p>
        </div>
    
    
        <div
            class="col-span-4 sm:col-span-2 lg:col-span-1 relative px-5 pt-10 pb-2 flex flex-col justify-start items-center border-2 border-gray-800 rounded-xl text-gray-800">
            <span class="absolute -top-6 p-3 border-2 border-gray-800 rounded-full bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                aria-hidden="true" class="w-7 h-7 text-yellow-640">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                </path>
            </svg>
        </span>
            <h2 class="my-1 gradient-red text-base uppercase tracking-wide sm:text-xl lg:text-lg xl:text-xl">Оценку навыков и понимания</h2>
            <p class="py-2 text-center sm:text-xl lg:text-lg xl:text-xl">Для получения оценки всех ваших пройденных тестов вы можете обратиться к руководителю вашей группы</p>
        </div>
    
    </div></div>

    

    {{-- О ПРОЕКТЕ  --}}
    <div class="max-w-screen px-4 mx-auto mt-8 sm:mt-12 sm:px-6 md:max-w-6xl">
  
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
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
            <div class="relative justify-end hidden w-full lg:flex delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30">
                <div class="lg:max-w-lg lg:w-full mb-5 md:mb-0 md:w-1/2 w-3/6">
                    <img class="object-cover object-center rounded-xl border-4" alt="hero" src="{{asset('storage/image/gr2.png')}}">
                </div>
            </div>
          </div>
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            
            <h2
              class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30"
              >
              О ПРОЕКТЕ 
            </h2>
            <p class="mt-3 text-base text-gray-900 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30">
                Направлен на обучение и тестирование в области дизайна и брендинга. В рамках проекта участники научатся разрабатывать и внедрять фирменный стиль для компаний разных отраслей, учитывая особенности их бизнеса и целевую аудиторию. 
            </p>
            <div class="relative group inline-flex my-6">
                
                    
            </div>
            
          </div>
          
        </div>






    </div>

    


    <div class="grid grid-cols-1 md:grid-cols-3 pt-10 pb-10  gap-10 mx-auto pl-20 mt-10 mb-20 md:max-w-6xl bg-white/5 sm:h-200 ">


    

        

  

  
</div>






<script>
  const words = ["СОЗДАНИЕ ФИРМЕННОГО СТИЛЯ КОМПАНИИ"];//Создание фирменного стиля компании
  let i = 0;
  let j = 0;
  let currentWord = "";
  let isDeleting = false;
  
  function type() {
    currentWord = words[i];
    if (isDeleting) {
      document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
      j--;
      if (j == 0) {
        isDeleting = false;
        i++;
        if (i == words.length) {
          i = 0;
        }
      }
    } else {
      document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
      j++;
      if (j == currentWord.length) {
        isDeleting = true;
      }
    }
    setTimeout(type, 100);
  }
  
  type();

        $elem1 = $('#myFirstElement');
        $elem2 = $('#mySecondElement');
        var scrollState = 'top';

        $(window).scroll(function(){ 
            
            var scrollPos = $(window).scrollTop();

            if( ( scrollPos != 0 ) && ( scrollState === 'top' ) ) {
                $elem1.stop().animate({marginTop: '0px'}, 300);
                $elem2.stop().animate({height: '10px'}, 300);
                scrollState = 'scrolled';
            }       
            else if( ( scrollPos === 0 ) && ( scrollState === 'scrolled' ) ) {
                $elem1.stop().animate({marginTop: '0px'}, 300);
                $elem2.stop().animate({height: '0px'}, 300);
                scrollState = 'top';
            }

        });

  </script>


        
	
    
        
        



    @include('partials.footer')    
    @endsection
    