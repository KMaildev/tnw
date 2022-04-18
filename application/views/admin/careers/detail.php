<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a title="Edit" href="<?php echo(site_url('main/careers/edit/'.$detail->c_id)); ?>" class="btn btn-primary btn-round btn-sm" style="background-color: green;">
                    <i class="fa fa-edit"></i> Edit
                </a>

                <a title="Delete" href="<?php echo(site_url('main/careers/destroy/'.$detail->c_id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-round btn-sm" style="background-color: #d7252b;">
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

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <h6 class="text-success mt-4">
                            <b> <i class="fa fa-calendar"></i> <?php echo $detail->other_date; ?> </b>
                        </h6>
                        <h5 class="mt-0 text-muted">
                        	<b>Position : <?php echo $detail->position; ?> </b>
                            <br>
                            Experience : <?php echo $detail->experience_level; ?> 
                            <br>
                            Salary : <?php echo $detail->salary; ?>
                            <br>
                            Male Total : <?php echo $detail->male_total; ?>
                            Female Total : <?php echo $detail->female_total; ?> 


                        </h5>
                        <p class="text-muted">
                            <h5>Job Description</h5>
                        	<?php echo $detail->job_description; ?>
                        </p>

                        <p class="text-muted">
                            <h5>Job Requirements</h5>
                            <?php echo $detail->job_requirements; ?>
                        </p>

                        <p class="text-muted">
                            <h5>About Our Company</h5>
                            <?php echo $detail->about_our_company; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
