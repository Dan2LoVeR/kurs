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
        <h1 class="text-4xl font-bold mb-8">Виды и назначения визиток</h1>
        <p class="text-lg leading-8 mb-20">
            Визитная карточка является важной частью делового этикета. Она помогает человеку представиться и обменяться контактами с потенциальными партнёрами или клиентами. 
        </p>
            <fieldset class="text-xl max-w-sm border-4 border-orange-500 rounded-lg p-2 mb-5">
                <legend class="px-2 text-xl  underline decoration-orange-500/60 decoration-2"> Визитка позволяет: 
                </legend>
                <div class="flex flex-col gap-2 px-2 text-md ">
                    • сообщить контактные данные
                    <hr>
                    • презентовать себя и рассказать о своей работе
                    <hr>
                    • подчеркнуть статус делового человека
                    <hr>
                    • запомниться, если карточка имеет оригинальный вид
                    <hr>
                    • ОГРН
                    <hr>
                    • контактные данные
                    
                </div>
            </fieldset>
            <p class="text-lg leading-8 mb-20">Визитки часто используют для нетворкинга в профессиональной сфере. Непосредственно после знакомства на различных мероприятиях собеседники обмениваются карточками. Визитка напоминает о человеке, его деятельности и позволяет связаться с ним при необходимости.    
            </p>
            
            <h3 class="text-2xl font-bold mb-8">Какие визитные карточки бывают</h3>
            <p class="text-lg leading-8 mb-20">
                Существуют разные виды визитных карточек: деловые, корпоративные, личные. Хотя они похожи по своему предназначению, но несколько отличаются содержанием.
            </p>

            <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-xl m-12">
                <details class="p-6 group" open>
                    
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            1. Деловые
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
                        На карточках обязательно указывают имя, фамилию, должность, название и реквизиты компании. Добавляют рабочий телефон и email специалиста. При оформлении используют фирменный стиль компании, логотип, слоган и иные брендовые элементы.</p>
                    <img src="{{asset('img/seventh/1.png')}}" class="mb-8" alt="">
                    <p class="mt-4 leading-relaxed text-gray-700">
                        Если деловая визитка принадлежит частному специалисту, то на ней нужно указать имя, фамилию, специализацию и контактные данные. Иногда добавляют краткий перечень основных услуг или важные условия сотрудничества. 
                        <br><br>
                        Карточку частного специалиста оформляют в более свободном стиле, что особенно актуально для людей творческих профессий. 
                     </p>
                     <img src="{{asset('img/seventh/2.jpg')}}" class="mb-8" alt="">
                </details>
            
                <details class="p-6 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            2. Корпоративные
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
                        Это визитка не конкретного сотрудника, а компании в целом. Здесь указывают название бренда, сферу деятельности, перечень услуг, адрес, телефон, email, ссылку на официальный сайт. При необходимости добавляют адреса филиалов. Карточки оформляют в корпоративном стиле.
                            <br><br>
                        Такие визитки чаще всего используют для рекламы — раздают на мероприятиях, вручают на деловых встречах с партнёрами и поставщиками, вкладывают в коммерческие предложения и каталоги, дарят новым клиентам, оставляют в зоне ресепшн. Иногда на них добавляют слоган или рекламное предложение.  </p>
                    <img src="{{asset('img/third/3.png')}}" class="mb-8" alt="">
                    <p class="mt-4 leading-relaxed text-gray-700">
                        Аналоговые схемы создаются с использованием трех цветов, расположенных рядом друг с другом на 12-цветном круге. Clear – приложение для составления и организации списков дел, использует яркие аналоговые цвета для визуального определения приоритетов вашего текущего набора задач.
    
    
                    </p>
                    <img src="{{asset('img/seventh/3.png')}}" class="mb-8" alt="">
                    
                </details>
            
                <details class="p-6 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            3. Личные
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
                        Их используют для знакомств, которые не связаны с профессиональной деятельностью. Владелец сам решает, что сообщить о себе собеседнику. Чаще всего это имя и фамилия, а также адрес, телефон, email. </p>
                    <img src="{{asset('img/seventh/4.png')}}" class="mb-8" alt="">
                    
                </details>
    
    
            </div>
        
        
            <h3 class="text-2xl font-bold mb-8">Правила оформления визитки</h3>
        <p class="text-lg leading-8 mb-20">
            При оформлении визитной карточки только владелец решает, как она должна выглядеть. Но принято придерживаться определенных стандартов. 
        </p>


        <h3 class="text-2xl font-bold mb-8">Формат</h3>
        <p>
            К общепопулярным стандартам относят следующие размеры: 
        </p>

        <div class="flex flex-wrap  md:flex-nowrap mt-6 pt-12">
                    
            <div class="relative flex flex-col sm:w-64  items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
            
               <article class="mx-auto   rounded-3xl overflow-hidden  bg-slate-200 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group">
              <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
               <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">90×50 мм
                <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> стандартный формат, который распространён в России </p>
               </div>
              </div>
             </article>
            </div>
            <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
             <article class="mx-auto   rounded-3xl overflow-hidden  bg-slate-200 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
              <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
               <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">90×55 мм 
                <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 "> расширенный формат, который применяют при большом объёме информации  </p>
               </div>
              </div>
             </article>
            </div>
            <div class="relative flex flex-col sm:w-64 items-start m-1 transition  ease-in-out duration-500  delay-150 transform  md:w-60 md:-ml-45 md:hover:-translate-x-32 md:hover:-translate-y-8 shrink-0 ">
             <article class="mx-auto   rounded-3xl overflow-hidden  bg-slate-200 ring-2 ring-inset ring-white/50 bg-center min-h-150 relative   transform duration-500   group" >
              <div class=" relative h-full  group-hover:bg-opacity-0 min-h-300  flex flex-wrap flex-col   transform duration-500">
               <div class=" group-hover:bg-black/30 duration-500 group-hover:backdrop-blur p-8 lg:p-10 h-full justify-end flex flex-col ">86×54 мм 
                <p class="opacity-0 text-white text-sm 2xl:text-lg group-hover:opacity-80 transform duration-500 ">  евро-формат или формат пластиковой карты, который более популярен в западных странах</p>
               </div>
              </div>
             </article>
            </div>
           </div>



           <h3 class="text-2xl font-bold mb-8">Шрифт</h3>
           <p class="text-lg leading-8 mb-20">
            Основное требование к шрифту на визитке — он должен быть хорошо читаемым, разборчивым и чётким. Поэтому для указания имен и контактов не стоит использовать шрифты с завитками и «рукописные».   
