<?php
$lang_session = $this->session->userdata('lang');
?>

<header id="header-container" class="d-none d-sm-block">
	<div class="header-top" style="background-color: #af742e;">
		<div class="container">

			<div class="top-info hidden-sm-down">
				<div class="call-header">
					<p>
						<i class="fa fa-phone-square-alt" aria-hidden="true"></i>
						<a href="tel:09 42000 7322" style="color: white;">09 42000 7322, </a>
						<a href="tel:09420005622" style="color: white">09 42000 5622</a>
					</p>
				</div>
				<!--<div class="address-header">-->
				<!--    <p><i class="fa fa-map-marked" aria-hidden="true"></i> No.196 ,Pinlon Road, 35 ward , North Dagon</p>-->
				<!--</div>-->
				<div class="mail-header">
					<p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<a href="mailto:info@tatnaywonproperty.com" style="color: white;">info@tatnaywonproperty.com</a>
					</p>
				</div>
			</div>

			<div class="top-social hidden-sm-down">
				<div class="login-wrap">
					<ul class="d-flex">
						<?php if ($this->session->userdata('member_id')) { ?>
							<li>
								<a href="<?php echo (site_url('member/dashboard')); ?>"><i class="fa fa-desktop"></i> Dashboard</a>
							</li>
							<li>
								<a href="<?php echo (site_url('member/auth/logout')); ?>"><i class="fa fa-unlock-alt"></i> Logout</a>
							</li>
						<?php } else { ?>
							<li>
								<a href="<?php echo (site_url('member/auth/login')); ?>"><i class="fa fa-unlock-alt"></i>
									Login
								</a>
							</li>
							<li>
								<a href="<?php echo (site_url('member/auth/register')); ?>"><i class="fa fa-sign-in-alt"></i>
									Register
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>

				<div class="dropdown">

					<?php
					if (!$this->session->userdata('member_id')) {
						$this->load->view('templates/shared/post_free');
					}
					?>

					<a href="<?php echo (site_url('lang/language/unset_language')); ?>" class="btn-dropdown">
						<img src="<?php echo base_url(); ?>data/en.jpg" alt="lang" style="width: 30px;" />
					</a>

					<a href="<?php echo (site_url('lang/language/set_language')); ?>" class="btn-dropdown">
						<img src="<?php echo base_url(); ?>data/mm.png" alt="lang" style="width: 30px;" />
					</a>

				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</header>

<section id="header">
	<div class="container">
		<div class="headerlogo-panel">
			<div class="headerlogoleft">
				<div class="row">

					<div class="col-md-6 col-sm-12 col-lg-6 col-xs-6">
						<a href="<?php echo (site_url('welcome')); ?>">
							<img src="<?php echo base_url(); ?>data/logo/logo.jpg" alt="Tat Nay Won Property" />
						</a>
					</div>


					<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mobile_download.css">
					<div class="col-md-6 col-sm-12 col-lg-6 col-xs-6">
						<div class="headerlogoright">
							<div class="headshowimg">
								<a href="<?php echo site_url('mobile_app'); ?>">
									<img src="<?php echo base_url(); ?>/data/logo/download.gif" alt="ADS">
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section id="navigation">
	<div class="container">
		<div class="navmenu-wrapper">
			<div class="menu-lists">

				<nav class="navigation mobliemenu">
					<!-- click menu -->
					<div id="mySidenav" class="sidenav">
						<div class="headingmenumob">
							<div class="mobileheaderpanel">

								<div class="mobileheaderlogo" style="padding: 20px;">
									<img src="<?php echo (base_url()); ?>data/logo/logo.jpg" alt="Tat Nay Won Property" class="mobileheaderlogoimg" style="width: 90%;">
								</div>

								<div class="menupostright">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								</div>
							</div>

							<div class="headerbutton">
								<div class="accountlog">
									<div class="accountlogright">
										<a href="<?php echo (site_url('member/dashboard')); ?>" title="">
											<small>Upload</small>
										</a>
									</div>
								</div>
								<div class="flagpanel">
									<div class="chooselangmobile">
										<div class="en">
											<a href="<?php echo (site_url('lang/language/unset_language')); ?>" title="">
												<img src="<?php echo (base_url()); ?>data/en.jpg" alt="">
											</a>
										</div>

										<div class="mm">
											<a href="<?php echo (site_url('lang/language/set_language')); ?>" title="">
												<img src="<?php echo (base_url()); ?>data/mm.png" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="mobaccountlogs">
								<?php if ($this->session->userdata('member_id')) { ?>
									<a href="<?php echo (site_url('member/dashboard')); ?>" style='color: white; font-size: 20px;'>
										Dashboard
									</a>
								<?php } else { ?>
									<a style='color: #fff;' class='en' href="<?php echo (site_url('member/auth/login')); ?>" title="Login">Login</a>
									<a style='color: #fff;' class='en' href="<?php echo (site_url('member/auth/register')); ?>" title="Register">Register</a>
								<?php } ?>

							</div>
						</div>
						<!-- mobile menu -->
						<div class='headingbodymob'>
							<ul style="list-style: none">
								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/home.svg" />
									<a href="<?php echo (site_url('welcome')); ?>" title="Home">
										<?php
										echo ($lang_session) ? "ပင်မ" : "Home";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/sale.svg" />
									<a href="<?php echo (site_url('propertylist/index/for_sale')); ?>" title="Sale">
										<?php
										echo ($lang_session) ? "ရောင်းရန်" : "For Sale";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/rent.svg" />
									<a href="<?php echo (site_url('propertylist/index/for_rent')); ?>" title="Lands And Houses">
										<?php
										echo ($lang_session) ? "ငှားရန်အိမ်ခြံမြေများ" : "Lands And Houses";
										?>
									</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/rent.svg" />
									<a href="<?php echo (site_url('propertylist/index/hostel')); ?>" title="Hostels">
										<?php
										echo ($lang_session) ? "ငှားရန်အဆောင်များ" : "Hostels";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/new.png" />
									<a href="<?php echo (site_url('propertylist/index/new_properties')); ?>" title="New Properties">
										<?php
										echo ($lang_session) ? "ကြိုပွိုင့်" : "New Properties";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/want_to_buy.svg" />
									<a href="<?php echo (site_url('propertylist/index/by_owner_for_sale ')); ?>" title="By Owner For Sale">
										<?php
										echo ($lang_session) ? "ပိုင်ရှင်ကိုယ်တိုင် ရောင်းရန်" : "By Owner For Sale";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/rentt.svg" />
									<a href="<?php echo (site_url('propertylist/index/by_owner_for_rent')); ?>" title="By Owner For Rent">
										<?php
										echo ($lang_session) ? "ပိုင်ရှင်ကိုယ်တိုင် ငှားရန်" : "By Owner For Rent";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/want.png" />
									<a href="<?php echo (site_url('wanted/want_to_buy')); ?>" title="New Properties">
										<?php
										echo ($lang_session) ? "အိမ်ဝယ်ရန် ရှာဖွေနေသူများ" : "People Who Want To Buy";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/want.png" />
									<a href="<?php echo (site_url('wanted/want_to_rent')); ?>" title="New Properties">
										<?php
										echo ($lang_session) ? "အိမ်ငှါးရန် ရှာဖွေနေသူများ" : "People Who Want To Rent";
										?>
									</a>
								</li>


								<li class="withmobicon" hidden>
									<img src="<?php echo (base_url()); ?>data/icon/building.svg" />
									<a href="<?php echo (site_url('developers')); ?>" title="Developers">
										<?php
										echo ($lang_session) ? "ဆောက်လုပ်ရေးကုမ္ပဏီများ" : "Developers";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/agent.svg" />
									<a href="<?php echo (site_url('agents')); ?>" title="Agents">
										<?php
										echo ($lang_session) ? "အကျိုးဆောင်ကုမ္ပဏီများ" : "Agents";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/team.png" />
									<a href="<?php echo (site_url('pages/testimonials')); ?>">
										<?php
										echo ($lang_session) ? "အကြံပြုသုံးသပ်ခြင်း" : "Testimonials";
										?>
									</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/list.svg" />
									<a href="<?php echo (site_url('property_guide')); ?>" title="Property Guide">
										<?php
										echo ($lang_session) ? "အိမ်ခြံမြေလမ်းညွှန်" : "Property Guide";
										?>
									</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/careers.svg" />
									<a href="<?php echo (site_url('careers')); ?>" title="Careers">Careers</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/calendar.svg" />
									<a href="<?php echo (site_url('events')); ?>">Events</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/covid-19.svg" />
									<a href="<?php echo (site_url('covid')); ?>">Covid-19</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/newspaper.svg" />
									<a href="<?php echo (site_url('latest_news')); ?>">
										<?php
										echo ($lang_session) ? "နောက်ဆုံးရသတင်းများ" : "Latest News";
										?>
									</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/event.svg" />
									<a href="<?php echo (site_url('events')); ?>">Property Event</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/open-book.svg" />
									<a href="<?php echo (site_url('property_books')); ?>">
										<?php
										echo ($lang_session) ? "အိမ်ခြံမြေ စာအုပ်များ" : "Property Books";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/calculator.svg" />
									<a href="<?php echo (site_url('calculate')); ?>">Calculate</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/accounting.svg" />
									<a href="<?php echo (site_url('home_loan_calculator')); ?>">
										<?php
										echo ($lang_session) ? "အိမ်ရာချေးငွေ တွက်ချက်ရန်" : "Home Loan Calculator";
										?>
									</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/home-loan.svg" />
									<a href="<?php echo (site_url('home_loan_application')); ?>">
										<?php
										echo ($lang_session) ? "အိမ်ရာချေးငွေ လျှောက်ထားရန်" : "Home Loan Application";
										?>
									</a>
								</li>



								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/internet.png" />
									<a href="<?php echo site_url('mobile_app') ?>">
										<?php
										echo ($lang_session) ? "မိုဘိုင်း Application" : "Mobile Application";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/cloudy.svg" />
									<a href="<?php echo (site_url('weather')); ?>">Weather</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/video.svg" />
									<a href="<?php echo (site_url('tnw_video_channel')); ?>">TNW Video Channel</a>
								</li>


								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/suggestion.png" />
									<a href="<?php echo site_url('contact/suggestion') ?>">
										<?php
										echo ($lang_session) ? "အကြံဉာဏ်ပေးရန်" : "Suggestion";
										?>
									</a>
								</li>

								<li class="withmobicon">
									<img src="<?php echo (base_url()); ?>data/icon/contact.svg" />
									<a href="<?php echo (site_url('contact')); ?>">ဆက်သွယ်ရန်</a>
								</li>

							</ul>
						</div>
						<!-- mobile menu -->
					</div>


					<!-- Main Menu -->
					<ul class="mainmenu">
						<li style="font-size: 16px;">
							<a href="<?php echo (site_url('welcome')); ?>" title="Home">
								<i class="fa fa-home"></i>
							</a>
						</li>

						<li style="font-size: 16px;">
							<a href="<?php echo (site_url('propertylist/index/for_sale')); ?>" title="For Sale">
								<?php
								echo ($lang_session) ? "ရောင်းရန်" : "For Sale";
								?>
							</a>
						</li>



						<li class='morehover' style="font-size: 16px;">
							<a onclick="event.preventDefault();" href="#" title="For Rent">
								<?php
								echo ($lang_session) ? "ငှားရန်" : "For Rent";
								?>
							</a>
							<ul class='submorenavi'>
								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('propertylist/index/for_rent')); ?>" title="Lands And Houses">
										<?php
										echo ($lang_session) ? "အိမ်ခြံမြေများ" : "Lands And Houses";
										?>
									</a>
								</li>
								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('propertylist/index/hostel')); ?>" title="Hostels">
										<?php
										echo ($lang_session) ? "အဆောင်များ" : "Hostels";
										?>
									</a>
								</li>
							</ul>
						</li>

						<li style="font-size: 16px;">
							<a href="<?php echo (site_url('propertylist/index/new_properties')); ?>" title="New Properties">

								<?php
								echo ($lang_session) ? "ကြိုပွိုင့်" : "New Properties";
								?>
							</a>
						</li>

						<li class='morehover' style="font-size: 16px;">
							<a onclick="event.preventDefault();" href="#" title="By Owner">
								<?php
								echo ($lang_session) ? "ပိုင်ရှင်ကိုယ်တိုင်" : "By Owner";
								?>
							</a>
							<ul class='submorenavi'>
								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('propertylist/index/by_owner_for_sale ')); ?>" title="For Sale">
										<?php
										echo ($lang_session) ? "ရောင်းရန်" : "For Sale";
										?>
									</a>
								</li>
								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('propertylist/index/by_owner_for_rent')); ?>" title="For Rent">
										<?php
										echo ($lang_session) ? "ငှါးရန်" : "For Rent";
										?>
									</a>
								</li>
							</ul>
						</li>

						<li class='morehover' style="font-size: 16px;">
							<a onclick="event.preventDefault();" href="#" title="Wanted Listing">
								<?php
								echo ($lang_session) ? "အိမ်ရှာဖွေသူများ" : "Wanted Listing";
								?>
							</a>
							<ul class='submorenavi'>
								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('wanted/want_to_buy')); ?>">
										<?php
										echo ($lang_session) ? "အိမ် ဝယ်ရန် ရှာဖွေနေသူများ" : "People Who Want To Buy";
										?>
									</a>
								</li>
								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('wanted/want_to_rent')); ?>">
										<?php
										echo ($lang_session) ? "အိမ် ငှါးရန် ရှာဖွေနေသူများ" : "People Who Want To Rent";
										?>
									</a>
								</li>
							</ul>
						</li>

						<li style="font-size: 16px;">
							<a href="<?php echo (site_url('property_guide')); ?>" title="Property Guide">
								<?php
								echo ($lang_session) ? "အိမ်ခြံမြေလမ်းညွှန်" : "Property Guide";
								?>
							</a>
						</li>

						<li hidden>
							<a href="<?php echo (site_url('developers')); ?>" title="Developers">
								<?php
								echo ($lang_session) ? "ဆောက်လုပ်ရေးကုမ္ပဏီများ" : "Developers";
								?>
							</a>
						</li>

						<li style="font-size: 16px;">
							<a href="<?php echo (site_url('agents')); ?>" title="Agents">
								<?php
								echo ($lang_session) ? "အကျိုးဆောင်ကုမ္ပဏီများ" : "Agents";
								?>
							</a>
						</li>

						<li style="font-size: 16px;">
							<a href="<?php echo (site_url('pages/testimonials')); ?>">
								<?php
								echo ($lang_session) ? "အကြံပြုသုံးသပ်ခြင်း" : "Testimonials";
								?>
							</a>
						</li>




						<li class='morehover' style="font-size: 16px;">
							<a onclick="event.preventDefault();" href="#" title="Property Related">
								<?php
								echo ($lang_session) ? " သိကောင်းစရာ" : "Related";
								?>
							</a>
							<ul class='submorenavi'>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('privacy/terms') ?>" title="Terms and Conditions">
										<?php
										echo ($lang_session) ? "စည်းကမ်းနှင့်သတ်မှတ်ချက်များ" : "Terms and Conditions";
										?>
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('pages/buyourservices') ?>" title="Package">
										<?php
										echo ($lang_session) ? "Package Plan" : "Package Plan";
										?>
									</a>
								</li>


								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('careers')); ?>" title="Careers">
										Careers
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('events')); ?>" title="Events">
										Events
									</a>
								</li>



								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('calculate')); ?>">
										Calculate
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('home_loan_calculator')); ?>">
										<?php
										echo ($lang_session) ? "အိမ်ရာချေးငွေ တွက်ချက်ရန်" : "Home Loan Calculator";
										?>
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('home_loan_application')); ?>">
										<?php
										echo ($lang_session) ? "အိမ်ရာချေးငွေ လျှောက်ထားရန်" : "Home Loan Application";
										?>
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('covid') ?>">
										Covid-19
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('latest_news'); ?>">
										<?php
										echo ($lang_session) ? "နောက်ဆုံးရသတင်းများ" : "Latest News";
										?>
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('events')); ?>">
										Property Event
									</a>
								</li>
								<li style="font-size: 16px;">
									<a href="<?php echo (site_url('property_books')); ?>">
										<?php
										echo ($lang_session) ? "အိမ်ခြံမြေ စာအုပ်များ" : "Property Books";
										?>
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('mobile_app') ?>">
										<?php
										echo ($lang_session) ? "မိုဘိုင်း Application" : "Mobile Application";
										?>
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('weather') ?>">
										Weather
									</a>
								</li>
								<li style="font-size: 16px;">
									<a href="<?php echo site_url('tnw_video_channel') ?>">
										TNW Video Channel
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('contact/suggestion') ?>">
										<?php
										echo ($lang_session) ? "အကြံဉာဏ်ပေးရန်" : "Suggestion";
										?>
									</a>
								</li>

								<li style="font-size: 16px;">
									<a href="<?php echo site_url('contact') ?>">
										<?php
										echo ($lang_session) ? "ဆက်သွယ်ရန်" : "Contact Us";
										?>
									</a>
								</li>
							</ul>
						</li>

						<li style="font-size: 16px;">
							<a href="<?php echo (site_url('pages/search')); ?>">
								<?php
								echo ($lang_session) ? "ရှာဖွေရန်" : "Search";
								?>
								<i class="fa fa-search"></i>
							</a>
						</li>

					</ul>

				</nav>
			</div>
		</div>
	</div>
</section>
<div id="wrapper">