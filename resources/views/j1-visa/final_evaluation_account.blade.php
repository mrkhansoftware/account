@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Final Evaluation','page'=>'final_evaluation_account','parent_page'=>'J1 Program'])
@include('common.signScript');

{!! Form::open(['action' => 'FinalEvaluationAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'gacccaForm_final']) !!}


<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Final Evaluation</h1>
  @if (isset($datas['onfrmSubmitted']) && $datas['onfrmSubmitted'])

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

  @else
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Evaluations are a mandatory part of the J-1 Visa Program and required by the U.S. Department of State. Their completion is necessary for you to successfully complete your program with us. Further, the purpose of this form is for us to understand your general impressions, opinions and reactions to life in the U.S. and to ensure the quality of your training or internship program.
    </p>
    <p>
      Please take 10 minutes to fill out the form. Please complete within the next 7 days to ensure a successful completion of your J-1 Program.
    </p>
    <p>
      Please note that this form is not valid unless all fields are completed. Please sign this form and return it to us. The information you provide will be kept confidential at all times.
    </p>
    <p>
      We hope that you have had an exceptional experience in the U.S. so far and that you enjoy your last few weeks at your host company.
    </p>
  </div>

  <h2 class="gaccca-h2-padding">General Information</h2>

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Name of Intern/Trainee <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Intern__c]" value="{{isset($datas['onfrm']['Name_of_Intern__c'])?$datas['onfrm']['Name_of_Intern__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Current U.S. Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[Current_U_S_Address__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>

        </div>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="onfrm[Phone_Number__c]" value="{{isset($datas['onfrm']['Phone_Number__c'])?$datas['onfrm']['Phone_Number__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

        </div>
      </div>

    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Email Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="email" name="onfrm[Email_Address__c]" value="{{isset($datas['onfrm']['Email_Address__c'])?$datas['onfrm']['Email_Address__c']:''}}" id="text-input-id-4" required="" class="gaccca-input" />

        </div>
      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Name of Host Company <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Host_Company__c]" value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}" id="text-input-id-4" required="" class="gaccca-input" />

        </div>
      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Name of Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Supervisor__c]" value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}" id="text-input-id-4" required="" class="gaccca-input" />

        </div>
      </div>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Start of Internship/Training <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="Start_Internship" value="{{isset($datas['Start_Internship'])?$datas['Start_Internship']:''}}" required="" class="gaccca-input-date" readonly/>

          <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
        </div>
      </div>

    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          End of Internship/Training <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="End_of_Internship" value="{{isset($datas['End_of_Internship'])?$datas['End_of_Internship']:''}}" required="" class="gaccca-input-date" readonly/>
          <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
        </div>
      </div>

    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          U.S. Departure Date <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="U_S_Departure" value="{{isset($datas['U_S_Departure'])?$datas['U_S_Departure']:''}}" required="" class="gaccca-input-date" readonly/>

        </div>
      </div>

    </div>




  </div>


  <h2 class="gaccca-h2-padding">Sponsor Organization</h2>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please rate the service of the German American Chamber of Commerce California</p>
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          The information provided on the GACCCA website are a valuable resource for general questions concerning the J-1 visa <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'Information_from_GACCCA_valuable__c'])

      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Members of staff are friendly. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'Members_of_staff_are_friendly__c'])
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          The information provided during the visa process was helpful. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'Information_provided_helpful__c'])

      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          GACCCA ensured that the process went smoothly. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_process_smoothly__c'])
        <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          GACCCA helped to solve problems. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_solve_problems__c'])
        <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
      </div>
    </div>









    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          If there were any problems, please specify. </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[Problems_with_GACCCA__c]" class="gaccca-textarea">{{isset($datas['onfrm']['Problems_with_GACCCA__c'])?$datas['onfrm']['Problems_with_GACCCA__c']:''}}</textarea>

        </div>
      </div>
    </div>










    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          GACCCA is easy to contact. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_easy_contact__c'])
        <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          GACCCA prepared me well for my internship/training in the U.S. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_prepared_for_internship__c'])
        <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          I would recommend GACCCA to future applicants <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'GACCCA_recommend__c'])
        <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
      </div>
    </div>





    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please leave any additional comments concerning your experience with GACCCA here: </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[comments_about_internship__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['comments_about_internship__c'])?$datas['onfrm']['comments_about_internship__c']:''}}</textarea>

        </div>
      </div>
    </div>


  </div>



  <h2 class="gaccca-h2-padding">American Culture</h2>

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please rate your cultural experience in the U.S.!</p>
      </div>
    </div>





    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" >
            My host company/supervisor actively helped me to experience the American culture. <span class="gaccca-text-required" title="required">*</span> </label>


          @include('common.radioGrp',['fieldName' =>'company','obj'=>'onfrm','fieldApi'=>'Host_company_american_culture__c','required'=>'required'])

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please specify, if you wish to do so <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">

          <input type="text" name="onfrm[specify_if_you_wish_to_to_so__c]" value="{{isset($datas['onfrm']['specify_if_you_wish_to_to_so__c'])?$datas['onfrm']['specify_if_you_wish_to_to_so__c']:''}}" id="text-input-id-3" class="gaccca-input" />


        </div>
      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >

          I have been involved in cultural activities in my free time with my co-workers/supervisor. </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'involved_in_cultural_activities__c'])
        <!-- <div class="gaccca-form-element__control">
                          
                          
                        </div> -->
      </div>
    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          I was involved in cultural activities with my local community. </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'involved_local_community__c'])
        <!-- <div class="gaccca-form-element__control">
                          
                          
                        </div> -->
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please specify, if you wish to do so <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">

          <input type="text" name="onfrm[if_you_wish_to_do_so__c]" value="{{isset($datas['onfrm']['if_you_wish_to_do_so__c'])?$datas['onfrm']['if_you_wish_to_do_so__c']:''}}" id="text-input-id-3"  class="gaccca-input" />


        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          I did not have any cultural problems living in the U.S. </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'cultural_problems__c'])
        <!-- <div class="gaccca-form-element__control">
                          
                          
                        </div> -->
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          What have been the best 3 activities you have done in the U.S.? <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <input type="text" name="onfrm[best_3_activities__c]" value="{{isset($datas['onfrm']['best_3_activities__c'])?$datas['onfrm']['best_3_activities__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />


        </div>
      </div>
    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Is there anything you did not like about living in the U.S.? <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <input type="text" name="onfrm[not_like_about_U_S__c]" value="{{isset($datas['onfrm']['not_like_about_U_S__c'])?$datas['onfrm']['not_like_about_U_S__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />


        </div>
      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" >
            I have met people I would consider my friends at this point. <span class="gaccca-text-required" title="required">*</span> </label>

          @include('common.radioGrp',['fieldName' =>'people','obj'=>'onfrm','fieldApi'=>'consider_my_friends_at_this_point__c','required'=>'required'])



        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please leave any additional comments concerning your life in the U.S.: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[comments_about_your_life__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['comments_about_your_life__c'])?$datas['onfrm']['comments_about_your_life__c']:''}}</textarea>

        </div>
      </div>
    </div>







  </div>





  <h2 class="gaccca-h2-padding">Host Company and Supervisor</h2>

  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please rate your Host Company!</p>

      </div>
    </div>
  </div>







  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My supervisor showed interest in my progress. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'supervisor_showed_interest_progress__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My supervisor gave me frequent feedback on how to improve my performance. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'supervisor_gave_frequent_feedback__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My host company and supervisor provided on-the-job training consistent with my internship/training plan (DS-7002).. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'host_company_provided_training_with_plan__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I had a good relationship with my supervisor. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'good_relationship_with_supervisor__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I had a good relationship with my co-workers. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'good_relationshop_co_workers__c'])
    </div>
  </div>







  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Please expand on this: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element gaccca-form-element-margin-date">
        <input type="text" name="onfrm[expand_on_this_relationship__c]" value="{{isset($datas['onfrm']['expand_on_this_relationship__c'])?$datas['onfrm']['expand_on_this_relationship__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

        <span class="gaccca-input-help-text">If 'no', please state what you would have wished them to do; if 'yes', please name a few examples</span>
      </div>
    </div>


  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        What are the two best things about your host company? <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element gaccca-form-element-margin-date">
        <input type="text" name="onfrm[best_things_about_host_company__c]" value="{{isset($datas['onfrm']['best_things_about_host_company__c'])?$datas['onfrm']['best_things_about_host_company__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

      </div>
    </div>


  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Was there anything you did not like / that bothered you about your host company/supervisor? <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element gaccca-form-element-margin-date">
        <input type="text" name="onfrm[did_not_like_about_host_company__c]" value="{{isset($datas['onfrm']['did_not_like_about_host_company__c'])?$datas['onfrm']['did_not_like_about_host_company__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

      </div>
    </div>


  </div>









  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Overall I had an excellent experience with my host company. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'excellent_experience_with_host_company__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" >
          I would recommend my host company to future participants. <span class="gaccca-text-required" title="required">*</span> </label>

        @include('common.radioGrp',['fieldName' =>'consider','obj'=>'onfrm','fieldApi'=>'consider_my_friends__c','required'=>'required'])

      </div>
    </div>
  </div>







  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        If no, please state why <span class="gaccca-text-required" title="required"></span> </label>
      <div class="gaccca-form-element gaccca-form-element-margin-date">
        <input type="text" name="onfrm[if_no_recommend_state_why__c]" value="{{isset($datas['onfrm']['if_no_recommend_state_why__c'])?$datas['onfrm']['if_no_recommend_state_why__c']:''}}" id="text-input-id-3" class="gaccca-input" />

      </div>
    </div>


  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Please leave any additional comments concerning your host company <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">

        <textarea name="onfrm[comments_concerning_host_company__c]" value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['comments_concerning_host_company__c'])?$datas['onfrm']['comments_concerning_host_company__c']:''}}</textarea>

      </div>
    </div>
  </div>






  <h2 class="gaccca-h2-padding">Internship</h2>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please let us know your thoughts about your internship!</p>

      </div>
    </div>
  </div>







  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        The internship/training fulfilled my personal expectations. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'internship_fulfilled_personal_expections__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I have learned specific job skills and knowledge I can use in my future career. </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'learned_specific_job_skills__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>





  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Please list skills you learned: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input type="text" name="onfrm[skills_you_learned__c]" value="{{isset($datas['onfrm']['skills_you_learned__c'])?$datas['onfrm']['skills_you_learned__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />



      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Please list some of the main tasks you completed / things you did during your internship/training? <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input type="text" name="onfrm[main_tasks_you_completed__c]" value="{{isset($datas['onfrm']['main_tasks_you_completed__c'])?$datas['onfrm']['main_tasks_you_completed__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />



      </div>
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        What has been the best part of your internship/training?: <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">
        <input type="text" name="onfrm[the_best_part_of_your_internship__c]" value="{{isset($datas['onfrm']['the_best_part_of_your_internship__c'])?$datas['onfrm']['the_best_part_of_your_internship__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />



      </div>
    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My internship/training has improved my understanding of U.S. business practices. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'internship_improved_unterstand_U_S__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My English has improved <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'english_improved__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>







  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Overall I learned a lot during my internship/training. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'learned_a_lot_during_intern__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>




  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I am greatly satisfied with my internship/training experience. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'satisfied_with_internship_experience__c'])
      <!-- <div class="gaccca-form-element__control">
                              
                              
                            </div> -->
    </div>
  </div>






  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Please leave any additional comments concerning your internship/training </label>
      <div class="gaccca-form-element__control">
        <input type="text" name="onfrm[Please_add_any_additional_comments_conce__c]" value="{{isset($datas['onfrm']['Please_add_any_additional_comments_conce__c'])?$datas['onfrm']['Please_add_any_additional_comments_conce__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
        <br />


      </div>
    </div>
  </div>





  <h2 class="gaccca-h2-padding">Join the Intern and Trainee Alumni Network</h2>
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <p>Your intern/trainee experience was made possible by the U.S. Department of State's J-1 Exchange Visitor Program. As a former participant in an intern/trainee exchange program, the State Department has offered to register you on their International Exchange Alumni website helping you to connect with other alumni of exchange programs in your country and around the world. It will also allow you to compete for funding opportunities such as the U.S. Department of State's prestigious Alumni Innovation Engagement Fund (AIEF).</p>

    </div>
  </div>



  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <div class="gaccca-form-element__control">
        <label class="gaccca-form-element__label" >
          Would you like to receive an email invitation allowing you to enroll for the International Exchange Alumni? <span class="gaccca-text-required" title="required">*</span> </label>

        @include('common.radioGrp',['fieldName' =>'invitation','obj'=>'onfrm','fieldApi'=>'receive_mail_invitation_Alumni__c','required'=>'required'])

      </div>
    </div>
  </div>









  <h2 class="gaccca-h2-padding">Please Note</h2>
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <p>You can sign this evaluation digital online with your mouse or on your phone with your finger.

        After signing we will save the evaluation as a pdf in our records.

        Should you have any questions or concerns, please email us at visa@gaccca.org.

        Enjoy your remaining time in the U.S. and at your host company. We hope you had a great internship/training experience in the U.S.</p>

    </div>
    @include('common.signHTML');
  </div>

  @if (isset($datas['isFormSent']) && $datas['isFormSent'])
  <button id="gaccca_saveBtn__final" class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>

  @else
  <script>
    jQuery('input,select,textarea').prop('disabled', true);
  </script>
  @endif
 

  @endif
</div>


{!! Form::close() !!}
@include('common.footer')


@else
Permission denied. Please contact administrator.
@endif