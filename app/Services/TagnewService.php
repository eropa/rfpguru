<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\ModelsTagnew;

class TagnewService{

    public function insertRecord(Request $request){
        $mymodel=new ModelsTagnew();
        $mymodel->name=$request->input('name');
        $mymodel->save();
    }

    public function deleteRecord($tagnew){
        $tagnew->delete();
    }
}
