<?php
namespace app\home\admin;
use app\system\admin\Admin;
use app\home\model\HomeCarousel;

class Carousel extends Admin
{
    protected $hisiModel = 'HomeCarousel';//模型名称[通用添加、修改专用]
    protected $hisiTable = 'home_carousel';//表名称[通用添加、修改专用]
    protected $hisiAddScene = '';//添加数据验证场景名
    protected $hisiEditScene = '';//更新数据验证场景名

    public function index()
    {
        if ($this->request->isAjax()) {
            $data['data'] = HomeCarousel::all();
            $data['count'] =  HomeCarousel::count();
            $data['code'] =  0;
            return  json($data);
        }

        return $this->fetch();
    }
}
