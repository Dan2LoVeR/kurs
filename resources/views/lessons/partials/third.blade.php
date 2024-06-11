@extends('layout.app')
@section('title', 'Основы')
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
        <h1 class="text-4xl font-bold mb-8">Работа с цветовой палитрой</h1>
        
        
        <p class="text-lg leading-8 mb-20">
            Взаимодействие человека и компьютера в значительной степени основано на графических элементах пользовательского интерфейса, и цвет играет в этом важную роль. Как однажды сказал художник Пьер Боннар:
            <br><br>
            Цвет не добавляет приятного качества в дизайн – он его усиливает.
            <br><br>
            При разработке нового продукта часто бывает сложно определить цветовую схему из-за бесконечного количества возможных комбинаций цветов. В этой статье мы рассмотрим восемь основных правил, которые помогут вам выбрать правильную цветовую палитру.
        </p>


        <h3 class="text-2xl font-bold mb-8">Ограничьте количество цветов</h3>

        


        <p class="text-lg leading-8 mb-20">
            Применение цвета к дизайн проекту имеет много общего с балансом. Чем больше цветов вы используете, тем труднее достичь этого баланса. Вы добьетесь лучших результатов, если будете придерживаться максимум трех основных цветов в вашей цветовой гамме. Согласно исследованию Университета Торонто о том, как люди использовали Adobe Color CC, большинство людей заявили, что предпочитают простые цветовые комбинации, которые опираются только на два или три цвета.

            Если вам нужны дополнительные цвета, кроме тех, которые вы задали в своей палитре, используйте оттенки и тона.
        </p>


        <h4 class="text-xl font-bold mb-8">Как создать цветовую схему</h4>

        <p class="text-lg leading-8 mb-20">
            Итак, как вы выберете два или три цвета? Цветовой круг может помочь.
        </p>
        
        <img src="{{asset('img/third/1.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            Круг с 12 цветами является важным инструментом для создания цветовых схем
        </p>

        <p class="text-lg leading-8 mb-5">
            Существует ряд предопределенных стандартов цветовой схемы, которые упрощают создание новых схем, особенно для новичков:
        </p>        
        <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-xl m-12">
            <details class="p-6 group" open>
                
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        1. Монохроматическая
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
                    Монохроматические схемы являются простейшими для создания, поскольку все они взяты из одного цвета, но включают изменения в насыщенности, оттенках и тонах. Монохроматические цвета хорошо сочетаются, создавая успокаивающий эффект.
                </p>
                <img src="{{asset('img/third/2.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
                <p class="mt-4 leading-relaxed text-gray-700">
                    Монохроматическая схема очень приятна на вид (особенно синий или зеленый оттенки). Как вы можете видеть на примере Facebook, схема выглядит чистой и элегантной.
                </p>
            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        2. Аналоговая
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
                    Аналоговые цветовые схемы создаются из смежных цветов. Один цвет используется как доминирующий, в то время как другие используются для обогащения схемы. Хотя это относительно легко, трюк заключается в том, чтобы решить резонанс используемых цветов, поскольку вся схема будет преувеличена им. Например, Clear – приложение для составления и организации списков дел, использует яркие аналоговые цвета для визуального определения приоритетов вашего текущего набора задач. В то время как, приложение для медитации Calm, использует синие и зеленые аналоговые цвета, чтобы помочь пользователям чувствовать себя спокойными и умиротворенными.
                </p>
                <img src="{{asset('img/third/3.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
                <p class="mt-4 leading-relaxed text-gray-700">
                    Аналоговые схемы создаются с использованием трех цветов, расположенных рядом друг с другом на 12-цветном круге. Clear – приложение для составления и организации списков дел, использует яркие аналоговые цвета для визуального определения приоритетов вашего текущего набора задач.


                </p>
                <img src="{{asset('img/third/4.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
                <p class="mt-4 leading-relaxed text-gray-700">Calm использует аналоговые цвета, чтобы создать общее настроение.</p>
            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        3. Дополнительная
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
                    В своей основе такой схемы лежат только два цвета, которые сильно контрастируют. Эта схема используется для привлечения внимания пользователя. При использовании дополнительной схемы важно выбрать доминирующий цвет, а дополнительный цвет использовать для акцентов. Например, когда человеческий глаз видит объект, полный различных оттенков зелени, немного красного цвета очень хорошо выделяется.
                </p>
                <img src="{{asset('img/third/5.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
                <p class="mt-4 leading-relaxed text-gray-700">
                    Использование дополнительных цветов – простейший способ выделить что-то.
                </p>
            </details>


            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        4. Пользовательская.
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
                    Создание пользовательской цветовой схемы не так сложно, как многие думают. Существует простой трюк, который можно использовать для создания великолепной цветовой палитры: просто добавьте яркий цвет для акцента в нейтральную палитру (например, традиционную монохроматическую схему). Полученная схема будет очень визуально яркой.
                </p>
                <img src="{{asset('img/third/6.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
                <p class="mt-4 leading-relaxed text-gray-700">
                    Добавление одного цвета в дизайн в оттенках серого просто и эффективно привлекает внимание. Макет с сочетанием белого и серого с синими акцентами в цветовой схеме Dropbox.
                </p>
            </details>
        </div>

        <h3 class="text-2xl font-bold mb-8">Вдохновляйтесь природой</h3>

        <p class="text-lg leading-8 mb-20">Лучшие цветовые комбинации можно встретить в природе. Почему? Потому что эти схемы кажутся естественными для глаз. Чтобы найти вдохновение, нам нужно всего лишь осмотреться вокруг. Если вы видите особенно красивый или яркий цвет в повседневной жизни, попробуйте создать схему вокруг него. Просто сделайте снимок красивого момента и создайте на его основе свою цветовую схему.</p>

        <img src="{{asset('img/third/7.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            Лучшие цветовые комбинации встречаются в природе. Вы можете создать цветовую схему из фото.
        </p>






        <h3 class="text-2xl font-bold mb-8">Пытайтесь следовать правилу 60–30–10</h3>

        <p class="text-lg leading-8 mb-20">
            Это вечное правило декорирования, которое может помочь вам легко составить цветовую схему. Пропорции 60% + 30% + 10% предназначены для обеспечения баланса цветов, используемых в любом пространстве.
            <br><br>
            Эта концепция невероятно проста в использовании: 60% – ваш доминирующий оттенок, 30% – вторичный цвет, а 10% – цвет акцента. Идея состоит в том, что вторичный цвет поддерживает основной цвет, но они достаточно отличаются, чтобы разделять их. Ваши 10% – цвет акцента. Это может быть цвет для призыва к действию или другого элемента, который вы хотите выделить.
        </p>

        <img src="{{asset('img/third/8.jpg')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            60% – ваш доминирующий оттенок, 30% – вторичный цвет и 10% – цвет для акцента. Этот метод позволяет глазу удобно перемещаться из одной фокусной точки в другую.
        </p>




        <h3 class="text-2xl font-bold mb-8">Сначала дизайн в оттенках серого</h3>

        <p class="text-lg leading-8 mb-20">
            Игра с цветом – это весело. Именно поэтому выбор цветовой схемы – одна из первых вещей, которые мы делаем в новых проектах. Это, действительно, заманчиво сперва подобрать цветовую схему, но я рекомендую вместо этого заставить себя сначала проектировать в оттенках серого. Создайте прототип своего приложения в градациях серого и используйте его в качестве основы. Проектирование в оттенках серого перед добавлением цвета заставляет вас сосредоточиться на расположении элементов.
            <br><br>
            Добавьте цвет в самом конце, и даже тогда, только с определенной целью.
        </p>

        <img src="{{asset('img/third/9.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            Добавление одного цвета в макет с оттенками серого привлекает взгляд просто и эффективно.
        </p>





        <h3 class="text-2xl font-bold mb-8">Избегайте использования черного цвета</h3>

        <p class="text-lg leading-8 mb-20">
            В реальной жизни чистый черный почти никогда не встречается. Все “черные” объекты вокруг нас имеют некоторое количество света, отражающегося от них, а это значит, что они не совсем черные, они темно-серые. Дороги не черные. Тени не черные.
        </p>

        <img src="{{asset('img/third/10.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            Цвет этой собаки темно-серый, а не черный.
            <br><br>
            Когда вы помещаете чистый черный цвет рядом с набором тщательно подобранных цветов, черный все пересилит. Он выделяется, потому что это не естественно. В большинстве приложений, которые мы ежедневно используем, есть черные цвета, которые на самом деле не черные, но темные серые. Например, самый темный цвет на верхней панели Asos не # 000000, это # 242424. Поэтому не забудьте всегда добавить немного насыщенности в свой цвет.
        </p>

        <img src="{{asset('img/third/11.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            Самый темный цвет у ASOS – не черный
        </p>



        <h3 class="text-2xl font-bold mb-8">Подчеркните важность, используя цветовой контраст</h3>

        <p class="text-lg leading-8 mb-20">
            Цвет – инструмент, который может помочь направить взгляд. Чем больше вы хотите что-то выделить, тем больше вы должны полагаться на контрастные цвета. Как правило, высокий контраст – лучший выбор для важного контента или ключевых элементов. Если вы хотите, чтобы пользователи увидели или щелкнули что-нибудь, сделайте это выделяющимся!
        </p>

        <img src="{{asset('img/third/12.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            Контрастность заставляет выделенную область отличаться от остальной части экрана. Чем больше вы хотите что-то выделить, тем больше вы должны полагаться на контрастные цвета.
        </p>





        <h3 class="text-2xl font-bold mb-8">Используйте цвет для воздействия на эмоции пользователей</h3>

        <img src="{{asset('img/third/.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
            Известно, что цвета имеют присущие им значения и могут вызывать эмоции. Эти значения будут иметь прямое влияние на то, как ваши пользователи воспринимают ваш продукт.
        </p>


        <p class="text-lg leading-8 mb-5">
            Когда вы выбираете цветовую палитру для своего приложения / сайта, вы не можете просто думать о том, как все выглядит – вы должны думать о том, как все ощущается. Цвета, которые вы выбираете, могут работать за или против идентичности бренда, которую вы пытаетесь создать. Для начала, я составил краткое справочное руководство, которое охватывает основные ассоциации с каждым цветом (в западном мире).Когда вы выбираете цветовую палитру для своего приложения / сайта, вы не можете просто думать о том, как все выглядит – вы должны думать о том, как все ощущается. Цвета, которые вы выбираете, могут работать за или против идентичности бренда, которую вы пытаетесь создать. Для начала, я составил краткое справочное руководство, которое охватывает основные ассоциации с каждым цветом (в западном мире).
        </p>        
        <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-xl m-12">
            <details class="p-6 group" open>
                
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        Красный, Оранжевый, Желтый
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
        
                <section class="flex flex-col  justify-center items-center ">
                    

                    <div class="flex flex-wrap  md:flex-nowrap mt-6 pt-12">
                    
                     <div class="relative flex flex-col sm:w-300  items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                     
                        <article class="mx-auto  rounded-3xl overflow-hidden  bg-red-600 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group">
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Красный (Страстный, Мощный, Опасный, Важный): Красный – чрезвычайно стимулирующий цвет. </p>
                        </div>
                       </div>
                      </article>
                     </div>
                     <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                      <article class="mx-auto   rounded-3xl overflow-hidden  bg-orange-400 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Оранжевый (игривый, энергичный, привлекательный, дешевый): Оранжевый – теплый и полный жизни цвет.  </p>
                        </div>
                       </div>
                      </article>
                     </div>
                     <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                      <article class="mx-auto   rounded-3xl overflow-hidden  bg-yellow-400 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Желтый (веселый, стимулирующий, привлекающий внимание): Желтый – чрезвычайно универсальный цвет.</p>
                        </div>
                       </div>
                      </article>
                     </div>
                    </div>
                    
                </section>   
            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        Зеленый, синий, фиолетовый
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
        
                <section class="flex flex-col  justify-center items-center ">
                    

                    <div class="flex flex-wrap  md:flex-nowrap mt-6 pt-12">
                    
                     <div class="relative flex flex-col sm:w-64  items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                     
                        <article class="mx-auto   rounded-3xl overflow-hidden  bg-green-400 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group">
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Зеленый (природный, безопасный, свежий, натуральный): зеленый отражает чувство окружающей среды и  природы. </p>
                        </div>
                       </div>
                      </article>
                     </div>
                     <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                      <article class="mx-auto   rounded-3xl overflow-hidden  bg-blue-400 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Синий (успокаивающий, ответственный, надежный): синий часто ассоциируется со спокойными и расслабляющими эмоциями.  </p>
                        </div>
                       </div>
                      </article>
                     </div>
                     <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                      <article class="mx-auto   rounded-3xl overflow-hidden  bg-purple-400 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Фиолетовый (Роскошный, Таинственный, Романтичный, Духовность): фиолетовый намекает, что продукт высокого класса.</p>
                        </div>
                       </div>
                      </article>
                     </div>
                    </div>
                    
                </section>  


            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        Черный, Белый, Серый
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
        
                <section class="flex flex-col  justify-center items-center ">
                    

                    <div class="flex flex-wrap  md:flex-nowrap mt-6 pt-12">
                    
                     <div class="relative flex flex-col sm:w-64  items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                     
                        <article class="mx-auto   rounded-3xl overflow-hidden  bg-slate-950 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group">
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Черный (мощный, утонченный, загадочный, трендовый): черный привлекает внимание быстрее, чем другие цвета. </p>
                        </div>
                       </div>
                      </article>
                     </div>
                     <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                      <article class="mx-auto   rounded-3xl overflow-hidden  bg-slate-100 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Белый (чистота, здоровье, чистоплотность, невинность): белый делает акцент на других цветах вокруг него.  </p>
                        </div>
                       </div>
                      </article>
                     </div>
                     <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
                      <article class="mx-auto   rounded-3xl overflow-hidden  bg-slate-500 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
                       <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
                        <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">
                         <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> Серый (нейтральный, формальный, изысканный, стерильный): серый цвет представляет нейтральность, .</p>
                        </div>
                       </div>
                      </article>
                     </div>
                    </div>
                    
                </section>  
            </details>


            
        </div>


        
        <h3 class="text-2xl font-bold mb-8">Сделайте свой дизайн доступным</h3>

                <p class="text-lg leading-8 mb-20">
                    Доступность – ключевой момент при проектировании с цветом. Сегодняшние продукты должны быть доступны для всех – независимо от способностей человека.
                </p>

                <h3 class="text-xl font-bold mb-8">Избегайте использования цвета в качестве индикатора</h3>

                <p class="text-lg leading-8 mb-20">
                    Примерно 8% мужчин и 0,5% женщин страдают от некоторой формы цветовой слепоты. Это 1 из 12 мужчин и 1 из 200 женщин. Хотя существует несколько форм этого заболевания, красно-зеленая цветовая слепота является наиболее распространенной. Человек, страдающий этой формой дальтонизма, обычно испытывает проблемы с различиями как красного, так и зеленого цветов.
            </p>
            <img src="{{asset('img/third/16.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
            <p class="text-lg leading-8 mb-20">
                Как видит цвета человек с нормальным зрением и те же цвета человек с красно-зеленой цветовой слепотой (дейтеронопия и протанопия).
                <br><br>
                Поскольку цветовая слепота принимает различные формы (в том числе красно-зеленую, сине-желтую и монохроматическую), важно использовать несколько визуальных сигналов для передачи важных состояний в вашем продукте. В дополнение к цвету используйте элементы, такие как штрихи, индикаторы, шаблоны, текстуры или текст для описания действий и контента.
            </p>
            <img src="{{asset('img/third/17.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
            <p class="text-lg leading-8 mb-20">
                Избегайте использования только красных и зеленых цветов для передачи информации, потому что это может быть чрезвычайно неприятным для людей, которые не могут видеть красные символы.
            </p>

                <h3 class="text-xl font-bold mb-8">Избегайте низкой контрастности текста</h3>
                <p class="text-lg leading-8 mb-20">
                    Цветовая контрастность – это одна из областей, где теория цвета имеет решающее значение для удобства использования дизайна. Когда вы используете цвета в тексте, имейте в виду, что размещение двух цветов с низким значением контраста рядом друг с другом может сделать ваш текст очень трудным для чтения.
                </p>
                <img src="{{asset('img/third/18.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
                <p class="text-lg leading-8 mb-20">
                    Низкоконтрастный текст – это то, что может потенциально нарушить удобство использования многих приложений.
                    <br><br>
                    Проверьте контраст, чтобы цвета фона и переднего плана отображались с достаточным контрастом для человека, страдающего дальтонизмом или плохо видящего человека. Это, действительно, не так сложно – все, что вам нужно сделать, это проверить коэффициент контрастности. Коэффициент контрастности показывает, как отличается цвет от другого цвета (обычно это 1: 1 или 21: 1). Чем выше разница между двумя числами в соотношении, тем больше разница в относительной яркости между цветами. W3C рекомендует следующие коэффициенты контрастности для текста и текста на изображении:
                    <br><br>
                    •Маленький текст должен иметь коэффициент контрастности не менее 4,5: 1 по отношению к фону. <br>
                    •Большой текст (при 14 pt жирный / 18 pt обычный) должен иметь коэффициент контрастности по крайней мере 3: 1 по отношению к фону. <br><br>
                    Хорошие новости, вам не нужно проверять их вручную. Используя инструмент Color Contrast Checker, вы можете проверить свои цветовые комбинации всего за несколько кликов.
                </p>
                <img src="{{asset('img/third/19.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
                <p class="text-lg leading-8 mb-20">
                    Программа проверки цветового контраста от Webaim
                </p>
        

        
        
            <div class="flex justify-center items-center mb-40">
                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("second")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">←
                    </a>
                </div>
                <div class="ml-10 relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("fourth")}}" title="Get quote now"
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