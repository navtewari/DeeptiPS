        <div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
            <div class="agileits_banner_bottom"	>
                <div class="rslides">
                        <ul>        
                        	<?php foreach ($bday as $item) { ?>                
                            <li>         
                            	<div class="banner-text" style="margin: 0px; height: 50px; background: transparent; border: #ff0000 solid 0px">       
                                <h5><?php echo $item->NAME_; ?></h5>
                                <p>
                                	<?php if ($item->PHOTO_ != 'x') { ?>
								        <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/' . $item->PHOTO_; ?>" style="width: 50px">
								    <?php } else { ?>
								        <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/na.jpg'; ?>" style="width: 50px">
								    <?php } ?>
                                </p>
                            	</div>
                            </li>       
                            <?php } ?>
                        </ul>
                </div>
                <!--div style="float:right; margin-top:10px;">
                    <button class="btn btn-primary up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
                    <button class="btn btn-primary down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
                </div-->                
            </div>     
        </div>   