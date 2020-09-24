@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])

{!! Form::open(['action' => 'DS7002TrainigsplanAgentController@store', 'method' => 'POST',  'id' => 'ds-7002-plan']) !!}




<div class="gaccca-main-containt">
<h1 class="gaccca-h1-padding">DS-7002 Training Plan</h1>
<input type="hidden" name='EncId'  value="{{$datas['EncId']}}"/>
                  
<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
  <p>The DS-7002 Training/Internship Placement Plan is a document issued by the US Department of State which serves as an outline for the program's goals and objectives. It includes the details of the position and informs both parties of the expectations for the program. Please complete all sections below for review by a GACC California staff member. Please always save your entries by using the blue "Save Form" button on the left side; otherwise, your changes will be lost.</p>
  <p>The plan should be as specific as possible and be individualized for your participant. In some cases, the plan must include multiple phases. Each phase must build upon the previous phase to show a progression in the training/internship.</p>
  <p>The plan should not contain any bullet points and Abbreviations should be written out once.</p>
  <p>Please use the sample Training Plans that we have provided as an inspiration and orientation.</p>
  <p>Please note, you won't need to sign the document now. You will receive this completed document as a PDF via email by GACC California later for signing.</p>
</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  <div class="gaccca-form-element gaccca-form-element-margin">
    <p> Applicant: {{$datas['appli']['Contact__r']['Name']}}</p>
    <h4>Complete your changes until: {{$datas['DeadlineForHostCompany']}} </h4>
  </div>
</div>


<h2 class="gaccca-h2-padding">SECTION 1: ADDITIONAL EXCHANGE VISITOR INFORMATION</h2>

<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-fn">
        Trainee/Intern Name (Surname/Primary, Given Name(s)) <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Name_of_Intern__c]" value="{{isset($datas['onForm']['Name_of_Intern__c'])?$datas['onForm']['Name_of_Intern__c']:''}}" type="text" id="text-input-id-fn"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        E-mail Address </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Email_Address__c]" value="{{isset($datas['onForm']['Email_Address__c'])?$datas['onForm']['Email_Address__c']:''}}" type="text" id="text-input-id-3"  class="gaccca-input" />


      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Experience in Field (number of years) </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Experience_in_Field_number_of_years__c]" value="{{isset($datas['onForm']['Experience_in_Field_number_of_years__c'])?$datas['onForm']['Experience_in_Field_number_of_years__c']:''}}" type="text" id="text-input-id-3"  class="gaccca-input" />


      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Current Field of Study/Profession </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Current_Field_of_Study_Profession__c]" value="{{isset($datas['onForm']['Current_Field_of_Study_Profession__c'])?$datas['onForm']['Current_Field_of_Study_Profession__c']:''}}" type="text" id="text-input-id-3"  class="gaccca-input" />


      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Date Awarded or Expected </label>
      <div class="gaccca-form-element__control">
        <input name="Date_Awarded" value="{{isset($datas['Date_Awarded'])?$datas['Date_Awarded']:''}}" type="text"   class="gaccca-input-date" />


      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Program Sponsor </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Program_Sponsor__c]" value="{{isset($datas['onForm']['Program_Sponsor__c'])?$datas['onForm']['Program_Sponsor__c']:''}}" type="text" id="text-input-id-3"  class="gaccca-input" />


      </div>
    </div>
  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="select-tod">Program Category
        <span class="gaccca-text-required" title="required">*</span>
      </label>
      <div class="gaccca-form-element__control">
        <div class="gaccca-select_container">
          <!-- <select class="gaccca-select" id="select-tod">                      
                  <option>select</option>
                  
                </select> -->

                {!! Form::select('onForm[Program_Category__c]', array_reverse($datas['programCategory']), isset($datas['onForm']['Program_Category__c'])?$datas['onForm']['Program_Category__c']:'', [  'class' => 'gaccca-select',]) !!}

        </div>
      </div>
    </div>

  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Occupational Category </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Occupational_Category__c]" value="{{isset($datas['onForm']['Occupational_Category__c'])?$datas['onForm']['Occupational_Category__c']:''}}" type="text" id="text-input-id-3"  class="gaccca-input" />


      </div>
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Type of Degree or Certificate or Certificate </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Type_of_Degree_or_Certificate__c]" value="{{isset($datas['onForm']['Type_of_Degree_or_Certificate__c'])?$datas['onForm']['Type_of_Degree_or_Certificate__c']:''}}" type="text" id="text-input-id-3"  class="gaccca-input" />


      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Training/Internship Dates from </label>
      <div class="gaccca-form-element__control">
        <input name="trainingDates_From" value="{{isset($datas['trainingDates_From'])?$datas['trainingDates_From']:''}}" type="text"   class="gaccca-input-date" />


      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Training/Internship Dates to </label>
      <div class="gaccca-form-element__control">
        <input name="trainingDates_to" value="{{isset($datas['trainingDates_to'])?$datas['trainingDates_to']:''}}" type="text"   class="gaccca-input-date" />


      </div>
    </div>
  </div>

