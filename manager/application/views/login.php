<!DOCTYPE html>
<head>
    <title>Hotel Grand</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hotel Grand" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- bootstrap-css -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/bootstrap.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="<?=base_url('assets')?>/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/font.css" type="text/css"/>
    <link href="<?=base_url('assets')?>/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
</head>
<body class="signup-body">
<div class="agile-signup">

    <div class="content2">
        <p align="center" style="color:#F00;">
            <?php if($msg=$this->session->flashdata('feedback')): ?>

                <strong style="color:#F00">
                    <?=$msg?>
                </strong>

            <?php endif; ?>
        </p>
        <div class="grids-heading gallery-heading signup-heading">
            <h2>Login</h2>
        </div>
        <form action="<?=base_url('msd-Login.jsp')?>" method="post" enctype="multipart/form-data" >
        <input type="text" id="Username" name="Username" value="<?=set_value('Username')?>" placeholder="User Name" >
        <input type="password" id="Password" name="Password" value="" onFocus="this.value = '';" placeholder="Password" ">
        <input type="submit" id="login" name="login" class="register" value="Login">
        </form>
        <div class="signin-text">
            <div class="text-left">
                <p><!--<a href="#"> Forgot Password? </a>--></p>
            </div>
            <div class="text-right">
                <p></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- footer -->
    <div class="copyright">
        <p>© 2019 Hotel Grand . All Rights Reserved . Design & Develop by <a href="http://www.hindustanweb.com/" target="_blank">Hindustan Web</a></p>
    </div>
    <!-- //footer -->

</div>
<script src="<?=base_url('assets')?>/js/proton.js"></script>
</body>
</html>
