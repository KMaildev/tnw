<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property Lists
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo (site_url('main/for_sale')); ?>"><i class="fa fa-building"></i> Property Lists</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">

                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <form method="get" action="<?php echo site_url('main/all/property_list/index'); ?>">
                                        <input type="text" class="form-control" placeholder="ID Number" autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                                echo $this->input->get('keyword');
                                                                                                                                                            } ?>">
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <form method="get" action="<?php echo site_url('main/all/property_list/index'); ?>">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="from" autocomplete="off" required>
                                    </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="to" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="form-group">
                                    <input type="submit" class="form-control" value="Search" style="background-color: #e5e5e5;">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="background-color: white;">#</th>
                            <th style="background-color: white;">Date</th>
                            <th style="background-color: white;">AD Number</th>
                            <th style="background-color: white;">Description(Title)</th>
                            <th style="background-color: white;">O/A</th>
                            <th style="background-color: white;">Price</th>
                            <th style="background-color: white;">Phone</th>
                            <th style="background-color: white;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($property_lists as $key =>  $for_sale) {
                        ?>
                            <tr class="table">
                                <th scope="row">
                                    <?php echo $key + 1; ?>
                                </th>
                                <td>
                                    <?php echo $for_sale->upload_date; ?>
                                </td>
                                <td>
                                    <?php echo $for_sale->ad_number; ?>
                                </td>
                                <td>
                                    <?php echo mb_substr($for_sale->title_mm, 0, 50, 'UTF-8'); ?>
                                </td>
                                <td>
                                    <?php
                                    if ($for_sale->propertie_type == 'by_owner_for_sale' || $for_sale->propertie_type == 'by_owner_for_rent' || $for_sale->upload_type == 'For_Owner') {
                                        echo "O";
                                    } elseif ($for_sale->user_info_id != 0) {
                                        echo "A";
                                    } elseif ($for_sale->user_info_id == 0 || $for_sale->upload_type == 'For_Owner') {
                                        echo "A";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo number_format($for_sale->price);
                                    echo " ";
                                    echo $for_sale->price_type;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $for_sale->contact_number;
                                    echo $for_sale->phone;
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo (site_url('main/for_sale/detail/' . $for_sale->sale_id)); ?>">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('templates/admin_footer'); ?>