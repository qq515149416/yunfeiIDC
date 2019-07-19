<?php
    namespace app\home\model;
    use think\Model;

    class HomeNav extends Model
    {
        public function getParentAttr($value)
        {
            if($value) {
                return $this->where("id",$value)->find();
            } else {
                return $value;
            }
        }
        public function selectChildData($id)
        {
            return $this->where("parent",$id)->select();
        }
    }