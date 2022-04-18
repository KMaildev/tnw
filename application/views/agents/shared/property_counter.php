<div style="padding: 14px;"> 

    <div class="row"> 
        <div class="col-sm-8 col-md-8">
            <p><strong>တင်ထားပြီးသော အရောင်းကြော်ငြာ အရေအတွက်</strong></p>
        </div> 
        <div class="col-sm-4 col-md-4">
            <span class="lead"><?php echo $total_sale; ?></span>
        </div> 
    </div> 

    <div class="m-b-10"></div> 
    <div class="row"> 
        <div class="col-sm-8 col-md-8">
            <p><strong>တင်ထားပြီးသော အငှါးကြော်ငြာ အရေအတွက်</strong></p>
        </div> 

        <div class="col-sm-4 col-md-4">
            <span class="lead">
                <?php echo $total_rent; ?>
            </span>
        </div> 
    </div>

    <div class="m-b-10"></div> 
    <div class="row"> 
        <div class="col-sm-8 col-md-8">
            <p><strong>တင်ထားပြီးသော ကြိုပွိုင့်ကြော်ငြာ အရေအတွက်</strong></p>
        </div> 

        <div class="col-sm-4 col-md-4">
            <span class="lead">
                <?php echo $total_new_properties; ?>
            </span>
        </div> 
    </div>


    <div class="m-b-10"></div> 
    <div class="row"> 
        <div class="col-sm-8 col-md-8">
            <p><strong>တင်ထားပြီးသော စုစုပေါင်းကြော်ငြာ အရေအတွက်</strong></p>
        </div> 
        <div class="col-sm-4 col-md-4">
            <span class="lead">
                <?php 
                    echo $total_sale + $total_rent + $total_new_properties;
                 ?>
            </span>
        </div> 
    </div> 


    <div class="m-b-10"></div> 
    <div class="row"> 
        <div class="col-sm-8 col-md-8">
            <p><strong>ရောင်းထွက်(sold out)ပြီးသော ကြော်ငြာအရေအတွက်</strong></p>
        </div> 

        <div class="col-sm-4 col-md-4">
            <span class="lead">
                <?php echo $count_total_soldout; ?>
            </span>
        </div> 
    </div>

</div>