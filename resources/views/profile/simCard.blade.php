@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'id' => 'gacccaForm_']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Activate your SIM Card for the U.S.</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
       <p>Included in your DS-2019 shipping, you will also find a SIM Card for your stay in the U.S. </p>
        <p> With this SIM Card, you will have a U.S. phone number and 4G LTE Internet upon arrival at the airport. </p>
        <p>
        Please choose a plan you would like to activate before you enter the U.S. </p>
        <p>
        Every plan has a duration of 30 days after activation. You can cancel your subscription 10 days before the end of the 30 days or change to a different plan.
        </p> <p>
        If you don’t cancel your subscription it will automatically be renewed for another 30 day period. Until you cancel your plan we will charge your credit card every 30 days with the cost of your plan. 
    </p>
      </div>
      

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>You can find a full description of the <a href="#"> SIM Card plans </a> here.</p> 
      </div>
      
      
      <div class="gaccca-form-element gaccca-form-element-margin">
      
        <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
                Choose an option:  <span class="gaccca-text-required" title="required">*</span> </label>
            <span class="gaccca-radio">
              <input type="radio" id="radio-free-sim" value="radio-free-sim" name="default" checked="" />
              <label class="gaccca-radio__label" for="radio-free-sim">
                <span class="gaccca-radio_faux"></span>
                <span>I'd like to get a free SIM Card</span>
              </label>
            </span>
            <span class="gaccca-radio">
              <input type="radio" id="radio-activate-my-sim" value="radio-activate-my-sim" name="default" />
              <label class="gaccca-radio__label" for="radio-activate-my-sim">
                <span class="gaccca-radio_faux"></span>
                <span>I'd like to activate my SIM Card for the first 30 days with a auto-renew for the next 30 days until I cancel before the next months starts</span>
              </label>
            </span>

            <span class="gaccca-radio">
                <input type="radio" id="radio-change-my-monthly-plan" value="radio-change-my-monthly-plan" name="default" checked="" />
                <label class="gaccca-radio__label" for="radio-change-my-monthly-plan">
                  <span class="gaccca-radio_faux"></span>
                  <span>I'd like to change my monthly plan to different monthly plan</span>
                </label>
              </span>
              <span class="gaccca-radio">
                <input type="radio" id="radio-change-my-credit-card" value="radio-change-my-credit-card" name="default" />
                <label class="gaccca-radio__label" for="radio-change-my-credit-card">
                  <span class="gaccca-radio_faux"></span>
                  <span>I'd like to change my credit card for the monthly payment</span>
                </label>
              </span>

              <span class="gaccca-radio">
                <input type="radio" id="radio-cancel-my-plan" value="radio-cancel-my-plan" name="default" checked="" />
                <label class="gaccca-radio__label" for="radio-cancel-my-plan">
                  <span class="gaccca-radio_faux"></span>
                  <span>I'd like to cancel my plan</span>
                </label>
              </span>
            
         
        
        </div>

      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Date of activation / arrival in the U.S.  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
          
          <span class="gaccca-input-help-text">Fill in your arrival date in the U.S. You have to submit your activation at least 7 days before your arrival to the U.S.</span>
        </div>
      </div>


     




      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-tod"> I select the following plan   
          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">
            <select class="gaccca-select" id="select-tod">                      
              <option>none</option>
             
            </select>
          </div>
        </div>
      </div>




      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            SIM Card Number  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
          
          <span class="gaccca-input-help-text">On the back side of your SIM Card, you will find this 14-20 digit number under the big barcode below.</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Would you like a designated area code for your phone number? Type in a city or area code!  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
         </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Cardholder name on credit card   <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
         </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Credit card number <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5" placeholder="xxxx xxxx xxxx xxxx" required="" class="gaccca-input" />
          
          <span class="gaccca-input-help-text">On the front side, you will find a 13-16 digit number. Type in the number without spaces. Important: We only accept
          
           VISA, MasterCard, AMEX and Discover! 
        </span>
        </div>
      </div>


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Credit card valid thru   <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5" placeholder="mm/yy" required="" class="gaccca-input" />
          
          <span class="gaccca-input-help-text"> Example: 05/21</span>
        </div>
      </div>



      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            CVC  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
          <span class="gaccca-input-help-text">You will find the Card Verification Code on the back side of your card. 3 or 4 digits</span>
        </div>
      </div>




      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-5">
              I, authorize the monthly payment from this credit card every 30 days until I cancel my plan.
             <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-checkbox">

            <input type="checkbox" name="options" id="checkbox-unique-id-73" value="checkbox-unique-id-73" checked="" />
            <label class="gaccca-checkbox__label" for="checkbox-unique-id-73">
              <span class="gaccca-checkbox_faux"></span>
              <span class="gaccca-form-element__label">Yes</span>
            </label>
          </div>
        </div>
      </div>
      
      <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>

     
    </div>

<script>


</script>


    {!! Form::close() !!}
@include('common.footer')