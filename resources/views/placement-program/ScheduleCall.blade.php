@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Schedule a Call</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Here you see all available appointments slots with your placement coordinator. Please select a spot which works best for you an confirm the call with the button "Schedule a Call" If you like to re-schedule a call please use also this page.
        </p>
      </div>
      

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Booking Slots will be available soon.</p> 
      </div>
     
     
    </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif