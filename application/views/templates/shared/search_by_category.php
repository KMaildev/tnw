<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>

<div class="row text-left p-t-5 fs-13 lh-1-5em"> 
    <div class="col-lg-3 col-md-3  d-none d-sm-block"> 
        <ul class="list-unstyled"> 
            <li>
                <a href="<?php echo site_url('propertylist/index/for_sale'); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရောင်းရန် အိမ်ခြံမြေများ" : "Properties for Sale";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/index/for_rent'); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ငှားရန် အိမ်ခြံမြေများ" : "Properties for Rent";
                    ?>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('propertylist/index/new_properties'); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "အိမ်ခြံမြေ ကြိုပွိုင့်များ" : "New Properties";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=&property_type_id=4&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိရောင်းရန် အိမ်ခြံမြေများ" : "Properties for Sale in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=1&property_type_id=3&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိငှားရန် အိမ်ခြံမြေများ" : "Properties for Rent in Yangon";
                    ?>
                </a>
            </li> 
        </ul> 
    </div> 

    <div class="col-lg-3 col-md-3  d-none d-sm-block"> 
        <ul class="list-unstyled"> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=1&property_type_id=1&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိရောင်းရန် တိုက်ခန်းများ" : "Apartments for Sale in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=&property_type_id=1&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိငှားရန် တိုက်ခန်းများ" : "Apartments for Rent in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/index??keyword=&propertie_type=for_sale&region_id=&property_type_id=3&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိရောင်းရန် လုံးချင်းအိမ်များ" : "Houses for Sale in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=&property_type_id=3&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိငှားရန် လုံးချင်းအိမ်များ" : "Houses for Rent in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=&property_type_id=2&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိငှားရန် ကွန်ဒိုအခန်းများ" : "Condos for Rent in Yangon";
                    ?>
                </a>
            </li> 
        </ul> 
    </div> 

    <div class="col-lg-3 col-md-3 d-none d-sm-block"> 
        <ul class="list-unstyled"> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=2&property_type_id=1&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "မန္တလေးတိုင်းရှိရောင်းရန် တိုက်ခန်းများ" : "Apartments for Sale in Mandalay";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=2&property_type_id=1&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "မန္တလေးတိုင်းရှိငှားရန် တိုက်ခန်းများ" : "Apartments for Rent in Mandalay";
                    ?>
                    
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=2&property_type_id=3&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "မန္တလေးတိုင်းရှိရောင်းရန် လုံးချင်းအိမ်များ" : "Houses for Sale in Mandalay";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=2&property_type_id=3&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "မန္တလေးတိုင်းရှိငှားရန် လုံးချင်းအိမ်များ" : "Houses for Rent in Mandalay";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=2&property_type_id=2&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "မန္တလေးတိုင်းရှိငှားရန် ကွန်ဒိုအခန်းများ" : "Condos for Rent in Mandalay";
                    ?>
                </a>
            </li> 
        </ul> 
    </div> 

    <div class="col-lg-3 col-md-3  d-none d-sm-block"> 
        <ul class="list-unstyled"> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=1&property_type_id=4&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိရောင်းရန် မြေကွက်၊ ခြံကွက်များ" : "Lands for Sale in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=1&property_type_id=4&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိငှားရန် မြေကွက်၊ ခြံကွက်များ" : "Lands for Rent in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=1&property_type_id=5&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိရောင်းရန် ဆိုင်ခန်း၊ ရုံးခန်းများ" : "Shops, Offices for Sale in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_rent&region_id=1&property_type_id=5&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "ရန်ကုန်တိုင်းရှိငှားရန် ဆိုင်ခန်း၊ ရုံးခန်းများ" : "Shops, Offices for Rent in Yangon";
                    ?>
                </a>
            </li> 
            <li>
                <a href="<?php echo site_url('propertylist/find_property?keyword=&propertie_type=for_sale&region_id=&property_type_id=4&price_from=&price_to='); ?>" class="text-white" style="font-size: 13px;">
                    <?php 
                        echo ($lang_session) ? "မြန်မာပြည်ရှိရောင်းရန် မြေကွက်များ" : "Lands For Sale in Myanmar";
                    ?>
                </a>
            </li> 
        </ul> 
    </div> 
</div>