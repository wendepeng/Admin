<div class="grid radius5">
    <table>
        <colgroup>
            <col width="42">
            <col>
            <col width="74">
            <col width="126">
            <col width="96">
        </colgroup>
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Post</th>
                <th>Author</th>
                <th>Categories</th>
                <th>Date</th>
            </tr>
        <thead>
        <tbody>
            <?php for($i=0;$i<10;$i++) { ?>
            <tr>
                <td class="center"><input type="checkbox" value=""></td>
                <td>Learn how to love a girl..</td>
                <td>Jacky</td>
                <td>Book</td>
                <td class="last">2011-09-29</td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" class="allbox">
                    <label><input type="checkbox" value="selectAll">&nbsp;全选</label>
                </td>
                <td colspan="3" class="last">
                    <a href="?">&lt;&lt;</a>
                    <a href="?">1</a>
                    <a href="?">2</a>
                    <a href="?">3</a>
                    <a href="?">4</a>
                    <strong>5</strong>
                    <a href="?">6</a>
                    <a href="?">&gt;&gt;</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
