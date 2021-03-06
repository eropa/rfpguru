<?php

namespace App\Services;

use App\ModelsPage;
use App\ModelsTagpage;
use Illuminate\Support\Facades\Auth;

class  PageService{

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
        $iduser = Auth::user()->id;

        $modelMy=new ModelsPage();

        $modelMy->title=$request->input('name');
        $modelMy->name=$request->input('name');
        $modelMy->tagpage=$request->input('category');
        $modelMy->user_id=$iduser;
        $modelMy->texthtml=$request->input('editor1');
        $modelMy->public=1;
        if(($request->input('url')=="")or(is_null($request->input('url')))){
            $modelMy->slug=$this->generate_chpu($request->input('name'));
        }else{
            $modelMy->slug=$request->input('url');
        }


        $modelMy->save();
    }

    public function delete($page){
        $page->delete();
    }

    public function update($request,$page){

        $page->title=$request->input('name');
        $page->name=$request->input('name');
        $page->tagpage=$request->input('category');
        $page->texthtml=$request->input('editor1');
        $page->slug=$request->input('url');
        $page->save();
    }

    public function FoundPage($nameurl){
        $data=ModelsPage::all()->where('slug',$nameurl)->first();
        return $data;
    }

    public function FoundPageVar2($name1,$name2){
        $idtagpage=ModelsTagpage::all()->where('slug',$name1)->first();
        if(is_null($idtagpage)){
            return null;
        }
        $data=ModelsPage::all()->where('slug',$name2)->where('tagpage',$idtagpage->id)->first();
        return $data;
    }
}