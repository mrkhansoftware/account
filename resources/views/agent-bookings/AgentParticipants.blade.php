@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


<link href="{{ asset('css/dataTables.jqueryui.min.css') }}" rel='stylesheet'>
<link href="{{ asset('css/jquery.dataTables.min.css') }}" rel='stylesheet'>

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST']) !!}


<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Current Participants Of Your Agency</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <br />Here you will find a list of all participants from your agency.
    </p>
  </div>
  <div class="gaccca-grid gaccca-wrap">

    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        <label class="gaccca-form-element__label" for="select-01">Program</label>
        <div class="gaccca-form-element__control">
          <div class="gaccca-select_container">
            <select class="gaccca-select" id="select-program">
              <option value="J1">J1 Visa</option>
              <option value="B1">B1 Visa</option>
              <option value="Placement">Placement</option>
            </select>
          </div>
        </div>
      </div>

    </div>

    <div class="gaccca-col gaccca-large-size_5-of-12 gaccca-medium-size_1-of-1">

      <div class="gaccca-form-element-checkbox-switch">
        <label class="gaccca-checkbox_toggle gaccca-grid">

          <input type="checkbox" name="checkbox-toggle-16" id="show-checkbox" />
          <span id="checkbox-toggle-16" class="gaccca-checkbox_faux_container">
            <span class="gaccca-checkbox_faux"></span>
            <span class="gaccca-checkbox_on">Enabled</span>
            <span class="gaccca-checkbox_off">Disabled</span>
          </span>
          <span class="gaccca-form-element__label gaccca-m-bottom_none">Show Current / Show All</span>
        </label>
      </div>
    </div>

    <!-- <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
      <div class="gaccca-form-element gaccca-form-element-margin">
        Total Participant : 0
      </div>
    </div>

    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">


    </div> -->



    <div class="gaccca-form-element gaccca-data-table-margin-48">

      <div class="gaccca-inside-data-table" id='programTableContainer'>

      </div>


    </div>



  </div>


</div>



{!! Form::close() !!}
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.jqueryui.min.js') }}"></script>
@include('common.footer')

