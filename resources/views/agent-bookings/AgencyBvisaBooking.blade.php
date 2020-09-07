@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

 
<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">B Visa</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p> B Visa Form </p>
      </div>
     
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
          <div class="gaccca-form-element gaccca-form-element-margin">

            <div class="gaccca-form-element__control">
                <label class="gaccca-form-element__label" for="text-input-id-fn">
                    Register for <span class="gaccca-text-required" title="required">*</span> </label>
                <span class="gaccca-radio">
                  <input type="radio" id="radio-43" value="radio-43" name="default" checked="" />
                  <label class="gaccca-radio__label" for="radio-43">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">New Customer</span>
                  </label>

                  <input type="radio" id="radio-44" value="radio-44" name="default" />
                  <label class="gaccca-radio__label" for="radio-44">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">Existing Customer</span>
                  </label>
                </span>
              
              </div>

          </div>
           
      


        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
              <div class="gaccca-form-element__control">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                      I would like to order <span class="gaccca-text-required" title="required">*</span> </label>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w01" value="radio-w01" name="default" checked="" />
                    <label class="gaccca-radio__label" for="radio-w01">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa service (Business Visitor / Industrial Workers, Technicians / Special Students) up to 90 days EUR/Person</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w02" value="radio-w02" name="default" />
                    <label class="gaccca-radio__label" for="radio-w02">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa service (Business Visitor / Industrial Workers, Technicians / Special Students) for 91-180 days EUR/Person</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w03" value="radio-w03" name="default" />
                    <label class="gaccca-radio__label" for="radio-w03">
                      <span class="gaccca-radio_faux"></span>
                      <span>Assistance with a denied B-1/B-2 Visa or Deportation EUR/Person</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w04" value="radio-w04" name="default" />
                    <label class="gaccca-radio__label" for="radio-w04">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa Service for Non-Profit Organisations up to 90 days EUR/Person</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w05" value="radio-w05" name="default" />
                    <label class="gaccca-radio__label" for="radio-w05">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa Service for Non-Profit Organisations more than 91 days EUR/Person</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w06" value="radio-w06" name="default" />
                    <label class="gaccca-radio__label" for="radio-w06">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa for Short-Term Business Study Tour Program (no more than 90 days) EUR/Person</span>
                    </label>
                  </span>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w07" value="radio-w07" name="default" />
                    <label class="gaccca-radio__label" for="radio-w07">
                      <span class="gaccca-radio_faux"></span>
                      <span>Individual consultation - case analysis on an hourly basis, 1 hour at EUR</span>
                    </label>
                  </span>
                </div>
  
            </div>
             
        
  
  
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        
            <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                  <div class="gaccca-checkbox">
                    <input type="checkbox" name="options" id="checkbox-unique-id-73" value="checkbox-unique-id-73" checked="" />
                    <label class="gaccca-checkbox__label" for="checkbox-unique-id-73">
                      <span class="gaccca-checkbox_faux"></span>
                      <span class="gaccca-form-element__label">Priority / Expedited Processing within 3 business days, additional fee of EUR/Person</span>
                    </label>
                  </div>
                </div>
              </div>
             
          </div>
  
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
              <div class="gaccca-form-element__control">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                    I book as <span class="gaccca-text-required" title="required">*</span> </label>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-43" value="radio-43" name="book_as" checked="" required="" />
                    <label class="gaccca-radio__label" for="radio-43">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">Private Customer</span>
                    </label>
  
                    <input type="radio" id="radio-44" value="radio-44" name="book_as" />
                    <label class="gaccca-radio__label" for="radio-44">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">Business Customer</span>
                    </label>
                  </span>
                
                </div>
  
            </div>
             
        
  
  
          </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-fn">
                First name of visa applicant <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-fn" placeholder="First name of visa applicant" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
                Last name of visa applicant <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-2" placeholder="Last name of visa applicant" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-3">
                Email address of visa applicant <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-3" placeholder="Email address of visa applicant" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-4" placeholder="Phone Number" required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">Please always provide your country code</span>
              </div>
            </div>
          </div>
    
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-5">
                Date of Departure to the USA <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element-date">
              <input type="text" id="text-input-id-5" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
            </div>
          </div>
  
  
        </div>
  
  
   
        <h2 class="gaccca-h2-padding">Invoice Address</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                  <div class="gaccca-form-element__control">
                      <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Salutation: <span class="gaccca-text-required" title="required">*</span> </label>
                      <span class="gaccca-radio">
                        <input type="radio" id="radio-ms" value="radio-ms" name="salutation" checked="" />
                        <label class="gaccca-radio__label" for="radio-ms">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">Ms.</span>
                        </label>
                        <input type="radio" id="radio-mr" value="radio-mr" name="salutation" />
                        <label class="gaccca-radio__label" for="radio-mr">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">Mr.</span>
                        </label>
                      </span>
                     
                    </div>
      
                </div>
                 
            
      
      
              </div>


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                    First Name <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <input type="text" id="text-input-id-fn" placeholder="First Name" required="" class="gaccca-input" />
                    
                  </div>
                </div>
              </div>
    
      
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-2">
                    Last Name<span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-2" placeholder="Last Name" required="" class="gaccca-input" />
                  
                </div>
              </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Street <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea  placeholder="Enter Your Address" required="" class="gaccca-textarea"></textarea>
                    
                  </div>
                </div>
              </div>


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-9">
                    City <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <input type="text" id="text-input-id-9" placeholder="City" required="" class="gaccca-input" />
                  </div>
                </div>
              </div>

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-10">
                    Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <input type="text" id="text-input-id-10" placeholder="Zip Code" required="" class="gaccca-input" />
                  </div>
                </div>
              </div>
              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-11">
                    Country <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <input type="text" id="text-input-id-11" placeholder="Country" required="" class="gaccca-input" />
                    
                  </div>
                </div>
              </div>

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-7">
                Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-7" placeholder="+1" required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">Please always provide your country code.</span>
              </div>
            </div>
          </div>
         
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Notes and remarks for this order <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                  <textarea  placeholder="Enter Your Address" required="" class="gaccca-textarea"></textarea>
              </div>
            </div>
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Terms and conditions: <span class="gaccca-text-required" title="required">*</span> </label>
                <p>As soon as we have received your booking, we will send you an email with login details for your online account. Please enter your visa details in this online account and upload copies of your documents. We will start immediately with the execution of your order. The place of performance is San Diego, USA. Your contractual partner is the German American Chamber of Commerce California, 600 B Street Suite 300, San Diego, USA. The invoice is due within 7 days of receipt. You can transfer the invoice amount to our German bank account free of charge. Our invoices do not include VAT, as the service is provided in the USA. Group discounts are available for group applications of 5 persons or more with the same travel reasons. Please contact us for further information at info @ gaccca.org.</p>
            
            </div>
          </div>
         
         

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        
            <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                  <div class="gaccca-checkbox">
                    <input type="checkbox" name="conditions" id="checkbox-unique-id-73" value="checkbox-unique-id-73" checked="" />
                    <label class="gaccca-checkbox__label" for="checkbox-unique-id-73">
                      <span class="gaccca-checkbox_faux"></span>
                      <span class="gaccca-form-element__label"> Yes, I confirm the order conditions:</span>
                    </label>
                  </div>
                </div>
              </div>
             
          </div>
         
         
    
          <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>
    
        </div>    

      
        
        
      </div>
      
     
    </div>


{!! Form::close() !!}
@include('common.footer')