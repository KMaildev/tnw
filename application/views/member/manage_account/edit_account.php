<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<style>
    .custom {
        font-size: 12px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

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
                            <h3 class="heading">
                                Update Your Information /
                                <small>
                                    <a href="<?php echo site_url('member/manage_account/upload_logo'); ?>">Upload Logo</a>
                                </small>
                            </h3>

                            <?php
                            if (validation_errors() == true) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <small><?php echo validation_errors(); ?></small>
                                </div>
                            <?php } ?>

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
                            <form method="post" action="<?php echo site_url('member/manage_account/update') ?>">
                                <input type="hidden" name="user_id" value="<?php echo $member_data->user_id; ?>">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input required type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $member_data->name; ?>" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" class="form-control" value="<?php echo $member_data->company_name; ?>" placeholder="Company Name" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input required type="text" name="email" class="form-control" placeholder="Email" autocomplete="off" value="<?php echo $member_data->email; ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <select class="form-control selectphone" multiple="multiple" style="width: 100%;" name="phone[]">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input required type="text" name="address" class="form-control" placeholder="Address" autocomplete="off" value="<?php echo $member_data->address; ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group  dataselect">
                                            <label for="inputZip">Region</label>
                                            <select name="region_id" class="form-control custom" required="">
                                                <?php
                                                foreach ($regions as $region) {
                                                ?>
                                                    <option value="<?php echo $region->region_id; ?>" <?php print ($member_data->region_id == $region->region_id) ? 'selected=""' : ''; ?>>
                                                        <?php echo $region->region; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group  dataselect">
                                            <label for="inputZip">Company Type</label>
                                            <select name="company_type" class="form-control custom" required="">
                                                <option value="PropertyAgency" <?php print ($member_data->company_type == 'PropertyAgency') ? 'selected=""' : ''; ?>>
                                                    Property Agency
                                                </option>
                                                <option value="IndividualAgent" <?php print ($member_data->company_type == 'IndividualAgent') ? 'selected=""' : ''; ?>>
                                                    Individual Agent
                                                </option>
                                                <option value="PropertyDeveloper" <?php print ($member_data->company_type == 'PropertyDeveloper') ? 'selected=""' : ''; ?>>
                                                    Property Developer
                                                </option>
                                                <option value="RenovationCompany" <?php print ($member_data->company_type == 'RenovationCompany') ? 'selected=""' : ''; ?>>
                                                    Renovation Company
                                                </option>
                                                <option value="TransportationCompany" <?php print ($member_data->company_type == 'TransportationCompany') ? 'selected=""' : ''; ?>>
                                                    Transportation Company
                                                </option>
                                                <option value="ConstructionCompany" <?php print ($member_data->company_type == 'TransportationCompany') ? 'selected=""' : ''; ?>>
                                                    Construction Company
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label></label>
                                            <textarea id="summernote" name="description"><?php echo $member_data->description; ?></textarea>
                                        </div>

                                    </div>


                                    <div class="col-lg-12">
                                        <div class="">
                                            <button class="btn btn-default  pull-right m-3" type="submit" style="background-color: #db9c30; color: white;">Update</button>

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
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 120,
        toolbar: []
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script>
    $('.selectphone').select2({
        data: [""],
        tags: true,
        maximumSelectionLength: 10,
        tokenSeparators: [',', ' '],
        placeholder: "Enter your phone number"
    });
</script>