<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<script type='text/javascript' src='https://www.kbzbank.com/_static/??-eJyVkdsKwjAMQH/Irlu9PYngs/8g3RrWzjWpbYa6r3fKHkSHTAiEwDlJSOQ1CIdV2xlIshni0kG8jynzDrMmLeQvSHhXR83wDleEDMgytF3tMMlz2Z8seWhJo9QpAb/1EUVWqGz5p2tdbSurI6dPkS14eHmlxrPKVf7kSyJOHHUQJlIwdP1adtoby3mwgZI6rMCICMn1kzeZNj0ZiOj6OF8ZRgRCM18Yn+qOw+n4QLfR3PtdsVHFdrvO1ap5ACqmwOA='></script>

<?php 
    $lang_session = $this->session->userdata('lang'); 
 ?>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;" >
                   <?php 
                        if ($lang_session) {
                            echo "အိမ်ရာချေးငွေ တွက်ချက်ရန်";
                        }else{
                            echo "Home Loan Calculator";
                        }
                    ?> 
            </h3>
            <div class="widget-boxed">
                <div class="widget-boxed-">
                    <?php $this->load->view('templates/shared/alert_message'); ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <form id="emi-form">
                                <div class="form-group">
                                    <label for="propertyValue">Property Value</label>
                                    <input type="text" class="form-control" name="propertyvalue" id="propertyvalue" value="20000000">
                                </div>
                                <div class="form-group">
                                    <label for="downPayment">Down Payment (eg. 50%, 40%, 30%)</label>
                                    <input type="text" class="form-control" name="downpayment" id="downpayment" value="50" placeholder="50">
                                </div>
                                <div class="form-group" id="CreditLimit">
                                    <label for="creditlimit"></label>
                                        <input type="hidden" class="form-control" readonly="readonly" name="creditlimit" id="creditlimit" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="interestrate">Interest Rate</label>
                                    <input type="text" class="form-control"  name="interestrate" id="interestrate" value="13">
                                </div>
                                <div class="form-group">
                                    <label for="loanPeriod">LoanPeriod (Year/s)</label>
                                    <input type="text" class="form-control"  name="loanperiod" id="loanperiod" value="3">
                                </div>

                                <div class="form-group">
                                    <label for="creditlimit">Monthly Payment</label>
                                    <input type="text" class="form-control" readonly="readonly" name="emi" id="emi" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="creditlimit">Total Interest</label>
                                    <input type="text" class="form-control" readonly="readonly" name="total" id="total" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <div id="container-emi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table id="illustrate-emi" class="table table-striped table-bordered">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        $("#emi-form #propertyvalue").keyup(function(){
            $('#propertyvalue').val(this.value);
            calculateEMI();
        });

        $("#emi-form #interestrate").keyup(function(){
            $('#interestrate').val(this.value);
            calculateEMI();
        });

        $("#emi-form #downpayment").keyup(function(){
            $('#emi-form #downpayment').val(this.value);
            calculateEMI();
        });

        /*$('#emi-form #downpayment').on('change', function() {
          if( $('#emi-form #propertyvalue').val().length === 0 ) {
                alert('Please fill property value first');
           }else{
                //alert( this.value );
                $('#emi-form #downpayment').val(this.value);
                calculateEMI();
           }
        });*/


        $("#emi-form #loanperiod").keyup(function(){
            $('#loanperiod').val(this.value);
            calculateEMI();
        });


        /*$('#emi-form #loanperiod').on('change', function() {
          if( $('#emi-form #propertyvalue').val().length === 0 ) {
                alert('Please fill property value first');
           }else{
                //alert( this.value );
                $('#emi-form #loanperiod').val(this.value);
                calculateEMI();
           }
        });*/

        function calculateEMI(){
            var propertyvalue = $('#emi-form #propertyvalue').val();
            var downpayment = $('#emi-form #downpayment').val();

            var creditvalue  = (downpayment / 100) * propertyvalue;
            var loanAmount = propertyvalue - creditvalue;
            
            var numberOfMonths = $('#emi-form #loanperiod').val() * 12;
            var rateOfInterest = $("#emi-form #interestrate").val();
            var monthlyInterestRatio = (rateOfInterest/100)/12;

            var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
            var bottom = top -1;
            var sp = top / bottom;
            var emi = ((loanAmount * monthlyInterestRatio) * sp);

            
            var full = numberOfMonths * emi;
            var interest = full - loanAmount;
            var int_pge =  (interest / full) * 100;
            
            var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            var creditamount = document.getElementById('creditlimit');
            creditamount.value = loanAmount_str;
            var emiamount = document.getElementById('emi');
            emiamount.value = emi_str;
            var totalamount = document.getElementById('total');
            totalamount.value = int_str;



            var detailDesc = "<thead><tr class='' style='background-color: #f0b958; color: white;'><th>Sr.No</th><th>Principal at Begining</th><th>EMI</th><th>Interest</th><th>Principal</th></thead><tbody>";
            var bb=parseInt(loanAmount);
            var int_dd =0;var pre_dd=0;var end_dd=0;
            for (var j=1;j<=numberOfMonths;j++){
                int_dd = bb * ((rateOfInterest/100)/12);
                pre_dd = emi.toFixed(2) - int_dd.toFixed(2);
                end_dd = bb - pre_dd.toFixed(2);
                detailDesc += "<tr><td>"+j+"</td><td>"+bb.toFixed(2)+"</td><td>"+emi.toFixed(2)+"</td><td>"+int_dd.toFixed(2)+"</td><td>"+pre_dd.toFixed(2)+"</td></tr>";
                bb = bb - pre_dd.toFixed(2);
            }
                detailDesc += "</tbody>";
            $("#illustrate-emi").html(detailDesc);


            /** Charts **/
            $('#container-emi').highcharts({
         
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Tat Nay Won EMI Calculator'
                },
                tooltip: {
                    //pointFormat: '{series.name}: <b>{point.value}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                        //  enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Amount',
                    data: [
                        ['Loan',   eval(loanAmount)],
                        ['Interest',       eval(interest.toFixed(2))]
                    ]
                }]
            });

        }

        calculateEMI();



        $("#emiavg-form #incomeaftertax").keyup(function(e){
            
            $('#emiavg-form #incomeaftertax').val(this.value);
            calculateEMIAVG();
        });
        $("#emiavg-form #monthlyexpnese").keyup(function(){
            

            if( $('#emiavg-form #incomeaftertax').val().length === 0 ) {
                alert('Please fill Income After Tax first');
           }else{
                $('#emiavg-form #monthlyexpnese').val(this.value);
                calculateEMIAVG();
                        
            }
        });

        $("#emiavg-form #interestrate").keyup(function(e){
            
            $('#emiavg-form #interestrate').val(this.value);
            calculateEMIAVG();
        });

        $("#emiavg-form #otherloan").keyup(function(){

            
            
            $('#emiavg-form #otherloan').val(this.value);
            calculateEMIAVG();
        });

        $('#emiavg-form #age').on('change', function() {

          if( $('#emiavg-form #incomeaftertax').val().length === 0 ) {
                alert('Please fill property value first');
           }else{
                //alert( this.value );
                var age = this.value;
                //alert(age);
                var year = 1;
                /*if(parseInt(age) <= 45 )
                {

                    var endyear = 15;
                    $("#emiavg-form #loanperiod option").remove();
                    
                    for(year; year <=endyear; year++)
                    {
                        $("#emiavg-form #loanperiod").append('<option value="'+ year +'">'+year+'</option>');
                    }
                    
                }else if (parseInt(age) > 45 && parseInt(age) <= 59 ){
                    var endyear = 60 - parseInt(age);
                    $("#emiavg-form #loanperiod option").remove();
                    
                    for(year; year <=endyear; year++)
                    {
                        $("#emiavg-form #loanperiod").append('<option value="'+ year +'">'+year+' year/s</option>');
                    } 
                }else if (parseInt(age) > 59 )
                {
                    
                    $("#emiavg-form #loanperiod option").remove();
                    $("#emiavg-form #loanperiod").append("<option value='1'>1 year</option>");
                }*/
                calculateEMIAVG();
           }
        });


        /*$('#emiavg-form #loanperiod').on('change', function() {
          if( $('#emiavg-form #incomeaftertax').val().length === 0 ) {
                alert('Please fill Income After Tax first');
           }else{
                //alert( this.value );
                $('#emiavg-form #loanperiod').val(this.value);
                calculateEMIAVG();
           }
        });*/

        $("#emiavg-form #loanperiod").keyup(function(e){
            
            $('#emiavg-form #loanperiod').val(this.value);
            calculateEMIAVG();
        });

        function calculateEMIAVG(){
            var incomeaftertax = $('#emiavg-form #incomeaftertax').val();
            var monthlyexpnese = $('#emiavg-form #monthlyexpnese').val();
            var otherloan  = $('#emiavg-form #otherloan').val();

            
            var netamount = incomeaftertax - monthlyexpnese - otherloan;
            
            //var monthlyamount = netamount * (70 / 100);
                        var monthlyamount = incomeaftertax * (40 / 100);

                                 
            

            var numberOfMonths = $('#emiavg-form #loanperiod').val() * 12;
            var rateOfInterest = $("#emiavg-form #interestrate").val();
            var monthlyInterestRatio = (rateOfInterest/100)/12;
    
            var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
            var sp = monthlyamount * ((top - 1) / monthlyInterestRatio);
            var emi = sp / top;
            
            
            var full = monthlyamount * numberOfMonths;
            var interest = full - emi;

            var int_pge =  (interest / full) * 100;
            

            /** Decimal **/
            var netamount_str = netamount.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            var monthlyamount_str = monthlyamount.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            

            //var netsavingbalance = document.getElementById('netsavingbalance');
                   //netsavingbalance.value = netamount_str;

            var monthlypayment = document.getElementById('monthlypayment');
            monthlypayment.value = monthlyamount_str;

            var creditamount = document.getElementById('creditlimit_avg');
            creditamount.value = emi_str;
            
            var totalamount = document.getElementById('total_avg');
            totalamount.value = int_str;


            var detailDesc = "<thead><tr class=''><th>Sr.No</th><th>Principal at Begining</th><th>EMI</th><th>Interest</th><th>Principal</th></thead><tbody>";
            var bb=parseFloat(emi);
            var int_dd =0;var pre_dd=0;var end_dd=0;
            for (var j=1;j<=numberOfMonths;j++){
                int_dd = bb * ((rateOfInterest/100)/12);
                pre_dd = monthlyamount.toFixed(2) - int_dd.toFixed(2);
                end_dd = bb - pre_dd.toFixed(2);
                detailDesc += "<tr><td>"+j+"</td><td>"+bb.toFixed(2)+"</td><td>"+monthlyamount.toFixed(2)+"</td><td>"+int_dd.toFixed(2)+"</td><td>"+pre_dd.toFixed(2)+"</td></tr>";
                bb = bb - pre_dd.toFixed(2);
            }
                detailDesc += "</tbody>";
            $("#illustrate-avgemi").html(detailDesc);


            /** Charts **/
            $('#container-avgemi').highcharts({
         
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'KBZ Bank Available Credit Limit'
                },
                tooltip: {
                    //pointFormat: '{series.name}: <b>{point.value}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                        //  enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Amount',
                    data: [
                        ['Loan',   eval(emi.toFixed(2))],
                        ['Interest',       eval(interest.toFixed(2))]
                    ]
                }]
            });

        }

        calculateEMIAVG();

    });
</script>

<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
$(document).ready(function(){
   $("#CreditLimit").hide();
}); 
</script>