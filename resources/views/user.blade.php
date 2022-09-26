<x-layout>
    <h1>
        {{$author->username}}
    </h1>





        @foreach($movies as $movie)
            <h1 class="text-red-500">
                {{$movie->title}}
            </h1>
    @foreach($movie->quote as $quote)
        <h1 class="text-red-500">
            {{$quote->body}}
        </h1>
            <br>
        @endforeach
            <h1 class="text-red-500">

            </h1>
            <br>
    @endforeach





</x-layout>


