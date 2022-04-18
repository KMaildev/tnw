<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<?php 

	$is_session = $this->session->userdata('show'); 

	if ($is_session) {
		$this->load->view('frontend/buyourservices/show_package');
	}else{
		$this->load->view('frontend/buyourservices/survey');
	}

 ?>
<?php $this->load->view('templates/footer'); ?>