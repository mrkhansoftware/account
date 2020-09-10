@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">J-1 Visa Participant Information</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>Please fill in the required fields below about yourself. Please upload a copy of your passport, a most recent
        complete CV / Resume in English with exact dates as well as an English certificate of enrollment or diploma (in
        case you do not have an English version, please complete the form "Proof of Student Status" or "Proof of Student
        Graduation")
      </p>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            <p><strong>Templates:</strong></p>

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
              <input type="radio" id="radio-citizenship-no" value="radio-citizenship-no" name="citizenship"
                checked="" />
              <label class="gaccca-radio__label" for="radio-citizenship-no">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
              <input type="radio" id="radio-citizenship-yes" value="radio-citizenship-yes" name="citizenship" />
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
            <input name="App[Citizenship__c]"  value="{{isset($datas['App']['Citizenship__c'])?$datas['App']['Citizenship__c']:''}}" type="text" id="text-input-id-c" placeholder="Citizenship " required="" class="gaccca-input" />
            <span class="gaccca-input-help-text">Please also list your dual citizenship here.</span>
          </div>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-colpr">
            Country of Legal Permanent Residency <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="App[Country_of_Legal_Permanent_Residency__c]"  value="{{isset($datas['App']['Country_of_Legal_Permanent_Residency__c'])?$datas['App']['Country_of_Legal_Permanent_Residency__c']:''}}" type="text" id="text-input-id-colpr" placeholder="Country of Legal Permanent Residency" required=""
              class="gaccca-input" />

          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-us-visa">
            Have you ever applied for a US visa? <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text" name="App[haveYouEverAppliedForUSVisa__c]"  value="{{isset($datas['App']['haveYouEverAppliedForUSVisa__c'])?$datas['App']['haveYouEverAppliedForUSVisa__c']:''}}" id="text-input-id-us-visa" placeholder="Have you ever applied for a US visa" required=""
              class="gaccca-input" />
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
              <select class="gaccca-select" id="select-01">
                <option>select</option>

              </select>
            </div>
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-cob">
            City of Birth <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text" name="App[City_of_birth__c]"  value="{{isset($datas['App']['City_of_birth__c'])?$datas['App']['City_of_birth__c']:''}}" id="text-input-id-cob" placeholder="City of Birth" required="" class="gaccca-input" />

          </div>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-ms">Marital Status
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
              <select class="gaccca-select" id="select-ms">
                <option>select</option>

              </select>
            </div>
          </div>
        </div>
        <br />





        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-ecp">
            Emergency Contact Person outside the US <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <input name="App[Emergency_Contact_Person_outside_the_US__c]"  value="{{isset($datas['App']['Emergency_Contact_Person_outside_the_US__c'])?$datas['App']['Emergency_Contact_Person_outside_the_US__c']:''}}" type="text" id="text-input-id-ecp" placeholder="Emergency Contact Person outside the US" required=""
              class="gaccca-input" />
            <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-ecp">
            Relationship to Applicant <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="App[Relationship_to_Applicant__c]"  value="{{isset($datas['App']['Relationship_to_Applicant__c'])?$datas['App']['Relationship_to_Applicant__c']:''}}" type="text" id="text-input-id-ecp" required="" class="gaccca-input" />
            <span class="gaccca-input-help-text">Please define the relationship between you and your emergency contact
              person, e.g. mother, father, sister, boyfriend, etc.</span>
          </div>
        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-email">
            Emergency Contact Person Email Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="App[Emergency_Contact_Person_Email_Address__c]"  value="{{isset($datas['App']['Emergency_Contact_Person_Email_Address__c'])?$datas['App']['Emergency_Contact_Person_Email_Address__c']:''}}" type="text" id="text-input-id-e-email" placeholder="Emergency Contact Person Email Address"
              required="" class="gaccca-input" />
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-phone">
            Emergency Contact Person Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="App[Emergency_Contact_Person_PhoneNumber__c]"  value="{{isset($datas['App']['Emergency_Contact_Person_PhoneNumber__c'])?$datas['App']['Emergency_Contact_Person_PhoneNumber__c']:''}}" type="text" id="text-input-id-e-phone" placeholder="Emergency Contact Person Phone Number"
              required="" class="gaccca-input" />
            <span class="gaccca-input-help-text">Please always provide the country code..</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-e-address">
            Emergency Contact Person Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <textarea name="App[Emergency_Contact_Person_Address__c]"  value="{{isset($datas['App']['Emergency_Contact_Person_Address__c'])?$datas['App']['Emergency_Contact_Person_Address__c']:''}}" placeholder="Enter Your Address" required="" class="gaccca-textarea"></textarea>
            <span class="gaccca-input-help-text">Street, App #, Zip Code, City, Country</span>
          </div>
        </div>

        <br/>







        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-nou">
            Name of University <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="App[Name_of_University__c]"  value="{{isset($datas['App']['Name_of_University__c'])?$datas['App']['Name_of_University__c']:''}}" type="text" id="text-input-id-nou" placeholder="Name of University " required=""
              class="gaccca-input" />
          </div>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fos">
            Field of Study <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="App[Field_of_Study__c]"  value="{{isset($datas['App']['Field_of_Study__c'])?$datas['App']['Field_of_Study__c']:''}}" type="text" id="text-input-id-fos" placeholder="Field of Study" required="" class="gaccca-input" />
          </div>
        </div>





        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-tod">Type of Degree
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
              <select class="gaccca-select" id="select-tod">
                <option>select</option>

              </select>
            </div>
          </div>
        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-egd">
            (Expected) Graduation Date <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="graduationDate"  value="{{isset($datas['graduationDate'])?$datas['graduationDate']:''}}" type="text" id="text-input-id-egd" required="" class="gaccca-input-date" />
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-tod">Work Experience in your Field of Study after
            Graduation
            <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
              <select class="gaccca-select" id="select-tod">
                <option>select</option>

              </select>
            </div>
          </div>
        </div>
        <br />








        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            Copy of Your Passport <span class="gaccca-text-required" title="required">*</span></label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input name="filePassport" type="file" id="myFile" name="filename" />
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
              <input name="fileResume" type="file" id="myFile" name="filename" />
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
              <input name="fileVerification" type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Submit a copy of your Bachelor's or Master's degree or a copy of your
            Certificate of Enrollment as a student.</span>
        </div>


        <h2 class="gaccca-h2-padding">Host Company Information</h2>

        <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-foi">
                  Field of Internship     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Field_of_Internship__c]"  value="{{isset($datas['App']['Field_of_Internship__c'])?$datas['App']['Field_of_Internship__c']:''}}" type="text" id="text-input-id-foi" required="" class="gaccca-input" />
             
              <span class="gaccca-input-help-text">e.g. Marketing, Business Development, Mechanical  Engineering, Architecture, Graphic Design</span>
              
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-ssdoi">
                  Scheduled Start Date of Internship/Training     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="Scheduled_Start"  value="{{isset($datas['Scheduled_Start'])?$datas['Scheduled_Start']:''}}" type="text" id="text-input-id-ssdoi" required="" class="gaccca-input-date" />
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-sedoi">
                  Scheduled End Date of Internship/Training     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="Scheduled_End"  value="{{isset($datas['Scheduled_End'])?$datas['Scheduled_End']:''}}" type="text" id="text-input-id-sedoi" required="" class="gaccca-input-date" />
            </div>
          </div>
          <br/>

          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-hcn">
                  Host Company Name     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Host_Company__c]"  value="{{isset($datas['App']['Host_Company__c'])?$datas['App']['Host_Company__c']:''}}" type="text" id="text-input-id-hcn" required="" class="gaccca-input" />
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-hcw">
                  Host Company Website     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Host_Company_Website__c]"  value="{{isset($datas['App']['Host_Company_Website__c'])?$datas['App']['Host_Company_Website__c']:''}}" type="text" id="text-input-id-hcw" required="" class="gaccca-input" />
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-hca">
                  Host Company Address     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Address__c]"  value="{{isset($datas['App']['Address__c'])?$datas['App']['Address__c']:''}}" type="text" id="text-input-id-hca" required="" class="gaccca-input" />
            </div>
          </div>

          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-city">
                  City     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[City__c]"  value="{{isset($datas['App']['City__c'])?$datas['App']['City__c']:''}}" type="text" id="text-input-id-city" required="" class="gaccca-input" />
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-zipcode">
                 Zip Code     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[ZIP_Code__c]"  value="{{isset($datas['App']['ZIP_Code__c'])?$datas['App']['ZIP_Code__c']:''}}" type="text" id="text-input-id-zipcode" required="" class="gaccca-input" />
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="select-01">State  <span class="gaccca-text-required">*</span></label>
            <div class="gaccca-form-element__control">
              <div class="gaccca-select_container">
                <select class="gaccca-select" id="select-ms">                      
                  <option>select</option>
                  
                </select>
              </div>
            </div>
          </div>

          <br/>

          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-hccp">
                 Host Company Contact Person     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Contact_Person__c]"  value="{{isset($datas['App']['Contact_Person__c'])?$datas['App']['Contact_Person__c']:''}}" type="text" id="text-input-id-hccp" required="" class="gaccca-input" />
            
            <span class="gaccca-input-help-text">Enter the name of the person who will be your <br/> supervisor/mentor during your internship/training.</span>
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-ccea">
                 Company Contact email address     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Email_Address__c]"  value="{{isset($datas['App']['Email_Address__c'])?$datas['App']['Email_Address__c']:''}}" type="text" id="text-input-id-ccea" required="" class="gaccca-input" />
            </div>
          </div>

          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-ccp">
                 Company Contact phone     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Phone_Number__c]"  value="{{isset($datas['App']['Phone_Number__c'])?$datas['App']['Phone_Number__c']:''}}" type="text" id="text-input-id-ccp" required="" class="gaccca-input" />
            
            <span class="gaccca-input-help-text">Use the following format +1-563-6325685</span>
            </div>
          </div>
          <br/>

          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-hpw">
                 Hours per week     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Hours_Per_Week__c]"  value="{{isset($datas['App']['Hours_Per_Week__c'])?$datas['App']['Hours_Per_Week__c']:''}}" type="text" id="text-input-id-hpw" required="" class="gaccca-input" />
            </div>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">

            <div class="gaccca-form-element__control">
                <label class="gaccca-form-element__label" for="text-input-id-stipend">
                  Do you receive a stipend?  <span class="gaccca-text-required" title="required">*</span> </label>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-stipend-no" value="radio-stipend-no" name="stipend" checked="" />
                    <label class="gaccca-radio__label" for="radio-stipend-no">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">No</span>
                    </label>
                    <input type="radio" id="radio-stipend-yes" value="radio-stipend-yes" name="stipend" />
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
                 If yes, how much?     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[If_Yes_How_Much_Stipend__c]"  value="{{isset($datas['App']['If_Yes_How_Much_Stipend__c'])?$datas['App']['If_Yes_How_Much_Stipend__c']:''}}" type="text" id="text-input-id-howmuch" required="" class="gaccca-input" />
            <br/>
            <span class="gaccca-input-help-text">Please enter the amount paid to you per hour, week  or month, e.g 16 USD/hour, 1300 USD/month, 500  USD/week</span>
            </div>
          </div>

          <br/>



          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-vohiupm">
              <strong>   Additional compensation offered by your host company </strong>
                <br/> - Value of Housing in USD per month   
                    <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Value_Of_Housing_In_USD_Per_Month__c]"  value="{{isset($datas['App']['Value_Of_Housing_In_USD_Per_Month__c'])?$datas['App']['Value_Of_Housing_In_USD_Per_Month__c']:''}}" type="text" id="text-input-id-vohiupm" required="" class="gaccca-input" />
            
            <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
            </div>
          </div>



          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-votiupm">
                 - Value of Transportation in USD per month     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Value_Of_Transportation_In_USD_Per_Month__c]"  value="{{isset($datas['App']['Value_Of_Transportation_In_USD_Per_Month__c'])?$datas['App']['Value_Of_Transportation_In_USD_Per_Month__c']:''}}" type="text" id="text-input-id-votiupm" required="" class="gaccca-input" />
            
            <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
            </div>
          </div>



          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-tfeiu">
                 - Total Flight Expenses in USD     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Total_Flight_Expenses_In_USD__c]"  value="{{isset($datas['App']['Total_Flight_Expenses_In_USD__c'])?$datas['App']['Total_Flight_Expenses_In_USD__c']:''}}" type="text" id="text-input-id-tfeiu" required="" class="gaccca-input" />
            
            <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
            </div>
          </div>



          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-howmuch">
                - Other compensation     <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input name="App[Other_Compensation__c]"  value="{{isset($datas['App']['Other_Compensation__c'])?$datas['App']['Other_Compensation__c']:''}}" type="text" id="text-input-id-howmuch" required="" class="gaccca-input" />
            
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


        <button class="gaccca-button-save gaccca-button-save-margin">Submit Participant Details</button>


      </div>




    </div>

  </div>


{!! Form::close() !!}
@include('common.footer')