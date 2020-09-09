@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Monthly Check-In</h1>

    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>Thank you for your mandatory monthly Check-in. The next monthly Check-in will be on 01/05/2020. We will send
        you a reminder.</p>
      <p>Monthly check-ins with your sponsor, GACC California, are required by the U.S. Department of State, thus being
        a mandatory component of the J-1 program.</p>
      <p>Missing mandatory monthly check-ins can lead to termination of your J-1 program.</p>
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
        <textarea name="onfrm[Current_U_S_Address__c]"   placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>
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
        <input type="text" name="onfrm[Current_phone_number__c]"  value="{{isset($datas['onfrm']['Current_phone_number__c'])?$datas['onfrm']['Current_phone_number__c']:''}}" id="text-input-id-4" required="" class="gaccca-input" />
      
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
        <textarea name="onfrm[If_yes_please_explain__c]"  placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_please_explain__c'])?$datas['onfrm']['If_yes_please_explain__c']:''}}</textarea>
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
        <textarea name="onfrm[Supervisor_Details__c]"  placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Supervisor_Details__c'])?$datas['onfrm']['Supervisor_Details__c']:''}}</textarea>
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
        <textarea name="onfrm[Are_you_working_between_32_40_hours_week__c]"   placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Are_you_working_between_32_40_hours_week__c'])?$datas['onfrm']['Are_you_working_between_32_40_hours_week__c']:''}}</textarea>
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
        <textarea name="onfrm[If_yes_please_explain__c]"  placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_please_explain__c'])?$datas['onfrm']['If_yes_please_explain__c']:''}}</textarea>
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



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Photo <span class="gaccca-text-required" title="required">*</span> </label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input name="onfrm[If_yes_please_explain__c]"  value="{{isset($datas['onfrm']['If_yes_please_explain__c'])?$datas['onfrm']['If_yes_please_explain__c']:''}}" type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Only JPG and PNG supported, max. picture size 5 MB</span>
        </div>

      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Photo</label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input name="onfrm[If_yes_please_explain__c]"  value="{{isset($datas['onfrm']['If_yes_please_explain__c'])?$datas['onfrm']['If_yes_please_explain__c']:''}}" type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Only JPG and PNG supported, max. picture size 5 MB</span>
        </div>

      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Photo </label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Only JPG and PNG supported, max. picture size 5 MB</span>
        </div>

      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            Description of your cultural experience and photo: <span class="gaccca-text-required"
              title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <textarea name="onfrm[If_yes_please_explain__c]"  value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_please_explain__c'])?$datas['onfrm']['If_yes_please_explain__c']:''}}</textarea>
            <span class="gaccca-input-help-text">Please write at least 50 words </span>


          </div>
        </div>
      </div>


      <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>


    </div>


  </div>


{!! Form::close() !!}
@include('common.footer')