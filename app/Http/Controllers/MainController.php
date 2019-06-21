<?php

namespace App\Http\Controllers;

use App\Services\NewService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function IndexPage(NewService $newService){
        $dataNews=$newService->NewPagesIndex();
        return view('front.index',['dataNews'=>$dataNews]);
    }
}
