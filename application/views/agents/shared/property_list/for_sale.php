<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
 
<div class="properties-right list featured portfolio blog">
    <div class="row featured">
        <?php 
            foreach ($recent_for_sales as $key => $propertie) {
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
            <div class="row">

                <div class="item col-lg-5 col-md-12 col-xs-12 landscapes sale pr-0 pb-0">
                    <div class="project-single mb-0 bb-0">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="homes-img">

                                    <div class="homes-tag button alt featured">
                                        <?php 
                                            echo $propertie->ad_number;
                                        ?>
                                    </div>

                                    <div class="homes-tag button alt sale">
                                        <?php 
                                            if ($propertie->propertie_type == 'for_sale') {
                                                echo ($lang_session) ? "ရောင်းရန်" : "For Sale";
                                            }elseif ($propertie->propertie_type == 'for_rent') {
                                                echo ($lang_session) ? "ငှားရန်" : "For Rent";
                                            }elseif ($propertie->propertie_type == 'new_properties') {
                                                echo ($lang_session) ? "ကြိုပွိုင့်" : "New";
                                            }elseif ($propertie->propertie_type == 'by_owner_for_sale') {
                                                echo ($lang_session) ? "ပိုင်ရှင်ကိုယ်တိုင် ရောင်းမည်" : "By Owner For Sale";
                                            }elseif ($propertie->propertie_type == 'by_owner_for_rent') {
                                                echo ($lang_session) ? "ပိုင်ရှင်ကိုယ်တိုင် ငှားမည်" : "By Owner For Rent";
                                            }else{
                                                echo "Property";
                                            }
                                        ?>
                                    </div>

                                    <div class="homes-price">
                                        <?php 
                                            echo ($lang_session) ? $propertie->property_type_mm : $propertie->property_type;
                                        ?>
                                    </div>
                                    
                                    <?php 
                                        if ($propertie->photo == '') {
                                    ?>
                                        <img src="<?php echo base_url(); ?>data/default/default.jpg" class="responsive" style="width: 100%; height: 270px; object-fit:cover; object-position: center">
                                    <?php }else{ ?>
                                        <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="responsive" style="width: 100%; height: 270px; object-fit:cover; object-position: center">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn">
                                    <i class="fa fa-external-link-alt"></i>
                                </a>

                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn">
                                    <i class="fa fa-images"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 homes-content pb-0 mb-44">
                    <p>
                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                            <?php 
                                echo ($lang_session) ? $propertie->title_mm : $propertie->title_eng;
                            ?>
                        </a>
                    </p>
                  
                    <div class="line"></div>

                    <p class="homes-address mb-3">
                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                            <i class="fa fa-map"></i>
                            <span>
                                <?php 
                                    echo ($lang_session) ? $propertie->region_mm : $propertie->region;
                                ?>
                            </span>
                            
                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-map-marker" style="color: #f08e33;"></i>
                                <?php 
                                    echo ($lang_session) ? $propertie->townships_mm : $propertie->townships;
                                ?>
                            </span>
                        </a>
                    </p>

                    <ul class="homes-list clearfix">
                        <li>
                            <i class="fa fa-bed" aria-hidden="true"></i>
                            <span>
                                <?php echo ($propertie->rooms == '') ? '0' : $propertie->rooms; ?>
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-bath" aria-hidden="true"></i>
                            <span>
                                <?php echo ($propertie->bathroom == '') ? '0' : $propertie->bathroom; ?>
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>
                                <?php echo $propertie->viewer_count; ?>
                            </span>
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
                            <?php if ($this->session->userdata('member_id')) { ?>
                                <a href="<?php echo site_url('favoritesadd/index/'.$propertie->sale_id); ?>" title="Favorites Add">
                                    <i class="fa fa-heart" style="color: red;"></i>
                                </a>
                            <?php }else { ?>
                                 <a href="<?php echo site_url('favoritesadd/favorites'); ?>" title="Favorites Add">
                                    <i class="fa fa-heart" style="color: red;"></i>
                                </a>
                            <?php } ?>

                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $propertie->sale_id; ?>" title="Share" target="_blank">
                                <i class="fas fa-share-alt"></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer">

                        <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm text-white" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #c77b26; margin: 3px;">
                            <i class="fa fa-laptop-house text-white hidden-sm-down"></i> 
                            <?php 
                                echo ($lang_session) ? "အသေးစိတ်ကြည့်ရန်" : "View Detail";
                            ?>
                        </a>


                        <!-- click to call -->
                        <button title="Click To Call" class="btn btn- btn-sm text-white" data-toggle="modal" data-target="#clickToCall<?php echo $propertie->sale_id; ?>" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); background-color: green; margin: 3px;">
                            <i class="fa fa-phone-square-alt text-white"></i> 
                            <?php 
                                echo ($lang_session) ? "ဖုန်းခေါ်ရန် " : "Click To Call";
                            ?>
                        </button>

                        <div class="modal fade" id="clickToCall<?php echo $propertie->sale_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header" style="background-color: #418107;">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
                                            <small>
                                                ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်
                                            </small>
                                        </h5>
                                    </div>

                                    <div class="modal-body">
                                        <?php 
                                            $propertyPhoneNumber = explode(',', $detail->phone);
                                            $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                                            for ($i=0; $i <$propertyPhoneNumberTotal ; $i++) { 
                                        ?>
                                            <p style="font-weight: bold; font-size: 15px;">
                                                <i class="fa fa-phone-volume"></i>  
                                                <a href="tel:<?php echo $propertyPhoneNumber[$i]; ?>" style="color: blue;">
                                                    <?php echo $propertyPhoneNumber[$i]; ?>
                                                </a>
                                            </p>
                                        <?php } ?>

                                        <p class="help-block" style="color: #c77b22; font-size: 15px;">
                                            <i class="fa fa-ad"></i> 
                                            <?php echo "AD Number : "; ?>
                                            <?php echo $propertie->ad_number; ?>
                                        </p>

                                        <p class="help-block" style="color: #c77b22; font-size: 15px;">
                                            <i class="fa fa-building"></i> 
                                            <?php 
                                                if ($lang_session) {
                                                   echo $propertie->title_mm == '' ? $propertie->title_eng : $propertie->title_mm;
                                                }else{
                                                    echo $propertie->title_eng == '' ? $propertie->title_mm : $propertie->title_eng;
                                                }
                                            ?>
                                        </p>
                                        <br>

                                        <p class="text-med-grey text-center" style="padding: 5px; background-color: #d9edf7; color: #31708f;">
                                            TatNayWonProperty.Com တွင် တွေ့သောကြော်ငြာဟု ပြောပါရန်
                                        </p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- click to call -->


                        <!-- Send a Message -->
                        <button class="btn btn-sm text-white" data-toggle="modal" data-target="#sendAMessage<?php echo $propertie->sale_id; ?>" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #a940aa; margin: 3px;">
                                <i class="fa fa-envelope text-white"></i> 
                                <strong class="clearfix hidden-sm-down">
                                    <?php 
                                        echo ($lang_session) ? "စာတိုပို့ရန်" : "Send a message";
                                    ?>
                                </strong>
                        </button>

                        <div class="modal fade" id="sendAMessage<?php echo $propertie->sale_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header" style="background-color: #a940aa;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
                                        <small>
                                            ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အတွက် စာတိုပို့ရန်
                                        </small>
                                    </h5>
                                </div>
                                    <div class="modal-body">
                                        <?php 
                                            if ($propertie->user_info_id == 0) {
                                        ?>
                                            <form action="<?php echo site_url('requestinquiry/index'); ?>" method="post">
                                        <?php }else{ ?>
                                            <form action="<?php echo site_url('requestinquiry/data_save'); ?>" method="post">
                                            <input type="hidden" name="company_user_id" value="<?php echo $propertie->user_info_id; ?>">
                                        <?php } ?>


                                        <input type="text" class="form-control" id="fname" name="name" placeholder="Name" autocomplete="off" required=""/><br>

                                        <input type="text" class="form-control" id="pnumber" name="phone" placeholder="Phone Number" autocomplete="off" required="" min="0"/><br>

                                        <input type="email" class="form-control" id="emailid" name="email" placeholder="Email Address" autocomplete="off" required="" /><br>

                                        <?php 
                                            if ($lang_session) {
                                                $subject = "ကြော်ငြာနံပါတ် ".$propertie->ad_number." အကြောင်းကို ပိုမိုသိလိုသည်။";
                                            }else{
                                                $subject = "Know more about this ads ".$propertie->ad_number;
                                            }
                                        ?>
                                        <input type="text" class="form-control" id="emailid" name="subject" placeholder="Subject" autocomplete="off" required="" value="<?php echo $subject ?>" /><br>
                                        
                                        <?php 
                                            if ($lang_session) {
                                                $message = "ဒီအိမ်ခြံမြေကို စိတ်ဝင်စားပါသည်။  ဒီအိမ်ခြံမြေနှင့်ပါတ်သတ်သော အသေးစိတ်အချက်အလက်များအားပေးပို့စေလိုပါတယ်။ ကျေးဇူးတင်ပါတယ်။";
                                            }else{
                                                $message = "Hello, I am interested in this property posted on TatNayWonProperty.Com and would like to request more information. Could you please contact me back as soon as possible? Thank you.";
                                            }
                                        ?>
                                        <textarea placeholder="Message" class="form-control" name="message"  autocomplete="off"><?php echo $message; ?></textarea>
                                        <br>

                                        <input type="submit" name="sendmessage" class="btn btn-default" value="Send a message" style="height: 40px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #c77b26; margin: 3px;"/>

                                        <button type="button" class="btn btn-default" data-dismiss="modal" style="height: 40px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #c77b26; margin: 3px;">
                                            Close
                                        </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Send a Message -->

                    </div>
                </div>

            </div>
        </div>
        <?php } ?>
    </div>
</div>