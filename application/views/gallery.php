<!-- gallery inner -->
<div class="inner-padding">
    <div class="container">
        <?php foreach ($gallery as $item) { ?>
            <h3 class="heading-agileinfo"><?php echo $item->CATEGORY;?>-Gallery<span><?php echo $item->DESC;?></h3>
        <?php break; } ?>            
        <div class="w3ls_portfolio_grids">
            <div class="more"><a href="<?php echo site_url('web/gallery')?>"  style="color:#ff6600"><i class="fa fa-undo" aria-hidden="true"></i> Back to Gallery Category</a></div>
            <?php foreach ($gallery as $item) { ?>             
            <div class="col-md-4 agileinfo_portfolio_grid" style="margin-top:2em;">                                   
                    <div class="w3_agile_portfolio_grid1">
                        <a href="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Depti Public School">
                            <div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
                                <div class="w3layouts_port_head">
                                    <h3><i class="fa fa-search-plus" aria-hidden="true"></i></h3>
                                </div>
                                <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive">
                            </div>
                        </a>
                    </div>                
            </div>
            <?php } ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //gallery inner -->
<!-- footer -->
