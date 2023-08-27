<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($donors as $donor)
                    <form method="POST" action="{{ route('update_donor')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$donor->id}}"/>
                        <div>
                        <div>
                            <x-label for="name" value="{{ __('Ime') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="Ime" :value="old('name')" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="lastname" value="{{ __('Prezime') }}" />
                            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Šifra') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="text" name="password" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="date_of_birth" value="{{ __('Datum rođenja') }}" />
                            <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="address" value="{{ __('Adresa') }}" />
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="city" value="{{ __('Grad') }}" />
                            <x-input id="city" class="block mt-1 w-full" type="text" name="city" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="phone" value="{{ __('Kontakt') }}" />
                            <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>


<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4" style="background-color: #800080;">
        {{ __('Uredi')}}
</x-button>


            </div>
</form>
@endforeach
        </div>
    </div>
</div>
    </div>
</x-app-layout>

