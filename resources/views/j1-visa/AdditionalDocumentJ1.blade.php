@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


      
<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Additional Documents</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Below you will find a list of additional documents we need you to submit.</p>
       <p> Please complete the requested documents and upload them to your account. Please only submit documents in PDF or JPEG format. If a document consists of several pages please combine them into one single PDF file. We do not accept any documents submitted via email.
        </p>
      </div>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-fn">
                <p><strong>Templates:</strong></p>
            
                <p><a href="#">Proof of Insurance</a></p><br/>
                <p><a href="#">Financial Security Statement</a></p><br/>
                <p><a href="#">Letter of Reference</a></p><br/>
                <p><a href="#">Sample Motivation Letter</a></p><br/>
                <p><a href="#">Student Status Verification</a></p><br/>
                <p><a href="#">Student Graduation Verification</a></p><br/>
                
            </label>
              
            </div>

                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-poi">
                    Proof of Insurance  </label><br/>
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-file">
                            <input type="file"  id="myFile" name="filename"/>
                            <span class="gaccca-file-custom">Choose file...</span>

                        </label>
                    </div>
                   <span class="gaccca-input-help-text">Please have this form completed and signed by your insurance provider.</span>
                </div>


                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-fss">
                        Financial Security Statement </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file"  id="myFile" name="filename"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please complete all appropriate options in your Financial Security Statement form.</span>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-1">
                        Letter of Reference </label>
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-file">
                            <input type="file"  id="myFile" name="filename"/>
                            <span class="gaccca-file-custom">Choose file...</span>

                        </label>
                    </div>
                    <span class="gaccca-input-help-text">1-2 Letter(s) of Reference in English from a(n) (former) instructor or employer, if requested.</span>

                  </div>

                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-lom">
                        Letter of Motivation  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file"  id="myFile" name="filename"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Letter of Motivation in which you outline your education and/or working experience, and the reasons for pursuing an internship in the United States, if requested.</span>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-tor">
                        Transcript of Records  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file"  id="myFile" name="filename"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload your Transcript of Records or any similar document from your university displaying all the courses you have taken during the course of your studies.</span>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-ssv">
                        Student Status Verification  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file"  id="myFile" name="filename"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload your completed Student Status Verification form, signed by your university.</span>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-sgv">
                        Student Graduation Verification  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file"  id="myFile" name="filename"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload your completed Student Graduation Verification form, signed by your university.</span>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-passport">
                        Passport  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file"  id="myFile" name="filename"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload a copy of your passport.</span>
                  </div>


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-pv">
                        Previous Visa  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file"  id="myFile" name="filename"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload a copy of your previous US visa. Should you have held more than one, please combine them into one PDF file.</span>
                  </div>

                  <br/>
                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <span class="gaccca-form-element__label"> <strong> Note:</strong> All upload fields are empty again after the upload for the next upload. </span>
                  </div>

                  <button class="gaccca-button-save gaccca-button-save-margin">Send Additional Documents</button>

            
          </div>
   
      </div>
  
    </div>



{!! Form::close() !!}
@include('common.footer')