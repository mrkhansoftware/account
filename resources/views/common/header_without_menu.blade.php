<!DOCTYPE html>
<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-976534-20"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-976534-20');
  </script>
  <title>@if (isset($title)){{$title}} @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
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

  <link rel="icon" href="{{ asset('images/favicon/favicon-iieex-16.png') }}" type="image/png" sizes="16x16" />
    <link rel="icon" href="{{ asset('images/favicon/favicon-iieex-32.png') }}" type="image/png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/favicon-iieex-60.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/favicon-iieex-76.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/favicon-iieex-120.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/favicon-iieex-152.png') }}" />


  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <!-- <script src="https://code.jquery.com/jquery-3.x-git.min.js"></script> -->


  <link href="{{ asset('css/jquery-ui.css') }}" rel='stylesheet'>
  <link href="{{ asset('css/font.css') }}" rel='stylesheet'>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('js/parsley.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
  <script>
    function onUpdate(msg) {
      jQuery('#message-success').html(msg);
      jQuery('#success-alert').fadeIn();
      setTimeout(function() {

        jQuery('#success-alert').fadeOut("slow");

      }, 5000);
    }

    function onError(msg) {
      jQuery('#message-error').html(msg);
      jQuery('#error-alert').fadeIn();
      setTimeout(function() {

        jQuery('#error-alert').fadeOut("slow");

      }, 5000);
    }
    jQuery(document).ready(function() {
            jQuery("input.gaccca-input:text").attr('maxlength', '255');
            jQuery("#signHiddenData").removeAttr('maxlength'); 
            
        });
  </script>
</head>

<body>
  @if (isset($_GET['isSave']) && $_GET['isSave']==='1')
  <div class="gaccca-notify_alert gaccca-theme_success" id="success-alert">
    <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Success!</strong> <span id='message-success'>Information has been saved</span>
  </div>
  @endif
  @if (isset($_GET['isSent']) && $_GET['isSent']==='1')
  <div class="gaccca-notify_alert gaccca-theme_success" id="success-alert">
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
  @include('common.handleCSRF')