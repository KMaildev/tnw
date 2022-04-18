<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="container py-3">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3 style="background-color:#25a835; box-shadow: 1px 3px 3px #000000; background-color: white; padding: 17px;" >
                Covid-19 Summary
            </h3>
        </div>
        <?php 
            $API_URL = "https://api.covid19api.com/summary";
            $results = file_get_contents($API_URL, true);
            $json_datas = json_decode($results, true);
            // echo $json_datas['Global']['NewConfirmed'];
            // print_r($json_datas['Countries']);
         ?>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <input id="myInput" class="form-control" type="text"  placeholder="Search..." autocomplete="off">
            <br>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th style="background-color: black; color: white;">Country</th>
                  <th style="background-color: black; color: white;">Confirmed</th>
                  <th style="background-color: black; color: white;">Deaths</th>
                  <th style="background-color: black; color: white;">Recovered</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php 
                    @$Countries = $json_datas['Countries'];
                    foreach (@$Countries as $key => $value) {
                ?>
                <tr class="table">
                  <th style="background-color: #c77b22; color: white;"><?php echo $value['Country']; ?></th>
                  <td style="background-color: #f7d08c; color: black;"><?php echo $value['TotalConfirmed']; ?></td>
                  <td style="background-color: red; color: black;"><?php echo $value['TotalDeaths']; ?></td>
                  <td style="background-color: #3ae03a; color: black;"><?php echo $value['TotalRecovered']; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div style="background-color: black;" class="alert alert-dismissible alert-warning">
              <h4 class="alert-heading" style="color: white;">Global</h4>
              <p class="mb-0" style="color: white; font-weight: bold;">Total Confirmed : <?php echo $json_datas['Global']['TotalConfirmed']; ?></p>
              <p class="mb-0" style="color: white; font-weight: bold;">Total Deaths : <?php echo $json_datas['Global']['TotalDeaths']; ?></p>
              <p class="mb-0" style="color: white; font-weight: bold;">Total Recovered : <?php echo $json_datas['Global']['TotalRecovered']; ?></p>
            </div>
        </div>

    </div>
</div>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>