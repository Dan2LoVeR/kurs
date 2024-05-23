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
    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8">Что такое фирменный стиль. Основные элементы фирменного стиля</h1>
        
        <h3 class="text-2xl font-bold mb-8">Что такое фирменный стиль</h3>
        <p class="text-lg leading-8 mb-20">
            При упоминании корпорации Apple перед глазами появляется картинка чёрного надкушенного яблока на светлом фоне, а если подумать о Яндексе — белая буква «Я» на красном фоне или чёрные крупные буквы и символы на оранжевом фоне. Эти зрительные образы запоминаются благодаря фирменному стилю.
        </p>
        <img src="{{asset('img/first/yandex.webp')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="100" alt="">
        <p class="text-lg leading-8 mb-20">
            Фирменный стиль — это часть айдентики компании, её визуальная составляющая. Основа фирменного стиля состоит из логотипа, товарного знака, корпоративных цветов и шрифтов. Может включать эмблему, паттерны и даже персонажа, например как Рональд МакДональд или кролик Duracell. <br>
            Айдентика и фирменный стиль — разные понятия. Айдентика — это образ компании, который включает в себя не только фирменный стиль, но и название, слоганы, образ и ценности компании, иногда даже музыку, как в случае с новогодним хитом «Праздник к нам приходит» от Coca-Cola. Айдентика бренда H&М помогла создать образ экологичной компании, которая заботится об окружающей среде. А фирменный стиль сделал красно-белый логотип узнаваемым.
        </p>
        <img src="{{asset('img/first/hdm.webp')}}" class=" mb-8 delay-[600ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="10" alt="">


        <h3 class="text-2xl font-bold mb-8">Для чего служит фирменный стиль</h3>
        <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-xl m-12">
            <details class="p-6 group" open>
                
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        1. Сделать компанию узнаваемой
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
                    Сочетание цветов, шрифты, логотип помогают целевой аудитории выстроить ассоциации, связанные с брендом, и выделить товары или услуги конкретной компании из общего рекламного шума. Например, покупатель приходит в магазин и сразу берёт на полке то молоко, которое любит.
                </p>
            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        2. Отстроиться от конкурентов
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
                    Например, дизайнер Олеся делает ежедневники и продаёт их знакомым, через социальные сети или на Авито. Но как только она захочет выйти на маркетплейсы, придётся задуматься о формировании фирменного стиля, чтобы отстроиться от конкурентов. В основу айдентики лягут те качества, которые помогут Олесе сделать бренд не похожим на уже существующие.
                </p>
            </details>
        
            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-lg font-medium text-gray-900">
                        3. Повысить доверие к компании
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
                    Если бренд уже имеет хорошую репутацию, то элементы фирменного стиля будут выполнять роль знака качества. Например, выбирая между двумя моделями принтеров HP и Pantum, человек с большей вероятностью купит модель HP, потому что логотип бренда узнаваем и ассоциируется у покупателя с надёжностью.
                </p>
            </details>
        </div>

        <h3 class="text-2xl font-bold mb-8">Основные элементы фирменного стиля</h3>
        <p class="text-lg leading-8 mb-20">Разберём составляющие корпоративного стиля:</p>
        <h3 class="text-2xl  mb-8">Логотип</h3>

        <p class="text-lg leading-8 mb-20">
            Это графическое представление компании. Может быть надписью, графическим элементом или и тем и другим.
        </p>
        <img src="{{asset('img/first/logo1.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
        <p class="text-md text-grey-500 leading-8 mb-20">
            Логотипы, представленные только графическим знаком
        </p>


        <img src="{{asset('img/first/logo2.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
        <p class="text-md text-grey-500 leading-8 mb-20">
            Логотип в виде надписи
        </p>

        <img src="{{asset('img/first/logo3.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
        <p class="text-md text-grey-500 leading-8 mb-20">
            Логотип объединяет надпись и графический элемент, рисунок
        </p>

        <h3 class="text-2xl  mb-8">Товарный знак</h3>
        <p class="text-lg leading-8 mb-20">
            Это рисунок, зарегистрированный в патентном бюро, который помогает отличать товары компании от других. Как и логотипы, товарные знаки могут быть словесными, графическими или комбинированными, похожими на логотип или дополняющими друг друга.
        </p>

        <h3 class="text-2xl  mb-8">Корпоративные цвета</h3>
        <p class="text-lg leading-8 mb-20">
            Выбор корпоративных цветов — одни из основных этапов в разработке фирменного стиля. Исследование «Impact of colour on marketing» показало, что первые выводы о продукте люди делают в течение 90 секунд после знакомства. При этом 62–90% выводов основано на цвете. Цвет транслирует основные ценности бренда, выделяет его среди конкурентов, привлекает целевую аудиторию.<br>
