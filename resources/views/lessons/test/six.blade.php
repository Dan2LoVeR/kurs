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
  <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed" style="background-image:url(storage/image/back6.png)"></div>
   
  </div>
</section>
<div class="w-full  flex justify-center items-center">

    
</div>
<section></section>
<!-- sample article -->
<div >
<div class="max-w-4xl mx-auto p-8">
    <h1 class="text-4xl text-center font-bold mb-8">Тест №6</h1>
    
    <h3 class="text-2xl font-bold mb-8"></h3>

    <div class="relative rounded-xl shadow-xl">

        <form action="{{ route("1test_process") }}" method="post">
        @csrf
          <input type="hidden" name="name" value="6">
          
        {{-- Вопрос 1 --}}
        <div class="sticky mb-5 top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl">
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Для чего нужны визитки?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="f" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        Представляет необходимую часть делового этикета
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="f" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                      Представиться и обменяться контактами
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
                                        Указать на рабочее полжение в компании
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
        <div class="sticky mb-5  top-0 h-1/2 flex flex-col items-center justify-center border-slate-500 border-2 rounded-xl bg-white" >
            <div class="items-center justify-center h-1/2 pb-4" >
                <!-- 1 -->
                <h3 class="text-2xl mx-auto text-white text-center font-bold my-8 ">Какой формат визитки являетсмя стандартным в России?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="s" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        90 × 50 мм
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="s"  value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                      90 × 55 мм
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
                                      86 × 54 мм
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
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Стоит ли для указания имен и контактов использовать шрифты с завитками и «рукописные»? </h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        Да
                                    </p>

                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="t" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p>
                                        Нет
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
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Выберите пример с деловой визиткой</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fo" value="1"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between text-center">
                                    <img src="img/seventh/2.jpg" alt="">

                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                            <label class="cursor-pointer">
                                <input type="radio" class="peer sr-only" name="fo" value="0"/>
                                <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                  <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between text-center">
                                        <img src="img/seventh/4.png" alt="">
  
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
                                    
                                    <img src="img/seventh/5.png" alt="">
                
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
                <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Для чего компании часто оставляют обортную сторону чистой?</h3>
                
                <div>
                    
                        <div class="mx-auto max-w-6xl px-10">
                          <div class="flex flex-wrap justify-center gap-3">
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fi" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    <p>
                                        Тратится меньше краски на изготовление
                                    </p>
                                    
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!-- Repeat similar structure for other pricing options -->
                      
                            <!-- Pro Pricing Option -->
                            <label class="cursor-pointer">
                                <input type="radio" class="peer sr-only" name="fi" value="1"/>
                                <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                  <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                      <p>
                                          Удобно оставлять заметки
                                      </p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </label>
                      
                            <!-- Premium Pricing Option -->
                            <label class="cursor-pointer">
                              <input type="radio" class="peer sr-only" name="fi" value="0"/>
                              <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                  <div class="flex items-center justify-between">
                                    
                                    <p> Удобно хранить в визитнице</p>
                
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
              <h3 class="text-2xl mx-auto text-center font-bold my-8 ">Где удобнее создавать визитки?</h3>
              
              <div>
                  
                      <div class="mx-auto max-w-6xl px-10">
                        <div class="flex flex-wrap justify-center gap-3">
                          <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="si" value="0"/>
                            <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                              <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <p>Paint</p>
                                  
                                </div>
                              </div>
                            </div>
                          </label>
                          <!-- Repeat similar structure for other pricing options -->
                    
                          <!-- Pro Pricing Option -->
                          <div class="mx-auto max-w-6xl px-10">
                            <div class="flex flex-wrap justify-center gap-3">
                              <label class="cursor-pointer">
                                <input type="radio" class="peer sr-only" name="si" value="0"/>
                                <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                  <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <p>MC Excel</p>
                                      
                                    </div>
                                  </div>
                                </div>
                              </label>
                    
                          <!-- Premium Pricing Option -->
                          <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="si" value="1"/>
                            <div class="w-60 max-w-xl rounded-md bg-white  p-5 text-gray-600  ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                              <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                  
                                    <P>MC World</P>
              
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

          </div>
        </div>
      </div>
          <div class="flex justify-center items-center my-10">
          </div>
          <div class="flex flex-row">
         
        </div>
            <div class="container mx-auto px-4 mt-10">
              <nav class="flex flex-row flex-nowrap justify-between md:justify-center items-center " aria-label="Pagination">
                  <!-- Previous Page Button -->
                  <a class="flex w-10 h-10 mr-1 justify-center items-center  mr-10"
                      href="#" title="Previous Page">
                      <span class="sr-only">Предыдущий тест</span>
                      <div class="relative inline-flex  bg-white">
                        <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <button href="{{route("1test")}}" title="Get quote now"
                            class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                            role="button">←
                        </button>
                    </div>
                  </a>
                  <!-- Page Buttons (1 to 5) -->
                  <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                      href="{{route("1test")}}" title="Page 1">
                      1
                  </a>
                  <a class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border border-gray-200 bg-white hover:border-gray-300 "
                      href="{{route("2test")}}" title="Page 2">
                      2
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
                      <button type="submit" class=" w-full h-full" href="{{route("2test")}}">7</button>
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