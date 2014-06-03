<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  1. $BODY                        |  Body                        |
|  2. $MAIN_NAVIGATION             |  Main navigation             |
|  3. $NAVBAR_ICON_BUTTONS         |  Navbar Icon Buttons         |
|  4. $MAIN_MENU                   |  Main menu                   |
|  5. $UPLOADS_CHART               |  Uploads chart               |
|  6. $EASY_PIE_CHARTS             |  Easy Pie charts             |
|  7. $EARNED_TODAY_STAT_PANEL     |  Earned today stat panel     |
|  8. $RETWEETS_GRAPH_STAT_PANEL   |  Retweets graph stat panel   |
|  9. $UNIQUE_VISITORS_STAT_PANEL  |  Unique visitors stat panel  |
|  10. $SUPPORT_TICKETS            |  Support tickets             |
|  11. $RECENT_ACTIVITY            |  Recent activity             |
|  12. $NEW_USERS_TABLE            |  New users table             |
|  13. $RECENT_TASKS               |  Recent tasks                |

===================================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dashboard - PixelAdmin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's stylesheets -->
	<link href="/teachEnglish/public/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->
</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-asphalt main-menu-animated">

<script>var init = [];</script>

<div id="main-wrapper">


<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="index.html" class="navbar-brand">
					<div>
						<img alt="Pixel Admin" src="/teachEnglish/public/assets/images/pixel-admin/main-navbar-logo.png">
					</div>
					Skyler Knight
				</a>

				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Home</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lessons</a>
							<ul class="dropdown-menu">
								<li><a href="#">First item</a></li>
								<li><a href="#">Second item</a></li>
								<li class="divider"></li>
								<li><a href="#">Third item</a></li>
							</ul>
						</li>
					</ul> <!-- / .navbar-nav -->

					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">

<!-- 3. $NAVBAR_ICON_BUTTONS ======================================================================= -->
							
<!-- /3. $END_NAVBAR_ICON_BUTTONS -->

							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<!-- <img src="assets/demo/avatars/1.jpg" alt=""> -->
									<span class="fa fa-user text-primary"></span>
									<span>{{$user->firstname}} {{$user->lastname}}</span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
									<li class="divider"></li>
									<li><a href="/teachEnglish/public/logout"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
					</div> <!-- / .right -->
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<ul class="navigation">
				<li class="active">
					<a href="feedback"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">Feedback</span></a>
				</li>
				<li>
					<a href="settings"><i class="menu-icon fa fa-gears"></i><span class="mm-text">Settings</span></a>
				</li>
			</ul> <!-- / .navigation -->
			<div class="menu-content">
				<a href="pages-invoice.html" class="btn btn-danger btn-outline btn-block">Book Session</a>
			</div>
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->

	<div id="content-wrapper">
		<ul class="breadcrumb breadcrumb-page">
			<div class="breadcrumb-label text-light-gray">You are here: </div>
			<li><a href="#">Home</a></li>
			<li class="active"><a href="#">Feedback</a></li>
		</ul>
		<div class="page-header">
			
			<div class="row">
				<!-- Page header, center on small screens -->
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-bar-chart-o page-header-icon"></i>&nbsp;&nbsp;Feedback</h1>

				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<hr class="visible-xs no-grid-gutter-h">
						<!-- "Create project" button, width=auto on desktops -->
						<div class="pull-right col-xs-12 col-sm-auto"><a href="#" class="btn btn-danger btn-labeled" style="width: 100%;"><span class="btn-label icon fa fa-plus"></span>Book Session</a></div>

						<!-- Margin -->
						<div class="visible-xs clearfix form-group-margin"></div>
					</div>
				</div>
			</div>
		</div> <!-- / .page-header -->


		<div class="row">
			<div class="col-md-8">

				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-transparent">
							<div class="panel-heading">
								<span class="panel-title">All Feedback Reports</span>
								<div class="panel-heading-controls">
									{{$reports->links('pagination::simple-xs');}}
								</div>
							</div>
						</div>
							<div class="panel-group panel-group-warning" id="accordion-example">
								<!-- BEGIN FEEDBACK INPUT -->
								@for($i = 0; $i < $reports->count(); $i++)
								<div class="panel">
									<div class="panel-heading">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="#collapse{{$i}}">
											<i class="panel-title-icon fa fa-calendar"></i>
											<strong>{{date_format($reports[$i]->created_at, 'M d, Y')}}</strong>
										</a>
									</div> <!-- / .panel-heading -->
									<div id="collapse{{$i}}" class="panel-collapse collapse">
										<div class="panel-body">
											<h4 class="text-info"> Lesson Overview: </h4>
											<p>{{$reports[$i]->overview}}</p>
											<hr>
											<h4 class="text-success">Vocabulary:</h4>
											<ul>
												@foreach($reports[$i]->vocab as $word)
													<li>{{$word}}</li>
												@endforeach
											</ul>
											<hr>
											<h4 class="text-warning">Phrases:</h4>
											<ul>
												@foreach($reports[$i]->phrases as $phrase)
													<li>{{$phrase}}</li>
												@endforeach
											</ul>
										</div> <!-- / .panel-body -->
									</div> <!-- / .collapse -->
								</div> <!-- / .panel -->
								@endfor

							</div> <!-- / .panel-group -->
					</div>					
				</div>
			</div>
<!-- /6. $EASY_PIE_CHARTS -->


<!-- 7. $EARNED_TODAY_STAT_PANEL ===================================================================

					Earned today stat panel
-->
			<div class="col-md-4">
				<div class="row">

					<div class="col-md-12">
						<div class="stat-panel">
							<!-- Danger background, vertically centered text -->
							<div class="stat-cell bg-danger valign-middle">
								<!-- Stat panel bg icon -->
								<i class="fa fa-trophy bg-icon"></i>
								<!-- Extra large text -->
								<span class="text-xlg"><span class="text-lg text-slim"></span><strong>{{$numLessons}}</strong></span><br>
								<!-- Big text -->
								<span class="text-bg">Lessons Completed</span><br>
								<!-- Small text -->
								<span class="text-sm"><a href="#">Review your feedback</a></span>
							</div> <!-- /.stat-cell -->
						</div> <!-- /.stat-panel -->
					</div>

				</div>
			</div>
<!-- /7. $EARNED_TODAY_STAT_PANEL -->


		<div class="row">


		</div>


	</div> <!-- / #content-wrapper -->
	<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="/teachEnglish/public/assets/javascripts/bootstrap.min.js"></script>
<script src="/teachEnglish/public/assets/javascripts/pixel-admin.min.js"></script>

<script type="text/javascript">
	init.push(function () {
		// Javascript code here
	})
	window.PixelAdmin.start(init);
</script>

</body>
</html>