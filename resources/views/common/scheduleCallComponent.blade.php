<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">

        @if($scheduleCallTypeName=='J1')
        Schedule a Call (Participant)
        @elseif($scheduleCallTypeName=='J1Supervisor')
        Schedule Supervisor Interview
        @elseif($scheduleCallTypeName=='B1')
        Schedule a Call
        @elseif($scheduleCallTypeName=='Placement')
        Schedule a Call
        @endif
    </h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        @if($scheduleCallTypeName=='J1')
        <p>
            Please schedule your interview time slot here. You may select a spot which works best for
            you and confirm the call with the button "Schedule a Call." We ask that you schedule the
            soonest available appointment in order to keep the application process on track. If you need
            to reschedule, please do so at least 24 hours in advance.
        </p>
        @elseif($scheduleCallTypeName=='J1Supervisor')
        <p>
            Please schedule your interview time slot here. You may select a spot which works best for
            you and confirm the call with the button "Schedule a Call." We ask that you schedule the
            soonest available appointment in order to keep the application process on track. If you need
            to reschedule, please do so at least 24 hours in advance.
        </p>

        @elseif($scheduleCallTypeName=='B1')
        <p>
            Here you see all available appointments slots with your visa coordinator. Please select a spot that works best for you and confirm the call with the button "Schedule a Call" If you like to reschedule a call please use also this page.
        </p>
        @elseif($scheduleCallTypeName=='Agent')
        <p>
            As an Agent of Us, we make it easy as possible to schedule an online call for any topic you like to talk about with Us.
        </p>
        <p>
            Here you see all available appointment slots with your contact partner.
        </p>
        <p>
            Please select a spot that works best for you and confirm the call with the button "Schedule a Call" If you like to re-schedule a call please use also this page.
        </p>
        @elseif($scheduleCallTypeName=='Placement')
        <p>
            Here you see all available appointments slots with your placement coordinator. Please select a spot which works best for you an confirm the call with the button "Schedule a Call"
            If you like to re-schedule a call please use also this page.
        </p>

        @endif
        <p>The time of the appointment slots is shown in your local time zone. If your local time zone was not properly detected you can set the time zone manually. Please make sure that you select always your right local time.</p>
    </div>
    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="select-01">Time Zone:</label>
            <div class="gaccca-form-element__control">
                <div class="gaccca-select_container">
                    {!! Form::select('tmzone', array_reverse($datas['timeZoneMapValues']), '', [ 'class' => 'gaccca-select','id' => 'time-zone-change']) !!}


                </div>
            </div>
        </div>

    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1">
        <div class="gaccca-reshedule-call-box" id='rescheduleCallSection'>

        </div>

    </div>
    <div class="gaccca-col gaccca-large-size_12-of-12 gaccca-medium-size_1-of-1 gaccca-text-center" id='calendarLinks'>

    </div>

    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin" id='scheduleCallSection'>


        </div>
    </div>




    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin" id='button-weekly-slots'>

        </div>
    </div>
    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin" id='placementVisaMissing'>

        </div>
    </div>


</div>

@include('common.modal')




