<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php
$lang_session = $this->session->userdata('lang');
?>

<style type="text/css">
    .card0 {
        box-shadow: 0px 4px 8px 0px #757575;
        border-radius: 0px
    }

    .card2 {
        margin: 0px 40px
    }

    .logo {
        width: 200px;
        height: 100px;
        margin-top: 20px;
        margin-left: 35px
    }

    .image {
        width: 360px;
        height: 280px
    }


    .facebook {
        background-color: #3b5998;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer
    }

    .twitter {
        background-color: #1DA1F2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer
    }

    .linkedin {
        background-color: #2867B2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer
    }

    .line {
        height: 1px;
        width: 40%;
        background-color: #E0E0E0;
        margin-top: 10px
    }

    .or {
        width: 20%;
        font-weight: bold;
    }

    .text-sm {
        font-size: 14px !important
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

    @media screen and (max-width: 991px) {
        .logo {
            margin-left: 0px
        }

        .image {
            width: 300px;
            height: 220px
        }

        .border-line {
            border-right: none
        }

        .card2 {
            border-top: 1px solid #EEEEEE !important;
            margin: 0px 15px
        }
    }
</style>

<div style="background-image: url('<?php echo base_url(); ?>data/bg-icon-1.png');">
    <div class="container px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">

        <div class="card card0 border-0" style="background-image: url('<?php echo base_url(); ?>data/login_bg.jpg'); width: 100%; background-size: contain;">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card2 pb-5">
                        <div class="row px-3 mt-4 mb-5 border-line py-4">
                            <div class="">
                                <h4 style="color: white; font-size: 20px;">
                                    Login to your account to unlock these benefits
                                </h4>
                                <ul class="m-4">
                                    <li style="padding: 5px; font-size: 16px; color: white;">
                                        Advertise your property for free!
                                    </li>

                                    <li style="padding: 5px; font-size: 16px; color: white;">
                                        Post latest updates about Properties and Projects.
                                    </li>
                                    <li style="padding: 5px; font-size: 16px; color: white;">
                                        Get market information, reports and price trends.
                                    </li>

                                    <li style="padding: 5px; font-size: 16px; color: white;">
                                        Get instant queries over Phone, Email and SMS
                                    </li>

                                    <li style="padding: 5px; font-size: 16px; color: white;">
                                        Add detailed property information & multiple photos per listing
                                    </li>

                                    <li style="padding: 5px; font-size: 16px; color: white;">
                                        Access many of of advertiser details in one click.
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="background-color: white">
                    <form action="<?php echo site_url('member/auth/member_login'); ?>" method="post">
                        <div class="card2 card border-0 px-4 py-4">
                            <div class="row mb-4 px-3">
                                <h3 class="mb-0 mr-4 mt-2" style="font-size: 27px;">
                                    Login
                                </h3>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="line"></div>
                                <small class="or text-center">
                                    Welcome
                                </small>
                                <div class="line"></div>
                            </div>

                            <?php $this->load->view('templates/shared/alert_message'); ?>

                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Phone number or email address</h6>
                                </label>
                                <input class="mb-4" type="text" name="email" placeholder="Phone number or email address" autocomplete="off" value="<?php echo set_value('email'); ?>">
                            </div>

                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" name="password" placeholder="Enter password">
                            </div>
                            <div class="row mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                                </div>
                                <a href="<?php echo site_url('member/forgot_password'); ?>" class="ml-auto mb-0 text-sm">
                                    Forgot your password?
                                </a>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-blue text-center">Login</button>
                            </div>
                            <div class="row mb-4 px-3">
                                <small class="font-weight-bold">Don't have an account?
                                    <a href="<?php echo (site_url('member/auth/register')) ?>" class="text-danger">Register</a>
                                </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>