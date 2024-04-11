@extends('layout\app')
@section('title', 'Профель')
@section('content')
@include('partials.header')

    

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white/5 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('partials.update-profile-information-form')
                </div>
            </div>

            

            <div class="p-4 sm:p-8 bg-white/5 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('partials.footer') 