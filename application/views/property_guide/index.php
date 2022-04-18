<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="blog blog-section">
    <div class="container">
        <div class="row">
            <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-5">
                <div class="container">
                    <h5>Property Guide</h5>
                    <div class="row">
                        <?php 
                            foreach ($propertie_guides as $propertie_guide) {
                         ?>
                        <div class="item col-lg-3 col-md-3 col-xs-12 col-sm-12 landscapes mb-2">
                            <div class="project-single" style="height: 270px; background-color: white;">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <a href="<?php echo site_url('property_guide/show/'.$propertie_guide->pg_id); ?>" class="homes-img">
                                            <?php 
                                                if ($propertie_guide->photo == '') {
                                             ?>
                                                <img src="<?php echo base_url(); ?>data/default.jpg" class="img-fluid" alt="" style="width: 100%; height: 160px; object-fit:cover; object-position: center;">
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie_guide->photo; ?>" style="width: 100%; height: 160px; object-fit:cover; object-position: center;" class="img-responsive">
                                            <?php } ?>
                                        </a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <a href="<?php echo site_url('property_guide/show/'.$propertie_guide->pg_id); ?>">
                                        <?php echo mb_substr($propertie_guide->title, 0, 52, 'UTF-8'); ?>
                                    </a>
                                    <p class="homes-address mb-3">
                                        <a href="<?php echo site_url('property_guide/show/'.$propertie_guide->pg_id); ?>">
                                            <i class="fa fa-calendar-plus"></i><span>
                                                <?php echo $propertie_guide->upload_date; ?>  &nbsp;/
                                            </span>
                                        </a>

                                        <a href="<?php echo site_url('property_guide/show/'.$propertie_guide->pg_id); ?>">
                                            <span>
                                                By Admin
                                            </span>
                                        </a>
                                    </p>
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