Чтобы подобрать корпоративные цвета для фирменного стиля, сначала нужно выяснить, какие ценности хочет транслировать компания и какие цвета с этими ценностями ассоциируются у заказчиков. Нет чёткого правила, что красный — это любовь, а зелёный — экология. С другой стороны, существует много стереотипов по поводу цвета: чёрный — «траурный», серебристый — технологичный, синий — консалтинговый. Поэтому при разработкке фирменного стиля дизайнеру не стоит полагаться только на своё мнение. Лучше попросить маркетологов провести опрос целевой аудитории на восприятие разных цветов и выбрать подходящие.<br>

После этого этапа выбирают основные, дополнительные и нейтральные цвета. Чаще всего это один основной, один дополнительный и несколько нейтральных. Строгих правил нет, и если компания хочет показать своё многообразие, то может использовать пять или шесть основных цветов.<br>
         </p>
         <img src="{{asset('img/first/color.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">

         <h3 class="text-2xl  mb-8">Шрифт</h3>
        <p class="text-lg leading-8 mb-20">
            Текст, который компания размещает в рекламе, на сайте или визитках, должен соответствовать общей айдентике. Для этого нужна разработка шрифта. Разные стили помогают создать полный образ и транслировать ценности. Шрифт доносит до клиентов эмоциональную составляющую бренда на подсознательном уровне.
<br><br>Сравним логотипы и шрифты для двух популярных изданий — The New York Times и The Spectator.
            </p>
         <img src="{{asset('img/first/font1.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
         <p class="text-md text-grey-500 leading-8 mb-20">
            Американская газета показывает приверженность к традициям
        </p>

        <img src="{{asset('img/first/font2.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
         <p class="text-md text-grey-500 leading-8 mb-20">
            Английское издание современное и выдержанное
        </p>


        <h3 class="text-2xl  mb-8">Носители</h3>
        <p class="text-lg leading-8 mb-10">
            Перед тем как начать разработку дизайна фирменного стиля, определяют, где он будет располагаться, то есть обозначают носители. Ими могут стать:
            </p>

            <fieldset class="text-xl max-w-sm border-4 border-orange-500 rounded-lg p-2">
                <legend class="px-2 text-xl  underline decoration-orange-500/60 decoration-2"> Ими могут стать:
                </legend>
                <div class="flex flex-col gap-2 px-2 text-md ">
                    • визитки
                    <hr>
                    • канцтовары: ручки, блокноты, стикеры
                    <hr>
                    • мерч: футболки, кружки, кепки
                    <hr>
                    • упаковка товара
                    <hr>
                    • одежда сотрудников
                    <hr>
                    • элементы сайта или лендинга
                    <hr>
                    • обложки для социальных сетей, посты, сторис, рекламные баннеры
                    <hr>
                    • элементы email-рассылки
                    <hr>
                    • реклама: флаеры, билборды, постеры, видео, баннеры
                </div>
            </fieldset>



            <h3 class="text-2xl font-bold mb-8"> </h3>
            <h3 class="text-2xl  mb-8"> </h3>
            <p class="text-lg leading-8 mb-10">
                
            </p>


            <h3 class="text-2xl font-bold mb-8">Как разрабатывают фирменный стиль </h3>

            <p class="text-lg leading-8 mb-10">
                Создание фирменного стиля состоит из нескольких этапов:
            </p>

            <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-xl m-12">
                <details class="p-6 group" open>
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            1. Провести брифинг с заказчиком.
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
                        Если компания небольшая, то дизайнеру важно увидеть владельца компании, пообщаться с ним, посмотреть, во что он одет, какую машину водит, как общается. Как правило, собственник подсознательно транслирует ценности и взгляды на компанию. Дизайнер задаёт заказчику вопросы, чтобы собрать всю информацию о ценностях и видении компании.<br><br>
