<x-layout>

    <x-user-dashboard>
    </x-user-dashboard>
    <form method="POST" action="{{route('movie.update',['movie'=>$movie->slug])}}">
        @csrf
        @method('PATCH')

        <x-form.input name="title_en" value="{{old('title_en',$movie->getTranslation('title','en'))}}" required></x-form.input>
        <x-form.input name="title_ka" value="{{old('title_ka',$movie->getTranslation('title','ka'))}}" required></x-form.input>
        <x-form.input name="slug" value="{{$movie->slug}}" required></x-form.input>



        <x-form.button>{{__('crud.update')}}</x-form.button>
    </form>

</x-layout>
