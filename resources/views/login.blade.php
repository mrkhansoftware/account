<!DOCTYPE html>
<html>
<head>
   <!-- Google Tag Manager -->
   <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5CMGZN2');
    </script>
    <!-- End Google Tag Manager -->
    <title>Login Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="title" content="login_account" />
    <meta name="description" content="Over the account you can access the programs and services" />
    <meta name="keywords" content="Account IIEEX, Account GACCCA" />
    <meta name="robots" content="noindex, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <meta name="revisit-after" content="30 days" />
    <meta name="author" content="IIEEX, GACCCA" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://account.iieex.org/login_account" />
    <meta property="og:site_name" content="https://account.iieex.org" />
    <meta name="google-site-verification" content="-6V8H3sxoJ6qUsdyr6IkfGBlVoHhB5C3QQFTFTmR4mI" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>


<link rel="icon" href="{{ asset('images/favicon/favicon-iieex-16.png') }}" type="image/png" sizes="16x16" />
    <link rel="icon" href="{{ asset('images/favicon/favicon-iieex-32.png') }}" type="image/png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/favicon-iieex-60.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/favicon-iieex-76.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/favicon-iieex-120.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/favicon-iieex-152.png') }}" />

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
<link href="{{ asset('css/jquery-ui.css') }}"  rel='stylesheet' >
<link href="{{ asset('css/font.css') }}"  rel='stylesheet' >
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- <script src="https://code.jquery.com/jquery-3.x-git.min.js"></script> -->
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>   
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>



</head>
<body style="background: #FFF;">
<div class="gaccca-grid gaccca-wrap  gaccca-login-page">
<div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1" style="background: #FFF;">
    

<div class="gaccca-login-header">

<div class="gaccca-grid gaccca-wrap">

<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

<!-- <div class="gaccca-behind-the-logo"> -->

<img class="gaccca-login-page-logo" src="{{ asset('images/logo/logo12.png') }}"/>

<!-- </div> -->

</div>


</div>
</div>
<div class="clear"></div>
<div class="gaccca-login-containt" id="login-containt">

<span class="gaccca-accout-access-text gaccca-margin-bootom-login-element">Access your account</span>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">

<div class="gaccca-social-element">
<button class="gaccca-google-sign-btn" type="button" id='googleLogin'><div class="gaccca-google-image">

<img src="{{ asset('images/social-button/google-logo.png') }}" height="22" width="22"/>

</div> <span class="gaccca-google-text"> Sign in with Google </span></button>
</div>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">

<div class="gaccca-social-element">
<button class="gaccca-facebook-sign-btn" type="button" id='fbLogin'><div class="gaccca-facebbok-image">
<img src="{{ asset('images/social-button/f.png') }}" />

</div> <span class="gaccca-google-text"> Login with Facebook </span></button>
</div>
</div>

<div class="gaccca-login-or"><span>Or</span></div>
<div class="gaccca-alert"  id='loginMsg'>
<span class="gaccca-alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Error!</strong> <span id='errorMessagelogin'></span>
</div>
@if ($response==='Verified')
<div class="gaccca-alert-success" style='display:block'>
<span class="gaccca-alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Success! </strong> <spaN>Your Account is verified. Please login now.</span>
</div>
@endif
<form id='login-form-data' >

<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
<div class="gaccca-social-element">
<div class="gaccca-form-element__control"> 
    <input type="email" id="login-email" placeholder="Email" required="" class="gaccca-input" />  
    <span class=" gaccca-text-left gaccca-error-message" id="login-email-error-msg"></span>
</div>
</div>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">

<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    <input type="Password" id="login-password" placeholder="Password" required="" class="gaccca-input" />  
    <span class=" gaccca-text-left gaccca-error-message" id="login-password-error-msg"></span>

</div>
</div>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">

<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    <button class="gaccca-login-button" id='login-form'>LOGIN</button> 
</div>
</div>
</div>
</form>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

