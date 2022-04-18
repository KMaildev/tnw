
<a title="Add Note" href="#" class="btn btn-sm m-1 btn-default text-white" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-user-check text-white"></i>
    Create Testimonials
</a>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Create Testimonials
                </h5>
            </div>
            <div class="modal-body">
                <form method="post" class="py-3" action="<?php echo site_url('member/testimonials/save'); ?>" enctype='multipart/form-data'>
                    <div class="row clearfix">

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input  type="text" class="form-control custom" placeholder="Name" autocomplete="off" name="name" value="<?php echo set_value('name'); ?>">
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <input  type="text" class="form-control custom" placeholder="Company Name or Posication" autocomplete="off" name="company" value="<?php echo set_value('company'); ?>">
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <select class="form-control show-tick custom" name="region_id">
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
                        </div>
                    </div>


                    <h6 class="mt-4">Testimonial</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea id="summernote" name="testimonial" ><?php echo set_value('testimonial'); ?></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h6><i class="fa fa-images"> Profile Photo</i></h6>
                            <input class="form-control" type="file" id="formFile" name="single_file" accept=".png, .jpg, .jpeg">
                        </div>
                    </div>

                    <br>
                    <input type="submit" name="submit" id="submit" value="Save" class="btn btn-default text-white">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>