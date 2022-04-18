<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>
<link href='<?php echo base_url(); ?>assets/resources/dropzone.css' type='text/css' rel='stylesheet'>
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Upload Photo
                <small>Tat Nay Won</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/for_sale'); ?>"><i class="zmdi zmdi-home"></i> Upload Photo</a></li>
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
                        <h2><strong>Upload Photo</strong> </h2>
                    </div>
                    <div class="body">
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

                        <div class="jumbotron">
                            <p><i>Upload Photo</i></p>
                            <div class="dropzone">
                              <div class="dz-message" style="text-align: center;" >
                                <a class="btn btn-primary btn-sm"  href="#" role="button">
                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </a>
                              </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('templates/admin_footer'); ?>
<script src='<?php echo base_url() ?>assets/resources/dropzone.js' type='text/javascript'></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>
<script type="text/javascript">
Dropzone.autoDiscover = false;
var foto_upload= new Dropzone(".dropzone",{
    url: "<?php echo base_url('main/shared/property_create/process_upload'); ?>",
    maxFilesize: 5,
    method:"post",
    acceptedFiles:"image/*",
    paramName:"userfile",
    dictInvalidFileType:"File type not allowed",
    addRemoveLinks:true,
});

//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
    a.token=Math.random();
    c.append("token_foto",<?php echo($insert_id); ?>); //Menmpersiapkan token untuk masing masing foto
});

//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
    var token=a.token;
    $.ajax({
        type:"post",
        data:{token:<?php echo($insert_id); ?>},
        url:"<?php echo base_url('main/shared/property_create/remove_photo'); ?>",
        cache:false,
        dataType: 'json',
        success: function(){
            console.log("remove poto success");
        },
        error: function(){
            console.log("Error");

        }
    });
});

</script>