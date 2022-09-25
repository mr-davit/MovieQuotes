<x-layout>

    @auth

            <x-slot name="trigger">
                <button class="text-xs font-bold uppercase">
                    Welcome, {{ auth()->user()->username }}!
                </button>
            </x-slot>
        Welcome, {{ auth()->user()->username }}!
    @endauth
    <div class="border w-1/3 bordor-gray-500 p-10">
        <img src="{{$quotes->thumbnail}}" alt="">
 <h1>
     {{$quotes->body}}
 </h1> <br>
{{--        {{dd($quotes)}}--}}
        <a href="/movie/{{$quotes->movie->slug}}">{{$quotes->movie->title}}</a><br>
        <a href="/author/{{$quotes->author->username}}">{{$quotes->author->username}}</a>
    </div>


    <a href="/logout">Log Out</a>
</x-layout>
