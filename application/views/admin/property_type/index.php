<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Property Type
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Property Type</a></li>
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
                        <h2><strong>Property Type</strong></h2>
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

                        <form  method="post" action="<?php echo site_url('main/property_type/add_property_type'); ?>">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" name="property_type" autocomplete="off" required="" value="<?php echo set_value('property_type'); ?>" placeholder="Property Type [english]">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control"  name="property_type_mm" value="<?php echo set_value('property_type_mm'); ?>" autocomplete="off" required="" placeholder="Property Type [Myanmar]">                                   
                                    </div>
                                </div>
                                
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="submit" class="form-control"  value="Added" style="background-color: #e5e5e5;">                                   
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
                        		foreach ($property_types as $property_type) {
                        	 ?>
                            <div class="col-sm-4 col-md-3 col-lg-3">
                                <div class="body m-b-10 bg-yellow">
                                    <div class="color-name">
                                    	<b style="color: black;">
                                    		<?php echo $property_type->property_type; ?>
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