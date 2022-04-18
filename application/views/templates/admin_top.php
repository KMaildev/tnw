<nav class="navbar">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo(site_url('main/dashboard')); ?>">
                    <span class="m-l-10">TAT NAY WON</span>
                </a>
            </div>
        </li>
        <li>
            <a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a>
        </li>


        <li class="float-right">
            
            <a href="<?php echo(site_url('auth/logout')); ?>" class="mega-menu" data-close="true">
                <i class="zmdi zmdi-power"></i>
            </a>

            <a title="Company" href="<?php echo(site_url('main/company')); ?>" class="js-right-sidebar" data-close="true">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </a>
         
            
        </li>
    </ul>
</nav>
