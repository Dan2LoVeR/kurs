@extends('layout.admin')

@section('title',  isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить группу')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить группу' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ route("admin.posts.store") }}">
                @csrf

                

                <input name="name" type="text" class="w-full h-12 border border-gray-800 rounded px-3 " placeholder="Название"  />

                

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
