<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

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
			<i class="fa fa-exclamation-circle"></i>
			<?php 
				if ($lang_session) {
					echo $this->session->flashdata('danger'); 
				}else{
					echo $this->session->flashdata('danger'); 
				}
			?>
		</strong>
	</div>
<?php } ?>