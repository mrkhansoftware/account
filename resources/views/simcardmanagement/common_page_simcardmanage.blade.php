@if($requestDataPage['accesskey']!='external_request_aerobil' && $requestDataPage['accesskey']!='external_request_all' && $requestDataPage['accesskey']!='external_request_gaccca')
<button class="gaccca-button-save" onclick='previous()'><i class="fas fa-less-than"></i></button>
<button class="gaccca-button-save" onclick='next()'><i class="fas fa-greater-than"></i></button>
<button class="gaccca-button-save gaccca-margin-left" onclick="loadValues()">Search</button>
@endif

@if($requestDataPage['accesskey']=='Commission')
<button class="gaccca-button-save gaccca-margin-left" onclick="commissionPaid()" style="background-color: #4bca81;">Commssion Paid</button>
Check#:&nbsp; <input value="" type="text" id='checkNumberId' class="gaccca-input" style="width: 100px;" />
Check Amount:&nbsp; <input value="" type="text" id='checkAmountId' class="gaccca-input" style="width: 100px;" />
@endif
@if($requestDataPage['accesskey']!='external_request_aerobil' && $requestDataPage['accesskey']!='external_request_all' && $requestDataPage['accesskey']!='external_request_gaccca')
<span class='pageCount'>
{{$requestDataPage['offset']+1}} to {{$requestDataPage['offset']+count($datas['appList'])}}
</span>
@endif

