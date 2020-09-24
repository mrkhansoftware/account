@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'AgencyInformationController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'agency-information','enctype' => 'multipart/form-data']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Agency Information</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>On this page you will find information about the relationship between you and us, for example program info, sales support etc. </p>
        <p>You can also upload current price list and other documents.</p>
      </div>
    
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-fn">
                
              @if (isset($datas['accountId']) && $datas['accountId']=='')
              <p><strong>No organization associated with account user. Contact Administrator.
                </strong></p>
            @endif
               
            </label>
              
            </div>
          </div>

   
      </div>


      @if (isset($datas['accountId']) && $datas['accountId']!='')
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Upload or update your current price list <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                  <label class="gaccca-file">
                      <input type="file"  required name="priceList"/>
                      <span class="gaccca-file-custom">Choose file...</span>
                      
                  </label>
              </div>
              <span class="gaccca-input-help-text"> Only PDF files allowed. The most current price list will be shown in the applicant account. </span>
        </div>
      </div>


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <p> <strong>Note:</strong> All upload fields are empty again after the upload for the next upload. </p>
        </div>

      </div>

      <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>
      @endif


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <p> <strong>Price list version history</strong> </p>
        @if(count($datas['contentVersionList'])>0)
          <table class="gaccca-price-table">
            <tr>
              <th>File</th>
              <th>Uploaded By</th>
              <th>Uploaded Date</th>
              <th>View</th>
            </tr>
            @for ($i = 0; $i < count($datas['contentVersionList']); $i++) 
            <tr>
              <td>Price List</td>
              <td>{{$datas['contentVersionList'][$i]['fileUploadedBy']}}</td>
              <td>{{$datas['contentVersionList'][$i]['fileUploadDate']}}</td>
              <td>
              @if(isset($datas['contentVersionList'][$i]['isLatest']) && $datas['contentVersionList'][$i]['isLatest'])  
              <a target='_blank' href="{{$datas['contentVersionList'][$i]['fileUrlView']}}">view</a>
            @endif
            </td>

            </tr>
            @endfor
          </table>
          @else
          There is no price list uploaded.
          @endif
        </div>

      </div>


    </div>


{!! Form::close() !!}
@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif