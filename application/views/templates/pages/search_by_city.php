<?php
$lang_session = $this->session->userdata('lang');
?>

<section class="py-5" style="background-color: white; padding: 10px;">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/search_by_township.css">

    <div class="container">
        <div class="section-title ml-4">
            <h3>
                <?php
                echo ($lang_session) ? "ရောင်းရန်" : "For Sale";
                ?>
            </h3>
            <h2 style="font-size: 18px;">
                <?php
                echo ($lang_session) ? "ရန်ကုန်တိုင်းဒေသကြီး" : "Yangon Division";
                ?>
            </h2>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="row justify-content-center">

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_sale&region_id=1&township_id=16&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/1.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px; border-radius: 50%;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "ဒဂုံမြို့သစ်မြောက်ပိုင်း" : "Dagon Myothit(North)";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
    </div>

    <hr>


    <div class="container">
        <div class="section-title ml-4">
            <h3>
                <?php
                echo ($lang_session) ? "ငှားရန်" : "For Rent";
                ?>
            </h3>
            <h2 style="font-size: 18px;">
                <?php
                echo ($lang_session) ? "ရန်ကုန်တိုင်းဒေသကြီး" : "Yangon Division";
                ?>
            </h2>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="row justify-content-center">

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=16&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/9.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px; border-radius: 50%;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "ဒဂုံမြို့သစ်မြောက်ပိုင်း" : "Dagon Myothit(North)";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=31&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/10.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "ဒေါပုံ" : "Dawbon";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=21&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/4.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "လှိုင်" : "Hlaing";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=25&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/12.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "မြောက်ဥက္ကလာ" : "Okkalappa North";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=26&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/13.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "တောင်ဥက္ကလာ" : "Okkalappa South";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=12&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/14.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "တာမွေ" : "Tamwe";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=28&property_type_id=&price_from=&price_to='); ?>">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/15.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "သာကေတ" : "Thaketa";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>

                <a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_rent&region_id=1&township_id=27&property_type_id=&price_from=&price_to='); ?>" class="d-block d-sm-none">
                    <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                        <div class="box shadow">
                            <center>
                                <img src="<?php echo base_url('data/category/16.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                                <br>
                                <small style="font-size: 12px; color: black;">
                                    <?php
                                    echo ($lang_session) ? "သင်္ဃန်းကျွန်း" : "Thingangkuun";
                                    ?>
                                </small>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>