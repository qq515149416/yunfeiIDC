<?php
namespace app\home\home;
use app\home\home\HomeCommon;

class Page extends HomeCommon
{
    
    public function index()
    {
        return "这是单页";
    }
    public function about()
    {
        return $this->fetch();
    }
    public function finance()
    {
        return $this->fetch();
    }
}
