<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/lite-purple.min.css" rel="stylesheet">
</head>
<body>
    <div class="main-content-wrap d-flex flex-column">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <center>
                            <img src="<?php echo(base_url()); ?>data/logo.jpg" style="width: 200px;">
                        </center>
                        <form action="<?php echo site_url('auth/login') ?>" method="post" accept-charset="utf-8">
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="firstName1">Email address</label>
                                    <input class="form-control" id="firstName1" type="email" placeholder="Enter your Email" name="email" autocomplete="off" autofocus="" value="<?php echo set_value('email'); ?>">
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" id="password" type="password" name="password" autocomplete="off" >
                                </div>
                                <div class="col-md-12">
                                    <center>
                                        <button type="submit" class="btn" style="background-color: #fb961c; color: white;">Login</button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
