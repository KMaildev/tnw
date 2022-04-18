<style type="text/css">
	.swing {
	    animation: swing ease-in-out 2s infinite alternate;
	    transform-origin: center -20px;
	    float:left;
	    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
	}

	.swing:after{
	    content: '';
	    position: absolute;  
	    width: 10px; height: 10px;  
	    border: 1px solid white;
	    top: -10px; left: 50%;
	    z-index: 0;
	    border-bottom: none;
	    border-right: none;
	    transform: rotate(45deg);
	}

	.swing:before{
	    content: '';
	    position: absolute;
	    width: 5px; height: 5px;
	    top: -14px;left: 54%;
	    z-index: 5;
	    border-radius: 50% 50%;
	    background: white;
	}
	 
	@keyframes swing {
	    0% { transform: rotate(3deg); }
	    100% { transform: rotate(-3deg); }
	}
</style>
<figure class="swing" style="color: black; background-color: white; margin: 0px !important; padding: 2px; font-size: 13px;">
	<a href="<?php echo site_url('member/auth/register'); ?>">
		Post 
		<span style="color: orange; font-weight: bold;">Property Free </span> 
	</a>
</figure>
&nbsp;&nbsp;