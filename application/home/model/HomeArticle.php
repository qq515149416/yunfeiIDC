<?php
    namespace app\home\model;
    use think\Model;
    use app\home\model\HomeArticleType;

    class HomeArticle extends Model
    {
        public function getTypeAttr($value)
        {
            return HomeArticleType::get($value);
        }
    }