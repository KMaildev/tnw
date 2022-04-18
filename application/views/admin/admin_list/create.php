<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Admin Account
                <small>Tat Nay Won</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/admin_list'); ?>"><i class="zmdi zmdi-home"></i> Admin Account</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Admin Account</strong> </h2>
                    </div>
                    <div class="body">
                        
                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>   
                                    <?php echo $this->session->flashdata('success'); ?>
                                </strong>
                            </div>
                        <?php }elseif($this->session->flashdata('danger')){ ?>
                            <div class="alert alert-danger">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>   
                                    <?php echo $this->session->flashdata('danger'); ?>
                                </strong>
                            </div>
                        <?php } ?>

                        <?php
                            if (validation_errors() == true) { ?>
                              <div class="alert alert-danger" role="alert">
                                <small><?php echo validation_errors(); ?></small>
                              </div>
                        <?php } ?>
                        
                        <form method="post" action="<?php echo site_url('main/admin_list/save') ?>">
                            <div class="row clearfix">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Name" autocomplete="off" name="name" value="<?php echo set_value('name'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Email" autocomplete="off" name="email" value="<?php echo set_value('email'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input required="" type="password" class="form-control" placeholder="Password" autocomplete="off" name="password">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input required="" type="password" class="form-control" placeholder="Confirm password" autocomplete="off" name="confirm_password">
                                    </div>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    <button type="reset" class="btn btn-default btn-round btn-simple">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('templates/admin_footer'); ?>