<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<?php 
    if ($detail) {
 ?>
<section class="blog blog-section" style="background-color: #fff3cf;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
            	<h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;">
                    <?php echo $detail->title; ?>
                </h3>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item details no-mb2">
                            <div class="news-item-img">
                                <?php 
                                    if ($detail->video == '') {
                                 ?>
                                    <img src="<?php echo base_url(); ?>data/default.jpg" class="img-fluid" alt="">
                                <?php }else{ ?>
                                    <video width="320" height="240" controls>
                                      <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $detail->video; ?>" type="video/mp4">
                                      <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $detail->video; ?>" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                <?php } ?>
                            </div>
                            <div class="news-item-text details pb-0">
                                <h3><?php echo $detail->title; ?></h3>
                                <div class="dates">
                                    <span class="date"><?php echo $detail->upload_date; ?> &nbsp;</span>
                                </div>
                                <div class="">
                                    <p class="mb-3">
                                        <?php echo $detail->description; ?>   
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-lg-3 col-md-12" style="background-color: gray">
                <div class="widget">
                    <div class="recent-post">
                        <?php 
                        $i = 0;
                        foreach ($videos as $video) {
                            $i++;
                            if ($i == 4) {
                                break;
                            }
                            if ($video->video == '') {
                         ?>
                            <img src="<?php echo base_url(); ?>data/default.jpg" class="img-fluid" alt="">
                        <?php }else{ ?>
                            <video width="100%" height="240" controls>
                              <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $video->video; ?>" type="video/mp4">
                              <source src="<?php echo base_url(); ?>uploads/video_channel/<?php echo $video->video; ?>" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            <p>
                                <a href="<?php echo site_url('tnw_video_channel/show/'.$video->vc_id); ?>" style="color: white;">
                                    <small><?php echo $video->title; ?></small>
                                </a>
                            </p>
                        <?php } ?>
                    <?php } ?>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php }else{ ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>