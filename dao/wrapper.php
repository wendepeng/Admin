<?php
/*
 * dao wrapper
 * include select, insert, update, delete, truncate
 * by lane @2010-10-02
*/
class DAOWrapper {
    private static $wrapper;
    private $link;
    private function __construct($link) {
        $this->link = $link;
    }

    function __clone() {
        return self::$wrapper;
    }

    function __toString() {
        return "DAO wrapper using connection $this->link.";
    }

    public static function getWrapper($link) {
        if (empty(self::$wrapper)) {
            self::$wrapper = new DAOWrapper($link);
        }
        return self::$wrapper;
    }

    function select($table, $fields, $condition = '', $order = '', $limit = '') {
        $sql = "select $fields from $table" .
            (!empty($condition) ? " where $condition" : "") .
            (!empty($order) ? " order by $order" : "") .
            (!empty($limit) ? " limit $limit" : "");
        return mysql_query($sql, $this->link);
    }

    function insert($table, $keyValues = array()) {
        $fields = '';
        $values = '';
        foreach ($keyValues as $key => $val) {
            $fields .= "{$key},";
            $values .= "'{$val}',";
        }
        $fields = preg_replace('/,$/', '', $fields);
        $values = preg_replace('/,$/', '', $values);

        $sql = "insert into {$table}({$fields}) values($values)";
        return mysql_query($sql, $this->link);
    }

    function update($table, $keyValues = array(), $condition = '', $limit = 0) {
        $sql = "update $table set ";
        foreach ($keyValues as $key => $value) {
            $sql .= "$key='$value',";
        }
        $sql = preg_replace('/,$/', '', $sql);
        $sql .= (!empty($condition) ? " where $condition" : "") . ($limit > 0 ? " limit $limit" : "");
        return mysql_query($sql, $this->link);
    }

    function del($table, $condition = '', $limit = 0) {
        $sql = "delete from $table" .
            (!empty($condition) ? " where $condition" : "") .
            ($limit > 0 ? " limit $limit" : "");
        return mysql_query($sql, $this->link);
    }

    function truncate($table) {
        $sql = "truncate $table";
        return mysql_query($sql, $this->link);
    }

    function query($sql) {
        return mysql_query($sql, $this->link);
    }
}
