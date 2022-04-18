<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>

 <?php 
    if ($detail) {
 ?>
<section class="blog blog-section portfolio  details mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9  col-sm-12 col-xs-9">
                <br><br>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item news-item-sm">
                            <a href="" class="news-img-link">
                                <div class="">
                                    <center>
                                        <?php 
                                            if ($detail->logo == '') {
                                         ?>
                                            <img src="<?php echo base_url(); ?>data/default/logo_not_found.png"  class="img-responsive" style="width: 150px!important; height: auto;">
                                        <?php }else{ ?>
                                            <img src="<?php echo base_url(); ?>uploads/<?php echo $detail->logo; ?>" alt="home-1" class="img-responsive w-150" style="width: 190px!important; padding-top: 6px;">
                                        <?php } ?>
                                    </center>
                                </div>
                            </a>
                            <div class="news-item-text">
                                <h3>
                                    <?php 
                                        if ($detail->company_name == '') {
                                            echo "-";
                                        }else{
                                            echo $detail->company_name;
                                        }
                                     ?>
                                </h3>
                                <div class="the-agents">
                                    <ul class="the-agents-details">
                                        <li>
                                        	<i class="fa fa-phone-volume" style="color: #ad6713; font-size: 20px;"></i> 
                                        	<a href="#"> 
                                        		<?php 
                                                    if ($detail->phone == '') {
                                                        echo "No Phone Number";
                                                    }else{
                                                        echo $detail->phone;
                                                    }
                                                 ?>
                                        	</a>
                                        </li>
                                        <li>
                                        	<i class="fa fa-envelope-square" style="color: #ad6713; font-size: 20px;"></i>
                                        	<a href="#"> 
                                                <?php 
                                                    if ($detail->email == '') {
                                                        echo "No Email";
                                                    }else{
                                                        echo $detail->email;
                                                    }
                                                 ?>
                                            </a>
                                        </li>
                                        <li>
                                        	<i class="fa fa-map" style="color: #ad6713; font-size: 19px;"></i>
                                        	<a href="#"> 
                                                <?php 
                                                    if ($detail->address == '') {
                                                        echo "No address";
                                                    }else{
                                                        echo $detail->address;
                                                    }
                                                 ?>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fa fa-info-circle" style="color: #ad6713; font-size: 19px;"></i>
                                            <a href="#"> <?php echo $detail->company_type; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span style="font-size: 15px;">
                            <?php echo $detail->description; ?>
                        </span>
                        <hr>
                        <span style="font-weight: bold;">
                            <?php echo $detail->company_name; ?> မှ ရောင်းရန် ငှားရန် အိမ်ခြံမြေများ
                        </span>
                    </div>
                </div>
		        <section class="counterup">
		            <div class="container">
		                <div class="row">
		                    <div class="col-lg-4 col-md-4 col-xs-12">
		                        <div class="countr">
		                            <i class="fa fa-building" aria-hidden="true"></i>
		                            <div class="count-me">
		                                <p class="counter text-left"><?php echo $total_sale; ?></p>
		                                <h3>Total sale ads</h3>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-4 col-md-4 col-xs-12">
		                        <div class="countr">
		                            <i class="fa fa-building" aria-hidden="true"></i>
		                            <div class="count-me">
		                                <p class="counter text-left"><?php echo $total_rent; ?></p>
		                                <h3>Total rent ads</h3>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-4 col-md-4 col-xs-12">
		                        <div class="countr mb-0">
		                            <i class="fa fa-calculator" aria-hidden="true"></i>
		                            <div class="count-me">
		                                <p class="counter text-left"><?php echo $total_new_properties; ?></p>
		                                <h3>New Properties</h3>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </section>
		        
            </div>

            <aside class="col-lg-3 col-md-3 col-sm-12 car py-2">
                <div class="single widget">
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4>
                                    <?php 
                                        if ($lang_session) {
                                            echo "ဆက်သွယ်မေးမြန်းရန်";
                                        }else{
                                            echo "Request Inquiry";
                                        }
                                     ?>
                                </h4>
                            </div>
                            <div class="widget-boxed-">
                                <div class="agent-contact-form-sidebar">
                                    <?php $this->load->view('templates/shared/alert_message'); ?>
                                    <form  method="post" action="<?php echo site_url('requestinquiry/data_save'); ?>">
                                        <input type="hidden" name="company_user_id" value="<?php echo $detail->user_id; ?>">
                                        <input type="text" id="fname" name="name" placeholder="Full Name" autocomplete="off" required="" />
                                        <input type="text" id="pnumber" name="phone" placeholder="Phone Number" autocomplete="off" required="" min="0" />
                                        <input type="email" id="emailid" name="email" placeholder="Email Address" autocomplete="off" required="" />
                                        <input type="text" id="emailid" name="subject" placeholder="Subject" autocomplete="off" required="" />
                                        <textarea placeholder="Message" name="message"  autocomplete="off"></textarea>
                                        <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit" />
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="main-search-field-2">
                            <div class="recent-post py-5">
                                <?php $this->load->view('templates/tags'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

        <section class="similar-property recently portfolio bshd p-0 bg-white-inner">
            <br>
            <div class="container">
                <h5>
                    <?php 
                        if ($lang_session) {
                            echo "ရောင်းရန် အိမ်ခြံမြေများ";
                        }else{
                            echo "For sale properties";
                        }
                     ?>
                </h5>
                <div class="col-md-12">
                    <?php 
                        if ($recent_for_sales == NULL) {
                            echo "<b><i>Total Sale Ads : 0</i></b>";
                        }
                    ?>
                </div>
                <div class="row portfolio-items">
                    <?php 
                        
                        foreach ($recent_for_sales as $propertie ) {
                            if ($lang_session) {
                     ?>
                           <div class="item col-lg-4 col-md-6 col-xs-12 landscapes py-3">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4>
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                                <span class="category">Tat Nay Won</span>
                                            </h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    <?php 
                                                        if ($propertie->propertie_type == 'for_sale') {
                                                            echo "ရောင်းရန်";
                                                        }elseif ($propertie->propertie_type == 'for_rent') {
                                                            echo "ငှားရန်";
                                                        }elseif ($propertie->propertie_type == 'new_properties') {
                                                            echo "အိမ်ခြံမြေအသစ်";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                            echo "ပိုင်ရှင်ကိုယ်တိုင်ရောင်းမည်";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                            echo "ပိုင်ရှင်ကိုယ်တိုင်ငှားမည်";
                                                        }else{
                                                            echo "Tat Nay Won";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="homes-price">
                                                    <?php echo $propertie->property_type_mm; ?>
                                                </div>
                                                <?php if ($propertie->photo == '') { ?>
                                                    <?php 
                                                        if ($propertie->user_info_id == 0) {
                                                     ?>
                                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo(base_url()); ?>/data/logo404.png" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php } ?>
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <small><?php echo $propertie->title_mm; ?></small>
                                        </a>
                                        <p class="homes-address mb-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <span>
                                                    <?php echo $propertie->region_mm; ?>
                                                    |
                                                    <?php echo $propertie->townships_mm; ?>
                                                </span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                           <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                            </li>
                                            
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                    <?php 
                                                        if ($propertie->price_type == 'MMK(Lakhs)') {
                                                            echo number_format($propertie->price);
                                                            echo " သိန်း (ကျပ်)";
                                                        }elseif ($propertie->price_type == 'USD') {
                                                            echo number_format($propertie->price);
                                                            echo " ";
                                                            echo $propertie->price_type;
                                                        }
                                                     ?>
                                                </a>
                                            </h3>
                                            <div class="compare">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">

                                           <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> View Detail </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes py-3">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4>
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                                <span class="category">Tat Nay Won</span>
                                            </h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    <?php 
                                                        if ($propertie->propertie_type == 'for_sale') {
                                                            echo "For Sale";
                                                        }elseif ($propertie->propertie_type == 'for_rent') {
                                                            echo "For Rent";
                                                        }elseif ($propertie->propertie_type == 'new_properties') {
                                                            echo "New Properties";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                            echo "By Owner For  Sale";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                            echo "By Owner For  Rent";
                                                        }else{
                                                            echo "Tat Nay Won";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="homes-price">
                                                    <?php echo $propertie->property_type; ?>
                                                </div>
                                                <?php if ($propertie->photo == '') { ?>
                                                    <?php 
                                                        if ($propertie->user_info_id == 0) {
                                                     ?>
                                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo(base_url()); ?>/data/logo404.png" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php } ?>
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>"><?php echo $propertie->title_eng; ?></a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <span>
                                                    <?php echo $propertie->region; ?>
                                                    |
                                                    <?php echo $propertie->townships; ?>
                                                </span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                           <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                            </li>
                                            
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                    <?php echo number_format($propertie->price); ?>
                                                    <?php echo $propertie->price_type; ?>
                                                </a>
                                            </h3>
                                            <div class="compare">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">

                                           <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> View Detail </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-5">
            <div class="container">
                <h5>
                    <?php 
                        if ($lang_session) {
                            echo "ငှားရန်အိမ်ခြံမြေများ";
                        }else{
                            echo " For rent properties";
                        }
                     ?>
                </h5>
                <div class="col-md-12">
                    <?php 
                        if ($recent_for_rents == NULL) {
                            echo "<b><i>Total Rent Ads : 0</i></b>";
                        }
                    ?>
                </div>
                <div class="row portfolio-items">
                    <?php 
                        foreach ($recent_for_rents as $propertie ) {
                            if ($lang_session) {
                     ?>
                           <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4>
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                                <span class="category">Tat Nay Won</span>
                                            </h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    <?php 
                                                        if ($propertie->propertie_type == 'for_sale') {
                                                            echo "ရောင်းရန်";
                                                        }elseif ($propertie->propertie_type == 'for_rent') {
                                                            echo "ငှားရန်";
                                                        }elseif ($propertie->propertie_type == 'new_properties') {
                                                            echo "အိမ်ခြံမြေအသစ်";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                            echo "ပိုင်ရှင်ကိုယ်တိုင်ရောင်းမည်";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                            echo "ပိုင်ရှင်ကိုယ်တိုင်ငှားမည်";
                                                        }else{
                                                            echo "Tat Nay Won";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="homes-price">
                                                    <?php echo $propertie->property_type_mm; ?>
                                                </div>
                                                <?php if ($propertie->photo == '') { ?>
                                                    <?php 
                                                        if ($propertie->user_info_id == 0) {
                                                     ?>
                                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo(base_url()); ?>/data/logo404.png" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php } ?>
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <small><?php echo $propertie->title_mm; ?></small>
                                        </a>
                                        <p class="homes-address mb-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <span>
                                                    <?php echo $propertie->region_mm; ?>
                                                    |
                                                    <?php echo $propertie->townships_mm; ?>
                                                </span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                           <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                            </li>
                                            
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                    <?php 
                                                        if ($propertie->price_type == 'MMK(Lakhs)') {
                                                            echo number_format($propertie->price);
                                                            echo " သိန်း (ကျပ်)";
                                                        }elseif ($propertie->price_type == 'USD') {
                                                            echo number_format($propertie->price);
                                                            echo " ";
                                                            echo $propertie->price_type;
                                                        }
                                                     ?>
                                                </a>
                                            </h3>
                                            <div class="compare">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">

                                           <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> View Detail </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4>
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                                <span class="category">Tat Nay Won</span>
                                            </h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    <?php 
                                                        if ($propertie->propertie_type == 'for_sale') {
                                                            echo "For Sale";
                                                        }elseif ($propertie->propertie_type == 'for_rent') {
                                                            echo "For Rent";
                                                        }elseif ($propertie->propertie_type == 'new_properties') {
                                                            echo "New Properties";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                            echo "By Owner For  Sale";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                            echo "By Owner For  Rent";
                                                        }else{
                                                            echo "Tat Nay Won";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="homes-price">
                                                    <?php echo $propertie->property_type; ?>
                                                </div>
                                                <?php if ($propertie->photo == '') { ?>
                                                    <?php 
                                                        if ($propertie->user_info_id == 0) {
                                                     ?>
                                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo(base_url()); ?>/data/logo404.png" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php } ?>
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>"><?php echo $propertie->title_eng; ?></a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <span>
                                                    <?php echo $propertie->region; ?>
                                                    |
                                                    <?php echo $propertie->townships; ?>
                                                </span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                           <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                            </li>
                                            
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                    <?php echo number_format($propertie->price); ?>
                                                    <?php echo $propertie->price_type; ?>
                                                </a>
                                            </h3>
                                            <div class="compare">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">

                                           <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> View Detail </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-1">
            <div class="container">
                <h5>
                    <?php 
                        if ($lang_session) {
                            echo "အိမ်ခြံမြေကြိုပွိုင့်များ";
                        }else{
                            echo " New Properties";
                        }
                     ?>
                </h5>
                <div class="col-md-12">
                    <?php 
                        if ($recent_for_new_properties == NULL) {
                            echo "<b><i>Total New Properties : 0</i></b>";
                        }
                    ?>
                </div>
                <div class="row portfolio-items">
                    <?php 
                        foreach ($recent_for_new_properties as $propertie ) {
                            if ($lang_session) {
                     ?>
                           <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4>
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                                <span class="category">Tat Nay Won</span>
                                            </h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    <?php 
                                                        if ($propertie->propertie_type == 'for_sale') {
                                                            echo "ရောင်းရန်";
                                                        }elseif ($propertie->propertie_type == 'for_rent') {
                                                            echo "ငှားရန်";
                                                        }elseif ($propertie->propertie_type == 'new_properties') {
                                                            echo "ကြိုပွိုင့်";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                            echo "ပိုင်ရှင်ကိုယ်တိုင်ရောင်းမည်";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                            echo "ပိုင်ရှင်ကိုယ်တိုင်ငှားမည်";
                                                        }else{
                                                            echo "Tat Nay Won";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="homes-price">
                                                    <?php echo $propertie->property_type_mm; ?>
                                                </div>
                                                <?php if ($propertie->photo == '') { ?>
                                                    <?php 
                                                        if ($propertie->user_info_id == 0) {
                                                     ?>
                                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo(base_url()); ?>/data/logo404.png" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php } ?>
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                            <small><?php echo $propertie->title_mm; ?></small>
                                        </a>
                                        <p class="homes-address mb-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <span>
                                                    <?php echo $propertie->region_mm; ?>
                                                    |
                                                    <?php echo $propertie->townships_mm; ?>
                                                </span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                           <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                            </li>
                                            
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                    <?php 
                                                        if ($propertie->price_type == 'MMK(Lakhs)') {
                                                            echo number_format($propertie->price);
                                                            echo " သိန်း (ကျပ်)";
                                                        }elseif ($propertie->price_type == 'USD') {
                                                            echo number_format($propertie->price);
                                                            echo " ";
                                                            echo $propertie->price_type;
                                                        }
                                                     ?>
                                                </a>
                                            </h3>
                                            <div class="compare">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">

                                           <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> View Detail </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4>
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">View Property</a>
                                                <span class="category">Tat Nay Won</span>
                                            </h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">
                                                    <?php 
                                                        if ($propertie->propertie_type == 'for_sale') {
                                                            echo "For Sale";
                                                        }elseif ($propertie->propertie_type == 'for_rent') {
                                                            echo "For Rent";
                                                        }elseif ($propertie->propertie_type == 'new_properties') {
                                                            echo "New Properties";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                            echo "By Owner For  Sale";
                                                        }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                            echo "By Owner For  Rent";
                                                        }else{
                                                            echo "Tat Nay Won";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="homes-price">
                                                    <?php echo $propertie->property_type; ?>
                                                </div>
                                                <?php if ($propertie->photo == '') { ?>
                                                    <?php 
                                                        if ($propertie->user_info_id == 0) {
                                                     ?>
                                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo(base_url()); ?>/data/logo404.png" style="width: 100%; height: 270px;" class="img-responsive">
                                                    <?php } ?>
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive" style="width: 100%; height: 270px;" >
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa  fa-external-link-alt"></i></a>
                                            <a  style="background-color: #c77b22;" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>"><?php echo $propertie->title_eng; ?></a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <span>
                                                    <?php echo $propertie->region; ?>
                                                    |
                                                    <?php echo $propertie->townships; ?>
                                                </span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                           <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span><?php echo $propertie->rooms == '' ? "0" : $propertie->rooms; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span><?php echo $propertie->bathroom == '' ? "0" : $propertie->bathroom; ?></span>
                                            </li>

                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span><?php echo $propertie->area; ?> <?php echo $propertie->area_type; ?></span>
                                            </li>
                                            
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                    <?php echo number_format($propertie->price); ?>
                                                    <?php echo $propertie->price_type; ?>
                                                </a>
                                            </h3>
                                            <div class="compare">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">

                                           <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"> View Detail </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>

    </div>
</section>

<?php }else{ ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>