<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showlogin()
    {
        return View::make('front.login');
    }

    public function login(Request $res)
    {
        $user = [
            'email' => $res->input('account'),
            'password' => $res->input('password')
        ];
        if (Auth::attempt($user)) {
            session()->put('user_id', Auth::user()->user_id);
            session()->put('name', Auth::user()->name);
            session()->put('password', Auth::user()->password);
            session()->put('phone', Auth::user()->phone);
            session()->put('email', Auth::user()->email);
            if (Gate::allows('admin')) {
                return redirect()->action('App\Http\Controllers\BKUserController@index');
            } else {
                return view('front.member');
            }
        } else {
            echo ("<script>alert('登入失敗');history.go(-1);</script>");
        }
    }

    public function logout(Request $res)
    {
        session()->forget('user_id');
        session()->forget('name');
        session()->forget('password');
        session()->forget('phone');
        session()->forget('email');

        Auth::logout();
        echo ("<script>alert('登出成功');location='/login'</script>");
    }
    public function editname(Request $res)
    {
        $editname = Auth::user()->user_id;
        $input = $res->all();
        $editname->name = $res->input('name');
        if ($editname->save()) {
            Session::put("name", Auth::user()->name);
            echo ("<script>alert('修改暱稱成功');location='/member/member_setting'</script>");
        } else {
            echo ("<script>alert('修改暱稱失敗');history.go(-1);</script>");
        }
    }
    public function edittel(Request $res)
    {
        $editname = Auth::user()->user_id;
        $input = $res->all();
        $editname->phone = $res->input('tel');
        if ($editname->save()) {
            Session::put("phone", Auth::user()->phone);
            echo ("<script>alert('修改電話號碼成功');location='/member/member_setting'</script>");
        } else {
            echo ("<script>alert('修改電話號碼失敗');history.go(-1);</script>");
        }
    }
    public function editpwd(Request $res)
    {

        $id = Auth::user()->user_id;
        $validatedData = $res->validate([
            'oldpassword' => ['required', 'alpha_num', 'between:8,20'],
            'newpassword' => ['required', 'alpha_num', 'between:8,20'],
            'checkpassword'=>['required', 'alpha_num', 'between:8,20']
        ]);
        $oldpassword = $res->input('oldpassword');
        $newpassword = $res->input('newpassword');
        $checkpassword = $res->input('checkpassword');
        
        if (!Hash::check($oldpassword, Auth::user()->getAuthPassword())) {
            echo ("<script>alert('原密碼輸入錯誤');history.go(-1);</script>");
        } elseif (strcmp($newpassword, $checkpassword) == 1) {
            echo ("<script>alert('兩次密碼輸入不相同');history.go(-1);</script>");
        } else {
            $update = array(
                'password'  => Hash::make($newpassword),
            );
            $result = DB::table('users')->where('user_id', $id)->update($update);
            if ($result) {
                echo ("<script>alert('修改密碼成功');history.go(-1);</script>");
            } else {
                echo ("<script>alert('修改密碼失敗');history.go(-1);</script>");
            }
            
        }
    }
}
