@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Placement Program Registration Form</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>If you would like to join our placement program please fill out this form and book our service. Please submit only one booking! We will review your booking and schedule a welcome call with you within in the next few days.</p>
      </div>
      <h2 class="gaccca-h2-padding">Personal Data</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
      
      
      
      
      
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
              <div class="gaccca-form-element__control">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                    Salutation: <span class="gaccca-text-required" title="required">*</span> </label>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-ms" value="radio-ms" name="salutation" checked="" />
                    <label class="gaccca-radio__label" for="radio-ms">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">Ms.</span>
                    </label>
                    <input type="radio" id="radio-mr" value="radio-mr" name="salutation" />
                    <label class="gaccca-radio__label" for="radio-mr">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">Mr.</span>
                    </label>
                  </span>
                 
                </div>
  
            </div>
             
          </div>
      
      
      
      
      
      
      
      
      
      
      
      
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin gaccca-has-error">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              First Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-1" placeholder="First Name" required="" class="gaccca-input" />
            
              
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
              Last Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-2" placeholder="Last Name" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-2">
                Nationality/Citizenship <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-2" placeholder="Last Name" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>
  
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-3">
              Date of birth <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element gaccca-form-element-margin-date">
              <input type="text" id="text-input-id-3" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
              
            </div>
          </div>
  
  
        </div>
  
  
   
           <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                City of birth <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-4" placeholder="City of birth" required="" class="gaccca-input" />
                
              </div>
          </div>
  
        </div>




        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                  Your Email <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-4" placeholder="City of birth" required="" class="gaccca-input" />
                  
                </div>
            </div>
    
          </div>




          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                  Phone <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-4" placeholder="City of birth" required="" class="gaccca-input" />
                  
                </div>
            </div>
    
          </div>

      </div>
      <h2 class="gaccca-h2-padding">Street</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
       
      
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Street <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
             
                <textarea  placeholder="Enter Your Address" required="" class="gaccca-textarea"></textarea>

            </div>
          </div>
        </div>
       
       
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-9">
              City <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-9" placeholder="City" required="" class="gaccca-input" />
            
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-10">
              Zip  <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-10" placeholder="Zip Code" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-11">
              Country <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-11" placeholder="Country" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
  
      </div>


      <h2 class="gaccca-h2-padding">Education</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
       
      
       
       
       
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-su">
                School or University <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-su" placeholder="School or University" required="" class="gaccca-input" />
            
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-fs">
                Field of Study  <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-fs" placeholder="Field of Study" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
       
  

 <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-degree">
              Degree Level <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-degree" placeholder="Degree Level" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-semesters">
                Number of semesters completed <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-semesters" placeholder="Number of semesters completed" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Specific Skills <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
               
                  <textarea  placeholder="Specific Skills" required="" class="gaccca-textarea"></textarea>
                  <span class="gaccca-input-help-text">Please name important skills you have which are relevant for the internship in the USA.</span>
  
              </div>
            </div>
          </div>



          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-semesters">
                Native Language <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-semesters" placeholder="Native Language" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>




          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
              <div class="gaccca-form-element__control">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                    Graduated <span class="gaccca-text-required" title="required">*</span> </label>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-yes" value="radio-yes" name="graduated" checked="" />
                    <label class="gaccca-radio__label" for="radio-yes">
                      <span class="gaccca-radio_faux"></span>
                      <span>Yes</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-no" value="radio-no" name="graduated" />
                    <label class="gaccca-radio__label" for="radio-no">
                      <span class="gaccca-radio_faux"></span>
                      <span>No</span>
                    </label>
                  </span>

                  <span class="gaccca-radio">
                    <input type="radio" id="radio-se" value="radio-se" name="graduated" />
                    <label class="gaccca-radio__label" for="radio-se">
                      <span class="gaccca-radio_faux"></span>
                      <span>Still Enrolled</span>
                    </label>
                  </span>


                </div>
  
            </div>
             
          </div>







          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
              <div class="gaccca-form-element__control">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                    English Language Skills <span class="gaccca-text-required" title="required">*</span> </label>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-beginner" value="radio-beginner" name="english_skills" checked="" />
                    <label class="gaccca-radio__label" for="radio-beginner">
                      <span class="gaccca-radio_faux"></span>
                      <span>Beginner</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-intermediate" value="radio-intermediate" name="english_skills" />
                    <label class="gaccca-radio__label" for="radio-intermediate">
                      <span class="gaccca-radio_faux"></span>
                      <span>Intermediate</span>
                    </label>
                  </span>

                  <span class="gaccca-radio">
                    <input type="radio" id="radio-advanced" value="radio-advanced" name="english_skills" />
                    <label class="gaccca-radio__label" for="radio-advanced">
                      <span class="gaccca-radio_faux"></span>
                      <span>Advanced</span>
                    </label>
                  </span>

                  <span class="gaccca-radio">
                    <input type="radio" id="radio-fluent" value="radio-fluent" name="default" />
                    <label class="gaccca-radio__label" for="radio-fluent">
                      <span class="gaccca-radio_faux"></span>
                      <span>Fluent</span>
                    </label>
                  </span>


                </div>
  
            </div>
             
          </div>







          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
              <div class="gaccca-form-element__control">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                    Does your internship have to be confirmed by your university? <span class="gaccca-text-required" title="required">*</span> </label>
                 
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-internship-no" value="radio-internship-no" name="internship" />
                    <label class="gaccca-radio__label" for="radio-internship-no">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">No</span>
                    </label>
                    <input type="radio" id="radio-internship-yes" value="radio-internship-yes" name="internship" checked="" />
                    <label class="gaccca-radio__label" for="radio-internship-yes">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">Yes</span>
                    </label>
                  </span>

                

                

                </div>
  
            </div>
             
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-fss">
                Upload your most current resume/CV <br/> in PDF-format <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                      <label class="gaccca-file">
                          <input type="file"  id="myFile" name="filename"/>
                          <span class="gaccca-file-custom">Choose file...</span>
  
                      </label>
                  </div>
            </div>
          </div>





         







  
  
      </div>




      <h2 class="gaccca-h2-padding">Placement Preference</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-industry">
                Industry / Field <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-industry" placeholder="School or University" required="" class="gaccca-input" />
            
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-region">
                Region / City  <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-region" placeholder="Field of Study" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
       
  

 <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-start-date">
                Start Date (month / year) <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-start-date" placeholder="Start Date (month / year)" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-semesters">
                Duration in Months <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-semesters" placeholder="Duration in Months" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Additional notes on your preferences <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
               
                  <textarea  placeholder="Additional notes on your preferences" required="" class="gaccca-textarea"></textarea>
                  
              </div>
            </div>
          </div>


    
      </div>


      <h2 class="gaccca-h2-padding">Placement Alternative</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-pa-industry">
                Industry / Field <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-pa-industry" placeholder="School or University" required="" class="gaccca-input" />
            
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-pa-region">
                Region / City  <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-pa-region" placeholder="Field of Study" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
       
  

 <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-pa-start-date">
                Start Date (month / year) <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-pa-start-date" placeholder="Start Date (month / year)" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-pa-duration">
                Duration in Months <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-pa-duration" placeholder="Duration in Months" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>




          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-tc">
                Terms and conditions 
                <span class="gaccca-text-required" title="required">*</span> </label><br/>
                <label class="gaccca-form-element__label" for="text-input-id-tcp">
                    Program 
                    <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              
                <br/><span class="gaccca-close-account-info">The program fee must be paid in full after you've received the invoice and the welcome call was successful and you got officially accepted into our program.<strong> The non-refundable application fee (enrollment fee) </strong> for all programs is 530 Euro's. The placement fee remains in our account until a successful placement was made (security deposit). Please refer to §5 and §8 of the terms of the programs. <br/><br/> Please read our <a href="#">Terms and Conditions for all Placement Programs carefully!</a> </span>
            </div>
          </div>



          <div class="gaccca-form-element gaccca-form-element-margin">
            <div class="gaccca-form-element__control">
              <div class="gaccca-checkbox">
                <input type="checkbox" name="term_condition" id="checkbox-unique-id-term_condition" value="checkbox-unique-id-term_condition"  />
                <label class="gaccca-checkbox__label" for="checkbox-unique-id-term_condition">
                  <span class="gaccca-checkbox_faux"></span>
                  <span class="gaccca-form-element__label">I have read, understood and accept the Terms and Conditions for the GACC California / IIEEX Internship Program</span>
                </label>
              </div>
            </div>
          </div>

        <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>
  
  
      </div>


    </div>
  

    {!! Form::close() !!}
@include('common.footer')