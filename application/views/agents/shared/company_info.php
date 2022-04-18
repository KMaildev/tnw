<?php $this->load->view('agents/shared/view_phone'); ?>
<div class="widget-boxed">
    <div class="">
        <div class="sidebar-widget author-widget2">

            <ul class="author__contact">
                <h4 style="text-align: center; font-size: 20px;">
                    <?php 
                        echo $detail->company_name;
                    ?>
                </h4>

                <div class="text-left word-break ov-hidden"> 
                    Address: <br>
                    <?php 
                        echo $detail->address;
                    ?>
                </div>

                <hr>
                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#agentPhoneNumberView" style="background-color: #418107; color: white;">
                    <i class="fa fa-phone-square-alt"></i>
                    View Phone Number
                </a>

                <a href="mailto:<?php echo $detail->email; ?>" class="btn btn-sm" style="background-color: #a940aa; color: white;">
                    <i class="fa fa-envelope-square"></i>
                    Send Mail
                </a>

            </ul>
        </div>
    </div>
</div>