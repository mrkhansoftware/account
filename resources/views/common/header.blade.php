<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>

  <meta name="viewport" content="IE=edge;" />
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/gaccca_main_style_new.css') }}" >
  <!-- <script src="https://code.jquery.com/jquery-3.x-git.min.js"></script> -->
  

  <link href="{{ asset('css/jquery-ui.css') }}"  rel='stylesheet' >
  <link href="{{ asset('css/all.css') }}"  rel='stylesheet' >
 
  <script src="{{ asset('js/jquery-1.8.2.js') }}"></script>
  <script src="{{ asset('js/parsley.min.js') }}"></script>   
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>

  
</head>

<body>

<div class="gaccca-header">
        <div class="gaccca-content-header">
            <div class="gaccca-grid gaccca-wrap">
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                    <div class="gaccca-behind-the-logo gaccca-behind-the-logo-position">
                    <img src="{{ asset('images/logo/logo1.png') }}"/>
                    </div>
                    <ul class="gaccca-display-menu">
                    
                      @if (stripos($portal_program,"Agency")!==false)


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
                        @if (stripos($portal_program,"Hostcompany")!==false)
                            <li class="gaccca-dropdown"><a href="#home123">Host Company</a>
                                <div class="gaccca-dropdown-content">
                                    <a href="/host_company_agreement_account_new"  target="_blank">Host Company Agreement</a>
                                    <a href="/DS_7002_Trainigsplan_new"  target="_blank">DS-7002 Training Plan</a>
                                    <a href="/HostCompanyMidPointEvaluationAccountnew"  target="_blank">Midpoint Evaluation</a>
                                    <a href="/final_evaluation_hc_account_new"  target="_blank">Final Evaluation</a>
                                    
                                </div>
                                
                            </li>
                            @endif
                        @if (stripos($portal_program,"B1")!==false)
                   
                            <li class="gaccca-dropdown"><a href="#home123">B1 Program</a>
                                <div class="gaccca-dropdown-content">
                                    <a href="/B_Visa_Case_Information" >Case Information</a>
                                    <a href="/b1Video" >Video</a>
                                    <a href="/b1_Embassy">Embassy &amp; Entry</a>
                                    <a href="/ScheduleCallBVisa">Schedule a Call</a>
                                    
                                </div>
                                
                            </li>
                            
                            @endif
                        @if (stripos($portal_program,"Placement")!==false)
                    
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
                                    
                                </div>
                                
                            </li>
                            @endif
                        @if (stripos($portal_program,"J1")!==false)
                  
                           <li class="gaccca-dropdown"><a href="#home">J1 Program</a>
                                
                                <div class="gaccca-dropdown-content">
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
                                    
                                    <a href="/monthly_checkin">Monthly Check-In</a>
                                    <a href="/midpoint_evaluation_account">Mid-Point Evaluation</a>
                                    <a href="/final_evaluation_account">Final Evaluation</a>
                                    
                                </div>
                                
                            </li>
                            @endif
                  
                        <!--<li><a href="/simCard_new">Sim Card</a></li> -->
                        <li class="gaccca-dropdown">
                            <a href="javascript:void(0)" class="gaccca-dropbtn">Profile</a>
                            <div class="gaccca-dropdown-content">
                                <a href="/profile_account">My Profile</a>
                                <a href="/password_account">Password</a>
                                <a href="/close_account">Close Account</a>
                            </div>
                        </li>
                        <li><a href="/logout_account">Logout
                     
                        </a></li>
                    </ul>
                    <button class="gaccca-openbtn gaccca-header-menu-button" onclick="openNav()">☰</button>  
                    
                </div>
            </div>
        </div>
    </div>
   

  <button id="gaccca-scroll-to-top-button" title="Go to top"><i class="fas fa-arrow-up"></i></button>

  <div id="mySidepanel" class="gaccca-sidenav gaccca-sidenav-display">
    <a href="javascript:void(0)" id="closeNav" class="closebtn">×</a>
    <a href="#about">Placement Program</a>





    <button class="gaccca-dropdown-btn">J1 Program
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    <div class="gaccca-dropdown-container">
      <a href="/information_instruction_account_new">Information &amp; Instruction</a>
      <a href="/participant_information_account_new">Participant Information</a>
      <a href="/host_company_information_account_new">Host Company Information</a>
      <a href="/participant_agreement_account_new">Participant Agreement</a>
      <a href="/finalize_application_account_new">Finalize your Application</a>
      <a href="/j1_review_your_application_account_new">Review your J1 Application</a>

      <a href="/participant_handbook_account_new">Participant Handbook</a>
      <a href="/schedule_call_jvisa_new">Schedule a Call</a>
      <a href="/additional_document_J1_new">Additional Documents</a>

      <a href="/extension_request_account_new">Extension Request</a>
      <a href="/travel_validation_account_new">Travel Validation</a>
      <a href="/validation_checkin_account_new">Validation &amp; Check-In</a>

      <a href="/monthly_checkin_new">Monthly Check-In</a>
      <a href="/midpoint_evaluation_account_new">Mid-Point Evaluation</a>
    </div>
    <a href="#clients">Sim Card</a>
    <button class="gaccca-dropdown-btn">Profile
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    <div class="gaccca-dropdown-container">
      <a href="#">My Profile</a>
      <a href="#">Password</a>
      <a href="#">Close Account</a>
    </div>
    <a href="#contact">Logout</a>
  </div>
  <div class="clear"></div>

