<?php

namespace App\Http\Controllers;

use App\Cancion;
use App\Album;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['canciones'] = Cancion::join('albumes','albumes.id','canciones.idAlbumFK')
        ->select('canciones.id','canciones.nombreCancion','canciones.fechaGrabacion','canciones.duracionCancion',
                'albumes.nombreAlbum','canciones.estadoCancion')
        ->get();
        return view('cancion.index',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albumes['albumes'] = Album::all();
        return view('cancion.create',$albumes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'nombreCancion'     => 'required|string',
            'fechaGrabacion'    => 'required|date',
            'duracionCancion'   => 'required|string',
            'idAlbumFK'         => 'string',
            'estadoCancion'     => 'required|string|min:1',
        ];
        $this->validate($request,$campos);
        $cancion = $request->except('_token');
        Cancion::insert($cancion);
        return redirect('cancion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function show(Cancion $cancion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $albumes['albumes'] = Album::all();
        $cancion = Cancion::findOrfail($id);
        return view('cancion.edit',compact('cancion'),$albumes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        //
    }
}
