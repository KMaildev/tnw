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
						<?php $this->load->view('templates/posts_status'); ?>
					</nav>

					<div class="section-body">
						<div class="row">
							<?php if ($user_permissions == 'agent') { ?>
								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To Upload your ads">
									<a href="<?php echo site_url('member/upload_ads') ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-edit fa-3x"></i> <br><br>
												Upload Ads
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To look at your uploaded ads">
									<a href="<?php echo site_url('member/my_ads') ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-list-alt fa-3x"></i> <br><br>
												My Ads
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Soldout">
									<a href="<?php echo site_url('member/soldout') ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-minus-circle fa-3x"></i> <br><br>
												Sold Out
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To look at your ads totally">
									<a href="<?php echo site_url('member/my_data') ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-chart-line fa-3x"></i> <br><br>
												My Data
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To order package">
									<a href="<?php echo site_url('member/packages'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-credit-card fa-3x"></i> <br><br>
												Packages
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To look at your ordered packages history">
									<a href="<?php echo site_url('member/packages/package_order_history'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-check-circle fa-3x"></i> <br><br>
												Package Order History
											</div>
										</div>
									</a>
								</div>


								<!-- <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="If you are an owner, you can upload yours ads">
									<a href="<?php echo site_url('member/upload_ads/by_owner') ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-credit-card fa-3x"></i> <br><br>
												By Owner
											</div>
										</div>
									</a>
								</div> -->

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To want to buy or sell posts">
									<a href="<?php echo site_url('member/wanted'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-credit-card fa-3x"></i> <br><br>
												Wanted
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="My Favorites">
									<a href="<?php echo site_url('member/favorites'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-star fa-3x"></i> <br><br>
												My Favorites
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To look at customers' inquiry deal with your ads">
									<a href="<?php echo site_url('member/message_inbox'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-comments fa-3x"></i> <br><br>
												Message Inbox
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Appointment">
									<a href="<?php echo site_url('member/appointment'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-comments fa-3x"></i> <br><br>
												Appointment
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Report">
									<a href="<?php echo site_url('include/report/member_report'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-flag fa-3x"></i> <br><br>
												Report
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Feedback & Report">
									<a href="<?php echo site_url('member/feedback'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-comments fa-3x"></i> <br><br>
												Feedback & Report
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="My Note">
									<a href="<?php echo site_url('member/my_note'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-clipboard fa-3x"></i> <br><br>
												My Note
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Testimonials">
									<a href="<?php echo site_url('member/testimonials'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-user-check fa-3x"></i> <br><br>
												Testimonials
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To keep your photos">
									<a href="<?php echo site_url('member/my_photo_store'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-images fa-3x"></i> <br><br>
												Photo storage
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Update your account and logo">
									<a href="<?php echo site_url('member/manage_account'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-cogs fa-3x"></i> <br><br>
												Manage Account
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To secure your password">
									<a href="<?php echo site_url('member/changepassword'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-lock fa-3x"></i> <br><br>
												Change Password
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Logout">
									<a href="<?php echo site_url('member/auth/logout'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-sign-out-alt fa-3x"></i> <br><br>
												Logout
											</div>
										</div>
									</a>
								</div>
							<?php } elseif ($user_permissions == 'by_owner') { ?>
								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="If you are an owner, you can upload yours ads">
									<a href="<?php echo site_url('member/upload_ads/by_owner') ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-credit-card fa-3x"></i> <br><br>
												By Owner
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To look at your uploaded ads">
									<a href="<?php echo site_url('member/my_ads') ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-list-alt fa-3x"></i> <br><br>
												My Ads
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To order package">
									<a href="<?php echo site_url('member/packages'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-credit-card fa-3x"></i> <br><br>
												Packages
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To look at your ordered packages history">
									<a href="<?php echo site_url('member/packages/package_order_history'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-check-circle fa-3x"></i> <br><br>
												Package Order History
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="My Favorites">
									<a href="<?php echo site_url('member/favorites'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-star fa-3x"></i> <br><br>
												My Favorites
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To look at customers' inquiry deal with your ads">
									<a href="<?php echo site_url('member/message_inbox'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-comments fa-3x"></i> <br><br>
												Message Inbox
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Report">
									<a href="<?php echo site_url('include/report/member_report'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-flag fa-3x"></i> <br><br>
												Report
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Update your account and logo">
									<a href="<?php echo site_url('member/manage_account'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-cogs fa-3x"></i> <br><br>
												Manage Account
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="To secure your password">
									<a href="<?php echo site_url('member/changepassword'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-lock fa-3x"></i> <br><br>
												Change Password
											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px" title="Logout">
									<a href="<?php echo site_url('member/auth/logout'); ?>">
										<div class="visible-xs container ov-hidden" style="background-color: #c68411; padding: 25px; border-radius: 10px;">
											<div class="flex-container text-center" style="color: white;">
												<i class="fa fa-sign-out-alt fa-3x"></i> <br><br>
												Logout
											</div>
										</div>
									</a>
								</div>
							<?php } else { ?>
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