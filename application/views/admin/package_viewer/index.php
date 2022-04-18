<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Package Viewer
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Package Viewer</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="clearfix row">
                            <table class="table">
                                <thead>
                                    <tr style="background-color: gray; color: white;">
                                      <th scope="col">#</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Phone</th>
                                      <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach ($package_viewers as $key => $value) {
                                 ?>
                                    <tr class="table">
                                        <th scope="row"><?php echo $key + 1 ?></th>
                                        <td><?php echo $value->email; ?></td>
                                        <td><?php echo $value->phone; ?></td>
                                        <td><?php echo $value->get_date; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <center>
                  <?= $this->pagination->create_links(); ?>
                </center>
            </div>
           
        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
