@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'id' => 'gacccaForm_questioner']) !!}

<div class="gaccca-main-containt">
        <h1 class="gaccca-h1-padding">We would like your feedback! Please rate our placement program.</h1>
        <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
            <p>Thank you for your participation in our placement service! Please answer the following questions to help us improve our service.</p>
           
        </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Why did you choose our placement service over other services you found on the internet? Tell us about what and why was important for you to sign up with us instead with others?</label>
                    <div class="gaccca-form-element__control">
                        
                        <textarea name="QuestionEx1" required="" class="gaccca-textarea">{{isset($datas['QuestionEx1'])?$datas['QuestionEx1']:''}}</textarea>
                    </div>
                </div>
            </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            How understandable during the Welcome Call was our placement program and how transparent was our terms?   <span class="gaccca-text-required" title="required">*</span> </label> 
                       
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
                                    Not understandable
                                  </td>
                                  
                                  <td>
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-welcome_call43" value="radio-welcome_call43" name="welcome_call" checked="" />
                                      <label class="gaccca-radio__label" for="radio-welcome_call43">
                                        <span class="gaccca-radio_faux"></span>
                                         
                                      </label>
                                 </span>
                                
                                
                                </td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-welcome_call44" value="radio-welcome_call44" name="welcome_call" />
                                    <label class="gaccca-radio__label" for="radio-welcome_call44">
                                      <span class="gaccca-radio_faux"></span>
                                     
                                    </label>
                                 </span></td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-welcome_call45" value="radio-welcome_call45" name="welcome_call" />
                                    <label class="gaccca-radio__label" for="radio-welcome_call45">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label>
                                    
                                    </span></td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-welcome_call46" value="radio-welcome_call46" name="welcome_call" />
                              <label class="gaccca-radio__label" for="radio-welcome_call46">
                                <span class="gaccca-radio_faux"></span>
                                 
                              </label></span></td>
                          
                          
                                     <td style="text-align: center;"><span class="gaccca-radio">
                                      <input type="radio" id="radio-welcome_call47" value="radio-welcome_call47" name="welcome_call" />
                                      <label class="gaccca-radio__label" for="radio-welcome_call47">
                                        <span class="gaccca-radio_faux"></span>
                                        
                                      </label></span></td>
                                   <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-welcome_call48" value="radio-welcome_call48" name="welcome_call" />
                                    <label class="gaccca-radio__label" for="radio-welcome_call48">
                                      <span class="gaccca-radio_faux"></span>
                                       
                                    </label></span></td>
                          
                                     <td>
                                      Very understandable
                                   </td>
                              
                                 </tr>
                            
                            </table>
                          
                       
                      </div>
                    
                    
      
                </div>
                 
              </div>




              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <table class="gaccca-rating-table">
                        <tr>
                          <th></th>
                      
                          <th style="text-align: center;">Very easy</th>
                          <th style="text-align: center;">Easy</th>
                          <th style="text-align: center;">Somewhat difficult</th>
                          <th style="text-align: center;">Difficult</th>
                          
                        </tr>
                        <tr>
                            <td>
                               <label class="gaccca-form-element__label" for="text-input-id-8">
                                Understanding of all instructions for each step </label>
                            </td>
                            
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-instructions-very-easy" value="radio-instructions-very-easy" name="all_instructions" checked="" />
                               <label class="gaccca-radio__label" for="radio-instructions-very-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-instructions-easy" value="radio-instructions-easy" name="all_instructions" checked="" />
                               <label class="gaccca-radio__label" for="radio-instructions-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-instructions-somewhat_difficult" value="radio-instructions-somewhat_difficult" name="all_instructions" checked="" />
                               <label class="gaccca-radio__label" for="radio-instructions-somewhat_difficult">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label></span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-instructions-difficult" value="radio-instructions-difficult" name="all_instructions" checked="" />
                               <label class="gaccca-radio__label" for="radio-instructions-difficult">
                                 <span class="gaccca-radio_faux"></span>
                               </label></span></td>
                        
                           </tr>
                        
    
                      
                           <tr>
                            <td>
                               <label class="gaccca-form-element__label" for="text-input-id-8">
                                Uploading documents </label>
                            </td>
                            
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-uploading_documents-very-easy" value="radio-uploading_documents-very-easy" name="uploading_documents" checked="" />
                               <label class="gaccca-radio__label" for="radio-uploading_documents-very-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-uploading_documents-easy" value="radio-uploading_documents-easy" name="uploading_documents" checked="" />
                               <label class="gaccca-radio__label" for="radio-uploading_documents-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-uploading_documents-somewhat-difficult" value="radio-uploading_documents-somewhat-difficult" name="uploading_documents" checked="" />
                               <label class="gaccca-radio__label" for="radio-uploading_documents-somewhat-difficult">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label></span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-uploading_documents-difficult" value="radio-uploading_documents-difficult" name="uploading_documents" checked="" />
                               <label class="gaccca-radio__label" for="radio-uploading_documents-difficult">
                                 <span class="gaccca-radio_faux"></span>
                               </label></span></td>
                        
                           </tr>
                        
    
    
    
                           <tr>
                            <td>
                               <label class="gaccca-form-element__label" for="text-input-id-8">
                                Scheduling calls </label>
                            </td>
                            
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-scheduling_calls-very-easy" value="radio-scheduling_calls-very-easy" name="scheduling_calls" checked="" />
                               <label class="gaccca-radio__label" for="radio-scheduling_calls-very-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-scheduling_calls-easy" value="radio-scheduling_calls-easy" name="scheduling_calls" checked="" />
                               <label class="gaccca-radio__label" for="radio-scheduling_calls-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-scheduling_calls-somewhat-difficult" value="radio-scheduling_calls-somewhat-difficult" name="scheduling_calls" checked="" />
                               <label class="gaccca-radio__label" for="radio-scheduling_calls-somewhat-difficult">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label></span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-scheduling_calls-difficult" value="radio-scheduling_calls-difficult" name="scheduling_calls" checked="" />
                               <label class="gaccca-radio__label" for="radio-scheduling_calls-difficult">
                                 <span class="gaccca-radio_faux"></span>
                               </label></span></td>
                        
                           </tr>
                        
    
                           <tr>
                            <td>
                               <label class="gaccca-form-element__label" for="text-input-id-8">
                                Creating resume  </label>
                            </td>
                             
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-creating_resume-very-easy" value="radio-creating_resume-very-easy" name="creating_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-creating_resume-very-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-creating_resume-easy" value="radio-creating_resume-easy" name="creating_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-creating_resume-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-creating_resume-somewhat_difficult" value="radio-creating_resume-somewhat_difficult" name="creating_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-creating_resume-somewhat_difficult">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label></span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-creating_resume-difficult" value="radio-creating_resume-difficult" name="creating_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-creating_resume-difficult">
                                 <span class="gaccca-radio_faux"></span>
                               </label></span></td>
                        
                           </tr>
                        
    
                           
                          
                           <tr>
                            <td>
                               <label class="gaccca-form-element__label" for="text-input-id-8">
                                Writing your script </label>
                            </td>
                            
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Writing_script-very-easy" value="radio-Writing_script-very-easy" name="Writing_script" checked="" />
                               <label class="gaccca-radio__label" for="radio-Writing_script-very-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Writing_script-easy" value="radio-Writing_script-easy" name="Writing_script" checked="" />
                               <label class="gaccca-radio__label" for="radio-Writing_script-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Writing_script-somewhat_difficult" value="radio-Writing_script-somewhat_difficult" name="Writing_script" checked="" />
                               <label class="gaccca-radio__label" for="radio-Writing_script-somewhat_difficult">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label></span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Writing_script-difficult" value="radio-Writing_script-difficult" name="Writing_script" checked="" />
                               <label class="gaccca-radio__label" for="radio-Writing_script-difficult">
                                 <span class="gaccca-radio_faux"></span>
                               </label></span></td>
                        
                           </tr>
                        
    
                           <tr>
                            <td>
                               <label class="gaccca-form-element__label" for="text-input-id-8">
                                Recording your video</label>
                            </td>
                            
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Recording_video-very-easy" value="radio-Recording_video-very-easy" name="Recording_video" checked="" />
                               <label class="gaccca-radio__label" for="radio-Recording_video-very-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Recording_video-easy" value="radio-Recording_video-easy" name="Recording_video" checked="" />
                               <label class="gaccca-radio__label" for="radio-Recording_video-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Recording_video-somewhat_difficult" value="radio-Recording_video-somewhat_difficult" name="Recording_video" checked="" />
                               <label class="gaccca-radio__label" for="radio-Recording_video-somewhat_difficult">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label></span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-Recording_video-difficult" value="radio-Recording_video-difficult" name="Recording_video" checked="" />
                               <label class="gaccca-radio__label" for="radio-Recording_video-difficult">
                                 <span class="gaccca-radio_faux"></span>
                               </label></span></td>
                        
                           </tr>
                        
    
                           <tr>
                            <td>
                               <label class="gaccca-form-element__label" for="text-input-id-8">
                                Creating your Video Resume overall </label>
                            </td>
                           
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-video_resume-very-easy" value="radio-video_resume-very-easy" name="video_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-video_resume-very-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-video_resume-easy" value="radio-video_resume-easy" name="video_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-video_resume-easy">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label>
                           </span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-video_resume-somewhat_difficult" value="radio-video_resume-somewhat_difficult" name="video_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-video_resume-somewhat_difficult">
                                 <span class="gaccca-radio_faux"></span>
                                  
                               </label></span></td>
                            <td style="text-align: center;"><span class="gaccca-radio">
                               <input type="radio" id="radio-video_resume-difficult" value="radio-video_resume-difficult" name="video_resume" checked="" />
                               <label class="gaccca-radio__label" for="radio-video_resume-difficult">
                                 <span class="gaccca-radio_faux"></span>
                               </label></span></td>
                        
                           </tr>
                        
                     
                        
                      </table>
                </div>
            </div>
    




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Was there anything you wish you knew from the beginning of the placement process, which we missed? <span class="gaccca-text-required" title="required">*</span> </label>
                    <div class="gaccca-form-element__control">
                    <textarea name="QuestionEx10" required="" class="gaccca-textarea">{{isset($datas['QuestionEx10'])?$datas['QuestionEx10']:''}}</textarea>

                    </div>
                </div>
            </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Would you recommend our placement service to a friend?  <span class="gaccca-text-required" title="required">*</span> </label> 
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
                                      Not at all.
                                  </td>
                                  
                                  <td>
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-would_you_recommend43" value="radio-would_you_recommend43" name="would_you_recommend" checked="" />
                                      <label class="gaccca-radio__label" for="radio-would_you_recommend43">
                                        <span class="gaccca-radio_faux"></span>
                                         
                                      </label>
                                 </span>
                                
                                
                                </td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-would_you_recommend44" value="radio-would_you_recommend44" name="would_you_recommend" />
                                    <label class="gaccca-radio__label" for="radio-would_you_recommend44">
                                      <span class="gaccca-radio_faux"></span>
                                     
                                    </label>
                                 </span></td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-would_you_recommend45" value="radio-would_you_recommend45" name="would_you_recommend" />
                                    <label class="gaccca-radio__label" for="radio-would_you_recommend45">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label>
                                    
                                    </span></td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-would_you_recommend46" value="radio-would_you_recommend46" name="would_you_recommend" />
                              <label class="gaccca-radio__label" for="radio-would_you_recommend46">
                                <span class="gaccca-radio_faux"></span>
                                 
                              </label></span></td>
                          
                          
                                     <td style="text-align: center;"><span class="gaccca-radio">
                                      <input type="radio" id="radio-would_you_recommend47" value="radio-would_you_recommend47" name="would_you_recommend" />
                                      <label class="gaccca-radio__label" for="radio-would_you_recommend47">
                                        <span class="gaccca-radio_faux"></span>
                                        
                                      </label></span></td>
                                   <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-would_you_recommend48" value="radio-would_you_recommend48" name="would_you_recommend" />
                                    <label class="gaccca-radio__label" for="radio-would_you_recommend48">
                                      <span class="gaccca-radio_faux"></span>
                                       
                                    </label></span></td>
                          
                                     <td>
                                      Yes, indeed
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
                            Was it worth booking our placement service?   <span class="gaccca-text-required" title="required">*</span> </label> 
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
                                      It was not worth it
                                  </td>
                                  
                                  <td>
                                    <span class="gaccca-radio">
                                      <input type="radio" id="radio-worth_booking_our_service43" value="radio-worth_booking_our_service43" name="worth_booking_our_service" checked="" />
                                      <label class="gaccca-radio__label" for="radio-worth_booking_our_service43">
                                        <span class="gaccca-radio_faux"></span>
                                         
                                      </label>
                                 </span>
                                
                                
                                </td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-worth_booking_our_service44" value="radio-worth_booking_our_service44" name="worth_booking_our_service" />
                                    <label class="gaccca-radio__label" for="radio-worth_booking_our_service44">
                                      <span class="gaccca-radio_faux"></span>
                                     
                                    </label>
                                 </span></td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-worth_booking_our_service45" value="radio-worth_booking_our_service45" name="worth_booking_our_service" />
                                    <label class="gaccca-radio__label" for="radio-worth_booking_our_service45">
                                      <span class="gaccca-radio_faux"></span>
                                      
                                    </label>
                                    
                                    </span></td>
                                  <td style="text-align: center;"><span class="gaccca-radio">
                                    <input type="radio" id="radio-worth_booking_our_service46" value="radio-worth_booking_our_service46" name="worth_booking_our_service" />
                              <label class="gaccca-radio__label" for="radio-worth_booking_our_service46">
                                <span class="gaccca-radio_faux"></span>
                                 
                              </label></span></td>
                          
                          
                                     <td style="text-align: center;"><span class="gaccca-radio">
                                      <input type="radio" id="radio-worth_booking_our_service47" value="radio-worth_booking_our_service47" name="worth_booking_our_service" />
                                      <label class="gaccca-radio__label" for="radio-worth_booking_our_service47">
                                        <span class="gaccca-radio_faux"></span>
                                        
                                      </label></span></td>
                                   <td style="text-align: center;"><span class="gaccca-radio">
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
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        What could we have done better? </label>
                    <div class="gaccca-form-element__control">
                    <textarea name="QuestionEx13" required="" class="gaccca-textarea">{{isset($datas['QuestionEx13'])?$datas['QuestionEx13']:''}}</textarea>

                    </div>
                </div>
            </div>


            <button id="gaccca_saveBtn_questioner" class="gaccca-button-save gaccca-button-save-margin">Submit</button>
           


        </div>

    </div>
{!! Form::close() !!}
@include('common.footer')