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

<div class="w-full h-96 flex justify-center items-center">

    
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
          
      </div>
      <div class="flex justify-center items-center my-10">

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
        

      

    </form>
    </div>
    

</div>
</div>

<?php

?> 

@include('partials.footer') 
@endsection