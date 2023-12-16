<!DOCTYPE html>
<html lang="en"> 
<head>
    <title> Guillermo Gaviola | Register</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">

    <!-- Favicons -->
  	<link href="{{ url('frontend/assets/img/20231125_204458.png') }}" rel="icon">
 	<link href="{{ url('frontend/assets/img/20231125_204458.png') }}" rel="apple-touch-icon">
    
    <!-- FontAwesome JS-->
    <script defer src="{{ url('assets/plugins/fontawesome/js/all.min.js') }}"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ url('assets/css/portal.css') }}">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="{{ url('register') }}"><img class="logo-icon me-2" src="{{ url('frontend/assets/img/20231125_204458.png') }}" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>
					@if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                	@endif					
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" method="post" action="{{ route('post.register') }}">
							@csrf
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Name</label>
								<input id="signup-name" name="name" type="text" class="form-control signup-name" placeholder="Name">
							</div>
							@if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        	@endif
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email">
							</div>
							@if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        	@endif
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Password">
							</div>
							@if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        	@endif
							<div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
									<label class="form-check-label" for="RememberPassword">
									I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
									</label>
								</div>
							</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="{{ url('login') }}" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
			         <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="https://web.facebook.com/guillermogaviola.s" target="_blank">Gav</a>Gav</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">You can visit my Personal Facebook Account</h5>
					    <div>Click <a target="_blank" href="https://web.facebook.com/guillermogaviola.s">here</a>.</div>
				    </div>
				</div>>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

