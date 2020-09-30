@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'','page'=>'page'])

{!! Form::open(['action' => 'BVisaCaseInformationController@store','files' => true, 'method' => 'POST', 'data-parsley-validate', 'id' => 'gacccaForm_bvisa']) !!}


<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">B Visa Program</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>

        Please provide all relevant information and documents regarding your travel plan to the U.S. Use the fields
        flexibly regarding your own travel plan. The provided information will help us to understand your case, prepare
        your visa strategy and necessary documents.
      </p>
      <p> You can use the upload function as many time you want to send us documents. Please only submit documents in
        PDF, JPEG or PNG format only! If a document consists of several pages please combine them into one single file.
      </p>
      <p> We do not accept any documents submitted via email.
      </p>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


      <h2 class="gaccca-h2-padding">Case information</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">





        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Please describe in detail what you will do in the U.S. </label>
          <div class="gaccca-form-element__control">

            <textarea  name='descriptionOfWork' class="gaccca-textarea">{{isset($datas['descriptionOfWork'])?$datas['descriptionOfWork']:''}}</textarea>
            <span class="gaccca-input-help-text">Including: Planned business activities or Volunteer service
              descriptions</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Please provide detailed flight and travel plan/dates <br /> TO and FROM the U.S. / dates of travel for
            leisure </label>
          <div class="gaccca-form-element__control">

            <textarea class="gaccca-textarea" name='detailOfTravelPlan'>{{isset($datas['detailOfTravelPlan'])?$datas['detailOfTravelPlan']:''}}</textarea>
            <span class="gaccca-input-help-text">Including: Destinations, names of companies to visit, names of
              organizations, Port of entry and departure; Planned date of entry into the U.S. as well as departure;
              Planned dates of travel for leisure</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Please provide information of your current status: </label>
          <div class="gaccca-form-element__control">

          <textarea class="gaccca-textarea" name='currentStatusInfo'>{{isset($datas['currentStatusInfo'])?$datas['currentStatusInfo']:''}}</textarea>
            <span class="gaccca-input-help-text">For business travelers/ dual students: Exact address/ name /website
              link of employer company in home country *For volunteers/ students: name of university, current semester,
              intended plan for before and after stay in the US</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            If you are employed, please describe your job position and tasks, current department, and how long you have
            been with your employer company: </label>
          <div class="gaccca-form-element__control">

          <textarea class="gaccca-textarea" name='jobPositionInfo'>{{isset($datas['jobPositionInfo'])?$datas['jobPositionInfo']:''}}</textarea>
            <span class="gaccca-input-help-text">The employer company should be in your home country</span>
          </div>
        </div>



        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Please provide all information about the company you will visit in the U.S.: </label>
          <div class="gaccca-form-element__control">

          <textarea class="gaccca-textarea" name='infoAboutVisitingCompany'>{{isset($datas['infoAboutVisitingCompany'])?$datas['infoAboutVisitingCompany']:''}}</textarea>
            <span class="gaccca-input-help-text"> Including: Name, exact address, website link, phone number &amp; email
              address of your contact partner, planned activities at U.S. company</span>
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Please provide detailed information of previous visas to the U.S. and/or any rejections and deportation:
          </label>
          <div class="gaccca-form-element__control">

          <textarea class="gaccca-textarea" name='informationOfpreVisas'>{{isset($datas['informationOfpreVisas'])?$datas['informationOfpreVisas']:''}}</textarea>

          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Do you have a criminal history or record? If yes, please provide information: </label>
          <div class="gaccca-form-element__control">

          <textarea class="gaccca-textarea" name='criminalHistoryInfo'>{{isset($datas['criminalHistoryInfo'])?$datas['criminalHistoryInfo']:''}}</textarea>

          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Please provide answers only if you are a so-called DUAL STUDENT. For questions please see the help text:
          </label>
          <div class="gaccca-form-element__control">

          <textarea class="gaccca-textarea" name='question8'>{{isset($datas['question8'])?$datas['question8']:''}}</textarea>
            <span class="gaccca-input-help-text">What was the last department where you working in your rotation as a
              dual student?
              <br />What is the name of the department you will visit in the US?
              <br />Provide the exact dates you will be at the US subsidiary?
              <br />Provide the exact dates you will travel for leisure (if applicable)?
              <br /> Name, phone number, title/position &amp; email of your supervisor in Germany who can sign the support
              letter?
              <br />Name and phone number of your US contact partner? </span>
          </div>
        </div>



        <h2 class="gaccca-h2-padding">Visa application form</h2>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Please upload the confirmation page of your granted ESTA application (Only if requested for your case!
            Please see Welcome email): </label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="EstaApp" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Please only upload files in the PDF, PNG or JPG Format.</span>

        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-8">
            Access information for your DS-160 (Only if requested for your case! Please see Welcome email): </label>
          <div class="gaccca-form-element__control">

          <textarea class="gaccca-textarea" name='accessInformation'>{{isset($datas['accessInformation'])?$datas['accessInformation']:''}}</textarea>
            <span class="gaccca-input-help-text">Keep the DS-160 in REVIEW Mode on last page after <br /> filling out!
              DO NOT sign or send!</span>
          </div>
        </div>



        <h2 class="gaccca-h2-padding">Upload your Documents</h2>

       


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-1">
            Copy of your Passport </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="copyPassport" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">We only need the biometric page with your photo.</span>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-1">
            Your Resume/CV </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file" name="Resume" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            If applicable: U.S. purchase order, material related to the contract or products </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="IfApp" />
              <span class="gaccca-file-custom">Choose file...</span>
            </label>
          </div>
        </div>

        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            If applicable: Please upload the rejection letter from U.S. embassy or deportation protocol at U.S. port of
            entry </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="rejection" />
              <span class="gaccca-file-custom">Choose file...</span>
            </label>
          </div>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            If applicable: Please upload any previous visas, Financial Security Statement for Volunteers or any other
            pdf documents for your case </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file" name="preVisas" />
              <span class="gaccca-file-custom">Choose file...</span>
            </label>
          </div>
        </div>







        <div class="gaccca-form-element gaccca-form-element-margin">
          <span class="gaccca-form-element__label"> <strong> Note: </strong> All upload fields are empty again after the
            upload for the next upload. </span>
        </div>

        <button id="gaccca_saveBtn_bvisa" class="gaccca-button-save gaccca-button-save-margin">Submit</button>












      </div>






    </div>

  </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif