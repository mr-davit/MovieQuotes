<x-layout>

    <x-user-dashboard>
    </x-user-dashboard>
    <form method="POST" enctype="multipart/form-data"
          action="{{route('quote.store',['movie'=>$movie])}}">

        @csrf

        <x-form.input name="thumbnail" type="file" required></x-form.input>
        <x-form.textarea name="body_en" required></x-form.textarea>
        <x-form.textarea name="body_ka" required></x-form.textarea>

        <input type="hidden" name="movie_id" id="movie_id" value="{{$movie->id}}" required>

        <x-form.button>{{__('crud.publish')}}</x-form.button>
    </form>

</x-layout>
