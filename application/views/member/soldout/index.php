<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
	$user_permissions = $this->session->userdata('user_permissions');
 ?>

<section class="user-page">

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2 py-5">

				<div class="dashborad-box stat">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb" style="background-color: #db9c30">
							<li class="breadcrumb-item">
								<a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 17px;">
									<i class="fa fa-building"></i> Dashboard
								</a>
							</li>
						</ol>
					</nav>
					<div class="section-body">
							<div class="row">
								<?php  if ($user_permissions == 'agent') { ?>
									<div class="col-lg-12 col-md-12 col-sm-12">
										Soldout
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Soldout For Sale">
										<a href="<?php echo site_url('member/soldout/soldout_data/for_sale'); ?>">
											<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
												<div class="flex-container text-center" style="color: white;">
													<i class="fa fa-list-alt fa-3x"></i> <br><br>
													For Sale
												</div>
											</div>
										</a>
									</div>

									<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Soldout For Rent">
										<a href="<?php echo site_url('member/soldout/soldout_data/for_rent'); ?>">
											<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
												<div class="flex-container text-center" style="color: white;">
													<i class="fa fa-list fa-3x"></i> <br><br>
													For Rent
												</div>
											</div>
										</a>
									</div>

									<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Soldout New Properties">
										<a href="<?php echo site_url('member/soldout/soldout_data/new_properties'); ?>">
											<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
												<div class="flex-container text-center" style="color: white;">
													<i class="fa fa-chart-line fa-3x"></i> <br><br>
													New Properties
												</div>
											</div>
										</a>
									</div>
								<?php }else{ ?>	
									<?php $this->load->view('templates/shared/404.php'); ?>
								<?php } ?>						
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
