@extends('layout\app')
@section('title', 'Статьи')
@section('content')
    

  @include('partials.header')
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-50">
            @foreach ($posts as $post)
            @include('posts.partials.item', ["post"=>$post])
            @endforeach
            
        </div>
        <div class="flex justify-center mt-10 mb-50">

          {{$posts->links()}}
        </div>
        
        <br><br><br><br><br><br><br><br><br><br><br><br>
        @include('partials.footer') 
@endsection