@include('common.header')

{!! Form::open(['action' => 'ChangePasswordController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'password']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Password</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>You can change your password</p>
      </div>
  
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
       
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              Old Password <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-1" placeholder="Old Password" required="" class="gaccca-input" /> -->
              
              {!! Form::text('old_password', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}

            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              New Password <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-1" placeholder="New Password" required="" class="gaccca-input" /> -->

              {!! Form::text('new_password', null, [
	              'class'                         => 'gaccca-input',
                  'required'                      => 'required',
                  'id'                            => 'new_password'
	              ]) !!}

            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              New Password Repeat <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-1" placeholder="New Password Repeat" required="" class="gaccca-input" /> -->
              {!! Form::text('new_password_repeat', null, [
	              'class'                         => 'gaccca-input',
                  'required'                      => 'required',
                  'data-parsley-equalto'          => '#new_password'
	              ]) !!}
            </div>
          </div>
        </div>
  
        {!! Form::submit('Change Password',array('class'=>'gaccca-button-save gaccca-button-save-margin')); !!}

     
      </div>
  
   
    </div>

{!! Form::close() !!}
@include('common.footer')