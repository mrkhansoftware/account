@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'','page'=>'page'])
@if (isset($datas['Appli']['Hide_Host_Company_Information_in_Account__c']) && $datas['Appli']['Hide_Host_Company_Information_in_Account__c'])
 
@else

{!! Form::open(['action' => 'HostCompanyInformationAccountController@store', 'method' => 'POST',  'id' => 'gacccaForm_hci']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Step 3/5 - Host Company Information</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please fill in all requested information about your host company, your intended internship/training and provide a contact person at your host company responsible for your intended internship/training.
       
      </p>
      </div>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



         
      
          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-foi">
                Field of Internship  <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" name="applicant[Field_of_Internship__c]"  value="{{isset($datas['Appli']['Field_of_Internship__c'])?$datas['Appli']['Field_of_Internship__c']:''}}" id="text-input-id-foi"  required="" class="gaccca-input" />
                <span class="gaccca-input-help-text">e.g. Marketing, Business Development, Mechanical<br/>
                           Engineering, Architecture, Graphic Design
                </span>
              </div>
            </div>

            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-colpr"> 
                Scheduled Start Date of Internship/Training  </label>
              <div class="gaccca-form-element__control">
                <input type="text" name="scheduled_Start"  value="{{isset($datas['scheduled_Start'])?$datas['scheduled_Start']:''}}" id="text-input-id-colpr"  class="gaccca-input-date" readonly/>
                
              </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-us-visa">
                Scheduled End Date of Internship/Training  </label>
              <div class="gaccca-form-element__control">
                <input type="text" name="scheduled_End"  value="{{isset($datas['scheduled_End'])?$datas['scheduled_End']:''}}" id="text-input-id-us-visa"   class="gaccca-input-date" readonly/>
                <span class="gaccca-input-help-text">Please provide type of visa and expiration date as well as information about any previous visa denials</span>
              </div>
            </div>
            <br/>




            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hcn">
                  Host Company Name <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Host_Company__c]"  value="{{isset($datas['Appli']['Host_Company__c'])?$datas['Appli']['Host_Company__c']:''}}" id="text-input-id-hcn"  required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hcn">
                    Host Company Website <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Host_Company_Website__c]"  value="{{isset($datas['Appli']['Host_Company_Website__c'])?$datas['Appli']['Host_Company_Website__c']:''}}" id="text-input-id-hcn"  required="" class="gaccca-input" />
                  
                </div>
  
              </div>


             

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-e-address">
                    Host Company Address <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <textarea name="applicant[Address__c]"   required="" class="gaccca-textarea">{{isset($datas['Appli']['Address__c'])?$datas['Appli']['Address__c']:''}}</textarea>
                  
                </div>
              </div>

              

              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-city">
                  City  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[City__c]"  value="{{isset($datas['Appli']['City__c'])?$datas['Appli']['City__c']:''}}" id="text-input-id-city"  required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-zipcode">
                  Zip Code  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[ZIP_Code__c]"  value="{{isset($datas['Appli']['ZIP_Code__c'])?$datas['Appli']['ZIP_Code__c']:''}}" id="text-input-id-zipcode"  required="" class="gaccca-input" />
                  
                </div>
  
              </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">State
                  <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                    
                    {!! Form::select('applicant[State__c]', array_reverse($datas['statePick']), isset($datas['Appli']['State__c'])?$datas['Appli']['State__c']:'', [  'class' => 'gaccca-select','required' => 'required']) !!}
                  </div>
                </div>
              </div>

              <br/>


          
              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hccp">
                    Host Company Contact Person <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Contact_Person__c]"  value="{{isset($datas['Appli']['Contact_Person__c'])?$datas['Appli']['Contact_Person__c']:''}}" id="text-input-id-hccp"  required="" class="gaccca-input" />
                    <span class="gaccca-input-help-text">Enter the name of the person who will be your supervisor/mentor during your internship/training.</span>
                </div>
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ccea">
                    Company Contact email address   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="email" name="applicant[Email_Address__c]"  value="{{isset($datas['Appli']['Email_Address__c'])?$datas['Appli']['Email_Address__c']:''}}" id="text-input-id-ccea"  required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ccp">
                    Company Contact phone   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Phone_Number__c]"  value="{{isset($datas['Appli']['Phone_Number__c'])?$datas['Appli']['Phone_Number__c']:''}}" id="text-input-id-ccp"  required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">Use the following format +1-563-6325685</span>
                </div>
  
              </div>

              <br/>


              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    Hours per week   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Hours_Per_Week__c]"  value="{{isset($datas['Appli']['Hours_Per_Week__c'])?$datas['Appli']['Hours_Per_Week__c']:''}}" id="text-input-id-hpw"  required="" class="gaccca-input" />
                  
                </div>
  
              </div>


              <div class="gaccca-form-element gaccca-form-element-margin">
  
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Do you receive a stipend? <span class="gaccca-text-required" title="required">*</span> </label>
               
              
                    <span class="gaccca-radio">
                    {!! Form::radio('stipend', 'No',isset($datas['stipend'])?($datas['stipend']=='No'?true:false):false,array('id'=>'radio-no','required' => 'required')); !!}
     
                      <label class="gaccca-radio__label" for="radio-no">
                        <span class="gaccca-radio_faux"></span>
                        <span class="gaccca-padding-right-25">No</span>
                      </label>
                      {!! Form::radio('stipend', 'Yes',isset($datas['stipend'])?($datas['stipend']=='Yes'?true:false):false,array('id'=>'radio-yes','required' => 'required')); !!}
     
                      <label class="gaccca-radio__label" for="radio-yes">
                        <span class="gaccca-radio_faux"></span>
                        <span class="gaccca-padding-right-25">Yes</span>
                      </label>
                    </span>





                  
                  </div>
    
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    If yes, how much?   <span class="gaccca-text-required" title="required"></span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[If_Yes_How_Much_Stipend__c]"  value="{{isset($datas['Appli']['If_Yes_How_Much_Stipend__c'])?$datas['Appli']['If_Yes_How_Much_Stipend__c']:''}}" id="text-input-id-hpw"   class="gaccca-input" />
                  <span class="gaccca-input-help-text">Please enter the amount paid to you per hour, week or  month, e.g 16 USD/hour, 1300 USD/month, 500 USD/week</span>
                </div>
  
              </div>
              <br/>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-vohiupm">
                   <strong>
                    Additional compensation offered by your host company :</strong>
                    <br/> - Value of Housing in USD per month   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Value_Of_Housing_In_USD_Per_Month__c]"  value="{{isset($datas['Appli']['Value_Of_Housing_In_USD_Per_Month__c'])?$datas['Appli']['Value_Of_Housing_In_USD_Per_Month__c']:''}}" id="text-input-id-vohiupm"  required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>
  
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-votiupm">
                    - Value of Transportation in USD per month    <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Value_Of_Transportation_In_USD_Per_Month__c]"  value="{{isset($datas['Appli']['Value_Of_Transportation_In_USD_Per_Month__c'])?$datas['Appli']['Value_Of_Transportation_In_USD_Per_Month__c']:''}}" id="text-input-id-votiupm"  required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>
  
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-tfeiu">
                    - Total Flight Expenses in USD  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Total_Flight_Expenses_In_USD__c]"  value="{{isset($datas['Appli']['Total_Flight_Expenses_In_USD__c'])?$datas['Appli']['Total_Flight_Expenses_In_USD__c']:''}}" id="text-input-id-tfeiu"  required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>
  
              </div>



              <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    - Other compensation   <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name="applicant[Other_Compensation__c]"  value="{{isset($datas['Appli']['Other_Compensation__c'])?$datas['Appli']['Other_Compensation__c']:''}}" id="text-input-id-hpw"  required="" class="gaccca-input" />
                  <span class="gaccca-input-help-text">If not applicable please fill in n/a. Please also name the  expense, e.g visa fee.</span>
                </div>
  
              </div>




              @if (isset($datas['Appli']['Confirm__c']) && $datas['Appli']['Confirm__c'])

              @else
          
            <button id="gaccca_saveBtn_hci" class="gaccca-button-save gaccca-button-save-margin">Submit & Continue</button>

            @endif


          </div>

   
      </div>
  
    </div>



{!! Form::close() !!}
@endif
@include('common.footer')
  @else
  Permission denied. Please contact administrator.
  @endif