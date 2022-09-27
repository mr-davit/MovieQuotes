<x-layout>

        <form method="POST" action="{{route('create-movie')}}">
            @csrf

            <x-form.input name="title" required />
            <x-form.input name="slug" required />
{{--            <x-form.input name="thumbnail" type="file" required />--}}
{{--            <x-form.textarea name="excerpt" required />--}}
{{--            <x-form.textarea name="body" required />--}}


            <x-form.button>Publish</x-form.button>
        </form>

</x-layout>
