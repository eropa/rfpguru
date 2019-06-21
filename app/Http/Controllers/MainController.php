<?php

namespace App\Http\Controllers;

use App\Services\NewService;
use App\Services\PageService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function IndexPage(NewService $newService){
        $dataNews=$newService->NewPagesIndex();
        return view('front.index',['dataNews'=>$dataNews]);
    }

    public function NewShowPage($slug,NewService $newService){
        $dataNews=$newService->SearchSlug($slug);
        return view('front.pagenew',['dataNews'=>$dataNews]);
    }

    public function NewsShowList($list=1,NewService $newService){
        $dataNews=$newService->ListNew($list);
        $next=$newService->NextList($list);
        if($next==0){
            abort(404);
        }
        $next=$newService->NextList($list+1);
        return view('front.listnew',['dataNews'=>$dataNews,'list'=>$list,'next'=>$next]);
    }

    public function SvedPage(PageService $pageService){
        $dataPage=$pageService->FoundPage('sveden');
       // dump($dataPage);
        return view('front.page',['dataPage'=>$dataPage]);
    }

    public function PageVar2($name1,$name2,PageService $pageService){
        //echo $name1." / / ".$name2;
        $data=$pageService->FoundPageVar2($name1,$name2);
        if(is_null($data)){
            abort(404);
        }
        return $data->texthtml;
    }

}
