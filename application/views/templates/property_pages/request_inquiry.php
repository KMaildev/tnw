<?php 
    $lang_session = $this->session->userdata('lang'); 
?>
<div class="agent-contact-form-sidebar">
    <?php 
        if ($data_detail->user_info_id == 0) {
    ?>
        <form action="<?php echo site_url('requestinquiry/index'); ?>" method="post">
    <?php }else{ ?>
        <form action="<?php echo site_url('requestinquiry/data_save'); ?>" method="post">
        <input type="hidden" name="company_user_id" value="<?php echo $data_detail->user_info_id; ?>">
    <?php } ?>
        <div class="card2 card border-0 px-4">
            <div class="row mb-4 px-3 py-3">
                <h3 class="mb-0 mr-4 mt-2" style="font-size: 18px;">
                    <?php 
                        if ($lang_session) {
                            echo "မေးမြန်းစုံစမ်းလိုသည်";
                        }else{
                            echo "Request Inquiry";
                        }
                     ?>
                </h3>
            </div>

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
                <?php 
                    if ($lang_session) {
                        $subject = "ကြော်ငြာနံပါတ် ".$data_detail->ad_number." အကြောင်းကို ပိုမိုသိလိုသည်။";
                    }else{
                        $subject = "Know more about this ads ".$data_detail->ad_number;
                    }
                 ?>
                <input class="mb-2" type="text" name="subject" placeholder="Subject" autocomplete="off" value="<?php echo $subject; ?>"> 
            </div>


            <div class="row px-3">
                <label class="mb-1">
                    <h6 class="mb-0 text-sm">Message</h6>
                </label> 
                <?php 
                    if ($lang_session) {
                        $message = "ဒီအိမ်ခြံမြေကို စိတ်ဝင်စားပါသည်။  ဒီအိမ်ခြံမြေနှင့်ပါတ်သတ်သော အသေးစိတ်အချက်အလက်များအားပေးပို့စေလိုပါတယ်။ ကျေးဇူးတင်ပါတယ်။";
                    }else{
                        $message = "Hello, I am interested in this property posted on TatNayWonProperty.Com and would like to request more information. Could you please contact me back as soon as possible? Thank you.";
                    }
                ?>
                <textarea class="mb-2" placeholder="Message" name="message"  autocomplete="off"><?php echo $message; ?></textarea>
            </div>

            <input type="submit" name="sendmessage" class="multiple-send-message" value="Send Messages" />
            <br>
        </div>
    </form>
</div>