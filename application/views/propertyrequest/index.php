<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<style type="text/css">
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #f9f8f7;
        background-repeat: no-repeat
    }

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

<div style="background-image: url('https://cdn.staticmb.com/loginstatic/images/bg-icon-1.png');">
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0" style="background-image: url('https://scontent-sin6-1.xx.fbcdn.net/v/t1.15752-9/258885134_634070184262270_9104058711823382221_n.png?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=negyVBt6u1QAX9u0uix&tn=k_Pv2bIbyTWmCGb_&_nc_ht=scontent-sin6-1.xx&oh=53cc53fa72b15d6f2c595f9b4767ef5b&oe=61C4DCA5')">
            <div class="row" >
                <div class="col-lg-12" style="background-color: white">
                    <form method="post" action="<?php echo site_url('propertyrequest/save'); ?>">  
                        <input type="hidden" id="contact_status" name="contact_status" value="Contact Me">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <h3 style="font-size: 19px; font-weight: bold; text-align: center;">
                                        <?php 
                                            if ($lang_session) {
                                                echo "သင့်စိတ်ကူးထဲက အိမ်လေးတစ်လုံးကို ရှာဖွေနေပါသလား?";
                                            }else{
                                                echo "Property Request";
                                            }
                                         ?>
                                    </h3>

                                    <p style="color: black; font-size: 18px; text-align: center;">
                                        <?php 
                                            if ($lang_session) {
                                                echo "သင့်အိပ်မက်ထဲက လိုချင်တဲ့အိမ်လေးတစ်လုံး ရှာတွေပြီလား? <br> သင်ရှာဖွေနေသော စိတ်ကူးထဲက အိမ်လေးကြောင်းကို ကျွန်ုပ်တို့အား ပြောပြပါ။ <br>  ကျွန်ုပ်တို့မှာ သင့်အတွက် ရှာဖွေပေးမည်ဖြစ်ပါသည်။";
                                            }else{
                                                echo " Did you find the property you want? <br>
                                                        Please tell us the buying/selling and rent property you were looking for. <br>
                                                        I will use it as a reference for the property to be released next.";
                                            }
                                        ?>

                                    </p>
                                </div>
                            </div>


                            <div class="row px-3"> 
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <?php $this->load->view('templates/shared/alert_message'); ?>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Your Name</h6>
                                    </label> 
                                    <input class="at-input" type="text" required="" autocomplete="off" name="name" placeholder="Name">
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Email Address</h6>
                                    </label>
                                    <input class="at-input" type="email" required="" autocomplete="off" name="email" placeholder="Email">
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                    <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Phone Number</h6>
                                    </label>

                                    <input class="at-input" type="text" required="" autocomplete="off" name="phone" placeholder="Phone Number">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <label class="mb-1">
                                        <h6 class="mb-0 text-sm">
                                            Property Detail
                                        </h6>
                                    </label>

                                    <textarea id="w3review" name="detail" rows="10" style="width: 100%;" placeholder="Property detail"></textarea>


                                    <button type="submit" class="btn btn-blue text-center">
                                        Apply Now
                                    </button> 

                                </div>
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