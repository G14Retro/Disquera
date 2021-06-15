<?php

namespace App\Http\Controllers;

use App\Artista;
use App\Disquera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['artistas'] = Artista::paginate(10);
        return view('artista.index',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disqueras['disqueras'] = Disquera::all();
        return view('artista.create',$disqueras);
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
        if ($request->hasFile('foto')) {
        $datos['foto'] = $request->file('foto')->getClientOriginalName();
        $artista = Artista::create($datos);
        $request->file('foto')->storeAs('public/uploads/'.$artista->id, $datos['foto']);
        }
        return redirect('artista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artista = Artista::findOrfail($id);
        $disqueras['disqueras'] = Disquera::all();
        return view('artista.edit',compact('artista'),$disqueras);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->except('_token','_method');

        if ($request->hasFile('foto')) {
            $artista = Artista::findOrfail($id);
            Storage::delete('public/uploads/'.$artista->id.'/'. $artista->foto);
            $datos['foto'] = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/uploads/'.$artista->id, $datos['foto']);
        }

        Artista::where('id','=',$id)->update($datos);
        return redirect('artista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artista = Artista::findOrfail($id);
        Storage::delete('public/uploads/'.$id. '/'. $artista->foto);
        Artista::destroy($id);
        return redirect('artista');
    }
}