<br><br>
Что касается размера шрифта, лучше выбирать кегль от 7-8 пунктов. Имя, фамилию и должность желательно прописать более крупным шрифтом. Важно, чтобы получатель мог бегло прочитать и понять основную информацию. 
           </p>



           <h3 class="text-2xl font-bold mb-8">Дизайн и расположение элементов</h3>
        <p class="text-lg leading-8 mb-20">
            Классическая визитная карточка — это картонный прямоугольник белого цвета с чёрным текстом. Современные технологии изготовления и оформления визиток позволяют создавать самые разные дизайны. Поэтому классические визитки встречаются всё реже.
        </p>
        <img src="{{asset('img/seventh/5.png')}}" class="mb-8" alt="">

        <p class="text-lg leading-8 mb-20">
            Важно, чтобы цвета сочетались и создавали гармоничное решение. Желательно придерживаться в дизайне единой цветовой гаммы и использовать не более трёх цветов. Текст должен контрастно выделяться на основном фоне.
            <br><br>
            При создании визитной карточки для частного специалиста или компании всю информацию желательно расположить с одной стороны — справа или слева. С другой стороны лучше разместить визуальные элементы — личное фото, логотип компании, брендовую символику или иное подходящее изображение. 
        </p>
        <img src="{{asset('img/seventh/7.png')}}" class="mb-8" alt="">


        <p class="text-lg leading-8 mb-20">
            На личную визитку специалиста уместно добавить фото или QR-код. Источник
            <br><br>
            На карточке представителя или сотрудника компании присутствует больше информации, поскольку нужно сообщить данные о себе и организации. Соответственно, оформление будет немного иным. К примеру: 
            <br><br>
            в левом верхнем углу — логотип компании; <br>
            в правом верхнем углу — фамилия, имя, отчество владельца карточки и его должность; <br>
            в нижнем левом углу — контактные данные компании; <br>
            в нижнем правом углу — контактные данные владельца визитки. <br>
            Что касается обратной стороны, то чаще всего её оставляют чистой. Это удобно для получателя — здесь часто пишут заметки от руки или дополнительную информацию.<br>
            <br><br>
            В некоторых случаях компании делают и двусторонние визитки. На обратной стороне они размещают перевод лицевой части на другой язык, карту проезда, коммерческое предложение, слоган.
        </p>
        <img src="{{asset('img/seventh/8.png')}}" class="mb-8" alt="">
        <p class="text-lg leading-8 mb-20">
            Создание визитки обычно начинают с мокапа — макета, который демонстрирует будущий дизайн. Это позволяет своевременно увидеть и устранить недочёты, а затем утвердить итоговый результат. Для создания макета привлекают дизайнера или используют онлайн-сервисы — Visme, Printdesign, PRINTUT. В них есть готовые шаблоны для разных ниш.
        </p>
        <img src="{{asset('img/seventh/9.png')}}" class="mb-8" alt="">



        <h3 class="text-2xl font-bold mb-8"></h3>
        <p class="text-lg leading-8 mb-20">
         
        </p>
        <img src="{{asset('img/sixth/')}}" class="mb-8" alt="">

        

        
            <div class="flex justify-center items-center mb-40">

                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("sixth")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">←
                    </a>
                </div>
                <div class="ml-10 relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("eighth")}}" title="Get quote now"
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