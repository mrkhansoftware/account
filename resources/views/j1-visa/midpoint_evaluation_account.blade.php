@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Mid-Point Evaluation</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Evaluations are a mandatory part of the J-1 Visa Program and required by the U.S. Department of State. Their completion is necessary for you to successfully complete your J-1 program. </p>
           <p>
            The purpose of this form is for us to understand your general impressions, opinions and reactions to life in the USA and to ensure the quality of your training or internship program.          
           </p>
           <p>
            Please take 10 minutes to fill out the form. Please note that this form is not valid unless all fields are completed. The information you provide will be kept confidential at al times.
           </p>
           <p>
            We hope that you have had an exceptional experience in the U.S. so far and that you enjoy the remainder of your time at your host company.    
        </p>
      </div>

      <h2 class="gaccca-h2-padding">General Information</h2>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of Intern/Trainee   <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" name="onfrm[Name_of_Intern__c]"  value="{{isset($datas['onfrm']['Name_of_Intern__c'])?$datas['onfrm']['Name_of_Intern__c']:''}}" id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
              <br/>
              
              
            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Current U.S. Address  <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
               
                  <textarea name="onfrm[Current_U_S_Address__c]"  required=""  class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>
                
              </div>
            </div>
          </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
                Zip Code, City, State  <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" name="onfrm[Zip_Code__c]"  value="{{isset($datas['onfrm']['Zip_Code__c'])?$datas['onfrm']['Zip_Code__c']:''}}" id="text-input-id-2" placeholder="Name of your Supervisor" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-3">
                Phone Number  <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element gaccca-form-element-margin-date">
              <input type="text" name="onfrm[Phone_Number__c]"  value="{{isset($datas['onfrm']['Phone_Number__c'])?$datas['onfrm']['Phone_Number__c']:''}}" id="text-input-id-3" placeholder="eMail-Adresse Supervisor" required="" class="gaccca-input" />
             
            </div>
          </div>
  
  
        </div>
  
  
   
           <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                Email Address   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="email" name="onfrm[Email_Address__c]"  value="{{isset($datas['onfrm']['Email_Address__c'])?$datas['onfrm']['Email_Address__c']:''}}"  id="text-input-id-4"  required="" class="gaccca-input" />
                
              </div>
          </div>
  
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                    Name of Host Company  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="onfrm[Name_of_Host_Company__c]"  value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}" id="text-input-id-4"  required="" class="gaccca-input" />
                  
                </div>
            </div>
    
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                    Name of Supervisor  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="onfrm[Name_of_Supervisor__c]"  value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}"  id="text-input-id-4"  required="" class="gaccca-input" />
                  
                </div>
            </div>
    
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
          Start of Internship/Training  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="Start_Internship"  value="{{isset($datas['Start_Internship'])?$datas['Start_Internship']:''}}" id="text-input-id-4"  required="" class="gaccca-input" />
                  
                  <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
                </div>
            </div>
    
          </div>

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                    End of Internship/Training  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="onfrm[Name__c]"  value="{{isset($datas['onfrm']['Name__c'])?$datas['onfrm']['Name__c']:''}}" id="text-input-id-4"  required="" class="gaccca-input" />
                  <br/>
                  <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
                </div>
            </div>
    
          </div>
          
            


          </div>


          <h2 class="gaccca-h2-padding">Host Company and Supervisor</h2>




          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              <div class="gaccca-form-element gaccca-form-element-margin">
               <p>Please let us know how you would rate and describe your experience at your host company.</p>
              </div>
            </div>
      
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-2">
                    My host company made me feel welcome  </label><br/>
                    <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                    <span class="gaccca-rating">
                        <input type="radio" class="gaccca-rating-input"
                            id="gaccca-rating-input-1-5" name="gaccca-rating-input-1"/>
                        <label for="gaccca-rating-input-1-5" class="gaccca-rating-star"></label>
                        <input type="radio" class="gaccca-rating-input"
                            id="gaccca-rating-input-1-4" name="gaccca-rating-input-1"/>
                        <label for="gaccca-rating-input-1-4" class="gaccca-rating-star"></label>
                        <input type="radio" class="gaccca-rating-input"
                            id="gaccca-rating-input-1-3" name="gaccca-rating-input-1"/>
                        <label for="gaccca-rating-input-1-3" class="gaccca-rating-star"></label>
                        <input type="radio" class="gaccca-rating-input"
                            id="gaccca-rating-input-1-2" name="gaccca-rating-input-1"/>
                        <label for="gaccca-rating-input-1-2" class="gaccca-rating-star"></label>
                        <input type="radio" class="gaccca-rating-input"
                            id="gaccca-rating-input-1-1" name="gaccca-rating-input-1"/>
                        <label for="gaccca-rating-input-1-1" class="gaccca-rating-star"></label>
                    </span>
                
                    <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
              </div>
            </div>




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      My host company/supervisor helped me to adjust to everyday life
                           in the firm.  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-2-5" name="gaccca-rating-input-2"/>
                          <label for="gaccca-rating-input-2-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-2-4" name="gaccca-rating-input-2"/>
                          <label for="gaccca-rating-input-2-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-2-3" name="gaccca-rating-input-2"/>
                          <label for="gaccca-rating-input-2-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-2-2" name="gaccca-rating-input-2"/>
                          <label for="gaccca-rating-input-2-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-2-1" name="gaccca-rating-input-2"/>
                          <label for="gaccca-rating-input-2-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>


      
      
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
      
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-3">
                    As applicable:please state how exactly they did so 
                    <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element gaccca-form-element-margin-date">
                  <input type="text" name="onfrm[Name__c]"  value="{{isset($datas['onfrm']['Name__c'])?$datas['onfrm']['Name__c']:''}}"  id="text-input-id-3"  required="" class="gaccca-input" />
                  
                </div>
              </div>
      
      
            </div>






            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      I have a good relationship with my supervisor  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-3-5" name="gaccca-rating-input-3"/>
                          <label for="gaccca-rating-input-3-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-3-4" name="gaccca-rating-input-3"/>
                          <label for="gaccca-rating-input-3-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-3-3" name="gaccca-rating-input-3"/>
                          <label for="gaccca-rating-input-3-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-3-2" name="gaccca-rating-input-3"/>
                          <label for="gaccca-rating-input-3-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-3-1" name="gaccca-rating-input-3"/>
                          <label for="gaccca-rating-input-3-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>

              


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                       My supervisor is helpful.  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-4-5" name="gaccca-rating-input-4"/>
                          <label for="gaccca-rating-input-4-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-4-4" name="gaccca-rating-input-4"/>
                          <label for="gaccca-rating-input-4-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-4-3" name="gaccca-rating-input-4"/>
                          <label for="gaccca-rating-input-4-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-4-2" name="gaccca-rating-input-4"/>
                          <label for="gaccca-rating-input-4-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-4-1" name="gaccca-rating-input-4"/>
                          <label for="gaccca-rating-input-4-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>

              

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      My supervisor is always there to answer my questions.  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-5-5" name="gaccca-rating-input-5"/>
                          <label for="gaccca-rating-input-5-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-5-4" name="gaccca-rating-input-5"/>
                          <label for="gaccca-rating-input-5-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-5-3" name="gaccca-rating-input-5"/>
                          <label for="gaccca-rating-input-5-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-5-2" name="gaccca-rating-input-5"/>
                          <label for="gaccca-rating-input-5-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-5-1" name="gaccca-rating-input-5"/>
                          <label for="gaccca-rating-input-5-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>

              
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      My supervisor shows interest in my progress.  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-6-5" name="gaccca-rating-input-6"/>
                          <label for="gaccca-rating-input-6-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-6-4" name="gaccca-rating-input-6"/>
                          <label for="gaccca-rating-input-6-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-6-3" name="gaccca-rating-input-6"/>
                          <label for="gaccca-rating-input-6-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-6-2" name="gaccca-rating-input-6"/>
                          <label for="gaccca-rating-input-6-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-6-1" name="gaccca-rating-input-6"/>
                          <label for="gaccca-rating-input-6-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>

              

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      I feel like I am part of the team..  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-7-5" name="gaccca-rating-input-7"/>
                          <label for="gaccca-rating-input-7-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-7-4" name="gaccca-rating-input-7"/>
                          <label for="gaccca-rating-input-7-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-7-3" name="gaccca-rating-input-7"/>
                          <label for="gaccca-rating-input-7-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-7-2" name="gaccca-rating-input-7"/>
                          <label for="gaccca-rating-input-7-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-7-1" name="gaccca-rating-input-7"/>
                          <label for="gaccca-rating-input-7-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>
            










              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      My host company has been following the required training plan so far.  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-8-5" name="gaccca-rating-input-8"/>
                          <label for="gaccca-rating-input-8-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-8-4" name="gaccca-rating-input-8"/>
                          <label for="gaccca-rating-input-8-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-8-3" name="gaccca-rating-input-8"/>
                          <label for="gaccca-rating-input-8-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-8-2" name="gaccca-rating-input-8"/>
                          <label for="gaccca-rating-input-8-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-8-1" name="gaccca-rating-input-8"/>
                          <label for="gaccca-rating-input-8-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>
            






              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    Please list the two best things about your host company   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element gaccca-form-element-margin-date">
                    <input type="text" name="onfrm[Please_list_the_two_best_things_about_be__c]"  value="{{isset($datas['onfrm']['Please_list_the_two_best_things_about_be__c'])?$datas['onfrm']['Please_list_the_two_best_things_about_be__c']:''}}" id="text-input-id-3"  required="" class="gaccca-input" />
                    
                  </div>
                </div>
        
        
              </div>


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    Is there anything you don't like?  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element gaccca-form-element-margin-date">
                    <input type="text" name="onfrm[Is_there_anything_you_don_t_like__c]"  value="{{isset($datas['onfrm']['Is_there_anything_you_don_t_like__c'])?$datas['onfrm']['Is_there_anything_you_don_t_like__c']:''}}"  id="text-input-id-3"  required="" class="gaccca-input" />
                    
                  </div>
                </div>
        
        
              </div>






              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      Overall I am having a great experience with my host company  </label><br/>
                      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                      <span class="gaccca-rating">
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-9-5" name="gaccca-rating-input-9"/>
                          <label for="gaccca-rating-input-9-5" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-9-4" name="gaccca-rating-input-9"/>
                          <label for="gaccca-rating-input-9-4" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-9-3" name="gaccca-rating-input-9"/>
                          <label for="gaccca-rating-input-9-3" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-9-2" name="gaccca-rating-input-9"/>
                          <label for="gaccca-rating-input-9-2" class="gaccca-rating-star"></label>
                          <input type="radio" class="gaccca-rating-input"
                              id="gaccca-rating-input-9-1" name="gaccca-rating-input-9"/>
                          <label for="gaccca-rating-input-9-1" class="gaccca-rating-star"></label>
                      </span>
                  
                      <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
                </div>
              </div>
            




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    Please add any additional comments concerning your host company/supervisor<span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element gaccca-form-element-margin-date">
                    <input type="text" name="onfrm[Please_add_any_additional_comments_conce__c]"  value="{{isset($datas['onfrm']['Please_add_any_additional_comments_conce__c'])?$datas['onfrm']['Please_add_any_additional_comments_conce__c']:''}}"  id="text-input-id-3"  required="" class="gaccca-input" />
                    
                  </div>
                </div>
        
        
              </div>
           

    
              </div>


              <h2 class="gaccca-h2-padding">About your Internship/Trainee</h2>

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                  <div class="gaccca-form-element gaccca-form-element-margin">
                   <p>Please let us know your thoughts about your internship/training.</p> 
                      
                    </div>
                  </div>
                </div>







                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          My internship/training is interesting.  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-10-5" name="gaccca-rating-input-10"/>
                              <label for="gaccca-rating-input-10-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-10-4" name="gaccca-rating-input-10"/>
                              <label for="gaccca-rating-input-10-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-10-3" name="gaccca-rating-input-10"/>
                              <label for="gaccca-rating-input-10-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-10-2" name="gaccca-rating-input-10"/>
                              <label for="gaccca-rating-input-10-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-10-1" name="gaccca-rating-input-10"/>
                              <label for="gaccca-rating-input-10-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>
                




                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          My internship/training is personally fulfilling.  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-11-5" name="gaccca-rating-input-11"/>
                              <label for="gaccca-rating-input-11-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-11-4" name="gaccca-rating-input-11"/>
                              <label for="gaccca-rating-input-11-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-11-3" name="gaccca-rating-input-11"/>
                              <label for="gaccca-rating-input-11-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-11-2" name="gaccca-rating-input-11"/>
                              <label for="gaccca-rating-input-11-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-11-1" name="gaccca-rating-input-11"/>
                              <label for="gaccca-rating-input-11-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>

                  



                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          My internship/training is challenging.  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-12-5" name="gaccca-rating-input-12"/>
                              <label for="gaccca-rating-input-12-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-12-4" name="gaccca-rating-input-12"/>
                              <label for="gaccca-rating-input-12-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-12-3" name="gaccca-rating-input-12"/>
                              <label for="gaccca-rating-input-12-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-12-2" name="gaccca-rating-input-12"/>
                              <label for="gaccca-rating-input-12-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-12-1" name="gaccca-rating-input-12"/>
                              <label for="gaccca-rating-input-12-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>

                  


                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          My internship/training is structured..  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-13-5" name="gaccca-rating-input-13"/>
                              <label for="gaccca-rating-input-13-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-13-4" name="gaccca-rating-input-13"/>
                              <label for="gaccca-rating-input-13-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-13-3" name="gaccca-rating-input-13"/>
                              <label for="gaccca-rating-input-13-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-13-2" name="gaccca-rating-input-13"/>
                              <label for="gaccca-rating-input-13-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-13-1" name="gaccca-rating-input-13"/>
                              <label for="gaccca-rating-input-13-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>

                  


                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          I am learning a lot..  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-14-5" name="gaccca-rating-input-14"/>
                              <label for="gaccca-rating-input-14-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-14-4" name="gaccca-rating-input-14"/>
                              <label for="gaccca-rating-input-14-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-14-3" name="gaccca-rating-input-14"/>
                              <label for="gaccca-rating-input-14-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-14-2" name="gaccca-rating-input-14"/>
                              <label for="gaccca-rating-input-14-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-14-1" name="gaccca-rating-input-14"/>
                              <label for="gaccca-rating-input-14-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>







                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                        What have been your main tasks so far?  <span class="gaccca-text-required" title="required">*</span> </label>
                        
                      <div class="gaccca-form-element gaccca-form-element-margin-date">
                        <input type="text" name="onfrm[What_have_been_your_main_tasks_so_far__c]"  value="{{isset($datas['onfrm']['What_have_been_your_main_tasks_so_far__c'])?$datas['onfrm']['What_have_been_your_main_tasks_so_far__c']:''}}"  id="text-input-id-3"  required="" class="gaccca-input" />
                        
                      </div>
                    </div>
            
            
                  </div>
            



                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          My supervisor gives me feedback.  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-15-5" name="gaccca-rating-input-15"/>
                              <label for="gaccca-rating-input-15-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-15-4" name="gaccca-rating-input-15"/>
                              <label for="gaccca-rating-input-15-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-15-3" name="gaccca-rating-input-15"/>
                              <label for="gaccca-rating-input-15-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-15-2" name="gaccca-rating-input-15"/>
                              <label for="gaccca-rating-input-15-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-15-1" name="gaccca-rating-input-15"/>
                              <label for="gaccca-rating-input-15-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>

                  

                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          I am improving my understanding of U.S. business practices.  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-16-5" name="gaccca-rating-input-16"/>
                              <label for="gaccca-rating-input-16-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-16-4" name="gaccca-rating-input-16"/>
                              <label for="gaccca-rating-input-16-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-16-3" name="gaccca-rating-input-16"/>
                              <label for="gaccca-rating-input-16-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-16-2" name="gaccca-rating-input-16"/>
                              <label for="gaccca-rating-input-16-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-16-1" name="gaccca-rating-input-16"/>
                              <label for="gaccca-rating-input-16-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>
                


                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          I am learning specific job skills which are useful for my future career.  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-17-5" name="gaccca-rating-input-17"/>
                              <label for="gaccca-rating-input-17-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-17-4" name="gaccca-rating-input-17"/>
                              <label for="gaccca-rating-input-17-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-17-3" name="gaccca-rating-input-17"/>
                              <label for="gaccca-rating-input-17-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-17-2" name="gaccca-rating-input-17"/>
                              <label for="gaccca-rating-input-17-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-17-1" name="gaccca-rating-input-17"/>
                              <label for="gaccca-rating-input-17-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>

                  
                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          I would recommend an internship/training at  this company.  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-18-5" name="gaccca-rating-input-18"/>
                              <label for="gaccca-rating-input-18-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-18-4" name="gaccca-rating-input-18"/>
                              <label for="gaccca-rating-input-18-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-18-3" name="gaccca-rating-input-18"/>
                              <label for="gaccca-rating-input-18-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-18-2" name="gaccca-rating-input-18"/>
                              <label for="gaccca-rating-input-18-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-18-1" name="gaccca-rating-input-18"/>
                              <label for="gaccca-rating-input-18-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>
                

                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-8">
                        Why or why not?  <span class="gaccca-text-required" title="required">*</span> </label>
                      <div class="gaccca-form-element__control">
                       
                          <textarea name="onfrm[Why_or_Why_Not__c]"  value="{{isset($datas['onfrm']['Why_or_Why_Not__c'])?$datas['onfrm']['Why_or_Why_Not__c']:''}}" required=""  class="gaccca-textarea"></textarea>
                        
                      </div>
                    </div>
                  </div>



                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-form-element gaccca-form-element-margin">
                      <label class="gaccca-form-element__label" for="text-input-id-3">
                          I am satisfied with my overall internship/training experience  </label><br/>
                          <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                          <span class="gaccca-rating">
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-19-5" name="gaccca-rating-input-19"/>
                              <label for="gaccca-rating-input-19-5" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-19-4" name="gaccca-rating-input-19"/>
                              <label for="gaccca-rating-input-19-4" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-19-3" name="gaccca-rating-input-19"/>
                              <label for="gaccca-rating-input-19-3" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-19-2" name="gaccca-rating-input-19"/>
                              <label for="gaccca-rating-input-19-2" class="gaccca-rating-star"></label>
                              <input type="radio" class="gaccca-rating-input"
                                  id="gaccca-rating-input-19-1" name="gaccca-rating-input-19"/>
                              <label for="gaccca-rating-input-19-1" class="gaccca-rating-star"></label>
                          </span>
                      
                          <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
                    </div>
                  </div>
                










                  <h2 class="gaccca-h2-padding">American Culture</h2>

                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          
                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                      <div class="gaccca-form-element gaccca-form-element-margin">
                       <p>Please let us know more about your life in the U.S. and rate your cultural experience.</p>
                    </div>
                    </div>
              
                  
              
                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-3">
                              My host company/supervisor provides me with opportunities to participate in cultural activities to broaden my understanding of  the American culture.  </label><br/>
                              <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                              <span class="gaccca-rating">
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-20-5" name="gaccca-rating-input-20"/>
                                  <label for="gaccca-rating-input-20-5" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-20-4" name="gaccca-rating-input-20"/>
                                  <label for="gaccca-rating-input-20-4" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-20-3" name="gaccca-rating-input-20"/>
                                  <label for="gaccca-rating-input-20-3" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-20-2" name="gaccca-rating-input-20"/>
                                  <label for="gaccca-rating-input-20-2" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-20-1" name="gaccca-rating-input-20"/>
                                  <label for="gaccca-rating-input-20-1" class="gaccca-rating-star"></label>
                              </span>
                          
                              <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
                        </div>
                      </div>
                    
                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                            If applicable, please state how /which activities  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                            <input type="text" name="onfrm[If_applicable_please_state_how_which_a__c]"  value="{{isset($datas['onfrm']['If_applicable_please_state_how_which_a__c'])?$datas['onfrm']['If_applicable_please_state_how_which_a__c']:''}}"  id="text-input-id-3"  required="" class="gaccca-input" />

                            
                          </div>
                        </div>
                      </div>




                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-3">
                              My English skills are improving.  </label><br/>
                              <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                              <span class="gaccca-rating">
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-21-5" name="gaccca-rating-input-21"/>
                                  <label for="gaccca-rating-input-21-5" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-21-4" name="gaccca-rating-input-21"/>
                                  <label for="gaccca-rating-input-21-4" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-21-3" name="gaccca-rating-input-21"/>
                                  <label for="gaccca-rating-input-21-3" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-21-2" name="gaccca-rating-input-21"/>
                                  <label for="gaccca-rating-input-21-2" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-21-1" name="gaccca-rating-input-21"/>
                                  <label for="gaccca-rating-input-21-1" class="gaccca-rating-star"></label>
                              </span>
                          
                              <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
                        </div>
                      </div>

                      

                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-3">
                              I am involved in activities within my local community.  </label><br/>
                              <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                              <span class="gaccca-rating">
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-22-5" name="gaccca-rating-input-22"/>
                                  <label for="gaccca-rating-input-22-5" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-22-4" name="gaccca-rating-input-22"/>
                                  <label for="gaccca-rating-input-22-4" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-22-3" name="gaccca-rating-input-22"/>
                                  <label for="gaccca-rating-input-22-3" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-22-2" name="gaccca-rating-input-22"/>
                                  <label for="gaccca-rating-input-22-2" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-22-1" name="gaccca-rating-input-22"/>
                                  <label for="gaccca-rating-input-22-1" class="gaccca-rating-star"></label>
                              </span>
                          
                              <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
                        </div>
                      </div>

                      

                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-3">
                              I participate in cultural activities with my  co-workers/supervisor in my free time.  </label><br/>
                              <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
                              <span class="gaccca-rating">
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-23-5" name="gaccca-rating-input-23"/>
                                  <label for="gaccca-rating-input-23-5" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-23-4" name="gaccca-rating-input-23"/>
                                  <label for="gaccca-rating-input-23-4" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-23-3" name="gaccca-rating-input-23"/>
                                  <label for="gaccca-rating-input-23-3" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-23-2" name="gaccca-rating-input-23"/>
                                  <label for="gaccca-rating-input-23-2" class="gaccca-rating-star"></label>
                                  <input type="radio" class="gaccca-rating-input"
                                      id="gaccca-rating-input-23-1" name="gaccca-rating-input-23"/>
                                  <label for="gaccca-rating-input-23-1" class="gaccca-rating-star"></label>
                              </span>
                          
                              <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
                        </div>
                      </div>
                    
    

                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                            If applicable, please specify:  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                              <textarea name="onfrm[If_Applicable_Please_Specify__c]"  value="{{isset($datas['onfrm']['If_Applicable_Please_Specify__c'])?$datas['onfrm']['If_Applicable_Please_Specify__c']:''}}" required=""  class="gaccca-textarea"></textarea>
                            
                          </div>
                        </div>
                      </div>


                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                            Please state a few cultural activities you have done  in your free time so far.  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                              <textarea name="onfrm[Please_state_a_few_cultural_activities__c]"  value="{{isset($datas['onfrm']['Please_state_a_few_cultural_activities__c'])?$datas['onfrm']['Please_state_a_few_cultural_activities__c']:''}}" required=""  class="gaccca-textarea"></textarea>
                            
                          </div>
                        </div>
                      </div>


                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-form-element__label" for="text-input-id-fn">
                                I have been able to adapt comfortably to the American way of life/culture. <span class="gaccca-text-required" title="required">*</span> </label>
                           
                           
                                <span class="gaccca-radio">
                                  <input type="radio" id="radio-additional_fee-no" value="radio-additional_fee-no" name="additional_fee" checked="" />
                                  <label class="gaccca-radio__label" for="radio-additional_fee-no">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">No</span>
                                  </label>
                                  <input type="radio" id="radio-additional_fee-yes" value="radio-additional_fee-yes" name="additional_fee" />
                                  <label class="gaccca-radio__label" for="radio-additional_fee-yes">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">Yes</span>
                                  </label>
                                </span>
                              
                            
                          </div>  
                          </div>
                    </div>




                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-1">
                            If no, please explain:  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                            <input type="text" name="onfrm[If_no_please_explain__c]"  value="{{isset($datas['onfrm']['If_no_please_explain__c'])?$datas['onfrm']['If_no_please_explain__c']:''}}"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                          
                            
                          </div>
                        </div>
                      </div>

                      


                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-1">
                            Please list the two best things about being in America  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                            <input type="text" name="onfrm[Please_list_the_two_best_things_about_be__c]"  value="{{isset($datas['onfrm']['Please_list_the_two_best_things_about_be__c'])?$datas['onfrm']['Please_list_the_two_best_things_about_be__c']:''}}" id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                            
                          </div>
                        </div>
                      </div>
              



                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-form-element__label" for="text-input-id-fn">
                                I have encountered problems with different food and drink. <span class="gaccca-text-required" title="required">*</span> </label>
                           
                           
                                <span class="gaccca-radio">
                                  <input type="radio"  id="radio-food_drink-no" value="radio-food_drink-no" name="food_drink" checked="" />
                                  <label class="gaccca-radio__label" for="radio-food_drink-no">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">No</span>
                                  </label>
                                  <input type="radio" id="radio-food_drink-yes" value="radio-food_drink-yes" name="food_drink" />
                                  <label class="gaccca-radio__label" for="radio-food_drink-yes">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">Yes</span>
                                  </label>
                                </span>
                              
                            
                          </div>  
                          </div>
                    </div>




                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-1">
                            If yes, please specify  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                          
                            <input type="text" name="onfrm[If_yes_please_specify__c]"  value="{{isset($datas['onfrm']['If_yes_please_specify__c'])?$datas['onfrm']['If_yes_please_specify__c']:''}}"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                            
                          </div>
                        </div>
                      </div>



                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                            <div class="gaccca-form-element__control">
                                <label class="gaccca-form-element__label" for="text-input-id-fn">
                                    I have encountered problems with different personal attitudes and behaviors <span class="gaccca-text-required" title="required">*</span> </label>
                               
                               
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-attitudes-no" value="radio-attitudes-no" name="attitudes" checked="" />
                                      <label class="gaccca-radio__label" for="radio-attitudes-no">
                                        <span class="gaccca-radio_faux"></span>
                                        <span class="gaccca-padding-right-25">No</span>
                                      </label>
                                      <input type="radio" id="radio-attitudes-yes" value="radio-attitudes-yes" name="attitudes" />
                                      <label class="gaccca-radio__label" for="radio-attitudes-yes">
                                        <span class="gaccca-radio_faux"></span>
                                        <span class="gaccca-padding-right-25">Yes</span>
                                      </label>
                                    </span>
                                  
                                
                              </div>
                        </div>
                          
                    </div>


                      
                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-1">
                            If yes, please specify  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                            <input type="text" name="onfrm[If_yes_please_explain__c]"  value="{{isset($datas['onfrm']['If_yes_please_explain__c'])?$datas['onfrm']['If_yes_please_explain__c']:''}}"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                            
                          </div>
                        </div>
                      </div>




                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                            Please add any additional comments concerning your life in  the U.S <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                              <textarea name="onfrm[comments_about_your_life__c]"  value="{{isset($datas['onfrm']['comments_about_your_life__c'])?$datas['onfrm']['comments_about_your_life__c']:''}}"  required=""  class="gaccca-textarea"></textarea>
                            
                          </div>
                        </div>
                      </div>
        
              
            
                      </div>


                      <h2 class="gaccca-h2-padding">Please Note:</h2>

                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                          <div class="gaccca-form-element gaccca-form-element-margin">
                           <p>You can sign this evaluation digital online with your mouse or on your phone with your finger. <br/>
                            After signing we will save the evaluation as a pdf in our records. <br/>
                            Should you have any questions or concerns, please email us at visa@gaccca.org<br/>
                            Enjoy your remaining time in the U.S. and at your host company. We hope you had a great internship/training experience in the U.S.
                        
                         </p>
                           
                        
                        </div>
                        </div>
                  
                      
                  
                          </div>



    
                  </div>

{!! Form::close() !!}
@include('common.footer')