Чтобы разработать фирменный стиль для большой корпорации, подключают маркетологов. Они проводят исследования целевой аудитории, конкурентов и рынка, формулируют уникальное торговое предложение и tone of voice, а потом выясняют, какие ценности необходимо отразить в фирменном стиле. Только потом за дело берётся дизайнер.
                    </p>
                </details>
            
                <details class="p-6 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            2. Определить ценности.
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
                        Ими могут быть экологичность, надёжность, традиционный или, наоборот, современный подход.
                    </p>
                    <img src="img/first/brif1.webp" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
                    <p class="mt-2 leading-relaxed text-gray-500 text-sm">
                        Додо Пицца в своём брендбуке описывает такие ценности: вкус, качество, доступность, открытость.
                    </p>
                </details>
            
                <details class="p-6 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            3. Придумать метафору.
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
                        Образ компании, который отражает все ценности. Например, для школы иностранных языков дизайнеры придумали метафору «игра-ходилка», которая объединяет весёлую игру с правилами и транслирует манифест бренда — «Невероятное приключение через иностранный язык».
                    </p>
                    <img src="img/first/brif2.webp" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
                    <p class="mt-2 leading-relaxed text-gray-500 text-sm">
                        Иллюстрация метафоры
                    </p>
                    <img src="img/first/brif3.webp" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
                    <p class="mt-2 leading-relaxed text-gray-500 text-sm">
                        Логотип
                    </p>

                </details>

                <details class="p-6 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            4. Подобрать образы.
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
                        На этом этапе разработки фирменного стиля находят образы, которые иллюстрируют метафору. И элементы образа из уже существующего окружения: формы объектов, фактуры материалов и цветовой палитры, которые характеризуют компанию.
                    </p>
                    <img src="img/first/brif4.webp" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
                    <p class="mt-4 leading-relaxed text-gray-700">
                        Далее дизайнеры подбирают референсы — это может быть любой визуальный материал, подходящий под выбранную метафору: фотографии, картинки, художественные работы, здания, автомобили, музыкальные композиции. Обсуждают референсы с заказчиком и утверждают элементы, которые будут использованы.
                    </p>                
                    

                </details>

                <details class="p-6 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            5. Сделать первый вариант фирменного стиля.
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
                        Объяснить, для чего применено конкретное решение, утвердить его с заказчиком. Все элементы фирменного стиля должны соответствовать придуманной метафоре и быть осмысленными.    
                    </p>
                    
                    <p class="mt-4 leading-relaxed text-gray-700">
                        Не всегда удаётся попасть в точку с первого раза и найти видение, которое полностью решает задачи, которые заказчик поставил фирменному стилю. Помогает прислушиваться к мнению клиента, не отстаивать свою точку зрения до победного, а понять его видение. Для этого следует отстраниться от уже сделанного варианта и постараться ещё раз передать мысли заказчика в образах фирменного стиля.  
                    </p>                
                    

                </details>

                <details class="p-6 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-lg font-medium text-gray-900">
                            6. Разработать дополнительные элементы.
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
                        После того как корпоративные цвета, эмблема и шрифт утверждены, переходят к элементам, которые расширят применение фирменного стиля — паттернов для дизайна упаковки, фонов для сайта.    
                    </p>
                    <p class="mt-4 leading-relaxed text-gray-700">
                        Дизайнеры разрабатывают образцы дополнительных объектов, чтобы создать целостный образ компании. Например, мокапы с фотографиями на сайте или подушек для интерьера кофейни. Решают использовать только чёрно-белые фотографии или фото с естественным светом. Либо подбирают иллюстратора, который работает в нужном стиле.    
                    </p>
                    <img src="img/first/brif5.webp" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
                    <p class="mt-2 leading-relaxed text-gray-500 text-sm">
                        Пример разработки концепции интерьера для школы иностранных языков Luxenglish    
                    </p>                
                    

                </details>
            </div>

            

            <h3 class="text-2xl font-bold mb-8"> Инструменты для создания фирменного стиля </h3>
            <h3 class="text-2xl  mb-8"> </h3>
            <p class="text-lg leading-8 mb-10">
                Единого набора не существует, потому что каждый дизайнер создаёт свой арсенал инструментов, которыми удобно пользоваться именно ему. Вот несколько базовых источников вдохновения и приложений для создания фирменного стиля.
            </p>


            <div class="w-full max-w-md mx-auto border-2 rounded-lg mb-10">
                <div class="flex border-b border-gray-300">
                    <button
                        class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 hover:bg-orange-500 hover:text-white rounded-tl-lg focus:outline-none tab-button"
                        onclick="openTab(event, 'tab1')">Для оформления</button>
                    <button class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 hover:bg-orange-500 hover:text-white  rounded-tr-lg focus:outline-none"
                        onclick="openTab(event, 'tab2')">Для вдохновения</button>
                </div>
                <div id="tab1" class="tabcontent p-4">
                    <h2 class="text-lg font-bold text-gray-800">● Figma </h2>
                    <p class="mb-2 text-gray-700">
                        сборка макетов сайтов и почти всей цифровой продукции компании: иконок, интерфейсов, рекламных баннеров.
                        
                    </p>
                    <h2 class="text-lg font-bold text-gray-800">● Adobe Photoshop  </h2>
                    <p class="mb-2 text-gray-700">
                        редактирование изображений, сложные коллажи.
                        
                    </p>
                    
                    <h2 class="text-lg font-bold text-gray-800">● Adobe Illustrator </h2>
                    <p class="mb-2 text-gray-700">
                        создание иллюстраций.
                        
                    </p>
                    

                    <h2 class="text-lg font-bold text-gray-800">● Adobe InDesign </h2>
                    <p class="mb-2 text-gray-700">
                        макеты журналов, постеров и другой печатной продукции.
                        
                    </p>
                </div>
                <div id="tab2" class="tabcontent p-4 hidden">
                    <h2 class="text-lg  text-gray-800">● Подобрать референсы или мудборды помогут сайты Pinterest, Designspiration, Behance.</h2><hr><br>
                    <h2 class="text-lg  text-gray-800">● Изучайте брендбуки известных компаний.</h2><hr><br>
                    <h2 class="text-lg  text-gray-800">● Используйте соцсети по максимуму: подписывайтесь на дизайнеров, чьи работы вам нравятся, следите за школами дизайна, победителями и участниками дизайнерских премий и конкурсов.</h2><hr><br>
                    <h2 class="text-lg  text-gray-800">● Тренируйте насмотренность: гуляйте не только по сайтам, но и по улицам.</h2><hr>
                    
                    
                    
                </div>
            </div>


            <p class="mt-2 leading-relaxed text-gray-500 text-sm">
                 
            </p>   
            <h3 class="text-2xl font-bold mb-8">Примеры и разбор фирменного стиля </h3>
            
            <p class="text-lg leading-8 mb-10">
                Рассмотрим фирменный стиль на примере проекта ПостНаука. Дизайнеры придумали метафору «бесконечность познания», которую сразу принял заказчик и даже взял в качестве слогана. Так появился логотип — красная арка, в которой круг отвечает за «бесконечность», а квадрат — за «познание», и вместе они составляют форму портала, в котором раскрыт смысл продукта.
            </p>
            <img src="{{asset('img/first/examle.png')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
            <p class="text-lg leading-8 mt-20 mb-10">
                
                Команда дизайнеров присматривалась к шрифту Forma ещё в 2018 году, но только ПостНаука полностью совпала с образом, который транслирует этот шрифт: образованность, интеллигентность, рефлексия, потребность чувствовать новое и учиться новому.
            </p>
            <img src="{{asset('img/first/examle1.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
            <p class="text-lg leading-8 mt-20 mb-10">
                Найденная метафора привела к инструментарию для создания корпоративного стиля: модульность, вариативность, бесконечность, благодаря которому появилась сложная графическая система кафедр и факультетов.
            </p>
            <img src="{{asset('img/first/examle2.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
            <p class="text-lg leading-8 mt-20 mb-10">
                Цвета собрали из палитры автомобилей Jaguar и Land Rover 80-х годов.
            </p>
            <img src="{{asset('img/first/examle3.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
            <p class="text-lg leading-8 mt-20 mb-10">
                Удалось найти точную метафору для сайта — слалом, плавное и свободное скоростное движение сверху вниз. Ритм и характер движения слаломиста постоянно меняется: он огибает препятствия, деревья, описывает плавную петлю или останавливается для передышки. Каждый слаломист по-своему проходит склон, в своём темпе, со своим рисунком движения. Эти наблюдения подсказали необходимость проектирования «трасс» — типов пользовательского движения по сайту.
            </p>
            <img src="{{asset('img/first/examle4.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
            <img src="{{asset('img/first/examle5.webp')}}" class="mb-3 delay-[300ms] duration-[600ms] taos:translate-x-[-200px] taos:opacity-0 [animation-iteration-count:infinite]" data-taos-offset="30" alt="">
            <p class="mt-2 mb-15 leading-relaxed text-gray-500 text-sm">
                 Экраны концепции сайта
            </p> 
            <br>
            <p class="text-lg leading-8 mt-15 mb-10">
                Суть айдентики ПостНауки — это бесконечность, познание, множество из одного, экспериментальность.
            </p>

        
            <div class="flex justify-center items-center mb-40">

                <div class="relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("second")}}" title="Get quote now"
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