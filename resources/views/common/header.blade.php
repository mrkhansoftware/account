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
    @if (isset($page) && $page!='ApplicantResume' && $page!='Video_Resume' && $page!='b1Video')
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    @endif
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
    <link href="{{ asset('css/jquery-ui.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/font.css') }}" rel='stylesheet'>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>

</head>

<body>

    @if (isset($_GET['isSave']) && $_GET['isSave']==='1')
    <div class="gaccca-notify_alert gaccca-theme_success" id="success-alert">
        <span class="gaccca-notify__close" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Success!</strong> <span id='message-success'> Your information and uploads are saved!.</span>
    </div>
    @endif
    @if (isset($_GET['isSent']) && $_GET['isSent']==='1')
    <div class="gaccca-notify_alert gaccca-theme_success" id="success-alert">
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
                <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-small-size_1-of-1">
                    <div class="gaccca-behind-the-logo gaccca-behind-the-logo-position">
                    </div>

                    <div class="gaccca-display-menu-div">
                        <ul class="gaccca-display-menu">

                            @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Agency")!==false)



                            <li class="gaccca-dropdown"><a href="javascript:void(0)">
                                    <span class="{{ ($parent_page == 'Agent Bookings') ? 'gaccca-active-menu' : '' }}">Agent Bookings </span>
                                    <img src="{{ asset('images/vector.png') }}" />
                                </a>

                                <div class="gaccca-dropdown-content">
                                    <a class="{{ ($page == 'AgencyJobSearch') ? 'gaccca-active-submenu' : '' }}" href="/AgencyJobSearch" target='_blank'>Job Search</a>
                                    <a class="{{ ($page == 'AgencyInformation') ? 'gaccca-active-submenu' : '' }}" href="/AgencyInformation">Information</a>
                                    <a class="{{ ($page == 'AgentParticipants') ? 'gaccca-active-submenu' : '' }}" href="/AgentParticipants">Participant List</a>
                                    <a class="{{ ($page == 'Add_New_Participant') ? 'gaccca-active-submenu' : '' }}" href="/Add_New_Participant">J Visa</a>
                                    <a class="{{ ($page == 'AgencyBvisaBooking') ? 'gaccca-active-submenu' : '' }}" href="/AgencyBvisaBooking">B Visa</a>
                                    <a class="{{ ($page == 'AgencyPlacementProgramRegistrationForm') ? 'gaccca-active-submenu' : '' }}" href="/AgencyPlacementProgramRegistrationForm">Placement</a>

                                </div>

                            </li>
                            @endif
                            @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Hostcompany")!==false)
                            <li class="gaccca-dropdown"><a href="javascript:void(0)">
                                    <span class="{{ ($parent_page == 'Host Company') ? 'gaccca-active-menu' : '' }}">Host Company </span>
                                    <img src="{{ asset('images/vector.png') }}" />
                                </a>
                                <div class="gaccca-dropdown-content">
                                    <a href="/host_company_agreement_account" target="_blank">Host Company Agreement</a>
                                    <a href="/DS_7002_Trainigsplan" target="_blank">DS-7002 Training Plan</a>
                                    <a href="/HostCompany_Mid_Point_Evaluation_Account" target="_blank">Midpoint Evaluation</a>
                                    <a href="/final_evaluation_hc_account" target="_blank">Final Evaluation</a>

                                </div>

                            </li>
                            @endif
                            @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"B1")!==false)

                            <li class="gaccca-dropdown"><a href="javascript:void(0)">
                                    <span class="{{ ($parent_page == 'B1 Program') ? 'gaccca-active-menu' : '' }}">B1 Program </span>

                                    <img src="{{ asset('images/vector.png') }}" />
                                </a>
                                <div class="gaccca-dropdown-content">
                                    <a class="{{ ($page == 'B_Visa_Case_Information') ? 'gaccca-active-submenu' : '' }}" href="/B_Visa_Case_Information">Case Information</a>
                                    <a class="{{ ($page == 'b1Video') ? 'gaccca-active-submenu' : '' }}" href="/b1Video">Video</a>
                                    <a class="{{ ($page == 'b1_Embassy') ? 'gaccca-active-submenu' : '' }}" href="/b1_Embassy">Embassy &amp; Entry</a>
                                    <a class="{{ ($page == 'ScheduleCallBVisa') ? 'gaccca-active-submenu' : '' }}" href="/ScheduleCallBVisa">Schedule a Call</a>

                                </div>

                            </li>

                            @endif
                            @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Placement")!==false)

                            <li class="gaccca-dropdown"><a href="javascript:void(0)">
                                    <span class="{{ ($parent_page == 'Placement Program') ? 'gaccca-active-menu' : '' }}">Placement Program </span>
                                    <img src="{{ asset('images/vector.png') }}" />
                                </a>

                                <div class="gaccca-dropdown-content">
                                    <a class="{{ ($page == 'VideoTutorials') ? 'gaccca-active-submenu' : '' }}" href="/VideoTutorials">Video Tutorials</a>
                                    <a class="{{ ($page == 'uploadyourdocuments') ? 'gaccca-active-submenu' : '' }}" href="/uploadyourdocuments">Upload Your Documents</a>
                                    <a class="{{ ($page == 'dosAndDonts') ? 'gaccca-active-submenu' : '' }}" href="/dosAndDonts">Dos and Don'ts</a>
                                    <a class="{{ ($page == 'ScheduleCall') ? 'gaccca-active-submenu' : '' }}" href="/ScheduleCall">Schedule a Call</a>
                                    <a class="{{ ($page == 'ApplicantResume') ? 'gaccca-active-submenu' : '' }}" href="/ApplicantResume">Create your resume</a>
                                    <a class="{{ ($page == 'WriteYourScript') ? 'gaccca-active-submenu' : '' }}" href="/WriteYourScript">Write your script</a>

                                    <a class="{{ ($page == 'VideoInstructions') ? 'gaccca-active-submenu' : '' }}" href="/VideoInstructions">Video Instructions</a>
                                    <a class="{{ ($page == 'Video_Resume') ? 'gaccca-active-submenu' : '' }}" href="/Video_Resume">Record your Video Resume</a>
                                    <a class="{{ ($page == 'InterviewPreparation') ? 'gaccca-active-submenu' : '' }}" href="/InterviewPreparation">Interview Preparation</a>

                                </div>

                            </li>
                            @endif
                            @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"J1")!==false)

                            <li class="gaccca-dropdown"><a href="javascript:void(0)"><span class="{{ ($parent_page == 'J1 Program') ? 'gaccca-active-menu' : '' }}">J1 Program </span> <img src="{{ asset('images/vector.png') }}" />
                                </a>

                                <div class="gaccca-dropdown-content">
                                    <a class="{{ ($page == 'information_instruction_account') ? 'gaccca-active-submenu' : '' }}" href="/information_instruction_account">Information &amp; Instruction</a>
                                    <a class="{{ ($page == 'participant_information_account') ? 'gaccca-active-submenu' : '' }}" href="/participant_information_account">Participant Information</a>
                                    <a class="{{ ($page == 'host_company_information_account') ? 'gaccca-active-submenu' : '' }}" href="/host_company_information_account">Host Company Information</a>
                                    <a class="{{ ($page == 'participant_agreement_account') ? 'gaccca-active-submenu' : '' }}" href="/participant_agreement_account">Participant Agreement</a>
                                    <a class="{{ ($page == 'finalize_application_account') ? 'gaccca-active-submenu' : '' }}" href="/finalize_application_account">Finalize your Application</a>
                                    <a class="{{ ($page == 'j1_review_your_application_account') ? 'gaccca-active-submenu' : '' }}" href="/j1_review_your_application_account">Review your J1 Application</a>




                                    @if(isset($datas['isParticipantAccepted'])&& $datas['isParticipantAccepted'])
                                    <a class="{{ ($page == 'participant_handbook_account') ? 'gaccca-active-submenu' : '' }}" href="/participant_handbook_account">Participant Handbook</a>
                                    <a class="{{ ($page == 'ScheduleCallJvisa') ? 'gaccca-active-submenu' : '' }}" href="/ScheduleCallJvisa">Schedule a Call</a>
                                    <a class="{{ ($page == 'Insurance') ? 'gaccca-active-submenu' : '' }}" href="/Insurance">Insurance</a>
                                    @if(isset($datas['isAdditionalDocument'])&& $datas['isAdditionalDocument'])
                                    <a class="{{ ($page == 'AdditionalDocumentJ1') ? 'gaccca-active-submenu' : '' }}" href="/AdditionalDocumentJ1">Additional Documents</a>
                                    @endif
                                    <a class="{{ ($page == 'extension_request_account') ? 'gaccca-active-submenu' : '' }}" href="/extension_request_account">Extension Request</a>
                                    <a class="{{ ($page == 'travel_validation_account') ? 'gaccca-active-submenu' : '' }}" href="/travel_validation_account">Travel Validation</a>
                                    <a class="{{ ($page == 'validation_checkin_account') ? 'gaccca-active-submenu' : '' }}" href="/validation_checkin_account">Validation &amp; Check-In</a>
                                    <a class="{{ ($page == 'monthly_Checkin') ? 'gaccca-active-submenu' : '' }}" href="/monthly_Checkin">Monthly Check-In</a>
                                    <a class="{{ ($page == 'midpoint_evaluation_account') ? 'gaccca-active-submenu' : '' }}" href="/midpoint_evaluation_account">Mid-Point Evaluation</a>
                                    <a class="{{ ($page == 'final_evaluation_account') ? 'gaccca-active-submenu' : '' }}" href="/final_evaluation_account">Final Evaluation</a>
                                    @else
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Participant Handbook</a>
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Schedule a Call</a>
                                    <a class="{{ ($page == 'Insurance') ? 'gaccca-active-submenu' : '' }}" href="/Insurance">Insurance</a>
                                    @if(isset($datas['isAdditionalDocument'])&& $datas['isAdditionalDocument'])
                                    <a class="{{ ($page == 'AdditionalDocumentJ1') ? 'gaccca-active-submenu' : '' }}" href="/AdditionalDocumentJ1">Additional Documents</a>
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

                            <li><a href="/simCard"><span class="{{ ($parent_page == 'Sim Card') ? 'gaccca-active-menu' : '' }}">Sim Card</span></a></li>


                        </ul>

                    </div>

                    <ul class="gaccca-display-menu-profile">

                        <li class="gaccca-dropdown-profile">
                            <a class="gaccca-user-name" href="javascript:void(0)"> Hi, {{session()->get('contactName')}} </a>

                        </li>
                        <li class="gaccca-dropdown-profile">
                            <span>
                                <a href="javascript:void(0)" class="gaccca-dropbtn">
                                    <img src="{{ asset('images/user.png') }}" />
                                    <i class="fas fa-caret-down"></i>
                            </span>
                            </a>
                            <div class="gaccca-dropdown-content-profile">
                                <a class="{{ ($page == 'profile_account') ? 'gaccca-active-submenu' : '' }}" href="/profile_account">My Profile</a>
                                <a class="{{ ($page == 'password_account') ? 'gaccca-active-submenu' : '' }}" href="/password_account">Password</a>
                                <a class="{{ ($page == 'close_account') ? 'gaccca-active-submenu' : '' }}" href="/close_account">Close Account</a>
                                <a href="/logout_account">Logout</a>
                            </div>

                        </li>
                    </ul>

                    <!-- <button id="openNav" class="gaccca-openbtn gaccca-header-menu-button">☰</button> -->
                    <button id="openNav" class="gaccca-openbtn gaccca-header-menu-button"><i class="fas fa-bars"></i></button>


                </div>
            </div>
        </div>
    </div>


    <button id="gaccca-scroll-to-top-button" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <div id="mySidepanel" class="gaccca-sidenav gaccca-sidenav-display">
        <a href="javascript:void(0)" id="closeNav" class="closebtn">×</a>
        @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Agency")!==false)
        <button class="gaccca-dropdown-btn">Agent Bookings
            <img src="{{ asset('images/vector.png') }}" />
        </button>

        <div class="gaccca-dropdown-container">
            <a href="/AgencyJobSearch" target='_blank'>Job Search</a>
            <a href="/AgencyInformation">Information</a>
            <a href="/AgentParticipants">Participant List</a>
            <a href="/Add_New_Participant">J Visa</a>
            <a href="/AgencyBvisaBooking">B Visa</a>
            <a href="/AgencyPlacementProgramRegistrationForm">Placement</a>
        </div>
        @endif





        @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Hostcompany")!==false)
        <button class="gaccca-dropdown-btn">Host Company
            <img src="{{ asset('images/vector.png') }}" />
        </button>

        <div class="gaccca-dropdown-container">
            <a href="/host_company_agreement_account" target="_blank">Host Company Agreement</a>
            <a href="/DS_7002_Trainigsplan" target="_blank">DS-7002 Training Plan</a>
            <a href="/HostCompany_Mid_Point_Evaluation_Account" target="_blank">Midpoint Evaluation</a>
            <a href="/final_evaluation_hc_account" target="_blank">Final Evaluation</a>

        </div>

        @endif



        @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"B1")!==false)
        <button class="gaccca-dropdown-btn">B1 Program
            <img src="{{ asset('images/vector.png') }}" />
        </button>
        <div class="gaccca-dropdown-container">
            <a href="/B_Visa_Case_Information">Case Information</a>
            <a href="/b1Video">Video</a>
            <a href="/b1_Embassy">Embassy &amp; Entry</a>
            <a href="/ScheduleCallBVisa">Schedule a Call</a>
        </div>
        @endif
        @if (stripos(isset($datas['portalProgram'])?$datas['portalProgram']:'',"Placement")!==false)
        <button class="gaccca-dropdown-btn">Placement Program
            <img src="{{ asset('images/vector.png') }}" />
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
        <button class="gaccca-dropdown-btn ">J1 Program
            <img src="{{ asset('images/vector.png') }}" />
        </button>


        <div class="gaccca-dropdown-container">
                                    <a class="{{ ($page == 'information_instruction_account') ? 'gaccca-active-submenu' : '' }}" href="/information_instruction_account">Information &amp; Instruction</a>
                                    <a class="{{ ($page == 'participant_information_account') ? 'gaccca-active-submenu' : '' }}" href="/participant_information_account">Participant Information</a>
                                    <a class="{{ ($page == 'host_company_information_account') ? 'gaccca-active-submenu' : '' }}" href="/host_company_information_account">Host Company Information</a>
                                    <a class="{{ ($page == 'participant_agreement_account') ? 'gaccca-active-submenu' : '' }}" href="/participant_agreement_account">Participant Agreement</a>
                                    <a class="{{ ($page == 'finalize_application_account') ? 'gaccca-active-submenu' : '' }}" href="/finalize_application_account">Finalize your Application</a>
                                    <a class="{{ ($page == 'j1_review_your_application_account') ? 'gaccca-active-submenu' : '' }}" href="/j1_review_your_application_account">Review your J1 Application</a>




                                    @if(isset($datas['isParticipantAccepted'])&& $datas['isParticipantAccepted'])
                                    <a class="{{ ($page == 'participant_handbook_account') ? 'gaccca-active-submenu' : '' }}" href="/participant_handbook_account">Participant Handbook</a>
                                    <a class="{{ ($page == 'ScheduleCallJvisa') ? 'gaccca-active-submenu' : '' }}" href="/ScheduleCallJvisa">Schedule a Call</a>
                                    <a class="{{ ($page == 'Insurance') ? 'gaccca-active-submenu' : '' }}" href="/Insurance">Insurance</a>
                                    @if(isset($datas['isAdditionalDocument'])&& $datas['isAdditionalDocument'])
                                    <a class="{{ ($page == 'AdditionalDocumentJ1') ? 'gaccca-active-submenu' : '' }}" href="/AdditionalDocumentJ1">Additional Documents</a>
                                    @endif
                                    <a class="{{ ($page == 'extension_request_account') ? 'gaccca-active-submenu' : '' }}" href="/extension_request_account">Extension Request</a>
                                    <a class="{{ ($page == 'travel_validation_account') ? 'gaccca-active-submenu' : '' }}" href="/travel_validation_account">Travel Validation</a>
                                    <a class="{{ ($page == 'validation_checkin_account') ? 'gaccca-active-submenu' : '' }}" href="/validation_checkin_account">Validation &amp; Check-In</a>
                                    <a class="{{ ($page == 'monthly_Checkin') ? 'gaccca-active-submenu' : '' }}" href="/monthly_Checkin">Monthly Check-In</a>
                                    <a class="{{ ($page == 'midpoint_evaluation_account') ? 'gaccca-active-submenu' : '' }}" href="/midpoint_evaluation_account">Mid-Point Evaluation</a>
                                    <a class="{{ ($page == 'final_evaluation_account') ? 'gaccca-active-submenu' : '' }}" href="/final_evaluation_account">Final Evaluation</a>
                                    @else
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Participant Handbook</a>
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Schedule a Call</a>
                                    <a class="{{ ($page == 'Insurance') ? 'gaccca-active-submenu' : '' }}" href="/Insurance">Insurance</a>
                                    @if(isset($datas['isAdditionalDocument'])&& $datas['isAdditionalDocument'])
                                    <a class="{{ ($page == 'AdditionalDocumentJ1') ? 'gaccca-active-submenu' : '' }}" href="/AdditionalDocumentJ1">Additional Documents</a>
                                    @endif
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Extension Request</a>
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Travel Validation</a>
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Validation &amp; Check-In</a>
                                    <a href="javascript:void(0)" style="cursor: not-allowed;"> Monthly Check-In</a>
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Mid-Point Evaluation</a>
                                    <a href="javascript:void(0)" style="cursor: not-allowed;">Final Evaluation</a>
                                    @endif
                                </div>


        @endif

        <a href="/simCard">Sim Card</a>


        <button class="gaccca-dropdown-btn">Profile
            <img src="{{ asset('images/vector.png') }}" />
        </button>




        <div class="gaccca-dropdown-container">
            <a href="/profile_account">My Profile</a>
            <a href="/password_account">Password</a>
            <a href="/close_account">Close Account</a>
        </div>
        <a href="/logout_account">Logout</a>
    </div>



    <div class="clear"></div>



    <div class="gaccca-breadcrumb-link">
        <ul class="gaccca-breadcrumb">
            <li><a>@if (isset($parent_page)){{$parent_page}} @endif</a></li>
            <li>@if (isset($title)){{$title}} @endif</li>
        </ul>
    </div>

    <script>
        var emailAccountUserVal = "{{session()->get('userEmail')}}";
        var contIdAccountUserVal = "{{isset($datas['contID'])?$datas['contID']:''}}";
        var applicantIdAccountUserVal = "{{isset($datas['applicantId'])?$datas['applicantId']:''}}";
        var applicantNameAccountUserVal = "{{isset($datas['applicantName'])?$datas['applicantName']:''}}";

        jQuery(document).ready(function() {
            jQuery("input.gaccca-input:text").attr('maxlength', '255');
            jQuery("input.gaccca-input-phone:text").attr('maxlength', '40');
            jQuery("#signHiddenData").removeAttr('maxlength'); 
        });
    </script>
    @include('common.chat')