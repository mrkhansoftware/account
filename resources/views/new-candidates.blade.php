<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <title>new-candidates</title>
    @if (isset($page) && $page!='ApplicantResume' && $page!='Video_Resume' && $page!='b1Video')
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    @endif
    <meta name="title" content="new-candidates" />
    <meta name="description" content="Over the account you can access the programs and services" />
    <meta name="keywords" content="Account IIEEX, Account GACCCA" />
    <meta name="robots" content="noindex, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <meta name="revisit-after" content="30 days" />
    <meta name="author" content="IIEEX, GACCCA" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://account.iieex.org/new-candidates" />
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
    <link href="{{ asset('css/jquery-ui.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/font.css') }}" rel='stylesheet'>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>


</head>

<body style="background-color: #FFF;" id="body">

   


</body>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
        $.ajax({
            type: 'get',
            url: 'new-candidates-ajax',
            dataType: 'html',
            success: function(data) {
               
                const ajaxData = JSON.parse(data);
                 console.log(typeof(data));
                $('#body').html(ajaxData.html);
            },
            error: function(data) {
                document.getElementById('loader').style.display = 'none';
                console.log(data);
            }
        });
    });
</script>

</html>