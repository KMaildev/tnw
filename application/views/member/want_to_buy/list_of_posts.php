<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="inner-pages agents">
	<section class="blog blog-section portfolio">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	                <div class="row">
	                	<div class="col-lg-12 col-md-12 col-sm-12 py-4">
	                		<div class="block-heading" style="background-color: white;">
		                		<h4>
	                                <a href="<?php echo site_url('member/dashboard'); ?>">
	                                	<span class="heading-icon">
		                                    <i class="fa fa-building"></i>
		                                </span>
	                                </a>
	                                <a href="<?php echo site_url('member/dashboard'); ?>">
	                                    <span class="">Dashboard / </span>
	                                </a>
	                                <span class="">
	                                    <a href="<?php echo site_url('member/wanted'); ?>">Wanted</a>
	                                    / 
	                                    <a href="<?php echo site_url('member/want_to_buy/list_of_posts'); ?>">posts</a>
	                                </span>
	                            </h4>
	                        </div>
	                        <?php $this->load->view('templates/shared/alert_message'); ?>
	                        <?php foreach ($list_of_posts as $list_of_post) { ?>
			                    <div class="col-md-12 col-lg-12 col-xs-12 py-3">
			                        <div class="news-item news-item-sm">
			                            <div class="news-item-text">
			                                <a href="##">
			                                	<h3><?php echo $list_of_post->title; ?></h3>
			                                </a>
			                                <div class="the-agents">
			                                    <ul class="the-agents-details">
			                                        <li><a href="#"><i class="fa fa-map"></i> <?php echo $list_of_post->region; ?> | <?php echo $list_of_post->townships; ?></a></li>
			                                        <li><a href="#"><i class="fa fa-building"></i> <?php echo $list_of_post->property_type; ?> </a></li>
			                                        <li><a href="#"><i class="fa fa-dollar-sign"></i> <?php echo $list_of_post->budget_from; ?> to <?php echo $list_of_post->budget_to; ?> <?php echo $list_of_post->currency; ?> </a></li>
			                                    </ul>
			                                </div>
			                                <div class="news-item-bottom">
			                                    <a href="" class="news-link"></a>
			                                    <div class="admin">

			                                        <button title="View Detail"  class="btn  btn-sm" data-toggle="modal" data-target="#detailModel<?php echo $list_of_post->w_id; ?>" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-eye text-white"></i> Detail </button>
			                                        <span>&nbsp;&nbsp;&nbsp;</span>

			                                        <div class="modal fade" id="detailModel<?php echo $list_of_post->w_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													  <div class="modal-dialog" role="document">
													    <div class="modal-content">
													      <div class="modal-header">
													        <h5 class="modal-title" id="exampleModalLabel"><?php echo $list_of_post->title; ?></h5>
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
													          <span aria-hidden="true">&times;</span>
													        </button>
													      </div>
													      <div class="modal-body">
															<div class="col-md-12 col-sm-12" style="padding: 10px;">
									                            <div class="homes-content">
									                                <h3>
									                                    <a href="##">
									                                        <?php echo $list_of_post->title; ?>
									                                    </a>
									                                </h3>
									                                <p class="homes-address mb-3">
									                                    <a href="##">
									                                        <i class="fa fa-map-marker"></i>
									                                        <span>
									                                            <?php echo $list_of_post->region; ?> | <?php echo $list_of_post->townships; ?>
									                                        </span>
									                                    </a>
									                                    <br>
									                                    <i class="fa fa-star"></i>
									                                    <span title="ADS Number">
									                                        <b><?php echo $list_of_post->ad_number; ?></b>
									                                    </span>
									                                </p>
									                            
									                                <ul class="homes-list clearfix">
									                                    <li>
									                                        <i class="fa fa-bed" aria-hidden="true"></i>
									                                        <span><?php echo $list_of_post->bedroom; ?></span>
									                                    </li>
									                                    <li>
									                                        <i class="fa fa-bath" aria-hidden="true"></i>
									                                        <span><?php echo $list_of_post->bathroom; ?></span>
									                                    </li>
									                                    <li>
									                                        <i class="fa fa-object-group" aria-hidden="true"></i>
									                                        <span><?php echo $list_of_post->area; ?> <?php echo $list_of_post->area_type; ?></span>
									                                    </li>
									                                    <li>
									                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
									                                        <span><?php echo $list_of_post->property_status; ?></span>
									                                    </li>

									                                    <li>
									                                        <i class="fas fa-users" aria-hidden="true"></i>
									                                        <span><?php echo $list_of_post->agent_allow_status; ?></span>
									                                    </li>

									                                    <li>
									                                        <i class="fas fa-building" aria-hidden="true"></i>
									                                        <span><?php echo $list_of_post->property_type; ?></span>
									                                    </li>

									                                    <li>
									                                        <i class="fas fa-phone-volume" aria-hidden="true"></i>
									                                        <span><?php echo $list_of_post->phone; ?></span>
									                                    </li>
									                                    
									                                </ul>

									                                <div class="price-properties">
									                                    <h3 class="title mt-3">
									                                        <i class="fa fa-money-check"></i>
									                                        	<?php echo $list_of_post->budget_from; ?> to <?php echo $list_of_post->budget_to; ?> <?php echo $list_of_post->currency; ?>
									                                    </h3>
									                                	
									                                </div>
									                                <p style="text-align: justify;">
								                                		<?php echo $list_of_post->description_eng; ?>
								                                	</p>
								                                	<hr>
								                                	<p style="text-align: justify;">
								                                		<?php echo $list_of_post->description_mm; ?>
								                                	</p>

									                            </div>
									                        </div>
													      </div>
													      <div class="modal-footer">
													        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													      </div>
													    </div>
													  </div>
													</div>

			                                        <a title="Delete" onclick="return confirm('Are you sure want to delete?');" href="<?php echo site_url('member/want_to_buy/destroy/'.$list_of_post->w_id); ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-trash text-white"></i> Delete </a>
			                                        <span>&nbsp;&nbsp;&nbsp;</span>

			                                        <a title="Mail" href="<?php echo site_url('member/want_to_buy/edit/'.$list_of_post->w_id); ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-edit text-white"></i> Edit </a>
			                                        <span>&nbsp;&nbsp;&nbsp;</span>

			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                <?php } ?>
		                </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
</div>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>