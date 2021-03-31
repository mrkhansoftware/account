@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header_without_menu',['datas'=>$datas,'title' =>'Host Company Site Visit Form','page'=>'HostCompanySiteVisitForm'])

@include('common.signScript')
{!! Form::open(['action' => 'HCSiteVisitFormController@store','files'=>true,'data-parsley-validate', 'method' => 'POST', 'id' => 'gacccaForm_sitevisitform']) !!}

<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Host Company Site Visit Form</h1>


  @if (isset($datas['onfrmSubmitted']) && $datas['onfrmSubmitted'])
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p> Thank you for submitting.
        </p>
      </div>
    </div>
  </div>

  @else

  <h2 class="gaccca-h2-padding">GACC California Site Visit Representative Information (Interviewer)</h2>
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <input type='hidden' name="onfrm[Id]" value="{{isset($datas['onfrm']['Id'])?$datas['onfrm']['Id']:''}}">
    <input type='hidden' name="app[Id]" value="{{isset($datas['app']['Id'])?$datas['app']['Id']:''}}">
    <input type='hidden' name="app[Contact__c]" value="{{isset($datas['app']['Contact__c'])?$datas['app']['Contact__c']:''}}">
    <input type='hidden' name="app[Encrypted_Host_Company_Id__c]" value="{{isset($datas['app']['Encrypted_Host_Company_Id__c'])?$datas['app']['Encrypted_Host_Company_Id__c']:''}}">
    <input type='hidden' name="HostCompany_Gdrive_Folder_Id__c" value="{{isset($datas['app']['HostCompany_Gdrive_Folder_Id__c'])?$datas['app']['HostCompany_Gdrive_Folder_Id__c']:''}}">
    <input type='hidden' name="NewGdriveID__c" value="{{isset($datas['app']['NewGdriveID__c'])?$datas['app']['NewGdriveID__c']:''}}">
    <input type='hidden' name="Site_Visit_Representative_Folder_Id__c" value="{{isset($datas['app']['Site_Visit_Representative_Folder_Id__c'])?$datas['app']['Site_Visit_Representative_Folder_Id__c']:''}}">
    <input type='hidden' name="lastNameFirstName" value="{{isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:''}}">
    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          First and Last Name: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Name_of_Interviewer__c]" value="{{isset($datas['onfrm']['Name_of_Interviewer__c'])?$datas['onfrm']['Name_of_Interviewer__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Mailing Address: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Interviewer_Mailing_Address__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Interviewer_Mailing_Address__c'])?$datas['onfrm']['Interviewer_Mailing_Address__c']:''}}</textarea>

        </div>
      </div>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Phone Number: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Site_Visitor_Phone_Number__c]" value="{{isset($datas['onfrm']['Site_Visitor_Phone_Number__c'])?$datas['onfrm']['Site_Visitor_Phone_Number__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Email Address: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input  type='email' name="onfrm[Interviewer_Email_Address__c]" value="{{isset($datas['onfrm']['Interviewer_Email_Address__c'])?$datas['onfrm']['Interviewer_Email_Address__c']:''}}" required="" class="gaccca-input" />

        </div>
      </div>
    </div>




  </div>


  <h2 class="gaccca-h2-padding">GACC California Host Company (Interviewee):</h2>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Name of Host Company: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onfrm[Name_of_Host_Company__c]" value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}" required="" class="gaccca-input" />

      </div>
    </div>
  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Complete Address (include, City, State, Zip Code): <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[Host_Company_Complete_Address__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Host_Company_Complete_Address__c'])?$datas['onfrm']['Host_Company_Complete_Address__c']:''}}</textarea>
      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Name of Supervisor: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onfrm[Name_of_Supervisor__c]" value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}" required="" class="gaccca-input" />

      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Title/Position at Company: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onfrm[Supervisor_Position__c]" value="{{isset($datas['onfrm']['Supervisor_Position__c'])?$datas['onfrm']['Supervisor_Position__c']:''}}" required="" class="gaccca-input" />

      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Phone Number: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onfrm[Supervisor_Phone__c]" value="{{isset($datas['onfrm']['Supervisor_Phone__c'])?$datas['onfrm']['Supervisor_Phone__c']:''}}" required="" class="gaccca-input" />

      </div>
    </div>
  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Email Address: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input type='email' name="onfrm[Supervisor_Email__c]" value="{{isset($datas['onfrm']['Supervisor_Email__c'])?$datas['onfrm']['Supervisor_Email__c']:''}}" required="" class="gaccca-input" />

      </div>
    </div>
  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Name of Host Company Representative conducting Site Visit (if not supervisor): <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input name="onfrm[Name_of_Host_Company_Representative__c]" value="{{isset($datas['onfrm']['Name_of_Host_Company_Representative__c'])?$datas['onfrm']['Name_of_Host_Company_Representative__c']:''}}" required="" class="gaccca-input" />

      </div>
    </div>
  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Number of employees at training/intern site: <span class="gaccca-text-required" title="required">*</span>
      </label>
      <div class="gaccca-form-element__control">
        <input name="onfrm[no_of_full_time_employees_at_site__c]" value="{{isset($datas['onfrm']['no_of_full_time_employees_at_site__c'])?$datas['onfrm']['no_of_full_time_employees_at_site__c']:''}}" required="" class="gaccca-input" />

      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Gross Annual Revenue: <span class="gaccca-text-required" title="required">*</span> </label>
        <span class="gaccca-radio">
          <input type="radio" required required id="radio-0-3" value="$0 to $3 Million" name="onfrm[Annual_Revenue__c]" />
          <label class="gaccca-radio__label" for="radio-0-3">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">$0 to $3 Million</span>
          </label>
        
          <input type="radio" required required id="radio-3-10" value="$3 Million to $10 Million" name="onfrm[Annual_Revenue__c]" />
          <label class="gaccca-radio__label" for="radio-3-10">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">$3 Million to $10 Million</span>
          </label>
       
          <input type="radio" required required id="radio-10-25" value="$10 Million to $25 Million" name="onfrm[Annual_Revenue__c]" />
          <label class="gaccca-radio__label" for="radio-10-25">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">$10 Million to $25 Million</span>
          </label>
       
          <input type="radio" required id="radio-25-more" value="$25 Million or More" name="onfrm[Annual_Revenue__c]" />
          <label class="gaccca-radio__label" for="radio-25-more">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">$25 Million or More</span>
          </label>
        </span>



      </div>

    </div>

  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Nature of business/ endeavor (ie: Retail, Clothing, Restaurant, Manufacturing, Law Firm, Resort etc…): <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[Nature_of_business_endeavor__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Nature_of_business_endeavor__c'])?$datas['onfrm']['Nature_of_business_endeavor__c']:''}}</textarea>

      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Type of Entity: <span class="gaccca-text-required" title="required">*</span> </label>
        <span class="gaccca-radio">
          <input type="radio" required id="radio-corporation" value="Corporation" name="onfrm[Type_of_Entity__c]" />
          <label class="gaccca-radio__label" for="radio-corporation">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Corporation</span>
          </label>
        
          <input type="radio" required id="radio-partnership" value="Partnership" name="onfrm[Type_of_Entity__c]" />
          <label class="gaccca-radio__label" for="radio-partnership">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Partnership</span>
          </label>
        
          <input type="radio" required id="radio-government" value="Government/Public Sector" name="onfrm[Type_of_Entity__c]" />
          <label class="gaccca-radio__label" for="radio-government">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Government/Public Sector</span>
          </label>
       
          <input type="radio" required id="radio-non-profit" value="Non Profit" name="onfrm[Type_of_Entity__c]" />
          <label class="gaccca-radio__label" for="radio-non-profit">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Non Profit</span>
          </label>
      
          <input type="radio" required id="radio-other" value="other" name="onfrm[Type_of_Entity__c]" />
          <label class="gaccca-radio__label" for="radio-other">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">other</span>
          </label>


        </span>

      </div>

    </div>

  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Length of time in business: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[Length_of_time_in_business__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Length_of_time_in_business__c'])?$datas['onfrm']['Length_of_time_in_business__c']:''}}</textarea>

      </div>
    </div>
  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Length of time at this location: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[Length_of_time_at_this_location__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Length_of_time_at_this_location__c'])?$datas['onfrm']['Length_of_time_at_this_location__c']:''}}</textarea>

      </div>
    </div>
  </div>



  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Is this the only location/branch of this business? <span class="gaccca-text-required" title="required">*</span> </label>

        <span class="gaccca-radio">
          <input type="radio" required id="radio-yes" value="Yes" name="onfrm[Is_this_the_only_branch_of_this_business__c]" />
          <label class="gaccca-radio__label" for="radio-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>

          <input type="radio" required id="radio-no" value="No" name="onfrm[Is_this_the_only_branch_of_this_business__c]" />
          <label class="gaccca-radio__label" for="radio-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>


      </div>

    </div>

  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Is this the head office location? <span class="gaccca-text-required" title="required">*</span> </label>

        <span class="gaccca-radio">
          <input type="radio" required id="radio-head-location-yes" value="Yes" name="onfrm[Is_this_the_Head_Office_location__c]" />
          <label class="gaccca-radio__label" for="radio-head-location-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>

          <input type="radio" required id="radio-head-location-no" value="No" name="onfrm[Is_this_the_Head_Office_location__c]" />
          <label class="gaccca-radio__label" for="radio-head-location-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>


      </div>

    </div>

  </div>





  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Is the office a home office? <span class="gaccca-text-required" title="required">*</span> </label>

        <span class="gaccca-radio">
          <input type="radio" required id="radio-home-office-yes" value="Yes" name="onfrm[Is_the_office_a_home_office__c]" />
          <label class="gaccca-radio__label" for="radio-home-office-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>

          <input type="radio" required id="radio-home-office-no" value="No" name="onfrm[Is_the_office_a_home_office__c]" />
          <label class="gaccca-radio__label" for="radio-home-office-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>


      </div>

    </div>

  </div>



  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        If yes, is the work space separate from the living area? Please describe: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[If_yes_is_the_work_space_separate__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_is_the_work_space_separate__c'])?$datas['onfrm']['If_yes_is_the_work_space_separate__c']:''}}</textarea>

      </div>
    </div>
  </div>



  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Does the office include restrooms for employees and interns/trainees?: <span class="gaccca-text-required" title="required">*</span> </label>

        <span class="gaccca-radio">
          <input type="radio" required id="radio-include-restrooms-yes" name="onfrm[Does_the_office_include_restrooms__c]" value="Yes" />
          <label class="gaccca-radio__label" for="radio-include-restrooms-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>

          <input type="radio" required id="radio-include-restrooms-no" value="No" name="onfrm[Does_the_office_include_restrooms__c]" />
          <label class="gaccca-radio__label" for="radio-include-restrooms-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>


      </div>

    </div>

  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Has the company hosted Trainees/Interns before: <span class="gaccca-text-required" title="required">*</span>
        </label>

        <span class="gaccca-radio">
          <input type="radio" required id="radio-hosted-trainees-yes" value="Yes" name="onfrm[Has_the_company_hosted_T_I_before__c]" />
          <label class="gaccca-radio__label" for="radio-hosted-trainees-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>

          <input type="radio" required id="radio-hosted-trainees-no" value="No" name="onfrm[Has_the_company_hosted_T_I_before__c]" />
          <label class="gaccca-radio__label" for="radio-hosted-trainees-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>


      </div>

    </div>

  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        If yes, describe the experience: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[If_yes_desc_the_hosted_T_I_experience__c]" value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_desc_the_hosted_T_I_experience__c'])?$datas['onfrm']['If_yes_desc_the_hosted_T_I_experience__c']:''}}</textarea>

      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label">
          Will the intern/trainee have his own working space/desk: <span class="gaccca-text-required" title="required">*</span> </label>

        <span class="gaccca-radio">
          <input type="radio" required id="radio-own-working-space-yes" value="Yes" name="onfrm[Will_the_T_I_have_own_working_space__c]" value="Yes" />
          <label class="gaccca-radio__label" for="radio-own-working-space-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>

          <input type="radio" required id="radio-own-working-space-no" value="No" name="onfrm[Will_the_T_I_have_own_working_space__c]" value="No" />
          <label class="gaccca-radio__label" for="radio-own-working-space-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>


      </div>

    </div>

  </div>




  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Please describe the setup and the distance to the supervisor’s desk/work space (include a picture of the intern/trainee’s desk and the supervisor’s desk): <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[Describe_the_setup_and_the_distance__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Describe_the_setup_and_the_distance__c'])?$datas['onfrm']['Describe_the_setup_and_the_distance__c']:''}}</textarea>

      </div>
    </div>
  </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Please describe the equipment and materials provided for the intern/trainee: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[Provide_any_of_their_own_equipment__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Provide_any_of_their_own_equipment__c'])?$datas['onfrm']['Provide_any_of_their_own_equipment__c']:''}}</textarea>

      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          Will the intern/trainee be using any equipment that requires special training or safety procedures? <span class="gaccca-text-required" title="required">*</span> </label>

        <span class="gaccca-radio">
          <input type="radio" required id="radio-equipment-yes" value="Yes" name="onfrm[Equipment_that_requires_special_training__c]" />
          <label class="gaccca-radio__label" for="radio-equipment-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>

          <input type="radio" required id="radio-equipment-no" value="No" name="onfrm[Equipment_that_requires_special_training__c]" />
          <label class="gaccca-radio__label" for="radio-equipment-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>


      </div>

    </div>

  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        If yes, please describe <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[If_yes_Describe_equipment_Training__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_Describe_equipment_Training__c'])?$datas['onfrm']['If_yes_Describe_equipment_Training__c']:''}}</textarea>

      </div>
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
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
              <input type="radio" required required id="radio-appearance-excellent" value="Excellent" name="onfrm[Appearance_of_Company__c]" />
              <label class="gaccca-radio__label" for="radio-appearance-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-appearance-very-good" value="Very good" name="onfrm[Appearance_of_Company__c]" />
              <label class="gaccca-radio__label" for="radio-appearance-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-appearance-good" value="Good" name="onfrm[Appearance_of_Company__c]" />
              <label class="gaccca-radio__label" for="radio-appearance-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-appearance-fair" value="Fair" name="onfrm[Appearance_of_Company__c]" />
              <label class="gaccca-radio__label" for="radio-appearance-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-appearance-poor" value="Poor" name="onfrm[Appearance_of_Company__c]" />
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
              <input type="radio" required required id="radio-facilities-excellent" value="Excellent" name="onfrm[Facilities_Buildings_Workspace_etc__c]" />
              <label class="gaccca-radio__label" for="radio-facilities-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-facilities-very-good" value="Very good" name="onfrm[Facilities_Buildings_Workspace_etc__c]" />
              <label class="gaccca-radio__label" for="radio-facilities-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-facilities-good" value="Good" name="onfrm[Facilities_Buildings_Workspace_etc__c]" />
              <label class="gaccca-radio__label" for="radio-facilities-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-facilities-fair" value="Fair" name="onfrm[Facilities_Buildings_Workspace_etc__c]" />
              <label class="gaccca-radio__label" for="radio-facilities-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-facilities-poor" value="Poor" name="onfrm[Facilities_Buildings_Workspace_etc__c]" />
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
              <input type="radio" required required id="radio-relativity_of_the_company-excellent" value="Excellent" name="onfrm[Company_s_facade_vs_business__c]" />
              <label class="gaccca-radio__label" for="radio-relativity_of_the_company-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-relativity_of_the_company-very-good" value="Very good" name="onfrm[Company_s_facade_vs_business__c]" />
              <label class="gaccca-radio__label" for="radio-relativity_of_the_company-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-relativity_of_the_company-good" value="Good" name="onfrm[Company_s_facade_vs_business__c]" />
              <label class="gaccca-radio__label" for="radio-relativity_of_the_company-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-relativity_of_the_company-fair" value="Fair" name="onfrm[Company_s_facade_vs_business__c]" />
              <label class="gaccca-radio__label" for="radio-relativity_of_the_company-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-relativity_of_the_company-poor" value="Poor" name="onfrm[Company_s_facade_vs_business__c]" />
              <label class="gaccca-radio__label" for="radio-relativity_of_the_company-poor">
                <span class="gaccca-radio_faux"></span>
              </label></span></td>

        </tr>


        <tr>
          <td>
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Number of desks and/or office space correlates with the # of employees reported: <span class="gaccca-text-required" title="required">*</span> </label>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-office_space-excellent" value="Excellent" name="onfrm[Number_of_desks_and_or_office_space__c]" />
              <label class="gaccca-radio__label" for="radio-office_space-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-office_space-very-good" value="Very good" name="onfrm[Number_of_desks_and_or_office_space__c]" />
              <label class="gaccca-radio__label" for="radio-office_space-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-office_space-good" value="Good" name="onfrm[Number_of_desks_and_or_office_space__c]" />
              <label class="gaccca-radio__label" for="radio-office_space-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-office_space-fair" value="Fair" name="onfrm[Number_of_desks_and_or_office_space__c]" />
              <label class="gaccca-radio__label" for="radio-office_space-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-office_space-poor" value="Poor" name="onfrm[Number_of_desks_and_or_office_space__c]" />
              <label class="gaccca-radio__label" for="radio-office_space-poor">
                <span class="gaccca-radio_faux"></span>
              </label></span></td>

        </tr>




        <tr>
          <td>
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Materials and communication is being conducted in English: <span class="gaccca-text-required" title="required">*</span> </label>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-materials_and_communication-excellent" value="Excellent" name="onfrm[communication_is_being_conducted_in_Eng__c]" />
              <label class="gaccca-radio__label" for="radio-materials_and_communication-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-materials_and_communication-very-good" value="Very good" name="onfrm[communication_is_being_conducted_in_Eng__c]" />
              <label class="gaccca-radio__label" for="radio-materials_and_communication-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-materials_and_communication-good" value="Good" name="onfrm[communication_is_being_conducted_in_Eng__c]" />
              <label class="gaccca-radio__label" for="radio-materials_and_communication-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-materials_and_communication-fair" value="Fair" name="onfrm[communication_is_being_conducted_in_Eng__c]" />
              <label class="gaccca-radio__label" for="radio-materials_and_communication-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-materials_and_communication-poor" value="Poor" name="onfrm[communication_is_being_conducted_in_Eng__c]" />
              <label class="gaccca-radio__label" for="radio-materials_and_communication-poor">
                <span class="gaccca-radio_faux"></span>
              </label></span></td>

        </tr>


        <tr>
          <td>
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Facilities, structure, and staff are able to provide the Intern/Trainee with hands-on training: <span class="gaccca-text-required" title="required">*</span> </label>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-hands_on_training-excellent" value="Excellent" name="onfrm[Able_to_provide_hands_on_training__c]" />
              <label class="gaccca-radio__label" for="radio-hands_on_training-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-hands_on_training-very-good" value="Very good" name="onfrm[Able_to_provide_hands_on_training__c]" />
              <label class="gaccca-radio__label" for="radio-hands_on_training-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-hands_on_training-good" value="Good" name="onfrm[Able_to_provide_hands_on_training__c]" />
              <label class="gaccca-radio__label" for="radio-hands_on_training-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-hands_on_training-fair" value="Fair" name="onfrm[Able_to_provide_hands_on_training__c]" />
              <label class="gaccca-radio__label" for="radio-hands_on_training-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-hands_on_training-poor" value="Poor" name="onfrm[Able_to_provide_hands_on_training__c]" />
              <label class="gaccca-radio__label" for="radio-hands_on_training-poor">
                <span class="gaccca-radio_faux"></span>
              </label></span></td>

        </tr>




        <tr>
          <td>
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Appearance, professionalism, and demeanor of staff/employer <span class="gaccca-text-required" title="required">*</span> </label>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-demeanor_of_staff-excellent" value="Excellent" name="onfrm[Appearance_professionalism_of_staff__c]" />
              <label class="gaccca-radio__label" for="radio-demeanor_of_staff-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-demeanor_of_staff-very-good" value="Very good" name="onfrm[Appearance_professionalism_of_staff__c]" />
              <label class="gaccca-radio__label" for="radio-demeanor_of_staff-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-demeanor_of_staff-good" value="Good" name="onfrm[Appearance_professionalism_of_staff__c]" />
              <label class="gaccca-radio__label" for="radio-demeanor_of_staff-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-demeanor_of_staff-fair" value="Fair" name="onfrm[Appearance_professionalism_of_staff__c]" />
              <label class="gaccca-radio__label" for="radio-demeanor_of_staff-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-demeanor_of_staff-poor" value="Poor" name="onfrm[Appearance_professionalism_of_staff__c]" />
              <label class="gaccca-radio__label" for="radio-demeanor_of_staff-poor">
                <span class="gaccca-radio_faux"></span>
              </label></span></td>

        </tr>

        <tr>
          <td>
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Appearance of site’s neighborhood, grounds, and location <span class="gaccca-text-required" title="required">*</span> </label>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-grounds_and_location-excellent" value="Excellent" name="onfrm[Appearance_of_site_s_neighborhood__c]" />
              <label class="gaccca-radio__label" for="radio-grounds_and_location-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-grounds_and_location-very-good" value="Very good" name="onfrm[Appearance_of_site_s_neighborhood__c]" />
              <label class="gaccca-radio__label" for="radio-grounds_and_location-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-grounds_and_location-good" value="Good" name="onfrm[Appearance_of_site_s_neighborhood__c]" />
              <label class="gaccca-radio__label" for="radio-grounds_and_location-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-grounds_and_location-fair" value="Fair" name="onfrm[Appearance_of_site_s_neighborhood__c]" />
              <label class="gaccca-radio__label" for="radio-grounds_and_location-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-grounds_and_location-poor" value="Poor" name="onfrm[Appearance_of_site_s_neighborhood__c]" />
              <label class="gaccca-radio__label" for="radio-grounds_and_location-poor">
                <span class="gaccca-radio_faux"></span>
              </label></span></td>

        </tr>

        <tr>
          <td>
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Adequacy/accessibility of the site to public transportation <span class="gaccca-text-required" title="required">*</span> </label>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-public_transportation-excellent" value="Excellent" name="onfrm[Accessibility_of_public_transportation__c]" />
              <label class="gaccca-radio__label" for="radio-public_transportation-excellent">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span>
          </td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-public_transportation-very-good" value="Very good" name="onfrm[Accessibility_of_public_transportation__c]" />
              <label class="gaccca-radio__label" for="radio-public_transportation-very-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-public_transportation-good" value="Good" name="onfrm[Accessibility_of_public_transportation__c]" />
              <label class="gaccca-radio__label" for="radio-public_transportation-good">
                <span class="gaccca-radio_faux"></span>

              </label>
            </span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-public_transportation-fair" value="Fair" name="onfrm[Accessibility_of_public_transportation__c]" />
              <label class="gaccca-radio__label" for="radio-public_transportation-fair">
                <span class="gaccca-radio_faux"></span>

              </label></span></td>
          <td style="text-align: center;"><span class="gaccca-radio">
              <input type="radio" required required id="radio-public_transportation-poor" value="Poor" name="onfrm[Accessibility_of_public_transportation__c]" />
              <label class="gaccca-radio__label" for="radio-public_transportation-poor">
                <span class="gaccca-radio_faux"></span>
              </label></span></td>

        </tr>

      </table>
    </div>
  </div>






  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">

      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          If you were seeking a Training/Internship position, would you find this company a pleasant environment in
          which to train/intern?: <span class="gaccca-text-required" title="required">*</span> </label>
        <span class="gaccca-radio">
          <input type="radio" required required id="radio-internship_position-yes" value="Yes" name="onfrm[Would_you_find_a_pleasant_environment__c]" />
          <label class="gaccca-radio__label" for="radio-internship_position-yes">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">Yes</span>
          </label>
          <input type="radio" required required id="radio-internship_position-no" value="No" name="onfrm[Would_you_find_a_pleasant_environment__c]" />
          <label class="gaccca-radio__label" for="radio-internship_position-no">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-padding-right-25">No</span>
          </label>
        </span>

      </div>

    </div>

  </div>



  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-8">
        Please explain and/or include additional comments: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <textarea name="onfrm[Additional_comments__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Additional_comments__c'])?$datas['onfrm']['Additional_comments__c']:''}}</textarea>

      </div>
    </div>
  </div>
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin " id='uploadFile1'>
      <label class="gaccca-form-element__label">
        Please upload photos of the following: Exterior street view, Company logo, Exterior signage, Reception area,
        Interns work space, Communal spaces, Bathrooms. </label><br />
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file1" type="file" required />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>

    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile2'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file2" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile3'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file3" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile4'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file4" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile5'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file5" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile6'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file6" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile7'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file7" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile8'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file8" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile9'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file9" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile10'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file10" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile11'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file11" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile12'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file12" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile13'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file13" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile14'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file14" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin gaccca-hide" id='uploadFile15'>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="file15" type="file" />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
    </div>
    <span class="gaccca-button-save gaccca-button-save-margin" id='addMore'>Add More</span>
    <br />
    <div class="gaccca-form-element gaccca-form-element-margin ">
      <div class="gaccca-form-element__control">
        <span id='uploadFileLimit' class='gaccca-text-required'></span>
      </div>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Date of Site Visit * <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="siteVisitDate" value="" required="" class="gaccca-input-date" />

        </div>
      </div>
    </div>
  </div>

  <h2 class="gaccca-h2-padding">Please Note:</h2>
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>You can sign digitally online with your mouse or on your phone with your finger.</p>
      </div>
      @include('common.signHTML')
    </div>


    <button id="gaccca_saveBtn_sitevisitform" class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>

  </div>

  @endif

</div>
<script>
  let uploadId = 2;
  jQuery("#addMore").click(function() {
    if (uploadId == 15) {
      document.getElementById('uploadFileLimit').innerHTML = 'Maximum 15 upload limit';
      return;
    }
    document.getElementById('uploadFile' + uploadId).style.display = 'block';
    uploadId++;

  });
</script>
{!! Form::close() !!}
@include('common.footer')

@else
Permission denied. Please contact administrator.
@endif