</div>




<h2 class="gaccca-h2-padding">SECTION 2: SITE OF ACTIVITY INFORMATION</h2>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-fn">
        Organization Name <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Organization_Name__c]" value="{{isset($datas['onForm']['Organization_Name__c'])?$datas['onForm']['Organization_Name__c']:''}}" type="text" id="text-input-id-fn"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
        Address <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Address__c]" value="{{isset($datas['onForm']['Address__c'])?$datas['onForm']['Address__c']:''}}" type="text" id="text-input-id-3"  class="gaccca-input gaccca-required" />


      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        Suite </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Suite__c]" value="{{isset($datas['onForm']['Suite__c'])?$datas['onForm']['Suite__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input" />

      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        City
        <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Organization_City__c]" value="{{isset($datas['onForm']['Organization_City__c'])?$datas['onForm']['Organization_City__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="select-tod">State
        <span class="gaccca-text-required" title="required">*</span>
      </label>
      <div class="gaccca-form-element__control">
        <div class="gaccca-select_container">

      
          {!! Form::select('onForm[State1__c]', array_reverse($datas['statePick']), isset($datas['onForm']['State1__c'])?$datas['onForm']['State1__c']:'', [  'class' => 'gaccca-select gaccca-required']) !!}

          <!-- <select class="gaccca-select" id="select-tod">                      
                  <option>select</option>
                  
                </select> -->
        </div>
      </div>
    </div>

  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Organization_Zip_Code__c]" value="{{isset($datas['onForm']['Organization_Zip_Code__c'])?$datas['onForm']['Organization_Zip_Code__c']:''}}" type="text" id="text-input-id-10" placeholder="Zip Code"  class="gaccca-input gaccca-required" />
      </div>
    </div>
  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        Website URL <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Website_URL__c]" value="{{isset($datas['onForm']['Website_URL__c'])?$datas['onForm']['Website_URL__c']:''}}" type="text" id="text-input-id-10"  class="gaccca-input gaccca-required" />
      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        Employer ID Number (EIN) <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Employer_ID_Number_EIN__c]" value="{{isset($datas['onForm']['Employer_ID_Number_EIN__c'])?$datas['onForm']['Employer_ID_Number_EIN__c']:''}}" type="text" id="text-input-id-10"  class="gaccca-input gaccca-required" />
        <span class="gaccca-input-help-text">9 Digit Number</span>
      </div>
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        Exchange Visitor Hours Per Week <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Exchange_Visitor_Hours_Per_Week__c]" value="{{isset($datas['onForm']['Exchange_Visitor_Hours_Per_Week__c'])?$datas['onForm']['Exchange_Visitor_Hours_Per_Week__c']:''}}" type="text" id="text-input-id-10"  class="gaccca-input gaccca-required" />
        <span class="gaccca-input-help-text"> min 32 hours, max. 40 hours per week</span>
      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" >
          Stipend <span class="gaccca-text-required" title="required">*</span> </label>

        <!-- <span class="gaccca-radio">
                        <input type="radio" id="radio-gross-no" value="radio-gross-no" name="gross" checked="" />
                        <label class="gaccca-radio__label" for="radio-gross-no">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">No</span>
                        </label>
                        <input type="radio" id="radio-gross-yes" value="radio-gross-yes" name="gross" />
                        <label class="gaccca-radio__label" for="radio-gross-yes">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">Yes</span>
                        </label>
                      </span> -->

                   

        @include('common.radioGrp',['fieldName' =>'stipend','obj'=>'onForm','fieldApi'=>'Stipend__c','className'=>' gaccca-required ', 'textRad'=>'Yes'])


      </div>

    </div>

  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        If Yes, how much?  </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[stipend_amount_per_hour_week_month__c]" value="{{isset($datas['onForm']['stipend_amount_per_hour_week_month__c'])?$datas['onForm']['stipend_amount_per_hour_week_month__c']:''}}" type="text" id="text-input-id-10"  class="gaccca-input" />
        <span class="gaccca-input-help-text">USD/h or USD/months</span>
      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        Non-Monetary Compensation Value <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Non_Monetary_Compensation_Value__c]" value="{{isset($datas['onForm']['Non_Monetary_Compensation_Value__c'])?$datas['onForm']['Non_Monetary_Compensation_Value__c']:''}}" type="text" id="text-input-id-10"  class="gaccca-input gaccca-required" />
        <span class="gaccca-input-help-text">example: accommodation, transportation, meals etc</span>
      </div>
    </div>
  </div>






  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Workers' Compensation Policy <span class="gaccca-text-required" title="required">*</span> </label>

        @include('common.radioGrp',['fieldName' =>'policy','obj'=>'onForm','fieldApi'=>'Workers_Compensation_Policy__c', 'className'=>' gaccca-required ',  'textRad'=>'Yes'])

      </div>

    </div>

  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        If so, Name of Carrier <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[If_so_Name_of_Carrier__c]" value="{{isset($datas['onForm']['If_so_Name_of_Carrier__c'])?$datas['onForm']['If_so_Name_of_Carrier__c']:''}}" type="text" id="text-input-id-10"  class="gaccca-input" />
        <span class="gaccca-input-help-text">Name of the Workers compensation Insurer</span>
      </div>
    </div>
  </div>






  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Does your Workers' Compensation policy cover exchange Visitors? <span class="gaccca-text-required" title="required">*</span> </label>


        <span class="gaccca-radio">
          <input type="radio" id="radio-policy-yes" value="Yes" class='gaccca-required' name="compensation_Policy"  {{ (isset($datas['onForm']['Does_your_Workers_Compensation_policy_c__c']) && $datas['onForm']['Does_your_Workers_Compensation_policy_c__c']=="Yes")? "checked" : "" }} />
          <label class="gaccca-radio__label" for="radio-policy-yes">
            <span class="gaccca-radio_faux"></span>
            <span>Yes</span>
          </label>
       
          <input type="radio" id="radio-policy-exempt" value="No, exempt" class='gaccca-required' name="compensation_Policy"  {{ (isset($datas['onForm']['Does_your_Workers_Compensation_policy_c__c']) && $datas['onForm']['Does_your_Workers_Compensation_policy_c__c']=="No, exempt")? "checked" : "" }} />
          <label class="gaccca-radio__label" for="radio-policy-exempt">
            <span class="gaccca-radio_faux"></span>
            <span>No, exempt</span>
          </label>
       
          <input type="radio" id="radio-policy-equivalent" class='gaccca-required' value="No, but equivalent coverage" name="compensation_Policy"  {{ (isset($datas['onForm']['Does_your_Workers_Compensation_policy_c__c']) && $datas['onForm']['Does_your_Workers_Compensation_policy_c__c']=="No, but equivalent coverage")? "checked" : "" }} />
          <label class="gaccca-radio__label" for="radio-policy-equivalent">
            <span class="gaccca-radio_faux"></span>
            <span>No, but equivalent coverage</span>
          </label>
        </span>




      </div>

    </div>

  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-10">
        Number of Fulltime Employees Onsite at Location <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Number_of_Fulltime_Employees_Onsite_at_L__c]" value="{{isset($datas['onForm']['Number_of_Fulltime_Employees_Onsite_at_L__c'])?$datas['onForm']['Number_of_Fulltime_Employees_Onsite_at_L__c']:''}}" type="text" id="text-input-id-10"  class="gaccca-input gaccca-required" />
        <span class="gaccca-input-help-text">Name of the Workers compensation Insurer</span>
      </div>
    </div>
  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Annual Revenue <span class="gaccca-text-required" title="required">*</span> </label>
        <span class="gaccca-radio">
          <input type="radio" id="radio-policy-three-million" class='gaccca-required'  value="$0 to $3 Million" name="Annual_Revenue"  {{ (isset($datas['onForm']['Annual_Revenue__c']) && $datas['onForm']['Annual_Revenue__c']=="$0 to $3 Million")? "checked" : "" }} />
          <label class="gaccca-radio__label" for="radio-policy-three-million">
            <span class="gaccca-radio_faux"></span>
            <span>$0 to $3 Million</span>
          </label>
        
          <input type="radio" id="radio-policy-ten-million" class='gaccca-required'  value="$3 Million to $10 Million" name="Annual_Revenue"  {{ (isset($datas['onForm']['Annual_Revenue__c']) &&  $datas['onForm']['Annual_Revenue__c']=="3 Million to $10 Million")? "checked" : "" }} />
          <label class="gaccca-radio__label" for="radio-policy-ten-million">
            <span class="gaccca-radio_faux"></span>
            <span>3 Million to $10 Million</span>
          </label>
        
          <input type="radio" id="radio-policy-twentyfive-million" class='gaccca-required'  value="$10 Million to $25 Million" name="Annual_Revenue"  {{ (isset($datas['onForm']['Annual_Revenue__c']) &&  $datas['onForm']['Annual_Revenue__c']=="$10 Million to $25 Million")? "checked" : "" }} />
          <label class="gaccca-radio__label" for="radio-policy-twentyfive-million">
            <span class="gaccca-radio_faux"></span>
            <span>$10 Million to $25 Million</span>
          </label>
        
          <input type="radio" id="radio-policy-more-million" class='gaccca-required'  value="$25 Million or More" name="Annual_Revenue"  {{ (isset($datas['onForm']['Annual_Revenue__c']) && $datas['onForm']['Annual_Revenue__c']=="$25 Million or More")? "checked" : "" }} />
          <label class="gaccca-radio__label" for="radio-policy-more-million">
            <span class="gaccca-radio_faux"></span>
            <span>
              $25 Million or More
            </span>
          </label>
        </span>

      </div>

    </div>

  </div>



