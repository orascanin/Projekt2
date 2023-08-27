<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children=DB::table('children')
        ->get();
        return view('children.index', ['children' =>$children]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('children.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255',
        ]);
        DB::table('children')->insert([
           'name'=>$request->name,
           'lastname'=>$request->lastname,
           'birth_date'=>$request->birth_date,
           'gender'=>$request->gender,
           'guardian'=>$request->guardian,
        ]);
        return redirect()->route('children');
    }

    /**
     * Display the specified resource.
     */
    public function show(Child $child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $children = DB::table('children')
        ->where('id', $id)
        ->get();



        return view('children.edit', ['children' => $children]);
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        Child::destroy($id);
        return redirect()->route('children');
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
            $update_query = DB::table('children')
            ->where('id', $id)
            ->update([
                'name'=>$request->name,
                'lastname'=>$request->lastname,
                'birth_date'=>$request->birth_date,
                'gender'=>$request->gender,
                'guardian'=>$request->guardian,
                ]);

            return redirect()->route('children');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Child $child)
    {
        //
    }
}
