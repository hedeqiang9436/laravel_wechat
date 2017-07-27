<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['web']], function () {
    Route::any('/wechat', 'WechatController@serve');
    Route::get('/users', 'UsersController@users');
    Route::get('/user{openid}', 'UsersController@user');
    Route::get('/remark{openid}', 'UsersController@remark');  //修改备注

    Route::get('/image','MateralController@image');
    Route::get('/video','MateralController@video');

    //得到素材
    Route::get('/materals','MateralController@materals');
    Route::get('/materal','MateralController@materal');


    Route::get('/menu','MenuController@menu');  //菜单
    Route::get('/menu/all','MenuController@all');

});

Route::group(['middleware' => ['web', 'wechat.oauth']], function () {
    Route::get('/user', function () {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        dd($user);
    });
});


Route::get('member/{id}','MemberController@show');


