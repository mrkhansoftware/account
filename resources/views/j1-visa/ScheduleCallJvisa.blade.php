@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Schedule a Call (Participant)</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please schedule your interview time slot here. You may select a spot which works best for you and confirm the call with the button "Schedule a Call." We ask that you schedule the soonest available appointment in order to keep the application process on track. If you need to reschedule, please do so at least 24 hours in advance.
        
        </p>
      </div>
      

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Booking Slots will be available soon.</p> 
      </div>
     
     
    </div>

{!! Form::close() !!}
@include('common.footer')