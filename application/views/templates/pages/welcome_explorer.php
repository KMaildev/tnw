<?php 
    $lang_session = $this->session->userdata('lang'); 
?>
<section class="bg-gray py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">
                <div class="welcome-title">
                    <h2 style="text-transform: capitalize;">
                        <?php 
                            if ($lang_session) {
                        ?>
                            နေထိုင်ရန်နှင့်လုပ်ငန်းအတွက် <span>အံ့ဩဖွယ်ကောင်းသောနေရာများ</span>ကို ရှာဖွေပါ
                        <?php }else{ ?>
                            Find <span>Better Places</span> to Live, Work and Wonder...
                        <?php } ?>
                    </h2>
                </div>
            </div>

            <style type="text/css">
                .imgHover {
                  transition: transform .7s;
                  margin: 0 auto;
                }

                .imgHover:hover {
                  -ms-transform: scale(0.9); /* IE 9 */
                  -webkit-transform: scale(0.9); /* Safari 3-8 */
                  transform: scale(0.9); 
                }
            </style>

            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-video w50 imgHover">
                    <img alt="image" src="<?php echo base_url(); ?>data/tnw1.jpg" style="border-radius: 15px;">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12 page-hero d-flex align-items-center">
                <div class="welcome-content">
                    <h3 style="padding: 7px;">
                        Selling Your Property
                    </h3>

                    <?php 
                        if ($lang_session) {
                    ?>
                        <p style="font-size: 20px; font-weight: bold; padding: 7px;"> 
                            တိုက်ခန်းများ၊ မြေ၊ ကွန်ဒိုများနှင့် အခြားအရာများမှ စူးစမ်းလေ့လာပါ။
                        </p>
                    <?php }else{ ?>
                        <p style="font-size: 16px; font-weight: bold; padding: 7px;"> 
                            Explore from Apartments, land,  condos  and more
                        </p>
                    <?php } ?>
                    

                    <button onclick="document.getElementById('id01').style.display='block'" style="padding: 7px;" class="btn btn-lg myBtn btn-md">
                        Explore Selling
                        <i class="fa fa-long-arrow-alt-right text-white"></i> 
                    </button>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12 py-5">
                    <section class="featured-boxes-area">
                        <div class="container">
                            <div class="featured-boxes-inner" style="background-color: #fcfcfc; width: 100%; border-radius: 30px;">
                                <div class="row m-0">

                                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                                        <div class="single-featured-box">
                                            <div class="icon color-fb7756">
                                                <img src="<?php echo base_url(); ?>data/icon/mansion.png" alt="" style="width: 65px;">
                                            </div>
                                            <h3 class="mt-5">
                                                <a href="<?php echo site_url('propertyrequest'); ?>" style="color: #d93a2f; font-size: 13px;">
                                                    Property Request
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                                        <div class="single-featured-box">
                                            <div class="icon color-fb7756">
                                                <img src="<?php echo base_url(); ?>data/icon/conversation.png" alt="" style="width: 65px;">
                                            </div>
                                            <h3 class="mt-5">
                                                <a href="<?php echo site_url('contact/suggestion'); ?>" style="color: #d93a2f; font-size: 13px;">
                                                    You can suggest
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                                        <div class="single-featured-box">
                                            <div class="icon color-fb7756">
                                                <img src="<?php echo base_url(); ?>data/icon/budget.png" alt="" style="width: 65px;">
                                            </div>
                                            <h3 class="mt-5">

                                                <a href="<?php echo site_url('home_loan_calculator'); ?>" style="color: #d93a2f; font-size: 13px;">
                                                    Check your home buying budget
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </a>

                                        
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                                        <div class="single-featured-box">
                                            <div class="icon color-fb7756">
                                                <img src="<?php echo base_url(); ?>data/icon/personal.png" alt="" style="width: 65px;">
                                            </div>
                                            <h3 class="mt-5">
                                                <a href="<?php echo site_url('pages/testimonials'); ?>" style="color: #d93a2f; font-size: 13px;">
                                                    Hear from our satisfied buyers, owners
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
            
        </div>
    </div>
</section>