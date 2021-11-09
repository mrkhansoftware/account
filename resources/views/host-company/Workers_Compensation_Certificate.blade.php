@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header_without_menu',['datas'=>$datas,'title' =>'Upload New Workers Compensation','page'=>'Workers_Compensation_Certificate'])

{!! Form::open(['action' => 'HostCompanyAgrmentAccController@work','files'=>true, 'method' => 'POST', 'id' => 'gacccaForm_additional']) !!}



<div class="gaccca-main-containt">
<h1 class="gaccca-h1-padding">Upload New Workers Compensation</h1>
<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
<p>
  The Workers Compensation Certificate of your company is about to expire in the next few days.
</p>
<p>
Please upload a new and valid Workers Compensation Certificate.
</p>
</div>

<input type="hidden" name='lastNameFirstName' value="{{isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:''}}" />
<input type="hidden" id='applicantIdRecord' name='applicantId' value="{{isset($datas['appli']['Id'])?$datas['appli']['Id']:''}}" />
<input type="hidden" id='applicantIdContact' name='Contact__c' value="{{isset($datas['appli']['Contact__c'])?$datas['appli']['Contact__c']:''}}" />
<input type="hidden" name='NewGdriveID__c' value="{{isset($datas['appli']['NewGdriveID__c'])?$datas['appli']['NewGdriveID__c']:''}}" />
<input type="hidden" name='HostCompany_Gdrive_Folder_Id__c' value="{{isset($datas['appli']['HostCompany_Gdrive_Folder_Id__c'])?$datas['appli']['HostCompany_Gdrive_Folder_Id__c']:''}}" />
<input type="hidden" name='onfrmId' value="{{isset($datas['onfrm']['Id'])?$datas['onfrm']['Id']:''}}" />


<input type='hidden' value="{{$datas['EncId']}}" name='EncId'/>

<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 uploadForm">
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-1">
        Please upload a scan of your Workers Compensation Certificate (jpg or png)<span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <label class="gaccca-file">
          <input name="fileCertificate" type="file" required='required'  />
          <span class="gaccca-file-custom">Choose file...</span>

        </label>
      </div>
      <span class="gaccca-input-help-text">The U.S. Department of State requires verification of your company’s certificate of Workers’ Compensation. Please submit a copy of the certificate or statement of waiver.</span>

    </div>

  </div>






<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">









  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

         <div class="gaccca-form-element gaccca-form-element-margin">

      <input type='hidden' name='formSubmitType' id='formSubmitType'/>
        <button  id="gaccca_saveBtn_additional" class="gaccca-button-save-green" style="padding: 8px 10px;">Send to GACC California</button>

    </div>
  </div>






</div>

</div>
<div class="gaccca-form-element gaccca-form-element-margin lastUploadInfo">
<p class="lastUploadMessage">You uploaded this file on {{isset($datas['lastUploadedDate'])? $datas['lastUploadedDate']:''}}. <a href='javascript:void(0)' class='uploadAgainButton' style='color: white;'>Click to upload again</a></p>

</div>
</div>


{!! Form::close() !!}

<script>
$(document).ready(function() {
$(".lastUploadInfo").hide();
$(".uploadAgainButton").on('click', function() {
  $(".lastUploadInfo").hide();
  $(".uploadForm").show();
});


});
</script>
@if (isset($datas['lastUploadedDate']) && $datas['lastUploadedDate']!='')
<script>
$(document).ready(function() {
$(".lastUploadInfo").show();
$(".uploadForm").hide();
});
</script>
@endif
@include('common.footer')

@else
Permission denied. Please contact administrator.
@endif
