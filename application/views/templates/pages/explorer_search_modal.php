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
</style>

<div class="w3-container">
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <header class="w3-container" style="background-color: #af742e;"> 
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-blue w3-xlarge w3-display-topright">
                    &times;
                </span>
                <h3 style="color: white;">
                    Explore real estate in...
                </h3>
            </header>


                <div class="w3-bar w3-border-bottom">

                    <button class="tablink SearchType w3-bar-item w3-button" onclick="openCity(event, 'Sale')" value="for_sale">
                        Sale
                    </button>

                    <button class="tablink SearchType w3-bar-item w3-button" onclick="openCity(event, 'Sale')" value="for_rent">
                        Rent/ Lease
                    </button>

                    <button class="tablink SearchType w3-bar-item w3-button" onclick="openCity(event, 'Sale')" value="new_properties">
                        New Properties
                    </button>

                </div>

                <div id="Sale" class="w3-container city">
                    <form action="<?php echo site_url('propertylist/index'); ?>" method="GET">

                        <input type="hidden" name="propertie_type" value="for_sale" id="PropertyType">

                        <div class="col-lg-12 col-sm-12 mb-3 py-2">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="alert alert-dismissible" id="BackgroundColor" style="background-color: #f4d2d3">
                                        <span id="Title">
                                            For Sale
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-12" id="myDIV">
                                    <input type="button" class="btn PropertyTypeId btn_active active btn-sm mb-2" value="Apartment" id="1">
                                    <input type="button" class="btn PropertyTypeId btn_active btn-sm mb-2" value="Condo" id="2">
                                    <input type="button" class="btn PropertyTypeId btn_active btn-sm mb-2" value="House" id="3">
                                    <input type="button" class="btn PropertyTypeId btn_active btn-sm mb-2" value="Land" id="4">
                                    <input type="button" class="btn PropertyTypeId btn_active btn-sm mb-2" value="Industrial Zone" id="7">

                                    <input type="hidden" name="property_type_id" id="PropertyTypeId" value="1">
                                </div>

                                <div class="col-md-8">
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



                <div id="Rent" class="w3-container city">
                </div>


                <div id="NewProperties" class="w3-container city">
                    
                </div>

                <div class="w3-container w3-light-grey w3-padding">
                    <button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id01').style.display='none'">Close</button>
                </div>

        </div>
    </div>
</div>

<script>
    document.getElementsByClassName("tablink")[0].click();
    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
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
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn_active");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>


