<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Packages
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Packages</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Create</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <a href="<?php echo (site_url('main/packages_system/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
                                Create
                            </a>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                        echo $this->input->get('keyword');
                                                                                                                                                    } ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="clearfix row">

                            <?php
                            foreach ($packages as $package) {
                            ?>
                                <div class="col-md-6">
                                    <div class="card">

                                        <div class="header">
                                            <h2><strong><?php echo $package->package_name; ?></strong></h2>
                                            <ul class="header-dropdown">
                                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                                    <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                                        <li><a href="<?php echo site_url('main/packages_system/edit/' . $package->package_id); ?>">Edit</a></li>
                                                        <?php if ($package->package_id == 1) { ?>
                                                        <?php } else { ?>
                                                            <li>
                                                                <a onclick="return confirm('Are you sure you want to delete this package?');" href="<?php echo site_url('main/packages_system/destroy/' . $package->package_id); ?>" href="<?php echo site_url('main/packages_system/destroy/' . $package->package_id); ?>">Delete</a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered m-b-0">
                                                    <tbody>

                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">အများဆုံးတင်နိုင်မည့်ကြော်ငြာအရေအတွက်</th>
                                                            <td><?php echo $package->no_of_posts; ?></td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">လစဉ်အထူးကြော်ငြာပြုလုပ်နိုင်သည့် အရေအတွက်</th>
                                                            <td><?php echo $package->post_per_month; ?></td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">လစဉ် Refresh ပြုလုပ်နိုင်သည့် အရေအတွက်</th>
                                                            <td><?php echo $package->refresh_per_month; ?></td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">နေ့စဉ် Refresh ပြုလုပ်နိုင်သည့်အရေအတွက်</th>
                                                            <td><?php echo $package->refresh_daily; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">Website မှာ ကြော်ငြာများကို ကူညီတင်ပေးခြင်း</th>
                                                            <td><?php echo $package->website_helpful_ad; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">Website ပင်မစာမျက်နှာတွင် အထူးကြော်ငြာအဖြစ် ထားပေးခြင်း</th>
                                                            <td><?php echo $package->website_special_ad; ?></td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">Duration</th>
                                                            <td>
                                                                <?php echo $package->duration; ?>
                                                                Month
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">Price</th>
                                                            <td>
                                                                <?php echo number_format($package->price, 2, '.', ','); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">3 Months Discount %</th>
                                                            <td>
                                                                <?php echo $package->discount; ?>
                                                                <?php
                                                                echo ($package->discount == '') ? '' : '%';
                                                                ?>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row" style="font-size: 11px;">6 Months Discount %</th>
                                                            <td>
                                                                <?php echo $package->six_month_discount; ?>
                                                                <?php
                                                                echo ($package->six_month_discount == '') ? '' : '%';
                                                                ?>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>