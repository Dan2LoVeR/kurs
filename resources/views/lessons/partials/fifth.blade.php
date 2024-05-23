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
        <h1 class="text-4xl font-bold mb-8">Фирменный бланк: назначение, требования, примеры</h1>
        

        <h3 class="text-2xl font-bold mb-8">Для чего нужен фирменный бланк организации</h3>
        <p class="text-lg leading-8 mb-4">
            Наличие фирменного бланка положительно влияет на имидж компании, привлекает внимание. Он упрощает делопроизводство, позволяет быстро подготовить документы и избежать ошибок при их составлении, например, в реквизитах. Кроме того, фирменный бланк защищает компанию от злоумышленников. Его сложно подделать, поэтому финансовые документы часто оформляют именно таким образом.
            <br>
            Фирменный бланк обычно используется для оформления следующих видов документов:

        </p>
        <fieldset class="text-xl max-w-sm border-4 border-orange-500 rounded-lg p-2">
            <legend class="px-2 text-xl  underline decoration-orange-500/60 decoration-2"> Ими могут стать:
            </legend>
            <div class="flex flex-col gap-2 px-2 text-md ">
                • договоры
                <hr>
                • приказы
                <hr>
                • информационные письма
                <hr>
                • распоряжения
                <hr>
                • служебные записки
                <hr>
                • отчеты
                
            </div>
        </fieldset>

        <p class="text-lg leading-8 mb-20 mt-10">
            Юридически грамотный текст и аккуратное оформление документа не только упрощают деловые взаимоотношения, но и укрепляют репутацию бренда.
                <br><br>
            Если у вас есть собственный сайт, непременно укажите его в реквизитах. А чтобы не терять клиентов, разместите на нем виджеты Calltouch. С их помощью пользователь сможет оставить заявку на обслуживание и свои контакты. Программа обработает обращение, а скрипт Calltouch поможет «связать» менеджера с клиентом. Так вы точно не пропустите ни одной заявки.
        </p>



        <h3 class="text-2xl font-bold mb-8">Как выглядит фирменный бланк</h3>
        <p class="text-lg leading-8 mb-4">
            В России содержание бланка компании регламентирует государственный стандарт. 
        </p>
        <fieldset class="text-xl max-w-sm border-4 border-orange-500 rounded-lg p-2">
            <legend class="px-2 text-xl  underline decoration-orange-500/60 decoration-2"> В структуру фирменного бланка входят:
            </legend>
            <div class="flex flex-col gap-2 px-2 text-md ">
                • договоры
                <hr>
                • приказы
                <hr>
                • информационные письма
                <hr>
                • распоряжения
                <hr>
                • служебные записки
                <hr>
                • отчеты
                
            </div>
        </fieldset>

        <p class="text-lg leading-8 mb-20 mt-10">
            Согласно стандарту важно соблюдать не только структуру документа, но и другие формальные вещи – формат, размер полей, тип бумаги.
        </p>
        

        <h3 class="text-2xl font-bold mb-8">Как сделать фирменный бланк</h3>
        <p class="text-lg leading-8 mb-20">
            Качество визуального оформления официальных бумаг влияет на репутацию компании. Важно, чтобы бланк привлекал внимание, но не был перегружен лишними элементами, был выдержан в едином оформлении со стилем бренда и говорил о наличии вкуса у владельца компании.
            Оформление бланка часто доверяют специалистам. Однако и самостоятельно сделать форму несложно – для этого не потребуются специализированные навыки и много времени.
            <br>Предлагаем несколько способов создания фирменного бланка.
        </p>
        <img src="{{asset('img/fifth/1.webp')}}" class="mb-8 " alt="">

        <h3 class="text-xl font-bold mb-8">В Word</h3>
        <p class="text-lg leading-8 mb-20">
            В Word
            Этот способ несколько сложнее остальных. Он потребует минимальных дизайнерских навыков и хорошего владения MS Word. Сначала нарисуйте макет от руки на листе бумаги. Нужно понимать, как будут располагаться элементы бланка, и что вы хотите получить на выходе.
            Вручную. Порядок создания бланка:
        </p>

        <div class="w-full mt-20 max-w-4xl mx-auto">
            <!-- Tab Buttons -->
            <div class="bg-blue-500 p-2 rounded-t-lg">
                <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-10 p-4 md:p-2 xl:p-5">
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab1')">1</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab2')">2</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab3')">3</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab4')">4</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab5')">5</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab6')">6</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab7')">7</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab8')">8</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab9')">9</button>
                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab10')">10</button>
            </div>
            </div>
          
            <!-- Tab Content -->
            <div id="tab1" class="p-4 tab-content bg-white shadow-md rounded-lg">
              
              <p>
                Создайте документ.
              </p>
            </div>
            <div id="tab2" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
            
              <p>Зайдите в меню «Файл» – «Создать». Вам предложат несколько шаблонов.</p>
            </div>
            <div id="tab3" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
              <p> Под полем для поиска выберите категорию «Бизнес». Для фирменного бланка подойдут макеты под названием «Бланк письма».</p>
            </div>

            <div id="tab4" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
                <p> Кликните на подходящую форму. Рядом с образцом бланка нажмите на синий значок «Создать». Документ откроется в новом окне.</p>
              </div>

              <div id="tab5" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
                <p> Пропишите основную структуру документа и отредактируйте текст с помощью возможностей Word.</p>
              </div>

              <div id="tab6" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
                <p>  Вставьте логотип в верхнюю часть листа, затем введите название компании. Желательно, чтобы цвет названия совпадал с логотипом, а шрифт был в 2 раза больше, чем у остального текста. Можно использовать верхний регистр (прописать название заглавными буквами). Выровняйте название компании по центру.</p>
              </div>

              <div id="tab7" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
                <p>  Укажите юридический адрес и контактные данные. Используйте выравнивание по центру.</p>
              </div>

              <div id="tab8" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
                <p>  Под шапкой по краям добавьте поля для даты и регистрационного номера документов.</p>
              </div>

              <div id="tab9" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
                <p> В нижний колонтитул добавьте поля для подписей. </p>
              </div>
          
              <div id="tab10" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
              
                <p>   Сохраните документ.</p>
              </div>
          
          
          </div>




          


          <style>
            .tab-button.active {
              background-color: #fff;
              border-color: #4299e1;
              color: #4299e1;
            }
          </style>
          
          <script>
            function showTab(tabId) {
              // Hide all tab content
              const tabContents = document.querySelectorAll('.tab-content');
              tabContents.forEach((content) => {
                content.classList.add('hidden');
              });
          
              // Show the selected tab content
              const selectedTab = document.getElementById(tabId);
              if (selectedTab) {
                selectedTab.classList.remove('hidden');
              }
          
              // Remove the 'active' class from all tab buttons
              const tabButtons = document.querySelectorAll('.tab-button');
              tabButtons.forEach((button) => {
                button.classList.remove('active');
              });
          
              // Add the 'active' class to the clicked tab button
              const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
              if (clickedButton) {
                clickedButton.classList.add('active');
              }
            }
          
            // Initialize the first tab
            showTab('tab1');
          </script>






        <h3 class="text-2xl font-bold mb-8">Образцы фирменных бланков организации</h3>
        <p class="text-lg leading-8 mb-20">
          Бланки для ООО и ИП имеют минимум различий. Как структурные части, так и содержание в них не различаются. Исключение – реквизиты.
        </p>
        <h3 class="text-xl font-bold mb-8">ООО</h3>
        <p class="text-lg leading-8 mb-20">
         Для ООО иметь свой бланк – правило хорошего тона. Он не только указывает на статус компании, но и помогает организовать объемный документооборот.
          
        </p>
        <fieldset class="text-xl max-w-sm border-4 border-orange-500 rounded-lg p-2 mb-5">
          <legend class="px-2 text-xl  underline decoration-orange-500/60 decoration-2"> В реквизиты бланка включают:
          </legend>
          <div class="flex flex-col gap-2 px-2 text-md ">
              • юридический и фактический адреса
              <hr>
              • ИНН/КПП
              <hr>
              • расчетный и корреспондентский счета
              <hr>
              • БИК
              <hr>
              • ОГРН
              <hr>
              • контактные данные
              
          </div>
      </fieldset>
        <img src="{{asset('img/fifth/4.webp')}}" class="mx-8" alt="">


        <h3 class="text-xl font-bold mb-8">ИП</h3>

        <p class="text-lg leading-8 mb-20">
          Фирменный бланк добавляет ИП солидности в глазах партнеров и конкурентов. В него включают все вышеперечисленные реквизиты предприятия, и дополнительно – ОГРНИП. Часто ИП обходятся без логотипа.
          <br>
          И солидные, и начинающие компании вкладывают огромный бюджет в свое продвижение. Бизнесу важно знать, что деньги не расходуются впустую. Подключите сквозную аналитику Calltouch и контролируйте свой маркетинговый бюджет. Сервис соберет данные с CRM и с рекламных площадок, подсчитает целевые действия клиентов и объединит значимые показатели в один интерфейс. Делайте выводы об эффективности рекламных кампаний, используя удобный наглядный дашборд.
        </p>


        <h3 class="text-2xl font-bold mb-8"></h3>
        <p class="text-lg leading-8 mb-20">
         
        </p>
        <img src="{{asset('')}}" class="mb-8" alt="">

        

        
            <div class="flex justify-center items-center mb-40">

              <div class="relative inline-flex  group">
                <div
                    class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                </div>
                <a href="{{route("fourth")}}" title="Get quote now"
                    class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    role="button">←
                </a>
            </div>
            <div class="ml-10 relative inline-flex  group">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <a href="{{route("sixth")}}" title="Get quote now"
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