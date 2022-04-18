<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content file_manager">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <button onclick="window.location.href='<?php echo site_url('main/tnw_cloud/data_upload/'.$my_data_detail->folder_id); ?>'" class="btn btn-white btn-icon btn-round  float-left ml-3">
                    <i class="zmdi zmdi-upload"></i>
                </button>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/tnw_cloud'); ?>">TNW Cloud</a></li>
                    <li class="breadcrumb-item active">Images</li>                    
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active"><?php echo $my_data_detail->folder_name; ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active"><?php echo $my_data_detail->other_date; ?></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo site_url('main/tnw_cloud/destroy_folder_photo/'.$my_data_detail->folder_id ); ?>" class="nav-link active btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete all photo
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="a2017">
                        <div class="row clearfix">

                            <?php 
                                foreach ($my_photos as $my_photo) {
                             ?>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="file">
                                        <a href="javascript:void(0);">
                                            <div class="hover">
                                                <button onclick="window.location.href='<?php echo site_url('main/tnw_cloud/destroy_photo/'.$my_photo->tcp_id); ?>'" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                            <div class="image">
                                                <img  data-enlargeable="" src="<?php echo base_url(); ?>uploads/tnw_cloud_photo/<?php echo $my_photo->photo; ?>" alt="img" class="img-fluid">
                                            </div>
                                            <div class="file-name">
                                                <small><?php echo $my_photo->upload_date; ?></small>
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
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>