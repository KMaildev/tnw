<div class="row clearfix py-3">
    <div class="col-sm-12 col-md-12 py-2">
        <?php
        if ($detail->propertie_type == 'for_sale' || $detail->propertie_type == 'for_rent' || $detail->propertie_type == 'new_property') {
        ?>

            <div class="radio inlineblock m-r-25">
                <input type="radio" id="AdminBtnUpdateProperty" name="upload_type" value="Admin" <?php print ($detail->upload_type == 'Admin' || $detail->upload_type == NULL) ? 'checked=""' : ''; ?>>
                <label for="AdminBtnUpdateProperty">Admin</label>
            </div>
            <div class="radio inlineblock m-r-25">
                <input type="radio" id="AgentBtnUpdateProperty" name="upload_type" value="For_Agent" <?php print ($detail->upload_type == 'For_Agent') ? 'checked=""' : ''; ?>>
                <label for="AgentBtnUpdateProperty">For Agent</label>
            </div>

            <div class="row" id="ShowForAgentProperty" style="background-color: #f2f2f2; padding: 17px;">
                <div class="col-sm-6">
                    <div class="form-group">
                        <p style="color: blue;">
                            ကိုယ်စားတင်ပေးလိုသော Agent Company တစ်ခုကို ရွေးပါ။ <br>
                            <a href="<?php echo site_url('main/developers/create'); ?>" style="color: red;" target="_blank">
                                Agent Company မထည့်သွင်းရသေးပါက ဤနေရာမှတဆင့် ထည့်သွင်းနိုင်ပါသည်။ Create
                            </a>
                        </p>
                        <select class="form-control show-tick" name="user_info_id">
                            <option value="0">-- Please select Agent Company --</option>
                            <?php
                            foreach ($members as $member) {
                            ?>
                                <option value="<?php echo $member->user_id; ?>" <?php print ($detail->user_info_id == $member->user_id) ? 'selected=""' : ''; ?>>
                                    <?php echo $member->company_name; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <p>
                        <br>
                        Contact Number / ဆက်သွယ်ရန်နံပါတ်
                    </p>
                    <select class="form-control select5" multiple="multiple" style="width: 100%;" name="contact_number[]">
                    </select>
                    <p><?php echo $detail->contact_number; ?></p>
                    <input type="hidden" name="contact_number_update" value="<?php echo $detail->contact_number; ?>">
                </div>

            </div>

        <?php } ?>

        <?php
        if ($detail->propertie_type == 'by_owner_for_rent' || $detail->propertie_type == 'by_owner_for_sale') {
        ?>
            <div class="radio inlineblock m-r-25">
                <input type="radio" id="WonerBtnUpdateProperty" name="upload_type" value="For_Owner" <?php print ($detail->upload_type == 'For_Owner') ? 'checked=""' : ''; ?>>
                <label for="WonerBtnUpdateProperty">For Owner</label>
            </div>

            <div class="row" id="ShowForOwnerProperty" style="background-color: #f2f2f2; padding: 17px;">
                <div class="col-sm-12">
                    <p style="color: blue;">
                        Owner အချက်လက်များ ဖြည့်သွင်းပါ။
                    </p>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <h6><i class="fa fa-user"> Name</i></h6>
                        <input type="text" class="form-control" autocomplete="off" name="contact_name" value="<?php echo $detail->user_contact_name; ?>" placeholder="Name">
                    </div>
                </div>

                <div class="col-sm-6">
                    <h6><i class="fa fa-phone-volume"> Contact Number / ဆက်သွယ်ရန်နံပါတ်</i></h6>
                    <select class="form-control select5" multiple="multiple" style="width: 100%;" name="contact_number[]">
                    </select>
                    <p><?php echo $detail->contact_number; ?></p>
                    <input type="hidden" name="contact_number_update" value="<?php echo $detail->contact_number; ?>">
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <h6> Address</h6>
                        <input type="text" class="form-control" autocomplete="off" name="address" value="<?php echo $detail->user_address; ?>" placeholder="Address">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <h6> Logo</h6>
                        <input type="file" class="form-control" autocomplete="off" name="agent_logo_file" accept=".png, .jpg, .jpeg">
                        <input type="hidden" name="agent_logo_file_update" value="<?php echo $detail->agent_owner_logo; ?>">
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>


<div class="row clearfix py-3">
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Title (English)" autocomplete="off" name="title_eng" value="<?php echo $detail->title_eng; ?>">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Title (Myanmar)" autocomplete="off" name="title_mm" value="<?php echo $detail->title_mm; ?>">
        </div>
    </div>

    <div class="col-sm-6">
        <?php
        $region_id = $detail->regions_id;
        ?>
        <select class="form-control show-tick" name="region_id">
            <option value="">-- Please select Region --</option>
            <?php
            foreach ($regions as $region) {
            ?>
                <option value="<?php echo $region->region_id; ?>" <?php print ($region_id == $region->region_id) ? 'selected=""' : ''; ?>>
                    <?php echo $region->region; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-sm-6">
        <?php
        $township_id = $detail->township_id;
        ?>
        <select class="form-control show-tick" name="township_id">
            <option value="">-- Please select Township --</option>
            <?php
            foreach ($townships as $township) {
            ?>
                <option value="<?php echo $township->township_id; ?>" <?php print ($township_id == $township->township_id) ? 'selected=""' : ''; ?>>
                    <?php echo $township->townships; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-sm-6">
        <?php
        $property = $detail->property_type;
        ?>
        <select class="form-control show-tick" name="property_type">
            <option value="">-- Please select Type --</option>
            <?php
            foreach ($property_types as $property_type) {
            ?>
                <option value="<?php echo $property_type->property_type_id; ?>" <?php print ($property == $property_type->property_type) ? 'selected=""' : ''; ?>>
                    <?php echo $property_type->property_type; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-sm-6">
        <?php
        $floor = $detail->floor;
        ?>
        <select class="form-control show-tick" name="floor">
            <option value="">-- Please select Floor --</option>
            <?php
            for ($i = 1; $i < 51; $i++) {
                $fl = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($floor == $fl) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Floor
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Area: 40x60" autocomplete="off" name="area" value="<?php echo $detail->area; ?>">
        </div>
    </div>

    <div class="col-sm-6">
        <select class="form-control show-tick" name="area_type">
            <?php
            $area_type = $detail->area_type;
            ?>
            <option value="Sqft" <?php print ($area_type == 'Sqft') ? 'selected=""' : ''; ?>>
                Sqft
            </option>
            <option value="Acre" <?php print ($area_type == 'Acre') ? 'selected=""' : ''; ?>>
                Acre
            </option>
        </select>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price: 500,000" autocomplete="off" name="price" value="<?php echo $detail->price; ?>" min="0">
        </div>
    </div>

    <div class="col-sm-6">
        <select class="form-control show-tick" name="price_type">
            <?php
            $price_type = $detail->price_type;
            ?>
            <option value="MMK(Lakhs)" <?php print ($price_type == 'MMK(Lakhs)') ? 'selected=""' : ''; ?>>
                MMK(Lakhs)
            </option>
            <option value="USD" <?php print ($price_type == 'USD') ? 'selected=""' : ''; ?>>
                USD
            </option>
        </select>
    </div>
</div>

<div class="row clearfix">
    <div class="col-sm-6">
        <?php
        $installment = $detail->installment;
        ?>
        <h6 class="mt-4">Bank Installment / ဘဏ်အရစ်ကျ</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="installment" id="radio1" value="No" <?php print ($installment == 'No') ? 'checked=""' : ''; ?>>
            <label for="radio1">No</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="installment" id="radio2" value="Yes" <?php print ($installment == 'Yes') ? 'checked=""' : ''; ?>>
            <label for="radio2">Yes</label>
        </div>
    </div>

    <div class="col-sm-6">
        <?php
        $property_status = $detail->property_status;
        ?>
        <h6 class="mt-4">Status / အခြေအနေ</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="property_status" id="radio3" value="Fully Furnished" <?php print ($property_status == 'Fully Furnished') ? 'checked=""' : ''; ?>>
            <label for="radio3">Fully Furnished</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="property_status" id="radio4" value="Hall" <?php print ($property_status == 'Hall') ? 'checked=""' : ''; ?>>
            <label for="radio4">Hall</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="property_status" id="radio5" value="Other" <?php print ($property_status == 'Other') ? 'checked=""' : ''; ?>>
            <label for="radio5">Other</label>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-3 col-sm-6">
        <?php
        $rooms = $detail->rooms;
        ?>
        <select class="form-control show-tick" name="rooms">
            <option value="">-- No. of Rooms --</option>
            <?php
            for ($i = 1; $i < 51; $i++) {
                $r = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($rooms == $r) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <?php
        $shrine_room = $detail->shrine_room;
        ?>
        <select class="form-control show-tick" name="shrine_room">
            <option value="">- Shrine Room - </option>
            <?php
            for ($i = 1; $i < 6; $i++) {
                $shrine = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($shrine_room == $shrine) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <?php
        $bathroom = $detail->bathroom;
        ?>
        <select class="form-control show-tick" name="bathroom">
            <option value="">- No. of Bathrooms -</option>
            <?php
            for ($i = 1; $i < 51; $i++) {
                $bath_room = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($bathroom == $bath_room) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>



    <div class="col-lg-3 col-md-3 col-sm-6">
        <?php
        $dining_room = $detail->dining_room;
        ?>
        <select class="form-control show-tick" name="dining_room">
            <option value="">- Dining Room - </option>
            <?php
            for ($i = 1; $i < 11; $i++) {
                $dining = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($dining_room == $dining) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <?php
        $living_room = $detail->living_room;
        ?>
        <select class="form-control show-tick" name="living_room">
            <option value="">- Living Room - </option>
            <?php
            for ($i = 1; $i < 6; $i++) {
                $living = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($living_room == $living) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <?php
        $bead_room = $detail->bead_room;
        ?>
        <select class="form-control show-tick" name="bead_room">
            <option value="">- Bedroom - </option>
            <?php
            for ($i = 1; $i < 11; $i++) {
                $bead = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($bead_room == $bead) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="masterbathroom">
            <option value="">- No. of Master Bedroom -</option>
            <?php
            for ($i = 1; $i < 10; $i++) {
            ?>
                <option value="<?php echo $i ?>" <?php print ($detail->masterbathroom == $i) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>


    <div class="col-lg-3 col-md-3 col-sm-6">
        <?php
        $other_room = $detail->other_room;
        ?>
        <select class="form-control show-tick" name="other_room">
            <option value="">- Other room - </option>
            <?php
            for ($i = 1; $i < 11; $i++) {
                $other = $i;
            ?>
                <option value="<?php echo $i ?>" <?php print ($other_room == $other) ? 'selected=""' : ''; ?>>
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Year Built" autocomplete="off" name="year_built" value="<?php echo $detail->year_built; ?>">
        </div>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Google Map link" autocomplete="off" name="map_link" value="<?php echo $detail->map_link; ?>">
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-sm-6">
        <h6 class="mt-4">Share Agent Fee</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="share_agent_fee" id="yes" value="Yes" <?php print ($detail->share_agent_fee == 'Yes') ? 'checked=""' : ''; ?>>
            <label for="yes">Yes</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="share_agent_fee" id="no" value="No" <?php print ($detail->share_agent_fee == 'No') ? 'checked=""' : ''; ?>>
            <label for="no">No</label>
        </div>
    </div>

    <div class="col-sm-6">
        <h6 class="mt-4">Top Featured</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="top_featured" id="top_yes" value="Yes" <?php print ($detail->top_featured == 'Yes') ? 'checked=""' : ''; ?>>
            <label for="top_yes">Yes</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="top_featured" id="top_no" value="No" <?php print ($detail->top_featured == 'No' || $detail->top_featured == NULL) ? 'checked=""' : ''; ?>>
            <label for="top_no">No</label>
        </div>
    </div>
</div>

<h6 class="mt-4">General</h6>
<div class="row">
    <div class="col-sm-12">
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox21" type="checkbox" name="swimming_pool" value="Swimming pool" <?php print ($detail->swimming_pool == 'Swimming pool') ? 'checked=""' : ''; ?>>
            <label for="checkbox21">Swimming pool / ရေကူးကန်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox22" type="checkbox" name="securit" value="24 hrs Securit" <?php print ($detail->securit == '24 hrs Securit') ? 'checked=""' : ''; ?>>
            <label for="checkbox22">24 hrs Security / 24 နာရီလုံခြုံရေး</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox23" type="checkbox" name="air_conditioning" value="Air conditioning" <?php print ($detail->air_conditioning == 'Air conditioning') ? 'checked=""' : ''; ?>>
            <label for="checkbox23">Air conditioning / လေအေးပေးစနစ်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox24" type="checkbox" name="wifi" value="Wifi" <?php print ($detail->wifi == 'Wifi') ? 'checked=""' : ''; ?>>
            <label for="checkbox24">Wifi / ဝိုင်ဖိုင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox25" type="checkbox" name="balcony" value="Balcony" <?php print ($detail->balcony == 'Balcony') ? 'checked=""' : ''; ?>>
            <label for="checkbox25">Balcony / လသာဆောင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox26" type="checkbox" name="cctv" value="CCTV" <?php print ($detail->cctv == 'CCTV') ? 'checked=""' : ''; ?>>
            <label for="checkbox26">CCTV</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox27" type="checkbox" name="car_parking" value="Car Parking" <?php print ($detail->car_parking == 'Car Parking') ? 'checked=""' : ''; ?>>
            <label for="checkbox27">Car Parking / ကားပါကင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox28" type="checkbox" name="dishwasher" value="Dishwasher" <?php print ($detail->dishwasher == 'Dishwasher') ? 'checked=""' : ''; ?>>
            <label for="checkbox28">Dishwasher / ပန်းကန်ဆေးစက်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox29" type="checkbox" name="generator" value="Generator" <?php print ($detail->generator == 'Generator') ? 'checked=""' : ''; ?>>
            <label for="checkbox29">Generator / မီးစက်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox30" type="checkbox" name="near_church" value="Near Church" <?php print ($detail->near_church == 'Near Church') ? 'checked=""' : ''; ?>>
            <label for="checkbox30">Near Church / ဘုရားကျောင်းအနီး</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox31" type="checkbox" name="garden" value="Garden" <?php print ($detail->garden == 'Garden') ? 'checked=""' : ''; ?>>
            <label for="checkbox31">Garden / ဥယျာဉ်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox32" type="checkbox" name="gym" value="Gym" <?php print ($detail->gym == 'Gym') ? 'checked=""' : ''; ?>>
            <label for="checkbox32">Gym / အားကစားရုံ</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox33" type="checkbox" name="lift" value="Lift" <?php print ($detail->lift == 'Lift') ? 'checked=""' : ''; ?>>
            <label for="checkbox33">Lift / ဓာတ်လှေကား</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox34" type="checkbox" name="play_ground" value="Play Ground" <?php print ($detail->play_ground == 'Play Ground') ? 'checked=""' : ''; ?>>
            <label for="checkbox34">Play Ground / ကစားကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox35" type="checkbox" name="water_heater" value="Water Heater" <?php print ($detail->water_heater == 'Water Heater') ? 'checked=""' : ''; ?>>
            <label for="checkbox35">Water Heater / ရေအပူပေးစက်</label>
        </div>
    </div>
</div>

<h6 class="mt-4">House View</h6>
<div class="row">
    <div class="col-sm-12">
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox36" type="checkbox" name="mountain_view" value="Mountain View" <?php print ($detail->mountain_view == 'Mountain View') ? 'checked=""' : ''; ?>>
            <label for="checkbox36"> Mountain View / တောင်တန်းမြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox37" type="checkbox" name="pagoda_view" value="Pagoda View" <?php print ($detail->pagoda_view == 'Pagoda View') ? 'checked=""' : ''; ?>>
            <label for="checkbox37"> Pagoda View / စေတီတော်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox38" type="checkbox" name="sea_view" value="Sea View" <?php print ($detail->sea_view == 'Sea View') ? 'checked=""' : ''; ?>>
            <label for="checkbox38"> Sea View / ပင်လယ်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox39" type="checkbox" name="lake_view" value="Lake View" <?php print ($detail->lake_view == 'Lake View') ? 'checked=""' : ''; ?>>
            <label for="checkbox39"> Lake View / ရေကန်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox40" type="checkbox" name="city_view" value="City View" <?php print ($detail->city_view == 'City View') ? 'checked=""' : ''; ?>>
            <label for="checkbox40"> City View / မြို့မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox41" type="checkbox" name="garden_view" value="Garden View" <?php print ($detail->garden_view == 'Garden View') ? 'checked=""' : ''; ?>>
            <label for="checkbox41"> Garden View / ဥယျာဉ်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox42" type="checkbox" name="river_view" value="River View" <?php print ($detail->river_view == 'River View') ? 'checked=""' : ''; ?>>
            <label for="checkbox42"> River View / မြစ်ရှုခင်း</label>
        </div>
    </div>
</div>

<h6 class="mt-4">Business Type</h6>
<div class="row">
    <div class="col-sm-12">
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox43" type="checkbox" name="showroom" value="Showroom" <?php print ($detail->showroom == 'Showroom') ? 'checked=""' : ''; ?>>
            <label for="checkbox43"> Showroom / အရောင်းပြခန်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox44" type="checkbox" name="restaurant" value="Restaurant" <?php print ($detail->restaurant == 'Restaurant') ? 'checked=""' : ''; ?>>
            <label for="checkbox44"> Restaurant / စားသောက်ဆိုင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox46" type="checkbox" name="office" value="Office" <?php print ($detail->office == 'Office') ? 'checked=""' : ''; ?>>
            <label for="checkbox46"> Office / ရုံး</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox45" type="checkbox" name="warehouse" value="Warehouse" <?php print ($detail->warehouse == 'Warehouse') ? 'checked=""' : ''; ?>>
            <label for="checkbox45"> Warehouse / ဂိုဒေါင်</label>
        </div>
    </div>
</div>

<h6 class="mt-4">Description Myanmar</h6>
<div class="row">
    <div class="col-sm-12">
        <!-- <textarea id="summernote" name="description_mm"></textarea> -->
        <textarea placeholder="Description Myanmar" id="w3review" name="description_mm" rows="4" cols="100%" style="width: 100%"><?php echo $detail->description_mm; ?></textarea>
    </div>


    <div class="col-sm-12">
        <!-- <textarea id="summernoteEng" name="description_eng"></textarea> -->
        <textarea id="w3review" placeholder="Description English" name="description_eng" rows="4" cols="100%" style="width: 100%"><?php echo $detail->description_eng; ?></textarea>
    </div>
</div>


<div class="row py-2">
    <div class="col-sm-12">
        <h6><i class="fa fa-school"> Education / ပညာရေး</i></h6>
        <select class="form-control select2" multiple="multiple" style="width: 100%;" name="education[]">
        </select>
    </div>

    <div class="col-sm-12 py-3">
        <h6><i class="fa fa-first-aid"> Health & Medical / ကျန်းမာရေးနှင့် ဆေးဘက်ဆိုင်ရာ</i></h6>
        <select class="form-control select3" multiple="multiple" style="width: 100%;" name="health[]">
        </select>
    </div>

    <div class="col-sm-12 py-1">
        <h6><i class="fa fa-bus"> Transportation / လမ်းပန်းဆက်သွယ်ရေး</i></h6>
        <select class="form-control select4" multiple="multiple" style="width: 100%;" name="transportation[]">
        </select>
    </div>

</div>

<div class="row py-2">
    <div class="col-sm-12">
        <h6><i class="fa fa-images"> Plans Photo</i></h6>
        <input class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg">
        <input type="hidden" name="single_file_value" value="<?php echo $detail->plans_photo; ?>">
    </div>

    <div class="col-sm-12 py-3">
        <h6><i class="fa fa-play-circle"> Property Video</i></h6>
        <input class="form-control" type="file" id="formFile" name="video" accept=".mp4, .mpg">
        <input type="hidden" name="video_value" value="<?php echo $detail->video; ?>">
    </div>
</div>

<?php
if ($detail->propertie_type == 'new_properties') {
?>
    <div class="col-sm-6" hidden>
        <h6 class="mt-4">Slider တွင် ဖော်ပြမည်။</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="slide_status" id="slide1" value="No" <?php print ($detail->slide_status == 'No') ? 'checked=""' : ''; ?>>
            <label for="slide1">No</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="slide_status" id="slide2" value="Yes" <?php print ($detail->slide_status == 'Yes') ? 'checked=""' : ''; ?>>
            <label for="slide2">Yes</label>
        </div>
    </div>
<?php } ?>