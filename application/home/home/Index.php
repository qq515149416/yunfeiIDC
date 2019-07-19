<?php
namespace app\home\home;
use app\home\home\HomeCommon;
use app\home\model\HomeCarousel;


class Index extends HomeCommon
{
    public function index()
    {
        $this->assign("banner",HomeCarousel::where("status",1)->select());
        return $this->fetch();
    }
}