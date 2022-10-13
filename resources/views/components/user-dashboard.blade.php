<div class="mx-auto flex justify-around p-2 bg-blue-500">
    <a class="" href="{{route('home')}}">
        <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="mix-blend-difference" class="bi bi-house" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" fill="mix-blend-difference"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" fill="mix-blend-difference"></path> </svg>
    </a>
    @auth
        <a class="text-center mx-3  underline" href="{{route('admin')}}">{{__('crud.welcome')}}, {{ auth()->user()->username }}!</a>
        <a class="text-red-900" href="{{route('auth.logout')}}">{{__('crud.logout')}}</a>
    @endauth

    @guest

        <a class="text-center text-xs     bg-green-600 text-white mx-auto py-1 px-3 border mb-3 border-white rounded-xl" href="{{route('auth.loginPage')}}">{{__('crud.login')}}</a>

    @endguest
</div>
