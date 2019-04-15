
<!DOCTYPE html>
<head>
<title>Hotel Grand</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Grand" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
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
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
        
	<?php include("inc/menu.php"); ?>
    
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
		  <i class="icon-reorder"></i>			</a>		</nav>
		<?php include("inc/header.php"); ?>
		<div class="main-grid">
        <div class="table-heading">
					<h2>View Report</h2>
				</div>
			
			<div class="row">
                                  <div class="col-xs-12 col-sm-2">

												<label for="field-1-2">Date From : </label>
												<div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

											</div>
                                            <div class="col-xs-12 col-sm-2">

												<label for="field-1-2">Date To : </label>
												<div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

											</div>                                                   
                                            <div class="col-xs-12 col-sm-2">

											

										<h4>Reference from :</h4>
										<div class="form-group">
											<select name="field-2" id="field-2" required="true" class="form-control">
												<option value="">All</option>
												 <option value="val-2">Grand Hotal (door to door)</option>
                                             <option value="val-2">   Goibibo</option>
<option value="val-1">Make my trip</option>
<option value="val-1">Just dial</option>
<option value="val-1">OYO</option>
<option value="val-1">Yatra</option>
<option value="val-1">Booking.com</option>
 <option value="val-2">Website</option>
											</select>
										</div>
                                        
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
 <input type="submit" name="sub-1" value="Submit" class="btn btn-primary">

											</div>
                                        
                                       
                                        <div class="col-xs-12 col-sm-2">

												<label for="field-1-2">TOTAL SALE</label>
												<h3>Rs. 2000</h3>

											</div>
                                            
                                            
                                         </div>
                                         <hr>
            
			
			<div class="agile-grids">
				<div class="w3l-table-info">
					 <div class="table-heading">
					<h3 align="center">Visitors From ( OYO )</h3>
				</div>
					    <table id="table">
						<thead>
						  <tr>
							<th>S.No.</th>
							<th>Room No.</th>
							<th>Name</th>
							<th>Mobile No</th>
							<th>Age</th>
							<th>Nationality </th>
                            <th>Coming From</th>
                             <th>Going to</th>
                              <th>No. of Persons</th>
                               <th>Purpose</th>
                                <th>Reference from</th>
                                 <th>Date/time of arrival </th>
                                  <th>Date/time of Departure </th>
                                   <th>Number Of days stayed </th>
                                    <th>Advance if any</th>
                                     <th>Status</th>
                                      <th>View</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>1</td>
							<td>225</td>
							<td>Mohan Lal</td>
							<td>9999999999</td>
							<td>25</td>
                            <td>indian</td>
							<td>Delhi</td>
                            <td>Delhi</td>
                            <td>3</td>
                            <td>meeting</td>
                            <td>OYO</td>
                            <td>11:00 am <samp>01-02-2019</samp></td>
                            <td>11:00 am <samp>02-02-2019</samp></td>
                            <td>1</td>
                            <td>200</td>
                            <td>Check out</td>
                            <td> <a href="visitor-details.php"><button type="button" class="btn btn-hover btn-dark btn-block"><i class="fa fa-eye" aria-hidden="true"></i>

</button> </a></td>
						  </tr>
                          <tr>
							<td>2</td>
							<td>225</td>
							<td>Mohan Lal</td>
							<td>9999999999</td>
							<td>25</td>
                            <td>indian</td>
							<td>Delhi</td>
                            <td>Delhi</td>
                            <td>3</td>
                            <td>meeting</td>
                            <td>OYO</td>
                            <td>11:00 am <samp>01-02-2019</samp></td>
                            <td>11:00 am <samp>02-02-2019</samp></td>
                            <td>1</td>
                            <td>200</td>
                            <td>Check out</td>
                            <td> <a href="visitor-details.php"><button type="button" class="btn btn-hover btn-dark btn-block"><i class="fa fa-eye" aria-hidden="true"></i>

</button> </a></td>
						  </tr>
                     
                          
                          
						  
						 
						</tbody>
					  </table>
					</div>
				
				<div class="clearfix"> </div>
			</div>
			
			
			
			
		</div>
		<!-- footer -->
		<?php include("inc/footer.php"); ?>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
