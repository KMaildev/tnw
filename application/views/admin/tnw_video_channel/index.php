<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>TNW Video Channel
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> TNW Video Channel</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">List</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <a href="<?php echo site_url('main/tnw_video_channel/create'); ?>" class="btn btn-warning btn-sm" title="Upload" style="color: white;">
                                Upload
                            </a>
                        </h2>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                        	<div class="col-lg-12 col-md-12 col-sm-12" id="myDIV">
                                <div class="form-group">          
                                    <form action="" method="post">
                                        <input type="text" class="form-control" placeholder="Search" autocomplete="off" name="folder_name" required=""> 
                                    </form>      
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <?php 
                        foreach ($videos as $video) {
                     ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <video width="100%" height="240" controls>
                          <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $video->video; ?>" type="video/mp4">
                          <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $video->video; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div class="card">
                            <div class="body">                        
                                <div class="mt-3 d-flex justify-content-between">
                                    <div>
                                        <i class="fa fa-eye mr-2"></i>
                                        <a href="<?php echo site_url('main/tnw_video_channel/show/'.$video->vc_id); ?>">Show</a>
                                    </div>
                                    <div><i class="zmdi zmdi-calendar mr-2"></i><?php echo $video->upload_date; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
           
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>