<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group">
            <form method="get" action="<?php echo site_url('main/shared/ad_search/index'); ?>">
                <input type="text" class="form-control" placeholder="ID Number" autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) {
                                                                                                                                echo $this->input->get('keyword');
                                                                                                                            } ?>">
            </form>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12">
        <form method="get" action="<?php echo site_url('main/shared/ad_search/filter_search'); ?>">
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