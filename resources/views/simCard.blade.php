@include('common.header',['datas'=>$datas,'title' =>'Sim Card','page'=>'simCard','parent_page'=>'Sim Card'])


{!! Form::open(['action' => 'simCardController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt gaccca-gutters">
  <h1 class="gaccca-h1-padding">Activate your SIM Card for the U.S.</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Included in your DS-2019 shipping, you will also find a SIM Card for your stay in the U.S. </p>
    <p> With this SIM Card, you will have a U.S. phone number and 4G LTE Internet upon arrival at the airport. </p>
    <p>
      Please choose a plan you would like to activate before you enter the U.S. </p>
    <p>
      Every plan has a duration of 30 days after activation. You can cancel your subscription 10 days before the end of the 30 days or change to a different plan.
    </p>
    <p>
      If you don’t cancel your subscription it will automatically be renewed for another 30 day period. Until you cancel your plan we will charge your credit card every 30 days with the cost of your plan.
    </p>
  </div>


  <div class="gaccca-form-element gaccca-form-element-margin">
    <p>You can find a full description of the <a target="_blank" href="https://www.j1-visa.com/j1-sim-card-usa-lte.html?_ga=2.149762805.2110746990.1601277761-1013190888.1582610433"> SIM Card plans </a> here.</p>
  </div>
  <div class="gaccca-form-element gaccca-form-element-margin">

    <div class="gaccca-form-element__control">
      <label class="gaccca-form-element__label" for="text-input-id-fn">
        Choose an option: <span class="gaccca-text-required" title="required">*</span> </label>
      <span class="gaccca-radio">
        <input type="radio" id="radio-free-sim" value="Id like to get a free SIM Card" name="radiobtn" required />
        <label class="gaccca-radio__label" for="radio-free-sim">
          <span class="gaccca-radio_faux"></span>
          <span>I'd like to get a free SIM Card</span>
        </label>
      
        <input type="radio" id="radio-activate-my-sim" value="Id like to activate my SIM Card for the first 30 days" name="radiobtn" required />
        <label class="gaccca-radio__label" for="radio-activate-my-sim">
          <span class="gaccca-radio_faux"></span>
          <span>I'd like to activate my SIM Card for the first 30 days with a auto-renew for the next 30 days until I cancel before the next months starts</span>
        </label>
     
        <input type="radio" id="radio-change-my-monthly-plan" value="Id like to change my monthly plan to different monthly plan" name="radiobtn" required />
        <label class="gaccca-radio__label" for="radio-change-my-monthly-plan">
          <span class="gaccca-radio_faux"></span>
          <span>I'd like to change my monthly plan to different monthly plan</span>
        </label>
     
        <input type="radio" id="radio-change-my-credit-card" value="Id like to change my credit card for the monthly payment" name="radiobtn" required />
        <label class="gaccca-radio__label" for="radio-change-my-credit-card">
          <span class="gaccca-radio_faux"></span>
          <span>I'd like to change my credit card for the monthly payment</span>
        </label>
     
        <input type="radio" id="radio-cancel-my-plan" value="I would like to cancel my plan" name="radiobtn" required />
        <label class="gaccca-radio__label" for="radio-cancel-my-plan">
          <span class="gaccca-radio_faux"></span>
          <span>I'd like to cancel my plan</span>
        </label>
      </span>



    </div>

  </div>





  <div class="gaccca-form-element gaccca-form-element-margin" id="date-of-arrival-div">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Date of arrival in the U.S. <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input name="arivalDateUS" type="text" id="date-of-arrival" placeholder="DD/MM/YYYY"   class="gaccca-input-date gacca-required" />

    </div>
  </div>

  <div class="gaccca-form-element gaccca-form-element-margin" id="cancel-my-plan-date">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Cancel my plan on <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="cancellationDate"  class="gaccca-input-date gacca-required" />

    </div>
  </div>

  <div class="gaccca-form-element gaccca-form-element-margin" id="choose-an-carrier">

    <div class="gaccca-form-element__control">
      <label class="gaccca-form-element__label" for="text-input-id-fn">
        Choose an Carrier: <span class="gaccca-text-required" title="required">*</span> </label>
      <span class="gaccca-radio">
        <input type="radio" id="t-mobile" value="T-Mobile" name="provider" class='gacca-required' />
        <label class="gaccca-radio__label" for="t-mobile">
          <span class="gaccca-radio_faux"></span>
          <span>T-Mobile</span>
        </label>
      
        <input type="radio" id="atandt" value="AT&T" name="provider" class='gacca-required' />
        <label class="gaccca-radio__label" for="atandt">
          <span class="gaccca-radio_faux"></span>
          <span>AT&T</span>
        </label>
      </span>


    </div>

  </div>




  <div class="gaccca-form-element gaccca-form-element-margin" id="date-of-activation">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Date of activation / arrival in the U.S. <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="activationDate" placeholder="DD/MM/YYYY"  class="gaccca-input-date gacca-required" />

      <span class="gaccca-input-help-text">Fill in your arrival date in the U.S. You have to submit your activation at least 7 days before your arrival to the U.S.</span>
    </div>
  </div>




  <div class="gaccca-form-element gaccca-form-element-margin" id="date-of-plan-change">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Date of plan change
      <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="Dateofchange" placeholder="DD/MM/YYYY"   class="gaccca-input-date gacca-required" />

      <span class="gaccca-input-help-text">Submit a date when your current plan should change to another plan. Plans have a 30 days lengths.</span>
    </div>
  </div>






  <div class="gaccca-form-element gaccca-form-element-margin" id="following-plan">
    <label class="gaccca-form-element__label" for="select-tod"> I select the following plan
      <span class="gaccca-text-required" title="required">*</span>
    </label>
    <div class="gaccca-form-element__control">
      <div class="gaccca-select_container">
        <input type="hidden" value="{{isset($datas['app']['Id'])?$datas['app']['Id']:''}}" name='app[Id]'/>
        <input type="hidden" value="{{isset($datas['contID'])?$datas['contID' ]:''}}" name='app[Contact__c]'/>
        {!! Form::select('app[PLAN__c]', array_reverse($datas['simcardPlans']), isset($datas['app']['PLAN__c'])?$datas['app']['PLAN__c']:'', [  'class' => 'gaccca-select gacca-required','required' => 'required']) !!}
         
      </div>
    </div>
  </div>



  <div class="gaccca-form-element gaccca-form-element-margin" id="simcard-no">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      SIM Card Number <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="simCardNumber" value="{{isset($datas['simCardNumber'])?$datas['simCardNumber']:''}}"   class="gaccca-input gacca-required" />

      <span class="gaccca-input-help-text">On the back side of your SIM Card, you will find this 14-20 digit number under the big barcode below.</span>
    </div>
  </div>


  <div class="gaccca-form-element gaccca-form-element-margin" id="area-code-for-phone">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Would you like a designated area code for your phone number? Type in a city or area code! <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="cityOrAreaCode" class="gaccca-input gacca-required" />
    </div>
  </div>




  <div class="gaccca-form-element gaccca-form-element-margin" id="cardholder-name">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Cardholder name on credit card <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="nameOnCreditCard"   class="gaccca-input gacca-required" />
    </div>
  </div>




  <div class="gaccca-form-element gaccca-form-element-margin" id="credit-card-no">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Credit card number <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="creditCardNumber" placeholder="xxxx xxxx xxxx xxxx"   class="gaccca-input gacca-required" />

      <span class="gaccca-input-help-text">On the front side, you will find a 13-16 digit number. Type in the number without spaces. Important: We only accept

        VISA, MasterCard, AMEX and Discover!
      </span>
    </div>
  </div>





  <div class="gaccca-form-element gaccca-form-element-margin" id="card-valid-thru">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      Credit card valid thru <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="creditCardValidThru" placeholder="mm/yy"  class="gaccca-input gacca-required" />

      <span class="gaccca-input-help-text"> Example: 05/21</span>
    </div>
  </div>





  <div class="gaccca-form-element gaccca-form-element-margin" id="cvc">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      CVC <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element-date">
      <input type="text" name="cvc" class="gaccca-input gacca-required" />
      <span class="gaccca-input-help-text">You will find the Card Verification Code on the back side of your card. 3 or 4 digits</span>
    </div>
  </div>



  <div class="gaccca-form-element gaccca-form-element-margin" id="authorize-the-monthly">
    <label class="gaccca-form-element__label" for="text-input-id-5">
      I, authorize the monthly payment from this credit card every 30 days until I cancel my plan.
      <span class="gaccca-text-required" title="required">*</span> </label>
    <div class="gaccca-form-element__control">
      <div class="gaccca-checkbox">

        <input type="checkbox" name="chckfinal" id="authorize-monthly" class='gacca-required' value="true" />
        <label class="gaccca-checkbox__label" for="authorize-monthly">
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
  $(document).ready(function() {
    fieldHide();
  });

  function fieldHide() {
    $('.gacca-required').prop('required', false);
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
    
  }


  $("input[name='radiobtn']").change(function() {
    var option = $("input[name='radiobtn']:checked").val();


    switch (option) {
      case 'Id like to get a free SIM Card':
        fieldHide();
        $('#date-of-arrival-div').show();
        $('#date-of-arrival-div input').prop('required', true);
        $('#choose-an-carrier').show();
        $('#choose-an-carrier input').prop('required', true);
       
         break;
      case 'Id like to activate my SIM Card for the first 30 days':
        fieldHide();

        $('#date-of-activation').show();
        $('#date-of-activation input').prop('required', true);
        $('#area-code-for-phone').show();
        $('#area-code-for-phone input').prop('required', true);
        $('#following-plan').show();
        $('#following-plan input').prop('required', true);
        $('#simcard-no').show();
        $('#simcard-no input').prop('required', true);
        $('#cardholder-name').show();
        $('#cardholder-name input').prop('required', true);
        $('#credit-card-no').show();
        $('#credit-card-no input').prop('required', true);
        $('#card-valid-thru').show();
        $('#card-valid-thru input').prop('required', true);
        $('#cvc').show();
        $('#cvc input').prop('required', true);
        $('#authorize-the-monthly').show();
        $('#authorize-the-monthly input').prop('required', true);



        break;
      case 'Id like to change my monthly plan to different monthly plan':

        fieldHide()

        $('#date-of-plan-change').show();
        $('#date-of-plan-change input').prop('required', true);
        $('#following-plan').show();
        $('#following-plan input').prop('required', true);
        $('#simcard-no').show();
        $('#simcard-no input').prop('required', true);


        break;
      case 'Id like to change my credit card for the monthly payment':


        fieldHide()
        $('#simcard-no').show();
        $('#simcard-no input').prop('required', true);
        $('#cardholder-name').show();
        $('#cardholder-name input').prop('required', true);
        $('#credit-card-no').show();
        $('#credit-card-no input').prop('required', true);
        $('#card-valid-thru').show();
        $('#card-valid-thru input').prop('required', true);
        $('#cvc').show();
        $('#cvc input').prop('required', true);
        $('#authorize-the-monthly').show();
        $('#authorize-the-monthly input').prop('required', true);


        break;
      case 'I would like to cancel my plan':
        fieldHide();
        $('#simcard-no').show();
        $('#simcard-no input').prop('required', true);
        $('#cancel-my-plan-date ').show();
        $('#cancel-my-plan-date input').prop('required', true);
        break;

    }

  });
</script>