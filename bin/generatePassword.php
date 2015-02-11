<?php
$includePath = dirname(__FILE__);
require_once "{$includePath}/../inc/constant.php";
require_once "{$includePath}/../inc/config.php";
require_once "{$includePath}/../inc/util.php";

header('content-type: text/html; charset=utf-8');
echo "您配置的用户密码是：{$config[SUPERUSERPASSWORD]}\n";
echo "加密之后的密码是：" . generateUserPassword($config[SUPERUSERPASSWORD]) . "\n";
echo "请将新的加密之后的密码更新到您的数据库，替换原有超级用户的密码！\n";
