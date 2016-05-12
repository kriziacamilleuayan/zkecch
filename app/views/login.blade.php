<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Zkecch Co.</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">
<link href="css/form-elements.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/logo.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s"><font color="gray"><bold>Welcome to <strong>Zkecch Co.</strong></bold></font></h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li><font size="+1" color="black">Show. Inspire. Earn</font></li>
        </ul>
        <!-- Triggers the modal with the log-in button -->
            <button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" data-toggle="modal" data-target="#signupModal">Sign Up</button>
  		
  			<button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" data-toggle="modal" data-target="#loginModal" style="margin-left:40px">Log in</button>
    	
    	<!-- Modal -->
    	<div id="loginModal" class="modal fade" role="dialog">
    		<div class="modal-dialog">

    			<!-- Modal content -->
    			<div class="modal-content">
                        <div class="col-lg-10 col-lg-offset-1  form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your email and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<img src="img/lock.png" alt="">
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" class="login-form" action="{{URL::to('login')}}" method="post">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
		                    </div>
                        </div>
				
 
    			</div>

    			<!-- End of modal content -->
    		</div>
    	</div>


    	<div id="signupModal" class="modal fade" role="dialog">
    		<div class="modal-dialog">

    			<!-- Modal content -->
    			<div class="modal-content">
                        <div class="col-lg-10 col-lg-offset-1  form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Start your membership now!</h3>
                            		<p>Be part in sharing wonderful masterpieces to the world!</p>
                        		</div>
                        		<div class="form-top-right">
                        			<img src="img/signup.png" alt="">
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="{{URL::to('login')}}" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-firstname">First Name</label>
			                        	<input type="text" name="form-firstname" placeholder="First Name..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                    		<label class="sr-only" for="form-lastname">Last Name</label>
			                        	<input type="text" name="form-lastname" placeholder="Last Name..." class="form-username form-control" id="form-username">
			                        </div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email</label>
			                        	<input type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Begin your journey!</button>
			                    </form>
		                    </div>
                        </div>
				
 
    			</div>

    			<!-- End of modal content -->
    		</div>
    	</div>

    </div>


</div>
</header><!--header-end-->
</body>
</html>