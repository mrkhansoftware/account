@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Review your J1 Application','page'=>'j1_review_your_application_account','parent_page'=>'J1 Program'])
@include('common.signScript');

{!! Form::open(['action' => 'J1ReviewApplicationAccountController@store', 'data-parsley-validate', 'method' => 'POST',
'id' => 'gacccaForm_j1review']) !!}


<div class="gaccca-main-containt gaccca-gutters">
    <h1 class="gaccca-h1-padding">Review your Application</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please review your Application and click the confirmation button.</p>
    </div>
    <h2 class="gaccca-h2-padding">Participant Information</h2>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

            <div class="gaccca-form-element gaccca-form-element-margin">

                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Do you have a dual citizenship? <span class="gaccca-text-required" title="required">*</span>
                    </label>



                    <span class="gaccca-radio">


                        {!! Form::radio('applicant[Do_you_have_dual_citizenship__c]',
                        'No',isset($datas['Appli']['Do_you_have_dual_citizenship__c'])?($datas['Appli']['Do_you_have_dual_citizenship__c']=='No'?true:false):false,array('id'=>'radio-citizenship-no','disabled' => 'disabled')); !!}


                        <label class="gaccca-radio__label" for="radio-citizenship-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                        </label>

                        {!! Form::radio('applicant[Do_you_have_dual_citizenship__c]',
                        'Yes',isset($datas['Appli']['Do_you_have_dual_citizenship__c'])?($datas['Appli']['Do_you_have_dual_citizenship__c']=='Yes'?true:false):false,array('id'=>'radio-citizenship-yes'
                        ,'disabled' => 'disabled')); !!}

                        <label class="gaccca-radio__label" for="radio-citizenship-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes </span>
                        </label>
                    </span>

                </div>

            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-c">
                    <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">

                    {!!
                    Form::text('applicant[Citizenship__c]',isset($datas['Appli']['Citizenship__c'])?$datas['Appli']['Citizenship__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                    <span class="gaccca-input-help-text">Please also list your dual here.</span>
                </div>
            </div>

            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-colpr">
                    Country of Legal Permanent Residency <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">


                    {!!
                    Form::text('applicant[Country_of_Legal_Permanent_Residency__c]',isset($datas['Appli']['Country_of_Legal_Permanent_Residency__c'])?$datas['Appli']['Country_of_Legal_Permanent_Residency__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}


                </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-us-visa">
                    Have you ever applied for a US visa? <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">

                    {!!
                    Form::text('applicant[haveYouEverAppliedForUSVisa__c]',isset($datas['Appli']['haveYouEverAppliedForUSVisa__c'])?$datas['Appli']['haveYouEverAppliedForUSVisa__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}
                    <span class="gaccca-input-help-text">Please provide type of visa and expiration date as well as
                        information about any previous visa denials</span>
                </div>
            </div>






            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">Country of Birth
                    <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                    <div class="gaccca-select_container">
                        {!!
                        Form::text('applicant[Country_of_Birth__c]',isset($datas['Appli']['Country_of_Birth__c'])?$datas['Appli']['Country_of_Birth__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                    </div>
                </div>
            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-cob">
                    City of Birth <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">

                    {!!
                    Form::text('applicant[City_of_birth__c]',isset($datas['Appli']['City_of_birth__c'])?$datas['Appli']['City_of_birth__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                </div>

            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-ms">Marital Status
                    <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                    <div class="gaccca-select_container">

                        {!!
                        Form::text('applicant[Maritial_Status__c]',isset($datas['Appli']['Maritial_Status__c'])?$datas['Appli']['Maritial_Status__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}


                    </div>
                </div>
            </div>
            <br />





            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ecp">
                    Emergency Contact Person outside the US <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">

                    {!!
                    Form::text('applicant[Emergency_Contact_Person_outside_the_US__c]',isset($datas['Appli']['Emergency_Contact_Person_outside_the_US__c'])?$datas['Appli']['Emergency_Contact_Person_outside_the_US__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                    <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
                </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ecp">
                    Relationship to Applicant <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    {!!
                    Form::text('applicant[Relationship_to_Applicant__c]',isset($datas['Appli']['Relationship_to_Applicant__c'])?$datas['Appli']['Relationship_to_Applicant__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}
                    <span class="gaccca-input-help-text">Please define the relationship between you and your emergency
                        contact
                        person, e.g. mother, father, sister, boyfriend, etc.</span>
                </div>
            </div>




            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-e-email">
                    Emergency Contact Person Email Address <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">


                    {!!
                    Form::text('applicant[Emergency_Contact_Person_Email_Address__c]',isset($datas['Appli']['Emergency_Contact_Person_Email_Address__c'])?$datas['Appli']['Emergency_Contact_Person_Email_Address__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}


                    <span class="gaccca-input-help-text">Please list a person to contact in case of emergency.</span>
                </div>
            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-e-phone">
                    Emergency Contact Person Phone Number <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">

                    {!!
                    Form::text('applicant[Emergency_Contact_Person_PhoneNumber__c]',isset($datas['Appli']['Emergency_Contact_Person_PhoneNumber__c'])?$datas['Appli']['Emergency_Contact_Person_PhoneNumber__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                    <span class="gaccca-input-help-text">Please always provide the country code..</span>
                </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-e-address">
                    Emergency Contact Person Address <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                    {!!
                    Form::textarea('applicant[Emergency_Contact_Person_Address__c]',isset($datas['Appli']['Emergency_Contact_Person_Address__c'])?$datas['Appli']['Emergency_Contact_Person_Address__c']:'',array('class'=>'gaccca-textarea','disabled' => 'disabled')); !!}

                    <span class="gaccca-input-help-text">Street, App #, Zip Code, City, Country</span>
                </div>
            </div>

            <br />


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-nou">
                    Name of University <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">

                    {!!
                    Form::text('applicant[Name_of_University__c]',isset($datas['Appli']['Name_of_University__c'])?$datas['Appli']['Name_of_University__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                </div>
            </div>

            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-fos">
                    Field of Study <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">

                    {!!
                    Form::text('applicant[Field_of_Study__c]',isset($datas['Appli']['Field_of_Study__c'])?$datas['Appli']['Field_of_Study__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                </div>
            </div>





            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-tod">Type of Degree
                    <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                    <div class="gaccca-select_container">
                        {!!
                        Form::text('applicant[Type_of_Degree__c]',isset($datas['Appli']['Type_of_Degree__c'])?$datas['Appli']['Type_of_Degree__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}


                    </div>
                </div>
            </div>




            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-egd">
                    (Expected) Graduation Date <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    {!!
                    Form::text('graduationDate',isset($datas['graduationDate'])?$datas['graduationDate']:'',array('class'=>'gaccca-input-date','disabled' => 'disabled')); !!}

                </div>
            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-tod">Work Experience in your Field of Study after
                    Graduation
                    <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                    <div class="gaccca-select_container">
                        {!!
                        Form::text('applicant[Work_Experience_in_your_Field_of_Study_a__c]',isset($datas['Appli']['Work_Experience_in_your_Field_of_Study_a__c'])?$datas['Appli']['Work_Experience_in_your_Field_of_Study_a__c']:'',array('class'=>'gaccca-input','disabled' => 'disabled')); !!}

                    </div>
                </div>
            </div>
            <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__label">
                    <a href="/participant_information_account">To update information, open the form.</a>
                    @if (isset($datas['Appli']['Participant__c']) && $datas['Appli']['Participant__c'])
                    @else
                    <br /> <span class="gaccca-text-required" title="required">Please complete participant information
                        form.
                        <input type='text' class='gaccca-hide' required='required' />
                    </span>
                    @endif
                </div>
            </div>

            @if (isset($datas['Appli']['Hide_Host_Company_Information_in_Account__c']) &&
            $datas['Appli']['Hide_Host_Company_Information_in_Account__c'])
            @else
            <h2 class="gaccca-h2-padding">Host Company Information</h2>






            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-foi">
                    Field of Internship <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Field_of_Internship__c]"
                        value="{{isset($datas['Appli']['Field_of_Internship__c'])?$datas['Appli']['Field_of_Internship__c']:''}}"
                        id="text-input-id-foi"   disabled="disabled"
                        class="gaccca-input" />
                    <span class="gaccca-input-help-text">e.g. Marketing, Business Development, Mechanical<br />
                        Engineering, Architecture, Graphic Design
                    </span>
                </div>
            </div>

            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-colpr">
                    Scheduled Start Date of Internship/Training </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="scheduled_Start" disabled="disabled"
                        value="{{isset($datas['scheduled_Start'])?$datas['scheduled_Start']:''}}"
                        id="text-input-id-colpr"  class="gaccca-input-date" />

                </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-us-visa">
                    Scheduled End Date of Internship/Training </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="scheduled_End" disabled="disabled"
                        value="{{isset($datas['scheduled_End'])?$datas['scheduled_End']:''}}" id="text-input-id-us-visa"
                         class="gaccca-input-date" />
                    <span class="gaccca-input-help-text">Please provide type of visa and expiration date as well as
                        information about any previous visa denials</span>
                </div>
            </div>
            <br />




            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hcn">
                    Host Company Name <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Host_Company__c]"
                        value="{{isset($datas['Appli']['Host_Company__c'])?$datas['Appli']['Host_Company__c']:''}}"
                        id="text-input-id-hcn"   disabled="disabled"
                        class="gaccca-input" />

                </div>

            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hcn">
                    Host Company Website <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Host_Company_Website__c]"
                        value="{{isset($datas['Appli']['Host_Company_Website__c'])?$datas['Appli']['Host_Company_Website__c']:''}}"
                        id="text-input-id-hcn"  disabled="disabled"
                        class="gaccca-input" />

                </div>

            </div>




            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-e-address">
                    Host Company Address <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <textarea name="applicant['Address__c]"  
                        disabled="disabled"
                        class="gaccca-textarea">{{isset($datas['Appli']['Address__c'])?$datas['Appli']['Address__c']:''}}</textarea>

                </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-city">
                    City <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[City__c]"
                        value="{{isset($datas['Appli']['City__c'])?$datas['Appli']['City__c']:''}}"
                        id="text-input-id-city"   disabled="disabled"
                        class="gaccca-input" />

                </div>

            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-zipcode">
                    Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[ZIP_Code__c]"
                        value="{{isset($datas['Appli']['ZIP_Code__c'])?$datas['Appli']['ZIP_Code__c']:''}}"
                        id="text-input-id-zipcode"  disabled="disabled"
                        class="gaccca-input" />

                </div>

            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">State
                    <span class="gaccca-text-required" title="required">*</span>
                </label>
                <div class="gaccca-form-element__control">
                    <div class="gaccca-select_container">

                        <input type="text" name="applicant[State__c]"
                            value="{{isset($datas['Appli']['State__c'])?$datas['Appli']['State__c']:''}}"
                            id="text-input-id-hccp" 
                            disabled="disabled" class="gaccca-input" />

                    </div>
                </div>
            </div>

            <br />



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hccp">
                    Host Company Contact Person <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Contact_Person__c]"
                        value="{{isset($datas['Appli']['Contact_Person__c'])?$datas['Appli']['Contact_Person__c']:''}}"
                        id="text-input-id-hccp" 
                        disabled="disabled" class="gaccca-input" />
                    <span class="gaccca-input-help-text">Enter the name of the person who will be your supervisor/mentor
                        during your internship/training.</span>
                </div>
            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ccea">
                    Company Contact email address <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="email" name="applicant[Do_you_have_dual_citizenship__c]"
                        value="{{isset($datas['Appli']['Email_Address__c'])?$datas['Appli']['Email_Address__c']:''}}"
                        id="text-input-id-ccea"  
                        disabled="disabled" class="gaccca-input" />

                </div>

            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-ccp">
                    Company Contact phone <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Phone_Number__c]"
                        value="{{isset($datas['Appli']['Phone_Number__c'])?$datas['Appli']['Phone_Number__c']:''}}"
                        id="text-input-id-ccp"   disabled="disabled"
                        class="gaccca-input" />
                    <span class="gaccca-input-help-text">Use the following format +1-563-6325685</span>
                </div>

            </div>

            <br />


            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    Hours per week <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Hours_Per_Week__c]"
                        value="{{isset($datas['Appli']['Hours_Per_Week__c'])?$datas['Appli']['Hours_Per_Week__c']:''}}"
                        id="text-input-id-hpw"   disabled="disabled"
                        class="gaccca-input" />

                </div>

            </div>


            <div class="gaccca-form-element gaccca-form-element-margin">

                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Do you receive a stipend? <span class="gaccca-text-required" title="required">*</span> </label>


                    <span class="gaccca-radio">
                        {!! Form::radio('stipend',
                        'No',isset($datas['stipend'])?($datas['stipend']=='No'?true:false):false,array('id'=>'radio-no','disabled' => 'disabled')); !!}

                        <label class="gaccca-radio__label" for="radio-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                        </label>
                        {!! Form::radio('stipend',
                        'Yes',isset($datas['stipend'])?($datas['stipend']=='Yes'?true:false):false,array('id'=>'radio-yes','disabled' => 'disabled')); !!}

                        <label class="gaccca-radio__label" for="radio-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                        </label>
                    </span>






                </div>

            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    If yes, how much? <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[If_Yes_How_Much_Stipend__c]"
                        value="{{isset($datas['Appli']['If_Yes_How_Much_Stipend__c'])?$datas['Appli']['If_Yes_How_Much_Stipend__c']:''}}"
                        id="text-input-id-hpw"   disabled="disabled"
                        class="gaccca-input" />
                    <span class="gaccca-input-help-text">Please enter the amount paid to you per hour, week or month,
                        e.g 16 USD/hour, 1300 USD/month, 500 USD/week</span>
                </div>

            </div>
            <br />



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-vohiupm">
                    <strong>
                        Additional compensation offered by your host company :</strong>
                    <br /> - Value of Housing in USD per month <span class="gaccca-text-required"
                        title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Value_Of_Housing_In_USD_Per_Month__c]"
                        value="{{isset($datas['Appli']['Value_Of_Housing_In_USD_Per_Month__c'])?$datas['Appli']['Value_Of_Housing_In_USD_Per_Month__c']:''}}"
                        id="text-input-id-vohiupm" 
                        disabled="disabled" class="gaccca-input" />
                    <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>

            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-votiupm">
                    - Value of Transportation in USD per month <span class="gaccca-text-required"
                        title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Value_Of_Transportation_In_USD_Per_Month__c]"
                        value="{{isset($datas['Appli']['Value_Of_Transportation_In_USD_Per_Month__c'])?$datas['Appli']['Value_Of_Transportation_In_USD_Per_Month__c']:''}}"
                        id="text-input-id-votiupm"  
                        disabled="disabled" class="gaccca-input" />
                    <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>

            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-tfeiu">
                    - Total Flight Expenses in USD <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Total_Flight_Expenses_In_USD__c]"
                        value="{{isset($datas['Appli']['Total_Flight_Expenses_In_USD__c'])?$datas['Appli']['Total_Flight_Expenses_In_USD__c']:''}}"
                        id="text-input-id-tfeiu"  
                        disabled="disabled" class="gaccca-input" />
                    <span class="gaccca-input-help-text">If not applicable please fill in n/a</span>
                </div>

            </div>



            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="text-input-id-hpw">
                    - Other compensation <span class="gaccca-text-required" title="required">*</span> </label>
                <div class="gaccca-form-element__control">
                    <input type="text" name="applicant[Other_Compensation__c]"
                        value="{{isset($datas['Appli']['Other_Compensation__c'])?$datas['Appli']['Other_Compensation__c']:''}}"
                        id="text-input-id-hpw"   disabled="disabled"
                        class="gaccca-input" />
                    <span class="gaccca-input-help-text">If not applicable please fill in n/a. Please also name the
                        expense, e.g visa fee.</span>
                </div>

            </div>

            <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__label">
                    <a href="/host_company_information_account"> To update information, open the form. </a>
                    @if (isset($datas['Appli']['hostCompany__c']) && $datas['Appli']['hostCompany__c'])

                    @else
                    <br /> <span class="gaccca-text-required" title="required">Please complete the host company
                        information form. <input type='text' class='gaccca-hide' required='required' /></span>
                    @endif
                </div>
            </div>

            @endif

            <h2 class="gaccca-h2-padding">Finalize your application</h2>


            <div class="gaccca-form-element gaccca-form-element-margin">
                <p>Please download our current price list. @if (isset($datas['agencyPriceBookUrl']) &&
                    $datas['agencyPriceBookUrl']!=='')
                    <img src="{{ asset('images/PDFImage.png') }}" width="18" height="18"> <a
                        href="{{$datas['agencyPriceBookUrl']}}" target='_blank'>{{$datas['agencyName']}}</a>

                    @else
                    <img src="{{ asset('images/PDFImage.png') }}" width="18" height="18"> <a
                        href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzEv/W7fnG9Ll8sv.KD1o.l6v5kxqu16eMU6LQQwYgO6oNhY"
                        target='_blank'>GACC California price list</a>

                    @endif</p>


                <br />
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        I have received and read the program price list <span class="gaccca-text-required"
                            title="required">*</span> </label>

                    <span class="gaccca-radio">
                        <input type="radio" required='' id="radio-yes" value="yes" name="readPriceList"
                            disabled='disabled'
                            {{isset($datas['Appli']['Read_pricelist__c']) &&  $datas['Appli']['Read_pricelist__c']?'checked':''}} />
                        <label class="gaccca-radio__label" for="radio-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-form-element__label">Yes </span>
                        </label>
                    </span>

                    <span class="gaccca-input-help-text">Based on all submitted information and documents we as your J-1
                        Sponsor will choose the right visa category and program duration. Please refer to your invoice
                        you will receive after booking our service.</span>
                </div>
                <br />


                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        I would like to purchase the expedited service for an additional fee <span
                            class="gaccca-text-required" title="required">*</span> </label>

                    <span class="gaccca-radio">
                        <input type="radio" id="radio-purchase-no" disabled="disabled" value="no" name="expedited"
                            {{isset($datas['Appli']['Expedited__c']) &&  $datas['Appli']['Expedited__c']?'':'checked'}} />
                        <label class="gaccca-radio__label" for="radio-purchase-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                        </label>
                        <input type="radio" id="radio-purchase-yes" disabled="disabled" value="yes" name="expedited"
                            {{isset($datas['Appli']['Expedited__c']) &&  $datas['Appli']['Expedited__c']?'checked':''}} />
                        <label class="gaccca-radio__label" for="radio-purchase-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                        </label>
                    </span>


                    <span class="gaccca-input-help-text">Our average processing times are up to 10 weeks. If you are
                        applying for a J-1 visa on a tight deadline, our expedited service can help. Upon requesting the
                        expedited service we will guarantee processing times of 2 weeks after receiving all information
                        and documents from you and your host company and if no on-site visit is required.
                    </span>
                </div>
                <br />
                <h4>Health Insurance Information</h4>
                <p>German American Chamber of Commerce California, Inc., in accordance with the Bureau of Educational
                    and Cultural Affairs' (ECA) regulations for exchange visitors (22 CFR Part 514 [Rulemaking No.
                    101]), requires that all participants have health insurance in effect for the duration of their stay
                    in the United States. GACC California will not issue the DS-2019 form without having received this
                    completed form and funds to purchase insurance (if applicable).</p>
                <p>As a participant in our program, please be aware that you must purchase the Health Insurance policy
                    supplied by German American Chamber of Commerce California, Inc., which meets the requirements of
                    ECA regulations. More information on the health insurance rates can be found <a
                        href="https://www.j1-visa.com/j-1-insurance.html" target='_blank'> online.</a> You will be able
                    to choose your insurance rate and exact coverage period during your visa application process.</p>
                <p>Please note that government regulations for the J-1 Intern and Trainee programs permit you to arrive
                    in the U.S. up to 30 days before the beginning of your internship and to stay up to 30 days after
                    your internship ends. GACC California recommends that you maintain health insurance coverage for
                    your entire stay in the U.S. If you wish, you may purchase additional health insurance from GACC
                    California to cover the period before and/or after your internship.</p>




                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        I understand that the purchase of this health insurance package is a requirement of the GACC
                        California program. <span class="gaccca-text-required" title="required">*</span> </label>

                    <span class="gaccca-radio">
                        <input type="radio" id="radio-2yes" value="yes" name="healthInsurance" disabled='disabled'
                            {{isset($datas['Appli']['Understand_Insurance_Requirement__c']) &&  $datas['Appli']['Understand_Insurance_Requirement__c']?'checked':''}} />
                        <label class="gaccca-radio__label" for="radio-2yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-form-element__label">Yes</span>
                        </label>
                    </span>

                    <span class="gaccca-input-help-text">If you have any questions please contact us.</span>
                </div>



                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        I require a J-2 Visa for my spouse/children. <span class="gaccca-text-required"
                            title="required">*</span> </label>


                    <span class="gaccca-radio">
                        <input type="radio" id="radio-spouse-no" disabled="disabled" value="no" name="j2VisaSpouse"
                            {{isset($datas['Appli']['J_2_Visa_Required__c']) &&  $datas['Appli']['J_2_Visa_Required__c']?'':'checked'}} />
                        <label class="gaccca-radio__label" for="radio-spouse-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                        </label>
                        <input type="radio" id="radio-spouse-yes" disabled="disabled" value="yes" name="j2VisaSpouse"
                            {{isset($datas['Appli']['J_2_Visa_Required__c']) &&  $datas['Appli']['J_2_Visa_Required__c']?'checked':''}} />
                        <label class="gaccca-radio__label" for="radio-spouse-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                        </label>
                    </span>


                    <span class="gaccca-input-help-text">If J-2 is required we will contact you via email with further
                        information.</span>
                </div>


                <br />
                <div class="gaccca-form-element">
                    <label class="gaccca-form-element__label" for="text-input-id-people">
                        How many people need a J-2 visa?<span class="gaccca-text-required" title="required">*</span>
                    </label>
                    <div class="gaccca-form-element__control">
                        <input type="text" name='applicant[Number_of_j_2_visa__c]'
                            value="{{isset($datas['Appli']['Number_of_j_2_visa__c'])?$datas['Appli']['Number_of_j_2_visa__c']:''}}"
                            id="text-input-id-people"   disabled="disabled"
                            class="gaccca-input" />
                    </div>
                </div>
                <br />
                <div class="gaccca-form-element">
                    <label class="gaccca-form-element__label" for="select-01">How did you hear about the program?<span
                            class="gaccca-text-required">*</span></label>
                    <div class="gaccca-form-element__control">
                        <div class="gaccca-select_container">
                            <input type="text" name="applicant[How_did_you_hear_about_the_program__c]"
                                value="{{isset($datas['Appli']['How_did_you_hear_about_the_program__c'])?$datas['Appli']['How_did_you_hear_about_the_program__c']:''}}"
                                id="text-input-id-hpw"  
                                disabled="disabled" class="gaccca-input" />

                        </div>
                    </div>
                </div>



                <br>
                <div class="gaccca-form-element__control">
                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Have you previously applied to the J-1 program with another sponsor? <span
                            class="gaccca-text-required" title="required">*</span> </label>

                    <span class="gaccca-radio">
                        <input type="radio" id="radio-j1applied-no" disabled="disabled" value="no" name="j1Sponsor"
                            {{isset($datas['j1Sponsor']) &&  $datas['j1Sponsor']?'':'checked'}} />
                        <label class="gaccca-radio__label" for="radio-j1applied-no">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">No</span>
                        </label>
                        <input type="radio" id="radio-j1applied-yes" disabled="disabled" value="yes" name="j1Sponsor"
                            {{isset($datas['j1Sponsor']) &&  $datas['j1Sponsor']?'checked':''}} />
                        <label class="gaccca-radio__label" for="radio-j1applied-yes">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Yes</span>
                        </label>
                    </span>



                </div>
            </div>

            <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__label">
                    <a href="/finalize_application_account">To update information, open the form.</a>
                    @if (isset($datas['Appli']['finnalize__c']) && $datas['Appli']['finnalize__c'])
                    @else
                    <br /> <span class="gaccca-text-required" title="required">Please complete finalize your application
                        form. <input type='text' class='gaccca-hide' required='required' /></span>
                    @endif
                </div>
            </div>

            <h2 class="gaccca-h2-padding">Confirmation and Submit</h2>
            <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    <span class="gaccca-form-element__label">I confirm the correctness of these information <span
                            class="gaccca-text-required" title="required">*</span></span>
                    <div class="gaccca-checkbox">
                        <input type="checkbox" name="confirm" id="checkbox-unique-id-73" value="Yes" required='required'
                            {{(isset($datas['Appli']['Confirm__c']) && $datas['Appli']['Confirm__c'])?'checked disabled':''}} />
                        <label class="gaccca-checkbox__label" for="checkbox-unique-id-73">
                            <span class="gaccca-checkbox_faux"></span>
                            <span class="gaccca-form-element__label">Yes</span>
                        </label>
                    </div>
                </div>
            </div>
            @if (isset($datas['Appli']['Confirm__c']) && $datas['Appli']['Confirm__c'])
@else
            @include('common.signHTML');

            <div class="gaccca-form-element gaccca-form-element-margin">
                @if ((isset($datas['Appli']['finnalize__c']) && $datas['Appli']['finnalize__c']) ||
                (isset($datas['Appli']['hostCompany__c']) && $datas['Appli']['hostCompany__c']) ||
                (isset($datas['Appli']['Participant__c']) && $datas['Appli']['Participant__c']))

                @else
                <span class="gaccca-text-required" title="required">Please complete all given required forms
                    above.<br /> @endif
                    
                    <button id="gaccca_saveBtn_j1review" class="gaccca-button-save "
                        {{((isset($datas['Appli']['finnalize__c']) && !$datas['Appli']['finnalize__c']) || (isset($datas['Appli']['hostCompany__c']) && !$datas['Appli']['hostCompany__c']) || (isset($datas['Appli']['Participant__c']) && !$datas['Appli']['Participant__c']))?'disabled':''}}>Send
                        Application to GACC California</button>
            </div>
            @endif
        </div>

    </div>

</div>

{!! Form::close() !!}

@include('common.footer')

@else
Permission denied. Please contact administrator.
@endif