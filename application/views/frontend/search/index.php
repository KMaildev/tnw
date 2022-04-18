<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php
$lang_session = $this->session->userdata('lang');
?>
<style type="text/css">
	.card0 {
		box-shadow: 0px 4px 8px 0px #757575;
		border-radius: 0px
	}

	.card2 {
		margin: 0px 40px
	}

	.logo {
		width: 200px;
		height: 100px;
		margin-top: 20px;
		margin-left: 35px
	}

	.image {
		width: 360px;
		height: 280px
	}


	.facebook {
		background-color: #3b5998;
		color: #fff;
		font-size: 18px;
		padding-top: 5px;
		border-radius: 50%;
		width: 35px;
		height: 35px;
		cursor: pointer
	}

	.twitter {
		background-color: #1DA1F2;
		color: #fff;
		font-size: 18px;
		padding-top: 5px;
		border-radius: 50%;
		width: 35px;
		height: 35px;
		cursor: pointer
	}

	.linkedin {
		background-color: #2867B2;
		color: #fff;
		font-size: 18px;
		padding-top: 5px;
		border-radius: 50%;
		width: 35px;
		height: 35px;
		cursor: pointer
	}

	.line {
		height: 1px;
		width: 40%;
		background-color: #E0E0E0;
		margin-top: 10px
	}

	.or {
		width: 20%;
		font-weight: bold;
	}

	.text-sm {
		font-size: 14px !important
	}

	::placeholder {
		color: #BDBDBD;
		opacity: 1;
		font-weight: 300
	}

	:-ms-input-placeholder {
		color: #BDBDBD;
		font-weight: 300
	}

	::-ms-input-placeholder {
		color: #BDBDBD;
		font-weight: 300
	}

	input,
	textarea {
		padding: 10px 12px 10px 12px;
		border: 1px solid lightgrey;
		border-radius: 2px;
		margin-bottom: 5px;
		margin-top: 2px;
		width: 100%;
		box-sizing: border-box;
		color: #2C3E50;
		font-size: 14px;
		letter-spacing: 1px
	}

	input:focus,
	textarea:focus {
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-shadow: none !important;
		border: 1px solid #304FFE;
		outline-width: 0
	}

	button:focus {
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-shadow: none !important;
		outline-width: 0
	}

	a {
		color: inherit;
		cursor: pointer
	}

	.btn-blue {
		background-color: #1A237E;
		width: 150px;
		color: #fff;
		border-radius: 2px
	}

	.btn-blue:hover {
		background-color: #000;
		cursor: pointer
	}

	.bg-blue {
		color: #fff;
		background-color: #1A237E
	}

	@media screen and (max-width: 991px) {
		.logo {
			margin-left: 0px
		}

		.image {
			width: 300px;
			height: 220px
		}

		.border-line {
			border-right: none
		}

		.card2 {
			border-top: 1px solid #EEEEEE !important;
			margin: 0px 15px
		}
	}
</style>

