<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<section class="user-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2 py-5">

                <div class="dashborad-box stat">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="background-color: #db9c30">
                            <li class="breadcrumb-item">
                                <a href="<?php echo site_url('member/dashboard'); ?>" style="color: white; font-size: 17px;">
                                    <i class="fa fa-building"></i> Dashboard
                                </a>
                            </li>
                        </ol>
                    </nav>

                    <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3">
                        <div class="my-address">
                            <h3 class="heading">Appointment</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Appointment Date</th>
                                        <th scope="col">Appointment Time</th>
                                        <th scope="col">Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($appointments) { ?>
                                        <?php
                                        $member_session_id = $this->session->userdata('member_id');
                                        foreach ($appointments as $key => $appointment) {
                                            if ($member_session_id == $appointment->appointment_user_info_id) {
                                        ?>
                                                <tr class="table">
                                                    <th scope="row">
                                                        <?php echo $key + 1; ?>
                                                    </th>
                                                    <td>
                                                        <?php echo $appointment->appointment_date; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $appointment->appointment_time; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $appointment->phone_number; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td>
                                                <div class="alert alert-dismissible alert-danger">
                                                    <strong>Appointment not found</strong>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>