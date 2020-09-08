@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">B Visa Trainings video</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>On this page, we will provide you a video regarding your visa category as soon as we reach some steps in your case. We will send you an email when the video access is available.
        
        </p>
      </div>
      

  
     
     
    </div>
  

{!! Form::close() !!}
@include('common.footer')