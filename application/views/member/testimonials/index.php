<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<style>
    .custom {
        font-size: 12px;
    }
</style>
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

                    <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3">

                        <?php $this->load->view('templates/shared/alert_message'); ?>

                        <?php $this->load->view('member/testimonials/Create'); ?>

                        <div class="my-address">
                            <h3 class="heading">Testimonials</h3>
                            <?php if ($testimonials) { ?>
                                <?php
                                $member_session_id = $this->session->userdata('member_id');
                                foreach ($testimonials as $testimonial) {
                                    if ($member_session_id == $testimonial->user_info_fk_id) {
                                ?>
                                        <div class="card mb-2" style="padding: 12px;">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <?php echo $testimonial->name; ?>
                                                </h4>
                                                <h6 class="card-subtitle mb-2 text-muted">
                                                    <?php echo $testimonial->company; ?>
                                                </h6>
                                                <p class="card-text">
                                                    <?php
                                                    echo $testimonial->testimonial;
                                                    ?>
                                                </p>
                                                <br>

                                                <a href="#" class="card-link" data-toggle="modal" data-target="#exampleModal<?php echo $testimonial->t_id; ?>"> Edit</a>

                                                <div class="modal fade" id="exampleModal<?php echo $testimonial->t_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Edit note
                                                                </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <span class="help-block pyidaungsu-font">မှတ်စုတိုရေးပါ</span>
                                                                <form method="post" class="py-3" action="<?php echo site_url('member/testimonials/update'); ?>" enctype='multipart/form-data'>
                                                                    <input type="hidden" value="<?php echo $testimonial->t_id; ?>" name="t_id">
                                                                    <div class="row clearfix">

                                                                        <div class="col-sm-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control custom" placeholder="Name" autocomplete="off" name="name" value="<?php echo $testimonial->name;; ?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control custom" placeholder="Company Name or Posication" autocomplete="off" name="company" value="<?php echo $testimonial->company;; ?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <select class="form-control show-tick custom" name="region_id">
                                                                                    <?php
                                                                                    foreach ($regions as $region) {
                                                                                    ?>
                                                                                        <option value="<?php echo $region->region_id; ?>" <?php print ($testimonial->city_id == $region->region_id) ? 'selected=""' : ''; ?>>
                                                                                            <?php echo $region->region; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <h6 class="mt-4">Testimonial</h6>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <textarea id="summernote" name="testimonial"><?php echo $testimonial->testimonial; ?></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12">
                                                                            <h6><i class="fa fa-images"> Profile Photo</i></h6>
                                                                            <input class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg">

                                                                            <input type="hidden" name="photo_value" value="<?php $testimonial->profile_photo; ?>">
                                                                        </div>
                                                                    </div>

                                                                    <br>
                                                                    <input type="submit" name="submit" id="submit" value="Save" class="btn btn-default text-white">
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                |
                                                <a href="<?php echo site_url('member/testimonials/destroy/' . $testimonial->t_id); ?>" class="card-link" style="color: red;">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } else { ?>
                                <div class="alert alert-dismissible alert-success">
                                    <strong>Data not found</strong>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>