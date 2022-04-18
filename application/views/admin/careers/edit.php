<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Careers Add
                <small>Tat Nay Won</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/careers'); ?>"><i class="zmdi zmdi-home"></i> Careers Add</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Careers</strong> </h2>
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
                        
                        <form method="post" action="<?php echo site_url('main/careers/update') ?>">
                            <input type="hidden" name="c_id" value="<?php echo $detail->c_id; ?>">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Position" autocomplete="off" name="position" value="<?php echo $detail->position; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Experience Level" autocomplete="off" name="experience_level" value="<?php echo $detail->experience_level; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Salary [Negotiable]" autocomplete="off" name="salary" value="<?php echo $detail->salary; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Job Location" autocomplete="off" name="job_location" value="<?php echo $detail->job_location; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Male Total" autocomplete="off" name="male_total" value="<?php echo $detail->male_total; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Female Total" autocomplete="off" name="female_total" value="<?php echo $detail->female_total; ?>">
                                    </div>
                                </div>

                            </div>

            
                            <h6 class="mt-4">Job Description</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea id="summernote" name="job_description"><?php echo $detail->job_description; ?></textarea>
                                </div>
                            </div>

                            <h6 class="mt-4">Job Requirements</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea id="summernoteeng" name="job_requirements"><?php echo $detail->job_requirements; ?></textarea>
                                </div>
                            </div>

                            <h6 class="mt-4">About Our Company</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea id="about_our_company" name="about_our_company"><?php echo $detail->about_our_company; ?></textarea>
                                </div>
                            </div>
                          
                            
                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
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
    placeholder: 'Description (Myanmar)',
    tabsize: 2,
    height: 120,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
    ]
  });

  $('#summernoteeng').summernote({
        placeholder: 'Description (English)',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
        ]
      });

  $('#about_our_company').summernote({
        placeholder: 'Description (English)',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
        ]
      });
</script>
