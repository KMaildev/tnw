<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a title="Delete" href="<?php echo(site_url('main/list_of_want_to_buy/destroy/'.$detail->w_id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-round btn-sm" style="background-color: #d7252b;">
                    <i class="fa fa-trash-alt"></i> Delete
                </a>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-right">
                
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="fa fa-building"></i> Property</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <h6 class="text-success mt-4">
                        	<?php echo $detail->budget_from; ?>
                            TO
                        	<?php echo $detail->budget_to; ?>
                            <?php echo $detail->currency; ?>
                        </h6>
                        <h5 class="mt-0 text-muted">
                        	<b><?php echo $detail->title; ?> </b>
                        </h5>
                        <p class="text-muted">
                        	<?php echo $detail->description_mm; ?>
                        </p>
                        <p class="text-muted">
                            <?php echo $detail->description_eng; ?>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong></h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                            	<h6 class="py-2"><i class="fa fa-building"></i> Bedroom</h6>
                                <ul class="list-group">
                                	<li class="list-group-item">
                                        <i class="zmdi zmdi-check-circle mr-2"></i>
                                        <?php echo $detail->bedroom; ?>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <h6 class="py-2"><i class="fa fa-building"></i> Bathroom</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="zmdi zmdi-check-circle mr-2"></i>
                                        <?php echo $detail->bathroom; ?>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <h6 class="py-2"><i class="fa fa-building"></i> Area</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="zmdi zmdi-check-circle mr-2"></i>
                                        <?php echo $detail->area; ?>
                                        <?php echo $detail->area_type; ?>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-12">

                <div class="card">
                    <div class="body text-center">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $detail->logo; ?>" class="rounded-circle" alt="profile-image" style="width: 100px;">
                        </a>
                        <h4 class="m-t-10"><?php echo $detail->company_name; ?></h4>
                        <div class="col-12">
                            <p style="text-align: justify;">
                                <small>
                                    <i class="fa fa-map-marker"></i>
                                    <?php echo $detail->address; ?>
                                </small>
                            </p>

                            <p style="text-align: justify;">
                                <small>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:<?php echo $detail->phone; ?>"><?php echo $detail->phone; ?></a>
                                </small>
                            </p>

                            <p style="text-align: justify;">
                                <small>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:<?php echo $detail->email; ?>"><?php echo $detail->email; ?></a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2><strong>Information</strong></h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0">
                                <tbody>

                                    <tr>
                                        <th scope="row">Status: </th>
                                        <td>
                                            <?php
                                                if ($detail->is_active == 1) {
                                             ?>
                                            <span class="badge badge-success">
                                                <a href="<?php echo(site_url('main/list_of_want_to_buy/changeStatusActive/'.$detail->w_id)); ?>" style="color: green;">
                                                    Active
                                                </a>
                                            </span>
                                            <?php }elseif($detail->is_active == 0){ ?>
                                            <span class="badge badge-danger">
                                                <a href="<?php echo(site_url('main/list_of_want_to_buy/changeStatusInactive/'.$detail->w_id)); ?>" style="color: red;">
                                                    Inactive
                                                </a>
                                            </span>
                                            <?php } ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">AD ID:</th>
                                        <td>
                                            <?php echo $detail->ad_number; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Budget From:</th>
                                        <td>
                                        	<?php echo $detail->budget_from; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Budget To:</th>
                                        <td>
                                            <?php echo $detail->budget_to; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Currency:</th>
                                        <td>
                                            <small><?php echo $detail->currency; ?></small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Agent Allow: </th>
                                        <td>
                                        	<span class="badge badge-primary">
                                        		<?php echo $detail->agent_allow_status; ?>
                                        	</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status: </th>
                                        <td>
	                                        <span class="badge badge-primary">
	                                    		<?php echo $detail->property_status; ?>
	                                    	</span>
	                                    </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type:</th>
                                        <td><?php echo $detail->property_type; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Area:</th>
                                        <td>
                                        	<?php echo $detail->area; ?>
                                        	<?php echo $detail->area_type; ?>
                                        </td>
                                    </tr>


                                    <tr>
                                        <th scope="row">Bedroom:</th>
                                        <td><?php echo $detail->bedroom; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Bathroom:</th>
                                        <td><?php echo $detail->bathroom; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Region:</th>
                                        <td><?php echo $detail->region; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Townships:</th>
                                        <td><?php echo $detail->townships; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Contact:</th>
                                        <td><?php echo $detail->phone; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Date:</th>
                                        <td><?php echo $detail->other_date; ?></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
