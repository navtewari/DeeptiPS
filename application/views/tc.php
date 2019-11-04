<!-- about inner -->
<?php 
    $tcnames = array('KOMAL KHANI', 'VYOM SINGH KHATI', 'HITESH LOHUMI', 'BHUMIKA PANT', 'RIDHI DASS', 'YUVIKA VERMA', 'DEVANSH MAKHLOGA', 'RIYA JOSHI', 'DIYA JOSHI', 'RIYA BISHT', 'HITESH KUMAR', 'VIPUL KUMAR', 'AMOGH HARBOLA', 'GAUTAM SINGH BORA', 'VAYAM JOSHI', 'BHAVESH PANDEY', 'AAYUSH DWIVEDI', 'HARSHIT KUNWAR', 'KRISHNA TIWARI', 'PARTH MELKANI', 'ARJUN JOSHI', 'DEEPTI PANT');
?>
<div class="about-bottom inner-padding">
    <div class="container">
        <h3 class="heading-agileinfo">Transfer Certificates<span>All the best to our Alumni</span></h3>
        <div class="about-bott-right col-sm-12" style="overflow: hidden; border: #f00 solid 1px">
            <?php $k=0;?>
            <?php for($i=522; $i<=543; $i++){?>
            <div class="col-sm-3" style="padding: 10px 0px; text-align: center; background: #f0f0f0; margin: 5px">
                &nbsp;<br>
                <a href="<?php echo base_url('assets/tc/'.$i.".pdf");?>" target="_blank">
                    <img src="<?php echo base_url('assets/images/pdf.jpg');?>" width="50"><br>
                    <?php echo $tcnames[$k];?>
                </a>
                <br>&nbsp;
            </div>
            <?php $k++;?>
        <?php } ?>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="about-agile inner-padding">
    <div class="container">
        <h3 class="heading-agileinfo white-w3ls">Play, explore and learn.<span class="yellow-w3ls">Experience a good Education at Deepti Public School</span></h3>
        <p>The true essence of a school lies, not in its infrastructure of four walls but its overall purpose of imparting quality education.</p>
        <div class="more-button">
            <a href="<?php echo site_url('web/contact')?>">Contact Us</a>
        </div>
    </div>
</div>
<!-- //about inner -->