@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Monthly Check-In','page'=>'monthly_Checkin','parent_page'=>'J1 Program'])

{!! Form::open(['action' => 'MonthlyCheckinController@store', 'files' => true,'method' => 'POST', 'id' => 'gacccaForm_mc']) !!}
<input type="hidden" name="lastNameFirstName"  value="{{isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:''}}" />
<input type="hidden" name="applicantId"  value="{{isset($datas['ap']['Id'])?$datas['ap']['Id']:''}}" />
<input type="hidden" name="NewGdriveID__c"  value="{{isset($datas['ap']['NewGdriveID__c'])?$datas['ap']['NewGdriveID__c']:''}}" />
<input type="hidden" name="Google_Drive_Evaluation_Form__c"  value="{{isset($datas['ap']['Google_Drive_Evaluation_Form__c'])?$datas['ap']['Google_Drive_Evaluation_Form__c']:''}}" />
<input type="hidden" name="onfrmId"  value="{{isset($datas['onfrm']['Id'])?$datas['onfrm']['Id']:''}}" />
<input type="hidden" name="Contact__c"  value="{{isset($datas['contID'])?$datas['contID']:''}}" />

<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Monthly Check-In</h1>
    @if (isset($datas['isFormAvailable']) && $datas['isFormAvailable'])
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>Monthly check-ins with your sponsor, GACC California, are required by the U.S. Department of State, thus being a mandatory component of the J-1 program.</p>
      <p>Missing mandatory monthly check-ins can lead to the termination of your J-1 program.</p>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Do you still live in the same US address? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Is_Current_Address_Changed__c]','obj'=>'onfrm','fieldApi'=>'Is_Current_Address_Changed__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec1")'])


          </div>

        </div>

      </div>



      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-hide" id='sec1'>

  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please provide the new address <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Current_U_S_Address__c]"    id='sec1Field' class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>



      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Do you still have the same US phone number? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Current_phone_number__c]','obj'=>'onfrm','fieldApi'=>'Current_phone_number__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec2")'])


          </div>

        </div>

      </div>


      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-hide" id='sec2'>
  <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
      If no, please provide the new phone number <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input type="text" name="onfrm[Phone_Number__c]"  value="{{isset($datas['onfrm']['Phone_Number__c'])?$datas['onfrm']['Phone_Number__c']:''}}"  id='sec2Field' class="gaccca-input" />

        <span class="gaccca-input-help-text"></span>
      </div>
  </div>

