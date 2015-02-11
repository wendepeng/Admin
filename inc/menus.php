<?php
/**
 * 系统菜单
 * 支持的group css类：pages, media, comments, settings
 * created by lane
 * @2012-01-01
 */
$supportGroupClasses = array('pages', 'media', 'comments', 'settings');
$extendArr = array('selected' => 'on', 'on' => '收起', 'off' => '展开');

//菜单自定义
$menus = array(
    /*
    'group_1' => array(
        'groupClass' => 'pages',
        'title' => '表单和表格demo',
        'selected' => true,
        'items' => array(
            array('page' => 'demo', 'text' => '模块demo', 'url' => 'demo.php'),
        ),
    ),
    */
    'group_4' => array(
        'groupClass' => 'comments',
        'title' => '会议管理',
        'selected' => true,
        'items' => array(
            array('page' => 'group3_item1', 'text' => '会议管理', 'url' => 'tracker_mana.php'),
        ),
    ),
);

//用户管理，只有超级用户才有权限

if ($_SESSION[SESSIONUSER] == $config[SUPERUSER]) {
    $menus['group_userlist'] = array(
        'groupClass' => 'settings',
        'title' => '用户管理',
        'selected' => true,
        'items' => array(
            array('page' => 'userlist', 'text' => '用户列表', 'url' => 'user_list.php'),
            array('page' => 'useradd', 'text' => '添加用户', 'url' => 'user_add.php'),
        )
    );
}

//group extend check
foreach ($menus as $key => $group) {
    foreach ($group['items'] as $item) {
        if ($pageName == $item['page']) {
            $menus[$key]['selected'] = true;
            break;
        }
    }
}
