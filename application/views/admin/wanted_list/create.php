<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>
                    <?php echo strtoupper(str_replace('_', ' ', $type)); ?>
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> <?php echo strtoupper(str_replace('_', ' ', $type)); ?> </a></li>
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
                        <h2><strong><?php echo strtoupper(str_replace('_', ' ', $type)); ?> </strong> </h2>
                    </div>
                    <div class="body">
                        <?php $this->load->view('templates/shared/error_message'); ?>
                        <form method="post" action="<?php echo site_url('main/wanted_list/save') ?>">
                            <input type="hidden" name="buy_rent_status" value="<?php echo $type; ?>" require>
                            <?php
                            if ($type == 'want_to_buy') {
                                echo '<input type="hidden" name="ad_number" value="WTB-">';
                            } else {
                                echo '<input type="hidden" name="ad_number" value="WTR-">';
                            }
                            ?>

                            <div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4"> Title</label>
                                        <input required type="text" class="form-control form-control-sm" placeholder="Title [Required]" autocomplete="off" name="title" value="<?php echo set_value('title'); ?>">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 dataselect">
                                        <label for="inputZip">Region</label>
                                        <select name="region_id" id="Region" class="form-control custom" required>
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
                                        <select name="property_type_id" id="inputZip" class="form-control custom" required>
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
                                        <input type="text" class="form-control form-control-sm" placeholder="Area: 40x60" autocomplete="off" name="area" value="<?php echo set_value('area'); ?>">
                                    </div>

                                    <div class="form-group col-md-6 dataselect">
                                        <label for="inputZip">Type</label>
                                        <select name="area_type" id="inputZip" class="form-control custom">
                                            <option value="Sqft">
                                                Sqft
                                            </option>
                                            <option value="Acre">
                                                Acre
                                            </option>
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
                                        <input type="number" class="form-control form-control-sm" placeholder="200" autocomplete="off" name="budget_from" value="<?php echo set_value('budget_from'); ?>" min="0" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4"> To *</label>
                                        <input type="number" class="form-control form-control-sm" placeholder="500" autocomplete="off" name="budget_to" value="<?php echo set_value('budget_to'); ?>" min="0" required>
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

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4"> Phone</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Phone" autocomplete="off" name="phone" value="<?php echo set_value('phone'); ?>" required>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea placeholder="Description Myanmar" id="w3review" name="description_mm" rows="4" cols="100%" style="width: 100%"></textarea>
                                    </div>

                                    <div class="col-md-12 py-3" hidden>
                                        <textarea placeholder="Description Eng" id="w3review" name="description_eng" rows="4" cols="100%" style="width: 100%"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
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
<?php $this->load->view('templates/data_list_suggests'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/summernote.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $('#Region').change(function() {
            var region_id = $('#Region').val();
            if (region_id != '') {
                $.ajax({
                    url: "<?php echo site_url(); ?>/include/dynamic_dependent/fetch_township",
                    method: "POST",
                    data: {
                        region_id: region_id
                    },
                    success: function(data) {
                        $('#TownshipData').html(data);
                    }
                });

            } else {
                $('#TownshipData').html('<select class="form-control show-tick"><option value="">Please select township</option></select>');
            }
        });
        $('#TownshipData').html('<select class="form-control show-tick" style="color: #bcbaba;"><option value="">Please select township</option></select>');
    });
</script>