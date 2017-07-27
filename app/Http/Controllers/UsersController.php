<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public $wechat;

    /**
     * UsersController constructor.
     * @param $wechat
     */
    public function __construct(Application $wechat)
    {
        $this->wechat = $wechat;
    }
    public function users()
    {
        $users=$this->wechat->user->lists();
        return $users;
    }
    public function user($openid)
    {
        $user=$this->wechat->user->get($openid);
        return $user;
    }
    //修改备注
    public function remark($openid)
    {
        $user=$this->wechat->user->remark($openid,"大神");
        return $user;
    }
}
