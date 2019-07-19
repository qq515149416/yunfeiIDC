<?php
namespace app\home\home;
use app\home\home\HomeCommon;
use app\home\model\HomeEngineRoom;

class EngineRoom extends HomeCommon
{
    
    public function index()
    {
        $this->assign("engine_room",HomeEngineRoom::where([
            "status"=>1,
            "id"=> input('param.id')
        ])->find());
        return $this->fetch();
    }
}
