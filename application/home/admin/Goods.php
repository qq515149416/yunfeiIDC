<?php
namespace app\home\admin;
use app\system\admin\Admin;
use app\home\model\HomeEngineRoom;
use app\home\model\HomeGoods;

class Goods extends Admin
{
    protected $hisiModel = 'HomeGoods';//模型名称[通用添加、修改专用]
    protected $hisiTable = 'home_goods';//表名称[通用添加、修改专用]
    protected $hisiAddScene = '';//添加数据验证场景名
    protected $hisiEditScene = '';//更新数据验证场景名

    public function index()
    {
        if ($this->request->isAjax()) {
            $data['data'] = HomeGoods::all();
            $data['count'] =  HomeGoods::count();
            $data['code'] =  0;
            return  json($data);
        }

        return $this->fetch();
    }
    public function select()
    {
        if ($this->request->isAjax()) {
            $data['data'] = HomeEngineRoom::all();
            $data['code'] =  1;
            $data['msg'] = "获取成功";
            return  json($data);
        }
    }
    public function show()
    {
        $id = $this->request->param("id");
        $this->assign("rows",[
            [
                "label" => "服务器名称",
                "value" => "name"
            ],
            [
                "label" => "所属机房",
                "value" => "engine_room"
            ],
            [
                "label" => "CPU",
                "value" => "cpu"
            ],
            [
                "label" => "内存",
                "value" => "ram"
            ],
            [
                "label" => "IP",
                "value" => "ip"
            ],
            [
                "label" => "带宽",
                "value" => "bandwidth"
            ],
            [
                "label" => "防御",
                "value" => "defense"
            ],
            [
                "label" => "价格",
                "value" => "price"
            ],
        ]);
        $this->assign("data",HomeGoods::get(["id" => $id]));
        return $this->fetch();
    }
}
