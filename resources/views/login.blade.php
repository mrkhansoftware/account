<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gaccca_main_style_new.css') }}" >
    
    <!-- <script src="https://code.jquery.com/jquery-3.x-git.min.js"></script> -->
    <script src="{{ asset('js/jquery-1.8.2.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>

    <!-- <link rel="stylesheet" href="assets/css/jquery-ui.css"> -->
    
    <!-- <script src="assets/js/jquery-ui.js"></script> -->

</head>
<body style="background: #FFF;">
    <div class="gaccca-grid gaccca-wrap  gaccca-login-page">
        <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1" style="background: #FFF;">
                                 
  
        <div class="gaccca-login-header">
    
          <div class="gaccca-grid gaccca-wrap">
    
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
              <div class="gaccca-behind-the-logo">
    
                  <img src="{{ asset('images/logo/logo1.png') }}"/>
                  
              </div>
              
            </div>

           
          </div>
        </div>
        <div class="clear"></div>
        <div class="gaccca-login-containt" id="login-containt">
             
            <span class="gaccca-accout-access-text gaccca-margin-bootom-login-element">Access your account</span>
             <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
  
                <div class="gaccca-social-element">
                 <button class="gaccca-google-sign-btn" type="button"><div class="gaccca-google-image">
                   
                     <img src="{{ asset('images/social-button/google-logo.png') }}" height="22" width="22"/>

                 </div> <span class="gaccca-google-text"> Sign in with Google </span></button>
                </div>
              </div>
              
             
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
  
                <div class="gaccca-social-element">
                 <button class="gaccca-facebook-sign-btn" type="button"><div class="gaccca-facebbok-image">
                     <img src="{{ asset('images/social-button/f.png') }}" />

                 </div> <span class="gaccca-google-text"> Login with Facebook </span></button>
                </div>
              </div>
             
              <div class="gaccca-login-or"><span>Or</span></div>
              
             
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
                <div class="gaccca-social-element">
                  <div class="gaccca-form-element__control">
                    <input type="email" id="text-input-id-2" placeholder="Email" required="" class="gaccca-input" />  
                  </div>
                </div>
              </div>
             
              
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
  
                <div class="gaccca-social-element">
                  <div class="gaccca-form-element__control">
                    <input type="text" id="text-input-id-2" placeholder="Password" required="" class="gaccca-input" />  
                  </div>
                </div>
              </div>
    
              
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
  
                <div class="gaccca-social-element">
                  <div class="gaccca-form-element__control">
                    <button class="gaccca-login-button">LOGIN</button> 
                  </div>
                </div>
              </div>


             
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element">
                  <div class="gaccca-form-element__control">
                   <a href="javascript:void(0)" id="forget-password-btn">Forget your password ? </a>
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
            <span class="gaccca-accout-access-text gaccca-margin-bootom-login-element" >Sign Up</span>
           
            

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
               <div class="gaccca-social-element">
                 <div class="gaccca-form-element__control">
                   <input type="text" id="text-input-id-fn" placeholder="First Name" required="" class="gaccca-input" />  
                 </div>
               </div>
             </div>


             <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
               <div class="gaccca-social-element">
                 <div class="gaccca-form-element__control">
                   <input type="text" id="text-input-id-ln" placeholder="Last Name" required="" class="gaccca-input" />  
                 </div>
               </div>
             </div>




             <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
               <div class="gaccca-social-element">
                 <div class="gaccca-form-element__control">
                   <input type="email" id="text-input-id-2" placeholder="Email" required="" class="gaccca-input" />  
                 </div>
               </div>
             </div>
            
             
             <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
 
               <div class="gaccca-social-element">
                 <div class="gaccca-form-element__control">
                   <input type="text" id="text-input-id-2" placeholder="Password" required="" class="gaccca-input" />  
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

             <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
 
               <div class="gaccca-form-element gaccca-margin-top-20">
                 <div class="gaccca-form-element__control">
                  <a href="javascript:void(0)" id="go-login-from-signup"> Go back to login </a>
                 </div>
               </div>
             </div>

            

       </div>
 




       <div class="gaccca-forgot-password-containt" id="forgot-password-containt">
        <span class="gaccca-accout-access-text gaccca-margin-bootom-login-element" >Forgot Password? </span>
       
        

        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
           <div class="gaccca-social-element">
             <div class="gaccca-form-element__control">
               <p>Enter the email address associated with your account.</p> 
             </div>
           </div>
         </div>


        



         <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element">
           <div class="gaccca-social-element">
             <div class="gaccca-form-element__control">
               <input type="email" id="text-input-id-2" placeholder="Email" required="" class="gaccca-input" />  
             </div>
           </div>
         </div>
        
         
       
         <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-margin-bootom-login-element ">

           <div class="gaccca-social-element">
             <div class="gaccca-form-element__control">

               <button class="gaccca-button-save-green gaccca-margin-top-20">Reset my password</button>
          
             </div>
           </div>
         </div>

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
                <p>
                Create a free account to get access to our online program application and forms, price list and additional program information. See what you will need for your J-1 Visa Application, Placement and other booked services with us. By creating this account no service is booked automatically! Please fill out all requested information. If you don’t receive an email with your password within 3 minutes, please use the online chat or send us an email (info @ iieex.org). Check also your SPAM Folder</p>
            </div>
             
        </div>
    </div>
</body>








</html>
<script>
  $(document).ready(function(){
  
  $("#signup-containt").hide();
  $("#forgot-password-containt").hide();
  
  
  $("#forget-password-btn").click(function(){
  $("#signup-containt").hide();
  $("#login-containt").hide();
  $("#forgot-password-containt").show();
  });
  
  $("#go-login-from-signup").click(function(){
  $("#signup-containt").hide();
  $("#forgot-password-containt").hide();
  $("#login-containt").show();
  });
  
  
  $("#go-login-from-forget-password").click(function(){
  $("#signup-containt").hide();
  $("#forgot-password-containt").hide();
  $("#login-containt").show();
  });
  
  
  $("#new-user").click(function(){
  $("#forgot-password-containt").hide();
  $("#login-containt").hide();
  $("#signup-containt").show();
  });
  
  
  });
  
  
  
  
  </script>