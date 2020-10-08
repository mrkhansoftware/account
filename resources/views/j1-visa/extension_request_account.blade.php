@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Extension Request','page'=>'extension_request_account','parent_page'=>'J1 Program'])
{!! Form::open(['action' => 'ExtensionRequestAccountController@store', 'method' => 'POST',  'id' => 'gacccaForm_extension']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Extension Request</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>If you would like to extend your internship, you must inform us at least 6 weeks before the end of the current DS-2019. An extension is only possible in the previous internship company. It must be connected to the previous internship period. The total duration of the initial application plus the extension may not exceed 12 months for the J-1 category INTERNAL and 18 months for the TRAINEE category. You must continue to complete a qualified internship in the same field with new tasks.
        </p><p>
            Please note that charges for renewal are charged according to our current price list.
           </p>
           <p> The decision on the approval of the extension can not be guaranteed and is subject to careful scrutiny, as is the initial application. </p>
            <p>
            If you would like to apply for an extension, please fill out the following form. We will contact you on time.
        </p>
      </div>
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" >
                Name of your Host-Company <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" 
              value="{{isset($datas['ap']['Host_Company__c'])?$datas['ap']['Host_Company__c']:''}}" 
                required="" class="gaccca-input" disabled/>
              
              
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
                Name of your Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" name='supervisorName' id="text-input-id-2"  required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-3">
                eMail-Adresse Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element gaccca-form-element-margin-date">
              <input type="email" name='supervisorEmail' id="text-input-id-3"  required="" class="gaccca-input" />
              
            </div>
          </div>
  
  
        </div>
  
  
   
           <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                End Date on your current DS-2019 <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" name='DS_2019' id="text-input-id-4"  required="" class="gaccca-input-date" readonly/>
                
              </div>
          </div>
  
        </div>
          
            
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">Insurance Provider</label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                    <select class="gaccca-select" id="select-01" name='Insurance_Provider'>                      
                      <option value=''>---</option>
                      <option value='GACC California'>GACC California</option>
                      <option value='Other'>Other</option>
                    </select>
                  </div>
                </div>
              </div>
  
        </div>


        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-5">
                    Date of Extension begin  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name='Date_of_Extension'  required="" class="gaccca-input-date" readonly />
                  
                </div>
            </div>
    
          </div>
        
          

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-5">
                    New End date of your program  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" name='New_End_date'   required="" class="gaccca-input-date" readonly/>
                  
                </div>
            </div>
    
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Please take your time and explain in detail the  <br/>reasons for an extension  <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
               
                  <textarea  required="" class="gaccca-textarea" name='comment'></textarea>
                
              </div>
            </div>
          </div>
          <button id="gaccca_saveBtn_extension" class="gaccca-button-save gaccca-button-save-margin">Submit</button>
      </div>

    </div>


{!! Form::close() !!}
@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif