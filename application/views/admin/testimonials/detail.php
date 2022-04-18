<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a title="Edit" href="<?php echo(site_url('main/testimonials/edit/'.$detail->t_id)); ?>" class="btn btn-primary btn-round btn-sm" style="background-color: green;">
                    <i class="fa fa-edit"></i> Edit
                </a>

                <a title="Delete" href="<?php echo(site_url('main/testimonials/destroy/'.$detail->t_id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-round btn-sm" style="background-color: #d7252b;">
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
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <?php 
                            if ($detail->profile_photo == '') {
                        ?>
                            <img class="img-thumbnail img-fluid" src="<?php echo base_url(); ?>/data/default/user.gif" alt="img">
                        <?php }else{ ?>
                            <img src="<?php echo base_url(); ?>./uploads/<?php echo $detail->profile_photo; ?>" class="img-fluid" alt="">
                        <?php } ?>

                        
                        <h6 class="text-success mt-4">
                            <?php
                              if ($detail->status == 1) {
                             ?>
                                <a href="<?php echo site_url('main/testimonials/changeStatusActive/'.$detail->t_id); ?>">
                                  <i class="fa fa-toggle-on"></i> <b style="color: green;">publish</b>
                                </a>
                            <?php }else { ?>
                              <a href="<?php echo site_url('main/testimonials/changeStatusInactive/'.$detail->t_id); ?>">
                                <i class="fa fa-toggle-off"></i> <b style="color: red;">draft</b>
                              </a>
                            <?php } ?>

                        </h6>
                        <p class="mt-0 text-muted">
                            <i class="fa fa-user"></i> 
                        	<?php echo $detail->name; ?> 
                            &nbsp;  &nbsp;  &nbsp; 
                            <i class="fa fa-chalkboard-teacher"></i>  
                            <?php echo $detail->company; ?> 
                        </p>
                        
                        <p class="text-muted">
                        	<?php echo $detail->testimonial; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
