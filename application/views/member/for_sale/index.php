<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
					<?php $this->load->view('templates/posts_status'); ?>
				</nav>
				<hr>

				<?php
				$upload_video_total = [];
				foreach ($video_counters as $video_counter) {
					$upload_video_total[] = 1;
				}
				$video_total = array_sum($upload_video_total);
				?>

				<?php
				if ($my_active_packages) {
					$order_total = [];
					$video_clip_total = [];
					foreach ($my_active_packages as $my_active_package) {
						if (date("Y-m-d") >= $my_active_package->end_date) {
							continue;
						}
						$order_total[] = $my_active_package->no_of_posts;
						$video_clip_total[] = $my_active_package->video_clip;
					}
					$total_buy_posts =  array_sum($order_total);
					$video_clip_total =  array_sum($video_clip_total);
				} else {
					$total_buy_posts = 0;
					$video_clip_total = ($my_active_packages == '') ? 0 : $packages->video_clip;
				}

				$free_package = (empty($packages)) ? 0 : $packages->no_of_posts;
				$available_post = $free_package + $total_buy_posts;
				$already_posts = $already_posts;
				$total_post = $available_post - $already_posts;
				if ($total_post < 1) {
				?>
					<?php $this->load->view('templates/shared/post_unavailable'); ?>
				<?php } else { ?>
					<?php $this->load->view('templates/shared/alert_message'); ?>
					<form method="post" action="<?php echo site_url('member/for_sale/save') ?>" enctype='multipart/form-data'>
						<input type="hidden" name="member_id" value="<?php echo $this->session->userdata('member_id'); ?>">
						<input type="hidden" name="propertie_type" value="for_sale">

						<input type="hidden" name="ad_number" value="S-">

						<div>
							<?php $this->load->view('member/shared/property_create'); ?>

							<div class="form-row">
								<?php
								if ($video_total < $video_clip_total) {
								?>
									<div class="col-sm-12 col-md-12 py-3">
										<h6><i class="fa fa-play-circle"> Property Video</i></h6>
										<input class="form-control" type="file" id="formFile" name="video" accept=".mp4, .mpg">
										<br>
										<small style="color: red; font-size: 12px;">Only MP4, MPG</small>
									</div>
								<?php } else { ?>
									<div class="col-sm-12 col-md-12 py-3" hidden="">
										<h6><i class="fa fa-play-circle"> Property Video</i></h6>
										<input class="form-control" type="file" id="formFile" name="video" accept=".mp4, .mpg" disabled="">
										<br>
										<small style="color: red; font-size: 12px;">Only MP4, MPG</small>
									</div>
								<?php } ?>
							</div>

							<div class="form-row">
								<div class="col-md-12">
									<button class="btn btn-default  pull-right" type="submit" style="background-color: #db9c30; color: white;">Create Post Ad</button>
								</div>
							</div>
						</div>

					</form>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/data_list_suggests'); ?>

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
					}
				});

			} else {
				$('#TownshipData').html('<select class="form-control custom"><option value="">Please select township</option></select>');
			}
		});
	});
</script>