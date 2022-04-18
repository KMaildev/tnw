<div class="col-lg-12">
    <center>
        <div class="col-lg-4 p-5">
            <div class="login">
                <h3>Login</h3>
                <div class="agent-contact-form-sidebar">

                    <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success">
                            <strong>
                                <span class="glyphicon glyphicon-ok"></span>
                                <?php echo $this->session->flashdata('success'); ?>
                            </strong>
                        </div>
                    <?php }elseif($this->session->flashdata('danger')){ ?>
                        <div class="alert alert-danger">
                            <strong>
                                <span class="glyphicon glyphicon-ok"></span>
                                <?php echo $this->session->flashdata('danger'); ?>
                            </strong>
                        </div>
                    <?php } ?>

                    <?php
                    if (validation_errors() == true) { ?>
                      <div class="alert alert-danger" role="alert">
                        <small><?php echo validation_errors(); ?></small>
                      </div>
                  <?php } ?>
                  
                    <form name="contact_form" method="post" action="<?php echo site_url('member/auth/member_login'); ?>">
                        <input required="" type="email" id="emailid" name="email" placeholder="Email Address" autocomplete="off" value="<?php echo set_value('email'); ?>"/>
                        <input required="" type="password" id="password" name="password" placeholder="Password" autocomplete="off" />
                        <input type="submit" name="sendmessage" class="multiple-send-message" value="Login" />
                    </form>
                </div>
                <div class="text-center add_top_10">If you don't have an account,
                    <strong>
                        <a href="<?php echo(site_url('member/auth/register')) ?>">Register</a>
                    </strong>
                </div>
            </div>
        </div>
    </center>
</div>