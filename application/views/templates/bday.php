<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:200px; margin-left: 20%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php $i=0; foreach ($bday as $item) { ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php if ($i==1){echo "active";}?>"></li>        
        <?php $i++;}?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php $i=1; foreach ($bday as $item) { ?>              
            <div class="<?php if ($i==1){echo "item active";}else{echo "item";}?>">
                <?php if ($item->PHOTO_ != 'x') { ?>
                    <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/' . $item->PHOTO_; ?>" style="width: 60%;height: 120px; margin: auto;">
                <?php } else { ?>
                   <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/na.jpg'; ?>" style="width: 50px">
                <?php } ?>
                    <h5><?php echo $item->NAME_; ?></h5>
            </div>        
        <?php $i++;} ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>