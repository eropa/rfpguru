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
        $datas=ModelsNews::all()->sortByDesc('datapublic');
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
    public function edit(ModelsNews $new)
    {
        $dataTagnews=ModelsTagnew::all();
        return view('back.new.edit',['new'=>$new,'dataTagnews'=>$dataTagnews]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsNews  $modelsNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsNews $new)
    {
        $new->title=$request->input('name');
        $new->name=$request->input('name');
        $new->tagnews_id=$request->input('category');
        $new->datapublic=$request->input('datepublic');
        $new->textsmall=$request->input('editor1');
        $new->textfull=$request->input('editor2');
        $new->urls=$request->input('url');
        $new->fotonew=$request->input('filepath');
        $new->save();
        return redirect('admin/new');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsNews  $modelsNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsNews $new,NewService $newService)
    {
        $newService->delete($new);
        return redirect('admin/new');
    }
}
