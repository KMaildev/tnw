<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="py-4">
    <div class="container">
        <div class="row">
            <section class="py-3">
                <div class="container">
                    <h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 10px; width: 100%;" >
                        TNW Video Channel
                    </h3>
                    <div class="row">
                        <?php 
                            if ($videos) {
                                foreach ($videos as $video) {
                         ?>
                        <div class="item col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="project-single" style="height: 380px; background-color: white;">
                                <div class="project-inner">
                                    <div class="homes">
                                        <?php 
                                            if ($video->video == '') {
                                         ?>
                                            <img src="<?php echo base_url(); ?>data/default.jpg" class="img-fluid" alt="">
                                        <?php }else{ ?>
                                            <video width="100%" height="240" controls>
                                              <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $video->video; ?>" type="video/mp4">
                                              <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $video->video; ?>" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <p>
                                        <a href="<?php echo site_url('tnw_video_channel/show/'.$video->vc_id); ?>" style="color: black;">
                                            <small><?php echo $video->title; ?></small>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                            <?php } ?>
                        <?php }else{ ?>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 py-3">
                                <h3><i>Coming soon</i></h3>
                            </div>
                        <?php } ?>
                    </div>
                    <nav aria-label="..." class="pt-5">
                       <?= $this->pagination->create_links(); ?>
                    </nav>
                </div>
            </section>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