<div class="gaccca-form-element">
<div class="gaccca-form-element__control">
<a href="javascript:void(0)" id="forget-password-btn">Forgot your password? </a>
</div>
</div>
</div>

<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">

<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
<button class="gaccca-new-user-btn" id="new-user">
    <span class="gaccca-new-user-btn-text"> NEW USER? </span>
    <span class="gaccca-new-user-btn-sub-text"> Create an acoount with your Email </span>
    
</button> 
</div>
</div>
</div>

</div>



<div class="gaccca-signup-containt" id="signup-containt">
<div class="gaccca-alert" id='signUpMsg'>
<span class="gaccca-alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Error!</strong> <span id='errorMessageSignUp'></span>
</div>
<div class="gaccca-alert-success" id='signUpMsgSuccess'>
<span class="gaccca-alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Success! </strong> <span id='successMessageSignup'></span>
</div>
<span class="gaccca-accout-access-text gaccca-margin-bootom-login-element" >Sign Up</span>


<form id='signup-form' data-parsley-validate=''>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    <input type="text" id="signup-firstname" placeholder="First Name" required="" class="gaccca-input" />  
</div>
</div>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    <input type="text"  id="signup-lastname" placeholder="Last Name" required="" class="gaccca-input" />  
</div>
</div>
</div>




<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    <input type="email"  id="signup-email" placeholder="Email" required="" class="gaccca-input" />  
</div>
</div>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">

<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    <input type="Password"  id="signup-password" placeholder="Password" required="" class="gaccca-input" />  
</div>
</div>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element ">

<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    
    <button class="gaccca-button-save-green gaccca-margin-top-20">Create My Account</button>
    
</div>
</div>
</div>
</form>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

<div class="gaccca-form-element gaccca-margin-top-20">
<div class="gaccca-form-element__control">
<a style="text-decoration: none;">Already have an account ?</a>
<a href="javascript:void(0)" id="go-login-from-signup"> Go back to login </a>
</div>
</div>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

<div class="gaccca-form-element gaccca-margin-top-60">
<div class="gaccca-form-element__control">

<p class="gaccca-signup-text">Create a free account to get access to our online program application and forms, price list, terms & conditions and additional program information. See what you need for your J-1 Visa Application, Placement and other services with us.</p>

<p class="gaccca-signup-text"> <strong> No service is booked automatically! </strong> By creating an account you agree to our privacy, data protection and cookie policy.</p>

<p class="gaccca-signup-text">
If you don’t receive an email within 3 minutes, please use the online chat or send us an email (info@iieex.org). Check also your SPAM Folder.
</p>
</div>
</div>
</div>




</div>


<div class="gaccca-forgot-password-containt" id="forgot-password-containt">
<div class="gaccca-alert" id='resetMsg'>
<span class="gaccca-alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Error! </strong> <span id='errorMessageReset'></span>
</div>

<div class="gaccca-alert-success" id='resetMsgSuccess'>
<span class="gaccca-alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Success! </strong> <span id='successMessageReset'></span>
</div>

<span class="gaccca-accout-access-text gaccca-margin-bootom-login-element" >Forgot Password? </span>



<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
<p>Enter the email address associated with your account.</p> 
</div>
</div>
</div>





<form id='forget-form-data' data-parsley-validate=''>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
<div class="gaccca-social-element">
<div class="gaccca-form-element__control">
    <input type="email" id="forget-pass-email" placeholder="Email" required="" class="gaccca-input" />  
</div>
</div>
</div>



<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element ">

<div class="gaccca-social-element">
<div class="gaccca-form-element__control">

<button class="gaccca-button-save-green gaccca-margin-top-20" id='resetPassBtn' >Reset my password</button>
</div>
</div>
</div>
</form>     
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

<div class="gaccca-form-element gaccca-margin-top-20">
<div class="gaccca-form-element__control">
<a href="javascript:void(0)" id="go-login-from-forget-password"> Go back to login </a>
</div>
</div>
</div>



</div>


