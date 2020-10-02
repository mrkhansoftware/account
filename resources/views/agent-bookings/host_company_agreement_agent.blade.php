@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header_without_menu')

{!! Form::open(['action' => 'HostCompanyAgreementAgentController@store','files'=>true, 'method' => 'POST', 'data-parsley-validate', 'id' => 'HCA-plan']) !!}



<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Host Company Agreement</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>The Host Company Agreement is a document between GACC California and you, the Host Company. Please complete the
      sections below for review by a GACC California staff member. Please always save your entries by using the blue
      “Save Form” button on the left side; otherwise, your changes will be lost.</p>
    <p>After completing the form, please submit your entries by pressing the “Send to GACC California” button at the
      bottom of this page.</p>
    <p>Please note, you won’t need to sign the document now. You will receive this completed document as a PDF via
      email by GACC California later for signing.</p>
    <p>After completing the Host Company Agreement please click on the tab “DS-7002 Training plan” at the top of the
      page and fill in all required information for this form as well.</p>
  </div>

  <input type="hidden" name='lastNameFirstName' value="{{isset($datas['lastNameFirstName'])?$datas['lastNameFirstName']:''}}" />
  <input type="hidden" name='applicantId' value="{{isset($datas['appli']['Id'])?$datas['appli']['Id']:''}}" />
  <input type="hidden" name='Contact__c' value="{{isset($datas['appli']['Contact__c'])?$datas['appli']['Contact__c']:''}}" />
  <input type="hidden" name='NewGdriveID__c' value="{{isset($datas['appli']['NewGdriveID__c'])?$datas['appli']['NewGdriveID__c']:''}}" />
  <input type="hidden" name='HostCompany_Gdrive_Folder_Id__c' value="{{isset($datas['appli']['HostCompany_Gdrive_Folder_Id__c'])?$datas['appli']['HostCompany_Gdrive_Folder_Id__c']:''}}" />
  <input type="hidden" name='onfrmId' value="{{isset($datas['onfrm']['Id'])?$datas['onfrm']['Id']:''}}" />
  <input type="hidden" name='Google_Drive_Folder__c' value="{{isset($datas['appli']['Google_Drive_Folder__c'])?$datas['appli']['Google_Drive_Folder__c']:''}}" />


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
    <div class="gaccca-form-element gaccca-form-element-margin">
      <h4>1 Program Responsibilities</h4>
      <p>The German American Chamber of Commerce California (GACC California) is a U.S. Department of State designated
        Exchange Visitor Program sponsor under U.S. Department of State regulations governing the Exchange Visitor
        Program (22 C.F.R. § 62).</p>
      <p>The Host Company understands and agrees to the objectives of this internship or training; to enhance the
        intern or trainee’s skills and knowledge in his/her specialty or occupation through participation in a
        structured internship or training program, as detailed in the Host Company provided Training/Internship
        Placement Plan (DS-7002), and to improve the intern or trainee’s knowledge of U.S. business techniques,
        expertise, and methods through participation in this program.</p>
      <p>The Host Company understands that GACC California as a U.S. Department of State designated visa sponsor under
        the Exchange Visitor Program reserves the right to withdraw sponsorship of any intern or trainee in the event
        of non-compliance with program regulations (22 C.F.R. § 62.22) or any deviation from the Training/Internship
        Placement Plan (DS-7002).</p>
      <p>The Host Company understands that U.S. Government agencies have jurisdiction over the Exchange Visitor
        Program and immigration matters and have the right to exercise discretion in administering their
        responsibilities. GACC California cannot guarantee the likelihood of success in any visa application or the
        amount of time in which an application may be processed.</p>
      <p>Confidentiality: Host Company and the German American Chamber of Commerce California, hereby referred to as
        GACC California, agree that any information of a confidential nature disclosed between each other to agents,
        employees, partners, with or on behalf of each other shall remain strictly confidential. Confidential
        information includes, but is not limited to, procedures, policies, and methods in the form of documents,
        contracts, manuals, verbal communication, communication by phone, email, fax or otherwise, services, financial
        statements or information, or any other forms in which information may be disclosed.</p>
      <p>Relationship Terms: GACC California and the Host Company are independent companies and free to engage in
        normal business operations and activities without limitation or interference. The relationship between the
        parties is valid for the period of the internship or training listed above unless terminated or ended by
        either party according to the terms of this Agreement.</p>
      <p>Publication Usage: Host Company shall permit GACC California to use its name, logo, or trademark on its
        website or in publications unless otherwise requested not to do so in writing.</p>
      <p>Expenses: Host Company is responsible for any and all expenses incurred by the Host Company and any and all
        work-related expenses incurred by the intern or trainee on behalf of the Host Company while on the job. This
        includes, but is not limited to, job-related transportation, business supplies, telephone usage, postage, and
        office or business lease payments required by the Host Company as part of the intern or trainee’s
        responsibilities and tasks. Neither GACC California nor the Host Company shall be responsible for living
        expenses incurred by the trainee or intern; this includes costs to commute to and from the Host Organization,
        accommodation, etc, unless otherwise agreed upon in writing.</p>
      <p>Taxes: The Host Company shall be responsible for reporting and ensuring that all applicable Local, State and
        Federal employment taxes are paid, including estimated taxes, pertaining to the services provided by the Host
        Company under the terms of this Agreement, as required by law.</p>


      <h4>2 Host Company Responsibilities</h4>
      <p>The Host Company, listed above, agrees to:</p>
      <ul>

        <li>Read and familiarize itself with U.S. Department of State regulations and responsibilities governing the
          Exchange Visitor Program (22 C.F.R. § 62) and abide by all applicable USCIS laws, U.S. Department of State
          regulations, and GACC California internship/training program guidelines;</li>
        <li>Promptly notify GACC California of any changes, deviations, or concerns about the Training/Internship
          Placement Plan (DS-7002) during the program (22 C.F.R. § 62 (h)(1)(i)).);</li>
        <li>Provide GACC California with written copies of any additional agreements between the Host Company and
          intern or trainee regarding accommodation or transportation, if provided by the Host Company;</li>
        <li>Immediately notify GACC California if the internship or training program is discontinued, canceled, or
          terminated for any reason. Furthermore, the Host Company understands that the intern or trainee must depart
          the U.S. within 30 days of program termination, or earlier if instructed to do so by GACC California or a
          governmental authority;</li>
        <li>Abide of all laws (Federal, State and Local) regarding health and safety, as well as all GACC California
          program rules and regulations. Host Company agrees to contact GACC California immediately in the event of
          any emergency situation involving the intern or trainee;</li>
        <li>Not to use the intern or trainee for unskilled or casual labor positions, positions involving elder or
          child care, or any positions that involve patient care or contact. This includes, but is not limited to
          patient care involving physical therapy, sports, psychological counseling, dentistry, nursing, veterinary
          medicine, speech therapy, social work, and early childhood education that could put the U.S. Department of
          State, the Exchange Visitor Program and/or GACC California in a position of disrepute. Furthermore, the Host
          Company agrees not to assign the intern or trainee more than 20% clerical work or work that is not necessary
          for the successful completion of the internship or training program (22 C.F.R. § 62.22 (j)(1-4).);</li>
        <li>Inform GACC California immediately if Host Company finds out that intern or trainee has been provided
          employment outside of the Host Company and instruct the intern or trainee to terminate the outside
          employment immediately;</li>
        <li>Not use the internship or training program to displace American workers or as substitute for a position
          where one would normally hire a regular employee for work purposes;</li>
        <li>Complete and provide GACC California with signed copies of the required mid-point and final evaluations of
          the intern or trainee in a timely manner;</li>
        <li>Respect the J-1 sponsorship authority of GACC California and cooperate with GACC California staff and
          representatives in all aspects of the program whenever necessary;</li>
        <li>Provide the intern or trainee with an appropriate orientation at the beginning of the internship or
          training program to orient them to the Host Company and ensure they understand the Host Company rules,
          resources, equipment, personnel, and safety regulations.</li>
      </ul>

      <h4>3 Hold Harmless</h4>
      <p>The Host Company hereby promises, undertakes and guarantees to hold harmless and to indemnify the German
        American Chamber of Commerce California and all other persons connected with the program and application
        process from all liabilities, claims, actions, damages, expenses and losses of any nature whatsoever caused by
        or arising from any aspect of the internship/training, and to hold GACC California, its officers, and
        representatives harmless in the event of any liabilities, actions, claims, expenses, damages, or losses
        incurred through any act, omission, or error of the Host Company, its agents, or representatives, and/or
        intern or trainee activities, except in the event of willful negligence on the part of GACC California</p>
      <p>The Host Company understands the risks of taking on an intern or trainee, which include, but are not limited
        to, termination of the position; the intern or trainee getting fired; injury to the intern or trainee;
        business bankruptcy; reduction of Host Company personnel; disappointment with the internship or training
        program; changes in immigration laws or regulations; injury or death due to travel by air, water, or land;
        acts of God; physical or mental disease, injury, or defect.</p>
      <p>The Host Company has been informed of the procedures and costs involved in preparation for and participation
        in the internship or training program. Furthermore, the Host Company understands that GACC California cannot
        guarantee the result of outcome of any internship or training program. The Host Company understands that GACC
        California has made reasonable efforts to ensure program success but cannot ensure that problems will not
        occur which could to firing, termination, or expulsion of the intern or trainee. GACC California reserves the
        right to terminate the program based on its judgment and discretion.</p>
      <p>The Host Company agrees to not hold GACC California liable in the event that the intern or trainee does not
        succeed in completing the program and agrees that the internship or training procedures and expectations have
        been presented and explained to its understanding and satisfaction.</p>

      <h4>4 Choice of Law</h4>
      <p>Any and all disputes arising under or out of this Agreement shall be governed by and resolved in accordance
        with the laws of the State of California, USA. No other law shall be applicable. Any lawsuit arising out of
        this Agreement, or in connection with this Agreement in any manner, may only be brought in San Diego County,
        California, USA.</p>

      <h4>5 Final Reminders</h4>
      <p>Host Company agrees that the intern or trainee will be continuously supervised for the duration of the
        program and that the intern or trainee’s performance will be evaluated. Furthermore, the Host Company
        understands that both the Host Company and the intern or trainee must complete, sign, and return the required
        mid-point and final evaluations provided by GACC California when instructed to do so.</p>
      <p>Host Company agrees to notify GACC California in writing if the intern or trainee fails to begin the program
        as scheduled, quits or abandons the program, or is terminated for any reason before the official end date
        listed on Agreement and on the Training/Internship Placement Plan (DS-7002).</p>
      <p>Host Company understands that GACC California must be informed of any changes in the intern or trainee’s
        supervision and contact information, including the site of activity where the internship or training is taking
        place, and/or if any difficulties arise that may affect the successful completion of the program. Furthermore,
        the Host Company is aware that changes in the intern or trainee’s program dates, activities, or location must
        first have written approval from GACC California. Any changes without GACC California knowledge or consent max
        require a new Training/Internship Placement Plan (DS-7002) to be approved and may incur additional
        administrative fees.</p>
      <p>Host Company is aware that the intern or training is strictly prohibited from participating in any outside
        employment and that such employment or intend to accept outside employment must be reported to GACC California
        and that failure to do so may result in the termination of the internship or training program.</p>
      <p>Host Company is aware that the internship or training must be completed on the end date listed in this
        Agreement and on the Training/Internship Placement Plan (DS-7002) and that the intern or trainee must leave
        the U.S. within 30 days of the end date of the program.</p>
      <p>By signing below, I certify that I am the Supervisor (and Contact, if applicable) named at the top of the
        Agreement and that all information given above is true and accurate to the best of my knowledge and that I am
        authorized to sign this document on behalf of the Host Company.</p>





    </div>
  </div>


  <h2 class="gaccca-h2-padding">SECTION 1: APPLICANT INFORMATION</h2>
  <input type='hidden' value="{{$datas['EncId']}}" name='EncId' />
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Name of Intern/Trainee <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input type="text" name="onfrm[Name_of_Intern__c]" value="{{isset($datas['onfrm']['Name_of_Intern__c'])?$datas['onfrm']['Name_of_Intern__c']:''}}" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Training/Internship Dates from <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="startDate" value="{{isset($datas['startDate'])?$datas['startDate']:''}}" type="text" class="gaccca-input-date gaccca-required" readonly />
          <span class="gaccca-input-help-text">From</span>

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Training/Internship Dates to <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="endDate" value="{{isset($datas['endDate'])?$datas['endDate']:''}}" type="text" class="gaccca-input-date gaccca-required" readonly />
          <span class="gaccca-input-help-text">to</span>

        </div>
      </div>
    </div>










  </div>




  <h2 class="gaccca-h2-padding">SECTION 2: HOST COMPANY INFORMATION</h2>
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Host Company Name <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Name_of_Host_Company__c]" value="{{isset($datas['onfrm']['Name_of_Host_Company__c'])?$datas['onfrm']['Name_of_Host_Company__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Host Company Website <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Website_URL__c]" value="{{isset($datas['onfrm']['Website_URL__c'])?$datas['onfrm']['Website_URL__c']:''}}" type="text" class="gaccca-input gaccca-required" />


        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Parent Company <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Parent_Company__c]" value="{{isset($datas['onfrm']['Parent_Company__c'])?$datas['onfrm']['Parent_Company__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Host Company location (of site of activity) / City
          <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[City__c]" value="{{isset($datas['onfrm']['City__c'])?$datas['onfrm']['City__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Address <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <textarea name="onfrm[Current_U_S_Address__c]" placeholder="Enter Your Address" class="gaccca-textarea gaccca-required">{{isset($datas['onfrm']['Current_U_S_Address__c'])?$datas['onfrm']['Current_U_S_Address__c']:''}}</textarea>
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Suite <span class="gaccca-text-required" title="required"></span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Suite__c]" value="{{isset($datas['onfrm']['Suite__c'])?$datas['onfrm']['Suite__c']:''}}" type="text" id="text-input-id-9" class="gaccca-input" />
        </div>
      </div>
    </div>





    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">State
          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">


            {!! Form::select('onfrm[State1__c]', array_reverse($datas['statePick']), isset($datas['onfrm']['State1__c'])?$datas['onfrm']['State1__c']:'', [ 'class' => 'gaccca-select gaccca-required']) !!}

          </div>
        </div>
      </div>

    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Zip_Code__c]" value="{{isset($datas['onfrm']['Zip_Code__c'])?$datas['onfrm']['Zip_Code__c']:''}}" type="text" id="text-input-id-10" placeholder="Zip Code" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>





    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">How many branches/ Subsidiary location does the
          company have?

          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">
            <!-- <select class="gaccca-select" id="select-tod">
                <option>select</option>

              </select> -->
            {!! Form::select('onfrm[branches__c]', $datas['branchesPick'], isset($datas['onfrm']['branches__c'])?$datas['onfrm']['branches__c']:'', [ 'class' => 'gaccca-select gaccca-required']) !!}

          </div>
        </div>
      </div>

    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Employer ID Number (EIN) <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Employer_ID_Number_EIN__c]" value="{{isset($datas['onfrm']['Employer_ID_Number_EIN__c'])?$datas['onfrm']['Employer_ID_Number_EIN__c']:''}}" type="text" class="gaccca-input gaccca-required" />
          <span class="gaccca-input-help-text">9 Digit Number; please use the following format: 123456789 (without
            "-")</span>
        </div>
      </div>
    </div>









    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label">
            Is your company’s gross annual revenue over $3 million? <span class="gaccca-text-required" title="required">*</span> </label>



          @include('common.radioGrp',['fieldName' =>'cmpnyRevenue','obj'=>'onfrm','fieldApi'=>'is_gross_annual_revenue_gt_3m__c','required'=>'', 'className'=>' gaccca-required '])

        </div>

      </div>

    </div>




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Please summarize your company’s business activities <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[summarize_company_business__c]" value="{{isset($datas['onfrm']['summarize_company_business__c'])?$datas['onfrm']['summarize_company_business__c']:''}}" type="text" class="gaccca-input gaccca-required" />
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Total # of full time employees at site of activity <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[no_of_full_time_employees_at_site__c]" value="{{isset($datas['onfrm']['no_of_full_time_employees_at_site__c'])?$datas['onfrm']['no_of_full_time_employees_at_site__c']:''}}" type="text" class="gaccca-input gaccca-required" />
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Total # of full time employees company-wide <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[no_of_full_time_employees_company__c]" value="{{isset($datas['onfrm']['no_of_full_time_employees_company__c'])?$datas['onfrm']['no_of_full_time_employees_company__c']:''}}" type="text" class="gaccca-input gaccca-required" />
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Total # of J-1 interns or trainees at site of activity including those of other J-1 Sponsors <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[no_of_J1_interns__c]" value="{{isset($datas['onfrm']['no_of_J1_interns__c'])?$datas['onfrm']['no_of_J1_interns__c']:''}}" type="text" class="gaccca-input gaccca-required" />
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Have you worked with other visa sponsors before? </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Have_you_worked_with_other_visa_sponsors__c]" value="{{isset($datas['onfrm']['Have_you_worked_with_other_visa_sponsors__c'])?$datas['onfrm']['Have_you_worked_with_other_visa_sponsors__c']:''}}" type="text" id="text-input-id-10" class="gaccca-input" />
          <span class="gaccca-input-help-text">If yes, please specify:</span>
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Workers Compensation Insurance Policy Provider <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Workers_Comp_Inc_Policy_Provider__c]" value="{{isset($datas['onfrm']['Workers_Comp_Inc_Policy_Provider__c'])?$datas['onfrm']['Workers_Comp_Inc_Policy_Provider__c']:''}}" type="text" class="gaccca-input gaccca-required" />
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Workers Compensation Policy Number <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Workers_Compensation_Policy_Number__c]" value="{{isset($datas['onfrm']['Workers_Compensation_Policy_Number__c'])?$datas['onfrm']['Workers_Compensation_Policy_Number__c']:''}}" type="text" class="gaccca-input gaccca-required" />
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Workers Compensation Policy expiration date <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <input name="policyExpDate" value="{{isset($datas['policyExpDate'])?$datas['policyExpDate']:''}}" type="text" class="gaccca-input-date gaccca-required" readonly />
        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Please upload a scan of your Workers Compensation Certificate (jpg or pnp) </label>
        <div class="gaccca-form-element__control">
          <label class="gaccca-file">
            <input name="fileCertificate" type="file" />
            <span class="gaccca-file-custom">Choose file...</span>

          </label>
        </div>
        <span class="gaccca-input-help-text">The U.S. Department of State requires verification of your company’s
          certificate of Workers’ Compensation. Please submit a copy of the certificate or statement of waiver to GACC
          California along with this Agreement.</span>

      </div>

    </div>









  </div>



  <h2 class="gaccca-h2-padding">SECTION 3: HOST COMPANY SUPERVISOR AND CONTACT PERSON</h2>
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">




    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p> <strong> Supervisor: </strong> The person responsible for supervising the future intern/trainee during
          their training.</p>

        <p> <strong> Company contact: </strong> The person that will be in communication with the GACC California
          regarding visa documents and procedures.</p>

      </div>
    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Supervisor Name <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Name_of_Supervisor__c]" value="{{isset($datas['onfrm']['Name_of_Supervisor__c'])?$datas['onfrm']['Name_of_Supervisor__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Supervisor Position <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Supervisor_Position__c]" value="{{isset($datas['onfrm']['Supervisor_Position__c'])?$datas['onfrm']['Supervisor_Position__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Supervisor Email <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Supervisor_Email__c]" value="{{isset($datas['onfrm']['Supervisor_Email__c'])?$datas['onfrm']['Supervisor_Email__c']:''}}" type="email" class="gaccca-input gaccca-email gaccca-required" />

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Supervisor Phone <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Supervisor_Phone__c]" value="{{isset($datas['onfrm']['Supervisor_Phone__c'])?$datas['onfrm']['Supervisor_Phone__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Qualifications of Supervisor <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Qualifications_of_Supervisor__c]" value="{{isset($datas['onfrm']['Qualifications_of_Supervisor__c'])?$datas['onfrm']['Qualifications_of_Supervisor__c']:''}}" type="text" class="gaccca-input gaccca-required" />

          <span class="gaccca-input-help-text">degree, work experience, employed since etc.</span>
        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Company Contact Name <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Company_Contact_Name__c]" value="{{isset($datas['onfrm']['Company_Contact_Name__c'])?$datas['onfrm']['Company_Contact_Name__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Company Contact Position <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Company_Contact_Position__c]" value="{{isset($datas['onfrm']['Company_Contact_Position__c'])?$datas['onfrm']['Company_Contact_Position__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Contact Email <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Contact_Email__c]" value="{{isset($datas['onfrm']['Contact_Email__c'])?$datas['onfrm']['Contact_Email__c']:''}}" type="email" class="gaccca-input gaccca-email gaccca-required" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Contact Phone <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Contact_Phone__c]" value="{{isset($datas['onfrm']['Contact_Phone__c'])?$datas['onfrm']['Contact_Phone__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>





  </div>



  <h2 class="gaccca-h2-padding">SECTION 4: INTERNSHIP / TRAINING</h2>
  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">









    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">

        <div class="gaccca-form-element__control">
          <label class="gaccca-form-element__label">
            The Host Company is offering a<span class="gaccca-text-required" title="required">*</span> </label>
          <span class="gaccca-radio">
            <input type="radio" id="radio-position-no" value="paid position" name="cmpnyPosition" class='gaccca-required' {{isset($datas['onfrm']['Host_Company_Offering__c']) && $datas['onfrm']['Host_Company_Offering__c']=='paid position'?'checked':''}} />
            <label class="gaccca-radio__label" for="radio-position-no">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Paid Position</span>
            </label>
            <input type="radio" id="radio-position-yes" value="unpaid position" name="cmpnyPosition" class='gaccca-required' {{isset($datas['onfrm']['Host_Company_Offering__c']) && $datas['onfrm']['Host_Company_Offering__c']=='unpaid position'?'checked':''}} />
            <label class="gaccca-radio__label" for="radio-position-yes">
              <span class="gaccca-radio_faux"></span>
              <span class="gaccca-padding-right-25">Unpaid Position</span>
            </label>
          </span>

        </div>

      </div>

    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          The stipend amount per hour/week/month is </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[stipend_amount_per_hour_week_month__c]" value="{{isset($datas['onfrm']['stipend_amount_per_hour_week_month__c'])?$datas['onfrm']['stipend_amount_per_hour_week_month__c']:''}}" type="text" class="gaccca-input" />


        </div>
      </div>
    </div>






    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <h4>Additional compensation offered by the Host Company:</h4>

      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Value of housing in USD </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Value_of_housing_in_USD__c]" value="{{isset($datas['onfrm']['Value_of_housing_in_USD__c'])?$datas['onfrm']['Value_of_housing_in_USD__c']:''}}" type="text" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Value of transportation in USD </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Value_of_transportation_in_USD__c]" value="{{isset($datas['onfrm']['Value_of_transportation_in_USD__c'])?$datas['onfrm']['Value_of_transportation_in_USD__c']:''}}" type="text" class="gaccca-input" />

        </div>
      </div>
    </div>



    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Flight expenses in USD </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Flight_expenses_in_USD__c]" value="{{isset($datas['onfrm']['Flight_expenses_in_USD__c'])?$datas['onfrm']['Flight_expenses_in_USD__c']:''}}" type="text" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Other (please specify) </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Other_please_specify__c]" value="{{isset($datas['onfrm']['Other_please_specify__c'])?$datas['onfrm']['Other_please_specify__c']:''}}" type="text" class="gaccca-input" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          Field of internship / training <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[Current_Field_of_Study_Profession__c]" value="{{isset($datas['onfrm']['Current_Field_of_Study_Profession__c'])?$datas['onfrm']['Current_Field_of_Study_Profession__c']:''}}" type="text" class="gaccca-input gaccca-required" />

        </div>
      </div>
    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label">
          How many hours per week will be the intern / trainee be trained? <span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element__control">
          <input name="onfrm[How_many_hours_per_week__c]" value="{{isset($datas['onfrm']['How_many_hours_per_week__c'])?$datas['onfrm']['How_many_hours_per_week__c']:''}}" type="text" class="gaccca-input gaccca-required" />
          <br /><span>minimum of 32 hrs, maximum of 40 hrs</span>
        </div>
      </div>
    </div>





    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



      <div class="gaccca-form-element gaccca-form-element-margin">

        <label class="gaccca-form-element__label">
          Where will the intern/trainee perform his tasks?
          <span class="gaccca-text-required" title="required">*</span> </label>

        <div class="gaccca-form-element__control">
          <div class="gaccca-checkbox">
            <input type="checkbox" name="options[]" id="checkbox-unique-id-731" class='gaccca-required' value="home office" {{isset($datas['onfrm']['perform_task__c']) && stripos($datas['onfrm']['perform_task__c'],'ome office')?'checked':''}} />
            <label class="gaccca-checkbox__label" for="checkbox-unique-id-731">
              <span class="gaccca-checkbox_faux"></span>
              <span class="gaccca-form-element__label">home office</span>
            </label>

            <input type="checkbox" name="options[]" id="checkbox-unique-id-732" class='gaccca-required' value="at a retail location" {{isset($datas['onfrm']['perform_task__c']) && stripos($datas['onfrm']['perform_task__c'],'t a retail location')?'checked':''}} />
            <label class="gaccca-checkbox__label" for="checkbox-unique-id-732">
              <span class="gaccca-checkbox_faux"></span>
              <span class="gaccca-form-element__label">at a retail location</span>
            </label>

            <input type="checkbox" name="options[]" id="checkbox-unique-id-733" class='gaccca-required' value="at an office building / corporate office" {{isset($datas['onfrm']['perform_task__c']) && stripos($datas['onfrm']['perform_task__c'],'t an office building / corporate office')?'checked':''}} />
            <label class="gaccca-checkbox__label" for="checkbox-unique-id-733">
              <span class="gaccca-checkbox_faux"></span>
              <span class="gaccca-form-element__label">at an office building / corporate office
              </span>
            </label>
          </div>
        </div>
      </div>

    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        <p>
          Please save the Host Company Agreement one last time before sending it to GACC California.</p>

      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
        @if (isset($datas['isHostCompanyReadonly']) && $datas['isHostCompanyReadonly'])
        <p>
          Host company agreement information sent.


        </p>
        @else
        <input type='hidden' name='formSubmitType' id='formSubmitType' />
        <span id='save-ds-7002' class="gaccca-button-save gaccca-button-save-margin">Save Host Company Agreement</span>
        <button id='send-to-gaccca-btn' class="gaccca-button-save-green gaccca-button-save-margin">Send to GACC California</button>
        @endif
      </div>
    </div>






  </div>


</div>


{!! Form::close() !!}
@if (isset($datas['isHostCompanyReadonly']) && $datas['isHostCompanyReadonly'])
@else
<script>
  $(document).ready(function() {
        var errors = [];
        $("#send-to-gaccca-btn").on('click', function() {
          document.getElementById('formSubmitType').value = 'Sent';
          $('.gaccca-required').prop('required', true);
          document.getElementById('loader').style.display = 'block';
          errors = [];
          $('#HCA-plan').parsley().validate();
          if ($('#HCA-plan').parsley().isValid()) {} else {

            document.getElementById('loader').style.display = 'none';
          }
        });

        $("#save-ds-7002").on('click', function() {

          document.getElementById('formSubmitType').value = 'Save';
          $('.gaccca-required').prop('required', false);
          $(".gaccca-email").each(function(index) {
            $(this).prop('required', $(this).val().trim().length != 0)
          })
          document.getElementById('loader').style.display = 'block';
          errors = [];
          $('#HCA-plan').parsley().validate();
          if ($('#HCA-plan').parsley().isValid()) {
            $('#HCA-plan').submit();
          } else {

            document.getElementById('loader').style.display = 'none';
          }



        });
      });
</script>
@endif
@include('common.footer')
@else
Permission denied. Please contact administrator.
@endif