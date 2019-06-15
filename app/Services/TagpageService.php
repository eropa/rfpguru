<?php

namespace App\Services;

use App\ModelsTagpage;

class TagpageService{

    public function insert($request){
        $modelMy=new ModelsTagpage();
        $modelMy->name=$request->input('name');
        $modelMy->slug=$request->input('slug');
        $modelMy->save();
    }

    public function deleteRecord($tagpage){
        $tagpage->delete();
    }
}