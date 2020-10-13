
<!DOCTYPE html>
<html>
<head>




   <!-- Google Tag Manager -->
   <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5CMGZN2');</script>
            <!-- End Google Tag Manager -->  
        <title>@if (isset($title)){{$title}} @endif</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
        <meta name="title" content="@if (isset($page)){{$page}} @endif" />
        <meta name="description" content="Over the account you can access the programs and services" />
        <meta name="keywords" content="Account IIEEX, Account GACCCA" />
        <meta name="robots" content="noindex, nofollow" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="English" />
        <meta name="revisit-after" content="30 days" />
        <meta name="author" content="IIEEX, GACCCA" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://account.iieex.org/@if (isset($page)){{$page}} @endif" />
        <meta property="og:site_name" content="https://account.iieex.org" />
        <meta name="google-site-verification" content="-6V8H3sxoJ6qUsdyr6IkfGBlVoHhB5C3QQFTFTmR4mI" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
  



  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
  <!-- <script src="https://code.jquery.com/jquery-3.x-git.min.js"></script> -->
  

  <link href="{{ asset('css/jquery-ui.css') }}"  rel='stylesheet' >
  <link href="{{ asset('css/font.css') }}"  rel='stylesheet' >
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('js/parsley.min.js') }}"></script>   
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
    <script>
 function onUpdate(msg){  
        jQuery('#message-success').html(msg);
        jQuery('#success-alert').fadeIn();
        setTimeout(function(){
            
            jQuery('#success-alert').fadeOut("slow");
            
        }, 5000);
    }
    
    function onError(msg){  
        jQuery('#message-error').html(msg);
        jQuery('#error-alert').fadeIn();
        setTimeout(function(){
            
            jQuery('#error-alert').fadeOut("slow");
            
        }, 5000);
    }

    </script>
</head>
    <body>
    @if (isset($_GET['isSave']) && $_GET['isSave']==='1')
<div class="gaccca-notify_alert gaccca-theme_success" id="success-alert" >
        <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Success!</strong> <span id='message-success'>Information has been saved</span>
    </div>
    @endif
    @if (isset($_GET['isSent']) &&  $_GET['isSent']==='1')
<div class="gaccca-notify_alert gaccca-theme_success" id="success-alert" >
        <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Success!</strong> <span id='message-success'>Information has been sent</span>
    </div>
    @endif
       <!--Start---Success notification-------->
 <div class="gaccca-notify_alert gaccca-theme_success" id="success-alert" style='display:none'>
        <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Success!</strong> <span id='message-success'></span>
    </div>
    <!--End-----Success notification-------->
    
    <!--Start---Error notification-------->
    <div class="gaccca-notify_alert gaccca-theme_error" id="error-alert" style='display:none'>
        <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Alert!</strong> <span id='message-error'></span>
    </div>
    <!--End-----Success notification-------->
    <div class="gaccca-loader-div" id='loader' style='display:none'>
<div class="gaccca-loader"></div>
</div>
    <div class="gaccca-header">
      <div class="gaccca-content-header">
        <div class="gaccca-grid gaccca-wrap">
          <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-behind-the-logo-host-company">
                <!-- <img src="{{ asset('images/logo/logo1.png') }}"/> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  <button id="gaccca-scroll-to-top-button" title="Go to top"><i class="fas fa-arrow-up"></i></button>
       