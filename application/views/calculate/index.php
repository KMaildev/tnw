<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>

 <script type='text/javascript' src='https://www.kbzbank.com/_static/??-eJyVkdsKwjAMQH/Irlu9PYngs/8g3RrWzjWpbYa6r3fKHkSHTAiEwDlJSOQ1CIdV2xlIshni0kG8jynzDrMmLeQvSHhXR83wDleEDMgytF3tMMlz2Z8seWhJo9QpAb/1EUVWqGz5p2tdbSurI6dPkS14eHmlxrPKVf7kSyJOHHUQJlIwdP1adtoby3mwgZI6rMCICMn1kzeZNj0ZiOj6OF8ZRgRCM18Yn+qOw+n4QLfR3PtdsVHFdrvO1ap5ACqmwOA='></script>

<section class="blog blog-section">
    <div class="container">
        <div class="row">
            <section class="similar-property recently portfolio bshd p-0 bg-white-inner py-5">
                <div class="container">
                    <h5>အိမ်ခြံမြေ အကျယ်အဝန်း တွက်ချက်နည်း</h5>
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div>
                                <div class='calculateboxhead'>
                                    <p class='mm m0'>စတုရန်းပေ မှ ဧက သို့ပြောင်းရန်</p>
                                </div>
                                <div class='calculatebox'>
                                    <div class='formcalculate'>
                                        <div class='bothformcalculate'>
                                            <label class='en'>Sqft</label>
                                            <input id='sqftcal' type='text' class='form-control'>
                                        </div>
                                        <div class='calculatequal'> 
                                            <small>Result:</small>
                                        </div>
                                    </div>
                                    <div class="calcutegroup">
                                        <input type='submit' id='sqftchange' class='mm' value="Calculate"/>
                                        <p id='calresult'></p>
                                        <script>
                                            $('#sqftchange').click(function(evt) {
                                                var innerdiv = document.getElementById('calresult');
                                                evt.preventDefault();
                                                var sqftvalue = $('#sqftcal').val();
                                                var changearka = parseInt(sqftvalue) / 43560;
                                                innerdiv.innerHTML = roundToTwo(changearka) + ' Acre';
                                            });
                                            function roundToTwo(num) {    
                                                return +(Math.round(num + "e+2")  + "e-2");
                                            }
                                        </script>                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div>
                                <div class='calculateboxhead'>
                                    <p class='mm m0'>ဧက မှ Sqft သို့ပြောင်းရန်</p>
                                </div>
                                <div class='calculatebox'>
                                    <div class='formcalculate'>

                                        <div class='bothformcalculate'>
                                            <label class='en'>ဧက</label>
                                            <input id='arka' type='text' class='form-control'>
                                        </div>
                                        
                                        <div class='calculatequal'>
                                            <small>Result:</small>
                                        </div>
                                    </div>
                                    <div class="calcutegroup">
                                        <input type='submit' id='sqftchange2' class='mm' value="Calculate"/>
                                        <p id='calresult2'></p>
                                        <script>
                                            var innerdiv2 = document.getElementById('calresult2');
                                            $('#sqftchange2').click(function() {
                                                var sqftvalue2 = $('#arka').val();
                                                var changearka2 = +sqftvalue2 * 43560;
                                                    innerdiv2.innerHTML = roundToTwo(changearka2) + ' Sqft';
                                            });
                                            function roundToTwo(num) {    
                                                return +(Math.round(num + "e+2")  + "e-2");
                                            }
                                        </script>                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div>
                                <div class='calculateboxhead'>
                                    <!-- SQFT  / Price == 1 Sqft --> 
                                    <p class='mm m0'>1 Sqft တန်ဖိုး</p>
                                </div>
                                <div class='calculatebox'>
                                    <div class='formcalculate'>
                                        <div class='bothformcalculate'>
                                            <label class='en'>Sqft</label>
                                            <input id='sqft3' type='text' class='form-control'>
                                        </div>
                                        <div class='bothformcalculate' style='padding-top: 10px'>
                                            <label class='en'>Price</label>
                                            <input id='price3' type='text' class='form-control'>
                                        </div>                    
                                        <div class='calculatequal'>
                                            <small>Result:</small>
                                        </div>
                                    </div>
                                    
                                    <div class="calcutegroup">
                                        <input type='submit' id='sqftchange3' class='mm' value="Calculate"/>
                                        <p id="calresult3"></p>
                                        <script>
                                            var innerdiv3 = document.getElementById('calresult3');
                                            $('#sqftchange3').click(function() {
                                                var sqftvalue3 = parseInt($('#sqft3').val());
                                                var pricevalue3 = parseInt($('#price3').val());
                                                var result3     = sqftvalue3 / pricevalue3;
                                                innerdiv3.innerHTML = roundToTwo(result3) + " (per Sqft)";
                                            });
                                            function roundToTwo(num) {    
                                                return +(Math.round(num + "e+2")  + "e-2");
                                            }
                                        </script>                    
                                    </div>

                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>