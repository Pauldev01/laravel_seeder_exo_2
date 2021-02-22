<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Faker\Provider\ar_JO\Company;
use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnie=Compagnie::all();
        return view('welcome', compact('compagnie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=compagnie::find($id);
        return view('show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=compagnie::find($id);
        return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=Compagnie::find($id);
        $update->nom=$request->nom;
        $update->adresse=$request->adresse;
        $update->phone=$request->phone;
        $update->mail=$request->mail;
        $update->contactname=$request->contactname;
        $update->contactfirstname=$request->contactfirstname;
        $update->image=$request->image;
        $update->save();
        return redirect("/");      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagnie  $compagnie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagnie $compagnie)
    {
        //
    }
}
