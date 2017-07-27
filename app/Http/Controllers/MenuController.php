<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public $menu;

    /**
     * MenuController constructor.
     * @param $menu
     */
    public function __construct(Application $app)
    {
        $this->menu = $app->menu;
    }

    //
    public function menu()
    {
        $buttons = [
            [
                "type" => "click",
                "name" => "贺德强",
                "key"  => "V1001_TODAY_MUSIC"
            ],
            [
                "name"       => "李树珍",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url"  => "http://www.baidu.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url"  => "http://v.qq.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "授权获取信息",
                        "url"  => "http://www.deqianghe.xyz/user/"
                    ],
                    [
                        "type" => "click",
                        "name" => "喜欢我吗",
                        "key" => "V_LOVE"
                    ],
                ],
            ],
        ];
        $this->menu->add($buttons);
    }

    public function all()
    {
        return $this->menu->current();
    }
}
