@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}



<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Video Tutorials</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>These videos will help guide you step-by-step through your account and creating your online video resume.</p>
      </div>
      

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        
        <div class="gaccca-form-element gaccca-form-element-margin">
            <h4><strong> Introduction & Updating Profile</strong> </h4>
            <p>This video will show you how to navigate your account, upload any documents, update your information and change your account login password.</p>



            <h4><strong>Scheduling A Call</strong> </h4>
            <p>This video will show you how to schedule any calls and practice interviews with your placement coordinator.</p>


            <h4><strong></strong> </h4>
            <p></p>


            <h4><strong>Creating Your Resume</strong> </h4>
            <p>This video will guide you on how to create and update the written portion of your online video resume.</p>


            <h4><strong>Write Your Script</strong> </h4>
            <p>This video will guide you on how to write your video script that you will use for the video portion of your online resume.</p>
    

            <h4><strong>Recording Video & Conclusion</strong> </h4>
            <p>This video will explain how to record your video, use the teleprompter function and finish your online video resume.</p>
    



    </div>


</div>
     
    </div>


{!! Form::close() !!}
@include('common.footer')