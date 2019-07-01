<?php

namespace App\Http\Controllers;

use App\Model\FotoHead;
use App\Services\FotoService;
use Illuminate\Http\Request;

class FotoHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=FotoHead::all();
        return view('back.foto.indexalbom',['datas'=>$datas]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.foto.createalbom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,FotoService $fotoService)
    {
        //dump($request->all());
        $fotoService->CreateAlbom($request);
        return redirect('admin/fotoalbom');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FotoHead  $fotoHead
     * @return \Illuminate\Http\Response
     */
    public function show(FotoHead $fotoHead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FotoHead  $fotoHead
     * @return \Illuminate\Http\Response
     */
    public function edit(FotoHead $fotoalbom)
    {
        //
       // dump($fotoalbom);
        return view('back.foto.editalbom',['data'=>$fotoalbom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FotoHead  $fotoHead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FotoHead $fotoalbom,FotoService $fotoService)
    {
        $fotoService->updateAlbom($fotoalbom,$request);
        return redirect('admin/fotoalbom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FotoHead  $fotoHead
     * @return \Illuminate\Http\Response
     */
    public function destroy(FotoHead $fotoalbom,FotoService $fotoService)
    {
        $fotoService->deleteAlbom($fotoalbom);
        return redirect('admin/fotoalbom');
    }
}
