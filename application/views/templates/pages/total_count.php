<section class="counterup" hidden="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left"><?php echo number_format($total_sale); ?></p>
                        <h3>For Sale</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-city" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left"><?php echo number_format($total_rent); ?></p>
                        <h3>For Rent</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0">
                    <i class="fa fa-laptop-house" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left"><?php echo number_format($total_new_properties); ?></p>
                        <h3>New Properties</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0 last">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">
                            <?php 
                                $total_owner = $total_owner_sale + $total_owner_rent;
                                echo number_format($total_owner);
                             ?>
                        </p>
                        <h3>By Owner</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>