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
                                <h3 class="heading">Choose Payment Method</h3>

                                <?php $this->load->view('templates/shared/error_message'); ?>

                                <form method="post" action="<?php echo site_url('member/packages/order_confirm') ?>" enctype='multipart/form-data'>
                                    <input type="hidden" name="package_id" value="<?php echo $package_data->package_id; ?>">
                                    <input type="hidden" name="packagetype" value="<?php echo $package_data->package_type; ?>">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label></label>
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong style="font-size: 20px;">Your Selected package!</strong><br>

                                                    <strong>
                                                        <i class="fa fa-pen-square"></i> <?php echo $package_data->package_name; ?>
                                                    </strong> <br>

                                                    <strong>
                                                        <i class="fa fa-plus"></i> <?php echo $package_data->no_of_posts; ?>
                                                    </strong> Posts <br>

                                                    <strong>
                                                        <i class="fa fa-file-alt"></i> <?php echo $package_data->point_charges; ?>
                                                    </strong> Point <br>

                                                    <strong>
                                                        <i class="fa fa-video"></i> <?php echo $package_data->video_clip; ?>
                                                    </strong> Video Clip <br>

                                                    <strong>
                                                        <i class="fa fa-share"></i> <?php echo $package_data->facebook_ads; ?>
                                                    </strong> Facebook Share <br>

                                                    <strong>
                                                        <i class="fa fa-dollar-sign"></i> <?php echo number_format($package_data->price); ?>
                                                    </strong> Kyats <br>
                                                    <hr>
                                                    <?php
                                                    if ($package_data->discount) {
                                                    ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            <?php
                                                            $percent = $package_data->discount;
                                                            $old_price = $package_data->price;
                                                            $discount_value = ($old_price / 100) * $percent;
                                                            $new_price = $old_price - $discount_value;
                                                            $save_price = $package_data->price - $new_price;
                                                            ?>
                                                            <i class="fa fa-star"></i> For <?php echo $package_data->discount; ?>% Discount, you will save <?php echo number_format($save_price); ?> kyats. <br>
                                                            <i class="fa fa-star"></i> you will pay <?php echo number_format($new_price); ?> kyats
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input required type="text" name="contact" class="form-control" placeholder="Email or Phone" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 dataselect">
                                            <label for="inputZip">Choose Payment</label>
                                            <select name="choose_payment" id="Choose" class="form-control custom" required>
                                                <option value="bank_transfer">Bank Transfer</option>
                                                <option value="contact_me">Contact me</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 dataselect" id="BankSelect">
                                            <label for="inputZip">Bank Account</label>
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

                                        <div class="col-lg-12" id="ScreenShot">
                                            <div class="form-group">
                                                <label>Screenshot File</label>
                                                <input type="file" name="single_file" class="form-control" accept=".png, .jpg, .jpeg">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="">
                                                <button class="btn btn-default  pull-right" type="submit" style="background-color: #db9c30; color: white;">Confirm</button>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
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
</script>