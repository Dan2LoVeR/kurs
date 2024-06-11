<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 ">
            {{ __('Информация Профиля') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700 ">
            {{ __("Обновите информацию профиля вашей учетной записи и адрес электронной почты.") }}
        </p>
    </header>


    
    
    {{-- {{$group[Auth::user()->group_id - 1]->name}}
    {{Auth::user()->group_id}}
     --}}

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            
            <input id="name" name="name" type="text" class="w-full h-12 px-3 border-stone-800 border rounded-xl bg-white" value='{{ Auth::user()->name }}' required autofocus autocomplete="name" />
            
        </div>

        <div>
            
            <input id="email" name="email" type="email" class="w-full h-12 px-3  border-stone-800 border rounded-xl bg-white" value='{{ Auth::user()->email }}' required autocomplete="username" />
            

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif

            <div class="dropdown inline-block relative mt-5">
                <div class="bg-gray-300  text-gray-700  font-semibold py-2 px-4 rounded inline-flex items-center">
                  <span class="mr-1">{{ Auth::user()->group->name }}</span>
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                </div>
                <ul class="dropdown-menu absolute  hidden text-gray-700 absolut pt-1">
                    @foreach ($group as $grou)
                    <li class="bg-gray-200  hover:bg-gray-400   px-4 block whitespace-no-wrap"><input type="radio" class="" name="group_id" value="{{$grou->id}}" id="{{$grou->id}}"> <label for="{{$grou->id}}" class="custom-radio"></label> {{$grou->name}}</li>       
                    @endforeach


                
                </ul>
              </div>
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

        <div class="flex items-center gap-4"> 
            
            <button class="rounded-xl px-5 static py-3 w-40 overflow-hidden border-2 shadow  bg-stone-400 text-white hover:bg-opacity-90 hover:bg-white hover:text-stone-400 ">{{ __('Сохранить') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    data="{ show: true }"
                    show="show"
                    transition
                    init="setTimeout(() => show = false, 2000)"
                    class=" text-white"
                >{{ __('Сохранено.') }}</p>
            @endif
        </div>
    </form>
</section>
