<style>
    /* 404 Error Page */
 #oopss {
	 background: white;
	 position: fixed;
	 left: 0px;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 line-height: 1.5em;
	 z-index: 9999;
}
 #oopss #error-text {
	 font-size: 40px;
	 display: flex;
	 flex-direction: column;
	 align-items: center;
	 font-family: 'Shabnam', Tahoma, sans-serif;
	 color: #000;
	 direction: rtl;
}
 #oopss #error-text img {
	 margin: 85px auto 20px;
	 height: 342px;
}
 #oopss #error-text span {
	 position: relative;
	 font-size: 3.3em;
	 font-weight: 900;
	 margin-bottom: 50px;
}
 #oopss #error-text p.p-a {
	 font-size: 19px;
	 margin: 30px 0 15px 0;
}
 #oopss #error-text p.p-b {
	 font-size: 15px;
}
 #oopss #error-text .back {
	 background: #fff;
	 color: #000;
	 font-size: 30px;
	 text-decoration: none;
	 margin: 2em auto 0;
	 padding: 0.7em 2em;
	 border-radius: 500px;
	 box-shadow: 0 20px 70px 4px rgb(255,103,94), inset 7px 33px 0 0px #ffffff;
     box-shadow: linear-gradient(144deg, rgba(255,103,94,1) 10%,  55%, rgba(68,188,255,1) 92%);
	 font-weight: 900;
	 transition: all 300ms ease;
}
 #oopss #error-text .back:hover {
	 
	 box-shadow: 0 35px 90px 4px rgba(68,188,255,1);
}

 
</style>

<div id='oopss'>
    
    <div id='error-text'>
        <img src="https://cdn.rawgit.com/ahmedhosna95/upload/1731955f/sad404.svg" alt="404">
        
        <span>{{ $errorCode }}</span>
        <p class="p-a">
            @isset($title)
                {{ $title }}
            @else
                Hello, is it me you're looking for?
            @endisset
        </p>
        
        <a href="{{route("home")}}" class="back">Вернуться на гланую </a>
    </div>
</div>