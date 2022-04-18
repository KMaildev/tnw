<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Package Order
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo (site_url('main/new_properties')); ?>"><i class="fa fa-building"></i> New Properties</a></li>
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
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                                        echo $this->input->get('keyword');
                                                                                                                                                    } ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="clearfix row">
                            <?php
                            foreach ($orders as $order) {
                            ?>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong><?php echo $order->contact; ?></strong></h2>
                                            <ul class="header-dropdown">
                                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                                    <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                                        <?php
                                                        if ($order->screenshot_file == '') {
                                                            echo "No File";
                                                        } else {
                                                        ?>
                                                            <img data-enlargeable="" src="<?php echo base_url(); ?>uploads/<?php echo $order->screenshot_file; ?>" class="img-fluid" alt="" style="width: 100%;">
                                                        <?php } ?>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered m-b-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Package: </th>
                                                            <td><?php echo $order->package_name; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Contact:</th>
                                                            <td><?php echo $order->contact; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Company Name:</th>
                                                            <td><?php echo $order->company_name; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Register Mail or Phone:</th>
                                                            <td><?php echo $order->email; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Approval: </th>
                                                            <td>
                                                                <?php
                                                                if ($order->approval_status == '0') { ?>
                                                                    <span class="badge badge-danger">
                                                                        <a href="<?php echo site_url('main/order_system/activate_now/' . $order->po_id); ?>" style="color: red;">Pending</a>
                                                                    </span>
                                                                <?php } elseif ($order->approval_status == '1') { ?>
                                                                    <span class="badge badge-success">
                                                                        <a href="<?php echo site_url('main/order_system/pending_now/' . $order->po_id); ?>" style="color: green;">
                                                                            Active
                                                                        </a>
                                                                    </span>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Status: </th>
                                                            <td>
                                                                <span class="badge badge-primary">
                                                                    <?php
                                                                    if ($order->choose_payment == 'bank_transfer') {
                                                                        echo "Bank Transfer";
                                                                    } elseif ($order->choose_payment == 'contact_me') {
                                                                        echo "Contact me";
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Bank: </th>
                                                            <td>
                                                                <b>
                                                                    <?php
                                                                    if ($order->choose_payment == 'bank_transfer') {
                                                                        echo $order->bank_name;
                                                                        echo " | ";
                                                                        echo $order->account_name;
                                                                        echo " | ";
                                                                        echo $order->account_number;
                                                                    } elseif ($order->choose_payment == 'contact_me') {
                                                                        echo "No Transfer";
                                                                    }
                                                                    ?>
                                                                </b>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Order Price:</th>
                                                            <td>
                                                                <?php echo number_format($order->order_price); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Payment Status:</th>
                                                            <td>
                                                                <?php echo $order->payment_status; ?>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <th scope="row">No of Month:</th>
                                                            <td>
                                                                <?php
                                                                echo $order->billing_cycle;
                                                                if ($order->billing_cycle == 1) {
                                                                    echo " Month";
                                                                } else {
                                                                    echo " Months";
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Order Date:</th>
                                                            <td><?php echo $order->order_date; ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Expiry Date:</th>
                                                            <td><?php echo $order->end_date; ?></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>