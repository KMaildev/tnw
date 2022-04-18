<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<div class="block-heading">
    <div class="row">
        <div class="col-lg-6 col-md-5 col-2">
            <h4>
            <span class="heading-icon">
                <i class="fa fa-laptop-house"></i>
                </span>
                <span class="hidden-sm-down">
                    <?php 
                        if ($main_title == 'for_sale') {
                            echo ($lang_session) ? "ရောင်းရန်အိမ်ခြံမြေများ" : "For Sale Properties";
                        }elseif ($main_title == 'for_rent') {
                            echo ($lang_session) ? "ငှားရန်အိမ်ခြံမြေများ" : "For Rent Properties";
                        }elseif ($main_title == 'new_properties') {
                            echo ($lang_session) ? "အိမ်ခြံမြေကြိုပွိုင့်များ" : "New Properties";
                        }elseif ($main_title == 'by_owner_for_sale') {
                            echo ($lang_session) ? "ပိုင်ရှင်ကိုယ်တိုင် ရောင်းမည်" : "By Owner For Sale";
                        }elseif ($main_title == 'by_owner_for_rent') {
                            echo ($lang_session) ? "ပိုင်ရှင်ကိုယ်တိုင် ငှားမည်" : "By Owner For Rent";
                        }else{
                            echo $main_title;
                        }


                        $propertie_type = $this->input->get('propertie_type');
                        if($propertie_type == NULL){
                            $propertie_type = $main_title;
                        }elseif ($propertie_type) {
                            $propertie_type = $this->input->get('propertie_type');
                        }else{
                            $propertie_type = 'for_sale';
                        }                 
                    ?>
                </span>
            </h4>
        </div>
        <div class="col-lg-6 col-md-7 col-10 cod-pad float-right float-sm-left">
            <form action="<?php echo site_url('propertylist/index'); ?>" method="GET">

                <input type="hidden" name="keyword" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>">

                <input type="hidden" name="propertie_type" value="<?php echo $propertie_type; ?>">

                <input type="hidden" name="region_id" value="<?php if ($this->input->get('region_id')) { echo $this->input->get('region_id'); } ?>">

                <input type="hidden" name="property_type_id" value="<?php if ($this->input->get('property_type_id')) { echo $this->input->get('property_type_id'); } ?>">

                <input type="hidden" name="price_from" value="<?php if ($this->input->get('price_from')) { echo $this->input->get('price_from'); } ?>">

                <input type="hidden" name="price_to" value="<?php if ($this->input->get('price_to')) { echo $this->input->get('price_to'); } ?>">

                
                <input type="hidden" name="township_id" value="<?php if ($this->input->get('township_id')) { echo $this->input->get('township_id'); } ?>">

                <div class="sorting-options">
                    <strong>
                        Sort By:
                    </strong>
                    <select class="sorting float-right" onchange="this.form.submit()" style="text-align: right;" name="reorder">

                        <option value="default">
                            Default
                        </option>

                        <option value="low_to_hight">
                            Price: Low To High
                        </option>

                        <option value="hight_to_low">
                            Price: High to low
                        </option>

                        <option value="old_to_new">
                            Old To New
                        </option>

                        <option value="new_to_old">
                            New To Old
                        </option>

                    </select>
                </div>
            </form>
        </div>
    </div>
</div>