@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'','page'=>'page'])
@include('common.signScript');
{!! Form::open(['action' => 'PreDepartureController@store','files' => true, 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Pre-Departure Orientation Confirmation</h1>
      

    <div class="gaccca-form-element gaccca-form-element-margin">
    
        <p><strong>Program Purpose</strong></p>
        <ol><li>
            Cultural Exchange
        </li></ol>


        <p><strong>Program Regulations</strong></p>
            <ol>
            <li>Internship Requirements</li>
            <li>Seeking permanent employment/Change of visa status</li>
            <li>Role of the Sponsor</li>
            <li>Name of RO / ARO and contact information</li>
            <li>Information about fees to be paid and other costs during the program</li>
            <li>Returning home after program completion</li>
            <li>Responding to sponsor communications</li>
            <li>DoS Helpline Contact Information</li>
            </ol>
       <p><strong>Program Responsibilities</strong></p>
       <ol>
        <li>Arrival Check-in</li>
        <li>Evaluations</li>
        <li>Monthly Check-in</li>
        </ol>
    
        <p><strong>Consequences of Program Violations</strong></p>
        <ol>
            <li>Cancellation or Termination</li>
        </ol>

        <p><strong>Program Participation</strong></p>


        <ol>
            <li>Health Insurance (discuss coverage during program duration as well as need for additional coverage
                                  before and after while in the U.S.)</li>
            <li>Social Security Card</li>
            <li>Taxes</li>
            <li>Safety and Welfare</li>
            <li>Travelling outside the U.S</li>
            <li>Cross - Cultural Activities</li>
            </ol>


            <p>At any time you are encouraged to contact your sponsor for support or guidance.</p>
            <p>By signing this document I confirm that I have reviewed with GACC California and understand all of the topics listed here. I also confirm that I have read all of the following program material provided to me:</p>



                <ol>
                <li>Pre-Departure Orientation Handbook</li>
                <li>DS-7002 Training Plan</li>
                <li> DS-2019</li>
                <li>Sponsor Letter</li>
                <li>Department of State Welcome Letter / Brochure</li>
                <li>The Wilberforce Pamphlet</li>
                <li>Health Insurance Information
                </li>
                </ol>

    </div>
    @include('common.signHTML');
    <button class="gaccca-button-save gaccca-button-save-margin">Submit</button>
    </div>

    
{!! Form::close() !!}
@include('common.footer')

@else
  Permission denied. Please contact administrator.
  @endif