<x-layout>
    {{dd(app()->getLocale())}}

    @auth

            <x-slot name="trigger">
                <button class="text-xs font-bold uppercase">
                    Welcome, {{ auth()->user()->username }}!
                </button>
            </x-slot>
        Welcome, {{ auth()->user()->username }}!
        <a href="{{route('auth.logout')}}">Log Out</a>
    @endauth
    <div class="border w-1/3 bordor-gray-500 p-10">
        <img src="{{$quotes->thumbnail}}" alt="">
 <h1>
     {{$quotes->body}}
 </h1> <br>
        <a href="{{route('bymovie',['movie' => $quotes->movie->slug])}}">{{$quotes->movie->title}}</a><br>
        <a href="{{route('byauthor',['author' =>$quotes->author->username])}}">{{$quotes->author->username}}</a>
    </div>



</x-layout>
