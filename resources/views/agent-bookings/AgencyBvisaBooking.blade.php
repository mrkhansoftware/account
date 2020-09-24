@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'AgencyBvisaBookingController@store', 'method' => 'POST',  'id' => 'gacccaForm_bvisa']) !!}

 
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
                  <input type="radio" id="radio-NewCustomer" value="NewCustomer" name="registerationFor" required />
                  <label class="gaccca-radio__label" for="radio-NewCustomer">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">New Customer</span>
                  </label>

                  <input type="radio" id="radio-ExistingCustomer" value="ExistingCustomer" name="registerationFor" required/>
                  <label class="gaccca-radio__label" for="radio-ExistingCustomer">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">Existing Customer</span>
                  </label>
                </span>
              
              </div>

          </div>
           
      


        </div>



        <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1" >
            <div class="gaccca-form-element gaccca-form-element-margin" id="existing-customer-div">
                <label class="gaccca-form-element__label" for="select-01">Existing Customer List</label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                  {!! Form::select('existingCustomerId', array_reverse($datas['existingCustomer']), '', [ 'class' => 'gaccca-select', 'id'=>'existing-customer-list']) !!}

                  </div>
                </div>
              </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
            <div class="gaccca-form-element gaccca-form-element-margin">
  
              <div class="gaccca-form-element__control">
                  <label class="gaccca-form-element__label" for="text-input-id-fn">
                      I would like to order <span class="gaccca-text-required" title="required">*</span> </label>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-w01" value="1" name="visaType"  required/>
                    <label class="gaccca-radio__label" for="radio-w01">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa service (Business Visitor / Industrial Workers, Technicians / Special Students) up to 90 days EUR/Person</span>
                    </label>
                 
                    <input type="radio" id="radio-w02" value="2" name="visaType" required/>
                    <label class="gaccca-radio__label" for="radio-w02">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa service (Business Visitor / Industrial Workers, Technicians / Special Students) for 91-180 days EUR/Person</span>
                    </label>
                  
                    <input type="radio" id="radio-w03" value="3" name="visaType" required/>
                    <label class="gaccca-radio__label" for="radio-w03">
                      <span class="gaccca-radio_faux"></span>
                      <span>Assistance with a denied B-1/B-2 Visa or Deportation EUR/Person</span>
                    </label>
                  
                    <input type="radio" id="radio-w04" value="4" name="visaType" required/>
                    <label class="gaccca-radio__label" for="radio-w04">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa Service for Non-Profit Organisations up to 90 days EUR/Person</span>
                    </label>
                 
                    <input type="radio" id="radio-w05" value="5" name="visaType" required/>
                    <label class="gaccca-radio__label" for="radio-w05">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa Service for Non-Profit Organisations more than 91 days EUR/Person</span>
                    </label>
                 
                    <input type="radio" id="radio-w06" value="6" name="visaType" required/>
                    <label class="gaccca-radio__label" for="radio-w06">
                      <span class="gaccca-radio_faux"></span>
                      <span>Visa for Short-Term Business Study Tour Program (no more than 90 days) EUR/Person</span>
                    </label>
                  
                    <input type="radio" id="radio-w07" value="7" name="visaType" required/>
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
                    <input type="checkbox" name="isExpedited" id="checkbox-unique-id-73" value="Yes"  />
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
                    <input type="radio" id="radio-43" value="PrivateCustomer" name="bookingAs"  required="" />
                    <label class="gaccca-radio__label" for="radio-43">
                      <span class="gaccca-radio_faux"></span>
                      <span class="gaccca-padding-right-25">Private Customer</span>
                    </label>
  
                    <input type="radio" id="radio-44" value="BusinessCustomer" name="bookingAs" required="" />
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
                <input type="text" name="con[FirstName]"  value="{{isset($datas['con']['FirstName'])?$datas['con']['FirstName']:''}}"  id="firstNameField" required="" class="gaccca-input" />
                
              </div>
            </div>
          </div>

  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
                Last name of visa applicant <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" name="con[LastName]" value="{{isset($datas['LastName'])?$datas['LastName']:''}}"   id="lastNameField" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-3">
                Email address of visa applicant <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="email" name="con[Email]"  value="" placeholder="Email address of visa applicant" required="" class="gaccca-input" id="emailField"  />
                
              </div>
            </div>
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" name="con[Phone]"  value="" id="phoneField" placeholder="Phone Number" required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">Please always provide your country code</span>
              </div>
            </div>
          </div>
    
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-5">
                Date of Departure to the USA <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element-date">
              <input type="text" name="dob"  value="{{isset($datas['con']['FirstName'])?$datas['con']['FirstName']:''}}" id="text-input-id-5" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" />
            </div>
          </div>
  
  
        </div>
  
  
   
        <h2 class="gaccca-h2-padding">Invoice Address</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">




          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1"  id='bussinessField_company'>
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Company Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text"  name="companyName"  value="{{isset($datas['companyName'])?$datas['companyName']:''}}" id="bussinessInputField_company"   class="gaccca-input" />
              
            </div>
          </div>
        </div>



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1" id='bussinessField_web'> 
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Website <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text"  name="website"  value="{{isset($datas['website'])?$datas['website']:''}}" id="bussinessInputField_web"  class="gaccca-input" />
              
            </div>
          </div>
        </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
         
                <div class="gaccca-form-element gaccca-form-element-margin">
      
                  <div class="gaccca-form-element__control">
                      <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Salutation: <span class="gaccca-text-required" title="required">*</span> </label>
                      <span class="gaccca-radio">
                        <input type="radio" id="radio-ms" value="ms." name="salutation"  required/>
                        <label class="gaccca-radio__label" for="radio-ms">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">Ms.</span>
                        </label>
                        <input type="radio" id="radio-mr" value="mr." name="salutation" required/>
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
                    <input type="text"  name="conPersonInfo[FirstName]"  value="{{isset($datas['conPersonInfo']['FirstName'])?$datas['conPersonInfo']['FirstName']:''}}" id="text-input-id-fn" placeholder="First Name" required="" class="gaccca-input" />
                    
                  </div>
                </div>
              </div>
    
      
            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-2">
                    Last Name<span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="conPersonInfo[Lastname]"  value="{{isset($datas['lastNameConPerson'])?$datas['lastNameConPerson']:''}}" id="text-input-id-2" placeholder="Last Name" required="" class="gaccca-input" />
                  
                </div>
              </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Street <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <textarea name="conPersonInfo[MailingStreet]"   placeholder="Enter Your Address" required="" class="gaccca-textarea"  id="streetField" >{{isset($datas['conPersonInfo']['MailingStreet'])?$datas['conPersonInfo']['MailingStreet']:''}}</textarea>
                    
                  </div>
                </div>
              </div>


              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-9">
                    City <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <input type="text" name="conPersonInfo[MailingCity]"  value="{{isset($datas['conPersonInfo']['MailingCity'])?$datas['conPersonInfo']['MailingCity']:''}}" id="cityField" placeholder="City" required="" class="gaccca-input" />
                  </div>
                </div>
              </div>

              <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-10">
                    Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
                  <div class="gaccca-form-element__control">
                    <input name="conPersonInfo[MailingPostalCode]"  value="{{isset($datas['conPersonInfo']['MailingPostalCode'])?$datas['conPersonInfo']['MailingPostalCode']:''}}" type="text" id="text-input-id-10" placeholder="Zip Code" id="postalCodeField" required="" class="gaccca-input" />
                  </div>
                </div>
              </div>
              <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-11">
              Country <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-11" placeholder="Country" required="" class="gaccca-input" /> -->
             
              {!! Form::select('conPersonInfo[MailingCountryCode]', array_reverse($datas['countryOfBirth']), isset($datas['con']['MailingCountryCode'])?$datas['con']['MailingCountryCode']:'', [ 'class' => 'gaccca-select','required' => 'required', 'id'=>'countryCodeField']) !!}
           <input type='hidden' id='countryName' name='countryName' />
              <span class="gaccca-input-help-text"></span>
            </div>
          </div>
        </div>

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-7">
                Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input name="conPersonInfo[Phone]"  value="{{isset($datas['conPersonInfo']['Phone'])?$datas['conPersonInfo']['Phone']:''}}" type="text" id="text-input-id-7" placeholder="+1" required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">Please always provide your country code.</span>
              </div>
            </div>
          </div>
         
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Notes and remarks for this order <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                  <textarea name="note" placeholder="Enter Your Address" required="" class="gaccca-textarea">{{isset($datas['note'])?$datas['note']:''}}</textarea>
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
                    <input type="checkbox" name="conditions" id="checkbox-unique-id-isConfirmed" value="Yes" required />
                    <label class="gaccca-checkbox__label" for="checkbox-unique-id-isConfirmed">
                      <span class="gaccca-checkbox_faux"></span>
                      <span class="gaccca-form-element__label"> Yes, I confirm the order conditions:</span>
                    </label>
                  </div>
                </div>
              </div>
             
          </div>
         
         
    
          <button id="gaccca_saveBtn_bvisa" class="gaccca-button-save gaccca-button-save-margin">Submit</button>
    
        </div>    

      
        
        
      </div>
      
     
    </div>


