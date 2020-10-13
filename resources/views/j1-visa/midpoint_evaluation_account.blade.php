@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Mid-Point Evaluation','page'=>'midpoint_evaluation_account','parent_page'=>'J1 Program'])
@include('common.signScript');

{!! Form::open(['action' => 'MidpointEvaluationAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'gacccaForm_mea']) !!}

<div class="gaccca-main-containt gaccca-gutters">
  <h1 class="gaccca-h1-padding">Mid-Point Evaluation</h1>
  @if (isset($datas['onfrmSubmitted']) && $datas['onfrmSubmitted'])
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
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
    <p>Evaluations are a mandatory part of the J-1 Visa Program and required by the U.S. Department of State. Their completion is necessary for you to successfully complete your J-1 program. </p>
    <p>
      The purpose of this form is for us to understand your general impressions, opinions and reactions to life in the USA and to ensure the quality of your training or internship program.
    </p>
    <p>
      Please take 10 minutes to fill out the form. Please note that this form is not valid unless all fields are completed. The information you provide will be kept confidential at al times.
    </p>
    <p>
      We hope that you have had an exceptional experience in the U.S. so far and that you enjoy the remainder of your time at your host company.
    </p>
  </div>
  <h2 class="gaccca-h2-padding">General Information</h2>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Name of Intern/Trainee <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Intern__c]" value="{{isset($datas['onfrm']['Name_of_Intern__c'])?$datas['onfrm']['Name_of_Intern__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />
          <br />


        </div>
      </div>
    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Current U.S. Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[Current_U_S_Address__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>

        </div>
      </div>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Zip Code, City, State <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Zip_Code__c]" value="{{isset($datas['onfrm']['Zip_Code__c'])?$datas['onfrm']['Zip_Code__c']:''}}" id="text-input-id-2" required="" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="onfrm[Phone_Number__c]" value="{{isset($datas['onfrm']['Phone_Number__c'])?$datas['onfrm']['Phone_Number__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

        </div>
      </div>


    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Email Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="email" name="onfrm[Email_Address__c]" value="{{isset($datas['onfrm']['Email_Address__c'])?$datas['onfrm']['Email_Address__c']:''}}" id="text-input-id-4" required="" class="gaccca-input" />

        </div>
      </div>

    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Name of Host Company <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Host_Company__c]" value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}" id="text-input-id-4" required="" class="gaccca-input" />

        </div>
      </div>

    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Name of Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Supervisor__c]" value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}" id="text-input-id-4" required="" class="gaccca-input" />

        </div>
      </div>

    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Start of Internship/Training <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="Start_Internship" value="{{isset($datas['Start_Internship'])?$datas['Start_Internship']:''}}" required="" class="gaccca-input-date" readonly/>
          <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
        </div>
      </div>


    </div>





    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          End of Internship/Training <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="End_of_Internship" value="{{isset($datas['End_of_Internship'])?$datas['End_of_Internship']:''}}" required="" class="gaccca-input-date" readonly/>
          <span class="gaccca-input-help-text">(as listed on your DS-2019 Form)</span>
        </div>
      </div>


    </div>

  </div>


  <h2 class="gaccca-h2-padding">Host Company and Supervisor</h2>




  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please let us know how you would rate and describe your experience at your host company.</p>
      </div>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My host company made me feel welcome. <span class="gaccca-text-required" title="required">*</span></label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'My_host_company_made_me_feel_welcome__c'])

        <!-- <div class="gaccca-form-element__control">
                  
                  
                </div> -->
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My host company/supervisor helped me to adjust to everyday life
          in the firm. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>

        @include('common.starRating',['required'=>'required', 'fieldName' =>'My_host_company_supervisor_helped_me_to__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          As applicable:please state how exactly they did so.
          <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="onfrm[As_applicable_please_state_how_exactly__c]" value="{{isset($datas['onfrm']['As_applicable_please_state_how_exactly__c'])?$datas['onfrm']['As_applicable_please_state_how_exactly__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

        </div>
      </div>


    </div>






    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          I have a good relationship with my supervisor. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'I_have_a_good_relationship_with_my_super__c'])

      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My supervisor is helpful. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'My_supervisor_is_helpful__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My supervisor is always there to answer my questions. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'My_supervisor_is_always_there_to_answer__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My supervisor shows interest in my progress. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'supervisor_shows_interest_in_my_progress__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          I feel like I am part of the team. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'I_feel_like_I_am_part_of_the_team__c'])
        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>











    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My host company has been following the required training plan so far. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'My_host_company_has_been_following_the_r__c'])

        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>







    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please list the two best things about your host company. <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="onfrm[Please_list_the_two_best_things_about_be__c]" value="{{isset($datas['onfrm']['Please_list_the_two_best_things_about_be__c'])?$datas['onfrm']['Please_list_the_two_best_things_about_be__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

        </div>
      </div>


    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Is there anything you don't like? <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="onfrm[Is_there_anything_you_don_t_like__c]" value="{{isset($datas['onfrm']['Is_there_anything_you_don_t_like__c'])?$datas['onfrm']['Is_there_anything_you_don_t_like__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

        </div>
      </div>


    </div>






    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Overall I am having a great experience with my host company. <span class="gaccca-text-required" title="required">*</span></label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'Overall_I_am_having_a_great_experience_w__c'])
        <!-- <div class="gaccca-form-element__control">
                    
                    
                  </div> -->
      </div>
    </div>





    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please add any additional comments concerning your host company/supervisor:<span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <input type="text" name="onfrm[Please_add_any_additional_comments_conce__c]" value="{{isset($datas['onfrm']['Please_add_any_additional_comments_conce__c'])?$datas['onfrm']['Please_add_any_additional_comments_conce__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

        </div>
      </div>


    </div>



  </div>


  <h2 class="gaccca-h2-padding">About your Internship/Trainee</h2>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please let us know your thoughts about your internship/training.</p>

      </div>
    </div>
  </div>







  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My internship/training is interesting. <span class="gaccca-text-required" title="required">*</span></label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'My_internship_training_is_interesting__c'])
      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>





  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My internship/training is personally fulfilling. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'My_internship_training_is_personally_ful__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>





  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My internship/training is challenging. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'My_internship_training_is_challenging__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>




  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My internship/training is structured. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'My_internship_training_is_structured__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>




  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I am learning a lot. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'I_am_learning_a_lot__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>







  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        What have been your main tasks so far? <span class="gaccca-text-required" title="required">*</span> </label>

      <div class="gaccca-form-element gaccca-form-element-margin-date">
        <input type="text" name="onfrm[What_have_been_your_main_tasks_so_far__c]" value="{{isset($datas['onfrm']['What_have_been_your_main_tasks_so_far__c'])?$datas['onfrm']['What_have_been_your_main_tasks_so_far__c']:''}}" id="text-input-id-3" required="" class="gaccca-input" />

      </div>
    </div>


  </div>




  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        My supervisor gives me feedback. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'supervisor_gave_frequent_feedback__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>



  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I am improving my understanding of U.S. business practices. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'I_am_improving_my_understanding_of_U_S__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>



  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I am learning specific job skills which are useful for my future career. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'I_am_learning_specific_job_skills__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I would recommend an internship/training at this company. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'I_would_recommend_an_internship_training__c'])

      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        Why or why not? <span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element__control">

        <textarea name="onfrm[Why_or_Why_Not__c]" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Why_or_Why_Not__c'])?$datas['onfrm']['Why_or_Why_Not__c']:''}}</textarea>

      </div>
    </div>
  </div>



  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" >
        I am satisfied with my overall internship/training experience. <span class="gaccca-text-required" title="required">*</span> </label><br />
      <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
      @include('common.starRating',['required'=>'required', 'fieldName' =>'I_am_satisfied_with_my_overall_internshi__c'])
      <!-- <div class="gaccca-form-element__control">
                        
                        
                      </div> -->
    </div>
  </div>











  <h2 class="gaccca-h2-padding">American Culture</h2>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>Please let us know more about your life in the U.S. and rate your cultural experience.</p>
      </div>
    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My host company/supervisor provides me with opportunities to participate in cultural activities to broaden my understanding of the American culture. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'My_host_company_supervisor_provides_me_w__c'])
        <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
      </div>
    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          If applicable, please state how /which activities: <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">

          <input type="text" name="onfrm[If_applicable_please_state_how_which_a__c]" value="{{isset($datas['onfrm']['If_applicable_please_state_how_which_a__c'])?$datas['onfrm']['If_applicable_please_state_how_which_a__c']:''}}" id="text-input-id-3" class="gaccca-input" />


        </div>
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          My English skills are improving. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'english_improved__c'])


        <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
      </div>
    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          I am involved in activities within my local community. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'involved_local_community__c'])


        <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
      </div>
    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          I participate in cultural activities with my co-workers/supervisor in my free time. <span class="gaccca-text-required" title="required">*</span> </label><br />
        <span class="gaccca-file-help-text-color">1= strongly disagree ... 5= strongly agree</span>
        @include('common.starRating',['required'=>'required', 'fieldName' =>'involved_in_cultural_activities__c'])


        <!-- <div class="gaccca-form-element__control">
                            
                            
                          </div> -->
      </div>
    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          If applicable, please specify: <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[If_Applicable_Please_Specify__c]" value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['If_Applicable_Please_Specify__c'])?$datas['onfrm']['If_Applicable_Please_Specify__c']:''}}</textarea>

        </div>
      </div>
    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please state a few cultural activities you have done in your free time so far. <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[Please_state_a_few_cultural_activities__c]" value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['Please_state_a_few_cultural_activities__c'])?$datas['onfrm']['Please_state_a_few_cultural_activities__c']:''}}</textarea>

        </div>
      </div>
    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" >
            I have been able to adapt comfortably to the American way of life/culture. <span class="gaccca-text-required" title="required">*</span> </label>
          @include('common.radioGrp',['fieldName' =>'culture','obj'=>'onfrm','fieldApi'=>'I_have_encountered_problems_with_differe__c','required'=>'required'])




        </div>
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          If no, please explain: <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[If_no_please_explain__c]" value="{{isset($datas['onfrm']['If_no_please_explain__c'])?$datas['onfrm']['If_no_please_explain__c']:''}}" id="text-input-id-1"  class="gaccca-input" />


        </div>
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please list the two best things about being in America <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Please_list_the_two_best_things_about_be__c]" value="{{isset($datas['onfrm']['Please_list_the_two_best_things_about_be__c'])?$datas['onfrm']['Please_list_the_two_best_things_about_be__c']:''}}" id="text-input-id-1" required="" class="gaccca-input" />

        </div>
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" >
            I have encountered problems with different food and drink. <span class="gaccca-text-required" title="required">*</span> </label>

          @include('common.radioGrp',['fieldName' =>'drink','obj'=>'onfrm','fieldApi'=>'encountered_problems_with_food__c','required'=>'required'])


        </div>
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          If yes, please specify: <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">

          <input type="text" name="onfrm[If_yes_please_specify__c]" value="{{isset($datas['onfrm']['If_yes_please_specify__c'])?$datas['onfrm']['If_yes_please_specify__c']:''}}" id="text-input-id-1"  class="gaccca-input" />

        </div>
      </div>
    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" >
            I have encountered problems with different personal attitudes and behaviors. <span class="gaccca-text-required" title="required">*</span> </label>


          @include('common.radioGrp',['fieldName' =>'behaviors','obj'=>'onfrm','fieldApi'=>'Encountered_problems_with_behaviors__c','required'=>'required'])



        </div>
      </div>

    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          If yes, please explain: <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[If_yes_please_explain__c]" value="{{isset($datas['onfrm']['If_yes_please_explain__c'])?$datas['onfrm']['If_yes_please_explain__c']:''}}" id="text-input-id-1"  class="gaccca-input" />

        </div>
      </div>
    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" >
          Please add any additional comments concerning your life in the U.S <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">

          <textarea name="onfrm[comments_about_your_life__c]" value="" required="" class="gaccca-textarea">{{isset($datas['onfrm']['comments_about_your_life__c'])?$datas['onfrm']['comments_about_your_life__c']:''}}</textarea>

        </div>
      </div>
    </div>



  </div>


  <h2 class="gaccca-h2-padding">Please Note:</h2>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>You can sign this evaluation digital online with your mouse or on your phone with your finger. <br />
          After signing we will save the evaluation as a pdf in our records. <br />
          Should you have any questions or concerns, please email us at visa@gaccca.org<br />
          Enjoy your remaining time in the U.S. and at your host company. We hope you had a great internship/training experience in the U.S.

        </p>


      </div>
    </div>

    @include('common.signHTML');

  </div>
  @if (isset($datas['isFormSent']) && $datas['isFormSent'])
  <button id="gaccca_saveBtn_mea" class="gaccca-button-save gaccca-button-save-margin">Sign&amp;Submit</button>

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