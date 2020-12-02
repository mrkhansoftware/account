<!DOCTYPE html>
<html>
<head>
    <title>Term of services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="title" content="terms-of-service" />
    <meta name="description" content="Over the account you can access the programs and services" />
    <meta name="keywords" content="Account IIEEX, Account GACCCA" />
    <meta name="robots" content="noindex, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <meta name="revisit-after" content="30 days" />
    <meta name="author" content="IIEEX, GACCCA" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://account.iieex.org/terms-of-service" />
    <meta property="og:site_name" content="https://account.iieex.org" />
    <meta name="google-site-verification" content="-6V8H3sxoJ6qUsdyr6IkfGBlVoHhB5C3QQFTFTmR4mI" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link rel="icon" href="{{ asset('images/favicon/favicon-iieex-16.png') }}" type="image/png" sizes="16x16" />
    <link rel="icon" href="{{ asset('images/favicon/favicon-iieex-32.png') }}" type="image/png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/favicon-iieex-60.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/favicon-iieex-76.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/favicon-iieex-120.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/favicon-iieex-152.png') }}" />

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link href="{{ asset('css/jquery-ui.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/font.css') }}" rel='stylesheet'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <style>
.container {
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 108px;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
   </style>



</head>

<body style="background: #FFF;">
    <div class="gaccca-grid gaccca-wrap  gaccca-login-page">
        <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_6-of-12" style="background: #FFF;position:relative;">
            <div class="gaccca-half-login-first">


                <div class="gaccca-login-header">

                    <div class="gaccca-grid gaccca-wrap">

                        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

                            <!-- <div class="gaccca-behind-the-logo"> -->

                            <img class="gaccca-login-page-logo" src="{{ asset('images/logo/logo12.png') }}" />
                            <img class="gaccca-login-page-logo-small" src="{{ asset('images/logo/small_logo.png') }}" />

                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="clear"></div>


                             
<div class="container"> 
  <iframe class="responsive-iframe" src="https://www.termsfeed.com/live/4e20203b-fa99-4c90-8da1-d2199a53c152"></iframe>
</div>
            </div>

        </div>
        <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_6-of-12 gaccca-half-login-image" style="background: #FFF; ">
            <div class="gaccca-half-login">


            </div>

        </div>
    </div>
    <div class="gaccca-loader-div" id='loader' style='display:none'>
        <div class="gaccca-loader"></div>
    </div>

</body>

</html>