<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donors=DB::table('donors')
        ->get();
        return view('donors.index', ['donors' =>$donors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donors.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255',
        ]);
        DB::table('donors')->insert([
           'name'=>$request->name,
           'lastname'=>$request->lastname,
           'email'=>$request->email,
           'password'=>$request->password,
           'date_of_birth'=>$request->date_of_birth,
           'address'=>$request->address,
           'city'=>$request->city,
           'phone'=>$request->phone,
        ]);
        return redirect()->route('donors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit (Request $request)
    {
        $id = $request->id;

        $donors = DB::table('donors')
        ->where('id', $id)
        ->get();



        return view('donors.edit', ['donors' => $donors]);
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        Donor::destroy($id);
        return redirect()->route('donors');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
        ]);
            $update_query = DB::table('donors')
            ->where('id', $id)
            ->update([
                'name'=>$request->name,
                'lastname'=>$request->lastname,
                'email'=>$request->email,
                'password'=>$request->password,
                'address'=>$request->address,
                'city'=>$request->city,
                'phone'=>$request->phone,
                ]);

            return redirect()->route('donors');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donor $donor)
    {
        //
    }
}
