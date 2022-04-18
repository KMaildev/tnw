<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<style>
    .custom {
        font-size: 12px;
    }
    .dataselect {
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<section class="user-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2 py-5">

                <div class="dashborad-box stat">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="background-color: #db9c30">
                            <li class="breadcrumb-item">
                                <a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 17px;">
                                    <i class="fa fa-building"></i> Dashboard
                                </a>
                            </li>
                        </ol>
                    </nav>

                    <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3" >
                        <div class="my-address">
                            <h3 class="heading">Feedback & Report</h3>

                            <?php
                            if (validation_errors() == true) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <small><?php echo validation_errors(); ?></small>
                                </div>
                            <?php } ?>

                            <?php if($this->session->flashdata('success')){ ?>
                                <div class="alert alert-success">
                                    <strong>
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </strong>
                                </div>
                            <?php }elseif($this->session->flashdata('danger')){ ?>
                                <div class="alert alert-danger">
                                    <strong>
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <?php echo $this->session->flashdata('danger'); ?>
                                    </strong>
                                </div>
                            <?php } ?>

                            <form method="post" action="<?php echo site_url('member/feedback/save')?>">
                                <div class="row">

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input required type="text" name="name" class="form-control" placeholder="Name" autocomplete="off" value="<?php echo set_value('name'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input required type="text" name="subject" class="form-control" placeholder="Subject" autocomplete="off" value="<?php echo set_value('subject'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label></label>
                                            <textarea id="summernote" name="description"></textarea>
                                        </div>
                                    </div>
                               
                                
                                    <div class="col-lg-12">
                                        <div class="">
                                            <button class="btn btn-default  pull-right m-3" type="submit" style="background-color: #db9c30; color: white;">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Message',
        tabsize: 2,
        height: 120,
        toolbar: [
        ]
    });
</script>
