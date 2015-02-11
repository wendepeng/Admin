<?php
$viewPath = dirname(__FILE__);
include_once "before_body.php"; ?>
<div class="header">
    <?php include_once "{$viewPath}/../default/pageTop.php"; ?>
</div>
<div class="content clearfix">
    <div class="mwin sidebar">
        <?php include_once "{$viewPath}/../default/menu.php"; ?>
    </div>
    <div class="main">
        <?php include_once "{$viewPath}/../{$viewGroup}/{$viewName}.php"; ?>
    </div>
</div>
<div class="footer">
    <?php include_once "{$viewPath}/../default/copyright.php"; ?>
</div>
<?php include_once 'after_body.php'; ?>
