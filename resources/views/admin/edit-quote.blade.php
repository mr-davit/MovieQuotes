<x-layout>
    <x-user-dashboard>
    </x-user-dashboard>
{{--    {{dd($quote->getTranslation('body','ka'))}}--}}
<form method="POST" enctype="multipart/form-data"
      action="{{route('quote.update',['movie'=>$movie->slug,'quote'=>$quote])}}">

    @csrf
    @method('PATCH')
    <x-form.input name="thumbnail" type="file" ></x-form.input>
    <img class="w-10" src="{{asset('storage/'. $quote->thumbnail )}}" alt="">

    <x-form.textarea name="body_ka"  value="{{old('body_ka',$quote->getTranslation('body','ka'))}}"  required> {{old('body_ka',$quote->getTranslation('body','ka'))}}</x-form.textarea>

    <x-form.textarea name="body_en" value="{{old('body_en',$quote->getTranslation('body','en'))}}" required>
        {{old('body_en',$quote->getTranslation('body','en'))}}
    </x-form.textarea>



    <x-form.button>{{__('crud.publish')}}</x-form.button>
</form>

</x-layout>
