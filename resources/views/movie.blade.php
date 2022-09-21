<x-layout>
    <h1>
        {{$movie->title}}
    </h1>


    @foreach($quotes as $quote)
        <h1 class="text-red-500">
            {{$quote->body}}
        </h1>
        <br>
        <h3 class="text-green-500">
            {{$quote->author->username}}
        </h3>

    @endforeach
</x-layout>
