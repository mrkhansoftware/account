@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])

  {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'my-profile']) !!}


  <div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">My Profile</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please provide all requested information. The provided information will be used for your visa application.
        </p>
        <p> Please make sure all information is up-to-date.</p>
      </div>
      <h2 class="gaccca-h2-padding">Personal Information</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin gaccca-has-error">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              First Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-1" placeholder="First Name" required="" class="gaccca-input" /> -->
              {!! Form::text('con[FirstName]',isset($datas['con']['FirstName'])?$datas['con']['FirstName']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
                'disabled'                      =>  $datas['con']['Profile_Updated__c']
	              ]) !!}
              <span class="gaccca-input-help-text">
              {{$datas['con']['Profile_Updated__c']?'If you like to change your name, please email us':'Please use English letters only i.e. ue instead of ü / e instead of é / ss instead of ß'}}</span>
              
             </span>
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
              Last Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-2" placeholder="Last Name" required="" class="gaccca-input" /> -->
              {!! Form::text('con[LastName]',isset($datas['con']['LastName'])?$datas['con']['LastName']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
                'disabled'                      =>  $datas['con']['Profile_Updated__c']
	              ]) !!}
              <span class="gaccca-input-help-text">
              {{$datas['con']['Profile_Updated__c']?'If you like to change your name, please email us':'Please use English letters only i.e. ue instead of ü / e instead of é / ss instead of ß'}}</span>
              
            </div>
          </div>
        </div>
  
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-3">
              Date of birth <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element gaccca-form-element-margin-date">
              <!-- <input type="text" id="datepicker" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" /> -->
              {!! Form::text('dob',isset($datas['dob'])?$datas['dob']:'', [
	              'class'                         => 'gaccca-input-date',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text"></span>
            </div>
          </div>
  
  
        </div>
  
  
   
           <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                City of birth <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <!-- <input type="text" id="text-input-id-4" placeholder="City of birth" required="" class="gaccca-input" /> -->
                {!! Form::text('con[City_Of_Birth__c]',isset($datas['con']['City_Of_Birth__c'])?$datas['con']['City_Of_Birth__c']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
                <span class="gaccca-input-help-text"></span>
              </div>
          </div>
  
        </div>
          
            
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-5">
                Country of birth <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <!-- <input type="text" id="text-input-id-5" placeholder="Country of birth" required="" class="gaccca-input" /> -->
                {!! Form::text('con[Country_Of_Birth__c]',isset($datas['con']['Country_Of_Birth__c'])?$datas['con']['Country_Of_Birth__c']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
                <span class="gaccca-input-help-text"></span>
              </div>
          </div>
  
        </div>
      </div>
      <h2 class="gaccca-h2-padding">Contact Information</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-6">
              Email <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              {!! Form::email('Email',isset($datas['con']['Email'])?$datas['con']['Email']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
                'disabled'                      =>  true
	              ]) !!}
              <span class="gaccca-input-help-text"></span>
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-7">
              Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-7" placeholder="+1" required="" class="gaccca-input" /> -->
              {!! Form::text('con[Phone]',isset($datas['con']['Phone'])?$datas['con']['Phone']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text"></span>
            </div>
          </div>
        </div>
       
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Address <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
             
                <!-- <textarea  placeholder="Enter Your Address" required="" class="gaccca-textarea"></textarea> -->
                {!! Form::textarea('con[MailingStreet]',isset($datas['con']['MailingStreet'])?$datas['con']['MailingStreet']:'', [
	              'class'                         => 'gaccca-textarea',
	              'required'                      => 'required',
	              ]) !!}
             
                <span class="gaccca-input-help-text"></span>
            </div>
          </div>
        </div>
       
       
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-9">
              City <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-9" placeholder="City" required="" class="gaccca-input" /> -->
              {!! Form::text('con[MailingCity]',isset($datas['con']['MailingCity'])?$datas['con']['MailingCity']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text"></span>
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-10">
              Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-10" placeholder="Zip Code" required="" class="gaccca-input" /> -->
              {!! Form::text('con[MailingPostalCode]',isset($datas['con']['MailingPostalCode'])?$datas['con']['MailingPostalCode']:'', [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text"></span>
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-11">
              Country <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-11" placeholder="Country" required="" class="gaccca-input" /> -->
             
            {!! Form::select('con[MailingCountryCode]', array_reverse($datas['countryOfBirth']), isset($datas['con']['MailingCountryCode'])?$datas['con']['MailingCountryCode']:'', [  'class' => 'gaccca-select','required' => 'required']) !!}
           
              <span class="gaccca-input-help-text"></span>
            </div>
          </div>
        </div>
  
        <!-- <button class="gaccca-button-save gaccca-button-save-margin">Save</button> -->
        <!-- <button id="gaccca_myBtn">Open Modal</button> -->

        {!! Form::submit('Save',array('class'=>'gaccca-button-save gaccca-button-save-margin')); !!}
  
      </div>
    </div>



    {!! Form::close() !!}



    @include('common.footer')
