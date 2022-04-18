<div class="container py-5">
    <div class="row">
        <div class="col-md-2">
            <style type="text/css">
                .box {
                    background: white;
                    border-radius: 0.3rem;
                    height: 10rem;
                    width: 10rem;
                }
                .shadow {
                    box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
                    transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
                }
                .shadow:hover {
                    box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);
                }
            </style>
            <div class="row justify-content-center">
                <div class="box shadow">
                    <center>
                        <img src="<?php echo base_url('data/welcome/buildings.svg') ?>" alt="Avatar" style="width: 50%; padding-top: 20px;">
                        <h5 style="padding-top: 10px;">Sale</h5>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="col-lg-3 col-md-3 col-sm-12 mb-4">
                                    <div class="at-col-default-mar selectBox">
                                        <select name="propertie_type" style="color: black;">
                                            <option value="All">
                                                <?php 
                                                    echo ($lang_session) ? "ဘဏ်အရစ်ကျစနစ်" : "Bank Installment";
                                                 ?>
                                            </option>
                                            <option value="Yes">
                                                Yes
                                            </option>
                                            <option value="No">
                                                No
                                            </option>
                                        </select>
                                    </div>
                                </div>





                                <div class="col-lg-2 col-md-2 col-sm-6">
            <style type="text/css">
                .example1 {
                    border: 1px solid gray;
                    padding: 10px;
                    box-shadow: 5px 5px gray;
                    border-radius: 5px;
                    background-color: white;
                    width: 120px;
                    height: 120px;
                    margin: 10px;
                }
                .Image {
                    border-radius: 50%;
                    width: 70%;
                }
                .example1:hover {
                    transition: all 0.6s ease-in-out;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                    background-color: red;
                }
            </style>
            <div class="example1">
                <center>
                    <img class="Image" src="<?php echo base_url('data/welcome/house.svg') ?>" alt="Avatar">
                    <h4 style="padding-top: 7px;"><b>Sale</b></h4>
                </center>
            </div>
        </div>