@extends('layout.app')
@section('title', 'Регистрация')
@section('content')
    

        <div class="w-screen animated-background h-screen flex flex-col space-y-10 justify-center items-center">
            <div class="area">
                <ul class="circles" class="h-full">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="bg-white w-96 shadow-xl rounded p-5">
                <h1 class="text-3xl font-medium">Регистрация</h1>

                <form action="{{route("register_process")}}" class="space-y-5 mt-5" method="POST">

                    @csrf

                    <input name="name" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('name') border-red-500 @enderror" placeholder="Имя" />

                    @error('name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror

                    <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />

                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror

                    <input name="password" type="password" class="w-full h-12 border border-gray-800 rounded px-3 @error('password') border-red-500 @enderror" placeholder="Пароль" />
                    
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                    
                    <input name="password_confirmation" type="password" class="w-full h-12 border border-gray-800 rounded px-3 @error('password_confirmation') border-red-500 @enderror" placeholder="Подтверждение пароля" />

                    @error('password_confirmation')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror

                    <div >
                        <div class="captcha sm:mb-0 self-center flex flex-wrap justify-between ">
                            <span>
                                {!! captcha_img('math') !!}
                            </span>


                            

                            <button type="button" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2 reload" id="reload">
                                &#x21bb;
                            </button>

                            <div class="dropdown inline-block relative">
                                <div class="bg-gray-300  text-gray-700  font-semibold py-2 px-4 rounded inline-flex items-center">
                                  <span class="mr-1">Группа</span>
                                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                </div>
                                <ul class="dropdown-menu absolute  hidden text-gray-700 absolut pt-1">
                                    @foreach ($groups as $group)
                                    <li class="bg-gray-200  hover:bg-gray-400   px-4 block whitespace-no-wrap"><input type="radio" class="" name="group_id" value="{{$group->id}}" id="{{$group->id}}"> <label for="{{$group->id}}" class="custom-radio"></label> {{$group->name}}</li>       
                                    @endforeach


                                
                                </ul>
                              </div>
                              
                              <style>
                                .dropdown:hover .dropdown-menu {
                                    display: block;
                                }
                                .custom-radio {
                                    display: inline-block;
                                    width: 60%;
                                    height: 20px;
                                    position: absolute;
                                    padding-right: 4px;
                                    
                                }
                                input[type="radio"] {
                                    display: none;
                                }
                                input[type="radio"]:checked + .custom-radio {
                                    
                                    border-bottom: 3px solid rgb(55 65 81 );
                                }
                                </style>
		
                                
                                
                              
                        </div>

                    </div>
                    
                    <input name="captcha" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('captcha') border-red-500 @enderror" placeholder="Введите ответ с картинки" />

                    @error('captcha')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror


                    <div class="sm:mb-0 mt-10 self-center flex flex-wrap justify-center ">
                    <div class="relative inline-flex group mt-10">
                        <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <button type="submit"  title="Get quote now"
                                class="relative inline-flex items-center justify-center px-10 py-2 text-lg font-bold text-black transition-all duration-200 border-black border-2 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                                role="button">Зарегистрироваться
                        </button>
                    </div>
                    <div class="mt-3">
                        <a href="{{route("login")}}" class="ml-2  font-medium relative text-black hover:text-gray-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Есть аккаунт?</a>
                    </div></div>
                </form>
            </div>
        </div>
        <script type="module">
            
            $('#reload').click(function(){
                
                $.ajax({
                    type:'GET',
                    url: 'reload-captcha',
                    success:function(data){
                        
                        $(".captcha span").html(data.captcha)
                    }
                });
            });
        </script>
        
@endsection