<?php
/**
 * config file
 * created by lane
 * @2012-01-01
*/
$config = array(
    SITENAME => '后台管理网站',
    VERSION => '1.0',

    PREKEY4PASSWORD => 'padm_',
    SUPERUSER => 'admin',
    SUPERUSERPASSWORD => 'phpwebadmin',

    DBDRIVER => array(
        DBHOST => '127.0.0.1:3306',
        DBUSER => 'root',
        DBPASSWORD => '',
        DATABASE => 'house'
    ),
    TABLEPRE => array(
        FRONTEND => 'eshop_',
        BACKEND => 'adm_',
    ),
    NEEDDB => false,
);

if (isset($needDb) && true == $needDb) {
    $config[NEEDDB] = true;
}
