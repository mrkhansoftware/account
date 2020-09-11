@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'AdditionalDocumentJ1Controller@store','files' => true, 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


      
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
                @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Proof of Insurance")!==false)
                <p><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bv7l/BDXOmghK42DzVxR62aQk7BIDvp.zVjKKkgulxDes4hM" target="_blank" rel="noopener noreferrer">Proof of Insurance</a></p>
                <br/>
                @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"FSS")!==false)                                                   
                <p><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000c06n/g9u91Gk9Or22yVEnPOQRi3alYFS82buxQ8iJN1mFFqQ" target="_blank" rel="noopener noreferrer">Financial Security Statement</a></p>
                <br/>     
                @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Letter of Reference")!==false)                                                
                <p><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzFF/MYqDOj5FtJ3ezYAkzclyNfX09UEHgWG2D1mnv.rMubQ" target="_blank" rel="noopener noreferrer">Letter of Reference</a></p>
                <br/>
                @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Letter of Motivation")!==false)                                                        
                <p><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000c06s/g_7vZdt42ZM6eLcnoe9qsJDL3tA19J7pITVWP7hhSh0" target="_blank" rel="noopener noreferrer">Sample Motivation Letter</a></p>
                <br/>
                @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Student Status Verification")!==false)                                                              
                <p><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzF0/_A2oZQC_PdDfF5cuOVal7J42G2RNQp9lp9AkKuRxnSY" target="_blank" rel="noopener noreferrer">Student Status Verification</a></p>
                <br/>
                @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Student Graduation Verification")!==false)                                                              
                <p><a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzF5/qNsOnh07_xhbVG2_5A1w05dgIUEw9c2xGK3DehW0r0E" target="_blank" rel="noopener noreferrer">Student Graduation Verification</a></p>
                <br/>   
                @endif                                                                 
            </label>
              
            </div>
              @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Proof of Insurance")!==false)
                <div class="gaccca-form-element gaccca-form-element-margin">
                  <label class="gaccca-form-element__label" for="text-input-id-poi">
                    Proof of Insurance <span class="gaccca-text-required" title="required">*</span>  </label><br/>
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-file">
                            <input type="file" required='required'   name="fileInsurance" />
                            <span class="gaccca-file-custom">Choose file...</span>

                        </label>
                    </div>
                   <span class="gaccca-input-help-text">Please have this form completed and signed by your insurance provider.</span>
                </div>
                @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"FSS")!==false)


                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-fss">
                        Financial Security Statement <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file" required='required'   name="fileFSS"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please complete all appropriate options in your Financial Security Statement form.</span>
                  </div>
                  @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Letter of Reference")!==false)


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-1">
                        Letter of Reference <span class="gaccca-text-required" title="required">*</span> </label>
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-file">
                            <input type="file" required='required'   name="fileReferenceLetter"/>
                            <span class="gaccca-file-custom">Choose file...</span>

                        </label>
                    </div>
                    <span class="gaccca-input-help-text">1-2 Letter(s) of Reference in English from a(n) (former) instructor or employer, if requested.</span>

                  </div>
                  @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Letter of Motivation")!==false)

                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-lom">
                        Letter of Motivation <span class="gaccca-text-required" title="required">*</span> </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file" required='required'   name="fileMotivationLetter"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Letter of Motivation in which you outline your education and/or working experience, and the reasons for pursuing an internship in the United States, if requested.</span>
                  </div>
                  @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Transcript of Records")!==false)


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-tor">
                        Transcript of Records <span class="gaccca-text-required" title="required">*</span>  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file" required='required'   name="fileRecordTranscript"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload your Transcript of Records or any similar document from your university displaying all the courses you have taken during the course of your studies.</span>
                  </div>
                  @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Student Status Verification")!==false)


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-ssv">
                        Student Status Verification <span class="gaccca-text-required" title="required">*</span>  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file" required='required'   name="fileStatusVerification"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload your completed Student Status Verification form, signed by your university.</span>
                  </div>
                  @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Student Graduation Verification")!==false)


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-sgv">
                        Student Graduation Verification <span class="gaccca-text-required" title="required">*</span>  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file" required='required'   name="fileGraduationVerification"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload your completed Student Graduation Verification form, signed by your university.</span>
                  </div>
                  @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Passport")!==false)


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-passport">
                        Passport <span class="gaccca-text-required" title="required">*</span>  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file" required='required'   name="filePassport"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload a copy of your passport.</span>
                  </div>
                  @endif  @if (stripos($datas['ap']['Request_Additional_Documents__c'],"Previous Visa")!==false)


                  <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-pv">
                        Previous Visa <span class="gaccca-text-required" title="required">*</span>  </label>
                        <div class="gaccca-form-element__control">
                            <label class="gaccca-file">
                                <input type="file" required='required'   name="filePreviousVisa"/>
                                <span class="gaccca-file-custom">Choose file...</span>
    
                            </label>
                        </div>
                        <span class="gaccca-input-help-text">Please upload a copy of your previous US visa. Should you have held more than one, please combine them into one PDF file.</span>
                  </div>
                  @endif  

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

@else
  Permission denied. Please contact administrator.
  @endif