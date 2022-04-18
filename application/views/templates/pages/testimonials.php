<section class="h18 testimonials py-2" style="background-color: white;">
    <div class="container" style="padding: 30px;">
        <div class="sec-title">
            <h2><span style="color: black;">People</span> Says</h2>
            <p style="color: black;">
                Hear from our satisfied buyers, owners
            </p>
            <br>
        </div>

        <div class="owl-carousel style1">
            <?php 
                foreach ($testimonials as $key => $value) {
             ?>
            <div class="single-testimonial" style="background-color: white !important">
                <div class="client-comment">
                    <p>
                        <?php 
                            echo mb_substr($value->testimonial, 0, 100, 'UTF-8')
                        ?>
                    </p>
                </div>
                <div class="clinet-inner">
                    <div class="client-thumb">
                        <?php 
                            if ($value->profile_photo == '') {
                        ?>
                            <img src="<?php echo base_url(); ?>data/default/user.gif">
                        <?php }else{ ?>
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $value->profile_photo; ?>" style="width: 100%;">
                        <?php } ?>
                    </div>
                    <div class="client-info">
                        <h2 style="color: black;"><?php echo $value->name; ?></h2>
                        <span style="color: black;"><?php echo $value->company; ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <center>
            <a href="<?php echo site_url('pages/testimonials'); ?>" style="color: black; font-size: 20px;">
                View all testimonials 
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </center>
        

    </div>
</section>