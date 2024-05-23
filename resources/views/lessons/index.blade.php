@extends('layout.app')
@section('title', 'Уроки')
@section('content')

  @include('partials.header')

                




<div class="w-full h-20 flex justify-center items-center">
    
    
</div>
<style>
                                  *,
                              *::before,
                              *::after {
                              margin: 0;
                              padding: 0;
                              box-sizing: border-box;
                              }

                              body {
                              font: normal 16px/1.5 "Helvetica Neue", sans-serif;
                              
                              color: #000000;
                              overflow-x: hidden;
                              padding-bottom: 50px;
                              }


                              /* INTRO SECTION
                              –––––––––––––––––––––––––––––––––––––––––––––––––– */

                              .intro {
                              background: #f45b69;
                              padding: 100px 0;
                              border: 2px solid black;
                              }

                              .container {
                              width: 90%;
                              max-width: 1200px;
                              margin: 0 auto;
                              text-align: center;
                              }

                              h1 {
                              font-size: 2.5rem;
                              }


                              /* TIMELINE
                              –––––––––––––––––––––––––––––––––––––––––––––––––– */

                              .timeline ul {
                              
                              padding: 50px 0;
                              }

                              .timeline ul li {
                              list-style-type: none;
                              position: relative;
                              width: 3px;
                              margin: 0 auto;
                              border-radius: 20px;
                              padding-top: 50px;
                              background: black;
                              }

                              .timeline ul li::after {
                              content: "";
                              position: absolute;
                              left: 50%;
                              bottom: 0;
                              transform: translateX(-50%);
                              width: 30px;
                              height: 30px;
                              border-radius: 50%;
                              background: inherit;
                              z-index: 1;
                              }

                              .timeline ul li div {
                              border-radius: 30px;
                              position: relative;
                              bottom: 0;
                              width: 400px;
                              padding: 15px;
                              border: 2px solid black;
                              background: white;
                              }

                              .timeline ul li div::before {
                              content: "";
                              position: absolute;
                              bottom: 7px;
                              width: 0;
                              height: 0;
                              border-style: solid;
                              }

                              .timeline ul li:nth-child(odd) div {
                              left: 45px;
                              }

                              .timeline ul li:nth-child(odd) div::before {
                              left: -12px;
                              border-radius: 5px;
                              border-width: 2px 20px 10px 0px;
                              
                              border-color: transparent black transparent transparent;
                              }

                              .timeline ul li:nth-child(even) div {
                              left: -439px;
                              }

                              .timeline ul li:nth-child(even) div::before {
                              right: -12px;
                              border-radius: 5px;
                              border-width: 2px 0 10px 20px;
                              border-color: transparent transparent transparent rgb(3, 3, 3);
                              }

                              time {
                              display: block;
                              font-size: 1.2rem;
                              font-weight: bold;
                              margin-bottom: 8px;
                              }


                              /* EFFECTS
                              –––––––––––––––––––––––––––––––––––––––––––––––––– */

                              .timeline ul li::after {
                              transition: background 0.5s ease-in-out;
                              }

                              .timeline ul li.in-view::after {
                                border: 3px solid black;
                                background: rgb(255,103,94);
                                background: linear-gradient(144deg, rgba(255,103,94,1) 10%, rgba(255,68,236,1) 55%, rgba(68,188,255,1) 92%);
                              }

                              .timeline ul li div {
                              visibility: hidden;
                              opacity: 0;
                              transition: all 0.5s ease-in-out;
                              }

                              .timeline ul li:nth-child(odd) div {
                              transform: translate3d(200px, 0, 0);
                              }

                              .timeline ul li:nth-child(even) div {
                              transform: translate3d(-200px, 0, 0);
                              }

                              .timeline ul li.in-view div {
                              transform: none;
                              visibility: visible;
                              opacity: 1;
                              }


                              /* GENERAL MEDIA QUERIES
                              –––––––––––––––––––––––––––––––––––––––––––––––––– */

                              @media screen and (max-width: 900px) {
                              .timeline ul li div {
                                  width: 250px;
                              }
                              .timeline ul li:nth-child(even) div {
                                  left: -289px;
                                  /*250+45-6*/
                              }
                              }

                              @media screen and (max-width: 600px) {
                              .timeline ul li {
                                  margin-left: 20px;
                              }
                              .timeline ul li div {
                                  width: calc(100vw - 91px);
                              }
                              .timeline ul li:nth-child(even) div {
                                  left: 45px;
                              }
                              .timeline ul li:nth-child(even) div::before {
                                left: -12px;
                              border-radius: 5px;
                              border-width: 2px 20px 10px 0px;
                              
                              border-color: transparent black transparent transparent;
                              }
                              }


                              /* EXTRA/CLIP PATH STYLES
                              –––––––––––––––––––––––––––––––––––––––––––––––––– */
                              .timeline-clippy ul li::after {
                              width: 40px;
                              height: 40px;
                              border-radius: 0;
                              }

                              .timeline-rhombus ul li::after {
                              clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
                              }

                              .timeline-rhombus ul li div::before {
                              bottom: 12px;
                              }

                              .timeline-star ul li::after {
                              clip-path: polygon(
                                  50% 0%,
                                  61% 35%,
                                  98% 35%,
                                  68% 57%,
                                  79% 91%,
                                  50% 70%,
                                  21% 91%,
                                  32% 57%,
                                  2% 35%,
                                  39% 35%
                              );
                              }

                              .timeline-heptagon ul li::after {
                              clip-path: polygon(
                                  50% 0%,
                                  90% 20%,
                                  100% 60%,
                                  75% 100%,
                                  25% 100%,
                                  0% 60%,
                                  10% 20%
                              );
                              }

                              .timeline-infinite ul li::after {
                              animation: scaleAnimation 2s infinite;
                              }

                              @keyframes scaleAnimation {
                              0% {
                                  transform: translateX(-50%) scale(1);
                              }
                              50% {
                                  transform: translateX(-50%) scale(1.25);
                              }
                              100% {
                                  transform: translateX(-50%) scale(1);
                              }
                              }


                              

                              
                </style>  
