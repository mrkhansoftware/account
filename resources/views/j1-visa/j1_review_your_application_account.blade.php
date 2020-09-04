@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Review your Application</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please review your Application and click the confirmation button.</p>
      </div>
      <h2 class="gaccca-h2-padding">Participant Information</h2>
    
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                      Do you have a dual citizenship? <span class="gaccca-text-required" title="required">*</span> </label>
               
                
                      <span class="gaccca-radio">
                        <input type="radio" id="radio-citizenship-no" value="radio-citizenship-no" name="citizenship" checked="" />
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



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-citizenship">
                    Citizenship  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-citizenship" disabled='' required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Please also list your dual citizenship here.</span>
                </div>
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-lpr">
                    Country of Legal Permanent Residency   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-lpr" disabled='' required="" class="gaccca-input" />
                </div>
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-usvisa">
                     Have you ever applied for a US visa?   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-usvisa" disabled='' required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Please provide type of visa and expiration date as well as information about any previous visa denials.</span>
                </div>
              </div>

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-country_ob">
                     Country of Birth   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-country_ob" disabled='' required="" class="gaccca-input" />
                </div>
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-city_ob">
                     City of Birth  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-city_ob" disabled='' required="" class="gaccca-input" />
                </div>
              </div>
 

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">Marital Status  <span class="gaccca-text-required">*</span></label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                    <select class="gaccca-select" disabled='' id="select-ms">                      
                      <option>select</option>
                      
                    </select>
                  </div>
                </div>
              </div>
             <br/>

             <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ecpou">
                     Emergency Contact Person outside the US  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-ecpou" disabled='' required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Please list a person to contact in case of emergency</span>
                </div>
              </div>

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-rta">
                     Relationship to Applicant  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-rta" disabled='' required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Please define the relationship between you  and your emergency contact person, e.g. mother, father, sister,  boyfriend, etc.</span>
                </div>
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ecpea">
                     Emergency Contact Person Email Address  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-ecpea" disabled='' required="" class="gaccca-input" />
                </div>
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ecppn">
                      Emergency Contact Person Phone Number  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-ecppn" disabled='' required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Please always provide the country code.</span>
                </div>
              </div>

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ecpa">
                      Emergency Contact Person Address   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-ecpa" disabled='' required="" class="gaccca-input" />
                </div>
              </div>
                <br/>


                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-nou">
                          Name of University    <span class="gaccca-text-required" title="required">*</span> </label>
                    <div class="gaccca-form-element__control">
                      <input type="text" id="text-input-id-nou" disabled='' required="" class="gaccca-input" />
                    </div>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-fos">
                          Field of Study    <span class="gaccca-text-required" title="required">*</span> </label>
                    <div class="gaccca-form-element__control">
                      <input type="text" id="text-input-id-fos" disabled='' required="" class="gaccca-input" />
                    </div>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="select-01">  Type of Degree <span class="gaccca-text-required">*</span></label>
                    <div class="gaccca-form-element__control">
                      <div class="gaccca-select_container">
                        <select class="gaccca-select" disabled='' id="select-tod">                      
                          <option>select</option>
                          
                        </select>
                      </div>
                    </div>
                  </div>



                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-egd">
                          (Expected) Graduation Date     <span class="gaccca-text-required" title="required">*</span> </label>
                    <div class="gaccca-form-element__control">
                      <input type="text" id="text-input-id-egd" disabled='' required="" class="gaccca-input-date" />
                    </div>
                  </div>




                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="select-01">  Work Experience in your Field of Study after Graduation <span class="gaccca-text-required">*</span></label>
                    <div class="gaccca-form-element__control">
                      <div class="gaccca-select_container">
                        <select class="gaccca-select" disabled='' id="select-tod">                      
                          <option>select</option>
                          
                        </select>
                        
                      </div>
                      
                      <span class="gaccca-input-help-text">The upload will need some time. Please have some patience.</span>
                    </div>
                  </div>
                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <div class="gaccca-form-element__label">
                      <a href="#">To update information, open the form.</a>
                    </div>
                    </div>


                    <h2 class="gaccca-h2-padding">Host Company Information</h2>


                   
                    


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-foi">
                              Field of Internship     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-foi" disabled='' required="" class="gaccca-input" />
                         
                          <span class="gaccca-input-help-text">e.g. Marketing, Business Development, Mechanical  Engineering, Architecture, Graphic Design</span>
                          
                        </div>
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-ssdoi">
                              Scheduled Start Date of Internship/Training     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-ssdoi" disabled='' required="" class="gaccca-input-date" />
                        </div>
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-sedoi">
                              Scheduled End Date of Internship/Training     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-sedoi" disabled='' required="" class="gaccca-input-date" />
                        </div>
                      </div>
                      <br/>

                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-hcn">
                              Host Company Name     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-hcn" disabled='' required="" class="gaccca-input" />
                        </div>
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-hcw">
                              Host Company Website     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-hcw" disabled='' required="" class="gaccca-input" />
                        </div>
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-hca">
                              Host Company Address     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-hca" disabled='' required="" class="gaccca-input" />
                        </div>
                      </div>

                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-city">
                              City     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-city" disabled='' required="" class="gaccca-input" />
                        </div>
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-zipcode">
                             Zip Code     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-zipcode" disabled='' required="" class="gaccca-input" />
                        </div>
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="select-01">State  <span class="gaccca-text-required">*</span></label>
                        <div class="gaccca-form-element__control">
                          <div class="gaccca-select_container">
                            <select class="gaccca-select" disabled='' id="select-ms">                      
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
                          <input type="text" id="text-input-id-hccp" disabled='' required="" class="gaccca-input" />
                        
                        <span class="gaccca-input-help-text">Enter the name of the person who will be your <br/> supervisor/mentor during your internship/training.</span>
                        </div>
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-ccea">
                             Company Contact email address     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-ccea" disabled='' required="" class="gaccca-input" />
                        </div>
                      </div>

                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-ccp">
                             Company Contact phone     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-ccp" disabled='' required="" class="gaccca-input" />
                        
                        <span class="gaccca-input-help-text">Use the following format +1-563-6325685</span>
                        </div>
                      </div>
                      <br/>

                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-hpw">
                             Hours per week     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-hpw" disabled='' required="" class="gaccca-input" />
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
                          <input type="text" id="text-input-id-howmuch" disabled='' required="" class="gaccca-input" />
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
                          <input type="text" id="text-input-id-vohiupm" disabled='' required="" class="gaccca-input" />
                        
                        <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                        </div>
                      </div>



                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-votiupm">
                             - Value of Transportation in USD per month     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-votiupm" disabled='' required="" class="gaccca-input" />
                        
                        <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                        </div>
                      </div>



                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-tfeiu">
                             - Total Flight Expenses in USD     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-tfeiu" disabled='' required="" class="gaccca-input" />
                        
                        <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                        </div>
                      </div>



                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <label class="gaccca-form-element__label" for="text-input-id-howmuch">
                            - Other compensation     <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                          <input type="text" id="text-input-id-howmuch" disabled='' required="" class="gaccca-input" />
                        
                        <span class="gaccca-input-help-text">If not applicable please fill in n/a. Please also name the expense, e.g visa fee.</span>
                        </div>
                      </div>

                      <div class="gaccca-form-element gaccca-form-element-margin">
                        <div class="gaccca-form-element__label">
                          <a href="#"> To update information, open the form. </a>
                        </div>
                      </div>
                      


                     <h2 class="gaccca-h2-padding">Finalize your application</h2>



                     <div class="gaccca-form-element gaccca-form-element-margin">
  
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-form-element__label" for="text-input-id-fn">
                              I have received and read the program price list  <span class="gaccca-text-required" title="required">*</span> </label>
                          
                            <span class="gaccca-radio">
                              <input type="radio" id="radio-yes" value="radio-yes"  required='' name="recived_read1" />
                              <label class="gaccca-radio__label" for="radio-yes">
                                <span class="gaccca-radio_faux"></span>
                                <span class="gaccca-form-element__label">Yes</span>
                              </label>
                            </span>
                          </div>
                          <span class="gaccca-input-help-text">Based on all submitted information and documents we as your J-1 Sponsor will choose the right visa category and program duration. Please refer to your invoice you will receive after booking our service.</span>
    
                      </div>


                      <div class="gaccca-form-element gaccca-form-element-margin">
  
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-form-element__label" for="text-input-id-fn">
                              I would like to purchase the expedited service for an additional fee  <span class="gaccca-text-required" title="required">*</span> </label>
                          
                          
                              <span class="gaccca-radio">
                                <input type="radio" id="radio-purchase-no" value="radio-purchase-no" name="purchase" checked="" />
                                <label class="gaccca-radio__label" for="radio-purchase-no">
                                  <span class="gaccca-radio_faux"></span>
                                  <span class="gaccca-padding-right-25">No</span>
                                </label>
                                <input type="radio" id="radio-purchase-yes" value="radio-purchase-yes" name="purchase" />
                                <label class="gaccca-radio__label" for="radio-purchase-yes">
                                  <span class="gaccca-radio_faux"></span>
                                  <span class="gaccca-padding-right-25">Yes</span>
                                </label>
                              </span>


                          </div>
                          <span class="gaccca-input-help-text">Our average processing times are up to 10 weeks. If you are applying for a J-1 visa on a tight deadline, our expedited service can help. Upon requesting the expedited service we will guarantee processing times of 2 weeks after receiving all information and documents from you and your host company and if no on-site visit is required.</span>
    
                      </div>

                      <br/>

                      <div class="gaccca-form-element gaccca-form-element-margin">

                      <h4>Health Insurance Information</h4>
                      <p>German American Chamber of Commerce California, Inc., in accordance with the Bureau of Educational and Cultural Affairs' (ECA) regulations for exchange visitors (22 CFR Part 514 [Rulemaking No. 101]), requires that all participants have health insurance in effect for the duration of their stay in the United States. GACC California will not issue the DS-2019 form without having received this completed form and funds to purchase insurance (if applicable).</p>
                      <p>As a participant in our program, please be aware that you must purchase the Health Insurance policy supplied by German American Chamber of Commerce California, Inc., which meets the requirements of ECA regulations. More information on the health insurance rates can be found <a href="#"> online.</a> You will be able to choose your insurance rate and exact coverage period during your visa application process.</p>       
                <p>Please note that government regulations for the J-1 Intern and Trainee programs permit you to arrive in the U.S. up to 30 days before the beginning of your internship and to stay up to 30 days after your internship ends. GACC California recommends that you maintain health insurance coverage for your entire stay in the U.S. If you wish, you may purchase additional health insurance from GACC California to cover the period before and/or after your internship.</p>
                   
