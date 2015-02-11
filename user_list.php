<?php
/**
 * controller: user list
 * create by lane
 * @2012-01-01
 */
$pageName = 'userlist';
$needDb = true; //enable db

/**----------------
 * include common files
 */
$incPath = dirname(__FILE__);
require_once "{$incPath}/inc/init.php";

//admin user check
if ($_SESSION[SESSIONUSER] != $config[SUPERUSER]) {
    header('Content-type: text/html; charset=utf-8');
    die('您无权查看此页！');
}

/**----------------
 * controll logical code here
 */
$userRs = $config[DAOIMPL]->getUsers();
$userList = rs2Array($userRs);
//print_r($userList);

/**----------------
 * config title, description, keywords
*/
$pageTitle = '用户列表';
$pageDescription = '通用网站后台系统(php版)，含超级管理员、普通管理员简单两级用户系统。它能方便地整合到企业网站中，网站自身的所有管理功能，需开发者在此通用网站后台的基础上扩展实现。';
$pageKeywords = '通用网站后台,网站后台系统,php版网站后台,简单两级用户系统';

/**----------------
 * render views
 * layout and views
*/
$layoutName = 'main';
$viewGroup = 'user';
$viewName = 'list';

$layoutPath = "{$incPath}/views/layout/";
include_once "{$layoutPath}/{$layoutName}.php";
