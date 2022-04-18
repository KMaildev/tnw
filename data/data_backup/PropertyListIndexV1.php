<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<section class="properties-right list featured portfolio blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-12 blog-pots">
                <?php $this->load->view('templates/shared/alert_message'); ?>
                <!-- Block heading Start-->
                <div class="block-heading">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-12">
                            <h4>
                                <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                                </span>
                                <span class="show-sm-show">
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
                                            echo "Property";
                                        }
                                     ?>
                                </span>
                            </h4>
                                
                        </div>
                    </div>
                </div>

                <!-- Block heading end -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php 
                        if (!$properties) {
                            echo "<b>Data not found</b>";
                        }
                     ?>
                </div>
                <div class="row featured -items">
                    <!-- start loop -->
                    <?php 
                        foreach ($properties as $propertie) {
                     ?>

                        <div class="item col-md-5 landscapes sale pr-0 pb-0" style="background-color: #ffffff;">
                            <div class="project-single mb-0 bb-0">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4>
                                            <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                                View Property
                                            </a>
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
                                                <?php echo $propertie->property_type_mm; ?>
                                            </div>
                                            
                                            <?php if ($propertie->photo == '') { ?>
                                                <?php 
                                                    if ($propertie->user_info_id == 0) {
                                                 ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $tatnaywon->logo; ?>" style="width: 100%;" class="img-responsive">
                                                <?php }else{ ?>
                                                    <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->logo; ?>" style="width: 100%;" class="img-responsive">
                                                <?php } ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo(base_url()); ?>/uploads/<?php echo $propertie->photo; ?>" class="img-responsive">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn"><i class="fa fa-external-link-alt"></i></a>
                                        <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="img-poppu btn"><i class="fa fa-images"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 homes-content" >
                            <h3>
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                    <?php 
                                        echo ($lang_session) ? $propertie->title_mm : $propertie->title_eng;
                                     ?>
                                </a>
                            </h3>
                            <p class="homes-address mb-3">
                                <a href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>
                                        <?php 
                                            echo ($lang_session) ? $propertie->region_mm : $propertie->region;
                                         ?>
                                        |
                                        <?php 
                                            echo ($lang_session) ? $propertie->townships_mm : $propertie->townships;
                                         ?>
                                    </span>
                                </a>
                            </p>

                            <hr>

                            <ul class="homes-list clearfix">
                                <?php 
                                    if ($propertie->rooms) {
                                 ?>
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span><?php echo $propertie->rooms; ?></span>
                                    </li>
                                <?php } ?>

                                <?php 
                                    if ($propertie->bathroom) {
                                 ?>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span><?php echo $propertie->bathroom; ?></span>
                                    </li>
                                <?php } ?>

                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>
                                        <?php echo $propertie->area; ?> 
                                        <?php echo $propertie->area_type; ?>
                                    </span>
                                </li>

                                <li>
                                    <i class="fas fa-ad" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            echo $propertie->ad_number;
                                        ?>
                                    </span>
                                </li>

                                <li>
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            echo "Views ";
                                            echo $propertie->viewer_count;
                                        ?>
                                    </span>
                                </li>

                            </ul>

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
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" title="Share" target="_blank">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    
                                    <?php if ($this->session->userdata('member_id')) { ?>
                                        <a href="<?php echo site_url('favoritesadd/index/'.$propertie->sale_id); ?>" title="Favorites Add">
                                            <i class="fa fa-heart" style="color: red;"></i>
                                        </a>
                                    <?php }else { ?>
                                         <a href="<?php echo site_url('member/auth/login'); ?>" title="Favorites Add">
                                            <i class="fa fa-heart" style="color: red;"></i>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="footer">
                                <span>

                                    <a title="View Detail" href="<?php echo site_url('propertydetail/index/'.$propertie->sale_id); ?>" class="btn  btn-sm" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #c77b26; margin: 3px;">
                                        <i class="fa fa-laptop-house text-white"></i> 
                                        <?php 
                                            echo ($lang_session) ? "အသေးစိတ်ကြည့်ရန်" : "View Detail";
                                         ?>
                                    </a>

                                    <?php 
                                        $Title = ($lang_session) ? $propertie->title_mm : $propertie->title_eng;
                                        $MessageMM = $Title . "ကိုစိတ်ဝင်စားပါတယ်။"; 
                                        $MessageENG = "I am interested in " .$Title;
                                        $SendMessageSuggestions = ($lang_session) ? $MessageMM : $MessageENG;
                                    ?>

                                    <?php 
                                        if ($propertie->user_info_id == 0) {
                                     ?>
                                    
                                    <!-- show message  -->
                                    <button class="btn btn- btn-sm text-white" data-toggle="modal" data-target="#exampleModalTatnayWon<?php echo $propertie->sale_id; ?>" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #c77b26; margin: 3px;">
                                        <i class="fa fa-phone-square-alt text-white"></i> 
                                        <?php 
                                            echo ($lang_session) ? "ဖုန်းခေါ်ဆိုရန် " : "Click To Call";
                                         ?>
                                    </button>

                                    <div class="modal fade" id="exampleModalTatnayWon<?php echo $propertie->sale_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <small>
                                                    ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်
                                                </small>
                                            </h5>
                                          </div>
                                          <div class="modal-body">
                                            <?php 
                                                $phoneNumber = explode(',', $tatnaywon->phone);
                                                $phoneNumberTotal = count($phoneNumber);
                                                for ($i=0; $i <$phoneNumberTotal ; $i++) { 
                                                    
                                            ?>
                                                <p style="font-weight: bold;">
                                                    <i class="fa fa-phone-volume"></i>  
                                                    <a href="tel:<?php echo $phoneNumber[$i]; ?>" style="color: blue;">
                                                        <?php echo $phoneNumber[$i]; ?>
                                                    </a>
                                                </p>
                                            <?php } ?>
                                            
                                            <p style="font-weight: bold;">
                                                <i class="fa fa-envelope"></i>  
                                                <a href="mailto:<?php echo $tatnaywon->email; ?>" style="color: blue;">
                                                    <?php echo $tatnaywon->email; ?>
                                                </a>
                                            </p>
                                            <p>
                                                <i class="fa fa-check-square"></i>  
                                                <?php 
                                                    echo $propertie->area; 
                                                    echo " ";
                                                    echo $propertie->area_type; 
                                                    echo "၊ ";
                                                    echo $propertie->title_mm; 
                                                ?>
                                            </p>
                                            <center>
                                                <p class="text-med-grey" style="padding: 5px; background-color: #d9edf7; color: #31708f;">
                                                    Tat Nay Won Property တွင် တွေ့သောကြော်ငြာဟု ပြောပါရန်
                                            </p>
                                            </center>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- show message  -->


                                    <!-- Send a Message  -->
                                    <button class="btn btn- btn-sm text-white" data-toggle="modal" data-target="#sendAMessageModalTatnayWon<?php echo $propertie->sale_id; ?>" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #c77b26; margin: 3px;">
                                        <i class="fa fa-envelope text-white"></i> 
                                        <?php 
                                            echo ($lang_session) ? "စာတိုပို့ရန်" : "Send a message";
                                         ?>
                                    </button>

                                    <div class="modal fade" id="sendAMessageModalTatnayWon<?php echo $propertie->sale_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <small>
                                                        ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အတွက် စာတိုပို့ရန်
                                                    </small>
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                <p style="font-weight: bold; font-size: 12px;">
                                                    More about this property
                                                </p>
                                                <form  method="post" action="<?php echo site_url('requestinquiry/index'); ?>">

                                                    <input type="text" class="form-control" id="fname" name="name" placeholder="Name" autocomplete="off" required=""/><br>

                                                    <input type="text" class="form-control" id="pnumber" name="phone" placeholder="Phone Number" autocomplete="off" required="" min="0"/><br>

                                                    <input type="email" class="form-control" id="emailid" name="email" placeholder="Email Address" autocomplete="off" required="" /><br>

                                                    <input type="text" class="form-control" id="emailid" name="subject" placeholder="Subject" autocomplete="off" required="" value="ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အကြောင်းကို ပိုမိုသိလိုသည်။" /><br>

                                                    

                                                    <textarea placeholder="Message" class="form-control" name="message"  autocomplete="off"><?php echo $SendMessageSuggestions; ?></textarea>
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
                                    <!-- Send a Message  -->

                                    <?php }else{ ?>


                                    <!-- show message  -->
                                    <button class="btn btn- btn-sm text-white" data-toggle="modal" data-target="#exampleModalTatnayWon<?php echo $propertie->sale_id; ?>" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #c77b26; margin: 3px;">
                                        <i class="fa fa-phone-square-alt text-white"></i> 
                                        <?php 
                                            echo ($lang_session) ? "ဖုန်းခေါ်ဆိုရန် " : "Click To Call";
                                         ?>
                                    </button>

                                    <div class="modal fade" id="exampleModalTatnayWon<?php echo $propertie->sale_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <small>
                                                            ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်
                                                        </small>
                                                    </h5>
                                                  </div>
                                                  <div class="modal-body">
                                                    <?php 
                                                        $propertyPhoneNumber = explode(',', $propertie->phone);
                                                        $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                                                        for ($i=0; $i <$propertyPhoneNumberTotal ; $i++) { 
                                                            
                                                    ?>
                                                        <p style="font-weight: bold;">
                                                            <i class="fa fa-phone-volume"></i>  
                                                            <a href="tel:<?php echo $propertyPhoneNumber[$i]; ?>" style="color: blue;">
                                                                <?php echo $propertyPhoneNumber[$i]; ?>
                                                            </a>
                                                        </p>
                                                    <?php } ?>
                                                 
                                                    <p style="font-weight: bold;">
                                                        <i class="fa fa-envelope"></i>  
                                                        <a href="mailto:<?php echo $propertie->email; ?>" style="color: blue;">
                                                            <?php echo ($propertie->email == '') ? "No Data" : $propertie->email; ?>
                                                        </a>
                                                    </p>

                                                    <p>
                                                        <i class="fa fa-check-square"></i>  
                                                        <?php 
                                                            echo $propertie->area; 
                                                            echo " ";
                                                            echo $propertie->area_type; 
                                                            echo "၊ ";
                                                            echo $propertie->title_mm; 
                                                        ?>
                                                    </p>
                                                    <center>
                                                        <p class="text-med-grey" style="padding: 5px; background-color: #d9edf7; color: #31708f;">Tat Nay Won Property တွင် တွေ့သောကြော်ငြာဟု ပြောပါရန်</p>
                                                    </center>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- show message  -->



                                    <!-- Send a Message  -->
                                    <button class="btn btn- btn-sm text-white" data-toggle="modal" data-target="#sendAMessageModaAgent<?php echo $propertie->sale_id; ?>" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: black; background-color: #c77b26; margin: 3px;">
                                        <i class="fa fa-envelope text-white"></i> 
                                        <?php 
                                            echo ($lang_session) ? "စာတိုပို့ရန်" : "Send a message";
                                         ?>
                                    </button>

                                    <div class="modal fade" id="sendAMessageModaAgent<?php echo $propertie->sale_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <small>
                                                        ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အတွက် စာတိုပို့ရန်
                                                    </small>
                                                </h5>
                                            </div>
                                                <div class="modal-body">
                                                    <p style="font-weight: bold; font-size: 12px;">
                                                        More about this property
                                                    </p>
                                                    <form  method="post" action="<?php echo site_url('requestinquiry/index'); ?>">

                                                        <input type="hidden" name="company_user_id" value="<?php echo $propertie->user_info_id; ?>" required="">

                                                        <input type="text" class="form-control" id="fname" name="name" placeholder="Name" autocomplete="off" required=""/><br>

                                                        <input type="text" class="form-control" id="pnumber" name="phone" placeholder="Phone Number" autocomplete="off" required="" min="0"/><br>

                                                        <input type="email" class="form-control" id="emailid" name="email" placeholder="Email Address" autocomplete="off" required="" /><br>

                                                        <input type="text" class="form-control" id="emailid" name="subject" placeholder="Subject" autocomplete="off" required="" value="ကြော်ငြာနံပါတ် <?php echo $propertie->ad_number; ?> အကြောင်းကို ပိုမိုသိလိုသည်။" /><br>

                                                        

                                                        <textarea placeholder="Message" class="form-control" name="message"  autocomplete="off"><?php echo $SendMessageSuggestions; ?></textarea>
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
                                    <!-- Send a Message  -->

                                    <?php } ?>
                                    
                                </span>
                            </div>
                        </div>

                    <?php } ?>
                    <!-- end loop -->
                </div>
                
                <div class="row featured -items">
                    <nav aria-label="..." class="py-3">
                        <?= $this->pagination->create_links(); ?>
                    </nav>
                </div>
                
                <div class="row featured -items">
                    <?php $this->load->view('propertyrequest/share'); ?>
                </div>
                
                
            </div>

            <aside class="col-lg-3 col-md-12 car">
                <div class="widget">
                    <div class="section-heading">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-laptop-house"></i>
                            </div>
                            <div class="media-body">
                                <h5>
                                    <?php 
                                        if ($lang_session) {
                                            echo "အိမ်ခြံမြေရှာဖွေပါ";
                                        }else{
                                            echo "Search Property";
                                        }
                                     ?>
                                </h5>
                                <div class="border"></div>
                                <p>Search your Properties</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Fields -->
                    <div class="main-search-field">
                        <h5 class="title">
                            <?php 
                                if ($lang_session) {
                                    echo "စီစစ်ပြီး ရှာပါ";
                                }else{
                                    echo "Filter";
                                }
                             ?>
                        </h5>
						<?php $this->load->view('templates/shared/filter_search'); ?>
                    </div>
                    

                    <div class="recent-post py-5">
                        <?php $this->load->view('templates/shared/tags.php'); ?>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>