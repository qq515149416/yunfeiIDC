<?php
namespace app\home\home;
use app\home\home\HomeCommon;
use app\home\model\HomeArticleType;
use app\home\model\HomeArticle;

class ArticleList extends HomeCommon
{
    
    public function index()
    {
        $id = input('?param.id') ? input('param.id') : '';
        $where = [
            "status"=>1
        ];
        if($id) {
            $where["type"] = $id;
        }
        $this->assign("current_type",$id);
        $this->assign("types",HomeArticleType::where([
            "status"=>1
        ])->select());
        $this->assign("news",HomeArticle::where($where)->paginate(10));
        return $this->fetch();
    }
}
