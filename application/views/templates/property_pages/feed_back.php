<style type="text/css">
    input,
    textarea {
        padding: 3px 5px 5px 5px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 1px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px
    }
    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

</style>

<div class="color-switcher" id="choose_color"> 
    <a href="#" class="picker_close" style="background-color: #418107;">
        <i class="fa fa-clipboard" style="color: white; font-size: 20px;"></i>
        <span style="font-size: 12px; margin-right: 20px;">
            Feedback
        </span>
    </a>
    <div class="theme-colours">
        <p>
            Thank you for your feedback!
        </p>

        <form action="<?php echo site_url('requestinquiry/save_suggestion'); ?>" method="post">
            <ul> 
                <li>
                    <input type="text" name="name" placeholder="Name" autocomplete="off">
                </li>

                <li>
                    <input type="text" name="phone" placeholder="Phone" autocomplete="off">
                </li>

                <li>
                    <p>
                        <i class="fa fa-smile" style="font-size: 42px; color: #e3f4dc; padding: 5px;" title="Awesome" onClick="Awesome()" id="AwesomeId">
                        </i>

                        <i class="fa fa-grin-alt" style="font-size: 42px; color: #efecde; padding: 5px;" title="Good" onClick="Good()" id="GoodId"></i>

                        <i class="fa fa-angry" style="font-size: 42px; color: #f2d5d7; padding: 5px;" title="Needs Improvement" onClick="Needs()" id="NeedsId"></i>
                    </p>

                    <input type="hidden" name="message" value="Awesome" id="MessageId">

                    <script type="text/javascript">
                        function Awesome()
                        {
                            document.getElementById('MessageId').value = "Awesome";
                            document.getElementById("AwesomeId").style.color='#649e2f';

                            document.getElementById("GoodId").style.color='#efecde';
                            document.getElementById("NeedsId").style.color='#f2d5d7';
                        }

                        function Good()
                        {
                            document.getElementById('MessageId').value = "Good";
                            document.getElementById("GoodId").style.color='#dbce92';


                            document.getElementById("AwesomeId").style.color='#e3f4dc';
                            document.getElementById("NeedsId").style.color='#f2d5d7';
                        }

                        function Needs()
                        {
                            document.getElementById('MessageId').value = "Needs Improvementi";
                            document.getElementById("NeedsId").style.color='#bf7277';

                            document.getElementById("AwesomeId").style.color='#e3f4dc';
                            document.getElementById("GoodId").style.color='#efecde';
                        }
                    </script>
                </li>

                <li>
                    <input type="submit" style="background-color: black; color: white;">
                </li>

            </ul>
        </form>
    </div>
</div>
