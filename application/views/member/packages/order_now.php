<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<style>
    .custom {
        font-size: 12px;
    }
</style>
<?php
if ($package_data) {
?>
    <section class="user-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2 py-5">

                    <div class="dashborad-box stat">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" style="background-color: #db9c30">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 17px;">
                                        <i class="fa fa-building"></i> Dashboard
                                    </a>
                                </li>
                            </ol>
                        </nav>

                        <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3">
                            <div class="my-address">

                                <?php $this->load->view('templates/shared/error_message'); ?>

                                <form method="post" action="<?php echo site_url('member/packages/order_confirm') ?>" enctype='multipart/form-data'>
                                    <input type="hidden" name="package_id" value="<?php echo $package_data->package_id; ?>" require>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <h3 class="heading">Package Order မှာရန်</h3>
                                            <ul class="list-group">

                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    သင်ရွေးခြယ်ထားသော Package
                                                    <span class="badge bg-primary rounded-pill">
                                                        <?php echo $package_data->package_name; ?>
                                                    </span>
                                                </li>

                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    အများဆုံးတင်နိုင်မည့်ကြော်ငြာအရေအတွက်
                                                    <span class="badge bg-primary rounded-pill">
                                                        <?php echo $package_data->no_of_posts; ?>
                                                    </span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    လစဉ်အထူးကြော်ငြာပြုလုပ်နိုင်သည့် အရေအတွက်
                                                    <span class="badge bg-primary rounded-pill">
                                                        <?php echo $package_data->post_per_month; ?>
                                                    </span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    လစဉ် Refresh ပြုလုပ်နိုင်သည့် အရေအတွက်
                                                    <span class="badge bg-primary rounded-pill">
                                                        <?php echo $package_data->refresh_per_month; ?>
                                                    </span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    နေ့စဉ် Refresh ပြုလုပ်နိုင်သည့်အရေအတွက်
                                                    <span class="badge bg-primary rounded-pill">
                                                        <?php echo $package_data->refresh_daily; ?>
                                                    </span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Website မှာ ကြော်ငြာများကို ကူညီတင်ပေးခြင်း
                                                    <span class="badge bg-primary rounded-pill">
                                                        <?php
                                                        if ($package_data->website_helpful_ad == 'Yes') {
                                                            echo '<i class="fa fa-check"></i>';
                                                        } elseif ($package_data->website_helpful_ad == 'No') {
                                                            echo '<i class="fa fa-times" style="color: red;"></i>';
                                                        }
                                                        ?>
                                                    </span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Website ပင်မစာမျက်နှာတွင် အထူးကြော်ငြာအဖြစ် ထားပေးခြင်း
                                                    <span class="badge bg-primary rounded-pill">
                                                        <?php
                                                        if ($package_data->website_special_ad == 'Yes') {
                                                            echo '<i class="fa fa-check"></i>';
                                                        } elseif ($package_data->website_special_ad == 'No') {
                                                            echo '<i class="fa fa-times" style="color: red;"></i>';
                                                        }
                                                        ?>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row py-5">

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>ဆက်သွယ်ရန်</label>
                                                <input type="text" name="contact" class="form-control custom" placeholder="Phone number or email address" autocomplete="off" require>
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-4 col-sm-12 dataselect">
                                            <label for="inputZip">Choose Payment</label>
                                            <select name="choose_payment" id="Choose" class="form-control custom" require>
                                                <option value="contact_me" selected>Contact me</option>
                                                <option value="bank_transfer">Bank Transfer</option>
                                            </select>
                                        </div>

                                        <?php
                                        $oneMonthPrice = $package_data->price;

                                        // three months
                                        $threeMonthDis = $package_data->discount;
                                        $threeMonthsContract = $oneMonthPrice - ($oneMonthPrice * $threeMonthDis / 100);

                                        $price = $package_data->price;
                                        $threeMonthDis = $package_data->discount;
                                        $threeMonthValue = $price - ($price * $threeMonthDis / 100);
                                        $threeMonthFull = $threeMonthValue - ($threeMonthValue * $threeMonthDis / 100);
                                        // three months


                                        // six months
                                        $sixMonthDis = $package_data->six_month_discount;
                                        $sixMonthsContract = $oneMonthPrice - ($oneMonthPrice * $sixMonthDis / 100);


                                        $sixMonthDis = $package_data->six_month_discount;
                                        $sixMonthValue = $price - ($price * $sixMonthDis / 100);
                                        $sixMonthFull = $sixMonthValue - ($sixMonthValue * $sixMonthDis / 100);
                                        // six months
                                        ?>
                                        <input type="hidden" name="oneMonthPrice" value="<?php echo $oneMonthPrice; ?>">

                                        <input type="hidden" name="threeMonthContract" value="<?php echo $threeMonthsContract; ?>">
                                        <input type="hidden" name="threeMonthFull" value="<?php echo $threeMonthFull; ?>">

                                        <input type="hidden" name="sixMonthContract" value="<?php echo $sixMonthsContract; ?>">
                                        <input type="hidden" name="sixMonthFull" value="<?php echo $sixMonthFull; ?>">

                                        <div class="form-group col-lg-4 col-md-4 col-sm-12 dataselect">
                                            <label for="inputZip">Billing Cycle</label>
                                            <select name="BillingCycle" class="form-control custom" require>
                                                <option value="1" selected>
                                                    1 Month @
                                                    <?php
                                                    echo number_format($oneMonthPrice);
                                                    ?>
                                                    MMK
                                                </option>

                                                <option value="3MonthsContractMonthlyPayment">
                                                    5% Discount For 3 Months Contract (Monthly Payment)
                                                    <?php
                                                    echo number_format($threeMonthsContract);
                                                    ?>
                                                    MMK
                                                </option>


                                                <option value="3MonthsFullPayment">
                                                    3 Months Additional (Full Payment) @
                                                    <?php
                                                    echo number_format($threeMonthFull);
                                                    ?>
                                                    MMK
                                                </option>


                                                <option value="6MonthsContractMonthlyPayment">
                                                    10% Discount For 6 Months Contract (Monthly Payment)
                                                    <?php
                                                    echo number_format($sixMonthsContract);
                                                    ?>
                                                    MMK
                                                </option>


                                                <option value="6MonthsFullPayment">
                                                    6 Months Additional (Full Payment) @
                                                    <?php
                                                    echo number_format($sixMonthFull);
                                                    ?>
                                                    MMK
                                                </option>

                                            </select>
                                        </div>


                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 dataselect" id="BankSelect">
                                            <label for="inputZip">Bank Account (ငွေလွှဲရန် ဘဏ်အကောင့်များ)</label>
                                            <select name="bank_account_id" id="Choose" class="form-control custom">
                                                <?php
                                                foreach ($bank_accounts as $bank_account) {
                                                ?>
                                                    <option value="<?php echo $bank_account->bank_id; ?>">
                                                        <?php echo $bank_account->bank_name; ?>
                                                        | <?php echo $bank_account->account_name; ?>
                                                        | <?php echo $bank_account->account_number; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12" id="ScreenShot">
                                            <div class="form-group">
                                                <label>Screenshot (ဘဏ်အကောင့်သို့ ငွေလွဲထားကြောင်း Screenshot)</label>
                                                <input type="file" name="single_file" class="form-control custom" accept=".png, .jpg, .jpeg">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button class="btn btn-default  pull-right" type="submit" style="background-color: #db9c30; color: white;">
                                                Order Now
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>

<script>
    $(document).ready(function() {
        $('#Choose').change(function() {
            var choose_value = $('#Choose').val();
            if (choose_value == 'bank_transfer') {
                $("#BankSelect").show();
                $("#ScreenShot").show();
            } else if (choose_value == 'contact_me') {
                $("#BankSelect").hide();
                $("#ScreenShot").hide();
            }
        });
    });

    window.onload = function() {
        $("#BankSelect").hide();
        $("#ScreenShot").hide();
    }
</script>