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

<div class="w-full h-96 flex justify-center items-center">
    
    
    </div>
    <section></section>
<!-- sample article -->
<div >
    




    <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
        <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900" id="block">Сделай логотип для </h2>
        <p class="mb-10">{{$user->title}} (сделай это здесь либо в приложении)</p>
        
        <div class="w-full">

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
                        <div class="relative h-full p-2 bg-white border-2 border-blue-400 rounded-lg">
                        
                            <div class="itog" class="shadow-sm">
                                <img id="logotip" src="img/example/one/shavuha.png" alt="Old Image">
                            
                                <h3 class="brand" class="position-relative rounded-t-lg">бренд</h3></img>
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
                            
                            <form class="grid grid-cols-3 gap-2 w-full max-w-screen-sm">
                                <div>
                                    <input class="hidden" id="radio_1" type="radio" name="radio" checked>
                                    <label class="flex flex-col p-4 border-2 border-gray-200 rounded-lg cursor-pointer" onclick="changeColor('white')" for="radio_1">
                                        <span class="text-xs font-semibold uppercase">пустой</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_2" type="radio" name="radio" onclick="changeColor('#a6a6a6')">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" for="radio_2">
                                        <span class="text-xs font-semibold uppercase">серый</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_3" type="radio" name="radio" onclick="changeColor('black')">
                                    <label class="flex flex-col p-4 border-2 border-black rounded-lg cursor-pointer" for="radio_3">
                                        <span class="text-xs font-semibold uppercase">чёрный</span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_4" type="radio" name="radio" onclick="changeColor('#bef264')">
                                    <label class="flex flex-col p-4 border-2 border-lime-300 rounded-lg cursor-pointer" for="radio_4">
                                        <span class="text-xs font-semibold uppercase">лайм</span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_5" type="radio" name="radio" onclick="changeColor('#fca5a5')">
                                    <label class="flex flex-col p-4 border-2 border-red-300 rounded-lg cursor-pointer" for="radio_5">
                                        <span class="text-xs font-semibold uppercase">розовый</span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_6" type="radio" name="radio" onclick="changeColor('#fde047')">
                                    <label class="flex flex-col p-4 border-2 border-yellow-300 rounded-lg cursor-pointer" for="radio_6">
                                        <span class="text-xs font-semibold uppercase">жёлтый</span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_7" type="radio" name="radio" onclick="changeColor('#22d3ee')">
                                    <label class="flex flex-col p-4 border-2 border-cyan-400 rounded-lg cursor-pointer" for="radio_7">
                                        <span class="text-xs font-semibold uppercase">голубой</span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_8" type="radio" name="radio" onclick="changeColor('#c084fc')">
                                    <label class="flex flex-col p-4 border-2 border-purple-400 rounded-lg cursor-pointer" for="radio_8">
                                        <span class="text-xs font-semibold uppercase">пурпур</span>
                                        
                                    </label>
                                </div>

                                <div>
                                    <input class="hidden" id="radio_9" type="radio" name="radio" onclick="changeColor('#1d4ed8')">
                                    <label class="flex flex-col p-4 border-2 border-blue-700 rounded-lg cursor-pointer" for="radio_9">
                                        <span class="text-xs font-semibold uppercase">синий</span>
                                        
                                    </label>
                                </div>

                                

                            </form>
                            
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
                            <form class="grid grid-cols-3 gap-2 w-full max-w-screen-sm">
                                <div>
                                    <input class="hidden" id="radio_10" type="radio" name="radio" checked>
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('shavuha')" for="radio_10">
                                        <span class="text-xs font-semibold uppercase">1</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_11" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('ball')" for="radio_11">
                                        <span class="text-xs font-semibold uppercase">2</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_12" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('safe')" for="radio_12">
                                        <span class="text-xs font-semibold uppercase">3</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_13" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('star')" for="radio_13">
                                        <span class="text-xs font-semibold uppercase">4</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_14" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('krug')" for="radio_14">
                                        <span class="text-xs font-semibold uppercase">5</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_15" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('mashine')" for="radio_15">
                                        <span class="text-xs font-semibold uppercase">6</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_16" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('medecine')" for="radio_16">
                                        <span class="text-xs font-semibold uppercase">7</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_17" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('medecine2')" for="radio_17">
                                        <span class="text-xs font-semibold uppercase">8</span>
                                        
                                    </label>
                                </div>
                                <div>
                                    <input class="hidden" id="radio_18" type="radio" name="radio">
                                    <label class="flex flex-col p-4 border-2 border-gray-400 rounded-lg cursor-pointer" onclick="changeImage('dog')" for="radio_18">
                                        <span class="text-xs font-semibold uppercase">9</span>
                                        
                                    </label>
                                </div>

                                
                            </form>
                            <script>
                                function changeImage(im) {
                                    
                                    link = 'img/example/one/'+im+'.png';
                                    
                                    const myImg = document.getElementById('logotip');
                                    myImg.src = link;
                                    }
                                function changeColor(i){
                                    $('.itog').css('background-color', i);
                                    $('.brand').css('background-color', i);
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
                            
                            <form action="">

                                <div class="flex flex-wrap">   
                                    <div class="bg-white p-4 rounded-lg">
                                        <div class="relative bg-inherit">
                                            <input type="text"  name="input" class="peer bg-transparent h-10 w-max rounded-lg text-gray-200 placeholder-transparent ring-2 px-2 ring-gray-500 focus:ring-sky-600 focus:outline-none focus:border-rose-600" id="brandform" placeholder="Type inside me"/><label for="username" class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Название</label>
                                        </div>
                                    </div>



                                

                                    <div class="dropdown inline-block relative p-4">
                                      <div class="bg-gray-300  text-gray-700  font-semibold py-2 px-4 rounded inline-flex items-center">
                                        <span class="mr-1">Шрифт</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                      </div>
                                      <ul class="dropdown-menu absolute  hidden text-gray-700 absolut pt-1">
                                        <li class=""><a class="rounded-t bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap" onclick="changeFont('Impact, fantasy')" >Impact</a></li>
                                        <li class=""><a class="bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap" onclick="changeFont('URW Chancery L, cursive')" >Chancery</a></li>
                                        <li ><a class="rounded-b bg-gray-200  hover:bg-gray-400  py-2 px-4 block whitespace-no-wrap" onclick="changeFont('Courier, monospace')">Courier </a></li>
                                      </ul>
                                    </div>
                                  
                                    <div class="w-full mx-4">
                                        
                                        <input id="range" type="range" value="1" max="1.9" min="0.1" step="0.1" class="block w-full py-2 bg-black text-gray-700 bg-red border border-red-300 rounded-md focus:border-red-700 focus:outline-none focus:ring">
                                    </div>


                                    
                                    <div class="flex flex-auto justify-evenly border rounded-md w-full mx-4 mb-3">

                                        <div class="border-none px-2 py-1 rounded-md w-full text-center" onclick="changeTC('white')">
                                            <input type="radio" class="hidden" id="searchMCQs">
                                            <label class="cursor-pointer" for="searchMCQs">Белый</label>
                                        </div>
                                
                                        <div class="border-none px-2 py-1 rounded-md w-full text-center" onclick="changeTC('#6B6C6E')">
                                            <input type="radio" class="hidden" id="searchTopics">
                                            <label class="cursor-pointer" for="searchTopics">Серый</label>
                                        </div>
                    
                                        <div class="border-none px-2 py-1 rounded-md w-full text-center" onclick="changeTC('black')">
                                            <input type="radio" class="hidden" id="searchCourses">
                                            <label class="cursor-pointer" for="searchCourses">Чёрный</label>
                                        </div>
                                
                                    </div>
                                    


                                <div onclick="changeText()"
                                class="px-8 m-auto py-4 w-1/2  text-center bg-blue-500 text-white font-bold rounded-full transition-transform hover:-translate-y-1 hover:shadow-lg">
                                Изменить
                            </div></div>
                            </form>

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
                                        <div class="w-full p-3">
                                            <div class="relative border-dotted h-48 rounded-lg border-dashed border-2 border-purple-500 bg-gray-100 flex justify-center items-center">
                            
                                              <div class="absolute">
                                                
                                                <div class="flex flex-col items-center">
                                                  <i class="fa fa-folder-open fa-4x text-purple-500"></i>
                                                
                                                </div>
                                              </div>
                                              <form action="{{route('image')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                            
                                              <input type="file" class="h-full w-full opacity-0" name="image"><span class="block text-gray-400 font-normal">Прикрепите свой файл</span>
                                              <button type="submit" class="tx-8 mt-14 m-auto py-4 w-1/2  text-center bg-purple-500 text-white font-bold rounded-full transition-transform hover:-translate-y-1 hover:shadow-lg">отправить</button>
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
    </div>
            

        
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

@include('partials.footer') 
@endsection