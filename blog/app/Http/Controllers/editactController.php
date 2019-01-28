<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actsign;
use App\signlist;
use App\memberinfo;
class editactController extends Controller{
    //顯示活動頁面
    public function edactpage(){
        $actdata = actsign::all();
        return view('editact',compact('actdata'));
    }
    //顯示活動新增頁面
    public function edactinsertpage(){
        $insert = "Yes";
        return view('editact',compact('insert'));
    }
    //活動新增
    public function edactinsert(Request $data){
        $insertdata = array(
            'act_text'=>$data->input('act_text'),
            'act_url'=>$data->input('act_url')
        );
        actsign::create($insertdata);
        return redirect()->route('edact.view');
    }
    //活動刪除
    public function edactdel(Request $act_id){
        $act_id = $act_id->act_id;
        actsign::where('act_id',$act_id)->delete();
        $actdata = actsign::all();
        return view('editact',compact('actdata'));
    }
    //編輯活動頁面
    public function edactupdatepage(Request $act_id){
        $act_id = $act_id->act_id;
        $updatedata = actsign::where('act_id',$act_id)->first();
        $update = "Yes";
        return view('editact',compact('update','updatedata'));
    }
    //編輯活動
    public function edactupdate(Request $updatedata){
        $act_id = $updatedata->act_id;
        $update = actsign::where('act_id',$act_id)
        ->update(['act_text'=>$updatedata->act_text,
                  'act_url'=>$updatedata->act_url
                  ]);
        return redirect()->route('edact.view');
    }
    //搜尋活動
    public function edactsearch(Request $searchdata){
        $searchdata = $searchdata->input('search');
        $actdata = actsign::where('act_id','like',$searchdata.'%')
        ->orwhere('act_text','like','%'.$searchdata.'%')
        ->orwhere('act_url','like',$searchdata.'%')
        ->get();
        return view('editact',compact('actdata'));
    }
    //下載報名名單
    public function edactsign(Request $act_id){
        $act_id = $act_id->act_id;
        //$signlistdata = signlist::where('act_id','=',$act_id)->select('signlist_id','mem_id')->get();
        $signlistdata = signlist::join('memberinfo', 'memberinfo.mem_id', '=', 'signlist.mem_id')
                ->where('act_id','=',$act_id)
                ->select('signlist.signlist_id','signlist.mem_id', 'memberinfo.mem_name', 'memberinfo.mem_class')
                ->get();
        return view ('signlist',compact('signlistdata'));
    }
}