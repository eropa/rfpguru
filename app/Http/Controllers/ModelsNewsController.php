<?php

namespace App\Http\Controllers;

use App\ModelsNews;
use App\ModelsTagnew;
use App\Services\NewService;
use Illuminate\Http\Request;

class ModelsNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=ModelsNews::all();
        return view('back.new.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataTagnews=ModelsTagnew::all();

        return view('back.new.create',['dataTagnews'=>$dataTagnews]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,NewService $newService)
    {
        $newService->insert($request);
        return redirect('admin/new');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsNews  $modelsNews
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsNews $modelsNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsNews  $modelsNews
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsNews $modelsNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsNews  $modelsNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsNews $modelsNews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsNews  $modelsNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsNews $modelsNews)
    {
        //
    }
}
