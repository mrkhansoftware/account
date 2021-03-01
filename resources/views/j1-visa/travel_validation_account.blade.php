@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Travel Validation','page'=>'travel_validation_account','parent_page'=>'J1 Program'])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Request a Travel Validation</h1>
    
      <div class="gaccca-form-element gaccca-form-element-margin">
        <p><strong>What is a Travel Validation ?</strong></p> <br/>
        <p>When you intend to travel outside of the U.S. sometime during the period of your internship you will need a travel validation on your DS-2019 form.</p>
    <p>On a J-1 visa, you are allowed to leave the U.S. for a maximum of 30 days. You can either take advantage of the whole amount of time permitted to be spent outside of the U.S. all at once, or you can organize your time as you like. However, you must be aware of the fact that you are prohibited to exceed a period of 30 days.</p>  

    <p>The travel validation <strong> allows you to re-enter the U.S. </strong> on your current J-1 visa and is valid for one year.</p>

    <p> <strong> NOTE: </strong> If you do not have a valid travel validation on your DS-2019 form you will be refused re-entry into the U.S. </p>


    <p> <strong> You will not need </strong> a travel validation if you re-enter the United States from the following contiguous countries/Caribbean Islands: Canada, Mexico, Anguilla, Antigua, Aruba, Bahamas, Barbados, Barbuda, Bermuda, Bonaire, British Virgin Islands, Cayman Islands, Curacao, Dominica, the Dominican Republic, Grenada, Guadeloupe, Haiti, Jamaica, Marie-Galante, Martinique, Miquelon, Montserrat, Saba, Saint Barthelemy, Saint Christopher, Saint Eustatius, Saint Kitts-Nevis, Saint Lucia, Saint Maarten, Saint Martin, Saint Pierre, Saint Vincent and Grenadines, Trinidad and Tobago, Turks and Caicos Islands, and other British, French and Netherlands territory or possessions bordering on the Caribbean Sea.</p>

    <p> You will, however, need a travel validation for Cuba. </p>

    <p> Please let your supervisor know about your travel plans and ask him to sign our Travel Validation form in case you intend to leave the U.S. during the time of your internship. Please then send this signed form back to us!</p>

    <p>In case of any questions or concerns, please email visa@gaccca.org or call +1 619 272 1237.</p>


    <br/>

    <p><strong>How to request a Travel Validation?</strong></p>
    <br/>
    <ol>
<li>Fill in our Travel Validation Request form; please sign yourself and have your supervisor sign it too.</li>
<li>Send completed form to us together with your original DS-2019 form (no copy!) (via FedEx or UPS only – with tracking number – for safety reasons) and a prepaid<br/>
    envelope with your address and tracking number (again, via FedEx or UPS only, so your DS-2019 can be sent back safely)</li>
<li>In case your DS-2019 form should get lost in the mail you will have to pay a re-issuance fee of 250 EUR.</li>
<li>Send in at least 3 weeks prior to your trip for processing reasons!</li>




    </ol>


    <p> <strong>Please note, should you forget to include a prepaid return envelope we will charge a shipping fee of $50.</strong>  </p>
    <br/>
    <p>Please send it to this address:</p><br/>
    <p>German American Chamber of Commerce California, Inc. <br/>
        600 B Street, Suite 300 <br/>
        San Diego, CA 92101
    </p><br/><br/>
    <p>Please download our Travel Validation form here: <img src="{{ asset('images/PDFImage.png') }}" width="18" height="18" /> <a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzEq/NQle6EvT9tUjWLPwCczNSM7T1_A5OKqpJH7vV.flzbA" target='_blank'>Travel Validation</a></p>
                      
</div>
     
     
    </div>


{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif