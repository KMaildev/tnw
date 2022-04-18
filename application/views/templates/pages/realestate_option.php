<?php 
    $lang_session = $this->session->userdata('lang'); 
?>
<section class="popular-places">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo site_url('propertylist/index/for_sale'); ?>" class="img-box hover-effect">
                    <img src="<?php echo base_url(); ?>data/welcome/sale.jpg" class="img-responsive" alt="">
                    <div class="listing-badges">
                        <span class="featured">Sale</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>
                            <?php 
                                echo ($lang_session) ? "ရောင်းရန် အိမ်ခြံမြေများ" : "Sell Property";
                            ?>
                        </h4>
                        <span>
                            <?php 
                                echo ($lang_session) ? "<span>ကောင်းမွန်သော အိမ်ခြံမြေပိုင်ဆိုင်နိုင်ဖို့ရန် ကူညီပေးနေပါသည်။</span>" : "We can help you navigate a successful sale.";
                            ?>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo site_url('propertylist/index/for_rent'); ?>" class="img-box hover-effect">
                    <img src="<?php echo base_url(); ?>data/welcome/rent.jpg" class="img-responsive" alt="">
                    <div class="listing-badges">
                        <span class="featured">Rent</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>
                            <?php 
                                echo ($lang_session) ? "ငှားရန် အိမ်ခြံမြေများ" : "Rent Property";
                            ?>
                        </h4>
                        <span>
                            <?php 
                                echo ($lang_session) ? "<span>အိမ်ငှားဖို့ရန်အတွက် အိမ်ခြံမြေအမျိုးအစားစုံလင်စွာ ရှာဖွေနိုင်ပါသည်။</span>" : "We’re creating a seamless online experience on the largest rental network.";
                            ?>

                        </span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo site_url('propertylist/index/new_properties'); ?>" class="img-box hover-effect">
                    <img src="<?php echo base_url(); ?>data/welcome/new.jpg" class="img-responsive" alt="">
                    <div class="listing-badges">
                        <span class="featured">New</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>
                            <?php 
                                echo ($lang_session) ? "စီမံကိန်း အသစ်များ" : "New Property";
                            ?>
                        </h4>
                        <span>
                            <?php 
                                echo ($lang_session) ? "<span>အိမ်ရာစီမံကိန်းအသစ်များကို ရွေးချယ်နိုင်ပါသည်။</span>" : "Choose from a wide variety of new properties.";
                            ?>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6">
                <!-- Image Box -->
                <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=&property_type_id=4&price_from=&price_to='); ?>" class="img-box hover-effect">
                    <img src="<?php echo base_url(); ?>data/welcome/land.jpg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4>
                            <?php 
                                echo ($lang_session) ? "ရောင်းရန် မြေကွက်များ" : "Lands For Sale";
                            ?>
                        </h4>
                        <span>
                            
                            <?php 
                                echo ($lang_session) ? "<span>ကောင်းမွန်သောမြေကွက်များပိုင်ဆိုင်နိုင်ဖို့ရန် ကူညီပေးနေပါသည်။</span>" : "We can help to possess the great land.";
                            ?>
                        </span>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <!-- Image Box -->
                <a href="<?php echo site_url('home_loan_application'); ?>" class="img-box hover-effect no-mb x3">
                    <img src="<?php echo base_url(); ?>data/welcome/loan.webp" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Home Loan</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>
                            <?php 
                                echo ($lang_session) ? "အိမ်ရာချေးငွေ လျှောက်ထားရန်" : "Apply Home Loan";
                            ?>
                        </h4>
                        <span>
                            <?php 
                                echo ($lang_session) ? "<span>ဘဏ်များစွာဖြင့်အိမ်ရာချေးငွေကိုလျှောက်ထားနိုင်ပါသည်။</span>" : "Apply now with multiple home loan banks.";
                            ?>
                        </span>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</section>