
@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'WeeklyCheckinController@store', 'method' => 'POST', 'id' => 'gacccaForm_weekly']) !!}



<div class="gaccca-main-containt">
<h1 class="gaccca-h1-padding">Weekly Check-In</h1>
    @if (isset($datas['isFormAvailable']) && $datas['isFormAvailable'])
    

<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
  <p>Due to the current circumstances and constantly changing situation regarding COVID-19, we ask that you complete a check-in once per week so we can stay up to date with all program information.</p>
  <p>Missing mandatory weekly check-ins can lead to termination of your J-1 program.</p>
  <p>This form will provide you with an easy way to update us on any changes to your internship/training.</p>
</div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Do you still live in the same US address? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Is_Current_Address_Changed__c]','obj'=>'onfrm','fieldApi'=>'Is_Current_Address_Changed__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec1")'])
                            

          </div>

        </div>

      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-hide" id='sec1'>
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please provide the new address <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Current_U_S_Address__c]"   placeholder="Enter Your Address" id='sec1Field' class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Do you still have the same US phone number? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Current_phone_number__c]','obj'=>'onfrm','fieldApi'=>'Current_phone_number__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec2")'])
                            

          </div>

        </div>

      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-hide" id='sec2'>
  <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
      If no, please provide the new phone number <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input type="text" name="onfrm[Phone_Number__c]"  value="{{isset($datas['onfrm']['Phone_Number__c'])?$datas['onfrm']['Phone_Number__c']:''}}"  id='sec2Field' class="gaccca-input" />
      
        <span class="gaccca-input-help-text"></span>
      </div>
  </div>

</div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Is your Training Plan being followed? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Is_your_Training_Plan_being_followed__c]','obj'=>'onfrm','fieldApi'=>'Is_your_Training_Plan_being_followed__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec3")'])
                            
          </div>

        </div>

      </div>


      

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-hide" id='sec3'>
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please specify <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Training_Plan__c]"   id='sec3Field' class="gaccca-textarea">{{isset($datas['onfrm']['Training_Plan__c'])?$datas['onfrm']['Training_Plan__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>





      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Do you still have the same supervisor? <span class="gaccca-text-required" title="required">*</span>
            </label>
            @include('common.radioGrp',['fieldName' =>'onfrm[Has_your_supervisor_changed__c]','obj'=>'onfrm','fieldApi'=>'Has_your_supervisor_changed__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec4")'])
                            

          </div>

        </div>

      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-hide" id="sec4">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please provide Name, Email Address and phone number <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Supervisor_Details__c]" id='sec4Field' placeholder="Enter Your Address"  class="gaccca-textarea">{{isset($datas['onfrm']['Supervisor_Details__c'])?$datas['onfrm']['Supervisor_Details__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Are you participating between 32-40 hours/week at your host company location? <span
                class="gaccca-text-required" title="required">*</span> </label>
                @include('common.radioGrp',['fieldName' =>'onfrm[Are_you_working_between_32_40_hours_week__c]','obj'=>'onfrm','fieldApi'=>'Are_you_working_between_32_40_hours_week__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"No","sec5")'])
                            
          </div>

        </div>

      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-hide" id="sec5">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please specify <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[working_between_32_40_h_w_Explain__c]" id='sec5Field'  placeholder="Enter Your Address"  class="gaccca-textarea">{{isset($datas['onfrm']['working_between_32_40_h_w_Explain__c'])?$datas['onfrm']['working_between_32_40_h_w_Explain__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>

<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

<div class="gaccca-form-element gaccca-form-element-margin">

  <div class="gaccca-form-element__control">
    <label class="gaccca-form-element__label" for="text-input-id-fn">
    Has your program location changed? I.e. home office  <span
        class="gaccca-text-required" title="required">*</span> </label>
        @include('common.radioGrp',['fieldName' =>'onfrm[Has_your_program_location_changed__c]','obj'=>'onfrm','fieldApi'=>'Has_your_program_location_changed__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"Yes","sec6")'])
          

  </div>

</div>

</div>



<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-hide" id="sec6">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If Yes, “where are you currently interning” and “when do you anticipate returning to your host company location?” <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Program_location_changed_detail__c]" id='sec6Field'   class="gaccca-textarea">{{isset($datas['onfrm']['Program_location_changed_detail__c'])?$datas['onfrm']['Program_location_changed_detail__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

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

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Is there anything you would like to discuss or talk about at this point that GACC California/IIEEX can
              help you with? <span class="gaccca-text-required" title="required">*</span> </label>
              @include('common.radioGrp',['fieldName' =>'onfrm[anything_you_would_like_to_disc__c]','obj'=>'onfrm','fieldApi'=>'anything_you_would_like_to_disc__c','required'=>'required', 'textRad'=>'textRad','myFunction'=>'showInput(this.value,"Yes", "sec7")'])
                            
          </div>

        </div>

      </div> 
 

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-hide" id="sec7">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If yes, please specify: i.e. issues with your host company, issues with cultural adjustment <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Yes_Discuss__c]" id='sec7Field' placeholder="Enter Your Address" class="gaccca-textarea">{{isset($datas['onfrm']['Yes_Discuss__c'])?$datas['onfrm']['Yes_Discuss__c']:''}}</textarea>
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





      <button id="gaccca_saveBtn_weekly" class="gaccca-button-save gaccca-button-save-margin">Submit</button>


    </div>


    @else
    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                          <div class="gaccca-form-element gaccca-form-element-margin">  
    Thank you for your mandatory monthly Check-in. The next monthly Check-in will be on &nbsp;{{$datas['nextWeeklyCheckInDate']}}. We will send you a reminder.
    </div>
    </div>
    </div>
                                                                                                         
    @endif

  </div>




{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif