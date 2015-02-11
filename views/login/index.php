<div class="mwin" id="login">
    <div class="hd radius5tr clearfix">
        <h3>管理系统</h3>
        <div class="con clearfix">
            <span class="lborder"><span><a href="http://service.oncecode.com">%E4%BB%81%E5%AE%89%E7%BD%91%E7%BB%9C%E5%B7%A5%E4%BD%9C%E5%AE%A4%E5%88%B6%E4%BD%9C</a></span></span>
            <a href="http://service.oncecode.com" target="_blank">忘记密码了吗？</a>
        </div>
    </div>
    <div class="bd">
        <form action="login.php" method="POST">
            <p class="red"><?php echo $errorMsg; ?></p>
            <p><label>用户名<br><input class="grayipt" type="text" name="username" value="admin"></label></p>
            <p><label>密码<br><input class="grayipt" type="password" name="password" value="phpwebadmin"></label></p>
            <p class="btns clearfix">
                <label><input type="checkbox" name="remember" value="1">记住我</label>
                <input class="btn" type="submit" value="登入">
            </p>
        </form>
    </div>
</div>
