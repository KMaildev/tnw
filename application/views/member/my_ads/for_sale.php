<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<?php
if ($my_active_packages) {
    $refresh_daily_total = [];
    foreach ($my_active_packages as $my_active_package) {
        $refresh_daily_total[] = $my_active_package->refresh_daily;
    }
    $data['refresh_daily_total'] = array_sum($refresh_daily_total);
    $data['today_refresh_ad_counter'] = $today_refresh_ad_counter->no_of_refresh;
}
?>

<section class="properties-right list featured portfolio blog">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 blog-pots">
                <!-- Block heading Start-->
                <div class="block-heading">
                    <div class="row">
                        <div class="col-lg-12 col-md-5 col-sm-12">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="show-sm-show">
                                    <a href="<?php echo site_url('member/dashboard'); ?>">
                                        <span class="">Dashboard </span>
                                    </a>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- Block heading end -->

                <?php $this->load->view('templates/shared/alert_message'); ?>
                <div class="row featured -items">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <form>
                                    <label for="inputCity" class="form-label">Search</label>
                                    <input type="text" autocomplete="off" placeholder="ID Number Or Title" class="form-control" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                            echo $this->input->get('keyword');
                                                                                                                                                        } ?>">
                                </form>
                            </div>
                            <div class="col-md-3">
                                <form>
                                    <label for="inputZip" class="form-label">From</label>
                                    <input type="date" class="form-control" name="from" required="">
                            </div>
                            <div class="col-md-3">
                                <label for="inputZip" class="form-label">To</label>
                                <input type="date" class="form-control" name="to">
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label"><br></label>
                                <input type="submit" class="form-control" value="Search" style="background-color: #e5e5e5;" required="">
                            </div>
                            </form>
                        </div>
                        <!-- Total result: <b><?php echo $count_all; ?></b> -->
                    </div>
                    <!-- start loop -->
                    <?php
                    $member_session_id = $this->session->userdata('member_id');
                    foreach ($properties_ads as $properties_ad) {
                        if ($member_session_id == $properties_ad->user_info_id) {
                            if ($properties_ad->soldout_status == 0) {
                    ?>
                                <div class="col-md-4 col-lg-4 col-sm-12" style="padding: 10px;">
                                    <div class="homes-content">

                                        <img src="<?php echo (base_url()); ?>/uploads/<?php echo $properties_ad->photo; ?>" alt="" style="width: 100%; height: 250px; object-position: center; background-size: center">

                                        <ul class="list-group">
                                            <br>
                                            <p style="font-size: 16px; ">
                                                <?php echo $properties_ad->title_mm; ?>
                                            </p>
                                            <br>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                AD Number : <?php echo $properties_ad->ad_number; ?>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Region / Township : <?php echo $properties_ad->region_mm; ?> | <?php echo $properties_ad->townships_mm; ?>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Area : <?php echo $properties_ad->area; ?> <?php echo $properties_ad->area_type; ?>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Room : <?php echo $properties_ad->rooms; ?>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Bathroom : <?php echo $properties_ad->bathroom; ?>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Status : <?php echo $properties_ad->property_status; ?>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Soldout Status :
                                                <?php
                                                if ($properties_ad->soldout_status == 0) {
                                                    echo "<b>No</b>";
                                                } elseif ($properties_ad->soldout_status == 1) {
                                                    echo "<b>Soldout</b>";
                                                }
                                                ?>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Price : <?php echo $properties_ad->price; ?> <?php echo $properties_ad->price_type; ?>
                                            </li>
                                        </ul>

                                        <div class="footer">
                                            <a title="View Detail" href="<?php echo site_url('propertydetail/index/' . $properties_ad->sale_id); ?>" class="btn  btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: green;"><i class="fa fa-eye text-white"></i> Detail </a>

                                            <?php
                                            $data['properties_ad'] = $properties_ad;
                                            if ($my_active_packages) {
                                                $this->load->view('member/shared/refresh_ad_management', $data);
                                            }
                                            ?>

                                            <?php
                                            if ($properties_ad->soldout_status == 0) {
                                            ?>
                                                <a title="Soldout Status" href="<?php echo site_url('member/my_ads/soldout_status_soldout_now/' . $properties_ad->sale_id); ?>" class="btn btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-exchange-alt text-white"></i>
                                                    Soldout : No
                                                </a>
                                            <?php } elseif ($properties_ad->soldout_status == 1) { ?>
                                                <a title="Soldout Status" href="<?php echo site_url('member/my_ads/soldout_status_un_soldout/' . $properties_ad->sale_id); ?>" class="btn btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"><i class="fa fa-exchange-alt text-white"></i>
                                                    Soldout
                                                </a>
                                            <?php } ?>

                                            <a title="Delete" onclick="return confirm('Are you sure want to delete?');" href="<?php echo site_url('member/my_ads/destroy/' . $properties_ad->sale_id . '/' . $properties_ad->user_info_id); ?>" class="btn btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: red;"><i class="fa fa-trash text-white"></i> Delete </a>

                                            <a title="Edit" href="<?php echo site_url('member/for_sale/edit/' . $properties_ad->sale_id); ?>" class="btn btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: blue;"><i class="fa fa-edit text-white"></i> Edit </a>

                                            <a title="Edit Photo" href="<?php echo site_url('member/for_sale/photo_edit/' . $properties_ad->sale_id); ?>" class="btn btn-sm mb-2" style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: blue;"><i class="fa fa-image text-white"></i> Edit Photo </a>

                                        </div>
                                        <br>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <!-- end loop -->
                </div>

                <nav aria-label="..." class="py-3">
                    <?= $this->pagination->create_links(); ?>
                </nav>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>