<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<section class="properties-right list featured portfolio blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-12 blog-pots">
                <?php $this->load->view('templates/shared/alert_message'); ?>
                <!-- Block heading Start-->
                <div class="block-heading">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-12">
                            <h4>
                                <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                                </span>
                                <span class="show-sm-show">
                                    <?php 
                                        if ($lang_session) {
                                            echo "အိမ်ခြံမြေကြိုပွိုင့်များ";
                                        }else{
                                            echo "New Properties";
                                        }
                                     ?>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Block heading end -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php 
                        if (!$properties) {
                            echo "<b>Data not found</b>";
                        }
                     ?>
                </div>
                <div class="row featured -items">
                    <!-- start loop -->
                    <?php 
                        foreach ($properties as $propertie) {
                            if ($lang_session) {
                     ?>
                        <div class="item col-md-5 landscapes sale pr-0 pb-0" style="background-color: #ffffff;">
                            <div class="project-single mb-0 bb-0">
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
                                                <img src="<?php echo base_url(); ?>data/default/logo_not_found.png" style="width: 100%;" class="img-responsive">
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa fa-external-link-alt"></i></a>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 homes-content" >
                            <h3>
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                    <?php echo $propertie->title_mm; ?>
                                </a>
                            </h3>
                            <p class="homes-address mb-3">
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                    <i class="fa fa-map-marker-alt"></i><span>
                                        <?php echo $propertie->region_mm; ?>
                                        |
                                        <?php echo $propertie->townships_mm; ?></span>
                                </a>
                            </p>
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span><?php echo $propertie->rooms; ?></span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span><?php echo $propertie->bathroom; ?></span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($propertie->property_status == 'Fully Furnished') {
                                                echo "ပရိဘောဂအပြည့်အစုံ";
                                            }elseif($propertie->property_status == 'Hall') {
                                                echo "ခန်းမ";
                                            }
                                        ?>
                                    </span>
                                </li>

                                <li>
                                    <i class="fas fa-barcode" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            echo $propertie->ad_number;
                                        ?>
                                    </span>
                                </li>

                                <div class="price-properties">
                                    <?php 
                                        if ($propertie->user_info_id == 0) {
                                     ?>
                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100px; padding: 2px;  box-shadow: 0px 4px 4px 3px #dbdfe0;">
                                    <?php }else{ ?>
                                            <?php 
                                                if ($propertie->logo != '') {
                                             ?>
                                             <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100px; padding: 2px;  box-shadow: 0px 4px 4px 3px #dbdfe0;">
                                            <?php } ?>
                                    <?php } ?>

                                </div>
                            </ul>

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
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share" target="_blang">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    
                                    <?php if ($this->session->userdata('member_id')) { ?>
                                        <a href="<?php echo site_url('favoritesadd/index/'.$propertie->sale_id); ?>" title="Favorites Add">
                                            <i class="fa fa-heart" style="color: red;"></i>
                                        </a>
                                    <?php }else { ?>
                                         <a href="<?php echo site_url('member/auth/login'); ?>" title="Favorites Add">
                                            <i class="fa fa-heart" style="color: red;"></i>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="footer">
                                <span>
                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> အသေးစိတ်ကြည့်ရန် </a>
                                    <?php 
                                        if ($propertie->user_info_id == 0) {
                                     ?>
                                    <?php $this->load->view('templates/shared/tatnaywon_contact'); ?>
                                    <?php }else{ ?>
                                        <a title="Phone" href="tel:<?php echo $propertie->phone; ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"> <i class="fa fa-phone fa-lg" style="color: white;"></i> </a>

                                        <a title="Mail" href="mailto:<?php echo $propertie->email; ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: blue;"> <i class="fa fa-envelope fa-lg" style="color: white;"></i> </a>
                                    <?php } ?>
                                </span>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="item col-md-5 landscapes sale pr-0 pb-0" style="background-color: #ffffff;">
                            <div class="project-single mb-0 bb-0">
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
                                                <img src="<?php echo base_url(); ?>data/default/logo_not_found.png" style="width: 100%;" class="img-responsive">
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa fa-external-link-alt"></i></a>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 homes-content" >
                            <h3>
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                    <?php echo $propertie->title_eng; ?>
                                </a>
                            </h3>
                            <p class="homes-address mb-3">
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                    <i class="fa fa-map-marker-alt"></i><span>
                                        <?php echo $propertie->region; ?>
                                        |
                                        <?php echo $propertie->townships; ?></span>
                                </a>
                            </p>
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?> </span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?> </span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span><?php echo $propertie->property_status; ?></span>
                                </li>

                                <li>
                                    <i class="fas fa-barcode" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            echo $propertie->ad_number;
                                        ?>
                                    </span>
                                </li>

                                <div class="price-properties">
                                    <?php 
                                        if ($propertie->user_info_id == 0) {
                                     ?>
                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100px; padding: 2px;  box-shadow: 0px 4px 4px 3px #dbdfe0;">
                                    <?php }else{ ?>
                                            <?php 
                                                if ($propertie->logo != '') {
                                             ?>
                                             <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100px; padding: 2px;  box-shadow: 0px 4px 4px 3px #dbdfe0;">
                                            <?php } ?>
                                    <?php } ?>
                                </div>
                            </ul>

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

                                    <?php if ($this->session->userdata('member_id')) { ?>
                                        <a href="<?php echo site_url('favoritesadd/index/'.$propertie->sale_id); ?>" title="Favorites Add">
                                            <i class="fa fa-heart" style="color: red;"></i>
                                        </a>
                                    <?php }else { ?>
                                         <a href="<?php echo site_url('member/auth/login'); ?>" title="Favorites Add">
                                            <i class="fa fa-heart" style="color: red;"></i>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="footer">
                                <span>
                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> View Detail </a>
                                    <?php 
                                        if ($propertie->user_info_id == 0) {
                                     ?>
                                    <?php $this->load->view('templates/shared/tatnaywon_contact'); ?>
                                    <?php }else{ ?>
                                        <a title="Phone" href="tel:<?php echo $propertie->phone; ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"> <i class="fa fa-phone fa-lg" style="color: white;"></i> </a>

                                        <a title="Mail" href="mailto:<?php echo $propertie->email; ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: blue;"> <i class="fa fa-envelope fa-lg" style="color: white;"></i> </a>
                                    <?php } ?>
                                    
                                </span>
                            </div>
                        </div>
                    <?php } } ?>
                    <!-- end loop -->
                </div>

                <nav aria-label="..." class="py-3">
                    <?= $this->pagination->create_links(); ?>
                </nav>
            </div>

            <aside class="col-lg-3 col-md-12 car">
                <div class="widget">
                    <div class="section-heading">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-laptop-house"></i>
                            </div>
                            <div class="media-body">
                                <h5>
                                    <?php 
                                        if ($lang_session) {
                                            echo "အိမ်ခြံမြေရှာဖွေပါ";
                                        }else{
                                            echo "Search Property";
                                        }
                                     ?>
                                </h5>
                                <div class="border"></div>
                                <p>Search your Properties</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Fields -->
                    <div class="main-search-field">
                        <h5 class="title">
                            <?php 
                                if ($lang_session) {
                                    echo "စီစစ်ပြီး ရှာပါ";
                                }else{
                                    echo "Filter";
                                }
                             ?>
                        </h5>
                        <?php $this->load->view('templates/shared/filter_search'); ?>
                    </div>
                    

                    <div class="recent-post py-5">
                        <?php $this->load->view('templates/shared/tags.php'); ?>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>