@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST',  'id' => 'gacccaForm_sitevisitform']) !!}

<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Host Company Site Visit Form</h1>




    <h2 class="gaccca-h2-padding">GACC California Site Visit Representative Information (Interviewer)</h2>
    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            First and Last Name: <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="onfrm[Name_of_Interviewer__c]"  value="{{isset($datas['onfrm']['Name_of_Interviewer__c'])?$datas['onfrm']['Name_of_Interviewer__c']:''}}" required="" class="gaccca-input" />

          </div>
        </div>
      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Mailing Address: <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <textarea name="onfrm[Interviewer_Mailing_Address__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Interviewer_Mailing_Address__c'])?$datas['onfrm']['Interviewer_Mailing_Address__c']:''}}</textarea>

          </div>
        </div>
      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Phone Number: <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="onfrm[Site_Visitor_Phone_Number__c]"  value="{{isset($datas['onfrm']['Site_Visitor_Phone_Number__c'])?$datas['onfrm']['Site_Visitor_Phone_Number__c']:''}}" required="" class="gaccca-input" />

          </div>
        </div>
      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Email Address: <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="onfrm[Interviewer_Email_Address__c]"  value="{{isset($datas['onfrm']['Interviewer_Email_Address__c'])?$datas['onfrm']['Interviewer_Email_Address__c']:''}}" required="" class="gaccca-input" />

          </div>
        </div>
      </div>




    </div>


    <h2 class="gaccca-h2-padding">GACC California Host Company (Interviewee):</h2>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Name of Host Company: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Name_of_Host_Company__c]"  value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Complete Address (include, City, State, Zip Code): <span class="gaccca-text-required"
            title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Host_Company_Complete_Address__c]"  required="" class="gaccca-textarea">{{isset($datas['onfrm']['Host_Company_Complete_Address__c'])?$datas['onfrm']['Host_Company_Complete_Address__c']:''}}</textarea>
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Name of Supervisor: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Name_of_Supervisor__c]"  value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Title/Position at Company: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Supervisor_Position__c]"  value="{{isset($datas['onfrm']['Supervisor_Position__c'])?$datas['onfrm']['Supervisor_Position__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Phone Number: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Supervisor_Phone__c]"  value="{{isset($datas['onfrm']['Supervisor_Phone__c'])?$datas['onfrm']['Supervisor_Phone__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Email Address: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Supervisor_Email__c]"  value="{{isset($datas['onfrm']['Supervisor_Email__c'])?$datas['onfrm']['Supervisor_Email__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Name of Host Company Representative conducting Site Visit (if not supervisor): <span
            class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Name_of_Host_Company_Representative__c]"  value="{{isset($datas['onfrm']['Name_of_Host_Company_Representative__c'])?$datas['onfrm']['Name_of_Host_Company_Representative__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Number of employees at training/intern site: <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[no_of_full_time_employees_at_site__c]"  value="{{isset($datas['onfrm']['no_of_full_time_employees_at_site__c'])?$datas['onfrm']['no_of_full_time_employees_at_site__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Gross Annual Revenue: <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="radio-43" value="radio-43" name="gross " checked="" />
            <label class="gaccca-radio__label" for="radio-43">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">$0 to $3 Million</span>
            </label>
          </span>
          <span class="gaccca-radio">
            <input type="radio" id="radio-44" value="radio-44" name="gross" />
            <label class="gaccca-radio__label" for="radio-44">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">$3 Million to $10 Million</span>
            </label>
          </span>
            <span class="gaccca-radio">
            <input type="radio" id="radio-44" value="radio-44" name="gross" />
            <label class="gaccca-radio__label" for="radio-44">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">$10 Million to $25 Million</span>
            </label>
            </span>
            <span class="gaccca-radio">
            <input type="radio" id="radio-44" value="radio-44" name="gross" />
            <label class="gaccca-radio__label" for="radio-44">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">$25 Million or More</span>
            </label>
          </span>

     

        </div>

      </div>

    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Nature of business/ endeavor (ie: Retail, Clothing, Restaurant, Manufacturing, Law Firm, Resort etc…): <span
            class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Nature_of_business_endeavor__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Nature_of_business_endeavor__c'])?$datas['onfrm']['Nature_of_business_endeavor__c']:''}}</textarea>

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Type of Entity: <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="radio-43" value="radio-43" name="gross " checked="" />
            <label class="gaccca-radio__label" for="radio-43">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Corporation</span>
            </label>
          </span>
          <span class="gaccca-radio">
            <input type="radio" id="radio-44" value="radio-44" name="gross" />
            <label class="gaccca-radio__label" for="radio-44">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Partnership</span>
            </label>
          </span>
          <span class="gaccca-radio">

            <input type="radio" id="radio-44" value="radio-44" name="gross" />
            <label class="gaccca-radio__label" for="radio-44">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Government/Public Sector</span>
            </label>
          </span>

          <span class="gaccca-radio">
            <input type="radio" id="radio-44" value="radio-44" name="gross" />
            <label class="gaccca-radio__label" for="radio-44">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Non Profit</span>
            </label>
          </span>
          <span class="gaccca-radio">
            <input type="radio" id="radio-44" value="radio-44" name="gross" />
            <label class="gaccca-radio__label" for="radio-44">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">other</span>
            </label>


          </span>

        </div>

      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Length of time in business: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Length_of_time_in_business__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Length_of_time_in_business__c'])?$datas['onfrm']['Length_of_time_in_business__c']:''}}</textarea>

        </div>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Length of time at this location: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Length_of_time_at_this_location__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Length_of_time_at_this_location__c'])?$datas['onfrm']['Length_of_time_at_this_location__c']:''}}</textarea>

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Is this the only location/branch of this business? <span class="gaccca-text-required"
              title="required">*</span> </label>

          <span class="gaccca-radio">
            <input type="radio" id="radio-yes" value="radio-yes" name="business" checked="" />
            <label class="gaccca-radio__label" for="radio-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>

            <input type="radio" id="radio-no" value="radio-no" name="business" />
            <label class="gaccca-radio__label" for="radio-no">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">No</span>
            </label>
          </span>


        </div>

      </div>

    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Is this the head office location? <span class="gaccca-text-required" title="required">*</span> </label>

          <span class="gaccca-radio">
            <input type="radio" id="radio-yes" value="radio-yes" name="office_location" checked="" />
            <label class="gaccca-radio__label" for="radio-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>

            <input type="radio" id="radio-no" value="radio-no" name="office_location" />
            <label class="gaccca-radio__label" for="radio-no">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">No</span>
            </label>
          </span>


        </div>

      </div>

    </div>





    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Is the office a home office? <span class="gaccca-text-required" title="required">*</span> </label>

          <span class="gaccca-radio">
            <input type="radio" id="radio-yes" value="radio-yes" name="home_office" checked="" />
            <label class="gaccca-radio__label" for="radio-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>

            <input type="radio" id="radio-no" value="radio-no" name="home_office" />
            <label class="gaccca-radio__label" for="radio-no">
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
          If yes, is the work space separate from the living area? Please describe: <span class="gaccca-text-required"
            title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Is_the_office_a_home_office__c]"  required="" class="gaccca-textarea">{{isset($datas['onfrm']['Is_the_office_a_home_office__c'])?$datas['onfrm']['Is_the_office_a_home_office__c']:''}}</textarea>

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Does the office include restrooms for employees and interns/trainees?: <span class="gaccca-text-required"
              title="required">*</span> </label>

          <span class="gaccca-radio">
            <input type="radio" id="radio-yes" value="radio-yes" name="include_restrooms" checked="" />
            <label class="gaccca-radio__label" for="radio-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>

            <input type="radio" id="radio-no" value="radio-no" name="include_restrooms" />
            <label class="gaccca-radio__label" for="radio-no">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">No</span>
            </label>
          </span>


        </div>

      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Has the company hosted Trainees/Interns before: <span class="gaccca-text-required" title="required">*</span>
          </label>

          <span class="gaccca-radio">
            <input type="radio" id="radio-yes" value="radio-yes" name="company_hosted" checked="" />
            <label class="gaccca-radio__label" for="radio-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>

            <input type="radio" id="radio-no" value="radio-no" name="company_hosted" />
            <label class="gaccca-radio__label" for="radio-no">
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
          If yes, describe the experience: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[If_yes_desc_the_hosted_T_I_experience__c]"  value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_desc_the_hosted_T_I_experience__c'])?$datas['onfrm']['If_yes_desc_the_hosted_T_I_experience__c']:''}}</textarea>

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Will the intern/trainee have his own working space/desk: <span class="gaccca-text-required"
              title="required">*</span> </label>

          <span class="gaccca-radio">
            <input type="radio" id="radio-yes" value="radio-yes" name="own_working_space" checked="" />
            <label class="gaccca-radio__label" for="radio-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>

            <input type="radio" id="radio-no" value="radio-no" name="own_working_space" />
            <label class="gaccca-radio__label" for="radio-no">
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
        Please describe the setup and the distance to the supervisor’s desk/work space (include a picture of the intern/trainee’s desk and the supervisor’s desk): <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Describe_the_setup_and_the_distance__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Describe_the_setup_and_the_distance__c'])?$datas['onfrm']['Describe_the_setup_and_the_distance__c']:''}}</textarea>

        </div>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Please describe the equipment and materials provided for the intern/trainee: <span
            class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Provide_any_of_their_own_equipment__c]"  required="" class="gaccca-textarea">{{isset($datas['onfrm']['Provide_any_of_their_own_equipment__c'])?$datas['onfrm']['Provide_any_of_their_own_equipment__c']:''}}</textarea>

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Will the intern/trainee be using any equipment that requires special training or safety procedures? <span
              class="gaccca-text-required" title="required">*</span> </label>

          <span class="gaccca-radio">
            <input type="radio" id="radio-yes" value="radio-yes" name="using_any_equipment" checked="" />
            <label class="gaccca-radio__label" for="radio-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>

            <input type="radio" id="radio-no" value="radio-no" name="using_any_equipment" />
            <label class="gaccca-radio__label" for="radio-no">
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
          If yes, please describe <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[If_yes_Describe_equipment_Training__c]"  required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_Describe_equipment_Training__c'])?$datas['onfrm']['If_yes_Describe_equipment_Training__c']:''}}</textarea>

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <table class="gaccca-host-company-table">
          <tr>
            <th></th>
            <th style="text-align: center;">Excellent</th>
            <th>Very good</th>
            <th>Good</th>
            <th>Fair</th>
            <th>Poor</th>

          </tr>
          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Appearance of Company: <span class="gaccca-text-required" title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-appearance-excellent" value="radio-appearance-excellent"
                  name="appearance_of_company" checked="" />
                <label class="gaccca-radio__label" for="radio-appearance-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-appearance-very-good" value="radio-appearance-very-good"
                  name="appearance_of_company" checked="" />
                <label class="gaccca-radio__label" for="radio-appearance-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-appearance-good" value="radio-appearance-good"
                  name="appearance_of_company" checked="" />
                <label class="gaccca-radio__label" for="radio-appearance-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-appearance-fair" value="radio-appearance-fair"
                  name="appearance_of_company" checked="" />
                <label class="gaccca-radio__label" for="radio-appearance-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-appearance-poor" value="radio-appearance-poor"
                  name="appearance_of_company" checked="" />
                <label class="gaccca-radio__label" for="radio-appearance-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>



          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Facilities/Buildings/Workspace, etc: <span class="gaccca-text-required" title="required">*</span>
              </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-facilities-excellent" value="radio-facilities-excellent" name="facilities"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-facilities-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-facilities-very-good" value="radio-facilities-very-good" name="facilities"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-facilities-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-facilities-good" value="radio-facilities-good" name="facilities"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-facilities-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-facilities-fair" value="radio-facilities-fair" name="facilities"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-facilities-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-facilities-poor" value="radio-facilities-poor" name="facilities"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-facilities-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>




          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Relativity of the company’s façade vs. the nature of the business; e.g. an office should not appear
                externally to be warehouse: <span class="gaccca-text-required" title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-relativity_of_the_company-excellent"
                  value="radio-relativity_of_the_company-excellent" name="relativity_of_the_company" checked="" />
                <label class="gaccca-radio__label" for="radio-relativity_of_the_company-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-relativity_of_the_company-very-good"
                  value="radio-relativity_of_the_company-very-good" name="relativity_of_the_company" checked="" />
                <label class="gaccca-radio__label" for="radio-relativity_of_the_company-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-relativity_of_the_company-good"
                  value="radio-relativity_of_the_company-good" name="relativity_of_the_company" checked="" />
                <label class="gaccca-radio__label" for="radio-relativity_of_the_company-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-relativity_of_the_company-fair"
                  value="radio-relativity_of_the_company-fair" name="relativity_of_the_company" checked="" />
                <label class="gaccca-radio__label" for="radio-relativity_of_the_company-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-relativity_of_the_company-poor"
                  value="radio-relativity_of_the_company-poor" name="relativity_of_the_company" checked="" />
                <label class="gaccca-radio__label" for="radio-relativity_of_the_company-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>


          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Number of desks and/or office space correlates with the # of employees reported: <span
                  class="gaccca-text-required" title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-office_space-excellent" value="radio-office_space-excellent"
                  name="office_space" checked="" />
                <label class="gaccca-radio__label" for="radio-office_space-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-office_space-very-good" value="radio-office_space-very-good"
                  name="office_space" checked="" />
                <label class="gaccca-radio__label" for="radio-office_space-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-office_space-good" value="radio-office_space-good" name="office_space"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-office_space-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-office_space-fair" value="radio-office_space-fair" name="office_space"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-office_space-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-office_space-poor" value="radio-office_space-poor" name="office_space"
                  checked="" />
                <label class="gaccca-radio__label" for="radio-office_space-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>




          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Materials and communication is being conducted in English: <span class="gaccca-text-required"
                  title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-materials_and_communication-excellent"
                  value="radio-materials_and_communication-excellent" name="materials_and_communication" checked="" />
                <label class="gaccca-radio__label" for="radio-materials_and_communication-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-materials_and_communication-very-good"
                  value="radio-materials_and_communication-very-good" name="materials_and_communication" checked="" />
                <label class="gaccca-radio__label" for="radio-materials_and_communication-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-materials_and_communication-good"
                  value="radio-materials_and_communication-good" name="materials_and_communication" checked="" />
                <label class="gaccca-radio__label" for="radio-materials_and_communication-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-materials_and_communication-fair"
                  value="radio-materials_and_communication-fair" name="materials_and_communication" checked="" />
                <label class="gaccca-radio__label" for="radio-materials_and_communication-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-materials_and_communication-poor"
                  value="radio-materials_and_communication-poor" name="materials_and_communication" checked="" />
                <label class="gaccca-radio__label" for="radio-materials_and_communication-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>


          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Facilities, structure, and staff are able to provide the Intern/Trainee with hands-on training: <span
                  class="gaccca-text-required" title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-hands_on_training-excellent" value="radio-hands_on_training-excellent"
                  name="hands_on_training" checked="" />
                <label class="gaccca-radio__label" for="radio-hands_on_training-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-hands_on_training-very-good" value="radio-hands_on_training-very-good"
                  name="hands_on_training" checked="" />
                <label class="gaccca-radio__label" for="radio-hands_on_training-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-hands_on_training-good" value="radio-hands_on_training-good"
                  name="hands_on_training" checked="" />
                <label class="gaccca-radio__label" for="radio-hands_on_training-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-hands_on_training-fair" value="radio-hands_on_training-fair"
                  name="hands_on_training" checked="" />
                <label class="gaccca-radio__label" for="radio-hands_on_training-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-hands_on_training-poor" value="radio-hands_on_training-poor"
                  name="hands_on_training" checked="" />
                <label class="gaccca-radio__label" for="radio-hands_on_training-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>




          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Appearance, professionalism, and demeanor of staff/employer <span class="gaccca-text-required"
                  title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-demeanor_of_staff-excellent" value="radio-demeanor_of_staff-excellent"
                  name="demeanor_of_staff" checked="" />
                <label class="gaccca-radio__label" for="radio-demeanor_of_staff-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-demeanor_of_staff-very-good" value="radio-demeanor_of_staff-very-good"
                  name="demeanor_of_staff" checked="" />
                <label class="gaccca-radio__label" for="radio-demeanor_of_staff-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-demeanor_of_staff-good" value="radio-demeanor_of_staff-good"
                  name="demeanor_of_staff" checked="" />
                <label class="gaccca-radio__label" for="radio-demeanor_of_staff-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-demeanor_of_staff-fair" value="radio-demeanor_of_staff-fair"
                  name="demeanor_of_staff" checked="" />
                <label class="gaccca-radio__label" for="radio-demeanor_of_staff-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-demeanor_of_staff-poor" value="radio-demeanor_of_staff-poor"
                  name="demeanor_of_staff" checked="" />
                <label class="gaccca-radio__label" for="radio-demeanor_of_staff-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>

          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Appearance of site’s neighborhood, grounds, and location <span class="gaccca-text-required"
                  title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-grounds_and_location-excellent"
                  value="radio-grounds_and_location-excellent" name="grounds_and_location" checked="" />
                <label class="gaccca-radio__label" for="radio-grounds_and_location-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-grounds_and_location-very-good"
                  value="radio-grounds_and_location-very-good" name="grounds_and_location" checked="" />
                <label class="gaccca-radio__label" for="radio-grounds_and_location-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-grounds_and_location-good" value="radio-grounds_and_location-good"
                  name="grounds_and_location" checked="" />
                <label class="gaccca-radio__label" for="radio-grounds_and_location-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-grounds_and_location-fair" value="radio-grounds_and_location-fair"
                  name="grounds_and_location" checked="" />
                <label class="gaccca-radio__label" for="radio-grounds_and_location-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-grounds_and_location-poor" value="radio-grounds_and_location-poor"
                  name="grounds_and_location" checked="" />
                <label class="gaccca-radio__label" for="radio-grounds_and_location-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>

          <tr>
            <td>
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Adequacy/accessibility of the site to public transportation <span class="gaccca-text-required"
                  title="required">*</span> </label>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-public_transportation-excellent"
                  value="radio-public_transportation-excellent" name="public_transportation" checked="" />
                <label class="gaccca-radio__label" for="radio-public_transportation-excellent">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span>
            </td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-public_transportation-very-good"
                  value="radio-public_transportation-very-good" name="public_transportation" checked="" />
                <label class="gaccca-radio__label" for="radio-public_transportation-very-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-public_transportation-good" value="radio-public_transportation-good"
                  name="public_transportation" checked="" />
                <label class="gaccca-radio__label" for="radio-public_transportation-good">
                  <span class="gaccca-radio_faux"></span>

                </label>
              </span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-public_transportation-fair" value="radio-public_transportation-fair"
                  name="public_transportation" checked="" />
                <label class="gaccca-radio__label" for="radio-public_transportation-fair">
                  <span class="gaccca-radio_faux"></span>

                </label></span></td>
            <td style="text-align: center;"><span class="gaccca-radio">
                <input type="radio" id="radio-public_transportation-poor" value="radio-public_transportation-poor"
                  name="public_transportation" checked="" />
                <label class="gaccca-radio__label" for="radio-public_transportation-poor">
                  <span class="gaccca-radio_faux"></span>
                </label></span></td>

          </tr>

        </table>
      </div>
    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            If you were seeking a Training/Internship position, would you find this company a pleasant environment in
            which to train/intern?: <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="radio-internship_position-yes" value="radio-internship_position-yes"
              name="internship_position" checked="" />
            <label class="gaccca-radio__label" for="radio-internship_position-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>
            <input type="radio" id="radio-internship_position-no" value="radio-internship_position-no"
              name="radio-internship_position-no" />
            <label class="gaccca-radio__label" for="radio-mr">
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
        Please explain and/or include additional comments: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Additional_comments__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Additional_comments__c'])?$datas['onfrm']['Additional_comments__c']:''}}</textarea>

        </div>
      </div>
    </div>
    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-poi">
          Please upload photos of the following: Exterior street view, Company logo, Exterior signage, Reception area,
          Interns work space, Communal spaces, Bathrooms. </label><br />
        <div class="gaccca-form-element__control">
          <label class="gaccca-file">
            <input name="file1"   type="file" id="myFile" name="filename" />
            <span class="gaccca-file-custom">Choose file...</span>

          </label>
        </div>

      </div>
      <button class="gaccca-button-save gaccca-button-save-margin">Add More</button>
      <br />
      <br />
    </div>

    <h2 class="gaccca-h2-padding">Please Note:</h2>
    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <p>You can sign digitally online with your mouse or on your phone with your finger.</p>
        </div>
      </div>


      <button id="gaccca_saveBtn_sitevisitform" class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>

    </div>



  </div>
{!! Form::close() !!}
@include('common.footer')