@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


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
            <label class="gaccca-form-element__label" for="text-input-id-1">
                Name of your Host-Company <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-1" placeholder="Name of your Host-Company" required="" class="gaccca-input" />
              
              
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
                Name of your Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-2" placeholder="Name of your Supervisor" required="" class="gaccca-input" />
              
            </div>
          </div>
        </div>
  
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-3">
                eMail-Adresse Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element gaccca-form-element-margin-date">
              <input type="text" id="text-input-id-3" placeholder="eMail-Adresse Supervisor" required="" class="gaccca-input" />
              
            </div>
          </div>
  
  
        </div>
  
  
   
           <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                End Date on your current DS-2019 <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-4"  required="" class="gaccca-input-date" />
                
              </div>
          </div>
  
        </div>
          
            
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">Insurance Provider</label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                    <select class="gaccca-select" id="select-01">                      
                      <option>select</option>
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
                  <input type="text" id="text-input-id-5"  required="" class="gaccca-input-date" />
                  
                </div>
            </div>
    
          </div>
        
          

          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-5">
                    New End date of your program  <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                  <input type="text" id="text-input-id-5"  required="" class="gaccca-input-date" />
                  
                </div>
            </div>
    
          </div>


          <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-8">
                Please take your time and explain in detail the  <br/>reasons for an extension  <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
               
                  <textarea  required="" class="gaccca-textarea"></textarea>
                
              </div>
            </div>
          </div>
          <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>
      </div>

    </div>


{!! Form::close() !!}
@include('common.footer')