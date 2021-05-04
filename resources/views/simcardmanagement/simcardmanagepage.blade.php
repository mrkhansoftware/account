@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])

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
    <title>GACC California -Aerobile SIM Activation List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="title" content="SimCardManagePage" />
    <meta name="description" content="Over the account you can access the programs and services" />
    <meta name="keywords" content="Account IIEEX, Account GACCCA" />
    <meta name="robots" content="noindex, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <meta name="revisit-after" content="30 days" />
    <meta name="author" content="IIEEX, GACCCA" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://account.iieex.org/SimCardManagePage" />
    <meta property="og:site_name" content="https://account.iieex.org" />
    <meta name="google-site-verification" content="-6V8H3sxoJ6qUsdyr6IkfGBlVoHhB5C3QQFTFTmR4mI" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link rel="icon" href="{{ asset('images/favicon/favicon-iieex-16.png') }}" type="image/png" sizes="16x16" />
    <link rel="icon" href="{{ asset('images/favicon/favicon-iieex-32.png') }}" type="image/png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/favicon-iieex-60.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/favicon-iieex-76.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/favicon-iieex-120.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/favicon-iieex-152.png') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/font.css') }}" rel='stylesheet'>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-auth.js"></script>
    <style>
        body {
            background: white;
        }

        .loaderRecordSave {
            display: none;
            position: fixed;
            top: 64%;
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #3498db;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Style the gaccca-simcard-tab */
        .gaccca-simcard-tab {
            overflow: hidden;
            border-bottom: 1px solid #ccc;
            background: #1a73e8;
        }

        /* Style the buttons inside the gaccca-simcard-tab */
        .gaccca-simcard-tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 6px 4px !important;
            margin: 0px 10px;
            transition: 0.3s;
            font-family: sans-serif;
            line-height: 1.5;
            margin-bottom: 10px;
            color: white;
            border-bottom: 1px solid #1a73e8;
        }


        /* Create an active/current tablink class */
        .gaccca-simcard-tab button.active {
            color: white;
            border-bottom: 1px solid;
        }

        .gaccca-simcard-tab button.tab-hidden {
            display: none;
        }

        /* Style the gaccca-simcard-tab content */
        .gaccca_simcard_tabcontent {
            display: none;
            padding: 6px 12px;
            border-top: none;
        }

        .gaccca-loader-div {
            width: 100%;
            height: 100%;
            z-index: 20;
            position: fixed;
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .gaccca-loader {
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #1A73E8;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
            position: fixed;
            top: 50%;
            left: 50%;

        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            display: none;
            margin-top: 100px;

        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            table-layout: fixed;


        }


        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 0px 4px;
            font-size: small;
        }

        th {
            cursor: pointer;
        }

        thead {
            background: #E6F7FF;
        }

        .gaccca-margin-left {

            margin-left: 100px;
        }


        .editable-container.popover {
            width: auto;
        }

        .editable-container.editable-popup {
            max-width: none !important;
        }

        .popup-text {
            position: relative;
            padding: 1px;
            text-align: left;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            background-clip: padding-box;
            padding: 9px;
            background-color: #f7f7f7;
            margin-bottom: 14px;
            width: 300px;
        }


        .popup-text .popup-title {
            font-size: small;
            margin-bottom: 10px;
        }

        .button-div {
            margin-top: 10px;
        }

        .edit-pencil {
            float: right;
        }

        .header-text-h3 {
            color: white;
            margin-top: 0px;
            font-family: sans-serif;
            font-weight: 100;
        }

        .header-text-h4 {
            color: white;
            margin-bottom: 0px;
            font-family: sans-serif;
            margin-top: 5px;

        }

        .header-text-h5 {
            color: white;
            margin-bottom: 0px;
            font-family: sans-serif;
            font-weight: 100;
            margin-top: 13px;

        }

        .header-user-info {
            float: right;
            display: inline-block;
            text-align: center;
        }

        .header-text {
            float: left;
            display: inline-block;

        }

        .user-icon {
            color: white;
            margin-top: 5px;
            font-size: 35px;
            margin-bottom: 5px;
        }

        .header-simcard-li {
            margin: 0px !important;
        }

        .header-simcard-li a {
            font-family: sans-serif;
            font-weight: 100 !important;
            font-size: 15px !important;
            border: none !important;
            padding: 4px 8px !important;
        }

        .gaccca-header ul>li.header-simcard-li a:hover {
            border: none !important;
        }

        .gaccca-header ul>li {
            line-height: 30px;
        }

        .list-icon {
            float: left;
            display: inline-block;
            margin-top: 17px;
            font-size: 34px;
            color: white;
            margin-right: 10px;
        }

        .gaccca-simcard-header {
            margin-left: auto;
            margin-right: auto;
            /* max-width: 1300px; */
            padding-left: 20px;
        }

        .gaccca-display-menu-profile {
            display: block !important;
        }

        .pageCount {
            color: #0070d2;
            font-weight: 700;
            margin-right: 65px;
            float: right;
        }

        input,
        select {
            min-width: 90px;
            padding: 0px !important;
            font-size: 14px !important;
            height: 30px !important;
        }

        button {
            padding: 6px 14px !important;
            font-size: 14px !important;
            line-height: 15px !important;
        }

        .simcardContent {
            overflow-x: scroll;
            overflow-y: auto;
        }

        .simcardContent-tobScroll {
            overflow-x: scroll;
            overflow-y: auto;
        }

        .simcardContent-tobScroll div {
            font-size: 1px;
            line-height: 2px;
        }

        .stickyScroll {
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>
</head>

<body>

@include('common.handleCSRF')




    <div class="loaderRecordSave" id='loaderRecordSave'></div>

    <div class="gaccca-header">
        <div class="gaccca-simcard-header">
            <div class="gaccca-grid gaccca-wrap">
                <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
                    <!-- <div class="gaccca-behind-the-logo gaccca-behind-the-logo-position"> -->
                    <!-- <img src="{{ asset('images/logo/logo1.png') }}"/> -->
                    <span class="list-icon"><i class="fas fa-list-alt"></i></span>
                    <div class="header-text">

                        <h5 class="header-text-h5"> Sim Card </h5>
                        <h3 class="header-text-h3"> GACC California -Aerobile SIM Activation List </h3>
                    </div>

                    <!-- </div> -->
                    <!-- <div class="header-user-info">
                        <h4 class="header-text-h4">{{$datas['userName']}}</h4>
                        <span class="user-icon"><i class="fas fa-user-circle"></i></span>
                        <ul class="header-button-group-list">
                            <li class="header-simcard-li"><a href="/profile_account" target="_blank">Profile</a>
                            </li>
                            <li class="header-simcard-li"><a href="/password_account" target="_blank">Change
                                    Password</a></li>
                            <li class="header-simcard-li"><a href="/logout_account">Logout</a></li>
                        </ul>
                        
                    </div> -->
                    <ul class="gaccca-display-menu-profile gaccca-font-family gaccca-margin-right-0">

                        <li class="gaccca-dropdown-profile">
                            <a class="gaccca-user-name" href="javascript:void(0)"> Hi, {{$datas['userName']}} </a>

                        </li>
                        <li class="gaccca-dropdown-profile">
                            <span>
                                <a href="javascript:void(0)" class="gaccca-dropbtn">
                                    <img src="{{ asset('images/user.png') }}" />
                                    <i class="fas fa-caret-down"></i>
                            </span>
                            </a>
                            <div class="gaccca-dropdown-content-profile">
                                <a href="/profile_account" target="_blank">My Profile</a>
                                <a href="/password_account" target="_blank">Password</a>
                                <a href="/logout_account">Logout</a>
                            </div>

                        </li>
                    </ul>
                    <!-- <button id="openNav" class="gaccca-openbtn gaccca-header-menu-button">☰</button> -->

                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>












    <div class="gaccca-simcard-tab">
        <button class="gaccca_simcard_tablinks" id='tab_Booked_Simcard' data-accesskey="Booked" data-status='Booked Payment Pending' onclick="simCardManageTab(event, this,  'booked_and_payment')">Booked and
            Payment Pending (<span id='tabRecordbooked'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="Waiting" data-status='Waiting for number' onclick="simCardManageTab(event, this,  'waiting_for_number')">Waiting For
            number (<span id='tabRecordwaiting'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="Active" data-status='Active' onclick="simCardManageTab(event, this,  'active_id')">
            Active (<span id='tabRecordactive'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="CancelleLationRequested" data-status='Cancellation requested' onclick="simCardManageTab(event, this,  'cancellation_request')">Cancellation
            requested(<span id='tabRecordcancelR'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="Cancelled" data-status='Cancellation confirmed' onclick="simCardManageTab(event, this,  'cancellation_confirmed')">Cancellation
            confirmed(<span id='tabRecordcancelC'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="Problem" data-status='Problem' onclick="simCardManageTab(event, this,  'problem')">
            Problem(<span id='tabRecordproblem'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="ChangePlan" data-status='Plan change' onclick="simCardManageTab(event, this,  'plan_change')">Plan change(<span id='tabRecordplanchange'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="ChangeCC" data-status='Credit card change' onclick="simCardManageTab(event, this,  'credit_card_change')">Credit Card
            change(<span id='tabRecordccChange'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="All" data-status='All' onclick="simCardManageTab(event, this,  'all')">All(<span id='tabRecordall'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="Commission" data-status='Commission' onclick="simCardManageTab(event, this,  'commission_pending')">Commission
            Pending(<span id='tabRecordcommission'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="CommissionPaid" data-status='CommissionPaid' onclick="simCardManageTab(event, this,  'commission_paid')">Commission
            Paid(<span id='tabRecordcommissionPaid'></span>)</button>
        <button class="gaccca_simcard_tablinks" data-accesskey="Shipped" data-status='Shipped' onclick="simCardManageTab(event, this,  'shipped')">Shipped(<span id='tabRecordShipped'></span>)</button>


    </div>





    <div id="booked_and_payment" class="gaccca_simcard_tabcontent">

        @include('simcardmanagement.loader')
        <div id="booked_and_payment_ajax">

        </div>
    </div>

    <div id="waiting_for_number" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')
        <div id="waiting_for_number_ajax">
        </div>
    </div>

    <div id="active_id" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="active_id_ajax">
        </div>
    </div>

    <div id="cancellation_request" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="cancellation_request_ajax">
        </div>
    </div>


    <div id="cancellation_confirmed" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="cancellation_confirmed_ajax">
        </div>
    </div>

    <div id="problem" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="problem_ajax">
        </div>
    </div>

    <div id="plan_change" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="plan_change_ajax">
        </div>
    </div>

    <div id="credit_card_change" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="credit_card_change_ajax">
        </div>
    </div>


    <div id="all" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="all_ajax">
        </div>
    </div>


    <div id="commission_pending" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="commission_pending_ajax">
        </div>
    </div>

    <div id="commission_paid" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="commission_paid_ajax">
        </div>
    </div>

    <div id="shipped" class="gaccca_simcard_tabcontent">
        @include('simcardmanagement.loader')

        <div id="shipped_ajax">
        </div>
    </div>





</body>


<script>
    function loadAjaxContent() {

        $(".popup-text").hide();
        $('[id^="edit_"]').on("click", function() {
            $(".popup-text").hide();
            $(".edit-pencil").show();
            var current_id = $(this).attr("id");
            var which_element = current_id.split("edit_");
            $("#editdiv_" + which_element[1]).show();
            $("#edit_" + which_element[1]).hide();
            var current_value = $("#editdiv_" + which_element[1]).next().text();
            $("#input_value_" + which_element[1]).val(current_value);

        });

        $('[id^="close_button_"]').on("click", function() {
            $(".edit-pencil").show();
            var current_id = $(this).attr("id");
            var which_element = current_id.split("close_button_");
            $("#editdiv_" + which_element[1]).hide();


        });

        $('[id^="save_button_"]').on("click", function() {
            $(".edit-pencil").show();
            var current_id = $(this).attr("id");
            var which_element = current_id.split("save_button_");
            $("#editdiv_" + which_element[1]).hide();
            var showingSpan = $(this).attr("data-showing");
            var fieldApi = $(this).attr("data-fieldapi");
            var recordId = $(this).attr("data-recordid");
            var localFieldId = $(this).attr("data-loclFieldId");
            $("#" + showingSpan).html($("#" + localFieldId).val());
            var className = $("#" + localFieldId).attr("class");
            if (className != undefined && className.includes('gaccca-input-date')) {
                datatype = 'date';
                valueInput = returnConvertedDate($("#" + localFieldId).val());
            } else {
                datatype = 'text';
                valueInput = $("#" + localFieldId).val();
            }
            saveRecordUpdate(recordId, fieldApi, valueInput, datatype);

        });
        $('.gaccca-input-date').datepicker({

            changeMonth: true,
            changeYear: true,

        });

        $(function() {
            var tableContainer = $(".simcardContent_" + accesskeyVar);
            var table = $(".simcardContent_" + accesskeyVar + " table");
            var fakeContainer = $(".simcardContent-tobScroll");
            var fakeDiv = $(".simcardContent-tobScroll div");

            var tableWidth = table.width();
            fakeDiv.width(tableWidth);
            fakeContainer.scroll(function() {
                tableContainer.scrollLeft(fakeContainer.scrollLeft());
            });
            tableContainer.scroll(function() {
                fakeContainer.scrollLeft(tableContainer.scrollLeft());
            });

            window.onscroll = function() {
                myFunction()
            };
            var scrollDiv = document.getElementById("myScroll_" + accesskeyVar);
            var sticky = scrollDiv.offsetTop;

            function myFunction() {
                if (window.pageYOffset > sticky) {
                    scrollDiv.classList.add("stickyScroll");
                } else {
                    scrollDiv.classList.remove("stickyScroll");
                }
            }


        })

    }
    var recordStatusTypeVar = '';
    var accesskeyVar = '';
    var tabNameVar = '';
    var recordPerPageVar = 30;
    var recordPerPageVarCommission = 40;
    var applicantCount = 0;
    var offSetGlobalVar = [];
    offSetGlobalVar["offSetBooked"] = 0;
    offSetGlobalVar["offSetWaiting"] = 0;
    offSetGlobalVar["offSetActive"] = 0;
    offSetGlobalVar["offSetCancelled"] = 0;
    offSetGlobalVar["offSetCancelleLationRequested"] = 0;
    offSetGlobalVar["offSetProblem"] = 0;
    offSetGlobalVar["offSetChangePlan"] = 0;
    offSetGlobalVar["offSetChangeCC"] = 0;
    offSetGlobalVar["offSetAll"] = 0;
    offSetGlobalVar["offSetShipped"] = 0;
    offSetGlobalVar["offSetCommission"] = 0;
    offSetGlobalVar["offSetCommissionPaid"] = 0;

    var orderByOrderGlobalVar = [];
    orderByOrderGlobalVar['orderByOrderBooked'] = 'desc';
    orderByOrderGlobalVar['orderByOrderWaiting'] = 'desc';
    orderByOrderGlobalVar['orderByOrderActive'] = 'desc';
    orderByOrderGlobalVar['orderByOrderCancelled'] = 'desc';
    orderByOrderGlobalVar['orderByOrderCancelleLationRequested'] = 'desc';
    orderByOrderGlobalVar['orderByOrderProblem'] = 'desc';
    orderByOrderGlobalVar['orderByOrderChangePlan'] = 'desc';
    orderByOrderGlobalVar['orderByOrderChangeCC'] = 'desc';
    orderByOrderGlobalVar['orderByOrderAll'] = 'desc';
    orderByOrderGlobalVar['orderByOrderShipped'] = 'desc'
    orderByOrderGlobalVar['orderByOrderCommission'] = 'asc';
    orderByOrderGlobalVar['orderByOrderCommissionPaid'] = 'asc';

    var orderByFieldGlobalVar = [];
    orderByFieldGlobalVar['orderByFieldBooked'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldWaiting'] = 'Activation_Date__c';
    orderByFieldGlobalVar['orderByFieldActive'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldCancelled'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldCancelleLationRequested'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldProblem'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldChangePlan'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldChangeCC'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldAll'] = 'Status__c';
    orderByFieldGlobalVar['orderByFieldShipped'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldCommission'] = 'Sim_Card_Booked_Time__c';
    orderByFieldGlobalVar['orderByFieldCommissionPaid'] = 'Sim_Card_Booked_Time__c';


    var searchRecordGlobalVar = [];
    searchRecordGlobalVar['searchRecordBooked'] = {};
    searchRecordGlobalVar['searchRecordWaiting'] = {};
    searchRecordGlobalVar['searchRecordActive'] = {};
    searchRecordGlobalVar['searchRecordCancelled'] = {};
    searchRecordGlobalVar['searchRecordCancelleLationRequested'] = {};
    searchRecordGlobalVar['searchRecordProblem'] = {};
    searchRecordGlobalVar['searchRecordChangePlan'] = {};
    searchRecordGlobalVar['searchRecordChangeCC'] = {};
    searchRecordGlobalVar['searchRecordAll'] = {};
    searchRecordGlobalVar['searchRecordShipped'] = {};
    searchRecordGlobalVar['searchRecordCommission'] = {};
    searchRecordGlobalVar['searchRecordCommissionPaid'] = {};

    function searchRecordGlobalMethod(tabName) {
        var obj = {
            SIM_Card_Number: returnValSerchInp('simCardNumber_', tabName),
            Requested_Area_Code: returnValSerchInp('reqAreaCode_', tabName),
            Issued_U_S_Phone_Number: returnValSerchInp('activatedPhone_', tabName),
            PLAN: returnValSerchInp('plan_', tabName),
            Activation_Date: returnConvertedDate(returnValSerchInp('activationDate_', tabName)),
            Activation_confirmed: returnValSerchInp('activationConfirmFrom_', tabName),
            AutoRenew: returnValSerchInp('autoRenew_', tabName),
            Cancellation_Date: returnConvertedDate(returnValSerchInp('cancellationDate_', tabName)),
            paymentSubmited: returnValSerchInp('paymentSubmitted_', tabName),
            deactivation_Date_by_Aerobile_SM: returnConvertedDate(returnValSerchInp('deactivationDate_', tabName)),
            serviceEndDate: returnConvertedDate(returnValSerchInp('serviceEndDateFrom_', tabName)),
            serviceEndDateTo: returnConvertedDate(returnValSerchInp('serviceEndDateTo_', tabName)),
            creditCardDetail: returnValSerchInp('creditCard_', tabName),
            customerInfo: returnValSerchInp('customerInfo_', tabName),
            noteInfo: returnValSerchInp('transactionId_', tabName),
            extraNote: returnValSerchInp('note_', tabName),
            checkNumber: returnValSerchInp('checkNumber_', tabName)
        }

        return obj;
    }

    function returnConvertedDate(val) {
        if (val.trim() == '') {
            return '';
        } else {
            values = val.split('/');
            return values[2] + '-' + values[0] + '-' + values[1];
        }
    }

    function returnValSerchInp(idField, tabName) {
        return $('#' + idField + tabName).val() == undefined ? '' : $('#' + idField + tabName).val();
    }

    function simCardManageTab(evt, val, tabName) {
        tabNameVar = tabName;
        accesskeyVar = val.getAttribute("data-accesskey");
        recordStatusTypeVar = val.getAttribute("data-status");
        var i, gaccca_simcard_tabcontent, gaccca_simcard_tablinks;
        gaccca_simcard_tabcontent = document.getElementsByClassName("gaccca_simcard_tabcontent");
        for (i = 0; i < gaccca_simcard_tabcontent.length; i++) {
            gaccca_simcard_tabcontent[i].style.display = "none";
        }
        gaccca_simcard_tablinks = document.getElementsByClassName("gaccca_simcard_tablinks");
        for (i = 0; i < gaccca_simcard_tablinks.length; i++) {
            gaccca_simcard_tablinks[i].className = gaccca_simcard_tablinks[i].className.replace(" active", "");
        }

        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        loadValues();

    }


    function sortCall(val) {
        orderByFieldGlobalVar["orderByField" + accesskeyVar] = val.getAttribute("data-fieldapi");
        orderByOrderGlobalVar["orderByOrder" + accesskeyVar] = orderByOrderGlobalVar["orderByOrder" + accesskeyVar] == 'desc' ? 'asc' : 'desc';
        loadValues();
    }

    function next() {
        var recordPerPage = recordPerPageVar;
        if (accesskeyVar == 'Commission' || accesskeyVar == 'CommissionPaid') {
            recordPerPage = recordPerPageVarCommission;

        }
        if (applicantCount != 0 && applicantCount == recordPerPage) {

            offSetGlobalVar["offSet" + accesskeyVar] = offSetGlobalVar["offSet" + accesskeyVar] + recordPerPage;
            loadValues();
        }
    }

    function previous() {
        var recordPerPage = recordPerPageVar;
        if (accesskeyVar == 'Commission' || accesskeyVar == 'CommissionPaid') {
            recordPerPage = recordPerPageVarCommission;

        }
        if (offSetGlobalVar["offSet" + accesskeyVar] == 0) {
            return;
        }
        offSetGlobalVar["offSet" + accesskeyVar] = offSetGlobalVar["offSet" + accesskeyVar] - recordPerPage;
        loadValues();
    }

    function searchRecords(evt) {
        if (evt.which == 13) {
            loadValues();
        }
    }

    function saveRecordUpdate(recordId, fieldApi, val, dataType) {
        var formData = {
            'appId': recordId,
            "fieldName": fieldApi,
            "fieldValue": val,
            "dataType": dataType,
            "methodType": 'saveApplicant'
        }
        ajaxRequest(formData);
    }

    function sendTransactionFailEmailAction(val) {
        if (!confirm("Are you sure to send the transaction failure email? ")) {
            return;
        }
        var formData = {
            'appId': val.getAttribute("data-sendTmail"),
            "methodType": 'sendTransactionFailEmailAction'
        }
        ajaxRequest(formData);
    }

    function commissionPaid() {
        if ($('#checkNumberId').val().trim() == '' || $('#checkAmountId').val().trim() == '') {
            alert('Check Information missing');
            return;
        }
        var applicantSelected = [];
        var commissionCheck = document.getElementsByClassName('commissionCheck_' + accesskeyVar);
        for (var i = 0; i < commissionCheck.length; i++) {
            if (commissionCheck[i].checked) {
                applicantSelected.push(commissionCheck[i].getAttribute("id"));
            }
        }
        if (applicantSelected.length == 0) {
            alert('Please select records');
            return;
        }
        var formData = {
            'ids': applicantSelected,
            "methodType": 'commissionMethod',
            'checkAmount': $('#checkAmountId').val(),
            'check': $('#checkNumberId').val(),
            'commissionStatus': 'Paid',
            'currentStatus': 'Due'
        }
        ajaxRequest(formData);
    }

    function selectAll() {
        var commissionCheck = document.getElementsByClassName('commissionCheck_' + accesskeyVar);
        for (var i = 0; i < commissionCheck.length; i++) {
            commissionCheck[i].checked = document.getElementById('All_Commission_' + accesskeyVar).checked;
        }
    }

    function loadValues() {
        $(".simcardContent-tobScroll").removeClass("simcardContent-tobScroll")
        var offset = offSetGlobalVar["offSet" + accesskeyVar];
        var recordPerPage = recordPerPageVar;
        var orderByField = orderByFieldGlobalVar["orderByField" + accesskeyVar];
        var orderByOrder = orderByOrderGlobalVar["orderByOrder" + accesskeyVar];
        var queryType = 'Other';
        if (accesskeyVar == 'Commission' || accesskeyVar == 'CommissionPaid') {
            recordStatusTypeVar = 'All';
            queryType = accesskeyVar;
            recordPerPage = recordPerPageVarCommission;

        }
        var searchObjString = searchRecordGlobalMethod(tabNameVar);
        recordStatusTypeVar = recordStatusTypeVar == 'Booked Payment Pending' ? 'Booked & Payment Pending' : recordStatusTypeVar;

        var formData = {
            'tabName': tabNameVar,
            "orderByField": orderByField,
            "orderByOrder": orderByOrder,
            "recordStatusType": recordStatusTypeVar,
            "offset": offset,
            "searchObj": searchObjString,
            "recordPerPage": recordPerPage,
            "queryType": queryType,
            "methodType": 'fetchAccount',
            "accesskey": accesskeyVar
        }
        //console.log(formData);
        ajaxRequest(formData);
    }

    function ajaxRequest(formData) {
        //console.log(formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: 'common_api_simcardmanage',
            data: formData,
            dataType: 'json',
            beforeSend: function() {
                if (formData.methodType == 'saveApplicant' || formData.methodType == 'sendTransactionFailEmailAction' || formData.methodType == 'commissionMethod') {
                    $("#loaderRecordSave").css('display', 'block');

                } else {
                    $(".loader").css('display', 'block');
                    $('#' + tabNameVar + '_ajax').css('display', 'none');
                }

            },
            success: function(data) {
                //console.log(data);
                if ((formData.methodType == 'saveApplicant' || formData.methodType == 'sendTransactionFailEmailAction' || formData.methodType == 'commissionMethod') && data == 'OK') {
                    $("#loaderRecordSave").css('display', 'none');
                    if (formData.methodType == 'sendTransactionFailEmailAction') {
                        alert('Transaction failure email has been sent.');
                    }
                    if (formData.methodType == 'commissionMethod') {
                        loadValues()
                    }
                } else {
                    applicantCount = data.totalApplicantRecords;
                    $('#' + tabNameVar + '_ajax').html(data.html);
                    $('#' + tabNameVar + '_ajax').css('display', 'block');
                    $(".loader").css('display', 'none');
                    loadAjaxContent();
                    updateTabRecordCount(data.totalRecords);
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    }


    function updateTabRecordCount(totalRecords) {
        //tabRecordwaiting 
        $('#tabRecordShipped').html(totalRecords.Shipped);
        $('#tabRecordactive').html(totalRecords.active);
        $('#tabRecordall').html(totalRecords.all);
        $('#tabRecordbooked').html(totalRecords.booked);
        $('#tabRecordcancelC').html(totalRecords.cancelC);
        $('#tabRecordcancelR').html(totalRecords.cancelR);
        $('#tabRecordccChange').html(totalRecords.ccChange);
        $('#tabRecordcommission').html(totalRecords.commission);
        $('#tabRecordcommissionPaid').html(totalRecords.commissionPaid);
        $('#tabRecordplanchange').html(totalRecords.planchange);
        $('#tabRecordproblem').html(totalRecords.problem);
        $('#tabRecordwaiting').html(totalRecords.waiting);
        //var tableHeight=window.innerHeight-300;
        // $(".simcardContent").css('height', tableHeight);
    }

    function onScreenChange() {


        if (window.innerWidth >= 1366) {

        }

    }

    $(window).on('resize', onScreenChange);
    document.getElementById('tab_Booked_Simcard').click();
    var emailAccountUserVal = "{{session()->get('userEmail')}}";
</script>
@if(session()->get('sessionIsInternal')!='Yes')
<script src="{{ asset('js/accountAuthMaintain.js') }}"></script>
@endif
</html>


@else
Permission denied. Please contact administrator.
@endif