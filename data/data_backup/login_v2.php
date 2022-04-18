<div class="container py-5">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="m-b-30"></div>
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                <div class="alert alert-info text-center pyidaungsu-font" role="alert"> 
                    <i class="fa fa-info-circle fa-lg"></i> 
                        အကောင့်ထဲသို့ ဝင်ပါ။ <br> အကောင့်မရှိသေးပါက အကောင့်အသစ် ဖွင့်နိုင်ပါသည်။ 
                </div>
                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                    <div class="col-sm-12 col-xs-12 no-padding">
                        <a href="/login/facebook" class="pyidaungsu-font btn btn-primary col-sm-12 col-xs-12 text-center m-b-20">
                            Facebook ဖြင့် ဝင်မည်
                        </a>
                    </div>

                    <h5 class="pyidaungsu-font" style="font-weight: bold; text-align: center">
                        -------------- <span style="border-radius: 20%; border: 2px solid #555; padding: 2px 4px;">သို့မဟုတ်</span> --------------
                    </h5>

                    <form action="/loginsys" class="form-horizontal clearfix" method="post"> 

                        <div class="form-group m-l-0 m-r-0"> 
                            <label for="l_email" class="pyidaungsu-font">အီးမေးလ် (Email)</label> 
                            <input type="email" class="form-control form-control-modal" id="l_email" placeholder="Email" name="l_email" title="Type your Email (or) Gmail." data-toggle="tooltip" data-placement="right" data-trigger="focus" value=""> 
                        </div> 

                        <div class="form-group m-l-0 m-r-0"> 
                            <label for="l_password" class="pyidaungsu-font">လျှိုဝှက်နံပါတ် (Password)</label> 
                            <input type="password" class="form-control form-control-modal" id="l_password" placeholder="Password" name="l_password" title="Type your password." data-toggle="tooltip" data-placement="right" data-trigger="focus"> 
                        </div> 

                        <div class="form-group m-l-0 m-r-0"> 
                            <label> 
                                <input id="loginremember" name="remember" type="checkbox" value="1" class="" checked="checked"> <span class="pyidaungsu-font">နောက်တစ်ကြိမ်တွင် လွယ်ကူစွာ ဝင်နိုင်ရန် မှတ်သားထားပေးပါ</span> 
                            </label> 
                        </div> 
                        <div class="row m-b-10"> 
                            <div class="col-sm-6 p-r-0 pull-right m-r-20">
                                <input type="hidden" name="refer" value="default">
                                <!-- added for saved search - start --><!-- added for saved search - end -->
                                <input type="submit" class="btn btn-orange btn-block pyidaungsu-font" value="အကောင့်ထဲသို့ ဝင်မည်"> 
                            </div> 
                            <div class="col-sm-6 p-t-10">
                                <!-- <a href="#" class="fs-12">Forgot your password?</a> --> 
                            </div> 
                        </div> 
                    </form>
                </div> 
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pyidaungsu-font">
                <div class="well col-sm-8">
                    <p>သင်၏ လျှိုဝှက်နံပါတ် (Password) မေ့သွားပါက 
                        <a href="/password-reset" title="Password Reset">ဤနေရာတွင်</a> အသစ် ပြန်ပြင်နိုင်ပါသည်။
                    </p>
                    <p class="m-b-0">အသုံးပြုနည်းလမ်းညွှန်ကို 
                        <a href="/how-to" title="User Guide">ဤနေရာတွင်</a> ဖတ်နိုင်ပါသည်။
                    </p>
                </div>
                <div class="col-sm-8">
                    <br>
                    <p class="fs-16 text-center">အကောင့်မရှိသေးပါက အကောင့်ဖွင့်ရန်</p>
                    <p><a href="/register-main" class="btn btn-orange fs-16 btn-block">အကောင့်ဖွင့်ရန်</a></p>
                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>

        </div>
    </div>
</div>