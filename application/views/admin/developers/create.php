<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property Developer
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Property Developer</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Property Developer Add</strong> </h2>
                    </div>
                    <div class="body">

                        <?php $this->load->view('templates/shared/register_alert'); ?>


                        <form method="post" action="<?php echo site_url('main/developers/member_register') ?>" enctype='multipart/form-data'>
                            <?php
                            $last = $count_all;
                            $last++;
                            $number = sprintf('%07d', $last);
                            $ad_number = "U-" . $number;
                            ?>
                            <input type="hidden" name="company_id" value="<?php echo $ad_number; ?>">

                            <div class="row clearfix">

                                <div class="col-sm-6" hidden>
                                    <select name="user_permissions" id="AccountType">
                                        <option value="agent">Agent</option>
                                        <option value="by_owner">Owner</option>
                                    </select>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone number or email address" autocomplete="off" name="phone_number" value="<?php echo set_value('phone_number'); ?>" id="EmailValidate">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password" value="<?php echo set_value('password'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" autocomplete="off" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>">
                                    </div>
                                </div>


                                <div class="col-sm-6" hidden>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" autocomplete="off" name="name" value="<?php echo set_value('name'); ?>">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company Name" autocomplete="off" name="company_name" value="<?php echo set_value('company_name'); ?>">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Contact No" autocomplete="off" name="phone_no" value="<?php echo set_value('phone_no'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address" autocomplete="off" name="address" value="<?php echo set_value('address'); ?>">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="region_id">
                                        <option value="">-- Please select Region --</option>
                                        <?php
                                        foreach ($regions as $region) {
                                        ?>
                                            <option value="<?php echo $region->region_id; ?>">
                                                <?php echo $region->region; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6 py-3" hidden>
                                    <select class="form-control show-tick" name="package_id">
                                        <option value="">-- Please select Package --</option>
                                        <?php
                                        foreach ($packages as $package) {
                                        ?>
                                            <option value="<?php echo $package->package_id; ?>">
                                                <?php echo $package->package_type; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-sm-12">
                                    <h6 class="mt-4">Company Type</h6>
                                    <div class="radio inlineblock m-r-25">
                                        <input type="radio" name="company_type" id="radio1" value="PropertyAgency" checked="">
                                        <label for="radio1"><b>Property Agency</b></label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="company_type" id="radio2" value="IndividualAgent">
                                        <label for="radio2"><b>Individual Agent</b></label>
                                    </div>
                                    <br>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="company_type" id="radio3" value="PropertyDeveloper">
                                        <label for="radio3"><b>Property Developer</b></label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="company_type" id="radio4" value="RenovationCompany">
                                        <label for="radio4"><b>Renovation Company</b></label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="company_type" id="radio5" value="TransportationCompany">
                                        <label for="radio5"><b>Transportation Company</b></label>
                                    </div>
                                </div>
                            </div>

                            <h6 class="mt-4">Description</h6>
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea id="w3review" name="description" rows="4" cols="100" style="width: 100%;"><?php echo set_value('description'); ?></textarea>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <h6><i class="fa fa-images"> Company Logo</i></h6>
                                    <input class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg">
                                </div>
                            </div>


                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    <button type="reset" class="btn btn-default btn-round btn-simple">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('templates/admin_footer'); ?>