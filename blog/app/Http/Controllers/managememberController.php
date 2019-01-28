<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\memberregis;
use App\memberinfo;

class managememberController extends Controller{
    //顯示會員資訊列表
    public function manmempage(){
        $memdata = memberinfo::all();
        return view('managemember',compact('memdata'));
    }
    //註冊核准功能
    public function getregdata(Request $regis_id){
        $regis_id =  $regis_id->regis_id;
        $regdata = memberregis::where('regis_id',$regis_id)->first();
        //echo $regdata['regis_id'];
        $insertdata = array(
            'mem_id' => $regdata['regis_id'],
            'mem_name' => $regdata['regis_name'],
            'mem_class' => $regdata['regis_class'],
            'mem_acc' => $regdata['regis_acc'],
            'mem_password' => $regdata['regis_password'],
            'mem_email' => $regdata['regis_email'],
            'mem_phone' => $regdata['regis_phone']
        );
        memberinfo::create($insertdata);
        memberregis::where('regis_id',$regis_id)->delete();
        return redirect()->route('manmem.view');
    }
    //會員資訊刪除功能
    public function manmemdel(Request $mem_id){
        $mem_id = $mem_id->mem_id;
        memberinfo::where('mem_id',$mem_id)->delete();
        $memdata = memberinfo::all();
        return view('managemember',compact('memdata'));
    }
    //顯示會員修改頁面
    public function manmemupdatepage(Request $mem_id){
        $mem_id = $mem_id->mem_id;
        $updatedata = memberinfo::where('mem_id',$mem_id)->first();
        $edit = "Yes";
        return view('managemember',compact('updatedata','edit'));
    }
    //修改會員資料
    public function manmemupdate(Request $updatedata){
        $mem_id = $updatedata->mem_id;
    
        $update = memberinfo::where('mem_id',$mem_id)
        ->update(['mem_name'=>$updatedata->mem_name,
                  'mem_class'=>$updatedata->mem_class,
                  'mem_acc'=>$updatedata->mem_acc,
                  'mem_password'=>$updatedata->mem_password,
                  'mem_email'=>$updatedata->mem_email,
                  'mem_phone'=>$updatedata->mem_phone
                  ]);
        $memdata = memberinfo::all();
        return view('managemember',compact('memdata'));
    }
    //會員資訊搜尋功能
    public function manmemsearch(Request $request){
        $searchdata = $request->input('searchdata');
        $memdata = memberinfo::where('mem_id','like',$searchdata.'%')
        ->orwhere('mem_name','like',$searchdata.'%')
        ->orwhere('mem_class','like',$searchdata.'%')
        ->orwhere('mem_acc','like',$searchdata.'%')
        ->orwhere('mem_password','like',$searchdata.'%')
        ->orwhere('mem_email','like',$searchdata.'%')
        ->orwhere('mem_phone','like',$searchdata.'%')
        ->get();
        return view('managemember',compact('memdata'));
    }
}