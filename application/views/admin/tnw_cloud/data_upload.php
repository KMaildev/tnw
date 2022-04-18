<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>
<link href='<?php echo base_url(); ?>assets/resources/dropzone.css' type='text/css' rel='stylesheet'>
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>Upload Images
                <small>Tat Nay Won</small>
                </h2>
            </div>            
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card">
                        <a href="<?php echo site_url('main/tnw_cloud/my_data/'.$my_data_detail->folder_id); ?>" class="btn btn-primary btn-sm m-4">
                            <?php echo $my_data_detail->folder_name; ?>
                        </a>
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
    url: "<?php echo base_url('main/tnw_cloud/process_upload'); ?>",
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
    c.append("folder_id",<?php echo($insert_id); ?>); //Menmpersiapkan token untuk masing masing foto
});

//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
    var token=a.token;
    $.ajax({
        type:"post",
        data:{token:<?php echo($insert_id); ?>},
        url:"<?php echo base_url('main/tnw_cloud/remove_photo'); ?>",
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