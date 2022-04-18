<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>TNW Cloud
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> TNW Cloud</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Create</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <button onclick="myFunction()" class="btn btn-warning btn-sm" title="Create" style="color: white;">
                                Create Folder
                            </button>
                        </h2>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                        	<div class="col-lg-12 col-md-12 col-sm-12" id="myDIV">
                        		<?php 
		                            if (validation_errors() == true) { ?>
		                                <div class="alert alert-danger" role="alert">
		                                    <small><?php echo validation_errors(); ?></small>
		                                </div>
		                        <?php } ?>
                                <div class="form-group">          
                                    <form action="<?php echo site_url('main/tnw_cloud/create_folder'); ?>" method="post">
                                        <input type="text" class="form-control" placeholder="Create Folder" autocomplete="off" name="folder_name" required=""> 
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
                        <div class="clearfix row" >
                            
                            <?php 
                            	foreach ($folders as $folder) {
                             ?>
                            <div class="col-lg-3 col-md-3 col-sm-12" title="<?php echo $folder->other_date; ?>">
                                <a href="<?php echo site_url('main/tnw_cloud/my_data/'.$folder->folder_id); ?>">
                                	<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
									  <div class="toast-body">
									    <i class="fa fa-folder fa-lg"></i>
									    &nbsp;&nbsp;
									    <?php echo $folder->folder_name; ?>
									  </div>
									</div>
                                </a>
                            </div>
                        	<?php } ?>

                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>

<script type="text/javascript">
// $(document).ready(function(){
//    $("#myDIV").hide();
// }); 

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
  	x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>