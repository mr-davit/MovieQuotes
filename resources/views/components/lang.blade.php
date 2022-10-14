<div class="w-1/12 h-screen flex flex-col justify-center">
    <div class="w-full h-screen flex flex-col justify-center">
        @php
            $selecteden = "";
            $selectedka = "";

            if ( Session::get('lang') == 'ka'){
                $selectedka = "bg-gray-500 ";
                $selecteden = "";
            } else {
                $selecteden = "bg-gray-500";
                $selectedka = "";
            }

        @endphp
        <a class=" text-center text-white {{$selecteden }} mx-auto p-3  border mb-3 border-white rounded-full" href="{{route('language.change', ['locale' => 'en'])}}">EN</a>

        <a class=" text-center text-white {{$selectedka }} mx-auto p-3 border mb-3 border-white rounded-full" href="{{route('language.change', ['locale' => 'ka'])}}">KA</a>

    </div>
</div>
