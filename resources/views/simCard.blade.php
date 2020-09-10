@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

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
              <input type="radio" id="radio-free-sim"  value="radio-free-sim" name="choose_an_option"  />
              <label class="gaccca-radio__label" for="radio-free-sim">
                <span class="gaccca-radio_faux"></span>
                <span>I'd like to get a free SIM Card</span>
              </label>
            </span>
            <span class="gaccca-radio">
              <input type="radio" id="radio-activate-my-sim" value="radio-activate-my-sim" name="choose_an_option" />
              <label class="gaccca-radio__label" for="radio-activate-my-sim">
                <span class="gaccca-radio_faux"></span>
                <span>I'd like to activate my SIM Card for the first 30 days with a auto-renew for the next 30 days until I cancel before the next months starts</span>
              </label>
            </span>

            <span class="gaccca-radio">
                <input type="radio" id="radio-change-my-monthly-plan" value="radio-change-my-monthly-plan" name="choose_an_option" />
                <label class="gaccca-radio__label" for="radio-change-my-monthly-plan">
                  <span class="gaccca-radio_faux"></span>
                  <span>I'd like to change my monthly plan to different monthly plan</span>
                </label>
              </span>
              <span class="gaccca-radio">
                <input type="radio" id="radio-change-my-credit-card" value="radio-change-my-credit-card" name="choose_an_option" />
                <label class="gaccca-radio__label" for="radio-change-my-credit-card">
                  <span class="gaccca-radio_faux"></span>
                  <span>I'd like to change my credit card for the monthly payment</span>
                </label>
              </span>

              <span class="gaccca-radio">
                <input type="radio" id="radio-cancel-my-plan" value="radio-cancel-my-plan" name="choose_an_option"  />
                <label class="gaccca-radio__label" for="radio-cancel-my-plan">
                  <span class="gaccca-radio_faux"></span>
                  <span>I'd like to cancel my plan</span>
                </label>
              </span>
            
         
        
        </div>

      </div>





      <div class="gaccca-form-element gaccca-form-element-margin" id="date-of-arrival-div">
        <label class="gaccca-form-element__label" for="text-input-id-5">
        Date of arrival in the U.S.   <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="date-of-arrival" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
          
        </div>
      </div>

      <div class="gaccca-form-element gaccca-form-element-margin" id="cancel-my-plan-date">
        <label class="gaccca-form-element__label" for="text-input-id-5">
        Cancel my plan on   <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="date-of-arrival" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
          
        </div>
      </div>
     
      <div class="gaccca-form-element gaccca-form-element-margin" id="choose-an-carrier">
      
      <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
          Choose an Carrier:  <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="t-mobile" value="t-mobile" name="carrier" checked="" />
            <label class="gaccca-radio__label" for="t-mobile">
              <span class="gaccca-radio_faux"></span>
              <span>T-Mobile</span>
            </label>
          </span>
          <span class="gaccca-radio">
            <input type="radio" id="atandt" value="atandt" name="carrier" />
            <label class="gaccca-radio__label" for="atandt">
              <span class="gaccca-radio_faux"></span>
              <span>AT&T</span>
            </label>
          </span>
          
      
      </div>

    </div>




      <div class="gaccca-form-element gaccca-form-element-margin" id="date-of-activation">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Date of activation / arrival in the U.S.  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
          
          <span class="gaccca-input-help-text">Fill in your arrival date in the U.S. You have to submit your activation at least 7 days before your arrival to the U.S.</span>
        </div>
      </div>


      

      <div class="gaccca-form-element gaccca-form-element-margin" id="date-of-plan-change">
        <label class="gaccca-form-element__label" for="text-input-id-5">
        Date of plan change 
  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
          
          <span class="gaccca-input-help-text">Submit a date when your current plan should change to another plan. Plans have a 30 days lengths.</span>
        </div>
      </div>



   
      

      <div class="gaccca-form-element gaccca-form-element-margin" id="following-plan">
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

      

      <div class="gaccca-form-element gaccca-form-element-margin" id="simcard-no">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            SIM Card Number  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
          
          <span class="gaccca-input-help-text">On the back side of your SIM Card, you will find this 14-20 digit number under the big barcode below.</span>
        </div>
      </div>

      
      <div class="gaccca-form-element gaccca-form-element-margin" id="area-code-for-phone">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Would you like a designated area code for your phone number? Type in a city or area code!  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
         </div>
      </div>


      

      <div class="gaccca-form-element gaccca-form-element-margin" id="cardholder-name">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Cardholder name on credit card   <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
         </div>
      </div>


     

      <div class="gaccca-form-element gaccca-form-element-margin" id="credit-card-no">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Credit card number <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5" placeholder="xxxx xxxx xxxx xxxx" required="" class="gaccca-input" />
          
          <span class="gaccca-input-help-text">On the front side, you will find a 13-16 digit number. Type in the number without spaces. Important: We only accept
          
           VISA, MasterCard, AMEX and Discover! 
        </span>
        </div>
      </div>



      

      <div class="gaccca-form-element gaccca-form-element-margin" id="card-valid-thru">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            Credit card valid thru   <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5" placeholder="mm/yy" required="" class="gaccca-input" />
          
          <span class="gaccca-input-help-text"> Example: 05/21</span>
        </div>
      </div>



      

      <div class="gaccca-form-element gaccca-form-element-margin" id="cvc">
        <label class="gaccca-form-element__label" for="text-input-id-5">
            CVC  <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element-date">
          <input type="text" id="text-input-id-5"  required="" class="gaccca-input" />
          <span class="gaccca-input-help-text">You will find the Card Verification Code on the back side of your card. 3 or 4 digits</span>
        </div>
      </div>


      
      <div class="gaccca-form-element gaccca-form-element-margin" id="authorize-the-monthly">
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

    

    {!! Form::close() !!}
