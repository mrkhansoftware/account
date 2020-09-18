@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


<link href="{{ asset('css/dataTables.jqueryui.min.css') }}"  rel='stylesheet' >
<link href="{{ asset('css/jquery.dataTables.min.css') }}"  rel='stylesheet' >

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Current Participants Of Your Agency</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p><strong>No Organization selected</strong>
            <br/>Here you will find a list of all participants from your agency.
        </p>
      </div> 
      <div class="gaccca-grid gaccca-wrap">

          <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <label class="gaccca-form-element__label" for="select-01">Program</label>
                <div class="gaccca-form-element__control">
                  <div class="gaccca-select_container">
                    <select class="gaccca-select" id="select-program" >                      
                      <option value="j1">J1 Visa</option>
                      <option value="b1">B1 Visa</option>
                      <option value="placement">Placement</option>
                    </select>
                  </div>
                </div>
              </div>
           
        </div>

        <div class="gaccca-col gaccca-large-size_5-of-12 gaccca-medium-size_1-of-1">

            <div class="gaccca-form-element-checkbox-switch">
                <label class="gaccca-checkbox_toggle gaccca-grid">
                  
                  <input type="checkbox" name="checkbox-toggle-16" id="show-checkbox"   />
                   <span id="checkbox-toggle-16" class="gaccca-checkbox_faux_container" >
                    <span class="gaccca-checkbox_faux"></span>
                    <span class="gaccca-checkbox_on">Enabled</span>
                    <span class="gaccca-checkbox_off">Disabled</span>
                  </span>
                  <span class="gaccca-form-element__label gaccca-m-bottom_none">Show Current / Show All</span>
                </label>
              </div>
        </div>

        <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                Total Participant : 0
            </div>                      
        </div>

        <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
            
                <div class="gaccca-form-element-text-participant">You do not have any participants in our system.</div>
             
           
           
        </div>



        <div class="gaccca-form-element gaccca-data-table-margin-48">
      
          <div class="gaccca-inside-data-table">
          <table id="example_3" class="display" style="width:100%">
              <thead>
                  <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Program</th>
                      <th>Status</th>
                      <th>Link</th>
                      <th>Agency Invoice</th>
                      <th>Agent</th>
                      <th>Submit Date</th>
  
                  </tr>
              </thead>
            <tbody>
                <tr>
                    <td>Michel</td>
                    <td>Dane</td>
                    <td>michel@gmail.com</td>
                    <td>J1</td>
                    <td>Problem</td>
                    <td>Case:Submitted HCA: <a href="#">Click</a> DS7002: <a href="#">Click</a></td>
                    <td>#1234</td>
                    <td>Erin Kim</td>
                    <td>01/03/2020</td>
                </tr>
                <tr>
                  <td>Michel</td>
                  <td>Dane</td>
                  <td>michel@gmail.com</td>
                  <td>J1</td>
                  <td>Problem</td>
                  <td>Case:Submitted HCA: <a href="#">Click</a> DS7002: <a href="#">Click</a></td>
                  <td>#1234</td>
                  <td>Erin Kim</td>
                  <td>01/03/2020</td>
              </tr>
              <tr>
                  <td>Michel</td>
                  <td>Dane</td>
                  <td>michel@gmail.com</td>
                  <td>J1</td>
                  <td>Problem</td>
                  <td>Case:Submitted HCA: <a href="#">Click</a> DS7002: <a href="#">Click</a></td>
                  <td>#1234</td>
                  <td>Erin Kim</td>
                  <td>01/03/2020</td>
              </tr>
              <tr>
                  <td>Michel</td>
                  <td>Dane</td>
                  <td>michel@gmail.com</td>
                  <td>J1</td>
                  <td>Problem</td>
                  <td>Case:Submitted HCA: <a href="#">Click</a> DS7002: <a href="#">Click</a></td>
                  <td>#1234</td>
                  <td>Erin Kim</td>
                  <td>01/03/2020</td>
              </tr>
              <tr>
                  <td>Michel</td>
                  <td>Dane</td>
                  <td>michel@gmail.com</td>
                  <td>J1</td>
                  <td>Problem</td>
                  <td>Case:Submitted HCA: <a href="#">Click</a> DS7002: <a href="#">Click</a></td>
                  <td>#1234</td>
                  <td>Erin Kim</td>
                  <td>01/03/2020</td>
              </tr>
            </tbody>
          
          </table>
          </div>
         
  
      </div>
  

          
      </div>
  
   
    </div>
   


{!! Form::close() !!}
<!-- <script src="{{ asset('js/jquery-3.3.1.js') }}"></script> -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.jqueryui.min.js') }}"></script>
@include('common.footer')

<script>
$(document).ready(function() {
$('#example_3').DataTable( {
        "pagingType": "full_numbers"
    });
  });
$( "#select-program" ).change(function() {
 
 var select_program = this.value;
 var show = $('#show-checkbox').is(":checked")
 commonFunction(select_program,show);

});


$( "#show-checkbox" ).change(function() {
 
 var select_program = $('#select-program').val();
 var show = $('#show-checkbox').is(":checked");
 commonFunction(select_program,show);

});


function commonFunction(select_program,show){

  console.log(select_program,show);
  

var formData = {
  select_program: select_program,
  show : show
};


$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type: 'POST',
url: 'ajax_select_prog',
data: formData,
dataType: 'json',
success: function (data) {
  
  



},
error: function (data) {
console.log(data);
}
});

}


</script>