<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLandingRequest;
use App\Http\Requests\UpdateLandingRequest;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landing = landing::all();
        return view('landing.list', compact('landing'));
    }
    public function indexFrontend()
    {
        return view('gm.landing')->with('menuOption', '');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandingRequest $request)
    {
        $fields = $request->validated();
        $landing = new Landing();
        $landing->fill($fields);
        $landing->save();
        return redirect()->route('gm.index')->with(
            'success',
            'Inscrição criada com sucesso'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(landing $landing)
    {
        return view('landing.show', compact('landing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(landing $landing)
    {
        return view('landing.edit', compact('landing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandingRequest $request, landing $landing)
    {
        $fields = $request->validated();
        $landing->fill($fields);
        $landing->save();
        return redirect()->route('landing.index')->with('sucess', 'A informação foi atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(landing $landing)
    {
        $landing->delete();
        return redirect()->route('landing.index')->with('success', 'A inscrição foi eliminado com sucesso!');
    }
}
