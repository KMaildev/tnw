<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Notification
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo count($notifications); ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="fa fa-building"></i> Notification</a></li>
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
                            <a href="<?php echo (site_url('main/notification_system/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
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
                                    <form method="get" action="<?php echo site_url('main/notification_system'); ?>">
                                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                        echo $this->input->get('keyword');
                                                                                                                                                    } ?>">
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <form method="get" action="<?php echo site_url('main/notification_system'); ?>">
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

            <div class="col-md-12 col-lg-12 col-sm-12">
                <ul class="mail_list list-group list-unstyled">
                    <?php foreach ($notifications as $key => $notification) { ?>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pull-left">
                                    <div class="thumb hidden-sm-down m-r-20">

                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="" class="m-r-10">
                                            <?php echo $notification->title; ?></a>
                                        <small class="float-right text-muted">
                                            <time>
                                                <?php echo $notification->upload_date; ?>
                                            </time>

                                            <span class="m-2" title="Remove">
                                                <a href="<?php echo site_url('main/notification_system/edit/' . $notification->id); ?>">
                                                    <i class="fa fa-edit" style="color: green;"></i>
                                                    Edit
                                                </a>
                                            </span>

                                            <span class="m-2" title="Remove">
                                                <a href="<?php echo site_url('main/notification_system/destroy/' . $notification->id); ?>">
                                                    <i class="fa fa-trash" style="color: red;"></i>
                                                    Delete
                                                </a>
                                            </span>
                                        </small>
                                    </div>
                                    <p class="msg">
                                        <?php echo $notification->description; ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('templates/admin_footer'); ?>