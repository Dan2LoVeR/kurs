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
    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8">Фирменный паттерн</h1>
        <p class="text-lg leading-8 mb-20">
            Осмотритесь вокруг. С вероятностью 90% вам на глаза попадался хотя бы один паттерн: на обоях, ковре или обложке книги. Повторяющиеся элементы часто применяют в дизайне всего, что нас окружает. Подобно мозаике, паттерны образуют гармонию, придавая визуалу глубину, выразительность. Поэтому они так популярны.
        </p>

        <h3 class="text-2xl font-bold mb-8">Особенности паттерна</h3>
        <p class="text-lg leading-8 mb-20">
            Паттерн в дизайне — это повторяющийся мотив, который используют для создания визуальной гармонии и структуры. Проще говоря, это узор с повторяющимися элементами: цветами, формами, текстурами или даже мотивами из природы или культуры.
            <br><br>
            Например, геометрические узоры, вдохновленные природными формами, часто встречаются в архитектуре, дизайне интерьера. Они вызывают ощущение гармонии и уравновешенности.
            <br><br>
            Использование паттернов в дизайне позволяет создать визуальную структуру, направить взгляд зрителя. Например, строгий повторяющийся рисунок на рекламных баннерах формирует ощущение порядка и спокойствия. А цветной и разнообразный привлекает внимание, создает ощущение движения.
            <br><br>
            Паттерны также вызывают эмоциональные реакции у человека. Например, если в них есть плавные мягкие линии, они создают ощущение комфорта. В то время как абстрактные и хаотичные паттерны, наоборот, провоцируют на динамичную реакцию.
            <br><br>
            Популярность этого элемента объясняется простотой его разработки и адаптивностью. Паттерны легко растянуть, обрезать в любой размер, не потеряв при этом в качестве. Их не нужно подгонять под разные носители. Ноутбук, смартфон, хоть электронная книга — в любой форме рисунок смотрится прекрасно. При необходимости можно прервать его в любой точке, напечатать на носителе самых разных размеров: от визитки до билборда. Качество и эстетичность от этого не пострадают.
        </p>

        <h3 class="text-xl font-bold mb-8">Примеры известных паттернов:</h3>
        <p class="text-lg leading-8 mb-20">
            1. Пейсли (Paisley) — персидский паттерн в виде капли или листа бутонного цветка, который широко используется в текстиле, моде. Например, его можно увидеть в новых коллекциях Ralph Lauren, Dolce & Gabbana;
            <br><br>
            2. Шеврон (Chevron) — графический узор, состоящий из повторяющихся угловых фигур, часто применяют в оформлении интерьера и графическом дизайне;
            <br><br>
            3. Nova Check — паттерн в виде клеток, ставший визитной карточкой бренда Burberry.
        </p>
        <img src="{{asset('img/sixth/1.png')}}" class="mb-8" alt="">
        <p class="text-lg leading-8 mb-20">
            Раз уж речь зашла о примерах, то давайте подробнее рассмотрим распространенные виды паттернов.
        </p>
        <h3 class="text-2xl font-bold mb-8">Виды паттернов</h3>
        <p class="text-lg leading-8 mb-20">
            Паттерны в фирменном стиле используют для подчеркивания уникальности бренда, создания привлекательного визуала. Это не просто орнамент с кружками или полосками, иногда он включает персонажей или прячет в себе элементы логотипа. Вот несколько основных видов паттернов с примерами.
        </p>

        <h3 class="text-xl mt-2 font-bold mb-8">Геометрические</h3>
                <p class="text-lg leading-8 mb-20">
                    Геометрические паттерны основаны на повторяющихся геометрических формах: линии, круги, треугольники, квадраты. Эти рисунки используют для создания структуры и порядка в дизайне.
                    <br>
                    Например, у Gucci есть фирменный узор Gucci Diamante, сочетающий повторяющиеся ромбы:
                </p>
                <img src="{{asset('img/sixth/2.png')}}" class="mb-8" alt="">
                <p class="text-lg leading-8 mb-20">
                    Для ювелирного бренда Harden мы в ENDY разработали фирменный паттерн, который использовали на упаковке и бирках. Он стал метафорой селективного драгоценного камня.
                </p>
                
                

        <div class="relative">
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center ">

                <img src="{{asset('img/sixth/3.png')}}" class="mb-8" alt="">

                


            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center">
                <img src="{{asset('img/sixth/4.png')}}" class="mb-8" alt="">
            </div>
            
        </div>



        <h3 class="text-xl mt-2 font-bold mb-8">Абстрактные</h3>
                <p class="text-lg leading-8 mb-20">
                    Абстрактные паттерны могут включать абстрактные формы, линии, цветовые комбинации. Часто применяют в оформлении упаковок, одежде.
                </p>
                <img src="{{asset('img/sixth/5.png')}}" class="mb-8" alt="">
                <p class="text-lg leading-8 mb-20">
                    В нашем на примере ребрендинга сети кулинарий КИО кухня видно как использовали паттерн как основной графический элемент, который нашел свое применение в упаковке, дизайне интерьера и коммуникациях.
                </p>
                
                

        <div class="relative">
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center ">

                <img src="{{asset('img/sixth/6.png')}}" class="mb-8" alt="">

                


            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center">
                <img src="{{asset('img/sixth/7.png')}}" class="mb-8" alt="">
            </div>
            
        </div>


        <h3 class="text-xl mt-2 font-bold mb-8">Орнамент</h3>
                <p class="text-lg leading-8 mb-20">
                    Орнаментальные паттерны основаны на традиционных узорах, орнаментах, часто вдохновленных историческими или этническими мотивами. Использование такого паттерна в дизайне может придать бренду узнаваемый и культурно-насыщенный облик.
                </p>
                <img src="{{asset('img/sixth/8.png')}}" class="mb-8" alt="">


                <h3 class="text-xl mt-2 font-bold mb-8">Минималистичные</h3>
                <p class="text-lg leading-8 mb-20">
                    Минималистичные паттерны отличаются простотой, четкостью форм. Их можно использовать для формирования современного образа бренда. Паттерн популярен в графическом дизайне, веб-дизайне, архитектуре.
                </p>
                <img src="{{asset('img/sixth/9.png')}}" class="mb-8" alt="">
                <p class="text-lg leading-8 mb-20">
                    Так, например, для компании по продаже руд и концентратов с драгоценными и цветными металлами ТРИСМЕГИСТ паттерн, который олицетворяет Великий Шелковый путь.</p>
                <img src="{{asset('img/sixth/10.png')}}" class="mb-8" alt="">




        <h3 class="text-xl mt-2 font-bold mb-8">Типографика</h3>
                <p class="text-lg leading-8 mb-20">
                    Паттерны с использованием типографики могут быть созданы с помощью повторяющихся слов, букв или фраз. Они применяются для передачи сообщений или ассоциаций.
                    <br><br>
                    Например, уже упоминавшийся бренд Burberry помимо Nova Check также использует паттерн с буквой B:</p>
                <img src="{{asset('img/sixth/11.png')}}" class="mb-8" alt="">


                
                <p class="text-lg leading-8 mb-20">
                    А в проекте для Перекресток Кафе x Много лосося использовали типографический паттерн, поддерживающий айдентику Много лосося, вместе с стилеобразующим элементом в виде листка клевера бренда Перекресток.</p>
                <img src="{{asset('img/sixth/12.png')}}" class="mb-8" alt="">
                
        



                <h3 class="text-xl mt-2 font-bold mb-8">С персонажами</h3>
                <p class="text-lg leading-8 mb-20">
                    Паттерны с персонажами представляют собой повторяющиеся изображения героев или фигур. Зачастую их используют для создания игривого, привлекательного образа бренда. Примером может служить использование изображений няшных персонажей в игрушках или одежде. Например, как делают LILKKO:
                </p>
                <img src="{{asset('img/sixth/13.png')}}" class="mb-8" alt="">
                <p class="text-lg leading-8 mb-20">
                    Или персонаж вьетнамского дедушки для проекта Дед ХО.</p>
                
                

        <div class="relative">
            <div class="sticky top-0 h-screen flex flex-col   ">

                <img src="{{asset('img/sixth/14.png')}}" class="mb-8" alt="">

                


            </div>
            <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white">
                <img src="{{asset('img/sixth/15.png')}}" class="mb-8" alt="">
            </div>
            
        </div>

        <h3 class="text-2xl font-bold mb-8">Область применения паттернов</h3>
        <p class="text-lg leading-8 mb-20">
            Паттерны используют практически во всех областях дизайна: при создании фирменного стиля, упаковки продуктов, мерче, других аспектах визуальной коммуникации.
        </p>


        <div class="relative">
            <div class="sticky top-0 h-screen flex flex-col  border-2 rounded-xl p-2">
                <h3 class="text-xl font-bold mb-4">Фирменный стиль</h3>
                <p class="text-lg leading-8 mb-8">
                    Паттерны широко применяются при создании фирменного стиля компании. Они выступают в качестве основы для дизайна логотипа, визиток, фирменной атрибутики и других элементов брендинга. Рисунок, ставший частью фирменного стиля, помогает усилить узнаваемость и запоминаемость бренда.</p>
                    <img src="{{asset('img/sixth/16.png')}}" class="mb-5" alt="">
                


            </div>
            <div class="sticky top-0 h-screen flex flex-col  bg-white border-2 rounded-xl">
                <h3 class="text-xl font-bold mt-8 mb-4">Веб-дизайн и графический дизайн</h3>
                <p class="text-lg leading-8 mb-8">
                    Паттерны могут быть использованы в качестве фона на сайтах, в рекламных баннерах, визитках и других элементах визуальной коммуникации.
                </p>  
                    <img src="{{asset('img/sixth/19.png')}}" class="mb-5" alt="">
            </div>
            
        </div>
    


        <div class="h-xl w-xl m-20"></div>

        <h3 class="text-2xl font-bold mt-8 mb-15">Как сделать паттерн самостоятельно</h3>
        <p class="text-lg leading-8 mb-20">
            Создание собственного паттерна в дизайне — увлекательный, творческий процесс, который позволяет дизайнерам выразить свой стиль. Вот подробное руководство по созданию собственного решения.
        </p>
        



        <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-xl m-12">
            <details class="p-6 group" open>
                
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        1. Выбор основы для паттерна
                    </h5>
        
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
        
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </summary>
        
                <p class="mt-4 leading-relaxed text-gray-700">
                    Это может быть геометрическая форма, растительный мотив, абстрактный элемент или любой другой объект, который вам близок.
                </p>
            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        2. Эскиз
                    </h5>
        
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
        
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </summary>
        
                <p class="mt-4 leading-relaxed text-gray-700">
                    Начните с создания нескольких эскизов, экспериментируя с различными композициями, расположением выбранной основы на поверхности. Исследуйте различные варианты, играйте с масштабом, повторением, распределением элементов.

                </p>
                
            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        3. Цветовые решения
                    </h5>
        
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
        
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </summary>
        
                <p class="mt-4 leading-relaxed text-gray-700">
                    Разработайте палитру для вашего рисунка. Выберите цвета, которые сочетаются между собой, подчеркивают желаемое настроение узора.
                </p>
            </details>


            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        4. Цифровое создание
                    </h5>
        
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
        
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </summary>
        
                <p class="mt-4 leading-relaxed text-gray-700">
                    После этого создайте цифровую версию паттерна с помощью графического редактора, такого как Adobe Illustrator или другого программного обеспечения для дизайна.
                    <br><br>
                    Например, в то же Illustrator вы можете создать повторяющийся узор, используя инструмент «Шаблон повторения» или путем создания мотива и заполнения им всей площади.</p>
            </details>

            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        5. Тестирование + корректировка
                    </h5>
        
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
        
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </summary>
        
                <p class="mt-4 leading-relaxed text-gray-700">
                    После создания цифровой версии рисунка, протестируйте его на различных поверхностях или примените к дизайну упаковки, одежды или других материалов. Внесите правки, если необходимо, чтобы добиться желаемого эффекта.     
                </p>
            </details>

            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        6. Использование паттерна
                    </h5>
        
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
        
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                </summary>
        
                <p class="mt-4 leading-relaxed text-gray-700">
                    Вы можете внедрить его в дизайн упаковки, одежды, веб-дизайн, интерьер или другие области.</p>
            </details>
        </div>


        <h3 class="text-2xl font-bold mb-8">Онлайн-генераторы паттернов</h3>
        <p class="text-lg leading-8 mb-20">
            Создать повторяющийся рисунок несложно даже для того, кто с дизайном на «вы». В сети достаточно ресуров для разработки узоров без особых знаний. Вот некоторые из них.
            <br><br>
            <a href="https://patterninja.com/" >Pattrninja</a> <br>
            В сервисе представлена большая коллекция изображений, которые без особых усилий можно переделать в оригинальный паттерн. Их легко обрезать, перемешать, добавить к ним графику. Скачать итоговую работу можно в форматах PNG или SVG.
        </p>
        




        <h3 class="text-2xl font-bold mb-8"></h3>
        <p class="text-lg leading-8 mb-20">
         
        </p>
        <img src="{{asset('img/sixth/')}}" class="mb-8" alt="">

        

        
            <div class="flex justify-center items-center mb-40">

                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("fifth")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">←
                    </a>
                </div>
                <div class="ml-10 relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("seventh")}}" title="Get quote now"
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