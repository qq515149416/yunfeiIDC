<?php
namespace app\home\home;
use app\home\home\HomeCommon;
use app\home\model\HomeGoods;

class Goods extends HomeCommon
{
    
    public function index()
    {
        $this->assign("goods",HomeGoods::where([
            "status"=>1,
            "engine_room"=> input('param.id')
        ])->select());
        return $this->fetch();
    }
}
