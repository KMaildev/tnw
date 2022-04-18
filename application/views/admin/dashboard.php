<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Dashboard
                <small>Welcome to TNW</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">1,3,5,7,4,6,3,2,6,5,9,8,7,9</div>
                    <small class="col-white">Viewer : <?php echo $site_viewer_total->viewer; ?></small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-building"></i>
                                <h4><?php echo number_format($total_sale); ?></h4>
                                <span>Total Sale</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-building col-blue"></i>
                                <h4><?php echo number_format($total_rent); ?></h4>
                                <span>Total Rent</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-building col-red"></i>
                                <h4><?php echo number_format($total_new_properties); ?></h4>
                                <span>Total New Properties</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-user text-success"></i>
                                <h4><?php echo number_format($total_owner_sale); ?></h4>
                                <span>Total Owner Sale</span>
                            </div>
                        </li>                      
                    </ul>
                </div>

                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-user col-amber"></i>
                                <h4><?php echo number_format($total_owner_rent); ?></h4>
                                <span>Total Owner Rent</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-city col-blue"></i>
                                <h4><?php echo number_format($total_want_to_buy); ?></h4>
                                <span>Total Want to Buy</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-city col-red"></i>
                                <h4><?php echo number_format($total_want_to_rent); ?></h4>
                                <span>Total Want to Rent</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="fa fa-calculator text-success"></i>
                                <h4>
                                    <?php 
                                        $all_total =  $total_sale + $total_rent + $total_new_properties + $total_owner_sale + $total_owner_rent + $total_want_to_buy + $total_want_to_rent;
                                        echo number_format($all_total);
                                     ?>
                                </h4>
                                <span>Total</span>
                            </div>
                        </li>                      
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>


<?php $this->load->view('templates/admin_footer'); ?>
