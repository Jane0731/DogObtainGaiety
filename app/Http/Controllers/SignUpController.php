<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignUpController extends Controller
{
    public function showregist()
    {
        return View::make('front.regist');
    }

    public function regist(\App\Http\Requests\CreateUserRequest $res)
    {
        $user = new user;
        $user->name = $res->input('user.name');
        $user->password = Hash::make($res->input('user.password'));
        $user->phone = $res->input('user.phone');
        $user->email = $res->input('user.email');
        $user->role = user::ROLE_USER;

        if ($user->save()) {
           /* $mail_binding = [
                'name' => $res->input('user.name')
            ];

            Mail::send('email.signUpEmailNotification',$mail_binding,
                function ($mail) use ($res) {
                    $mail->to($res->input('user.email'),$res->input('user.name'))->subject('恭喜成功註冊【留住浪浪】!');
                    收件人
                    $mail->to($res->input('user.email'));
                    寄件人
                    mail->from('留住浪浪');
                    郵件主旨
                    $mail->subject('恭喜成功註冊【留住浪浪】!');
                }
            );*/
            echo ("<script>alert('註冊成功，請登入');location='/login'</script>");
        } else {
            echo ("<script>alert('註冊失敗，請重新註冊');location='/regist'</script>");
        }
    }
}
