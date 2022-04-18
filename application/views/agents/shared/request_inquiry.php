<?php 
    $lang_session = $this->session->userdata('lang'); 
?>
<div class="agent-contact-form-sidebar">
    <form  method="post" action="<?php echo site_url('requestinquiry/data_save'); ?>">
        <input type="hidden" name="company_user_id" value="<?php echo $detail->user_id; ?>">
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
                <input class="mb-2" type="text" name="subject" placeholder="Enter your subject" autocomplete="off" value="<?php echo set_value('subject'); ?>"> 
            </div>

            <div class="row px-3"> 
                <label class="mb-1">
                    <h6 class="mb-0 text-sm">Message</h6>
                </label> 
                <textarea placeholder="Message" name="message"  autocomplete="off">I would like to know more in details about your company and services. Please contact me as soon as possible. Thank you!</textarea>
            </div>

            


            <input type="submit" name="sendmessage" class="multiple-send-message" value="Send Messages" />
            <br>
        </div>
    </form>
</div>