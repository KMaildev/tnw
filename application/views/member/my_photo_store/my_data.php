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

                    <?php 
                    $member_session_id = $this->session->userdata('member_id');
                    if ($my_data_detail) {
                        if ($member_session_id == $my_data_detail->users_info_id) { 
                    ?>

                   <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3" >
                        <?php $this->load->view('templates/shared/alert_message'); ?>
                        <a title="Upload Photo" href="<?php echo site_url('member/my_photo_store/data_upload/'.$my_data_detail->folder_id); ?>" class="btn btn-sm m-1 btn-default text-white"><i class="fa fa-upload text-white"></i> Upload </a>

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12" title="<?php echo $my_data_detail->other_date; ?>" >
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="background-color: #f0b95a; padding: 10px; color: white;">
                                  <div class="toast-body">
                                    <i class="fa fa-folder fa-lg"></i>
                                    &nbsp;&nbsp;
                                    <?php echo $my_data_detail->folder_name; ?>
                                  </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12" title="<?php echo $my_data_detail->other_date; ?>" >
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="background-color: #f0b95a; padding: 10px; color: white;">
                                  <a href="<?php echo site_url('member/my_photo_store/destroy_folder_photo/'.$my_data_detail->folder_id ); ?>">
                                      <div class="toast-body">
                                        <i style="color: white;" class="fa fa-trash-alt fa-lg"></i>
                                        &nbsp;&nbsp;
                                        <span style="color: white;">Delete all photo</span>
                                      </div>
                                  </a>
                                </div>
                            </div>

                        </div>

                        <div class="my-address">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <?php 
                                        $member_session_id = $this->session->userdata('member_id');
                                        foreach ($my_photos as $my_photo) {
                                     ?>
                                     <div class="col-lg-3 col-md-3 col-sm-12 p-2">
                                        <div class="carousel-inner">
                                            <div class="active item carousel-item">
                                                <a class="popup-img" href="<?php echo base_url(); ?>uploads/tnw_cloud_photo/<?php echo $my_photo->photo; ?>">
                                                    <img src="<?php echo base_url(); ?>uploads/tnw_cloud_photo/<?php echo $my_photo->photo; ?>" alt="" style="width: 100%; height: 200px;">
                                                </a>
                                            </div>
                                        </div>
                                        <a href="<?php echo site_url('member/my_photo_store/destroy_photo/'.$my_photo->tcp_id); ?>">Delete</a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }else{ ?>
                            <h2>404</h2>
                        <?php } ?>
                    <?php }else{ ?>
                        <?php $this->load->view('templates/shared/404'); ?>
                <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>