<div class="mwin" id="page">
    <div class="hd radius5tr clearfix">
        <h3>添加用户</h3>
    </div>
    <div class="bd">
        <p class="green"><?php echo $successMsg; ?></p>
        <p class="red"><?php echo $errorMsg; ?></p>
        <?php include_once 'form.php'; ?>
        <p>&nbsp;</p>
        <p>注意：</p>
        <p>这里添加的用户都是普通用户，<strong class="red">超级用户</strong>请在配置文件<strong class="red">/inc/config.php</strong>中设置。</p>
    </div>
</div>
