<?php
/**
 * controller: demo
 * create by lane
 * @2012-01-02
 */
$pageName = 'demo';

/**----------------
 * include common files
 */
$incPath = dirname(__FILE__);
require_once "{$incPath}/inc/init.php";


/**----------------
 * controll logical code here
 */


/**----------------
 * config title, description, keywords
*/
$pageTitle = 'form表单和table表格模块demo -来自通用网站后台系统(php版)';
$pageDescription = '通用网站后台系统(php版)，含超级管理员、普通管理员简单两级用户系统。它能方便地整合到企业网站中，网站自身的所有管理功能，需开发者在此通用网站后台的基础上扩展实现。';
$pageKeywords = '通用网站后台,网站后台系统,php版网站后台,简单两级用户系统';

/**----------------
 * render views
 * layout and views
*/
$layoutName = 'main';
$viewGroup = 'default';
$viewName = 'demo';

$layoutPath = "{$incPath}/views/layout/";
include_once "{$layoutPath}/{$layoutName}.php";