</div>



<h2 class="gaccca-h2-padding">SECTION 3: CERTIFICATIONS</h2>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <p>Trainee/Intern - I certify that:</p>
      <ul>
        <li>I have reviewed, understand, and will follow this Training/Internship Placement Plan (T/IPP);</li>
        <li>I am entering into this Exchange Visitor Program in order to participate as a Trainee or Intern as delineated in this T/IPP and not simply to engage in labor or work within the United States.</li>
        <li>I understand that the intent of the Exchange Visitor Program is to allow me to enhance my skills and gain exposure to U.S. culture and business in a way that will be useful to me when I return home upon completion of my program.</li>
        <li>I understand that my internship/training will take place only at the organization listed on this T/IPP and that working at another organization while on the Exchange Visitor Program is prohibited.</li>
        <li>I will contact the Sponsor at the earliest available opportunity regarding any concerns, changes in, or deviations from this T/IPP.</li>
        <li>I will respond in a timely way to all inquiries and monitoring activities of my sponsor.</li>
        <li>I will follow all of my sponsor's guidelines required for my participation in my program.</li>
        <li>I will contact the U.S. Department of State's Bureau of Educational and Cultural Affairs (ECA) at the earliest possible opportunity if I believe that my sponsor or supervisor (as set forth on page 3, section 4), is not providing me with a legitimate internship or training, as delineated on my T/IPP; and</li>
        <li>I declare and affirm under penalty of perjury that the statements and information made herein are true and correct to the best of my knowledge, information and belief. The law provides severe penalties for knowingly and willfully falsifying or concealing a material fact, or using any false document in the submission of this form.</li>
      </ul>

      <p>Sponsor-</p>
      <ul>
        <li>I have reviewed, understand, and will ensure that the Supervisor (as set forth on page 3, section 4) follows this Training/Internship Placement Plan (T/IPP) regarding the Trainee or Intern listed above;</li>
        <li>I will notify the designated U.S. Department of State's Bureau of Educational and Cultural Affairs (ECA) at the earliest available opportunity regarding any concerns about, changes in, or deviations from this Training/Internship Placement Plan (T/IPP), including, but not limited to, changes of Supervisor or host organization;</li>
        <li>I will adhere to all applicable regulatory provisions that govern this program (see 22 CFR Part 62), including, but are not limited to, the following:</li>
        <li>I will ensure that the Trainee or Intern named in this T/IPP receives continuous on-site supervision and mentoring by experienced and knowledgeable staff;</li>
        <li>b. I have confirmed with the Supervisor or host organization representative that sufficient resources, plant, equipment, and trained personnel will be available to provide the specified training or internship program set forth in this T/IPP;</li>
        <li>I will ensure that the Trainee or Intern named in this T/IPP obtains skills, knowledge, and competencies through structured and guided activities such as classroom training, seminars, rotation through several departments, on-the-job training, attendance at conferences, and similar learning activities, as appropriate in specific circumstances;</li>
        <li>I will ensure that the Trainee or Intern named in this T/IPP does not displace full-or part-time temporary or permanent American workers or serve to fill a labor needed and ensure that the position that the Trainee or Intern fills exists primarily to assist the Trainee or Intern in achieving the objectives of his or her participation in this training or internship program;</li>
        <li>I certify that this training or internship meets all of the requirements of the Fair Labor Standards Act, as amended (29 U.S.C. 201 et seq.). I also certify that training or internships in the field of agriculture meet all requirements of the Migrant and Seasonal Worker Protection Act, as amended (29 U.S.C. 1801 et seq.)</li>
        <li>I will notify the Department of State if I receive information regarding a serious problem or controversy involving the Trainee or Intern named in this T/IPP that could be expected to bring the Department of State, the Exchange Visitor Program, or the Sponsor's exchange visitor program into notoriety or disrepute; and</li>
        <li>I declare and affirm under penalty of perjury that the statements and information made herein are true and correct to the best of my knowledge, information and belief. The law provides severe penalties for knowingly and willfully falsifying or concealing a material fact, or using any false document in the submission of this form.</li>

      </ul>




    </div>
  </div>


