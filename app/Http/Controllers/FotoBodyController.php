<?php

namespace App\Http\Controllers;

use App\Model\FotoBody;
use App\Model\FotoHead;
use App\Services\FotoService;
use Illuminate\Http\Request;

class FotoBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $albom=FotoHead::find($id);
        $fotos=FotoBody::where('foto_albomid',$id)->get();
       // dump($fotos);
        return view('back.foto.indexfoto',['albom'=>$albom,'fotos'=>$fotos]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $albom=FotoHead::find($id);
        return view('back.foto.createfoto',['albom'=>$albom]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,FotoService $fotoService)
    {
       $fotoService->CreateFoto($request);
       return redirect('admin/fotos/'.$request->input('foto_albomid'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FotoBody  $fotoBody
     * @return \Illuminate\Http\Response
     */
    public function show(FotoBody $fotoBody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FotoBody  $fotoBody
     * @return \Illuminate\Http\Response
     */
    public function edit(FotoBody $fotoBody)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FotoBody  $fotoBody
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FotoBody $fotoBody)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FotoBody  $fotoBody
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,FotoService $fotoService,Request $request)
    {
        $fotoService->DeleteFoto($id);
        return redirect('admin/fotos/'.$request->input('foto_albomid'));
        //
    }
}
