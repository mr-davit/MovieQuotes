<x-layout>


    <div class="w-full flex justify-between h-screen bg-gray-800">
    <div class="w-1/12 h-screen flex flex-col justify-center">
        <div class="w-full h-screen flex flex-col justify-center">
            <a class=" text-center text-white mx-auto p-3 border mb-3 border-white rounded-full" href="{{route('change.language', ['locale' => 'en'])}}">EN</a>
            <a class=" text-center text-white mx-auto p-3 border mb-3 border-white rounded-full" href="{{route('change.language', ['locale' => 'ka'])}}">KA</a>
        </div>
    </div>

    <div class="w-9/12 flex flex-col align-middle justify-center">


        <div class="mx-auto relative  mb-3">
            <a class="absolute top-2 -left-3" href="/">
                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" fill="white"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" fill="white"></path> </svg>
            </a>
                @auth
                <a class="text-center m-3 text-white underline" href="{{route('admin')}}">{{__('crud.welcome')}}, {{ auth()->user()->username }}!</a>
                <a class="text-red-900" href="{{route('auth.logout')}}">{{__('crud.logout')}}</a>
                @endauth

                @guest

                        <a class="text-center text-xs     bg-green-600 text-white mx-auto py-1 px-3 border mb-3 border-white rounded-xl" href="{{route('auth.loginPage')}}">{{__('crud.login')}}</a>

                @endguest
            </div>


        <img class="w-3/6 mx-auto" src="{{$quotes->thumbnail}}" alt="">
        <h1 class="text-center mt-6 text-white">{{$quotes->body}}</h1>

        <a href="{{route('bymovie',['movie' => $quotes->movie->slug])}}"><h1 class="text-center mt-10 text-white underline text-3xl">{{$quotes->movie->title}}</h1></a>

        <a class="text-center mt-10 text-white underline " href="{{route('byauthor',['author' =>$quotes->author->username])}}">{{$quotes->author->username}}</a>

    </div>

    <div class="w-1/12"></div>

    </div>



</x-layout>
