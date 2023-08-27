
<x-app-layout>

    <br>
    <br>

     <section class="bg-white py-2" style="position:relative;left:50px;width:1400px; box-shadow: 0 2px 8px rgba(247, 30, 211, 0.1); border-radius: 1rem;font-weight: 500;">

<div class="container py-8 px-6 mx-auto">
            <a href="\add_donor" class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase" style="background-color: #f71ed3;">Dodaj donatora</a>
            <br>

<br>
                    <hr/>

                    <div class="flex space-x-4">
                        <div class="flex-1">
                        <div style="width: 100%; overflow-x: auto;">
                        <table class=" divide-y divide-green-200 w-full" >
                                <thead>
                                <tr>
                                    <th scope="col" width="20"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ime
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Prezime
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Šifra
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Datum rođenja
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Adresa
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Grad
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kontakt
                                    </th>
                                   <th scope="col" width="20" class="px-6 py-3 bg-gray-50">

                                    </th>
                                   <th scope="col" width="20" class="px-6 py-3 bg-gray-50">

</th>
<!--
<th scope="col" width="200" class="px-6 py-3 bg-gray-50">

</th>-->
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($donors as $donor)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->id }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->name }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->lastname }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->password }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->date_of_birth }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->address }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->city }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $donor->phone }}
                                        </td>
     <td>
        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_donor') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$donor->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-green-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase" style="background-color: #800080;">
                                    {{ __('Uredi') }}
                                </button>
                            </div>
                            </form>
                        </div>
</td>
<td>
     <div class="flex-1">
                            <form method="POST" action="{{ route('delete_donor') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$donor->id}}">
                            <div class="p-2">
                            <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase">
                                    {{ __('Obriši') }}
                                </button>
                            </div>
                            </form>
                        </div>
</td>

                                    </tr>
                                @endforeach
                                </tbody>
</table>
</div>
</div>
</div>
</div>
<!--
</div>
</div>-->
<br>
<br>
<br>
</section>
<br>
<br>

    </x-app-layout>

