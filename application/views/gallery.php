<!-- gallery inner -->
<div class="inner-padding">
    <div class="container">
        <h3 class="heading-agileinfo">Our gallery<span>Deepti Public School Blossoms </span></h3>
        <div class="w3ls_portfolio_grids">
            <div class="col-md-12 agileinfo_portfolio_grid">
                <?php foreach($gallery as $item){?>
                <div class="w3_agile_portfolio_grid1 col-md-4">
                        <div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
                            <div class="w3layouts_port_head">
                                <h3>Emphasize</h3>
                            </div>
                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" class="img-responsive">
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //gallery inner -->
<!-- footer -->