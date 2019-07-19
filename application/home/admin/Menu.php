<?php
namespace app\home\admin;
use app\system\admin\Admin;
use app\home\model\HomeNav;

class Menu extends Admin
{
    protected $hisiModel = 'HomeNav';//模型名称[通用添加、修改专用]
    protected $hisiTable = 'home_nav';//表名称[通用添加、修改专用]
    protected $hisiAddScene = '';//添加数据验证场景名
    protected $hisiEditScene = '';//更新数据验证场景名

    public function index()
    {
        if ($this->request->isAjax()) {
            $data['data'] = HomeNav::all();
            $data['count'] =  HomeNav::count();
            $data['code'] =  0;
            return  json($data);
        }

        return $this->fetch();
    }
    public function select()
    {
        if ($this->request->isAjax()) {
            $data['data'] = db(input('param.operat'))->select();
            $data['code'] =  1;
            $data['msg'] = "获取成功";
            return  json($data);
        }
    }
}
