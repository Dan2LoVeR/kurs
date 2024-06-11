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
        <h1 class="text-4xl font-bold mb-8">Бейдж. Назначение, виды, примеры. Создание бэйджа</h1>
        <p class="text-lg leading-8 mb-20">
         
Пластиковый бейдж с прямой печатью на ленте
На сегодняшний день бейджики для сотрудников — это больше, чем простые информационные носители и идентификаторы. Они являются одним из важнейших атрибутов корпоративной культуры и эффективным средством, помогающим налаживать деловые коммуникации. Так, из обыденного элемента униформы или делового костюма бейджик превратился в достаточно эффектное дополнение общего имиджа сотрудника.

Идентифицировать работников или гостей какого-либо мероприятия, сотрудников масс-медиа, а также технический персонал помогают сегодня именно бейджики — купить такие полезные элементы униформы в различных вариантах исполнения стремятся самые разные организации и учреждения государственного типа.
        </p>



        <h3 class="text-2xl font-bold mb-8">Особенности изготовления бейджиков: материалы и типы крепления</h3>
        <p class="text-lg leading-8 mb-20">
            Если рассматривать материал исполнения, то основную массу бейджиков можно разделить на две группы:
        </p>




        <div class="relative">
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center ">

                <div class="flex flex-wrap items-center  text-left text-center">
                    <div class="w-full md:w-3/5 lg:w-1/2 px-4">
                        <img src="img/eighth/1.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    <div class="w-full md:w-2/5 lg:w-1/2 px-4 text-center md:text-left lg:pl-12">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Металлические бейджики
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Чаще всего выполняются из алюминия и его сплавов. Этот металл позволяет создавать практичные изделия с прекрасным внешним видом. Но следует помнить, что алюминий хорошо гнется, и на пластинке могут остаться следы излома. На его поверхности весьма отчетливо будут видны любые царапинки и дефекты, да и стоимость его немного выше, чем у любого аналога из пластика. Изображение на такой бейдж наноситься с помощью сублимации на металле. Данная технология позволяет нанести любую картинку фотографического качества, с высоким уровнем износостойкости.
                        </p>
                    </div>
                </div>

                


            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-2 rounded-xl">
                
                <div class="flex flex-wrap items-center mt-20 text-left text-center">
                    <div class="w-full md:w-3/5 lg:w-1/2 px-4">
                        <img src="img/eighth/2.jpg" alt="project members" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    <div class="w-full md:w-2/5 lg:w-1/2 px-4 md:order-first text-center md:text-left lg:pr-12">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Пластиковые бейджики
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Более доступными по цене и не менее интересными по внешнему виду являются бейджики из пластика, вариантов исполнения, которых достаточно много. Благодаря легкости обработки материала такие изделия могут выполняться любого размера и формы, а полноцветная печать обеспечивает прекрасный внешний вид. Пластиковые бейджики отличаются легкостью, практичностью и износостойкостью, а некоторые их виды могут использоваться многократно. Полноцветная печать позволяет создать уникальный дизайн для любого заказчика. Изготовление бейджей на основе пластика, как правило, не занимает много времени, поэтому даже срочный заказ можно выполнить к намеченному сроку.
                        </p>
                    </div>
                </div>

            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white">

                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Металлические бейджики
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Чаще всего выполняются из алюминия и его сплавов. Этот металл позволяет создавать практичные изделия с прекрасным внешним видом. Но следует помнить, что алюминий хорошо гнется, и на пластинке могут остаться следы излома. На его поверхности весьма отчетливо будут видны любые царапинки и дефекты, да и стоимость его немного выше, чем у любого аналога из пластика. Изображение на такой бейдж наноситься с помощью сублимации на металле. Данная технология позволяет нанести любую картинку фотографического качества, с высоким уровнем износостойкости.
                        </p>
                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/3.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                    <p class="sm:text-lg mt-6">
                        Если же рассматривать пластиковые изделия, то их мир достаточно разнообразный, поэтому стоит познакомиться с основными видами таких бейджиков поближе.</p></div>
                </div>
            </div>
            
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-2 rounded-xl">
                
                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Бейджи с прямой печатью 
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Представляют собой пластиковые изделия различных размеров и форм с полноцветной печатью. Логотип компании или мероприятия, а также ФИО сотрудника или участника наносятся непосредственно на пластиковую заготовку, которая покрывается защитным покрытием. Чаще всего в качестве крепления для этих бейджиков выбирают ленту с карабином или специальные клипсы на прозрачном ремешке. Существуют стандартные размеры для производства: 86х54 мм, 100х70 мм или 90х140 мм, для остальных размеров и форм необходимо изготавливать специальное клише.
                        </p>
                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/4.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    
                </div>
            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white ">
                
                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Печать на заготовках 
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Одним из самых простых вариантов исполнения является печать на заготовках определенных цветов и размеров. Такие изделия отличаются одними из самых коротких сроков исполнения, но нанесенный рисунок не столь долговечен, так как технология тампопечати не обеспечивает высокой износостойкости рисунка или надписи.
                            <br>
                            Усиленным вариантом данной модели является Ret-122М. Круглый ретрактор имеет одну важную особенность — металлический тросик с пластиковой изоляцией. Этот элемент повышает надежность крепления и улучшает эксплуатационные характеристики изделия. Данная модель доступна только в белом цвете.
                            </p>
                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/5.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    
                </div>
            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-2 rounded-xl">
                
                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Бейджи с окном
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Такой вариант является одним из самых распространенных для корпоративного использования. Бейджики выполняются в виде моделей с нишей и прорезью для вставки любой информации. По желанию клиента могут изменяться соотношение основной и сменной части, а также форма окна. Подобные изделия могут использоваться разными сотрудниками, что сокращает издержки компании. Если выбор клиента пал на бейджи с окном, а объем заказа превышает 1000 штук, гораздо выгоднее приобрести изделия со сменной панелью

                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/6.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    
                </div>
            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white ">
                
                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Бейджи со сменной панелью
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Разновидностью модели с окном является вариант со сменной панелью из плотного прозрачного пластика. Непосредственно вырезанного окошка, в отличие от других видов бейджей, тут нет. В данной модели за окно выступает прозрачная, не запечатанная область, на лицевой стороне бейджа, через которую отлично видно табличку со сменной информацией.
                        </p>
                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/7.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    
                </div>
            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-2 rounded-xl">
                
                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Бейджи со сменной наклейкой
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Такие модели выполняются посредством печати основной статической информации непосредственно на пластиковой заготовке. Для внесения персональных данных оставляет пустое поле, куда приклеивается бумажная наклейка с именем сотрудника или иной переменной информацией. Такие модели являются самими экономичными и могут использоваться многими работниками благодаря простой смене наклейки    
                        </p>
                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/8.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    
                </div>
            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white ">
                
                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Бейджи с гравировкой
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Подобные бейджи производятся из двухслойного пластика с разным цветом верхнего и нижнего слоя. В процессе нанесения изображения верхний слой снимается и бейджик приобретает объемный рисунок цветом нижнего слоя. Изделия могут иметь любую форму и размер. Долговечность и надежность изображения в данной модели самая высокая, но стоит помнить, что разнообразие цветовых решений тут ограничено.
                         </p>
                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/9.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    
                </div>
            </div>

            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white border-2 rounded-xl">
                
                <div class="items-center mx-auto text-left text-center">
                    
                    <div class=" mx-auto w-full  px-4 text-center md:text-left ">
                        <h3 class="font-bold mt-8 text-xl md:mt-0 sm:text-2xl">
                            Бейджи со смоляной наклейкой
                        </h3>
                        <p class="sm:text-lg mt-6">
                            Такие изделия могут выполняться как с окном для смены информации, так и в именном варианте шильда. Использование смолы придает тексту объем, а сам бейджик смотрится более эффектно и презентабельно.
                        </p>
                    </div>

                    <div class="mx-auto w-full  px-4">
                        <img src="img/eighth/10.jpg" alt="gem" class="inline-block rounded shadow-lg border border-merino-400">
                    </div>
                    
                </div>
            </div>


            
        </div>











        


        <h3 class="text-2xl font-bold mb-8"></h3>
        <p class="text-lg leading-8 mb-20">
         
        </p>
        <img src="{{asset('img/sixth/')}}" class="mb-8" alt="">

        

        
            <div class="flex justify-center items-center mb-40">
                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("seventh")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">←
                    </a>
                </div>
                <div class="ml-10 relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("nineth")}}" title="Get quote now"
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