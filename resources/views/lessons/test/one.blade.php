@extends('layout.app')
@section('title', 'Виды логотипов')
@section('content')
@include('partials.header')
<style>
    input:checked + label {
	border-color: black;
	box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}
</style>

<section class="px-4 pt-40 pb-32 relative ">
  <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed" style="background-image:url(storage/image/back1.png)"></div>
   
  </div>
</section>
<div class="flex justify-center items-center ">
  <div x-data="{ open: true }">
    <!-- Open modal button -->
    <div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" class="fixed w-full bottom-6 grid grid-cols-2 gap-4 place-content-between  z-50" x-show="isVisible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2" style="display: none;"> 
      
        
     <button x-on:click="open = true"  class="inline-flex items-center ml-auto gap-x-2 w-fit rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-grey-600 "> Критерии оценки </button>
     </div>
    
    <!-- Modal Overlay -->
    <div x-show="open" class="fixed inset-0 px-2 z-10 overflow-hidden flex items-center justify-center">
      <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      <!-- Modal Content -->
      <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="bg-white rounded-md shadow-xl overflow-hidden max-w-md w-full sm:w-96 md:w-1/2 lg:w-2/3 xl:w-1/3 z-50">
        <!-- Modal Header -->
        
        <!-- Modal Body -->
        <div class="p-4">
          <div class="block w-full overflow-x-auto max-w-xl border">
            <table class="items-center w-full bg-transparent border-collapse">
                <thead>
                    <tr>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                            Правильных ответов</th>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                            Оценка</th>
                        <th
                            class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="text-gray-500">
                       
                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                            5</td>
                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2 text-xs font-medium">100%</span>
                                <div class="relative w-full ">
                                    <div class="w-full bg-gray-200 rounded-sm h-2 ">
                                        <div class="bg-lime-400 h-2 rounded-sm px-7" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-gray-500">
                        
                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                            4</td>
                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2 text-xs font-medium">70%</span>
                                <div class="relative w-full">
                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                        <div class="bg-yellow-400 h-2 rounded-sm" style="width: 70%"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-gray-500">
                        
                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                            3</td>
                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2 text-xs font-medium">50%</span>
                                <div class="relative w-full">
                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                      
                                        <div class="bg-orange-400 h-2 rounded-sm" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-gray-500">
                        
                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                            2</td>
                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                            <div class="flex items-center">
                                <span class="mr-2 text-xs font-medium">30%</span>
                                <div class="relative w-full">
                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                        <div class="bg-red-400 h-2 rounded-sm" style="width: 20%"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        </div>
        <!-- Modal Footer -->
        <div class="border-t px-4 py-2 flex justify-center">
          <div class="relative inline-flex  group bg-white">
            <div
                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
            </div>
            <button x-on:click="open = false" title="Get quote now"
                class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                role="button">Продолжить 
            </button>
            
        </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

    