</div>



<div class="gaccca-form-element gaccca-form-element-margin">
  
    <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          I understand that the purchase of this health insurance package is a requirement of the GACC California program. <span class="gaccca-text-required" title="required">*</span> </label>
        <span class="gaccca-radio">
          <input type="radio" id="radio-understand" value="radio-understand"  name="understand"  />
          <label class="gaccca-radio__label" for="radio-understand">
            <span class="gaccca-radio_faux"></span>
            <span class="gaccca-form-element__label">Yes</span>
          </label>
        </span>
      </div>
      <span class="gaccca-input-help-text">If you have any questions please contact us.</span>
  </div>

  <div class="gaccca-form-element gaccca-form-element-margin">
  
    <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" for="text-input-id-fn">
          I require a J-2 Visa for my spouse/children <span class="gaccca-text-required" title="required">*</span> </label>
       

          <span class="gaccca-radio">
            <input type="radio" id="radio-j2_visa-no" value="radio-j2_visa-no" name="j2_visa" checked="" />
            <label class="gaccca-radio__label" for="radio-j2_visa-no">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">No</span>
            </label>
            <input type="radio" id="radio-j2_visa-yes" value="radio-j2_visa-yes" name="j2_visa" />
            <label class="gaccca-radio__label" for="radio-j2_visa-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Yes</span>
            </label>
          </span>
        
      </div>
      <span class="gaccca-input-help-text">If J-2 is required we will contact you via email with further information.</span>
  </div>



  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="text-input-id-hmpnjv">
         - How many people need a J-2 visa     <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
      <input type="text" id="text-input-id-hmpnjv" disabled='' required="" class="gaccca-input" />
    
    <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
    </div>
  </div>



  <div class="gaccca-form-element gaccca-form-element-margin">
    <label class="gaccca-form-element__label" for="select-01">How did you hear about the program?<span class="gaccca-text-required">*</span></label>
    <div class="gaccca-form-element__control">
      <div class="gaccca-select_container">
        <select class="gaccca-select" disabled='' id="select-01">
            <option>select</option>                      
            <option value="Event, Info Session, or Webinar">Event, Info Session, or Webinar</option>
            <option value="Online Search">Online Search</option>
            <option value="University, Professor etc">University, Professor etc</option>
            <option value="Social Media, Facebook etc.">Social Media, Facebook etc.</option>
            <option value="Attorney">Attorney</option>
            <option value="Employer, Colleague">Employer, Colleague</option>
            <option value="Job Boards">Job Boards</option>
            <option value="Family, friend">Family, friend</option>
            <option value="Agency">Agency</option>
            <option value="Other">Other</option>
        </select>
      </div>
    </div>
  </div>

    <div class="gaccca-form-element gaccca-form-element-margin">
      <div class="gaccca-form-element__label">
        <a href="#">To update information, open the form.</a>    
      </div>
    </div>

    <h2 class="gaccca-h2-padding">Confirmation and Submit</h2>
    <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <span class="gaccca-form-element__label">I confirm the correctness of these information</span>
          <div class="gaccca-checkbox">
            <input type="checkbox" name="options" id="checkbox-unique-id-73" value="checkbox-unique-id-73" checked="" />
            <label class="gaccca-checkbox__label" for="checkbox-unique-id-73">
              <span class="gaccca-checkbox_faux"></span>
              <span class="gaccca-form-element__label">Yes</span>
            </label>
          </div>
        </div>
      </div>

    <div class="gaccca-form-element gaccca-form-element-margin">
        Please sign here:
    </div>
    <div class="gaccca-form-element gaccca-form-element-margin">

    <button class="gaccca-button-save ">Send Application to GACC California</button>
</div>

        </div>
      
      </div>

    </div>

{!! Form::close() !!}
@include('common.footer')