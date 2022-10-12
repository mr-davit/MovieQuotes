<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
 <div class="w-40% m-auto">
                <h1 class="text-center font-bold text-xl">{{__('crud.login')}}!</h1>

                <form method="POST" action="{{route('auth.login')}}" class="mt-10">
                    @csrf



                    <x-form.input name="email" type="email" required />
                    <x-form.input name="password" type="password" autocomplete="new-password" required />
                    <x-form.button>{{__('crud.login')}}</x-form.button>
                </form>
</div>
        </main>
    </section>
</x-layout>
