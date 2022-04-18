<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<style type="text/css">
/*    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #f9f8f7;
        background-repeat: no-repeat
    }*/

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
        width: 35%;
        background-color: #E0E0E0;
        margin-top: 10px
    }

    .or {
        width: 30%;
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
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">

        <div class="card card0 border-0" style="background-image: url('<?php echo base_url(); ?>data/register_bg.jpg'); width: 100%; background-size: contain;">
            <div class="row" >
                <!-- style="background-color: black; opacity: 0.8;" -->
                <div class="col-lg-6">
                    <div class="card2 pb-5" >
                        <div class="row px-3 mt-4 mb-5 border-line py-5" > 
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

                <div class="col-lg-6" style="background-color: white">

                    <form action="<?php echo site_url('member/auth/member_register'); ?>" method="post">
                        <div class="card2 card border-0 px-4 py-5">

                            
                            

                            <div class="row mb-4 px-3">
                                <h3 class="mb-0 mr-4 mt-2" style="font-size: 27px;">
                                    Sign Up
                                </h3>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="line"></div>
                                <small class="or text-center">
                                    Create New Account
                                </small>
                                <div class="line"></div>
                            </div>

                            <div class="row">
                                <?php $this->load->view('templates/shared/register_alert'); ?>
                            </div>

                            

                            <div class="row py-2">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Account Type</h6>
                                </label> 
                                <select name="user_permissions" id="AccountType">
                                    <option value="agent">Agent</option>
                                    <option value="by_owner">Owner</option>
                                </select>
                            </div>


                            <div class="row"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">
                                        Phone number or email address 
                                        <small><i>(for login)</i></small>
                                    </h6>
                                </label> 
                                <input type="text" name="phone_number" placeholder="Phone number or email address" autocomplete="off" value="<?php echo set_value('phone_number'); ?>" id="EmailValidate"> 
                            </div>


                            <div class="row" id="ReEnterEmail"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Re-enter email address</h6>
                                </label> 
                                <input type="email" name="email" placeholder="Re-enter email address" autocomplete="off" value="<?php echo set_value('email'); ?>" id="Email"> 
                            </div>


                            <div class="row">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> 
                                <input type="password" name="password" placeholder="Enter password" value="<?php echo set_value('password'); ?>"> 
                            </div>

                            <div class="row">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Confirm Password</h6>
                                </label> 
                                <input type="password" name="confirm_password" placeholder="Confirm Password" value="<?php echo set_value('confirm_password'); ?>"> 
                            </div>



                            <div class="row" id="CompanyName"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Company name or username</h6>
                                </label> 
                                <input type="text" name="company_name" placeholder="Company name or username" autocomplete="off" value="<?php echo set_value('company_name'); ?>"> 
                            </div>


                            <div class="row"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Address</h6>
                                </label> 
                                <input type="text" name="address" placeholder="Address" autocomplete="off" value="<?php echo set_value('address'); ?>"> 
                            </div>


                            <div class="row"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">
                                        Contact Number
                                        <small><i>(for contact)</i></small>
                                    </h6>
                                </label> 
                                <input type="text" name="phone_no" placeholder="Contact Number." autocomplete="off" value="<?php echo set_value('phone_no'); ?>"> 
                            </div>


                            <div class="row" hidden> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Description.</h6>
                                </label> 
                                <textarea name="description" rows="2" cols="20"></textarea>
                            </div>


                            <div class="row mb-4 p-2">
                                <div class="">
                                    <label for="chk1">
                                        <input id="chk1" type="checkbox" name="accept_terms" value="yes" <?php echo set_checkbox('accept_terms', 'yes'); ?>>
                                        <span>
                                            I agree to be contacted by TatNayWon and 
                                            <a href="<?php echo site_url('privacy/terms'); ?>" style="color: blue;">
                                                Terms & Conditions 
                                            </a>
                                        </span>
                                    </label> 
                                </div>
                            </div>

                            <div class="row mb-1 px-3"> 
                                <button type="submit" class="btn text-center" style="background-color: #8f2641; color: white;">
                                    Sign Up
                                </button> 
                            </div>
                            <div class="row mb-2 px-3"> 
                                <small class="font-weight-bold">
                                    Already registered?
                                    <a href="<?php echo(site_url('member/auth/login')) ?>" class="text-danger">
                                        Login Now
                                    </a>
                                </small> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>

<script type="text/javascript">
$(document).ready(function(e) {
    $('#EmailValidate').on("keyup", function() {
        var sEmail = $('#EmailValidate').val();
        if ($.trim(sEmail).length == 0) {
            // alert('Please enter valid email address');
            $("#ReEnterEmail").hide();
            document.getElementById("Email").value = "";
            e.preventDefault();
        }
        if (validateEmail(sEmail)) {
            // alert('Email is valid');
            $("#ReEnterEmail").show();
        }
        else {
            // alert('Invalid Email Address');
            $("#ReEnterEmail").hide();
            document.getElementById("Email").value = "";
            e.preventDefault();
        }
    });
    $("#ReEnterEmail").hide();



    // $('#AccountType').on('change', function() {
    //     var account_type = this.value;
    //     if (account_type === 'by_owner') {
    //         $("#CompanyName").hide();
    //         $("#UserName").show();
    //     }else if (account_type === 'agent') {
    //         $("#CompanyName").show();
    //         $("#UserName").hide();
    //     }
    // });
    // $("#CompanyName").show();
    // $("#UserName").hide();
});


function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }else {
        return false;
    }
}

</script>
