<?php

namespace App\Services;

use App\Model\Option;
use GuzzleHttp\Psr7\Request;

class OptionService{

    public function UpdateRecord($request){
        $option=Option::where('slug', 'namesait')->first();
        $option->value=$request->input('namesait');
        $option->save();
    }

    public function GetVar($slug){
        $option=Option::where('slug', $slug)->first();
        if(is_null($option)){
            return "";
        }else{
            return   $option->value;
        }
    }
}