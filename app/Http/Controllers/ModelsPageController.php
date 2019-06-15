<?php

namespace App\Http\Controllers;

use App\ModelsPage;
use App\ModelsTagpage;
use App\Services\PageService;
use Illuminate\Http\Request;

class ModelsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=ModelsPage::all();
        return view('back.page.index',['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datasModels=ModelsTagpage::all();
        return view('back.page.create',['datasModels'=>$datasModels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,PageService $pageService)
    {
        $pageService->insert($request);
       return  redirect('admin/page');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsPage  $modelsPage
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsPage $modelsPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsPage  $modelsPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsPage $modelsPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsPage  $modelsPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsPage $modelsPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsPage  $modelsPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsPage $modelsPage)
    {
        //
    }
}
