<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2><?php echo $detail->company_name; ?>
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="fa fa-building"></i> Company </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right">
                                    <?php
                                    if ($detail->logo == '') {
                                    ?>
                                        <img src="<?php echo base_url(); ?>data/default/logo_not_found.png" class="img-responsive rounded-circle">
                                    <?php } else { ?>
                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $detail->logo; ?>" alt="home-1" class="rounded-circle">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <small>
                                    <h4 class="m-t-0 m-b-0"><strong><?php echo $detail->company_name; ?></strong></h4>
                                </small>
                                <p><?php echo $detail->address; ?></p>
                                <div>
                                    <a href="tel:<?php echo $detail->phone; ?>" class="btn btn-primary btn-round">Phone</a>
                                    <a href="mailto:<?php echo $detail->email; ?>" class="btn btn-primary btn-round btn-simple">Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-4 col-md-4 col-12">
                            <div class="body">
                                <i class="fa fa-ad col-green"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="<?php echo $total_sale_ad; ?>" data-speed="1000" data-fresh-interval="700"><?php echo $total_sale_ad; ?></h5>
                                <small>Sale Ads</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-12">
                            <div class="body">
                                <i class="fa fa-ad col-blue"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="<?php echo $total_rent_ad; ?>" data-speed="1000" data-fresh-interval="700"><?php echo $total_rent_ad; ?></h5>
                                <small>Rent Ads</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-12">
                            <div class="body">
                                <i class="fa fa-newspaper col-red"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="<?php echo $total_new_properties_ad; ?>" data-speed="1000" data-fresh-interval="700"><?php echo $total_new_properties_ad; ?></h5>
                                <small>Total New Propertie</small>
                            </div>
                        </li>

                        <li class="col-lg-12 col-md-12">
                            <div role="alert" aria-live="assertive" aria-atomic="true" style="width: 100%; background-color: #f7ac56;">
                                <div class="toast-body" style="color: white;">
                                    Total Ads : <?php echo $total_sale_ad + $total_rent_ad + $total_new_properties_ad; ?>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">

                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <strong>
                            <span class="glyphicon glyphicon-ok"></span>
                            <?php echo $this->session->flashdata('success'); ?>
                        </strong>
                    </div>
                <?php } elseif ($this->session->flashdata('danger')) { ?>
                    <div class="alert alert-danger">
                        <strong>
                            <span class="glyphicon glyphicon-ok"></span>
                            <?php echo $this->session->flashdata('danger'); ?>
                        </strong>
                    </div>
                <?php } ?>

                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">For Sale</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">For Rent</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#newproperties">New Properties</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Company</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#logo">Logo</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#AccountStatus">Account Status</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="mypost">
                        <div class="row">
                            <?php
                            if (!$get_sale_ad) {
                                echo "Properties not found";
                            }
                            foreach ($get_sale_ad as $for_sale) {
                            ?>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card" style="height: 260px;">
                                        <div class="body">
                                            <h5 class="mt-0">
                                                <a terget="_blang" href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" class="col-blue-grey">
                                                    <?php echo $for_sale->title_eng; ?>
                                                </a>
                                            </h5>
                                            <h6 class="text-success mt-3">
                                                <?php echo $for_sale->price; ?>
                                                <?php echo $for_sale->price_type; ?>
                                            </h6>
                                            <small class="text-muted">
                                                <i class="zmdi zmdi-pin mr-2"></i><?php echo $for_sale->townships; ?>
                                            </small>
                                            <span class="mr-5"></span>
                                            <small class="text-muted">
                                                <i class="fa fa-ad mr-2"></i><?php echo $for_sale->ad_number; ?>
                                            </small>

                                            <div class="d-flex justify-content-between mt-3 p-3 bg-light">
                                                <a terget="_blang" href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" title="<?php echo $for_sale->area_type; ?>">
                                                    <i class="zmdi zmdi-view-dashboard mr-2"></i>
                                                    <span><?php echo $for_sale->area; ?></span>
                                                </a>
                                                <a terget="_blang" href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" title="Status">
                                                    <i class="zmdi zmdi-home mr-2"></i>
                                                    <span> <?php echo $for_sale->property_status; ?></span>
                                                </a>
                                                <a terget="_blang" href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" title="Bedroom">
                                                    <i class="zmdi zmdi-hotel mr-2"></i>
                                                    <span>
                                                        <?php
                                                        if ($for_sale->bead_room == NULL) {
                                                            echo "0";
                                                        } else {
                                                            echo $for_sale->bead_room;
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                            </div>
                                            <br>
                                            <a terget="_blang" href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>" class="btn btn-success btn-sm btn-block">View</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="timeline">
                        <div class="row">
                            <?php
                            if (!$get_rent_ad) {
                                echo "Properties not found";
                            }
                            foreach ($get_rent_ad as $for_sale) {
                            ?>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card" style="height: 260px;">
                                        <div class="body">
                                            <h5 class="mt-0">
                                                <a target="_blang" href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" class="col-blue-grey">
                                                    <?php echo $for_sale->title_eng; ?>
                                                </a>
                                            </h5>
                                            <h6 class="text-success mt-3">
                                                <?php echo $for_sale->price; ?>
                                                <?php echo $for_sale->price_type; ?>
                                            </h6>
                                            <small class="text-muted">
                                                <i class="zmdi zmdi-pin mr-2"></i><?php echo $for_sale->townships; ?>
                                            </small>
                                            <span class="mr-5"></span>
                                            <small class="text-muted">
                                                <i class="fa fa-ad mr-2"></i><?php echo $for_sale->ad_number; ?>
                                            </small>

                                            <div class="d-flex justify-content-between mt-3 p-3 bg-light">
                                                <a target="_blang" href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" title="<?php echo $for_sale->area_type; ?>">
                                                    <i class="zmdi zmdi-view-dashboard mr-2"></i>
                                                    <span><?php echo $for_sale->area; ?></span>
                                                </a>
                                                <a target="_blang" href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" title="Status">
                                                    <i class="zmdi zmdi-home mr-2"></i>
                                                    <span> <?php echo $for_sale->property_status; ?></span>
                                                </a>
                                                <a target="_blang" href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" title="Bedroom">
                                                    <i class="zmdi zmdi-hotel mr-2"></i>
                                                    <span>
                                                        <?php
                                                        if ($for_sale->bead_room == NULL) {
                                                            echo "0";
                                                        } else {
                                                            echo $for_sale->bead_room;
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                            </div>
                                            <br>
                                            <a target="_blang" href="<?php echo (site_url('main/for_rent/detail/' . $for_sale->sale_id)); ?>" class="btn btn-success btn-sm btn-block">View</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="newproperties">
                        <div class="row">
                            <?php
                            if (!$get_new_properties_ad) {
                                echo "Properties not found";
                            }
                            foreach ($get_new_properties_ad as $get_new_propertie) {
                            ?>
                                <div class="col-lg-4 col-md-12">
                                    <div class="card" style="height: 260px;">
                                        <div class="body">
                                            <h5 class="mt-0">
                                                <a target="_blang" href="<?php echo (site_url('main/new_properties/detail/' . $get_new_propertie->sale_id)); ?>" class="col-blue-grey">
                                                    <?php echo $get_new_propertie->title_eng; ?>
                                                </a>
                                            </h5>
                                            <h6 class="text-success mt-3">
                                                <?php echo $get_new_propertie->price; ?>
                                                <?php echo $get_new_propertie->price_type; ?>
                                            </h6>
                                            <small class="text-muted">
                                                <i class="zmdi zmdi-pin mr-2"></i><?php echo $get_new_propertie->townships; ?>
                                            </small>
                                            <span class="mr-5"></span>
                                            <small class="text-muted">
                                                <i class="fa fa-ad mr-2"></i><?php echo $get_new_propertie->ad_number; ?>
                                            </small>

                                            <div class="d-flex justify-content-between mt-3 p-3 bg-light">
                                                <a target="_blang" href="<?php echo (site_url('main/new_properties/detail/' . $get_new_propertie->sale_id)); ?>" title="<?php echo $get_new_propertie->area_type; ?>">
                                                    <i class="zmdi zmdi-view-dashboard mr-2"></i>
                                                    <span><?php echo $get_new_propertie->area; ?></span>
                                                </a>
                                                <a target="_blang" href="<?php echo (site_url('main/new_properties/detail/' . $get_new_propertie->sale_id)); ?>" title="Status">
                                                    <i class="zmdi zmdi-home mr-2"></i>
                                                    <span> <?php echo $get_new_propertie->property_status; ?></span>
                                                </a>
                                                <a target="_blang" href="<?php echo (site_url('main/new_properties/detail/' . $get_new_propertie->sale_id)); ?>" title="Bedroom">
                                                    <i class="zmdi zmdi-hotel mr-2"></i>
                                                    <span>
                                                        <?php
                                                        if ($get_new_propertie->bead_room == NULL) {
                                                            echo "0";
                                                        } else {
                                                            echo $get_new_propertie->bead_room;
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                            </div>
                                            <br>
                                            <a target="_blang" href="<?php echo (site_url('main/new_properties/detail/' . $get_new_propertie->sale_id)); ?>" class="btn btn-success btn-sm btn-block">View</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Company </strong> Information</h2>
                            </div>
                            <div class="body">
                                <form method="post" action="<?php echo site_url('main/developers/update') ?>" enctype='multipart/form-data'>
                                    <input type="hidden" value="<?php echo $detail->user_id ?>" name="user_id">
                                    <div class="row clearfix">

                                        <div class="col-sm-6" hidden>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name" autocomplete="off" name="name" value="<?php echo $detail->name; ?>">
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span>Phone number or email address</span>
                                                <input type="text" class="form-control" placeholder="Phone number or email address" autocomplete="off" name="email" value="<?php echo $detail->email; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span>Company Name</span>
                                                <input type="text" class="form-control" placeholder="Company Name" autocomplete="off" name="company_name" value="<?php echo $detail->company_name; ?>">
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span>Contact Number</span>
                                                <input type="text" class="form-control" placeholder="Contact Number" autocomplete="off" name="phone_no" value="<?php echo $detail->phone; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span>Address</span>
                                                <input type="text" class="form-control" placeholder="Address" autocomplete="off" name="address" value="<?php echo $detail->address; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-sm-6 py-3">
                                            <select class="form-control show-tick" name="region_id">
                                                <option value="">-- Please select Region --</option>
                                                <?php
                                                foreach ($regions as $region) {
                                                ?>
                                                    <option value="<?php echo $region->region_id; ?>" <?php print ($detail->region_id == $region->region_id) ? 'selected=""' : ''; ?>>
                                                        <?php echo $region->region; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-sm-6 py-3" hidden>
                                            <select class="form-control show-tick" name="package_id">
                                                <option value="">-- Please select Package --</option>
                                                <?php
                                                foreach ($packages as $package) {
                                                ?>
                                                    <option value="<?php echo $package->package_id; ?>" <?php print ($detail->package_id == $package->package_id) ? 'selected=""' : ''; ?>>
                                                        <?php echo $package->package_type; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-sm-12">
                                            <h6 class="mt-4">Company Type</h6>
                                            <div class="radio inlineblock m-r-25">
                                                <input type="radio" name="company_type" id="radio1" value="PropertyAgency" <?php print ($detail->company_type == 'PropertyAgency') ? 'checked=""' : ''; ?>>
                                                <label for="radio1"><b>Property Agency</b></label>
                                            </div>
                                            <div class="radio inlineblock">
                                                <input type="radio" name="company_type" id="radio2" value="IndividualAgent" <?php print ($detail->company_type == 'IndividualAgent') ? 'checked=""' : ''; ?>>
                                                <label for="radio2"><b>Individual Agent</b></label>
                                            </div>
                                            <br>
                                            <div class="radio inlineblock">
                                                <input type="radio" name="company_type" id="radio3" value="PropertyDeveloper" <?php print ($detail->company_type == 'PropertyDeveloper') ? 'checked=""' : ''; ?>>
                                                <label for="radio3"><b>Property Developer</b></label>
                                            </div>
                                            <div class="radio inlineblock">
                                                <input type="radio" name="company_type" id="radio4" value="RenovationCompany" <?php print ($detail->company_type == 'RenovationCompany') ? 'checked=""' : ''; ?>>
                                                <label for="radio4"><b>Renovation Company</b></label>
                                            </div>
                                            <div class="radio inlineblock">
                                                <input type="radio" name="company_type" id="radio5" value="TransportationCompany" <?php print ($detail->company_type == 'TransportationCompany') ? 'checked=""' : ''; ?>>
                                                <label for="radio5"><b>Transportation Company</b></label>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="mt-4">Description</h6>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea id="w3review" name="description" rows="4" cols="100" style="width: 100%;"><?php echo $detail->description; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="row py-2">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-round">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h2><strong>Password</strong> Reset</h2>
                            </div>
                            <div class="body">
                                <form method="post" action="<?php echo site_url('main/developers/change_password') ?>">
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $detail->user_id ?>" name="user_id">
                                        <input type="password" class="form-control" placeholder="New Password" autocomplete="off" name="password" value="<?php echo set_value('password'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password" autocomplete="off" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>">
                                        </div>
                                    </div>
                                    <button class="btn btn-info btn-round">Save Changes</button>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="logo">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Company</strong> Logo</h2>
                            </div>
                            <div class="body">
                                <form method="post" action="<?php echo site_url('main/developers/change_company_logo'); ?>" enctype='multipart/form-data'>
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $detail->user_id ?>" name="user_id">
                                        <h6><i class="fa fa-images"> Company Logo</i></h6>
                                        <input required="" class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <button class="btn btn-info btn-round">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="AccountStatus">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Status</h2>
                            </div>
                            <div class="body">
                                <?php
                                if ($detail->suspended_status == 1) {
                                ?>
                                    <a href="<?php echo (site_url('main/developers/changeStatusToSuspended/' . $detail->user_id)); ?>" style="color: green;"><b>Active account</b></a>
                                <?php } elseif ($detail->suspended_status == 0) { ?>
                                    <a href="<?php echo (site_url('main/developers/changeStatusToActive/' . $detail->user_id)); ?>" style="color: red;"><b>Suspended account</b></a>
                                <?php } ?>
                            </div>

                            <div class="body">
                                <a href="<?php echo (site_url('main/shared/deactivate_account/deactivate_now/' . $detail->user_id)); ?>" style="color: red;" onclick="return confirm('Are you sure you want to delete?')"><b>Destroy Account</b></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>