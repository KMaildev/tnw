<?php $this->load->view('templates/mobile_menu/menu'); ?>

<footer class="first-footer" id="footer_id">
    <div class="top-footer" style="background-image: url(<?php echo base_url('data/bg-counter.jpg'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3 style="color: white;">Contact Us</h3>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #c77b22;"></i>
                                    <p class="in-p" style="color: white;">No.196 ,Pinlon Road, 35 ward , North Dagon</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true" style="color: #c77b22;;"></i>
                                    <p class="in-p" style="color: white;">09 42000 7322, 09 42000 5622</p>
                                </div>

                                <div class="info" hidden>
                                    <i class="fa fa-phone" aria-hidden="true" style="color: #c77b22;;"></i>
                                    <p class="in-p" style="color: white;">09448025742, 09 256841877</p>
                                </div>

                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true" style="color: #c77b22;;"></i>
                                    <p class="in-p ti" style="color:white;">info@tatnaywonproperty.com</p>
                                </div>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true" style="color: #c77b22;;"></i>
                                    <p class="in-p ti" style="color: white;">admin@tatnaywonproperty.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3 style="color: white;">Navigation</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="<?php echo site_url('welcome'); ?>" style="color: white;">Home</a></li>
                                <li><a href="<?php echo (site_url('propertylist/index/for_sale')); ?>" style="color: white;">For Sale</a></li>
                                <li><a href="<?php echo (site_url('propertylist/index/for_rent')); ?>" style="color: white;">For Rent</a></li>
                                <li><a href="<?php echo (site_url('propertylist/index/new_properties')); ?>" style="color: white;"> New Properties</a></li>
                                <li><a href="<?php echo site_url('events'); ?>" style="color: white;">Events</a></li>
                                <li><a href="<?php echo site_url('careers'); ?>" style="color: white;">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3 style="color: white;">Customer Services</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="<?php echo site_url('member/auth/login'); ?>" style="color: white;">Login</a></li>
                                <li><a href="<?php echo site_url('member/auth/register'); ?>" style="color: white;">Register</a></li>
                                <li><a href="<?php echo site_url('member/dashboard'); ?>" style="color: white;">Ads Upload</a></li>
                                <li><a href="<?php echo site_url('contact'); ?>" style="color: white;">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3 style="color: white;">CONNECT WITH US</h3>
                        <a href="https://www.facebook.com/TatNayWonProperty/">
                            <img src="<?php echo base_url(); ?>/data/fb.png" style="width: 40px;">
                        </a>
                        <img src="<?php echo base_url(); ?>/data/yt.png" style="width: 40px;">
                        <img src="<?php echo base_url(); ?>/data/twitter.png" style="width: 30px;">
                        <br><br>
                        <iframe id="fbWG" src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/TatNayWonProperty/&amp;send=false&amp;layout=standard&amp;width=300&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:308px; height:35px;" allowtransparency="true" data-colorscheme="dark"></iframe>

                        <!-- <iframe id="twitterWG" allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=99acresindia" style="width:248px; height:28px;"></iframe>
                            <div class="clr"></div> -->

                        <a href="https://apps.apple.com/us/app/tatnaywonproperty/id1584755479">
                            <img src="<?php echo base_url(); ?>data/store/app-store.svg" alt="Get it on Google Play" border="0" style="width: 100px;">
                        </a>

                        <a href="#" onclick="androidApp()">
                            <img src="<?php echo base_url(); ?>data/store/play-store.png" alt="Get it on Google Play" border="0" style="width: 103px;">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>
                <small>
                    Copyright © <?php echo date("Y"); ?> tatnaywonproperty.com. All Rights Reserved.
                </small>
            </p>
            <p>
                <small>
                    <a href="<?php echo site_url('mobile_app'); ?>">Mobile App</a>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                    <i class="fa fa-android"></i> <span>&nbsp;&nbsp;&nbsp;</span>
                    Android

                    <span>&nbsp;&nbsp;&nbsp;</span>
                    <i class="fa fa-apple"></i> <span>&nbsp;&nbsp;&nbsp;</span>
                    Huawei Phone

                    <span>&nbsp;&nbsp;&nbsp;</span>
                    <i class="fa fa-apple"></i> <span>&nbsp;&nbsp;&nbsp;</span>
                    IOS


                    <span>&nbsp;&nbsp;&nbsp;</span>
                    <i class="fa fa-apple"></i> <span>&nbsp;&nbsp;&nbsp;</span>
                    <?php
                    if (isset($site_viewer_total)) {
                        echo "Viewer: " . $site_viewer_total->viewer;
                    }

                    ?>



                </small>
            </p>
        </div>
    </div>
</footer>

