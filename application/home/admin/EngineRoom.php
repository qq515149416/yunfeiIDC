<?php
namespace app\home\admin;
use app\system\admin\Admin;
use app\home\model\HomeEngineRoom;

class EngineRoom extends Admin
{
    protected $hisiModel = 'HomeEngineRoom';//模型名称[通用添加、修改专用]
    protected $hisiTable = 'home_engine_room';//表名称[通用添加、修改专用]
    protected $hisiAddScene = '';//添加数据验证场景名
    protected $hisiEditScene = '';//更新数据验证场景名

    public function index()
    {
        if ($this->request->isAjax()) {
            $data['data'] = HomeEngineRoom::all();
            $data['count'] =  HomeEngineRoom::count();
            $data['code'] =  0;
            return  json($data);
        }

        return $this->fetch();
    }
    public function show()
    {
        $id = $this->request->param("id");
        $this->assign("rows",[
            [
                "label" => "缩略图",
                "value" => "thumbnail"
            ],
            [
                "label" => "机房名称",
                "value" => "name"
            ],
            [
                "label" => "机房描述",
                "value" => "description"
            ],
            [
                "label" => "机房等级",
                "value" => "grade"
            ],
            [
                "label" => "机房位置",
                "value" => "position"
            ],
            [
                "label" => "服务支持",
                "value" => "support"
            ],
            [
                "label" => "出口带宽",
                "value" => "bandwidth"
            ],
            [
                "label" => "机房IP段",
                "value" => "ip_part"
            ],
        ]);
        $this->assign("data",HomeEngineRoom::get(["id" => $id]));
        return $this->fetch();
    }
}
