<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Property Edit
                    <small>Tat Nay Won</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('main/for_sale'); ?>"><i class="zmdi zmdi-home"></i> Property Edit</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Property Edit</strong> </h2>
                    </div>
                    <div class="body">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>
                                    <?php echo $this->session->flashdata('success'); ?>
                                </strong>
                            </div>
                        <?php } elseif ($this->session->flashdata('danger')) { ?>
                            <div class="alert alert-danger">
                                <strong>
                                    <span class="glyphicon glyphicon-ok"></span>
                                    <?php echo $this->session->flashdata('danger'); ?>
                                </strong>
                            </div>
                        <?php } ?>
                        <form method="post" action="<?php echo site_url('main/shared/property_create/update'); ?>" enctype='multipart/form-data'>
                            <?php
                            if ($detail->propertie_type == 'hostel') {
                                $this->load->view('admin/shared/hostel_edit');
                            } else {
                                $this->load->view('admin/shared/property_edit');
                            }
                            ?>

                            <div class="row py-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">Update</button>
                                </div>
                            </div>

                            <input type="hidden" name="propertie_id" value="<?php echo $detail->sale_id; ?>">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('templates/admin_footer'); ?>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
      $('#summernote').summernote({
        placeholder: 'Description Myanmar',
        tabsize: 2,
        height: 120,
        toolbar: [
        //   ['style', ['style']],
        //   ['font', ['bold', 'underline', 'clear']],
        ]
      });
      
      
    $('#summernoteEng').summernote({
        placeholder: 'Description Eng',
        tabsize: 2,
        height: 120,
        toolbar: [
        //   ['style', ['style']],
        //   ['font', ['bold', 'underline', 'clear']],
        ]
      });
</script>


<script>
    $(document).ready(function() {
        //Property Update
        $('#AdminBtnUpdateProperty').click(function() {
            $("#ShowForAgentProperty").hide();
            $("#ShowForOwnerProperty").hide();
        });

        $('#AgentBtnUpdateProperty').click(function() {
            $("#ShowForAgentProperty").show();
            $("#ShowForOwnerProperty").hide();
        });

        $('#WonerBtnUpdateProperty').click(function() {
            $("#ShowForAgentProperty").hide();
            $("#ShowForOwnerProperty").show();
        });


        //Hostel
        $('#AdminBtnUpdateHostel').click(function() {
            $("#ShowForAgentProperty").hide();
            $("#ShowForOwnerProperty").hide();
        });

        $('#AgentBtnUpdateHostel').click(function() {
            $("#ShowForAgentProperty").show();
            $("#ShowForOwnerProperty").hide();
        });

        $('#WonerBtnUpdateHostel').click(function() {
            $("#ShowForAgentProperty").hide();
            $("#ShowForOwnerProperty").show();
        });


        window.onload = function() {
            if (document.getElementById('AgentBtnUpdateProperty').checked == true) {
                $("#ShowForAgentProperty").show();
                $("#ShowForOwnerProperty").hide();
            } else if (document.getElementById('WonerBtnUpdateProperty').checked == true) {
                $("#ShowForAgentProperty").hide();
                $("#ShowForOwnerProperty").show();
            } else if (document.getElementById('AdminBtnUpdateProperty').checked == true) {
                $("#ShowForAgentProperty").hide();
                $("#ShowForOwnerProperty").hide();
            }


            if (document.getElementById('AgentBtnUpdateProperty').checked == true) {
                $("#ShowForAgentHostel").show();
                $("#ShowForOwnerHostel").hide();
            } else if (document.getElementById('WonerBtnUpdateProperty').checked == true) {
                $("#ShowForAgentHostel").hide();
                $("#ShowForOwnerHostel").show();
            } else if (document.getElementById('AdminBtnUpdateProperty').checked == true) {
                $("#ShowForAgentHostel").hide();
                $("#ShowForOwnerHostel").hide();
            }

        }

    });
</script>