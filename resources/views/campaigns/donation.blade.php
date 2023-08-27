<x-app-layout>
<br>
<br>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($donations as $donation)
                    <form method="POST" action="{{ route('store_donation')}}">
                        @csrf
                        <input type="hidden" name="product" value="{{$donation->id}}"/>
                        <div>

<div>
  <x-label for="amount" value="{{ __('Iznos') }}"/>
  <x-input id="amount" class="block mt-1 w-full" type="number" name="amount"  required autofocus />
</div>

<div>
  <x-label for="donation_date" value="{{ __('Datum donacije') }}"/>
  <x-input id="donation_date" class="block mt-1 w-full" type="date" name="donation_date"  required autofocus />
</div>
<div>
  <x-label for="donor_id" value="{{ __('ID donatora') }}"/>
  <x-input id="donor_id" class="block mt-1 w-full" type="number" name="donor_id"  required autofocus />
</div>
<div>
  <x-label for="campaign_id" value="{{ __('ID kampanje') }}"/>
  <x-input id="campaign_id" class="block mt-1 w-full" type="number" name="campaign_id"  required autofocus />
</div>



<div class="flex items-center justify-end mt-4">
    <x-button class="ml-4" style="background-color: #06b6d4;">
        {{ __('Doniraj')}}
</x-button>


            </div>
</form>
@endforeach
        </div>
    </div>
</div>
    </div>
</x-app-layout>
