
<div class="fixed  z-50 w-100 px-8 py-2 transition-all duration-1000 rounded-full mt-4 mb-10 max-w-2xl inset-x-0 mx-auto ease-in-out transform " :class="{ 'bg-black bg-opacity-90 backdrop-blur-xl max-w-4xl ': !atTop, 'max-w-2xl': atTop }" @scroll.window="atTop = (window.pageYOffset > 50 ? false : true)">
  <!-- This div is styled to change its appearance based on the scroll position, toggling classes for background, opacity, blur, and width. -->
  <div x-data="{ open: false }" class="flex flex-col w-full p-2 mx-auto md:items-center md:justify-between md:flex-row">
   <!-- Another Alpine.js component for handling the navigation menu's open/close state. -->
   <div class="flex flex-row items-center justify-between"> <span class="font-bold tracking-tighter text-black uppercase" :class="{ 'text-black': atTop, 'text-white': !atTop }">
     <!-- This span changes color based on the scroll position, using the `atTop` state. -->
     <a href="{{route("home")}}" class="text-3xl  font-extrabold">⨝</a>
    </span> 
    <button class="md:hidden  focus:outline-none ">
      
        @guest("web")
          <a :class="{ 'text-black': atTop, 'text-white': !atTop }" href="{{route("login")}}" class="text-black">Войти</a>
        @endguest
            
        @auth("web")
        <a :class="{ 'text-black': atTop, 'text-white': !atTop }" href="{{route("profile.edit")}}" class="text-black mr-4">Профиль</a> 
          <a :class="{ 'text-black': atTop, 'text-white': !atTop }" href="{{route("logout")}}" class="text-black">Выйти</a> 
        @endauth
        
        
       
     </button>
     
  </div>
   <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow gap-8 hidden pb-4 md:pb-0 md:flex md:flex-row lg:ml-auto justify-end mb:justify-">
    @guest("web")
      <a :class="{ 'text-black': atTop, 'text-white': !atTop }" href="{{route("login")}}" class="text-black">Войти</a>
    @endguest
        
    @auth("web")
    <a :class="{ 'text-black': atTop, 'text-white': !atTop }" href="{{route("profile.edit")}}" class="text-black">Профиль</a> 
      <a :class="{ 'text-black': atTop, 'text-white': !atTop }" href="{{route("logout")}}" class="text-black">Выйти</a> 
    @endauth
    
    
   </nav>

   
  </div>
 </div>

</div>
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
  
     

  </script>
  <script>document.documentElement.classList.add('js')</script>