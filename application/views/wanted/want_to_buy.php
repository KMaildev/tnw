<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<div class="inner-pages agents">
	<section class="blog blog-section portfolio">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

	                <div class="row">
	                	<div class="col-lg-8 col-md-12 col-xs-12 col-sm-12">
	                		<h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;" >
		                        <?php 
		                        	if ($lang_session) {
		                        		echo "အိမ်ဝယ်ရန်ရှာဖွေနေသူများ";
		                        	}else{
		                        		echo "People Who Want To Buy";
		                        	}
		                         ?>
		                    </h3>

		                    <?php 
		                    	foreach ($want_to_buy_lists as $want_to_buy_list) {
		                     ?>
		                    <div class="col-md-22 col-xs-12 py-2">
		                        <div class="news-item news-item-sm">
		                            <div class="news-item-text">
		                                <a href="agencies-details.html">
		                                	<h3><?php echo $want_to_buy_list->title; ?></h3>
		                                </a>
		                                <div class="the-agents">
		                                    <ul class="the-agents-details">
		                                        <li>
		                                        	<i class="fa fa-map"></i>
		                                        	<?php 
		                                        		if ($lang_session) {
		                                        			echo $want_to_buy_list->region_mm;
		                                        		}else{
		                                        			echo $want_to_buy_list->region;
		                                        		}

		                                        	 ?>
		                                        </li>

		                                        <li>
		                                        	<i class="fa fa-city"></i>
		                                        	<?php 
		                                        		if ($lang_session) {
		                                        			echo $want_to_buy_list->townships_mm;
		                                        		}else{
		                                        			echo $want_to_buy_list->townships;
		                                        		}

		                                        	 ?>
		                                        </li>

		                                        <li>
		                                        	<i class="fa fa-building"></i> 
		                                        	<?php 
		                                        		if ($lang_session) {
		                                        			echo $want_to_buy_list->property_type_mm;
		                                        		}else{
		                                        			echo $want_to_buy_list->property_type;
		                                        		}
		                                        	 ?>
		                                        </li>
		                                        <li>
		                                        	<i class="fa fa-dollar-sign"></i> 
		                                        	<?php
		                                        		if ($lang_session) {
		                                        			if ($want_to_buy_list->currency == 'MMK(Lakhs)') {
		                                        				echo "သိန်း ";
		                                        				echo $want_to_buy_list->budget_from;
		                                        				echo " မှ ";
		                                        				echo $want_to_buy_list->budget_to;
		                                        				echo " အတွင်း";
		                                        			}elseif($want_to_buy_list->currency == 'USD'){
		                                        				echo $want_to_buy_list->budget_from;
			                                        			echo " to ";
			                                        			echo $want_to_buy_list->budget_to;
			                                        			echo " ";
			                                        			echo $want_to_buy_list->currency;
		                                        			}
		                                        			
		                                        		}else{
		                                        			echo $want_to_buy_list->budget_from;
		                                        			echo " to ";
		                                        			echo $want_to_buy_list->budget_to;
		                                        			echo " ";
		                                        			echo $want_to_buy_list->currency;
		                                        		}
		                                        	 ?>
		                                        </li>
		                                    </ul>
		                                </div>
		                                <div class="news-item-bottom">
		                                    <a href="" class="news-link"></a>
		                                    <div class="admin">
		                                        <a href="<?php echo site_url('wanted/show/'.$want_to_buy_list->w_id); ?>" title="Detail" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"> View Detail</a>
		                                        <span>&nbsp;&nbsp;&nbsp;</span>

		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                	<?php } ?>
		                </div>

		                <aside class="col-lg-4 col-md-4 col-sm-12 car">
			                <div class="widget">
			                    <div class="recent-post py-5">
			                        <?php $this->load->view('templates/shared/tags'); ?>
			                    </div>
			                </div>
			            </aside>
	                    
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
</div>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>