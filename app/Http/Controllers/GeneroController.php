<?php

namespace App\Http\Controllers;

use App\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['generos'] = Genero::paginate(10);
        return view('genero.index',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->except('_token');
        Genero::insert($datos);
        return redirect('genero-musical');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero)
    {
        return view('genero.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->except('_token','_method');
        Genero::where('id','=',$id)->update($datos);
        return redirect('genero-musical');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Genero::destroy($id);
        return redirect('genero-musical');
    }
}
