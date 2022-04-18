<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
?>
<style type="text/css">
	article {
	  margin: 20px auto;
	  width: 100%;
	  padding: 1em;
	  font-family: sans-serif;
	  font-weight: normal;
	  font-size: 1em;
	  color:#FFC345;
	}

	.quote {
	  background: white;
	  padding: 15px 20px 5px 15px;
	  border-radius: 5px;
	  margin-bottom: 30px;
	}

	.quote:after {
	  content: '';
	  width: 0px;
	  height: 0px;
	  border-style: solid;
	  border-width: 12px 18px 0 18px;
	  border-color: white transparent transparent transparent;
	  position: relative;
	  top: 37px;
	  left: 20px;
	}

	.student {
	  margin-left: 25px;
	  margin-bottom: 80px;
	}

	.student .photo {
	  /*background-color: #ccc;*/
	  border-radius: 100px;
	  width: 60px;
	  height: 60px;
	  float: left;
	  margin-right: 10px;
	}

	.student p {
	  position: relative;
	  top: 5px;
	  text-transform: uppercase;
	}

	.student p:nth-child(2) {
	  font-size: 16px;
	  font-weight: 600;
	  margin-bottom: 0;
	}

	.student p:nth-child(3) {
	  font-size: 14px;
	  color: black;
	}
</style>

<div>
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 py-3">

				<p style="font-size: 30px;">
					Testimonials
				</p>
				<hr>

				<a href="<?php echo site_url('pages/testimonials'); ?>" class="btn myBtn btn-md">
	                All City
	            </a>
	            <?php 
                    foreach ($data_regions as $key => $data_region) {
                    	if ($key == 9) {
                    		break;
                    	}
                    	$region = explode(' Region', $data_region->region);
                ?>
                	<a href="<?php echo site_url('pages/testimonials/category/'.$data_region->region_id); ?>" class="btn myBtn btn-md">
		                <?php 
		                	echo $region[0];
		                ?>
		            </a>
             	<?php } ?>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">
				<article>
				  	<div id="owl">
				    	<div class="column row">
				    		<?php 
				    			if (!$testimonials) {
				    				$this->load->view('templates/shared/no_result');
				    			}
				    		 ?>
				    		<?php 
				    			foreach ($testimonials as $key => $value) {
				    		 ?>
				      		<div class="large-12 columns testimonial">
				        		<div class="quote">
				          			<p style="color: black; width: 100%;">
				          				<?php echo $value->testimonial; ?>
				          			</p>
				        		</div>
				        		<div class="student">
				          			<div class="photo round-image">
				          				<?php 
				          					if ($value->profile_photo == '') {
				          				?>
				          					<img src="<?php echo base_url(); ?>/data/default/user.gif">
				          				<?php }else{ ?>
				          					<img src="<?php echo base_url(); ?>./uploads/<?php echo $value->profile_photo; ?>" style="width: 100%;">
				          				<?php } ?>
				          			</div>
				          			<p><?php echo $value->name; ?></p>
				          			<p><?php echo $value->company; ?></p>
				        		</div>
				      		</div>
				      		<?php } ?>
				    	</div>
				  	</div>
				</article>
			</div>
		</div>
	</div>
</div>



<?php $this->load->view('templates/footer'); ?>