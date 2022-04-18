<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="https://www.tatnaywonproperty.com">
    <meta name="theme-color" content="#f08d33">
    <title>Tat Nay Won Property မြန်မာနိုင်ငံ၏ နံပါတ်တစ် အိမ်ခြံမြေ ရောင်းဝယ်ငှါး ဝဘ်ဆိုက်</title>
    
    
    
    
    
    
    <meta property="og:url" content="<?php echo current_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $data_detail->title_mm ?>"/>
    <meta property="og:title" content="<?php echo $data_detail->title_mm; ?>" />
    <meta property="og:description" content="<?php echo $data_detail->description_mm; ?>" />
    
    <?php
        if ($data_photos) {
            foreach ($data_photos as $key => $data_photo) {
                if($key == 1){
                    break;
                }
    ?>
        <meta property="og:image" content="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>"/>
        <?php } ?>
    <?php } ?>
    
    
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo(base_url()); ?>/data/logo.jpg">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/leaflet.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/leaflet.markercluster.default.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/revolution/css/settings.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/revolution/css/layers.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/revolution/css/navigation.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/lightcase.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="<?php echo base_url(); ?>/assets/css/default.css">
    <link rel="stylesheet" id="color" href="<?php echo base_url(); ?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/search.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mycss.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/select2/css/select2.min.css') ?>">
</head>
<!-- class="homepage-3" -->
<main id="panel">
<body class="inner-pages homepage-9 homepage-4">
    <div id="wrapper">
        
        
        



<?php $this->load->view('templates/menu'); ?>
<?php
$lang_session = $this->session->userdata('lang');
?>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/qrcode/qrcode.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/property/slider/property_slider.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/timedropper.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/datedropper.css">