<script>
  var reqResponse;

  function j1Program() {
    var dataTable = '';
    dataTable += '<table id="programTable" class="display" style="width:100%">';
    dataTable += '<thead>';
    dataTable += '<tr>';
    dataTable += '<th>First Name</th>';
    dataTable += '<th>Last Name</th>';
    dataTable += '<th>Email</th>';
    dataTable += '<th>Program</th>';
    dataTable += '<th>Status</th>';
    dataTable += '<th>Link</th>';
    dataTable += '<th>Agency Invoice</th>';
    dataTable += '<th>Agent</th>';
    dataTable += '<th>Submit Date</th>';
    dataTable += '</tr>';
    dataTable += '</thead>';

    dataTable += '<tbody>';
    for (var con of reqResponse.ContactList) {
      var submissionDate = '';
      var invoiceNumber = '';
      var visaStatus = '';
      var agentName = '';
      if (reqResponse.appMap[con.Id] != undefined && reqResponse.appMap[con.Id].Submission_date_of_details_by_agent__c != undefined) {
        submissionDate = reqResponse.appMap[con.Id].Submission_date_of_details_by_agent__c;
      }
      if (reqResponse.appMap[con.Id] != undefined && reqResponse.appMap[con.Id].Agency_Invoice_Number__c != undefined) {
        invoiceNumber = reqResponse.appMap[con.Id].Agency_Invoice_Number__c;
      }
      if (reqResponse.appMap[con.Id] != undefined && reqResponse.appMap[con.Id].J_Visa_Status__c != undefined) {
        visaStatus = reqResponse.appMap[con.Id].J_Visa_Status__c;
      }
      if (con.Contact__r != undefined && con.Contact__r.Name != undefined) {
        agentName = con.Contact__r.Name;
      }
      dataTable += '<tr>';
      dataTable += '<td>' + con.FirstName + '</td>';
      dataTable += '<td>' + con.LastName + '</td>';
      dataTable += '<td>' + con.Email + '</td>';
      dataTable += '<td>' + reqResponse.programVal + '</td>';
      dataTable += '<td>' + visaStatus + '</td>';
      dataTable += '<td>';
      if (reqResponse.appMap[con.Id].Agent_Confirmed__c) {
        dataTable += 'Case: Submitted ';
      } else {
        dataTable += 'Case: <a target="_blank" href="/JVisaParticipantInfo?participant=' + reqResponse.appMap[con.Id].Id + '">Add participant details</a> ';
      }
      if (reqResponse.appMap[con.Id].Agent_Confirmed__c) {
        if (reqResponse.hcaMapSubmitted[con.Id]) {
          dataTable += 'HCA: Submitted ';

        } else {
          dataTable += 'HCA: <a target="_blank" href="/host_company_agreement_agent?orgid=' + reqResponse.appMap[con.Id].Encrypted_Host_Company_Id__c + '">Click</a> ';

        }


        if (reqResponse.ds7002MapSubmitted[con.Id]) {
          dataTable += 'DS-7002:Submitted ';
        } else {
          dataTable += 'DS7002: <a  target="_blank" href="/DS_7002_Trainigsplan_agent?orgid=' + reqResponse.appMap[con.Id].Encrypted_Host_Company_Id__c + '">Click</a> ';
        }


      }
      dataTable += '</td>';
      dataTable += '<td>' + invoiceNumber + '</td>';
      dataTable += '<td>' + agentName + '</td>';

      dataTable += '<td>' + submissionDate + '</td>';
      dataTable += '</tr>';

    }
    dataTable += '</tbody>';
    dataTable += '</table>';
    document.getElementById('programTableContainer').innerHTML = dataTable;
    dataShow();
  }



  function b1Program() {
    var dataTable = '';
    dataTable += '<table id="programTable" class="display" style="width:100%">';
    dataTable += '<thead>';
    dataTable += '<tr>';
    dataTable += '<th>First Name</th>';
    dataTable += '<th>Last Name</th>';
    dataTable += '<th>Email</th>';
    dataTable += '<th>Program</th>';
    dataTable += '<th>Status</th>';
    dataTable += '<th>Agency Invoice</th>';
    dataTable += '<th>Agent</th>';
    dataTable += '</tr>';
    dataTable += '</thead>';

    dataTable += '<tbody>';
    for (var con of reqResponse.ContactList) {
      var invoiceNumber = '';
      var visaStatus = '';
      var agentName = '';
     
      if (reqResponse.appMap[con.Id] != undefined && reqResponse.appMap[con.Id].Agency_Invoice_Number__c != undefined) {
        invoiceNumber = reqResponse.appMap[con.Id].Agency_Invoice_Number__c;
      }
      if (reqResponse.appMap[con.Id] != undefined && reqResponse.appMap[con.Id].B_Visa_Status__c != undefined) {
        visaStatus = reqResponse.appMap[con.Id].B_Visa_Status__c;
      }
      if (con.Contact__r != undefined && con.Contact__r.Name != undefined) {
        agentName = con.Contact__r.Name;
      }
      dataTable += '<tr>';
      dataTable += '<td>' + con.FirstName + '</td>';
      dataTable += '<td>' + con.LastName + '</td>';
      dataTable += '<td>' + con.Email + '</td>';
      dataTable += '<td>' + reqResponse.programVal + '</td>';
      dataTable += '<td>' + visaStatus + '</td>';
    
      dataTable += '<td>' + invoiceNumber + '</td>';
      dataTable += '<td>' + agentName + '</td>';

      dataTable += '</tr>';

    }
    dataTable += '</tbody>';
    dataTable += '</table>';
    document.getElementById('programTableContainer').innerHTML = dataTable;
    dataShow();
  }

  function placementProgram() {
    var dataTable = '';
    dataTable += '<table id="programTable" class="display" style="width:100%">';
    dataTable += '<thead>';
    dataTable += '<tr>';
    dataTable += '<th>First Name</th>';
    dataTable += '<th>Last Name</th>';
    dataTable += '<th>Email</th>';
    dataTable += '<th>Program</th>';
    dataTable += '<th>Status</th>';
    dataTable += '<th>Agency Invoice</th>';
    dataTable += '<th>Agent</th>';
    dataTable += '</tr>';
    dataTable += '</thead>';

    dataTable += '<tbody>';
    for (var con of reqResponse.ContactList) {
      var invoiceNumber = '';
      var visaStatus = '';
      var agentName = '';
     
      if (reqResponse.appMap[con.Id] != undefined && reqResponse.appMap[con.Id].Agency_Invoice_Number__c != undefined) {
        invoiceNumber = reqResponse.appMap[con.Id].Agency_Invoice_Number__c;
      }
      if (reqResponse.appMap[con.Id] != undefined && reqResponse.appMap[con.Id].Placement_status__c != undefined) {
        visaStatus = reqResponse.appMap[con.Id].Placement_status__c;
      }
      if (con.Contact__r != undefined && con.Contact__r.Name != undefined) {
        agentName = con.Contact__r.Name;
      }
      dataTable += '<tr>';
      dataTable += '<td>' + con.FirstName + '</td>';
      dataTable += '<td>' + con.LastName + '</td>';
      dataTable += '<td>' + con.Email + '</td>';
      dataTable += '<td>' + reqResponse.programVal + '</td>';
      dataTable += '<td>' + visaStatus + '</td>';
    
      dataTable += '<td>' + invoiceNumber + '</td>';
      dataTable += '<td>' + agentName + '</td>';

      dataTable += '</tr>';

    }
    dataTable += '</tbody>';
    dataTable += '</table>';
    document.getElementById('programTableContainer').innerHTML = dataTable;
    dataShow();
  }


  function onloadMethod() {
    var formData = {
      programVal: 'J1',
      showResults: 'current'
    }
    commonFunction(formData);
  }

  $("#select-program").change(function() {

    var formData = {
      programVal: $('#select-program').val(),
      showResults: $('#show-checkbox').is(":checked") ? 'All' : 'current'
    }
    commonFunction(formData);

  });


  $("#show-checkbox").change(function() {

    var formData = {
      programVal: $('#select-program').val(),
      showResults: $('#show-checkbox').is(":checked") ? 'All' : 'current'
    }
    commonFunction(formData);

  });


  function commonFunction(formData) {
    console.log(formData);
    document.getElementById('loader').style.display = 'block';
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: 'POST',
      url: 'agentParticipantsList',
      data: formData,
      dataType: 'json',
      success: function(data) {
        reqResponse = data;
        console.log(data);
        if (formData.programVal == 'J1') {
          j1Program();
        } else if (formData.programVal == 'B1') {
          b1Program();
        } else if (formData.programVal == 'Placement') {
          placementProgram();
        }
      },
      error: function(data) {
        console.log(data);
      }
    });

  }

  function dataShow() {
    $('#programTable').DataTable({
      "pageLength": 50
    });
    document.getElementById('loader').style.display = 'none';
  }
  onloadMethod();
</script>