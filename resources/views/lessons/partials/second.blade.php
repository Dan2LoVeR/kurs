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
  <div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" class="fixed w-full bottom-6 grid grid-cols-2 gap-4 place-content-between  z-50" x-show="isVisible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2" style="display: none;"> 
    <a href="{{route("lessons")}}"><button  class="inline-flex items-center  w-fit rounded-full bg-white px-3 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-grey-600">назад к лекциям</button></a>

    <button title="Scroll to top" aria-label="Scroll to top" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="inline-flex items-center ml-auto gap-x-2 w-fit rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-grey-600 ">
    наверх
   </button> 
   </div>
<div class="max-w-4xl mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8">Виды логотипов</h1>
        
        
        <p class="text-lg leading-8 mb-20">
          Логотип — это символ, который является олицетворением образа компании и одним из главных ее отличительных знаков среди конкурентов. Существуют различные виды логотипов, каждый из которых подходит для специфических целей и задач. Даже небольшая эмблема может плотно засесть в голове потенциального клиента и повысить узнаваемость. <br><br>

          Основателям фирмы необходимо создать многофункциональный логотип, который будет использоваться на продукции и в рекламных материалах компании. <br> <br>
          
          Первое, с чего стоит начать, — это определиться с типом логотипа. Виды логотипов различны и не всегда подходят для определённого бренда. Этому вопросу и будет посвящена наша статья. <br><br>
          
          Известная американская журналистка Хильда Моронес провела небольшое исследование и выявила семь типов лого. Существует другая классификация, распределяющая эмблемы на графические (присутствует только картинка), текстовые (шрифтовая надпись) и комбинированные (и картинка, и текст существуют вместе). Но в данной статье упор пойдет все-таки на классификацию мадам Моронес.    <br><br>
        
        </p>

        <h3 class="text-2xl font-bold mb-8">Текстовые логотипы</h3>

        <img src="{{asset('img/second/1.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Порядка тридцати процентов современных компаний используют именно текстовый вид логотипа. Такие эмблемы отличаются наличием только текстовой составляющей (без изображений). Данный вид лого можно подразделить на 2 категории: <b>аббревиатуры</b> и <b>торговые марки</b> .
        </p>


        <h3 class="text-2xl font-bold mb-8">Аббревиатуры</h3>

        <img src="{{asset('img/second/2.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Если название компании слишком длинное или состоит из нескольких слов, то лучше сократить название, используя лишь первые буквы каждого из слов. Так появится больше идей при создании лого, да и клиенту будет проще запомнить название.

          Можно привести такой пример: всем известна короткая аббревиатура NASA, но большинство людей даже не догадываются, как она расшифровывается. Довольно сложно запомнить «National Aeronautics and Space Administration».
        </p>

        <img src="{{asset('img/second/3.jpg')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">

        <p class="text-lg leading-8 mb-20">
          Приводя примеры российских компаний, стоит отметить федеральные каналы. Например, каждый знаком с названиями СТС, НТВ и ТНТ. Эти названия известны каждому гражданину России и красиво смотрятся в углу телеэкрана.

          При разработке такого вида логотипа стоит сильно постараться, подбирая шрифт. Он должен быть легко читаемым и соответствовать духу компаний (развлекательный/строгий/серьезный/юмористический).
        
        </p>


        <h3 class="text-2xl font-bold mb-8">Слова (торговые марки)</h3>

        <img src="{{asset('img/second/4.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Для использования такого вида логотипа компания должна обладать кратким и четким названием, которое легко запоминается. Яркими примерами подобного типа лого являются компании Google, Coca Cola и Visa. Думаем, вы не раз видели их эмблемы, знаменитые на весь мир.
        
        </p>

        <img src="{{asset('img/second/5.jpg')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Как и в случае аббревиатур, необходимо качественно продумать шрифт и цветовую гамму текста. Помните: шрифтовой стиль должен отражать суть компании, легко читаться. Например, для фирмы, продающей цветы, необходим легкий курсивный, а для строительной компании — строгий, гостовский.
        </p>




        <h3 class="text-2xl font-bold mb-8">Графические логотипы</h3>

        <img src="{{asset('img/second/6.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Следующие три типа логотипов относятся к графическим логотипам, состоящим только из небольшой картинки. Пожалуй, это один из самых редковстречающихся видов логотипов.
          <br><br>
          Эти знаки при должном подходе становятся хитами на рынке среди покупателей. И около шести процентов всех фирм рискуют и делают такой логотип.
        
        </p>



        <h3 class="text-2xl font-bold mb-8">Знаки и символы</h3>

        <img src="{{asset('img/second/7.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">

        <p class="text-lg leading-8 mb-20">
          Компаний с таким видом символа, несомненно, знакомы каждому. Apple с надкусанным с правой стороны яблочком, Twitter с летящей голубой птицей. Как можно понять, хорошо сделанный логотип может вознести компанию на Олимп и сделать ее одной из самых успешных во всем мире.
          <br><br>
          В такого рода символах закладывается глубокий смысл и идея, позволяющие вызывать четкие ассоциации у потенциальных клиентов. Но есть много сложностей при создании.
          <br><br>
          Во-первых, придется потратить много времени при создании. Во-вторых, с незнакомым логотипом сложно стартануть при открытии бизнеса, клиентам может быть непонятна идея дизайна. В-третьих, нужно быть уверенным на тысячу и один процент в том, что такой вид логотипа выстрелит.
          <br><br>
          Только при наличии всех трех составляющих можно воспользоваться таким типом логотипа.
        
        </p>


        <h3 class="text-2xl font-bold mb-8">Абстрактность</h3>

        <img src="{{asset('img/second/8.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Главным отличием третьего вида лого является то, что в качестве изображения используется не привычное всем изображение чего-либо (яблоко, птица или книга), а абстрактная геометрическая форма. В качестве примера можно упомянуть логотипы компаний Nike, Reebok, Pepsi, Harley Davidson и многие другие.
        
        </p>

        <img src="{{asset('img/second/9.jpg')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
        Такие логотипы очень легко придумать, и это их главный плюс. Главное, чтобы они передавали настроение и хорошо смотрелись на будущем продукте. Также стоит отметить, что подобный вид лого отлично подходит для международных компаний.
        <br><br>
        Если продукция будет реализована в различных направлениях мира, то сложно создать один логотип, который будет вызывать одинаковые эмоции в разных странах. А простой значок остается таким на всех континентах. И цвета чаще всего имеют одинаковое значение. Поэтому, если планируете выйти на мировой рынок — это ваш вариант.

        <p class="text-lg leading-8 mb-20">
        
        
        </p>





        <h3 class="text-2xl font-bold mb-8">Логотип-персонаж</h3>

        <img src="{{asset('img/second/10.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Еще с молодежных фильмов мы знаем, что у многих спортивных команд есть свой талисман, который танцует во время всех игр, фотографируется с фанатами. Многие фирмы решили не отставать и начали придумывать веселых героев, которые бы развлекали клиентов в рекламных роликах и улыбались им с коробок товаров.
          <br><br>
          Вспомните полковника Сандерса от компании пищевой промышленности КФС, улыбающегося с упаковки от бургера, мистера Пропера, который появляется после ритмичной мелодии во всех рекламных роликах.
          <br><br>
          У данного типа знака есть одно огромное преимущество — это непосредственное взаимодействие с аудиторией и вызывание положительных эмоций покупателей. И, конечно же, после создания такого лого не придется тратить часы на придумывание рекламы, ведь в каждой рекламной кампании будет участвовать талисманчик.
        
        </p>



        <h3 class="text-2xl font-bold mb-8">Комбинированные логотипы</h3>

        <img src="{{asset('img/second/11.jpg')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Последние две категории фирменного знака относятся к так называемому комбинированному типу. В их дизайне используется и изображение, и текстовое сопровождение.
        
        </p>


        <h3 class="text-2xl font-bold mb-8">Текстово-графические </h3>

        <img src="{{asset('img/second/12.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Лучше сразу начать с примеров всемирно известных торговых марок: Burger king, Макдоналдс. Текстовая надпись и символическое (или графическое) изображение работают в паре, усиливая и дополняя эффект от друг друга. Иногда компании опускают текстовую надпись, например, при печати визиток, и это несомненно является плюсом.
          <br><br>
          Сложно придумать логотип, который будет смотреться одинаково хорошо и на визитках, и на сайтах, и на огромных рекламных баннерах. Но типографика даст все необходимые советы для построения стиля. 
        
        </p>


        <h3 class="text-2xl font-bold mb-8">Эмблема</h3>

        <img src="{{asset('img/second/13.png')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">


        <p class="text-lg leading-8 mb-20">
          Чаще всего это логотип, в котором текст находится внутри изображения. Думаем, все учились в университетах или институтах. Так вот, у большинства высших образовательных учреждений именно такие лого и символы. А еще подобные знаки очень любят владельцы автомобильных компаний. Как правило, это раскрывает их характеристики.
        
        </p>


        
        <h3 class="text-2xl font-bold mb-8">Заключение</h3>

        


        <p class="text-lg leading-8 mb-20">
          Мы кратко рассмотрели семь типов логотипов. После того, как вы определитесь с видом лого, который подходит вашему бренду, можно приступать к его разработке и последующему внедрению. К счастью, при помощи современных технологий это не так сложно сделать самостоятельно, без лишних денежных затрат.
        
        </p>


        

        
            <div class="flex justify-center items-center mb-40">

                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("first")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">←
                    </a>
                </div>
                <div class="relative inline-flex ml-10 group">
                  <div
                      class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                  </div>
                  <a href="{{route("third")}}" title="Get quote now"
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