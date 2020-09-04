@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])

  <div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Step 2/5 - Participant Information</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>Please fill in the required fields below about yourself. Please upload a copy of your passport, a most recent
        complete CV / Resume in English with exact dates as well as an English certificate of enrollment or diploma (in
        case you do not have an English version, please complete the form "Proof of Student Status" or "Proof of Student
        Graduation")
      </p>
    </div>


    {!! Form::open(['action' => 'ParticipantInformationAccountController@store','files' => true, 'method' => 'POST', 'data-parsley-validate', 'id' => 'participant-information-account' ]) !!}
    


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            <p><strong>Templates:  </strong></p>

            <p><img src="{{ asset('images/PDFImage.png') }}" width="18" height="18" /><a href="#">Proof of Student Status</a>
            </p>
            <p><img src="{{ asset('images/PDFImage.png') }}" width="18" height="18" /><a href="#">Proof of Student
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
             
                
    {!! Form::radio('applicant[Do_you_have_dual_citizenship__c]', 'No',isset($datas['Appli']['Do_you_have_dual_citizenship__c'])?($datas['Appli']['Do_you_have_dual_citizenship__c']=='No'?true:false):false,array('id'=>'radio-citizenship-no','required' => 'required')); !!}
                

              <label class="gaccca-radio__label" for="radio-citizenship-no">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
             
    {!! Form::radio('applicant[Do_you_have_dual_citizenship__c]', 'Yes',isset($datas['Appli']['Do_you_have_dual_citizenship__c'])?($datas['Appli']['Do_you_have_dual_citizenship__c']=='yes'?true:false):false,array('id'=>'radio-citizenship-yes' ,'required' => 'required')); !!}

              <label class="gaccca-radio__label" for="radio-citizenship-yes">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes </span>
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
            
            {!! Form::text('applicant[Citizenship__c]',isset($datas['Appli']['Citizenship__c'])?$datas['Appli']['Citizenship__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}
            
            <span class="gaccca-input-help-text">Please also list your dual citizenship here.</span>
          </div>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-colpr">
            Country of Legal Permanent Residency <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           

            {!! Form::text('applicant[Country_of_Legal_Permanent_Residency__c]',isset($datas['Appli']['Country_of_Legal_Permanent_Residency__c'])?$datas['Appli']['Country_of_Legal_Permanent_Residency__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}


          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-us-visa">
            Have you ever applied for a US visa? <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           
              {!! Form::text('applicant[haveYouEverAppliedForUSVisa__c]',isset($datas['Appli']['haveYouEverAppliedForUSVisa__c'])?$datas['Appli']['haveYouEverAppliedForUSVisa__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}
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

            {!! Form::select('applicant[Country_of_Birth__c]', array_reverse($datas['countryOfBirth']), isset($datas['Appli']['Country_of_Birth__c'])?$datas['Appli']['Country_of_Birth__c']:'', [  'class' => 'gaccca-select','required' => 'required']) !!}
             
            </div>
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-cob">
            City of Birth <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
          
            {!! Form::text('applicant[City_of_birth__c]',isset($datas['Appli']['City_of_birth__c'])?$datas['Appli']['City_of_birth__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}

          </div>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-ms">Marital Status
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
            

              {!! Form::select('applicant[Maritial_Status__c]', array_reverse($datas['maritialStatus']), isset($datas['Appli']['Maritial_Status__c'])?$datas['Appli']['Maritial_Status__c']:'', [  'class' => 'gaccca-select','required' => 'required']) !!}
             

            </div>
          </div>
        </div>
        <br />





        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-ecp">
            Emergency Contact Person outside the US <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
           
            {!! Form::text('applicant[Emergency_Contact_Person_outside_the_US__c]',isset($datas['Appli']['Emergency_Contact_Person_outside_the_US__c'])?$datas['Appli']['Emergency_Contact_Person_outside_the_US__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}

            <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-ecp">
            Relationship to Applicant <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            {!! Form::text('applicant[Relationship_to_Applicant__c]',isset($datas['Appli']['Relationship_to_Applicant__c'])?$datas['Appli']['Relationship_to_Applicant__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}
            <span class="gaccca-input-help-text">Please define the relationship between you and your emergency contact
              person, e.g. mother, father, sister, boyfriend, etc.</span>
          </div>
        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-email">
            Emergency Contact Person Email Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            

              {!! Form::text('applicant[Emergency_Contact_Person_Email_Address__c]',isset($datas['Appli']['Emergency_Contact_Person_Email_Address__c'])?$datas['Appli']['Emergency_Contact_Person_Email_Address__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}


            <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-phone">
            Emergency Contact Person Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           
              {!! Form::text('applicant[Emergency_Contact_Person_PhoneNumber__c]',isset($datas['Appli']['Emergency_Contact_Person_PhoneNumber__c'])?$datas['Appli']['Emergency_Contact_Person_PhoneNumber__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}

            <span class="gaccca-input-help-text">Please always provide the country code..</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-address">
            Emergency Contact Person Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            {!! Form::textarea('applicant[Emergency_Contact_Person_Address__c]',isset($datas['Appli']['Emergency_Contact_Person_Address__c'])?$datas['Appli']['Emergency_Contact_Person_Address__c']:'',array('class'=>'gaccca-textarea','required' => 'required')); !!}

            <span class="gaccca-input-help-text">Street, App #, Zip Code, City, Country</span>
          </div>
        </div>

        <br/>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-nou">
            Name of University <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            
              {!! Form::text('applicant[Name_of_University__c]',isset($datas['Appli']['Name_of_University__c'])?$datas['Appli']['Name_of_University__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}

          </div>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fos">
            Field of Study <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           
            {!! Form::text('applicant[Field_of_Study__c]',isset($datas['Appli']['Field_of_Study__c'])?$datas['Appli']['Field_of_Study__c']:'',array('class'=>'gaccca-input','required' => 'required')); !!}

          </div>
        </div>





        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-tod">Type of Degree
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
              
              
              {!! Form::select('applicant[Type_of_Degree__c]', array_reverse($datas['typeOfDegree']), isset($datas['Appli']['Type_of_Degree__c'])?$datas['Appli']['Type_of_Degree__c']:'', [  'class' => 'gaccca-select','required' => 'required']) !!}


            </div>
          </div>
        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-egd">
            (Expected) Graduation Date <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            {!! Form::text('graduationDate',isset($datas['graduationDate'])?$datas['graduationDate']:'',array('class'=>'gaccca-input-date','required' => 'required')); !!}

          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-tod">Work Experience in your Field of Study after
            Graduation
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
            {!! Form::select('applicant[Work_Experience_in_your_Field_of_Study_a__c]', array_reverse($datas['workExperience']), isset($datas['Appli']['Work_Experience_in_your_Field_of_Study_a__c'])?$datas['Appli']['Work_Experience_in_your_Field_of_Study_a__c']:'', [  'class' => 'gaccca-select','required' => 'required']) !!}
            </div>
          </div>
        </div>
        <br />
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            Copy of Your Passport <span class="gaccca-text-required" title="required">*</span></label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">

              {!!Form::file('passport',['required' => 'required']);!!}

              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Please only provide a picture of the photo page of your passport.</span>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            English CV / Resume <span class="gaccca-text-required" title="required">*</span></label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              {!!Form::file('resume',['required' => 'required']);!!}
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
              {!!Form::file('status_verification',['required' => 'required']);!!}

              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Submit a copy of your Bachelor's or Master's degree or a copy of your
            Certificate of Enrollment as a student.</span>
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

        {!! Form::submit('Save &amp; Continue',array('class'=>'gaccca-button-save gaccca-button-save-margin')); !!}

      </div>

    </div>


    {!! Form::close() !!}

  </div>
  @include('common.footer')
<!-- </body>
<script src="https://code.jquery.com/jquery-3.x-git.min.js"></script>
<script>
  function openNav() {
    document.getElementById("mySidepanel").style.display = "block";

  }

  function closeNav() {
    document.getElementById("mySidepanel").style.display = "none";
  }

  $(document).ready(function () {
    $(window).resize(function () {
      if ($(window).width() >= 1093) {
        document.getElementById("mySidepanel").style.display = "none";
      }
    });
  });

</script>


<script>
  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("gaccca-dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>


</html> -->