<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<section class="notfound">
    <div class="top-headings">
        <h3 class="text-center">WE ARE COMING SOON</h3>
        <p class="text-center">
            Sorry.... We are improving and fixing problems of our website. We will be back very soon....
        </p>
    </div>
    <div class="port-info">
        <a href="<?php echo site_url('welcome'); ?>" class="btn btn-primary btn-lg">Go To Home</a>
    </div>
</section>