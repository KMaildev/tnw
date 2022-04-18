<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<style type="text/css">
 	input::placeholder {
 		opacity: 1;
 		font-size: 13px;
	}
</style>
<div class="inner-pages agents">
	<section class="blog blog-section portfolio">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 py-3">
	                <h3 style="background-color:#25a835; box-shadow: 1px 1px 1px #000000; background-color: white; padding: 12px;">
	                    <?php 
	                		if ($lang_session) {
	                			echo "အကျိုးဆောင်ကုမ္ပဏီမျာ";
	                		}else{
	                			echo "Agents";
	                		}
	                	 ?>
	                </h3>

	                <div class="row">
	                	<?php 
	                		foreach ($agents as $agent) {
	                	?>
                			<div class="col-md-12 col-sm-12 py-2">
		                        <div class="news-item news-item-sm">
		                        	<div class="homes-tag button alt featured pull-left">
	                                    	Agent
	                                	</div>
	                            	<a href="<?php echo site_url('agents/detail/'.$agent->user_id); ?>" class="news-img-link" style="text-align: center; padding-top: 30px;">
                                		<?php 
                                    		if ($agent->logo == '') {
                                    	 ?>
                                        	<img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto;">
                                        <?php }else{ ?>
                                        	<img src="<?php echo base_url(); ?>uploads/<?php echo $agent->logo; ?>" alt="home-1" class="img-responsive w-150" style="width: 150px!important; padding: 6px;">
                                        <?php } ?>
		                            </a>
		                            <div class="news-item-text">
		                                <a href="<?php echo site_url('agents/detail/'.$agent->user_id); ?>">
		                                	<h3>
		                                		<?php 
		                                			if ($agent->company_name == '') {
		                                				echo "-";
		                                			}else{
		                                				echo $agent->company_name;
		                                			}
		                                		 ?>
		                                	</h3>
		                                </a>
		                                <div class="the-agents">
		                                    <ul class="the-agents-details">
		                                        <li>
		                                        	<i class="fa fa-phone-volume" style="color: #ad6713; font-size: 20px;"></i> 
		                                        	<a href="tel:<?php echo $agent->phone; ?>"> 
		                                        		<?php 
		                                        			if ($agent->phone == '') {
		                                        				echo "No Phone Number";
		                                        			}else{
		                                        				echo $agent->phone;
		                                        			}
		                                        		 ?>
		                                        	</a>
		                                        </li>
		                                        <li>
		                                        	<i class="fa fa-envelope-square" style="color: #ad6713; font-size: 20px;"></i>
		                                        	<a href="mailto:<?php echo $agent->email; ?>"> 
		                                        		<?php 
		                                        			if ($agent->email == '') {
		                                        				echo "No Email";
		                                        			}else{
		                                        				echo $agent->email;
		                                        			}
		                                        		 ?>
		                                        	</a>
		                                        </li>
		                                        <li>
		                                        	<i class="fa fa-map" style="color: #ad6713; font-size: 19px;"></i>
		                                        	<?php 
	                                        			if ($agent->address == '') {
	                                        				echo "No address";
	                                        			}else{
	                                        				echo $agent->address;
	                                        			}
	                                        		 ?>
		                                        </li>
		                                        
		                                    </ul>
		                                </div>

		                                <div class="panel-footer clearfix"> 
			                            	<div class="col-sm-12 col-xs-12 text-right sm-text-center"> 
			                            		<a href="<?php echo site_url('agents/detail/'.$agent->user_id); ?>" title="<?php echo $agent->company_name; ?>"> 
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

	                	<div class="py-3">
	                        <form>
				            	<div class="input-group">
		                        	<input class="form-control" type="text" name="keyword" placeholder="<?php echo ($lang_session) ? "ကုမ္ပဏီအမည်ဖြင့် ရှာဖွေနိုင်ပါသည်။" : "e.g Company Name"; ?>" autocomplete="off" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>">
		                        	<span class="input-group-btn">
		                    			<button class="btn btn-default btn-sm">
		                    				<i class="fa fa-search fa-xs" style="font-size: 14px;"></i>
		                    			</button>
		                    		</span>
		                    	</div>
				            </form>
	                    </div>

		                

	                	<div class="widget-boxed mt-33 mt-5" style="background-color: white;">
	                        <h5 class="title">
	                            <?php 
	                                if ($lang_session) {
	                                    echo "စီစစ်ပြီး ရှာပါ";
	                                }else{
	                                    echo "Filter";
	                                }
	                             ?>
	                        </h5>
	                        <?php $this->load->view('templates/shared/filter_search'); ?>
	                    </div>

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