</div>
<section></section>
<!-- sample article -->
<div >
<div class="max-w-4xl mx-auto p-8">
    <h1 class="text-4xl text-center font-bold mb-8">Тест №1</h1>
    
    <h3 class="text-2xl font-bold mb-8"></h3>

    <div class="relative rounded-xl shadow-xl">

        <form action="{{ route("1test_process") }}" method="post" class="bg-white">
        @csrf
          <input type="hidden" name="name" value="1">
          
        {{-- Вопрос 1 --}}
        <div class="sticky  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Для чего служит фирменный стиль?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="f" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        1. Сделать компанию узнаваемой
                                        <br> <br>2. Отстроиться от конкурентов
                                        <br><br>3. Повысить доверие к компании
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="f" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        1. Для красоты
                                        <br> <br>2. Сделать компанию узнаваемой
                                        <br><br>3. Отстроиться от конкурентов
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="f" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        1. Быть актуальными
                                        <br> <br>2. Для рекламы брэнда
                                        
                                    </p>
                
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                <!-- Component End  -->
            
            </div>
            
        </div>

        {{-- Вопрос 2 --}}
        <div class="sticky  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Основные элементы фирменного стиля</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="s" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        ● Айдентика<br>● Лозунг<br>● Фирменный цвет<br>● Реклама <br>● Фирменный блок
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="s"  value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        ● Товарный знак<br>● Логотип<br>● Фирменный цвет<br>● Фирменный комплект шрифтов <br>● Фирменный блок
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="s" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        ● Товарный знак<br>● Брэндбук<br>● Дизайн<br>● Особенности компании <br>● Вёрстка
                                        
                                    </p>
                
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                <!-- Component End  -->
            
            </div>
            
        </div>
        {{-- Вопрос 3 --}}
        <div class="sticky  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 3 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Какая палитра считается правельной с точки зрения цветовой теории?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <img src="img/example/ex2/1.png">

                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <img src="img/example/ex2/2.png">
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <img src="img/example/ex2/3.png">
                
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                <!-- Component End  -->
            
            </div>
            
        </div>
        {{-- Вопрос 4 --}}
        <div class="sticky  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 3 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Фирменный стиль и Айдентика — это разные понятия?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fo" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between text-center">
                                    <p><span class="text-lg font-bold">Да</span> </p>

                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fo" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p><span class="text-lg font-bold">Нет</span> </p>
                
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                <!-- Component End  -->
            
            </div>
            
        </div>
        {{-- Вопрос 5 --}}
        <div class="sticky  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">С чего стоит начать разработку фирменного стиля</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fi" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        Начать делать макет в Figma
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                           
                              <input type="radio" class="peer sr-only" name="fi" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        Придумать метафору
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fi" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        Провести брифинг с заказчиком
                                        
                                    </p>
                
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                
            </div>
            
        </div>
        {{-- Вопрос 6 --}}
        <div class="sticky  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
          <div class="items-center justify-center h-1/2 pb-4" >
              <!-- 1 -->
              <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Какие носители фирменного стиля более актуальны в нынешнее время?</h3>
              
              <div>
                  
                      <div class="mx-auto max-w-6xl px-10">
                        <div class="flex flex-wrap justify-center gap-3">
                          <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="si" value="0"/>
                            <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                              <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                  <p>
                                    Визитки
                                  </p>
                                  
                                </div>
                              </div>
                            </div>
                          </label>
                          <!-- Repeat similar structure for other pricing options -->
                    
                          <!-- Pro Pricing Option -->
                          <label class="cursor-pointer">
                         
                            <input type="radio" class="peer sr-only" name="si" value="1"/>
                            <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                              <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                  
                                  <p>
                                    Обложки для социальных сетей, посты, сторис, рекламные баннеры
                                  </p>
                                  
                                </div>
                              </div>
                            </div>
                          </label>
                    
                          <!-- Premium Pricing Option -->
                          <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="si" value="0"/>
                            <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                              <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                  
                                  <p>
                                    элементы email-рассылки
                                      
                                  </p>
              
                                </div>
                              </div>
                            </div>
                          </label>
                        </div>
                      </div>
                    </div>
              <!-- Component End  -->
              
          </div>
          
      </div></div>
      <div class="flex justify-center items-center my-10">
      </div>
      <div class="flex flex-row">
     
    </div>
        <div class="container mx-auto px-4 mt-10">
          <nav class="flex flex-row flex-nowrap justify-between md:justify-center items-center " aria-label="Pagination">
              <!-- Previous Page Button -->
              <a class="flex w-10 h-10 mr-1 justify-center items-center  mr-10"
              href="{{route("home")}}" title="Previous Page">
                  <span class="sr-only">Вернуться назад</span>
                  <div class="relative inline-flex  bg-white">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <div  title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        >←
                    </div>
                </div>
              </a>
              <!-- Page Buttons (1 to 5) -->
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                  href="{{route("1test")}}" title="Page 1">
                  1
              </a>
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                  href="{{route("2test")}}" title="Page 2">
                  <button type="submit" class=" w-full h-full" href="{{route("2test")}}">2</button>
              </a>
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
              href="{{route("3test")}}" aria-current="page" title="Page 3">
                  3
              </a>
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                  href="{{route("4test")}}" title="Page 4">
                  4
              </a>
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                  href="{{route("5test")}}" title="Page 5">
                  5
              </a>
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                  href="{{route("6test")}}" title="Page 5">
                  6
              </a>
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                  href="{{route("7test")}}" title="Page 5">
                  7
              </a>
              <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                  href="{{route("8test")}}" title="Page 5">
                  8
              </a>
              <!-- Next Page Button -->
              <a class="flex w-10 h-10 ml-1 justify-center items-center  ml-10"
                  href="#" title="Next Page">
                  <span class="sr-only">Следующий тест</span>
                  <div class="relative inline-flex  group bg-white">
                    <div
                        class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <button type="submit" href="{{route("2test")}}" title="Get quote now"
                        class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        role="button">→
                    </button>
                </div>
              </div>
              </a>
          </nav>
      </div>

        
    

      

    </form>
    </div>
    

</div>
</div>

<?php

?> 


@endsection