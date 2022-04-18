<p class="font-italic" >
    <span class="sharedBtn d-block d-sm-none">
        <i class="fa fa-share-alt"></i>
        Shared
    </span>
    <script type="text/javascript">
        const shareData = {
            title: 'tatnaywonproperty.com',
            text: '<?php echo $data_detail->title_mm; ?>',
            url: '<?php echo current_url(); ?>'
        }

        const btn = document.querySelector('.sharedBtn');
        btn.addEventListener('click', async () => {
            try {
                await navigator.share(shareData)
            } catch(err) {
            }
        });
    </script>
</p>