<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns=DB::table('campaigns')
        ->get();
        return view('campaigns.index', ['campaigns' =>$campaigns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campaigns.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' =>'required|string|max:255',
        ]);
        DB::table('campaigns')->insert([
            'image'=>$request->image,
            'title'=>$request->title,
            'child_id'=>$request->child_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'goal_amount'=>$request->goal_amount,
            'description'=>$request->description,
        ]);
        return redirect()->route('campaigns');
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $campaigns = DB::table('campaigns')
        ->where('id', $id)
        ->get();



        return view('campaigns.edit', ['campaigns' => $campaigns]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function delete(Request $request)
    {
        $id=$request->id;
        Campaign::destroy($id);
        return redirect()->route('campaigns');
    }
    public function update(Request $request, Campaign $campaign)
    {
        $id = $request->id;

        $request->validate([
            'image' => 'required|string|max:255',
        ]);
            $update_query = DB::table('campaigns')
            ->where('id', $id)
            ->update([
                'image'=>$request->image,
                'title'=>$request->title,
                'child_id'=>$request->child_id,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'goal_amount'=>$request->goal_amount,
                'description'=>$request->description,
                ]);

            return redirect()->route('campaigns');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
