@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Create Your Video Resume</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
       <p>You have the option to use a teleprompter which automatically appears when you start recording. Input the video script you want to see in Teleprompter.</p>
      </div>
      

      
     
    


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
           
          <div class="gaccca-form-element__control">

        <button type="submit" id="save-btn" class="gaccca-button-save">Show Teleprompter</button>
            
             
          </div>
        </div>
      </div>
    

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Please copy and paste your video script into the text box. All changes will be saved automatically. </label>
          <div class="gaccca-form-element__control">

            <textarea required="" class="gaccca-textarea"></textarea>
             
          </div>
        </div>
      </div>




      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Let us know if you think you finished your video resume by clicking the button below. </label>
          
            <div class="gaccca-form-element__control">
              <br/>
              <button type="submit" id="save-btn" class="gaccca-button-save">Ready with video resume</button> 
          </div>
        </div>
      </div>

     

    </div>

{!! Form::close() !!}
@include('common.footer')