@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Schedule a Call (Participant)</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Please schedule your interview time slot here. You may select a spot which works best for you and confirm the call with the button "Schedule a Call." We ask that you schedule the soonest available appointment in order to keep the application process on track. If you need to reschedule, please do so at least 24 hours in advance.
    </p>
    <p>The time of the appointment slots is shown in your local time zone. If your local time zone was not properly detected you can set the time zone manually. Please make sure that you select always your right local time.</p>
  </div>


  <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="select-01">Time Zone:</label>
      <div class="gaccca-form-element__control">
        <div class="gaccca-select_container">
          <select class="gaccca-select" id="time-zone-change">
            <option>select</option>
            <option value="option1">option1</option>
            <option value="option2">option2</option>

          </select>
        </div>
      </div>
    </div>

  </div>

  <div class="gaccca-col gaccca-large-size_1-of-1">
    <div class="gaccca-reshedule-call-box">
      <button class="gaccca-button-reshedule">Reschdule the call</button>
      <p><strong>Call schedule on:</strong> 07:30 PM-08:00 PM [Wednesday ( 13-May-2020 )]</p>
      <a href="#">Download Calendar Entry</a>
      <p>Hangout Meet Room ID: <a href="#"> meet.google.com/ere-hrms-odf</a></p>
    </div>

  </div>

  <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <h4>Monday, 11. May</h4>
      <button class="gaccca-button-time-slot" id="gaccca_myBtn_1">07:30PM-08:00PM</button>
      <button class="gaccca-button-time-slot" id="gaccca_myBtn_2">07:30PM-08:00PM</button>
      <button class="gaccca-button-time-slot" id="gaccca_myBtn_3">07:30PM-08:00PM</button>

      <button class="gaccca-button-time-slot" disabled="">07:30PM-08:00PM</button>
      <div class="gaccca-call-slot-box">
        <p>07:30PM-08:00PM</p>
        <p>Hangout Meet Room ID: <a href="#">meet.google.com/ere-hrms-odf</a></p>
      </div>


    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <button class="gaccca-button-save" id="prev-week-btn">Previous Week</button>
      <button class="gaccca-button-save" id="next-week-btn">Next Week</button>
    </div>
  </div>


</div>

@include('common.modal')



{!! Form::close() !!}
@include('common.footer')

<script>
  $("#time-zone-change").change(function() {
    alert(this.value);
    callBvisaAjax()

  });


  $("#prev-week-btn").click(function() {
    alert('prev-button');
    callBvisaAjax()

  });


  $("#next-week-btn").click(function() {
    alert('next-button');
    callBvisaAjax()
  });

  function callBvisaAjax() {

    alert('ajax call');

    // $.ajaxSetup({
    //    headers: {
    //    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //    }
    //     });
    // $.ajax({
    //  type: 'get',
    //  url: 'schedule_call_b_visa',
    // data: formData,
    //  dataType: 'json',
    // success: function (data) {
    //   console.log(data);
    // var $existing_customerlist = $('#existing-customer-list');
    //     $existing_customerlist.empty();

    //     for (var i = 0; i < data.length; i++) {
    //         $existing_customerlist.append('<option id=' + data[i] + ' value=' + data[i] + '>' + data[i] + '</option>');
    //     }

    //  },
    //  error: function (data) {
    //  console.log(data);
    //  }
    //  });




  }
</script>