<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #db9c30">
                        <li class="breadcrumb-item">
                            <a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 17px;">
                                <i class="fa fa-building"></i> Dashboard
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-md-12 py-3" style="background-color: #dedee5; padding: 20px; box-shadow: 0px 0px 1px 1px #000000;">
            <div>
                <h3><i class="fa fa-star"></i> Package</h3><br>
            </div>
            <div class="row">
                <?php foreach ($all_packages as $basic_packag) { ?>
                    <div class="col-md-4 p-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h3><?php echo $basic_packag->package_name ?></h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-left m-2" style="background-color: #fff3cf; color: black; padding: 9px;">
                                    <i class="fa fa-star fa-xs"></i>
                                    <strong class="fs-18"><?php echo $basic_packag->point_charges; ?></strong> Point
                                </p>
                                <p class="card-text text-left m-2" style="background-color: #fff3cf; color: black; padding: 9px;">
                                    <i class="fa fa-check-square fa-xs"></i>
                                    <strong class="fs-18"><?php echo $basic_packag->no_of_posts; ?></strong> Posts
                                </p>
                                <p class="card-text text-left m-2" style="background-color: #fff3cf; color: black; padding: 9px;">
                                    <i class="fa fa-check-square fa-xs"></i>
                                    <strong class="fs-18"><?php echo $basic_packag->video_clip; ?></strong> Video Clip
                                </p>
                                <p class="card-text text-left m-2" style="background-color: #fff3cf; color: black; padding: 9px;">
                                    <i class="fa fa-check-square fa-xs"></i>
                                    <strong class="fs-18"><?php echo $basic_packag->facebook_ads; ?></strong> Facebook Ads
                                </p>
                                <p class="card-text text-left m-2" style="background-color: #fff3cf; color: black; padding: 9px;">
                                    <i class="fa fa-calendar-alt fa-xs"></i>
                                    <strong class="fs-18"><?php echo $basic_packag->package_type; ?></strong>
                                </p>

                                <p class="card-text text-left m-2" style="background-color: #fff3cf; color: black; padding: 9px;">
                                    <i class="fa fa-star fa-xs"></i>
                                    <strong class="fs-18">
                                        <?php
                                        if ($basic_packag->discount == '') {
                                            echo 'No Discount';
                                        } else {
                                            echo $basic_packag->discount;
                                            echo "% Discount";
                                        }
                                        ?>
                                    </strong>
                                </p>

                                <div class="card-footer text-muted" style="background-color: #fa8f04; color: white; padding: 9px;">
                                    <b style="color: white;"><?php echo number_format($basic_packag->price); ?> Kyats</b>
                                </div>
                            </div>
                            <a href="<?php echo site_url('member/packages/order_now/' . $basic_packag->package_id); ?>" style="background-color: green; color: white; padding: 9px;">
                                <i class="fa fa-cart-plus"></i> Order Now
                            </a>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>

<br><br><br><br>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>