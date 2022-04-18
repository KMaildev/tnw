<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Developers & Agents
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo (site_url('main/developers')); ?>"><i class="fa fa-building"></i> Developers & Agentss</a></li>
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
                            <a href="<?php echo (site_url('main/developers/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
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
                                    <form>
                                        <input type="text" class="form-control" placeholder="ID Number" autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                        echo $this->input->get('keyword');
                                                                                                                                                    } ?>">
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <form>
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
            foreach ($developers as $developer) {
            ?>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card member-card">
                        <div class="header" style="background-color: #f7ac56;">
                            <h4 class="m-t-10">
                                <small style="color: white;">
                                    <?php echo $developer->company_name; ?>
                                </small>
                            </h4>
                        </div>
                        <div class="member-img">
                            <a href="<?php echo site_url('main/developers/show/' . $developer->user_id) ?>" class="">
                                <?php
                                if ($developer->logo == '') {
                                ?>
                                    <img src="<?php echo base_url(); ?>data/default/logo_not_found.png" class="img-responsive rounded-circle" style="width: 50%!important; height: 120px; background-size: corver;">
                                <?php } else { ?>
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $developer->logo; ?>" alt="home-1" class="rounded-circle" style="width: 50%!important; height: 120px; background-size: corver;">
                                <?php } ?>
                            </a>
                        </div>
                        <div class="body">
                            <div class="col-12">
                                <p class="text-muted">
                                    <?php echo $developer->name; ?>
                                    <br>
                                    <b><?php echo $developer->company_type; ?></b>
                                </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <small>
                                        <b>
                                            <i class="fa fa-city"></i>
                                            <i><?php echo $developer->region; ?></i>
                                        </b>
                                    </small>
                                </div>

                                <div class="col-6">
                                    <a href="<?php echo site_url('main/developers/show/' . $developer->user_id) ?>">
                                        <i class="fa fa-info-circle"></i>
                                        Detail
                                    </a>
                                </div>
                            </div>
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