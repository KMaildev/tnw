<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>

 <?php 
    if ($detail) {
 ?>

<section class="blog blog-section portfolio  details mb-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-9  col-sm-12 col-xs-12 py-4">
            	<h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;" >
	                   <?php echo $detail->title; ?>
	            </h3>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item news-item-sm">
                            <a href="#" class="news-img-link">
                                <div class="news-item-img homes">
                                    <center>
                                        <?php 
                                            if ($detail->photo == '') {
                                         ?>
                                            <img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto; padding-top: 10px;">
                                        <?php }else{ ?>
                                            <img src="<?php echo base_url(); ?>uploads/events/<?php echo $detail->photo; ?>" alt="home-1" class="img-responsive" style="width: 190px!important; padding-top: 10px;">
                                        <?php } ?>
                                    </center>
                                </div>
                            </a>
                            <div class="news-item-text">
                                <h3><?php echo $tatnaywon->company_name; ?></h3>
                                <div class="the-agents">
                                    <ul class="the-agents-details">
                                        <li>
                                        	<i class="fa fa-calendar-alt" style="color: #ad6713; font-size: 20px;"></i> 
                                        		<?php echo $detail->e_date ?>
                                        </li>
                                        <li>
                                        	<i class="fa fa-clock" style="color: #ad6713; font-size: 20px;"></i>
                                        	<?php echo $detail->e_time ?>
                                        </li>
                                        <li>
                                        	<i class="fa fa-map" style="color: #ad6713; font-size: 19px;"></i>
                                        	<?php echo $detail->location ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="tel:<?php echo $tatnaywon->phone; ?>" class="news-link">
                                    	Call Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-pots py-3">
                    <div class="blog-info details mb-30">
                        <h5 class="mb-4">Description</h5>
                        <p class="mb-3">
                        	<?php 
                                if ($lang_session) {
                                   echo $detail->description_mm;
                                }else{
                                    echo $detail->description_eng;
                                }
                             ?>
                        </p>
                    </div>
                </div>

                <?php 
                    if ($detail->video) {
                 ?>
                <div class="blog-pots py-3">
                    <div class="blog-info details mb-30">
                        <h5 class="mb-4">Video</h5>
                        <video width="100%" height="240" controls>
                            <source src="<?php echo base_url(); ?>uploads/events/<?php echo $detail->video; ?>" type="video/mp4">
                            <source src="<?php echo base_url(); ?>uploads/events/<?php echo $detail->video; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <?php } ?>
            </div>

            <aside class="col-lg-3 col-md-3 col-sm-12">
                <div class="single widget">
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4>Register Now!</h4>
                            </div>
                            <div class="widget-boxed-">
                                <div class="">
                                    <div class="agent-contact-form-sidebar">
                                        <?php $this->load->view('templates/shared/alert_message'); ?>
                                        <form name="contact_form" method="post" action="<?php echo site_url('events/event_book_now'); ?>">
                                            <input type="hidden" name="event_id" value="<?php echo $detail->e_id; ?>">
                                            <input type="text" id="fname" name="name" placeholder="Full Name" required />
                                            <input type="number" id="pnumber" name="phone" placeholder="Phone Number" required />
                                            <input type="email" id="emailid" name="email" placeholder="Email Address" required />
                                            <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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