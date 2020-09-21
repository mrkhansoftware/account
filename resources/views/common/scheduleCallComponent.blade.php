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
                    <select class="gaccca-select" id="time-zone-change">
                        <option value="Pacific/Kiritimati">(GMT+14:00) Line Islands Time (Pacific/Kiritimati)</option>
                        <option value="Pacific/Enderbury">(GMT+13:00) Phoenix Islands Time (Pacific/Enderbury)</option>
                        <option value="Pacific/Tongatapu">(GMT+13:00) Tonga Standard Time (Pacific/Tongatapu)</option>
                        <option value="Pacific/Chatham">(GMT+12:45) Chatham Standard Time (Pacific/Chatham)</option>
                        <option value="Asia/Kamchatka">(GMT+12:00) Petropavlovsk-Kamchatski Standard Time (Asia/Kamchatka)</option>
                        <option value="Pacific/Auckland">(GMT+12:00) New Zealand Standard Time (Pacific/Auckland)</option>
                        <option value="Pacific/Fiji">(GMT+12:00) Fiji Standard Time (Pacific/Fiji)</option>
                        <option value="Pacific/Guadalcanal">(GMT+11:00) Solomon Islands Time (Pacific/Guadalcanal)</option>
                        <option value="Pacific/Norfolk">(GMT+11:00) Norfolk Island Time (Pacific/Norfolk)</option>
                        <option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Standard Time (Australia/Lord_Howe)</option>
                        <option value="Australia/Brisbane">(GMT+10:00) Australian Eastern Standard Time (Australia/Brisbane)</option>
                        <option value="Australia/Sydney">(GMT+10:00) Australian Eastern Standard Time (Australia/Sydney)</option>
                        <option value="Australia/Adelaide">(GMT+09:30) Australian Central Standard Time (Australia/Adelaide)</option>
                        <option value="Australia/Darwin">(GMT+09:30) Australian Central Standard Time (Australia/Darwin)</option>
                        <option value="Asia/Seoul">(GMT+09:00) Korean Standard Time (Asia/Seoul)</option>
                        <option value="Asia/Tokyo">(GMT+09:00) Japan Standard Time (Asia/Tokyo)</option>
                        <option value="Asia/Hong_Kong">(GMT+08:00) Hong Kong Standard Time (Asia/Hong_Kong)</option>
                        <option value="Asia/Kuala_Lumpur">(GMT+08:00) Malaysia Time (Asia/Kuala_Lumpur)</option>
                        <option value="Asia/Manila">(GMT+08:00) Philippine Standard Time (Asia/Manila)</option>
                        <option value="Asia/Shanghai">(GMT+08:00) China Standard Time (Asia/Shanghai)</option>
                        <option value="Asia/Singapore">(GMT+08:00) Singapore Standard Time (Asia/Singapore)</option>
                        <option value="Asia/Taipei">(GMT+08:00) Taipei Standard Time (Asia/Taipei)</option>
                        <option value="Australia/Perth">(GMT+08:00) Australian Western Standard Time (Australia/Perth)</option>
                        <option value="Asia/Bangkok">(GMT+07:00) Indochina Time (Asia/Bangkok)</option>
                        <option value="Asia/Ho_Chi_Minh">(GMT+07:00) Indochina Time (Asia/Ho_Chi_Minh)</option>
                        <option value="Asia/Jakarta">(GMT+07:00) Western Indonesia Time (Asia/Jakarta)</option>
                        <option value="Asia/Rangoon">(GMT+06:30) Myanmar Time (Asia/Rangoon)</option>
                        <option value="Asia/Dhaka">(GMT+06:00) Bangladesh Standard Time (Asia/Dhaka)</option>
                        <option value="Asia/Kathmandu">(GMT+05:45) Nepal Time (Asia/Kathmandu)</option>
                        <option value="Asia/Colombo">(GMT+05:30) India Standard Time (Asia/Colombo)</option>
                        <option value="Asia/Calcutta">(GMT+05:30) India Standard Time (Asia/Kolkata)</option>
                        <option value="Asia/Karachi">(GMT+05:00) Pakistan Standard Time (Asia/Karachi)</option>
                        <option value="Asia/Tashkent">(GMT+05:00) Uzbekistan Standard Time (Asia/Tashkent)</option>
                        <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg Standard Time (Asia/Yekaterinburg)</option>
                        <option value="Asia/Kabul">(GMT+04:30) Afghanistan Time (Asia/Kabul)</option>
                        <option value="Asia/Tehran">(GMT+04:30) Iran Daylight Time (Asia/Tehran)</option>
                        <option value="Asia/Baku">(GMT+04:00) Azerbaijan Standard Time (Asia/Baku)</option>
                        <option value="Asia/Dubai">(GMT+04:00) Gulf Standard Time (Asia/Dubai)</option>
                        <option value="Asia/Tbilisi">(GMT+04:00) Georgia Standard Time (Asia/Tbilisi)</option>
                        <option value="Asia/Yerevan">(GMT+04:00) Armenia Standard Time (Asia/Yerevan)</option>
                        <option value="Africa/Nairobi">(GMT+03:00) East Africa Time (Africa/Nairobi)</option>
                        <option value="Asia/Baghdad">(GMT+03:00) Arabian Standard Time (Asia/Baghdad)</option>
                        <option value="Asia/Beirut">(GMT+03:00) Eastern European Summer Time (Asia/Beirut)</option>
                        <option value="Asia/Jerusalem">(GMT+03:00) Israel Daylight Time (Asia/Jerusalem)</option>
                        <option value="Asia/Kuwait">(GMT+03:00) Arabian Standard Time (Asia/Kuwait)</option>
                        <option value="Asia/Riyadh">(GMT+03:00) Arabian Standard Time (Asia/Riyadh)</option>
                        <option value="Europe/Athens">(GMT+03:00) Eastern European Summer Time (Europe/Athens)</option>
                        <option value="Europe/Bucharest">(GMT+03:00) Eastern European Summer Time (Europe/Bucharest)</option>
                        <option value="Europe/Helsinki">(GMT+03:00) Eastern European Summer Time (Europe/Helsinki)</option>
                        <option value="Europe/Istanbul">(GMT+03:00) Europe/Istanbul</option>
                        <option value="Europe/Minsk">(GMT+03:00) Moscow Standard Time (Europe/Minsk)</option>
                        <option value="Europe/Moscow">(GMT+03:00) Moscow Standard Time (Europe/Moscow)</option>
                        <option value="Africa/Cairo">(GMT+02:00) Eastern European Standard Time (Africa/Cairo)</option>
                        <option value="Africa/Johannesburg">(GMT+02:00) South Africa Standard Time (Africa/Johannesburg)</option>
                        <option value="Europe/Amsterdam">(GMT+02:00) Central European Summer Time (Europe/Amsterdam)</option>
                        <option value="Europe/Berlin">(GMT+02:00) Central European Summer Time (Europe/Berlin)</option>
                        <option value="Europe/Brussels">(GMT+02:00) Central European Summer Time (Europe/Brussels)</option>
                        <option value="Europe/Paris">(GMT+02:00) Central European Summer Time (Europe/Paris)</option>
                        <option value="Europe/Prague">(GMT+02:00) Central European Summer Time (Europe/Prague)</option>
                        <option value="Europe/Rome">(GMT+02:00) Central European Summer Time (Europe/Rome)</option>
                        <option value="Africa/Algiers">(GMT+01:00) Central European Standard Time (Africa/Algiers)</option>
                        <option value="Africa/Casablanca">(GMT+01:00) Western European Standard Time (Africa/Casablanca)</option>
                        <option value="Europe/Dublin">(GMT+01:00) Greenwich Mean Time (Europe/Dublin)</option>
                        <option value="Europe/Lisbon">(GMT+01:00) Western European Summer Time (Europe/Lisbon)</option>
                        <option value="Europe/London">(GMT+01:00) British Summer Time (Europe/London)</option>
                        <option value="America/Scoresbysund">(GMT+00:00) East Greenland Summer Time (America/Scoresbysund)</option>
                        <option value="Atlantic/Azores">(GMT+00:00) Azores Summer Time (Atlantic/Azores)</option>
                        <option value="GMT">(GMT+00:00) Greenwich Mean Time (GMT)</option>
                        <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Standard Time (Atlantic/Cape_Verde)</option>
                        <option value="Atlantic/South_Georgia">(GMT-02:00) South Georgia Time (Atlantic/South_Georgia)</option>
                        <option value="America/St_Johns">(GMT-02:30) Newfoundland Daylight Time (America/St_Johns)</option>
                        <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Argentina Standard Time (America/Argentina/Buenos_Aires)</option>
                        <option value="America/Halifax">(GMT-03:00) Atlantic Daylight Time (America/Halifax)</option>
                        <option value="America/Sao_Paulo">(GMT-03:00) Brasilia Standard Time (America/Sao_Paulo)</option>
                        <option value="Atlantic/Bermuda">(GMT-03:00) Atlantic Daylight Time (Atlantic/Bermuda)</option>
                        <option value="America/Caracas">(GMT-04:00) Venezuela Time (America/Caracas)</option>
                        <option value="America/Indiana/Indianapolis">(GMT-04:00) Eastern Daylight Time (America/Indiana/Indianapolis)</option>
                        <option value="America/New_York">(GMT-04:00) Eastern Daylight Time (America/New_York)</option>
                        <option value="America/Puerto_Rico">(GMT-04:00) Atlantic Standard Time (America/Puerto_Rico)</option>
                        <option value="America/Santiago">(GMT-04:00) Chile Standard Time (America/Santiago)</option>
                        <option value="America/Bogota">(GMT-05:00) Colombia Standard Time (America/Bogota)</option>
                        <option value="America/Chicago">(GMT-05:00) Central Daylight Time (America/Chicago)</option>
                        <option value="America/Lima">(GMT-05:00) Peru Standard Time (America/Lima)</option>
                        <option value="America/Mexico_City">(GMT-05:00) Central Daylight Time (America/Mexico_City)</option>
                        <option value="America/Panama">(GMT-05:00) Eastern Standard Time (America/Panama)</option>
                        <option value="America/Denver">(GMT-06:00) Mountain Daylight Time (America/Denver)</option>
                        <option value="America/El_Salvador">(GMT-06:00) Central Standard Time (America/El_Salvador)</option>
                        <option value="America/Mazatlan">(GMT-06:00) Mexican Pacific Daylight Time (America/Mazatlan)</option>
                        <option value="America/Los_Angeles">(GMT-07:00) Pacific Daylight Time (America/Los_Angeles)</option>
                        <option value="America/Phoenix">(GMT-07:00) Mountain Standard Time (America/Phoenix)</option>
                        <option value="America/Tijuana">(GMT-07:00) Pacific Daylight Time (America/Tijuana)</option>
                        <option value="America/Anchorage">(GMT-08:00) Alaska Daylight Time (America/Anchorage)</option>
                        <option value="Pacific/Pitcairn">(GMT-08:00) Pitcairn Time (Pacific/Pitcairn)</option>
                        <option value="America/Adak">(GMT-09:00) Hawaii-Aleutian Daylight Time (America/Adak)</option>
                        <option value="Pacific/Gambier">(GMT-09:00) Gambier Time (Pacific/Gambier)</option>
                        <option value="Pacific/Marquesas">(GMT-09:30) Marquesas Time (Pacific/Marquesas)</option>
                        <option value="Pacific/Honolulu">(GMT-10:00) Hawaii-Aleutian Standard Time (Pacific/Honolulu)</option>
                        <option value="Pacific/Niue">(GMT-11:00) Niue Time (Pacific/Niue)</option>
                        <option value="Pacific/Pago_Pago">(GMT-11:00) Samoa Standard Time (Pacific/Pago_Pago)</option>


                    </select>
                </div>
            </div>
        </div>

    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1">
        <div class="gaccca-reshedule-call-box" id='rescheduleCallSection'>

        </div>

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
                //console.log(requestResponse);
                if (formData.methodType == 'slotSelectedMethod') {
                    if (requestResponse.timeSlotDetail != null) {
                        scheduleCallModal();
                    }


                } else {
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
        document.getElementById('scheduleCallSection').innerHTML = '';
        document.getElementById('button-weekly-slots').innerHTML = '';
        document.getElementById('placementVisaMissing').innerHTML = '';


        if(requestResponse.placementOrVisaMissing){
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
                    slotList += '<p>Hangout Meet Room ID: <a target="_blank" href="' + requestResponse.hangOutLink + '">' + requestResponse.hangOutLink + '</a></p>';
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
        slotBooked = '<button class="gaccca-button-reshedule" id="rescheduleCallBtn">Reschdule the call</button>';
        slotBooked += '<p><strong>Call schedule on:</strong> ' + requestResponse.finalTimeSlotInfo + '</p>';
        slotBooked += '<p>Hangout Meet Room ID: <a target="_blank" href="' + requestResponse.hangOutLink + '">' + requestResponse.hangOutLink + '</a></p>';
        document.getElementById('rescheduleCallSection').innerHTML = slotBooked;
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