<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<div class="login-cover">
    <div class="login-cover-image"><img src="<?php echo base_url() ?>assets/background_image/loan_2.jpg"
                                        data-id="login-cover-image" alt=""/></div>
    <div class="login-cover-bg" id="copyright" >

    </div>
</div>

<!-- begin #page-container -->
<!--<div id="page-container" class="fade">-->
<!-- begin login -->
<!--    <div class="login login-with-news-feed">-->
<!-- begin news-feed -->
<!--        <div class="news-feed">-->

<!--            <div class="news-image">-->
<!--                --><?php //foreach ($image->result() as $images) { ?>
<!--                    <img src="--><?php //echo base_url() ?><!--assets/background_image/--><?php //echo $images->sys_image_name; ?><!--"-->
<!--                         data-id="login-cover-image" alt=""/>-->
<!---->
<!--                --><?php //} ?>
<!--            </div>-->
<!--            <div class="news-caption">-->
<!--                <h4 class="caption-title">Powered by</h4>-->
<!--                <p>-->
<!--                    Afisol (Pvt) Ltd-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!-- end news-feed -->
<!-- begin right-content -->
<div id="page-container" class="fade">
    <!-- begin login -->

    <div class="login login-v2" data-pageload-addclass="animated fadeIn">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">

<!--                <span class="logo"><img src="--><?php //echo base_url() ?><!--assets/logo/Orange Logo-white.png"-->
<!--                                        width="180px"></i></span>-->

            </div>
            <div class="icon">
                <i class="ion-ios-locked"></i>
            </div>
        </div>
        <!-- end brand -->
        <div class="login-content">


            <form action="<?php echo base_url() ?>welcome/login" method="post"
                  enctype="multipart/form-data" id="loginform">
                <div class="form-group m-b-20">
                    <input type="text" class="form-control input-lg" id="username" name="username"
                           placeholder="User Name" required/>
                </div>
                <div class="form-group m-b-15">
                    <input type="password" class="form-control input-lg" id="password" name="password"
                           placeholder="Password" required/>
                </div>

                <div class="login-buttons">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Sign me in</button>
                    <br>
                    <div id="login_error" class="alert alert-danger fade in m-b-15">
                        <strong>Error!</strong>
                        Invalied Username or Password.
                        <!--								<span class="close" data-dismiss="alert">&times;</span>-->
                    </div>
                </div>

                <hr/>
                <p class="text-center">
                    Sirikatha Loan System
                </p>
            </form>
        </div>
        <!-- end login-content -->
    </div>



    <!-- end right-container -->
</div>
<!-- end login -->



<script type="text/javascript">
    $(document).ready(function () {

        jQuery("div#login_error").hide();

        $("#btn_login").click(function () {

            $(this).attr('class', 'btn btn-block btn-default disabled');
            $("#loginform").submit();
        });
        $("#loginform").submit(function (e) {

            var formObj = $(this);
            var formURL = formObj.attr("action");
            var formData = new FormData(this);

            $.ajax({
                url: formURL,
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data, textStatus, jqXHR) {

                    console.log(data);

                    jd = $.parseJSON(data)
                    if (jd.retval)
                        $(location).attr('href', jd.url);
                    else {

                        jQuery("div#login_error").show();
                    }

                    $("#btn_login").attr('class', 'btn btn-primary btn-block btn-flat');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $("#btn_login").attr('class', 'btn btn-primary btn-block btn-flat');
                    //alert(errorThrown);
                }
            });
            e.preventDefault(); //Prevent Default action.
        });
    });
</script>


<script type="text/javascript">
    //alert("Enter");

    $('#password').keypress(function (event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);

        if (keycode == '13') {

            $("#loginform").submit();
            $("#loginform").submit(function (e) {

                var formObj = $(this);
                var formURL = formObj.attr("action");
                var formData = new FormData(this);

                $.ajax({
                    url: formURL,
                    type: 'POST',
                    data: formData,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data, textStatus, jqXHR) {

                        //alert(data)
                        jd = $.parseJSON(data)
                        if (jd.retval) {
                            jQuery("div#login_error").hide();
                            $(location).attr('href', jd.url);
                        } else {
                            document.getElementById('passowrd').value = "";
                            jQuery("div#login_error").show();
                        }


                        $("#btn_login").attr('class', 'btn btn-primary btn-block btn-flat');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        $("#btn_login").attr('class', 'btn btn-primary btn-block btn-flat');
                        //alert(errorThrown);
                    }
                });
                e.preventDefault(); //Prevent Default action.
            });
        } //event.stopPropagation();

    });
</script>


<!-- end page container -->


</body>

</html>
<script>
    $(document).ready(function () {
        App.init();
        // TableManageButtons.init();
    });

</script>