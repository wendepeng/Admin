<div class="mwin" id="page">
    <div class="hd radius5tr clearfix">
        <h3>用户列表</h3>
    </div>
    <div class="bd">
        <p class="green"><?php echo $successMsg; ?></p>
        <p class="red"><?php echo $errorMsg; ?></p>
        <?php include_once 'grid.php'; ?>
        <p>&nbsp;</p>
        <p>注意：</p>
        <p>超级用户<strong class="red"><?php echo $config[SUPERUSER]; ?></strong>不可删除。</p>
    </div>
</div>
