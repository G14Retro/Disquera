<?php

namespace App\Http\Controllers;

use App\Disquera;
use Illuminate\Http\Request;

class DisqueraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['disqueras'] = Disquera::paginate(10);
        return view('disquera.index',$registros);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disquera.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disquera = $request->except('_token');
        Disquera::insert($disquera);
        return redirect('disquera');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function show(Disquera $disquera)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disquera = Disquera::findOrFail($id);
        return view('disquera.edit',compact('disquera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->except('_token','_method');
        Disquera::where('id','=',$id)->update($datos);
        return redirect('disquera');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Disquera::destroy($id);
        return redirect('disquera');
    }
}
