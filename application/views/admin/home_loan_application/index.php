<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Home Loan Application
                <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : <?php echo $count_all; ?></small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo(site_url('main/home_loan_application')); ?>"><i class="fa fa-building"></i> Home Loan Application</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
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
                                foreach ($home_loan_applications as $home_loan_applications) {
                             ?>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong><?php echo $home_loan_applications->name; ?></strong></h2>
                                        <ul class="header-dropdown">
                                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                                    <a href="<?php echo site_url('main/home_loan_application/destroy/'.$home_loan_applications->h_id); ?>">Delete</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="body">                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered m-b-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Name:</th>
                                                        <td><?php echo $home_loan_applications->name; ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th scope="row">Email: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->email; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Phone: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->phone; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Date Of Birth: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->date_of_birth; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Date Of Birth: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->application_type; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Employment Status: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->employment_status; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Incomes: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->incomes; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Current Location: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->current_location; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Bank: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->bank; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Region: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->region; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Township: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->townships; ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">Register Date: </th>
                                                        <td>
                                                            <?php echo $home_loan_applications->other_date; ?>
                                                        </td>
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
