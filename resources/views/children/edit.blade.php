<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($children as $child)
                    <form method="POST" action="{{ route('update_children')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$child->id}}"/>
                        <div>

                        <div>
                            <x-label for="name" value="{{ __('Ime') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus  style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="lastname" value="{{ __('Prezime') }}" />
                            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;" />
                        </div>
                        <div class="mt-4">
                            <x-label for="birth_date" value="{{ __('Datum rođenja') }}" />
                            <x-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="gender" value="{{ __('Spol') }}" />

                            <select id="gender" name="gender" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;">
                                <option selected="true" disabled="disabled" style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;">Odaberi</option>
                                <option value="M" style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;">M</option>
                                <option value="Ž" style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;">Ž</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="guardian" value="{{ __('Staratelj') }}" />
                            <x-input id="guardian" class="block mt-1 w-full" type="text" name="guardian" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
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

