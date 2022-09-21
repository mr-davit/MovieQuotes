<x-layout>
    <div class="border bordor-gray-500 p-10">
        <img src="{{$quotes->thumbnail}}" alt="">
 <h1>
     {{$quotes->body}}
 </h1> <br>
{{--        {{dd($quotes)}}--}}
        <a href="{{$quotes->movie->slug}}">{{$quotes->movie->title}}</a><br>
        <a href="{{$quotes->author->username}}">{{$quotes->author->username}}</a>
    </div>
</x-layout>
