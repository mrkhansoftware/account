@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'J-1 Visa Participant Information','page'=>'JVisaParticipantInfo'])

{!! Form::open(['action' => 'JVisaParticipantInfoController@store','files'=>true, 'method' => 'POST', 'id' => 'gacccaForm_jvisa']) !!}


<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">J-1 Visa Participant Information</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Please fill in the required fields below about yourself. Please upload a copy of your passport, a most recent
      complete CV / Resume in English with exact dates as well as an English certificate of enrollment or diploma (in
      case you do not have an English version, please complete the form "Proof of Student Status" or "Proof of Student
      Graduation")
    </p>
    <input type="hidden" name='lastNameFirstName' value="{{isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:''}}" />
  <input type="hidden" name='applicantId' value="{{isset($datas['app']['Id'])?$datas['app']['Id']:''}}" />
  <input type="hidden" name='Contact__c' value="{{isset($_GET['participant'])?$_GET['participant']:''}}" />
  <input type="hidden" name='Google_Drive_Folder__c' value="{{isset($datas['app']['Google_Drive_Folder__c'])?$datas['app']['Google_Drive_Folder__c']:''}}" />

  </div>
  @if (isset($datas['confirmed']) && $datas['confirmed'])

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      All Informations has been sent to the visa team.
    </div>
  </div>
  @else
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          <p><strong>Templates:</strong></p>

          <p><img src="{{ asset('images/PDFImage.png') }}" width="18" height="18" /><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzF0/_A2oZQC_PdDfF5cuOVal7J42G2RNQp9lp9AkKuRxnSY">Proof of Student Status</a>
          </p>
          <p><img src="{{ asset('images/PDFImage.png') }}" width="18" height="18" /><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzF5/qNsOnh07_xhbVG2_5A1w05dgIUEw9c2xGK3DehW0r0E">Proof of Student
              Graduation</a></p>
        </label>

      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Please submit the requested documents in PDF or JPEG format only. You can use a PDF scanner app on your
          smartphone.

          We do not accept any documents submitted via email.

          The information you provide here will be used in your visa application. Make sure all information is correct
          and up-to-date. </label>

      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Do you have a dual citizenship? <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            {!! Form::radio('App[Do_you_have_dual_citizenship__c]', 'No',isset($datas['app']['Do_you_have_dual_citizenship__c'])?($datas['app']['Do_you_have_dual_citizenship__c']=='No'?true:false):false,array('id'=>'radio-citizenship-no','required' => 'required')); !!}


            <label class="gaccca-radio__label" for="radio-citizenship-no">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">No</span>
            </label>
            {!! Form::radio('App[Do_you_have_dual_citizenship__c]', 'Yes',isset($datas['app']['Do_you_have_dual_citizenship__c'])?($datas['app']['Do_you_have_dual_citizenship__c']=='Yes'?true:false):false,array('id'=>'radio-citizenship-yes' ,'required' => 'required')); !!}

            <label class="gaccca-radio__label" for="radio-citizenship-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>
          </span>

        </div>

      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-c">
          Citizenship <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Citizenship__c]" value="{{isset($datas['App']['Citizenship__c'])?$datas['App']['Citizenship__c']:''}}" type="text" id="text-input-id-c"  required="" class="gaccca-input" />
          <span class="gaccca-input-help-text">Please also list your dual citizenship here.</span>
        </div>
      </div>

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-colpr">
          Country of Legal Permanent Residency <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Country_of_Legal_Permanent_Residency__c]" value="{{isset($datas['App']['Country_of_Legal_Permanent_Residency__c'])?$datas['App']['Country_of_Legal_Permanent_Residency__c']:''}}" type="text" id="text-input-id-colpr"  required="" class="gaccca-input" />

        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-us-visa">
          Have you ever applied for a US visa? <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="App[haveYouEverAppliedForUSVisa__c]" value="{{isset($datas['App']['haveYouEverAppliedForUSVisa__c'])?$datas['App']['haveYouEverAppliedForUSVisa__c']:''}}" id="text-input-id-us-visa"  required="" class="gaccca-input" />
          <span class="gaccca-input-help-text">Please provide type of visa and expiration date as well as
            information about any previous visa denials</span>
        </div>
      </div>






      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-01">Country of Birth
          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">

            {!! Form::select('App[Country_of_Birth__c]', array_reverse($datas['countryOfBirth']), isset($datas['app']['Country_of_Birth__c'])?$datas['app']['Country_of_Birth__c']:'', [ 'class' => 'gaccca-select','required' => 'required']) !!}

          </div>
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-cob">
          City of Birth <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="App[City_of_birth__c]" value="{{isset($datas['App']['City_of_birth__c'])?$datas['App']['City_of_birth__c']:''}}" id="text-input-id-cob"  required="" class="gaccca-input" />

        </div>

      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-ms">Marital Status
          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">


            {!! Form::select('App[Maritial_Status__c]', array_reverse($datas['maritialStatus']), isset($datas['app']['Maritial_Status__c'])?$datas['app']['Maritial_Status__c']:'', [ 'class' => 'gaccca-select','required' => 'required']) !!}


          </div>
        </div>
      </div>
      <br />





      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-ecp">
          Emergency Contact Person outside the US <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <input name="App[Emergency_Contact_Person_outside_the_US__c]" value="{{isset($datas['App']['Emergency_Contact_Person_outside_the_US__c'])?$datas['App']['Emergency_Contact_Person_outside_the_US__c']:''}}" type="text" id="text-input-id-ecp"  required="" class="gaccca-input" />
          <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-ecp">
          Relationship to Applicant <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Relationship_to_Applicant__c]" value="{{isset($datas['App']['Relationship_to_Applicant__c'])?$datas['App']['Relationship_to_Applicant__c']:''}}" type="text" id="text-input-id-ecp" required="" class="gaccca-input" />
          <span class="gaccca-input-help-text">Please define the relationship between you and your emergency contact
            person, e.g. mother, father, sister, boyfriend, etc.</span>
        </div>
      </div>




      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-e-email">
          Emergency Contact Person Email Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Emergency_Contact_Person_Email_Address__c]" value="{{isset($datas['App']['Emergency_Contact_Person_Email_Address__c'])?$datas['App']['Emergency_Contact_Person_Email_Address__c']:''}}" type="email" id="text-input-id-e-email"  required="" class="gaccca-input" />
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-e-phone">
          Emergency Contact Person Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Emergency_Contact_Person_PhoneNumber__c]" value="{{isset($datas['App']['Emergency_Contact_Person_PhoneNumber__c'])?$datas['App']['Emergency_Contact_Person_PhoneNumber__c']:''}}" type="text" id="text-input-id-e-phone"  required="" class="gaccca-input" />
          <span class="gaccca-input-help-text">Please always provide the country code..</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-e-address">
          Emergency Contact Person Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="App[Emergency_Contact_Person_Address__c]" value="{{isset($datas['App']['Emergency_Contact_Person_Address__c'])?$datas['App']['Emergency_Contact_Person_Address__c']:''}}"  required="" class="gaccca-textarea"></textarea>
          <span class="gaccca-input-help-text">Street, App #, Zip Code, City, Country</span>
        </div>
      </div>

      <br />







      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-nou">
          Name of University <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Name_of_University__c]" value="{{isset($datas['App']['Name_of_University__c'])?$datas['App']['Name_of_University__c']:''}}" type="text" id="text-input-id-nou"  required="" class="gaccca-input" />
        </div>
      </div>

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-fos">
          Field of Study <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Field_of_Study__c]" value="{{isset($datas['App']['Field_of_Study__c'])?$datas['App']['Field_of_Study__c']:''}}" type="text" id="text-input-id-fos"  required="" class="gaccca-input" />
        </div>
      </div>





      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-tod">Type of Degree
          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">

            {!! Form::select('App[Type_of_Degree__c]', array_reverse($datas['typeOfDegree']), isset($datas['app']['Type_of_Degree__c'])?$datas['app']['Type_of_Degree__c']:'', [ 'class' => 'gaccca-select','required' => 'required']) !!}

          </div>
        </div>
      </div>




      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-egd">
          (Expected) Graduation Date <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="graduationDate" value="{{isset($datas['graduationDate'])?$datas['graduationDate']:''}}" type="text" id="text-input-id-egdx" required="" class="gaccca-input-date" readonly/>
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-tod">Work Experience in your Field of Study after
          Graduation
          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">
            {!! Form::select('App[Work_Experience_in_your_Field_of_Study_a__c]', array_reverse($datas['workExperience']), isset($datas['app']['Work_Experience_in_your_Field_of_Study_a__c'])?$datas['app']['Work_Experience_in_your_Field_of_Study_a__c']:'', [ 'class' => 'gaccca-select','required' => 'required']) !!}

          </div>
        </div>
      </div>
      <br />








      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-lom">
          Copy of Your Passport <span class="gaccca-text-required" title="required">*</span></label>
        <div class="gaccca-form-element__control">
          <label class="gaccca-file">
            <input type="file" name="passport" required />
            <span class="gaccca-file-custom">Choose file...</span>

          </label>
        </div>
        <span class="gaccca-input-help-text">Please only provide a picture of the photo page of your passport.</span>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-lom">
          English CV / Resume <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <label class="gaccca-file">
            <input type="file" name="resume" required />
            <span class="gaccca-file-custom">Choose file...</span>

          </label>
        </div>
        <span class="gaccca-input-help-text">Please submit your most recent and up-to-date CV /Resume. Your CV must
          display exact dates for all positions. e.g. 04/2015-06/2017.</span>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-lom">
          Student Status Verification <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <label class="gaccca-file">
            <input type="file" name="status_verification" required />
            <span class="gaccca-file-custom">Choose file...</span>

          </label>
        </div>
        <span class="gaccca-input-help-text">Submit a copy of your Bachelor's or Master's degree or a copy of your
          Certificate of Enrollment as a student.</span>
      </div>


      <h2 class="gaccca-h2-padding">Host Company Information</h2>

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-foi">
          Field of Internship <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Field_of_Internship__c]" value="{{isset($datas['App']['Field_of_Internship__c'])?$datas['App']['Field_of_Internship__c']:''}}" type="text" id="text-input-id-foi" required="" class="gaccca-input" />

          <span class="gaccca-input-help-text">e.g. Marketing, Business Development, Mechanical Engineering, Architecture, Graphic Design</span>

        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-ssdoi">
          Scheduled Start Date of Internship/Training <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="Scheduled_Start" value="{{isset($datas['Scheduled_Start'])?$datas['Scheduled_Start']:''}}" type="text" id="text-input-id-ssdoixxa" required="" class="gaccca-input-date" readonly/>
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-sedoi">
          Scheduled End Date of Internship/Training <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="Scheduled_End" value="{{isset($datas['Scheduled_End'])?$datas['Scheduled_End']:''}}" type="text" id="text-input-id-sedoixxe" required="" class="gaccca-input-date" readonly/>
        </div>
      </div>
      <br />

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-hcn">
          Host Company Name <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Host_Company__c]" value="{{isset($datas['App']['Host_Company__c'])?$datas['App']['Host_Company__c']:''}}" type="text" id="text-input-id-hcn" required="" class="gaccca-input" />
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-hcw">
          Host Company Website <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Host_Company_Website__c]" value="{{isset($datas['App']['Host_Company_Website__c'])?$datas['App']['Host_Company_Website__c']:''}}" type="text" id="text-input-id-hcw" required="" class="gaccca-input" />
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-hca">
          Host Company Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Address__c]" value="{{isset($datas['App']['Address__c'])?$datas['App']['Address__c']:''}}" type="text" id="text-input-id-hca" required="" class="gaccca-input" />
        </div>
      </div>

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-city">
          City <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[City__c]" value="{{isset($datas['App']['City__c'])?$datas['App']['City__c']:''}}" type="text" id="text-input-id-city" required="" class="gaccca-input" />
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-zipcode">
          Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[ZIP_Code__c]" value="{{isset($datas['App']['ZIP_Code__c'])?$datas['App']['ZIP_Code__c']:''}}" type="text" id="text-input-id-zipcode" required="" class="gaccca-input" />
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-01">State <span class="gaccca-text-required">*</span></label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">
            {!! Form::select('App[State__c]', array_reverse($datas['statePick']), isset($datas['app']['State__c'])?$datas['app']['State__c']:'', [ 'class' => 'gaccca-select','required' => 'required']) !!}

          </div>
        </div>
      </div>

      <br />

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-hccp">
          Host Company Contact Person <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Contact_Person__c]" value="{{isset($datas['App']['Contact_Person__c'])?$datas['App']['Contact_Person__c']:''}}" type="text" id="text-input-id-hccp" required="" class="gaccca-input" />

          <span class="gaccca-input-help-text">Enter the name of the person who will be your <br /> supervisor/mentor during your internship/training.</span>
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-ccea">
          Company Contact email address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Email_Address__c]" value="{{isset($datas['App']['Email_Address__c'])?$datas['App']['Email_Address__c']:''}}" type="email" id="text-input-id-ccea" required="" class="gaccca-input" />
        </div>
      </div>

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-ccp">
          Company Contact phone <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Phone_Number__c]" value="{{isset($datas['App']['Phone_Number__c'])?$datas['App']['Phone_Number__c']:''}}" type="text" id="text-input-id-ccp" required="" class="gaccca-input" />

          <span class="gaccca-input-help-text">Use the following format +1-563-6325685</span>
        </div>
      </div>
      <br />

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-hpw">
          Hours per week <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Hours_Per_Week__c]" value="{{isset($datas['App']['Hours_Per_Week__c'])?$datas['App']['Hours_Per_Week__c']:''}}" type="text" id="text-input-id-hpw" required="" class="gaccca-input" />
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-stipend">
            Do you receive a stipend? <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="radio-stipend-no" value="No" name="stipend" required />
            <label class="gaccca-radio__label" for="radio-stipend-no">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">No</span>
            </label>
            <input type="radio" id="radio-stipend-yes" value="Yes" name="stipend" required />
            <label class="gaccca-radio__label" for="radio-stipend-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>
          </span>

          <span class="gaccca-input-help-text">A stipend is any financial support provided by your host company.</span>
        </div>




      </div>

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-howmuch">
          If yes, how much? <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[If_Yes_How_Much_Stipend__c]" value="{{isset($datas['App']['If_Yes_How_Much_Stipend__c'])?$datas['App']['If_Yes_How_Much_Stipend__c']:''}}" type="text" id="text-input-id-howmuch"  class="gaccca-input" />
          <br />
          <span class="gaccca-input-help-text">Please enter the amount paid to you per hour, week or month, e.g 16 USD/hour, 1300 USD/month, 500 USD/week</span>
        </div>
      </div>

      <br />



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-vohiupm">
          <strong> Additional compensation offered by your host company </strong>
          <br /> - Value of Housing in USD per month
          <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Value_Of_Housing_In_USD_Per_Month__c]" value="{{isset($datas['App']['Value_Of_Housing_In_USD_Per_Month__c'])?$datas['App']['Value_Of_Housing_In_USD_Per_Month__c']:''}}" type="text" id="text-input-id-vohiupm" required="" class="gaccca-input" />

          <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-votiupm">
          - Value of Transportation in USD per month <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Value_Of_Transportation_In_USD_Per_Month__c]" value="{{isset($datas['App']['Value_Of_Transportation_In_USD_Per_Month__c'])?$datas['App']['Value_Of_Transportation_In_USD_Per_Month__c']:''}}" type="text" id="text-input-id-votiupm" required="" class="gaccca-input" />

          <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-tfeiu">
          - Total Flight Expenses in USD <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Total_Flight_Expenses_In_USD__c]" value="{{isset($datas['App']['Total_Flight_Expenses_In_USD__c'])?$datas['App']['Total_Flight_Expenses_In_USD__c']:''}}" type="text" id="text-input-id-tfeiu" required="" class="gaccca-input" />

          <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-howmuch">
          - Other compensation <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="App[Other_Compensation__c]" value="{{isset($datas['App']['Other_Compensation__c'])?$datas['App']['Other_Compensation__c']:''}}" type="text" id="text-input-id-howmuch" required="" class="gaccca-input" />

          <span class="gaccca-input-help-text">If not applicable please fill in n/a. Please also name the expense, e.g visa fee.</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-verification">
          The upload will need some time. Please have some patience. </label>

      </div>
      <br />



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-verification">
          <strong> Note</strong>: All upload fields are empty again after the upload for the next upload.</label>

      </div>


      <button id="gaccca_saveBtn_jvisa" class="gaccca-button-save gaccca-button-save-margin">Submit Participant Details</button>


    </div>




  </div>
  @endif
</div>


{!! Form::close() !!}
@include('common.footer')
@else
Permission denied. Please contact administrator.
@endif