<?php

namespace App\Services;

use App\ModelsNews;
use App\ModelsPage;
use Illuminate\Support\Facades\Auth;

class NewService{
    function generate_chpu ($str)
    {
        $converter = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '',  'ы' => 'y',   'ъ' => '',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '',  'Ы' => 'Y',   'Ъ' => '',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        );
        $str = strtr($str, $converter);
        $str = strtolower($str);
        $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
        $str = trim($str, "-");
        return $str;
    }

    public function insert($request){
        dump($request->all());
        $iduser = Auth::user()->id;
        $modelNew=new ModelsNews();
        $modelNew->title=$request->input('name');
        $modelNew->name=$request->input('name');
        if(($request->input('url')=="")or(is_null($request->input('url')))){
            $modelNew->urls=$this->generate_chpu($request->input('name'));
        }else{
            $modelNew->urls=$request->input('url');
        }
        $modelNew->textsmall=$request->input('editor1');
        $modelNew->textfull=$request->input('editor2');
        $modelNew->user_id=$iduser;
        $modelNew->fotonew=$request->input('filepath');
        $modelNew->tagnews_id=$request->input('category');
        $modelNew->datapublic=$request->input('datepublic');
        $modelNew->public=1;
        $modelNew->save();
    }

    public function delete($new){
        $new->delete();
    }

    public function NewPagesIndex(){
        $data=ModelsNews::all()->sortByDesc('datapublic')->take(4);
        //$data->orderBy('datapublic')->get();
        return $data;
    }

    public function SearchSlug($url){
        $data=ModelsNews::where('urls', $url)->first();
        return $data;
    }

    public function ListNew($idList){
        $data=ModelsNews::all()->sortByDesc('datapublic')->forPage($idList,3);
        return $data;
    }

    public function NextList($idList){
        $count=ModelsNews::all()->sortByDesc('datapublic')->forPage($idList,3)->count();
        return $count;
    }
}