<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Package
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/packages_system'); ?>"><i class="zmdi zmdi-home"></i> Package</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Package Add</strong> </h2>
                    </div>
                    <div class="body">

                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>
                                    <?php echo $this->session->flashdata('success'); ?>
                                </strong>
                            </div>
                        <?php } elseif ($this->session->flashdata('danger')) { ?>
                            <div class="alert alert-danger">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>
                                    <?php echo $this->session->flashdata('danger'); ?>
                                </strong>
                            </div>
                        <?php } ?>

                        <form method="post" action="<?php echo site_url('main/packages_system/save') ?>">

                            <input type="hidden" placeholder="No. of video clip" autocomplete="off" name="video_clip" value="<?php echo set_value('video_clip'); ?>" min="0" value="0">

                            <input type="hidden" placeholder="No. of Facebook ads" autocomplete="off" name="facebook_ads" value="<?php echo set_value('facebook_ads'); ?>" min="0" value="0">


                            <div class="row clearfix">


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <b>Package Name</b>
                                        <input type="text" class="form-control" placeholder="Standard Package" autocomplete="off" name="package_name" value="<?php echo set_value('package_name'); ?>">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <b>???????????????????????????????????????????????????????????????????????????????????????????????????????????????</b>
                                        <input type="number" class="form-control" placeholder="120" autocomplete="off" name="no_of_posts" value="<?php echo set_value('no_of_posts'); ?>" min="0">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <b>???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????</b>
                                        <input type="number" class="form-control" placeholder="8" autocomplete="off" name="post_per_month" value="<?php echo set_value('post_per_month'); ?>" min="0">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <b>???????????? Refresh ???????????????????????????????????????????????? ????????????????????????</b>
                                        <input type="number" class="form-control" placeholder="30" autocomplete="off" name="refresh_per_month" value="<?php echo set_value('refresh_per_month'); ?>" min="0">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <b>?????????????????? Refresh ????????????????????????????????????????????????????????????????????????</b>
                                        <input type="number" class="form-control" placeholder="5" autocomplete="off" name="refresh_daily" value="<?php echo set_value('refresh_daily'); ?>" min="0">
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <b>Website ????????? ????????????????????????????????????????????? ?????????????????????????????????????????????</b>
                                    <br>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="website_helpful_ad" id="Yes" value="Yes">
                                        <label for="Yes">Yes</label>
                                    </div>
                                    <div class="radio inlineblock m-r-25">
                                        <input type="radio" name="website_helpful_ad" id="no" value="No">
                                        <label for="no">No</label>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <b>Website ??????????????????????????????????????????????????? ??????????????????????????????????????????????????? ?????????????????????????????????</b>
                                    <br>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="website_special_ad" id="WebFeatureYes" value="Yes">
                                        <label for="WebFeatureYes">Yes</label>
                                    </div>
                                    <div class="radio inlineblock m-r-25">
                                        <input type="radio" name="website_special_ad" id="WebFeatureNo" value="No">
                                        <label for="WebFeatureNo">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <b>Duration</b>
                                    <div class="col-auto">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" placeholder="1" value="1" name="duration">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <b>Price</b>
                                        <input type="number" class="form-control" placeholder="Price" autocomplete="off" name="price" value="<?php echo set_value('price'); ?>" min="0">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <b>3 Months Discount % </b>
                                        <input type="number" class="form-control" placeholder="Discount" autocomplete="off" name="discount" value="<?php echo set_value('discount'); ?>">
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <b>6 Months Discount % </b>
                                        <input type="number" class="form-control" placeholder="Discount" autocomplete="off" name="six_month_discount" value="<?php echo set_value('six_month_discount'); ?>">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <b>Package Plan</b>
                                    <br>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="packages_plan" id="PackagePlanFree" value="free_for_agent">
                                        <label for="PackagePlanFree">Free Package Plan</label>
                                    </div>
                                    <div class="radio inlineblock m-r-25">
                                        <input type="radio" name="packages_plan" id="PackagePlanPaid" value="business_plans" checked>
                                        <label for="PackagePlanPaid">Paid Package (Business Plan)</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('templates/admin_footer'); ?>