</div>



<h2 class="gaccca-h2-padding">SECTION 4: TRAINING/INTERNSHIP PLACEMENT PLAN</h2>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <p>Each Training/Internship Placement Plan should cover a definite period of time and should consist of definite phases of training or tasks performed with a specific objective for each phase. The plan must also contain information on how the trainees/interns will accomplish those objectives (e.g. classes, individual instruction, shadowing). Each phase must build upon the previous phase to show a progression in the training/internship. Depending on the length of the internship/training, multiple phases are needed.</p>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        Surname/Primary, Given Name(s) (must match passport name) </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Surname__c]" value="{{isset($datas['onForm']['Surname__c'])?$datas['onForm']['Surname__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        Main Program Supervisor/POC at Host Organization </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Main_Program_Supervisor__c]" value="{{isset($datas['onForm']['Main_Program_Supervisor__c'])?$datas['onForm']['Main_Program_Supervisor__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input gaccca-required" />
        <span class="gaccca-input-help-text">
          Primary Supervisor at Site of Training
        </span>
      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        Title </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[TITLE__c]" value="{{isset($datas['onForm']['TITLE__c'])?$datas['onForm']['TITLE__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        Supervisor Phone </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Supervisor_Phone__c]" value="{{isset($datas['onForm']['Supervisor_Phone__c'])?$datas['onForm']['Supervisor_Phone__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        Supervisor Contact FAX <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Supervisor_Contact_FAX__c]" value="{{isset($datas['onForm']['Supervisor_Contact_FAX__c'])?$datas['onForm']['Supervisor_Contact_FAX__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-4">
        Supervisor Contact Email <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onForm[Supervisor_Email__c]" value="{{isset($datas['onForm']['Supervisor_Email__c'])?$datas['onForm']['Supervisor_Email__c']:''}}" type="text" id="text-input-id-4"  class="gaccca-input gaccca-required" />

      </div>
    </div>
  </div>





</div>




<h2 class="gaccca-h2-padding"> PHASE INFORMATION</h2>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <p>The phase information outlines the goals and objectives of the intended program. The number of phases is dependent on the type and length of program: up to 6 months= 1-2 phases; up to 9 months= 2-3 phases; up to 12 months= 3-4 phases; up to 18 months= 4-5 phases.
        {{ count($datas['DSPhaseListwrap'])}}
      </p>
    </div>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



    <div class="gaccca-form-element  gaccca-form-element-margin">

      <div class="gaccca-tab">

        @for ($i = 1; $i <= count($datas['DSPhaseListwrap']); $i++) <span id="phase_btn_{{$i}}" class="gaccca-tablinks" onclick="gacccaScriptContentTab(event, 'phase_btn_{{$i}}', 'phase__{{$i}}'); return false;">Phase {{$i}}</span>
          @endfor


          <!-- <span id="your_script_btn" class="gaccca-tablinks" onclick="gacccaScriptContentTab(event, 'your_script_btn', 'your_script'); return false;">Phase 1</span>
                  <span id="phase_btn_two" class="gaccca-tablinks" onclick="gacccaScriptContentTab(event, 'phase_btn_two', 'your_script_two'); return false;">Phase 2</span> -->




      </div>






      @for($i = 0; $i <= (count($datas['DSPhaseListwrap'])-1); $i++) <div id="phase__{{$i+1}}" class="gaccca-tabcontent">


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Phase </label>
            <div class="gaccca-form-element__control">
            <input name="DSPhaseListwrap[{{$i}}][DSPhase][Id]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Id'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Id']:''}}" type="hidden"  />

              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Phase__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Phase__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Phase__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},phase{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>





        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Phase Name <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Phase_Name__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Phase_Name__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Phase_Name__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},phase_name{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>




        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Phase Location <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Name]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Name'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Name']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},phase_location{{$i}}"  class="gaccca-input " />
            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Phase Site Address </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Phase_Site_Address__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Phase_Site_Address__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Phase_Site_Address__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},phase_adress{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Start Date of Phase <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][startDate]" value="{{isset($datas['DSPhaseListwrap'][$i]['startDate'])?$datas['DSPhaseListwrap'][$i]['startDate']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},startdate{{$i}}"  class="gaccca-input-date " />

            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              End Date of Phase <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][endDate]" value="{{isset($datas['DSPhaseListwrap'][$i]['endDate'])?$datas['DSPhaseListwrap'][$i]['endDate']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},enddate{{$i}}"  class="gaccca-input-date" />

            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Training/Internship Field <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Training_Internship_Field__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Training_Internship_Field__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Training_Internship_Field__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},training{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Primary Phase Supervisor <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Primary_Phase_Supervisor__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Primary_Phase_Supervisor__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Primary_Phase_Supervisor__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},supervisior{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Supervisor Title <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Supervisor_Title__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Supervisor_Title__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Supervisor_Title__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},sup_title{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              E-mail <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][E_mail__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['E_mail__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['E_mail__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},email{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-4">
              Phone Number <span class="gaccca-text-required" title="required"></span></label>
            <div class="gaccca-form-element__control">
              <input name="DSPhaseListwrap[{{$i}}][DSPhase][Phone_Number__c]" value="{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Phone_Number__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Phone_Number__c']:''}}" type="text" id="phase_btn_{{$i+1}},phase__{{$i+1}},phone{{$i}}"  class="gaccca-input " />

            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Description of Trainee/Intern's role for this program or phase <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][Intern_s_role_for_this_program__c]" id="phase_btn_{{$i+1}},phase__{{$i+1}},des_of_trainee{{$i}}"  class="gaccca-textarea">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Intern_s_role_for_this_program__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Intern_s_role_for_this_program__c']:''}}</textarea>


            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Specific goals and objectives for this program or phase <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">

              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][goals_for_this_program__c]"  id="phase_btn_{{$i+1}},phase__{{$i+1}},goals{{$i}}" class="gaccca-textarea">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['goals_for_this_program__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['goals_for_this_program__c']:''}}</textarea>

            </div>
          </div>
        </div>




        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Please list the names and titles of those who will provide continuous (for example, daily) supervision of the Trainee/Intern, including the primary supervisor. What are these persons' qualifications to teach the planned learning? <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][Name_and_qualification_of_Supervisor__c]" id="phase_btn_{{$i+1}},phase__{{$i+1}},name_and_title{{$i}}"  class="gaccca-textarea ">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Name_and_qualification_of_Supervisor__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Name_and_qualification_of_Supervisor__c']:''}}</textarea>
            </div>
          </div>
        </div>





        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              What plans are in place for the Trainee/Intern to participate in cultural activities while in the United States? <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][Cultural_participation_of_trainee__c]" id="phase_btn_{{$i+1}},phase__{{$i+1}},cultural_activities{{$i}}"  class="gaccca-textarea ">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Cultural_participation_of_trainee__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Cultural_participation_of_trainee__c']:''}}</textarea>
            </div>
          </div>
        </div>




        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              What specific knowledge, skills, or techniques will be learned? <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][Techniques_will_be_learned__c]"  id="phase_btn_{{$i+1}},phase__{{$i+1}},skill_tech{{$i}}" class="gaccca-textarea ">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Techniques_will_be_learned__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Techniques_will_be_learned__c']:''}}</textarea>
            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              How specifically will these knowledge, skills, or techniques be taught? Include specific tasks and activities (Interns) and/ or methodology of training and chronology/syllabus (Trainees) <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][Methodology_of_training_and_chronology__c]" id="phase_btn_{{$i+1}},phase__{{$i+1}},task_activity{{$i}}"  class="gaccca-textarea ">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Methodology_of_training_and_chronology__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Methodology_of_training_and_chronology__c']:''}}</textarea>
            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element ">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              How will the Trainee/Intern's acquisition of new skills and competencies be measured? <span class="gaccca-text-required" title="required"></span> </label>
            <div class="gaccca-form-element__control">
              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][Acquisition_of_new_skills_by_trainee__c]" id="phase_btn_{{$i+1}},phase__{{$i+1}},acquisition{{$i}}"  class="gaccca-textarea ">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Acquisition_of_new_skills_by_trainee__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Acquisition_of_new_skills_by_trainee__c']:''}}</textarea>
            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-form-element">
            <label class="gaccca-form-element__label" for="text-input-id-8">

              Additional Phase Remarks (optional)
              </label>
            <div class="gaccca-form-element__control">
              <textarea name="DSPhaseListwrap[{{$i}}][DSPhase][Additional_Phase_Remarks__c]"  id="phase_btn_{{$i+1}},phase__{{$i+1}},additional{{$i}}" class="gaccca-textarea ">{{isset($datas['DSPhaseListwrap'][$i]['DSPhase']['Additional_Phase_Remarks__c'])?$datas['DSPhaseListwrap'][$i]['DSPhase']['Additional_Phase_Remarks__c']:''}}</textarea>
            </div>
          </div>
        </div>





    </div>

    @endfor










  </div>


