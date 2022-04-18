<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<script src="<?php echo base_url(); ?>assets/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<div class="inner-pages agents">
	<section class="blog blog-section portfolio">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 py-3">
	                <h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;">
	                	<?php 
	                		echo ($lang_session) ? "ဆောက်လုပ်ရေးကုမ္ပဏီများ" : "Property Developers";
	                	 ?>
	                </h3>
	                <div class="row">
		                <div class="col-lg-6 col-md-6 col-sm-12">
					        <div class="at-col-default-mar">
					            <form>
					            	<div class="input-group">
			                        	<input class="form-control" type="text" name="keyword" placeholder="<?php echo ($lang_session) ? "ကုမ္ပဏီအမည်ဖြင့် ရှာဖွေနိုင်ပါသည်။" : "e.g Company Name"; ?>" autocomplete="off" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>">
			                        	<span class="input-group-btn">
			                    			<button class="btn btn-primary" type="submit">
			                    				Search
			                    			</button>
			                    		</span>
			                    	</div>
					            </form>
					        </div>
					    </div>
					    <div class="col-lg-12 col-md-12 col-sm-12 py-2" hidden="">
	                	 	<!-- logo slider -->
	                	 	<?php 
	                	 		$this->load->view('templates/shared/developers_logo_slider_desktop');
	                	 	 ?>
						    <!-- logo slider -->
				        </div>
					</div>

	                <div class="row">
	                	<?php 
	                		foreach ($developers as $developer) {
	                	 ?>
	                    <div class="col-md-12 col-xs-12 py-2">
	                        <div class="news-item news-item-sm">
	                            <a href="<?php echo site_url('developers/detail/'.$developer->user_id); ?>" class="news-img-link">
	                            	<br>
                                	<center>
                                		<?php 
                                    		if ($developer->logo == '') {
                                    	 ?>
                                        	<img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto;">
                                        <?php }else{ ?>
                                        	<img src="<?php echo base_url(); ?>uploads/<?php echo $developer->logo; ?>" alt="home-1" class="img-responsive w-150" style="width: 130px!important; border-radius: 50%;">
                                        <?php } ?>
                                	</center>
	                            </a>
	                            <div class="news-item-text">
	                                <a href="<?php echo site_url('developers/detail/'.$developer->user_id); ?>">
	                                	<h3>
	                                		<?php 
	                                			if ($developer->company_name == '') {
	                                				echo "-";
	                                			}else{
	                                				echo $developer->company_name;
	                                			}
	                                		 ?>
	                                	</h3>
	                                </a>
	                                <div class="the-agents">
	                                    <ul class="the-agents-details">
	                                        <li>
	                                        	<i class="fa fa-phone-volume" style="color: #ad6713; font-size: 20px;"></i> 
	                                        	<a href="tel:<?php echo $developer->phone; ?>"> 
	                                        		<?php 
	                                        			if ($developer->phone == '') {
	                                        				echo "No Phone Number";
	                                        			}else{
	                                        				echo $developer->phone;
	                                        			}
	                                        		 ?>
	                                        	</a>
	                                        </li>
	                                        <li>
	                                        	<i class="fa fa-envelope-square" style="color: #ad6713; font-size: 20px;"></i>
	                                        	<a href="mailto:<?php echo $developer->email; ?>"> 
	                                        		<?php 
	                                        			if ($developer->email == '') {
	                                        				echo "No Email";
	                                        			}else{
	                                        				echo $developer->email;
	                                        			}
	                                        		 ?>
	                                        	</a>
	                                        </li>
	                                        <li>
	                                        	<i class="fa fa-map" style="color: #ad6713; font-size: 19px;"></i>
	                                        	<?php 
                                        			if ($developer->address == '') {
                                        				echo "No address";
                                        			}else{
                                        				echo $developer->address;
                                        			}
                                        		 ?>
	                                        </li>
	                                    </ul>
	                                </div>
	                                <div class="panel-footer clearfix"> 
		                            	<div class="col-sm-12 col-xs-12 text-right sm-text-center"> 
		                            		<a href="<?php echo site_url('developers/detail/'.$developer->user_id); ?>" title="<?php echo $developer->company_name; ?>"> 
		                            			<button type="button" class="btn-sm" style="color: white; background-color: #a05a05; box-shadow: 2px 2px gray;">
		                            				<?php 
		                            					echo ($lang_session) ? "<span style='font-size: 15px;'>အသေးစိတ်ကြည့်ရန်</span>" : "More Detail";
		                            				 ?>
		                            			</button> 
		                            		</a> 
		                            	</div> 
		                            </div>
	                                
	                            </div>
	                        </div>
	                    </div>
	                    <?php } ?>
	                </div>
	            </div>
	            <aside class="col-lg-3 col-md-12 car">
	                <div class="widget">
	                    <div class="recent-post py-3">
	                        <?php $this->load->view('templates/shared/tags'); ?>
	                    </div>
	                </div>
	            </aside>
	        </div>
	        <nav aria-label="..." class="pt-0">
	           <?= $this->pagination->create_links(); ?>
	        </nav>
	    </div>
	</section>
</div>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>