<?php
$lang_session = $this->session->userdata('lang');
?>
<div class="schedule widget-boxed mt-33 mt-0">
    <div class="widget-boxed-header">
        <h4>
            <i class="fa fa-calendar pr-3 padd-r-10"></i>
            <?php
            echo ($lang_session) ? "ရက်ချိန်းရယူပါ။" : "Take Appointments";
            ?>
        </h4>
    </div>

    <form action="<?php echo site_url('pages/appointment/save'); ?>" method="post">
        <input type="hidden" name="appointment_user_info_id" value="<?php echo $data_detail->user_info_id; ?>" require>
        <div class="widget-boxed-body">
            <div class="row">
                <div class="col-lg-6 col-md-12 book">
                    <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2021" data-max-year="2020" data-disabled-days="08/17/2021,08/18/2021" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="" name="appointment_date" value="<?php echo set_value('appointment_date'); ?>">
                </div>
                <div class="col-lg-6 col-md-12 book2">
                    <input type="text" id="reservation-time" class="form-control" readonly="" name="appointment_time" value="<?php echo set_value('appointment_time'); ?>">
                </div>
                <div class="col-lg-12 col-md-12 book2 py-2">
                    <input type="text" class="form-control" value="<?php echo set_value('phone_number'); ?>" placeholder="Phone Number" name="phone_number" autocomplete="off">
                </div>
            </div>
            <input type="submit" name="sendmessage" class="btn reservation btn-radius theme-btn full-width mrg-top-10" value="Apply Now" />
        </div>
    </form>
</div>