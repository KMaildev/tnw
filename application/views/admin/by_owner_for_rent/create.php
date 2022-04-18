<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property Add
                <small>Tat Nay Won</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/by_owner_for_rent'); ?>"><i class="zmdi zmdi-home"></i> Property Add</a></li>
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
                        <h2><strong>Property Add</strong> </h2>
                    </div>
                    <div class="body">

                        <?php 
                            if (validation_errors() == true) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <small><?php echo validation_errors(); ?></small>
                                </div>
                        <?php } ?>
                        
                        <form method="post" action="<?php echo site_url('main/shared/property_create/save') ?>" enctype='multipart/form-data'>
                            
                            <input type="hidden" name="propertie_type" value="by_owner_for_rent">
                            <input type="hidden" name="ad_number" value="OR-">

                            <?php $this->load->view('admin/shared/property_create'); ?>

                            
                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
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
<?php $this->load->view('templates/data_list_suggests'); ?>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


<script type="text/javascript" src="<?php echo base_url('assets/summernote.js'); ?>"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<script>
    $(document).ready(function(){
        $('#Region').change(function(){
            var region_id = $('#Region').val();
            if(region_id != '')
            {
                $.ajax({
                    url:"<?php echo site_url(); ?>/include/dynamic_dependent/fetch_township",
                    method:"POST",
                    data:{region_id:region_id},
                    success:function(data)
                    {
                        $('#TownshipData').html(data);
                    }
                });

            }else
            {
                $('#TownshipData').html('<select class="form-control show-tick"><option value="">Please select township</option></select>');
            }
        });
        $('#TownshipData').html('<select class="form-control show-tick" style="color: #bcbaba;"><option value="">Please select township</option></select>');
    });
</script>