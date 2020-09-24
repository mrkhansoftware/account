@if(!isset($textRad))
<span class="gaccca-radio">
  {!! Form::radio($fieldName, 'No',isset($datas[$obj][$fieldApi])?($datas[$obj][$fieldApi]==false?true:false):false,array('id'=>$fieldApi.'_no','required' => isset($required)?$required:'','class' => isset($className)?$className:'','onclick'=>isset($myFunction)?$myFunction:'')); !!}

  <label class="gaccca-radio__label" for="{{$fieldApi}}_no">
    <span class="gaccca-radio_faux"></span>
    <span class="gaccca-padding-right-25">No</span>
  </label>

  {!! Form::radio($fieldName, 'Yes',isset($datas[$obj][$fieldApi])?($datas[$obj][$fieldApi]==true?true:false):false,array('id'=>$fieldApi.'_yes','required' => isset($required)?$required:'','class' => isset($className)?$className:'','onclick'=>isset($myFunction)?$myFunction:'')); !!}

  <label class="gaccca-radio__label" for="{{$fieldApi}}_yes">
    <span class="gaccca-radio_faux"></span>
    <span class="gaccca-padding-right-25">Yes</span>
  </label>
</span>
@else

<span class="gaccca-radio">
  {!! Form::radio($fieldName, 'No',isset($datas[$obj][$fieldApi]) && $datas[$obj][$fieldApi]=='No'?true:false,array('id'=>$fieldApi.'_no','required' => isset($required)?$required:'', 'class' => isset($className)?$className:'', 'onclick'=>isset($myFunction)?$myFunction:'')); !!}

  <label class="gaccca-radio__label" for="{{$fieldApi}}_no">
    <span class="gaccca-radio_faux"></span>
    <span class="gaccca-padding-right-25">No</span>
  </label>

  {!! Form::radio($fieldName, 'Yes',isset($datas[$obj][$fieldApi]) && $datas[$obj][$fieldApi]=='Yes'?true:false,array('id'=>$fieldApi.'_yes','required' => isset($required)?$required:'','class' => isset($className)?$className:'', 'onclick'=>isset($myFunction)?$myFunction:'')); !!}

  <label class="gaccca-radio__label" for="{{$fieldApi}}_yes">
    <span class="gaccca-radio_faux"></span>
    <span class="gaccca-padding-right-25">Yes</span>
  </label>
</span>


@endif