<?php
/*
/*
 * db connection pool
 * single instance class, single connection
 * by lane @2010-10-02
*/
class DBPool {
    private static $link;

    private function __construct() {
        //do nothing
    }

    public static function getLink($driver) {
		global $lang;
        if (empty(self::$link)) {
            self::$link = mysql_connect($driver[DBHOST], $driver[DBUSER], $driver[DBPASSWORD]);
            if (!self::$link) {die($lang[DBCONNECTFAIL]);}
            if (!mysql_select_db($driver[DATABASE])) {die($lang[DBSELECTFAIL]);}
        }
        return self::$link;
    }

    public static function closeLink($link = null) {
        return mysql_close();
    }
}
