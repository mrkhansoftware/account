<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/gaccca_main_style_new.css') }}" >

</head>

<body>

  <div class="gaccca-header">
    <div class="gaccca-content-header">

      <div class="gaccca-grid gaccca-wrap">

        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

          <div class="gaccca-behind-the-logo gaccca-behind-the-logo-position">

            <!-- <img src="{!$Resource.iieex_new_logo}" /> -->
            <img src="{{ asset('images/logo/logo1.png') }}"/>

          </div>
          <ul class="gaccca-display-menu">

            <li><a href="#home">Placement Program</a></li>
            <li><a href="#home">J1 Program</a></li>
            <li><a href="#home">Sim Card</a></li>
            <li class="gaccca-dropdown">
              <a href="javascript:void(0)" class="gaccca-dropbtn">Profile</a>
              <div class="gaccca-dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Password</a>
                <a href="#">Close Account</a>
              </div>
            </li>
            <li><a href="#home">Logout</a></li>
          </ul>
          <button class="gaccca-openbtn gaccca-header-menu-button" onclick="openNav()">☰</button>

        </div>
      </div>
    </div>
  </div>
  <div id="mySidepanel" class="gaccca-sidenav gaccca-sidenav-display">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#about">Placement Program</a>
    <a href="#services">J1 Program</a>
    <a href="#clients">Sim Card</a>
    <button class="gaccca-dropdown-btn">Profile
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    <div class="gaccca-dropdown-container">
      <a href="#">My Profile</a>
      <a href="#">Password</a>
      <a href="#">Close Account</a>
    </div>
    <a href="#contact">Logout</a>
  </div>

  <div class="clear"></div>


  <div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Step 2/5 - Participant Information</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>Please fill in the required fields below about yourself. Please upload a copy of your passport, a most recent
        complete CV / Resume in English with exact dates as well as an English certificate of enrollment or diploma (in
        case you do not have an English version, please complete the form "Proof of Student Status" or "Proof of Student
        Graduation")
      </p>
    </div>


    {!! Form::open(['action' => 'ParticipantInformationAccountController@store', 'method' => 'POST']) !!}
    


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
             
                
   

    {!! Form::radio('applicant[citizenship_status]', 'no', true, array('id'=>'radio-citizenship-no')) !!}
                

              <label class="gaccca-radio__label" for="radio-citizenship-no">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
             
    
    {!! Form::radio('applicant[citizenship_status]', 'yes', false, array('id'=>'radio-citizenship-yes')) !!}

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
            
            {!! Form::text('applicant[citizenship]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}
            
            <span class="gaccca-input-help-text">Please also list your dual citizenship here.</span>
          </div>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-colpr">
            Country of Legal Permanent Residency <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           

            {!! Form::text('applicant[permanent_residency]',$datas['Appli']['Country_of_Legal_Permanent_Residency__c'],array('class'=>'gaccca-input')); !!}


          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-us-visa">
            Have you ever applied for a US visa? <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           
              {!! Form::text('applicant[applied_for_us_visa]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}
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

            {!! Form::select('applicant[country_of_birth]', ['L' => 'Large', 'S' => 'Small'], $datas['Appli']['Citizenship__c'], [  'class' => 'gaccca-select']) !!}
             
            </div>
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-cob">
            City of Birth <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
          
            {!! Form::text('applicant[city_of_birth]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}

          </div>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-ms">Marital Status
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
            

              {!! Form::select('applicant[marital_status]', ['L' => 'Large', 'S' => 'Small'], $datas['Appli']['Citizenship__c'], [  'class' => 'gaccca-select']) !!}
             

            </div>
          </div>
        </div>
        <br />





        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-ecp">
            Emergency Contact Person outside the US <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
           
            {!! Form::text('applicant[emergency_contact]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}

            <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-ecp">
            Relationship to Applicant <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            {!! Form::text('applicant[relationship_of_applicant]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}
            <span class="gaccca-input-help-text">Please define the relationship between you and your emergency contact
              person, e.g. mother, father, sister, boyfriend, etc.</span>
          </div>
        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-email">
            Emergency Contact Person Email Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            

              {!! Form::text('applicant[emergency_person_email]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}


            <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-phone">
            Emergency Contact Person Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           
              {!! Form::text('applicant[emergency_person_phone]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}

            <span class="gaccca-input-help-text">Please always provide the country code..</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-address">
            Emergency Contact Person Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            {!! Form::textarea('applicant[address]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-textarea')); !!}

            <span class="gaccca-input-help-text">Street, App #, Zip Code, City, Country</span>
          </div>
        </div>

        <br/>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-nou">
            Name of University <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            
              {!! Form::text('applicant[name_of_university]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}

          </div>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fos">
            Field of Study <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
           
            {!! Form::text('applicant[field_of_study]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}

          </div>
        </div>





        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-tod">Type of Degree
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
              
              
              {!! Form::select('applicant[type_of_degree]', ['L' => 'Large', 'S' => 'Small'], $datas['Appli']['Citizenship__c'], [  'class' => 'gaccca-select']) !!}


            </div>
          </div>
        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-egd">
            (Expected) Graduation Date <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            {!! Form::text('applicant[graduation_date]',$datas['Appli']['Citizenship__c'],array('class'=>'gaccca-input')); !!}

          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-tod">Work Experience in your Field of Study after
            Graduation
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
            {!! Form::select('applicant[work_experience]', ['L' => 'Large', 'S' => 'Small'], $datas['Appli']['Citizenship__c'], [  'class' => 'gaccca-select']) !!}
            </div>
          </div>
        </div>
        <br />
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            Copy of Your Passport </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">

              {!!Form::file('applicant_files[passport]');!!}

              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Please only provide a picture of the photo page of your passport.</span>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            English CV / Resume </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              {!!Form::file('applicant_files[resume]');!!}
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Please submit your most recent and up-to-date CV /Resume. Your CV must
            display exact dates for all positions. e.g. 04/2015-06/2017.</span>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            Student Status Verification </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              {!!Form::file('applicant_files[status_verification]');!!}

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
</body>
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


</html>