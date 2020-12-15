@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title'=>'Insurance','page'=>'Insurance','parent_page'=>'Insurance'])

{!! Form::open(['action' => 'InsuranceController@store', 'method' => 'POST', 'id' => 'gacccaForm_profile']) !!}




<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Insurance</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Please provide Insurance information. 
    </p>
  </div>
  
  <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">



    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
        Insured From<span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <!-- <input type="text" id="datepicker"  required="" class="gaccca-input-date" /> -->
          {!! Form::text('dob','', [
          'class' => 'gaccca-input-date',
          'required' => 'required',
          'readonly' => 'readonly',
          ]) !!}
          <span class="gaccca-input-help-text"></span>
        </div>
      </div>


    </div>


    <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">


      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="text-input-id-3">
        Insured To<span class="gaccca-text-required" title="required">*</span> </label>
        <div class="gaccca-form-element gaccca-form-element-margin-date">
          <!-- <input type="text" id="datepicker"  required="" class="gaccca-input-date" /> -->
          {!! Form::text('dob','', [
          'class' => 'gaccca-input-date',
          'required' => 'required',
          'readonly' => 'readonly',
          ]) !!}
          <span class="gaccca-input-help-text"></span>
        </div>
      </div>


    </div>
    <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-tod">Tariff   
          <span class="gaccca-text-required" title="required">*</span>
        </label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">
            <select class="gaccca-select" id="select-tod">                      
              <option>--Select--</option>
             <option>$ 0 Envisage Global</option>
             <option>$ 100 Envisage Global</option>
             <option>Premium Envisage Global</option>
             <option>Own Insurance</option>
            </select>
          </div>
        </div>
      </div>
      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

<div class="gaccca-form-element gaccca-form-element-margin">
  <label class="gaccca-form-element__label" for="text-input-id-8">
    Additional Information <span class="gaccca-text-required" title="required">*</span> </label>
  <div class="gaccca-form-element__control">

    <!-- <textarea required="" class="gaccca-textarea"></textarea> -->
    {!! Form::textarea('con[MailingStreet]','', [
    'class' => 'gaccca-textarea',
    'required' => 'required',
    'maxlength' => '200'
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

</script>