<div class="div-horizontal-scroll" class="my-40">
  <div class="timeline">
    <ul>
      <li>
        
        
        <div><time> Что такое фирменный стиль. Основные элементы фирменного стиля</time>
          <section style="max-width: 77px;" href="{{route("first")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("first")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("first")}}">
              →
          </button></a>
          </section>

        </div>
      </li>

      
      <li>
        <div>
          <time> Виды логотипов</time> 
          <section style="max-width: 77px;" href="{{route("second")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("second")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("second")}}">
              →
          </button></a>
          </section>
        </div>
      </li>
      <li>
        
          <div>
            <time> Работа с цветовой палитрой</time> 
            <section style="max-width: 77px;" href="{{route("third")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("third")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("third")}}">
              →
          </button></a>
          </section>
          </div>
      </li>
      <li>
        
          <div>
            <time> Правила использования логотипа (теория)</time>
            <section style="max-width: 77px;" href="{{route("fourth")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("fourth")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("fourth")}}">
              →
          </button></a>
          </section>
          </div>
      </li>
      
      <li>
        
          <div>
            <time> Фирменный бланк: назначение, требования, примеры</time> 
            <section style="max-width: 77px;" href="{{route("second")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("fifth")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("fifth")}}">
              →
          </button></a>
          </section>
          </div>
      </li>
      <li>
        
          <div>
            <time> Фирменный паттерн</time> 
            <section style="max-width: 77px;" href="{{route("second")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("sixth")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("sixth")}}">
              →
          </button></a>
          </section>
          </div>
      </li>
      
      <li>
        
          <div>
            <time> Виды, назначение визиток</time> 
            <section style="max-width: 77px;" href="{{route("second")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("seventh")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("seventh")}}">
              →
          </button></a>
          </section>
          </div>
      </li>
      <li>
        
          <div>
            <time> Бейдж. Назначение, виды, примеры. Создание бейджа</time> 
            <section style="max-width: 77px;" href="{{route("second")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("eighth")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("eighth")}}">
              →
          </button></a>
          </section>
          </div>
      </li>
      <li>
        
          <div>
            <time> Презентационный щит</time>
            <section style="max-width: 77px;" href="{{route("second")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("nineth")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("nineth")}}">
              →
          </button></a>
          </section> 
          </div>
      </li>
      <li>
        
          <div>
            <time> Проверить себя</time> 
            <section style="max-width: 77px;" href="{{route("second")}}"
          class="flex rounded-full mx-auto bg-gradient-to-tr from-[#44BCFF] via-[#FF44EC] to-[#FF675E] p-1 shadow-lg"><a href="{{route("1test")}}">
          <button class="flex-1 font-bold text-xl bg-white px-6 py-1 rounded-full text-black" href="{{route("1test")}}">
              →
          </button></a>
          </section>
          </div>
      </li>
    </ul>
  </div>
</div>  
<script>
    (function () {
        "use strict";

        // define variables
        var items = document.querySelectorAll(".timeline li");

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
            }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);
        })();

  </script>



  @include('partials.footer') 
  @endsection

  