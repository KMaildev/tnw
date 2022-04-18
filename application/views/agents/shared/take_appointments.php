<?php 
    $lang_session = $this->session->userdata('lang'); 
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/timedropper.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/datedropper.css">
<br>
<div class="schedule widget-boxed mt-33 mt-0">
    <div class="widget-boxed-header">
        <h4>
            <i class="fa fa-calendar pr-3 padd-r-10"></i>
            <?php 
                echo ($lang_session) ? "ရက်ချိန်းရယူပါ။" : "Take Appointments";
             ?>
        </h4>
    </div>
    <div class="widget-boxed-body">
        <div class="row">
            <div class="col-lg-6 col-md-12 book">
                <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2021" data-max-year="2020" data-disabled-days="08/17/2021,08/18/2021" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
            </div>
            <div class="col-lg-6 col-md-12 book2">
                <input type="text" id="reservation-time" class="form-control" readonly="">
            </div>
        </div>
        <a href="#" class="btn reservation btn-radius theme-btn full-width mrg-top-10">
            Apply
        </a>
    </div>
</div>