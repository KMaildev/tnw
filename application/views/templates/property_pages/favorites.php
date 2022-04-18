<div class="alert alert-dismissible alert-warning" style="background-color: white;">
    <?php if ($this->session->userdata('member_id')) { ?>
        <a href="<?php echo site_url('favoritesadd/index/'.$data_detail->sale_id); ?>" title="Favorites Add">
            <i class="fa fa-heart" style="color: red;"></i>
            အနှစ်သက်ဆုံးစာရင်းသို့ထည့်ရန်
        </a>
    <?php }else { ?>
        <a href="<?php echo site_url('favoritesadd/favorites/'.$data_detail->sale_id); ?>" title="data_detail Add" style="color: pink;">
            <i class="fa fa-heart" style="color: red;"></i>
            အနှစ်သက်ဆုံးစာရင်းသို့ထည့်ရန်
        </a>
    <?php } ?>
</div>