<?php

namespace App\Http\Controllers;

use App\Album;
use App\Genero;
use App\Artista;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['albumes'] = Album::join('artistas','albumes.idArtistaFK','artistas.id')
        ->join('generos','generos.id','albumes.idGeneroFK')
        ->select('albumes.id','albumes.nombreAlbum','albumes.anioPublicacion','albumes.foto','artistas.nombreArtistico','generos.nombreGenero')
        ->get();
        return view('album.index',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos['generos'] = Genero::all();
        $artistas['artistas'] = Artista::all();
        return view('album.create',$generos,$artistas);
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
            $album = Album::create($datos);            
            $request->file('foto')->storeAs('public/uploads/albumes/'.$album->id, $datos['foto']);
            }
        return redirect('album');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);
        $generos = Genero::all();
        $artistas = Artista::all();
        return view('album.edit',compact('album','artistas','generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datos = $request->except('_token','_method');
        if ($request->hasFile('foto')) {
            $album = Album::findOrfail($id);            
            $datos['foto'] = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/uploads/albumes/'.$album->id, $datos['foto']);
            }
        Album::where('id','=',$id)->update($datos);
        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::destroy($id);
        return redirect('album');
    }
}
