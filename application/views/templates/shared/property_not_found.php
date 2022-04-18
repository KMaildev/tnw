<?php 
    $lang_session = $this->session->userdata('lang'); 
?>

<section class="notfound">
    <div class="top-headings">
        <h5 class="text-center">
            <?php 
                if ($lang_session) {
                    echo "သင့်ရှာဖွေမှုနှင့်သက်ဆိုင်သော ကြော်ငြာမရှိသေးပါ။";
                }else{
                    echo "No results matching your search!";
                }
             ?>
            
        </h5>
    </div>
</section>