<style type="text/css">
    .property-slider {
        width: 100%;
        background-color: white;
    }

    .slider-ul {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .slider-li {
        display: block;
        float: left;
        cursor: pointer;
    }

    .slider-image {
        display: block;
        height: auto;
        max-width: 100%;
    }


    .logo-shadow {
        box-shadow: 0px 4px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

<?php
if ($data_detail) {
?>

    <section class="single-proper blog details">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12 blog-pots py-3">

                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                            <?php
                            if ($data_detail->soldout_status == 1) {
                                $this->load->view('templates/property_pages/soldout_status');
                            }
                            $this->load->view('templates/shared/alert_message');
                            ?>
                            <h3 style="background-color:#25a835; box-shadow: 1px 1px 1px #000000; background-color: white; padding: 10px;">
                                <?php
                                if ($lang_session) {
                                    echo $data_detail->title_mm == '' ? $data_detail->title_eng : $data_detail->title_mm;
                                } else {
                                    echo $data_detail->title_eng == '' ? $data_detail->title_mm : $data_detail->title_eng;
                                }
                                ?>
                            </h3>

                            <div>
                                <div class="property-slider">
                                    <ul id="lightSlider" class="slider-ul">
                                        <?php
                                        if ($data_photos) {
                                            foreach ($data_photos as $i => $data_photo) {
                                        ?>
                                                <li class="slider-li" data-thumb="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>">
                                                    <a class="popup-img" href="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>">
                                                        <img class="slider-image" style="height: 400px; object-fit: contain;" src="<?php echo base_url(); ?>uploads/<?php echo $data_photo->photo; ?>" />
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <li class="slider-li" data-thumb="<?php echo (base_url()); ?>/data/default/projectnoimage.webp">
                                                <img src="<?php echo (base_url()); ?>/data/default/projectnoimage.webp" class="responsive" style="width: 100%; height: 400px; object-fit:cover; object-position: center; background-color: white;">
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                            <br>
                            <div class="blog-info details mb-30">
                                <div class="row p-b-10 lh-1-5 b-b b-grey">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <?php
                                        if ($lang_session) {
                                            echo $data_detail->post_upload_date;
                                            echo "<small style='font-size: 15px;'> တွင်ကြော်ငြာတင်ခဲ့သည်</small>";
                                        } else {
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
                                        } else {
                                            echo "Views ";
                                            echo "<b>" . $data_detail->viewer_count . "</b>";
                                        }
                                        ?> |
                                        <?php
                                        if ($lang_session) {
                                            echo "<small style='font-size: 15px;'>ကြော်ငြာအမှတ်</small>";
                                        } else {
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
                                        echo "အသေးစိတ် ဖော်ပြချက်";
                                    } else {
                                        echo "Description";
                                    }
                                    ?>
                                </h5>
                                <p class="mb-3">
                                    <?php
                                    if ($lang_session) {
                                        echo $data_detail->description_mm;
                                    } else {
                                        echo $data_detail->description_eng;
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">
                            <?php
                            if ($lang_session) {
                                echo "အိမ်ခြံမြေဆိုင်ရာအသေးစိတ်အချက်အလက်များ";
                            } else {
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
                                    } else {
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
                                        } elseif ($data_detail->price_type == 'USD') {
                                            echo number_format($data_detail->price);
                                            echo " ";
                                            echo $data_detail->price_type;
                                        }
                                    } else {
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
                                    } else {
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
                                    <i class="fa fa-shower" aria-hidden="true"></i>
                                    Master Bathroom :
                                    <?php echo $data_detail->bathroom == '' ? "No" : $data_detail->masterbathroom; ?>
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
                                    <?php echo $data_detail->floor == '' ? "No" : $data_detail->floor; ?>
                                </p>
                            </li>

                            <li>
                                <p style="color: black; font-size: 15px; font-weight: bold;">
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    Building Year :
                                    <?php echo $data_detail->year_built == '' ? "No" : $data_detail->year_built; ?>
                                </p>
                            </li>

                            <li>
                                <p style="color: black; font-size: 15px; font-weight: bold;">

                                    <?php
                                    if ($lang_session) {
                                        if ($data_detail->property_status == 'Fully Furnished') {
                                            echo '<i class="fa fa-building" aria-hidden="true"></i>';
                                            echo "ပရိဘောဂအပြည့်အစုံ";
                                        } elseif ($data_detail->property_status == 'Hall') {
                                            echo '<i class="fa fa-building" aria-hidden="true"></i>';
                                            echo "ခန်းမ";
                                        }
                                    } else {
                                        echo $data_detail->property_status;
                                    }
                                    ?>
                                </p>
                            </li>
                        </ul>


                        <?php
                        if ($data_detail->map_link) {
                        ?>
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                    <span>
                                        <a href="<?php echo $data_detail->map_link; ?>" target="_blank">
                                            Google Map Link
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        <?php } ?>

                        <h5 class="mt-3">
                            <?php
                            if ($lang_session) {
                                echo "SHARE AGENT FEE";
                            } else {
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

                        <h5 class="mt-3">
                            <?php
                            if ($lang_session) {
                                echo "ဘဏ်အရစ်ကျ";
                            } else {
                                echo "Installment";
                            }
                            ?>
                        </h5>
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-money-check-alt" aria-hidden="true"></i>
                                <span>
                                    <?php
                                    if ($lang_session) {
                                        if ($data_detail->installment == 'No') {
                                            echo "ဘဏ်အရစ်ကျ မရပါ";
                                        } elseif ($data_detail->installment == 'Yes') {
                                            echo "ဘဏ်အရစ်ကျ ရပါသည်";
                                        }
                                    } else {
                                        if ($data_detail->installment == 'No') {
                                            echo $data_detail->installment;
                                        } ?>
                                    <?php } ?>
                                </span>
                            </li>
                            <?php
                            if ($data_detail->installment == 'Yes') {
                            ?>
                                <li>
                                    <img style="width: 34%; padding: 2px; border: 1px solid #c77b22;" src="<?php echo base_url(); ?>data/bank/yoma.png">
                                    <img style="width: 30%; padding: 2px;  border: 1px solid #c77b22;" src="<?php echo base_url(); ?>data/bank/kbz.png">
                                    <img style="width: 30%; padding: 2px;  border: 1px solid #c77b22;" src="<?php echo base_url(); ?>data/bank/aya.png">
                                </li>
                            <?php } ?>
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
                                } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
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
                                            } else {
                                                echo "River view";
                                            }
                                            ?>
                                        </span>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>

                        <?php
                        if ($data_detail->showroom != NULL || $data_detail->restaurant != NULL || $data_detail->office != NULL || $data_detail->warehouse) {
                        ?>
                            <h5 class="mt-5">
                                <?php
                                if ($lang_session) {
                                    echo "လုပ်ငန်းအမျိုးအစား";
                                } else {
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
                                        } else {
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
                                        } else {
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
                                        } else {
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
                                        } else {
                                            echo "Warehouse";
                                        }
                                        ?>
                                    </span>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>



                    <!-- report  -->
                    <button data-toggle="modal" data-target="#exampleModal" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #c77b26; margin: 3px;">
                        <i class="fa fa-flag"></i>
                        Report
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #af742e;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">
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
                                        <?php } else { ?>
                                            <input type="hidden" name="member_id" value="<?php echo $data_detail->user_id; ?>" required="">
                                        <?php } ?>
                                        <textarea required="" name="description" class="form-control" rows="5" cols="5"></textarea>
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
                    <!-- report  -->


                    <!-- click to call -->
                    <button class="btn btn- btn-sm text-white" data-toggle="modal" data-target="#exampleModalTatnayWon" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); background-color: green; margin: 3px;">
                        <i class="fa fa-phone-square-alt text-white"></i>
                        <?php
                        echo ($lang_session) ? "ဖုန်းခေါ်ဆိုရန် " : "Click To Call";
                        ?>
                    </button>
                    <div class="modal fade" id="exampleModalTatnayWon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" style="background-color: #418107;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
                                        <small>
                                            ကြော်ငြာနံပါတ် <?php echo $data_detail->ad_number; ?> အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်
                                        </small>
                                    </h5>
                                </div>

                                <div class="modal-body">
                                    <?php
                                    if ($data_detail->contact_number != NULL) {
                                        $propertyPhoneNumber = explode(',', $data_detail->contact_number);
                                        $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                                    } else {
                                        if ($data_detail->user_info_id == 0) {
                                            $propertyPhoneNumber = explode(',', $tatnaywon->phone);
                                            $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                                        } else {
                                            $propertyPhoneNumber = explode(',', $data_detail->phone);
                                            $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                                        }
                                    }
                                    for ($i = 0; $i < $propertyPhoneNumberTotal; $i++) {
                                    ?>
                                        <span class="help-block" style="color: #c77b22; font-size: 15px;">
                                            <i class="fa fa-phone-square-alt"></i>
                                            <a href="tel:<?php echo $propertyPhoneNumber[$i]; ?>" style="color: blue;">
                                                <?php echo $propertyPhoneNumber[$i]; ?>
                                            </a>
                                        </span><br>
                                    <?php } ?>

                                    <span class="help-block" style="color: #c77b22; font-size: 15px;">
                                        <i class="fa fa-ad"></i>
                                        <?php echo "AD Number : "; ?>
                                        <?php echo $data_detail->ad_number; ?>
                                    </span>
                                    <br>

                                    <span class="help-block" style="color: #c77b22; font-size: 15px;">
                                        <i class="fa fa-building"></i>
                                        <?php
                                        if ($lang_session) {
                                            echo $data_detail->title_mm == '' ? $data_detail->title_eng : $data_detail->title_mm;
                                        } else {
                                            echo $data_detail->title_eng == '' ? $data_detail->title_mm : $data_detail->title_eng;
                                        }
                                        ?>
                                    </span>
                                    <br><br>

                                    <p class="text-med-grey" style="padding: 5px; background-color: #d9edf7; color: #31708f;">
                                        TatNayWonProperty.Com တွင် တွေ့သောကြော်ငြာဟု ပြောပါရန်
                                    </p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- click to call -->


                    <!-- send message -->
                    <button class="btn btn-sm text-white" data-toggle="modal" data-target="#sendAMessage" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #a940aa; margin: 3px;">
                        <i class="fa fa-envelope text-white"></i>
                        <strong class="clearfix hidden-sm-down">
                            <?php
                            echo ($lang_session) ? "စာတိုပို့ရန်" : "Send a message";
                            ?>
                        </strong>
                    </button>

                    <div class="modal fade" id="sendAMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #a940aa;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
                                        <small>
                                            ကြော်ငြာနံပါတ် <?php echo $data_detail->ad_number; ?> အတွက် စာတိုပို့ရန်
                                        </small>
                                    </h5>
                                </div>
                                <div class="modal-body">

                                    <?php
                                    if ($data_detail->user_info_id == 0) {
                                    ?>
                                        <form action="<?php echo site_url('requestinquiry/index'); ?>" method="post">
                                        <?php } else { ?>
                                            <form action="<?php echo site_url('requestinquiry/data_save'); ?>" method="post">
                                                <input type="hidden" name="company_user_id" value="<?php echo $data_detail->user_info_id; ?>">
                                            <?php } ?>


                                            <input type="text" class="form-control" id="fname" name="name" placeholder="Name" autocomplete="off" required="" /><br>

                                            <input type="text" class="form-control" id="pnumber" name="phone" placeholder="Phone Number" autocomplete="off" required="" min="0" /><br>

                                            <input type="email" class="form-control" id="emailid" name="email" placeholder="Email Address" autocomplete="off" required="" /><br>

                                            <?php
                                            if ($lang_session) {
                                                $subject = "ကြော်ငြာနံပါတ် " . $data_detail->ad_number . " အကြောင်းကို ပိုမိုသိလိုသည်။";
                                            } else {
                                                $subject = "Know more about this ads " . $data_detail->ad_number;
                                            }
                                            ?>
                                            <input type="text" class="form-control" id="emailid" name="subject" placeholder="Subject" autocomplete="off" required="" value="<?php echo $subject ?>" /><br>

                                            <?php
                                            if ($lang_session) {
                                                $message = "ဒီအိမ်ခြံမြေကို စိတ်ဝင်စားပါသည်။  ဒီအိမ်ခြံမြေနှင့်ပါတ်သတ်သော အသေးစိတ်အချက်အလက်များအားပေးပို့စေလိုပါတယ်။ ကျေးဇူးတင်ပါတယ်။";
                                            } else {
                                                $message = "Hello, I am interested in this property posted on TatNayWonProperty.Com and would like to request more information. Could you please contact me back as soon as possible? Thank you.";
                                            }
                                            ?>
                                            <textarea placeholder="Message" class="form-control" name="message" autocomplete="off"><?php echo $message; ?></textarea>
                                            <br>

                                            <input type="submit" name="sendmessage" class="btn btn-default" value="Send a message" style="height: 40px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #c77b26; margin: 3px;" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal" style="height: 40px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #c77b26; margin: 3px;">
                                                Close
                                            </button>

                                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- send message -->

                    <!-- Qr Code -->
                    <button class="btn btn- btn-sm text-white" data-toggle="modal" data-target="#qrCode" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); background-color: #1f45ef; margin: 3px;">
                        <i class="fa fa-qrcode"></i>
                        <?php
                        if ($lang_session) {
                            echo "QR Code ကိုရယူပါ ";
                        } else {
                            echo "Get QR Code";
                        }
                        ?>
                    </button>

                    <div class="modal fade bd-example-modal-sm" id="qrCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #2046ef;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
                                        <small>QR Code ကိုရယူပါ </small>
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <div id="qrcode"></div>
                                    <a id="downloadLink"></a>
                                    <br>
                                    <button type="button" onclick="downloadClick()" class="btn btn-default btn-sm">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Qr Code -->
                    <br><br>


                    <?php $this->load->view('templates/property_pages/google_map'); ?>
                    <br>
                    <?php $this->load->view('templates/property_pages/save_property'); ?>
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
                                } else {
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
                                } else {
                                    echo "Plans";
                                }
                                ?>
                            </h5>
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->plans_photo; ?>">
                        </div>
                    <?php } ?>
                </div>

                <aside class="col-lg-4 col-md-4 col-sm-12 car py-3">
                    <?php $this->load->view('templates/property_pages/share_property'); ?>
                    <?php $this->load->view('templates/property_pages/favorites'); ?>
                    <?php $this->load->view('templates/property_pages/company_info'); ?>
                    <?php $this->load->view('templates/property_pages/request_inquiry'); ?>
                    <br>
                    <?php $this->load->view('templates/property_pages/take_appointments'); ?>

                    <div class="widget-boxed mt-33 mt-5" style="background-color: white;">
                        <h5 class="title">
                            <?php
                            if ($lang_session) {
                                echo "စီစစ်ပြီး ရှာပါ";
                            } else {
                                echo "Filter";
                            }
                            ?>
                        </h5>
                        <?php $this->load->view('templates/shared/filter_search'); ?>
                    </div>

                    <div class="widget-boxed mt-33 mt-5">
                        <div class="recent-post">
                            <?php $this->load->view('templates/shared/tags'); ?>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    <?php $this->load->view('templates/property_pages/relate_property'); ?>


    <div class="color-switcher" id="choose_color">
        <a href="#." class="picker_close">
            <i class="fa fa-phone-alt fa-2x"></i>
        </a>
        <div class="theme-colours" style="background-color: white">
            <p class="font-italic">
                <?php
                echo ($lang_session) ? "Click To Contact Advertiser" : "Click To Contact Advertiser";
                ?>
            </p>

            <p style="line-height: 30px !important">
                <?php
                if ($data_detail->contact_number != NULL) {
                    $propertyPhoneNumber = explode(',', $data_detail->contact_number);
                    $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                } else {
                    if ($data_detail->user_info_id == 0) {
                        $propertyPhoneNumber = explode(',', $tatnaywon->phone);
                        $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                    } else {
                        $propertyPhoneNumber = explode(',', $data_detail->phone);
                        $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                    }
                }
                for ($i = 0; $i < $propertyPhoneNumberTotal; $i++) {
                ?>
                    <a href="tel:<?php echo $propertyPhoneNumber[$i]; ?>" style="color: blue;">
                        <?php echo $propertyPhoneNumber[$i]; ?>
                    </a>
                    <br>
                <?php } ?>
            </p>
            <?php $this->load->view('templates/property_pages/share_link'); ?>

        </div>
    </div>

<?php } else { ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>


<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<!-- slider -->
<script type="text/javascript" src="<?php echo base_url('assets/property/slider/property_slider.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#lightSlider").lightSlider({
            item: 1,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 1,

            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////

            speed: 400, //ms'
            auto: true,
            pauseOnHover: false,
            loop: true,
            slideEndAnimation: true,
            pause: 2000,

            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',

            rtl: false,
            adaptiveHeight: false,

            vertical: false,
            verticalHeight: 500,
            vThumbWidth: 100,

            thumbItem: 10,
            pager: true,
            gallery: true,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',

            enableTouch: true,
            enableDrag: true,
            freeMove: true,
            swipeThreshold: 40,

            responsive: [],

            onBeforeStart: function(el) {},
            onSliderLoad: function(el) {},
            onBeforeSlide: function(el) {},
            onAfterSlide: function(el) {},
            onBeforeNextSlide: function(el) {},
            onBeforePrevSlide: function(el) {}
        });
    });
</script>
<!-- slider -->

<!-- Query -->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/qrcode/qrcode.js"></script>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "<?php echo current_url(); ?>",
        width: 100, //The width of the generated QR code
        height: 100, //The height of the generated QR code
        colorDark: "#000000", // The dark part of the generated QR code
        colorLight: "#ffffff", //Generate the light part of the QR code
        correctLevel: QRCode.CorrectLevel.H
    });
    //jquery-qrcode.js
    var qrcode = $('#qrcode').qrcode({
        width: 100,
        height: 100,
        text: "size doesn't matter"
    });

    function downloadClick() {
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