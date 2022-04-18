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

                    <div class="col-lg-12 col-md-12 col-xs-12 pl-3 bg-white p-3" >
                        <?php $this->load->view('templates/shared/alert_message'); ?>
                        <a title="Add Note" href="#" class="btn btn-sm m-1 btn-default text-white"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-folder text-white"></i> Create Folder</a>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Create Folder
                                </h5>
                              </div>
                              <div class="modal-body">
                                <span class="help-block pyidaungsu-font">ဖိုလ်ဒါကိုဖန်တီးပါ</span>
                                    <form method="post" class="py-3" action="<?php echo site_url('member/my_photo_store/create_folder'); ?>"> 
                                        <input type="text" name="folder_name" placeholder="Folder Name" class="form-control" required="" autocomplete="off">
                                        <br>
                                        <input type="submit" name="submit" id="submit" value="Save" class="btn btn-default btn-sm text-white"> 
                                    </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="my-address">
                            <h3 class="heading">My Folder</h3>
                             <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                <?php 
                                    $member_session_id = $this->session->userdata('member_id');
                                    foreach ($folders as $folder) {
                                        if ($member_session_id == $folder->users_info_id) {
                                 ?>
                                    <div class="col-lg-3 col-md-3 col-sm-12" title="<?php echo $folder->other_date; ?>" >
                                        <a href="<?php echo site_url('member/my_photo_store/my_data/'.$folder->folder_id); ?>">
                                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="background-color: #f0b95a; padding: 10px; color: white;">
                                              <div class="toast-body">
                                                <i class="fa fa-folder fa-lg"></i>
                                                &nbsp;&nbsp;
                                                <?php echo $folder->folder_name; ?>
                                              </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                <?php } ?>

                                </div>

                                <br><br>
                                <?= $this->pagination->create_links(); ?>
                            </div>
                            
                       
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>