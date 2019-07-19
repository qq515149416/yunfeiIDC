<?php
    namespace app\home\model;
    use think\Model;
    use app\home\model\HomeGoods;

    class HomeRecommend extends Model
    {
        public function getMachineAttr($value)
        {
            return HomeGoods::get($value);
        }
    }