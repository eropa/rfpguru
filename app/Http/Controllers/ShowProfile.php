<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function ShowAdminList(){
        $userdata=User::all();
        return view('back.user.index',['datas'=>$userdata]);
    }

    public function EditUser($id){
        $userdata=User::find($id);
        return view('back.user.edit',['data'=>$userdata]);

    }

    public function EditUserStore(Request $request,$id){
        $userdata=User::find($id);
        $userdata->name=$request->input('name');
        $userdata->email=$request->input('email');
        $userdata->save();
        return redirect('admin/user');
    }

    public function EditUserPassStore(Request $request,$id){
        $userdata=User::find($id);
        $userdata->password=Hash::make($request->input('password'));
        $userdata->save();
        return redirect('admin/user');
    }

    public function CreateUser(){
        return view('back.user.create');
    }

    public function CreateUserStore(Request $request){
        //return $request;
        $userdata=new User();
        $userdata->name=$request->input('name');
        $userdata->email=$request->input('email');
        $userdata->password=Hash::make($request->input('password'));
        $userdata->save();
        return redirect('admin/user');
    }

    public function DeleteUser($id){
        $userdata=User::find($id);
        $userdata->delete();
        return redirect('admin/user');
    }

}
