
<x-app-layout>
    <br>


<div class="container py-8 px-6 mx-auto">
            <a href="\add_campaign" class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase" style="background-color: #f71ed3;">Dodaj kampanju</a>
            <br>
</div>
<div class="container py-8 px-6 mx-auto">
    <hr style="color:#f71ed3;">

  <p class="ml-4 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs  " style="color:#a21caf;left:50px;position:relative;'Lucida Console', 'Courier New', monospace;font-size:20px;">
    Kreirane kampanje  <span>({{ $campaigns->count() }})</span>
</p>
<!--
<table style="position:relative;left:50px;">
  <tr>
    <td style="display: flex;justify-content: space-between; gap: 70px;">
      @foreach ($campaigns as $campaign)
      <div class="relative max-w-md mx-auto xl:max-w-2xl min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-xl mt-16" style="width:400px;position:relative;">
        <div class="card">
          <div class="card-header mx-4 -mt-6">
            <a href="https://www.material-tailwind.com" blur-shadow-image="true">
              <img class="w-auto rounded-lg" src="{{ $campaign->image }}" alt="tailwind-card-image" style="height:300px;"/>
            </a>
          </div>
          <div class="card-body">
            <a href="#">
              <h4 class="font-semibold">{{ $campaign->title }}</h4>
            </a>
            <p class="pt-1 text-gray-900" style="position: relative;">Start: {{ $campaign->start_date }}</p>
            <p class="pt-1 text-gray-900" style="position: relative;"> Kraj kampanje: {{ $campaign->end_date }}</p>
            <p class="pt-1 text-gray-900 font-semibold">Potreban iznos: {{ $campaign->goal_amount }} KM</p>
            <p class="opcacity-60 mb-4" style="">{{ $campaign->description }}</p>

            <div class="flex space-x-2" style="">
                    <div class="flex-1">
                        <form method="GET" action="{{ route('donation_donor') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$campaign->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase " style="background-color: #06b6d4;">
                                    {{ __('Doniraj')}}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="flex-1">
                        <form method="POST" action="{{ route('edit_campaign') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$campaign->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase" style="background-color: #800080;">
                                    {{ __('Uredi')}}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="flex-1">
                        <form method="POST" action="{{ route('delete_campaign') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$campaign->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obriši')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

          </div>
        </div>
      </div>
      @endforeach

    </td>

</tr>

<tr>

</tr>
</table>-->
<br>
<br>
<!--
@foreach ($campaigns as $campaign)
<table >
  <tr>
    <td >
<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
  <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
    <div class="rounded overflow-hidden shadow-lg">
  <a href="#">
    <div class="relative">
    <img class="w-full" src="{{ $campaign->image }}" alt="Sunset in the mountains">
<div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
    <a href="#!">
 <div class="absolute bottom-0 left-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
    Photos
    </div></a>
    <a href="!#">
    <div class="text-sm absolute top-0 right-0 bg-indigo-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
      <span class="font-bold">27</span>
      <small>March</small>
      </div></a>
    </div></a>
  <div class="px-6 py-4">
    <a href="#" class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">Best View in Newyork City</a>
    <p class="text-gray-500 text-sm">
      The city that never sleeps
    </p>
  </div>
  <div class="px-6 py-4 flex flex-row items-center">
    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
      <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
  <g>
    <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
      c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
      c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"/>
  </g>
</g>
</svg>
      <span class="ml-1">6 mins ago</span></span>
  </div>
</div>
</div>
</td>
</tr>
</table>
@endforeach -->
@foreach ($campaigns as $campaign)
<div class="py-6">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/3 bg-cover"  style="background-image: url('{{ $campaign->image }}')">
    <img src="{{ $campaign->image }}" style="width:800px;">
    </div>
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl" >{{ $campaign->title }}</h1>
      <p class="mt-2 text-gray-600 text-sm">Start: {{ $campaign->start_date }}</p>
      <p class="mt-2 text-gray-600 text-sm"> Kraj kampanje: {{ $campaign->end_date }}</p>
            <p class="mt-2 text-gray-600 text-sm">{{ $campaign->description }}</p>

      <div class="flex item-center mt-2">

      </div>
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-xl">Potreban iznos: {{ $campaign->goal_amount }} KM</h1>
        <div class="flex space-x-2" style="">
                    <div class="flex-1">
                        <form method="GET" action="{{ route('donation_donor') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$campaign->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase " style="background-color: #06b6d4;">
                                    {{ __('Doniraj')}}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="flex-1">
                        <form method="POST" action="{{ route('edit_campaign') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$campaign->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase" style="background-color: #800080;">
                                    {{ __('Uredi')}}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="flex-1">
                        <form method="POST" action="{{ route('delete_campaign') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$campaign->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obriši')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
@endforeach
    </div>



</x-app-layout>




