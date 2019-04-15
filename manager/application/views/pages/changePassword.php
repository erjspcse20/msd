<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>

<body>
<div class="main-grid">
    <div class="agile-signup">

        <div class="content2">
            <div class="grids-heading gallery-heading signup-heading">
                <h2>Reset Password</h2>
            </div>
            <p align="center" style="color:#F00;">
                <?php if($msg=$this->session->flashdata('feedback')): ?>

                    <strong style="color:#F00">
                        <?=$msg?>
                    </strong>

                <?php endif; ?>
            </p>
            <form action="<?=base_url('welecome-to-msd-change-password-start.jsp')?>" method="post">
                <input type="password" name="OldPassword" id="OldPassword" value="">
                <input type="password" name="NewPassword" id="NewPassword" value="">
                <input type="password" name="ConfirmPassword" id="ConfirmPassword" value="">
                <span id="matcherr"></span>
                <input type="submit" class="register" name="changepassword" id="changepassword" value="Change Password">
            </form>
        </div>

        <!-- footer -->
        <div class="copyright">
            <p>© 2019 Hotel Grand . All Rights Reserved . Design & Develop by <a href="http://www.hindustanweb.com/" target="_blank">Hindustan Web</a></p>
        </div>
        <!-- //footer -->

    </div>
</div>
</body>
</html>
<script>
    function checkPasswordMatch() {
        //alert(1);
        var password = $("#NewPassword").val();
        var confirmPassword = $("#ConfirmPassword").val();
        if (password != confirmPassword)
        {
            $("#matcherr").html("Passwords do not match!");
            $("#matcherr").css("color", "red");
            $("#ConfirmPassword").css("color", "red");
            return false;
        }
        else
        {
            $("#matcherr").css("color", "green");
            $("#matcherr").html("Passwords match.");
            $("#ConfirmPassword").css("color", "green");
        }
    }
    $("#ConfirmPassword").keyup(checkPasswordMatch);
    $("#changeUserPassword").click(function()
    {
        var password = $("#NewPassword").val();
        var confirmPassword = $("#ConfirmPassword").val();
        if(password != confirmPassword)
        {
            $("#matcherr").html("Passwords do not match!");
            $("#ConfirmPassword").css("color", "red");
            return false;
        }
        if($("#NewPassword").val().length <4)
        {
            $("#NewPassword").css("border", "1px solid #1db464");
            $("#matcherr").html("Passwords length must be greater then 4!");
            $("#NewPassword").focus();
            return false;
        }

    });
</script>