<div id="myScroll_{{$requestDataPage['accesskey']}}">
<div class="simcardContent-tobScroll" id="simcardContent-tobScroll_{{$requestDataPage['accesskey']}}">
<div>&nbsp;</div>
</div>
</div>
<div style="overflow:auto;margin-bottom:50px;" class="simcardContent_{{$requestDataPage['accesskey']}}">
@if($requestDataPage['accesskey']!='external_request_aerobil' && $requestDataPage['accesskey']!='external_request_all' && $requestDataPage['accesskey']!='external_request_gaccca')
<table>
<thead>
<tr>
    <th>S.No.
        @if($requestDataPage['accesskey']=='Commission')
        <input type="checkbox" id="All_Commission_{{$requestDataPage['accesskey']}}" class='gacca-required' onchange="selectAll()" />
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="SIM_Card_Number__c"> Sim Card Number
        @if($requestDataPage['orderByField']=='SIM_Card_Number__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    @if($requestDataPage['accesskey']!='Shipped')
    <th onclick="sortCall(this)" data-fieldApi="Requested_Area_Code__c">Requested Area Code
        @if($requestDataPage['orderByField']=='Requested_Area_Code__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif

    </th>
    <th onclick="sortCall(this)" data-fieldApi="Issued_U_S_Phone_Number__c">Activated Phone number by Aerobile
        @if($requestDataPage['orderByField']=='Issued_U_S_Phone_Number__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif

    </th>
    @endif
    <th onclick="sortCall(this)" data-fieldApi="Status__c">Status

        @if($requestDataPage['orderByField']=='Status__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif

    </th>
    <th onclick="sortCall(this)" data-fieldApi="Name">Customer Information
        @if($requestDataPage['orderByField']=='Name')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    @if($requestDataPage['accesskey']=='Shipped')
    <th style='cursor: auto;'>Sim Card Information

    </th>
    @endif
    @if($requestDataPage['accesskey']!='Shipped')
    <th onclick="sortCall(this)" data-fieldApi="PLAN__c">PLAN
        @if($requestDataPage['orderByField']=='PLAN__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="Activation_Date__c">Activation Date US Time
        @if($requestDataPage['orderByField']=='Activation_Date__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="Activation_confirmed__c">Activation confirmed from Aerobile
        @if($requestDataPage['orderByField']=='Activation_confirmed__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="AutoRenew__c">Auto-renew after 30 days
        @if($requestDataPage['orderByField']=='AutoRenew__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="Cancellation_Date__c">Cancellation request on ....<br> for....<br> by customer
        @if($requestDataPage['orderByField']=='Cancellation_Date__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="deactivation_Date_by_Aerobile_SM__c">Dactivation Date by Aerobile /SM
        @if($requestDataPage['orderByField']=='deactivation_Date_by_Aerobile_SM__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="CreditCardNumber__c">Credit Card Detail
        @if($requestDataPage['orderByField']=='CreditCardNumber__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="PaymentSubmited__c">Payment Submited By Aerobile
        @if($requestDataPage['orderByField']=='PaymentSubmited__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="Service_End_Date__c">Service End date / next renewal
        @if($requestDataPage['orderByField']=='Service_End_Date__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    <th onclick="sortCall(this)" data-fieldApi="Note__c">Transaction ID
        @if($requestDataPage['orderByField']=='Note__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>
    @endif
    <th onclick="sortCall(this)" data-fieldApi="Extra_Note__c">Notes
        @if($requestDataPage['orderByField']=='Extra_Note__c')
        @if($requestDataPage['orderByOrder']=='desc')
        <i class="fas fa-arrow-up"></i>
        @else
        <i class="fas fa-arrow-down"></i>
        @endif
        @endif
    </th>


</tr>
<tr onkeypress="searchRecords(event)">
    <td>

        @if($requestDataPage['accesskey']=='CommissionPaid')
        <input value="{{$requestDataPage['searchObj']['checkNumber']}}" type="text" class="gaccca-input" id='checkNumber_{{$tab_name}}' />
        @endif
    </td>
    <td> <input value="{{$requestDataPage['searchObj']['SIM_Card_Number']}}" type="text" class="gaccca-input" id='simCardNumber_{{$tab_name}}' /></td>
    @if($requestDataPage['accesskey']!='Shipped')
    <td> <input value="{{$requestDataPage['searchObj']['Requested_Area_Code']}}" type="text" class="gaccca-input" id='reqAreaCode_{{$tab_name}}' /></td>
    <td> <input value="{{$requestDataPage['searchObj']['Issued_U_S_Phone_Number']}}" type="text" class="gaccca-input" id='activatedPhone_{{$tab_name}}' /></td>
@endif
    <td></td>
    <td> <input value="{{$requestDataPage['searchObj']['customerInfo']}}" type="text" class="gaccca-input" id='customerInfo_{{$tab_name}}' /></td>
    @if($requestDataPage['accesskey']=='Shipped')
    <td></td>
    @endif
    @if($requestDataPage['accesskey']!='Shipped')
    <td> <input value="{{$requestDataPage['searchObj']['PLAN']}}" type="text" class="gaccca-input" id='plan_{{$tab_name}}' /></td>
    @php $dateVar = date_create($requestDataPage['searchObj']['Activation_Date']);
    $dateVar=date_format($dateVar,"m/d/Y");
    @endphp
    <td> <input value="{{$requestDataPage['searchObj']['Activation_Date']==''?'':$dateVar}}" type="text" class="gaccca-input-date" id='activationDate_{{$tab_name}}' /></td>
    <td>


        {!! Form::select('actconfirm', array_reverse($datas['activationConfirmed']), $requestDataPage['searchObj']['Activation_confirmed'], [ 'class' => 'gaccca-select','id' => 'activationConfirmFrom_'.$tab_name]) !!}


    </td>
    <td>

        {!! Form::select('autoRenew_', array_reverse($datas['autoRenew']), $requestDataPage['searchObj']['AutoRenew'], [ 'class' => 'gaccca-select','id' => 'autoRenew_'.$tab_name]) !!}

    </td>
    @php $dateVar = date_create($requestDataPage['searchObj']['Cancellation_Date']);
    $dateVar=date_format($dateVar,"m/d/Y");
    @endphp
    <td> <input value="{{$requestDataPage['searchObj']['Cancellation_Date']==''?'':$dateVar}}" type="text" class="gaccca-input-date" id='cancellationDate_{{$tab_name}}' /></td>
    @php $dateVar = date_create($requestDataPage['searchObj']['deactivation_Date_by_Aerobile_SM']);
    $dateVar=date_format($dateVar,"m/d/Y");
    @endphp
    <td> <input value="{{$requestDataPage['searchObj']['deactivation_Date_by_Aerobile_SM']==''?'':$dateVar}}" type="text" class="gaccca-input-date" id='deactivationDate_{{$tab_name}}' /></td>
    <td><input value="{{$requestDataPage['searchObj']['creditCardDetail']}}" type="text" class="gaccca-input" id='creditCard_{{$tab_name}}' style="width:200px !important"/></td>
    <td>
        {!! Form::select('paymentSubmited', array_reverse($datas['paymentSubmited']), $requestDataPage['searchObj']['paymentSubmited'], [ 'class' => 'gaccca-select','id' => 'paymentSubmitted_'.$tab_name]) !!}


    </td>
    @php $dateVar1 = date_create($requestDataPage['searchObj']['serviceEndDate']);
    $dateVar1=date_format($dateVar1,"m/d/Y");
    $dateVar2 = date_create($requestDataPage['searchObj']['serviceEndDateTo']);
    $dateVar2=date_format($dateVar2,"m/d/Y");
    @endphp
    <td>
        <input placeholder="From" value="{{$requestDataPage['searchObj']['serviceEndDate']==''?'':$dateVar1}}" type="text" class="gaccca-input-date" id='serviceEndDateFrom_{{$tab_name}}' style="height:20px !important"/>
        <input placeholder="To" value="{{$requestDataPage['searchObj']['serviceEndDateTo']==''?'':$dateVar2}}" type="text" class="gaccca-input-date" id='serviceEndDateTo_{{$tab_name}}' style="height:20px !important"/>

    </td>
    <td><input value="{{$requestDataPage['searchObj']['noteInfo']}}" type="text" class="gaccca-input" id='transactionId_{{$tab_name}}' style="width:200px !important"/></td>
    @endif
    <td><input value="{{$requestDataPage['searchObj']['extraNote']}}" type="text" class="gaccca-input" id='note_{{$tab_name}}' style="width:200px !important"/></td>
</tr>
</thead>
<tbody>
@php $index = 1; @endphp
@foreach (isset($datas['appList'])?$datas['appList']:[] as $applicant)
<tr>
    <td>
        @if($requestDataPage['accesskey']=='Commission')
        <input type="checkbox" id="{{$applicant['Id']}}" class="gacca-required commissionCheck_{{$requestDataPage['accesskey']}}" value="{{$applicant['Id']}}" />
        @endif
        {{$requestDataPage['offset']+$index}}.

        <br />
        @if($requestDataPage['accesskey']=='CommissionPaid')
        Check#: {{isset($applicant['Check__c'])?$applicant['Check__c']:''}}<br />
        Check Number: {{isset($applicant['Check_amount__c'])?$applicant['Check_amount__c']:''}}
        @endif
@if($requestDataPage['accesskey']=='Problem')
        <i class="fas fa-trash deleteFaIcon" data-delete="{{$applicant['Id']}}" onclick="deleteRecordInformation(this)"></i>
  @endif

    </td>
    <td>



        <div class="popup-text" id="editdiv_SimCardNoo_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Sim Card Number</div>
            <input type="text" id="input_value_SimCardNoo_{{$tab_name.'_'.$index}}" class="gaccca-input" />
            <span class='simcardErrorValidationMessage'></span>
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_SimCardNoo_{{$tab_name.'_'.$index}}" data-showing="value_SimCardNoo_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="SIM_Card_Number__c" data-loclFieldId="input_value_SimCardNoo_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_SimCardNoo_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_SimCardNoo_{{$tab_name.'_'.$index}}">{{isset($applicant['SIM_Card_Number__c'])?$applicant['SIM_Card_Number__c']:''}}</span>

        <a href="javascript:void(0)" class="edit-pencil" id="edit_SimCardNoo_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>


    </td>
    @if($requestDataPage['accesskey']!='Shipped')
    <td>
        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Requested_Area_Code__c'])?$applicant['Requested_Area_Code__c']:''}}
        @else
        <div class="popup-text" id="editdiv_ReqAreaCode_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Requested Area Code</div>
            <input type="text" id="input_value_ReqAreaCode_{{$tab_name.'_'.$index}}" class="gaccca-input" />
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_ReqAreaCode_{{$tab_name.'_'.$index}}" data-showing="value_ReqAreaCode_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Requested_Area_Code__c" data-loclFieldId="input_value_ReqAreaCode_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_ReqAreaCode_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_ReqAreaCode_{{$tab_name.'_'.$index}}">{{isset($applicant['Requested_Area_Code__c'])?$applicant['Requested_Area_Code__c']:''}}</span>

        <a href="javascript:void(0)" class="edit-pencil" id="edit_ReqAreaCode_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>

        @endif


    </td>
    <td>

        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Issued_U_S_Phone_Number__c'])?$applicant['Issued_U_S_Phone_Number__c']:''}}
        @else
        <div class="popup-text" id="editdiv_phonenumber_{{$tab_name.'_'.$index}}">
            <div class="popup-title">activated Phone number by Aerobile</div>
            <input type="text" id="input_value_phonenumber_{{$tab_name.'_'.$index}}" class="gaccca-input" />
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_phonenumber_{{$tab_name.'_'.$index}}
            " data-showing="value_phonenumber_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Issued_U_S_Phone_Number__c" data-loclFieldId="input_value_phonenumber_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_phonenumber_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_phonenumber_{{$tab_name.'_'.$index}}">{{isset($applicant['Issued_U_S_Phone_Number__c'])?$applicant['Issued_U_S_Phone_Number__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_phonenumber_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        @endif

    </td>
    @endif
    <td>
        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Status__c'])?$applicant['Status__c']:''}}
        @else
        <div class="popup-text" id="editdiv_status_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Status</div>

            {!! Form::select('Status', array_reverse($datas['status']), isset($applicant['Status__c'])?$applicant['Status__c']:'', [ 'class' => 'gaccca-select','id' => 'input_value_status_'.$tab_name.'_'.$index]) !!}
            <span class='simcardErrorValidationMessage'></span>
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_status_{{$tab_name.'_'.$index}}" data-showing="value_status_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Status__c" data-loclFieldId="input_value_status_{{$tab_name.'_'.$index}}" data-mobile='value_phonenumber_{{$tab_name.'_'.$index}}'><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_status_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_status_{{$tab_name.'_'.$index}}" >{{isset($applicant['Status__c'])?$applicant['Status__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_status_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        @endif
    </td>
    <td>
        <a href="https://gaccca.lightning.force.com/lightning/r/Applicant__c/{{isset($applicant['Id'])?$applicant['Id']:''}}/view" target='_blank'>{{isset($applicant['Name'])?$applicant['Name']:''}}</a>
        <br />
        {{isset($applicant['Contact__r']['Email'])?$applicant['Contact__r']['Email']:''}}

        <br />
        {{isset($applicant['Contact__r']['Phone'])?$applicant['Contact__r']['Phone']:''}}

    </td>
    @if($requestDataPage['accesskey']=='Shipped')
    <td>
        <b>Shipment Carrier</b><br/>
    {{isset($applicant['Sim_Card_Shipment_Carrier__c'])?$applicant['Sim_Card_Shipment_Carrier__c']:''}}

    <br /><br>
    <b>Tracking Number</b><br/>
        {{isset($applicant['Sim_Card_Tracking_Number__c'])?$applicant['Sim_Card_Tracking_Number__c']:''}}

        <br /><br/>
        <b>Shipment Date</b><br/>
        @php $simCardShipmentDate = date_create(isset($applicant['Sim_Card_Shipment_Date__c'])?$applicant['Sim_Card_Shipment_Date__c']:'');
    $simCardShipmentDate=date_format($simCardShipmentDate,"m/d/Y");
    @endphp
        {{isset($applicant['Sim_Card_Shipment_Date__c'])?$simCardShipmentDate:''}}

    </td>
    @endif
    @if($requestDataPage['accesskey']!='Shipped')
    <td>

      @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
      {{isset($applicant['PLAN__c'])?$applicant['PLAN__c']:''}}
      @else
      <div class="popup-text" id="editdiv_PLAN_{{$tab_name.'_'.$index}}">
          <div class="popup-title">Plan</div>


          {!! Form::select('PLAN__c', array_reverse($datas['simcardPlan']), isset($applicant['PLAN__c'])?$applicant['PLAN__c']:'', [ 'class' => 'gaccca-select','id' => 'input_value_PLAN_'.$tab_name.'_'.$index]) !!}

          <div class="button-div">
              <button class="gaccca-button-save" id="save_button_PLAN_{{$tab_name.'_'.$index}}" data-showing="value_PLAN_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="PLAN__c" data-loclFieldId="input_value_PLAN_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
              <button class="gaccca-button-save" id="close_button_PLAN_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
          </div>
      </div>
      <span id="value_PLAN_{{$tab_name.'_'.$index}}">{{isset($applicant['PLAN__c'])?$applicant['PLAN__c']:''}}</span>
      <a href="javascript:void(0)" class="edit-pencil" id="edit_PLAN_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
      @endif

    </td>
    @php $actvDate = date_create(isset($applicant['Activation_Date__c'])?$applicant['Activation_Date__c']:'');
    $actvDate=date_format($actvDate,"m/d/Y");
    @endphp
    <td>

      @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
      {{isset($applicant['Activation_Date__c'])?$actvDate:''}}
      @else
      <div class="popup-text" id="editdiv_Activation_Date_{{$tab_name.'_'.$index}}">
          <div class="popup-title">Activation Date US Time</div>
          <input type="text" id="input_value_Activation_Date_{{$tab_name.'_'.$index}}" class="gaccca-input-date" />
          <div class="button-div">
              <button class="gaccca-button-save" id="save_button_Activation_Date_{{$tab_name.'_'.$index}}" data-showing="value_Activation_Date_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Activation_Date__c" data-loclFieldId="input_value_Activation_Date_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
              <button class="gaccca-button-save" id="close_button_Activation_Date_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
          </div>
      </div>
      <span id="value_Activation_Date_{{$tab_name.'_'.$index}}">{{isset($applicant['Activation_Date__c'])?$actvDate:''}}</span>
      <a href="javascript:void(0)" class="edit-pencil" id="edit_Activation_Date_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
      @endif


    </td>
    <td>
        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Activation_confirmed__c'])?$applicant['Activation_confirmed__c']:''}}
        @else
        <div class="popup-text" id="editdiv_activationConfirm_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Activation confirmed from Aerobile</div>

            {!! Form::select('Activation_confirmed__c', array_reverse($datas['activationConfirmed']), isset($applicant['Activation_confirmed__c'])?$applicant['Activation_confirmed__c']:'', [ 'class' => 'gaccca-select','id' => 'input_value_activationConfirm_'.$tab_name.'_'.$index]) !!}


            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_activationConfirm_{{$tab_name.'_'.$index}}" data-showing="value_activationConfirm_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Activation_confirmed__c" data-loclFieldId="input_value_activationConfirm_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_activationConfirm_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_activationConfirm_{{$tab_name.'_'.$index}}">{{isset($applicant['Activation_confirmed__c'])?$applicant['Activation_confirmed__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_activationConfirm_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        @endif
    <td>

        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['AutoRenew__c'])?$applicant['AutoRenew__c']:''}}
        @else
        <div class="popup-text" id="editdiv_autoRenew_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Auto-renew
                after
                30
                days</div>


            {!! Form::select('AutoRenew__c', array_reverse($datas['autoRenew']), isset($applicant['AutoRenew__c'])?$applicant['AutoRenew__c']:'', [ 'class' => 'gaccca-select','id' => 'input_value_autoRenew_'.$tab_name.'_'.$index]) !!}

            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_autoRenew_{{$tab_name.'_'.$index}}" data-showing="value_autoRenew_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="AutoRenew__c" data-loclFieldId="input_value_autoRenew_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_autoRenew_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_autoRenew_{{$tab_name.'_'.$index}}">{{isset($applicant['AutoRenew__c'])?$applicant['AutoRenew__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_autoRenew_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        @endif
    </td>
    @php $clDate = date_create(isset($applicant['Cancellation_Date__c'])?$applicant['Cancellation_Date__c']:'');
    $clDate=date_format($clDate,"m/d/Y");

    $luDate = date_create(isset($applicant['Last_Date_Of_Usage__c'])?$applicant['Last_Date_Of_Usage__c']:'');
    $luDate=date_format($luDate,"m/d/Y");

    @endphp



    <td>{{isset($applicant['Cancellation_Date__c'])?$clDate:''}} <br />
        {{isset($applicant['Last_Date_Of_Usage__c'])?$luDate:''}}
    </td>
    @php $dctDate = date_create(isset($applicant['Deactivation_Date_by_Aerobile_SM__c'])?$applicant['Deactivation_Date_by_Aerobile_SM__c']:'');
    $dctDate=date_format($dctDate,"m/d/Y");

    @endphp
    <td>
        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Deactivation_Date_by_Aerobile_SM__c'])?$dctDate:''}}
        @else
        <div class="popup-text" id="editdiv_dactivationDate_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Dactivation Date by Aerobile /SM</div>
            <input type="text" id="input_value_dactivationDate_{{$tab_name.'_'.$index}}" class="gaccca-input-date" />
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_dactivationDate_{{$tab_name.'_'.$index}}" data-showing="value_dactivationDate_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Deactivation_Date_by_Aerobile_SM__c" data-loclFieldId="input_value_dactivationDate_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_dactivationDate_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_dactivationDate_{{$tab_name.'_'.$index}}">{{isset($applicant['Deactivation_Date_by_Aerobile_SM__c'])?$dctDate:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_dactivationDate_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        @endif
    </td>
    <td><b>CC Number: </b> <br />{{isset($applicant['CreditCardNumber__c'])?$applicant['CreditCardNumber__c']:''}}<br />
        <b>Name On CC: </b> <br />{{isset($applicant['NameOnCreditCard__c'])?$applicant['NameOnCreditCard__c']:''}}<br />
        <b>CC Valid: </b> <br />{{isset($applicant['CreditCardValidThru__c'])?$applicant['CreditCardValidThru__c']:''}}<br />
        <b>CVC: </b> <br />{{isset($applicant['CVC__c'])?$applicant['CVC__c']:''}}<br /></td>
    <td>
        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['PaymentSubmited__c'])?$applicant['PaymentSubmited__c']:''}}
        @else
        <div class="popup-text" id="editdiv_paymentSubmited_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Payment Submited</div>

            {!! Form::select('PaymentSubmited__c', array_reverse($datas['paymentSubmited']), isset($applicant['PaymentSubmited__c'])?$applicant['PaymentSubmited__c']:'', [ 'class' => 'gaccca-select','id' => 'input_value_paymentSubmited_'.$tab_name.'_'.$index]) !!}

            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_paymentSubmited_{{$tab_name.'_'.$index}}" data-showing="value_paymentSubmited_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="PaymentSubmited__c" data-loclFieldId="input_value_paymentSubmited_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_paymentSubmited_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>

        <span id="value_paymentSubmited_{{$tab_name.'_'.$index}}">{{isset($applicant['PaymentSubmited__c'])?$applicant['PaymentSubmited__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_paymentSubmited_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a><br/>
        <a href="javascript:void(0)" data-sendTmail="{{$applicant['Id']}}" onclick="sendEmailToNotify(this,'sendPaymentSubmittedEmail')">Click To Send
            Payment Successfully Charged
            Email </a>

        @endif
    </td>
    @php $serviceEndDate = date_create(isset($applicant['Service_End_Date__c'])?$applicant['Service_End_Date__c']:'');
    $serviceEndDate=date_format($serviceEndDate,"m/d/Y");

    @endphp
    <td>
        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Service_End_Date__c'])?$serviceEndDate:''}}
        @else
        <div class="popup-text" id="editdiv_serviceEndDate_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Service End date / next renewal</div>
            <input type="text" id="input_value_serviceEndDate_{{$tab_name.'_'.$index}}" class="gaccca-input-date" />
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_serviceEndDate_{{$tab_name.'_'.$index}}" data-showing="value_serviceEndDate_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Service_End_Date__c" data-loclFieldId="input_value_serviceEndDate_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_serviceEndDate_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_serviceEndDate_{{$tab_name.'_'.$index}}">{{isset($applicant['Service_End_Date__c'])?$serviceEndDate:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_serviceEndDate_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>

        <br>
        <a href="javascript:void(0)" data-sendTmail="{{$applicant['Id']}}" onclick="sendEmailToNotify(this,'sendTransactionFailEmailAction')">Click To Send
            Transaction failure
            Email </a>
        @endif
    </td>

    <td>
        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Note__c'])?$applicant['Note__c']:''}}
        @else
        <div class="popup-text" id="editdiv_TransactionID_{{$tab_name.'_'.$index}}">
            <div class="popup-title"></div>
            <textarea maxlength="254" id="input_value_TransactionID_{{$tab_name.'_'.$index}}" class="gaccca-textarea"></textarea>
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_TransactionID_{{$tab_name.'_'.$index}}" data-showing="value_TransactionID_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Note__c" data-loclFieldId="input_value_TransactionID_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_TransactionID_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_TransactionID_{{$tab_name.'_'.$index}}">{{isset($applicant['Note__c'])?$applicant['Note__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_TransactionID_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        @endif



    </td>

@endif

    <td>


        @if($requestDataPage['accesskey']=='CommissionPaid' || $requestDataPage['accesskey']=='Commission')
        {{isset($applicant['Extra_Note__c'])?$applicant['Extra_Note__c']:''}}
        @else
        <div class="popup-text" id="editdiv_Notes_{{$tab_name.'_'.$index}}">
            <div class="popup-title"></div>
            <textarea maxlength="254" id="input_value_Notes_{{$tab_name.'_'.$index}}" class="gaccca-textarea"></textarea>
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_Notes_{{$tab_name.'_'.$index}}" data-showing="value_Notes_{{$tab_name.'_'.$index}}" data-recordId="{{$applicant['Id']}}" data-fieldApi="Extra_Note__c" data-loclFieldId="input_value_Notes_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_Notes_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <span id="value_Notes_{{$tab_name.'_'.$index}}">{{isset($applicant['Extra_Note__c'])?$applicant['Extra_Note__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_Notes_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        @endif
    </td>


</tr>
@php $index++; @endphp
@endforeach

</tbody>
</table>
@else
@if(count($datas['leadList'])>0)
<table style='table-layout: auto;width:100%;min-width:1300px' class='externalSimTable'>
<thead>
<tr>

    <th onclick="" data-fieldApi=""> S. No.

    </th>
    <th onclick="" data-fieldApi=""> Created Date

    </th>
    <th onclick="" data-fieldApi=""> First Name

    </th>

    <th onclick="" data-fieldApi=""> Last Name

    </th>

    <th onclick="" data-fieldApi=""> Contact Information

    </th>

        <th>Carrier</th>
        <th>
        Date Of Arrival

        </th>
        <th onclick="" data-fieldApi=""> Street

        </th>
        <th onclick="" data-fieldApi=""> City

        </th>
        <th onclick="" data-fieldApi=""> ZIP Code

        </th>
        <th onclick="" data-fieldApi=""> Country

        </th>
        @if($requestDataPage['accesskey']=='external_request_aerobil' || $requestDataPage['accesskey']=='external_request_gaccca')
        <th onclick="" data-fieldApi="" width='300px'> Sim Card Information

        </th>

        @endif
        <th onclick="" data-fieldApi=""> Action

        </th>
</tr>
</thead>
<tbody>
@php $index = 1; @endphp
@foreach (isset($datas['leadList'])?$datas['leadList']:[] as $lead)
<tr>

    <td onclick="" data-fieldApi=""> {{$index}}

    </td>
    <td onclick="" data-fieldApi="">

    @php $createdDateSimCard = date_create(isset($lead['Created_Date__c'])?$lead['Created_Date__c']:'');
    $createdDateSimCard=date_format($createdDateSimCard,"m/d/Y");

    @endphp
        {{$createdDateSimCard}}



        </td>
    <td onclick="" data-fieldApi="">
    {{isset($lead['FirstName'])?$lead['FirstName']:''}}
    </td>

    <td onclick="" data-fieldApi=""> {{isset($lead['LastName'])?$lead['LastName']:''}}

    </td>

    <td onclick="" data-fieldApi="" > {{isset($lead['Email'])?$lead['Email']:''}}<br/>{{isset($lead['Phone'])?$lead['Phone']:''}}

    </td>
        <td>{{isset($lead['Choose_an_Carrier__c'])?$lead['Choose_an_Carrier__c']:''}}</td>
        <td>
        @php $dateArrival = date_create(isset($lead['Date_Of_Arrival__c'])?$lead['Date_Of_Arrival__c']:'');
    $dateArrival=date_format($dateArrival,"m/d/Y");

    @endphp
        {{$dateArrival}}

        </td>
        <td onclick="" data-fieldApi=""> {{isset($lead['Street__c'])?$lead['Street__c']:''}}

        </td>
        <td onclick="" data-fieldApi=""> {{isset($lead['City__c'])?$lead['City__c']:''}}

        </td>
        <td onclick="" data-fieldApi=""> {{isset($lead['Zip_Postal_Code__c'])?$lead['Zip_Postal_Code__c']:''}}

        </td>

        <td onclick="" data-fieldApi=""> {{isset($lead['Country__c'])?$lead['Country__c']:''}}

        </td>
        @if($requestDataPage['accesskey']=='external_request_aerobil' || $requestDataPage['accesskey']=='external_request_gaccca')
        <td>
        <div class="popup-text" id="editdiv_simcardnumberEx_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Sim Card Number</div>
            <input type="text" id="input_value_simcardnumberEx_{{$tab_name.'_'.$index}}" class="gaccca-input" />
           <span class='simcardErrorValidationMessage'></span>
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_simcardnumberEx_{{$tab_name.'_'.$index}}
            " data-showing="value_simcardnumberEx_{{$tab_name.'_'.$index}}" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-fieldApi="Sim_Card_Number__c" data-loclFieldId="input_value_simcardnumberEx_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_simcardnumberEx_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="externalContentSimClass">
        <b>Sim Card Number</b><br/>
        <span id="value_simcardnumberEx_{{$tab_name.'_'.$index}}">{{isset($lead['Sim_Card_Number__c'])?$lead['Sim_Card_Number__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_simcardnumberEx_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        <br/><br/>
        </div>
        <div class="popup-text" id="editdiv_carrierEx_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Shipment Carrier</div>
            {!! Form::select('Sim_Card_Shipment_Carrier__c', array_reverse($datas['shipmentCarrier']), isset($lead['Sim_Card_Shipment_Carrier__c'])?$lead['Sim_Card_Shipment_Carrier__c']:'', [ 'class' => 'gaccca-select','id' => 'input_value_carrierEx_'.$tab_name.'_'.$index]) !!}

            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_carrierEx_{{$tab_name.'_'.$index}}
            " data-showing="value_carrierEx_{{$tab_name.'_'.$index}}" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-fieldApi="Sim_Card_Shipment_Carrier__c" data-loclFieldId="input_value_carrierEx_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_carrierEx_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="externalContentSimClass">
        <b>Shipment Carrier</b><br/>
        <span id="value_carrierEx_{{$tab_name.'_'.$index}}">{{isset($lead['Sim_Card_Shipment_Carrier__c'])?$lead['Sim_Card_Shipment_Carrier__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_carrierEx_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        <br/><br/>
        </div>
        <div class="popup-text" id="editdiv_trackingNumEx_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Tracking Number</div>
            <input type="text" id="input_value_trackingNumEx_{{$tab_name.'_'.$index}}" class="gaccca-input" />
            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_trackingNumEx_{{$tab_name.'_'.$index}}
            " data-showing="value_trackingNumEx_{{$tab_name.'_'.$index}}" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-fieldApi="Sim_Card_Tracking_Number__c" data-loclFieldId="input_value_trackingNumEx_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_trackingNumEx_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="externalContentSimClass">
        <b>Tracking Number</b><br/>
        <span id="value_trackingNumEx_{{$tab_name.'_'.$index}}">{{isset($lead['Sim_Card_Tracking_Number__c'])?$lead['Sim_Card_Tracking_Number__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_trackingNumEx_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        <br/><br/>
    </div>

        <div class="popup-text" id="editdiv_noteEx_{{$tab_name.'_'.$index}}">
            <div class="popup-title">Note</div>
            <textarea id="input_value_noteEx_{{$tab_name.'_'.$index}}" class="gaccca-input" maxlength="250" ></textarea>

            <div class="button-div">
                <button class="gaccca-button-save" id="save_button_noteEx_{{$tab_name.'_'.$index}}
            " data-showing="value_noteEx_{{$tab_name.'_'.$index}}" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-fieldApi="Additional_Informations__c" data-loclFieldId="input_value_noteEx_{{$tab_name.'_'.$index}}"><i class="fas fa-check"></i></button>
                <button class="gaccca-button-save" id="close_button_noteEx_{{$tab_name.'_'.$index}}"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="externalContentSimClass">
        <b>Note</b><br/>
        <span id="value_noteEx_{{$tab_name.'_'.$index}}">{{isset($lead['Additional_Informations__c'])?$lead['Additional_Informations__c']:''}}</span>
        <a href="javascript:void(0)" class="edit-pencil" id="edit_noteEx_{{$tab_name.'_'.$index}}"><i class="fas fa-pencil-alt"></i></a>
        <br/><br/>
        </div>


        </td>

        @endif
        <td onclick="" data-fieldApi="" style="text-align: center;"><br/>
        @if($requestDataPage['accesskey']!='external_request_aerobil' && $requestDataPage['accesskey']!='external_request_gaccca')
        <button class="gaccca-button-save externalUserActions" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-action="Assign to GACCCA">Assign to GACCCA</button><br/><br/>
        <button class="gaccca-button-save externalUserActions" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-action="Assign to Aerobil">Assign to Aerobile</button><br/><br/>
        <button class="gaccca-button-save externalUserActions" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-action="Cancel Request">Cancel Request</button><br/><br/>
        @else
        <button class="gaccca-button-save externalUserActions" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-action="Simcard Shipped Notification"  data-row="{{$tab_name.'_'.$index}}">Send Sim Card Shipped Notification</button><br/><br/>
        @endif
        <button class="gaccca-button-save externalUserActions" data-recordId="{{isset($lead['Id'])?$lead['Id']:''}}" data-action="Cancel Request without notify"  data-row="{{$tab_name.'_'.$index}}">Silent Cancel This Request</button><br/><br/>

</td>
</tr>
@php $index++; @endphp
@endforeach

</tbody>
</table>
@else
<div style='text-align: center;font-size: 20px;font-family: sans-serif;'>No record found</div>
@endif

@endif
</div>