</div>


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

  <div class="gaccca-form-element gaccca-form-element-margin">
    <p>Phase Supervisor - I certify that:</p>
    <ul>

      <li>I have reviewed, understand, and will follow this Training/Internship Placement Plan (T/IPP);</li>
      <li>I will contact the Sponsor at the earliest possible opportunity if I believe that the Trainee or Intern is not receiving the type of training delineated on this T/IPP;</li>
      <li>I will actively support the Sponsor by adhering to all applicable regulatory provisions that govern this program (see 22 CFR Part 62);</li>
      <li>The Trainee or Intern named in this T/IPP will not displace full-or part-time, seasonal or permanent American workers, or serve to fill a labor need;</li>
      <li>I will conduct the required periodic evaluations of the Trainee or Intern named in this T/IPP;</li>
      <li>I will notify the designated Sponsor contact at the earliest available opportunity regarding any concerns about, changes in, or deviations from this T/IPP.</li>
      <li>I will notify the Sponsor in the event of an emergency involving the Trainee or Intern named in this T/IPP, as well as any information that I receive about the Trainee or Intern that might have an effect on that exchange visitor's health, safety, or welfare;</li>
      <li>I will notify the Sponsor if I receive information regarding a serious problem or controversy involving the Trainee or Intern named in this T/IPP that could be expected to bring the Department of State, the Exchange Visitor Program, or the Sponsor's exchange visitor program into notoriety or disrepute;</li>
      <li>I am participating in this Exchange Visitor Program in order to provide the Trainee or Intern named in this T/IPP with training or an internship as delineated in this T/IPP;</li>
      <li>I certify that this training or internship meets all the requirements of the Fair Labor Standards Act, as amended (29 U.S.C. 201 et seq.) I also certify that training or internships in the field of agriculture meet all requirements of the Migrant and Seasonal Worker Protection Act, as amended (29 U.S.C. 1801 et seq.).</li>
      <li>I declare and affirm under penalty of perjury that the statements and information made herein are true and correct to the best of my knowledge, information and belief. The law provides severe penalties for knowingly and willfully falsifying or concealing a material fact, or using any false document in the submission of this form.</li>


    </ul>
  </div>
