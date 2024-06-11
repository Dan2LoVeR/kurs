@extends('layout.app')
@section('title', 'Основы')
@section('content')
@include('partials.header')

<style>
    input:checked + label {
	border-color: black;
	box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}
</style>
<section class="px-4 pt-40 pb-32 relative ">
    <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed" style="background-image:url(storage/image/back.jpg)"></div>
     
    </div>
  </section>
<div class="w-full flex justify-center items-center">
    
    
    </div>
    <section></section>
<!-- sample article -->
<div >
    

    
      


    <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
        
        <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900"  id="block">Сделай логотип для </h2>
        <p class="mb-10">{{$user->title}} (сделай это здесь либо в приложении)</p>
        
        <form class="w-full" action="{{route('back')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <style>
                .logotip{
                   
                    
                }
                .brand{
                    margin-left: auto;
                    text-align: center;
                    border-radius:  0 0 20px 20px; 

                }
                .itog{
                    border-radius: 20px 20px 0 0 ; 
                    margin: auto;
                    
                    width: 170px;
                    height: 170px;
                }
            </style>
            

            <div class="flex flex-col w-full mb-5 sm:flex-row">
                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                        <div class="relative h-full p-2 bg-white border-2 border-blue-400 rounded-lg items-center">
                        
                            <div class="itog" class="shadow-sm">
                                
                                <img id="logotip" src="img/example/one/shavuha.png" alt="Old Image">
                            
                                <h3 class="brand" class="position-relative rounded-t-lg">бренд</h3></img>
                            </div>
                        
                            
                            <div class="">
                                <button type="submit" class="px-10 ml-16 py-4 w-1/2 mt-11   text-center bg-blue-400 text-white font-bold rounded-full transition-transform hover:-translate-y-1 hover:shadow-lg">Готово</button>
                        
                            </div>
                           
                        
                        </div>
                    </div> 
                </div>
                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-400 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-yellow-400 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Фон</h3>
                            </div>
                            
                            
                            <div class="grid grid-cols-3 gap-2 w-full max-w-screen-sm">
                                <div>
                                    <input class="hidden" id="radio_1" type="radio" name="radioc" checked>
                                    <label class="flex flex-col p-4 border-2 bg-gray-200 rounded-lg cursor-pointer " onclick="changeColor('white')" for="radio_1">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_2" type="radio" name="radioc" value="#a6a6a6" onclick="changeColor('#a6a6a6')">
                                    <label class="flex flex-col p-4 border-2 bg-gray-400 rounded-lg cursor-pointer" for="radio_2">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_3" type="radio" name="radioc" value="black" onclick="changeColor('black')">
                                    <label class="flex flex-col p-4 border-2 bg-black rounded-lg cursor-pointer" for="radio_3">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_4" type="radio" name="radioc" value="#bef264" onclick="changeColor('#bef264')">
                                    <label class="flex flex-col p-4 border-2 bg-lime-300 rounded-lg cursor-pointer" for="radio_4">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_5" type="radio" name="radioc" value="#fca5a5" onclick="changeColor('#fca5a5')">
                                    <label class="flex flex-col p-4 border-2 bg-red-300 rounded-lg cursor-pointer" for="radio_5">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_6" type="radio" name="radioc" value="#fde047" onclick="changeColor('#fde047')">
                                    <label class="flex flex-col p-4 border-2 bg-yellow-300 rounded-lg cursor-pointer" for="radio_6">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_7" type="radio" name="radioc" value="#22d3ee" onclick="changeColor('#22d3ee')">
                                    <label class="flex flex-col p-4 border-2 bg-cyan-400 rounded-lg cursor-pointer" for="radio_7">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_8" type="radio" name="radioc" value="#c084fc" onclick="changeColor('#c084fc')">
                                    <label class="flex flex-col p-4 border-2 bg-purple-400 rounded-lg cursor-pointer" for="radio_8">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_9" type="radio" name="radioc" value="#1d4ed8" onclick="changeColor('#1d4ed8')">
                                    <label class="flex flex-col p-4 border-2 bg-blue-700 rounded-lg cursor-pointer" for="radio_9">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_22" type="radio" name="radioc" value="linear-gradient(to right, #c084fc, #fde047)" onclick="changeColor('linear-gradient(to right, #c084fc, #fde047)')">
                                    <label class="flex flex-col p-4 border-2  rounded-lg cursor-pointer" style="background: linear-gradient(to right, #c084fc, #fde047);" for="radio_22">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_23" type="radio" name="radioc" value="repeating-linear-gradient(#614E70,#614E70 15px,#6BE9BC 15px,#6BE9BC 30px)" onclick="changeColor('repeating-linear-gradient(#614E70,#614E70 15px,#6BE9BC 15px,#6BE9BC 30px)')">
                                    <label class="flex flex-col p-4 border-2  rounded-lg cursor-pointer" style="background: repeating-linear-gradient(#614E70,#614E70 15px,#6BE9BC 15px,#6BE9BC 30px);" for="radio_23">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_24" type="radio" name="radioc" value="#c7b39b url(/img/example/one/pattern3.jpg)" onclick="changeColor('#c7b39b url(img/example/one/pattern3.jpg)')">
                                    <label class="flex flex-col p-4 border-2  rounded-lg cursor-pointer" style="background: #c7b39b url(/img/example/one/pattern3.jpg);" for="radio_24">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_25" type="radio" name="radioc" value="#c7b39b url(/img/example/one/pattern2.jpg)" onclick="changeColor('#c7b39b url(/img/example/one/pattern2.jpg)')">
                                    <label class="flex flex-col p-4 border-2  rounded-lg cursor-pointer" style="background: #c7b39b url(img/example/one/pattern2.jpg);" for="radio_25">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_26" type="radio" name="radioc" value="#c7b39b url(/img/example/one/pattern4.png)" onclick="changeColor('#c7b39b url(img/example/one/pattern4.png)')">
                                    <label class="flex flex-col p-4 border-2  rounded-lg cursor-pointer" style="background: #c7b39b url(img/example/one/pattern4.png);" for="radio_26">
                                        <span class="text-xs font-semibold uppercase"></span>
                                        
                                    </label>
                                </div>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2">
                    <div class="relative h-full ml-0 md:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Изображение</h3>
                            </div>
                            <div class="grid grid-cols-3 gap-2 w-full max-w-screen-sm">
                                <div>
                                    <input class="hidden" id="radio_10" type="radio" name="radioi" value="shavuha.png" checked>
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('shavuha')" for="radio_10">
                                        <span class="text-xs font-semibold uppercase">1</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_11" type="radio" name="radioi" value="ball.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('ball')" for="radio_11">
                                        <span class="text-xs font-semibold uppercase">2</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_12" type="radio" name="radioi" value="safe.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('safe')" for="radio_12">
                                        <span class="text-xs font-semibold uppercase">3</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_13" type="radio" name="radioi" value="star.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('star')" for="radio_13">
                                        <span class="text-xs font-semibold uppercase">4</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_14" type="radio" name="radioi" value="krug.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('krug')" for="radio_14">
                                        <span class="text-xs font-semibold uppercase">5</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_15" type="radio" name="radioi" value="mashine.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('mashine')" for="radio_15">
                                        <span class="text-xs font-semibold uppercase">6</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_16" type="radio" name="radioi" value="medecine.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('medecine')" for="radio_16">
                                        <span class="text-xs font-semibold uppercase">7</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_17" type="radio" name="radioi" value="medecine2.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('medecine2')" for="radio_17">
                                        <span class="text-xs font-semibold uppercase">8</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_18" type="radio" name="radioi" value="dog.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('dog')" for="radio_18">
                                        <span class="text-xs font-semibold uppercase">9</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_19" type="radio" name="radioi" value="monk.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('monk')" for="radio_19">
                                        <span class="text-xs font-semibold uppercase">10</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_20" type="radio" name="radioi" value="rocket.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('rocket')" for="radio_20">
                                        <span class="text-xs font-semibold uppercase">11</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_21" type="radio" name="radioi" value="sun.png">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('sun')" for="radio_21">
                                        <span class="text-xs font-semibold uppercase">12</span>
                                        
                                    </label>
                                </div>
                                



                                
                                
                            </div>
                            <script>
                                function changeImage(im) {
                                    
                                    link = '/img/example/one/'+im+'.png';
                                    
                                    const myImg = document.getElementById('logotip');
                                    myImg.src = link;
                                    }
                                function changeColor(i){
                                    $('.itog').css('background', i);
                                    $('.brand').css('background', i);
                                }

                                



                            </script>

                        </div>
                    </div>
               
                </div>
            </div>

            <style>
                .dropdown:hover .dropdown-menu {
                    display: block;
                }
            </style>

            <div class="flex flex-col w-full mb-10 sm:flex-row">

                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                            <div class="flex items-center -mt-1">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Типографика</h3>
                            </div>
                            
                            

                                <div class="flex flex-wrap">   
                                    <div class="bg-white p-4 rounded-lg">
                                        <div class="relative bg-inherit">
                                            <input type="text"  name="title" class="peer bg-transparent h-10 w-max rounded-lg text-gray-200 placeholder-transparent ring-2 px-2 ring-gray-500 focus:ring-sky-600 focus:outline-none focus:border-rose-600" id="brandform" placeholder="Type inside me"/><label for="username" class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Название</label>
                                        </div>
                                    </div>



                                

                                    <div class="dropdown inline-block relative p-4">
                                      <div class="bg-gray-300  text-gray-700  font-semibold py-2 px-4 rounded inline-flex items-center">
                                        <span class="mr-1">Шрифт</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                      </div>
                                      <ul class="dropdown-menu absolute  hidden text-gray-700 absolut pt-1">
                                        <li class="rounded-t bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap"><input type="radio"   name="font" value="Impact" onclick="changeFont('Impact, fantasy')" >Impact, fantasy</input></li>
                                        <li class="bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap"><input type="radio"  name="font" value="URW Chancery L cursive" onclick="changeFont('URW Chancery L, cursive')" >URW Chancery L, cursive</input></li>
                                        <li class="bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap"><input type="radio"  name="font" value="Georgia " onclick="changeFont('Georgia')" >Georgia</input></li>
                                        <li class="bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap"><input type="radio"  name="font" value="Arial Black " onclick="changeFont('Arial Black')" >Arial Black</input></li>
                                        <li class="bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap"><input type="radio"  name="font" value="Trebuchet MS " onclick="changeFont('Trebuchet MS')" >Trebuchet MS</input></li>
                                        <li class="rounded-b bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap"><input type="radio"  class="" name="font" value="Courier monospace"  onclick="changeFont('Courier, monospace')">Courier, monospace</input></li>
                                      </ul>
                                    </div>
                                  
                                    <div class="w-full mx-4">
                                        
                                        <input id="range" type="range" value="1" max="1.9" min="0.1" step="0.1" name="size" class="block w-full py-2 bg-black text-gray-700 bg-red border border-red-300 rounded-md focus:border-red-700 focus:outline-none focus:ring">
                                    </div>


                                    
                                    <div class="flex flex-auto justify-evenly border rounded-md w-full mx-4 mb-3">

                                    <div class="border-none px-2 py-1 rounded-md w-full text-center" onclick="changeTC('white')">
                                            <input type="radio" class="hidden" id="searchMCQs" name="color" value="white">
                                            <label class="cursor-pointer" for="searchMCQs">Белый</label>
                                        </div>
                                
                                        <div class="border-none px-2 py-1 rounded-md w-full text-center" onclick="changeTC('#6B6C6E')">
                                            <input type="radio" class="hidden" id="searchTopics" name="color" value="#6B6C6E">
                                            <label class="cursor-pointer" for="searchTopics">Серый</label>
                                        </div>
                    
                                        <div class="border-none px-2 py-1 rounded-md w-full text-center" onclick="changeTC('black')">
                                            <input type="radio" class="hidden" id="searchCourses" name="color" value="black">
                                            <label class="cursor-pointer" for="searchCourses">Чёрный</label>
                                        </div>
                                
                                    </div>
                                    


                                <div onclick="changeText()"
                                class="px-8 m-auto py-4 w-1/2  text-center bg-blue-500 text-white font-bold rounded-full transition-transform hover:-translate-y-1 hover:shadow-lg">
                                Изменить
                            </div></div>
                            

                            <script>
                                
                                function changeText(){
                                    const changeText = document.getElementsByClassName('brand')[0].textContent = $('#brandform').val();
                                    }
                                function changeFont(val){
                                    $('.brand').css('font-family', val);
                                }
                                function changeTC(i){
                                    $('.brand').css('color', i);
                                }

                                document.getElementById("range").addEventListener("change", function() {
                                    
                                    $('.brand').css('font-size', this.value+'rem');
                                    
                                    });   
                                    
                                
                            </script>
                        </div>
                    </div>
                </div>
                
                <div class="w-full sm:w-1/2">
                    <div class="relative h-full ml-0 md:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                            <div class="flex items-center -mt-1 mb-4">
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Форма отправки</h3>
                            </div>
                            <div class=" bg-white px-2">
                                <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
                                    <div class="md:flex">
                                        <div class="w-full p-2">
                                            <div class="relative border-dotted h-20 rounded-lg border-dashed border-2 border-purple-500 bg-gray-100 flex justify-center items-center">

                                @isset($path)
                                                        
                                                    @endisset
                                                    
                                                    
                                                        @csrf<span class="block text-gray-600 font-normal">Прикрепите своё изображение</span>
                                                        <input type="file" class="block w-full text-sm text-slate-500
                                                            file:mr-4 file:py-2 file:px-4
                                                            file:rounded-full file:border-0
                                                            file:text-sm file:font-semibold
                                                            file:bg-violet-50 file:text-violet-700
                                                            hover:file:bg-violet-100" name="imglogo" id="logotipc" accept="image/*" onchange="loadFile(event)">
                                                            
                                                   
                                                    
                    
                                                    
                                                    
                                                    <script>
                                                    var loadFile = function(event) {
                                                        var output = document.getElementById('logotip');
                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                        output.onload = function() {
                                                        URL.revokeObjectURL(output.src) // free memory
                                                        }
                                                    };
                                                    </script>  

                                            </div></div></div></div></form>

                                <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
                                    <div class="md:flex">
                                        <div class="w-full p-2">
                                            <div class="relative border-dotted h-40 rounded-lg border-dashed border-2 border-purple-500 bg-gray-100 flex justify-center items-center">
                            
                                              
                                              



                                              <form action="{{route('image')}}"  method="post" enctype="multipart/form-data" id="base64">
                                                {{csrf_field()}}
                                                <span class="block text-gray-600 font-normal">Прикрепите свой готовый файл логотипа</span>
                                              <input type="file" id="contenteditable" class="block w-full text-sm text-slate-500
                                                file:mr-4 file:py-2 file:px-4
                                                file:rounded-full file:border-0
                                                file:text-sm file:font-semibold
                                                file:bg-violet-50 file:text-violet-700
                                                hover:file:bg-violet-100" name="image">
                                              
                                                
                                                
                                              <button type="submit" class="tx-8 mt-6 m-auto py-4 w-1/2  text-center bg-purple-500 text-white font-bold rounded-full transition-transform hover:-translate-y-1 hover:shadow-lg">отправить</button>
                                              
                                            </form>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
            

    <script>
        document.getElementById('imageInput').addEventListener('paste', function (event) {
            var items = event.clipboardData.items;
            for (var i = 0; i < items.length; i++) {
                if (items[i].type.indexOf('image') !== -1) {
                    var blob = items[i].getAsFile();
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        // Здесь можно использовать полученные данные (event.target.result)
                        // Например, отправить на сервер или отобразить на странице
                        alert('Изображение вставлено:', event.target.result);
                    };
                    reader.readAsDataURL(blob);
                }
            }
        });
    </script>


<script type="text/javascript">
    if (!window.Clipboard) {
        var pasteCatcher = document.createElement("div");

        pasteCatcher.setAttribute("contenteditable", "");

        pasteCatcher.style.display = "none";
        document.body.appendChild(pasteCatcher);

        pasteCatcher.focus();
        document.addEventListener("click", function() { pasteCatcher.focus(); });
    } 
    window.addEventListener("paste", pasteHandler);

    function pasteHandler(e) {
        if (e.clipboardData) {
            var items = e.clipboardData.items;
            if (items) {
                for (var i = 0; i < items.length; i++) {
                    if (items[i].type.indexOf("image") !== -1) {
                        var blob = items[i].getAsFile();
                        var URLObj = window.URL || window.webkitURL;
                        var source = URLObj.createObjectURL(blob);                
                        createImage(source);
                    }
                }
            }
            } else {      
            setTimeout(checkInput, 1);
        }
    }

    function checkInput() {
        var child = pasteCatcher.childNodes[0];   
        pasteCatcher.innerHTML = "";    
        if (child) {
            if (child.tagName === "IMG") {
                createImage(child.src);
            }
        }
    }

    function createImage(source) {
        var pastedImage = new Image();
        pastedImage.onload = function() {
            document.getElementById("contenteditable").src = source;
        }
        pastedImage.src = source;

        var xhr = new XMLHttpRequest();
        xhr.open('GET', pastedImage.src, true);
        xhr.responseType = 'blob';
        xhr.onload = function(e) {
            if (this.status == 200) {
                var reader = new window.FileReader();
                reader.readAsDataURL(this.response);
                reader.onloadend = function() {
                    loadImg(reader.result);
                }
            }
        };
        xhr.send();
    }
    
    function loadImg(dataURL) {
        var xmlhttp = getXmlHttp();
        xmlhttp.open('POST', 'compress.php', true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send("a=" + encodeURIComponent(dataURL));
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4) {
                if(xmlhttp.status == 200) {
                    document.getElementById("base64").placeholder = xmlhttp.responseText;
                    document.getElementById("done").src = xmlhttp.responseText;
                }
            }
        };
    }

    function getXmlHttp() {
        var xmlhttp;
        try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
            try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
        }
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp = new XMLHttpRequest(); }
        return xmlhttp;
    }
</script>

    
<script> 

    
    let list= ["Медецинский центр", "Ресторан быстрого питания", "Сервиса хранения паролей", "Компании на произвольную тему"];
    let numb = Math.floor(Math.random() * 5)
    

    let block = document.getElementById('#block');
    div.before(list[numb], document.createElement('hr'));
    dish.before(list[numb], document.createElement('hr'));
    dish.before(list[numb], document.createElement('hr'));
    
    
</script>


<script>

let list= ["Медецинский центр", "Ресторан быстрого питания", "Сервиса хранения паролей", "Компании на произвольную тему"];
    
    m = 1;
    n = 4;
    let res =  Math.floor( Math.random() * (n - m + 1) ) + m;
    if(res >= 1 && res <= 10) return list[0];
    else if(res >= 11 && res <= 20) return list[1];
    return list[2];
    
    alert(list[2]);
    


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

<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

@include('partials.footer') 
@endsection