<?php
/*
 * dao implements
 * include logger,
 * by lane @2010-10-03
*/
class DAOImpl {
    private static $impl; //can not be extends
    private $tablepre;

    protected function __construct($link, $tablepre) {
        $this->wrapper = DAOWrapper::getWrapper($link);
        $this->tablepre = $tablepre;
    }

    function __clone() {
        return self::$impl;
    }

    function __toString() {
        return "DAO implements.";
    }

    public function setTablePre($tablepre) {
        $this->tablepre = $tablepre;
    }

    public function getTablePre() {
        return $this->tablepre;
    }

    public static function getImpl($link, $tablepre) {
        if (empty(self::$impl)) {
            self::$impl = new DAOImpl($link, $tablepre);
        }
        return self::$impl;
    }

    //----------------------user of admin-------------------------
    function getUserByName($username)
    {
        $table = $this->tablepre . 'user';
        $fields = '*';
        $condition = "username='{$username}'";
        $order = '';
        $limit = '1';
        return $this->wrapper->select($table, $fields, $condition, $order, $limit);
    }

    function getUserById($uid)
    {
        $table = $this->tablepre . 'user';
        $fields = '*';
        $condition = "uid='{$uid}'";
        $order = '';
        $limit = '1';
        return $this->wrapper->select($table, $fields, $condition, $order, $limit);
    }

    function addUser($arrUser)
    {
        $table = $this->tablepre . 'user';
        return $this->wrapper->insert($table, $arrUser);
    }

    function deleteUserByUid($uid)
    {
        $table = $this->tablepre . 'user';
        $condition = "uid='{$uid}'";
        return $this->wrapper->del($table, $condition);
    }

    function getUsers($limit = 10)
    {
        $table = $this->tablepre . 'user';
        $fields = 'uid,username';
        $condition = '';
        $order = '';
        return $this->wrapper->select($table, $fields, $condition, $order, $limit);
    }
    //-----------------------------------------------------------

    //----------------------others-------------------------
    
}
