<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Bank Accounts
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Bank Accounts</a></li>
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
                        <h2>
                            <a href="<?php echo(site_url('main/bank_accounts/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
                                Create
                            </a>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">          
                                    <form>
                                        <input  type="text" class="form-control" placeholder="Search..." autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>"> 
                                    </form>      
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="clearfix row" >
                            <?php 
                                foreach ($bank_accounts as $bank_account) {
                             ?>
                            
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <a href="<?php echo site_url('main/bank_accounts/edit/'.$bank_account->bank_id); ?>">
                                    <div class="body m-b-10 bg-yellow">
                                        <div class="color-name">
                                            <b style="color: black; font-size: 20px;">
                                                <?php echo $bank_account->bank_name; ?>
                                            </b>
                                            <br>
                                            <b style="color: black;" title="Account Name">
                                                <i class="fa fa-user"></i> <i><?php echo $bank_account->account_name; ?></i>
                                            </b>
                                            <br>
                                            <b style="color: black;" title="Account Number">
                                                <i class="fa fa-money-check"></i> <i><?php echo $bank_account->account_number; ?></i>
                                            </b>
                                        </div>
                                    </div>
                                </a>
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
