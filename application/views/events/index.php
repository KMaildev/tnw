<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="inner-pages agents">
	<section class="blog blog-section portfolio">
	    <div class="container">
	        <div class="row">

	            <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9 col-sm-12">
	                <h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;" >
	                    Events
	                </h3>
	                <div class="row">
	                	<?php 
	                		foreach ($events as $event) {
	                	 ?>
	                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 py-3">
	                        <div class="news-item news-item-sm">
	                            <a href="<?php echo site_url('events/detail/'.$event->e_id); ?>" class="news-img-link">
	                                <div class="news-item-img homes" >

	                                	<center>
	                                		<?php 
	                                    		if ($event->photo == '') {
	                                    	 ?>
	                                        	<img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto; padding-top: 10px;">
	                                        <?php }else{ ?>
	                                        	<img src="<?php echo base_url(); ?>uploads/events/<?php echo $event->photo; ?>" alt="home-1" class="img-responsive" style="width: 190px!important; padding-top: 10px;">
	                                        <?php } ?>
	                                	</center>

	                                </div>
	                            </a>
	                            <div class="news-item-text">
	                                <a href="<?php echo site_url('events/detail/'.$event->e_id); ?>">
	                                	<h3><?php echo $event->title; ?></h3>
	                                </a>
	                                <div class="the-agents">
	                                    <ul class="the-agents-details">
	                                        <li><a href="#">Date: <?php echo $event->e_date ?></a></li>
	                                        <li><a href="#">Time: <?php echo $event->e_time ?></a></li>
	                                        <li><a href="#">Location: <?php echo $event->location ?></a></li>
	                                    </ul>
	                                </div>
	                                <div class="news-item-bottom">
	                                    <a href="" class="news-link"></a>
	                                    <div class="admin">
	                                        <a title="Detail" href="<?php echo site_url('events/detail/'.$event->e_id); ?>" class="btn btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"> View Detail</a>
	                                        <span>&nbsp;&nbsp;&nbsp;</span>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <?php } ?>
	                </div>
	            </div>

	            <aside class="col-lg-3 col-md-3 col-sm-12 car">
	                <div class="widget">
	                    <div class="recent-post py-3">
	                        <?php $this->load->view('templates/shared/tags'); ?>
	                    </div>
	                </div>
	            </aside>

	          

	        </div>
	    </div>
	</section>
</div>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>