<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Referentiel;
use Illuminate\Http\Request;

class TypeController extends Controller
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
        return view('welcome', ['types' => Type::all()]);
    }

    public function ajout_referentiel(Request $request)
    {
        return view('ajout_referentiel', ['types' => Type::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('referentiel', ['type' => Type::find($id)]);
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

    public function stores(Request $request)
    {
        $request->validate([
            'libelleReferentiel' => 'required',
            'horaire' => 'required',
            'validated' => 'required',
            'type_id' => 'required',
        ]);

        $referentiel = new referentiel();

        $referentiel->libelleReferentiel = $request->input('libelleReferentiel');
        $referentiel->horaire = $request->input('horaire');
        $referentiel->validated = $request->input('validated');
        $referentiel->type_id = $request->input('type_id');

        $referentiel->save();

        return back()->with('flash_message', 'Candidat enregistré');
    }

}
