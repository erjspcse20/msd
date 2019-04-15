<!-- tables -->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/css/basictable.css" />
<script type="text/javascript" src="<?=base_url('assets')?>/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<section class="title-bar">
			<div class="logo">
				<h1><a href="<?=base_url('welcome-to-msd-dashboard.jsp')?>"><img height="50" width="100"  src="<?=base_url('assets')?>/images/logo.png" alt="" /></a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="w3l_search">
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						 <a href="<?=base_url('welcome-to-msd-add-visitor.jsp')?>"><button type="button" class="btn btn-hover btn-dark btn-block"> ADD VISITOS <i class="fa fa-user"></i>

</button></a>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="<?=base_url('welecome-to-msd-change-password.jsp')?>"><i class="fa fa-cog"></i> Change Password</a> </li>
									<li> <a href="<?=base_url('msd-Logout.jsp')?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
        