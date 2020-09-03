@include('common.header')

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Step 3/5 - Host Company Information</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please fill in all requested information about your host company, your intended internship/training and provide a contact person at your host company responsible for your intended internship/training.
        </p>
      </div>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



         

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-foi">
                Field of Internship  <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-foi" placeholder="Field of Internship " required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">e.g. Marketing, Business Development, Mechanical<br/>
                           Engineering, Architecture, Graphic Design
                </span>
              </div>
            </div>

            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-colpr">
                Scheduled Start Date of Internship/Training  </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-colpr" placeholder="" class="gaccca-input-date" />
                
              </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-us-visa">
                Scheduled End Date of Internship/Training  </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-us-visa" placeholder=""  class="gaccca-input-date" />
                <span class="gaccca-input-help-text">Please provide type of visa and expiration date as well as information about any previous visa denials</span>
              </div>
            </div>
            <br/>




            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hcn">
                  Host Company Name <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-hcn" placeholder="Host Company Name" required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hcn">
                    Host Company Website <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-hcn" placeholder="Host Company Website" required="" class="gaccca-input" />
                  
                </div>
  
              </div>


             

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-e-address">
                    Host Company Address <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <textarea  placeholder="Host Company Address" required="" class="gaccca-textarea"></textarea>
                  
                </div>
              </div>

              

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-city">
                  City  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-city" placeholder="City" required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-zipcode">
                  Zip Code  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-zipcode" placeholder="City" required="" class="gaccca-input" />
                  
                </div>
  
              </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">State
                  <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                    <select class="gaccca-select" id="select-01">                      
                      <option>select</option>
                     
                    </select>
                  </div>
                </div>
              </div>

              <br/>


          
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hccp">
                    Host Company Contact Person <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" id="text-input-id-hccp" placeholder="Host Company Contact Person" required="" class="gaccca-input" />
                    <span class="gaccca-input-help-text">Enter the name of the person who will be your supervisor/mentor during your internship/training.</span>
                </div>
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ccea">
                    Company Contact email address   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-ccea" placeholder="Company Contact email address " required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ccp">
                    Company Contact phone   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-ccp" placeholder="Company Contact phone" required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Use the following format +1-563-6325685</span>
                </div>
  
              </div>

              <br/>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    Hours per week   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-hpw" placeholder="Hours per week" required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
  
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Do you receive a stipend? <span class="gaccca-text-required" title="required">*</span> </label>
               
              
                    <span class="gaccca-radio">
                      <input type="radio" id="radio-no" value="radio-no" name="stipend" checked="" />
                      <label class="gaccca-radio__label" for="radio-no">
                        <span class="gaccca-radio_faux"></span>
                        <span class="gaccca-padding-right-25">No</span>
                      </label>
                      <input type="radio" id="radio-yes" value="radio-yes" name="stipend" />
                      <label class="gaccca-radio__label" for="radio-yes">
                        <span class="gaccca-radio_faux"></span>
                        <span class="gaccca-padding-right-25">Yes</span>
                      </label>
                    </span>





                  
                  </div>
    
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    If yes, how much?   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-hpw" placeholder="Hours per week" required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Please enter the amount paid to you per hour, week or  month, e.g 16 USD/hour, 1300 USD/month, 500 USD/week</span>
                </div>
  
              </div>
              <br/>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-vohiupm">
                   <strong>
                    Additional compensation offered by your host company :</strong>
                    <br/> - Value of Housing in USD per month   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-vohiupm" placeholder="- Value of Housing in USD per month" required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>
  
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-votiupm">
                    - Value of Transportation in USD per month    <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-votiupm" placeholder="- Value of Transportation in USD per month" required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>
  
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-tfeiu">
                    - Total Flight Expenses in USD  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-tfeiu" placeholder="Total Flight Expenses in USD" required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>
  
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    - Other compensation   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-hpw" placeholder="- Other compensation" required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a. Please also name the  expense, e.g visa fee.</span>
                </div>
  
              </div>





            <button class="gaccca-button-save gaccca-button-save-margin">Submit & Continue</button>




          </div>

   
      </div>
  
    </div>



{!! Form::close() !!}
@include('common.footer')