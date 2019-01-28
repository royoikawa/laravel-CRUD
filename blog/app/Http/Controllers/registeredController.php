<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\memberregis;
class registeredController extends Controller{
    //顯示註冊填表頁面
    public function regpage(){
        return view('registered');
    }
    //註冊填表頁面傳值到註冊審核列表
    public function regpost(Request $request){
        $regisdata = array(
            'regis_name' => $request->input("regname"),
            'regis_id' => $request->input("regid"),
            'regis_class' => $request->input("regclass"),
            'regis_phone' => $request->input("regphone"),
            'regis_email' => $request->input("regemail"),
            'regis_acc' => $request->input("regacc"),
            'regis_password'=> $request->input("regpassword")
        );
        memberregis::create($regisdata);
        //echo $array['regis_name'];
        return redirect()->route('index');
    }
    //顯示註冊審核列表頁面
    public function regget(){
        $regisdata = memberregis::all();
        return view('regischeck',compact('regisdata'));
    }
    //刪除註冊列
    public function regdel(Request $regisdel){
        $regis_id =  $regisdel->regis_id;
        $regisdelrow = memberregis::where('regis_id',$regis_id)->delete();
        $regisdata = memberregis::all();
        return view('regischeck',compact('regisdata'));
    }
}