</div>

<div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1" style="background: #FFF; ">
<!-- <img src="assets/images/bg.jpg" class="gaccca-image-responsive"> -->
<div class="gaccca-half-login">
<p id="free-account-text">
Create a free account to get access to our online program application and forms, price list and additional program information. See what you will need for your J-1 Visa Application, Placement and other booked services with us. By creating this account no service is booked automatically! Please fill out all requested information. If you don’t receive an email with your password within 3 minutes, please use the online chat or send us an email (info@iieex.org). Check also your SPAM Folder</p>

<div class="gaccca-create-program-account" id="create-your-IIEEX-program-account">
    <span class="gaccca-create-program-account-heading">Create your IIEEX Program Account</span>
    <h4 class="gaccca-create-program-account-text">Start & book your J-1 Visa Application for an Internship or Trainee </h4>
    <h4 class="gaccca-create-program-account-text">Monitor the J-1 Visa Proccess from arival to departure</h4> 
    <h4 class="gaccca-create-program-account-text">Create your resume for the placement program </h4>
    <h4 class="gaccca-create-program-account-text">Manage your SIM Card for the USA</h4>
</div>

</div>

</div>
</div>
<div class="gaccca-loader-div" id='loader' style='display:none'>
<div class="gaccca-loader"></div>
</div>
</body>








</html>
<script src="{{ asset('js/accountAuth.js') }}"></script>
<script>
$(document).ready(function(){

$("#signup-containt").hide();
$("#forgot-password-containt").hide();
$("#create-your-IIEEX-program-account").hide();

$("#forget-password-btn").click(function(){
$("#signup-containt").hide();
$("#login-containt").hide();
$("#forgot-password-containt").show();
$("#create-your-IIEEX-program-account").hide();
$("#free-account-text").show();
});

$("#go-login-from-signup").click(function(){
$("#signup-containt").hide();
$("#forgot-password-containt").hide();
$("#create-your-IIEEX-program-account").hide();
$("#free-account-text").show();
$("#login-containt").show();
});


$("#go-login-from-forget-password").click(function(){
$("#signup-containt").hide();
$("#forgot-password-containt").hide();
$("#create-your-IIEEX-program-account").hide();
$("#free-account-text").show();
$("#login-containt").show();
});


$("#new-user").click(function(){
$("#forgot-password-containt").hide();
$("#login-containt").hide();
$("#free-account-text").hide();
$("#signup-containt").show();
$("#create-your-IIEEX-program-account").show();
});






});



function createOrMergeAccount (isRedirect){
var userInfo=currentUserInfo();console.log(userInfo);
if(userInfo.uid=='' || userInfo.uid==undefined)return;
var formData = {
firstName: userInfo.firstName!=undefined?userInfo.firstName:userInfo.email,
lastName: userInfo.lastName!=undefined?userInfo.lastName:userInfo.email,
email:userInfo.email,
uid:userInfo.uid,
providerId:userInfo.providerId
};
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type: 'POST',
url: 'ajax_after_login',
data: formData,
dataType: 'json',
success: function (data) {
  
    if(data.canAccessAccount=='No'){
        document.getElementById('loginMsg').style.display='block';
        document.getElementById('errorMessagelogin').innerHTML='Your account is not verified contact administrator';
        document.getElementById('loader').style.display='none';
        firebase.auth().signOut();
        return;
    }
if(data.exStatus=='No'){ 
    
var firstName= userInfo.firstName!=undefined?userInfo.firstName:userInfo.email;
var lastName= userInfo.lastName!=undefined?userInfo.lastName:userInfo.email;
var email=userInfo.email;
password=makeid(10);
signUpForm(email,password , firstName, lastName, true);
return;
}
if(isRedirect){
console.log(currentUserInfo());
window.location.href='/'+'{{isset($_GET["redirectUrl"])?$_GET["redirectUrl"]:"profile_account"}}';
}


},
error: function (data) {
console.log(data);
}
});
}


</script>