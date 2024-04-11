@extends('layout\app')
@section('title', 'Аренда')
@section('content')
    

  @include('partials.header')
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex md:max-w-6xl md:px-24 md:py-10 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow mt-5 md:mt-0   md:w-1.5/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1
                class="text-2xl font-extrabold leading-9 tracking-tight mb-3 text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-normal">
                СДАЧА ПОМЕЩЕНИЙ В АРЕНДУ
            </h1>
            <p class="mb-8 md:pl-0  pl-2 pr-2 leading-relaxed dark:text-gray-300">
                Информация о наличии имущества для сдачи помещения в аренду под кафе в соответствии с Постановлением правительства РФ от 09.09.2021 года № 1529 «Правила заключения без проведения конкурсов или аукционов договоров аренды в отношении государственного или муниципального имущества, закрепленного на праве хозяйственного ведения либо оперативного управления за государственными или муниципальными организациями культуры»
            </p>
            <div class="flex justify-center">
                <a href="http://ickc29.ru/component/phocadownload/category/9-inye-dokumenty?download=373:informatsiya-o-nalichii-imushchestva-v-muk-itskts-dlya-sdachi-v-arendu"
                    class="inline-flex text-white bg-indigo-700 border-2 py-2 px-6 focus:outline-none  rounded text-lg">Информация о наличии
                </a>
                <a href="http://ickc29.ru/component/phocadownload/category/9-inye-dokumenty?download=374:proekt-dogovora-arendy-pomeshcheniya-muk-itskts-po-adresu-ul-sevstroj-d-2"
                    class="ml-4 inline-flex text-indigo-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Проект договора аренды
                    </a>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full mb-5 md:mb-0 md:w-1/2 w-3/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{asset('storage/image/rent.png')}}">
        </div>
    </div>
</section>
<br><br><br><br><br><br><br>
  @include('partials.footer') 
@endsection