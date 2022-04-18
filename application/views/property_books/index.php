<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<section class="blog blog-section">
    <div class="container">
        <div class="row">
            <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-5">
                <div class="container">
                    <h5>
                        <?php 
                            if ($lang_session) {
                                echo "အိမ်ခြံမြေ စာအုပ်များ";
                            }else{
                                echo "Property Books";
                            }
                         ?>
                    </h5>
                    <style type="text/css">
                        .height {
                          height: 450;
                        }
                        
                        @media only screen and (max-width: 600px) {
                          .height {
                            height: auto%;
                          }
                        }
                    </style>
                    <div class="row">
                        <?php 
                            foreach ($propertie_books as $propertie_book) {
                         ?>
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single height">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <a href="<?php echo site_url('property_books/show/'.$propertie_book->pb_id); ?>" class="homes-img">
                                            <?php 
                                                if ($propertie_book->photo == '') {
                                             ?>
                                                <img src="<?php echo base_url(); ?>data/default.jpg" class="img-fluid" alt="">
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie_book->photo; ?>" style="width: 100%; height: 250px;" class="img-responsive">
                                            <?php } ?>
                                        </a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="<?php echo site_url('property_books/show/'.$propertie_book->pb_id); ?>">
                                        <?php echo $propertie_book->title; ?>
                                    </a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="<?php echo site_url('property_books/show/'.$propertie_book->pb_id); ?>">
                                            <i class="fa fa-calendar-plus"></i><span>
                                                <?php echo $propertie_book->upload_date; ?>  &nbsp;/
                                            </span>
                                        </a>

                                        <a href="<?php echo site_url('property_books/show/'.$propertie_book->pb_id); ?>">
                                            <span>
                                                By, Admin
                                            </span>
                                        </a>
                                    </p>
                                    <div class="footer">
                                        <a title="View Detail" href="<?php echo site_url('property_books/show/'.$propertie_book->pb_id); ?>" class="btn  btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> Read more... </a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <nav aria-label="..." class="pt-5">
                       <?= $this->pagination->create_links(); ?>
                    </nav>
            
                </div>
            </section>

        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>
