<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stunews;
use App\actsign;
use App\contactinfo;
use App\memberinfo;
use App\signlist;
use Session;
class indexController extends Controller{
    public function indexpage(Request $log){
        $logout = $log->logout;
        $adlogout = $log->adlogout;
        $signok = $log->signok;
        $actdata = actsign::all();
        $newsdata = stunews::all();
        $condata = contactinfo::all();
        return view('index',compact('newsdata','actdata','condata','logout','adlogout','signok'));
    }
    //活動報名
    public function actsignup(Request $act_id){
        $act_id = $act_id->act_id;
        $signok = "signok=Yes";
        if(Session::has('mem_id')){
            $mem_id = Session::get('mem_id');
            $insertdata = array(
                'act_id'=>$act_id,
                'mem_id'=>$mem_id
            );
            signlist::create($insertdata);
        }
        return redirect()->route('index',[$signok]);
    }
}