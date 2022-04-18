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
                        <?php $this->load->view('templates/shared/alert_message'); ?>
                        <a title="Add Note" href="#" class="btn btn-sm m-1 btn-default text-white" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-clipboard text-white"></i> Create note</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Create note
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <span class="help-block pyidaungsu-font">မှတ်စုတိုရေးပါ</span>
                                        <form method="post" class="py-3" action="<?php echo site_url('member/my_note/save'); ?>">
                                            <input type="text" name="title" placeholder="Title" class="form-control m-2" required="">
                                            <textarea required="" name="description" class="form-control m-2" rows="5" cols="5" placeholder="Description"></textarea>
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

                        <div class="my-address">
                            <h3 class="heading">My Note</h3>

                            <?php if ($notepads) { ?>
                                <?php
                                $member_session_id = $this->session->userdata('member_id');
                                foreach ($notepads as $notepad) {
                                    if ($member_session_id == $notepad->users_info_id) {
                                ?>
                                        <div class="card">
                                            <div class="card-header">
                                                <b> <?php echo $notepad->title; ?></b><br>
                                                <small><i class="fa fa-clock"></i> <?php echo $notepad->other_date; ?></small>
                                            </div>
                                            <div class="card-body">
                                                <p class="m-3">
                                                    <?php
                                                    if ($notepad->status == 0) {
                                                        echo "<del>" . $notepad->description . "</del>";
                                                    } elseif ($notepad->status == 1) {
                                                        echo $notepad->description;
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>

                                        <a title="Edit Note" href="#" class="btn btn-sm m-1 btn-default text-white" data-toggle="modal" data-target="#exampleModal<?php echo $notepad->np_id; ?>"><i class="fa fa-edit text-white"></i> Edit note</a>

                                        <div class="modal fade" id="exampleModal<?php echo $notepad->np_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Edit note
                                                        </h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="help-block pyidaungsu-font">မှတ်စုတိုရေးပါ</span>
                                                        <form method="post" class="py-3" action="<?php echo site_url('member/my_note/update'); ?>">
                                                            <input type="hidden" name="note_id" value="<?php echo $notepad->np_id; ?>">
                                                            <input type="text" name="title" placeholder="Title" class="form-control m-2" required="" value="<?php echo $notepad->title; ?>">
                                                            <textarea required="" name="description" class="form-control m-2" rows="5" cols="5" placeholder="Description"><?php echo $notepad->description; ?></textarea>
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

                                        <a href="<?php echo site_url('member/my_note/destroy/' . $notepad->np_id); ?>" title="<?php echo $notepad->np_id; ?>" class="btn btn-primary btn-sm m-2"><i class="fa fa-trash"></i> Delete</a>

                                        <?php
                                        if ($notepad->status == 0) {
                                        ?>
                                            <a href="<?php echo site_url('member/my_note/changeStatusInactive/' . $notepad->np_id); ?>" class="btn btn-sm btn-primary m-1 btn-default text-white"><i class="fa fa-exchange-alt" style="color: blue;"></i></a>
                                        <?php } elseif ($notepad->status == 1) {
                                        ?>
                                            <a href="<?php echo site_url('member/my_note/changeStatusActive/' . $notepad->np_id); ?>" class="btn btn-sm btn-primary m-1 btn-default text-white"><i class="fa fa-exchange-alt" style="color: blue;"></i></a>
                                        <?php } ?>

                                        <br><br>
                                    <?php } ?>
                                <?php } ?>
                            <?php } else { ?>
                                <div class="alert alert-dismissible alert-success">
                                    <strong>Data not found</strong>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>