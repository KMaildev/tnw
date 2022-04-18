<?php
$lang_session = $this->session->userdata('lang');
?>

<style type="text/css">
    .fp-wrapper {
        text-align: center;
        padding: 50px 0 75px;
    }

    .fp-slider-wrapper {
        padding: 7px;
    }

    .fp-slider-wrapper a {
        display: block;
        position: relative;
    }

    .fp-wrapper h4 {
        font: 400 25px 'Playfair Display', serif;
        color: #e1ab35;
        text-transform: uppercase;
    }

    .fp-wrapper span {
        font: 400 13px/21px 'Roboto', sans-serif;
        color: #680909;
    }

    .fp-slider-items.slick-initialized.slick-slider {
        padding: 38px 0 0;
    }

    .fp-slider-items button.slick-arrow {
        display: inline-block;
        position: absolute;
        height: 41px;
        top: 0;
        bottom: 0;
        margin: auto;
        transform: translateY(-40px);
        font-size: 0;
        border: none;
        outline: none;
    }

    .fp-slider-items button.slick-prev.slick-arrow {
        left: -40px;
        /*background: url(images/arrows-left.png);*/
    }

    .fp-slider-items button.slick-next.slick-arrow {
        right: -40px;
        /*background: url(images/arrow-right.png);*/
    }

    .fp-slider-wrapper .fp-img:before {
        content: '';
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        background: rgba(153, 126, 67, .30);
        opacity: 0;
        outline: 1px solid #ffffff;
        outline-offset: -10px;
        -webkit-transition: all 0.6s;
        -moz-transition: all 0.6s;
        -o-transition: all 0.6s;
        -ms-transition: all 0.6s;
        transition: all 0.6s;

    }

    .fp-slider-wrapper .fp-img:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        opacity: 0;
        background: rgba(255, 255, 255, .5);
        -webkit-transition: all 0.6s;
        -moz-transition: all 0.6s;
        -o-transition: all 0.6s;
        -ms-transition: all 0.6s;
        transition: all 0.6s;
    }

    .fp-slider-wrapper:hover .fp-img:before,
    .fp-slider-wrapper:hover .fp-img:after {
        opacity: 1;
    }

    #ft-title {
        font: 500 13px/21px 'Roboto', sans-serif;
        color: #680909;
        text-transform: lowercase;
        letter-spacing: 0.20em;
    }

    .fp-img {
        position: relative;
    }

    .slick-slide img {
        display: inline-block;
        width: 100%;
        height: auto;
    }

    /*
    .slider-details {
        padding: 20px 0;
        opacity: 0;
        transition: all .3s ease;
    }
            
    .fp-slider-wrapper:hover .slider-details {
        opacity: 1;
    }

    .slider-details strong{
        font: 500 20px 'Roboto', sans-serif;
        color: #2f2f2f;
    }

    .slider-details a{
        font: 500 12px 'Roboto', sans-serif;
        color: #680909;
        line-height: 2.5em;
    }

    .slick-track * {
      outline: none;
    }*/
</style>


<div class="hp-fp-section" style="background-color: white;">
    <div class="container">
        <div class="fp-wrapper">
            <p style="font-size: 25px; font-weight: bold;">
                <?php
                if ($lang_session) {
                    echo "အိမ်ခြံမြေများကို ရောင်း၊ဝယ်၊ငှားရန်အတွက် စူးစမ်းရှာဖွေခြင်းဖြင့် စတင်လိုက်ပါ။";
                } else {
                    echo "Get Started With";
                }
                ?>
            </p>

            <br>
            <?php
            if ($lang_session) {
            ?>
                <span id="ft-title" style="font-size: 15px;">
                    သင့်အိမ်မက်စိတ်ကူးလေးထဲက အိမ်ခြံမြေလေး ပိုင်ဆိုင်ဖို့ရန်အတွက် ရှာနေပါသလား? <br> စိတ်ကူးနဲ့လက်တွေ့ဘဝကိုအကောင်အထည်ဖော်ဖို့ တက်နေဝန်းနှင့် လက်တွဲကြပါစို့။
                </span>
            <?php } else { ?>
                <span id="ft-title">
                    exploring real estate options in top cities
                </span>
            <?php } ?>

            <div class="fp-slider-items">

                <div class="fp-slider-wrapper">
                    <a href="<?php echo site_url('propertylist/index/for_sale'); ?>">
                        <div class="fp-img">
                            <img src="<?php echo base_url(); ?>data/welcome/d_hp_buy.webp" alt="Tat Nay Won Property" />
                        </div>
                        <div class="slider-details">
                            <span>
                                <?php
                                echo ($lang_session) ? "ရောင်းရန် အိမ်ခြံမြေများ" : "Sell Property";
                                ?>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="fp-slider-wrapper">
                    <a href="<?php echo site_url('propertylist/index/for_rent'); ?>">
                        <div class="fp-img">
                            <img src="<?php echo base_url(); ?>data/welcome/sale.jpg" alt="Tat Nay Won Property" />
                        </div>
                        <div class="slider-details">
                            <span>
                                <?php
                                echo ($lang_session) ? "ငှားရန် အိမ်ခြံမြေများ" : "Rent Property";
                                ?>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="fp-slider-wrapper">
                    <a href="<?php echo site_url('propertylist/index/new_properties'); ?>">
                        <div class="fp-img">
                            <img src="<?php echo base_url(); ?>data/welcome/rent.jpg" alt="Tat Nay Won Property" />
                        </div>
                        <div class="slider-details">
                            <span>
                                <?php
                                echo ($lang_session) ? "စီမံကိန်း အသစ်များ" : "New Property";
                                ?>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="fp-slider-wrapper">
                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=&property_type_id=4&price_from=&price_to='); ?>">
                        <div class="fp-img">
                            <img src="<?php echo base_url(); ?>data/welcome/land.jpeg" alt="Tat Nay Won Property" />
                        </div>
                        <div class="slider-details">
                            <span>
                                <?php
                                echo ($lang_session) ? "ရောင်းရန် မြေကွက်များ" : "Lands For Sale";
                                ?>
                            </span>
                        </div>
                    </a>
                </div>


                <div class="fp-slider-wrapper">
                    <a href="<?php echo site_url('home_loan_calculator'); ?>">
                        <div class="fp-img">
                            <img src="<?php echo base_url(); ?>data/welcome/loan.webp" alt="Tat Nay Won Property" />
                        </div>
                        <div class="slider-details">
                            <span>
                                <?php
                                echo ($lang_session) ? "အိမ်ရာချေးငွေ တွက်ချက်ရန်" : "Home Loan Calculator";
                                ?>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="fp-slider-wrapper">
                    <a href="<?php echo site_url('home_loan_application'); ?>">
                        <div class="fp-img">
                            <img src="<?php echo base_url(); ?>data/welcome/d_hp_com_buy.webp" alt="Tat Nay Won Property" />
                        </div>
                        <div class="slider-details">
                            <span>
                                <?php
                                echo ($lang_session) ? "အိမ်ရာချေးငွေ လျှောက်ထားရန်" : "Apply Home Loan";
                                ?>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>