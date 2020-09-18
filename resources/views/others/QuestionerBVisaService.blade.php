@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'id' => 'gacccaForm_questionbvisa']) !!}

<div class="gaccca-main-containt">
        <h1 class="gaccca-h1-padding">Please Rate Our B- Visa Service</h1>
        <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
            <p>Thank you for your participation in our visa service! Please answer the following questions to help us improve our service and prepare future participants for their stay in the U.S.</p>
           
        </div>


       
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                          1. How much knowledge did you have about the specific B-visa rules before you contacted us?  <span class="gaccca-text-required" title="required">*</span> </label> 
                      

                          <table class="gaccca-rating-table">
                            <tr>
                              <th> 
                                 </th>
                          
                              <th>1</th>
                              <th>2</th>
                              <th>3</th>
                              <th>4</th>
                              <th>5</th>
                              <th>6</th>
                              <th> 
                                </th>
                              
                            </tr>
                            <tr>
                                <td>
                                  I didn't know the rules at all.
                                </td>
                                
                                <td>
                                  <span class="gaccca-radio">
                                    <input type="radio" id="radio-knowledge_about_b_visa43" value="radio-knowledge_about_b_visa43" name="knowledge_about_b_visa" checked="" />
                                    <label class="gaccca-radio__label" for="radio-knowledge_about_b_visa43">
                                      <span class="gaccca-radio_faux"></span>
                                       
                                    </label>
                               </span>
                              
                              
                              </td>
                                <td><span class="gaccca-radio">
                                  <input type="radio" id="radio-knowledge_about_b_visa44" value="radio-knowledge_about_b_visa44" name="knowledge_about_b_visa" />
                                  <label class="gaccca-radio__label" for="radio-knowledge_about_b_visa44">
                                    <span class="gaccca-radio_faux"></span>
                                   
                                  </label>
                               </span></td>
                                <td><span class="gaccca-radio">
                                  <input type="radio" id="radio-knowledge_about_b_visa45" value="radio-knowledge_about_b_visa45" name="knowledge_about_b_visa" />
                                  <label class="gaccca-radio__label" for="radio-knowledge_about_b_visa45">
                                    <span class="gaccca-radio_faux"></span>
                                    
                                  </label>
                                  
                                  </span></td>
                                <td><span class="gaccca-radio">
                                  <input type="radio" id="radio-knowledge_about_b_visa46" value="radio-knowledge_about_b_visa46" name="knowledge_about_b_visa" />
                            <label class="gaccca-radio__label" for="radio-knowledge_about_b_visa46">
                              <span class="gaccca-radio_faux"></span>
                               
                            </label></span></td>
                        
                        
                                   <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-knowledge_about_b_visa47" value="radio-knowledge_about_b_visa47" name="knowledge_about_b_visa" />
                                    <label class="gaccca-radio__label" for="radio-knowledge_about_b_visa47">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label></span></td>
                                 <td><span class="gaccca-radio">
                                  <input type="radio" id="radio-knowledge_about_b_visa48" value="radio-knowledge_about_b_visa48" name="knowledge_about_b_visa" />
                                  <label class="gaccca-radio__label" for="radio-knowledge_about_b_visa48">
                                    <span class="gaccca-radio_faux"></span>
                                     
                                  </label></span></td>
                        
                                   <td>
                                    I knew everything beforehand.
                                 </td>
                            
                               </tr>
                          
                          </table>
                        
                      </div>
                    
      
                </div>
                 
              </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        2. What was the main reason why you booked our service? </label>
                    <div class="gaccca-form-element__control">
                        <textarea name="onfrm[Why_you_booked_our_service__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Why_you_booked_our_service__c'])?$datas['onfrm']['Why_you_booked_our_service__c']:''}}</textarea>

                    </div>
                </div>
            </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            3. After our service, do you feel knowledgeable about the visa category and its rules?  <span class="gaccca-text-required" title="required">*</span> </label> 
                            <table class="gaccca-rating-table">
                              <tr>
                                <th> 
                                   </th>
                            
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th> 
                                  </th>
                                
                              </tr>
                              <tr>
                                  <td>
                                      I don't feel prepared at all.
                                  </td>
                                  
                                  <td>
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-knowledge_about_visa_category43" value="radio-knowledge_about_visa_category43" name="knowledge_about_visa_category" checked="" />
                                      <label class="gaccca-radio__label" for="radio-knowledge_about_visa_category43">
                                        <span class="gaccca-radio_faux"></span>
                                         
                                      </label>
                                 </span>
                                
                                
                                </td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-knowledge_about_visa_category44" value="radio-knowledge_about_visa_category44" name="knowledge_about_visa_category" />
                                    <label class="gaccca-radio__label" for="radio-knowledge_about_visa_category44">
                                      <span class="gaccca-radio_faux"></span>
                                     
                                    </label>
                                 </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-knowledge_about_visa_category45" value="radio-knowledge_about_visa_category45" name="knowledge_about_visa_category" />
                                    <label class="gaccca-radio__label" for="radio-knowledge_about_visa_category45">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label>
                                    
                                    </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-knowledge_about_visa_category46" value="radio-knowledge_about_visa_category46" name="knowledge_about_visa_category" />
                              <label class="gaccca-radio__label" for="radio-knowledge_about_visa_category46">
                                <span class="gaccca-radio_faux"></span>
                                 
                              </label></span></td>
                          
                          
                                     <td><span class="gaccca-radio">
                                      <input type="radio" id="radio-knowledge_about_visa_category47" value="radio-knowledge_about_visa_category47" name="knowledge_about_visa_category" />
                                      <label class="gaccca-radio__label" for="radio-knowledge_about_visa_category47">
                                        <span class="gaccca-radio_faux"></span>
                                        
                                      </label></span></td>
                                   <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-knowledge_about_visa_category48" value="radio-knowledge_about_visa_category48" name="knowledge_about_visa_category" />
                                    <label class="gaccca-radio__label" for="radio-knowledge_about_visa_category48">
                                      <span class="gaccca-radio_faux"></span>
                                       
                                    </label></span></td>
                          
                                     <td>
                                      I feel very prepared.
                                   </td>
                              
                                 </tr>
                            
                            </table>
                       
                      </div>
                    
                    
      
                </div>
                 
              </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        4. Which part of our service did you find most useful? </label>
                    <div class="gaccca-form-element__control">
                       
                        <textarea name="onfrm[Which_part_of_our_service_is_more_useful__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Which_part_of_our_service_is_more_useful__c'])?$datas['onfrm']['Which_part_of_our_service_is_more_useful__c']:''}}</textarea>
                    </div>
                </div>
            </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            6. Was our service useful to you in regards to achieving your personal and/or business goals?   <span class="gaccca-text-required" title="required">*</span> </label> 
                            <table class="gaccca-rating-table">
                              <tr>
                                <th> 
                                   </th>
                            
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th> 
                                  </th>
                                
                              </tr>
                              <tr>
                                  <td>
                                      It was not helpful at all.
                                  </td>
                                  
                                  <td>
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-useful_to_achive_goal43" value="radio-useful_to_achive_goal43" name="useful_to_achive_goal" checked="" />
                                      <label class="gaccca-radio__label" for="radio-useful_to_achive_goal43">
                                        <span class="gaccca-radio_faux"></span>
                                         
                                      </label>
                                 </span>
                                
                                
                                </td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-useful_to_achive_goal44" value="radio-useful_to_achive_goal44" name="useful_to_achive_goal" />
                                    <label class="gaccca-radio__label" for="radio-useful_to_achive_goal44">
                                      <span class="gaccca-radio_faux"></span>
                                     
                                    </label>
                                 </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-useful_to_achive_goal45" value="radio-useful_to_achive_goal45" name="useful_to_achive_goal" />
                                    <label class="gaccca-radio__label" for="radio-useful_to_achive_goal45">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label>
                                    
                                    </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-useful_to_achive_goal46" value="radio-useful_to_achive_goal46" name="useful_to_achive_goal" />
                              <label class="gaccca-radio__label" for="radio-useful_to_achive_goal46">
                                <span class="gaccca-radio_faux"></span>
                                 
                              </label></span></td>
                          
                          
                                     <td><span class="gaccca-radio">
                                      <input type="radio" id="radio-useful_to_achive_goal47" value="radio-useful_to_achive_goal47" name="useful_to_achive_goal" />
                                      <label class="gaccca-radio__label" for="radio-useful_to_achive_goal47">
                                        <span class="gaccca-radio_faux"></span>
                                        
                                      </label></span></td>
                                   <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-useful_to_achive_goal48" value="radio-useful_to_achive_goal48" name="useful_to_achive_goal" />
                                    <label class="gaccca-radio__label" for="radio-useful_to_achive_goal48">
                                      <span class="gaccca-radio_faux"></span>
                                       
                                    </label></span></td>
                          
                                     <td>
                                      It helped me a lot.
                                   </td>
                              
                                 </tr>
                            
                            </table>
                          
                       
                      </div>
                    
                    
                    
      
                </div>
                 
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            7. Was it worth booking our service?    <span class="gaccca-text-required" title="required">*</span> </label> 
                            <table class="gaccca-rating-table">
                              <tr>
                                <th> 
                                   </th>
                            
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th> 
                                  </th>
                                
                              </tr>
                              <tr>
                                  <td>
                                      It was not worth it at all.
                                  </td>
                                  
                                  <td>
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-worth_booking_our_service43" value="radio-worth_booking_our_service43" name="worth_booking_our_service" checked="" />
                                      <label class="gaccca-radio__label" for="radio-worth_booking_our_service43">
                                        <span class="gaccca-radio_faux"></span>
                                         
                                      </label>
                                 </span>
                                
                                
                                </td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-worth_booking_our_service44" value="radio-worth_booking_our_service44" name="worth_booking_our_service" />
                                    <label class="gaccca-radio__label" for="radio-worth_booking_our_service44">
                                      <span class="gaccca-radio_faux"></span>
                                     
                                    </label>
                                 </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-worth_booking_our_service45" value="radio-worth_booking_our_service45" name="worth_booking_our_service" />
                                    <label class="gaccca-radio__label" for="radio-worth_booking_our_service45">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label>
                                    
                                    </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-worth_booking_our_service46" value="radio-worth_booking_our_service46" name="worth_booking_our_service" />
                              <label class="gaccca-radio__label" for="radio-worth_booking_our_service46">
                                <span class="gaccca-radio_faux"></span>
                                 
                              </label></span></td>
                          
                          
                                     <td><span class="gaccca-radio">
                                      <input type="radio" id="radio-worth_booking_our_service47" value="radio-worth_booking_our_service47" name="worth_booking_our_service" />
                                      <label class="gaccca-radio__label" for="radio-worth_booking_our_service47">
                                        <span class="gaccca-radio_faux"></span>
                                        
                                      </label></span></td>
                                   <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-worth_booking_our_service48" value="radio-worth_booking_our_service48" name="worth_booking_our_service" />
                                    <label class="gaccca-radio__label" for="radio-worth_booking_our_service48">
                                      <span class="gaccca-radio_faux"></span>
                                       
                                    </label></span></td>
                          
                                     <td>
                                      It was absolutely worth it
                                   </td>
                              
                                 </tr>
                            
                            </table>
                          
                       
                      </div>
                    
                </div>
                 
              </div>



              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            8. Would you recommend our service to others?     <span class="gaccca-text-required" title="required">*</span> </label> 
                       
                            <table class="gaccca-rating-table">
                              <tr>
                                <th> 
                                   </th>
                            
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th> 
                                  </th>
                                
                              </tr>
                              <tr>
                                  <td>
                                      No, I don't recommend it.
                                  </td>
                                  
                                  <td>
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-recommend_our_service43" value="radio-recommend_our_service43" name="recommend_our_service" checked="" />
                                      <label class="gaccca-radio__label" for="radio-recommend_our_service43">
                                        <span class="gaccca-radio_faux"></span>
                                         
                                      </label>
                                 </span>
                                
                                
                                </td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-recommend_our_service44" value="radio-recommend_our_service44" name="recommend_our_service" />
                                    <label class="gaccca-radio__label" for="radio-recommend_our_service44">
                                      <span class="gaccca-radio_faux"></span>
                                     
                                    </label>
                                 </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-recommend_our_service45" value="radio-recommend_our_service45" name="recommend_our_service" />
                                    <label class="gaccca-radio__label" for="radio-recommend_our_service45">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label>
                                    
                                    </span></td>
                                  <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-recommend_our_service46" value="radio-recommend_our_service46" name="recommend_our_service" />
                              <label class="gaccca-radio__label" for="radio-recommend_our_service46">
                                <span class="gaccca-radio_faux"></span>
                                 
                              </label></span></td>
                          
                          
                                     <td><span class="gaccca-radio">
                                      <input type="radio" id="radio-recommend_our_service47" value="radio-recommend_our_service47" name="recommend_our_service" />
                                      <label class="gaccca-radio__label" for="radio-recommend_our_service47">
                                        <span class="gaccca-radio_faux"></span>
                                        
                                      </label></span></td>
                                   <td><span class="gaccca-radio">
                                    <input type="radio" id="radio-recommend_our_service48" value="radio-recommend_our_service48" name="recommend_our_service" />
                                    <label class="gaccca-radio__label" for="radio-recommend_our_service48">
                                      <span class="gaccca-radio_faux"></span>
                                       
                                    </label></span></td>
                          
                                     <td>
                                      Yes, I do recommend it
                                   </td>
                              
                                 </tr>
                            
                            </table>
                          
                       
                      </div>
                    
                    
                    
      
                </div>
                 
              </div>





            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        9. What could we have done better? </label>
                    <div class="gaccca-form-element__control">
                    <textarea name="onfrm[What_could_we_have_done_better__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['What_could_we_have_done_better__c'])?$datas['onfrm']['What_could_we_have_done_better__c']:''}}</textarea>

                    </div>
                </div>
            </div>


            <button id="gaccca_saveBtn_questionbvisa" class="gaccca-button-save gaccca-button-save-margin">Submit</button>
           


        </div>





       


 


    </div>

{!! Form::close() !!}
@include('common.footer')