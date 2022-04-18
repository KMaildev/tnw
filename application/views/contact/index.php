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

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12">
                <div class="widget-boxed ">
                    <form action="<?php echo site_url('requestinquiry/index'); ?>" method="post">
                        <div class="card2 card border-0 px-4">

                            <div class="row mb-4 px-3">
                                <h3 class="mb-0 mr-4 mt-2" style="font-size: 27px;">
                                    <?php 
                                        if ($lang_session) {
                                            echo "ဆက်သွယ်ရန်";
                                        }else{
                                            echo "Contact Us";
                                        }
                                    ?> 
                                </h3>
                            </div>

                            <?php $this->load->view('templates/shared/alert_message'); ?>

                            <div class="row px-3"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Name</h6>
                                </label> 
                                <input class="mb-2" type="text" name="name" placeholder="Enter your name" autocomplete="off" value="<?php echo set_value('name'); ?>"> 
                            </div>


                            <div class="row px-3"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Phone Number</h6>
                                </label> 
                                <input class="mb-2" type="text" name="phone" placeholder="Enter your phone number" autocomplete="off" value="<?php echo set_value('phone'); ?>"> 
                            </div>

                            <div class="row px-3"> 
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email</h6>
                                </label> 
                                <input class="mb-2" type="text" name="email" placeholder="Enter your email" autocomplete="off" value="<?php echo set_value('email'); ?>"> 
                            </div>


                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Subject</h6>
                                </label> 
                                <input class="mb-2" type="text" name="subject" placeholder="Subject" autocomplete="off"> 
                            </div>


                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Message</h6>
                                </label> 
                                <textarea class="mb-2" placeholder="Message" name="message"  autocomplete="off"></textarea>
                            </div>

                            
                            <div class="row mb-2 px-3"> 
                                <button type="submit" class="btn btn-blue text-center">
                                    Send Messages
                                </button> 
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 bgc">
                <div class="call-info">
                    <h3>Contact Details</h3>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-map-marked" aria-hidden="true"></i>
                                <p class="in-p"><?php echo $tatnaywon->address; ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p">
                                    <a href="tel:09268858885" style="color: white;">
                                        <?php echo $tatnaywon->phone; ?>
                                    </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">
                                    <a href="mailto:info@tatnaywonproperty.com" style="color: white;">
                                        info@tatnaywonproperty.com
                                    </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">
                                    <a href="mailto:pyaephyopaing@tatnaywonproperty.com" style="color: white;">
                                        pyaephyopaing@tatnaywonproperty.com
                                    </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">
                                    <a href="mailto:minsithu@tatnaywonproperty.com" style="color: white;">
                                        minsithu@tatnaywonproperty.com
                                    </a>
                                </p>
                            </div>
                        </li>


                        <li>
                            <div class="info">
                                <i class="fa fa-laptop-house" aria-hidden="true"></i>
                                <p class="in-p ti">
                                    Monday - Friday
                                </p>
                            </div>
                        </li>




                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock" aria-hidden="true"></i>
                                <p class="in-p ti">9:00 a.m - 5:00 p.m</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12 py-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.096292323529!2d96.19061281439507!3d16.87113052193014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1931da2639985%3A0x119e908163278a4a!2sTAT%20NAY%20WON%20Real%20Estate%20Company!5e0!3m2!1sen!2smm!4v1625626521087!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>