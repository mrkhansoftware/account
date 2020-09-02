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

            <li class="gaccca-dropdown"><a href="#home">Placement Program</a>

              <div class="gaccca-dropdown-content">
                <a href="/profile_new">Video Tutorials</a>
                <a href="/change_password">Upload Your Documents</a>
                <a href="/close_account">Dos and Don'ts</a>
                <a href="/profile_new">Schedule a Call</a>
                <a href="/change_password">Create your resume</a>
                <a href="/close_account">Write your script</a>

                <a href="/profile_new">Video Instructions</a>
                <a href="/change_password">Record your Video Resume</a>

              </div>

            </li>
            <li class="gaccca-dropdown"><a href="#home">J1 Program</a>

              <div class="gaccca-dropdown-content">
                <a href="/profile_new">Information & Instruction</a>
                <a href="/change_password">Participant Information</a>
                <a href="/close_account">Host Company Information</a>
                <a href="/profile_new">Participant Agreement</a>
                <a href="/change_password">Finalize your Application</a>
                <a href="/close_account">Review your J1 Application</a>

                <a href="/profile_new">Participant Handbook</a>
                <a href="/change_password">Schedule a Call</a>
                <a href="/close_account">Additional Documents</a>

                <a href="/profile_new">Extension Request</a>
                <a href="/change_password">Travel Validation</a>
                <a href="/close_account">Validation & Check-In</a>

                <a href="/profile_new">Monthly Check-In</a>
                <a href="/change_password">Mid-Point Evaluation</a>
                <a href="/close_account">Final Evaluation</a>

              </div>

            </li>
            <li><a href="#home">Sim Card</a></li>
            <li class="gaccca-dropdown">
              <a href="javascript:void(0)" class="gaccca-dropbtn">Profile</a>
              <div class="gaccca-dropdown-content">
                <a href="/profile_new">My Profile</a>
                <a href="/change_password">Password</a>
                <a href="/close_account">Close Account</a>
              </div>
            </li>
            <li><a href="#home">Logout</a></li>
          </ul>
          <!-- <button class="gaccca-openbtn gaccca-header-menu-button" onclick="openNav()">☰</button>   -->
          <button id="openNav" class="gaccca-openbtn gaccca-header-menu-button">☰</button>


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