@include('common.footer')

<script>
    $( document ).ready(function() {
      $('#date-of-arrival-div').hide();
		$('#choose-an-carrier').hide();
    $('#date-of-activation').hide();
    $('#date-of-plan-change').hide();
    $('#area-code-for-phone').hide();
    $('#following-plan').hide();
		$('#simcard-no').hide();
		$('#cardholder-name').hide();
		$('#credit-card-no').hide();
		$('#card-valid-thru').hide();
		$('#cvc').hide();
    $('#authorize-the-monthly').hide();
    $('#cancel-my-plan-date').hide();
    
});
   $("input[name='choose_an_option']").change(function(){
    var option = $("input[name='choose_an_option']:checked").val();
    

    switch (option) { 
	case 'radio-free-sim': 
      
    $('#date-of-arrival-div').show();
		$('#choose-an-carrier').show();
    $('#date-of-activation').hide();
    $('#date-of-plan-change').hide();
    $('#area-code-for-phone').hide();
    $('#following-plan').hide();
		$('#simcard-no').hide();
		$('#cardholder-name').hide();
		$('#credit-card-no').hide();
		$('#card-valid-thru').hide();
		$('#cvc').hide();
		$('#authorize-the-monthly').hide();
    $('#cancel-my-plan-date').hide();
    
  
		break;
	case 'radio-activate-my-sim': 
		$('#date-of-arrival-div').hide();
		$('#choose-an-carrier').hide();
    $('#date-of-activation').show();
    $('#date-of-plan-change').hide();
    $('#area-code-for-phone').show();
    $('#following-plan').show();
		$('#simcard-no').show();
		$('#cardholder-name').show();
		$('#credit-card-no').show();
		$('#card-valid-thru').show();
		$('#cvc').show();
    $('#authorize-the-monthly').show();
    $('#cancel-my-plan-date').hide();
    


		break;
	case 'radio-change-my-monthly-plan': 
  
    
    $('#date-of-arrival-div').hide();
		$('#choose-an-carrier').hide();
    $('#date-of-activation').hide();
    $('#date-of-plan-change').show();
    $('#area-code-for-phone').hide();
    $('#following-plan').show();
		$('#simcard-no').show();
		$('#cardholder-name').hide();
		$('#credit-card-no').hide();
		$('#card-valid-thru').hide();
		$('#cvc').hide();
		$('#authorize-the-monthly').hide();
    $('#cancel-my-plan-date').hide();



		break;		
  case 'radio-change-my-credit-card': 
    

    $('#date-of-arrival-div').hide();
		$('#choose-an-carrier').hide();
    $('#date-of-activation').hide();
    $('#date-of-plan-change').hide();
    $('#area-code-for-phone').hide();
    $('#following-plan').hide();
		$('#simcard-no').show();
		$('#cardholder-name').show();
		$('#credit-card-no').show();
		$('#card-valid-thru').show();
		$('#cvc').show();
    $('#authorize-the-monthly').show();
    $('#cancel-my-plan-date').hide();
    

    break;
  case 'radio-cancel-my-plan': 

    $('#date-of-arrival-div').hide();
		$('#choose-an-carrier').hide();
    $('#date-of-activation').hide();
    $('#date-of-plan-change').hide();
    $('#area-code-for-phone').hide();
    $('#following-plan').hide();
		$('#simcard-no').show();
		$('#cardholder-name').hide();
		$('#credit-card-no').hide();
		$('#card-valid-thru').hide();
		$('#cvc').hide();
    $('#authorize-the-monthly').hide();
    $('#cancel-my-plan-date').show();
    

    break;
    
}

});

</script>