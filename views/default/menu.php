<div id="menu">
    <div class="hd">
        <h3>系统菜单</h3>
    </div>
    <div class="bd">
        <ul>
            <?php foreach ($menus as $group) { ?>
            <li class="item<?php echo $group['groupClass']?' '.$group['groupClass']:'';echo $group['selected']?' '.$extendArr['selected']:''; ?>">
                <h4 class="clearfix">
                    <span><?php echo $group['title']; ?></span>
                    <a href="###" title="<?php echo $group['selected']?$extendArr['on']:$extendArr['off']; ?>"><em><?php echo $group['selected']?$extendArr['on']:$extendArr['off']; ?></em></a>
                </h4>
                <ul class="links">
                <?php foreach ($group['items'] as $item) { ?>
                    <?php if ($item['page'] != $pageName) { ?>
                    <li><a href="<?php echo $item['url']; ?>"><?php echo $item['text']; ?></a></li>
                    <?php }else { ?>
                    <li><strong><?php echo $item['text']; ?></strong></li>
                    <?php } ?>
                <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
