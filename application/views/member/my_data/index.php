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
								<a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 20px;">
									<i class="fa fa-building"></i> Dashboard
								</a>
							</li>
						</ol>
					</nav>

					<div class="section-body">
						<div class="row">
							<?php  if ($user_permissions == 'agent') { ?>
								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Sale">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-pie fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($total_sale); ?></h3>
											Total Sale
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Rent">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-line fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($total_rent); ?></h3>
											Total Rent
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total New Properties">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-bar fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($total_new_properties); ?></h3>
											Total New Properties
										</div>
									</div>
								</div>

								

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Want to Buy">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-bar fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($total_want_to_buy); ?></h3>
											Total Want to Buy
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Want to Rent">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-line fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($total_want_to_rent); ?></h3>
											Total Want to Rent
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Want to Rent">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-line fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($count_total_soldout); ?></h3>
											Soldout
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Want to Rent">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-plus fa-3x"></i> <br><br>
											<h3 style="color: white;">
												<?php 
													$all_total =  $total_sale + $total_rent + $total_new_properties + $total_want_to_buy + $total_want_to_rent + $count_total_soldout;
													echo number_format($all_total);
												 ?>
											</h3>
											Total
										</div>
									</div>
								</div>
							<?php }elseif ($user_permissions == 'by_owner') { ?>
								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Owner Sale">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-bar fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($total_owner_sale); ?></h3>
											Total Owner Sale
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Total Owner Rent">
									<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
										<div class="flex-container text-center" style="color: white;">
											<i class="fas fa-chart-bar fa-3x"></i> <br><br>
											<h3 style="color: white;"><?php echo number_format($total_owner_rent); ?></h3>
											Total Owner Rent
										</div>
									</div>
								</div>
							<?php }else{ ?>
								Something Wrong
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
