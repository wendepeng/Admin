<div class="commonform">
    <form action="user_add.php" method="POST">
        <fieldset class="radius5">
            <legend>请填写用户资料</legend>
            <div class="item">
                <label>姓名</label>
                <input class="txt" type="text" name="username" value="<?php echo $_POST['username']; ?>">
            </div>
            <div class="item">
                <label>密码</label>
                <input class="txt" type="password" name="password" value="">
            </div>
            <div class="item">
                <label>确认密码</label>
                <input class="txt" type="password" name="passwordconfirm" value="">
            </div>
            <div class="item">
                <label>&nbsp;</label>
                <input class="btn" type="submit" value="保存">
            </div>
        </fieldset>
    </form>
</div>
