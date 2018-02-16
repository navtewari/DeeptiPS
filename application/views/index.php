<style>
    .vticker{        
        background: #fff;          
        width: auto;
    }
    .vticker ul{
        padding: 0;        
    }
    .vticker h4{        
        margin-bottom: 10px;
        color:#ff6600;
        font-size:1.3em;
    }
    .vticker li{
        list-style: none;
        border-bottom: 1px dashed #ff9933;      
        margin:10px;
    }
    .et-run{
        background: red;
    }
</style>
<div class="container">
    <div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
        <div  class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner-text" style="background:url(<?php echo base_url('assets/images/head1.jpg') ?>);">
                        <h3>The best place for </h3>
                        <h4>education</h4>                        
                    </div>
                </li>
                <li>
                    <div class="banner-text" style="background:url(<?php echo base_url('assets/images/head2.jpg') ?>);">
                        <h3>Better education for a</h3>
                        <h4>Better world</h4>                                            
                    </div>
                </li>
                <li>
                    <div class="banner-text" style="background:url(<?php echo base_url('assets/images/head3.jpg') ?>);">
                        <h3>Tips to succeed in</h3>
                        <h4>education</h4>                        
                    </div>
                </li>
                <li>
                    <div class="banner-text" style="background:url(<?php echo base_url('assets/images/head4.jpg') ?>);">
                        <h3>Better education for a</h3>
                        <h4>Better world</h4>                        
                    </div>
                </li>
            </ul>
        </div>	
    </div>

</div>
</div>	
<!-- //Header -->                                       
<!-- //Events-Modal-Popup-->
<!-- about-agileits -->
<div class="about-agileits">
    <div class="container">	
        <div class="col-sm-7">
            <h3 class="heading-agileinfo">About Us<span>Experience a good Education in Deepti Public School</span></h3>
            <div class="agileits_banner_bottom">
                <p>The true essence of a school lies, not in its infrastructure of four walls but its overall purpose of imparting quality education which includes the art of shaping individual’s personality through physical, emotional, intellectual and spiritual development. The school, therefore, devotes itself assiduously to grooming of students in such a way that they excel in all walks of life, make a mark in every field of human activity and become proud citizens of the twenty first century not only infused with qualities of character, but also a capability to withstand the onslaught of modern day degeneration of values. The true riches of this institution lie in producing gentle humans who are truthful and represent the school motto <b>‘Knowledge is Power’</b>.</p>
                <div class="more-button">
                    <a href="#">Know More</a>
                </div>
            </div>        
        </div>
        <div class="col-sm-5" style="background: #fdcc77; padding:2px;padding-bottom: 10px;padding-top:20px;border-radius: 20px;">
            <h3 class="heading-agileinfo">News/Events<span>Recent Upcomings in school</span></h3>
            <div class="agileits_banner_bottom">
                <div class="vticker">
                    <marquee direction='up' scrollamount='2' onmouseover='this.stop();' onmouseout='this.start();' style="height: 300px">
                        <ul>                        
                            <?php $this->load->view('templates/news');?>                     
                        </ul>
                    </marquee>
                </div>
                <!--div style="float:right; margin-top:10px;">
                    <button class="btn btn-primary up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
                    <button class="btn btn-primary down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
                </div-->                
            </div>        
        </div>
    </div>    
