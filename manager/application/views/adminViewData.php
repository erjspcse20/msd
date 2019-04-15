
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
    <script src="<?=base_url('assets')?>/js/jquery2.0.3.min.js"></script>
    <script src="<?=base_url('assets')?>/js/modernizr.js"></script>
    <script src="<?=base_url('assets')?>/js/jquery.cookie.js"></script>
    <script src="<?=base_url('assets')?>/js/screenfull.js"></script>
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>
    <!-- charts -->
    <script src="<?=base_url('assets')?>/js/raphael-min.js"></script>
    <script src="<?=base_url('assets')?>/js/morris.js"></script>
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/morris.css">
    <!-- //charts -->
    <!--skycons-icons-->
    <script src="<?=base_url('assets')?>/js/skycons.js"></script>
    <!--//skycons-icons-->
</head>
<style type="text/css">
.mendetory
	{
	color: red;
	}
</style>
<body class="dashboard-page">
<script>
    var theme = $.cookie('protonTheme') || 'default';
    $('body').removeClass (function (index, css) {
        return (css.match (/\btheme-\S+/g) || []).join(' ');
    });
    if (theme !== 'default') $('body').addClass(theme);
</script>
		<?php
			$this->load->view('pages/menu');
		?>
<section class="wrapper scrollable">
    <nav class="user-menu">
        <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>			
        </a>		
    </nav>
    <?php 
        $this->load->view('pages/header');
        $this->load->view('pages/'.$pageName);
        $this->load->view('pages/footer'); 
    ?>
    <!-- //footer -->
</section>

<script src="<?=base_url('assets')?>/js/bootstrap.js"></script>
<script src="<?=base_url('assets')?>/js/proton.js"></script>
</body>
</html>