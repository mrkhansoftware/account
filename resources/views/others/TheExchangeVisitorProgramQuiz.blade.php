@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST',  'id' => 'gacccaForm_exchange']) !!}

<div class="gaccca-main-containt">
        <h1 class="gaccca-h1-padding">The Exchange Visitor Program Quiz</h1>
        <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
            <p> We are using this short quiz to see what you have learned so far about the J-1 exchange program. Only one answer per question is right. For any right answer you will get one point. After you have done the quiz you can view your score and review your answers. We recommend to read your handbook in your account.</p>
           
    
    
        </div>
    
    
     
    
    
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            What is an I-94 card and why is it relevant? <span class="gaccca-text-required" title="required">*</span> </label>
                        <span class="gaccca-radio">
                          <input type="radio" id="radio-w01" value="radio-w01" name="what_is_i94" checked="" />
                          <label class="gaccca-radio__label" for="radio-w01">
                            <span class="gaccca-radio_faux"></span>
                            <span>I-94 refers to the training plan describing my tasks during the internship.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="radio-w02" value="radio-w02" name="what_is_i94" />
                          <label class="gaccca-radio__label" for="radio-w02">
                            <span class="gaccca-radio_faux"></span>
                            <span>The I-94 card serves to prove the legal-visitor status (for example for your employer) and can be retrieved after 24 hours from your arrival in the U.S. from the Customs and Border Protection website (CBP).</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="radio-w03" value="radio-w03" name="what_is_i94" />
                          <label class="gaccca-radio__label" for="radio-w03">
                            <span class="gaccca-radio_faux"></span>
                            <span>I-94 is the name for the form to apply for a social security number.</span>
                          </label>
                        </span>
                       
                       
                      </div>
        
                  </div>
                   
            </div>
    
          
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            What is the correct answer in regards to your application for a Social Security Number (SSN)? <span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w04" value="sradio-w04" name="social_security_number" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w04">
                            <span class="gaccca-radio_faux"></span>
                            <span>I can apply for a Social Security Number before start of my training.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w05" value="sradio-w05" name="social_security_number" />
                          <label class="gaccca-radio__label" for="sradio-w05">
                            <span class="gaccca-radio_faux"></span>
                            <span>I have to first conduct my check-in with the sponsor within one week after starting at my host company before applying for an SSN.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w06" value="sradio-w06" name="social_security_number" />
                          <label class="gaccca-radio__label" for="sradio-w06">
                            <span class="gaccca-radio_faux"></span>
                            <span>J-1 visa applicants are not eligible to apply for an SSN.</span>
                          </label>
                        </span>
                       
                       
                      </div>
            
                  </div>
                   
            </div>
            
    
    



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            After successful completion of your training how many days can you remain in the U.S. thereafter? <span class="gaccca-text-required" title="required">*</span> </label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w07" value="sradio-w07" name="how_many_days_in_us" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w07">
                            <span class="gaccca-radio_faux"></span>
                            <span>An absolute maximum of 60 days.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w08" value="sradio-w08" name="how_many_days_in_us" />
                          <label class="gaccca-radio__label" for="sradio-w08">
                            <span class="gaccca-radio_faux"></span>
                            <span>An absolute maximum 30 days.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w09" value="sradio-w09" name="how_many_days_in_us" />
                          <label class="gaccca-radio__label" for="sradio-w09">
                            <span class="gaccca-radio_faux"></span>
                            <span>One week.</span>
                          </label>
                        </span>
            
                        <span class="gaccca-radio">
                            <input type="radio" id="sradio-w09a" value="sradio-w09a" name="how_many_days_in_us" />
                            <label class="gaccca-radio__label" for="sradio-w09a">
                              <span class="gaccca-radio_faux"></span>
                              <span>It doesn't matter.</span>
                            </label>
                          </span>
                       
            
            
                       
                      </div>
            
                  </div>
                   
            </div>
            




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Can I get a side job (i.e. in the evening) on top of the training at my host company to earn some extra money? <span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w10" value="sradio-w10" name="earn_some_extra_mpney" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w10">
                            <span class="gaccca-radio_faux"></span>
                            <span> No </span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w11" value="sradio-w11" name="earn_some_extra_mpney" />
                          <label class="gaccca-radio__label" for="sradio-w11">
                            <span class="gaccca-radio_faux"></span>
                            <span>Yes</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w12" value="sradio-w12" name="earn_some_extra_mpney" />
                          <label class="gaccca-radio__label" for="sradio-w12">
                            <span class="gaccca-radio_faux"></span>
                            <span>Yes but only of the sponsor approves.</span>
                          </label>
                        </span>
            
                       
                      </div>
            
                  </div>
                   
            </div>
            



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Is it important to prove sufficient financial funds to GACC California and the U.S. embassy or consulate prior to start of program? <span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w13" value="sradio-w13" name="prove_sufficient_financial" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w13">
                            <span class="gaccca-radio_faux"></span>
                            <span> Yes, very important. </span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w14" value="sradio-w14" name="prove_sufficient_financial" />
                          <label class="gaccca-radio__label" for="sradio-w14">
                            <span class="gaccca-radio_faux"></span>
                            <span>No if I get paid by my host company.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w15" value="sradio-w15" name="prove_sufficient_financial" />
                          <label class="gaccca-radio__label" for="sradio-w15">
                            <span class="gaccca-radio_faux"></span>
                            <span>Yes, but I only need to prove that I have sufficient funds for the first two months of internship.</span>
                          </label>
                        </span>
            
                       
                      </div>
            
                  </div>
                   
            </div>
            




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                           
            After starting your training in your host company, if your supervisor changes will you need to inform your sponsor organization GACC California? <span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w16" value="sradio-w16" name="supervisor_changes" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w16">
                            <span class="gaccca-radio_faux"></span>
                            <span> No </span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w17" value="sradio-w17" name="supervisor_changes" />
                          <label class="gaccca-radio__label" for="sradio-w17">
                            <span class="gaccca-radio_faux"></span>
                            <span> Yes</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w18" value="sradio-w18" name="supervisor_changes" />
                          <label class="gaccca-radio__label" for="sradio-w18">
                            <span class="gaccca-radio_faux"></span>
                            <span>Yes, but only if the tasks in the training plan change as well.</span>
                          </label>
                        </span>
            
                       
                       
            
            
                       
                      </div>
            
                  </div>
                   
            </div>

            

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                           
                            What is the correct answer in regards to a travel validation? <span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w19" value="sradio-w19" name="travel_validation" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w19">
                            <span class="gaccca-radio_faux"></span>
                            <span> The purpose of the travel validation is to inform the sponsor (GACC California) of your future international travel plans. </span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w20" value="sradio-w20" name="travel_validation" />
                          <label class="gaccca-radio__label" for="sradio-w20">
                            <span class="gaccca-radio_faux"></span>
                            <span> The purpose of the travel validation is to inform the sponsor (GACC California) of your future travel plans inside the U.S.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w21" value="sradio-w21" name="travel_validation" />
                          <label class="gaccca-radio__label" for="sradio-w21">
                            <span class="gaccca-radio_faux"></span>
                            <span>The purpose of the travel validation is to inform the sponsor (GACC California) of a past trip, and to provide the sponsor with the date of re-entry into the U.S.</span>
                          </label>
                        </span>
            
                       
                       
            
            
                       
                      </div>
            
                  </div>
                   
            </div>

            

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            What is correct in regards to a so called Two-Year Foreign Residency Requirement?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w22" value="sradio-w22" name="residency_requirement" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w22">
                            <span class="gaccca-radio_faux"></span>
                            <span> It refers to a person subject to the two-year foreign residence who must have resided in their home country for two years prior to applying for a J-1 visa. </span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w23" value="sradio-w23" name="residency_requirement" />
                          <label class="gaccca-radio__label" for="sradio-w23">
                            <span class="gaccca-radio_faux"></span>
                            <span> Two-Year Foreign Residency Requirement applies to all J-1 visa applicants without exception.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w24" value="sradio-w24" name="residency_requirement" />
                          <label class="gaccca-radio__label" for="sradio-w24">
                            <span class="gaccca-radio_faux"></span>
                            <span>It refers to a person subject to the two-year foreign residence requirement may not be eligible to apply for another visa category for two years following their program. If you are subject to the two-year rule it will be marked as such on your DS-2019 Form as well as on the J-1 Visa inside your passport.</span>
                          </label>
                        </span>
            
                       
                                           
                      </div>
            
                  </div>
                   
            </div>
            






            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            All of the following entities play an important role in your program. But who is considered the sponsor of your J-1 visa?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w25" value="sradio-w25" name="sponsor_of_your_J1_visa" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w25">
                            <span class="gaccca-radio_faux"></span>
                            <span> Your Host Company </span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w26" value="sradio-w26" name="sponsor_of_your_J1_visa" />
                          <label class="gaccca-radio__label" for="sradio-w26">
                            <span class="gaccca-radio_faux"></span>
                            <span> GACC California.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w27" value="sradio-w27" name="sponsor_of_your_J1_visa" />
                          <label class="gaccca-radio__label" for="sradio-w27">
                            <span class="gaccca-radio_faux"></span>
                            <span>The U.S. Embassy</span>
                          </label>
                        </span>
            
                        <span class="gaccca-radio">
                            <input type="radio" id="sradio-w28" value="sradio-w28" name="sponsor_of_your_J1_visa" />
                            <label class="gaccca-radio__label" for="sradio-w28">
                              <span class="gaccca-radio_faux"></span>
                              <span>Your agency or university in your home country</span>
                            </label>
                          </span>
            
                       
                       
            
            
                       
                      </div>
            
                  </div>
                   
            </div>
            

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Which of the following describes the purpose of the Exchange Visitor Program best?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w29" value="sradio-w29" name="exchange_visitor_program" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w29">
                            <span class="gaccca-radio_faux"></span>
                            <span>  The primary goals of the Exchange Visitor Program are to allow participants the opportunity to engage broadly with Americans, share their culture, strengthen their English language abilities, and learn new skills or build skills that will help them in future careers.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w30" value="sradio-w30" name="exchange_visitor_program" />
                          <label class="gaccca-radio__label" for="sradio-w30">
                            <span class="gaccca-radio_faux"></span>
                            <span> The primary objective of the program is for the foreign national to participate in a labor program, receive a wage and save up enough money to return to the home country to start her or his career.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w31" value="sradio-w31" name="exchange_visitor_program" />
                          <label class="gaccca-radio__label" for="sradio-w31">
                            <span class="gaccca-radio_faux"></span>
                            <span>The primary objective of the program is for the foreign national to learn about American culture in order to investigate opportunities to permanently live in the U.S. and launch a successful career.</span>
                          </label>
                        </span>
            
                                             
                      </div>
            
                  </div>
                   
            </div>
            






            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Upon start of your training you are required to conduct a so called check-in with your sponsor in order to validate your visa. Within what time frame will you have to perform this task?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w32" value="sradio-w32" name="exchange_visitor_program" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w32">
                            <span class="gaccca-radio_faux"></span>
                            <span>  Within 4 weeks of arrival in the U.S.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w33" value="sradio-w33" name="exchange_visitor_program" />
                          <label class="gaccca-radio__label" for="sradio-w33">
                            <span class="gaccca-radio_faux"></span>
                            <span> Within one week of start of training.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w34" value="sradio-w34" name="exchange_visitor_program" />
                          <label class="gaccca-radio__label" for="sradio-w34">
                            <span class="gaccca-radio_faux"></span>
                            <span>By the end of the third week after arrival in the U.S.</span>
                          </label>
                        </span>
            
                      
            
            
                       
                      </div>
            
                  </div>
                   
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Is the program in which you are participating in considered:<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w35" value="sradio-w35" name="participating_program" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w35">
                            <span class="gaccca-radio_faux"></span>
                            <span>An internship / training program?</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w36" value="sradio-w36" name="participating_program" />
                          <label class="gaccca-radio__label" for="sradio-w36">
                            <span class="gaccca-radio_faux"></span>
                            <span> A sightseeing program?</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w37" value="sradio-w37" name="participating_program" />
                          <label class="gaccca-radio__label" for="sradio-w37">
                            <span class="gaccca-radio_faux"></span>
                            <span>A labor program?</span>
                          </label>
                        </span>
            
                      
            
                      </div>
            
                  </div>
                   
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Are you required to inform GACC California if you are moving (change of address)?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w38" value="sradio-w38" name="inform_to_moving" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w38">
                            <span class="gaccca-radio_faux"></span>
                            <span>No</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w39" value="sradio-w39" name="inform_to_moving" />
                          <label class="gaccca-radio__label" for="sradio-w39">
                            <span class="gaccca-radio_faux"></span>
                            <span> Yes</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w40" value="sradio-w40" name="inform_to_moving" />
                          <label class="gaccca-radio__label" for="sradio-w40">
                            <span class="gaccca-radio_faux"></span>
                            <span>Yes but only if the move is farther than 5 miles from the current address.</span>
                          </label>
                        </span>
            
                      
            
                      </div>
            
                  </div>
                   
            </div>
            



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Which role has my sponsor GACC California?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w41" value="sradio-w41" name="sponsor_gaccca_california" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w41">
                            <span class="gaccca-radio_faux"></span>
                            <span>GACC California is a U.S. Department of State designated J1-visa sponsor for the Intern or Trainee categories. GACC California has to ensure compliance of all official U.S. regulations. If the internship or training offer is well received, approved, and all further program points are fulfilled GACC California issues the DS-2019 form. GACC California is my main contact until the issuance of the the DS-2019 form but GACC California's role ends right there and then which is as soon as you have received your form DS-2019.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w42" value="sradio-w42" name="sponsor_gaccca_california" />
                          <label class="gaccca-radio__label" for="sradio-w42">
                            <span class="gaccca-radio_faux"></span>
                            <span> GACC California is a U.S. Department of State designated J1-visa sponsor for the Intern or Trainee categories. GACC California has to ensure compliance of all official U.S. regulations. If the internship or training offer is well received, approved, and all further program points are fulfilled GACC California issues the DS-2019 form. Thereafter, GACC California continues to play an important role for my program. For example it provides me with important guidance, problem solving options, and orientations, and is my main contact person throughout the stay in the U.S. All decisions about my visa status during the J‐1 program are made by GACC California, not by the Host Company.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w43" value="sradio-w43" name="sponsor_gaccca_california" />
                          <label class="gaccca-radio__label" for="sradio-w43">
                            <span class="gaccca-radio_faux"></span>
                            <span>GACC California is a U.S. Department of State designated J1-visa sponsor for the Intern or Trainee categories. GACC California has to ensure compliance of all official U.S. regulations. If the internship and training offer is well received, approved, and all further program points are fulfilled GACC California issues the DS-2019 form. GACC California also provides me with important guidance and orientation materials thereafter. However, all decisions about my visa status during the internship or training are made by the Host Company only, not GACC California.</span>
                          </label>
                        </span>
            
                      
            
                      </div>
            
                  </div>
                   
            </div>
            




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Which of the following U.S. government agencies are managing your J-1 exchange program?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w44" value="sradio-w44" name="managing_your_J1_exchange_program" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w44">
                            <span class="gaccca-radio_faux"></span>
                            <span>The U.S. Department of State.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w45" value="sradio-w45" name="managing_your_J1_exchange_program" />
                          <label class="gaccca-radio__label" for="sradio-w45">
                            <span class="gaccca-radio_faux"></span>
                            <span>The U.S. Department of Agriculture.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w46" value="sradio-w46" name="managing_your_J1_exchange_program" />
                          <label class="gaccca-radio__label" for="sradio-w46">
                            <span class="gaccca-radio_faux"></span>
                            <span>The U.S. Department of Education.</span>
                          </label>
                        </span>
            
                      
            
                      </div>
            
                  </div>
                   
            </div>

            
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Important: Who should you contact in case of problems or complaints with your internship or host company?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w47" value="sradio-w47" name="contact_in_case_of_problems" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w47">
                            <span class="gaccca-radio_faux"></span>
                            <span>I should only contact my supervisor at my host company. There is no need to contact you, the sponsor.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w48" value="sradio-w48" name="contact_in_case_of_problems" />
                          <label class="gaccca-radio__label" for="sradio-w48">
                            <span class="gaccca-radio_faux"></span>
                            <span>First, I should contact you, my sponsor organization. The emergency hotline is 1-888-936-2489. If my sponsor organization is unable to help and solve my problem, I can call the U.S. Department of State's emergency hotline number which is 1-866-283-9090, or send them an email to jvisas@state.gov.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w49" value="sradio-w49" name="contact_in_case_of_problems" />
                          <label class="gaccca-radio__label" for="sradio-w49">
                            <span class="gaccca-radio_faux"></span>
                            <span>I should contact the U.S. Department of State's emergency hotline only. There is no need to contact you, the sponsor organization.</span>
                          </label>
                        </span>
            
                      
            
                      </div>
            
                  </div>
                   
            </div>
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
            
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-form-element__label" for="text-input-id-fn">
                            Which of the following are very important resources for you to help ensure your wellbeing and safety?<span class="gaccca-text-required" title="required">*</span></label>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w50" value="sradio-w50" name="important_resources_for_you_help" checked="" />
                          <label class="gaccca-radio__label" for="sradio-w50">
                            <span class="gaccca-radio_faux"></span>
                            <span>Pre-Departure Orientation Handbook by Sponsor Sponsor Emergency Hotline.</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w51" value="sradio-w51" name="important_resources_for_you_help" />
                          <label class="gaccca-radio__label" for="sradio-w51">
                            <span class="gaccca-radio_faux"></span>
                            <span>U.S. Department of State Emergency Hotline   the Wilberforce Pamphlet (Rights and Protections for Temporary Workers).</span>
                          </label>
                        </span>
                        <span class="gaccca-radio">
                          <input type="radio" id="sradio-w52" value="sradio-w52" name="important_resources_for_you_help" />
                          <label class="gaccca-radio__label" for="sradio-w52">
                            <span class="gaccca-radio_faux"></span>
                            <span>All of the above.</span>
                          </label>
                        </span>
            
                      
            
                      </div>
            
                  </div>
                   
            </div>
                        





            <button id="gaccca_saveBtn_exchange" class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>








        </div>
    
    
    
     
    
    
    
    
    </div>

{!! Form::close() !!}
@include('common.footer')