<div class="row clearfix py-3">
    <div class="col-sm-12 col-md-12 py-2">
        <div class="radio inlineblock m-r-25">
            <input type="radio" id="AdminBtn" name="upload_type" value="Admin" checked>
            <label for="AdminBtn">Admin</label>
        </div>
        <div class="radio inlineblock m-r-25">
            <input type="radio" id="AgentBtn" name="upload_type" value="For_Agent">
            <label for="AgentBtn">For Agent</label>
        </div>

        <div class="radio inlineblock m-r-25">
            <input type="radio" id="WonerBtn" name="upload_type" value="For_Owner">
            <label for="WonerBtn">For Owner</label>
        </div>
    </div>
</div>


<div class="row" id="ShowForAgent" style="background-color: #f2f2f2; padding: 17px;">
    <div class="col-sm-6">
        <div class="form-group">
            <p style="color: blue;">
                ကိုယ်စားတင်ပေးလိုသော Agent Company တစ်ခုကို ရွေးပါ။
            </p>
            <select class="form-control show-tick" name="user_info_id">
                <option value="">-- Please select Agent Company --</option>
                <?php
                foreach ($members as $member) {
                ?>
                    <option value="<?php echo $member->user_id; ?>">
                        <?php echo $member->company_name; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<div class="row" id="ShowForOwner" style="background-color: #f2f2f2; padding: 17px;">
    <div class="col-sm-12">
        <p style="color: blue;">
            Owner အချက်လက်များ ဖြည့်သွင်းပါ။
        </p>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <h6><i class="fa fa-user"> Name</i></h6>
            <input type="text" class="form-control" autocomplete="off" name="contact_name" value="<?php echo set_value('contact_name'); ?>" placeholder="Name">
        </div>
    </div>

    <div class="col-sm-6">
        <h6><i class="fa fa-phone-volume"> Contact Number / ဆက်သွယ်ရန်နံပါတ်</i></h6>
        <select class="form-control select5" multiple="multiple" style="width: 100%;" name="contact_number[]">
        </select>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <h6> Address</h6>
            <input type="text" class="form-control" autocomplete="off" name="address" value="<?php echo set_value('address'); ?>" placeholder="Address">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <h6> Logo</h6>
            <input type="file" class="form-control" autocomplete="off" name="agent_logo_file" accept=".png, .jpg, .jpeg">
        </div>
    </div>
</div>



<div class="row clearfix py-3">

    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="English Title" autocomplete="off" name="title_eng" value="<?php echo set_value('title_eng'); ?>">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <input required="" type="text" class="form-control" placeholder="Myanmar Title" autocomplete="off" name="title_mm" value="<?php echo set_value('title_mm'); ?>">
        </div>
    </div>

    <div class="col-sm-6">
        <select class="form-control show-tick" name="region_id" required="" id="Region">
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

    <div class="col-sm-6" id="TownshipData">
    </div>

    <div class="col-sm-6">
        <select class="form-control show-tick" name="property_type" required="">
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

    <div class="col-sm-6">
        <select class="form-control show-tick" name="floor">
            <option value="">-- Please select Floor --</option>
            <?php
            for ($i = 1; $i < 51; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Floor
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Area: 40x60" autocomplete="off" name="area" value="<?php echo set_value('area'); ?>">
        </div>
    </div>

    <div class="col-sm-6">
        <select class="form-control show-tick" name="area_type">
            <option value="Sqft">
                Sqft
            </option>
            <option value="Acre">
                Acre
            </option>
        </select>
    </div>


    <div class="col-sm-6">
        <div class="form-group">
            <input required="" type="number" class="form-control" placeholder="Monthly Price" autocomplete="off" name="price" value="<?php echo set_value('price'); ?>" min="0" list="suggests">
        </div>
    </div>

    <div class="col-sm-6">
        <select class="form-control show-tick" name="price_type">
            <option value="MMK(Lakhs)">
                MMK(Lakhs)
            </option>
            <option value="USD">
                USD
            </option>
        </select>
    </div>
</div>

<div class="row clearfix">
    <div class="col-sm-6">
        <h6 class="mt-4">Bank Installment / ဘဏ်အရစ်ကျ</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="installment" id="radio1" value="No" checked>
            <label for="radio1">No</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="installment" id="radio2" value="Yes">
            <label for="radio2">Yes</label>
        </div>
    </div>

    <div class="col-sm-6">
        <h6 class="mt-4">Status / အခြေအနေ</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="property_status" id="radio3" value="Fully Furnished">
            <label for="radio3">Fully Furnished</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="property_status" id="radio4" value="Hall">
            <label for="radio4">Hall</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="property_status" id="radio5" value="Other">
            <label for="radio5">Other</label>
        </div>
    </div>
</div>



<div class="row clearfix">

    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="rooms">
            <option value="">-- No. of Rooms --</option>
            <?php
            for ($i = 1; $i < 51; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="shrine_room">
            <option value="">- Shrine Room - </option>
            <?php
            for ($i = 1; $i < 3; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="bathroom">
            <option value="">- No. of Bathrooms -</option>
            <?php
            for ($i = 1; $i < 51; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="dining_room">
            <option value="">- Dining Room - </option>
            <?php
            for ($i = 1; $i < 11; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="living_room">
            <option value="">- Living Room - </option>
            <?php
            for ($i = 1; $i < 6; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="bead_room">
            <option value="">- Bedroom - </option>
            <?php
            for ($i = 1; $i < 11; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <select class="form-control show-tick" name="other_room">
            <option value="">- Other room - </option>
            <?php
            for ($i = 1; $i < 11; $i++) {
            ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?> Room
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Year Built" autocomplete="off" name="year_built" value="<?php echo set_value('year_built'); ?>">
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Google Map link" autocomplete="off" name="map_link" value="<?php echo set_value('map_link'); ?>">
        </div>
    </div>
</div>


<div class="row clearfix">
    <div class="col-sm-6" hidden>
        <h6 class="mt-4">Share Agent Fee</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="share_agent_fee" id="yes" value="Yes">
            <label for="yes">Yes</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="share_agent_fee" id="no" value="No" checked>
            <label for="no">No</label>
        </div>
    </div>

    <div class="col-sm-6" hidden>
        <h6 class="mt-4">Top Featured</h6>
        <div class="radio inlineblock m-r-25">
            <input type="radio" name="top_featured" id="top_yes" value="Yes">
            <label for="top_yes">Yes</label>
        </div>
        <div class="radio inlineblock">
            <input type="radio" name="top_featured" id="top_no" value="No">
            <label for="top_no">No</label>
        </div>
    </div>
</div>


<h6 class="mt-4" hidden>General</h6>
<div class="row" hidden>
    <div class="col-sm-12">
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox21" type="checkbox" name="swimming_pool" value="Swimming pool">
            <label for="checkbox21">Swimming pool / ရေကူးကန်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox22" type="checkbox" name="securit" value="24 hrs Securit">
            <label for="checkbox22">24 hrs Security / 24 နာရီလုံခြုံရေး</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox23" type="checkbox" name="air_conditioning" value="Air conditioning">
            <label for="checkbox23">Air conditioning / လေအေးပေးစနစ်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox24" type="checkbox" name="wifi" value="Wifi">
            <label for="checkbox24">Wifi / ဝိုင်ဖိုင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox25" type="checkbox" name="balcony" value="Balcony">
            <label for="checkbox25">Balcony / လသာဆောင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox26" type="checkbox" name="cctv" value="CCTV">
            <label for="checkbox26">CCTV</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox27" type="checkbox" name="car_parking" value="Car Parking">
            <label for="checkbox27">Car Parking / ကားပါကင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox28" type="checkbox" name="dishwasher" value="Dishwasher">
            <label for="checkbox28">Dishwasher / ပန်းကန်ဆေးစက်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox29" type="checkbox" name="generator" value="Generator">
            <label for="checkbox29">Generator / မီးစက်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox30" type="checkbox" name="near_church" value="Near Church">
            <label for="checkbox30">Near Church / ဘုရားကျောင်းအနီး</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox31" type="checkbox" name="garden" value="Garden">
            <label for="checkbox31">Garden / ဥယျာဉ်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox32" type="checkbox" name="gym" value="Gym">
            <label for="checkbox32">Gym / အားကစားရုံ</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox33" type="checkbox" name="lift" value="Lift">
            <label for="checkbox33">Lift / ဓာတ်လှေကား</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox34" type="checkbox" name="play_ground" value="Play Ground">
            <label for="checkbox34">Play Ground / ကစားကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox35" type="checkbox" name="water_heater" value="Water Heater">
            <label for="checkbox35">Water Heater / ရေအပူပေးစက်</label>
        </div>
    </div>
</div>

<h6 class="mt-4" hidden>House View</h6>
<div class="row" hidden>
    <div class="col-sm-12">
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox36" type="checkbox" name="mountain_view" value="Mountain View">
            <label for="checkbox36"> Mountain View / တောင်တန်းမြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox37" type="checkbox" name="pagoda_view" value="Pagoda View">
            <label for="checkbox37"> Pagoda View / စေတီတော်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox38" type="checkbox" name="sea_view" value="Sea View">
            <label for="checkbox38"> Sea View / ပင်လယ်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox39" type="checkbox" name="lake_view" value="Lake View">
            <label for="checkbox39"> Lake View / ရေကန်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox40" type="checkbox" name="city_view" value="City View">
            <label for="checkbox40"> City View / မြို့မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox41" type="checkbox" name="garden_view" value="Garden View">
            <label for="checkbox41"> Garden View / ဥယျာဉ်မြင်ကွင်း</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox42" type="checkbox" name="river_view" value="River View">
            <label for="checkbox42"> River View / မြစ်ရှုခင်း</label>
        </div>
    </div>
</div>

<h6 class="mt-4" hidden>Business Type</h6>
<div class="row" hidden>
    <div class="col-sm-12">
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox43" type="checkbox" name="showroom" value="Showroom">
            <label for="checkbox43"> Showroom / အရောင်းပြခန်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox44" type="checkbox" name="restaurant" value="Restaurant">
            <label for="checkbox44"> Restaurant / စားသောက်ဆိုင်</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox46" type="checkbox" name="office" value="Office">
            <label for="checkbox46"> Office / ရုံး</label>
        </div>
        <div class="checkbox inlineblock m-r-20">
            <input id="checkbox45" type="checkbox" name="warehouse" value="Warehouse">
            <label for="checkbox45"> Warehouse / ဂိုဒေါင်</label>
        </div>
    </div>
</div>

<h6 class="mt-4">Description</h6>
<div class="row">
    <div class="col-sm-12">
        <textarea placeholder="အဆောင်လိပ်စာ၊ စည်းကမ်းချက်များ၊ စပေါ်ငွေ၊ အနည်းဆုံး ငှါးရမ်းရမည့်ကာလ၊ ရေ မီး (ရ ၊ မရ) ထမင်း ဟင်းချက် (ရ ၊ မရ) ယောကျ်ားလေး အဆောင်၊ မိန်းကလေး အဆောင်၊ အိမ်ထောင်သည် အဆောင် စသည်တို့ကို ထည့်သွင်းရေးသာနိုင်ပါသည်။" id="w3review" name="description_mm" rows="4" cols="100%" style="width: 100%"></textarea>
        <!-- <textarea id="summernote" name="description_mm"></textarea> -->
    </div>

    <div class="col-sm-12">
        <textarea id="w3review" placeholder="Description English" name="description_eng" rows="4" cols="100%" style="width: 100%"></textarea>
        <!-- <textarea id="summernoteeng" name="description_eng"></textarea> -->
    </div>
</div>

<div class="row py-2" hidden>

    <div class="col-sm-12">
        <h4 class="mt-4">Near</h4>
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

<div class="row py-2" hidden>
    <div class="col-sm-12">
        <h6><i class="fa fa-images"> Plans Photo</i></h6>
        <input class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg">
    </div>

    <div class="col-sm-12 py-3" hidden>
        <h6><i class="fa fa-play-circle"> Property Video</i></h6>
        <input class="form-control" type="file" id="formFile" name="video" accept=".mp4, .mpg">
    </div>
</div>