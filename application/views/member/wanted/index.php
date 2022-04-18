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
                        </ol>
                    </nav>
                    
                    <div class="section-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Want to Buy">
                                <a href="<?php echo site_url('member/want_to_buy'); ?>">
                                    <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                        <div class="flex-container text-center" style="color: white;">
                                            <i class="fa fa-edit fa-3x"></i> <br><br>
                                            Want to Buy
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Buy Lists">
                                <a href="<?php echo site_url('member/want_to_buy/buy_list'); ?>">
                                    <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                        <div class="flex-container text-center" style="color: white;">
                                            <i class="fa fa-eye fa-3x"></i> <br><br>
                                            Buy Lists
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Want to Rent">
                                <a href="<?php echo site_url('member/want_to_rent'); ?>">
                                    <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                        <div class="flex-container text-center" style="color: white;">
                                            <i class="fa fa-edit fa-3x"></i> <br><br>
                                            Want to Rent
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Want to Rent">
                                <a href="<?php echo site_url('member/want_to_buy/rent_list'); ?>">
                                    <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                        <div class="flex-container text-center" style="color: white;">
                                            <i class="fa fa-eye fa-3x"></i> <br><br>
                                             Rent Lists
                                        </div>
                                    </div>
                                </a>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
