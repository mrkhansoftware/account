@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Validation and Check-In</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>Within the first week of beginning your training at your U.S. Host Company you must complete our online
        check-in in order to validate your visa, confirm your arrival, and provide us with your U.S. residential
        address. After the confirmation, we will validate your visa in the SEVIS system.
      </p>
      <p>
        Failure to validate your visa in a timely manner will automatically change your visa status to "no-show" or
        "invalid" which will result in cancellation or termination of your J-1 program and you will be required to leave
        the U.S Therefore it is extremely important that you complete our online check-in during the first week of your
        internship/training.
      </p>

      <p>
        <strong>NOTE:</strong> As your visa sponsor, we are your contact for the duration of your stay. Therefore,
        should you have any questions regarding this form or other concerns, don’t hesitate to contact us.
      </p>
    </div>

    <h2 class="gaccca-h2-padding">Personal Information</h2>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-1">
            Name (as stated on passport) <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-1" placeholder="Name of your Host-Company" required=""
              class="gaccca-input" />

            <span class="gaccca-input-help-text">first, middle, last name</span>

          </div>
        </div>
      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            Email <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-2" placeholder="Name of your Supervisor" required=""
              class="gaccca-input" />

          </div>
        </div>
      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-4">
            U.S. Phone <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-4" required="" class="gaccca-input" />

            <span class="gaccca-input-help-text">If you don't have a private U.S. phone number, please state your office
              phone number.</span>
          </div>
        </div>

      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-4">
            U.S. Home Address <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-4" required="" class="gaccca-input" />

            <span class="gaccca-input-help-text">Please include Apartment / Suite and Floor Number</span>
          </div>
        </div>

      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-4">
            Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-4" required="" class="gaccca-input" />

          </div>
        </div>

      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-4">
            City <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-4" required="" class="gaccca-input" />

          </div>
        </div>

      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="select-01">State</label>
          <div class="gaccca-form-element__control">
            <div class="gaccca-select_container">
              <select class="gaccca-select" id="select-01" >
                <option>select</option>
              </select>
            </div>
          </div>
        </div>

      </div>


    </div>


    <h2 class="gaccca-h2-padding">Host Company Information</h2>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-1">
            Name of Host Company <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-1" placeholder="Name of your Host-Company" required=""
              class="gaccca-input" />

            <span class="gaccca-input-help-text">first, middle, last name</span>

          </div>
        </div>
      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            Name of Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-2" placeholder="Name of your Supervisor" required=""
              class="gaccca-input" />

          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-3">
            First Day of Internship/Training <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element gaccca-form-element-margin-date">
            <input type="text"  id="text-input-id-3" placeholder="eMail-Adresse Supervisor" required=""
              class="gaccca-input" />

          </div>
        </div>


      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            What kinds of tasks and activities have you been doing? <span class="gaccca-text-required"
              title="required">*</span> </label>
          <div class="gaccca-form-element__control">

            <textarea required=""  class="gaccca-textarea"></textarea>

          </div>
        </div>
      </div>


    </div>


    <h2 class="gaccca-h2-padding">Consular and Customs Information</h2>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-1">
            At which American Consulate did you receive your J-1 visa? <span class="gaccca-text-required"
              title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-1" required="" class="gaccca-input" />

            <span class="gaccca-input-help-text">first, middle, last name</span>

          </div>
        </div>
      </div>

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            How many days did it take to receive your J-1 visa after your
            interview at the Consulate? <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-2" placeholder="Name of your Supervisor" required=""
              class="gaccca-input" />

          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


        <div class="gaccca-form-element gaccca-form-element-margin">

          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
              Did you encounter any problems receiving the J-1 visa at the U.S. Consulate? <span
                class="gaccca-text-required" title="required">*</span> </label>

            <span class="gaccca-radio">
              <input type="radio" id="radio-problem_receiving-no" value="radio-problem_receiving-no"
                name="problem_receiving" checked="" />
              <label class="gaccca-radio__label" for="radio-problem_receiving-no">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">No</span>
              </label>
              <input type="radio" id="radio-problem_receiving-yes" value="radio-problem_receiving-yes"
                name="problem_receiving" />
              <label class="gaccca-radio__label" for="radio-problem_receiving-yes">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-padding-right-25">Yes</span>
              </label>
            </span>

          </div>

        </div>


      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            If yes, please specify <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">

            <textarea required=""  class="gaccca-textarea"></textarea>

          </div>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            Port/City of Entry <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-2" required="" class="gaccca-input" />

            <span class="gaccca-input-help-text">Immigration Check Point / Airport</span>
          </div>
        </div>
      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-2">
            Date of Entry <span class="gaccca-text-required" title="required">*</span> </label>
          <div class="gaccca-form-element__control">
            <input type="text"  id="text-input-id-2" required="" class="gaccca-input" />

          </div>
        </div>
      </div>


    </div>


    <h2 class="gaccca-h2-padding">Upload your files</h2>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <p> Please take photos and attach the following documents in jpg, png or pdf format: </p>
          <ul>
            <li>copy of your J1-visa</li>
            <li>copy of admission stamp in your passport</li>
            <li>copy of stamped DS-2019</li>
            <li>copy of your I-94 online confirmation</li>
          </ul>

        </div>
      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Upload a picture of your J-1 Visa in your passport </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>

        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Upload a picture of your admission stamp here </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input  type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>

        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Upload a picture of your DS-2019 (front page) here </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input  type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>

        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Upload a picture of your I-94 confirmation page here </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input  type="file" id="myFile" name="filename" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-file-help-text-color">To generate your personal I-94 confirmation visit: <br />
            https://i94.cbp.dhs.gov</span>
        </div>

      </div>


      <button class="gaccca-button-save gaccca-button-save-margin">Save</button>

    </div>




  </div>

{!! Form::close() !!}
@include('common.footer')