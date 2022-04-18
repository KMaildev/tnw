<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<section class="notfound">
    <div class="top-headings">
        <h3 class="text-center">No data available</h3>
        <p class="text-center">Oops! Looks Like Something Going Rong We can’t seem to find the page you’re looking for make sure that you have typed the currect URL</p>
    </div>
    <div class="port-info">
        <a href="<?php echo site_url('welcome'); ?>" class="btn btn-primary btn-lg">Go To Home</a>
    </div>
</section>