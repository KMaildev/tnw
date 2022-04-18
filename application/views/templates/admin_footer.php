<script src="<?php echo base_url(); ?>assets/admin/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/bundles/c3.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/bundles/jvectormap.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/bundles/knob.bundle.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/pages/index.js"></script>
</body>

</html>

<script type="text/javascript">
  $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
    var src = $(this).attr('src');
    var modal;

    function removeModal() {
      modal.remove();
      $('body').off('keyup.modal-close');
    }
    modal = $('<div>').css({
      background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
      backgroundSize: 'contain',
      width: '100%',
      height: '100%',
      position: 'fixed',
      zIndex: '10000',
      top: '0',
      left: '0',
      cursor: 'zoom-out'
    }).click(function() {
      removeModal();
    }).appendTo('body');
    //handling ESC
    $('body').on('keyup.modal-close', function(e) {
      if (e.key === 'Escape') {
        removeModal();
      }
    });
  });
</script>

<script src="<?php echo base_url('assets/select2/js/select2.full.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/update/select_to.js') ?>"></script>

<script>
  $(document).ready(function() {
    $('#AdminBtn').click(function() {
      $("#ShowForAgent").hide();
      $("#ShowForOwner").hide();
    });

    $('#AgentBtn').click(function() {
      $("#ShowForAgent").show();
      $("#ShowForOwner").hide();
    });

    $('#WonerBtn').click(function() {
      $("#ShowForAgent").hide();
      $("#ShowForOwner").show();
    });



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


    window.onload = function() {

      if (document.getElementById('AdminBtn').checked == true) {
        $("#ShowForAgent").hide();
        $("#ShowForOwner").hide();
      }

      $("#ShowForAgentProperty").hide();
      $("#ShowForOwnerProperty").hide();


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

    }

  });
</script>

<!-- Notification -->
<script type="text/javascript" language="javascript">
  $(document).ready(function() {
    function load_unseen_notification() {
      $.ajax({
        url: "<?php echo base_url(); ?>main/message_inbox/load_unseen_notification",
        dataType: "JSON",
        success: function(data) {
          $("#MessageInboxCount").text(data)
        }
      });
    }

    function load_unseen_member_message() {
      $.ajax({
        url: "<?php echo base_url(); ?>main/member_message/load_unseen_notification",
        dataType: "JSON",
        success: function(data) {
          $("#MemberMessageCount").text(data)
        }
      });
    }

    load_unseen_notification();
    load_unseen_member_message();

    setInterval(function() {
      load_unseen_notification();;
    }, 15000);

    setInterval(function() {
      load_unseen_member_message();;
    }, 15000);
  });
</script>