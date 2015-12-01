<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} &mdash; {{ trans('phrases.login') }}</title>
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/retina.min.css') }}" rel="stylesheet">
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/css/ie6-8.css"></script>
        
    <![endif]-->
    
    <!-- start: Favicon and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
    <!-- end: Favicon and Touch Icons -->   
        
</head>

<body>
        <div class="container">
        <div class="row">
                    
            <div class="row">
                <div class="login-box">
                    <h2>Login to your account</h2>
                    <form class="form-horizontal" action="http://bootstrapmaster.com/live/simpliq/index.html" method="post">
                        <fieldset>
                            
                            <input class="input-large col-xs-12" name="username" id="username" type="text" placeholder="type username"/>

                            <input class="input-large col-xs-12" name="password" id="password" type="password" placeholder="type password"/>

                            <div class="clearfix"></div>
                            
                            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
                            
                            <div class="clearfix"></div>
                            
                            <button type="submit" class="btn btn-primary col-xs-12">Login</button>
                        </fieldset> 

                    </form>
                    <hr>
                    <h3>Forgot Password?</h3>
                    <p>
                        No problem, <a href="login.html#">click here</a> to get a new password.
                    </p>    
                </div>
            </div><!--/row-->
            
                </div><!--/row-->       
        
    </div><!--/container-->
    
        
    <!-- start: JavaScript-->
    <!--[if !IE]>-->

            <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!--<![endif]-->

    <!--[if IE]>
    
        <script src="assets/js/jquery-1.11.0.min.js"></script>
    
    <![endif]-->

    <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='{{ asset('assets/js/jquery-2.1.0.min.js') }}'>"+"<"+"/script>");
        </script>

    <!--<![endif]-->

    <!--[if IE]>
    
        <script type="text/javascript">
        window.jQuery || document.write("<script src='{{ asset('assets/js/jquery-1.11.0.min.js') }}'>"+"<"+"/script>");
        </script>
        
    <![endif]-->
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
        
    
        
    <!-- theme scripts -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
        
    <!-- end: JavaScript-->
    
</body>
</html>