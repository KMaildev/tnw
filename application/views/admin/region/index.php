<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Region
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Region</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Create</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Region</strong></h2>
                    </div>
                    <div class="body">
	                	<?php if($this->session->flashdata('success')){ ?>
						  	<div class="alert alert-success">
						        <strong>
						        	<span class="glyphicon glyphicon-ok"></span>   
						        	<?php echo $this->session->flashdata('success'); ?>
						        </strong>
						    </div>
						<?php } ?>

                        <form  method="post" action="<?php echo site_url('main/region/add_region'); ?>">
                        	<div class="form-group">
							  <div class="form-group">
							    <div class="input-group mb-3">
							      <input type="text" class="form-control" name="region" autocomplete="off" required="" value="<?php echo set_value('region'); ?>" placeholder="Region English">

                                  <input type="text" class="form-control" name="region_mm" autocomplete="off" required="" value="<?php echo set_value('region_mm'); ?>" placeholder="Region Myanmar">

							      <div class="input-group-append">
							      	<input type="submit"  class="input-group-btn" value="Added">
							      </div>
							    </div>
							  </div>
							</div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="clearfix row">

                            <?php 
                                foreach ($regions as $region) {
                             ?>
                            <div class="col-sm-4 col-md-3 col-lg-3">
                                <div class="body m-b-10 bg-yellow">
                                    <div class="color-name">
                                        <b style="color: black;">
                                            <?php echo $region->region; ?>
                                        </b>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>