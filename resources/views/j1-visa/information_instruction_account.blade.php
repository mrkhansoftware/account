@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Information Instruction','page'=>'information_instruction_account','parent_page'=>'J1 Program'])

<div class="gaccca-main-containt gaccca-gutters">
      <h1 class="gaccca-h1-padding">Step 1/5 - General Information and Instruction</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please make sure you meet all the requirements to participate in the program. If you are uncertain whether you meet those requirements or for which visa category you qualify, please contact us directly.
        </p> 
          
            <p>
            <strong>The entire application process for our programs is done online through your personal account.</strong>
            </p>
            <p>
            Keep your login data secure and don’t share it.
            </p>
            <p>
            You will find all information and necessary documents for your application in your account. Please complete the requested information and documents and upload them to your account. Please only submit documents in PDF or JPEG format. If a document consists of several pages please combine them into one single PDF file. We do not accept any applications submitted via email.
            </p>
            <p>
            Once we have received your completed application we will send you a confirmation email, your invoice and further information.
            </p>
            <p>
            Please note that depending on your education and/or work experience, your field of internship, and your internship duration we might ask you to submit additional documents. After we have received your application, we will check whether additional documents are necessary to process your visa application. If this is the case, we will notify you via email.
            </p>
       
       
        
      </div>
      
      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">



        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
  
            <div class="gaccca-form-element gaccca-form-element-margin">
                <button class="gaccca-accordion">Which documents do I have to submit for my application?</button>
                <div class="gaccca-panel">
                  <p>Besides completing all requested information, you will need to submit </p>



                  <ul>
                    <li><span>a copy of your passport, </span></li>
                    <li><span>a most recent and complete CV / Resume in English with exact dates,</span></li>
                    <li><span>your certificate of enrollment or diploma in English (in case you do not have an English version, please have the form "Proof of Student Status" or "Proof of Student Graduation" completed – to be found in your account).</span></li>
                </ul>


                </div>
                
                <button class="gaccca-accordion">Which documents may I have to submit upon request?</button>
                <div class="gaccca-panel">
                  <p>The following documents <strong>will be required:</strong>
                  </p>
                    <ul>
                        <li>
                            <span>Financial Security Statement, indicating you have sufficient funds for your stay in the U.S.</span>
                            <span><br/></span>
                        </li>
                    </ul>
                
                

                <p>The following documents may be required later <strong>but only upon request:</strong></p>
                <ul>
                    <li>1-2 Letter of reference in English from a(n) (former) instructor or employer</li>
                    <li>Letter of Motivation in which you outline your education and/or working experience, and the reasons for pursuing an internship in the United States</li>
                    <li><span >Copy of previous U.S. visas</span></li>
                    <li>
                        <span >Transcript of records showing the classes you have taken so far</span>
                    </li>
                </ul>
                </div>
                
                <button class="gaccca-accordion">Do I have request some documents from my host company?</button>
                <div class="gaccca-panel">
                    <p>
                        <span style="font-weight: 400">You </span><b>do not</b><span style="font-weight: 400"> need to request any documents from your host company.</span><span style="font-weight: 400"><br/>
                        </span><span style="font-weight: 400">We will contact your host company and request the required documents, such as the Training Plan (DS-7002), and we will check whether they meet the requirements.</span>
                    </p>
                </div>

                <button class="gaccca-accordion">Will my host company cover my visa fees?</button>
                <div class="gaccca-panel">
                    <p>
                        <span style="font-weight: 400">Should your host company be willing to cover your DS-2019 expenses, we will contact your company and provide them with the invoice.</span>
                    </p>
                </div>

                <button class="gaccca-accordion">What is the role of GACC California as my J-1 Sponsor?</button>
                <div class="gaccca-panel">
                    <p>
                        <span style="font-weight: 400">The U.S. authorities are outsourcing most of the visa procedure in the J-1 visa program to designated organizations, hereby authorizing them to act as legal sponsors during your internship/training. Sponsors are responsible for reviewing and processing your J-1 visa request. You cannot apply for a J-1 visa without having such a designated sponsor. </span><span style="font-weight: 400"><br/>
                        </span><span style="font-weight: 400"><br/>
                        </span><span style="font-weight: 400">As your U.S. State Department designated sponsor we will support and assist you throughout your J-1 visa application. We will review your application documents according to U.S. State Department rules and regulations. If your application and your internship/training offer meet all of the outlined requirements, we, as you designated sponsor, will approve your application and issue you a form called "DS-2019″. Legal sponsors are the only institutions allowed to grant a DS-2019 form. With this form you may then schedule your interview at a U.S. embassy or consulate to request a J-1 visa. </span><span style="font-weight: 400"><br/>
                        </span><span style="font-weight: 400"><br/>
                        </span><span style="font-weight: 400">The process of applying for a J-1 visa is always as follows: First, secure an internship or a training placement, then, apply for your DS-2019 with a designed sponsor, and finally, apply for a J-1 visa with the U.S. embassy or consulate.</span>
                    </p>
                </div>


                <button class="gaccca-accordion">How can I book my J-1 Application? </button>
                <div class="gaccca-panel">
                    <p>
                        <span style="font-weight: 400">By completing and submitting the information as well as documents needed for your account, accepting our terms and conditions and pressing the "Send Application to GACC California" you book our visa service.</span>
                    </p>
                </div>

               
                
              
            </div>
          </div>
          <br/>
          <br/>
          <div class="gaccca-form-element gaccca-form-element-margin">
            <div class="gaccca-form-element__label">
            @if (isset($datas['agencyPriceBookUrl']) && $datas['agencyPriceBookUrl']!=='')
            See also our current price list. <br/><img src="{{ asset('images/PDFImage.png') }}" width="18" height="18"> <a href="{{$datas['agencyPriceBookUrl']}}" target='_blank'>{{$datas['agencyName']}}</a>
         
             @else
             See also our current price list. <br/><img src="{{ asset('images/PDFImage.png') }}" width="18" height="18"> <a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzEv/W7fnG9Ll8sv.KD1o.l6v5kxqu16eMU6LQQwYgO6oNhY" target='_blank'>GACC California price list</a>
         
             @endif
            </div>
           

          </div>
          
    {!! Form::open(['action' => 'InformationInstructionAccountController@store','files' => true, 'method' => 'POST', 'data-parsley-validate', 'id' => 'participant-information-account' ]) !!}
    
    @if (isset($datas['Appli']['Confirm__c']) && $datas['Appli']['Confirm__c'])
    @else
    <input type="hidden" name='applicantId' value="{{isset($datas['Appli']['Id'])?$datas['Appli']['Id']:''}}"/>
    <input type="hidden" name='Contact__c' value="{{isset($datas['contID'])?$datas['contID']:''}}"/>
          {!! Form::submit('Next Step',array('id'=>'saveBtn','class'=>'gaccca-button-save gaccca-button-save-margin save-Class')); !!}
@endif
          {!! Form::close() !!}
      </div>
  
    </div>


 @include('common.footer')
 @else
  Permission denied. Please contact administrator.
  @endif

  <script>

var acc = document.getElementsByClassName("gaccca-accordion");
var j;

for (j = 0; j < acc.length; j++) {

  
    acc[j].addEventListener("click", function() {
    var gaccca_panel = this.nextElementSibling;
    var current_button = this;
    
    if (gaccca_panel.style.display === "block") {  
      gaccca_panel.style.display = "none";
      this.classList.remove("gaccca-accordion-minius"); 
    } else {
      gaccca_panel.style.display = "block";
      this.classList.add("gaccca-accordion-minius");       
    }
  });
}
</script>