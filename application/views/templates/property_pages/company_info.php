<div class="widget-boxed">
    <div class="widget-boxed-body">
        <div class="sidebar-widget author-widget2">

            <div class="center">
                <div class="panel panel-default b-rad-0 clearfix lh-2 padding-10 no-margin" style="text-align: center;">

                    <?php
                    if ($data_detail->upload_type == 'Admin' || $data_detail->upload_type == NULL) {
                    ?>
                        <img data-src="<?php echo base_url(); ?>uploads/<?php echo $tatnaywon->logo; ?>" alt="<?php echo $tatnaywon->company_name; ?>" title="<?php echo $tatnaywon->company_name; ?>" border="0" class="logo-shadow center-block img-thumbnail lazy-img loaded" src="<?php echo base_url(); ?>uploads/<?php echo $tatnaywon->logo; ?>" data-was-processed="true" style="width: 50%;">
                    <?php } elseif ($data_detail->upload_type == 'For_Agent') { ?>
                        <?php
                        if ($data_detail->agent_owner_logo) {
                        ?>
                            <img data-src="<?php echo (base_url()); ?>/uploads/<?php echo $data_detail->agent_owner_logo; ?>" alt="Logo" title="" border="0" class="logo-shadow center-block img-thumbnail lazy-img loaded" src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->agent_owner_logo; ?>" data-was-processed="true" style="width: 50%;">
                        <?php } elseif ($data_detail->logo) { ?>
                            <img data-src="<?php echo (base_url()); ?>/uploads/<?php echo $data_detail->logo; ?>" alt="Logo" title="" border="0" class="logo-shadow center-block img-thumbnail lazy-img loaded" src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->logo; ?>" data-was-processed="true" style="width: 50%;">
                        <?php } ?>
                    <?php } elseif ($data_detail->upload_type == 'For_Owner') { ?>
                        <?php
                        if ($data_detail->agent_owner_logo) {
                        ?>
                            <img data-src="<?php echo (base_url()); ?>/uploads/<?php echo $data_detail->agent_owner_logo; ?>" alt="Logo" title="" border="0" class="logo-shadow center-block img-thumbnail lazy-img loaded" src="<?php echo base_url(); ?>uploads/<?php echo $data_detail->agent_owner_logo; ?>" data-was-processed="true" style="width: 50%;">
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <ul class="author__contact">
                <!-- Company Name -->
                <h4 class="author__title" style="text-align: center;">
                    <?php
                    if ($data_detail->user_info_id == 0 and $data_detail->upload_type == 'Admin' || $data_detail->upload_type == NULL) {
                        echo $tatnaywon->company_name;
                    } elseif ($data_detail->user_info_id == 0 and $data_detail->upload_type == 'For_Agent' || $data_detail->upload_type == 'For_Owner') {
                        echo $data_detail->user_contact_name;
                    } elseif ($data_detail->user_info_id != 0) {
                        echo $data_detail->company_name;
                    }
                    ?>
                </h4>

                <div class="text-left word-break ov-hidden">

                    <?php
                    if ($data_detail->user_info_id == 0 and $data_detail->upload_type == 'Admin' || $data_detail->upload_type == NULL) {
                        echo '<strong>Address : </strong><br>';
                        echo $tatnaywon->address;
                    } elseif ($data_detail->user_info_id == 0 and $data_detail->upload_type == 'For_Agent' || $data_detail->upload_type == 'For_Owner') {
                        if ($data_detail->user_address != NULL) {
                            echo '<strong>Address : </strong><br>';
                            echo $data_detail->user_address;
                        }
                    } elseif ($data_detail->user_info_id != 0) {
                        if ($data_detail->address != NULL) {
                            echo '<strong>Address : </strong><br>';
                            echo $data_detail->address;
                        }
                    }
                    ?>
                </div>

                <div class="text-left py-2">
                    <i class="fa fa-phone-square-alt text-orange"></i>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalTatnayWon" style="color: black;">
                        &nbsp;To view contact number
                    </a>
                </div>

                <div class="text-left py-2" hidden>
                    <?php
                    if ($data_detail->user_info_id == 0 and $data_detail->upload_type == 'Admin' || $data_detail->upload_type == NULL) {
                        echo '<i class="fa fa-mail-bulk text-orange"></i> ';
                        echo $tatnaywon->email;
                    } elseif ($data_detail->user_info_id == 0 and $data_detail->upload_type == 'For_Agent' || $data_detail->upload_type == 'For_Owner') {
                    } elseif ($data_detail->user_info_id != 0) {
                        echo '<i class="fa fa-mail-bulk text-orange"></i> ';
                        echo $data_detail->email;
                    }
                    ?>
                </div>
            </ul>
        </div>
    </div>
</div>