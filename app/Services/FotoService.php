<?php

namespace App\Services;

use App\Model\FotoBody;
use App\Model\FotoHead;

class FotoService{

    public function CreateAlbom($request){
        $albom=new FotoHead();
        $albom->name=$request->input('name');
        $albom->foto=$request->input('foto');
        $albom->save();
    }

    public function deleteAlbom($Albom){
        $Albom->delete();
    }

    public function updateAlbom($albom,$request){
        $albom->name=$request->input('name');
        $albom->foto=$request->input('foto');
        $albom->save();
    }

    public function CreateFoto($request){
        $foto=new FotoBody();
        $foto->name=$request->input('name');
        $foto->fotourl=$request->input('fotourl');
        $foto->foto_albomid=$request->input('foto_albomid');
        $foto->save();
    }

    public function DeleteFoto($id){
        $foto=FotoBody::find($id);
        $foto->delete();
    }

}