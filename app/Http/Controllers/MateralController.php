<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class MateralController extends Controller
{
    //
    public $materal;

    /**
     * MateralController constructor.
     * @param $materal
     */
    public function __construct(Application $materal)
    {
        $this->materal = $materal;
    }

    public function image()
    {
        $image=$this->materal->material->uploadImage(public_path().'/images/sharenext.jpg');
        return $image;
    }

    public function video()
    {
        $video=$this->materal->material->uploadVideo(public_path().'....');
        return $video;
    }

    public function materals()
    {
        $images=$this->materal->material->lists('image');
        return $images;
    }

    public function materal()
    {
        $image=$this->materal->material->get('ID');
        return $image;
    }
}
