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
                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Edit Account">
                                <a href="<?php echo site_url('member/manage_account/edit_account'); ?>">
                                    <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                        <div class="flex-container text-center" style="color: white;">
                                            <i class="fa fa-edit fa-3x"></i> <br><br>
                                            Edit Account
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Upload Logo">
                                <a href="<?php echo site_url('member/manage_account/upload_logo'); ?>">
                                    <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                        <div class="flex-container text-center" style="color: white;">
                                            <i class="fa fa-star fa-3x"></i> <br><br>
                                            Upload Logo
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Deactivate Account">
                                <a href="<?php echo site_url('member/deactivate_account/index'); ?>">
                                    <div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
                                        <div class="flex-container text-center" style="color: white;">
                                            <i class="fa fa-user-lock fa-3x"></i> <br><br>
                                            Deactivate Account
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
