<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
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

					<div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3" >
						<div class="my-address">
							<h3 class="heading">Upload Logo</h3>
							<?php $this->load->view('templates/shared/alert_message'); ?>
							
							<?php if ($logo->logo == '') { ?>
							<?php }else{ ?>
								<div class="col-lg-3 m-4">
									<center>
									<img src="<?php echo base_url(); ?>/uploads/<?php echo $logo->logo; ?>" alt="" style="width: 100px;">
									</center>
								</div>
							<?php } ?>
								
							<form method="post" action="<?php echo site_url('member/manage_account/change_company_logo'); ?>" enctype='multipart/form-data'>
								<div class="row">
									<div class="col-lg-12 ">
										<div class="form-group">
											<label>Logo File</label>
											<input required type="file" class="form-control" name="single_file" accept=".png, .jpg, .jpeg">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="">
												<button class="btn btn-default  pull-right" type="submit" style="background-color: #db9c30; color: white;">Upload</button>
										</div>
									</div>
								</div>
								<br>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
