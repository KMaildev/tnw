<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
	.custom {
		font-size: 12px;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="dashborad-box stat">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb" style="background-color: #db9c30">
						<li class="breadcrumb-item">
							<a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 20px;">
								<i class="fa fa-building"></i> Dashboard
							</a>
						</li>
					</ol>
					<h4>Edit Data</h4>
				</nav>
				<hr>
				<?php $this->load->view('templates/shared/alert_message'); ?>
				<?php
				$member_session_id = $this->session->userdata('member_id');
				if ($detail->user_info_id == $member_session_id) {
				?>
					<form method="post" action="<?php echo site_url('member/for_sale/update'); ?>" enctype='multipart/form-data'>
						<input type="hidden" name="propertie_id" value="<?php echo $detail->sale_id; ?>">
						<div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4"> Title [English]</label>
									<input type="text" class="form-control form-control-sm" placeholder="English Title [Required]" autocomplete="off" name="title_eng" value="<?php echo $detail->title_eng; ?>">
								</div>

								<div class="form-group col-md-6">
									<label for="inputEmail4"> Title [Myanmar]</label>
									<input required type="text" class="form-control form-control-sm" placeholder="Myanmar Title" autocomplete="off" name="title_mm" value="<?php echo $detail->title_mm; ?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Region</label>
									<select name="region_id" id="Region" class="form-control custom" required="">
										<option value="">-- Please select Region --</option>
										<?php
										foreach ($regions as $region) {
										?>
											<option value="<?php echo $region->region_id; ?>" <?php print ($region_by_id->region_id == $region->region_id) ? 'selected=""' : ''; ?>>
												<?php echo $region->region; ?>
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Township</label>
									<div id="TownshipData">
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Type</label>
									<select name="property_type" id="inputZip" class="form-control custom" required>
										<option value="">-- Please select Type --</option>
										<?php
										foreach ($property_types as $property_type) {
										?>
											<option value="<?php echo $property_type->property_type_id; ?>" <?php print ($detail->property_type == $property_type->property_type) ? 'selected=""' : ''; ?>>
												<?php echo $property_type->property_type; ?>
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Floor</label>
									<select name="floor" id="inputZip" class="form-control custom">
										<optgroup style="font-size:15px;">
											<option value="">-- Please select Floor --</option>
											<?php
											for ($i = 1; $i < 51; $i++) {
												$fl = $i;
											?>
												<option value="<?php echo $i ?>" <?php print ($detail->floor == $fl) ? 'selected=""' : ''; ?>>
													<?php echo $i ?> Floor
												</option>
											<?php } ?>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4"> Area</label>
									<input type="text" class="form-control form-control-sm" placeholder="Area: 40x60" autocomplete="off" name="area" value="<?php echo $detail->area; ?>">
								</div>

								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Type</label>
									<select name="area_type" id="inputZip" class="form-control custom">
										<optgroup style="font-size:15px;">
											<option value="Sqft" <?php print ($detail->area_type == 'Sqft') ? 'selected=""' : ''; ?>>
												Sqft
											</option>
											<option value="Acre" <?php print ($detail->area_type == 'Acre') ? 'selected=""' : ''; ?>>
												Acre
											</option>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4"> Price*</label>
									<input required type="number" class="form-control form-control-sm" placeholder="Price [Required]" autocomplete="off" name="price" value="<?php echo $detail->price; ?>" min="0">
								</div>

								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Type</label>
									<select name="price_type" id="inputZip" class="form-control custom">
										<option value="MMK(Lakhs)" <?php print ($detail->price_type == 'MMK(Lakhs)') ? 'selected=""' : ''; ?>>
											MMK(Lakhs)
										</option>
										<option value="USD" <?php print ($detail->price_type == 'USD') ? 'selected=""' : ''; ?>>
											USD
										</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Bank Installment</label>
									<select name="installment" id="inputZip" class="form-control custom">
										<option value="No" <?php print ($detail->installment == 'No') ? 'selected=""' : ''; ?>>
											No
										</option>
										<option value="Yes" <?php print ($detail->installment == 'Yes') ? 'selected=""' : ''; ?>>
											Yes
										</option>
									</select>
								</div>

								<div class="form-group col-md-6 dataselect">
									<label for="inputZip">Status</label>
									<select name="property_status" id="inputZip" class="form-control custom">
										<option value="Fully Furnished" <?php print ($detail->property_status == 'Fully Furnished') ? 'selected=""' : ''; ?>>
											Fully Furnished
										</option>
										<option value="Hall" <?php print ($detail->property_status == 'Hall') ? 'selected=""' : ''; ?>>
											Hall
										</option>
										<option value="Other" <?php print ($detail->property_status == 'Other') ? 'selected=""' : ''; ?>>
											Other
										</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3 dataselect">
									<label for="inputZip">Room</label>
									<select name="rooms" id="inputZip" class="form-control custom">
										<?php
										for ($i = 0; $i < 51; $i++) {
											$r = $i;
										?>
											<option value="<?php echo $i ?>" <?php print ($detail->rooms == $r) ? 'selected=""' : ''; ?>>
												<?php echo $i ?> Room
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-3 dataselect">
									<label for="inputZip">Shrine Room</label>
									<select name="shrine_room" id="inputZip" class="form-control custom">
										<?php
										for ($i = 0; $i < 4; $i++) {
											$shrine = $i;
										?>
											<option value="<?php echo $i ?>" <?php print ($detail->shrine_room == $shrine) ? 'selected=""' : ''; ?>>
												<?php echo $i ?> Room
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-3 dataselect">
									<label for="inputZip">Bathrooms</label>
									<select name="bathroom" id="inputZip" class="form-control custom">
										<?php
										for ($i = 0; $i < 51; $i++) {
											$bath_room = $i;
										?>
											<option value="<?php echo $i ?>" <?php print ($detail->bathroom == $bath_room) ? 'selected=""' : ''; ?>>
												<?php echo $i ?> Room
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-3 dataselect">
									<label for="inputZip">Dining Room</label>
									<select name="dining_room" id="inputZip" class="form-control custom">
										<?php
										for ($i = 0; $i < 11; $i++) {
											$dining = $i;
										?>
											<option value="<?php echo $i ?>" <?php print ($detail->dining_room == $dining) ? 'selected=""' : ''; ?>>
												<?php echo $i ?> Room
											</option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="form-row">

								<div class="form-group col-md-3 dataselect">
									<label for="inputZip">Living Room</label>
									<select name="living_room" id="inputZip" class="form-control custom">
										<?php
										for ($i = 0; $i < 6; $i++) {
											$living = $i;
										?>
											<option value="<?php echo $i ?>" <?php print ($detail->living_room == $living) ? 'selected=""' : ''; ?>>
												<?php echo $i ?> Room
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-3 dataselect">
									<label for="inputZip">Bedroom</label>
									<select name="bead_room" id="inputZip" class="form-control custom">
										<?php
										for ($i = 0; $i < 11; $i++) {
											$bead = $i;
										?>
											<option value="<?php echo $i ?>" <?php print ($detail->bead_room == $bead) ? 'selected=""' : ''; ?>>
												<?php echo $i ?> Room
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-3 dataselect">
									<label for="inputZip">Other room</label>
									<select name="other_room" id="inputZip" class="form-control custom">
										<?php
										for ($i = 0; $i < 11; $i++) {
											$other = $i;
										?>
											<option value="<?php echo $i ?>" <?php print ($detail->other_room == $other) ? 'selected=""' : ''; ?>>
												<?php echo $i ?> Room
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group col-md-3">
									<label for="inputEmail4"> Year Built</label>
									<input type="text" class="form-control form-control-sm" placeholder="Year Built" autocomplete="off" name="year_built" value="<?php echo $detail->year_built; ?>" min="0">
								</div>

							</div>

							<div class="form-row">
								<div class="form-group col-md-12 col-sm-12 col-lg-12">
									<label for="inputEmail4"> Contact Number</label>
									<select class="form-control select5" multiple="multiple" style="width: 100%;" name="contact_number[]">
									</select>
									<p><?php echo $detail->contact_number; ?></p>
									<input type="hidden" name="contact_number_update" value="<?php echo $detail->contact_number; ?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-12 col-sm-12 col-lg-12">
									<label for="inputEmail4"> Google Map Link</label>
									<input type="text" class="form-control form-control-sm" placeholder="Google Map link" autocomplete="off" name="map_link" value="<?php echo $detail->map_link; ?>">
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-12 col-sm-12">
									<label for="checkbox21" style="font-size: 19px; color: #db9c30;"><b>Share Agent Fee</b></label>
								</div>
								<div class="form-group col-md-2 col-sm-6">
									<label for="share_agent_yes">Yes</label>
									<input id="share_agent_yes" type="radio" name="share_agent_fee" value="Yes" <?php print ($detail->share_agent_fee == 'Yes') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="share_agent_no">No</label>
									<input id="share_agent_no" type="radio" name="share_agent_fee" value="No" <?php print ($detail->share_agent_fee == 'No') ? 'checked=""' : ''; ?>>
								</div>
							</div>


							<div class="form-row">
								<div class="form-group col-md-12 col-sm-12">
									<label for="checkbox21" style="font-size: 20px; color: #db9c30;"><b>General</b></label>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox21">Swimming pool</label>
									<input id="checkbox21" type="checkbox" name="swimming_pool" value="Swimming pool" <?php print ($detail->swimming_pool == 'Swimming pool') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox22">24 hrs Security</label>
									<input id="checkbox22" type="checkbox" name="securit" value="24 hrs Securit" <?php print ($detail->securit == '24 hrs Securit') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox23">Air conditioning</label>
									<input id="checkbox23" type="checkbox" name="air_conditioning" value="Air conditioning" <?php print ($detail->air_conditioning == 'Air conditioning') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox24">Wifi</label>
									<input id="checkbox24" type="checkbox" name="wifi" value="Wifi" <?php print ($detail->wifi == 'Wifi') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox25">Balcony</label>
									<input id="checkbox25" type="checkbox" name="balcony" value="Balcony" <?php print ($detail->balcony == 'Balcony') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox26">CCTV</label>
									<input id="checkbox26" type="checkbox" name="cctv" value="CCTV" <?php print ($detail->cctv == 'CCTV') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox27">Car Parking</label>
									<input id="checkbox27" type="checkbox" name="car_parking" value="Car Parking" <?php print ($detail->car_parking == 'Car Parking') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox28">Dishwasher</label>
									<input id="checkbox28" type="checkbox" name="dishwasher" value="Dishwasher" <?php print ($detail->dishwasher == 'Dishwasher') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox29">Generator</label>
									<input id="checkbox29" type="checkbox" name="generator" value="Generator" <?php print ($detail->generator == 'Generator') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox30">Near Church</label>
									<input id="checkbox30" type="checkbox" name="near_church" value="Near Church" <?php print ($detail->near_church == 'Near Church') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox31">Garden</label>
									<input id="checkbox31" type="checkbox" name="garden" value="Garden" <?php print ($detail->garden == 'Garden') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox32">Gym</label>
									<input id="checkbox32" type="checkbox" name="gym" value="Gym" <?php print ($detail->gym == 'Gym') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox33">Lift</label>
									<input id="checkbox33" type="checkbox" name="lift" value="Lift" <?php print ($detail->lift == 'Lift') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox34">Play Ground</label>
									<input id="checkbox34" type="checkbox" name="play_ground" value="Play Ground" <?php print ($detail->play_ground == 'Play Ground') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox35">Water Heater</label>
									<input id="checkbox35" type="checkbox" name="water_heater" value="Water Heater" <?php print ($detail->water_heater == 'Water Heater') ? 'checked=""' : ''; ?>>
								</div>


								<div class="form-group col-md-12 col-sm-12">
									<label for="checkbox21" style="font-size: 20px; color: #db9c30;"><b>House View</b></label>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox36"> Mountain View</label>
									<input id="checkbox36" type="checkbox" name="mountain_view" value="Mountain View" <?php print ($detail->mountain_view == 'Mountain View') ? 'checked=""' : ''; ?>>
								</div>


								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox37"> Pagoda View</label>
									<input id="checkbox37" type="checkbox" name="pagoda_view" value="Pagoda View" <?php print ($detail->pagoda_view == 'Pagoda View') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox38"> Sea View</label>
									<input id="checkbox38" type="checkbox" name="sea_view" value="Sea View" <?php print ($detail->sea_view == 'Sea View') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox39"> Lake View</label>
									<input id="checkbox39" type="checkbox" name="lake_view" value="Lake View" <?php print ($detail->lake_view == 'Lake View') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox40"> City View</label>
									<input id="checkbox40" type="checkbox" name="city_view" value="City View" <?php print ($detail->city_view == 'City View') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox41"> Garden View</label>
									<input id="checkbox41" type="checkbox" name="garden_view" value="Garden View" <?php print ($detail->garden_view == 'Garden View') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox42"> River View</label>
									<input id="checkbox42" type="checkbox" name="river_view" value="River View" <?php print ($detail->river_view == 'River View') ? 'checked=""' : ''; ?>>
								</div>


								<div class="form-group col-md-12 col-sm-12">
									<label for="checkbox21" style="font-size: 20px; color: #db9c30;"><b>Business Type</b></label>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox43"> Showroom</label>
									<input id="checkbox43" type="checkbox" name="showroom" value="Showroom" <?php print ($detail->showroom == 'Showroom') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox44"> Restaurant</label>
									<input id="checkbox44" type="checkbox" name="restaurant" value="Restaurant" <?php print ($detail->restaurant == 'Restaurant') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox46"> Office</label>
									<input id="checkbox46" type="checkbox" name="office" value="Office" <?php print ($detail->office == 'Office') ? 'checked=""' : ''; ?>>
								</div>

								<div class="form-group col-md-2 col-sm-6">
									<label for="checkbox45"> Warehouse</label>
									<input id="checkbox45" type="checkbox" name="warehouse" value="Warehouse" <?php print ($detail->warehouse == 'Warehouse') ? 'checked=""' : ''; ?>>
								</div>


								<?php
								if ($my_active_packages) {
									$this->load->view('member/shared/shared_form');
								}
								?>

							</div>

							<br>
							<div class="form-row">
								<div class="col-md-12">
									<textarea id="summernote" name="description_mm"><?php echo $detail->description_mm; ?></textarea>
								</div>

								<div class="col-md-12 py-3">
									<textarea id="summernoteeng" name="description_eng"><?php echo $detail->description_eng; ?></textarea>
								</div>


								<div class="col-sm-12 col-md-12 py-3" hidden>
									<h6><i class="fa fa-play-circle"> Property Video</i></h6>
									<input class="form-control" type="file" id="formFile" name="video" accept=".mp4, .mpg">
									<input type="hidden" name="video_value" value="<?php echo $detail->video; ?>">
									<br>
									<small style="color: red; font-size: 12px;">Only MP4, MPG</small>
								</div>

							</div>

							<div class="form-row">
								<div class="col-md-12">
									<button class="btn btn-default  pull-right" type="submit" style="background-color: #db9c30; color: white;">Updated Post Ad</button>
								</div>
							</div>


						</div>
					</form>
				<?php } else { ?>
					<?php $this->load->view('templates/shared/permission'); ?>
				<?php } ?>

			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
	$('#summernote').summernote({
		placeholder: 'Description (Myanmar)',
		tabsize: 2,
		height: 120,
		toolbar: []
	});

	$('#summernoteeng').summernote({
		placeholder: 'Description (English)',
		tabsize: 2,
		height: 120,
		toolbar: []
	});
</script>

<script>
	$(document).ready(function() {
		$('#Region').change(function() {
			var region_id = $('#Region').val();
			if (region_id != '') {
				$.ajax({
					url: "<?php echo site_url(); ?>/include/dynamic_dependent/fetch_township_member",
					method: "POST",
					data: {
						region_id: region_id
					},
					success: function(data) {
						$('#TownshipData').html(data);
						console.log(data);
					}
				});

			} else {
				$('#TownshipData').html('<select class="form-control custom"><option value="">Please select township</option></select>');
			}
		});
	});

	window.onload = function() {
		var region_id = <?php echo $region_by_id->region_id; ?>;
		var township_id = <?php echo $region_by_id->sale_township_id; ?>;
		$.ajax({
			url: "<?php echo site_url(); ?>/include/dynamic_dependent/fetch_township_member_update",
			method: "POST",
			data: {
				region_id: region_id,
				township_id: township_id
			},
			success: function(data) {
				$('#TownshipData').html(data);
				console.log(data);
			}
		});
	};
</script>