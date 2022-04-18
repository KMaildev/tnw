<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>For Rent
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo (site_url('main/for_rent')); ?>"><i class="fa fa-building"></i> For Rent</a></li>
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
                            <a href="<?php echo (site_url('main/for_rent/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
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
                                    <form method="get" action="<?php echo site_url('main/for_rent/index'); ?>">
                                        <input type="text" class="form-control" placeholder="ID Number / Township" autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                                echo $this->input->get('keyword');
                                                                                                                                                            } ?>">
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <form method="get" action="<?php echo site_url('main/for_rent/index'); ?>">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="from" autocomplete="off">
                                    </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="to" autocomplete="off">
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
                if ($for_sale->propertie_type == 'for_rent') {
            ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card" style="height: 260px;">
                            <div class="body">
                                <h5 class="mt-0">
                                    <a href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" class="col-blue-grey">
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

                                <div class="d-flex justify-content-between mt-3 p-3 bg-light">
                                    <a href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" title="<?php echo $for_sale->area_type; ?>">
                                        <i class="zmdi zmdi-view-dashboard mr-2"></i>
                                        <span>
                                            <?php echo $for_sale->area; ?>
                                            <?php echo $for_sale->area_type; ?>
                                        </span>
                                    </a>
                                    <a href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" title="Status">
                                        <i class="zmdi zmdi-home mr-2"></i>
                                        <span> <?php echo $for_sale->property_status; ?></span>
                                    </a>
                                    <a href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" title="Bedroom">
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

                                <a title="Detail" href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" class="btn btn-primary btn-round btn-sm" style="background-color: gray;">
                                    <i class="fa fa-eye"></i> View
                                </a>

                                <a title="Detail" href="<?php echo (site_url('shared/refres_ad/index/' . $for_sale->sale_id . '/' . $for_sale->user_info_id)); ?>" class="btn btn-primary btn-round btn-sm" style="background-color: black;">
                                    Refresh
                                </a>

                                <a title="Edit" href="<?php echo (site_url('main/for_rent/edit/' . $for_sale->sale_id)); ?>" class="btn btn-primary btn-round btn-sm" style="background-color: green;">
                                    <i class="fa fa-edit"></i> Edit
                                </a>

                                <a title="Edit Photo" href="<?php echo (site_url('main/for_rent/photo_edit/' . $for_sale->sale_id)); ?>" class="btn btn-round btn-sm" style="background-color: #034787;">
                                    <i class="fa fa-file-image"></i> Photo Edit
                                </a>

                                <a title="Delete" href="<?php echo (site_url('main/for_rent/destroy/' . $for_sale->sale_id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-round btn-sm" style="background-color: #d7252b;">
                                    <i class="fa fa-trash-alt"></i> Delete
                                </a>

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