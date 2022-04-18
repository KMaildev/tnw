<?php
$lang_session = $this->session->userdata('lang');
?>

<section class="recently portfolio home18">
    <div class="container">
        <div class="section-title ml-4">
            <h3>Handpicked Properties For Sale</h3>
            <h2>
                <?php
                if ($lang_session) {
                    echo "အထူးအသားပေး ရောင်းရန် အိမ်ခြံမြေများ";
                } else {
                    echo "Featured Properties For Sale";
                }
                ?>
            </h2>
        </div>
        <div class="portfolio col-xl-12 col-sm-12 col-lg-12 col-md-12">
            <div class="sale-slider-items">
                <?php
                foreach ($top_featured_properties as $key => $propertie) {
                ?>
                    <div class="agents-grid" style="height: auto;">
                        <div class="landscapes">
                            <div class="project-single">

                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="<?php echo site_url('propertydetail/index/' . $propertie->sale_id); ?>" class="homes-img">
                                            <div class="homes-tag button alt featured">
                                                <?php echo $propertie->ad_number; ?>
                                            </div>
                                            <div class="homes-tag button alt sale">
                                                <?php
                                                if ($propertie->propertie_type == 'for_sale') {
                                                    echo "For Sale";
                                                } elseif ($propertie->propertie_type == 'for_rent') {
                                                    echo "For Rent";
                                                } elseif ($propertie->propertie_type == 'new_properties') {
                                                    echo "New Properties";
                                                } elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                    echo "By Owner For  Sale";
                                                } elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                    echo "By Owner For  Rent";
                                                } else {
                                                    echo "Tat Nay Won";
                                                }
                                                ?>
                                            </div>
                                            <div class="homes-price">
                                                <?php echo $propertie->property_type_mm; ?>
                                            </div>

                                            <!-- property Photo -->
                                            <?php
                                            if ($propertie->photo == '') {
                                            ?>
                                                <img src="<?php echo (base_url()); ?>/data/default/projectnoimage.webp" class="responsive" style="width: 100%; height: 160px; object-fit:cover; object-position: center; background-color: white;">
                                            <?php } else { ?>
                                                <img src="<?php echo (base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="responsive" style="width: 100%; height: 160px; object-fit:cover; object-position: center;">
                                            <?php } ?>
                                            <!-- property Photo -->

                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/' . $propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-external-link-alt"></i></a>

                                        <a href="<?php echo site_url('propertydetail/index/' . $propertie->sale_id); ?>" class="btn btn-default"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <style type="text/css">
                                        .LinkColor {
                                            color: #0060B6;
                                            text-decoration: none;
                                        }

                                        .LinkColor:hover {
                                            color: #00A0C6;
                                            text-decoration: none;
                                            cursor: pointer;
                                        }
                                    </style>
                                    <a class="LinkColor" href="<?php echo site_url('propertydetail/index/' . $propertie->sale_id); ?>">
                                        <?php
                                        echo ($lang_session) ? mb_substr($propertie->title_mm, 0, 50, 'UTF-8') : mb_substr($propertie->title_eng, 0, 50, 'UTF-8');
                                        ?>
                                    </a>

                                    <style type="text/css">
                                        .line {
                                            width: 100%;
                                            height: 30px;
                                            border-bottom: 1px solid #efebe8;
                                            position: absolute;
                                        }
                                    </style>
                                    <div class="line"></div>

                                    <p class="homes-address mb-1">
                                        <a href="<?php echo site_url('propertydetail/index/' . $propertie->sale_id); ?>">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span>
                                                <?php
                                                echo ($lang_session) ? $propertie->region_mm : $propertie->region;
                                                ?>
                                                |
                                                <?php
                                                echo ($lang_session) ? mb_substr($propertie->townships_mm, 0, 14, 'UTF-8') : mb_substr($propertie->townships, 0, 14, 'UTF-8');
                                                ?>
                                            </span>
                                        </a>
                                    </p>



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
                                            <a href="<?php echo site_url('propertydetail/index/' . $propertie->sale_id); ?>">
                                                <?php
                                                if ($propertie->price_type == 'MMK(Lakhs)') {
                                                    echo number_format($propertie->price);
                                                    echo " သိန်း (ကျပ်)";
                                                } elseif ($propertie->price_type == 'USD') {
                                                    echo number_format($propertie->price);
                                                    echo " ";
                                                    echo $propertie->price_type;
                                                }
                                                ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/' . $propertie->sale_id); ?>" class="btn  btn-sm" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #f08e33;">
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