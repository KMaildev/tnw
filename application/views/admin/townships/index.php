<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Townships
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href=""><i class="zmdi zmdi-home"></i> Townships</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Create</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Townships</strong></h2>
                    </div>
                    <div class="body">
                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>   
                                    <?php echo $this->session->flashdata('success'); ?>
                                </strong>
                            </div>
                        <?php } ?>

                        <form  method="post" action="<?php echo site_url('main/townships/add_townships'); ?>">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <select class="form-control show-tick" name="region_id" required>
                                        <option value="">-- Please select --</option>
                                        <?php 
                                            foreach ($regions as $region) {
                                         ?>
                                        <option value="<?php echo $region->region_id; ?>">
                                            <?php echo $region->region; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Townships" name="townships" autocomplete="off" required>                                   
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Townships Myanmar" name="townships_mm" autocomplete="off" required>                                   
                                    </div>
                                </div>
                                
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="submit" class="form-control"  value="Added" style="background-color: #e5e5e5;">                                   
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="clearfix row">
                            <?php 
                                foreach ($townships as $township) {
                             ?>
                            <div class="col-sm-4 col-md-3 col-lg-3">
                                <div class="body m-b-10 bg-yellow">
                                    <div class="color-name">
                                        <b style="color: black;">
                                            <small>
                                                <i>
                                                    <?php echo $township->region; ?>
                                                </i>
                                            </small>
                                            <br>
                                            <?php echo $township->townships; ?>
                                        </b>
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