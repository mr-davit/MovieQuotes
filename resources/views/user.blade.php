<x-layout>
    <h1>
        {{$author->username}}
    </h1>




{{--    @foreach($quotes as $quote)--}}
{{--        <h1 class="text-red-500">--}}
{{--            {{$quote->body}}--}}
{{--        </h1>--}}
{{--        <br>--}}
{{--        <h3 class="text-green-500">--}}
{{--            {{$quote->author->username}}--}}
{{--        </h3>--}}
{{--    @endforeach--}}
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
{{--        @dump( $movie->quote)--}}
    @endforeach


{{--    {{dd($author)}}--}}
{{--    {{dd($movies)}}--}}
{{--    <h3>{{$movies->slug}}</h3>--}}


</x-layout>


