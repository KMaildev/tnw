<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #db9c30">
                    <li class="breadcrumb-item">
                        <a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 17px;">
                            <i class="fa fa-building"></i> Dashboard
                        </a>
                    </li>
                </ol>
            </nav>
        </div>

        <?php foreach ($order_histories as $order_historie) { ?>
            <div class="col-md-6 p-2">
                <div class="card text-center">
                    <div class="card-header">
                        <h3><?php echo $order_historie->package_name; ?></h3>
                    </div>
                    <ul class="list-group">

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            သင်ဝယ်ယူခဲ့သော Package
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $order_historie->package_name; ?>
                            </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            အများဆုံးတင်နိုင်မည့်ကြော်ငြာအရေအတွက်
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $order_historie->no_of_posts; ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            လစဉ်အထူးကြော်ငြာပြုလုပ်နိုင်သည့် အရေအတွက်
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $order_historie->post_per_month; ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            လစဉ် Refresh ပြုလုပ်နိုင်သည့် အရေအတွက်
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $order_historie->refresh_per_month; ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            နေ့စဉ် Refresh ပြုလုပ်နိုင်သည့်အရေအတွက်
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $order_historie->refresh_daily; ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Website မှာ ကြော်ငြာများကို ကူညီတင်ပေးခြင်း
                            <span class="badge bg-primary rounded-pill">
                                <?php
                                if ($order_historie->website_helpful_ad == 'Yes') {
                                    echo '<i class="fa fa-check"></i>';
                                } elseif ($order_historie->website_helpful_ad == 'No') {
                                    echo '<i class="fa fa-times" style="color: red;"></i>';
                                }
                                ?>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Website ပင်မစာမျက်နှာတွင် အထူးကြော်ငြာအဖြစ် ထားပေးခြင်း
                            <span class="badge bg-primary rounded-pill">
                                <?php
                                if ($order_historie->website_special_ad == 'Yes') {
                                    echo '<i class="fa fa-check"></i>';
                                } elseif ($order_historie->website_special_ad == 'No') {
                                    echo '<i class="fa fa-times" style="color: red;"></i>';
                                }
                                ?>
                            </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Order Date (သင်ဝယ်ယူခဲ့သောနေ့)
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $order_historie->order_date; ?>
                            </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Expiry Date (သက်တန်းကုန်ဆုံးမည့်ရက်)
                            <span class="badge bg-primary rounded-pill">
                                <?php echo $order_historie->end_date; ?>
                            </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Approval Status
                            <span class="badge bg-primary rounded-pill">
                                <?php
                                if ($order_historie->approval_status == 0) {
                                    echo ' <span style="color: white;">Pending</span>';
                                } elseif ($order_historie->approval_status == 1) {
                                    echo ' <span style="color: white;"><b>Active</b></span>';
                                }
                                ?>
                            </span>
                        </li>
                    </ul>
                    <div class="card-footer text-muted">
                        <b><?php echo number_format($order_historie->order_price); ?> Kyats ဖြင့် ဝယ်ယူခဲ့သည်</b>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>