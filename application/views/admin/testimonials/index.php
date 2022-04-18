<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Testimonials
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="fa fa-building"></i> Testimonials</a></li>
                    <li class="breadcrumb-item active">List</li>
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
	                		<a href="<?php echo(site_url('main/testimonials/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
	                			Create
	                		</a>
                        </h2>
                    </div>
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
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php
                foreach ($testimonials as $testimonial) {
             ?>
             <a href="<?php echo site_url('main/testimonials/detail/'.$testimonial->t_id); ?>">
               <div class="col-lg-3 col-md-12" >
                 <div class="card" style="height: 350px;">
                     <div class="body">

                        <?php 
                            if ($testimonial->profile_photo == '') {
                        ?>
                            <img class="img-thumbnail img-fluid" src="<?php echo base_url(); ?>/data/default/user.gif" alt="img" style="width: 100%; height: 210px;">
                        <?php }else{ ?>
                            <img class="img-thumbnail img-fluid" src="<?php echo base_url(); ?>./uploads/<?php echo $testimonial->profile_photo; ?>" alt="img" style="width: 100%; height: 210px;">
                        <?php } ?>
                        <h6 class="text-success mt-3"><?php echo $testimonial->company; ?></h6>
                          <p class="mt-0">
                            <a href="<?php echo site_url('main/testimonials/detail/'.$testimonial->t_id); ?>" class="col-blue-grey">
                                <?php echo $testimonial->name; ?>
                            </a>
                          </p>
                     </div>
                 </div>
               </div>
             </a>
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
