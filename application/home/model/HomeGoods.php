<?php
    namespace app\home\model;
    use think\Model;
    use app\home\model\HomeEngineRoom;

    class HomeGoods extends Model
    {
        public function getEngineRoomAttr($value)
        {
            return HomeEngineRoom::get($value);
        }
    }