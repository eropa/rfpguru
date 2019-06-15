<?php

namespace App\Http\Controllers;

use App\ModelsTagnew;
use App\Services\TagnewService;
use Illuminate\Http\Request;

class ModelsTagnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTagnews=ModelsTagnew::all();
        return view('back.tagnew.index',['dataTagnews'=>$dataTagnews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.tagnew.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,TagnewService $tagnewService)
    {
        $tagnewService->insertRecord($request);
        return redirect('admin/tagnew');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsTagnew  $modelsTagnew
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsTagnew $modelsTagnew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsTagnew  $modelsTagnew
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsTagnew $tagnew)
    {
       return view('back.tagnew.edit',['data'=>$tagnew]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsTagnew  $modelsTagnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsTagnew $tagnew)
    {
        $tagnew->name=$request->input('name');
        $tagnew->save();
        return redirect('admin/tagnew');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsTagnew  $modelsTagnew
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsTagnew $tagnew,TagnewService $tagnewService)
    {
        $tagnewService->deleteRecord($tagnew);
        return redirect('admin/tagnew');
    }
}
