<div class="flex gap-3 flex-wrap justify-center md:max-w-6xl mx-auto">
    <div class=" transform  rounded-xl h-400 w-400 sm:h-104 sm:w-64 border-4 border-white bg-white shadow-xl transition duration-300 hover:scale-105 overflow-hidden" >
        <div >
            <a href="{{route("posts.show", $post->id)}}">
                <img src="storage/posts/{{$post->thumbnail}}">
            </a>
        </div>
        <div class="px-4 py-2 mt-2 bg-white">
            <h2 class="font-bold text-2xl text-gray-800">{{$post->title}}</h2>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                {!!$post->preview!!}
            </p>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                {!!$post->link!!}
            </p>
        </div>
    </div>
</div>