<!-- <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script> -->
<script src="<?php echo base_url(); ?>/assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/moment.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/slick3.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/fitvids.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/smooth-scroll.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/lightcase.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/ajaxchimp.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/newsletter.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/forms-2.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/leaflet.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/leaflet-providers.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/leaflet.markercluster.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/map4.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/color-switcher.js"></script>

<!-- Slider Revolution scripts -->
<script src="<?php echo base_url(); ?>/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- MAIN JS -->
<script src="<?php echo base_url(); ?>/assets/js/script.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popup.js"></script>
<script>
    $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
</script>


</div>
<!-- Wrapper / End -->
</body>
</main>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Region').change(function() {
            var region_id = $('#Region').val();
            if (region_id != '') {
                $.ajax({
                    url: "<?php echo site_url(); ?>/include/dynamic_dependent/frontend_fetch_township",
                    method: "POST",
                    data: {
                        region_id: region_id
                    },
                    success: function(data) {
                        $('#TownshipData').html(data);
                    }
                });

            } else {
                $('#TownshipData').html('<select class="div-toggle" data-target=".my-info-1"><option value="">Please select township</option></select>');
            }
        });
    });
</script>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "95%";
        $(document).ready(function() {
            $(this).click(function() {
                $('#mySidenav').css("display", "none !important");
            });
        });

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

<script>
    function androidApp() {
        if (navigator.userAgent.toLowerCase().indexOf("iphone") > -1) {
            window.location.href = 'https://apps.apple.com/us/app/tatnaywonproperty/id1584755479';
        }

        if (navigator.userAgent.toLowerCase().indexOf("android") > -1) {
            window.location.href = 'https://play.google.com/store/apps/details?id=com.tatnaywoncompany.tatnaywonproperty';
        }

        //Update #2
        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|IEMobile)/)) {
            window.location.href = 'https://play.google.com/store/apps/details?id=com.tatnaywoncompany.tatnaywonproperty'; //Desktop Browser
        }
    }
</script>


<script src="<?php echo base_url(); ?>assets/javascript/slide.js"></script>


<!-- Explorer Search Script -->
<script type="text/javascript">
    $(function() {
        $('#RegionId').change(function() {
            var region_id = $("#region_suggests option[value='" + $('#RegionId').val() + "']").attr('data-id');
            $('#selectedRegion').val(region_id)
        });
    });
</script>

<script type="text/javascript">
    $('.PropertyTypeId').click(function() {
        document.getElementById("PropertyTypeId").value = (this.id);
    });

    $(function() {
        $(".SearchType").click(function() {
            var SearchType = $(this).val();
            document.getElementById("PropertyType").value = SearchType;

            if (SearchType == 'for_sale') {
                document.getElementById("Title").innerHTML = 'For Sale';
                document.getElementById("BackgroundColor").style.backgroundColor = '#f4d2d3';
            } else if (SearchType == 'for_rent') {
                document.getElementById("Title").innerHTML = 'For Rent';
                document.getElementById("BackgroundColor").style.backgroundColor = '#e3eed7';
            } else if (SearchType == 'new_properties') {
                document.getElementById("Title").innerHTML = 'New Property';
                document.getElementById("BackgroundColor").style.backgroundColor = '#cdd8e3';
            }

        });
    });
</script>
<!-- Explorer Search Script -->



<script type="text/javascript">
    const allRanges = document.querySelectorAll(".range-wrap");
    allRanges.forEach(wrap => {
        const range = wrap.querySelector(".range");
        const bubble = wrap.querySelector(".bubble");

        range.addEventListener("input", () => {
            setBubble(range, bubble);
        });
        setBubble(range, bubble);
    });

    function setBubble(range, bubble) {
        const val = range.value;
        const min = range.min ? range.min : 0;
        const max = range.max ? range.max : 100;
        const newVal = Number(((val - min) * 100) / (max - min));
        bubble.innerHTML = val;

        // Sorta magic numbers based on size of the native UI thumb
        bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
    }
</script>

<script src="<?php echo base_url(); ?>assets/js/timedropper.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datedropper.js"></script>
<!-- Date Dropper Script-->
<script>
    $('#reservation-date').dateDropper();
</script>
<!-- Time Dropper Script-->
<script>
    this.$('#reservation-time').timeDropper({
        setCurrentTime: false,
        meridians: true,
        primaryColor: "#e8212a",
        borderColor: "#e8212a",
        minutesInterval: '15'
    });
</script>

<script src="<?php echo base_url('assets/select2/js/select2.full.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/update/select_to.js') ?>"></script>

<script>
$(function() {      
    let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

    if (isMobile) {
        // location.href='http://futuredevelopemm.com';
    }
 });
</script>