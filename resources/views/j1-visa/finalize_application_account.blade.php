@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])

@include('common.header',['datas'=>$datas,'title' =>'Finalize your Application','page'=>'finalize_application_account','parent_page'=>'J1 Program'])
{!! Form::open(['action' => 'FinalizeApplicationAccountController@store', 'method' => 'POST',  'id' => 'gacccaForm_finalize']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Step 5/5 - Finalize your Application</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>This is the last step of your application where you can book and start our J-1 Visa Program.
        </p>
      </div>
      
      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
        <div class="gaccca-form-element gaccca-form-element-margin">
            <p>Please download our current price list.  
            @if (isset($datas['agencyPriceBookUrl']) && $datas['agencyPriceBookUrl']!=='')
            <img src="{{ asset('images/PDFImage.png') }}" width="18" height="18"> <a href="{{$datas['agencyPriceBookUrl']}}" target='_blank'>{{$datas['agencyName']}}</a>
         
             @else
             <img src="{{ asset('images/PDFImage.png') }}" width="18" height="18"> <a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzEv/W7fnG9Ll8sv.KD1o.l6v5kxqu16eMU6LQQwYgO6oNhY" target='_blank'>GACC California price list</a>
         
             @endif
             </p> 
            <br/>
            <div class="gaccca-form-element__control">
                <label class="gaccca-form-element__label" for="text-input-id-fn">
                    I have received and read the program price list <span class="gaccca-text-required" title="required">*</span> </label>
               
                <span class="gaccca-radio">
                  <input type="radio" required='' id="radio-yes" value="yes" name="readPriceList" {{isset($datas['Appli']['Read_pricelist__c']) &&  $datas['Appli']['Read_pricelist__c']?'checked':''}} />
                  <label class="gaccca-radio__label" for="radio-yes">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-form-element__label">Yes </span>
                  </label>
                </span>
           
                <span class="gaccca-input-help-text">Based on all submitted information and documents we as your J-1 Sponsor will choose the right visa category and program duration. Please refer to your invoice you will receive after booking our service.</span>
              </div>
              <br/>
              

              <div class="gaccca-form-element__control">
                <label class="gaccca-form-element__label" for="text-input-id-fn">
                    I would like to purchase the expedited service for an additional fee <span class="gaccca-text-required" title="required">*</span> </label>
               
                    <span class="gaccca-radio">
                      <input type="radio" id="radio-purchase-no" value="no" name="expedited"  {{isset($datas['Appli']['Expedited__c']) &&  $datas['Appli']['Expedited__c']?'':'checked'}}/>
                      <label class="gaccca-radio__label" for="radio-purchase-no">
                        <span class="gaccca-radio_faux"></span>
                        <span class="gaccca-padding-right-25">No</span>
                      </label>
                      <input type="radio" id="radio-purchase-yes" value="yes" name="expedited" {{isset($datas['Appli']['Expedited__c']) &&  $datas['Appli']['Expedited__c']?'checked':''}}/>
                      <label class="gaccca-radio__label" for="radio-purchase-yes">
                        <span class="gaccca-radio_faux"></span>
                        <span class="gaccca-padding-right-25">Yes</span>
                      </label>
                    </span>
                  
              
                <span class="gaccca-input-help-text">Our average processing times are up to 10 weeks. If you are applying for a J-1 visa on a tight deadline, our expedited service can help. Upon requesting the expedited service we will guarantee processing times of 2 weeks after receiving all information and documents from you and your host company and if no on-site visit is required.
                </span>
              </div>
              <br/>
              <h4>Health Insurance Information</h4>
              <p>German American Chamber of Commerce California, Inc., in accordance with the Bureau of Educational and Cultural Affairs' (ECA) regulations for exchange visitors (22 CFR Part 514 [Rulemaking No. 101]), requires that all participants have health insurance in effect for the duration of their stay in the United States. GACC California will not issue the DS-2019 form without having received this completed form and funds to purchase insurance (if applicable).</p>
              <p>As a participant in our program, please be aware that you must purchase the Health Insurance policy supplied by German American Chamber of Commerce California, Inc., which meets the requirements of ECA regulations. More information on the health insurance rates can be found <a target='_blank' href="https://www.j1-visa.com/j-1-insurance.html"> online.</a> You will be able to choose your insurance rate and exact coverage period during your visa application process.</p>       
        <p>Please note that government regulations for the J-1 Intern and Trainee programs permit you to arrive in the U.S. up to 30 days before the beginning of your internship and to stay up to 30 days after your internship ends. GACC California recommends that you maintain health insurance coverage for your entire stay in the U.S. If you wish, you may purchase additional health insurance from GACC California to cover the period before and/or after your internship.</p>
           
    
    
    
        <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
                I understand that the purchase of this health insurance package is a requirement of the GACC California program. <span class="gaccca-text-required" title="required">*</span> </label>
           
            <span class="gaccca-radio">
              <input type="radio" id="radio-2yes" value="yes" name="healthInsurance" {{isset($datas['Appli']['Understand_Insurance_Requirement__c']) &&  $datas['Appli']['Understand_Insurance_Requirement__c']?'checked':''}}/>
              <label class="gaccca-radio__label" for="radio-2yes">
                <span class="gaccca-radio_faux"></span>
                <span class="gaccca-form-element__label">Yes</span>
              </label>
            </span>
            
            <span class="gaccca-input-help-text">If you have any questions please contact us.</span>
          </div>
    
    
    
          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
                I require a J-2 Visa for my spouse/children. <span class="gaccca-text-required" title="required">*</span> </label>
           
           
                <span class="gaccca-radio">
                  <input type="radio" id="radio-spouse-no" value="no" name="j2VisaSpouse"  {{isset($datas['Appli']['J_2_Visa_Required__c']) &&  $datas['Appli']['J_2_Visa_Required__c']?'':'checked'}}/>
                  <label class="gaccca-radio__label" for="radio-spouse-no">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">No</span>
                  </label>
                  <input type="radio" id="radio-spouse-yes" value="yes" name="j2VisaSpouse" {{isset($datas['Appli']['J_2_Visa_Required__c']) &&  $datas['Appli']['J_2_Visa_Required__c']?'checked':''}}/>
                  <label class="gaccca-radio__label" for="radio-spouse-yes">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">Yes</span>
                  </label>
                </span>
              
        
            <span class="gaccca-input-help-text">If J-2 is required we will contact you via email with further information.</span>
          </div>
    

           <br/>
          <div class="gaccca-form-element">
            <label class="gaccca-form-element__label" for="text-input-id-people">
                How many people need a J-2 visa?<span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="number" name='applicant[Number_of_j_2_visa__c]' value="{{isset($datas['Appli']['Number_of_j_2_visa__c'])?$datas['Appli']['Number_of_j_2_visa__c']:''}}" id="text-input-id-people" required="" class="gaccca-input" />
            </div>
          </div>
          <br/>
          <div class="gaccca-form-element">
            <label class="gaccca-form-element__label" for="select-01">How did you hear about the program?<span class="gaccca-text-required">*</span></label>
            <div class="gaccca-form-element__control">
              <div class="gaccca-select_container">
              {!! Form::select('applicant[How_did_you_hear_about_the_program__c]', array_reverse($datas['howDidYouHearAboutTheProgram']), isset($datas['Appli']['How_did_you_hear_about_the_program__c'])?$datas['Appli']['How_did_you_hear_about_the_program__c']:'', [  'class' => 'gaccca-select','required' => 'required']) !!}
           
              </div>
            </div>
          </div>



          <br>
          <div class="gaccca-form-element__control">
            <label class="gaccca-form-element__label" for="text-input-id-fn">
                Have you previously applied to the J-1 program with another sponsor? <span class="gaccca-text-required" title="required">*</span> </label>
           
                <span class="gaccca-radio">
                  <input type="radio" id="radio-j1applied-no" value="no" name="j1Sponsor"  {{isset($datas['j1Sponsor']) &&  $datas['j1Sponsor']?'':'checked'}} />
                  <label class="gaccca-radio__label" for="radio-j1applied-no">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">No</span>
                  </label>
                  <input type="radio" id="radio-j1applied-yes" value="yes" name="j1Sponsor"  {{isset($datas['j1Sponsor']) &&  $datas['j1Sponsor']?'checked':''}} />
                  <label class="gaccca-radio__label" for="radio-j1applied-yes">
                    <span class="gaccca-radio_faux"></span>
                    <span class="gaccca-padding-right-25">Yes</span>
                  </label>
                </span>
              
        
            
          </div>
          @if (isset($datas['Appli']['Confirm__c']) && $datas['Appli']['Confirm__c'])
          @else
          <br/> 
        
          <button id="gaccca_saveBtn_finalize" class="gaccca-button-save">Review your j-1 Visa Application</button>
        @endif
    </div>

      </div>
  
    </div>
{!! Form::close() !!}

@include('common.footer')
  @else
  Permission denied. Please contact administrator.
  @endif