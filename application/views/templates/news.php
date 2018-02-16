<?php foreach($news_ as $item){?>
<li>                               
    <h4><?php echo $item->SUBJECT;?></h4>
    <p><?php echo $item->NEWS;?></p>
    <?php if ($item->PATH_ATTACH != 'x') { ?>
        <a href="<?php echo ADMIN___ . '/_assets_/newsdetail/' . $item->PATH_ATTACH; ?>" target="_blank" style="text-decoration: none; color:#fff; background: #9090DD; padding: 5px 6px; border-radius: 3px; font-size: 11px">click for detail</a>
    <?php } ?>
    <div style="color:#0086B3; font-size: 10px; float: right; margin-top: 5px"><?php echo $item->DATE_ . " | " . $item->TIME_; ?></div>
    <br><br>
</li>
<?php }?>