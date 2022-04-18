<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a title="Edit" href="<?php echo(site_url('main/property_book/edit/'.$detail->pb_id)); ?>" class="btn btn-primary btn-round btn-sm" style="background-color: green;">
                    <i class="fa fa-edit"></i> Edit
                </a>

                <a title="Delete" href="<?php echo(site_url('main/property_book/destroy/'.$detail->pb_id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-round btn-sm" style="background-color: #d7252b;">
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
                        <img src="<?php echo base_url(); ?>./uploads/<?php echo $detail->photo; ?>" class="img-fluid" alt="">
                        <h6 class="text-success mt-4">
                            <b> <i class="fa fa-calendar"></i> <?php echo $detail->upload_date; ?> </b>
                            |
                            <?php
                              if ($detail->status == 1) {
                             ?>
                                <a href="<?php echo site_url('main/property_book/changeStatusActive/'.$detail->pb_id); ?>">
                                  <i class="fa fa-toggle-on"></i> <b style="color: green;">publish</b>
                                </a>
                            <?php }else { ?>
                              <a href="<?php echo site_url('main/property_book/changeStatusInactive/'.$detail->pb_id); ?>">
                                <i class="fa fa-toggle-off"></i> <b style="color: red;">draft</b>
                              </a>
                            <?php } ?>
                        </h6>
                        <h5 class="mt-0 text-muted">
                        	<b><?php echo $detail->title; ?> </b>
                        </h5>
                        <p class="text-muted">
                        	<?php echo $detail->description; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
