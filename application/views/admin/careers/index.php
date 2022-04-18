<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Careers
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo(site_url('main/careers')); ?>"><i class="fa fa-building"></i> Careers</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <a href="<?php echo(site_url('main/careers/create')); ?>" class="btn btn-warning btn-sm" title="Create" style="color: white;">
                                Create
                            </a>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">          
                                    <form>
                                        <input  type="text" class="form-control" placeholder="Search..." autocomplete="off" name="keyword" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>"> 
                                    </form>      
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="clearfix row" >
                            <?php 
                                foreach ($careers as $career) {
                             ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong><?php echo $career->position; ?></strong></h2>
                                        <ul class="header-dropdown">
                                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                                    <li><a href="<?php echo site_url('main/careers/edit/'.$career->c_id); ?>">Edit</a></li>

                                                    <li><a onclick="return confirm('Are you sure want to delete?')" href="<?php echo site_url('main/careers/destory/'.$career->c_id); ?>">Delete</a></li>

                                                    <li><a href="<?php echo site_url('main/careers/detail/'.$career->c_id); ?>">Detail</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="body">                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered m-b-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Position:</th>
                                                        <td><?php echo $career->position; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Experience:</th>
                                                        <td><?php echo $career->experience_level; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Salary: </th>
                                                        <td><span class="badge badge-primary"><?php echo $career->salary; ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Male:</th>
                                                        <td><?php echo $career->male_total; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Female:</th>
                                                        <td><?php echo $career->female_total; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Date:</th>
                                                        <td><?php echo $career->other_date; ?></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
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
