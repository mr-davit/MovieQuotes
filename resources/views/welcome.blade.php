<x-layout>


    <div class="w-full flex justify-between h-screen bg-gray-800">


    <x-lang>

    </x-lang>

    <div class="w-9/12 flex flex-col align-middle justify-center">


        <x-user-dashboard>

        </x-user-dashboard>


        <img class="w-3/6 mx-auto" src="{{$quotes->thumbnail}}" alt="">
        <h1 class="text-center mt-6 text-white">{{$quotes->body}}</h1>

        <a href="{{route('movie.index',['movie' => $quotes->movie->slug])}}"><h1 class="text-center mt-10 text-white underline text-3xl">{{$quotes->movie->title}}</h1></a>

        <a class="text-center mt-10 text-white underline " href="{{route('author.index',['author' =>$quotes->author->username])}}">{{$quotes->author->username}}</a>

    </div>

    <div class="w-1/12"></div>

    </div>



</x-layout>
