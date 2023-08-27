<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     /* $donations=DB::table('donations')
        ->get();
        return view('donations.index', ['donations' =>$donations]);*/
        $donorsWithTotalDonations = DB::table('donors')
        ->select('donors.id', 'donors.name', 'donors.lastname', DB::raw('SUM(donations.amount) as total_donations'))
        ->leftJoin('donations', 'donors.id', '=', 'donations.donor_id')
        ->groupBy('donors.id', 'donors.name', 'donors.lastname')
        ->get();

        $donorsWithMultipleCampaigns = DB::table('donors')
        ->select('donors.id', 'donors.name', 'donors.lastname', DB::raw('COUNT(DISTINCT donations.campaign_id) as campaign_count'))
        ->join('donations', 'donors.id', '=', 'donations.donor_id')
        ->groupBy('donors.id', 'donors.name', 'donors.lastname')
        ->having('campaign_count', '>', 1)
        ->get();

        $endingSoonCampaigns = DB::table('campaigns')
    ->select('id', 'title', 'end_date')
    ->whereBetween('end_date', [now(), now()->addWeek()])
    ->get();
    $donorsForCampaign = DB::table('donors')
    ->select('donors.id', 'donors.name', 'donors.lastname', 'donations.amount')
    ->join('donations', 'donors.id', '=', 'donations.donor_id')
    ->where('donations.campaign_id', 2)
    ->get();

    $topDonors = DB::table('donors')
    ->select('donors.id', 'donors.name', 'donors.lastname', DB::raw('SUM(donations.amount) as total_donations'))
    ->leftJoin('donations', 'donors.id', '=', 'donations.donor_id')
    ->groupBy('donors.id', 'donors.name', 'donors.lastname')
    ->orderByDesc('total_donations')
    ->take(5)
    ->get();
    $campaignsWithNoDonations = DB::table('campaigns')
    ->select('campaigns.id', 'campaigns.title')
    ->leftJoin('donations', 'campaigns.id', '=', 'donations.campaign_id')
    ->whereNull('donations.id')
    ->get();
    $childrenWithTotalDonations = DB::table('children')
    ->select('children.id', 'children.name', 'children.lastname', DB::raw('SUM(donations.amount) as total_donations'))
    ->leftJoin('campaigns', 'children.id', '=', 'campaigns.child_id')
    ->leftJoin('donations', 'campaigns.id', '=', 'donations.campaign_id')
    ->groupBy('children.id', 'children.name', 'children.lastname')
    ->get();
    $donorsOver50 = DB::table('donors')
    ->select('id', 'name', 'lastname', 'date_of_birth')
    ->whereRaw("TIMESTAMPDIFF(YEAR, date_of_birth, NOW()) > 50")
    ->get();

        return view('donations.index',
        [

            'donorsWithTotalDonations'=> $donorsWithTotalDonations,
            'donorsWithMultipleCampaigns'=>$donorsWithMultipleCampaigns,
            'endingSoonCampaigns'=>$endingSoonCampaigns,
            'donorsForCampaign'=>$donorsForCampaign,
            'topDonors'=>$topDonors,
            'campaignsWithNoDonations'=>$campaignsWithNoDonations,
            'childrenWithTotalDonations'=>$childrenWithTotalDonations,
            'donorsOver50'=>$donorsOver50,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       /* $id=$request->id;

        $donations=DB::table('donations')
        ->where('id', $id)
        ->get();

        $donors=DB::table('donors')
        ->get();
        $campaigns=DB::table('campaigns')
        ->get();

        return view('campaigns.donation',['donations'=>$donations, 'donors'=>$donors, 'campaigns'=>$campaigns]);*/
        return view('donations.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      /*  $user_id = Auth::id();
        //
         DB::table('donations')->insert([
           'amount' => $request->amount,

           'donation_date' => $request->donation_date,

           'donor_id' => $request->donor_id,// to je naziv name u add.blade.index

           'campaign_id' =>$request->campaign_id,

 ]);
         return redirect()->route('donations');*/
         $request->validate([
            'amount' =>'required|string|max:255',
        ]);
        DB::table('donations')->insert([
           'amount'=>$request->amount,
           'donation_date'=>$request->donation_date,
           'donor_id'=>$request->donor_id,
           'campaign_id'=>$request->campaign_id,
        ]);
        return redirect()->route('donations');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'amount' => 'required|string|max:255',
        ]);
            $update_query = DB::table('donations')
            ->where('id', $id)
            ->update([
                'amount'=>$request->amount,
                'donation_date'=>$request->donation_date,
                'donor_id'=>$request->donor_id,
                'campaign_id'=>$request->campaign_id,
                ]);

            return redirect()->route('donations');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
