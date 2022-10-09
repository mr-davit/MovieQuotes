<x-layout>

    <form method="POST" action="{{route('update-movie',['movie'=>$movie->slug])}}">
        @csrf
        @method('PATCH')

        <x-form.input name="title" value="{{old('title',$movie->title)}}" required></x-form.input>
        <x-form.input name="slug" value="{{$movie->slug}}" required></x-form.input>



        <x-form.button>Save changes</x-form.button>
    </form>

</x-layout>
