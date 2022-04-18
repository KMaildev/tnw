<?php $this->load->view('templates/pages/explorer_search_modal'); ?>
<?php
$lang_session = $this->session->userdata('lang');
?>

<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">
                <!-- <span class="display-1 d-block">404</span> -->
                <div class="alert alert-dismissible alert-warning">
                    <p class="mb-0" style="color: black; font-weight: bold;">
                        <i class="fa fa-info-circle"></i>
                        <?php
                        if ($lang_session) {
                            echo "သင့်ရှာဖွေမှုနှင့်သက်ဆိုင်သော ကြော်ငြာမရှိသေးပါ။";
                        } else {
                            echo "No advertisement based on your search.";
                        }
                        ?>

                    </p>
                </div>

                <button onclick="document.getElementById('id01').style.display='block'" style="padding: 7px;" class="btn btn-lg myBtn btn-md">
                    Try Again
                    <i class="fa fa-long-arrow-alt-right text-white"></i>
                </button>
            </div>
        </div>
    </div>
</div>