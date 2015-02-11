<?php
/**
 * controller: add user
 * create by lane
 * @2012-01-01
 */
$pageName = 'useradd';
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
if (isset($_POST['username']) && isset($_POST['password'])
    && !empty($_POST['username']) && !empty($_POST['password'])
) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordconfirm'];

    if ($password == $passwordConfirm) {
        $rs = $config[DAOIMPL]->getUserByName($username);
        $arr = mysql_fetch_array($rs);
        if ($arr) { //check if the username exist
            $errorMsg = '用户添加失败！此用户名已存在！';
            unset($_POST['username']);
        }else { //add user
            $newUser = array(
                'username' => $username,
                'password' => generateUserPassword($password)
            );
            $rs = $config[DAOIMPL]->addUser($newUser);
            $successMsg = '用户添加成功！';
        }
    }else {
        $errorMsg = '两次输入的密码不一致！';
    }
}


/**----------------
 * config title, description, keywords
*/
$pageTitle = '添加用户 ';
$pageDescription = '通用网站后台系统(php版)，含超级管理员、普通管理员简单两级用户系统。它能方便地整合到企业网站中，网站自身的所有管理功能，需开发者在此通用网站后台的基础上扩展实现。';
$pageKeywords = '通用网站后台,网站后台系统,php版网站后台,简单两级用户系统';

/**----------------
 * render views
 * layout and views
*/
$layoutName = 'main';
$viewGroup = 'user';
$viewName = 'add';

$layoutPath = "{$incPath}/views/layout/";
include_once "{$layoutPath}/{$layoutName}.php";
