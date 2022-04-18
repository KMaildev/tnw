<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<?php 
    if ($detail) {
?>
<section class="blog blog-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">

            	<h3 style="background-color:#25a835; box-shadow: 1px 1px 1px #000000; background-color: white; padding: 14px;">
                    <?php echo $detail->title; ?>
                </h3>

                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item details no-mb2">
                            <div class="news-item-img">
                                <img class="img-responsive" src="<?php echo base_url(); ?>uploads/<?php echo $detail->photo; ?>" alt="<?php echo $detail->title; ?>" style="width: 100%; height: auto; object-fit:cover; object-position: center;">
                            </div>
                            <div class="news-item-text details pb-0">
                                <h3><?php echo $detail->title; ?></h3>
                                <div class="dates">
                                    <span class="date"><?php echo $detail->upload_date; ?> &nbsp;</span>
                                    <ul class="action-list pl-0">

                                    	<li class="action-item">
                                        	<span>By, <?php echo $detail->name; ?> &nbsp;</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="">
                                    <p class="mb-3">
                                         <?php echo $detail->description; ?>   
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           	<aside class="col-lg-3 col-md-12 car">
                <div class="widget">

                    <div class="widget-boxed" style="background-color: white;">
                        <h5 class="title">
                            <?php 
                                if ($lang_session) {
                                    echo "စီစစ်ပြီး ရှာပါ";
                                }else{
                                    echo "Filter";
                                }
                             ?>
                        </h5>
                        <?php $this->load->view('templates/shared/filter_search'); ?>
                    </div>

                    <div class="recent-post py-3" style="background-color: white;">
                        <?php $this->load->view('templates/shared/tags'); ?>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>



<section class="similar-property recently portfolio bshd p-0 bg-white-inner py-5">
    <div class="container">
        <h5>Other News</h5>
        <div class="row portfolio-items">
            <?php 
                foreach ($recent_guides as $propertie_guide) {
             ?>
            <div class="item col-lg-3 col-md-3 col-xs-12 landscapes mb-2">
                <div class="project-single" style="height: 270px; background-color: white;">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <a href="<?php echo site_url('latest_news/show/'.$propertie_guide->news_id); ?>" class="homes-img">
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
                        <a href="<?php echo site_url('latest_news/show/'.$propertie_guide->news_id); ?>">
                            <?php echo mb_substr($propertie_guide->title, 0, 52, 'UTF-8'); ?>
                        </a>
                        <p class="homes-address mb-3">
                            <a href="<?php echo site_url('latest_news/show/'.$propertie_guide->news_id); ?>">
                                <i class="fa fa-calendar-plus"></i><span>
                                    <?php echo $propertie_guide->upload_date; ?>  &nbsp;/
                                </span>
                            </a>

                            <a href="<?php echo site_url('latest_news/show/'.$propertie_guide->news_id); ?>">
                                <span>
                                    By, <?php echo $propertie_guide->name; ?>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php }else{ ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>