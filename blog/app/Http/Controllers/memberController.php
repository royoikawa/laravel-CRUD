<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\memberinfo;
class memberController extends Controller{
    //會員登入後返回頁面
    public function member(Request $memberdata){
        Session::flush();
        $member = memberinfo::where('mem_id',$memberdata->input('mem_id'))->first();
        if(isset($member)){
            if($member->mem_acc==$memberdata->input('mem_acc')){
                if($member->mem_password==$memberdata->input('mem_password')){
                    Session::put('mem_id',$memberdata->input('mem_id'));
                    Session::put('mem_acc',$memberdata->input('mem_acc'));
                    Session::put('mem_password',$memberdata->input('mem_password'));
                    return redirect()->route('index');
                }
                else{
                    $passwrong = "passwrong=Yes";
                    return redirect()->route('ismember',[$passwrong]);
                }
            }
            else{
                $accwrong = "accwrong=Yes";
                return redirect()->route('ismember', [$accwrong]);
            }
        }
        else{
            $idwrong = "idwrong=Yes";
            return redirect()->route('ismember',[$idwrong]);
        }
    
    }
    //切換為會員登入(帶錯誤訊息)
    public function ismember(Request $wrong){
        $accwrong = $wrong->accwrong;
        $passwrong = $wrong->passwrong;
        $idwrong = $wrong->idwrong;
        $ismember = "Yes";
        return view('login',compact('accwrong','passwrong','idwrong'));
    }
    //會員登出
    public function logout(){
        Session::flush();
        $logout = "logout=Yes";
        return redirect()->route('index',[$logout]);
    }
}