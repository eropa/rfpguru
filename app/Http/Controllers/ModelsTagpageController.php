<?php

namespace App\Http\Controllers;

use App\ModelsTagpage;
use App\Services\TagpageService;
use Illuminate\Http\Request;

class ModelsTagpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////
        $dataTagpages=ModelsTagpage::all();
        return view('back.tagpage.index',['dataTagpages'=>$dataTagpages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.tagpage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,TagpageService $tagpageService)
    {
        $tagpageService->insert($request);
        return redirect('admin/tagpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsTagpage  $modelsTagpage
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsTagpage $modelsTagpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsTagpage  $modelsTagpage
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsTagpage $modelsTagpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsTagpage  $modelsTagpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsTagpage $modelsTagpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsTagpage  $modelsTagpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsTagpage $modelsTagpage)
    {
        //
    }
}
