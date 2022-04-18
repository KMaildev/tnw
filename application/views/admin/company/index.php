<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Company Information
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/dashboard'); ?>"><i class="zmdi zmdi-home"></i> Tat Nay Won</a></li>
                    <li class="breadcrumb-item active">Company Information</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Company</strong> Information</h2>

                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="POST" action="<?php echo site_url('main/company/update_company'); ?>" enctype='multipart/form-data'>

                            <input type="hidden" name="admin_id" value="<?php echo $this->session->userdata('admin_id'); ?>">

                            <div class="form-group form-float">
                                <input type="text" required="" placeholder="Company Name" class="form-control" name="company_name" value="<?php echo $companys->company_name; ?>">
                            </div>
                            <div class="form-group form-float">
                                <input type="text" required="" placeholder="Address" class="form-control" name="address" value="<?php echo $companys->address; ?>">
                            </div>
                            <div class="form-group form-float">
                                <input type="text" required="" placeholder="Phone" class="form-control" name="phone" value="<?php echo $companys->phone; ?>">
                            </div>
                            <div class="form-group form-float">
                                <input type="text" required="" placeholder="Email" class="form-control" name="email" value="<?php echo $companys->email; ?>">
                            </div>
                            <div class="form-group form-float">
                                <img src="<?php echo (base_url()); ?>/uploads/<?php echo $companys->logo; ?>" style="width: 200px;">
                                <input type="file" class="form-control" name="single_file" value="<?php echo $companys->logo; ?>" accept=".png, .jpg, .jpeg">
                            </div>
                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $this->load->view('templates/admin_footer'); ?>