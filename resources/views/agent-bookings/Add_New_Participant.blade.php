@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Add New Participant</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>  If you want to add a new Participant to our systems, please use the form below.</p>
        <p>  The new participant will receive later after an internal reviewing his own login.  </p>
        <p> After successful submitting a new participant, go back to your <a href="#"> participant list </a> an click “Participant Account” to access the participants account for submitting his data. </p>
  
      </div>
    
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
          <div class="gaccca-form-element gaccca-form-element-margin">

            <div class="gaccca-form-element__control">
                <label class="gaccca-form-element__label" for="text-input-id-fn">
                    Register for <span class="gaccca-text-required" title="required">*</span> </label> 
                <span class="gaccca-radio">
                  <input type="radio" id="radio-43" value="radio-43" name="default" checked="" />
                  <label class="gaccca-radio__label" for="radio-43">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">New Customer</span>
                  </label>

                  <input type="radio" id="radio-44" value="radio-44" name="default" />
                  <label class="gaccca-radio__label" for="radio-44">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">Existing Customer</span>
                  </label>
                </span>
               
              </div>

          </div>
           
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-fn">
                First Name <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" name="FirstName" value="{{isset($datas['FirstName'])?$datas['FirstName']:''}}" id="text-input-id-fn" placeholder="First Name" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
              Last Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="LastName" value="{{isset($datas['LastName'])?$datas['LastName']:''}}" type="text" id="text-input-id-2" placeholder="Last Name" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-3">
                Email <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="email" value="{{isset($datas['email'])?$datas['email']:''}}"  type="text" id="text-input-id-3" placeholder="Email" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input  name="con[Phone]" value="{{isset($datas['con']['Phone'])?$datas['con']['Phone']:''}}"  type="text" id="text-input-id-4" placeholder="Phone Number" required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">Please always provide your country code</span>
              </div>
            </div>
          </div>
    
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-5">
              Date of birth <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element-date">
              <input name="dob" value="{{isset($datas['dob'])?$datas['dob']:''}}"  type="text" id="new_participant_dob" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
            </div>
          </div>
  
  
        </div>
  
  
   
        
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Address <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <textarea name="con[MailingStreet]" value="{{isset($datas['con']['MailingStreet'])?$datas['con']['MailingStreet']:''}}"  placeholder="Enter Your Address" required="" class="gaccca-textarea"></textarea>
              </div>
            </div>
          </div>
         
         
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-9">
                City <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="con[MailingCity]" value="{{isset($datas['con']['MailingCity'])?$datas['con']['MailingCity']:''}}"  type="text" id="text-input-id-9" placeholder="City" required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">Please use English letters only i.e. ue instead of ü / e instead of é / ss instead of ß</span>
              </div>
            </div>
          </div>
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-10">
                Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="con[MailingPostalCode]" value="{{isset($datas['con']['MailingPostalCode])?$datas['con']['MailingPostalCode]:''}}"  type="text" id="text-input-id-10" placeholder="Zip Code" required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
              </div>
            </div>
          </div>
         
         
         
         
          <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">Country<span class="gaccca-text-required" title="required">*</span></label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                    <select class="gaccca-select" id="select-01">                      
                      <option>select</option>
                      <option value="1">123</option>
                    
                    </select>
                  </div>
                </div>
              </div>
        </div>
         
         
          <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>

        
      </div>
      
     
    </div>

{!! Form::close() !!}
@include('common.footer')