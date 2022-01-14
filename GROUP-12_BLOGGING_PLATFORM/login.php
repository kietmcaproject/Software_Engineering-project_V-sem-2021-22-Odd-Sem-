<?php
session_start();
$message = "";
if (count($_POST) > 0) {
    $con = mysqli_connect('localhost', 'root', '', 'blog') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM login WHERE userid='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['userid'];
        $_SESSION["name"] = $row['password'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["id"])) {
    header("Location:dashboard.php");
}
?>

<html>
<head>
    <title>User Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        @import url("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css");
        @import url("https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css");
        @import url("https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css");
    </style>
</head>

<body>
<form name="frmUser" method="post" action="" align="center">
    <div class="message"><?php if ($message != "") { ?>
        <div class="alert alert-danger">
            <strong>Danger!</strong> <?php echo $message;
            } ?>
        </div>
    </div>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Member Login
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="user_name" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope"
                               aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
						</span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>
                    <div class="tet-center p-t-12">
                        <button type="reset" class="btn btn-primary">
                            Reset
                        </button>
                    </div>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

</form>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })

    (function ($) {
        "use strict";


        /*==================================================================
                [ Validate ]*/
        var input = $('.validate-input .input100');

        $('.validate-form').on('submit', function () {
            var check = true;

            for (var i = 0; i < input.length; i++) {
                if (validate(input[i]) == false) {
                    showValidate(input[i]);
                    check = false;
                }
            }

            return check;
        });


        $('.validate-form .input100').each(function () {
            $(this).focus(function () {
                hideValidate(this);
            });
        });

        function validate(input) {
            if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                    return false;
                }
            } else {
                if ($(input).val().trim() == '') {
                    return false;
                }
            }
        }

        function showValidate(input) {
            var thisAlert = $(input).parent();

            $(thisAlert).addClass('alert-validate');
        }

        function hideValidate(input) {
            var thisAlert = $(input).parent();

            $(thisAlert).removeClass('alert-validate');
        }


    })(jQuery);
</script>
</body>
</html>