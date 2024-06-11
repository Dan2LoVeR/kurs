@extends('layout.app')
@section('title', 'Виды логотипов')
@section('content')
@include('partials.header')

<div class="fixed top-0 left-0 w-full h-2 ">
    <div class="h-full bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E]" id="readingProgress" style="width: 0;"></div>
</div>

<div class="w-full h-96 flex justify-center items-center">
    
    
    </div>
    <section></section>
<!-- sample article -->
<div >
    <div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" class="fixed w-full bottom-6 grid grid-cols-2 gap-4 place-content-between  z-50" x-show="isVisible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2" style="display: none;"> 
        <a href="{{route("lessons")}}"><button  class="inline-flex items-center  w-fit rounded-full bg-white px-3 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-grey-600">назад к лекциям</button></a>
   
        <button title="Scroll to top" aria-label="Scroll to top" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="inline-flex items-center ml-auto gap-x-2 w-fit rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-grey-600 ">
        наверх
       </button> 
       </div>
    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8">Презентационный щит</h1>
        <br>
        
        

        <div class="relative">
            <div class="sticky top-0 h-2/3 flex flex-col content-center mx-auto rounded-xl p-2 border-2">
                <h3 class="text-xl font-bold mt-8 mb-4 mx-auto">Необходимые элементы</h3>
                <p class="text-lg leading-8 mb-8 mx-auto">
                 <br> •Логотип
                    <br>•Правила использования
                    <br>•Фирменная гарнитура
                    <br>•Фирменные цвета
                    <br>•Демонстрация фирменного паттерна
                    <br>•Фирменный бланк
                    <br>•Конверт
                    <br>•Бейдж с фотографией
                    <br>•Дизайн папки
                    <br>•Блокнот
                    <br>•Футболка
                    <br>•Оформление машины
                </p>
                    
                


            </div>
            <div class="sticky top-0 h-1/2 flex flex-col  bg-white border-2 rounded-xl">
                <h3 class="text-xl font-bold mt-8 mb-4 mx-auto">Технические параметры</h3>
                <p class="text-lg leading-8 mb-8 mx-auto">
                    <br>•Формат А3
                    <br>•Цвет CMYK
                    <br>•Профиль под печать FOGRA 39 для мелованной бумаги
                    
                </p>
            </div>
            
            
            <div class="sticky top-0 h-1/2 flex flex-col  bg-white border-2 rounded-xl">
                <h3 class="text-xl font-bold mt-8 mb-4 mx-auto">Выходные файлы</h3>
                <p class="text-lg leading-8 mb-8 mx-auto">
                    <br>•Рабочий документ
                    <br>•pdf x1a 2003 года
                    
                    
                </p>
            </div>
            
            
        </div>
    


        <h3 class="text-2xl font-bold mb-8">Создание проекта</h3>
        <p class="text-lg leading-8 mb-20">
            1. Создаем новый файл — Ctrl N.
            <br><br>
            2. В панели Print выбираем формат А3, горизонтальный.
            <br><br>
            3. Нажимаем Create.
            <br><br>
            4. Перемещаем все необходимые элементы.
            <br><br>
            5. Если наш объект создан с учетом вылетов под обрез, то стоит для него создать обтравочную маску, которая будет повторять его точный размер без дополнительных миллиметров.
            <br><br>
            6. Создаем обтравочные маски:
            создаем форму по размеру монтажной области
            выделяем все объекты под ней
            ПКМ –> Make clipping mask (создать обтравочную маску).
        </p>
        <img src="{{asset('img/nineth/1.png')}}" class="mb-8" alt="">


        <h3 class="text-2xl font-bold mb-8">Создание макета щита</h3>
        <p class="text-lg leading-8 mb-20">
            1. Покажем основной логотип, его дополнительные вариации, а потом его цветовые версии. Все это лучше размещать поблочно.
            <br><br>
            2. Вставляем фирменный паттерн. Им можно отделить верхнюю часть с описанием фирменного стиля от нижней, где у нас будут показаны продукты.
        </p>
        <img src="{{asset('img/nineth/2.png')}}" class="mb-8" alt="">
        <p class="text-lg leading-8 mb-20">
            3. Уменьшаем объекты в масштабе относительно друг другу с помощью зажатой клавиши Shift.
            <br><br>
            4. Добавляем бланк, это основная часть фирменного стиля.
            <br><br>
            5. Чтобы белое было видно на белом, добавим тени:
            заходим в меню Эффект
            выбираем Стилизация и Тень
            настраиваем тень, чтобы она не была слишком навязчивой, а просто создавала контур.
            <br><br>
            6. Располагаем папку и конверт.
            <br><br>
            7. Регулируем масштаб, чтобы продукты выглядели реалистично.
            <br><br>
            8. Вставляем блокнот.
        </p>

        <p class="text-lg leading-8 mb-20">
            9. Бейджик у нас маленький, поэтому сделаем его примерно такого же размера, как он есть в реальности.
            <br><br>
            10. Необходимо извлечь узор. Группируем и уменьшаем.
            <br><br>
            11. Добавляем паттерн.
        </p>
        <img src="{{asset('img/nineth/3.png')}}" class="mb-8" alt="">

        
        <h3 class="text-2xl font-bold mb-8">Сохранение</h3>
        <p class="text-lg leading-8 mb-20">
            1. Нажимаем Command / Ctrl Shift S.
            <br><br>
            2. Сохраняем файл, назвав его «Презентационный щит».
            <br><br>
            3. Сохраняем исходный файл в разрешение AI и файл pdf для печати.
            <br><br>
            4. Выбираем Preset pdf x1a и стандарт x1 pdf a3 2003.
            <br><br>
            5. Выставляем FOGRO 39.
            <br><br>
            6. Сохраняем.
        </p>




        <h3 class="text-2xl font-bold mb-8"></h3>
        <p class="text-lg leading-8 mb-20">
         
        </p>
        <img src="{{asset('img/nineth/')}}" class="mb-8" alt="">

        

        
            <div class="flex justify-center items-center mb-40">

                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("eighth")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">←
                    </a>
                </div>
                <div class="ml-10 relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="1test" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">Начать тестирование
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