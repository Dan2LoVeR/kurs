@extends('layout.app')
@section('title', 'Виды логотипов')
@section('content')
@include('partials.header')

<div class="fixed top-0 left-0 w-full h-2 ">
    <div class="h-full bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E]" id="readingProgress" style="width: 0;"></div>
</div>
<section class="px-4 pt-40 pb-32 relative">
    <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed" style="background-image:url(storage/image/back.jpg)"></div>
     
    </div>
  </section>
<section></section>
<!-- sample article -->
<div >
<div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" class="fixed bottom-6 right-6 z-50" x-show="isVisible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2" style="display: none;"> <button title="Scroll to top" aria-label="Scroll to top" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="inline-flex items-center gap-x-2 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-grey-600 w-full">
    наверх
   </button> </div>
<div class="max-w-4xl mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8">Правила использования логотипов</h1>
        
        <h3 class="text-2xl font-bold mb-8">Логотип</h3>
        <p class="text-lg leading-8 mb-20">
            Логотип бренда — это основной идентификатор, опознавательный знак, который выделяет компанию на рынке.
            <br><br>
            В восприятии клиента логотип является гарантией качества предоставляемых услуг, маркером стабильности компании.
            <br><br>
            Логотип состоит из знака и начертания. Логотип в таком виде является основным и используется в большей части корпоративных материалов.
        </p>
        <img src="{{asset('img/fourth/1.png')}}" class="mb-8" alt="">
        <p class="text-lg leading-8 mb-20">
            Логотип бренда — это основной идентификатор, опознавательный знак, который выделяет компанию на рынке. В восприятии клиента логотип является гарантией качества предоставляемых услуг, маркером стабильности компании
        </p>
        

        <h3 class="text-2xl font-bold mb-8">Охранные поля</h3>
        <img src="{{asset('img/fourth/2.png')}}" class="mb-8" alt="">
        <p class="text-lg leading-8 mb-20">
            Охранное поле — это минимальное пространство вокруг логотипа, в которое не должны попадать посторонние элементы; оно обязательно. Пространства может быть больше, но не может быть меньше.
        </p>
        <h3 class="text-2xl font-bold mb-8">Монохромная версия</h3>
        <img src="{{asset('img/fourth/3.png')}}" class="mb-8" alt="">
        <p class="text-lg leading-8 mb-20">
            Монохромная версия логотипа используется в тех случаях, когда цветная печать или производство основных версий логотипа невозможны. Также монохромные варианты используются для создания спецотделок (лак, конгрев, тиснение и пр.).
        </p>
        <h3 class="text-2xl font-bold mb-8">Недопустимое использование</h3>
        <p class="text-lg leading-8 mb-20">
            Запрещено перекрашивать логотип, добавлять тени, обводки, отражения, псевдообъем и подобные эффекты. Также недопустимы деформация, изменение расстояния между элементами, размещение логотипа на неоднородном фоне без подложки.
        </p>



        <div class="relative rounded-xl shadow-xl">
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl">
                <p class="text-lg leading-8 mb-20">
                    Запрещено перекомпоновывать логотип
                </p>
                <img src="{{asset('img/fourth/4.png')}}" class="mb-8" alt="">
                
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl">
                <p class="text-lg leading-8 mb-20">
                    Запрещено деформировать логотип
                </p>
                <img src="{{asset('img/fourth/5.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl">
                <p class="text-lg leading-8 mb-20">
                    Запрещено использовать без блока «Сети»
                </p>
                <img src="{{asset('img/fourth/6.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl">
                <p class="text-lg leading-8 mb-20">
                    Запрещено перекрашивание логотипа
                </p>
                <img src="{{asset('img/fourth/7.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl">
                <p class="text-lg leading-8 mb-20">
                    Неконтрастное размещение на фотографии
                </p>
                <img src="{{asset('img/fourth/8.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl">
                <p class="text-lg leading-8 mb-20">
                    Запрещено использовать цвет фона, не входящий в фирменную палитру
                </p>
                <img src="{{asset('img/fourth/9.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl shadow-xl">
                <p class="text-lg leading-8 mb-20">
                    Использование теней в логотипе
                </p>
                <img src="{{asset('img/fourth/10.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl shadow-xl">
                <p class="text-lg leading-8 mb-20">
                    Не соблюдать охранное поле логотипа
                </p>
                <img src="{{asset('img/fourth/11.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl shadow-xl">
                <p class="text-lg leading-8 mb-20">
                    Использование обводки в логотипе
                </p>
                <img src="{{asset('img/fourth/12.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl shadow-xl">
                <p class="text-lg leading-8 mb-20">
                    Заливка паттерном
                </p>
                <img src="{{asset('img/fourth/13.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl shadow-xl">
                <p class="text-lg leading-8 mb-20">
                    Запрещено переворачивать логотип
                </p>
                <img src="{{asset('img/fourth/14.png')}}" class="mb-8" alt="">
            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-slate-500 border-2 rounded-xl shadow-xl">
                <p class="text-lg leading-8 mb-20">
                    Запрещено менять шрифт в логотипе
                </p>
                <img src="{{asset('img/fourth/15.png')}}" class="mb-8" alt="">
            </div>

            
        </div>
        




        <h3 class="text-2xl font-bold mb-8"></h3>
        <p class="text-lg leading-8 mb-20">
         
        </p>
        <img src="{{asset('')}}" class="mb-8" alt="">

        

        
            <div class="flex justify-center items-center mb-40">
                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("third")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">←
                    </a>
                </div>
                <div class="ml-10 relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("fifth")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">→
                    </a>
                </div>
              </div>


<script>
    window.addEventListener("scroll", function() {
        var scrollY = window.pageYOffset || document.documentElement.scrollTop;
        var winHeight = window.innerHeight || document.documentElement.clientHeight;
        var docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
        var scrollPercent = (scrollY / (docHeight - winHeight)) * 100;
        document.querySelector("#readingProgress").style.width = scrollPercent + "%";
    });

    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.add("hidden");
        }
        tablinks = document.getElementsByTagName("button");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active:bg-gray-200");
        }
        document.getElementById(tabName).classList.remove("hidden");
        evt.currentTarget.classList.add("active:bg-gray-200");
    }
</script>   

@include('partials.footer') 
@endsection