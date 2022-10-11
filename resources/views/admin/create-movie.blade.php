<x-layout>

        <form method="POST" action="{{route('create-movie')}}">
            @csrf

            <x-form.input name="title" required></x-form.input>
            <x-form.input name="slug" required></x-form.input>

            <x-form.button>Publish</x-form.button>
        </form>

</x-layout>
