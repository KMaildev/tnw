<div class="recent-pos" style="background-color: white; padding-top: 10px;">
    <div class="recent-main">
        <div class="recent-img" style="padding: 10px;">
            <img src="<?php echo base_url(); ?>data/save.svg" style="width: 100%;">
        </div>
        <div class="info-img" style="padding: 20px;">
            <h6>Save Property</h6>
            <p>Don't want to share your details with the agent right now?</p>
        </div>
        <div class="recent-img" style="padding: 20px;">
            <br>
            <?php if ($this->session->userdata('member_id')) { ?>
                <a href="<?php echo site_url('favoritesadd/index/'.$data_detail->sale_id); ?>" class="btn btn-sm btn-primary">
                    <span>Save Property for Later</span>
                </a>
            <?php }else { ?>
                <a href="<?php echo site_url('member/auth/login'); ?>" class="btn btn-sm btn-primary">
                    <span>Save Property for Later</span>
                </a>
            <?php } ?>
        </div>
    </div>
</div>