<script>
    var requestResponse;

    function ajaxRequest(formData) {
        formData.contactId = "{{$datas['contID']}}";
        if (requestResponse != undefined && requestResponse != '') {
            formData.requestResponseStr = JSON.stringify(requestResponse);
        }
        document.getElementById('loader').style.display = 'block';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: 'scheduleCallBooking',
            data: formData,
            dataType: 'json',
            success: function(data) {
                requestResponse = data;
                if (formData.methodType == 'slotSelectedMethod') {
                    if (requestResponse.timeSlotDetail != null) {
                        scheduleCallModal();
                    }


                } else {
                    if (requestResponse.isReSchedule && requestResponse.registerEventInfo.Google_Calendar_Event_URL__c == undefined) {
                        document.getElementById('gaccca_myModal').style.display = 'none';
                        showFun();
                        return;
                    }
                    showSlots();
                    if (requestResponse.isReSchedule) {
                        showBookedSlots();
                    }

                    if (formData.methodType == 'createEvent') {
                        createEventMethod()
                    }



                }
                document.getElementById('loader').style.display = 'none';
            },
            error: function(data) {
                console.log(data);
                document.getElementById('loader').style.display = 'none';
            }
        });




    }

    function createEventMethod() {
        if (requestResponse.slotBookedBySomeone) {
            document.getElementById('callBookingError').style.display = 'block';
        } else {
            document.getElementById('gaccca_myModal').style.display = 'none';
        }
    }

    function scheduleCallModal() {

        document.getElementById('callTimeInfo').innerHTML = '<strong>Time: </strong> ' + requestResponse.finalTimeSlotInfo + ' ' + requestResponse.timeZonestringInfo + '.';
        document.getElementById('gaccca_myModal').style.display = 'block';
    }

    function showSlots() {
        document.getElementById('rescheduleCallSection').innerHTML = '';
        document.getElementById('calendarLinks').innerHTML = '';
        document.getElementById('scheduleCallSection').innerHTML = '';
        document.getElementById('button-weekly-slots').innerHTML = '';
        document.getElementById('placementVisaMissing').innerHTML = '';


        if (requestResponse.placementOrVisaMissing) {
            document.getElementById('placementVisaMissing').innerHTML = 'Booking Slots will be available soon. ';
            return;
        }
        let slotList = '';
        let btnWeeklySlot = ''
        let dayInt = 0;
        let slotInt = 0;
        for (let slot of requestResponse.TimeSlotWrapperByDayList) {
            slotInt = 0;
            slotList += '<h4>' + slot.dayDate + '</h4>';
            for (let slotTime of slot.daySlotList) {

                if (slotTime.isMyslot) {
                    slotList += '<div class="gaccca-call-slot-box">';
                    slotList += '<p>' + slotTime.slotTimeShow + '</p>'
                    slotList += '<p>Hangout Meet Room ID: <a target="_blank" href="https://' + requestResponse.hangOutLink + '">' + requestResponse.hangOutLink + '</a></p>';
                    slotList += '</div>';
                } else if (!slotTime.isBookedSlot) {
                    slotList += '<button class="gaccca-button-time-slot" id="slotEmpty_' + slotTime.slotId + '" slot-value=' + dayInt + '-' + slotInt + '>' + slotTime.slotTimeShow + '</button>';
                } else {
                    slotList += '<button class="gaccca-button-time-slot" disabled="">' + slotTime.slotTimeShow + '</button>';
                }
                slotInt++;

            }
            dayInt++;
        }
        if (requestResponse.weekStartDate != requestResponse.weekStartDateClone) {
            btnWeeklySlot += '<button class="gaccca-button-save" id="prev-week-btn">Previous Week</button> ';
        }
        btnWeeklySlot += '<button class="gaccca-button-save" id="next-week-btn">Next Week</button>';
        document.getElementById('scheduleCallSection').innerHTML = slotList;
        document.getElementById('button-weekly-slots').innerHTML = btnWeeklySlot;
        loadJquery(false);
    }

    function showBookedSlots() {
        let slotBooked = '';
        let calLinks = '';

        slotBooked = '<button class="gaccca-button-reshedule" id="rescheduleCallBtn">Reschdule the call</button>';
        slotBooked += '<p><strong>Call schedule on:</strong> ' + requestResponse.finalTimeSlotInfo + '</p>';
        slotBooked += '<p>Hangout Meet Room ID: <a target="_blank" href="https://' + requestResponse.hangOutLink + '">' + requestResponse.hangOutLink + '</a></p>';

        document.getElementById('rescheduleCallSection').innerHTML = slotBooked;
        calLinks += requestResponse.registerEventInfo.Google_Calendar_Event_URL__c + '&nbsp;&nbsp;&nbsp;';
        calLinks += requestResponse.registerEventInfo.Outlook_Live_Calendar_Event_URL__c + '&nbsp;&nbsp;&nbsp;';
        calLinks += requestResponse.registerEventInfo.Outlook_Office_Calendar_Event_URL__c + '&nbsp;&nbsp;&nbsp;';
        calLinks += requestResponse.registerEventInfo.Yahoo_Calendar_Event_URL__c + '&nbsp;&nbsp;&nbsp;';
        calLinks += requestResponse.registerEventInfo.ICS_file__c + '&nbsp;&nbsp;&nbsp;';
        document.getElementById('calendarLinks').innerHTML = calLinks;
        loadJquery(true);
    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.25/moment-timezone-with-data-1970-2030.js"></script>

<script>
    var scheduleCallTypeName = '{{$scheduleCallTypeName}}';
    var timezoneName = '';
    var isLoadedFlag = false;
    /*---------------------On load-----------------------*/
    function showFun() {

        if (moment.tz.guess()) {
            timezoneName = moment.tz.guess();
        } else {
            timezoneName = 'GMT';

        }
        document.getElementById('time-zone-change').value = timezoneName;
        var formData = {
            timeZoneDetected: timezoneName,
            scheduleCallType: scheduleCallTypeName,
            methodType: 'showSlots'
        }
        ajaxRequest(formData);
    }

    showFun();

    /*---------------------On timezone Change-----------------------*/
    $("#time-zone-change").change(function() {
        timezoneName = this.value;
        var formData = {
            timeZoneDetected: timezoneName,
            scheduleCallType: scheduleCallTypeName,
            methodType: 'changetimezoneAction'
        }
        ajaxRequest(formData);
    });


    function loadJquery(isReschedule) {
        if (!isReschedule) {
            $("#prev-week-btn").click(function() {
                var formData = {
                    timeZoneDetected: timezoneName,
                    scheduleCallType: scheduleCallTypeName,
                    methodType: 'preSlots'
                }
                ajaxRequest(formData);
            });


            $("#next-week-btn").click(function() {
                var formData = {
                    timeZoneDetected: timezoneName,
                    scheduleCallType: scheduleCallTypeName,
                    methodType: 'nextSlots'
                }
                ajaxRequest(formData);
            });
            $('[id^=slotEmpty_]').click(function() {
                var formData = {
                    timeZoneDetected: timezoneName,
                    scheduleCallType: scheduleCallTypeName,
                    slotSelected: $(this).attr('slot-value'),
                    methodType: 'slotSelectedMethod'
                }
                ajaxRequest(formData);
            });
        } else {
            $("#rescheduleCallBtn").click(function() {
                if (confirm("Are you sure you want to reschedule the call?")) {
                    var formData = {
                        timeZoneDetected: timezoneName,
                        scheduleCallType: scheduleCallTypeName,
                        methodType: 'reScheduleCall'
                    }
                    ajaxRequest(formData);
                }
            });

        }

    }
    $("#confirmCallBtn").click(function() {

        var formData = {
            timeZoneDetected: timezoneName,
            scheduleCallType: scheduleCallTypeName,
            questionStr: $('#questionInAdvanced').val(),
            methodType: 'createEvent'
        }
        ajaxRequest(formData);

    });
</script>