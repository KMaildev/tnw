<style type="text/css">
    #footer-bar { 
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 98;
        background-color: #fa8f04;
        display: flex;
        min-height: 61px;
        min-height: calc(61px + (constant(safe-area-inset-bottom))*0.8)!important;
        min-height: calc(61px + (env(safe-area-inset-bottom))*0.8)!important;
        border-top: solid 1px rgba(255,255,255,.2);
        text-align: center;
        transition: transform 300ms ease!important;
    }

    #footer-bar a {
        color: #fff;
        padding-top: 12px;
        position: relative;
        flex: 1 1 auto;
        text-decoration: none!important;
    }

    #footer-bar a i {
        font-size: 18px;
        position: relative;
        z-index: 2;
    }

    #footer-bar a span {
        position: relative;
        z-index: 2;
        display: block;
        font-size: 10px;
        font-weight: 500;
        opacity: .7;
        font-family: roboto,sans-serif!important;
        margin-top: 3px;
        margin-bottom: 9px;
    }

    .footer-bar-1 .active-nav::after {
    content: '';
        background-color: #5d9cec;
        position: absolute;
        width: 70px;
        height: 4px;
        border-radius: 60px;
        left: 50%;
        top: 55px;
        transform: translateX(-50%);
    }
</style>
<style type="text/css">
    #mobileshow { 
        display:none; 
    }
    @media screen and (max-width: 540px){
        #mobileshow { 
            display:block; 
        }

        #footer_id { 
            display:none; 
        }
    }
</style>
<div id="mobileshow" style="padding-top: 34px;">
    <div id="footer-bar" class="footer-bar-1">
        <a href="<?php echo(site_url('propertylist/index/for_sale')); ?>">
            <i class="fa fa-layer-group"></i>
            <span>Sale</span>
        </a>
        <a href="<?php echo(site_url('propertylist/index/for_rent')); ?>">
            <i class="fa fa-file"></i><span>Rent</span>
        </a>
        <a href="<?php echo(site_url('welcome')); ?>">
            <i class="fa fa-home"></i><span>Welcome</span>
        </a>
        <a href="<?php echo(site_url('propertylist/index/new_properties')); ?>">
            <i class="fa fa-building"></i><span>New</span>
        </a>
        <a href="#" onclick="openNav();" data-menu="menu-main">
            <i class="fa fa-bars"></i><span>Menu</span>
        </a>
    </div>
</div>
