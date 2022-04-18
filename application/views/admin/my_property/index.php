<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>
                    <?php
                    $title = str_replace('_', ' ', $title);
                    echo strtoupper($title);
                    ?>
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo (site_url('main/for_sale')); ?>"><i class="fa fa-building"></i> For Sale</a></li>
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
                            <a href="<?php echo (site_url('main/my_property/hostel_create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
                                Create
                            </a>
                        </h2>
                    </div>
                    <div class="body">
                        <?php if ($this->session->flashdata('success')) { ?>
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
                                    <form method="get" action="<?php echo site_url('main/my_property/index/hostel'); ?>">
                                        <input type="text" class="form-control" placeholder="ID Number / Township" autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                                echo $this->input->get('keyword');
                                                                                                                                                            } ?>">
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <form method="get" action="<?php echo site_url('main/my_property/index/hostel'); ?>">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="from" autocomplete="off" required>
                                    </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="to" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="form-group">
                                    <input type="submit" class="form-control" value="Search" style="background-color: #e5e5e5;">
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            foreach ($for_sales as $for_sale) {
                if ($for_sale->propertie_type == 'hostel') {
            ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="height: auto;">
                            <div class="body">
                                <h5 class="mt-0">
                                    <a href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" class="col-blue-grey">
                                        <?php echo $for_sale->title_eng; ?>
                                    </a>
                                </h5>
                                <h6 class="text-success mt-3">
                                    <?php echo $for_sale->price; ?>
                                    <?php echo $for_sale->price_type; ?>
                                </h6>
                                <small class="text-muted">
                                    <i class="zmdi zmdi-pin mr-2"></i><?php echo $for_sale->townships; ?>
                                </small>
                                <span class="mr-5"></span>
                                <small class="text-muted">
                                    <i class="fa fa-ad mr-2"></i><?php echo $for_sale->ad_number; ?>
                                </small>

                                <div class="d-flex justify-content-between mt-3 p-1  bg-light">
                                    <a href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" title="<?php echo $for_sale->area_type; ?>">
                                        <i class="zmdi zmdi-view-dashboard mr-2"></i>
                                        <span>
                                            <?php echo $for_sale->area; ?>
                                            <?php echo $for_sale->area_type; ?>
                                        </span>
                                    </a>
                                    <a href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" title="Status">
                                        <i class="zmdi zmdi-home mr-2"></i>
                                        <span> <?php echo $for_sale->property_status; ?></span>
                                    </a>
                                    <a href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" title="Bedroom">
                                        <i class="zmdi zmdi-hotel mr-2"></i>
                                        <span>
                                            <?php
                                            if ($for_sale->bead_room == NULL) {
                                                echo "0";
                                            } else {
                                                echo $for_sale->bead_room;
                                            }
                                            ?>
                                        </span>
                                    </a>
                                </div>
                                <br>
                                <?php
                                if ($for_sale->user_contact_name != NULL) {
                                ?>
                                    <span>
                                        <i class="fa fa-user mr-2"></i>
                                        <?php echo $for_sale->user_contact_name; ?>
                                    </span>
                                <?php } ?>
                                <br>
                                <?php
                                if ($for_sale->user_address != NULL) {
                                ?>
                                    <span>
                                        <i class="fa fa-map mr-2"></i>
                                        <?php echo $for_sale->user_address; ?>
                                    </span>
                                    <br><br>
                                <?php } ?>
                                <a href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" class="btn btn-success btn-sm btn-block">View</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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