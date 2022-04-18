<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .custom {
        font-size: 12px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="dashborad-box stat">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #db9c30">
                        <li class="breadcrumb-item">
                            <a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 20px;">
                                <i class="fa fa-building"></i> Dashboard
                            </a>
                        </li>
                    </ol>
                    Want to Rent
                </nav>
                <hr>

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

                <form method="post" action="<?php echo site_url('member/want_to_buy/save') ?>">
                    <input type="hidden" name="buy_rent_status" value="want_to_rent">
                    <input type="hidden" name="ad_number" value="WTR-">
                    <div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4"> Title</label>
                                <input required="" type="text" class="form-control form-control-sm" placeholder="Title [Required]" autocomplete="off" name="title" value="<?php echo set_value('title'); ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Region</label>
                                <select name="region_id" id="Region" class="form-control custom" required="">
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

                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Township</label>
                                <div id="TownshipData"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Type</label>
                                <select name="property_type_id" id="inputZip" class="form-control custom" required="">
                                    <option value="">-- Please select Type --</option>
                                    <?php
                                    foreach ($property_types as $property_type) {
                                    ?>
                                        <option value="<?php echo $property_type->property_type_id; ?>">
                                            <?php echo $property_type->property_type; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Floor</label>
                                <select name="floor" id="inputZip" class="form-control custom">
                                    <optgroup style="font-size:15px;">
                                        <option value="">-- Please select Floor --</option>
                                        <option value="Ground  Floor">Ground Floor</option>
                                        <?php
                                        for ($i = 1; $i < 31; $i++) {
                                        ?>
                                            <option value="<?php echo $i ?> Floor">
                                                <?php echo $i ?> Floor
                                            </option>
                                        <?php } ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> Area</label>
                                <input required="" type="text" class="form-control form-control-sm" placeholder="Area: 40x60" autocomplete="off" name="area" value="<?php echo set_value('area'); ?>">
                            </div>

                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Type</label>
                                <select name="area_type" id="inputZip" class="form-control custom" required="">
                                    <optgroup style="font-size:15px;">
                                        <option value="Sqft">
                                            Sqft
                                        </option>
                                        <option value="Acre">
                                            Acre
                                        </option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Status</label>
                                <select name="agent_allow_status" id="inputZip" class="form-control custom">
                                    <option value="Allow agent">
                                        Allow agent
                                    </option>
                                    <option value="Not allow agent">
                                        Not allow agent
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Status</label>
                                <select name="property_status" id="inputZip" class="form-control custom">
                                    <option value="Not Furnished">
                                        Not Furnished
                                    </option>
                                    <option value="Fully Furnished">
                                        Half Furnished
                                    </option>
                                    <option value="Hall">
                                        Hall
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Bedroom</label>
                                <select name="bedroom" id="inputZip" class="form-control custom">
                                    <option value="Not Included">Not Included</option>
                                    <?php
                                    for ($i = 1; $i < 11; $i++) {
                                    ?>
                                        <option value="<?php echo $i ?> Room">
                                            <?php echo $i ?> Room
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6 dataselect">
                                <label for="inputZip">Bathroom</label>
                                <select name="bathroom" id="inputZip" class="form-control custom">
                                    <option value="Not Included">Not Included</option>
                                    <?php
                                    for ($i = 1; $i < 11; $i++) {
                                    ?>
                                        <option value="<?php echo $i ?> Room">
                                            <?php echo $i ?> Room
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4"> Budget from *</label>
                                <input required type="number" class="form-control form-control-sm" placeholder="200" autocomplete="off" name="budget_from" value="<?php echo set_value('budget_from'); ?>" min="0">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4"> To *</label>
                                <input required type="number" class="form-control form-control-sm" placeholder="500" autocomplete="off" name="budget_to" value="<?php echo set_value('budget_to'); ?>" min="0">
                            </div>

                            <div class="form-group col-md-4 dataselect">
                                <label for="inputZip">Currency</label>
                                <select name="currency" id="inputZip" class="form-control custom">
                                    <option value="MMK(Lakhs)">
                                        MMK(Lakhs)
                                    </option>
                                    <option value="USD">
                                        USD
                                    </option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4"> Phone</label>
                                <input required="" type="text" class="form-control form-control-sm" placeholder="Phone" autocomplete="off" name="phone" value="<?php echo set_value('phone'); ?>">
                            </div>

                            <div class="col-md-12">
                                <textarea id="summernote" name="description_mm"></textarea>
                            </div>

                            <div class="col-md-12 py-3" hidden>
                                <textarea id="summernoteeng" name="description_eng"></textarea>
                            </div>
                        </div>

                        <div class="form-row py-3">
                            <div class="col-md-12">
                                <button class="btn btn-default  pull-right" type="submit" style="background-color: #db9c30; color: white;">Create Post Ad</button>
                            </div>
                        </div>


                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Description (Myanmar)',
        tabsize: 2,
        height: 120,
        toolbar: []
    });

    $('#summernoteeng').summernote({
        placeholder: 'Description (English)',
        tabsize: 2,
        height: 120,
        toolbar: []
    });
</script>

<script>
    $(document).ready(function() {
        $('#Region').change(function() {
            var region_id = $('#Region').val();
            if (region_id != '') {
                $.ajax({
                    url: "<?php echo site_url(); ?>/include/dynamic_dependent/fetch_township_member",
                    method: "POST",
                    data: {
                        region_id: region_id
                    },
                    success: function(data) {
                        $('#TownshipData').html(data);
                    }
                });

            } else {
                $('#TownshipData').html('<select class="form-control custom"><option value="">Please select township</option></select>');
            }
        });
    });
</script>