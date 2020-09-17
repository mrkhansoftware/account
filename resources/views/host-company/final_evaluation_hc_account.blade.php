@include('common.header_without_menu')

@include('common.signScript');


{!! Form::open(['action' => 'FinalEvaluationHostComController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Final Evaluation</h1>
      @if (isset($datas['onfrmSubmitted']) && !$datas['onfrmSubmitted'])
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>The purpose of this form is for GACC California to understand your general impressions of your intern/trainee. </p>
            <p>
            The completion of this form is also required by the U.S. Department of State. Please note that this form is not valid unless all fields are completed. </p>
            <p>
            Please sign the form and send it to us as a scanned email attachment. The information you provide will be kept confidential.
            </p>
           <p> Please take 10 minutes to fill out this form.    
        </p>
      </div>

      <h2 class="gaccca-h2-padding">General Information</h2>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
       


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of Supervisor   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" name="onfrm[Name_of_Supervisor__c]"  value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}"  id="text-input-id-1"  required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of Host Company   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="onfrm[Name_of_Host_Company__c]"  value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}"   type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Current Business Address   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <textarea name="onfrm[Current_U_S_Address__c]"   required=""  class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>

                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Zip Code, City, State    <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="onfrm[Zip_Code__c]"  value="{{isset($datas['onfrm']['Zip_Code__c'])?$datas['onfrm']['Zip_Code__c']:''}}"   type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Business Phone Number   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="onfrm[Phone_Number__c]"  value="{{isset($datas['onfrm']['Phone_Number__c'])?$datas['onfrm']['Phone_Number__c']:''}}"   type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Business Email Address   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="onfrm[Email_Address__c]"  value="{{isset($datas['onfrm']['Email_Address__c'])?$datas['onfrm']['Email_Address__c']:''}}"   type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
             
                
                
              </div>
            </div>
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of the Intern / Trainee   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="onfrm[Name_of_Intern__c]"  value="{{isset($datas['onfrm']['Name_of_Intern__c'])?$datas['onfrm']['Name_of_Intern__c']:''}}"   type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
             
                
                
              </div>
            </div>
          </div>
  

       
    
  
          </div>


          <h2 class="gaccca-h2-padding">Evaluation of the German American Chamber of Commerce California</h2>




          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-2">
                    The level of contact I have had with GACC California has been sufficient. <span class="gaccca-text-required" title="required">*</span> </label><br/>
                    <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                    @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_easy_contact__c'])
                
                    <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
              </div>
            </div>




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    GACC California successfully answered my questions and/or helped resolve situations concerning the program.<span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_solve_problems__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>


      
      

         
           





              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    GACC California helped make the intern/trainee visa process go smoothly. <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_process_smoothly__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>



            

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
              I would recommend GACC California as a J-1 visa sponsor to future interns/trainees.<span class="gaccca-text-required" title="required">*</span>
            </label><br/>
                      <span class="gaccca-file-help-text-color">1=poor / 5=excellent</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'I_would_recommend_an_internship_training__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Leave an additional comment concerning GACCCA  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea name="onfrm[comments_concerning_host_company__c]"   required=""  class="gaccca-textarea">{{isset($datas['onfrm']['comments_concerning_host_company__c'])?$datas['onfrm']['comments_concerning_host_company__c']:''}}</textarea>
                    
                  </div>
                </div>
              </div>


              <h2 class="gaccca-h2-padding">Evaluation of Intern/ Trainee</h2>

                      

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee was friendly  <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'Members_of_staff_are_friendly__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>

              
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee was reliable <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'The_intern_reliable__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>

              

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee had the necessary qualifications and background for this internship/training. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'The_intern_qualifications__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>
            










              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee was punctual and had a good work ethic <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'good_relationshop_co_workers__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>
            







              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee was motivated/enthusiastic <span class="gaccca-text-required" title="required">*</span>   </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'The_intern_was_motivated__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>
            




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee adjusted well to the business environment. <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'adjusted_the_business_environment__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>
            




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee was flexible and accepting of changes in the work environment. <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1=not well / 5=perfectly fine</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'My_internship_training_is_challenging__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>

              



      
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee made a positive contribution to the firm. <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1=not well / 5=perfectly fine</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'My_host_company_made_me_feel_welcome__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>












            
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Have you encountered any problems with the intern/trainee? <span class="gaccca-text-required" title="required">*</span> <span class="gaccca-text-required" title="required">*</span> </label>
                                     
                        <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-problems-no" value="radio-problems-no" name="problems" checked="" />
                          <label class="gaccca-radio__label" for="radio-problems-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-problems-yes" value="radio-problems-yes" name="problems" />
                          <label class="gaccca-radio__label" for="radio-problems-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->
                      
                        
                        @include('common.radioGrp',['fieldName' =>'I_have_encountered_problems_with_differe','obj'=>'onfrm','fieldApi'=>'I_have_encountered_problems_with_differe__c','required'=>'required'])
                    
                  </div>  
                  </div>
            </div>







            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    If yes, please specify:  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea name="onfrm[If_yes_specify__c]" required=""  class="gaccca-textarea">{{isset($datas['onfrm']['If_yes_specify__c'])?$datas['onfrm']['If_yes_specify__c']:''}}</textarea>
                    
                  </div>
                </div>
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Could these problems be resolved? <span class="gaccca-text-required" title="required">*</span> </label>
                   
                  
                        <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-resolved-no" value="radio-resolved-no" name="resolved" checked="" />
                          <label class="gaccca-radio__label" for="radio-resolved-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-resolved-yes" value="radio-resolved-yes" name="resolved" />
                          <label class="gaccca-radio__label" for="radio-resolved-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->
                      
                        @include('common.radioGrp',['fieldName' =>'encountered_problems_with_food','obj'=>'onfrm','fieldApi'=>'encountered_problems_with_food__c','required'=>'required'])
                    
                    
                  </div>  
                  </div>
            </div>









            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    How well has the intern/trainee performed tasks/activities/projects <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= very poorly... 5= very well</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'I_am_involved_in_activities_within_my_lo__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    Please list 3 major tasks/projects the intern/trainee has actively contributed to/worked on   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea name="onfrm[Please_list_3_major_tasks_actively_contr__c]"  required=""  class="gaccca-textarea">{{isset($datas['onfrm']['Please_list_3_major_tasks_actively_contr__c'])?$datas['onfrm']['Please_list_3_major_tasks_actively_contr__c']:''}}</textarea>
    
                    
                    
                    
                  </div>
                </div>
              </div>
    


              
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    What have been the intern/trainee's strongest attributes while at your company?   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea name="onfrm[What_have_been_strongest_attributes__c]"   required=""  class="gaccca-textarea">{{isset($datas['onfrm']['What_have_been_strongest_attributes__c'])?$datas['onfrm']['What_have_been_strongest_attributes__c']:''}}</textarea>
    
                    
                  </div>
                </div>
              </div>
    


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Did you stick to the intern/trainee's training plan? <span class="gaccca-text-required" title="required">*</span> </label>
                   
                 
                        <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-training-no" value="radio-training-no" name="training" checked="" />
                          <label class="gaccca-radio__label" for="radio-training-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-training-yes" value="radio-training-yes" name="training" />
                          <label class="gaccca-radio__label" for="radio-training-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->
                        @include('common.radioGrp',['fieldName' =>'Did_you_stick_training_plan','obj'=>'onfrm','fieldApi'=>'Did_you_stick_training_plan__c','required'=>'required'])
                    
                  </div>  
                  </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    If no, please specify   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea name="onfrm[If_no_specify__c]"   required=""  class="gaccca-textarea">{{isset($datas['onfrm']['If_no_specify__c'])?$datas['onfrm']['If_no_specify__c']:''}}</textarea>
    
                    
                  </div>
                </div>
              </div>
    





              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee put constructive criticism into practice and made progress. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'put_constructive_criticism_into_practice__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee performed well in a team. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'performed_well_in_a_team__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee's ability to multi-task/prioritize was excellent. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'ability_to_multi_task_excellent__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee's command of English has improved throughout the internship/training.<span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'english_improved__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    Please comment on the cultural advantages of hosting a J-1 intern/trainee at your company <span class="gaccca-text-required" title="required">*</span>   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea name="onfrm[Please_comment_cultural_advantages__c]"   required=""  class="gaccca-textarea">{{isset($datas['onfrm']['Please_comment_cultural_advantages__c'])?$datas['onfrm']['Please_comment_cultural_advantages__c']:''}}</textarea>
                  </div>
                </div>
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    If applicable, please let us know if there was anything that did not run smoothly. <span class="gaccca-text-required" title="required">*</span> <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea name="onfrm[If_applicable_run_smoothly__c]"  required=""  class="gaccca-textarea">{{isset($datas['onfrm']['If_applicable_run_smoothly__c'])?$datas['onfrm']['If_applicable_run_smoothly__c']:''}}</textarea>
                  </div>
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern actively and enthusiastically participated in American cultural activities. <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'If_Applicable_Please_Specify__c'])
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>








              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    Please name a few cultural activities your company let the intern/trainee be part of <span class="gaccca-text-required" title="required">*</span> <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea name="onfrm[Please_state_a_few_cultural_activities__c]"  required=""  class="gaccca-textarea">{{isset($datas['onfrm']['Please_state_a_few_cultural_activities__c'])?$datas['onfrm']['Please_state_a_few_cultural_activities__c']:''}}</textarea>
  
                  </div>
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    Overall, how satisfied are you with the intern/trainee's performance and progress? <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1=not well / 5=perfectly fine</span>
                      @include('common.starRating',['required'=>'required', 'fieldName' =>'Overall_I_am_having_a_great_experience_w__c'])
                  
                
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Please add any additional comments or concerns you might have:  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                    <input type="text" name="onfrm[Please_add_any_additional_comments_conce__c]"  value="{{isset($datas['onfrm']['Please_add_any_additional_comments_conce__c'])?$datas['onfrm']['Please_add_any_additional_comments_conce__c']:''}}"    id="text-input-id-3"  required="" class="gaccca-input" />
                    <input type="hidden" name='EncId'  value="{{$datas['encryptId']}}"/>
                    
                  </div>
                </div>
              </div>



              </div>


              <h2 class="gaccca-h2-padding">Please Note:</h2>

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                  <div class="gaccca-form-element gaccca-form-element-margin">
                   <p>You can sign this evaluation digital online with your mouse or on your phone with your finger.</p>
                   <p>After signing we will save the evaluation as a pdf in our records.</p> 
                   <p>Should you have any questions or concerns, please email us at visa@gaccca.org.</p> 
                   <p>In case of an emergency, please call us at our 24-hour number (toll-free): 888-936-2489.</p> 
                   <p>We hope you continue to have a positive experience with your intern/trainee.</p> 
                      
                    </div>
                  </div>
                </div>



                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                    @include('common.signHTML');
                      </div>
                    </div>




        <button class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>
        @else
                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                          <div class="gaccca-form-element gaccca-form-element-margin">
<p>     Thank you for submitting your evaluation.
    </p>
    <p>
                                              Form submitted on &nbsp; {{$datas['formSubmittedDate']}}
                                          </p>
    <p>
        Enjoy the remainder of your time at your host company
    </p>
    </div></div></div>
@endif  


    
                  </div>

{!! Form::close() !!}
@include('common.footer')