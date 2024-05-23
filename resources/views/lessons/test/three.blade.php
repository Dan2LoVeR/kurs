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
    <h1 class="text-4xl text-center font-bold mb-8">Тест №3</h1>
    
    <h3 class="text-2xl font-bold mb-8"></h3>

    <div class="relative rounded-xl shadow-xl">

        <form action="{{ route("1test_process") }}" method="post">
        @csrf
          <input type="hidden" name="name" value="3">
          
        {{-- Вопрос 1 --}}
        <div class="sticky mb-5 top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">У вас появился заказ на разработку фирменного стиля, как вы будете выбирать цвета для него?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="f" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        Буду использовать свои любимые цветовые сочетания
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
                                        Выберу, исходя из предпочтений клиента
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="f" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        Посмотрю, какие цвета ассоциируются с продуктом компании, и совмещу с предыдущим пунктом 
                                        
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
        <div class="sticky mb-5  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Вы сильно затрудняетесь в подборе цвета или цветовой пары, что предпримите?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="s" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        Подсмотрю у коллег
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
                                        Посмотрю референсы на тему
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
                                        Загляну на вспомогательные сайты
                                        
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
        <div class="sticky mb-2  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 3 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Какую цветовую модель будете использовать в рабочем макете для дизайна упаковки? </h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        RGB
                                    </p>

                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        CMYK
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        HEX, HSL
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
        {{-- Вопрос 4 --}}
        <div class="sticky mb-2  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 3 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Какую цветовую модель будете использовать на превью-файле для согласования макета с заказчиком?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fo" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between text-center">
                                    <p>RGB</p>

                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                            <label class="cursor-pointer">
                                <input type="radio" class="peer sr-only" name="fo" value="1"/>
                                <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                  <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between text-center">
                                      <p>CMYK</p>
  
                                    </div>
                                  </div>
                                </div>
                              </label>
                            <!-- Pro Pricing Option -->
                            
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fo" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>HEX</p>
                
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
        <div class="sticky mb-1  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Заказчик хочет проект, выполненный в пастельных тонах, какой референс подойдет?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fi" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <img src="img/example/test2/1.png">
                                    
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
                                    
                                    <img src="img/example/test2/2.png">
                                    
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
                                    
                                    <img src="img/example/test2/3.png">
                
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
        <div class="sticky mb-1  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white">
          <div class="items-center justify-center h-1/2 pb-4" >
              <!-- 1 -->
              <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Какая упаковка луше подходит для премиального сегмента по сочетанию дизайна и цветовой гаммы?</h3>
              
              <div>
                  
                      <div class="mx-auto max-w-6xl px-10">
                        <div class="flex flex-wrap justify-center gap-3">
                          <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="si" value="0"/>
                            <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                              <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <img src="img/example/test2/11.png">
                                  
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
                                  
                                    <img src="img/example/test2/12.png">
                                  
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
                                  
                                    <img src="img/example/test2/13.png">
              
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

        <div class="relative inline-flex  group">
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