</div>




</div>







<h2 class="gaccca-h2-padding">PRIVACY ACT STATEMENT</h2>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

  <div class="gaccca-form-element gaccca-form-element-margin">
    <p>AUTHORITIES: The information is sought pursuant to Section 102 of the Mutual Educational and Cultural Exchange Act of 1961, as amended (the Fulbright-Hays Act)(22 U.S.C. 2452) which provides for the administration of the Exchange Visitor Program (J visa).</p>
    <p>PURPOSE: The information solicited on this form will be used to provide clarity of training and intern programs offered by entities designated by the U.S. Department of State to conduct exchange visitor programs; for general statistical use; and to administer the Trainee and Intern categories of the Exchange Visitor Program.</p>
    <p>ROUTINE USES: The information on this form may be shared with entities administering the program on behalf of the Department; federal, state, local, or foreign government entities for law enforcement purposes; to members of Congress in response to a request on your behalf . More information on the Routine Uses for the system can be found in the System of Records Notice State-08, Educational and Cultural Exchange Program Records.</p>
    <p>DISCLOSURE: Participation in this program is voluntary; however, failure to provide the information may delay or prevent participation in the Exchange Visitor Program</p>

  </div>
</div>

</div>



<h2 class="gaccca-h2-padding">PAPER WORK REDUCTION ACT</h2>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

  <div class="gaccca-form-element gaccca-form-element-margin">
    <p>Public reporting burden for this collection of information is estimated to average 1.5 hours per response, including time required for searching existing data sources, gathering the necessary documentation, providing the information and/or documents required, and reviewing the final collection. You do not have to supply this information unless this collection displays a currently valid OMB control number. If you have comments on the accuracy of this burden estimate and/or recommendations for reducing it, please send them to: ECA/EC, SA-5, Fifth Floor, U.S. Department of State, Washington, DC 20522.</p>
  </div>
