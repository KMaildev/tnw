<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<link href='<?php echo base_url(); ?>assets/resources/dropzone.css' type='text/css' rel='stylesheet'>
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12">
				<?php 
					$member_session_id = $this->session->userdata('member_id');
					if ($my_data_detail) {
						if ($member_session_id == $my_data_detail->users_info_id) { 
					?>
						<div class="card">
							<div class="header">
								<a href="<?php echo site_url('member/my_photo_store/my_data/'.$my_data_detail->folder_id); ?>">
									<h3>
										<strong>
										<body><?php echo $my_data_detail->folder_name; ?></body>
										</strong> 
									</h3>
								</a>
							</div>

							<div class="body">
								<div class="jumbotron">
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
						<?php }else{ ?>
							<h2>404</h2>
						<?php } ?>
					<?php }else{ ?>
						<?php $this->load->view('templates/shared/404'); ?>
				<?php } ?>
				
			</div>
		</div>
	</div>
</section>


<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
<script src='<?php echo base_url() ?>assets/resources/dropzone.js' type='text/javascript'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>
<script type="text/javascript">
Dropzone.autoDiscover = false;
var foto_upload= new Dropzone(".dropzone",{
    url: "<?php echo base_url('member/my_photo_store/process_upload'); ?>",
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
        url:"<?php echo base_url('member/my_photo_store/remove_photo'); ?>",
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
