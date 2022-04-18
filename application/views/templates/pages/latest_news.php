<?php
$lang_session = $this->session->userdata('lang');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/update/news.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/update/news_one.css">
<div class="container py-3">
    <div id="ContentPlaceHolder1_divUpdates" class="margin-bottom30">
        <div class="text-center margin-bottom20 py-3">
            <h4>
                <?php
                echo ($lang_session) ? "နောက်ဆုံးရသတင်းများ" : "Latest News";
                ?>
            </h4>
            <div class="bordercaption"></div>
        </div>

        <?php
        foreach ($recent_latest_news as $recent_latest_new) {
            $upload_date = explode(',', $recent_latest_new->upload_date);
            $month = $upload_date[0];
            $day   = $upload_date[1];
            $year   = $upload_date[2];
        ?>
            <div class="margin-bottom20">
                <div class="calendar-box edit-cdr">
                    <div class="month">
                        <?php echo $month; ?>
                        <?php echo $year; ?>
                    </div>
                    <div class="date">
                        <b><?php echo $day; ?></b>
                    </div>
                </div>
                <div class="update-info">
                    <a class="wraptext" aria-label="Update" href="<?php echo site_url('latest_news/show/' . $recent_latest_new->news_id); ?>">
                        <b>
                            <?php echo $recent_latest_new->title; ?>
                        </b>
                    </a>
                </div>
            </div>
        <?php } ?>

        <center>
            <a href="<?php echo site_url('latest_news'); ?>" class="btn myBtn btn-md">
                <i class="fa fa-newspaper text-white"></i>
                View All
            </a>
        </center>


    </div>
</div>