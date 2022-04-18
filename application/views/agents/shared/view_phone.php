<div class="modal fade" id="agentPhoneNumberView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" style="background-color: #97ce12;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">
                    <small>
                        <?php echo $detail->company_name; ?> အတွက် ဆက်သွယ်ရန် ဖုန်းနံပါတ်
                    </small>
                </h5>
            </div>

            <div class="modal-body">
                <?php 
                    $propertyPhoneNumber = explode(',', $detail->phone);
                    $propertyPhoneNumberTotal = count($propertyPhoneNumber);
                    for ($i=0; $i <$propertyPhoneNumberTotal ; $i++) { 
                ?>
                    <span class="help-block" style="color: #c77b22; font-size: 15px;">
                        <i class="fa fa-phone-square-alt"></i> 
                        <a href="tel:<?php echo $propertyPhoneNumber[$i]; ?>" style="color: blue;">
                            <?php echo $propertyPhoneNumber[$i]; ?>
                        </a>
                    </span><br>
                <?php } ?>

                <span class="help-block" style="color: #c77b22; font-size: 15px;">
                    <i class="fa fa-ad"></i> 
                    <?php echo "Agent ID : "; ?>
                    <?php echo $detail->company_id; ?>
                </span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>