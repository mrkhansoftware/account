@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title'=>'Insurance','page'=>'Insurance','parent_page'=>'J1 Program'])

{!! Form::open(['action' => 'InsuranceController@store', 'method' => 'POST', 'id' => 'gacccaForm_profile']) !!}




<div class="gaccca-main-containt">
<h1 class="gaccca-h1-padding">J-1 Health and Travel Insurance</h1>
<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
  <p>Every J-1 visa holder is required by U.S. Department of State to hold a valid travel health insurance. That being the reason health insurance is part of our J1 visa program and its purchase is mandatory for you as our program participant. 
  </p>
  <p>
  As your visa sponsor, we are responsible for you as well as your wellbeing and health during your stay in the U.S. By offering health insurance in partnership with a trusted insurance provider, we can ensure that you are adequately covered and can also support you in settling a claim. Another advantage is the insurance provider network, a large network of participating providers covering the USA, so you know where to turn to and the claims process is typically much easier. 
  </p>
  <p>
  Please visit the following website <a href='https://www.j1-visa.com/j-1-insurance.html' target="_blank">www.j1-visa.com/j-1-insurance.html</a> for more information about the different insurance plans we offer. Please let us know which insurance rate you would like to purchase. If you are unsure about the exact travel dates, then we recommend purchasing health insurance for your internship/training period first. 
  </p>
  <p>
  You can always book the additional days once you have received your visa and booked your flight.
  </p>
</div>

<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

<div class="gaccca-form-element gaccca-form-element-margin">

<div class="gaccca-form-element__control">

<span class="gaccca-radio" style='display:flex'>
  <input type="radio" id="radio-free-sim" value="Book" name="Insurance[Type__c]" required />
  <label class="gaccca-radio__label" for="radio-free-sim" style="margin-left: 10px;">
    <span class="gaccca-radio_faux"></span>
    <span>I would like to book</span>
  </label>

  <input type="radio" id="radio-activate-my-sim" value="Extend" name="Insurance[Type__c]" required />
  <label class="gaccca-radio__label" for="radio-activate-my-sim" style="margin-left: 10px;">
    <span class="gaccca-radio_faux"></span>
    <span>I would like to extend</span>
  </label>

  <input type="radio" id="radio-change-my-monthly-plan" value="Refund" name="Insurance[Type__c]" required />
  <label class="gaccca-radio__label" for="radio-change-my-monthly-plan" style="margin-left: 10px;">
    <span class="gaccca-radio_faux"></span>
    <span>I would like to get a refund</span>
  </label>


</span>



</div>

</div>





<div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="select-tod">Insurance Plan   
        <span class="gaccca-text-required" title="required">*</span>
      </label>
      <div class="gaccca-form-element__control">
        <div class="gaccca-select_container">
        {!! Form::select('Insurance[Tariff__c]', array_reverse($datas['insurancePlan']), '', [ 'class' => 'gaccca-select','id' => 'planInc','required' => 'required', 'onchange' => 'calculateEstimation(this)']) !!}

        </div>
      </div>
    </div>

  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
      Start Date of Insurance<span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element gaccca-form-element-margin-date">
        <!-- <input type="text" id="datepicker"  required="" class="gaccca-input-date" /> -->
        {!! Form::text('startDate','', [
        'class' => 'gaccca-input-date',
        'required' => 'required',
        'readonly' => 'readonly',
        'id' => 'startDateInc',
        'onchange' => 'calculateEstimation(this)'
        ]) !!}
        <span class="gaccca-input-help-text"></span>
      </div>
    </div>


  </div>


  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


    <div class="gaccca-form-element gaccca-form-element-margin">
      <label class="gaccca-form-element__label" for="text-input-id-3">
      Last Day of Insurance<span class="gaccca-text-required" title="required">*</span> </label>
      <div class="gaccca-form-element gaccca-form-element-margin-date">
        <!-- <input type="text" id="datepicker"  required="" class="gaccca-input-date" /> -->
        {!! Form::text('endDate','', [
        'class' => 'gaccca-input-date',
        'required' => 'required',
        'readonly' => 'readonly',
        'id' => 'endDateInc',
        'onchange' => 'calculateEstimation(this)'
        ]) !!}
        <span class="gaccca-input-help-text"></span>
      </div>
    </div>


  </div>
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

<div class="gaccca-form-element gaccca-form-element-margin">
<label class="gaccca-form-element__label" for="text-input-id-8" style="max-width:100%">
Estimated insurance premium:  <span id='noOfDays'>---</span> days -,<span id='perDayCost'>---</span> USD/day =  <span id='totalCost'>---</span> USD </label>

</div>
</div>

    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

<div class="gaccca-form-element gaccca-form-element-margin">
<label class="gaccca-form-element__label" for="text-input-id-8">
  Additional Information <span class="gaccca-text-required" title="required">*</span> </label>
<div class="gaccca-form-element__control">

  <!-- <textarea required="" class="gaccca-textarea"></textarea> -->
  {!! Form::textarea('Insurance[Additional_Comments__c]','', [
  'class' => 'gaccca-textarea'
  ]) !!}

  <span class="gaccca-input-help-text"></span>
</div>
</div>
</div>


{!! Form::submit('Submit',array('class'=>'gaccca-button-save gaccca-button-save-margin', 'id'=>'gaccca_saveBtn_profile')); !!}

</div>

</div>



{!! Form::close() !!}



@include('common.footer')

@else
Permission denied. Please contact administrator.
@endif

<script>
function calculateEstimation(v){
var planInc=jQuery('#planInc').val().trim();
jQuery('#noOfDays').html('---');
jQuery('#perDayCost').html('---');
jQuery('#totalCost').html('---');

if(planInc=='')return;


var startDateInc=jQuery('#startDateInc').val().trim();
if(startDateInc!=''){
var date= startDateInc.split("/");
 startDateInc = new Date(date[2], date[1]-1 , date[0]);
}else{
  return;
}


var endDateInc=jQuery('#endDateInc').val().trim();
if(endDateInc!=''){
var date= endDateInc.split("/");
 endDateInc = new Date(date[2], date[1]-1, date[0]);
}else{
  return;
}
if(startDateInc.getTime() > endDateInc.getTime()){
  v.value='';
alert('Last Day of Insurance should be more than Start Date of Insurance');
  return;
}
const diffTime = Math.abs(endDateInc - startDateInc);
const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24))+1; 
jQuery('#noOfDays').html(diffDays);
jQuery('#perDayCost').html(planInc);
jQuery('#totalCost').html(planInc*diffDays);
}
</script>