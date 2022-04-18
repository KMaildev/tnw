<section class="reviews comments">
    <h3 class="mb-5">Google Map</h3>
    <div class="row">

        <?php $address = $data_detail->townships;

            echo '<iframe width="100%" height="400" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';
        ?>
    </div>
</section>