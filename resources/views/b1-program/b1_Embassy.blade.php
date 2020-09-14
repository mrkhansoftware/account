@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'B1EmbassyController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Embassy Preparation &amp; Entry</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p> Just a few more steps left! </p>

      <p> In order to set up an embassy or consulate appointment, visit the website <a href="http://ustraveldocs.com">
          http://ustraveldocs.com</a>, select your country and create an account. </p>

      <p> Please upload your documents per our request or if applicable to you. </p>

      
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


      <h2 class="gaccca-h2-padding">Before the appointment</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            DS-160 confirmation page </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="fileDS_160" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">After you sign and send your DS-160, you will get a single confirmation
            page. Please save it as a PDF file and print this page in color. Upload this page here!</span>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Appointment confirmation page </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="fileAppointment" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">After you pay the consulate fee and schedule an appointment, you are able
            to download a confirmation page. Please save it as a PDF file and print this page in color. Upload this page
            here!</span>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-city">
            Date of Consulate / Embassy visa appointment <span class="gaccca-text-required" title="required">*</span>
          </label>
          <div class="gaccca-form-element__control">
            <input type="text"  required="" class="gaccca-input-date" />
            <!-- <img src="assets/images/calendar.png" width=25 /> -->

            <span class="gaccca-input-help-text">Please provide the date from the appointment system. Please also
              provide any changes to your appointment should they occur.
            </span>

          </div>

        </div>



      </div>


      <h2 class="gaccca-h2-padding">After the appointment</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Picture of the issued visa </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="filePictureVisa" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text"> After you get your passport back, please take a picture of your issued
            visa. We can then provide additional important information about your visa.</span>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Final date of departure to the U.S. </label>
            <div class="gaccca-form-element__control">
            <input type="text"  required="" class="gaccca-input-date" />
          </div>
          <span class="gaccca-input-help-text">Please provide the final date of departure to the U.S. once your flight
            ticket has been purchased.</span>
        </div>






        <div class="gaccca-form-element gaccca-form-element-margin">
          <p> <strong> Note: </strong> All upload fields are empty again after the upload for the next upload.</p>

        </div>
        <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>



      </div>






    </div>

  </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif