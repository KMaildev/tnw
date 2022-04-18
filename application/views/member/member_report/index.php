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
                    <?php foreach ($reports as $report) { ?>
                        <div class="col-md-6 col-sm-12" style="padding: 10px;">
                            <div class="homes-content">
                                <h3>
                                    <a href="<?php echo site_url('propertydetail/index/'.$report->sale_id); ?>">
                                        <?php echo $report->title_eng; ?>
                                    </a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <i class="fa fa-star"></i>
                                    <span title="ADS Number">
                                        <b><?php echo $report->ad_number; ?></b>
                                    </span>
                                </p>
                            
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span><?php echo $report->rooms; ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span><?php echo $report->bathroom; ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span><?php echo $report->area; ?> <?php echo $report->area_type; ?></span>
                                    </li>
                                    <li>
                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                        <span><?php echo $report->property_status; ?></span>
                                    </li>
                                    
                                </ul>

                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="<?php echo site_url('propertydetail/index/'.$report->r_id); ?>"><?php echo $report->price; ?> <?php echo $report->price_type; ?></a>
                                    </h3>
                                </div>
                                <div class="footer">

                                    <span>
                                        <a title="Remove" href="<?php echo site_url('include/report/destroy/'.$report->r_id); ?>" class="btn btn-sm m-1"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;" ><i class="fa fa-trash text-white"></i> Remove</a>
                                    </span>

                                    <span>
                                        <a title="View Report" href="#" class="btn btn-sm m-1"  data-toggle="modal" data-target="#exampleModal<?php echo $report->r_id; ?>"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-flag text-white"></i> View Report</a>
                                    </span>

                                    <div class="modal fade" id="exampleModal<?php echo $report->r_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <?php echo $report->other_date; ?>
                                            </h5>
                                          </div>
                                          <div class="modal-body">
                                            <p>
                                                <?php echo $report->description; ?>
                                            </p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <span>
                                        <a title="Remove" href="<?php echo site_url('propertydetail/index/'.$report->post_id); ?>" class="btn btn-sm m-1"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-eye text-white"></i> Detail </a>
                                    </span>

                                    <span>
                                        <a title="Remove" href="<?php echo site_url('member/for_sale/edit/'.$report->post_id); ?>" class="btn btn-sm m-1"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-edit text-white"></i> Edit </a>
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