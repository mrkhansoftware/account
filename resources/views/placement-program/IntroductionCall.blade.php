@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header_without_menu',['datas'=>$datas,'title' =>'Introduction Call','page'=>'IntroductionCall'])
@include('common.signScript')
{!! Form::open(['action' => 'IntroductionCallController@store', 'method' => 'POST', 'id' => 'gacccaForm_webcam']) !!}
<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Introduction Call</h1>

    @if (isset($datas['onfrmSubmitted']) && $datas['onfrmSubmitted'])
    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

            <div class="gaccca-form-element gaccca-form-element-margin">
                <p> Thank you for submitting.
                </p>
            </div>
        </div>
    </div>

    @else

    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p> <strong>Applicant Name:</strong> {{isset($datas['app']['Contact__r']['Name'])?$datas['app']['Contact__r']['Name']:''}}</p>
        <p><strong>Placement coordinator:</strong> {{isset($datas['app']['Placement_Assigned_to__r']['Name'])?$datas['app']['Placement_Assigned_to__r']['Name']:''}}</p>
        
        <input type='hidden' name="onfrm[Id]" value="{{isset($datas['onfrm']['Id'])?$datas['onfrm']['Id']:''}}">
        <input type='hidden' name="app[Id]" value="{{isset($datas['app']['Id'])?$datas['app']['Id']:''}}">
        <input type='hidden' name="app[Contact__c]" value="{{isset($datas['app']['Contact__c'])?$datas['app']['Contact__c']:''}}">
        <input type='hidden' name="app[Encrypted_Host_Company_Id__c]" value="{{isset($datas['app']['Encrypted_Host_Company_Id__c'])?$datas['app']['Encrypted_Host_Company_Id__c']:''}}">

    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Why do you want to do an internship in the U.S?</label>
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[Why_do_you_want_to_do_an_internship_US__c]" class="gaccca-textarea">{{isset($datas['onfrm']['Why_do_you_want_to_do_an_internship_US__c'])?$datas['onfrm']['Why_do_you_want_to_do_an_internship_US__c']:''}}</textarea>
                </div>
            </div>
        </div>

        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                What degree did you receive? What relevant projects and classes have you taken?</label>
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[What_level_is_your_degree__c]"  class="gaccca-textarea">{{isset($datas['onfrm']['What_level_is_your_degree__c'])?$datas['onfrm']['What_level_is_your_degree__c']:''}}</textarea>
                </div>
            </div>
        </div>


        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                What was/is your expected graduation date?   
            </label>
                <div class="gaccca-form-element__control">
                    <input name="graduationDate" value="{{isset($datas['graduationDate'])?$datas['graduationDate']:''}}" type="text" class="gaccca-input-date" readonly/>

                </div>
            </div>
        </div>


        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Do you have any practical work experience?
 </label>
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[Practical_work_experience__c]" class="gaccca-textarea">{{isset($datas['onfrm']['Practical_work_experience__c'])?$datas['onfrm']['Practical_work_experience__c']:''}}</textarea>
                </div>
            </div>
        </div>


        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                What do you imagine your internship in the U.S to be like? </label>
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[Imagine_your_internship_in_the_U_S__c]" class="gaccca-textarea">{{isset($datas['onfrm']['Imagine_your_internship_in_the_U_S__c'])?$datas['onfrm']['Imagine_your_internship_in_the_U_S__c']:''}}</textarea>
                </div>
            </div>
        </div>

        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                What are you looking for in your internship? (i.e. tasks, activities, etc)
 </label>
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[What_are_you_looking_for_in_internship__c]"  class="gaccca-textarea">{{isset($datas['onfrm']['What_are_you_looking_for_in_internship__c'])?$datas['onfrm']['What_are_you_looking_for_in_internship__c']:''}}</textarea>
                </div>
            </div>
        </div>




        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Do you have a preferred industry? Flexibility?
            </label>
                <div class="gaccca-form-element__control">
                    <input name="onfrm[Do_you_have_a_preferred_industry__c]" value="{{isset($datas['onfrm']['Do_you_have_a_preferred_industry__c'])?$datas['onfrm']['Do_you_have_a_preferred_industry__c']:''}}" type="text" class="gaccca-input" />

                </div>
            </div>
        </div>


        
        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Preferred location(s)? Flexibility? 
            </label>
                <div class="gaccca-form-element__control">
                    <input name="onfrm[Preferred_location_s__c]" value="{{isset($datas['onfrm']['Preferred_location_s__c'])?$datas['onfrm']['Preferred_location_s__c']:''}}" type="text" class="gaccca-input" />

                </div>
            </div>
        </div>


        
        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Start and end dates? Flexibility? 
            </label>
                <div class="gaccca-form-element__control">
                    <input name="onfrm[Start_and_end_dates__c]" value="{{isset($datas['onfrm']['Start_and_end_dates__c'])?$datas['onfrm']['Start_and_end_dates__c']:''}}" type="text" class="gaccca-input" />

                </div>
            </div>
        </div>





        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Rank your priorities for this experience, Position, Industry, Location, etc. </label>
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[Rank_your_priorities__c]"  class="gaccca-textarea">{{isset($datas['onfrm']['Rank_your_priorities__c'])?$datas['onfrm']['Rank_your_priorities__c']:''}}</textarea>
                </div>
            </div>
        </div>
        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Special internship requirements? (i.e. university requirements)
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[Special_internship_requirements__c]"  class="gaccca-textarea">{{isset($datas['onfrm']['Special_internship_requirements__c'])?$datas['onfrm']['Special_internship_requirements__c']:''}}</textarea>
                </div>
            </div>
        </div>
        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                If the internship is unpaid, how will you finance the internship?
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[If_the_internship_is_unpaid__c]"  class="gaccca-textarea">{{isset($datas['onfrm']['If_the_internship_is_unpaid__c'])?$datas['onfrm']['If_the_internship_is_unpaid__c']:''}}</textarea>
                </div>
            </div>
        </div>
        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" >
                Additional Notes:
                <div class="gaccca-form-element__control">

                    <textarea name="onfrm[Additional_notes__c]"  class="gaccca-textarea">{{isset($datas['onfrm']['Additional_notes__c'])?$datas['onfrm']['Additional_notes__c']:''}}</textarea>
                </div>
            </div>
        </div>




    </div>


    <h2 class="gaccca-h2-padding">Please Note:</h2>
    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <p>You can sign digitally online with your mouse or on your phone with your finger.</p>
            </div>
            @include('common.signHTML')
        </div>






        <button id="gaccca_saveBtn_webcam" class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>

    </div>


    @endif
</div>

{!! Form::close() !!}
@include('common.footer')


@else
Permission denied. Please contact administrator.
@endif