<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/7/7
 * Time: 10:28
 */

namespace App\Http\Controllers;


use App\Models\Member;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class MemberController extends Controller
{
    public function show($id)
    {
        return  Member::getMember();
        //return view('member',['name'=>'hedeqiang']);
    }
}