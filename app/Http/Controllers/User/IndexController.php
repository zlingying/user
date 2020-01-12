<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CommonModel;

class IndexController extends Controller
{
    /**
     * 注册
     */
    public function reg()
    {
        $reg_info = [
            'name'  => 'zly2',          // 用户名
            'email' => '2877673916@qq.com',
            'mobile'    => '216637227624',
            'pass1'     => '12345678',
            'pass2'     => '12345678',
        ];

        //echo __METHOD__;die;
        //请求passport 注册接口
        $url = 'http://passport.1905.com/api/user/reg';
        $response = CommonModel::curlPost($url,$reg_info);
        echo '<pre>';print_r($response);echo '</pre>';
    }

    public function login()
    {
        $login_info = [
            'name'  => 'zly2',
            'pass'  => '12345678',
        ];
        //请求passport 登录接口
        $url = 'http://passport.1905.com/api/user/login';
        $response = CommonModel::curlPost($url,$login_info);
        echo '<pre>';print_r($response);echo '</pre>';
    }
    
    public function getData()
    {
        $token = 'a1ff4ed55fa5d01a6b52';
        $uid = 15;
        //请求passport 获取数据接口
        $url = 'http://passport.1905.com/api/show/time';
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = CommonModel::curlGet($url,$header);
    }
}