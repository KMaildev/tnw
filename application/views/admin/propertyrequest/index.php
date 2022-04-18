<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property Request 
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo(site_url('main/propertyrequest')); ?>"><i class="fa fa-building"></i>Property Request</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
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
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <ul class="mail_list list-group list-unstyled">
                                    <?php foreach ($messages as $message) { ?>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">                                
                                                    <div class="thumb hidden-sm-down m-r-20"> 
                                                        
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media-heading">
                                                        <a href="" class="m-r-10"><?php echo $message->name; ?></a>
                                                        <span class="badge bg-black">
                                                            <?php echo $message->email; ?>
                                                        </span>
                                                        <span class="badge bg-blue">
                                                            <?php echo $message->phone; ?>
                                                        </span>
                                                        <span class="badge bg-green">
                                                            <?php 
                                                                if ($message->contact_status == NULL) {
                                                                    echo "No Contact";
                                                                }else{
                                                                    echo $message->contact_status;
                                                                }
                                                            ?>
                                                        </span>
                                                        <small class="float-right text-muted"><time class="hidden-sm-down" datetime="<?php echo $message->other_date; ?>"><?php echo $message->other_date; ?></time>
                                                        <span class="m-2" title="Remove">
                                                            <a href="<?php echo site_url('main/propertyrequest/destroy/'.$message->pr_id); ?>"><i class="fa fa-trash" style="color: red;"></i></a>
                                                        </span>
                                                        </small>
                                                    </div>
                                                    <p class="msg">
                                                        <?php echo $message->detail; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>

                                </ul>
                                <div class="card m-t-5">
                                    <div class="body">
                                        <?= $this->pagination->create_links(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
