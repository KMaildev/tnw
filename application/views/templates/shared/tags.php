<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<h5 class="font-weight-bold mb-4">
    <?php 
        if ($lang_session) {
            echo "အိမ်ခြံမြေအမျိုးအစား";
        }else{
            echo "Property Type";
        }
     ?>
</h5>
<?php 
    $propertie_type = $this->input->get('propertie_type');

    
    if (isset($main_title)) {
        $$main_title = $main_title;
    }else{
        $main_title = 'for_sale';
    }
    $propertie_type = $main_title or $main_title;
    foreach ($data_property_types as $data_property_type) {
 ?>
    <form action="<?php echo site_url('propertylist/index'); ?>" method="GET">
        <input type="hidden" name="propertie_type" value="<?php echo $propertie_type; ?>">
        <input type="hidden" name="property_type_id" value="<?php echo $data_property_type->property_type_id; ?>">
        <button type="submit" class="btn btn-default  m-1 btn-block text-left" tyle="background-color: #c77b22; color: white;">
            <?php 
                if ($lang_session) {
                    echo "<span style='color: black;'><i class='fa fa-building'></i> ".$data_property_type->property_type_mm."</span>";
                }else{
                    echo "<span style='color: black;'><i class='fa fa-building'></i> ".$data_property_type->property_type."</span>";
                }
            ?>
        </button>
    </form>
<?php } ?>

