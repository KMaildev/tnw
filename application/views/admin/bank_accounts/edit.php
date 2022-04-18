<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Bank Account
                <small>Tat Nay Won</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/bank_accounts'); ?>"><i class="zmdi zmdi-home"></i> Bank Account</a></li>
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
                        <h2><strong>Bank Account Add</strong> </h2>
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
                        
                        <form method="post" action="<?php echo site_url('main/bank_accounts/update') ?>" >
                            <div class="row clearfix">
                                <input type="hidden" value="<?php echo $bank_account->bank_id; ?>" name="bank_id">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Bank Name" autocomplete="off" name="bank_name" value="<?php echo $bank_account->bank_name; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Account Name" autocomplete="off" name="account_name" value="<?php echo $bank_account->account_name; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Account Number" autocomplete="off" name="account_number" value="<?php echo $bank_account->account_number; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    <a onclick="return confirm('Are you sure you want to delete this bank account?');" href="<?php echo site_url('main/bank_accounts/destroy/'.$bank_account->bank_id); ?>" class="btn btn-danger btn-round btn-simple">
                                        Delete
                                    </a>
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