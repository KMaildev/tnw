<?php
if ($refresh_daily_total > $today_refresh_ad_counter) {
?>
    <a title="View Detail" href="<?php echo (site_url('shared/refres_ad/index/' . $properties_ad->sale_id . '/' . $properties_ad->user_info_id)); ?>" class="btn  btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: gray;">Refresh AD </a>
<?php } else { ?>
    <a title="View Detail" href="<?php echo (site_url('shared/refres_ad/refresh_limited')); ?>" class="btn  btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: gray;">Refresh AD </a>
<?php } ?>