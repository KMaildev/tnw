<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<style>
    .downloadBtn {
        width: 220px;
        height: 80px;
        border-radius: 5px;
        border: 1px solid white;
        margin: 5px;
        padding: 16px 9px;
        background-color: #343a40;
        color: white;
    }

    .downloadBtn:hover {
        background-color: #c77c2c;
    }

    .downloadBtn p {
        line-height: 20px;
    }

    .store {
        font-size: 26px;
    }

    .appLogo {
        font-size: 45px;
        padding-left: 12px;
        padding-right: 2px;
    }
</style>

<section id="download">
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container text-center">
            <h4 class="display-4">Get the App</h4>
            <p class="lead">Download MyApp for iPhone or Android</p>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                
                <a href="#"  class="downloadBtn" onclick="androidApp()">
                    <div class="row">
                        <div class="col-3">
                            <p class="appLogo"><i class="fab fa-apple"></i></p>
                        </div>
                        <div class="col-9">
                            <p>Available on the<br>
                            <span class="store">App Store</span></p>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="downloadBtn" onclick="androidApp()">
                    <div class="row">
                        <div class="col-3">
                            <p class="appLogo"><i class="fab fa-google-play"></i></p>
                        </div>
                        <div class="col-9">
                            <p>Download from<br>
                            <span class="store">Google Play</span></p>
                        </div>
                    </div>
                </a>
                
                <a href="https://apkpure.com/tatnaywonproperty/com.tatnaywoncompany.tatnaywonproperty" class="downloadBtn" target="_blank">
                    <div class="row">
                        <div class="col-3">
                            <p class="appLogo"><i class="fa fa-mobile"></i></p>
                        </div>
                        <div class="col-9">
                            <p>APKPure<br>
                            <span class="store">For Android</span></p>
                        </div>
                    </div>
                </a>

                <a href="https://u.pcloud.link/publink/show?code=XZEnpIXZLKBaXH1I2oX13ILNYmRTURAAnsOX" class="downloadBtn" target="_blank">
                    <div class="row">
                        <div class="col-3">
                            <p class="appLogo"><i class="fa fa-mobile-alt"></i></p>
                        </div>
                        <div class="col-9">
                            <p>pCloud<br>
                            <span class="store">For Android</span></p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-4">
                <div id="fb-root">
                   <div class="fb-page" data-href="https://www.facebook.com/TatNayWonProperty/" data-tabs="timeline" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                   </div>
                   <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=310515396183252&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                       }(document, 'script', 'facebook-jssdk'));
                    </script>
                </div>
            </div>

            <div class="col-lg-8 col-sm-12 col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.096292323529!2d96.19061281439507!3d16.87113052193014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1931da2639985%3A0x119e908163278a4a!2sTAT%20NAY%20WON%20Real%20Estate%20Company!5e0!3m2!1sen!2smm!4v1625626521087!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
    </div>
</section>

   

<?php $this->load->view('templates/footer'); ?>
