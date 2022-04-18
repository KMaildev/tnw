<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<section class="user-page py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2">
                    

                <div class="dashborad-box">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="title" style="padding: 15px; box-shadow: 1px 1px 1px #000000; background-color: white;">
                                <i class="fa fa-briefcase"></i> 
                                   <?php 
                                        if ($lang_session) {
                                            echo "အလုပ်အကိုင် အခွင့်အလမ်း";
                                        }else{
                                            echo "Job";
                                        }
                                    ?>
                                <i class="fa fa-briefcase"></i>
                            </h4>
                        </div>

                        <div class="col-lg-4">
                            <div class="at-col-default-mar" >
                                <form>
                                    <input class="at-input" type="text" name="keyword" placeholder="Search" autocomplete="off" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>">
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="section-body listing-table py-2">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="background-color: #9f7e57; color: white;">Position</th>
                                        <th style="background-color: #9f7e57; color: white;">Experience Level</th>
                                        <th style="background-color: #9f7e57; color: white;">Max Salary</th>
                                        <th style="background-color: #9f7e57; color: white;">Job Location</th>
                                        <th style="background-color: #9f7e57; color: white;">Posted Date</th>
                                        <th style="background-color: #9f7e57; color: white;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($careers as $career) {
                                     ?>
                                    <tr>
                                        <td><?php echo $career->position; ?></td>
                                        <td><?php echo $career->experience_level; ?>	</td>
                                        <td><?php echo $career->salary; ?></td>
                                        <td><?php echo $career->job_location; ?></td>
                                        <td><?php echo $career->other_date; ?></td>
                                        <td>
                                        	<a title="View" href="<?php echo site_url('careers/detail/'.$career->c_id); ?>" class="btn btn-sm"  style="height: 30px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); color: white; background-color: #ff8f09;"> View Detail</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                            <nav aria-label="..." class="pt-0">
                               <?= $this->pagination->create_links(); ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<?php $this->load->view('templates/footer'); ?>