<x-layout>


        <x-user-dashboard>
        </x-user-dashboard>

        <form method="POST" action="{{route('movie.store')}}">
            @csrf

            <x-form.input name="title_en" required></x-form.input>
            <x-form.input name="title_ka" required></x-form.input>
            <x-form.input name="slug" required></x-form.input>

            <x-form.button>{{__('crud.publish')}}</x-form.button>
        </form>

</x-layout>