<section class="blog blog-section">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-md-8 col-sm-12 blog-pots py-4">
				<div class="row">

					<div class="col-md-12 col-xs-12 py-3">
						<form action="<?php echo site_url('propertylist/index'); ?>" method="GET">
							<div class="card2 card border-0 px-4 py-5">

								<div class="row mb-4 px-3">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<?php $this->load->view('templates/shared/alert_message'); ?>

										<h3 class="mb-0 mr-4 mt-2 text-center" style="font-size: 18px; text-align: center;">
											<i class="fa fa-search"></i>
											<?php
											if ($lang_session) {
												echo " ကြော်ငြာနံပါတ်ဖြင့် ရှာဖွေရန်";
											} else {
												echo " Search By Ad Number";
											}
											?>

										</h3>
									</div>
								</div>

								<div class="row px-3">

									<div class="col-lg-12 col-md-6 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">
												ကြော်ငြာနံပါတ်
											</h6>
										</label>
										<input required class="at-input" type="text" name="keyword" placeholder="<?php echo ($lang_session) ? "ကြော်ငြာနံပါတ်" : "Search by AD Number"; ?>" autocomplete="off" value="<?php if ($this->input->get('keyword')) {
																																																							echo $this->input->get('keyword');
																																																						} ?>">
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="row mb-3 px-3 float-right">
											<button type="submit" class="btn btn-blue text-center">
												<i class="fa fa-search"></i>
												<?php
												if ($lang_session) {
													echo "<span style='font-size: 17px; font-weight: bold;'>ရှာဖွေပါ</span>";
												} else {
													echo "Search";
												}
												?>
											</button>
										</div>
									</div>

								</div>


							</div>
						</form>
					</div>

					<div class="col-md-12 col-xs-12">
						<form action="<?php echo site_url('propertylist/index'); ?>" method="GET">
							<div class="card2 card border-0 px-4 py-5">

								<div class="row mb-4 px-3">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<?php $this->load->view('templates/shared/alert_message'); ?>

										<h3 class="mb-0 mr-4 mt-2 text-center" style="font-size: 18px; text-align: center;">
											<i class="fa fa-search"></i>
											<?php
											if ($lang_session) {
												echo "အိမ်ခြံမြေများကို ရှာဖွေရန်";
											} else {
												echo "Search Properties";
											}
											?>

										</h3>
									</div>
								</div>

								<div class="row px-3">

									<div class="col-lg-12 col-md-6 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">Property Type</h6>
										</label>
										<div class="at-col-default-mar selectBox">
											<select name="propertie_type" style="color: black;">
												<option value="for_sale" selected>
													<?php
													if ($lang_session) {
														echo "ရောင်းရန်";
													} else {
														echo "For Sale";
													}
													?>
												</option>
												<option value="for_rent">
													<?php
													if ($lang_session) {
														echo "ငှားရန်";
													} else {
														echo "For Rent";
													}
													?>
												</option>
												<option value="new_properties">
													<?php
													if ($lang_session) {
														echo "ကြိုပွိုင့်";
													} else {
														echo "New Properties";
													}
													?>
												</option>
											</select>
										</div>
									</div>

									<div class="col-lg-12 col-md-6 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">Type</h6>
										</label>
										<div class="at-col-default-mar selectBox">
											<select class="div-toggle" data-target=".my-info-1" name="property_type_id" style="color: black;">
												<option value="">
													<?php
													if ($lang_session) {
														echo "အမျိုးအစားအားလုံး";
													} else {
														echo "All Types";
													}
													?>
												</option>
												<?php
												foreach ($data_property_types as $data_property_type) {
												?>
													<option value="<?php echo $data_property_type->property_type_id; ?>">
														<?php
														if ($lang_session) {
															echo $data_property_type->property_type_mm;
														} else {
															echo $data_property_type->property_type;
														}
														?>
													</option>
												<?php } ?>
											</select>
										</div>
									</div>


									<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">Region, State</h6>
										</label>
										<div class="at-col-default-mar selectBox">
											<select class="div-toggle" data-target=".my-info-1" id="Region" name="region_id" style="color: black;">
												<option value="" data-show=".acitveon" selected>
													<?php
													if ($lang_session) {
														echo "ဒေသအားလုံး";
													} else {
														echo "All Regions";
													}
													?>
												</option>
												<?php
												foreach ($data_regions as $data_region) {
												?>
													<option value="<?php echo $data_region->region_id; ?>" data-show=".rent">
														<?php
														if ($lang_session) {
															echo $data_region->region_mm;
														} else {
															echo $data_region->region;
														}
														?>
													</option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">Township</h6>
										</label>
										<div class="at-col-default-mar selectBox" id="TownshipData">
											<select class="div-toggle" data-target=".my-info-1" style="color: black;">
												<option value="" data-show=".acitveon" selected>
													<?php
													if ($lang_session) {
														echo "မြို့နယ်အားလုံး";
													} else {
														echo "Any Township";
													}
													?>
												</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">Price(From)</h6>
										</label>
										<div class="at-col-default-mar selectBox">
											<select name="price_from" style="color: black;">
												<option value="" selected>
													<?php
													if ($lang_session) {
														echo "ဈေးနှုန်း (သိန်း)";
													} else {
														echo "Price Min";
													}
													?>
												</option>
												<option value="100">
													<?php
													if ($lang_session) {
														echo "100 (သိန်း)";
													} else {
														echo "100 (Lakh)";
													}
													?>
												</option>
												<option value="200">
													<?php
													if ($lang_session) {
														echo "200 (သိန်း)";
													} else {
														echo "200 (Lakh)";
													}
													?>
												</option>
												<option value="300">
													<?php
													if ($lang_session) {
														echo "300 (သိန်း)";
													} else {
														echo "300 (Lakh)";
													}
													?>
												</option>
												<option value="400">
													<?php
													if ($lang_session) {
														echo "400 (သိန်း)";
													} else {
														echo "400 (Lakh)";
													}
													?>
												</option>
												<option value="500">
													<?php
													if ($lang_session) {
														echo "500 (သိန်း)";
													} else {
														echo "500 (Lakh)";
													}
													?>
												</option>
												<option value="600">
													<?php
													if ($lang_session) {
														echo "600 (သိန်း)";
													} else {
														echo "600 (Lakh)";
													}
													?>
												</option>
												<option value="700">
													<?php
													if ($lang_session) {
														echo "700 (သိန်း)";
													} else {
														echo "700 (Lakh)";
													}
													?>
												</option>
												<option value="800">
													<?php
													if ($lang_session) {
														echo "800 (သိန်း)";
													} else {
														echo "800 (Lakh)";
													}
													?>
												</option>
												<option value="900">
													<?php
													if ($lang_session) {
														echo "9000 (သိန်း)";
													} else {
														echo "9000 (Lakh)";
													}
													?>
												</option>
												<option value="1000">
													<?php
													if ($lang_session) {
														echo "1000 (သိန်း)";
													} else {
														echo "1000 (Lakh)";
													}
													?>
												</option>
												<option value="1500">
													<?php
													if ($lang_session) {
														echo "1500 (သိန်း)";
													} else {
														echo "1500 (Lakh)";
													}
													?>
												</option>
												<option value="2000">
													<?php
													if ($lang_session) {
														echo "2000 (သိန်း)";
													} else {
														echo "2000 (Lakh)";
													}
													?>
												</option>
												<option value="2500">
													<?php
													if ($lang_session) {
														echo "2500 (သိန်း)";
													} else {
														echo "2500 (Lakh)";
													}
													?>
												</option>
												<option value="3000">
													<?php
													if ($lang_session) {
														echo "3000 (သိန်း)";
													} else {
														echo "3000 (Lakh)";
													}
													?>
												</option>
												<option value="3500">
													<?php
													if ($lang_session) {
														echo "3500 (သိန်း)";
													} else {
														echo "3500 (Lakh)";
													}
													?>
												</option>
												<option value="4000">
													<?php
													if ($lang_session) {
														echo "4000 (သိန်း)";
													} else {
														echo "4000 (Lakh)";
													}
													?>
												</option>
												<option value="4500">
													<?php
													if ($lang_session) {
														echo "4500 (သိန်း)";
													} else {
														echo "4500 (Lakh)";
													}
													?>
												</option>
												<option value="5000">
													<?php
													if ($lang_session) {
														echo "5000 (သိန်း)";
													} else {
														echo "5000 (Lakh)";
													}
													?>
												</option>
												<option value="6000">
													<?php
													if ($lang_session) {
														echo "6000 (သိန်း)";
													} else {
														echo "6000 (Lakh)";
													}
													?>
												</option>
												<option value="7000">
													<?php
													if ($lang_session) {
														echo "7000 (သိန်း)";
													} else {
														echo "7000 (Lakh)";
													}
													?>
												</option>
												<option value="8000">
													<?php
													if ($lang_session) {
														echo "8000 (သိန်း)";
													} else {
														echo "8000 (Lakh)";
													}
													?>
												</option>
												<option value="9000">
													<?php
													if ($lang_session) {
														echo "9000 (သိန်း)";
													} else {
														echo "9000 (Lakh)";
													}
													?>
												</option>
												<option value="10000">
													<?php
													if ($lang_session) {
														echo "10000 (သိန်း)";
													} else {
														echo "10000 (Lakh)";
													}
													?>
												</option>
												<option value="15000">
													<?php
													if ($lang_session) {
														echo "15000 (သိန်း)";
													} else {
														echo "15000 (Lakh)";
													}
													?>
												</option>
												<option value="30000">
													<?php
													if ($lang_session) {
														echo "30000 (သိန်း)";
													} else {
														echo "30000 (Lakh)";
													}
													?>
												</option>
												<option value="500000">
													<?php
													if ($lang_session) {
														echo "500000 (သိန်း)";
													} else {
														echo "500000 (Lakh)";
													}
													?>
												</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">Price(To)</h6>
										</label>
										<div class="at-col-default-mar selectBox">
											<select name="price_to" style="color: black;">
												<option value="" selected>
													<?php
													if ($lang_session) {
														echo "ဈေးနှုန်း (အတွင်း)";
													} else {
														echo "Price Max";
													}
													?>
												</option>
												<option value="100">
													<?php
													if ($lang_session) {
														echo "100 (သိန်း)";
													} else {
														echo "100 (Lakh)";
													}
													?>
												</option>
												<option value="200">
													<?php
													if ($lang_session) {
														echo "200 (သိန်း)";
													} else {
														echo "200 (Lakh)";
													}
													?>
												</option>
												<option value="300">
													<?php
													if ($lang_session) {
														echo "300 (သိန်း)";
													} else {
														echo "300 (Lakh)";
													}
													?>
												</option>
												<option value="400">
													<?php
													if ($lang_session) {
														echo "400 (သိန်း)";
													} else {
														echo "400 (Lakh)";
													}
													?>
												</option>
												<option value="500">
													<?php
													if ($lang_session) {
														echo "500 (သိန်း)";
													} else {
														echo "500 (Lakh)";
													}
													?>
												</option>
												<option value="600">
													<?php
													if ($lang_session) {
														echo "600 (သိန်း)";
													} else {
														echo "600 (Lakh)";
													}
													?>
												</option>
												<option value="700">
													<?php
													if ($lang_session) {
														echo "700 (သိန်း)";
													} else {
														echo "700 (Lakh)";
													}
													?>
												</option>
												<option value="800">
													<?php
													if ($lang_session) {
														echo "800 (သိန်း)";
													} else {
														echo "800 (Lakh)";
													}
													?>
												</option>
												<option value="900">
													<?php
													if ($lang_session) {
														echo "9000 (သိန်း)";
													} else {
														echo "9000 (Lakh)";
													}
													?>
												</option>
												<option value="1000">
													<?php
													if ($lang_session) {
														echo "1000 (သိန်း)";
													} else {
														echo "1000 (Lakh)";
													}
													?>
												</option>
												<option value="1500">
													<?php
													if ($lang_session) {
														echo "1500 (သိန်း)";
													} else {
														echo "1500 (Lakh)";
													}
													?>
												</option>
												<option value="2000">
													<?php
													if ($lang_session) {
														echo "2000 (သိန်း)";
													} else {
														echo "2000 (Lakh)";
													}
													?>
												</option>
												<option value="2500">
													<?php
													if ($lang_session) {
														echo "2500 (သိန်း)";
													} else {
														echo "2500 (Lakh)";
													}
													?>
												</option>
												<option value="3000">
													<?php
													if ($lang_session) {
														echo "3000 (သိန်း)";
													} else {
														echo "3000 (Lakh)";
													}
													?>
												</option>
												<option value="3500">
													<?php
													if ($lang_session) {
														echo "3500 (သိန်း)";
													} else {
														echo "3500 (Lakh)";
													}
													?>
												</option>
												<option value="4000">
													<?php
													if ($lang_session) {
														echo "4000 (သိန်း)";
													} else {
														echo "4000 (Lakh)";
													}
													?>
												</option>
												<option value="4500">
													<?php
													if ($lang_session) {
														echo "4500 (သိန်း)";
													} else {
														echo "4500 (Lakh)";
													}
													?>
												</option>
												<option value="5000">
													<?php
													if ($lang_session) {
														echo "5000 (သိန်း)";
													} else {
														echo "5000 (Lakh)";
													}
													?>
												</option>
												<option value="6000">
													<?php
													if ($lang_session) {
														echo "6000 (သိန်း)";
													} else {
														echo "6000 (Lakh)";
													}
													?>
												</option>
												<option value="7000">
													<?php
													if ($lang_session) {
														echo "7000 (သိန်း)";
													} else {
														echo "7000 (Lakh)";
													}
													?>
												</option>
												<option value="8000">
													<?php
													if ($lang_session) {
														echo "8000 (သိန်း)";
													} else {
														echo "8000 (Lakh)";
													}
													?>
												</option>
												<option value="9000">
													<?php
													if ($lang_session) {
														echo "9000 (သိန်း)";
													} else {
														echo "9000 (Lakh)";
													}
													?>
												</option>
												<option value="10000">
													<?php
													if ($lang_session) {
														echo "10000 (သိန်း)";
													} else {
														echo "10000 (Lakh)";
													}
													?>
												</option>
												<option value="15000">
													<?php
													if ($lang_session) {
														echo "15000 (သိန်း)";
													} else {
														echo "15000 (Lakh)";
													}
													?>
												</option>
												<option value="30000">
													<?php
													if ($lang_session) {
														echo "30000 (သိန်း)";
													} else {
														echo "30000 (Lakh)";
													}
													?>
												</option>
												<option value="500000">
													<?php
													if ($lang_session) {
														echo "500000 (သိန်း)";
													} else {
														echo "500000 (Lakh)";
													}
													?>
												</option>
											</select>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
										<label class="mb-1">
											<h6 class="mb-0 text-sm">
												<?php
												if ($lang_session) {
													echo "ဘဏ်အရစ်ကျ";
												} else {
													echo "Bank Installment";
												}
												?>
											</h6>
										</label>
										<div class="at-col-default-mar selectBox">
											<select class="div-toggle" data-target=".my-info-1" style="color: black;" name="bank_installment">
												<option>No</option>
												<option>Yes</option>
											</select>
										</div>
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="row mb-3 px-3 float-right">
											<button type="submit" class="btn btn-blue text-center">
												<i class="fa fa-search"></i>
												<?php
												if ($lang_session) {
													echo "<span style='font-size: 17px; font-weight: bold;'>ရှာဖွေပါ</span>";
												} else {
													echo "Search";
												}
												?>
											</button>
										</div>
									</div>



								</div>


							</div>
						</form>
					</div>



				</div>
			</div>

			<aside class="col-lg-4 col-md-4 col-sm-12">
				<section class="popular-places" style="background-color: #f6f6f6;">
					<div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="<?php echo site_url('propertylist/index/for_sale'); ?>" class="img-box hover-effect">
								<img src="<?php echo base_url(); ?>data/welcome/sale.jpg" class="img-responsive" alt="">
								<div class="listing-badges">
									<span class="featured">Sale</span>
								</div>
								<div class="img-box-content visible">
									<h4>
										<?php
										echo ($lang_session) ? "ရောင်းရန် အိမ်ခြံမြေများ" : "Sell Property";
										?>
									</h4>
									<span>
										<?php
										echo ($lang_session) ? "<span>ကောင်းမွန်သော အိမ်ခြံမြေပိုင်ဆိုင်နိုင်ဖို့ရန် ကူညီပေးနေပါသည်။</span>" : "We can help you navigate a successful sale.";
										?>
									</span>
								</div>
							</a>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="<?php echo site_url('propertylist/index/for_rent'); ?>" class="img-box hover-effect">
								<img src="<?php echo base_url(); ?>data/welcome/rent.jpg" class="img-responsive" alt="">
								<div class="listing-badges">
									<span class="featured">Rent</span>
								</div>
								<div class="img-box-content visible">
									<h4>
										<?php
										echo ($lang_session) ? "ငှားရန် အိမ်ခြံမြေများ" : "Rent Property";
										?>
									</h4>
									<span>
										<?php
										echo ($lang_session) ? "<span>အိမ်ငှားဖို့ရန်အတွက် အိမ်ခြံမြေအမျိုးအစားစုံလင်စွာ ရှာဖွေနိုင်ပါသည်။</span>" : "We’re creating a seamless online experience on the largest rental network.";
										?>

									</span>
								</div>
							</a>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="<?php echo site_url('propertylist/index/new_properties'); ?>" class="img-box hover-effect">
								<img src="<?php echo base_url(); ?>data/welcome/new.jpg" class="img-responsive" alt="">
								<div class="listing-badges">
									<span class="featured">New</span>
								</div>
								<div class="img-box-content visible">
									<h4>
										<?php
										echo ($lang_session) ? "စီမံကိန်း အသစ်များ" : "New Property";
										?>
									</h4>
									<span>
										<?php
										echo ($lang_session) ? "<span>အိမ်ရာစီမံကိန်းအသစ်များကို ရွေးချယ်နိုင်ပါသည်။</span>" : "Choose from a wide variety of new properties.";
										?>
									</span>
								</div>
							</a>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="<?php echo site_url('propertylist/index?keyword=&propertie_type=for_sale&region_id=&property_type_id=4&price_from=&price_to='); ?>" class="img-box hover-effect">
								<img src="<?php echo base_url(); ?>data/welcome/land.jpg" class="img-responsive" alt="">
								<div class="img-box-content visible">
									<h4>
										<?php
										echo ($lang_session) ? "ရောင်းရန် မြေကွက်များ" : "Lands For Sale";
										?>
									</h4>
									<span>

										<?php
										echo ($lang_session) ? "<span>ကောင်းမွန်သောမြေကွက်များပိုင်ဆိုင်နိုင်ဖို့ရန် ကူညီပေးနေပါသည်။</span>" : "We can help to possess the great land.";
										?>
									</span>
								</div>
							</a>
						</div>

						<div class="col-lg-12 col-md-12">
							<!-- Image Box -->
							<a href="<?php echo site_url('home_loan_application'); ?>" class="img-box hover-effect no-mb x3">
								<img src="<?php echo base_url(); ?>data/welcome/loan.webp" class="img-responsive" alt="">
								<!-- Badge -->
								<div class="listing-badges">
									<span class="featured">Home Loan</span>
								</div>
								<div class="img-box-content visible">
									<h4>
										<?php
										echo ($lang_session) ? "အိမ်ရာချေးငွေ လျှောက်ထားရန်" : "Apply Home Loan";
										?>
									</h4>
									<span>
										<?php
										echo ($lang_session) ? "<span>ဘဏ်များစွာဖြင့်အိမ်ရာချေးငွေကိုလျှောက်ထားနိုင်ပါသည်။</span>" : "Apply now with multiple home loan banks.";
										?>
									</span>
								</div>
							</a>
						</div>

					</div>
				</section>
			</aside>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>