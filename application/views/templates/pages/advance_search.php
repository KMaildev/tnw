<?php
$lang_session = $this->session->userdata('lang');
?>

<section id="hero-area" class="parallax-searchs home17 overlay main-search-field" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="background-color: black; padding: 50px; opacity: 0.8;">
                    <form action="<?php echo site_url('propertylist/index'); ?>" method="GET">
                        <div class="row">
                            <div class="col-sm-12 col-md-9 col-lg-9 mb-2">
                                <h2>
                                    <?php
                                    echo ($lang_session) ? "<span style='font-size: 28px;'>ရောင်းရန်၊ငှားရန်နှင့်ဝယ်ရန်ရှိသော အိမ်ခြံမြေများ</span>" : "<span style='font-size: 18px;'><b>Let's search to sell, buy, rent the property that's perfect for you.</b></span>";
                                    ?>
                                </h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="at-col-default-mar">
                                    <input class="at-input" type="text" name="keyword" placeholder="<?php echo ($lang_session) ? "ကြော်ငြာနံပါတ်" : "Search by AD Number"; ?>" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select name="propertie_type" style="color: black;">
                                        <option value="for_sale" selected>
                                            <?php
                                            if ($lang_session) {
                                                echo "ရောင်းရန်";
                                            } else {
                                                echo "For Sale";
                                            }
                                            ?>
                                        </option>
                                        <option value="for_rent">
                                            <?php
                                            if ($lang_session) {
                                                echo "ငှားရန်";
                                            } else {
                                                echo "For Rent";
                                            }
                                            ?>
                                        </option>
                                        <option value="new_properties">
                                            <?php
                                            if ($lang_session) {
                                                echo "ကြိုပွိုင့်";
                                            } else {
                                                echo "New Properties";
                                            }
                                            ?>
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select class="div-toggle" data-target=".my-info-1" id="Region" name="region_id" style="color: black;">
                                        <option value="" data-show=".acitveon" selected>
                                            <?php
                                            if ($lang_session) {
                                                echo "ဒေသအားလုံး";
                                            } else {
                                                echo "All Regions";
                                            }
                                            ?>
                                        </option>
                                        <?php
                                        foreach ($data_regions as $data_region) {
                                        ?>
                                            <option value="<?php echo $data_region->region_id; ?>" data-show=".rent">
                                                <?php
                                                if ($lang_session) {
                                                    echo $data_region->region_mm;
                                                } else {
                                                    echo $data_region->region;
                                                }
                                                ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox" id="TownshipData">
                                    <select class="div-toggle" data-target=".my-info-1" style="color: black;">
                                        <option value="" data-show=".acitveon" selected>
                                            <?php
                                            if ($lang_session) {
                                                echo "မြို့နယ်အားလုံး";
                                            } else {
                                                echo "Any Township";
                                            }
                                            ?>
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select class="div-toggle" data-target=".my-info-1" name="property_type_id" style="color: black;">
                                        <option value="">
                                            <?php
                                            if ($lang_session) {
                                                echo "အမျိုးအစားအားလုံး";
                                            } else {
                                                echo "All Types";
                                            }
                                            ?>
                                        </option>
                                        <?php
                                        foreach ($data_property_types as $data_property_type) {
                                        ?>
                                            <option value="<?php echo $data_property_type->property_type_id; ?>">
                                                <?php
                                                if ($lang_session) {
                                                    echo $data_property_type->property_type_mm;
                                                } else {
                                                    echo $data_property_type->property_type;
                                                }
                                                ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select name="price_from" style="color: black;">
                                        <option value="" selected>
                                            <?php
                                            if ($lang_session) {
                                                echo "ဈေးနှုန်း (သိန်း)";
                                            } else {
                                                echo "Price Min";
                                            }
                                            ?>
                                        </option>
                                        <option value="100">
                                            <?php
                                            if ($lang_session) {
                                                echo "100 (သိန်း)";
                                            } else {
                                                echo "100 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="200">
                                            <?php
                                            if ($lang_session) {
                                                echo "200 (သိန်း)";
                                            } else {
                                                echo "200 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="300">
                                            <?php
                                            if ($lang_session) {
                                                echo "300 (သိန်း)";
                                            } else {
                                                echo "300 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="400">
                                            <?php
                                            if ($lang_session) {
                                                echo "400 (သိန်း)";
                                            } else {
                                                echo "400 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="500">
                                            <?php
                                            if ($lang_session) {
                                                echo "500 (သိန်း)";
                                            } else {
                                                echo "500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="600">
                                            <?php
                                            if ($lang_session) {
                                                echo "600 (သိန်း)";
                                            } else {
                                                echo "600 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="700">
                                            <?php
                                            if ($lang_session) {
                                                echo "700 (သိန်း)";
                                            } else {
                                                echo "700 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="800">
                                            <?php
                                            if ($lang_session) {
                                                echo "800 (သိန်း)";
                                            } else {
                                                echo "800 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="900">
                                            <?php
                                            if ($lang_session) {
                                                echo "900 (သိန်း)";
                                            } else {
                                                echo "900 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="1000">
                                            <?php
                                            if ($lang_session) {
                                                echo "1000 (သိန်း)";
                                            } else {
                                                echo "1000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="1500">
                                            <?php
                                            if ($lang_session) {
                                                echo "1500 (သိန်း)";
                                            } else {
                                                echo "1500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="2000">
                                            <?php
                                            if ($lang_session) {
                                                echo "2000 (သိန်း)";
                                            } else {
                                                echo "2000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="2500">
                                            <?php
                                            if ($lang_session) {
                                                echo "2500 (သိန်း)";
                                            } else {
                                                echo "2500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="3000">
                                            <?php
                                            if ($lang_session) {
                                                echo "3000 (သိန်း)";
                                            } else {
                                                echo "3000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="3500">
                                            <?php
                                            if ($lang_session) {
                                                echo "3500 (သိန်း)";
                                            } else {
                                                echo "3500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="4000">
                                            <?php
                                            if ($lang_session) {
                                                echo "4000 (သိန်း)";
                                            } else {
                                                echo "4000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="4500">
                                            <?php
                                            if ($lang_session) {
                                                echo "4500 (သိန်း)";
                                            } else {
                                                echo "4500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="5000">
                                            <?php
                                            if ($lang_session) {
                                                echo "5000 (သိန်း)";
                                            } else {
                                                echo "5000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="6000">
                                            <?php
                                            if ($lang_session) {
                                                echo "6000 (သိန်း)";
                                            } else {
                                                echo "6000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="7000">
                                            <?php
                                            if ($lang_session) {
                                                echo "7000 (သိန်း)";
                                            } else {
                                                echo "7000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="8000">
                                            <?php
                                            if ($lang_session) {
                                                echo "8000 (သိန်း)";
                                            } else {
                                                echo "8000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="9000">
                                            <?php
                                            if ($lang_session) {
                                                echo "9000 (သိန်း)";
                                            } else {
                                                echo "9000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="10000">
                                            <?php
                                            if ($lang_session) {
                                                echo "10000 (သိန်း)";
                                            } else {
                                                echo "10000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="15000">
                                            <?php
                                            if ($lang_session) {
                                                echo "15000 (သိန်း)";
                                            } else {
                                                echo "15000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="30000">
                                            <?php
                                            if ($lang_session) {
                                                echo "30000 (သိန်း)";
                                            } else {
                                                echo "30000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="500000">
                                            <?php
                                            if ($lang_session) {
                                                echo "500000 (သိန်း)";
                                            } else {
                                                echo "500000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 mb-2">
                                <div class="at-col-default-mar selectBox">
                                    <select name="price_to" style="color: black;">
                                        <option value="" selected>
                                            <?php
                                            if ($lang_session) {
                                                echo "ဈေးနှုန်း (အတွင်း)";
                                            } else {
                                                echo "Price Max";
                                            }
                                            ?>
                                        </option>
                                        <option value="100">
                                            <?php
                                            if ($lang_session) {
                                                echo "100 (သိန်း)";
                                            } else {
                                                echo "100 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="200">
                                            <?php
                                            if ($lang_session) {
                                                echo "200 (သိန်း)";
                                            } else {
                                                echo "200 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="300">
                                            <?php
                                            if ($lang_session) {
                                                echo "300 (သိန်း)";
                                            } else {
                                                echo "300 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="400">
                                            <?php
                                            if ($lang_session) {
                                                echo "400 (သိန်း)";
                                            } else {
                                                echo "400 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="500">
                                            <?php
                                            if ($lang_session) {
                                                echo "500 (သိန်း)";
                                            } else {
                                                echo "500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="600">
                                            <?php
                                            if ($lang_session) {
                                                echo "600 (သိန်း)";
                                            } else {
                                                echo "600 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="700">
                                            <?php
                                            if ($lang_session) {
                                                echo "700 (သိန်း)";
                                            } else {
                                                echo "700 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="800">
                                            <?php
                                            if ($lang_session) {
                                                echo "800 (သိန်း)";
                                            } else {
                                                echo "800 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="900">
                                            <?php
                                            if ($lang_session) {
                                                echo "900 (သိန်း)";
                                            } else {
                                                echo "900 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="1000">
                                            <?php
                                            if ($lang_session) {
                                                echo "1000 (သိန်း)";
                                            } else {
                                                echo "1000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="1500">
                                            <?php
                                            if ($lang_session) {
                                                echo "1500 (သိန်း)";
                                            } else {
                                                echo "1500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="2000">
                                            <?php
                                            if ($lang_session) {
                                                echo "2000 (သိန်း)";
                                            } else {
                                                echo "2000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="2500">
                                            <?php
                                            if ($lang_session) {
                                                echo "2500 (သိန်း)";
                                            } else {
                                                echo "2500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="3000">
                                            <?php
                                            if ($lang_session) {
                                                echo "3000 (သိန်း)";
                                            } else {
                                                echo "3000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="3500">
                                            <?php
                                            if ($lang_session) {
                                                echo "3500 (သိန်း)";
                                            } else {
                                                echo "3500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="4000">
                                            <?php
                                            if ($lang_session) {
                                                echo "4000 (သိန်း)";
                                            } else {
                                                echo "4000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="4500">
                                            <?php
                                            if ($lang_session) {
                                                echo "4500 (သိန်း)";
                                            } else {
                                                echo "4500 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="5000">
                                            <?php
                                            if ($lang_session) {
                                                echo "5000 (သိန်း)";
                                            } else {
                                                echo "5000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="6000">
                                            <?php
                                            if ($lang_session) {
                                                echo "6000 (သိန်း)";
                                            } else {
                                                echo "6000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="7000">
                                            <?php
                                            if ($lang_session) {
                                                echo "7000 (သိန်း)";
                                            } else {
                                                echo "7000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="8000">
                                            <?php
                                            if ($lang_session) {
                                                echo "8000 (သိန်း)";
                                            } else {
                                                echo "8000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="9000">
                                            <?php
                                            if ($lang_session) {
                                                echo "9000 (သိန်း)";
                                            } else {
                                                echo "9000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="10000">
                                            <?php
                                            if ($lang_session) {
                                                echo "10000 (သိန်း)";
                                            } else {
                                                echo "10000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="15000">
                                            <?php
                                            if ($lang_session) {
                                                echo "15000 (သိန်း)";
                                            } else {
                                                echo "15000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="30000">
                                            <?php
                                            if ($lang_session) {
                                                echo "30000 (သိန်း)";
                                            } else {
                                                echo "30000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                        <option value="500000">
                                            <?php
                                            if ($lang_session) {
                                                echo "500000 (သိန်း)";
                                            } else {
                                                echo "500000 (Lakh)";
                                            }
                                            ?>
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="at-col-default-mar">
                                    <button class="btn btn-default hvr-bounce-to-right" type="submit">
                                        <i class="fa fa-search"></i>
                                        <?php
                                        if ($lang_session) {
                                            echo "<span style='font-size: 17px; font-weight: bold;'>ရှာဖွေပါ</span>";
                                        } else {
                                            echo "Search";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <?php $this->load->view('templates/shared/search_by_category'); ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>