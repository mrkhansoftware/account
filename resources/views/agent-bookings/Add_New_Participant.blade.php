@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Add New Participant','page'=>'Add_New_Participant'])
{!! Form::open(['action' => 'AddNewParticipantController@store', 'method' => 'POST', 'id' => 'gacccaForm_participent']) !!}

<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Add New Participant</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p> If you want to add a new Participant to our systems, please use the form below.</p>
    <p> The new participant will receive later after an internal reviewing his own login. </p>
    <p> After successful submitting a new participant, go back to your <a href="/AgentParticipants"> participant list </a> an click “Participant Account” to access the participants account for submitting his data. </p>

  </div>

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Register for <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="radio-customer" value="NewCustomer" name="registerationFor" required />
            <label class="gaccca-radio__label" for="radio-customer">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">New Customer</span>
            </label>

            <input type="radio" id="radio-ExistingCustomer" value="ExistingCustomer" name="registerationFor" required />
            <label class="gaccca-radio__label" for="radio-ExistingCustomer">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Existing Customer</span>
            </label>
          </span>

        </div>

      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin" id="existing-customer-div">
        <label class="gaccca-form-element__label" for="select-01">Existing Customer List <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">

            {!! Form::select('existingCustomerId', array_reverse($datas['existingCustomer']),'', [ 'class' => 'gaccca-select', 'id'=>'existing-customer-list']) !!}

          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            First Name <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text" name="con[FirstName]" value="" id="firstNameField" required="" class="gaccca-input" />

          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            Last Name <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="con[LastName]" value="" type="text" id="lastNameField"  required="" class="gaccca-input" />

          </div>
        </div>
      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-3">
            Email <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="con[email]" value="" type="email" id="emailField"  required="" class="gaccca-input" />

          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-4">
            Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="con[Phone]" value="" type="text" id="phoneField" required="" class="gaccca-input" />
            <span class="gaccca-input-help-text">Please always provide your country code</span>
          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-5">
            Date of birth <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element-date">
            <input name="dob" value="{{isset($datas['dob'])?$datas['dob']:''}}" type="text" id="dobField"  required="" class="gaccca-input-date" />
          </div>
        </div>


      </div>




      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <textarea name="con[MailingStreet]" value="" id="streetField"  required="" class="gaccca-textarea"></textarea>
          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-9">
            City <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="con[MailingCity]" value="{{isset($datas['con']['MailingCity'])?$datas['con']['MailingCity']:''}}" type="text" id="cityField"  required="" class="gaccca-input" />
            <span class="gaccca-input-help-text">Please use English letters only i.e. ue instead of ü / e instead of é / ss instead of ß</span>
          </div>
        </div>
      </div>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-10">
            Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input name="con[MailingPostalCode]" value="{{isset($datas['con']['MailingPostalCode'])?$datas['con']['MailingPostalCode']:''}}" type="text" id="postalCodeField" required="" class="gaccca-input" />
            <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
          </div>
        </div>
      </div>




      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-11">
          Country <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <!-- <input type="text" id="text-input-id-11"  required="" class="gaccca-input" /> -->

          {!! Form::select('con[MailingCountryCode]', array_reverse($datas['countryOfBirth']), isset($datas['con']['MailingCountryCode'])?$datas['con']['MailingCountryCode']:'', [ 'class' => 'gaccca-select','required' => 'required', 'id'=>'countryCodeField']) !!}

          <span class="gaccca-input-help-text"></span>
        </div>
      </div>
    </div>

    <button id="gaccca_saveBtn_participent" class="gaccca-button-save gaccca-button-save-margin">Submit</button>


  </div>


</div>

{!! Form::close() !!}

<script>
  $(document).ready(function() {
    $('#existing-customer-div').hide();
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
@include('common.footer')
@else
Permission denied. Please contact administrator.
@endif