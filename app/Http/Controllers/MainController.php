<?php

namespace App\Http\Controllers;

use App\Model\FotoBody;
use App\Model\FotoHead;
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
        return view('front.page',['dataPage'=>$dataPage]);
    }

    public function AbiturPage(PageService $pageService){
        $dataPage=$pageService->FoundPage('abitur');
        return view('front.page',['dataPage'=>$dataPage]);
    }


    public function PageVar1($name1,PageService $pageService){
        $data=$pageService->FoundPage($name1);
        if(is_null($data)){
            abort(404);
        }
        return view('front.page',['dataPage'=>$data]);
    }

    public function PageVar2($name1,$name2,PageService $pageService){
        $data=$pageService->FoundPageVar2($name1,$name2);
        if(is_null($data)){
            abort(404);
        }
        return view('front.page',['dataPage'=>$data]);
    }

    public function FotoAlbomPage(){
        $datas=FotoHead::all();
        return view('front.fotoalbom',['datas'=>$datas]);
    }

    public function FotoAlbomFotoPage($id){
       // $datas=FotoHead::all();
        //return view('front.fotoalbom',['datas'=>$datas]);
        $fotos=FotoBody::where('foto_albomid',$id)->get();
        return view('front.fotos',['fotos'=>$fotos]);
    }


}
