@include('common.header',['datas'=>$datas,'title' =>'CloseAccount','page'=>'CloseAccount'])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST',  'id' => 'gacccaForm_close']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Close Account</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>If you want to close your account, you can do so here.You will be no longer be able to access your account after doing so.</p>
      </div>
 
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
       
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              Password <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-1" placeholder="Password" required="" class="gaccca-input" /> -->
              
              {!! Form::text('new_password_repeat', null, [
	              'class'                         => 'gaccca-input',
                  'required'                      => 'required',
	              ]) !!}

            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              Close my account <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <div class="gaccca-checkbox">
                  <input type="checkbox" name="term_condition" id="yes" value="yes" required='true' />
                  <label class="gaccca-checkbox__label" for="yes">
                    <span class="gaccca-checkbox_faux"></span>
                    <span class="gaccca-form-element__label">Yes</span>
                  </label>
                </div>
              </div>
          </div>

         
        </div>

  
        {!! Form::submit('Close Account',array('class'=>'gaccca-button-save gaccca-button-save-margin','id'=>'gaccca_saveBtn_close')); !!}

   
      </div>
  
   
    </div>

{!! Form::close() !!}
@include('common.footer')