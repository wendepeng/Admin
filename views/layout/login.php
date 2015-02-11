<?php 
$viewPath = dirname(__FILE__);
include_once "before_body.php";
include_once "{$viewPath}/../{$viewGroup}/{$viewName}.php";
include_once "after_body.php";
