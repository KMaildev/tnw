<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>List of admin
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> List of admin</a></li>
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
                            <a href="<?php echo(site_url('main/admin_list/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
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
                                foreach ($admin_lists as $admin_list) {
                             ?>
                            
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <a href="<?php echo site_url('main/admin_list/edit/'.$admin_list->id); ?>">
                                    <div class="body m-b-10 bg-yellow">
                                        <div class="color-name">
                                            <b style="color: black;" title="Name">
                                                <i class="fa fa-user"></i> <i><?php echo $admin_list->name; ?></i>
                                            </b>
                                            <br>
                                            <b style="color: black;" title="Email">
                                                <i class="fa fa-money-check"></i> <i><?php echo $admin_list->email; ?></i>
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

            <div class="col-lg-12 col-md-12 col-sm-12">
                <center>
                  <?= $this->pagination->create_links(); ?>
                </center>
            </div>
           
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
