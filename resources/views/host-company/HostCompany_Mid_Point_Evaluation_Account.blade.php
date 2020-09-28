@include('common.header_without_menu')

@include('common.signScript')

{!! Form::open(['action' => 'HCMidPointEvaluationController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Mid Point Evaluation</h1>

  @if (isset($datas['onfrmSubmitted']) && !$datas['onfrmSubmitted'])
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>The purpose of this form is for GACC California to understand your general impressions of your intern/trainee.
    </p>
    <p> The completion of this form is also required by the U.S. Department of State.</p>

    <p> Please note that this form is not valid unless all fields are completed. The information you provide will be kept confidential. Please take 10 minutes to fill out this form.
    </p>
    <p>
      Thank you to be a host company in our program
    </p>
  </div>

  <h2 class="gaccca-h2-padding">General Information</h2>
  <input type="hidden" name='EncId' value="{{$datas['encryptId']}}" />
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Name of Supervisor's Intern/Trainee <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Supervisor_s_Intern_Trainee__c]" value="{{isset($datas['onfrm']['Name_of_Supervisor_s_Intern_Trainee__c'])?$datas['onfrm']['Name_of_Supervisor_s_Intern_Trainee__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Name of Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Supervisor__c]" value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Name of Host Company <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Host_Company__c]" value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Supervisor's Current Business Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Supervisor_s_Current_Business_Address__c]" value="{{isset($datas['onfrm']['Supervisor_s_Current_Business_Address__c'])?$datas['onfrm']['Supervisor_s_Current_Business_Address__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Zip Code, City, State <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Zip_Code__c]" value="{{isset($datas['onfrm']['Zip_Code__c'])?$datas['onfrm']['Zip_Code__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Supervisor's Business Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Phone__c]" value="{{isset($datas['onfrm']['Phone__c'])?$datas['onfrm']['Phone__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          Supervisor's Business Email Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[EMail__c]" value="{{isset($datas['onfrm']['EMail__c'])?$datas['onfrm']['EMail__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>





  </div>


  <h2 class="gaccca-h2-padding">Evaluation of Intern</h2>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">







    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            On average, how many hours has the intern/trainee been in attendance per week? <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="radio-attendance-32" value="Fewer than 32 Hrs/Week" name="attendance_per_week" {{ (isset($datas['onfrm']['attendance_per_week__c']) && $datas['onfrm']['attendance_per_week__c']=="Fewer than 32 Hrs/Week")? "checked" : "" }} />
            <label class="gaccca-radio__label" for="radio-attendance-32">
              <span class="gaccca-radio_faux"></span>
              <span>Fewer than 32 Hrs/Week</span>
            </label>
          </span>
          <span class="gaccca-radio">
            <input type="radio" id="radio-attendance-45" value="32-45 Hrs/Week" name="attendance_per_week" {{ (isset($datas['onfrm']['attendance_per_week__c']) && $datas['onfrm']['attendance_per_week__c']=="32-45 Hrs/Week")? "checked" : "" }} />
            <label class="gaccca-radio__label" for="radio-attendance-45">
              <span class="gaccca-radio_faux"></span>
              <span>32-45 Hrs/Week</span>
            </label>
          </span>
          <span class="gaccca-radio">
            <input type="radio" id="radio-attendance-more" value="More than 45 Hrs/Week" name="attendance_per_week" {{ (isset($datas['onfrm']['attendance_per_week__c']) && $datas['onfrm']['attendance_per_week__c']=="More than 45 Hrs/Week")? "checked" : "" }} />
            <label class="gaccca-radio__label" for="radio-attendance-more">
              <span class="gaccca-radio_faux"></span>
              <span> More than 45 Hrs/Week</span>
            </label>
          </span>
        </div>

      </div>

    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-2">
          How well has the intern/trainee adapted to the business environment of your company? <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1=poor / 5=excellent</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'business_environment_adaption_by_intern__c'])

        <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee is interested in his/her work. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'My_internship_training_is_interesting__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>










    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          How well has the intern/trainee performed all tasks/projects assigned so far? <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1=poor / 5=excellent</span>


        @include('common.starRating',['required'=>'required', 'fieldName' =>'intern_performance_by_assigned_tasks__c'])


        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Please provide three examples of internship/training tasks/projects the intern/trainee has been involved in: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[trainee_involvement_in_internship__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['trainee_involvement_in_internship__c'])?$datas['onfrm']['trainee_involvement_in_internship__c']:''}}</textarea>

        </div>
      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Does the intern/trainee have the necessary qualifications for his/her position? <span class="gaccca-text-required" title="required">*</span> </label>


          <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-qualifications-no" value="radio-qualifications-no" name="qualifications" checked="" />
                          <label class="gaccca-radio__label" for="radio-qualifications-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-qualifications-yes" value="radio-qualifications-yes" name="qualifications" />
                          <label class="gaccca-radio__label" for="radio-qualifications-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->
          @include('common.radioGrp',['fieldName' =>'qualification_of_intern_for_position','obj'=>'onfrm','fieldApi'=>'qualification_of_intern_for_position__c','required'=>'required'])

        </div>
      </div>
    </div>








    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          If no, please expand on this: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[Qualification_of_intern_for_position_NO__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Qualification_of_intern_for_position_NO__c'])?$datas['onfrm']['Qualification_of_intern_for_position_NO__c']:''}}</textarea>

        </div>
      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Have you encountered problems with the intern/trainee so far?<span class="gaccca-text-required" title="required">*</span> </label>

          <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-problems-no" value="radio-problems-no" name="problems" checked="" />
                          <label class="gaccca-radio__label" for="radio-problems-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-problems-yes" value="radio-problems-yes" name="problems" />
                          <label class="gaccca-radio__label" for="radio-problems-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->

          @include('common.radioGrp',['fieldName' =>'Encountered_problems_with_behaviors','obj'=>'onfrm','fieldApi'=>'Encountered_problems_with_behaviors__c','required'=>'required'])

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-1">
          If yes, please specify <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[If_yes_please_specify__c]" value="{{isset($datas['onfrm']['If_yes_please_specify__c'])?$datas['onfrm']['If_yes_please_specify__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>










    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Could these problems be resolved ? </label>

          <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-resolved-no" value="radio-resolved-no" name="resolved" checked="" />
                          <label class="gaccca-radio__label" for="radio-resolved-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-resolved-yes" value="radio-resolved-yes" name="resolved" />
                          <label class="gaccca-radio__label" for="radio-resolved-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->

          @include('common.radioGrp',['fieldName' =>'Could_these_problems_be_resolved','obj'=>'onfrm','fieldApi'=>'Could_these_problems_be_resolved__c','required'=>'required'])

          <!-- Only required if there were any problems. -->
        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Has the intern/trainee's command of English been adequate for the internship/training?<span class="gaccca-text-required" title="required">*</span> </label>


          <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-english-no" value="radio-english-no" name="english" checked="" />
                          <label class="gaccca-radio__label" for="radio-english-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-english-yes" value="radio-english-yes" name="english" />
                          <label class="gaccca-radio__label" for="radio-english-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->

          @include('common.radioGrp',['fieldName' =>'English_adequate_for_internship','obj'=>'onfrm','fieldApi'=>'English_adequate_for_internship__c','required'=>'required'])


        </div>
      </div>
    </div>















    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee's command of English has improved since the beginning of the internship/training. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'english_improved__c'])



        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee is making progress. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'The_intern_trainee_is_making_progress__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee makes positive contributions to the company. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'Positive_contribution_of_trainee_intern__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee is friendly. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'intern_trainee_is_friendly__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>











    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee is reliable. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'Intern_trainee_is_reliable__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee is motivated. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'Intern_trainee_is_motivated__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>







    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Is the intern/trainee punctual? <span class="gaccca-text-required" title="required">*</span> </label>


          <!-- <span class="gaccca-radio">
                        <input type="radio" id="radio-punctual-no" value="radio-punctual-no" name="punctual" checked="" />
                        <label class="gaccca-radio__label" for="radio-punctual-no">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">No</span>
                        </label>
                        <input type="radio" id="radio-punctual-yes" value="radio-punctual-yes" name="punctual" />
                        <label class="gaccca-radio__label" for="radio-punctual-yes">
                          <span class="gaccca-radio_faux"></span>
                          <span class="gaccca-padding-right-25">Yes</span>
                        </label>
                      </span> -->

          @include('common.radioGrp',['fieldName' =>'Is_the_intern_trainee_punctual','obj'=>'onfrm','fieldApi'=>'Is_the_intern_trainee_punctual__c','required'=>'required'])

        </div>
      </div>
    </div>






















    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          The intern/trainee is flexible and able to accept changes to the work environment. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'Flexible_trainee_accept_changes__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>





    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
          How well does the intern/trainee accept constructive criticism? <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1=not well / 5=perfectly fine</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'Acceptance_of_criticism_by_trainee__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>







    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            The intern/trainee is actively participating in American cultural activities. <span class="gaccca-text-required" title="required">*</span> </label>

          <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-cultural-no" value="radio-cultural-no" name="cultural" checked="" />
                          <label class="gaccca-radio__label" for="radio-cultural-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-cultural-yes" value="radio-cultural-yes" name="cultural" />
                          <label class="gaccca-radio__label" for="radio-cultural-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span> -->

          @include('common.radioGrp',['fieldName' =>'Host_company_american_culture','obj'=>'onfrm','fieldApi'=>'Host_company_american_culture__c','required'=>'required'])

        </div>
      </div>
    </div>







    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Has your company offered the intern/trainee the opportunity to participate in cultural activities? Please specify: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[Please_state_a_few_cultural_activities__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Please_state_a_few_cultural_activities__c'])?$datas['onfrm']['Please_state_a_few_cultural_activities__c']:''}}</textarea>

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Overall, I am absolutely satisfied with the intern/trainee's performance so far. <span class="gaccca-text-required" title="required">*</span> </label>

          <!-- <span class="gaccca-radio">
                          <input type="radio" id="radio-satisfied-no" value="radio-satisfied-no" name="satisfied" checked="" />
                          <label class="gaccca-radio__label" for="radio-satisfied-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                          </label>
                          <input type="radio" id="radio-satisfied-yes" value="radio-satisfied-yes" name="satisfied" />
                          <label class="gaccca-radio__label" for="radio-satisfied-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                          </label>
                        </span>
                     -->
          @include('common.radioGrp',['fieldName' =>'Satisfied_intern_trainee_performance','obj'=>'onfrm','fieldApi'=>'Satisfied_intern_trainee_performance__c','required'=>'required'])

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-8">
          Please add any additional comments or concerns you may have: </label>
        <div class="gaccca-form-element__control">

          <input name="onfrm[Name_of_Supervisor_s_Intern_Trainee__c]" value="{{isset($datas['onfrm']['Name_of_Supervisor_s_Intern_Trainee__c'])?$datas['onfrm']['Name_of_Supervisor_s_Intern_Trainee__c']:''}}" type="text" id="text-input-id-3" required="" class="gaccca-input" />


        </div>
      </div>
    </div>

















  </div>


  <h2 class="gaccca-h2-padding">Please Note:</h2>

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>You can sign this evaluation digital online with your mouse or on your phone with your finger.</p>
        <p>After signing we will save the evaluation as a pdf in our records.</p>
        <p>Should you have any questions or concerns, please email us at visa@gaccca.org.</p>
        <p>In case of an emergency, please call us at our 24-hour number (toll-free): 888-936-2489.</p>
        <p>We hope you continue to have a positive experience with your intern/trainee</p>

      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


      @include('common.signHTML');

    </div>
  </div>



  <button class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>

  @else
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p> Thank you for submitting your evaluation.
        </p>
        <p>
          Form submitted on &nbsp; {{$datas['formSubmittedDate']}}
        </p>
        <p>
          Enjoy the remainder of your time at your host company
        </p>
      </div>
    </div>
  </div>
  @endif


</div>

{!! Form::close() !!}
@include('common.footer')