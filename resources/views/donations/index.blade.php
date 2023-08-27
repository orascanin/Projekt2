<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 1: Ispisati sve donatore sa ukupnim iznosom njihovih donacija.</h1> </b>

                        @foreach ($donorsWithTotalDonations as $donorsWithTotalDonations)

            <p>{{$loop->iteration}} . {{$donorsWithTotalDonations->name}} - {{$donorsWithTotalDonations->lastname}} - {{$donorsWithTotalDonations->total_donations}}  </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 2: Ispisati donatore koji su donirali na više kampanja</h1> </b>

                        @foreach ($donorsWithMultipleCampaigns as $donorsWithMultipleCampaigns)

            <p>{{$loop->iteration}} . {{$donorsWithMultipleCampaigns->name}} - {{$donorsWithMultipleCampaigns->lastname}}  </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 3: Ispisati kampanju koja se uskoro završava</h1> </b>

                        @foreach ($endingSoonCampaigns as $endingSoonCampaigns)

            <p>{{$loop->iteration}} . {{$endingSoonCampaigns->title}} - {{$endingSoonCampaigns->end_date}}  </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 4: Ispisati donatore koji su donirali kampanji sa ID-em 2.</h1> </b>

                        @foreach ($donorsForCampaign as $donorsForCampaign)

            <p>{{$loop->iteration}} . {{$donorsForCampaign->name}} - {{$donorsForCampaign->lastname}}  </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 5: Ispisati TOP 5 donatora koji su donirali najviše novca.</h1> </b>

                        @foreach ($topDonors as $topDonors)

            <p>{{$loop->iteration}} . {{$topDonors->name}}  -{{$topDonors->lastname}} -{{$topDonors->total_donations}}  </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 6: Ispisati kampanje koje nemaju donacija.</h1> </b>

                        @foreach ($campaignsWithNoDonations as $campaignsWithNoDonations)

            <p>{{$loop->iteration}} . {{$campaignsWithNoDonations->title}}   </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 7: Ispisati svu djecu i ukupan iznos doniranog novca za svako djete.</h1> </b>

                        @foreach ($childrenWithTotalDonations as $childrenWithTotalDonations)

            <p>{{$loop->iteration}} . {{$childrenWithTotalDonations->name}} -{{$childrenWithTotalDonations->lastname}} -{{$childrenWithTotalDonations->total_donations}}   </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="position:relative;left:50px;">
                        <h1 style="color: #f71ed3;"> <b> Upit 8: Ispisati donatore čiji broj godine prelazi pedeset.</h1> </b>

                        @foreach ($donorsOver50 as $donorsOver50)

            <p>{{$loop->iteration}} . {{$donorsOver50->name}} -{{$donorsOver50->lastname}}   </p>
                        @endforeach
</div>
            </div>
        </div>
    </div>
</x-app-layout>
