<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Cuestionario1;
use App\User;
use App\Http\Requests\Cuestionario1Request;


class Cuestionario1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $cuestionario = Cuestionario1::all();
     return view('Cuestionario1.index',compact('cuestionario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Cuestionario1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Cuestionario1Request $request)
    {
        $cuestionario =  new Cuestionario1;
        $cuestionario->p1 = $request->p1;
        $cuestionario->p2 = $request->p2;
        $cuestionario->p3 = $request->p3;
        $cuestionario->p4= $request->p4;
        $cuestionario->p5 = $request->p5;
        $cuestionario->p6 = $request->p6;
        $cuestionario->p7 = $request->p7;
        $cuestionario->p8 = $request->p8;
        $cuestionario->p9 = $request->p9;
        $cuestionario->p10 = $request->p10;
        $cuestionario->p11 = $request->p11;
        $cuestionario->p12 = $request->p12;
        $cuestionario->p13 = $request->p13;
        $cuestionario->p14 = $request->p14;
        $cuestionario->p15 = $request->p15;
        $cuestionario->p16 = $request->p16;
        $cuestionario->p17 = $request->p17;
        $cuestionario->p18 = $request->p18;
        $cuestionario->p19 = $request->p19;
        $cuestionario->p20 = $request->p20;
        $cuestionario->id_user_resol = Auth::user()->id;
        $cuestionario->save();
        return redirect()->route('Principal.index')->with('status', 'Cuestionario Contestado Correctamente');

        
    } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
