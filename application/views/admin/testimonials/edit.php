<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Testimonials
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/testimonials'); ?>"><i class="fa fa-building"></i> Testimonials</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Testimonials</strong> </h2>
                    </div>
                    <div class="body">

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


                        <form method="post" action="<?php echo site_url('main/testimonials/update') ?>" enctype='multipart/form-data'>

                            <input type="hidden" name="t_id" value="<?php echo $detail->t_id; ?>">


                            <div class="row clearfix">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Name" autocomplete="off" name="name" value="<?php echo $detail->name; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Company Name or Posication" autocomplete="off" name="company" value="<?php echo $detail->company; ?>">
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="region_id" required>
                                            <option value="">-- Please select --</option>
                                            <?php 
                                                foreach ($regions as $region) {
                                             ?>
                                            <option value="<?php echo $region->region_id; ?>" <?php print ($detail->city_id == $region->region_id) ? 'selected=""' : ''; ?>>
                                                <?php echo $region->region; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <h6 class="mt-4">Description</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea id="summernote" name="testimonial" required=""><?php echo $detail->testimonial; ?></textarea>
                                </div>
                            </div>


                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <h6><i class="fa fa-images"> Photo</i></h6>
                                    <input class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg" >
                                    <input type="hidden" name="photo_value" value="<?php echo $detail->profile_photo; ?>">
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    <button type="reset" class="btn btn-default btn-round btn-simple">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('templates/admin_footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
  $('#summernote').summernote({
    placeholder: 'Description',
    tabsize: 2,
    height: 120,
    toolbar: [
      // ['style', ['style']],
      // ['font', ['bold', 'underline', 'clear']],
      // ['color', ['color']],
      // ['para', ['ul', 'ol', 'paragraph']],
      // ['table', ['table']],
    ]
  });
</script>
