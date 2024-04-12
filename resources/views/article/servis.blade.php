@extends('layout.app')
@section('title', 'Оценка')
@section('content')
    

  @include('partials.header')
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex md:max-w-6xl md:px-24 md:py-10 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow mt-5 md:mt-0   md:w-1.5/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1
                class="text-2xl font-extrabold leading-9 tracking-tight mb-3 text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-normal">
                УВАЖАЕМЫЕ ЖИТЕЛИ И ГОСТИ АРХАНГЕЛЬСКОЙ ОБЛАСТИ!
            </h1>
            <p class="mb-8 md:pl-0  pl-2 pr-2 leading-relaxed dark:text-gray-300">
                Предлагаем Вам принять участие в независимой оценке качества условий оказания услуг организациями культуры, заполнив электронную анкету, перейдя по ссылке, указанной ниже: <br><br>

                
                
                Опрос проводится в целях выявления мнения граждан о качестве условий оказания услуг организациями культуры (дома культуры, клубы, дома народного творчества, библиотеки, музеи и прочие).<br><br>
                Пожалуйста, ответьте на вопросы анкеты. Ваше мнение позволит улучшить работу организаций культуры и повысить качество оказания услуг населению.
                
                Вы можете быть уверены в полной конфиденциальности Ваших ответов, они будут использоваться только в обобщенном виде.<br><br>
                
                Обращаем Ваше внимание, что анкета будет учтена только в том случае, если будут даны ответы на все вопросы.<br><br>
                
                В 2020 году на территории города Архангельска проходит независимая оценка в отношении парка аттракционов «Потешный двор», при этом, Вы можете проголосовать за другие учреждения культуры, которые находятся на территории Архангельской области.<br><br>
                
                Если Вы хотите оставить мнение о нескольких организациях культуры, то анкету можно будет заполнить снова.    
            </p>
            <div class="flex justify-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdfgMWD94UqkGOp4t54j3yTXoST6rkj63MRYF-GdSrUN1F4Vg/viewform"
                    class="inline-flex text-white bg-indigo-700 border-2 py-2 px-6 focus:outline-none  rounded text-lg">Принять Участие
                </a>
                
            </div>
        </div>
        
    </div>
</section>
<br><br><br><br><br><br><br>
  @include('partials.footer') 
@endsection