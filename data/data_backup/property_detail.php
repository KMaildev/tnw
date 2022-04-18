<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/qrcode/qrcode.js"></script>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>

<?php 
    if ($data_detail) {
 ?>
<section class="single-proper blog details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <div class="row">
                    <?php $this->load->view('templates/shared/links'); ?>
                    <div class="col-md-12">
                        <br>
                        <?php 
                            if ($data_detail->soldout_status == 1) {
                         ?>
                         <div class="alert alert-danger text-center" role="alert"> <i class="fa fa-warning"></i> &nbsp;<br>This ad has gone out to sold advertising he noted.<br>&nbsp; </div>
                        <?php } ?>

                        <?php $this->load->view('templates/shared/alert_message'); ?>
                        
                        
                        
                        <h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;" >
                            <?php 
                                if ($lang_session) {
                                   echo $data_detail->title_mm == '' ? $data_detail->title_eng : $data_detail->title_mm;
                                }else{
                                    echo $data_detail->title_eng == '' ? $data_detail->title_mm : $data_detail->title_eng;
                                }
                             ?>
                        </h3>
 
                        <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30" >
                            <h5 class="mb-4">
                                <?php 
                                    if ($lang_session) {
                                        echo "အိမ်ခြံမြေပုံများ";
                                    }else{
                                        echo "Properties' Image";
                                    }
                                 ?>
                            </h5>
                            <div class="carousel-inner">

                                <?php if ($data_photos == NULL) { ?>
                                    <img src="<?php echo base_url(); ?>data/default.png" class="img-fluid" alt="">
                                <?php }else{ ?>
                                        <div class="col-md-12">
                                    <?php 
                                        $i = 0;
                                        foreach ($data_photos as $data_photo) {
                                            $i++;
                                     ?>
                                            <div class="<?php print ($i == 1) ? "active" : ""; ?> item carousel-item" data-slide-number="<?php echo $i; ?>">
                                                <a class="popup-img" href="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>">
                                                    <img class="img-fluid w100" src="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>" alt="">
                                                </a>
                                            </div>
                                    <?php } ?>
                                        </div>
                                <?php } ?>

                                <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                            </div>
                            <!-- main slider carousel nav controls -->
                            <!-- <ul class="carousel-indicators smail-listing list-inline nav nav-justified">
                                <?php 
                                    $i = 0;
                                    foreach ($data_photos as $data_photo) {
                                        $i++;
                                 ?>
                                   <?php if ($i == 1) { ?>
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                            <img src="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                   <?php }else{ ?>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-<?php echo $i - 1; ?>" data-slide-to="<?php echo $i - 1; ?>" data-target="#listingDetailsSlider">
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                   <?php } ?>
                                <?php } ?>
                            </ul> -->
                            <!-- main slider carousel items -->
                        </div>

                        <div class="blog-info details mb-30 ">
                            <div class="row p-b-10 lh-1-5 b-b b-grey">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <?php 
                                        if ($lang_session) {
                                            echo $data_detail->post_upload_date;
                                            echo "<small style='font-size: 15px;'> တွင်ကြော်ငြာတင်ခဲ့သည်</small>";
                                        }else{
                                            echo "Posted On ";
                                            echo $data_detail->post_upload_date;
                                        }
                                     ?>
                                </div>

                                <div class="col-md-6 text-right">
                                    <?php 
                                        if ($lang_session) {
                                            echo $data_detail->viewer_count;
                                            echo "<small style='font-size: 15px;'> ကြိမ် ကြည့်ရှု့ပြီ</small>";
                                        }else{
                                            echo "Views ";
                                            echo "<b>". $data_detail->viewer_count ."</b>";
                                        }
                                     ?>  |   
                                    <?php 
                                        if ($lang_session) {
                                            echo "<small style='font-size: 15px;'>ကြော်ငြာအမှတ်</small>";
                                        }else{
                                            echo "Ad Number";
                                        }
                                     ?> &nbsp;
                                    <strong>
                                        <?php echo $data_detail->ad_number; ?>
                                   </strong>
                                </div>
                            </div>
                            <hr>
                            <h5 class="mb-4">
                                <?php 
                                    if ($lang_session) {
                                        echo "ဖော်ပြချက်";
                                    }else{
                                        echo "Description";
                                    }
                                 ?>
                            </h5>
                            <p class="mb-3">
                                <?php 
                                    if ($lang_session) {
                                        echo $data_detail->description_mm;
                                    }else{
                                        echo $data_detail->description_eng;
                                    }
                                 ?>
                            </p>
                        </div>

                    </div>
                </div>
                <div class=" homes-content details mb-30">
                    <!-- title -->
                    <h5 class="mb-4">
                        <?php 
                            if ($lang_session) {
                                echo "အိမ်ခြံမြေဆိုင်ရာအသေးစိတ်အချက်အလက်များ";
                            }else{
                                echo "Property Details";
                            }
                         ?>
                    </h5>

                    <ul class="homes-list clearfix">
                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                                <?php 
                                    if ($lang_session) {
                                        echo $data_detail->townships_mm;
                                        echo " ";
                                        echo $data_detail->region_mm;
                                    }else{
                                        echo $data_detail->townships;
                                        echo " ";
                                        echo $data_detail->region;
                                    }
                                ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                                <?php 
                                    if ($lang_session) {
                                       if ($data_detail->price_type == 'MMK(Lakhs)') {
                                            echo number_format($data_detail->price);
                                            echo " သိန်း (ကျပ်)";
                                        }elseif ($data_detail->price_type == 'USD') {
                                            echo number_format($data_detail->price);
                                            echo " ";
                                            echo $data_detail->price_type;
                                        }
                                    }else{
                                        echo number_format($data_detail->price);
                                        echo " ";
                                        echo $data_detail->price_type;
                                    }
                         
                                 ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                <?php 
                                    if ($lang_session) {
                                        echo $data_detail->property_type_mm;
                                    }else{
                                        echo $data_detail->property_type;
                                    }
                                 ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Area : 
                                <?php 
                                    echo $data_detail->area;
                                    echo " ";
                                    echo $data_detail->area_type;
                                 ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                Bedroom : 
                                <?php echo $data_detail->bead_room == '' ? "No" : $data_detail->bead_room; ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-shower" aria-hidden="true"></i>
                                Bath Room : 
                                <?php echo $data_detail->bathroom == '' ? "No" : $data_detail->bathroom; ?>
                            </p>
                        </li>

                        <li title="Room">
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Room : 
                                <?php echo $data_detail->rooms == '' ? "No" : $data_detail->rooms; ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Shrine Room :
                                <?php echo $data_detail->shrine_room == '' ? "No" : $data_detail->shrine_room; ?>
                            </p>
                        </li>
                        

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Dining Room :
                                <?php echo $data_detail->dining_room == '' ? "No" : $data_detail->dining_room; ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Living Room :
                                <?php echo $data_detail->living_room == '' ? "No" : $data_detail->living_room; ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Other Room : 
                                <?php echo $data_detail->other_room == '' ? "No" : $data_detail->other_room; ?>
                            </p>
                        </li>


                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Floor : 
                                <?php echo $data_detail->floor == '' ? "Null" : $data_detail->floor; ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Building Year : 
                                <?php echo $data_detail->year_built == '' ? "Null" : $data_detail->year_built; ?>
                            </p>
                        </li>

                        <li>
                            <p style="color: black; font-size: 15px; font-weight: bold;">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                <?php 
                                    if ($lang_session) {
                                        if ($data_detail->property_status == 'Fully Furnished') {
                                            echo "ပရိဘောဂအပြည့်အစုံ";
                                        }elseif($data_detail->property_status == 'Hall') {
                                            echo "ခန်းမ";
                                        }
                                    }else{
                                       echo $data_detail->property_status;
                                    }
                                 ?>
                            </p>
                        </li>

                    </ul>
                    <h5 class="mt-5">
                        <?php 
                            if ($lang_session) {
                                echo "SHARE AGENT FEE";
                            }else{
                                echo "SHARE AGENT FEE";
                            }
                        ?>
                    </h5>
                    <ul class="homes-list clearfix">
                        <li>
                           <i class="fa fa-users" aria-hidden="true"></i>
                            <span>
                                <?php
                                    echo $data_detail->share_agent_fee;
                                ?>
                            </span>
                        </li>
                    </ul>

                    <br>
                    <!-- title -->
                    <h5 class="mt-5">
                        <?php 
                            if ($lang_session) {
                                echo "ဘဏ်အရစ်ကျ";
                            }else{
                                echo "Installment";
                            }
                        ?>
                    </h5>
                    <ul class="homes-list clearfix">
                        <li>
                           <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>
                                <?php 
                                    if ($lang_session) {
                                        if ($data_detail->installment == 'No') {
                                            echo "ဘဏ်အရစ်ကျ မရပါ";
                                        }elseif ($data_detail->installment == 'Yes') {
                                            echo "ဘဏ်အရစ်ကျ ရပါသည်";
                                        }
                                    }else{
                                        if ($data_detail->installment == 'No') {
                                            echo $data_detail->installment;
                                        }elseif ($data_detail->installment == 'Yes') { ?>
                                            Yes
                                            <img style="width: 23%; padding: 2px; border: 1px solid #c77b22;" src="<?php echo base_url(); ?>data/bank/yoma.png" >
                                            <img style="width: 23%; padding: 2px;  border: 1px solid #c77b22;" src="<?php echo base_url(); ?>data/bank/kbz.png">
                                            <img style="width: 23%; padding: 2px;  border: 1px solid #c77b22;" src="<?php echo base_url(); ?>data/bank/aya.png">

                                        <?php } ?>
                                <?php } ?>
                            </span>
                        </li>
                    </ul>

                   <span hidden="">
                       <i class="fa fa-arrow-circle-right" style="color: black; font-size: 18px;">
                       Get personalized home loan offers in minutes. <a href="<?php echo site_url('home_loan_calculator'); ?>">Explore Now</a>
                        </i> 
                   </span>
                   <?php 
                        if ($data_detail->swimming_pool != NULL || $data_detail->securit != NULL || $data_detail->air_conditioning != NULL || $data_detail->wifi != NULL || $data_detail->balcony != NULL || $data_detail->dishwasher != NULL || $data_detail->generator != NULL || $data_detail->near_church != NULL || $data_detail->gym != NULL || $data_detail->lift != NULL || $data_detail->play_ground != NULL || $data_detail->water_heater != NULL || $data_detail->cctv != NULL || $data_detail->car_parking != NULL) {
                    ?>
                   <br><br>
                    <h5 class="mt-5">
                        <?php 
                            if ($lang_session) {
                                echo "ပါဝင်သည်";
                            }else{
                                echo "inclusion";
                            }
                         ?>
                    </h5>
                    <ul class="homes-list clearfix">
                        <?php
                            if ($data_detail->swimming_pool != NULL) { ?>
                                <li>
                                   <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ရေကူးကန်";
                                            }else{
                                                echo "Swimming pool";
                                            }
                                         ?>
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->securit != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "၂၄ နာရီလုံခြုံရေး";
                                            }else{
                                                echo "24 hrs Security";
                                            }
                                         ?>
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->air_conditioning != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "လေအေးပေးစနစ်";
                                            }else{
                                                echo "Air conditioning";
                                            }
                                         ?>
                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->wifi != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "Wifi";
                                            }else{
                                                echo "Wifi";
                                            }
                                         ?>
                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->balcony != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                         <?php 
                                            if ($lang_session) {
                                                echo "လသာဆောင်";
                                            }else{
                                                echo "Balcony";
                                            }
                                         ?>
                                     
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->dishwasher != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ပန်းကန်ဆေးစက်";
                                            }else{
                                                echo "Dishwasher";
                                            }
                                         ?>
                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->generator != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "မီးစက္";
                                            }else{
                                                echo "Generator";
                                            }
                                         ?>
                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->near_church != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ဘုရားကျောင်းအနီး";
                                            }else{
                                                echo "Near Church";
                                            }
                                         ?>
                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->garden != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ဥယျာဉ်တော်";
                                            }else{
                                                echo "Garden";
                                            }
                                         ?>
                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->gym != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "အားကစားရုံ";
                                            }else{
                                                echo "Gym";
                                            }
                                         ?>

                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->lift != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ဓါတ်လှေခါး";
                                            }else{
                                                echo "Lift";
                                            }
                                         ?>
                                     
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->play_ground != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ကစားကွင်း";
                                            }else{
                                                echo "Playground";
                                            }
                                         ?>
                                        
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->water_heater != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ရေအပူပေးစက်";
                                            }else{
                                                echo "Water Heater";
                                            }
                                         ?>
                                    
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->cctv != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                       CCTV
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->car_parking != NULL) { ?>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        Car Parking
                                    </span>
                                </li>
                        <?php } ?>

                    </ul>
                    <?php } ?>

                    <?php 
                        if ($data_detail->mountain_view != NULL || $data_detail->pagoda_view != NULL || $data_detail->sea_view != NULL || $data_detail->lake_view != NULL || $data_detail->garden_view != NULL || $data_detail->river_view != NULL) {
                    ?>
                        <h5 class="mt-5">
                            <?php 
                                if ($lang_session) {
                                    echo "အိမ်မြင်ကွင်း";
                                }else{
                                    echo "House View";
                                }
                             ?>
                        </h5>
                        <ul class="homes-list clearfix">
                            <?php
                                if ($data_detail->mountain_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "တောင်တန်းရှုခင်း";
                                                }else{
                                                    echo "Mountain view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>

                            <?php
                                if ($data_detail->pagoda_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "ဘုရားစေတီများ";
                                                }else{
                                                    echo "Pagoda view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>

                            <?php
                                if ($data_detail->sea_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "ပင်လယ်မြင်ကွင်း";
                                                }else{
                                                    echo "Sea view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>

                            <?php
                                if ($data_detail->lake_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "အိုင်မြင်ကွင်း";
                                                }else{
                                                    echo "Lake view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>

                            <?php
                                if ($data_detail->city_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "မြို့မြင်ကွင်း";
                                                }else{
                                                    echo "City view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>

                            <?php
                                if ($data_detail->garden_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "ဥယျာဉ်ရှုခင်း";
                                                }else{
                                                    echo "Garden view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>

                            <?php
                                if ($data_detail->river_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "မြစ်မြင်ကွင်း";
                                                }else{
                                                    echo "River view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>

                            <?php
                                if ($data_detail->river_view != NULL) { ?>
                                    <li>
                                       <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "မြစ်မြင်ကွင်း";
                                                }else{
                                                    echo "River view";
                                                }
                                             ?>
                                        </span>
                                    </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>

                    <?php 
                        if ($data_detail->showroom != NULL || $data_detail->restaurant != NULL || $data_detail->office != NULL || $data_detail->warehouse){
                     ?>
                    <h5 class="mt-5">
                        <?php 
                            if ($lang_session) {
                                echo "လုပ်ငန်းအမျိုးအစား";
                            }else{
                                echo "Business type";
                            }
                         ?>
                    </h5>
                    <?php } ?>
                    <ul class="homes-list clearfix">
                        <?php
                            if ($data_detail->showroom != NULL) { ?>
                                <li>
                                   <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "အရောင်းပြခန်း";
                                            }else{
                                                echo "Showroom";
                                            }
                                         ?>
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->restaurant != NULL) { ?>
                                <li>
                                   <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "စားသောက်ဆိုင်";
                                            }else{
                                                echo "Restaurant";
                                            }
                                         ?>
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->office != NULL) { ?>
                                <li>
                                   <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ရုံးခန်း";
                                            }else{
                                                echo "Office";
                                            }
                                         ?>
                                    </span>
                                </li>
                        <?php } ?>

                        <?php
                            if ($data_detail->warehouse != NULL) { ?>
                                <li>
                                   <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo "ဂိုဒေါင်";
                                            }else{
                                                echo "Warehouse";
                                            }
                                         ?>
                                    </span>
                                </li>
                        <?php } ?>

                    </ul>


                </div>

                <button class="btn btn-default text-white m-2" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-flag"></i> Report
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            ကြော်ငြာကို Report လုပ်မည်
                        </h5>
                      </div>
                      <div class="modal-body">
                        <span class="help-block pyidaungsu-font">ဤကြော်ငြာမှာ ဘာတွေမှားယွင်း နေပါသလဲ၊ ပြောပြပေးပါ။</span>
                        <form method="post" class="py-3" action="<?php echo site_url('include/save_report/index'); ?>"> 
                            <input type="hidden" name="post_id" value="<?php echo $data_detail->sale_id; ?>" required=""> 
                            <?php 
                                if ($data_detail->user_info_id == 0) {
                             ?>
                            <input type="hidden" name="member_id" value="0" required=""> 
                            <?php }else{ ?>
                                <input type="hidden" name="member_id" value="<?php echo $data_detail->user_id; ?>" required="">
                            <?php } ?>
                            <textarea required="" name="description" class="form-control"  rows="5" cols="5"></textarea>
                            <br>
                            <input type="submit" name="submit" id="submit" value="Report လုပ်မည်" class="btn btn-default text-white"> 
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <?php 
                    if ($data_detail->user_info_id == 0) {
                 ?>
                <button class="btn btn-default text-white m-2" data-toggle="modal" data-target="#exampleModalTatnayWon">
                    <i class="fa fa-phone-volume"></i> 
                    <?php 
                        if ($lang_session) {
                            echo "Click To Call Advertiser";
                        }else{
                            echo "Click To Call Advertiser";
                        }
                     ?>
                </button>
                <div class="modal fade" id="exampleModalTatnayWon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <small>ကြော်ငြာနံပါတ် <?php echo $data_detail->ad_number; ?> အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်</small>
                        </h5>
                      </div>
                      <div class="modal-body">
                        <span class="help-block" style="color: #c77b22; font-size: 20px; font-weight: bold;">
                            <i class="fa fa-phone-volume"></i> 
                            <?php echo " "; ?>
                            <?php echo $tatnaywon->phone; ?>
                        </span>
                        <br>
                        <span class="help-block" style="font-weight: bold;">
                            <?php echo "AD Number : "; ?>
                            <?php echo $data_detail->ad_number; ?>
                        </span>
                        <br>
                        <span class="help-block" style="font-weight: bold;">
                            <?php 
                                echo $data_detail->area; 
                                echo " ";
                                echo $data_detail->area_type; 
                                echo "၊ ";
                                echo $data_detail->title_mm; 
                            ?>
                        </span>
                        <br><br>
                        <p class="text-med-grey" style="padding: 5px; background-color: #d9edf7; color: #31708f;">Tat Nay Won Property တွင် တွေ့သောကြော်ငြာဟု ပြောပါရန်</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }else{ ?>
                    <button class="btn btn-default text-white m-2" data-toggle="modal" data-target="#exampleModalCompany">
                        <i class="fa fa-phone-volume"></i> 
                        <?php 
                            if ($lang_session) {
                                echo "ကြော်ငြာပိုင်ရှင်သို့ဆက်သွယ်ရန်နှိပ်ပါ";
                            }else{
                                echo "Click To Call Advertiser";
                            }
                         ?>
                    </button>

                    <div class="modal fade" id="exampleModalCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <small>ကြော်ငြာနံပါတ် <?php echo $data_detail->ad_number; ?> အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်</small>
                            </h5>
                          </div>
                          <div class="modal-body">
                            <span class="help-block" style="color: #c77b22; font-size: 20px; font-weight: bold;">
                                <i class="fa fa-phone-volume"></i> 
                                <?php echo " "; ?>
                                <?php echo $data_detail->phone; ?>
                            </span>
                            <br>
                            <span class="help-block" style="font-weight: bold;">
                                <?php echo "AD Number : "; ?>
                                <?php echo $data_detail->ad_number; ?>
                            </span>
                            <br>
                            <span class="help-block" style="font-weight: bold;">
                                <?php 
                                    echo $data_detail->area; 
                                    echo " ";
                                    echo $data_detail->area_type; 
                                    echo "၊ ";
                                    echo $data_detail->title_mm; 
                                ?>
                            </span>
                            <br><br>
                            <p class="text-med-grey" style="padding: 5px; background-color: #d9edf7; color: #31708f;">Tat Nay Won Property တွင် တွေ့သောကြော်ငြာဟု ပြောပါရန်</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php } ?>

                <!--num 0.3-->
                
                <button class="btn btn-default text-white m-2" data-toggle="modal" data-target="#qrCode">
                        <i class="fa fa-qrcode"></i> 
                        <?php 
                            if ($lang_session) {
                                echo "QR Code ကိုရယူပါ ";
                            }else{
                                echo "Get QR Code";
                            }
                         ?>
                    </button>

                    <div class="modal fade bd-example-modal-sm" id="qrCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <small>QR Code ကိုရယူပါ </small>
                            </h5>
                          </div>
                          <div class="modal-body">
                                <div id="qrcode"></div>
                                <a id="downloadLink"></a>
                               <!--  <br>
                                <button type="button" onclick="downloadClick()" class="btn btn-default btn-sm">Save</button> -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                <br><br>
                <div class="recent-pos" style="background-color: white; padding-top: 10px;">
                    <div class="recent-main">
                        <div class="recent-img" style="padding: 10px;">
                            <img src="<?php echo base_url(); ?>data/save.svg" style="width: 100%;">
                        </div>
                        <div class="info-img" style="padding: 20px;">
                            <h6>Save Property</h6>
                            <p>Don't want to share your details with the agent right now?</p>
                        </div>
                        <div class="recent-img" style="padding: 20px;">
                            <br>
                            <?php if ($this->session->userdata('member_id')) { ?>
                                <a href="<?php echo site_url('favoritesadd/index/'.$data_detail->sale_id); ?>" class="btn btn-sm btn-primary">
                                    <span>Save Property for Later</span>
                                </a>
                            <?php }else { ?>
                                <a href="<?php echo site_url('member/auth/login'); ?>" class="btn btn-sm btn-primary">
                                    <span>Save Property for Later</span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <br>
                <?php 
                    if ($data_detail->education != '' || $data_detail->health != '' || $data_detail->transportation != '') {
                ?>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>What's Nearby</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php 
                                        if ($data_detail->education != '') {
                                    ?>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                               <i class="fas fa-graduation-cap mr-2"></i><b class="title">Education</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <?php 
                                                        $educations = $data_detail->education;
                                                        $edu_json = json_decode($educations);
                                                        foreach ($edu_json as $key => $value) { ?>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $value; ?></h6>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php 
                                        if ($data_detail->health != '') {
                                    ?>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-success">
                                               <i class="fas fa-user-md mr-2"></i><b class="title">Health & Medical</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <?php 
                                                        $healths = $data_detail->health;
                                                        $health_json = json_decode($healths);
                                                        foreach ($health_json as $key => $value) { ?>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $value; ?></h6>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php 
                                        if ($data_detail->transportation != '') {
                                    ?>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-danger">
                                               <i class="fas fa-user-md mr-2"></i><b class="title">Transportation</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <?php 
                                                        $transportation = $data_detail->transportation;
                                                        $transportation_json = json_decode($transportation);
                                                        foreach ($transportation_json as $key => $value) { ?>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2"><?php echo $value; ?></h6>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
               
                <?php 
                    if ($data_detail->video != '') {
                 ?>
                <div class="property wprt-image-video w50 pro vid-si2">
                    <h5>
                        <?php 
                            if ($lang_session) {
                                echo "အိမ်ခြံမြေဗွီဒီယို";
                            }else{
                                echo "Property Video";
                            }
                         ?>
                    </h5>
                    <video width="100%" height="240" controls>
                      <source src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->video; ?>" type="video/mp4">
                      <source src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->video; ?>" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>
                </div>
                <?php } ?>
                
                <?php 
                    if ($data_detail->plans_photo != '') {
                 ?>
                <div class="floor-plan property wprt-image-video w50 pro">
                    <h5>
                        <?php 
                            if ($lang_session) {
                                echo "အစီအစဉ်များ";
                            }else{
                                echo "Plans";
                            }
                         ?>
                    </h5>
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->plans_photo; ?>" >
                </div>
                <?php } ?>

            </div>

            <aside class="col-lg-4 col-md-4 col-sm-12 car">
                <div class="single widget">
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4 style="padding: 7px;">
                                    <?php 
                                        if ($lang_session) {
                                            echo "ကုမ္ပဏီသတင်းအချက်အလက်";
                                        }else{
                                            echo "Company Information";
                                        }
                                     ?>
                                </h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="sidebar-widget author-widget2">
                                    <?php 
                                        if ($data_detail->user_info_id == 0) {
                                     ?>
                                    <div class="author- clearfix">
                                        <center>
                                            <?php 
                                                if ($tatnaywon->logo == '') {
                                             ?>
                                                <img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto;">
                                            <?php }else{ ?>
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $tatnaywon->logo; ?>" alt="home-1" class="img-responsive w-150" style="width: 190px!important; padding-top: 6px;">
                                            <?php } ?>
                                        </center>
                                    </div>
                                    <ul class="author__contact">
                                        <center>
                                            <h4 class="author__title">
                                                <?php 
                                                    if ($tatnaywon->company_name == '') {
                                                        echo "-";
                                                    }else{
                                                        echo $tatnaywon->company_name;
                                                    }
                                                 ?>
                                        </center>
                                        <li>
                                            <span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>
                                           <small>
                                                <?php 
                                                    if ($tatnaywon->address == '') {
                                                        echo "No address";
                                                    }else{
                                                        echo $tatnaywon->address;
                                                    }
                                                 ?>
                                            </small>
                                        </li>
                                        <li>
                                            <span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <a href="tal:<?php echo $tatnaywon->phone; ?>"><small>
                                                <b>
                                                    <?php 
                                                        if ($tatnaywon->phone == '') {
                                                            echo "No Phone Number";
                                                        }else{
                                                            echo $tatnaywon->phone;
                                                        }
                                                     ?>
                                                </b>
                                            </small></a>
                                        </li>
                                        <li>
                                            <span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <a href="mailto:<?php echo $tatnaywon->email; ?>"><small>
                                                <b>
                                                    <?php 
                                                        if ($tatnaywon->email == '') {
                                                            echo "No Email";
                                                        }else{
                                                            echo $tatnaywon->email;
                                                        }
                                                     ?>
                                                </b>
                                            </small></a>
                                        </li>
                                    </ul>
                                    <div class="agent-contact-form-sidebar">
                                        <h4>Request Inquiry</h4>
                                        <form  method="post" action="<?php echo site_url('requestinquiry/index'); ?>">
                                            <input type="text" id="fname" name="name" placeholder="Full Name" autocomplete="off" required="" />
                                            <input type="number" id="pnumber" name="phone" placeholder="Phone Number" autocomplete="off" required="" min="0"/>
                                            <input type="email" id="emailid" name="email" placeholder="Email Address" autocomplete="off" required="" />
                                            <input type="text" id="emailid" name="subject" placeholder="Subject" autocomplete="off" required="" />
                                            <textarea placeholder="Message" name="message"  autocomplete="off"></textarea>
                                            <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit" />
                                        </form>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="author- clearfix">
                                        <center>
                                            <?php 
                                                if ($data_detail->logo == '') {
                                             ?>
                                                <img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto;">
                                            <?php }else{ ?>
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->logo; ?>" alt="home-1" class="img-responsive w-150" style="width: 190px!important; padding-top: 6px;">
                                            <?php } ?>
                                        </center>
                                    </div>
                                    <ul class="author__contact">
                                        <center>
                                            <h4 class="author__title">
                                                <?php 
                                                    if ($data_detail->company_name == '') {
                                                        echo "-";
                                                    }else{
                                                        echo $data_detail->company_name;
                                                    }
                                                 ?>
                                        </center>
                                        <li>
                                            <span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>
                                           <small>
                                                <?php 
                                                    if ($data_detail->address == '') {
                                                        echo "No address";
                                                    }else{
                                                        echo $data_detail->address;
                                                    }
                                                 ?>
                                            </small>
                                        </li>
                                        <li>
                                            <span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <a href="tal:<?php echo $data_detail->phone; ?>"><small>
                                                <b>
                                                    <?php 
                                                        if ($data_detail->phone == '') {
                                                            echo "No Phone Number";
                                                        }else{
                                                            echo $data_detail->phone;
                                                        }
                                                     ?>
                                                </b>
                                            </small></a>
                                        </li>
                                        <li>
                                            <span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <a href="mailto:<?php echo $data_detail->email; ?>"><small>
                                                <b>
                                                    <?php 
                                                        if ($data_detail->email == '') {
                                                            echo "No Email";
                                                        }else{
                                                            echo $data_detail->email;
                                                        }
                                                     ?>
                                                </b>
                                            </small></a>
                                        </li>
                                    </ul>
                                    <div class="agent-contact-form-sidebar">
                                        <h4>
                                            <?php 
                                                if ($lang_session) {
                                                    echo "မေးမြန်းစုံစမ်းလိုသည်";
                                                }else{
                                                    echo "Request Inquiry";
                                                }
                                             ?>
                                        </h4>
                                        <?php $this->load->view('templates/shared/alert_message'); ?>
                                        <form  method="post" action="<?php echo site_url('requestinquiry/data_save'); ?>">
                                            <input type="hidden" name="company_user_id" value="<?php echo $data_detail->user_info_id; ?>">
                                            <input type="text" id="fname" name="name" placeholder="Full Name" autocomplete="off" required="" />
                                            <input type="number" id="pnumber" name="phone" placeholder="Phone Number" autocomplete="off" required="" min="0" />
                                            <input type="email" id="emailid" name="email" placeholder="Email Address" autocomplete="off" required="" />
                                            <input type="text" id="emailid" name="subject" placeholder="Subject" autocomplete="off" required="" />
                                            <textarea placeholder="Message" name="message"  autocomplete="off"></textarea>
                                            <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit" />
                                        </form>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="main-search-field-2">
                            <div class="recent-post py-5">
                                <?php $this->load->view('templates/shared/tags'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

        <section class="similar-property recently portfolio bshd p-0 bg-white-inner">
            <div class="container-fluid">
                <h5>
                    <?php 
                        if ($lang_session) {
                            echo "ရောင်းရန် အိမ်ခြံမြေယာများ";
                        }else{
                            echo "For sale properties";
                        }
                     ?>
                </h5>
                <div class="row portfolio-items">
                    <?php 
                        foreach ($recent_for_sales as $propertie ) {
                            if ($lang_session) {
                    ?>
                       <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4>
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                            <span class="category">Tat Nay Won</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "ရောင်းရန်";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "ငှားရန်";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "အိမ်ခြံမြေအသစ်";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "ပိုင်ရှင်ကိုယ်တိုင်ရောင်းမည်";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "ပိုင်ရှင်ကိုယ်တိုင်ငှားမည်";
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
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                        <small><?php echo $propertie->title_mm; ?></small>
                                    </a>
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
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
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
                                        <div class="compare">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">
                                       <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> <i class="fa fa-info-circle text-white"></i>  View Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4>
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                            <span class="category">Tat Nay Won</span>
                                        </h4>
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
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>"><?php echo $propertie->title_eng; ?></a></h3>
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
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->rooms == '' ? "0" : $data_detail->rooms; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->bathroom == '' ? "0" : $data_detail->bathroom; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
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
                                        <div class="compare">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">

                                       <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> <i class="fa fa-info-circle text-white"></i>  View Detail </a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-5">
            <div class="container-fluid">
                <h5>
                    <?php 
                        if ($lang_session) {
                            echo "ငှားရန်အိမ်ခြံမြေများ";
                        }else{
                            echo " For rent properties";
                        }
                     ?>
                </h5>
                <div class="row portfolio-items">
                    <?php 
                        foreach ($recent_for_rents as $propertie ) {
                            if ($lang_session) {
                     ?>
                       <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4>
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                            <span class="category">Tat Nay Won</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "ရောင်းရန်";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "ငှားရန်";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "အိမ်ခြံမြေအသစ်";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "ပိုင်ရှင်ကိုယ်တိုင်ရောင်းမည်";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "ပိုင်ရှင်ကိုယ်တိုင်ငှားမည်";
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
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                        <small><?php echo $propertie->title_mm; ?></small>
                                    </a>
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
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->rooms == '' ? "0" : $data_detail->rooms; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->bathroom == '' ? "0" : $data_detail->bathroom; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
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
                                        <div class="compare">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">

                                       <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"><i class="fa fa-info-circle text-white"></i>  View Detail </a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4>
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                            <span class="category">Tat Nay Won</span>
                                        </h4>
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
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>"><?php echo $propertie->title_eng; ?></a></h3>
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
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->rooms == '' ? "0" : $data_detail->rooms; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->bathroom == '' ? "0" : $data_detail->bathroom; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
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
                                        <div class="compare">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">

                                       <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"><i class="fa fa-info-circle text-white"></i>  View Detail </a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-1">
            <div class="container-fluid">
                <h5>
                    <?php 
                        if ($lang_session) {
                            echo "အိမ်ခြံမြေကြိုပွိုင့်များ";
                        }else{
                            echo " New Properties in Myanmar";
                        }
                     ?>
                </h5>
                <div class="row portfolio-items">
                    <?php 
                        foreach ($recent_for_new_properties as $propertie ) {
                            if ($lang_session) {
                     ?>
                       <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4>
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                            <span class="category">Tat Nay Won</span>
                                        </h4>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">
                                                <?php 
                                                    if ($propertie->propertie_type == 'for_sale') {
                                                        echo "ရောင်းရန်";
                                                    }elseif ($propertie->propertie_type == 'for_rent') {
                                                        echo "ငှားရန်";
                                                    }elseif ($propertie->propertie_type == 'new_properties') {
                                                        echo "ကြိုပွိုင့်";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                        echo "ပိုင်ရှင်ကိုယ်တိုင်ရောင်းမည်";
                                                    }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                        echo "ပိုင်ရှင်ကိုယ်တိုင်ငှားမည်";
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
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                        <small><?php echo $propertie->title_mm; ?></small>
                                    </a>
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
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->rooms == '' ? "0" : $data_detail->rooms; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->bathroom == '' ? "0" : $data_detail->bathroom; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
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
                                        <div class="compare">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">

                                       <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"><i class="fa fa-info-circle text-white"></i>  View Detail </a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4>
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                            <span class="category">Tat Nay Won</span>
                                        </h4>
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
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                        <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>"><?php echo $propertie->title_eng; ?></a></h3>
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
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->rooms == '' ? "0" : $data_detail->rooms; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span><?php echo $data_detail->bathroom == '' ? "0" : $data_detail->bathroom; ?></span>
                                        </li>

                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
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
                                        <div class="compare">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer">

                                       <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"><i class="fa fa-info-circle text-white"></i>  View Detail </a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>

    </div>
    <br><br>
</section>
<?php }else{ ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/qrcode/qrcode.js"></script>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
    text: "<?php echo current_url(); ?>",
    width: 100, //The width of the generated QR code
    height: 100, //The height of the generated QR code
    colorDark : "#000000", // The dark part of the generated QR code
    colorLight : "#ffffff", //Generate the light part of the QR code
    correctLevel : QRCode.CorrectLevel.H
});
  //jquery-qrcode.js
var qrcode = $('#qrcode').qrcode({
    width: 100,
    height: 100,
    text: "size doesn't matter"
});

function downloadClick () {
    var img = document.getElementById('qrcode').getElementsByTagName('img')[0];
    var canvas = document.createElement('canvas');
    canvas.width = img.width;
    canvas.height = img.height;
    canvas.getContext('2d').drawImage(img, 0, 0);
    url = canvas.toDataURL('image/png');
    var downloadLink = document.getElementById('downloadLink');
    downloadLink.setAttribute('href', url);
    downloadLink.setAttribute('download', 'QR code.png');
    downloadLink.click();
}
</script>