</div>


</div>

<h2 class="gaccca-h2-padding">HAVE YOU SAVED YOUR TRAINING PLAN?</h2>
<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

  <div class="gaccca-form-element gaccca-form-element-margin">
    <p>Please save the DS-7002 Training Plan one last time before sending it back to us.</p>
    <input type='hidden' name='formSubmitType' id='formSubmitType'/>
  </div>
</div>




<div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

  <div class="gaccca-form-element gaccca-form-element-margin">
  @if (isset($datas['isHostCompanyReadonly']) && $datas['isHostCompanyReadonly'])
<p>

DS7002 information sent.     

</p>
  @else
    <span id="save-ds-7002" class="gaccca-button-save gaccca-button-save-margin">Save DS-7002</span>
    <button id="send-to-gaccca-btn" class="gaccca-button-save-green gaccca-button-save-margin">Send to GACC California</button>
@endif
  </div>
</div>






</div>


</div>


{!! Form::close() !!}
@if (isset($datas['isHostCompanyReadonly']) && $datas['isHostCompanyReadonly'])
@else
<script>
$(document).ready(function() {
  var errors = [];
  $("#send-to-gaccca-btn").on('click', function() {
    $('.gaccca-required').prop('required', true);
    document.getElementById('formSubmitType').value='Sent';
    errors = [];
    document.getElementById('loader').style.display = 'block';
    $('#ds-7002-plan').parsley().validate();
    if ($('#ds-7002-plan').parsley().isValid()) {
    } else {
     
      document.getElementById('loader').style.display = 'none';
    }
  });
    
  $("#save-ds-7002").on('click', function() {
    $('.gaccca-required').prop('required', false);
    document.getElementById('formSubmitType').value='Save';
    document.getElementById('loader').style.display = 'block';
    $('#ds-7002-plan').submit();
    });




  window.Parsley.on('field:error', function() {
    // This global callback will be called for any field that fails validation.
    console.log('Validation failed for: ', this.$element[0].id);

    var is_check = errors.includes(this.$element[0].id);
    if (!is_check) {
      errors.push(this.$element[0].id);
    }
    console.log(errors);

    var both_ids = errors[0].split(",");

    $("#" + this.$element[0].id).css('display', 'block');
    gacccaScriptContentTab('', both_ids[0], both_ids[1]);
  });




});
</script>
@endif
@include('common.footer')

  @else
  Permission denied. Please contact administrator.
  @endif