{!! Form::close() !!}
@include('common.footer')
<script>


$( document ).ready(function() {
  $('[id^=bussinessField_]').hide();
  $('#existing-customer-div').hide();


  $('input[type=radio][name=bookingAs]').change(function() {
    if (this.value == 'BusinessCustomer') {
      $('[id^=bussinessField_]').show();
      $('[id^=bussinessInputField_]').prop('required', true);
    }else{
      $('[id^=bussinessField_]').hide();
      $('[id^=bussinessInputField_]').prop('required', false);
    }

  });



  $('input[type=radio][name=registerationFor]').change(function() {

if (this.value == 'NewCustomer') {
  $("#existing-customer-list").val('');
  $('#existing-customer-div').hide();
  $("#existing-customer-list").prop('required', false);
  $('#firstNameField').val('');
  $('#lastNameField').val('');
  $('#emailField').val('');
  $('#emailField').prop('readonly', false);
  $('#phoneField').val('');
  $('#dobField').val('');
  $('#streetField').val('');
  $('#cityField').val('');
  $('#postalCodeField').val('');
  $('#countryCodeField').val('');
} else if (this.value == 'ExistingCustomer') {
  $('#existing-customer-div').show();

  $("#existing-customer-list").prop('required', true);
}
});
$('#countryCodeField').change(function() {
  var el = document.getElementById('countryCodeField');
            document.getElementById('countryName').value=el.options[el.selectedIndex].innerHTML;

});

$('#existing-customer-list').change(function() {
      $('#firstNameField').val('');
      $('#lastNameField').val('');
      $('#emailField').val('');
      $('#emailField').prop('readonly', true);
      $('#phoneField').val('');
      $('#dobField').val('');
      $('#streetField').val('');
      $('#cityField').val('');
      $('#postalCodeField').val('');
      $('#countryCodeField').val('');
      if (this.value == '') {
        return;
      }
      document.getElementById('loader').style.display = 'block';
      var formData = {
        existingCustomerId: this.value
      }
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: 'get',
        url: 'customer_information',
        data: formData,
        dataType: 'json',
        success: function(data) {
          console.log(data);
          document.getElementById('loader').style.display = 'none';
          $('#firstNameField').val(data.con.FirstName);
          $('#lastNameField').val(data.con.LastName);
          $('#emailField').val(data.con.Email);
          $('#phoneField').val(data.con.Phone);
          $('#dobField').val(data.dob);
          $('#streetField').val(data.con.MailingStreet);
          $('#cityField').val(data.con.MailingCity);
          $('#postalCodeField').val(data.con.MailingPostalCode);
          $('#countryCodeField').val(data.con.MailingCountryCode);
          jQuery('[id^="gacccaForm_"]').parsley().validate();
        },
        error: function(data) {
          document.getElementById('loader').style.display = 'none';
          console.log(data);
        }
      });
    })



});



</script>
