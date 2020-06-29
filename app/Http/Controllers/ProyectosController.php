<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Proyectos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use App\Http\Requests\StoreProyectosRequest;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyecto = Proyectos::all();
        return view('proyectos.index',compact('proyecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now()->format('d/m/Y');
        return view('proyectos.create',compact('fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyectosRequest $request)
    {
        if ($request->file('archivo_id')) {
            $file = $request->file('archivo_id');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/planes_trabajo/', $name);
        }
        $proyecto = new Proyectos();
        $proyecto->name_pro =$request->name_pro;
        $proyecto->monto = $request->monto;
        $proyecto->fechai = $request->fechai;
        $proyecto->fechaf = $request->fechaf;
        $proyecto->recursos = $request->recursos;
        $proyecto->plan = $name;
        $proyecto->semaforo = $request->semaforo;
        $proyecto->avance = $request->avance;
        $proyecto->desviaciones = $request->desviaciones;
        $proyecto->save();
        return redirect()->route('Proyectos.index')->with('status', 'Proyecto Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyectos::find($id);
        return view('proyectos.show',compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proye = Proyectos::find($id);
        return view('proyectos.edit',compact('proye'));
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
        if ($request->file('archivo_id')) {
            $file = $request->file('archivo_id');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/planes_trabajo/', $name);
            $proyecto = Proyectos::find($id);
        $proyecto->name_pro =$request->name_pro;
        $proyecto->monto = $request->monto;
        $proyecto->fechai = $request->fechai;
        $proyecto->fechaf = $request->fechaf;
        $proyecto->recursos = $request->recursos;
        $proyecto->plan = $name;
        $proyecto->semaforo = $request->semaforo;
        $proyecto->avance = $request->avance;
        $proyecto->desviaciones = $request->desviaciones;
        $proyecto->update();

        } else {
            $proyecto = Proyectos::find($id);
            $proyecto->name_pro =$request->name_pro;
            $proyecto->monto = $request->monto;
            $proyecto->fechai = $request->fechai;
            $proyecto->fechaf = $request->fechaf;
            $proyecto->recursos = $request->recursos;
            $proyecto->semaforo = $request->semaforo;
            $proyecto->avance = $request->avance;
            $proyecto->desviaciones = $request->desviaciones;
            $proyecto->update();
        }
        
        return redirect()->route('Proyectos.show',$id)->with('status', 'Proyecto Editado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *s
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
