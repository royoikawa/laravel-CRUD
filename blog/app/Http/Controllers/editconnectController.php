<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactinfo;
class editconnectController extends Controller{
    //顯示聯絡人資訊頁面
    public function edconpage(){
        $condata = contactinfo::all();
        return view('editconnect',compact('condata'));
    }
    //顯示編輯頁面
    public function edconupdatepage(Request $cont_id){
        $cont_id = $cont_id->cont_id;
        $updatedata = contactinfo::where('cont_id',$cont_id)->first();
        $update = "Yes";
        return view('editconnect',compact('update','updatedata'));
    }
    //聯絡人編輯
    public function edconupdate(Request $updatedata){
        $cont_id = $updatedata->cont_id;
        $update = contactinfo::where('cont_id',$cont_id)
        ->update(['cont_per'=>$updatedata->cont_per,
                  'cont_phone'=>$updatedata->cont_phone,
                  'cont_email'=>$updatedata->cont_email,
                  ]);
        $condata = contactinfo::all();
        return view('editconnect',compact('condata'));
    }

}