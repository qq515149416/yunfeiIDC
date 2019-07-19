<?php
namespace app\home\home;
use app\common\controller\Common;
use app\home\model\HomeNav;
use think\View;

class HomeCommon extends Common
{
    public function __construct() {
        parent::__construct();
        $view = new View();
        $view->share('nav',HomeNav::where("status",1)->select());
    }
}
