@include('common.header_without_menu')

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Final Evaluation</h1>
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
                <textarea  required=""  class="gaccca-textarea"></textarea>

                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Zip Code, City, State    <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Business Phone Number   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
                
                
              </div>
            </div>
          </div>

          
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Supervisor's Business Email Address   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
             
                
                
              </div>
            </div>
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of the Intern / Trainee   <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text"  id="text-input-id-1"  required="" class="gaccca-input" />
             
                
                
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
                    GACC California successfully answered my questions and/or helped resolve situations concerning the program.<span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    GACC California helped make the intern/trainee visa process go smoothly. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
              I would recommend GACC California as a J-1 visa sponsor to future interns/trainees.<span class="gaccca-text-required" title="required">*</span>
            </label><br/>
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
                    Leave an additional comment concerning GACCCA  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea  required=""  class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>


              <h2 class="gaccca-h2-padding">Evaluation of Intern/ Trainee</h2>

                      

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee was friendly  <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    The intern/trainee was reliable <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    The intern/trainee had the necessary qualifications and background for this internship/training. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    The intern/trainee was punctual and had a good work ethic <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    The intern/trainee was motivated/enthusiastic <span class="gaccca-text-required" title="required">*</span>   </label><br/>
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
                    The intern/trainee adjusted well to the business environment. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                    The intern/trainee was flexible and accepting of changes in the work environment. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee made a positive contribution to the firm. <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1=not well / 5=perfectly fine</span>
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
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Have you encountered any problems with the intern/trainee? <span class="gaccca-text-required" title="required">*</span> <span class="gaccca-text-required" title="required">*</span> </label>
                                     
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
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    If yes, please specify:  <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                   
                      <textarea  required=""  class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Could these problems be resolved? <span class="gaccca-text-required" title="required">*</span> </label>
                   
                  
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
                      
                    
                  </div>  
                  </div>
            </div>









            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    How well has the intern/trainee performed tasks/activities/projects <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                      <span class="gaccca-file-help-text-color">1= very poorly... 5= very well</span>
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
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    Please list 3 major tasks/projects the intern/trainee has actively contributed to/worked on   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea  required=""  class="gaccca-textarea"></textarea>
    
                    
                    
                    
                  </div>
                </div>
              </div>
    


              
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    What have been the intern/trainee's strongest attributes while at your company?   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea  required=""  class="gaccca-textarea"></textarea>
    
                    
                  </div>
                </div>
              </div>
    


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Did you stick to the intern/trainee's training plan? <span class="gaccca-text-required" title="required">*</span> </label>
                   
                 
                        <span class="gaccca-radio">
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
                        </span>
                      
                    
                  </div>  
                  </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    If no, please specify   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea  required=""  class="gaccca-textarea"></textarea>
    
                    
                  </div>
                </div>
              </div>
    





              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern/trainee put constructive criticism into practice and made progress. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    The intern/trainee performed well in a team. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    The intern/trainee's ability to multi-task/prioritize was excellent. <span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    The intern/trainee's command of English has improved throughout the internship/training.<span class="gaccca-text-required" title="required">*</span>  </label><br/>
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
                    Please comment on the cultural advantages of hosting a J-1 intern/trainee at your company <span class="gaccca-text-required" title="required">*</span>   <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea  required=""  class="gaccca-textarea"></textarea>
                  </div>
                </div>
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    If applicable, please let us know if there was anything that did not run smoothly. <span class="gaccca-text-required" title="required">*</span> <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea  required=""  class="gaccca-textarea"></textarea>
                  </div>
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    The intern actively and enthusiastically participated in American cultural activities. <span class="gaccca-text-required" title="required">*</span> </label><br/>
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
                  <label class="gaccca-form-element__label" for="text-input-id-1">
                    Please name a few cultural activities your company let the intern/trainee be part of <span class="gaccca-text-required" title="required">*</span> <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea  required=""  class="gaccca-textarea"></textarea>
  
                  </div>
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-3">
                    Overall, how satisfied are you with the intern/trainee's performance and progress? <span class="gaccca-text-required" title="required">*</span> </label><br/>
                      <span class="gaccca-file-help-text-color">1=not well / 5=perfectly fine</span>
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
                  
                
                </div>
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Please add any additional comments or concerns you might have:  <span class="gaccca-text-required" title="required">*</span> </label>
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
                   <p>We hope you continue to have a positive experience with your intern/trainee.</p> 
                      
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