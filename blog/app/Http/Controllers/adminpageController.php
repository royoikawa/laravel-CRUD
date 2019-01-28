<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\manager;
class adminpageController extends Controller{
    //管理者資料比對後導向管理者頁面
    public function adminpage(Request $mandata){
        Session::flush();
        $admin = manager::first();
        if($admin->man_acc==$mandata->input('man_acc')){
            if($admin->man_password==$mandata->input('man_password')){
                Session::put('man_acc',$mandata->input('man_acc'));
                Session::put('man_password',$mandata->input('man_password'));
                return view('admin');
            }
            else{
                $passwrong = "passwrong=Yes";
                return redirect()->route('isadmin',[$passwrong]);
            }
        }
        else{
            $accwrong = "accwrong=Yes";
            return redirect()->route('isadmin',[$accwrong]);
        }
    }
    //確認為管理者登入
    public function isadmin(Request $wrong){
        $accwrong = $wrong->accwrong;
        $passwrong = $wrong->passwrong;
        $isadmin = "Yes";
        return view('login',compact('isadmin','passwrong','accwrong'));
    }
    //管理者登出
    public function adminout(){
        Session::flush();
        $adlogout = "adlogout=Yes";
        return redirect()->route('index',[$adlogout]);
    }

}