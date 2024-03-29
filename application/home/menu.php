<?php
return [
  [
    'title' => '主模块',
    'icon' => 'aicon ai-shezhi',
    'module' => 'home',
    'url' => 'home',
    'param' => '',
    'target' => '_self',
    'debug' => 0,
    'system' => 0,
    'nav' => 1,
    'sort' => 100,
    'childs' => [
      [
        'title' => '产品管理',
        'icon' => 'fa fa-th-list',
        'module' => 'home',
        'url' => 'home',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 0,
        'nav' => 1,
        'sort' => 0,
        'childs' => [
          [
            'title' => '机房管理',
            'icon' => 'typcn typcn-th-large',
            'module' => 'home',
            'url' => 'home/EngineRoom/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 1,
            'sort' => 0,
          ],
          [
            'title' => '服务器管理',
            'icon' => 'fa fa-cloud',
            'module' => 'home',
            'url' => 'home/goods/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 1,
            'sort' => 0,
          ],
          [
            'title' => '首页推荐',
            'icon' => 'fa fa-volume-off',
            'module' => 'home',
            'url' => 'home/Recommend/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 1,
            'sort' => 0,
          ],
        ],
      ],
      [
        'title' => '内容管理',
        'icon' => 'fa fa-file-o',
        'module' => 'home',
        'url' => 'home',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 0,
        'nav' => 1,
        'sort' => 0,
        'childs' => [
          [
            'title' => '分类管理',
            'icon' => 'aicon ai-gongneng',
            'module' => 'home',
            'url' => 'home/ArticleType/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 1,
            'sort' => 0,
          ],
          [
            'title' => '文章管理',
            'icon' => 'fa fa-file',
            'module' => 'home',
            'url' => 'home/article/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 1,
            'sort' => 0,
          ],
        ],
      ],
      [
        'title' => '功能管理',
        'icon' => 'aicon ai-shezhi',
        'module' => 'home',
        'url' => 'home',
        'param' => '',
        'target' => '_self',
        'debug' => 0,
        'system' => 0,
        'nav' => 1,
        'sort' => 0,
        'childs' => [
          [
            'title' => '导航管理',
            'icon' => 'fa fa-paper-plane',
            'module' => 'home',
            'url' => 'home/Menu/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 1,
            'sort' => 0,
          ],
          [
            'title' => '轮播图',
            'icon' => 'typcn typcn-media-fast-forward',
            'module' => 'home',
            'url' => 'home/Carousel/index',
            'param' => '',
            'target' => '_self',
            'debug' => 0,
            'system' => 0,
            'nav' => 1,
            'sort' => 0,
          ],
        ],
      ],
    ],
  ],
];
