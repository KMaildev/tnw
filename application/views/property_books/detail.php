<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<?php 
    if ($detail) {
 ?>
<section class="blog blog-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
            	<h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;">
                    <?php echo $detail->title; ?>
                </h3>

                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item details no-mb2">
                            <a href="#" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>uploads/<?php echo $detail->photo; ?>" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text details pb-0">
                                <h3><?php echo $detail->title; ?></h3>
                                <div class="dates">
                                    <span class="date"><?php echo $detail->upload_date; ?> &nbsp;</span>
                                    <ul class="action-list pl-0">

                                    	<li class="action-item">
                                        	<span>By, Admin &nbsp;</span>
                                        </li>

                                    </ul>
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

           	<aside class="col-lg-3 col-md-12 car">
                <div class="widget">
                    <!-- Search Fields -->
                    <div class="recent-post py-5">
                        <?php $this->load->view('templates/shared/tags'); ?>
                    </div>
                </div>
            </aside>
        </div>

        <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-5">
            <div class="container">
                <h5>
                    <?php 
                        if ($lang_session) {
                            echo "အခြား အိမ်ခြံမြေ စာအုပ်များ";
                        }else{
                            echo "Related Property Books";
                        }
                     ?>
                </h5>
                <div class="row portfolio-items">

                    <?php 
                        foreach ($recent_books as $recent_books) {
                     ?>
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <a href="<?php echo site_url('property_books/show/'.$recent_books->pb_id); ?>" class="homes-img">
                                        <?php 
                                            if ($recent_books->photo == '') {
                                         ?>
                                            <img src="<?php echo base_url(); ?>data/default.jpg" class="img-fluid" alt="">
                                        <?php }else{ ?>
                                            <img src="<?php echo(base_url()); ?>/uploads/<?php echo $recent_books->photo; ?>" style="width: 100%; height: 250px;" class="img-responsive">
                                        <?php } ?>
                                    </a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="<?php echo site_url('property_books/show/'.$recent_books->pb_id); ?>">
                                	<?php echo $recent_books->title; ?>
                                </a></h3>
                                <p class="homes-address mb-3">
                                    <a href="<?php echo site_url('property_books/show/'.$recent_books->pb_id); ?>">
                                        <i class="fa fa-calendar-plus"></i><span>
                                        	<?php echo $recent_books->upload_date; ?>  &nbsp;/
                                        </span>
                                    </a>

                                    <a href="<?php echo site_url('property_books/show/'.$recent_books->pb_id); ?>">
                                        <span>
                                        	By, Admin
                                        </span>
                                    </a>
                                </p>
                                <div class="footer">
                                    <a title="View Detail" href="<?php echo site_url('property_books/show/'.$recent_books->pb_id); ?>" class="btn  btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> Read more... </a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

    </div>
</section>

<?php }else{ ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>