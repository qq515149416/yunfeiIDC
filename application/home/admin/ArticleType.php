<?php
namespace app\home\admin;
use app\system\admin\Admin;
use app\home\model\HomeArticleType;

class ArticleType extends Admin
{
    protected $hisiModel = 'HomeArticleType';//模型名称[通用添加、修改专用]
    protected $hisiTable = 'home_article_type';//表名称[通用添加、修改专用]
    protected $hisiAddScene = '';//添加数据验证场景名
    protected $hisiEditScene = '';//更新数据验证场景名

    public function index()
    {
        if ($this->request->isAjax()) {
            $data['data'] = HomeArticleType::all();
            $data['count'] =  HomeArticleType::count();
            $data['code'] =  0;
            return  json($data);
        }

        return $this->fetch();
    }
}
