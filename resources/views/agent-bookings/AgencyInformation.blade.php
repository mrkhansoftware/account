@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


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
                <p><strong>No organization associated with account user. Contact Administrator.
                </strong></p>
            
                <p><strong>Price list version history
                </strong></p>
                <p>There is no price list uploaded.</p>
            </label>
              
            </div>
          </div>

   
      </div>



      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-fss">
            Upload or update your current price list <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                  <label class="gaccca-file">
                      <input type="file"  id="myFile" name="filename"/>
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
  


      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
          <p> <strong>Price list version history</strong> </p>

          <table class="gaccca-price-table">
            <tr>
              <th>File</th>
              <th>Uploaded By</th>
              <th>Uploaded Date</th>
              <th>View</th>
            </tr>
            <tr>
              <td>Price List</td>
              <td>Test User</td>
              <td>01/29/2020</td>
              <td><a href="#">view</a></td>

            </tr>
            <tr>
              <td>Price List</td>
              <td>Test User</td>
              <td>01/29/2020</td>
              <td><a href="#">view</a></td>

            </tr>
          </table>
        </div>

      </div>


    </div>


{!! Form::close() !!}
@include('common.footer')