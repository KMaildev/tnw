<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="contact-us" style="background-image: url(<?php echo base_url(); ?>data/weather.jpg);">
    <div class="container" >
        <div class="row">

            <div class="col-lg-12 col-sm-12 col-md-12">
                <a class="weatherwidget-io" href="https://forecast7.com/en/16d8796d20/yangon/" data-label_1="YANGON" data-label_2="WEATHER" data-theme="original" >YANGON WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='<?php echo base_url(); ?>assets/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12 py-4">
                <a class="weatherwidget-io" href="https://forecast7.com/en/21d9696d09/mandalay/" data-label_1="MANDALAY" data-label_2="WEATHER" data-theme="original" >MANDALAY WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='<?php echo base_url(); ?>assets/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12">
                <a class="weatherwidget-io" href="https://forecast7.com/en/19d7696d08/naypyitaw/" data-label_1="NAY PYI TAW" data-label_2="WEATHER" data-theme="original" >NAY PYI TAW WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='<?php echo base_url(); ?>assets/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>


        </div>
    </div>
</section>


   

<?php $this->load->view('templates/footer'); ?>
