<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full md:max-w-6xl mx-auto rounded-b-xl">
      <div class="mb-2 sm:mb-0 inner">

          <a href="{{route("home")}}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">ИЦКЦ</a><br>
          <span class="text-xs text-grey-dark">Исакогорско-Цигломенский культурный центр</span>

      </div>

      <div class="sm:mb-0 self-center flex flex-wrap justify-between ">
            @guest("web")
            <a href="{{route("login")}}" type="button" id="bt" class="rounded px-5 py-3 min-w-max overflow-hidden shadow relative bg-indigo-700 text-white hover:bg-opacity-90">Войти</a>
            @endguest

            @auth("web")

            
              <div class="group relative cursor-pointer py-2">
          
                  <div class="flex items-center justify-between space-x-5 bg-white px-4">
                      <a class="menu-hover my-2 py-2 text-base font-medium text-black lg:mx-4" onClick="">
                        {{ Auth::user()->name }}
                      </a>
                      <span>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="h-6 w-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                          </svg>
                      </span>
                  </div>
          
                  <div
                      class="invisible absolute rounded-xl z-50 flex w-full flex-col bg-white py-1 px-4 text-gray-800 shadow-xl group-hover:visible">
          
                      <a href="{{route("profile.edit")}}" class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-indigo-700 md:mx-2">
                        Профиль
                      </a>
          
                      <a href="{{route("logout")}}" class="my-2 block border-b border-gray-100 py-1 font-semibold text-gray-500 hover:text-indigo-700 md:mx-2">
                        Выйти
                      </a>
          
                  
          
                  </div>
              </div>
          

            
            
            @endauth

            
          </div>
  </nav>


  <script>
    function rippleEffect(event) {
          const btn = event.currentTarget;
  
          const circle = document.createElement("span");
          const diameter = Math.max(btn.clientWidth, btn.clientHeight);
          const radius = diameter / 2;
  
          circle.style.width = circle.style.height = `${diameter}px`;
          circle.style.left = `${event.clientX - (btn.offsetLeft + radius)}px`;
          circle.style.top = `${event.clientY - (btn.offsetTop + radius)}px`;
          circle.classList.add("ripple");
  
          const ripple = btn.getElementsByClassName("ripple")[0];
  
          if (ripple) {
              ripple.remove();
          }
  
          btn.appendChild(circle);
      }
  
      const btn = document.getElementById("bt");
      btn.addEventListener("click", rippleEffect);
  </script>