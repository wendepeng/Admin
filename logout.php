<?php
/**
 * controller: logout
 * create by lane
 * @2012-01-01
 */
$pageName = 'logout';

/**----------------
 * include common files
 */
$incPath = dirname(__FILE__);
require_once "{$incPath}/inc/constant.php";
session_start();

/**----------------
 * controll logical code here
 */
if (isset($_SESSION[SESSIONUSER])) {
    unset($_SESSION[SESSIONUSER]);
}
header('Location: login.php');
