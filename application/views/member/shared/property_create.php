<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4"> Title [English] / ခေါင်းစဉ် [အင်္ဂလိပ်]</label>
        <input type="text" class="form-control form-control-sm" placeholder="English Title [Required]" autocomplete="off" name="title_eng" value="<?php echo set_value('title_eng'); ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail4"> Title [Myanmar] / ခေါင်းစဉ် [မြန်မာ]</label>
        <input required type="text" class="form-control form-control-sm" placeholder="Myanmar Title" autocomplete="off" name="title_mm" value="<?php echo set_value('title_mm'); ?>">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 dataselect">
        <label for="inputZip">Region / တိုင်းဒေသကြီး</label>
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
        <label for="inputZip">Township / မြို့နယ်</label>
        <div id="TownshipData"></div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6 dataselect">
        <label for="inputZip">Type / အိမ်ခြံမြေအမျိုးအစား</label>
        <select name="property_type" id="inputZip" class="form-control custom" required>
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
        <label for="inputZip">Floor / အလွှာ</label>
        <select name="floor" id="inputZip" class="form-control custom">
            <optgroup style="font-size:15px;">
                <option value="">-- Please select Floor --</option>
                <?php
                for ($i = 1; $i < 51; $i++) {
                ?>
                    <option value="<?php echo $i ?>">
                        <?php echo $i ?> Floor
                    </option>
                <?php } ?>
            </optgroup>
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4"> Area / ဧရိယာ</label>
        <input type="text" class="form-control form-control-sm" placeholder="Area: 40x60" autocomplete="off" name="area" value="<?php echo set_value('area'); ?>">
    </div>

    <div class="form-group col-md-6 dataselect">
        <label for="inputZip">Type</label>
        <select name="area_type" id="inputZip" class="form-control custom">
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
    <div class="form-group col-md-6">
        <label for="inputEmail4"> Price / စျေးနှုန်း</label>
        <input required type="number" class="form-control form-control-sm" placeholder="Price [Required]" autocomplete="off" name="price" value="<?php echo set_value('price'); ?>" min="0" list="suggests">
    </div>

    <div class="form-group col-md-6 dataselect">
        <label for="inputZip">Type / ကျပ် / ဒေါ်လာ</label>
        <select name="price_type" id="inputZip" class="form-control custom">
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
    <div class="form-group col-md-6 dataselect">
        <label for="inputZip">Bank Installment / ဘဏ်အရစ်ကျ</label>
        <select name="installment" id="inputZip" class="form-control custom">
            <option value="No">
                No
            </option>
            <option value="Yes">
                Yes
            </option>
        </select>
    </div>

    <div class="form-group col-md-6 dataselect">
        <label for="inputZip">Status / အခြေအနေ</label>
        <select name="property_status" id="inputZip" class="form-control custom">
            <option value="Fully Furnished">
                Fully Furnished
            </option>
            <option value="Hall">
                Hall
            </option>
            <option value="Other">
                Other
            </option>
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-3 dataselect">
        <label for="inputZip">Rooms / အခန်း</label>
        <select name="rooms" id="inputZip" class="form-control custom">
            <?php
            for ($i = 0; $i < 51; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group col-md-3 dataselect">
        <label for="inputZip">Shrine Room / ဘုရားခန်း</label>
        <select name="shrine_room" id="inputZip" class="form-control custom">
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group col-md-3 dataselect">
        <label for="inputZip">Bathrooms / ရေချိုးခန်း</label>
        <select name="bathroom" id="inputZip" class="form-control custom">
            <?php
            for ($i = 0; $i < 51; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group col-md-3 dataselect">
        <label for="inputZip">Dining Room / ထမင်းစားခန်း</label>
        <select name="dining_room" id="inputZip" class="form-control custom">
            <?php
            for ($i = 0; $i < 11; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-3 dataselect">
        <label for="inputZip">Living Room / ဧည့်ခန်း</label>
        <select name="living_room" id="inputZip" class="form-control custom">
            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group col-md-3 dataselect">
        <label for="inputZip">Bedroom / အိပ်ခန်း</label>
        <select name="bead_room" id="inputZip" class="form-control custom">
            <?php
            for ($i = 0; $i < 11; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group col-md-3 dataselect">
        <label for="inputZip">Other room / အခြားအခန်း</label>
        <select name="other_room" id="inputZip" class="form-control custom">
            <?php
            for ($i = 0; $i < 11; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label for="inputEmail4"> Year Built / တည်ဆောက်သောနှစ် (သို့) တိုက်သက်တမ်း</label>
        <input type="text" class="form-control form-control-sm" placeholder="Year Built" autocomplete="off" name="year_built" value="<?php echo set_value('year_built'); ?>" min="0">
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-12 col-sm-12 col-lg-12">
        <label for="inputEmail4"> Contact Number / ဆက်သွယ်ရန်နံပါတ်</label>
        <select class="form-control select5" multiple="multiple" style="width: 100%;" name="contact_number[]">
        </select>
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-12 col-sm-12 col-lg-12">
        <label for="inputEmail4"> Google Map Link</label>
        <input type="text" class="form-control form-control-sm" placeholder="Google Map link" autocomplete="off" name="map_link" value="<?php echo set_value('map_link'); ?>">
    </div>
</div>


<div class="row">
    <div class="form-group col-md-12 col-sm-12">
        <label for="checkbox21" style="font-size: 19px; color: #db9c30;"><b>Share Agent Fee</b></label>
    </div>
    <div class="form-group col-md-2 col-sm-6">
        <label for="share_agent_yes">Yes</label>
        <input id="share_agent_yes" type="radio" name="share_agent_fee" value="Yes" checked="">
    </div>

    <div class="form-group col-md-2 col-sm-6">
        <label for="share_agent_no">No</label>
        <input id="share_agent_no" type="radio" name="share_agent_fee" value="No">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12 col-sm-12">
        <label for="checkbox21" style="font-size: 20px; color: #db9c30;"><b>General</b></label>
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox21">Swimming pool / ရေကူးကန်</label>
        <input id="checkbox21" type="checkbox" name="swimming_pool" value="Swimming pool">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox22">24 hrs Security / 24 နာရီလုံခြုံရေး</label>
        <input id="checkbox22" type="checkbox" name="securit" value="24 hrs Securit">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox23">Air conditioning / လေအေးပေးစနစ်</label>
        <input id="checkbox23" type="checkbox" name="air_conditioning" value="Air conditioning">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox24">Wifi / ဝိုင်ဖိုင်</label>
        <input id="checkbox24" type="checkbox" name="wifi" value="Wifi">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox25">Balcony / လသာဆောင်</label>
        <input id="checkbox25" type="checkbox" name="balcony" value="Balcony">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox26">CCTV</label>
        <input id="checkbox26" type="checkbox" name="cctv" value="CCTV">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox27">Car Parking / ကားပါကင်</label>
        <input id="checkbox27" type="checkbox" name="car_parking" value="Car Parking">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox28">Dishwasher / ပန်းကန်ဆေးစက်</label>
        <input id="checkbox28" type="checkbox" name="dishwasher" value="Dishwasher">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox29">Generator / မီးစက်</label>
        <input id="checkbox29" type="checkbox" name="generator" value="Generator">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox30">Near Church / ဘုရားကျောင်းအနီး</label>
        <input id="checkbox30" type="checkbox" name="near_church" value="Near Church">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox31">Garden / ဥယျာဉ်</label>
        <input id="checkbox31" type="checkbox" name="garden" value="Garden">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox32">Gym / အားကစားရုံ</label>
        <input id="checkbox32" type="checkbox" name="gym" value="Gym">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox33">Lift / ဓာတ်လှေကား</label>
        <input id="checkbox33" type="checkbox" name="lift" value="Lift">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox34">Play Ground / ကစားကွင်း</label>
        <input id="checkbox34" type="checkbox" name="play_ground" value="Play Ground">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox35">Water Heater / ရေအပူပေးစက်</label>
        <input id="checkbox35" type="checkbox" name="water_heater" value="Water Heater">
    </div>


    <div class="form-group col-md-12 col-sm-12">
        <label for="checkbox21" style="font-size: 20px; color: #db9c30;"><b>House View / အိမ်မြင်ကွင်း</b></label>
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox36"> Mountain View / တောင်တန်းမြင်ကွင်း</label>
        <input id="checkbox36" type="checkbox" name="mountain_view" value="Mountain View">
    </div>


    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox37"> Pagoda View / စေတီတော်မြင်ကွင်း</label>
        <input id="checkbox37" type="checkbox" name="pagoda_view" value="Pagoda View">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox38"> Sea View / ပင်လယ်မြင်ကွင်း</label>
        <input id="checkbox38" type="checkbox" name="sea_view" value="Sea View">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox39"> Lake View / ရေကန်မြင်ကွင်း</label>
        <input id="checkbox39" type="checkbox" name="lake_view" value="Lake View">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox40"> City View / မြို့မြင်ကွင်း</label>
        <input id="checkbox40" type="checkbox" name="city_view" value="City View">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox41"> Garden View / ဥယျာဉ်မြင်ကွင်း</label>
        <input id="checkbox41" type="checkbox" name="garden_view" value="Garden View">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox42"> River View / မြစ်ရှုခင်း</label>
        <input id="checkbox42" type="checkbox" name="river_view" value="River View">
    </div>


    <div class="form-group col-md-12 col-sm-12">
        <label for="checkbox21" style="font-size: 20px; color: #db9c30;"><b>Business Type</b></label>
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox43"> Showroom / အရောင်းပြခန်း</label>
        <input id="checkbox43" type="checkbox" name="showroom" value="Showroom">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox44"> Restaurant / စားသောက်ဆိုင်</label>
        <input id="checkbox44" type="checkbox" name="restaurant" value="Restaurant">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox46"> Office / ရုံး</label>
        <input id="checkbox46" type="checkbox" name="office" value="Office">
    </div>

    <div class="form-group col-md-3 col-lg-3 col-sm-6">
        <label for="checkbox45"> Warehouse / ဂိုဒေါင်</label>
        <input id="checkbox45" type="checkbox" name="warehouse" value="Warehouse">
    </div>

    <?php
    if ($my_active_packages) {
        $this->load->view('member/shared/shared_form');
    }
    ?>

</div>

<br>
<div class="form-row">
    <div class="col-md-12">
        <textarea placeholder="Description Myanmar" name="description_mm" rows="4" cols="100%" style="width: 100%"></textarea>
        <!-- <textarea id="summernote" name="description_mm"></textarea> -->
    </div>

    <div class="col-md-12 py-3">
        <textarea placeholder="Description English" name="description_eng" rows="4" cols="100%" style="width: 100%"></textarea>
        <!-- <textarea id="summernoteeng" name="description_eng"></textarea> -->
    </div>
</div>