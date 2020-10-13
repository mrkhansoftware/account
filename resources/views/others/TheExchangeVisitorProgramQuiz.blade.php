@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header_without_menu',['datas'=>$datas,'title' =>'The Exchange Visitor Program Quiz','page'=>'TheExchangeVisitorProgramQuiz'])


{!! Form::open(['action' => 'VisitorProgramQuizController@store', 'method' => 'POST', 'id' => 'gacccaForm_exchange']) !!}

<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">The Exchange Visitor Program Quiz</h1>

  @if (isset($datas['onfrmSubmitted']) && $datas['onfrmSubmitted'])
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p> Thank you for submitting quiz.
        </p>
      </div>
    </div>
  </div>

  @else
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p> We are using this short quiz to see what you have learned so far about the J-1 exchange program. Only one answer per question is right. For any right answer you will get one point. After you have done the quiz you can view your score and review your answers. We recommend to read your handbook in your account.</p>
    <input type='hidden' name="onfrm[Id]" value="{{isset($datas['onfrm']['Id'])?$datas['onfrm']['Id']:''}}">
    <input type='hidden' name="app[Id]" value="{{isset($datas['app']['Id'])?$datas['app']['Id']:''}}">
    <input type='hidden' name="app[Contact__c]" value="{{isset($datas['app']['Contact__c'])?$datas['app']['Contact__c']:''}}">
    <input type='hidden' name="app[Encrypted_Host_Company_Id__c]" value="{{isset($datas['app']['Encrypted_Host_Company_Id__c'])?$datas['app']['Encrypted_Host_Company_Id__c']:''}}">



  </div>





  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            What is an I-94 card and why is it relevant? <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" required id="radio-w01" value="I-94 refers to the training plan describing my tasks during the internship." name="QuestionEx1" />
            <label class="gaccca-radio__label" for="radio-w01">
              <span class="gaccca-radio_faux"></span>
              <span>I-94 refers to the training plan describing my tasks during the internship.</span>
            </label>

            <input type="radio" required id="radio-w02" value="The I-94 card serves to prove the legal-visitor status (for example for your employer) and can be retrieved after 24 hours from your arrival in the U.S. from the Customs and Border Protection website (CBP)." name="QuestionEx1" />
            <label class="gaccca-radio__label" for="radio-w02">
              <span class="gaccca-radio_faux"></span>
              <span>The I-94 card serves to prove the legal-visitor status (for example for your employer) and can be retrieved after 24 hours from your arrival in the U.S. from the Customs and Border Protection website (CBP).</span>
            </label>

            <input type="radio" required id="radio-w03" value="I-94  is the name for the form to apply for a social security number." name="QuestionEx1" />
            <label class="gaccca-radio__label" for="radio-w03">
              <span class="gaccca-radio_faux"></span>
              <span>I-94 is the name for the form to apply for a social security number.</span>
            </label>
          </span>


        </div>

      </div>

    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            What is the correct answer in regards to your application for a Social Security Number (SSN)? <span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w04" value="I can apply for a Social Security Number before start of my training." name="QuestionEx2" />
            <label class="gaccca-radio__label" for="sradio-w04">
              <span class="gaccca-radio_faux"></span>
              <span>I can apply for a Social Security Number before start of my training.</span>
            </label>

            <input type="radio" required id="sradio-w05" value="I have to first conduct my check-in with the sponsor within one week after starting at my host company before applying for an SSN." name="QuestionEx2" />
            <label class="gaccca-radio__label" for="sradio-w05">
              <span class="gaccca-radio_faux"></span>
              <span>I have to first conduct my check-in with the sponsor within one week after starting at my host company before applying for an SSN.</span>
            </label>

            <input type="radio" required id="sradio-w06" value="J-1 visa applicants are not eligible to apply for an SSN." name="QuestionEx2" />
            <label class="gaccca-radio__label" for="sradio-w06">
              <span class="gaccca-radio_faux"></span>
              <span>J-1 visa applicants are not eligible to apply for an SSN.</span>
            </label>
          </span>


        </div>

      </div>

    </div>






    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            After successful completion of your training how many days can you remain in the U.S. thereafter? <span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w07" value="An absolute maximum of 60 days." name="QuestionEx3" />
            <label class="gaccca-radio__label" for="sradio-w07">
              <span class="gaccca-radio_faux"></span>
              <span>An absolute maximum of 60 days.</span>
            </label>

            <input type="radio" required id="sradio-w08" value="An absolute maximum 30 days." name="QuestionEx3" />
            <label class="gaccca-radio__label" for="sradio-w08">
              <span class="gaccca-radio_faux"></span>
              <span>An absolute maximum 30 days.</span>
            </label>

            <input type="radio" required id="sradio-w09" value="One week." name="QuestionEx3" />
            <label class="gaccca-radio__label" for="sradio-w09">
              <span class="gaccca-radio_faux"></span>
              <span>One week.</span>
            </label>

            <input type="radio" required id="sradio-w09a" value="It doesn't matter." name="QuestionEx3" />
            <label class="gaccca-radio__label" for="sradio-w09a">
              <span class="gaccca-radio_faux"></span>
              <span>It doesn't matter.</span>
            </label>
          </span>




        </div>

      </div>

    </div>





    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Can I get a side job (i.e. in the evening) on top of the training at my host company to earn some extra money? <span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w10" value="No." name="QuestionEx4" />
            <label class="gaccca-radio__label" for="sradio-w10">
              <span class="gaccca-radio_faux"></span>
              <span> No </span>
            </label>

            <input type="radio" required id="sradio-w11" value="Yes." name="QuestionEx4" />
            <label class="gaccca-radio__label" for="sradio-w11">
              <span class="gaccca-radio_faux"></span>
              <span>Yes</span>
            </label>

            <input type="radio" required id="sradio-w12" value="Yes but only of the sponsor approves." name="QuestionEx4" />
            <label class="gaccca-radio__label" for="sradio-w12">
              <span class="gaccca-radio_faux"></span>
              <span>Yes but only of the sponsor approves.</span>
            </label>
          </span>


        </div>

      </div>

    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Is it important to prove sufficient financial funds to GACC California and the U.S. embassy or consulate prior to start of program? <span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w13" value="Yes, very important." name="QuestionEx5" />
            <label class="gaccca-radio__label" for="sradio-w13">
              <span class="gaccca-radio_faux"></span>
              <span> Yes, very important. </span>
            </label>

            <input type="radio" required id="sradio-w14" value="No if I get paid by my host company." name="QuestionEx5" />
            <label class="gaccca-radio__label" for="sradio-w14">
              <span class="gaccca-radio_faux"></span>
              <span>No if I get paid by my host company.</span>
            </label>

            <input type="radio" required id="sradio-w15" value="Yes, but I only need to prove that I have sufficient funds for the first two months of internship." name="QuestionEx5" />
            <label class="gaccca-radio__label" for="sradio-w15">
              <span class="gaccca-radio_faux"></span>
              <span>Yes, but I only need to prove that I have sufficient funds for the first two months of internship.</span>
            </label>
          </span>


        </div>

      </div>

    </div>





    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">

            After starting your training in your host company, if your supervisor changes will you need to inform your sponsor organization GACC California? <span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w16" value="No." name="QuestionEx6" />
            <label class="gaccca-radio__label" for="sradio-w16">
              <span class="gaccca-radio_faux"></span>
              <span> No </span>
            </label>

            <input type="radio" required id="sradio-w17" value="Yes." name="QuestionEx6" />
            <label class="gaccca-radio__label" for="sradio-w17">
              <span class="gaccca-radio_faux"></span>
              <span> Yes</span>
            </label>

            <input type="radio" required id="sradio-w18" value="Yes, but only if the tasks in the training plan change as well." name="QuestionEx6" />
            <label class="gaccca-radio__label" for="sradio-w18">
              <span class="gaccca-radio_faux"></span>
              <span>Yes, but only if the tasks in the training plan change as well.</span>
            </label>
          </span>






        </div>

      </div>

    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">

            What is the correct answer in regards to a travel validation? <span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w19" value="The purpose of the travel validation is to inform the sponsor (GACC California) of your future international travel plans." name="QuestionEx7" />
            <label class="gaccca-radio__label" for="sradio-w19">
              <span class="gaccca-radio_faux"></span>
              <span> The purpose of the travel validation is to inform the sponsor (GACC California) of your future international travel plans. </span>
            </label>

            <input type="radio" required id="sradio-w20" value="The purpose of the travel validation is to inform the sponsor (GACC California) of your future travel plans inside the U.S." name="QuestionEx7" />
            <label class="gaccca-radio__label" for="sradio-w20">
              <span class="gaccca-radio_faux"></span>
              <span> The purpose of the travel validation is to inform the sponsor (GACC California) of your future travel plans inside the U.S.</span>
            </label>

            <input type="radio" required id="sradio-w21" value="The purpose of the travel validation is to inform the sponsor (GACC California) of a past trip, and to provide the sponsor with the date of re-entry into the U.S." name="QuestionEx7" />
            <label class="gaccca-radio__label" for="sradio-w21">
              <span class="gaccca-radio_faux"></span>
              <span>The purpose of the travel validation is to inform the sponsor (GACC California) of a past trip, and to provide the sponsor with the date of re-entry into the U.S.</span>
            </label>
          </span>






        </div>

      </div>

    </div>



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            What is correct in regards to a so called Two-Year Foreign Residency Requirement?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w22" value="It refers to a person subject to the two-year foreign residence who must have resided in their home country for two years prior to applying for a J-1 visa." name="QuestionEx8" />
            <label class="gaccca-radio__label" for="sradio-w22">
              <span class="gaccca-radio_faux"></span>
              <span> It refers to a person subject to the two-year foreign residence who must have resided in their home country for two years prior to applying for a J-1 visa. </span>
            </label>

            <input type="radio" required id="sradio-w23" value="Two-Year Foreign Residency Requirement applies to all J-1 visa applicants without exception." name="QuestionEx8" />
            <label class="gaccca-radio__label" for="sradio-w23">
              <span class="gaccca-radio_faux"></span>
              <span> Two-Year Foreign Residency Requirement applies to all J-1 visa applicants without exception.</span>
            </label>

            <input type="radio" required id="sradio-w24" value="If you are subject to the two-year rule it will be marked as such on your DS-2019 Form as well as on the J-1 Visa inside your passport." name="QuestionEx8" />
            <label class="gaccca-radio__label" for="sradio-w24">
              <span class="gaccca-radio_faux"></span>
              <span>It refers to a person subject to the two-year foreign residence requirement may not be eligible to apply for another visa category for two years following their program. If you are subject to the two-year rule it will be marked as such on your DS-2019 Form as well as on the J-1 Visa inside your passport.</span>
            </label>
          </span>



        </div>

      </div>

    </div>







    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            All of the following entities play an important role in your program. But who is considered the sponsor of your J-1 visa?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w25" value="Your Host Company." name="QuestionEx9" />
            <label class="gaccca-radio__label" for="sradio-w25">
              <span class="gaccca-radio_faux"></span>
              <span> Your Host Company </span>
            </label>

            <input type="radio" required id="sradio-w26" value="GACC California." name="QuestionEx9" />
            <label class="gaccca-radio__label" for="sradio-w26">
              <span class="gaccca-radio_faux"></span>
              <span> GACC California.</span>
            </label>

            <input type="radio" required id="sradio-w27" value="The U.S. Embassy." name="QuestionEx9" />
            <label class="gaccca-radio__label" for="sradio-w27">
              <span class="gaccca-radio_faux"></span>
              <span>The U.S. Embassy</span>
            </label>

            <input type="radio" required id="sradio-w28" value="Your agency or university in your home country." name="QuestionEx9" />
            <label class="gaccca-radio__label" for="sradio-w28">
              <span class="gaccca-radio_faux"></span>
              <span>Your agency or university in your home country</span>
            </label>
          </span>


        </div>

      </div>

    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Which of the following describes the purpose of the Exchange Visitor Program best?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w29" value="The primary goals of the Exchange Visitor Program are to allow participants the opportunity to engage broadly with Americans, share their culture, strengthen their English language abilities, and learn new skills or build skills that will help them" name="QuestionEx10" />
            <label class="gaccca-radio__label" for="sradio-w29">
              <span class="gaccca-radio_faux"></span>
              <span> The primary goals of the Exchange Visitor Program are to allow participants the opportunity to engage broadly with Americans, share their culture, strengthen their English language abilities, and learn new skills or build skills that will help them in future careers.</span>
            </label>

            <input type="radio" required id="sradio-w30" value="The primary objective of the program is for the foreign national to participate in a labor program, receive a wage and save up enough money to return to the home country to start her or his career" name="QuestionEx10" />
            <label class="gaccca-radio__label" for="sradio-w30">
              <span class="gaccca-radio_faux"></span>
              <span> The primary objective of the program is for the foreign national to participate in a labor program, receive a wage and save up enough money to return to the home country to start her or his career.</span>
            </label>

            <input type="radio" required id="sradio-w31" value="The primary objective of the program is for the foreign national to learn about American culture in order to investigate opportunities to permanently live in the U.S. and launch a successful career." name="QuestionEx10" />
            <label class="gaccca-radio__label" for="sradio-w31">
              <span class="gaccca-radio_faux"></span>
              <span>The primary objective of the program is for the foreign national to learn about American culture in order to investigate opportunities to permanently live in the U.S. and launch a successful career.</span>
            </label>
          </span>


        </div>

      </div>

    </div>







    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Upon start of your training you are required to conduct a so called check-in with your sponsor in order to validate your visa. Within what time frame will you have to perform this task?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w32" value="Within 4 weeks of arrival in the U.S." name="QuestionEx11" />
            <label class="gaccca-radio__label" for="sradio-w32">
              <span class="gaccca-radio_faux"></span>
              <span> Within 4 weeks of arrival in the U.S.</span>
            </label>

            <input type="radio" required id="sradio-w33" value="Within one week of start of training." name="QuestionEx11" />
            <label class="gaccca-radio__label" for="sradio-w33">
              <span class="gaccca-radio_faux"></span>
              <span> Within one week of start of training.</span>
            </label>

            <input type="radio" required id="sradio-w34" value="By the end of the third week after arrival in the U.S." name="QuestionEx11" />
            <label class="gaccca-radio__label" for="sradio-w34">
              <span class="gaccca-radio_faux"></span>
              <span>By the end of the third week after arrival in the U.S.</span>
            </label>
          </span>





        </div>

      </div>

    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Is the program in which you are participating in considered:<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w35" value="An internship / training program" name="QuestionEx12" />
            <label class="gaccca-radio__label" for="sradio-w35">
              <span class="gaccca-radio_faux"></span>
              <span>An internship / training program?</span>
            </label>

            <input type="radio" required id="sradio-w36" value="A sightseeing program?" name="QuestionEx12" />
            <label class="gaccca-radio__label" for="sradio-w36">
              <span class="gaccca-radio_faux"></span>
              <span> A sightseeing program?</span>
            </label>

            <input type="radio" required id="sradio-w37" value="A labor program?" name="QuestionEx12" />
            <label class="gaccca-radio__label" for="sradio-w37">
              <span class="gaccca-radio_faux"></span>
              <span>A labor program?</span>
            </label>
          </span>



        </div>

      </div>

    </div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Are you required to inform GACC California if you are moving (change of address)?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w38" value="No." name="QuestionEx13" />
            <label class="gaccca-radio__label" for="sradio-w38">
              <span class="gaccca-radio_faux"></span>
              <span>No</span>
            </label>

            <input type="radio" required id="sradio-w39" value="Yes." name="QuestionEx13" />
            <label class="gaccca-radio__label" for="sradio-w39">
              <span class="gaccca-radio_faux"></span>
              <span> Yes</span>
            </label>

            <input type="radio" required id="sradio-w40" value="Yes but only if the move is farther than 5 miles from the current address." name="QuestionEx13" />
            <label class="gaccca-radio__label" for="sradio-w40">
              <span class="gaccca-radio_faux"></span>
              <span>Yes but only if the move is farther than 5 miles from the current address.</span>
            </label>
          </span>



        </div>

      </div>

    </div>




    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Which role has my sponsor GACC California?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w41" value="GACC California is my main contact until the issuance of the the DS-2019 form but GACC California's role ends right there and then which is as soon as you have received your form DS-2019." name="QuestionEx14" />
            <label class="gaccca-radio__label" for="sradio-w41">
              <span class="gaccca-radio_faux"></span>
              <span>GACC California is a U.S. Department of State designated J1-visa sponsor for the Intern or Trainee categories. GACC California has to ensure compliance of all official U.S. regulations. If the internship or training offer is well received, approved, and all further program points are fulfilled GACC California issues the DS-2019 form. GACC California is my main contact until the issuance of the the DS-2019 form but GACC California's role ends right there and then which is as soon as you have received your form DS-2019.</span>
            </label>

            <input type="radio" required id="sradio-w42" value="All decisions about my visa status during the J‐1 program are made by GACC California, not by the Host Company." name="QuestionEx14" />
            <label class="gaccca-radio__label" for="sradio-w42">
              <span class="gaccca-radio_faux"></span>
              <span> GACC California is a U.S. Department of State designated J1-visa sponsor for the Intern or Trainee categories. GACC California has to ensure compliance of all official U.S. regulations. If the internship or training offer is well received, approved, and all further program points are fulfilled GACC California issues the DS-2019 form. Thereafter, GACC California continues to play an important role for my program. For example it provides me with important guidance, problem solving options, and orientations, and is my main contact person throughout the stay in the U.S. All decisions about my visa status during the J‐1 program are made by GACC California, not by the Host Company.</span>
            </label>

            <input type="radio" required id="sradio-w43" value="However, all decisions about my visa status during the internship or training are made by the Host Company only, not GACC California." name="QuestionEx14" />
            <label class="gaccca-radio__label" for="sradio-w43">
              <span class="gaccca-radio_faux"></span>
              <span>GACC California is a U.S. Department of State designated J1-visa sponsor for the Intern or Trainee categories. GACC California has to ensure compliance of all official U.S. regulations. If the internship and training offer is well received, approved, and all further program points are fulfilled GACC California issues the DS-2019 form. GACC California also provides me with important guidance and orientation materials thereafter. However, all decisions about my visa status during the internship or training are made by the Host Company only, not GACC California.</span>
            </label>
          </span>



        </div>

      </div>

    </div>





    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Which of the following U.S. government agencies are managing your J-1 exchange program?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w44" value="The U.S. Department of State." name="QuestionEx15" />
            <label class="gaccca-radio__label" for="sradio-w44">
              <span class="gaccca-radio_faux"></span>
              <span>The U.S. Department of State.</span>
            </label>

            <input type="radio" required id="sradio-w45" value="The U.S. Department of Agriculture." name="QuestionEx15" />
            <label class="gaccca-radio__label" for="sradio-w45">
              <span class="gaccca-radio_faux"></span>
              <span>The U.S. Department of Agriculture.</span>
            </label>

            <input type="radio" required id="sradio-w46" value="The U.S. Department of Education." name="QuestionEx15" />
            <label class="gaccca-radio__label" for="sradio-w46">
              <span class="gaccca-radio_faux"></span>
              <span>The U.S. Department of Education.</span>
            </label>
          </span>



        </div>

      </div>

    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Important: Who should you contact in case of problems or complaints with your internship or host company?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w47" value="I should only contact my supervisor at my host company. There is no need to contact you, the sponsor." name="QuestionEx16" />
            <label class="gaccca-radio__label" for="sradio-w47">
              <span class="gaccca-radio_faux"></span>
              <span>I should only contact my supervisor at my host company. There is no need to contact you, the sponsor.</span>
            </label>

            <input type="radio" required id="sradio-w48" value="First, I should contact you, my sponsor organization. The emergency hotline is 1-888-936-2489. If my sponsor organization is unable to help and solve my problem, I can call the U.S. Department of State emergency hotline number which is 1-866-283-9090" name="QuestionEx16" />
            <label class="gaccca-radio__label" for="sradio-w48">
              <span class="gaccca-radio_faux"></span>
              <span>First, I should contact you, my sponsor organization. The emergency hotline is 1-888-936-2489. If my sponsor organization is unable to help and solve my problem, I can call the U.S. Department of State's emergency hotline number which is 1-866-283-9090, or send them an email to jvisas@state.gov.</span>
            </label>

            <input type="radio" required id="sradio-w49" value="I should contact the U.S. Department of State's emergency hotline only. There is no need to contact you, the sponsor organization." name="QuestionEx16" />
            <label class="gaccca-radio__label" for="sradio-w49">
              <span class="gaccca-radio_faux"></span>
              <span>I should contact the U.S. Department of State's emergency hotline only. There is no need to contact you, the sponsor organization.</span>
            </label>
          </span>



        </div>

      </div>

    </div>
    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label" for="text-input-id-fn">
            Which of the following are very important resources for you to help ensure your wellbeing and safety?<span class="gaccca-text-required" title="required">*</span></label>
          <span class="gaccca-radio">
            <input type="radio" required id="sradio-w50" value="Pre-Departure Orientation Handbook by Sponsor & Sponsor Emergency Hotline." name="QuestionEx17" />
            <label class="gaccca-radio__label" for="sradio-w50">
              <span class="gaccca-radio_faux"></span>
              <span>Pre-Departure Orientation Handbook by Sponsor Sponsor Emergency Hotline.</span>
            </label>

            <input type="radio" required id="sradio-w51" value="U.S. Department of State Emergency Hotline & the Wilberforce Pamphlet (Rights and Protections for Temporary Workers)." name="QuestionEx17" />
            <label class="gaccca-radio__label" for="sradio-w51">
              <span class="gaccca-radio_faux"></span>
              <span>U.S. Department of State Emergency Hotline the Wilberforce Pamphlet (Rights and Protections for Temporary Workers).</span>
            </label>

            <input type="radio" required id="sradio-w52" value="All of the above." name="QuestionEx17" />
            <label class="gaccca-radio__label" for="sradio-w52">
              <span class="gaccca-radio_faux"></span>
              <span>All of the above.</span>
            </label>
          </span>



        </div>

      </div>

    </div>






    <button id="gaccca_saveBtn_exchange" class="gaccca-button-save gaccca-button-save-margin"> Submit</button>








  </div>

  @endif






</div>

{!! Form::close() !!}
@include('common.footer')

@else
Permission denied. Please contact administrator.
@endif