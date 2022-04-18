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

                    <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3" >
                        <div class="my-address">
                            <h3 class="heading">Message Box</h3>

                            <?php if($member_messages){ ?>
                                <?php  
                                    $member_session_id = $this->session->userdata('member_id');
                                    foreach ($member_messages as $member_message) { 
                                        if ($member_session_id == $member_message->user_info_id) {
                                ?>
                                    <div class="card">
                                        <div class="card-header" >
                                        <b> <?php echo $member_message->name; ?></b><br>
                                        <small><i class="fa fa-clock"></i> <?php echo $member_message->other_date; ?></small>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="m-3"><b><?php echo $member_message->subject; ?></b></h5>
                                            <p class="m-3">
                                                <?php echo $member_message->message; ?>
                                            </p>
                                            <a href="mailto:<?php echo $member_message->email; ?>" title="<?php echo $member_message->email; ?>" class="btn btn-primary m-2"><i class="fa fa-envelope-square"></i> Email</a>
                                            <a href="tel:<?php echo $member_message->phone; ?>" title="<?php echo $member_message->phone; ?>" class="btn btn-primary m-2"><i class="fa fa-phone-volume"></i> Phone</a>
                                            <br><br>
                                        </div>
                                    </div>
                                    <br>
                                <?php } ?>
                                <?php } ?>
                            <?php }else{ ?>
                                <div class="alert alert-dismissible alert-success">
                                    <strong>Message not found</strong> 
                                </div>
                            <?php } ?>
                       
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>