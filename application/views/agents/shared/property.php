<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">

            <button type="button" class="btn position-relative nav-link active" data-toggle="tab" href="#for_sale" role="tab" style="background-color: #418107; color: white;">
                <i class="fa fa-building"></i>
                <?php 
                    if ($lang_session) {
                        echo "အရောင်းကြော်ငြာများ";
                    }else{
                        echo "For Sale";
                    }
                ?>
            </button>

        </li>
        <li class="nav-item">
            <button type="button" class="btn position-relative nav-link" data-toggle="tab" href="#for_rent" role="tab" style="background-color: #a940aa; color: white;">
                <i class="fa fa-laptop-house"></i>
                <?php 
                    if ($lang_session) {
                        echo "အငှါးကြော်ငြာများ";
                    }else{
                        echo "For Rent";
                    }
                ?>
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="btn position-relative nav-link" data-toggle="tab" href="#new_properties" role="tab" style="background-color: #2046ef; color: white;">
                <i class="fa fa-house-user"></i>
                <?php 
                    if ($lang_session) {
                        echo "ကြိုပွိုင့်ကြော်ငြာများ";
                    }else{
                        echo "New Property";
                    }
                ?>
            </button>
        </li>
    </ul>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="tab-content">

        <div class="tab-pane active" id="for_sale" role="tabpanel">
            <p class="py-2" style="text-align: right; font-weight: bold;">Total Sale Property : <?php echo $total_sale; ?></p>


            <?php $this->load->view('agents/shared/property_list/for_sale'); ?>


        </div>

        <div class="tab-pane" id="for_rent" role="tabpanel">
            <p class="py-2" style="text-align: right; font-weight: bold;">Total Rent Property : <?php echo $total_rent; ?></p>

            <?php $this->load->view('agents/shared/property_list/for_rent'); ?>
            

        </div>

        <div class="tab-pane" id="new_properties" role="tabpanel">
            <p class="py-2" style="text-align: right; font-weight: bold;">Total New Property : <?php echo $total_new_properties; ?></p>
            <?php $this->load->view('agents/shared/property_list/new_property'); ?>

        </div>
        
    </div>
</div>