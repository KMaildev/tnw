<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">

                <a title="Edit" href="<?php echo (site_url('main/for_rent/edit/' . $detail->sale_id)); ?>" class="btn btn-primary btn-round btn-sm" style="background-color: green;">
                    <i class="fa fa-edit"></i> Edit
                </a>

                <a title="Edit Photo" href="<?php echo (site_url('main/for_rent/photo_edit/' . $detail->sale_id)); ?>" class="btn btn-round btn-sm" style="background-color: #034787;">
                    <i class="fa fa-file-image"></i> Photo Edit
                </a>


                <a title="Delete" href="<?php echo (site_url('main/for_rent/destroy/' . $detail->sale_id)); ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-round btn-sm" style="background-color: #d7252b;">
                    <i class="fa fa-trash-alt"></i> Delete
                </a>


            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="fa fa-building"></i> Property</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <?php if ($photos == NULL) { ?>
                            <img src="<?php echo base_url(); ?>data/default.jpg" class="img-fluid" alt="">
                        <?php } else { ?>
                            <div id="demo2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    $i = 0;
                                    foreach ($photos as $photo) {
                                        $i++;
                                    ?>
                                        <?php
                                        if ($i == 1) { ?>
                                            <div class="carousel-item active">
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $photo->photo; ?>" class="img-fluid" alt="" style="width: 100%;">
                                            </div>
                                        <?php } else { ?>
                                            <div class="carousel-item">
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $photo->photo; ?>" class="img-fluid" alt="" style="width: 100%;" loading="lazy">
                                            </div>
                                        <?php } ?>

                                    <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#demo2" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                                <a class="carousel-control-next" href="#demo2" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                            </div>
                        <?php } ?>
                        <h6 class="text-success mt-4">
                            <?php echo $detail->price; ?>
                            <?php echo $detail->price_type; ?>
                        </h6>
                        <h5 class="mt-0 text-muted">
                            <b><?php echo $detail->title_mm; ?> </b>
                        </h5>
                        <p class="text-muted">
                            <?php echo $detail->description_mm; ?>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong></h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <h6 class="py-2"><i class="fa fa-building"></i> GENERAL</h6>
                                <ul class="list-group">
                                    <?php
                                    if ($detail->swimming_pool != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Swimming pool
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->securit != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            24 hrs Security
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->air_conditioning != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Air conditioning
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->wifi != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Wifi
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->balcony != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Balcony
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->cctv != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            CCTV
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->car_parking != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Car Parking
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->dishwasher != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Dishwasher
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->generator != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Generator
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->near_church != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Near Church
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->garden != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Garden
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->gym != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Gym
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->lift != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Lift
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->play_ground != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Play Ground
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->water_heater != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Water Heater
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <h6 class="py-2"><i class="fa fa-chart-area"></i> HOUSE VIEW</h6>
                                <ul class="list-group">
                                    <?php
                                    if ($detail->mountain_view != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Mountain View
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->pagoda_view != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Pagoda View
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->sea_view != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Sea View
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->lake_view != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Lake View
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->city_view != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            City View
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->garden_view != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Garden View
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->river_view != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            River View
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <h6 class="py-2"><i class="fa fa-business-time"></i> BUSINESS TYPE</h6>
                                <ul class="list-group">
                                    <?php
                                    if ($detail->showroom != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Showroom
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->restaurant != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Restaurant
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->office != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Office
                                        </li>
                                    <?php } ?>

                                    <?php
                                    if ($detail->warehouse != NULL) { ?>
                                        <li class="list-group-item">
                                            <i class="zmdi zmdi-check-circle mr-2"></i>
                                            Warehouse
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2><strong>What's Nearby</strong></h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <small><i>
                                        <h6 class="py-2"><i class="fa fa-school"></i> Education</h6>
                                    </i></small>
                                <ul class="list-group">
                                    <?php
                                    if ($detail->education == NULL) {
                                        echo '
                                                    <small>
                                                       <i>
                                                            <li class="list-group-item">
                                                                <i class="fa fa-times mr-2"></i>
                                                                No Data
                                                            </li>
                                                       </i>
                                                   </small>
                                                ';
                                    } else {
                                        $educations = $detail->education;
                                        $edu_json = json_decode($educations);
                                        foreach ($edu_json as $key => $value) { ?>
                                            <small>
                                                <i>
                                                    <li class="list-group-item">
                                                        <i class="zmdi zmdi-check-circle mr-2"></i>
                                                        <?php echo $value; ?>
                                                    </li>
                                                </i>
                                            </small>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <small><i>
                                        <h6 class="py-2"><i class="fa fa-first-aid"></i> Health & Medical</h6>
                                    </i></small>
                                <ul class="list-group">
                                    <?php
                                    if ($detail->health == NULL) {
                                        echo '
                                                    <small>
                                                       <i>
                                                            <li class="list-group-item">
                                                                <i class="fa fa-times mr-2"></i>
                                                                No Data
                                                            </li>
                                                       </i>
                                                   </small>
                                                ';
                                    } else {
                                        $healths = $detail->health;
                                        $health_json = json_decode($healths);
                                        foreach ($health_json as $key => $value) { ?>
                                            <small>
                                                <i>
                                                    <li class="list-group-item">
                                                        <i class="zmdi zmdi-check-circle mr-2"></i>
                                                        <?php echo $value; ?>
                                                    </li>
                                                </i>
                                            </small>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <small><i>
                                        <h6 class="py-2"><i class="fa fa-bus"></i> Transportation</h6>
                                    </i></small>
                                <ul class="list-group">
                                    <?php
                                    if ($detail->transportation == NULL) {
                                        echo '
                                                    <small>
                                                       <i>
                                                            <li class="list-group-item">
                                                                <i class="fa fa-times mr-2"></i>
                                                                No Data
                                                            </li>
                                                       </i>
                                                   </small>
                                                ';
                                    } else {
                                        $transportations = $detail->transportation;
                                        $transportation_json = json_decode($transportations);
                                        foreach ($transportation_json as $key => $value) { ?>
                                            <small>
                                                <i>
                                                    <li class="list-group-item">
                                                        <i class="zmdi zmdi-check-circle mr-2"></i>
                                                        <?php echo $value; ?>
                                                    </li>
                                                </i>
                                            </small>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <?php
                if ($detail->plans_photo != NULL) {
                ?>
                    <div class="card">
                        <div class="body">
                            <?php if ($detail->plans_photo == NULL) { ?>
                            <?php } else { ?>
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $detail->plans_photo; ?>" class="img-fluid" alt="" loading="lazy">
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>


            </div>
            <div class="col-lg-4 col-md-12">

                <?php
                if ($detail->user_info_id == 0 and $detail->upload_type == 'Admin' || $detail->upload_type == NULL) {
                ?>
                    <div class="card">
                        <div class="body text-center">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $company_data->logo; ?>" class="rounded-circle" alt="profile-image" style="width: 100px;">
                            </a>
                            <h4 class="m-t-10"><?php echo $company_data->company_name; ?></h4>
                            <div class="col-12">
                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        <?php echo $company_data->address; ?>
                                    </small>
                                </p>

                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:<?php echo $company_data->phone; ?>"><?php echo $company_data->phone; ?></a>
                                    </small>
                                </p>

                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:<?php echo $company_data->email; ?>"><?php echo $company_data->email; ?></a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } elseif ($detail->user_info_id == 0 and $detail->upload_type == 'For_Agent' || $detail->upload_type == 'For_Owner') { ?>
                    <div class="card">
                        <div class="body text-center">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $detail->agent_owner_logo; ?>" class="rounded-circle" alt="profile-image" style="width: 100px;">
                            <h4 class="m-t-10"><?php echo $detail->user_contact_name; ?></h4>
                            <div class="col-12">
                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        <?php echo $detail->user_address; ?>
                                    </small>
                                </p>

                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-phone"></i>
                                        <?php echo $detail->contact_number; ?>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } elseif ($detail->user_info_id != 0) { ?>
                    <div class="card">
                        <div class="body text-center">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $detail->logo; ?>" class="rounded-circle" alt="profile-image" style="width: 100px;">
                            </a>
                            <h4 class="m-t-10"><?php echo $detail->company_name; ?></h4>
                            <div class="col-12">
                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        <?php echo $detail->address; ?>
                                    </small>
                                </p>

                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:<?php echo $detail->phone; ?>"><?php echo $detail->phone; ?></a>
                                    </small>
                                </p>

                                <p style="text-align: justify;">
                                    <small>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:<?php echo $detail->email; ?>"><?php echo $detail->email; ?></a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="card">
                    <div class="header">
                        <h2><strong>Information</strong></h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0">
                                <tbody>

                                    <tr>
                                        <th scope="row">Status: </th>
                                        <td>
                                            <?php
                                            if ($detail->ad_status == 1) {
                                            ?>
                                                <span class="badge badge-success">
                                                    <a href="<?php echo (site_url('main/for_rent/changeStatusActive/' . $detail->sale_id)); ?>" style="color: green;">
                                                        Active
                                                    </a>
                                                </span>
                                            <?php } elseif ($detail->ad_status == 0) { ?>
                                                <span class="badge badge-danger">
                                                    <a href="<?php echo (site_url('main/for_rent/changeStatusInactive/' . $detail->sale_id)); ?>" style="color: red;">
                                                        Inactive
                                                    </a>
                                                </span>
                                            <?php } ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Soldout Status: </th>
                                        <td>
                                            <?php
                                            if ($detail->soldout_status == 0) {
                                            ?>
                                                <span class="badge badge-danger">
                                                    <a href="<?php echo site_url('main/soldout_status/soldout_status_soldout_now/' . $detail->sale_id); ?>" style="color: red;">
                                                        No
                                                    </a>
                                                </span>
                                            <?php } elseif ($detail->soldout_status == 1) { ?>
                                                <span class="badge badge-success">
                                                    <a href="<?php echo site_url('main/soldout_status/soldout_status_un_soldout/' . $detail->sale_id); ?>" style="color: green;">
                                                        Soldout
                                                    </a>
                                                </span>
                                            <?php } ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">AD ID:</th>
                                        <td>
                                            <?php echo $detail->ad_number; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Price:</th>
                                        <td>
                                            <?php echo $detail->price; ?>
                                            <small><?php echo $detail->price_type; ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">INSTALLMENT: </th>
                                        <td>
                                            <span class="badge badge-primary">
                                                <?php echo $detail->installment; ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status: </th>
                                        <td>
                                            <span class="badge badge-primary">
                                                <?php echo $detail->property_status; ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type:</th>
                                        <td><?php echo $detail->property_type; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Area:</th>
                                        <td>
                                            <?php echo $detail->area; ?>
                                            <?php echo $detail->area_type; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Floors:</th>
                                        <td><?php echo $detail->floor; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Rooms:</th>
                                        <td><?php echo $detail->rooms; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Shrine Rooms:</th>
                                        <td><?php echo $detail->shrine_room; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Living Rooms:</th>
                                        <td><?php echo $detail->living_room; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Dining Rooms:</th>
                                        <td><?php echo $detail->dining_room; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Bed Rooms:</th>
                                        <td><?php echo $detail->bead_room; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Bath Rooms:</th>
                                        <td><?php echo $detail->bathroom; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Other Rooms:</th>
                                        <td><?php echo $detail->other_room; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Year Built:</th>
                                        <td><?php echo $detail->year_built; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Region:</th>
                                        <td><?php echo $detail->region; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Townships:</th>
                                        <td><?php echo $detail->townships; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Google Map:</th>
                                        <td>
                                            <?php
                                            if ($detail->map_link) {
                                            ?>
                                                <a href="<?php echo $detail->map_link; ?>">
                                                    Get directions
                                                </a>
                                            <?php } else { ?>
                                                No Data
                                            <?php } ?>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                if ($detail->video != NULL) {
                ?>
                    <div class="card">
                        <div class="body">
                            <?php if ($detail->video == NULL) { ?>
                            <?php } else { ?>
                                <video style="width: 100%;" controls preload="none">
                                    <source src="<?php echo base_url(); ?>uploads/<?php echo $detail->video; ?>" type="video/mp4">
                                    <source src="<?php echo base_url(); ?>uploads/<?php echo $detail->video; ?>" type="video/ogg">
                                    Your browser does not support HTML video.
                                </video>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>