</div>
<!-- about-agileits -->
<!--testimonials-->
<div id="testimonials" class="testimonials">
    <div class="container">
        <h3 class="heading-agileinfo">Management Board<span>Our Management always enlighten's us.</span></h3>
        <div class="flex1-slider">
            <ul id="flexi1selDemo1" style="list-style: none">			
                <li class="col-sm-6">
                    <div class="laptop">
                        <div class="col-md-12 team-right">
                            <div class="name-w3ls">
                                <img class="img-thumbnail" src="<?php echo base_url('assets/images/test2.jpg'); ?>" alt=" " align='left' style='max-width:130px;margin-right: 10px;' />
                                <h5>Mr Harish Ch. Joshi</h5>
                                <span>Manager <br>(Deepti Public School)</span>
                            </div>
                            <p align='justify'> Here at Deepti Public School, we believe that all children have a desire to be successful at something and respond positively. We believe in developing the whole child; numeracy and literacy are important but art, drama, music and physical education contribute...</p>                            
                            <div class="more-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>                        
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="col-sm-6">
                    <div class="laptop">
                        <div class="col-md-12 team-right">
                            <div class="name-w3ls">
                                <img class="img-thumbnail" src="<?php echo base_url('assets/images/test1.jpg'); ?>" alt=" " align='left' style='max-width:130px;margin-right: 10px;' />
                                <h5>Ms Deepti Joshi</h5>
                                <span>Principal <br>(Deepti Public School)</span>
                            </div>
                            <p align='justify'> Deepti Public School is an inclusive school whereby we expect both high standards of behaviour and students to work to their full potential. The school is recognised for its caring environment where we help individuals develop social awareness and encourage... </p>
                            <div class="more-button">
                                <a href="#">Read More</a>
                            </div>

                        </div>                        
                        <div class="clearfix"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//testimonials-->
<!--Events --> 
<div class="events-agileits-w3layouts">
    <h3 class="heading-agileinfo">Quick Links<span></span></h3>
    <div class="popular-grids">
        <div class="col-md-3 popular-grid">
            <img src="<?php echo base_url('assets/images/a1.jpg'); ?>" class="img-responsive" alt=""/>
            <div class="popular-text">
                <h5><a href="#" data-toggle="modal" data-target="#myModal2">Admission</a></h5>
                <div class="detail-bottom">                    
                    <p>Admission to various classes starts at the beginning of the academic session in February/ March every year. Admission tests are held in Feb and March followed by an interview.</p>                    
                    <div class="more-button" style="margin-bottom: 1em;">
                        <a href="#">Know More</a>
                    </div>               
                </div>
            </div>
        </div>
        <div class="col-md-3 popular-grid">
            <img src="<?php echo base_url('assets/images/a2.jpg'); ?>" class="img-responsive" alt=""/>
            <div class="popular-text">
                <h5><a href="#" data-toggle="modal" data-target="#myModal3">Break and vacations</a></h5>
                <div class="detail-bottom fixheight">                   
                    <p>In addition to normal gazetted holidays, the school observes the following vacations breaks :-<br>
                        (a) Summer vacation - May-June 50 days<br>
                        (c) Winter Break - Dec –Jan 15 days
                    </p>
                    <div class="more-button" style="margin-bottom: 1em;">
                        <a href="#">Know More</a>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-3 popular-grid">
            <img src="<?php echo base_url('assets/images/a3.jpg'); ?>" class="img-responsive" alt=""/>
            <div class="popular-text">
                <h5><a href="#" data-toggle="modal" data-target="#myModal4">Happy Birthday</a></h5>
                <div class="detail-bottom fixheight">                    
                    <p>Wishing you a <br><b><h2>Happy Birthday</h2></b></p>
                    <?php $this->load->view('templates/bday'); ?>
                    <p>May GOD bless you all the days you live.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 popular-grid">
            <img src="<?php echo base_url('assets/images/a4.jpg'); ?>" class="img-responsive" alt=""/>
            <div class="popular-text">
                <h5><a href="#" data-toggle="modal" data-target="#myModal5">Visiting/Calling Hours</a></h5>
                <div class="detail-bottom fixheight">
                    <p>Regular Parent-Teacher meeting is organized after every Unit Test. Official Hours are as follows<br>
                        (i) Summer : 09:00 AM  to 01:00 PM.<br>
                        (ii) Winter : 09:30 AM to 01:30 PM</p>
                    <div class="more-button" style="margin-bottom: 1em;">
                        <a href="#">Know More</a>
                    </div>  
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //Events --> 
<!-- footer -->

