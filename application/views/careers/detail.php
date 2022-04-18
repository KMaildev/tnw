<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="single-proper blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12 py-5">
                        <h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;" >
                            <?php echo  $detail->position; ?>
                        </h3>

                        <div class="blog-info details mb-30 ">
                            <p class="mb-3">
                                <i class="fa fa-briefcase"></i> <?php echo $detail->position; ?> <br>
                                <i class="fa fa-briefcase"></i> <?php echo $detail->experience_level; ?> <br>
                                <i class="fa fa-briefcase"></i> <?php echo $detail->salary; ?> <br>
                                <i class="fa fa-briefcase"></i> <?php echo $detail->job_location; ?> <br>
                            </p>
                            <hr>

                            <h5 class="mb-4">Job Description</h5>
                            <p class="mb-3">
                                <?php echo $detail->job_description; ?>
                            </p>
                            <hr>
                            <h5 class="mb-4">Job Requirements</h5>
                            <p class="mb-3">
                               <?php echo $detail->job_requirements; ?>
                            </p>
                            <h6><i class="fa fa-users" style="color: green;"></i> <b><i>Male - <?php echo $detail->male_total; ?> / Female - <?php echo $detail->female_total; ?></i></b></h6>
                            <br>
                            <h5 class="mb-4">About Our Company</h5>
                            <p class="mb-3" style="text-align: justify;">
                                <?php echo $detail->about_our_company; ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <aside class="col-lg-4 col-md-4 col-sm-12 car py-4">
                <div class="single widget">
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4>Conpany Information</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="sidebar-widget author-widget2">
                                    <div class="author- clearfix">
                                        <center>
                                            <img src="<?php echo base_url(); ?>uploads/<?php echo $tatnaywon->logo; ?>" alt="author-image" style="width: 50%;">
                                        </center>
                                    </div>
                                    <ul class="author__contact">
                                        <center>
                                            <h4 class="author__title"><?php echo $tatnaywon->company_name; ?></h4>
                                        </center>
                                        <li>
                                            <span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>
                                           <small><?php echo $tatnaywon->address; ?></small>
                                        </li>
                                        <li>
                                            <span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <a href="tal:<?php echo $tatnaywon->phone; ?>"><small><b><?php echo $tatnaywon->phone; ?></b></small></a>
                                        </li>
                                        <li>
                                            <span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <a href="mailto:<?php echo $tatnaywon->email; ?>"><small><b><?php echo $tatnaywon->email; ?></b></small></a>
                                        </li>
                                    </ul>
                                    <div class="agent-contact-form-sidebar">
                                        <h4>APPLY FOR THIS JOB</h4>
                                        <?php $this->load->view('templates/shared/alert_message'); ?>
                                        <form method="post" action="<?php echo site_url('requestinquiry/apply_jobs'); ?>" enctype='multipart/form-data'>
                                            <input type="text" id="fname" name="name" placeholder="Full Name" required />
                                            <input type="number" id="pnumber" name="phone" placeholder="Phone Number" required />
                                            <input type="email" id="emailid" name="email" placeholder="Email Address" required />
                                            <input type="file" id="emailid" name="single_file" required />
                                            <input type="submit" name="sendmessage" class="multiple-send-message" value="Upload" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

    </div>

    <br><br>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>