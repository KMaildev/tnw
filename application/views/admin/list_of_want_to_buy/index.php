<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Wanted Listing
                <small>Tat Nay Won</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo(site_url('main/list_of_want_to_buy')); ?>"><i class="fa fa-building"></i> Wanted Listing</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

        	<div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>   
                                    <?php echo $this->session->flashdata('success'); ?>
                                </strong>
                            </div>
                        <?php } ?>
                            
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">          
                                        <form>
                                            <input type="text" class="form-control" placeholder="ID Number" autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>"> 
                                        </form>      
                                    </div>
                                </div>   

                                <div class="col-lg-3 col-md-3 col-sm-12">
                                <form>
                                        <div class="form-group">         
                                            <input type="date" class="form-control"  name="from" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">          
                                            <input type="date" class="form-control"  name="to" autocomplete="off" required>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="form-group">          
                                            <input type="submit" class="form-control"  value="Search" style="background-color: #e5e5e5;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                       
                    </div>
                </div>
            </div>

            <?php 
                foreach ($list_of_want_to_buys as $list_of_want_to_buy) {
             ?>
                
                <div class="col-lg-4 col-md-12">
                    <div class="card" style="height: 260px;">
                        <div class="body">
                            <h5 class="mt-0">
                                <a href="<?php echo(site_url('main/list_of_want_to_buy/detail/'.$list_of_want_to_buy->w_id)); ?>" class="col-blue-grey">
                                    <?php echo $list_of_want_to_buy->title; ?>
                                </a>
                            </h5>
                            <h6 class="text-success mt-3">
                                <?php echo $list_of_want_to_buy->budget_from; ?>
                                <?php echo $list_of_want_to_buy->budget_to; ?>
                            </h6>
                            <small class="text-muted">
                                <i class="zmdi zmdi-pin mr-2"></i><?php echo $list_of_want_to_buy->townships; ?>
                            </small>
                            <span class="mr-5"></span>
                            <small class="text-muted">
                                <i class="fa fa-ad mr-2"></i><?php echo $list_of_want_to_buy->ad_number; ?>
                            </small>

                            <div class="d-flex justify-content-between mt-3 p-1  bg-light">
                                <a href="<?php echo(site_url('main/list_of_want_to_buy/detail/'.$list_of_want_to_buy->w_id)); ?>" title="<?php echo $list_of_want_to_buy->area_type; ?>">
                                    <i class="zmdi zmdi-view-dashboard mr-2"></i>
                                    <span><?php echo $list_of_want_to_buy->area; ?></span>
                                </a>
                                <a href="<?php echo(site_url('main/list_of_want_to_buy/detail/'.$list_of_want_to_buy->w_id)); ?>" title="Status">
                                    <i class="zmdi zmdi-home mr-2"></i>
                                    <span> <?php echo $list_of_want_to_buy->property_status; ?></span>
                                </a>
                                <a href="<?php echo(site_url('main/list_of_want_to_buy/detail/'.$list_of_want_to_buy->w_id)); ?>" title="Bedroom">
                                    <i class="zmdi zmdi-hotel mr-2"></i>
                                    <span>
                                        <?php 
                                            if ($list_of_want_to_buy->bedroom == NULL) {
                                                echo "0";
                                            }else{
                                                echo $list_of_want_to_buy->bedroom; 
                                            }
                                        ?>
                                    </span>
                                </a>
                            </div>
                            <br>
                            <a href="<?php echo(site_url('main/list_of_want_to_buy/detail/'.$list_of_want_to_buy->w_id)); ?>" class="btn btn-success btn-sm btn-block">View</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <center>
                  <?= $this->pagination->create_links(); ?>
                </center>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('templates/admin_footer'); ?>
