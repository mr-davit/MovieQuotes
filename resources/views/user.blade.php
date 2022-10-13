<x-layout>



    <div class="w-full flex justify-between h-full pb-20 bg-gray-800">

      <x-lang>

      </x-lang>

        <div class="w-9/12 flex h-full bg-gray-800 flex-col align-middle justify-center">


           <x-user-dashboard>

           </x-user-dashboard>



            @foreach($movies as $movie)

                <h1 class="text-center underline text-3xl my-6 text-white">{{$movie->title}}</h1>

                @foreach($movie->quote as $quote)

                <div class="border w-fit mx-auto mb-3 border-white rounded-xl pb-5" >

                    <img class="w-3/6 mx-auto" src="{{$quote->thumbnail}}" alt="">
                    <h1 class="text-center mt-6 text-white">{{$quote->body}}</h1>

                @endforeach

                </div>
            @endforeach
                <div class=" h-full w-1/12 bg-gray-800"></div>

        </div>


    </div>











</x-layout>


