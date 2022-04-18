<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Events
                <small>Tat Nay Won</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/events'); ?>"><i class="zmdi zmdi-home"></i> Events</a></li>
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
                        <h2><strong>Events</strong> </h2>
                    </div>
                    <div class="body">
                        <?php $this->load->view('templates/shared/error_message'); ?>
                        <form method="post" action="<?php echo site_url('main/events/save') ?>" enctype='multipart/form-data'>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Title" autocomplete="off" name="title" value="<?php echo set_value('title'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="25 Jan 2021 - 31 Jan 2021" autocomplete="off" name="e_date" value="<?php echo set_value('e_date'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="10 AM - 1.00 PM" autocomplete="off" name="e_time" value="<?php echo set_value('e_time'); ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required="" type="text" class="form-control" placeholder="Location" autocomplete="off" name="location" value="<?php echo set_value('location'); ?>">
                                    </div>
                                </div>
                            </div>
            
                            <h6 class="mt-4">Description English</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea id="summernote" name="description_eng"></textarea>
                                </div>
                            </div>

                            <h6 class="mt-4">Description Myanmar</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea id="summernoteeng" name="description_mm"></textarea>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <h6><i class="fa fa-images"> Photo</i></h6>
                                    <input class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg">
                                </div>

                                <div class="col-sm-12 py-3">
                                    <h6><i class="fa fa-play-circle"> Video</i></h6>
                                    <input class="form-control" type="file" id="formFile" name="video" accept=".mp4, .mpg">
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
