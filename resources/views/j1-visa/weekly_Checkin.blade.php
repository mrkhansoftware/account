@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Weekly Check-In</h1>

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
            <span class="gaccca-radio">
              <input type="radio" id="radio-43" value="radio-43" name="same_address" checked="" />
              <label class="gaccca-radio__label" for="radio-43">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>

              <input type="radio" id="radio-44" value="radio-44" name="same_address" />
              <label class="gaccca-radio__label" for="radio-44">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
            </span>

          </div>

        </div>

      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please provide the new address <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Current_U_S_Address__c]"  placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>
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
            <span class="gaccca-radio">
              <input type="radio" id="radio-53" value="radio-53" name="same_phone" checked="" />
              <label class="gaccca-radio__label" for="radio-53">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>

              <input type="radio" id="radio-54" value="radio-54" name="same_phone" />
              <label class="gaccca-radio__label" for="radio-54">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
            </span>

          </div>

        </div>

      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
      If no, please provide the new phone number <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onfrm[Phone_Number__c]"  value="{{isset($datas['onfrm']['Phone_Number__c'])?$datas['onfrm']['Phone_Number__c']:''}}" type="text" id="text-input-id-4" required="" class="gaccca-input" />
      
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
            <span class="gaccca-radio">
              <input type="radio" id="radio-47" value="radio-47" name="training_plan" checked="" />
              <label class="gaccca-radio__label" for="radio-47">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>

              <input type="radio" id="radio-48" value="radio-48" name="training_plan" />
              <label class="gaccca-radio__label" for="radio-48">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
            </span>

          </div>

        </div>

      </div>




      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please specify <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Training_Plan__c]"  placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Training_Plan__c'])?$datas['onfrm']['Training_Plan__c']:''}}</textarea>
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
            <span class="gaccca-radio">
              <input type="radio" id="radio-49" value="radio-49" name="same_supervisor" checked="" />
              <label class="gaccca-radio__label" for="radio-49">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>

              <input type="radio" id="radio-50" value="radio-50" name="same_supervisor" />
              <label class="gaccca-radio__label" for="radio-50">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
            </span>

          </div>

        </div>

      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please provide Name, Email Address and phone number <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Supervisor_Details__c]" placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Supervisor_Details__c'])?$datas['onfrm']['Supervisor_Details__c']:''}}</textarea>
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
            <span class="gaccca-radio">
              <input type="radio" id="radio-51" value="radio-51" name="participating" checked="" />
              <label class="gaccca-radio__label" for="radio-51">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>

              <input type="radio" id="radio-52" value="radio-52" name="participating" />
              <label class="gaccca-radio__label" for="radio-52">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
            </span>

          </div>

        </div>

      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If no, please specify <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[working_between_32_40_h_w_Explain__c]"   placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['working_between_32_40_h_w_Explain__c'])?$datas['onfrm']['working_between_32_40_h_w_Explain__c']:''}}</textarea>
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
    <span class="gaccca-radio">
      <input type="radio" id="radio-51" value="radio-51" name="participating" checked="" />
      <label class="gaccca-radio__label" for="radio-51">
        <span class="gaccca-radio_faux"></span>
        <span class="gaccca-padding-right-25">Yes</span>
      </label>

      <input type="radio" id="radio-52" value="radio-52" name="participating" />
      <label class="gaccca-radio__label" for="radio-52">
        <span class="gaccca-radio_faux"></span>
        <span class="gaccca-padding-right-25">No</span>
      </label>
    </span>

  </div>

</div>

</div>



<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If Yes, “where are you currently interning” and “when do you anticipate returning to your host company location?” <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Program_location_changed_detail__c]"  placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Program_location_changed_detail__c'])?$datas['onfrm']['Program_location_changed_detail__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Are you safe, well and healthy?: <span class="gaccca-text-required" title="required">*</span> </label>
            <span class="gaccca-radio">
              <input type="radio" id="radio-53" value="radio-53" name="safe_healthy" checked="" />
              <label class="gaccca-radio__label" for="radio-53">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>

              <input type="radio" id="radio-54" value="radio-54" name="safe_healthy" />
              <label class="gaccca-radio__label" for="radio-54">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
            </span>

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
            <span class="gaccca-radio">
              <input type="radio" id="radio-55" value="radio-55" name="same_phone" checked="" />
              <label class="gaccca-radio__label" for="radio-55">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>

              <input type="radio" id="radio-56" value="radio-56" name="same_phone" />
              <label class="gaccca-radio__label" for="radio-56">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
            </span>

          </div>

        </div>

      </div>




      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-8">
    If yes, please specify: i.e. issues with your host company, issues with cultural adjustment <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
        <textarea name="onfrm[Yes_Discuss__c]"  value=""  placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Yes_Discuss__c'])?$datas['onfrm']['Yes_Discuss__c']:''}}</textarea>
        <span class="gaccca-input-help-text"></span>
    </div>
  </div>
</div>



      
      <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>


    </div>


  </div>


{!! Form::close() !!}
@include('common.footer')