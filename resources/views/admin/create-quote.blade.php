<x-layout>

    <form method="POST" enctype="multipart/form-data"
          action="{{route('store-quote',['movie'=>$movie])}}">

        @csrf

        <x-form.input name="thumbnail" type="file" required></x-form.input>
        <x-form.textarea name="body" required></x-form.textarea>
        <input type="hidden" name="movie_id" id="movie_id" value="{{$movie->id}}" required>


        <x-form.button>Publish</x-form.button>
    </form>

</x-layout>
