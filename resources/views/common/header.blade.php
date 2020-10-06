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
  <link href="{{ asset('css/jquery-ui.css') }}"  rel='stylesheet' >
  <link href="{{ asset('css/font.css') }}"  rel='stylesheet' >
  <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('js/parsley.min.js') }}"></script>   
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
  
</head>

<body>
@if (isset($_GET['isSave']) && $_GET['isSave']==='1')
<div class="gaccca-notify_alert gaccca-theme_success" id="success-alert" >
        <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Success!</strong> <span id='message-success'> Your information and uploads are saved!.</span>
    </div>
    @endif
    @if (isset($_GET['isSent']) && $_GET['isSent']==='1')
<div class="gaccca-notify_alert gaccca-theme_success" id="success-alert" >
        <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Success!</strong> <span id='message-success'>The information has been sent successfully.</span>
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
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                    <div class="gaccca-behind-the-logo gaccca-behind-the-logo-position">
                    </div>
                   
                    <div class="gaccca-display-menu-div">
                    <ul class="gaccca-display-menu">
                    
                    @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Agency")!==false)


                          <li class="gaccca-dropdown"><a href="#home123">Agent Bookings</a>
                              
                              <div class="gaccca-dropdown-content">
                                  <a href="/AgencyJobSearch" target='_blank'>Job Search</a>
                                  <a href="/AgencyInformation">Information</a>
                                  <a href="/AgentParticipants">Participant List</a>
                                  <a href="/Add_New_Participant">J Visa</a>
                                  <a href="/AgencyBvisaBooking">B Visa</a>
                                  <a href="/AgencyPlacementProgramRegistrationForm">Placement</a>
                                  
                              </div>
                              
                          </li>
                          @endif
                      @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Hostcompany")!==false)
                          <li class="gaccca-dropdown"><a href="#home123">Host Company</a>
                              <div class="gaccca-dropdown-content">
                                  <a href="/host_company_agreement_account"  target="_blank">Host Company Agreement</a>
                                  <a href="/DS_7002_Trainigsplan"  target="_blank">DS-7002 Training Plan</a>
                                  <a href="/HostCompany_Mid_Point_Evaluation_Account"  target="_blank">Midpoint Evaluation</a>
                                  <a href="/final_evaluation_hc_account"  target="_blank">Final Evaluation</a>
                                  
                              </div>
                              
                          </li>
                          @endif
                      @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"B1")!==false)
                 
                          <li class="gaccca-dropdown"><a href="#home123">B1 Program</a>
                              <div class="gaccca-dropdown-content">
                                  <a href="/B_Visa_Case_Information" >Case Information</a>
                                  <a href="/b1Video" >Video</a>
                                  <a href="/b1_Embassy">Embassy &amp; Entry</a>
                                  <a href="/ScheduleCallBVisa">Schedule a Call</a>
                                  
                              </div>
                              
                          </li>
                          
                          @endif
                      @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Placement")!==false)
                  
                          <li class="gaccca-dropdown"><a href="#home">Placement Program</a>
                              
                              <div class="gaccca-dropdown-content">
                                  <a href="/VideoTutorials">Video Tutorials</a>
                                  <a href="/uploadyourdocuments">Upload Your Documents</a>
                                  <a href="/dosAndDonts">Dos and Don'ts</a>
                                  <a href="/ScheduleCall">Schedule a Call</a>
                                  <a href="/ApplicantResume">Create your resume</a>
                                  <a href="/WriteYourScript">Write your script</a>
                                  
                                  <a href="/VideoInstructions">Video Instructions</a>
                                  <a href="/Video_Resume">Record your Video Resume</a>
                                  <a href="/InterviewPreparation">Interview Preparation</a>
                                  
                              </div>
                              
                          </li>
                          @endif
                      @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"J1")!==false)
                
                         <li class="gaccca-dropdown"><a href="#home">J1 Program</a>
                              
                              <div class="gaccca-dropdown-content">
                                  <a href="/information_instruction_account">Information &amp; Instruction</a>
                                  <a href="/participant_information_account">Participant Information</a>
                                  <a href="/host_company_information_account">Host Company Information</a>
                                  <a href="/participant_agreement_account">Participant Agreement</a>
                                  <a href="/finalize_application_account">Finalize your Application</a>
                                  <a href="/j1_review_your_application_account">Review your J1 Application</a>
                                  
                                  
                                  
                                  
                                  @if(isset($datas['isParticipantAccepted'])&& $datas['isParticipantAccepted'])
                                  <a href="/participant_handbook_account">Participant Handbook</a>
                                  <a href="/ScheduleCallJvisa">Schedule a Call</a>
                                  @if(isset($datas['isAdditionalDocument'])&& $datas['isAdditionalDocument'])
                                  <a href="/AdditionalDocumentJ1">Additional Documents</a>
                                  @endif
                                  <a href="/extension_request_account">Extension Request</a>
                                  <a href="/travel_validation_account">Travel Validation</a>
                                  <a href="/validation_checkin_account">Validation &amp; Check-In</a>                                    
                                  <a href="/monthly_Checkin">Monthly Check-In</a>
                                  <a href="/midpoint_evaluation_account">Mid-Point Evaluation</a>
                                  <a href="/final_evaluation_account">Final Evaluation</a>
                                  @else
                                  <a href="javascript:void(0)" style="cursor: not-allowed;">Participant Handbook</a>
                                  <a href="javascript:void(0)" style="cursor: not-allowed;">Schedule a Call</a>
                                  @if(isset($datas['isAdditionalDocument'])&& $datas['isAdditionalDocument'])
                                  <a href="/AdditionalDocumentJ1">Additional Documents</a>
                                  @endif
                                  <a href="javascript:void(0)" style="cursor: not-allowed;">Extension Request</a>
                                  <a href="javascript:void(0)" style="cursor: not-allowed;">Travel Validation</a>
                                  <a href="javascript:void(0)" style="cursor: not-allowed;">Validation &amp; Check-In</a>                                    
                                  <a href="javascript:void(0)" style="cursor: not-allowed;"> Monthly Check-In</a>
                                  <a href="javascript:void(0)" style="cursor: not-allowed;">Mid-Point Evaluation</a>
                                  <a href="javascript:void(0)" style="cursor: not-allowed;">Final Evaluation</a>
                                  @endif
                              </div>
                              
                          </li>
                          @endif
                
                      <li><a href="/simCard">Sim Card</a></li>
                    
                     
                  </ul>
                
                    </div>

                    <ul class="gaccca-display-menu-profile">
                    
                      <li class="gaccca-dropdown-profile">
                      <a class="gaccca-user-name" href="javascript:void(0)"> Hi, Sunny </a>
                      <span class="user-icon"><i class="fas fa-user-circle"></i></span>
                      </li>
                      <li class="gaccca-dropdown-profile">
                      <a href="javascript:void(0)" class="gaccca-dropbtn"><i class="fas fa-caret-down"></i></a>
                          <div class="gaccca-dropdown-content-profile">
                              <a href="/profile_account">My Profile</a>
                              <a href="/password_account">Password</a>
                              <a href="/close_account">Close Account</a>
                              <a href="/logout_account">Logout</a>
                          </div>

                      </li>
                  </ul>
                  
                    <button id="openNav" class="gaccca-openbtn gaccca-header-menu-button" >☰</button>  
                    
                </div>
            </div>
        </div>
    </div>
   

  <button id="gaccca-scroll-to-top-button" title="Go to top"><i class="fas fa-arrow-up"></i></button>

  <div id="mySidepanel" class="gaccca-sidenav gaccca-sidenav-display">
    <a href="javascript:void(0)" id="closeNav" class="closebtn">×</a>
    
     <button class="gaccca-dropdown-btn">Agent Bookings
      <i class="fa gaccca-fa-caret-down"></i>
    </button>

    <div class="gaccca-dropdown-container">
    <a href="/AgencyJobSearch" target='_blank'>Job Search</a>
    <a href="/AgencyInformation">Information</a>
    <a href="/AgentParticipants">Participant List</a>
    <a href="/Add_New_Participant">J Visa</a>
    <a href="/AgencyBvisaBooking">B Visa</a>
    <a href="/AgencyPlacementProgramRegistrationForm">Placement</a>
    </div>






    @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Hostcompany")!==false)
    <button class="gaccca-dropdown-btn">Host Company
      <i class="fa gaccca-fa-caret-down"></i>
    </button>

    <div class="gaccca-dropdown-container">
    <a href="/host_company_agreement_account"  target="_blank">Host Company Agreement</a>
    <a href="/DS_7002_Trainigsplan"  target="_blank">DS-7002 Training Plan</a>
    <a href="/HostCompany_Mid_Point_Evaluation_Account"  target="_blank">Midpoint Evaluation</a>
    <a href="/final_evaluation_hc_account"  target="_blank">Final Evaluation</a>
    
    </div>

    @endif



    @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"B1")!==false)
    <button class="gaccca-dropdown-btn">B1 Program
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    <div class="gaccca-dropdown-container">
        <a href="/B_Visa_Case_Information" >Case Information</a>
        <a href="/b1Video" >Video</a>
        <a href="/b1_Embassy">Embassy &amp; Entry</a>
        <a href="/ScheduleCallBVisa">Schedule a Call</a>
    </div>
    @endif
    @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Placement")!==false)
    <button class="gaccca-dropdown-btn">Placement Program
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    
    
    <div class="gaccca-dropdown-container">
            <a href="/VideoTutorials">Video Tutorials</a>
            <a href="/uploadyourdocuments">Upload Your Documents</a>
            <a href="/dosAndDonts">Dos and Don'ts</a>
            <a href="/ScheduleCall">Schedule a Call</a>
            <a href="/ApplicantResume">Create your resume</a>
            <a href="/WriteYourScript">Write your script</a>
            
            <a href="/VideoInstructions">Video Instructions</a>
            <a href="/Video_Resume">Record your Video Resume</a>
            <a href="/InterviewPreparation">Interview Preparation</a>
    </div>
    @endif

    @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"J1")!==false)
    <button class="gaccca-dropdown-btn">J1 Program
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    
        
    <div class="gaccca-dropdown-container">
            <a href="/information_instruction_account">Information &amp; Instruction</a>
            <a href="/participant_information_account">Participant Information</a>
            <a href="/host_company_information_account">Host Company Information</a>
            <a href="/participant_agreement_account">Participant Agreement</a>
            <a href="/finalize_application_account">Finalize your Application</a>
            <a href="/j1_review_your_application_account">Review your J1 Application</a>
            
            <a href="/participant_handbook_account">Participant Handbook</a>
            <a href="/ScheduleCallJvisa">Schedule a Call</a>
            <a href="/AdditionalDocumentJ1">Additional Documents</a>
            
            <a href="/extension_request_account">Extension Request</a>
            <a href="/travel_validation_account">Travel Validation</a>
            <a href="/validation_checkin_account">Validation &amp; Check-In</a>
            
            <a href="/monthly_Checkin">Monthly Check-In</a>
            <a href="/midpoint_evaluation_account">Mid-Point Evaluation</a>
            <a href="/final_evaluation_account">Final Evaluation</a>
    </div>
    @endif
    
    <a href="#clients">Sim Card</a>
    
    
    <button class="gaccca-dropdown-btn">Profile
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    
    
    
    
    <div class="gaccca-dropdown-container">
    <a href="/profile_account">My Profile</a>
    <a href="/password_account">Password</a>
    <a href="/close_account">Close Account</a>
    </div>
    <a href="#contact">Logout</a>
  </div>
  
  
  
  <div class="clear"></div>

