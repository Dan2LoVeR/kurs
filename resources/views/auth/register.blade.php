@extends('layout.app')
@section('title', 'Регистрация')
@section('content')
    

        <div class="w-screen animated-background h-screen bg-gradient-to-r from-blue-500 via-blue-600 to-indigo-700 flex flex-col space-y-10 justify-center items-center">
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
                        </div>

                    </div>
                    
                    <input name="captcha" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('captcha') border-red-500 @enderror" placeholder="Введите ответ с картинки" />

                    @error('captcha')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror


                    <div>
                        <a href="{{route("login")}}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть аккаунт?</a>
                    </div>

                    <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Зарегистрироваться</button>
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