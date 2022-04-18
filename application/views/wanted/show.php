<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
 <!-- status 404 -->
<?php 
    if ($detail) {
?>
    <?php if ($this->session->userdata('member_id')) { ?>
    <div class="inner-pages agents">
        <section class="blog blog-section portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4"><?php echo $detail->ad_number; ?></h5>

                            <div class="row p-b-10 lh-1-5 b-b b-grey">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="hidden-lg hidden-md">
                                        <?php 
                                            if ($lang_session) {
                                                echo $detail->other_date;
                                                echo "<small style='font-size: 15px;'> တွင်ကြော်ငြာတင်ခဲ့သည်</small>";
                                            }else{
                                                echo "Posted On ";
                                                echo $detail->other_date;
                                            }
                                         ?>
                                    </div>
                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs text-right">
                                    <?php 
                                        if ($lang_session) {
                                            echo $detail->viewer_count;
                                            echo "<small style='font-size: 15px;'> ကြိမ် ကြည့်ရှု့ပြီ</small>";
                                        }else{
                                            echo "Views ";
                                            echo "<b>". $detail->viewer_count ."</b>";
                                        }
                                     ?> 
                                </div>
                            </div>
                            <hr>
                            

                            <div class="col-md-12">
                                <div class="alert alert-dismissible alert-success">
                                  <p><?php echo $detail->title; ?></p>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="alert alert-dismissible alert-warning">
                                  <i class="fa fa-map" aria-hidden="true"></i>
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo $detail->region_mm;
                                            }else{
                                                echo $detail->region;
                                            }
                                         ?>
                                    </span>
                                    |
                                    <span>
                                        <?php 
                                            if ($lang_session) {
                                                echo $detail->townships_mm;
                                            }else{
                                                echo $detail->townships;
                                            }

                                         ?>
                                    </span>
                                </div>
                            </div>

                            

                            
                            <div class="col-lg-12 col-md-12">
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-building" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    if ($lang_session) {
                                                        echo $detail->property_type_mm;
                                                    }else{
                                                        echo $detail->property_type;
                                                    }
                                                 ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    echo $detail->area;
                                                    echo $detail->area_type;
                                                 ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    echo $detail->bedroom;
                                                 ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    echo $detail->bedroom;
                                                 ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-shower" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    echo $detail->bathroom;
                                                 ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-hotel" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    echo  ($detail->floor == '') ? 'No Data' : $detail->floor;
                                                 ?>
                                            </span>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    echo $detail->agent_allow_status;
                                                 ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="alert alert-dismissible alert-warning">
                                          <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            <span>
                                                <?php 
                                                    echo $detail->property_status;
                                                 ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <p class="m-b-0 fs-16 text-center py-2" style="min-height: 35px;"> 
                                <strong class="">
                                    <?php 
                                        if ($lang_session) {
                                            echo "ဖုန်းနံပါတ်ကြည့်ရန်";
                                        }else{
                                            echo "View contact number";
                                        }
                                     ?>
                                </strong> 

                                <a title="View Detail" href="#" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-phone-square-alt" style="padding: 3px; height: 30px; width: 50px; color: white; background-color: #ff8f09; border-radius: 10px;"></i>
                                </a>

                                <?php 
                                    if ($active_package_for_wanted) {
                                        $order_total = [];
                                        foreach ($active_package_for_wanted as $my_active_package) {
                                            if (date("Y-m-d") >= $my_active_package->end_date) {
                                                continue;
                                            }
                                            $order_total[] = $my_active_package->no_of_posts;
                                        }
                                        $total_post = array_sum($order_total);
                                        if ($total_post != 0) {
                                 ?>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <?php 
                                                        if ($lang_session) {
                                                            echo "ဆက်သွယ်ရန်";
                                                        }else{
                                                            echo "Contact";
                                                        }
                                                     ?>
                                                </h5>
                                              </div>
                                              <div class="modal-body">
                                                <p class=""> 
                                                    <span class="p-r-15"> 
                                                        <span class="fa-stack fa-lg text-orange fs-13"> 
                                                            <i class="fa fa-ad"></i> 
                                                        </span> 
                                                        <span>  <?php echo $detail->company_id; ?> </span> 
                                                    </span> 
                                                    <br>
                                                    <span class="p-r-15"> 
                                                        <span class="fa-stack fa-lg text-orange fs-13"> 
                                                            <i class="fa fa-phone"></i> 
                                                        </span> 
                                                        <span>  <?php echo $detail->phone; ?> </span> 
                                                    </span> 
                                                    <br>
                                                    <span class="p-r-15"> 
                                                        <span class="fa-stack fa-lg text-orange fs-13"> 
                                                            <i class="fa fa-envelope"></i> 
                                                        </span> 
                                                        <span>  <?php echo $detail->email; ?> </span> 
                                                    </span> 
                                                    <br>
                                                    <span class="p-r-15"> 
                                                        <span class="fa-stack fa-lg text-orange fs-13"> 
                                                            <i class="fa fa-map"></i> 
                                                        </span> 
                                                        <span>  <?php echo $detail->address; ?> </span> 
                                                    </span> 
                                                </p>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <?php }elseif($total_post == 0){ ?>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <?php 
                                                        if ($lang_session) {
                                                            echo "အသိပေးချက်";
                                                        }else{
                                                            echo "Notice";
                                                        }
                                                     ?>
                                                </h5>
                                              </div>
                                              <div class="modal-body">
                                                Your package has been expired. <br> <a href="<?php echo site_url('member/packages'); ?>">ဤနေရာမှတစ်ဆင့်</a> Package ဝယ်ယူနိုင်ပါသည်။
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <?php 
                                                    if ($lang_session) {
                                                        echo "အသိပေးချက်";
                                                    }else{
                                                        echo "Notice";
                                                    }
                                                 ?>
                                            </h5>
                                          </div>
                                          <div class="modal-body">
                                            Tat Nay Won Property မှ Business Plan ဝယ်ယူထားသည့် အကျိုးဆောင် များသာလျှင် ဖုန်းနံပါတ်ကို ကြည့်ရှုနိုင်ပါသည်။ <a href="<?php echo site_url('member/packages'); ?>">ဤနေရာမှတစ်ဆင့်</a> Package ဝယ်ယူနိုင်ပါသည်။
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <?php } ?>

                            </p>

                            <hr>
                            <p class="py-2">
                                <?php 
                                    if ($lang_session) {
                                        echo $detail->description_mm;
                                    }else{
                                        echo $detail->description_eng;
                                    }
                                 ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> 
    <?php }else { ?>
        <?php 
            redirect(site_url('member/auth/login'));
         ?>
    <?php } ?>

<?php }else{ ?>
    <?php $this->load->view('templates/shared/404.php'); ?>
<?php } ?>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>
