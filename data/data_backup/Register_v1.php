<div class="col-lg-12">
    <center>
        <div class="col-lg-4 p-5">
            <div class="login">
                <h3>Register</h3>
                <div class="agent-contact-form-sidebar">
                    <?php $this->load->view('templates/shared/alert_message'); ?>
                    <form name="contact_form" method="post" action="<?php echo site_url('member/auth/member_register'); ?>">
                        <input required="" type="email" id="emailid" name="email" placeholder="Email Address" autocomplete="off" value="<?php echo set_value('email'); ?>" required="" />
                        <input required="" type="password" name="password" placeholder="Password" autocomplete="off"/>
                        <input required="" type="password" name="confirm_password" placeholder="Confirm Password" autocomplete="off" />
                        <select name="user_permissions">
                            <option value="agent">Agent</option>
                            <option value="by_owner">By Owner</option>
                        </select>
                        
                        
                        <input type="submit" class="multiple-send-message" value="Register" />
                    </form>
                    <div class="text-center add_top_10" style="padding-top: 2px;">
                        Already have an account?
                        <strong>
                            <a href="<?php echo(site_url('member/auth/login')) ?>">Login</a>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>