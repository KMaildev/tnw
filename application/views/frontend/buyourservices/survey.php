<?php
$lang_session = $this->session->userdata('lang');
?>

<style type="text/css">
    .card0 {
        box-shadow: 0px 4px 8px 0px #757575;
        border-radius: 0px
    }

    ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }

    :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    a {
        color: inherit;
        cursor: pointer
    }

    .btn-blue {
        background-color: #1A237E;
        width: 150px;
        color: #fff;
        border-radius: 2px
    }

    .btn-blue:hover {
        background-color: #000;
        cursor: pointer
    }

    .bg-blue {
        color: #fff;
        background-color: #1A237E
    }
</style>

<div style="background-color: white;">
    <div class="container px-1 px-md-12 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card border-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 card0">
                    <form action="<?php echo site_url('pages/buyourservices/save'); ?>" method="post">
                        <div class="card2 card border-0 px-4 py-2">
                            <div class="row mb-4 px-3">
                                <h3 class="mb-0 mr-4 mt-2" style="font-size: 23px;">
                                    Package Plan
                                </h3>
                                <p class="py-3" style="text-align: justify;">
                                    Package Plan များ အသေးစိတ်ကြည့်ရန်တွက် သင်၏ ဖုန်းနံပါတ် (သို့) Email ထည့်သွင်းရန် လိုအပ်သည်။
                                </p>
                            </div>

                            <?php $this->load->view('templates/shared/alert_message'); ?>

                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Phone number or email address</h6>
                                </label>
                                <input class="mb-4" type="text" name="email" placeholder="Phone number or email address" autocomplete="off" value="<?php echo set_value('email'); ?>" autocomplete="off">
                            </div>

                            <div class="row px-3" hidden>
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Phone Number</h6>
                                </label>
                                <input type="phone" name="phone" placeholder="Phone Number" value="<?php echo set_value('phone'); ?>" autocomplete="off">
                            </div>

                            <div class="row mb-3 px-3 py-3">
                                <button type="submit" class="btn btn-blue text-center">Apply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>