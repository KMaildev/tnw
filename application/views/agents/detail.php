<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>

<?php 
    if ($detail) {
?>

<section class="single-proper blog details">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 blog-pots py-3">
                <?php $this->load->view('templates/shared/alert_message'); ?>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12" style="background-color: white;">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: #94bc36; border: 2px solid gray;">
                                <p class="text-white text-center" style="font-size: 20px; padding: 8px;"> 
                                    <?php 
                                        echo $detail->company_name;
                                    ?>
                                </p>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 py-3">

                                <div class="row justify-content-center">
                                    <?php 
                                        if ($detail->logo == '') {
                                    ?>
                                        <img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto; box-shadow: 0px 2px 2px 2px #dbdfe0; object-fit:cover; object-position: center;">
                                    <?php }else{ ?>
                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $detail->logo; ?>" alt="home-1" class="img-responsive w-150" style="width: 150px; height: auto; box-shadow: 0px 2px 2px 1px #dbdfe0; object-fit:cover; object-position: center;">
                                    <?php } ?>
                                </div>


                                <hr style="border-top: 1px dashed gray;">
                                <div class="row justify-content-center">

                                    <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                                        <p><i class="fa fa-handshake fa-2x" style="color: gray;"></i></p>
                                        Joined on <?php echo $detail->carete_date; ?>
                                    </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12 text-center" style=" border-left: 1px solid black;">
                                        <p><i class="fa fa-chess-queen fa-2x" style="color: gold;"></i></p>
                                        <?php 
                                            if ($packages_status) {
                                                echo "Premium Agent";
                                            }else{
                                                echo "Agent";
                                            }
                                        ?>
                                    </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12 text-center" style=" border-left: 1px solid black;">
                                        <p><i class="fa fa-ad fa-2x" style="color: purple;"></i></p>
                                        Agent ID: <?php echo $detail->company_id; ?>
                                    </div>

                                </div>
                                <hr style="border-top: 1px dashed gray;">

                                <div class="row py-1 justify-content-center">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="mb-3">
                                            <?php echo $detail->description; ?>
                                        </p>
                                    </div>
                                </div>
                                
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12" style="background-color: white;">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php $this->load->view('agents/shared/property_counter'); ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row py-2">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12" style="background-color: white; padding: 10px;">
                        <div class="row justify-content-center">
                            <?php $this->load->view('agents/shared/property'); ?>
                        </div>
                    </div>
                </div>

            </div>


            <aside class="col-lg-4 col-md-4 col-sm-12 car py-3">
                
                <?php $this->load->view('agents/shared/company_info'); ?>

                <?php $this->load->view('agents/shared/request_inquiry'); ?>

                <?php $this->load->view('agents/shared/take_appointments'); ?>

                <div class="widget-boxed mt-33 mt-5">
                    <div class="recent-post">
                        <?php $this->load->view('templates/shared/tags'); ?>
                    </div>
                </div>

            </aside>

        </div>
    </div>
</section>

<?php }else{ ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>