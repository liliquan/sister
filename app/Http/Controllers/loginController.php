<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Gregwar\Captcha\CaptchaBuilder;
use DB;
use Hash;
use App\Models\user;

class loginController extends Controller
{
    public function login()
    {
        return view('login.demo');
    }

    public function code(Request $req)
    {
        // 验证码验证
        $this->validate($req, [
            'captcha' => 'required|captcha'
        ],[
            '请填写验证码',
            'validation.captcha' => '验证码错误',
        ]);

        $user = $req->username;
        $pass = $req->password;

        $model = new User;
        $data = $model->dologin($user);
        // dd($data);

        if($data)
        {
            if($data->password === $pass)
            {
                // if($data->quanxian !== 'boss')
                // {
                //     dd('无权访问！');
                // }
                // else if($data->quanxian === 'shopowner')
                // {
                //     dd('请谨慎操作');
                // }
                // else
                // {
                //     dd('管理员你好');
                // }

                return redirect('index');
                session([
                    'user_id'=>$data->id,
                    'user_quanxian'=>$data->quanxian
                ]);
            }
            else
            {
                return back()->with('status','密码错误');
            }
        }
        else
        {
            return back()->with('status1','用户名不存在');
        }
        
    }


    


}
