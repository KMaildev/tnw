<?php
if (validation_errors() == true) { ?>
  <div class="alert alert-danger" role="alert">
    <small><?php echo validation_errors(); ?></small>
  </div>
<?php } ?>