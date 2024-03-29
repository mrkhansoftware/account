@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])

@include('common.header',['datas'=>$datas,'title' =>'Upload Your Documents','page'=>'uploadyourdocuments','parent_page'=>'Placement Program'])

{!! Form::open(['action' => 'UploadYourDocumentsController@store','files'=>true, 'method' => 'POST',  'id' => 'gacccaForm_uploaddoc']) !!}
<input type="hidden" name="applicantId"  value="{{isset($datas['app']['Id'])?$datas['app']['Id']:''}}" />
<input type="hidden" name="NewGdriveID__c"  value="{{isset($datas['app']['NewGdriveID__c'])?$datas['app']['NewGdriveID__c']:''}}" />
<input type="hidden" name="Gdrive_Placement_Folder_Id__c"  value="{{isset($datas['app']['Gdrive_Placement_Folder_Id__c'])?$datas['app']['Gdrive_Placement_Folder_Id__c']:''}}" />
<input type="hidden" name="lastNameFirstName"  value="{{isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:''}}" />
<input type="hidden" name="Contact__c"  value="{{isset($datas['contID'])?$datas['contID']:''}}" />
<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Upload your Documents</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>
        Please upload the requested documents only as PDF Format.
      </p>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">



      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            Most current CV / Resume in PDF format only </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file" id="myFile" name="resume" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Please submit your most recent and up-to-date <br /> CV / Resume. Your CV
            must display exact dates <br /> for all positions. e.g. 04/2015-06/2017.</span>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Student Status Verification </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file" name="ssv" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Submit a copy of your Bachelor's or Master's degree or a copy of your
            Certificate of <br /> Enrollment as a student.</span>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-1">
            Copy of your Passport </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="passport" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Please only provide a picture of the photo page of your passport.</span>

        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-lom">
            If applicable for your case: University requirements and rules for your internship </label>
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file"  name="universityRequirementCrt" />
              <span class="gaccca-file-custom">Choose file...</span>
            </label>
          </div>
        </div>




        <div class="gaccca-form-element gaccca-form-element-margin">
          <span class="gaccca-form-element__label">The upload will need some time. Please have some patience.</span>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
          <span class="gaccca-form-element__label"> <strong> Note: </strong> All upload fields are empty again after the
            upload for the next upload. </span>
        </div>

        <button id="gaccca_saveBtn_uploaddoc" class="gaccca-button-save gaccca-button-save-margin">Submit</button>

      </div>

    </div>

  </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif
