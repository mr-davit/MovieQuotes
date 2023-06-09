<x-layout>

    <x-user-dashboard>
    </x-user-dashboard>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">


                        <x-form.button>
                            <a href="{{route('quote.create',['movie'=>$movie])}}">{{__('crud.create')}}</a>
                        </x-form.button>


                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr>



                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href="{{route('movie.show',['movie' => $movie->slug])}}">
                                            {{ $movie->title }}
                                        </a>
                                    </div>
                                </div>
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{route('movie.edit',['movie' => $movie->slug])}}" class="text-blue-500 hover:text-blue-600">{{__('crud.edit')}}</a>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form method="post" action="{{route('movie.delete',['movie' => $movie->slug])}}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="text-xs text-gray-400">{{__('crud.delete')}}</button>
                                </form>
                            </td>
                        </tr>

                        @foreach ($quotes as $quote)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                                <img class="w-10" src="{{asset('storage/'. $quote->thumbnail )}}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                   {{$quote->body}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    {{__('crud.created_by')}} <a href="{{route('author.index',['author' => $quote->author->username])}}">{{$quote->author->username}}</a>                                 </td>


                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{route('quote.edit',['movie' => $movie->slug, 'quote' => $quote])}}" class="text-blue-500 hover:text-blue-600">{{__('crud.edit')}}</a>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <form method="post" action="{{route('quote.delete',['movie' => $movie->slug, 'quote' => $quote])}}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="text-xs text-gray-400">{{__('crud.delete')}}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>
