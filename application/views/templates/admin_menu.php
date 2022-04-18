<aside id="leftsidebar" class="sidebar">
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div>
                                <a href="<?php echo (site_url('main/dashboard')); ?>">
                                    <img src="<?php echo base_url(); ?>data/logo.jpg" alt="User">
                                </a>
                            </div>
                            <div class="detail">
                                <h5 style="font-size: 15px;">TatNayWonProperty.com</h5>
                            </div>

                        </div>
                    </li>
                    <li class="header">CONTROL</li>

                    <li>
                        <a href="<?php echo (site_url('main/dashboard')); ?>" title="Dashboard">
                            <i class="zmdi zmdi-home"></i><span>Dashboard</span>
                        </a>
                    </li>

                    <li title="For Sale">
                        <a href="<?php echo (site_url('main/for_sale')); ?>" title="Dashboard">
                            <i class="fa fa-building"></i><span>For Sale</span>
                        </a>
                    </li>

                    <li title="For Rent">
                        <a href="<?php echo (site_url('main/for_rent')); ?>" title="Dashboard">
                            <i class="fa fa-building"></i><span>For Rent</span>
                        </a>
                    </li>

                    <li title="New Properties">
                        <a href="<?php echo (site_url('main/new_properties')); ?>" title="Dashboard">
                            <i class="fa fa-building"></i><span>New Properties</span>
                        </a>
                    </li>

                    <li title="By Owner For Sale">
                        <a href="<?php echo (site_url('main/by_owner_for_sale')); ?>" title="By Owner For Sale">
                            <i class="fa fa-user"></i><span>By Owner For Sale</span>
                        </a>
                    </li>

                    <li title="By Owner For Rent">
                        <a href="<?php echo (site_url('main/by_owner_for_rent')); ?>" title="By Owner For Rent">
                            <i class="fa fa-user"></i><span>By Owner For Rent</span>
                        </a>
                    </li>


                    <li title="Property Lists">
                        <a href="<?php echo (site_url('main/all/property_list')); ?>" title="Property Lists">
                            <i class="fa fa-building"></i><span>Property Lists</span>
                        </a>
                    </li>


                    <li title="For Rent" hidden>
                        <a href="<?php echo (site_url('main/my_property/index/hostel')); ?>" title="Dashboard">
                            <i class="fa fa-building"></i><span>Hostel Rent (အဆောင်ငှါးရန်)</span>
                        </a>
                    </li>

                    <li title="List of want to buy">
                        <a href="<?php echo (site_url('main/wanted_list/index/want_to_buy')); ?>">
                            <i class="fa fa-city"></i><span>List of want to buy</span>
                        </a>
                    </li>

                    <li title="List of want to Rent">
                        <a href="<?php echo (site_url('main/wanted_list/index/want_to_rent')); ?>">
                            <i class="fa fa-city"></i><span>List of want to rent</span>
                        </a>
                    </li>

                    <li title="Configuration">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i>
                            <span>Soldout </span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo (site_url('main/shared/soldout_data/index/for_sale')); ?>">For Sale</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/shared/soldout_data/index/for_rent')); ?>">For Rent</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/shared/soldout_data/index/new_properties')); ?>">New Properties</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/shared/soldout_data/index/by_owner_for_sale')); ?>">By Owner For Sale</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/shared/soldout_data/index/by_owner_for_rent')); ?>">By Owner For Rent</a>
                            </li>

                        </ul>
                    </li>


                    <li title="Developers">
                        <a href="<?php echo (site_url('main/developers')); ?>" title="Dashboard">
                            <i class="fa fa-users"></i><span>Developers & Agents</span>
                        </a>
                    </li>

                    <li title="Message Inbox">
                        <a href="<?php echo (site_url('main/message_inbox/index')); ?>" title="Message Inbox">
                            <i class="fa fa-comments"></i>
                            <span>
                                Message Inbox
                            </span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success text-white" id="MessageInboxCount">
                                0
                            </span>
                        </a>
                    </li>

                    <li title="Member Message">
                        <a href="<?php echo (site_url('main/member_message')); ?>" title="Member Message">
                            <i class="fa fa-comment-dots"></i>
                            <span>Member Message</span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success text-white" id="MemberMessageCount">
                                0
                            </span>
                        </a>
                    </li>

                    <li title="Appointment">
                        <a href="<?php echo (site_url('main/appointment')); ?>" title="Appointment">
                            <i class="fa fa-comments"></i><span>Appointment</span>
                        </a>
                    </li>

                    <li title="Report">
                        <a href="<?php echo (site_url('include/admin_report/admin_report')); ?>" title="Report">
                            <i class="fa fa-flag"></i><span>Report</span>
                        </a>
                    </li>



                    <li title="Property Request">
                        <a href="<?php echo (site_url('main/propertyrequest')); ?>" title="Property Request">
                            <i class="fa fa-home"></i><span>Property Request</span>
                        </a>
                    </li>

                    <li title="Configuration">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i>
                            <span>Packages</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="<?php echo (site_url('main/order_system')); ?>">Order</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/packages_system')); ?>">Packages</a>
                            </li>


                            <li>
                                <a href="<?php echo (site_url('main/package_viewer')); ?>">Package Viewr</a>
                            </li>

                        </ul>
                    </li>

                    <li title="Configuration">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-cogs"></i>
                            <span>Configuration</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="<?php echo (site_url('main/bank_accounts')); ?>">Bank Account</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/property_type')); ?>">Property Type</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/region')); ?>">Region</a>
                            </li>

                            <li>
                                <a href="<?php echo (site_url('main/townships')); ?>">Townships</a>
                            </li>
                        </ul>
                    </li>

                    <li title="Developers">
                        <a href="<?php echo (site_url('main/property_guide')); ?>" title="Property Guide">
                            <i class="fa fa-atlas"></i><span>Property Guide</span>
                        </a>
                    </li>


                    <li title="Developers">
                        <a href="<?php echo (site_url('main/latest_news')); ?>" title="Latest news">
                            <i class="fa fa-newspaper"></i><span>Latest news</span>
                        </a>
                    </li>


                    <li title="Notification">
                        <a href="<?php echo (site_url('main/notification_system')); ?>" title="Notification">
                            <i class="fa fa-bell"></i><span>Notification</span>
                        </a>
                    </li>

                    <li title="Property Book">
                        <a href="<?php echo (site_url('main/property_book')); ?>" title="Property Guide">
                            <i class="fa fa-book"></i><span>Property Book</span>
                        </a>
                    </li>

                    <li title="Property Book">
                        <a href="<?php echo (site_url('main/testimonials')); ?>" title="Testimonials">
                            <i class="fa fa-users"></i><span>Testimonials</span>
                        </a>
                    </li>


                    <li title="Events">
                        <a href="<?php echo (site_url('main/events')); ?>">
                            <i class="fa fa-calendar-check"></i><span>Events</span>
                        </a>
                    </li>

                    <li title="Event booking">
                        <a href="<?php echo (site_url('main/event_booking')); ?>">
                            <i class="fa fa-calendar-check"></i><span>Event booking</span>
                        </a>
                    </li>

                    <li title="Careers">
                        <a href="<?php echo (site_url('main/careers')); ?>">
                            <i class="fa fa-briefcase"></i><span>Careers</span>
                        </a>
                    </li>

                    <li title="Job application list">
                        <a href="<?php echo (site_url('main/job_application_list')); ?>">
                            <i class="fa fa-briefcase"></i><span>Job application list</span>
                        </a>
                    </li>

                    <li title="Job application list">
                        <a href="<?php echo (site_url('main/home_loan_application')); ?>">
                            <i class="fa fa-dollar-sign"></i><span>Home Loan</span>
                        </a>
                    </li>

                    <li title="Job application list">
                        <a href="<?php echo (site_url('main/tnw_cloud')); ?>">
                            <i class="fa fa-folder"></i><span>TNW Cloud</span>
                        </a>
                    </li>

                    <li title="Job application list">
                        <a href="<?php echo (site_url('main/tnw_video_channel')); ?>">
                            <i class="fa fa-video"></i><span>TNW Video Channel </span>
                        </a>
                    </li>

                    <li title="Note">
                        <a href="<?php echo (site_url('main/note')); ?>">
                            <i class="fa fa-folder"></i><span>Note</span>
                        </a>
                    </li>

                    <li title="List of admin">
                        <a href="<?php echo (site_url('main/admin_list')); ?>">
                            <i class="fa fa-users"></i><span>List of admin</span>
                        </a>
                    </li>

                    <li title="Logout">
                        <a href="<?php echo (site_url('auth/logout')); ?>">
                            <i class="fa fa-lock"></i><span>Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</aside>