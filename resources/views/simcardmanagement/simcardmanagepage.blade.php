<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/all.css') }}" rel='stylesheet'>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <style>
    body {
        background: white;
    }

    /* Style the gaccca-simcard-tab */
    .gaccca-simcard-tab {
        overflow: hidden;
        border-bottom: 1px solid #ccc;

    }

    /* Style the buttons inside the gaccca-simcard-tab */
    .gaccca-simcard-tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-family: sans-serif;
        line-height: 1.5;
    }


    /* Create an active/current tablink class */
    .gaccca-simcard-tab button.active {

        color: rgb(0, 122, 221)
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
        width: 3000px;
        margin-top: 20px;
    }


    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        font-size: small;
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
        max-width: 1300px;
        padding: 5px;
    }
    </style>
</head>

<body>








    <div class="gaccca-header">
        <div class="gaccca-simcard-header">
            <div class="gaccca-grid gaccca-wrap">
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                    <!-- <div class="gaccca-behind-the-logo gaccca-behind-the-logo-position"> -->
                    <!-- <img src="{{ asset('images/logo/logo1.png') }}"/> -->
                    <span class="list-icon"><i class="fas fa-list-alt"></i></span>
                    <div class="header-text">

                        <h5 class="header-text-h5"> Sim Card </h5>
                        <h3 class="header-text-h3"> GACC California -Aerobile SIM Activation List </h3>
                    </div>

                    <!-- </div> -->
                    <div class="header-user-info">
                        <h4 class="header-text-h4">Test User</h4>
                        <span class="user-icon"><i class="fas fa-user-circle"></i></span>
                        <ul class="header-button-group-list">
                            <li class="header-simcard-li"><a href="#" target="_blank">Profile</a>
                            </li>
                            <li class="header-simcard-li"><a href="#" target="_blank">Change
                                    Password</a></li>
                            <li class="header-simcard-li"><a href="#">Logout</a></li>
                        </ul>
                        <!-- fa fa-user-circle-o -->
                    </div>
                    <button id="openNav" class="gaccca-openbtn gaccca-header-menu-button">☰</button>

                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>












    <div class="gaccca-simcard-tab">
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'booked_and_payment')">Booked and
            Payment Pending (0)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'waiting_for_number')">Waiting For
            number (0)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'active_id')">Active (0)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'cancellation_request')">Cancellation
            requested(3)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'cancellation_confirmed')">Cancellation
            confirmed(331)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'problem')">Problem(0)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'plan_change')">Plan change(2)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'credit_card_change')">Credit Card
            change(1)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'all')">All</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'commission_pending')">Commission
            Pending(24)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'commission_paid')">Commission
            Paid(120)</button>
        <button class="gaccca_simcard_tablinks" onclick="simCardManageTab(event, 'shipped')">Shipped(120)</button>


    </div>





    <div id="booked_and_payment" class="gaccca_simcard_tabcontent">

        @include('simcardmanagement.loader')
        <div id="booked_and_payment_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
            
        </div>
    </div>

    <div id="waiting_for_number" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')
    <div id="waiting_for_number_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>

    <div id="active_id" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="active_id_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>

    <div id="cancellation_request" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="cancellation_request_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>


    <div id="cancellation_confirmed" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="cancellation_confirmed_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>

    <div id="problem" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="problem_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>

    <div id="plan_change" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="plan_change_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>

    <div id="credit_card_change" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="credit_card_change_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>


    <div id="all" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="all_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>


    <div id="commission_pending" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="commission_pending_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>

    <div id="commission_paid" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="commission_paid_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>

    <div id="shipped" class="gaccca_simcard_tabcontent">
    @include('simcardmanagement.loader')

    <div id="shipped_ajax" style="width:1300px;float: left;dispaly:block;overflow-x:scroll;">
    </div>
    </div>





</body>


<script>



function loadAjaxContent1234 (){
    $(".popup-text").hide();
    $('[id^="edit_"]').on("click", function() {
        var current_id =  $(this).attr("id");
        $(".popup-text").hide();
        $(".edit-pencil").show();
        var which_element = current_id.split("edit_");
        $("div#editdiv_" + which_element[1]).show()
        $("#edit_" + which_element[1]).hide();
        var current_value = $("div#editdiv_" + which_element[1]).next().text();
        
        $("#input_value_" + which_element[1]).val(current_value);
    })

}

function loadAjaxContent (){

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


    });
    $('.gaccca-input-date').datepicker({

        changeMonth: true,
        changeYear: true,

});  
}






function simCardManageTab(evt, tabName) {


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
    var formData = {
        'tabName': tabName
    }

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
              console.log(tabName);
            // setting a timeout
            $(".loader").css('display','block');
            $('#'+tabName+'_ajax').css('display','none');

        },
          success: function (data) {
            $('#'+tabName+'_ajax').html(data.html);
            $('#'+tabName+'_ajax').css('display','block');
            $(".loader").css('display','none');
            loadAjaxContent();
            
          },
          error: function (data) {
         
          }
          });


}








function onScreenChange() {


    if (window.innerWidth >= 1366) {

    }

}

$(window).on('resize', onScreenChange);
</script>

</html>