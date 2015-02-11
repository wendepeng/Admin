<?php
/**
 * common functions
 * cache functions
 * create by lane
 * @2012-01-01
*/
function generateUserPassword($pass) {
    global $config;
    return $config ? md5(md5($config[PREKEY4PASSWORD] . $pass)) : md5(md5($pass));
}

function checkFileMTime($file, $secs) {
    $update = false;
    if (file_exists($file)) {
        $mtime = filemtime($file);
        $now = time();
        $update = $now - $mtime >= $secs ? true : false;
    }else {
        $update = true;
    }

    return $update;
}

function isImgUrl($url) {
    return strpos($url, '.jpg') + strpos($url, '.gif');
}

function rs2Array($rs) {
    $rows = array();
    while ($row = mysql_fetch_array($rs)) {
        $rows[] = $row;
    }
    return $rows;
}

function getRndArray($arr, $num) {
    if ($num > count($arr)) {
        $num = count($arr);
    }
    $arrKeys = array_rand($arr, $num);
    $out = array();
    foreach ($arrKeys as $key) {
        $out[] = $arr[$key];
    }
    return $out;
}

/**
 * cache save and get
*/
function cacheSave($key, $value, $cacheFolder = '') {
    $cachePath = dirname(__FILE__) . "/../cache/";
    //check cache folder if exits
    if (!file_exists($cachePath . $cacheFolder)) {
        mkdir($cachePath . $cacheFolder, 0777, true);
    }
    $cacheFile = $cachePath . $cacheFolder . $key . '.htm';
    return file_put_contents($cacheFile, $value);
}

function cacheGet($key, $cacheFolder = '') {
    $cachePath = dirname(__FILE__) . "/../cache/";
    $cacheFile = $cachePath . $cacheFolder . $key . '.htm';
    if (file_exists($cacheFile)) {
        return file_get_contents($cacheFile);
    }else {
        return '';
    }
}

//parameter filter
function cleanParameters(&$arr) {
    $filters = array(
        '&#39;' => '/\\\\?\'/',
        '&quot;' => '/\\\\?\"/',
    );
    foreach ($arr as $key => $val) {
        $temp = $val;
        foreach ($filters as $replace => $reg) {
            $temp = preg_replace($reg, $replace, $temp);
        }
        $arr[$key] = $temp;
    }
}