</div>

      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Is your Training Plan being followed? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Is_your_Training_Plan_being_followed__c]','obj'=>'onfrm','fieldApi'=>'Is_your_Training_Plan_being_followed__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec3")'])

          </div>

        </div>

      </div>




      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-hide" id='sec3'>

  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please specify <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Training_Plan__c]"   id='sec3Field' class="gaccca-textarea">{{isset($datas['onfrm']['Training_Plan__c'])?$datas['onfrm']['Training_Plan__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>





      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Do you still have the same supervisor? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Has_your_supervisor_changed__c]','obj'=>'onfrm','fieldApi'=>'Has_your_supervisor_changed__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec4")'])


          </div>

        </div>

      </div>



      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-hide" id="sec4">

  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please provide Name, Email Address and phone number <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Supervisor_Details__c]" id='sec4Field'   class="gaccca-textarea">{{isset($datas['onfrm']['Supervisor_Details__c'])?$datas['onfrm']['Supervisor_Details__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>


      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Are you participating between 32-40 hours/week at your host company location? <span
                class="gaccca-text-required" title="required">*</span> </label>
                @include('common.radioGrp',['fieldName' =>'onfrm[Are_you_working_between_32_40_hours_week__c]','obj'=>'onfrm','fieldApi'=>'Are_you_working_between_32_40_hours_week__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec5")'])

          </div>

        </div>

      </div>



      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-hide" id="sec5">

  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please specify <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[working_between_32_40_h_w_Explain__c]" id='sec5Field'    class="gaccca-textarea">{{isset($datas['onfrm']['working_between_32_40_h_w_Explain__c'])?$datas['onfrm']['working_between_32_40_h_w_Explain__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>



      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Are you safe, well and healthy?: <span class="gaccca-text-required" title="required">*</span> </label>
              @include('common.radioGrp',['fieldName' =>'onfrm[Are_you_safe_well_and_healthy__c]','obj'=>'onfrm','fieldApi'=>'Are_you_safe_well_and_healthy__c','required'=>'required', 'textRad'=>'textRad'])


          </div>
          <span class="gaccca-input-help-text">
            *If you are not safe, well or healthy, please contact GACC California immediately on our 24-Hour Support
            Line 888-936-2489. You may also contact us by email us at visa@gaccca.org We want to hear from you and help
            you right away.
          </span>

        </div>

      </div>

      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Is there anything you would like to discuss or talk about at this point that GACC California/IIEEX can
              help you with? <span class="gaccca-text-required" title="required">*</span> </label>
              @include('common.radioGrp',['fieldName' =>'onfrm[anything_you_would_like_to_disc__c]','obj'=>'onfrm','fieldApi'=>'anything_you_would_like_to_disc__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"Yes", "sec6")'])

          </div>

        </div>

      </div>


      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-hide" id="sec6">

  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If yes, please specify: i.e. issues with your host company, issues with cultural adjustment <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Yes_Discuss__c]" id='sec6Field'  class="gaccca-textarea">{{isset($datas['onfrm']['Yes_Discuss__c'])?$datas['onfrm']['Yes_Discuss__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>



      <h2 class="gaccca-h2-padding">Share your cultural experience!</h2>

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please share a photo of a cultural activity you have participated in during this past month.</p>
        <p>Please note: Having cultural experience is a main part of any J-1 program!</p>
        <p>A cultural activity could be anything that you’ve experienced in the US that allowed you to learn more and
          understand American culture.This can include different sports activities or games, different places you have
          seen, or events you have attended such as work gatherings, festivals, movie nights, surprising small things
          etc. Additional photos are welcome.</p>
      </div>



      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Photo <span class="gaccca-text-required" title="required">*</span> </label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input name="fileIn1"   type="file" required='required'/>
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Only JPG and PNG supported, max. picture size 5 MB</span>
        </div>

      </div>

      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Photo</label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
            <input name="fileIn2"   type="file" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Only JPG and PNG supported, max. picture size 5 MB</span>
        </div>

      </div>


      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Photo </label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
            <input name="fileIn3"   type="file" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Only JPG and PNG supported, max. picture size 5 MB</span>
        </div>

      </div>


      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            Description of your cultural experience and photo: <span class="gaccca-text-required"
              title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <textarea name="onfrm[Activity_Description__c]"  value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Activity_Description__c'])?$datas['onfrm']['Activity_Description__c']:''}}</textarea>
            <span class="gaccca-input-help-text">Please write at least 50 words </span>


          </div>
        </div>
      </div>


      <button id="gaccca_saveBtn_mc" class="gaccca-button-save gaccca-button-save-margin">Submit</button>


    </div>
    @else
    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

                        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
                          <div class="gaccca-form-element gaccca-form-element-margin">
    
    Thank you for your mandatory monthly Check-in. The next monthly Check-in will be on &nbsp;{{$datas['nextMonthlyCheckInDate']}}. We will send you a reminder.


    </div>
    </div>
    </div>

    @endif

  </div>


{!! Form::close() !!}
@include('common.footer')

@else
   
<p>
Permission denied! An error occurred.
</p>
<p>
Your login email is: {{isset($datas['con']['Email'])?$datas['con']['Email']:''}}
</p>
<p>
Please make a screenshot of this page and send it to info@iieex.org with short notes.
</p>
<p>
Try to login in again on this page <a href='https://account.iieex.org'>https://account.iieex.org</a> and click on the menu on the page you are looking for.
</p>

   

  @endif
