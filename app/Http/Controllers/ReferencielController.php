<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use Illuminate\Http\Request;
use App\Models\Formation;

class ReferencielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('formation', ['referenciel' => Referentiel::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function forByRef()
    {
        return view('nbfore', ['referentiels' => Referentiel::withCount('formations')->get()]);

    }

    
    public function ajout_formation ()
    {
        return view ('ajout_formation', ['referentiels' => Referentiel::all()]);
    }

    public function stores(Request $request)
    {
        $request->validate([
            'nomFormation' => 'required',
            'duree' => 'required',
            'description' => 'required',
            'isStarted' => 'required',
            'date_debut' => 'required',
            'referentiel_id' => 'required',
            
        ]);

        $formation = new formation();

        $formation->nomFormation = $request->input('nomFormation');
        $formation->duree = $request->input('duree');
        $formation->description = $request->input('description');
        $formation->isStarted = $request->input('isStarted');
        $formation->date_debut = $request->input('date_debut');
        $formation->referentiel_id  = $request->input('referentiel_id');

        $formation->save();

        return back()->with('flash_message', 'Candidat enregistré');
    }
}
