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

	.shadow {
		transition: box-shadow .3s;
		border-radius: 10px;
	}

	.shadow:hover {
		box-shadow: 0 0 11px rgba(33, 33, 33, .2);
	}
</style>

<section class="blog blog-section portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 py-3">
				<h3 style="background-color:#25a835; box-shadow: 1px 1px 1px #000000; background-color: white; padding: 12px;">
					<?php
					if ($lang_session) {
						echo "မြန်မာနိုင်ငံရှိ အိမ်ခြံမြေ အကျိုးဆောင်ကုမ္ပဏီများ";
					} else {
						echo "Agents in Myanmar";
					}
					?>
				</h3>
				<div class="news-wrap">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row">
							<?php
							foreach ($agents as $agent) {
								$user_id = $agent->user_id;
							?>
								<div class="col-xl-6 col-md-6 col-xs-12 col-sm-12 shadow" style="padding: 5px;">
									<div class="news-item news-item-sm" style="height: 185px;">
										<a href="<?php echo site_url('agents/detail/' . $agent->user_id); ?>">
											<center>
												<div class="news-item-img" style="background-color: white; padding: 3px;">
													<?php
													if ($agent->approval_status == 1) {
													?>
														<div style="background-color: #a940aa; padding: 3px; color: white;">
															Premium Agent
														</div>
													<?php } else { ?>
														<div style="background-color: #0f81aa; padding: 3px; color: white;">
															Agent
														</div>
													<?php } ?>
													<br>
													<?php
													if ($agent->logo == '') {
													?>
														<img src="<?php echo base_url(); ?>data/default/logo_not_found.png" class="blog image" style="width: 70px; height: 70px; padding: 2px;  box-shadow: 0px 2px 2px 2px #dbdfe0; object-fit:cover; object-position: center;">
													<?php } else { ?>
														<img src="<?php echo base_url(); ?>uploads/<?php echo $agent->logo; ?>" alt="home-1" class="blog image" style="width: 70px; height: 70px; padding: 2px;  box-shadow: 0px 2px 2px 2px #dbdfe0; object-fit:cover; object-position: center;">
													<?php } ?>
												</div>
											</center>
										</a>
										<div class="news-item-text">
											<a href="<?php echo site_url('agents/detail/' . $agent->user_id); ?>">
												<p style="font-size: 16px; color: black;">
													<?php
													if ($agent->company_name == '') {
														echo "<br>";
													} else {
														echo mb_substr($agent->company_name, 0, 20, 'UTF-8');
													}
													?>
												</p>
											</a>
											<span class="date">
												Agent &nbsp;|&nbsp; Total Ads:
												<?php
												$total_ads = [];
												foreach ($property_counts as $property_count) {
													if ($user_id == $property_count->user_info_id) {
														$total_ads[] = 1;
													}
												}
												echo array_sum($total_ads);
												?>
											</span>

											<span>
												<?php
												if ($agent->address == '') {
													echo "<br>";
												} else {
													echo '<i class="fa fa-map"></i> ';
													echo mb_substr($agent->address, 0, 50, 'UTF-8');
												}
												?>
											</span>

											<div class="py-2" style="text-align: right;">
												<a href="<?php echo site_url('agents/detail/' . $agent->user_id); ?>" class="btn btn-sm" style="font-size: 10px; background-color: #c77b28; color: white;">
													<?php
													echo ($lang_session) ? "အသေးစိတ်ကြည့်ရန်" : "More Detail";
													?>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>


						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 5px;">
					<?= $this->pagination->create_links(); ?>
				</div>
			</div>

			<aside class="col-lg-3 col-md-3 col-sm-12 car">
				<div class="widget">

					<div class="py-3">
						<form>
							<div class="input-group" style="width: 100%;">
								<input class="form-control" type="text" name="keyword" placeholder="<?php echo ($lang_session) ? "ကုမ္ပဏီအမည်ဖြင့် ရှာဖွေနိုင်ပါသည်။" : "e.g Company Name"; ?>" autocomplete="off" value="<?php if ($this->input->get('keyword')) {
																																																								echo $this->input->get('keyword');
																																																							} ?>">
								<span class="input-group-btn">
									<button class="btn btn-default btn-sm">
										<i class="fa fa-search fa-xs" style="font-size: 14px;"></i>
									</button>
								</span>
							</div>
						</form>
					</div>



					<div class="widget-boxed" style="background-color: white;">
						<h5 class="title">
							<?php
							if ($lang_session) {
								echo "စီစစ်ပြီး ရှာပါ";
							} else {
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
	</div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>