@include('common.header_without_menu')

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Mid Point Evaluation</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>The purpose of this form is for GACC California to understand your general impressions of your intern/trainee.
        </p>
           <p> The completion of this form is also required by the U.S. Department of State.</p>
            
          <p>  Please note that this form is not valid unless all fields are completed. The information you provide will be kept confidential. Please take 10 minutes to fill out this form.
          </p><p>
            Thank you to be a host company in our program    
        </p>
      </div>

      <h2 class="gaccca-h2-padding">General Information</h2>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of Supervisor's Intern/Trainee   <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
              <br/>
              
              
            </div>
          </div>
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of Supervisor   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of Host Company   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Current Business Address   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                <br/>
                
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Zip Code, City, State    <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                <br/>
                
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Business Phone Number   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                <br/>
                
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Business Email Address   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                <br/>
                
                
              </div>
            </div>
          </div>
  

       
    
  
          </div>


          <h2 class="gaccca-h2-padding">Evaluation of Intern</h2>




          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  






            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                  <div class="gaccca-form-element__control">
                      <label class="gaccca-form-element__label" for="text-input-id-fn">
                        On average, how many hours has the intern/trainee been in attendance per week?  <span class="gaccca-text-required" title="required">*</span> </label>
                      <span class="gaccca-radio">
                        <input type="radio" id="radio-attendance-32" value="radio-attendance-32" name="attendance" checked="" />
                        <label class="gaccca-radio__label" for="radio-attendance-32">
                          <span class="gaccca-radio_faux"></span>
                          <span>Fewer than 32 Hrs/Week</span>
                        </label>
                      </span>
                      <span class="gaccca-radio">
                        <input type="radio" id="radio-attendance-45" value="radio-attendance-45" name="attendance" />
                        <label class="gaccca-radio__label" for="radio-attendance-45">
                          <span class="gaccca-radio_faux"></span>
                          <span>32-45 Hrs/Week</span>
                        </label>
                      </span>
                      <span class="gaccca-radio">
                        <input type="radio" id="radio-attendance-more" value="radio-attendance-more" name="attendance" />
                        <label class="gaccca-radio__label" for="radio-attendance-more">
                          <span class="gaccca-radio_faux"></span>
                          <span> More than 45 Hrs/Week</span>
                        </label>
                      </span>
                    </div>
      
                </div>
                 
              </div>
      



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-2">
                    How well has the intern/trainee adapted to the business environment of your company? <span class="gaccca-text-required" title="required">*</span> </label><br/>
                    <span class="gaccca-file-help-text-color">1=poor / 5=excellent</span>
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
                    The intern/trainee is interested in his/her work. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    How well has the intern/trainee performed all tasks/projects assigned so far? <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1=poor / 5=excellent</span>
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
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Please provide three examples of internship/training tasks/projects the intern/trainee has been involved in:  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea  required=""  class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Does the intern/trainee have the necessary qualifications for his/her position?  <span class="gaccca-text-required" title="required">*</span> </label>
                   
                  
                        <span class="gaccca-radio">
                          <input type="radio" id="radio-qualifications-no" value="radio-qualifications-no" name="qualifications" checked="" />
                          <label class="gaccca-radio__label" for="radio-qualifications-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-qualifications-yes" value="radio-qualifications-yes" name="qualifications" />
                          <label class="gaccca-radio__label" for="radio-qualifications-yes">
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
If no, please expand on this: <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea  required=""  class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Have you encountered problems with the intern/trainee so far?<span class="gaccca-text-required" title="required">*</span> </label>
                   
                        <span class="gaccca-radio">
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
                        </span>
                      
                    
                  </div>  
                  </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    If yes, please specify   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                    <br/>
                    
                    
                  </div>
                </div>
              </div>










              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Could these problems be resolved ? </label>
                   
                        <span class="gaccca-radio">
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
                        </span>
                      
                        <!-- Only required if there were any problems. -->
                  </div>  
                  </div>
            </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Has the intern/trainee's command of English been adequate for the internship/training?<span class="gaccca-text-required" title="required">*</span> </label>
                   
                  
                        <span class="gaccca-radio">
                          <input type="radio" id="radio-english-no" value="radio-english-no" name="english" checked="" />
                          <label class="gaccca-radio__label" for="radio-english-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-english-yes" value="radio-english-yes" name="english" />
                          <label class="gaccca-radio__label" for="radio-english-yes">
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
                    The intern/trainee's command of English has improved since the beginning of the internship/training. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    The intern/trainee is making progress. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    The intern/trainee makes positive contributions to the company. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    The intern/trainee is friendly. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    The intern/trainee is reliable. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    The intern/trainee is motivated. <span class="gaccca-text-required" title="required">*</span>   </label><br/>
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
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Is the intern/trainee punctual? <span class="gaccca-text-required" title="required">*</span> </label>
                   
                   
                      <span class="gaccca-radio">
                        <input type="radio" id="radio-punctual-no" value="radio-punctual-no" name="punctual" checked="" />
                        <label class="gaccca-radio__label" for="radio-punctual-no">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">No</span>
                        </label>
                        <input type="radio" id="radio-punctual-yes" value="radio-punctual-yes" name="punctual" />
                        <label class="gaccca-radio__label" for="radio-punctual-yes">
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
                    The intern/trainee is flexible and able to accept changes to the work environment. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    How well does the intern/trainee accept constructive criticism? <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1=not well / 5=perfectly fine</span>
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
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        The intern/trainee is actively participating in American cultural activities. <span class="gaccca-text-required" title="required">*</span> </label>
                   
                        <span class="gaccca-radio">
                          <input type="radio" id="radio-cultural-no" value="radio-cultural-no" name="cultural" checked="" />
                          <label class="gaccca-radio__label" for="radio-cultural-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-cultural-yes" value="radio-cultural-yes" name="cultural" />
                          <label class="gaccca-radio__label" for="radio-cultural-yes">
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
                    Has your company offered the intern/trainee the opportunity to participate in cultural activities? Please specify:  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea  required=""  class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Overall, I am absolutely satisfied with the intern/trainee's performance so far. <span class="gaccca-text-required" title="required">*</span> </label>
                   
                        <span class="gaccca-radio">
                          <input type="radio" id="radio-satisfied-no" value="radio-satisfied-no" name="satisfied" checked="" />
                          <label class="gaccca-radio__label" for="radio-satisfied-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-satisfied-yes" value="radio-satisfied-yes" name="satisfied" />
                          <label class="gaccca-radio__label" for="radio-satisfied-yes">
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
                    Please add any additional comments or concerns you may have: </label>
                  <div class="gaccca-form-element__control">
                   
                    <input type="text"  id="text-input-id-3"  required="" class="gaccca-input" />

                    
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
                   <p>We hope you continue to have a positive experience with your intern/trainee</p> 
                      
                    </div>
                  </div>
                </div>



                <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                      <div class="gaccca-form-element gaccca-form-element-margin">
                       <p>Please Sign Here : </p>
                       
                        </div>
                      </div>
                    </div>






           

        <button class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>
                     


    
                  </div>

{!! Form::close() !!}
@include('common.footer')