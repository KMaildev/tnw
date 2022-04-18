<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Message Inbox
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo (site_url('main/member_message')); ?>"><i class="fa fa-building"></i> Message Inbox</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                        echo $this->input->get('keyword');
                                                                                                                                                    } ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <?php foreach ($messages as $message) { ?>
                                    <div class="card text-black mb-3" style="background-color: #f9f7f7;">
                                        <div class="card-header">
                                            <?php echo $message->subject; ?>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text" style="font-weight: bold"> <?php echo $message->message; ?></p>
                                            <p class="card-text" style="font-weight: bold"> <?php echo $message->name; ?></p>
                                            <p class="card-text" style="font-weight: bold"> <?php echo $message->email; ?></p>
                                            <p class="card-text" style="font-weight: bold"> <?php echo $message->phone; ?></p>
                                            <p class="card-text" style="font-weight: bold"> <?php echo $message->other_date; ?></p>
                                            <a href="tel:<?php echo $message->phone; ?>" class="btn btn-success btn-sm">Call Now</a>
                                            <a href="<?php echo site_url('main/message_inbox/destroy/' . $message->mm_id); ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>