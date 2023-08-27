<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                <form method="POST" action="{{ route('store_campaign')}}">
                        @csrf
                        <div>
                            <x-label for="image" value="{{ __('Slika') }}" />
                            <x-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="title" value="{{ __('Naziv kampanje') }}" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="child_id" value="{{ __('ID djeteta') }}" />
                            <x-input id="child_id" class="block mt-1 w-full" type="number" name="child_id" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="start_date" value="{{ __('Početak kampanje') }}" />
                            <x-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="end_date" value="{{ __('Kraj kampanje') }}" />
                            <x-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="goal_amount" value="{{ __('Potreban iznos') }}" />
                            <x-input id="goal_amount" class="block mt-1 w-full" type="text" name="goal_amount" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>
                        <div class="mt-4">
                            <x-label for="description" value="{{ __('Opis') }}" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" required autofocus style="background-color: white; border: 1px solid #f71ed3; padding: 0.625rem 1.25rem; font-size: 0.875rem; color: #000;"/>
                        </div>

<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4" style="background-color: #f71ed3;">
        {{ __('Spremi')}}
</x-button>


            </div>
</form>
        </div>
    </div>
</div>
</x-app-layout>
