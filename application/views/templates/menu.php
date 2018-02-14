<body>
        <!-- Header -->
        <div id="home" class="<?php if ($menu == 1) { echo "banner";}?> w3l">
            <div class="header-nav">
                <nav class="navbar navbar-default">
                    <div class="header-top">
                        <div class="navbar-header logo">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1>
                                <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo.jpg');?>" class="img-responsive"></a>
                            </h1>
                        </div>
                        <!-- navbar-header -->
                        <div class="contact-bnr-w3-agile">
                            <ul>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="#">deeptipublicschool@gmail.com</a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>05946-261105, 9917534401</li>	
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="<?php if ($menu == 1) { echo "active";}?>"><a href="<?php echo site_url('web')?>">Home</a></li>
                            <li class="<?php if ($menu == 2) { echo "active";}?>"><a href="<?php echo site_url('web/about'); ?>">About</a></li>
                            <li class="<?php if ($menu == 3) { echo "active";}?>"><a href="<?php echo site_url('web/admission');?>">Admissions</a></li>
                            <li class="<?php if ($menu == 4) { echo "active";}?>"><a href="<?php echo site_url('web/activities');?>">Activities & Facilities</a></li>
                            <li class="<?php if ($menu == 5) { echo "active";}?>"><a href="<?php echo site_url('web/gallery'); ?>">Gallery</a></li>
                            <li class="<?php if ($menu == 6) { echo "active";}?>"><a href="<?php echo site_url('web/contact'); ?>">Contact</a></li>                            
                        </ul>

                    </div>
                    <div class="clearfix"> </div>	
                </nav>
                <div class="clearfix"> </div>
            </div>