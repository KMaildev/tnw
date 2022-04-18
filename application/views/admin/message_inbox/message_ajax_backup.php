<?php $this->load->view('templates/admin_header'); ?>
<?php $this->load->view('templates/admin_top'); ?>
<?php $this->load->view('templates/admin_menu'); ?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Message Inbox
                    <small>Tat Nay Won</small>
                </h2>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Total : </small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="<?php echo (site_url('main/member_message')); ?>"><i class="fa fa-building"></i> Message Inbox</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="listdata"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php $this->load->view('templates/admin_footer'); ?>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {

        var current_url = window.location.href;
        var local_url = "http://localhost/projects/tatnaywonproperty/main/message_inbox/index_view";
        var server_url = "https://tatnaywonproperty.com/main/message_inbox/index_view"

        function load_data() {
            $.ajax({
                url: "<?php echo base_url(); ?>main/message_inbox/load_ajax",
                dataType: "JSON",
                success: function(data) {
                    var html = '';
                    for (var count = 0; count < data.length; count++) {
                        html += '<div class="card text-black mb-3" style="background-color: #f9f7f7;">'
                        html += '<div class="card-header">' + data[count].subject + '</div>'
                        html += '<div class="card-body">'
                        html += '<p class="card-text" style="font-weight: bold">' + data[count].message + '</p>'
                        html += '<p class="card-text" style="font-weight: bold">' + data[count].name + '</p>'
                        html += '<p class="card-text" style="font-weight: bold">' + data[count].email + '</p>'
                        html += '<p class="card-text" style="font-weight: bold">' + data[count].phone + '</p>'
                        html += '<p class="card-text" style="font-weight: bold">' + data[count].other_date + '</p>'
                        html += '<a href="tel:' + data[count].phone + '" class="btn btn-success btn-sm">Call Now</a>'
                        html += '<button type="button" name="delete_btn" id="' + data[count].mm_id + '" class="btn btn-danger btn-sm btn_delete">Delete</button>'
                        html += '</div>'
                        html += '</div>'
                    }
                    $('.listdata').html(html);
                }
            });
            if (current_url === local_url) {
                setTimeout(load_data_latest_record, 9000);
                setTimeout(load_data, 9000);
            }
        }


        complist = []
        function load_data_latest_record() {
            $.ajax({
                url: "<?php echo base_url(); ?>main/message_inbox/load_ajax_latest_record",
                dataType: "JSON",
                success: function(data) {
                    if (Notification.permission !== "granted") {
                        Notification.requestPermission();
                    } else {
                        for (var count = 0; count < data.length; count++) {
                            if (complist.length === 0) {
                                var notificationObj = new Notification(data[count]['subject'], {
                                    body: data[count]['message'],
                                });
                                notificationObj.onclick = function() {
                                    window.open('tatnaywonproperty.com');
                                    notificationObj.close();
                                };
                            } else {
                                console.log("No Noti");
                            }
                            complist.push(data[count]['mm_id']);
                        }
                    }
                }
            });
        }


        load_data();
        load_data_latest_record()

        if (current_url === local_url) {
            setTimeout(load_data_latest_record, 9000);
            setTimeout(load_data, 9000);
        }

        $(document).on('click', '.btn_delete', function() {
            var id = $(this).attr('id');
            location.href = "<?php echo site_url(); ?>main/message_inbox/destroy/" + id;
        });

    });
</script>
<script src="<?php echo base_url('asset/javascript/notification.js') ?>"></script>