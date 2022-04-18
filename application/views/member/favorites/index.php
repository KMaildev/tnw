<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="properties-right list featured portfolio blog">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 blog-pots">
                <!-- Block heading Start-->
                <div class="block-heading">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-12">
                            <h4>
                                <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                                </span>
                                <span class="show-sm-show">
                                    <a href="<?php echo site_url('member/dashboard'); ?>">
                                        <span class="">Dashboard </span>
                                    </a>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Block heading end -->

                <?php $this->load->view('templates/shared/alert_message'); ?>
                <div class="row featured -items">
                    <!-- start loop -->
                    <?php foreach ($properties as $properties_ad) { ?>
                        <div class="col-md-6 col-sm-12" style="padding: 10px;">
                            <div class="homes-content">
                                <h3>
                                    <a href="<?php echo site_url('propertydetail/index/'.$properties_ad->sale_id); ?>">
                                        <?php echo $properties_ad->title_eng; ?>
                                    </a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <i class="fa fa-star"></i>
                                    <span title="ADS Number">
                                        <b><?php echo $properties_ad->ad_number; ?></b>
                                    </span>
                                </p>
                            
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span><?php echo $properties_ad->rooms; ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span><?php echo $properties_ad->bathroom; ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span><?php echo $properties_ad->area; ?> <?php echo $properties_ad->area_type; ?></span>
                                    </li>
                                    <li>
                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                        <span><?php echo $properties_ad->property_status; ?></span>
                                    </li>
                                    
                                </ul>

                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="<?php echo site_url('propertydetail/index/'.$properties_ad->f_id); ?>"><?php echo $properties_ad->price; ?> <?php echo $properties_ad->price_type; ?></a>
                                    </h3>
                                </div>
                                <div class="footer">
                                    <span>
                                        <a title="Remove" href="<?php echo site_url('member/favorites/destroy/'.$properties_ad->f_id); ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-trash text-white"></i> Remove from  favorites </a>

                                    </span>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end loop -->
                </div>

                <nav aria-label="..." class="py-3">
                    <?= $this->pagination->create_links(); ?>
                </nav>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>