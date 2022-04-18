<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<div class="container mb-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="recent-pos" style="background-color: white; width: 100%;">
                <div class="recent-main">
                    <div class="recent-img" style="padding: 10px;">
                        <img src="<?php echo base_url(); ?>data/save.svg" style="width: 100%;">
                    </div>
                    <div class="info-img" style="padding: 20px;">
                        <h6>Property Request</h6>

                        <p>
                            Did you find the property you want? <br>
                            Please tell us the buying/selling and rent property you were looking for. 
                            I will use it as a reference for the property to be released next.
                        </p>

                        <br>
                        <a href="<?php echo site_url('propertyrequest'); ?>" class="btn my-btn btn-md">
                            <span style="color: white;">
                              <i class="fa fa-home"></i>  Property Request
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>