<div class="grid radius5">
    <table>
        <colgroup>
            <col width="42">
            <col>
            <col width="96">
        </colgroup>
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>用户名</th>
                <th>操作</th>
            </tr>
        <thead>
        <tbody>
            <?php foreach($userList as $user) { ?>
            <tr>
                <td class="center">&nbsp;</td>
                <td><?php echo $user['username']; ?></td>
                <td class="last">
                <?php if ($user['username'] != $config[SUPERUSER]) {
                    echo <<<eof
<a href="user_del.php?uid={$user['uid']}">删除</a>
eof;
                }else {
                    echo '&nbsp;';
                } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
