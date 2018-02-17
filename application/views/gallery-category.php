<!-- gallery inner -->
<div class="inner-padding">
    <div class="container">
        <h3 class="heading-agileinfo">Our gallery<span>Deepti Public School Blossoms </span></h3>
        <div class="w3ls_portfolio_grids">
            <?php foreach ($gallery_category as $item) { ?> 
            <a href="<?php echo site_url('web/gallery_detail/'.$item->CATEG_ID);?>">
                <div class="col-md-4 agileinfo_portfolio_grid" style="margin-top:2em;">                                   
                    <div class="w3_agile_portfolio_grid1">
                        <div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	
                            <div class="w3layouts_port_head">
                                <h3>Check Photos</h3>
                            </div>
                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive"><br>
                            <h3 align="center"><?php echo $item->CATEGORY; ?></h3>
                            <?php if($item->DESC !=''){?>
                            <p align="center"><?php echo $item->DESC; ?></p>
                            <?php }?>
                        </div>                        
                    </div>                
                </div>
            </a>
            <?php } ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //gallery inner -->
<!-- footer -->
