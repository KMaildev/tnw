<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>


<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>

<section id="hero-area" class="parallax-searchs home17 overlay main-search-field" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="background-color: black; padding: 50px; opacity: 0.8;">
                    <form action="<?php echo site_url('category/advance_search'); ?>" method="GET">
                        <div class="row">
                            <div class="col-sm-12 col-md-9 col-lg-9 mb-2">
                                <h2>
                                    <?php 
                                        echo ($lang_session) ? "<span style='font-size: 28px;'>ရောင်းရန်၊ငှားရန်နှင့်ဝယ်ရန်ရှိသော အိမ်ခြံမြေများ</span>" : "<span style='font-size: 18px;'><b>Let's search to sell, buy, rent the property that's perfect for you.</b></span>";
                                     ?>
                                </h2>
                            </div>

                            <!--Num 0.1-->
                        </div>

                        <div class="row">

                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="at-col-default-mar" >
                                    <input class="at-input" type="text" name="keyword" placeholder="<?php echo ($lang_session) ? "စာသား (သို့) ကြော်ငြာနံပါတ်" : "Search by Text (or) Ad ID Number"; ?>" autocomplete="off" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select name="propertie_type" style="color: black;">
                                        <option value="for_sale" selected>
                                            <?php 
                                                if ($lang_session) {
                                                   echo "ရောင်းရန်";
                                                }else{
                                                    echo "For Sale";
                                                }
                                             ?>
                                        </option>
                                         <option value="for_rent">
                                            <?php 
                                                if ($lang_session) {
                                                   echo "ငှားရန်";
                                                }else{
                                                    echo "For Rent";
                                                }
                                             ?>
                                        </option>
                                        <option value="new_properties">
                                            <?php 
                                                if ($lang_session) {
                                                   echo "ကြိုပွိုင့်";
                                                }else{
                                                    echo "New Properties";
                                                }
                                             ?>
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select class="div-toggle" data-target=".my-info-1" id="Region" name="region_id" style="color: black;">
                                        <option value="" data-show=".acitveon" selected>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "ဒေသအားလုံး";
                                                }else{
                                                    echo "All Regions";
                                                }
                                             ?>
                                        </option>
                                        <?php 
                                            foreach ($data_regions as $data_region) {
                                         ?>
                                        <option value="<?php echo $data_region->region_id; ?>" data-show=".rent">
                                            <?php 
                                                if ($lang_session) {
                                                    echo $data_region->region_mm;
                                                }else{
                                                    echo $data_region->region;
                                                }
                                             ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox" id="TownshipData">
                                    <select class="div-toggle" data-target=".my-info-1" style="color: black;">
                                        <option value="" data-show=".acitveon" selected>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "မြို့နယ်အားလုံး";
                                                }else{
                                                    echo "Any Township";
                                                }
                                             ?>
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select class="div-toggle" data-target=".my-info-1" name="property_type_id" style="color: black;">
                                       <?php 
                                            foreach ($data_property_types as $data_property_type) {
                                         ?>
                                        <option value="<?php echo $data_property_type->property_type_id; ?>">
                                            <?php 
                                                if ($lang_session) {
                                                    echo $data_property_type->property_type_mm;
                                                }else{
                                                    echo $data_property_type->property_type;
                                                }
                                            ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select name="price_from" style="color: black;">
                                        <option value="" selected>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "ဈေးနှုန်း (သိန်း)";
                                                }else{
                                                    echo "Price Min";
                                                }
                                             ?>
                                        </option>
                                        <option value="100">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "100 (သိန်း)";
                                                }else{
                                                    echo "100 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="200">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "200 (သိန်း)";
                                                }else{
                                                    echo "200 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="300">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "300 (သိန်း)";
                                                }else{
                                                    echo "300 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="400">
                                            <?php 
                                                if ($lang_session) {
                                                     echo "400 (သိန်း)";
                                                }else{
                                                    echo "400 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "500 (သိန်း)";
                                                }else{
                                                    echo "500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="600">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "600 (သိန်း)";
                                                }else{
                                                    echo "600 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="700">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "700 (သိန်း)";
                                                }else{
                                                    echo "700 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="800">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "800 (သိန်း)";
                                                }else{
                                                    echo "800 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="900">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "9000 (သိန်း)";
                                                }else{
                                                    echo "9000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="1000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "1000 (သိန်း)";
                                                }else{
                                                    echo "1000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="1500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "1500 (သိန်း)";
                                                }else{
                                                    echo "1500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="2000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "2000 (သိန်း)";
                                                }else{
                                                    echo "2000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="2500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "2500 (သိန်း)";
                                                }else{
                                                    echo "2500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="3000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "3000 (သိန်း)";
                                                }else{
                                                    echo "3000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="3500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "3500 (သိန်း)";
                                                }else{
                                                    echo "3500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="4000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "4000 (သိန်း)";
                                                }else{
                                                    echo "4000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="4500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "4500 (သိန်း)";
                                                }else{
                                                    echo "4500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="5000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "5000 (သိန်း)";
                                                }else{
                                                    echo "5000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="6000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "6000 (သိန်း)";
                                                }else{
                                                    echo "6000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="7000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "7000 (သိန်း)";
                                                }else{
                                                    echo "7000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="8000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "8000 (သိန်း)";
                                                }else{
                                                    echo "8000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="9000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "9000 (သိန်း)";
                                                }else{
                                                    echo "9000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="10000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "10000 (သိန်း)";
                                                }else{
                                                    echo "10000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="15000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "15000 (သိန်း)";
                                                }else{
                                                    echo "15000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="30000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "30000 (သိန်း)";
                                                }else{
                                                    echo "30000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="500000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "500000 (သိန်း)";
                                                }else{
                                                    echo "500000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                                                </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select name="price_to" style="color: black;">
                                        <option value="" selected>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "ဈေးနှုန်း (အတွင်း)";
                                                }else{
                                                    echo "Price Max";
                                                }
                                             ?>
                                        </option>
                                        <option value="100">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "100 (သိန်း)";
                                                }else{
                                                    echo "100 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="200">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "200 (သိန်း)";
                                                }else{
                                                    echo "200 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="300">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "300 (သိန်း)";
                                                }else{
                                                    echo "300 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="400">
                                            <?php 
                                                if ($lang_session) {
                                                     echo "400 (သိန်း)";
                                                }else{
                                                    echo "400 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "500 (သိန်း)";
                                                }else{
                                                    echo "500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="600">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "600 (သိန်း)";
                                                }else{
                                                    echo "600 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="700">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "700 (သိန်း)";
                                                }else{
                                                    echo "700 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="800">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "800 (သိန်း)";
                                                }else{
                                                    echo "800 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="900">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "9000 (သိန်း)";
                                                }else{
                                                    echo "9000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="1000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "1000 (သိန်း)";
                                                }else{
                                                    echo "1000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="1500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "1500 (သိန်း)";
                                                }else{
                                                    echo "1500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="2000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "2000 (သိန်း)";
                                                }else{
                                                    echo "2000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="2500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "2500 (သိန်း)";
                                                }else{
                                                    echo "2500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="3000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "3000 (သိန်း)";
                                                }else{
                                                    echo "3000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="3500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "3500 (သိန်း)";
                                                }else{
                                                    echo "3500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="4000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "4000 (သိန်း)";
                                                }else{
                                                    echo "4000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="4500">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "4500 (သိန်း)";
                                                }else{
                                                    echo "4500 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="5000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "5000 (သိန်း)";
                                                }else{
                                                    echo "5000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="6000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "6000 (သိန်း)";
                                                }else{
                                                    echo "6000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="7000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "7000 (သိန်း)";
                                                }else{
                                                    echo "7000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="8000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "8000 (သိန်း)";
                                                }else{
                                                    echo "8000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="9000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "9000 (သိန်း)";
                                                }else{
                                                    echo "9000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="10000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "10000 (သိန်း)";
                                                }else{
                                                    echo "10000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="15000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "15000 (သိန်း)";
                                                }else{
                                                    echo "15000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="30000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "30000 (သိန်း)";
                                                }else{
                                                    echo "30000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                        <option value="500000">
                                            <?php 
                                                if ($lang_session) {
                                                    echo "500000 (သိန်း)";
                                                }else{
                                                    echo "500000 (Lakh)";
                                                }
                                             ?>
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="at-col-default-mar">
                                    <button class="btn btn-default hvr-bounce-to-right" type="submit">
                                        <i class="fa fa-search"></i>
                                        <?php 
                                            if ($lang_session) {
                                                echo "<span style='font-size: 17px; font-weight: bold;'>ရှာဖွေပါ</span>";
                                            }else{
                                                echo "Search";
                                            }
                                         ?>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <?php $this->load->view('templates/shared/search_by_category'); ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>


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


<div class="py-5" style="background-color: #f6fcff;" hidden="">
    <div class="container">
        <div style="margin: 30px 10px 10px;">
            <?php 
                $i = 0;
                foreach ($home_page_agents as $home_page_agent) {
                    $i++;
                    if ($i == 11) {
                        break;
                    }

                    if ($home_page_agent->logo == '') {
                        continue;
                    }
             ?>
            <a href="<?php echo site_url('agents/detail/'.$home_page_agent->user_id); ?>" title="<?php echo $home_page_agent->company_name; ?>" style="margin-right: 3px;">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $home_page_agent->logo; ?>" style="width: 120px; height: 120px; border: 1px solid #555;">
            </a>
            <?php } ?>
        </div>
    </div>
</div>



<section class="recently portfolio bg-white-1 home18">
    <div class="container-fluid">
        <div class="section-title ml-4">
            <h3>Featured Properties</h3>
            <h2>
                <?php 
                    if ($lang_session) {
                        echo "ရောင်းရန်အိမ်ခြံမြေများ";
                    }else{
                        echo "For Sale";
                    }
                 ?>
            </h2>
        </div>
        <div class="portfolio col-xl-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php 
                    if (!$for_sale_properties) {
                        echo "<b>Data not found</b>";
                    }
                 ?>
            </div>
            <div class="slick-lancers">
                <?php 
                    foreach ($for_sale_properties as $propertie) {
                 ?>
                    <div class="agents-grid">
                        <div class="landscapes" style="height: auto;">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">
                                                <?php echo $propertie->ad_number; ?>
                                            </div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "For Sale";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "For Rent";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "New Properties";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "By Owner For  Sale";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "By Owner For  Rent";
                                                    }else{
                                                        echo "Tat Nay Won";
                                                    }
                                                ?>
                                            </div>
                                            <div class="homes-price">
                                                <?php echo $propertie->property_type_mm; ?>
                                            </div>
                                            <?php if ($propertie->photo == '') { ?>
                                                <?php 
                                                    if ($propertie->user_info_id == 0) {
                                                 ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 200px;">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-external-link-alt"></i></a>

                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <?php 
                                                echo ($lang_session) ? $propertie->title_mm : $propertie->title_eng;
                                             ?>
                                        </a>
                                    </h3>
                                    <p class="homes-address mb-3">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span>
                                                <?php 
                                                    echo ($lang_session) ? $propertie->region_mm : $propertie->region;
                                                 ?>
                                                |
                                                <?php 
                                                    echo ($lang_session) ? $propertie->townships_mm : $propertie->townships;
                                                 ?>
                                            </span>
                                        </a>
                                    </p>
                                    <hr>
                                    <ul class="homes-list clearfix">

                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>
                                                <?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?>
                                            </span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>
                                                <?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <?php 
                                                    if ($propertie->price_type == 'MMK(Lakhs)') {
                                                        echo number_format($propertie->price);
                                                        echo " သိန်း (ကျပ်)";
                                                    }elseif ($propertie->price_type == 'USD') {
                                                        echo number_format($propertie->price);
                                                        echo " ";
                                                        echo $propertie->price_type;
                                                    }
                                                 ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <hr>

                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> 
                                        <i class="fa fa-info-circle text-white"></i> 
                                        <span style="font-size: 13px;">
                                            <?php echo ($lang_session) ? "အသေးစိတ်ကြည့်ရန်" : "View Detail"; ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>



<section class="featured portfolio home18 bg-white-3" hidden="">
    <div class="container-fluid">
        <div class="section-title ml-4">
            <h3>Featured Properties</h3>
            <h2>
                 <?php 
                    if ($lang_session) {
                        echo "ငှားရန်အိမ်ခြံမြေများ";
                    }else{
                        echo "For Rent";
                    }
                 ?>
            </h2>
        </div>
        <div class="portfolio col-xl-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php 
                    if (!$for_rent_properties) {
                        echo "<b>Data not found</b>";
                    }
                 ?>
            </div>
            <div class="slick-lancers">
                <?php 
                    foreach ($for_rent_properties as $propertie) {
                        if ($lang_session) {
                 ?>
                    <div class="agents-grid">
                        <div class="landscapes" style="height: 570px;">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "For Sale";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "For Rent";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "New Properties";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "By Owner For  Sale";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "By Owner For  Rent";
                                                    }else{
                                                        echo "Tat Nay Won";
                                                    }
                                                ?>
                                            </div>
                                            <div class="homes-price">
                                                <?php echo $propertie->property_type_mm; ?>
                                            </div>
                                            <?php if ($propertie->photo == '') { ?>
                                                <?php 
                                                    if ($propertie->user_info_id == 0) {
                                                 ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 200px;">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-external-link-alt"></i></a>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                        <?php echo $propertie->title_mm; ?>
                                        </a>
                                    </h3>
                                    <p class="homes-address mb-3">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span>
                                                <?php echo $propertie->region_mm; ?>
                                                |
                                                <?php echo $propertie->townships_mm; ?>
                                            </span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">

                                        <li>
                                            <i class="fa fa-barcode" aria-hidden="true"></i>
                                            <span><?php echo $propertie->ad_number; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>
                                                <?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?> </span>
                                        </li>

                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <?php 
                                                    if ($propertie->price_type == 'MMK(Lakhs)') {
                                                        echo number_format($propertie->price);
                                                        echo " သိန်း (ကျပ်)";
                                                    }elseif ($propertie->price_type == 'USD') {
                                                        echo number_format($propertie->price);
                                                        echo " ";
                                                        echo $propertie->price_type;
                                                    }
                                                 ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <hr>
                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> 
                                        <i class="fa fa-info-circle text-white"></i> အသေးစိတ် ကြည့်ပါ
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a><span class="category">Real Estate</span></h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "For Sale";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "For Rent";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "New Properties";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "By Owner For  Sale";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "By Owner For  Rent";
                                                    }else{
                                                        echo "Tat Nay Won";
                                                    }
                                                ?>
                                            </div>
                                            <div class="homes-price">
                                                <?php echo $propertie->property_type; ?>
                                            </div>
                                            <?php if ($propertie->photo == '') { ?>
                                                <?php 
                                                    if ($propertie->user_info_id == 0) {
                                                 ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 200px;">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-external-link-alt"></i></a>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                        <?php echo $propertie->title_eng; ?>
                                        </a>
                                    </h3>
                                    <p class="homes-address mb-3">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span>
                                                <?php echo $propertie->region; ?>
                                                |
                                                <?php echo $propertie->townships; ?>
                                            </span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-barcode" aria-hidden="true"></i>
                                            <span><?php echo $propertie->ad_number; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>
                                                <?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?> </span>
                                        </li>

                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <?php echo number_format($propertie->price); ?>
                                                <?php echo $propertie->price_type; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <hr>
                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> 
                                        <i class="fa fa-info-circle text-white"></i> 
                                        View Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</section>

<section class="recently portfolio bg-white-1 home18" hidden="">
    <div class="container-fluid">
        <div class="section-title ml-4">
            <h3>Featured Properties</h3>
            <h2>
                <?php 
                    if ($lang_session) {
                        echo "အိမ်ခြံမြေကြိုပွိုင့်များ";
                    }else{
                        echo "New Properties";
                    }
                 ?>
            </h2>
        </div>
        <div class="portfolio col-xl-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php 
                    if (!$new_homepage_properties) {
                        echo "<b>Data not found</b>";
                    }
                 ?>
            </div>
            <div class="slick-lancers">
                <?php 
                    foreach ($new_homepage_properties as $propertie) {
                        if ($lang_session) {
                 ?>
                    <div class="agents-grid">
                        <div class="landscapes" style="height: 570px;">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "For Sale";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "For Rent";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "New Properties";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "By Owner For  Sale";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "By Owner For  Rent";
                                                    }else{
                                                        echo "Tat Nay Won";
                                                    }
                                                ?>
                                            </div>
                                            <div class="homes-price">
                                                <?php echo $propertie->property_type_mm; ?>
                                            </div>
                                            <?php if ($propertie->photo == '') { ?>
                                                <?php 
                                                    if ($propertie->user_info_id == 0) {
                                                 ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 200px;">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-external-link-alt"></i></a>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                        <?php echo $propertie->title_mm; ?>
                                        </a>
                                    </h3>
                                    <p class="homes-address mb-3">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span>
                                                <?php echo $propertie->region_mm; ?>
                                                |
                                                <?php echo $propertie->townships_mm; ?>
                                            </span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">

                                        <li>
                                            <i class="fa fa-barcode" aria-hidden="true"></i>
                                            <span><?php echo $propertie->ad_number; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>
                                                <?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?> </span>
                                        </li>

                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <?php 
                                                    if ($propertie->price_type == 'MMK(Lakhs)') {
                                                        echo number_format($propertie->price);
                                                        echo " သိန်း (ကျပ်)";
                                                    }elseif ($propertie->price_type == 'USD') {
                                                        echo number_format($propertie->price);
                                                        echo " ";
                                                        echo $propertie->price_type;
                                                    }
                                                 ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <hr>
                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> 
                                        <i class="fa fa-info-circle text-white"></i> အသေးစိတ် ကြည့်ပါ
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a><span class="category">Real Estate</span></h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "For Sale";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "For Rent";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "New Properties";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "By Owner For  Sale";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "By Owner For  Rent";
                                                    }else{
                                                        echo "Tat Nay Won";
                                                    }
                                                ?>
                                            </div>
                                            <div class="homes-price">
                                                <?php echo $propertie->property_type; ?>
                                            </div>
                                            <?php if ($propertie->photo == '') { ?>
                                                <?php 
                                                    if ($propertie->user_info_id == 0) {
                                                 ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 200px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 200px;">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-external-link-alt"></i></a>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                        <?php echo $propertie->title_eng; ?>
                                        </a>
                                    </h3>
                                    <p class="homes-address mb-3">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span>
                                                <?php echo $propertie->region; ?>
                                                |
                                                <?php echo $propertie->townships; ?>
                                            </span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-barcode" aria-hidden="true"></i>
                                            <span><?php echo $propertie->ad_number; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>
                                                <?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?> </span>
                                        </li>

                                    </ul>
                                    <!-- Price -->
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <?php echo number_format($propertie->price); ?>
                                                <?php echo $propertie->price_type; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <hr>
                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> 
                                        <i class="fa fa-info-circle text-white"></i> 
                                        View Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</section>


<section class="recently portfolio home19" style="background-color: white;">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/search_by_township.css">
    <div class="container-fluid">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=16&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=31&property_type_id=3&price_from=&price_to='); ?>">
                        <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                            <div class="box shadow">
                                <center>
                                    <img src="<?php echo base_url('data/category/2.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=21&property_type_id=3&price_from=&price_to='); ?>">
                        <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                            <div class="box shadow">
                                <center>
                                    <img src="<?php echo base_url('data/category/3.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=25&property_type_id=3&price_from=&price_to='); ?>">
                        <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                            <div class="box shadow">
                                <center>
                                    <img src="<?php echo base_url('data/category/11.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=26&property_type_id=3&price_from=&price_to='); ?>">
                        <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                            <div class="box shadow">
                                <center>
                                    <img src="<?php echo base_url('data/category/5.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=12&property_type_id=3&price_from=&price_to='); ?>">
                        <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                            <div class="box shadow">
                                <center>
                                    <img src="<?php echo base_url('data/category/8.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=28&property_type_id=3&price_from=&price_to='); ?>">
                        <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                            <div class="box shadow">
                                <center>
                                    <img src="<?php echo base_url('data/category/7.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_sale&region_id=1&township_id=27&property_type_id=3&price_from=&price_to='); ?>">
                        <div class="row justify-content-center" style="margin: 3px; padding: 10px;">
                            <div class="box shadow">
                                <center>
                                    <img src="<?php echo base_url('data/category/6.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
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
    <hr>
    <div class="container-fluid">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=16&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=31&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=21&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=25&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=26&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=12&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=28&property_type_id=3&price_from=&price_to='); ?>">
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

                    <a href="<?php echo site_url('category/advance_search?keyword=&propertie_type=for_rent&region_id=1&township_id=27&property_type_id=3&price_from=&price_to='); ?>">
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


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/update/news.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/update/news_one.css">

<div class="container">
    <div id="ContentPlaceHolder1_divUpdates" class="margin-bottom30">
        <div class="text-center margin-bottom20 py-3">
            <h4>
                <?php 
                    echo ($lang_session) ? "နောက်ဆုံးရသတင်းများ" : "Latest News";
                 ?>
            </h4>
            <div class="bordercaption"></div>
        </div>

        <?php 
            foreach ($recent_latest_news as $recent_latest_new) {
                $upload_date = explode(',', $recent_latest_new->upload_date);
                $month = $upload_date[0];
                $day   = $upload_date[1];
                $year   = $upload_date[2];
         ?>
        <div class="margin-bottom20">
            <div class="calendar-box edit-cdr">
                <div class="month">
                    <?php echo $month; ?>
                    <?php echo $year; ?>
                </div>
                <div class="date">
                    <b><?php echo $day; ?></b>
                </div>
            </div>
            <div class="update-info">
                <a class="wraptext" aria-label="Update" href="<?php echo site_url('latest_news/show/'.$recent_latest_new->news_id); ?>">
                    <b>
                        <?php echo $recent_latest_new->title; ?>
                    </b>
                </a>
            </div>
        </div>
        <?php } ?>

        <center>
            <a href="<?php echo site_url('latest_news'); ?>" class="btn btn-danger btn-sm">View All</a> <br><br>
        </center>
        
        
        <div class="recent-pos" style="background-color: white; width: 100%;">
            <div class="recent-main">
                <div class="recent-img" style="padding: 10px;">
                    <img src="<?php echo base_url(); ?>data/save.svg" style="width: 100%;">
                </div>
                <div class="info-img" style="padding: 20px;">
                    <h6>Property Request</h6>
                    <p>
                        Did you find the property you want? <br>
                        Please tell us the buying/selling and rent property you were looking for. 
                        I will use it as a reference for the property to be released next.
                    </p>
                    <a href="<?php echo site_url('propertyrequest'); ?>" class="btn btn-md btn-default">
                        <span style="color: white;">
                          <i class="fa fa-home"></i>  Property Request
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>


<br><br>


<section class="counterup" hidden="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left"><?php echo number_format($total_sale); ?></p>
                        <h3>For Sale</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-city" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left"><?php echo number_format($total_rent); ?></p>
                        <h3>For Rent</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0">
                    <i class="fa fa-laptop-house" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left"><?php echo number_format($total_new_properties); ?></p>
                        <h3>New Properties</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0 last">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">
                            <?php 
                                $total_owner = $total_owner_sale + $total_owner_rent;
                                echo number_format($total_owner);
                             ?>
                        </p>
                        <h3>By Owner</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
