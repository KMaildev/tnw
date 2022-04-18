<?php 
    $lang_session = $this->session->userdata('lang'); 
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/update/w3.css">
<style>
    .btn_active {
        background-color: green;
        color: white;
    }

    .active, .btn_active:hover {
        background-color: #f08e33;
        color: white;
    }


    .suggests[type=text] {
        width: 100%;
        padding: 10px 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid green;
    }

    /*range*/
    .range-wrap {
        position: relative;
        margin: 0 auto 3rem;
    }
    .range {
        width: 100%;
    }
    .bubble {
        background: red;
        color: white;
        padding: 4px 12px;
        position: absolute;
        border-radius: 4px;
        left: 50%;
        transform: translateX(-50%);
    }
    .bubble::after {
        content: "";
        position: absolute;
        width: 2px;
        height: 2px;
        background: red;
        top: -1px;
        left: 50%;
    }
</style>

<div class="w3-container">
    <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container" style="background-color: #af742e;"> 
                <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-blue w3-xlarge w3-display-topright">
                    &times;
                </span>
                <h3 style="color: white;">
                    Check your home buying budget
                </h3>
            </header>


                <div class="w3-bar w3-border-bottom">

                    <button class="tablink w3-bar-item w3-button" onclick="openPropertyType(event, 'TypeOne')" value="for_sale">
                        Sale
                    </button>

                    <button class="tablink w3-bar-item w3-button" onclick="openPropertyType(event, 'TypeTwo')" value="for_rent">
                        Rent/ Lease
                    </button>

                    <button class="tablink w3-bar-item w3-button" onclick="openPropertyType(event, 'Type')" value="new_properties">
                        New Properties
                    </button>

                </div>

                <div id="TypeOne" class="w3-container type_section">
                    <form action="<?php echo site_url('category/advance_search'); ?>" method="GET">

                        <input type="hidden" name="propertie_type" value="for_sale" id="PropertyType">

                        <div class="col-lg-12 col-sm-12 mb-3 py-5">
                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="range-wrap">
                                                <input type="range" class="range" min="100" max="900" step="100">
                                                <br>
                                                <output class="bubble"></output>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="range-wrap">
                                                <input type="range" class="range" min="1000" max="50000" step="100">
                                                <br>
                                                <output class="bubble"></output>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">

                                    <a class="linktab w3-bar-item w3-button" onclick="openProperty(event, 'propertyType')">
                                        Property Type
                                    </a>

                                    <a class="linktab  w3-bar-item w3-button" onclick="openProperty(event, 'Price')">
                                        Price
                                    </a>

                                    <a class="linktab w3-bar-item w3-button" onclick="openProperty(event, 'PostBy')">
                                        Post By
                                    </a>


                                    <div id="propertyType" class="w3-container propertyType">
                                        <div class="col-lg-8 col-md-8 col-sm-12 mb-2 py-2">
                                            <div class="at-col-default-mar selectBox">
                                                <select class="div-toggle" data-target=".my-info-1" name="property_type_id" style="color: black;">
                                                   <?php 
                                                        foreach ($data_property_types as $data_property_type) {
                                                     ?>
                                                    <option value="<?php echo $data_property_type->property_type_id; ?>">
                                                        <?php 
                                                            if ($lang_session) {
                                                                echo $data_property_type->property_type_mm;
                                                            }else{
                                                                echo $data_property_type->property_type;
                                                            }
                                                        ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="Price" class="w3-container propertyType">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-12 mb-2 py-2">
                                                
                                                <div class="extra-controls form-inline">
                                              <div class="form-group">
                                                <input type="text" class="js-input-from form-control" value="0" />
                                                <input type="text" class="js-input-to form-control" value="0" />
                                            </div>
                                              </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="PostBy" class="w3-container propertyType">
                                        Three
                                    </div>

                                </div>
                                

                                <div class="col-md-6">
                                    <div class="agent-contact-form-sidebar ">
                                        <span>Where?</span>
                                        <div class="input-group mb-3">

                                            <input type="text" list="region_suggests" class="suggests form-control" placeholder="City Name" autocomplete="off" id="RegionId">

                                            <input type="hidden" id="selectedRegion" name="region_id" value="1" />

                                            <div class="input-group-append">
                                                <button type="submit" class="tablink w3-bar-item w3-button" style="padding: 10px 10px; margin: 8px 0; background-color: #af742e; color: white;">
                                                    &nbsp;&nbsp; Search &nbsp;&nbsp;
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <datalist id="region_suggests">
                                            <?php 
                                                foreach ($data_regions as $key => $value) {
                                            ?>
                                                <option data-id="<?php echo $value->region_id; ?>" value="<?php echo $value->region; ?>">
                                            <?php } ?>
                                        </datalist>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <div id="TypeTwo" class="w3-container type_section">
                    
                </div>

           

        </div>
    </div>
</div>

<script>
    document.getElementsByClassName("tablink")[0].click();
    function openPropertyType(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("type_section");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].classList.remove("w3-light-grey");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.classList.add("w3-light-grey");
    }
</script>
<script type="text/javascript">
    document.getElementsByClassName("linktab")[0].click();
    function openProperty(evt, nameCity) {
        var i, x, tablinks;
        x = document.getElementsByClassName("propertyType");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("linktab");
        for (i = 0; i < x.length; i++) {
            tablinks[i].classList.remove("w3-light-grey");
        }
        document.getElementById(nameCity).style.display = "block";
        evt.currentTarget.classList.add("w3-light-grey");
    }
</script>