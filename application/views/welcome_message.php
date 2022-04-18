<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php
$lang_session = $this->session->userdata('lang');
?>

<?php $this->load->view('templates/pages/advance_search'); ?>
<?php $this->load->view('templates/pages/home_getstarted'); ?>
<?php $this->load->view('templates/pages/welcome_explorer'); ?>
<?php $this->load->view('templates/pages/explorer_search_modal'); ?>


<?php $this->load->view('templates/property_pages/welcome_top_featured_properties'); ?>

<?php $this->load->view('templates/property_pages/welcome_for_sale'); ?>

<?php
// $this->load->view('templates/pages/text_animation'); 
?>


<?php $this->load->view('templates/pages/division_search'); ?>
<?php $this->load->view('templates/pages/latest_news'); ?>
<?php $this->load->view('templates/pages/testimonials'); ?>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>