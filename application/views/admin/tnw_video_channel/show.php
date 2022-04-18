<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Upload Video
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/latest_news'); ?>"><i class="fa fa-building"></i> Upload Video</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="body">

                        <video width="350" height="240" controls>
                          <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $detail->video; ?>" type="video/mp4">
                          <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $detail->video; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>

                        <h6 class="text-success mt-4">
                            <a href="<?php echo site_url('main/tnw_video_channel/destroy_video/'.$detail->vc_id); ?>" style="color: red;">Delete</a>
                        </h6>

                        <h6 class="text-success mt-4">
                        	<?php echo $detail->upload_date; ?>
                        </h6>
                        <h5 class="mt-0 text-muted">
                        	<b><?php echo $detail->title; ?> </b>
                        </h5>
                        <p class="text-muted">
                        	<?php echo $detail->description; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
