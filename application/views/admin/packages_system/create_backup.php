
                                <div class="col-sm-6">
                                    <b>Package Type</b>
                                    <select class="form-control show-tick" name="package_type" required="">
                                        <option value="">-- Please select package type --</option>
                                        <option value="Monthly">
                                            Monthly
                                        </option>
                                        <option value="Weekly">
                                            Weekly
                                        </option>
                                        <option value="Yearly">
                                            Yearly
                                        </option>
                                    </select>
                                </div>

                                <div class="col-sm-6" hidden>
                                    <div class="form-group">
                                        <b>Point Charges</b>
                                        <input required="" type="number" class="form-control" placeholder="Point Charges" autocomplete="off" name="point_charges" value="<?php echo set_value('point_charges'); ?>" min="0">
                                    </div>
                                </div>


                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <b>No. of Video clip</b>
                                        <input required="" type="number" class="form-control" placeholder="No. of video clip" autocomplete="off" name="video_clip" value="<?php echo set_value('video_clip'); ?>" min="0">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <b>No. of Facebook Ads</b>
                                        <input required="" type="number" class="form-control" placeholder="No. of Facebook ads" autocomplete="off" name="facebook_ads" value="<?php echo set_value('facebook_ads'); ?>" min="0">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <b>Price</b>
                                        <input required="" type="number" class="form-control" placeholder="Price" autocomplete="off" name="price" value="<?php echo set_value('price'); ?>" min="0">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <b>Discount</b>
                                        <input type="number" class="form-control" placeholder="Discount" autocomplete="off" name="discount" value="<?php echo set_value('discount'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <b>Plans</b>
                                    <select class="form-control show-tick" name="packages_plan" required="">
                                        <option value="personal_plan">
                                            Personal Plan
                                        </option>
                                        <option value="business_plans">
                                            Business Plans
                                        </option>
                                        <option value="free_for_agent">
                                            Free for start agent
                                        </option>
                                        <option value="free_for_owner">
                                            Free for start owner
                                        </option>
                                    </select>
                                </div>
