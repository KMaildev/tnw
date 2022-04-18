<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<section class="user-page">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2 py-5">

                <div class="dashborad-box stat">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="background-color: #db9c30">
                            <li class="breadcrumb-item">
                                <a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 17px;">
                                    <i class="fa fa-building"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: white; font-size: 17px;">Upload Ads</li>
                        </ol>
                        <?php $this->load->view('templates/posts_status'); ?>
                    </nav>
                    <?php
                        if ($my_active_packages) {
                            $order_total = [];
                            foreach ($my_active_packages as $my_active_package) {
                                if (date("Y-m-d") >= $my_active_package->end_date) {
                                    continue;
                                }
                                $order_total[] = $my_active_package->no_of_posts;
                            }
                            $total_buy_posts =  array_sum($order_total);
                        }else{
                            $total_buy_posts = 0;
                        }
                    
                        $free_package = (empty($packages)) ? 0 : $packages->no_of_posts;
                        $available_post = $free_package + $total_buy_posts;
                        $already_posts = $already_posts;
                        $total_post = $available_post - $already_posts;
                        if ($total_post < 1) { 
                    ?>
                    <?php $this->load->view('templates/shared/post_unavailable'); ?>
                    <?php }else{ ?>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="For Sale">
                                    <a href="<?php echo site_url('member/by_owner_for_sale'); ?>">
                                        <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                            <div class="flex-container text-center" style="color: white;">
                                                <i class="fa fa-list-alt fa-3x"></i> <br><br>
                                                For Sale
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="For Rent">
                                    <a href="<?php echo site_url('member/by_owner_for_rent'); ?>">
                                        <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                            <div class="flex-container text-center" style="color: white;">
                                                <i class="fa fa-edit fa-3x"></i> <br><br>
                                                For Rent
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
