@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Final Evaluation</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Evaluations are a mandatory part of the J-1 Visa Program and required by the U.S. Department of State. Their completion is necessary for you to successfully complete your program with us. Further, the purpose of this form is for us to understand your general impressions, opinions and reactions to life in the U.S. and to ensure the quality of your training or internship program.
        </p> <p>
            Please take 10 minutes to fill out the form. Please complete within the next 7 days to ensure a successful completion of your J-1 Program.  
           </p>
           <p>
            Please note that this form is not valid unless all fields are completed. Please sign this form and return it to us. The information you provide will be kept confidential at all times.
           </p> <p>
            We hope that you have had an exceptional experience in the U.S. so far and that you enjoy your last few weeks at your host company.   
        </p>
      </div>

      <h2 class="gaccca-h2-padding">General Information</h2>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of Intern/Trainee   <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
              <br/>
              
              
            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Current U.S. Address  <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
               
                  <textarea  required=""  class="gaccca-textarea"></textarea>
                
              </div>
            </div>
          </div>
  
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-3">
                Phone Number  <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element gaccca-form-element-margin-date">
              <input type="text"  id="text-input-id-3" placeholder="eMail-Adresse Supervisor" required="" class="gaccca-input" />
             
            </div>
          </div>
  
        </div>
  
  
   
         <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                Email Address   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-4"  required="" class="gaccca-input" />
                
              </div>
          </div>
  
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                    Name of Host Company  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text"  id="text-input-id-4"  required="" class="gaccca-input" />
                  
                </div>
            </div>
    
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                    Name of Supervisor  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text"  id="text-input-id-4"  required="" class="gaccca-input" />
                  
                </div>
            </div>
    
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
          Start of Internship/Training  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text"  id="text-input-id-4"  required="" class="gaccca-input" />
                  
                  <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
                </div>
            </div>
    
          </div>

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                    End of Internship/Training  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text"  id="text-input-id-4"  required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
                </div>
            </div>
    
          </div>
          


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-4">
                    U.S. Departure Date   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text"  id="text-input-id-4"  required="" class="gaccca-input-date" />
                 
                </div>
            </div>
    
          </div>
          
            


          </div>


          <h2 class="gaccca-h2-padding">Sponsor Organization</h2>




          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              <div class="gaccca-form-element gaccca-form-element-margin">
               <p>Please rate the service of the German American Chamber of Commerce California</p>
              </div>
            </div>
      
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-2">
                    The information provided on the GACCCA website are a valuable  resource for general questions concerning the J-1 visa  <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                
              </div>
            </div>




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      Members of staff are friendly.  <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                  
                </div>
              </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      The information provided during the visa process was helpful.  <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                  
        
                </div>
              </div>
            



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      GACCCA ensured that the process went smoothly.  <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                       GACCCA helped to solve problems.  <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    If there were any problems, please specify.   </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea  required=""  class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>










              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                      GACCCA is easy to contact.  <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                      GACCCA prepared me well for my internship/training in the U.S. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                      I would recommend GACCCA to future applicants <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Please leave any additional comments concerning your experience with GACCCA here: </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea  required=""  class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>


              </div>



                  <h2 class="gaccca-h2-padding">American Culture</h2>

                  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          
                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                      <div class="gaccca-form-element gaccca-form-element-margin">
                       <p>Please rate your cultural experience in the U.S.!</p>
                    </div>
                    </div>
              
                  



                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-form-element__label" for="text-input-id-fn">
                                My host company/supervisor actively helped me to experience the American culture.  <span class="gaccca-text-required" title="required">*</span> </label>
                           
                           
                                <span class="gaccca-radio">
                                  <input type="radio" id="radio-american_culture-no" value="radio-american_culture-no" name="american_culture" checked="" />
                                  <label class="gaccca-radio__label" for="radio-american_culture-no">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">No</span>
                                  </label>
                                  <input type="radio" id="radio-american_culture-yes" value="radio-american_culture-yes" name="american_culture" />
                                  <label class="gaccca-radio__label" for="radio-american_culture-yes">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">Yes</span>
                                  </label>
                                </span>
                              
                            
                          </div>  
                          </div>
                    </div>



                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                           Please specify, if you wish to do so  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                            <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />

                            
                          </div>
                        </div>
                      </div>



              
                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-3">
                              
                                I have been involved in cultural activities in my free time with my co-workers/supervisor.  </label><br/>
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
                          <label class="gaccca-form-element__label" for="text-input-id-3">
                              I was involved in cultural activities with my local community.  </label><br/>
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
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                            Please specify, if you wish to do so  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                            <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />

                            
                          </div>
                        </div>
                      </div>



                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-3">
                              I did not have any cultural problems living in the U.S.  </label><br/>
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
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                            What have been the best 3 activities you have done in the U.S.?  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                            <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />

                            
                          </div>
                        </div>
                      </div>






                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                           Is there anything you did not like about living in the U.S.?  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                            <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />

                            
                          </div>
                        </div>
                      </div>




                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                        <div class="gaccca-form-element gaccca-form-element-margin">
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-form-element__label" for="text-input-id-fn">
                                I have met people I would consider my friends at this point.  <span class="gaccca-text-required" title="required">*</span> </label>
                           
                                <span class="gaccca-radio">
                                  <input type="radio" id="radio-american_culture-no" value="radio-american_culture-no" name="american_culture" checked="" />
                                  <label class="gaccca-radio__label" for="radio-american_culture-no">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">No</span>
                                  </label>
                                  <input type="radio" id="radio-american_culture-yes" value="radio-american_culture-yes" name="american_culture" />
                                  <label class="gaccca-radio__label" for="radio-american_culture-yes">
                                    <span class="gaccca-radio_faux"></span>
                                    <span class="gaccca-padding-right-25">Yes</span>
                                  </label>
                                </span>
                              
                           
                            
                          </div>  
                          </div>
                    </div>



                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                        <div class="gaccca-form-element gaccca-form-element-margin">
                          <label class="gaccca-form-element__label" for="text-input-id-8">
                            Please leave any additional comments concerning your life in the U.S.:  <span class="gaccca-text-required" title="required">*</span> </label>
                          <div class="gaccca-form-element__control">
                           
                              <textarea  required=""  class="gaccca-textarea"></textarea>
                            
                          </div>
                        </div>
                      </div>




                  

            
                      </div>


               


                      <h2 class="gaccca-h2-padding">Host Company and Supervisor</h2>

                      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                          <div class="gaccca-form-element gaccca-form-element-margin">
                           <p>Please rate your Host Company!</p> 
                              
                            </div>
                          </div>
                        </div>
        
        
        
        
        
        
        
                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                  My supervisor showed interest in my progress.  </label><br/>
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
                                  My supervisor gave me frequent feedback on how to improve  my performance.  </label><br/>
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
                                  My host company and supervisor provided on-the-job training consistent with my internship/training plan (DS-7002)..  </label><br/>
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
                                   I had a good relationship with my supervisor.   </label><br/>
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
                                  I had a good relationship with my co-workers.  </label><br/>
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
                              
                            </div>
                          </div>
        
        
        
        
        
        
        
                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                Please expand on this:  <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element gaccca-form-element-margin-date">
                                <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />
                                
                                <span class="gaccca-input-help-text">If 'no', please state what you would have wished them to  do; if 'yes', please name a few examples</span>
                              </div>
                            </div>
                    
                    
                          </div>



                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                What are the two best things about your host company?  <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element gaccca-form-element-margin-date">
                                <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />
                                
                              </div>
                            </div>
                    
                    
                          </div>




                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                Was there anything you did not like / that bothered you about your host company/supervisor?  <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element gaccca-form-element-margin-date">
                                <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />
                               
                              </div>
                            </div>
                    
                    
                          </div>







                    
    
                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                  Overall I had an excellent experience with my host company.  </label><br/>
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
                            <div class="gaccca-form-element__control">
                                <label class="gaccca-form-element__label" for="text-input-id-fn">
                                    I would recommend my host company to future participants.  <span class="gaccca-text-required" title="required">*</span> </label>
                               
                               
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-recommend-no" value="radio-recommend-no" name="recommend" checked="" />
                                      <label class="gaccca-radio__label" for="radio-recommend-no">
                                        <span class="gaccca-radio_faux"></span>
                                        <span class="gaccca-padding-right-25">No</span>
                                      </label>
                                      <input type="radio" id="radio-recommend-yes" value="radio-recommend-yes" name="recommend" />
                                      <label class="gaccca-radio__label" for="radio-recommend-yes">
                                        <span class="gaccca-radio_faux"></span>
                                        <span class="gaccca-padding-right-25">Yes</span>
                                      </label>
                                    </span>
                                  
                                
                              </div>  
                              </div>
                        </div>







                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                If no, please state why  <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element gaccca-form-element-margin-date">
                                <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />
                               
                              </div>
                            </div>
                    
                    
                          </div>




                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-8">
                               Please leave any additional comments concerning your  host company  <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element__control">
                               
                                  <textarea  required=""  class="gaccca-textarea"></textarea>
                                
                              </div>
                            </div>
                          </div>






                        <h2 class="gaccca-h2-padding">Internship</h2>


                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                              <div class="gaccca-form-element gaccca-form-element-margin">
                               <p>Please let us know your thoughts about your internship!</p> 
                                  
                                </div>
                              </div>
                            </div>



            
   
   
   
                        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                  The internship/training fulfilled my personal expectations.  </label><br/>
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
                                  I have learned specific job skills and knowledge I can use in my future career.  </label><br/>
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
                              <label class="gaccca-form-element__label" for="text-input-id-1">
                                  Please list skills you learned:    <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element__control">
                                <input type="text"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                                
                                
                                
                              </div>
                            </div>
                          </div>



                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-1">
                                  Please list some of the main tasks you completed / things you did during your internship/training?    <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element__control">
                                <input type="text"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                                
                                
                                
                              </div>
                            </div>
                          </div>




                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-1">
                                  What has been the best part of your internship/training?:    <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element__control">
                                <input type="text"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                                
                                
                                
                              </div>
                            </div>
                          </div>
                  


                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
              
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                  My internship/training has improved my understanding of U.S. business practices.   </label><br/>
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
                              <label class="gaccca-form-element__label" for="text-input-id-3">
                                  My English has improved  </label><br/>
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
                                  Overall I learned a lot during my internship/training.  </label><br/>
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
                                  I am greatly satisfied with my internship/training experience.  </label><br/>
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
                        


        
        
        
                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                            <div class="gaccca-form-element gaccca-form-element-margin">
                              <label class="gaccca-form-element__label" for="text-input-id-1">
                                 Please leave any additional comments concerning your internship/training   <span class="gaccca-text-required" title="required">*</span> </label>
                              <div class="gaccca-form-element__control">
                                <input type="text"  id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
                                <br/>
                                
                                
                              </div>
                            </div>
                          </div>





                          <h2 class="gaccca-h2-padding">Join the Intern and Trainee Alumni Network</h2>
                          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                            <div class="gaccca-form-element gaccca-form-element-margin">
                             <p>Your intern/trainee experience was made possible by the U.S. Department of State's J-1 Exchange Visitor Program. As a former participant in an intern/trainee exchange program, the State Department has offered to register you on their International Exchange Alumni website helping you to connect with other alumni of exchange programs in your country and around the world. It will also allow you to compete for funding opportunities such as the U.S. Department of State's prestigious Alumni Innovation Engagement Fund (AIEF).</p> 
                                
                              </div>
                            </div>



                            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                                <div class="gaccca-form-element gaccca-form-element-margin">
                                <div class="gaccca-form-element__control">
                                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                                        Would you like to receive an email invitation allowing you to enroll for the International Exchange Alumni?  <span class="gaccca-text-required" title="required">*</span> </label>
                                   
                                   
                                        <span class="gaccca-radio">
                                          <input type="radio" id="radio-invitation-no" value="radio-invitation-no" name="invitation" checked="" />
                                          <label class="gaccca-radio__label" for="radio-invitation-no">
                                            <span class="gaccca-radio_faux"></span>
                                            <span class="gaccca-padding-right-25">No</span>
                                          </label>
                                          <input type="radio" id="radio-invitation-yes" value="radio-invitation-yes" name="invitation" />
                                          <label class="gaccca-radio__label" for="radio-invitation-yes">
                                            <span class="gaccca-radio_faux"></span>
                                            <span class="gaccca-padding-right-25">Yes</span>
                                          </label>
                                        </span>
                                      
                                    
                                  </div>  
                                  </div>
                            </div>
        








                            <h2 class="gaccca-h2-padding">Please Note</h2>
                            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                              <div class="gaccca-form-element gaccca-form-element-margin">
                               <p>You can sign this evaluation digital online with your mouse or on your phone with your finger.

                                After signing we will save the evaluation as a pdf in our records.
                                
                                Should you have any questions or concerns, please email us at visa@gaccca.org.
                                
                                Enjoy your remaining time in the U.S. and at your host company. We hope you had a great internship/training experience in the U.S.</p> 
                                  
                                </div>
                              </div>
  
    
                  </div>


{!! Form::close() !!}
@include('common.footer')