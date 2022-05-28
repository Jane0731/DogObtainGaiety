<?php

namespace App\Http\Controllers;
use App\Models\user_option;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        return view('front.information');
    }
    public function option(Request $req){
        $type=$req->input('Q-type');

        if(empty($type)){
            echo ("<script>alert('請選擇問題類型');history.go(-1);;</script>");
        }
        else{
            user_option::create([
                'name' => $req->input('name'),
                'type' => $req->input('Q-type'),
                'tel' => $req->input('tel'),
                'email' => $req->input('email'),
                'des'=>$req->input('des')
            ]);
            echo ("<script>alert('已成功送出');location='/information';</script>");

        }
        
    }
}
