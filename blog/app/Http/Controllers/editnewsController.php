<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stunews;
class editnewsController extends Controller{
    //顯示最新消息頁面
    public function ednewspage(){
        $newsdata = stunews::all();
        return view('editnews',compact('newsdata'));
    }
    //顯示新增頁面
    public function newsinsertpage(){
        $insert = "Yes";
        return view('editnews',compact('insert'));
    }
    //新增最新消息
    public function newsinsert(Request $data){
        $insertdata = array(
            'news_text'=>$data->input('news_text'),
            'news_url'=>$data->input('news_url')
        );
        stunews::create($insertdata);
        return redirect()->route('ednews.view');
    }
    //刪除最新消息
    public function newsdel(Request $news_id){
        $news_id = $news_id->news_id;
        stunews::where('news_id',$news_id)->delete();
        $newsdata = stunews::all();
        return view('editnews',compact('newsdata'));
    }
    //顯示編輯頁面
    public function newsupdatepage(Request $news_id){
        $news_id = $news_id->news_id;
        $updatedata = stunews::where('news_id',$news_id)->first();
        $update = "Yes";
        return view('editnews',compact('update','updatedata'));
    }
    //編輯最新消息
    public function newsupdate(Request $updatedata){
        $news_id = $updatedata->news_id;
        $update = stunews::where('news_id',$news_id)
        ->update(['news_text'=>$updatedata->news_text,
                  'news_url'=>$updatedata->news_url
                  ]);
        $newsdata = stunews::all();
        return view('editnews',compact('newsdata'));
    }
    //搜尋最新消息
    public function newssearch(Request $searchdata){
        $searchdata = $searchdata->input('search');
        $newsdata = stunews::where('news_id','like',$searchdata.'%')
        ->orwhere('news_text','like','%'.$searchdata.'%')
        ->orwhere('news_url','like',$searchdata.'%')
        ->get();
        return view('editnews',compact('newsdata'));
    }
}