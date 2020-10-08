@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Participant Agreement','page'=>'participant_agreement_account','parent_page'=>'J1 Program'])

{!! Form::open(['action' => 'ParticipantAgreementAccountController@store', 'method' => 'POST', 'id' => 'gacccaForm_paa']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Step 4/5 - Terms & Conditions and Trainee Intern Acceptance</h1>
     
      
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <h2 class="gaccca-h2-padding">I. Terms and Conditions for the J1-Visa Program of the German American Chamber of Commerce California, Inc.</h2>

        <div class="gaccca-form-element gaccca-form-element-margin">
            <p>
                The following agreement is between the German American Chamber of Commerce California, Inc. ("GACC California") of 600 B Street, Suite 300, San Diego, CA 92101 and You (“participant”). You, as a participant, must sign this form to indicate your agreement and permission to participate. We advise you to keep a copy for your own documentation. 

            </p>
          </div>


          <div class="gaccca-form-element gaccca-form-element-margin">

            <ol>
                <li>The GACC California is authorized by the United States Department of State (DoS) to sponsor program participants under the J-1 Exchange Visitor visa.</li>
                <li>The GACC California is authorized by the DoS to issue the Certificate of Eligibility DS-2019. This document allows participants to obtain the J-1 visa at a U.S. Consulate in their home country.</li>
                <li>The GACC California does not support activities in "unskilled occupations" (22 C.F.R. § 62.22, Appendix E) such as home health care, child care, door-to-door sales, etc. or any positions with more than 20% clerical tasks. GACC California cannot accept any participant planning to work as an Au Pair, Camp Counselor, as ship-crew member, teaching assistant or who intend to change the visa category during or right after the program.</li>
                <li>This agreement is valid for the dates of internship/training specified in the table above (maximum of 18 months for trainees, 12 months for interns). All positions must be full-time with a minimum 32 hours per week. By signing below, I agree to intern/train only at the original Host Company offering the internship/training.</li>
                <li>The participant guarantees that all statements in his/her documents are true and accurate. The participant also agrees to be excluded from this service if providing wrong and/or misleading information.</li>
                <li>GACC California reserves the right to decline participants who do not fulfill the necessary requirements, or do not act in accordance to the objectives of this service. In this case the service fee will be refunded according to the price list.</li>
                <li>GACC California does not give the participant an implicit or explicit guarantee for the success of a visa request, and denies any responsibility for rejections given through any third party involved in the visa process such as the U.S. Embassy.</li>
                <li>It is the participant's obligation to be familiar with all provided documents as well as terms and conditions. In case of a violation of laws, rules and regulations, the participant will be held responsible for his/her own actions regardless of his/her previous level of knowledge.</li>
                <li>The participant agrees to pay all required fees according to the GACC California price list.</li>
                <li>The participant may be required to take a language test in order to comply with U.S. Department of State internship requirements.</li>
                <li>The participant bears full responsibility for all wrong doing and losses or damages that come as a result of his/her own participation. In the case GACC California, its partner organizations domestic or abroad and/or employees, representatives, or other associates incur losses or damages through the behavior of a participant, the participant agrees to compensate the affected party. Such compensatory claims encompass all founded demands, causes of action, legal findings, losses, costs and expenditures that are levied against the afore named parties and encompases respectively those that were previously brought or that parties suffer due to, or in association with, the action of the participant.</li>
                <li>The participant needs to send all required documents (including a copy of his/her passport) to GACC California in a timely manner. GACC California is not responsible for any additional costs (e.g. fees for re-scheduling a flight) that might occur due to the late delivery of documents by the participant, or due to mistakes by postal services, or potential delayed visa issuance through the U.S. Embassy. We advise not to book a flight or accommodation until the participant has received news of the J-1 visa being issued.</li>
                <li>The participant's passports must be valid for a period of 6 months beyond the departure date from the USA.</li>
                <li>The participant must pay all fees to their respective U.S. Embassy in a timely manner.</li>
                <li>The participant can enter the U.S. 30 days prior to and must leave within 30 days after the date stated in the DS-2019 form. During this grace period the participant may prepare to leave the USA, and may travel within the USA. The participant cannot work, or engage in any research activities during the grace period, nor volunteer beyond the DS-2019 end date.</li>
                <li>The participant must be fully insured during the entire length of his/her stay in the U.S. In case of an extension of his/her stay the participant must ensure to be properly covered. GACC California is not responsible for any claims resulting from the shortcoming to do so.</li>
                <li>It is the participant's responsibility to handle the official documents (DS-2019 and J-1 Visa) carefully and with respect to all regulations given by the GACC California and any third party. If documents must be re-issued due to the participant's lack of care, cost incurred will be the sole responsibility of the participant.</li>
                <li>GACC California reserves the right to exclude any participant from the program who puts any involved parties at serious risk, including himself/herself. No refund will be given in such cases.</li>
                <li>If the participant has previously been in possession of a J-1 Intern visa, he/she cannot apply for a second J-1 visa immediately. He/she has to remain in his/her country of residence for at least 90 days before a new DS-2019 can be issued.
                </li>
                <li>The J-1 visa program is subject to the regulations of U.S. authorities. Regulations may be subject to change without any prior notice. GACC California cannot be held liable for such changes. This includes fees and regulations such as a SEVIS fee (Student and Exchange Visitor System.) The participant must pay any fees required by the SEVIS (Student and Exchange Visitor System.)</li>
                <li>The participant understands that the DS-2019 or J-1 visa-request procedure can take from 14 business days up to several weeks.</li>
                <li>All disputes resulting from this contract will be handled by the local American Arbitration Association (AAA) office in San Diego/California according to the applicable rules and regulations of the AAA.</li>
                <li>GACC California will attempt to adhere to all arrangements made. However, GACC California reserves the right to cancel or alter any parts of the program should unforeseen circumstances make this necessary.</li>
                <li>Neither party shall be responsible for any delay or failure in performance resulting from any causes beyond their control. This includes without limitation: war, strikes or labor disputes, civil disturbances, fires, natural disasters, and Acts of God.</li>
                <li>The Participant must inform GACC California if, for any reason, the stay will be extended.</li>
                
              </ol> 

              <h4><strong>Entire Agreement and Severability</strong></h4>
              <p>This document constitutes the entire agreement between the parties, and represents the complete and entire understanding of the parties with respect to the subject matter of this agreement. This instrument supersedes any other agreement or understanding between the parties, whether written or oral. In the event that any term or provision of this instrument is held by a court of competent jurisdiction to be unenforceable, then the remaining provisions of this instrument and the agreement which it evidences shall remain in full force and effect.</p>

          </div>


          <h2 class="gaccca-h2-padding">II. Trainee Intern Acceptance</h2>
          <div class="gaccca-form-element gaccca-form-element-margin">
                <h4>1 Program Duration</h4>
                <ol>
                    <li>This agreement is valid for the dates of training specified in the table above (maximum of 18 months for trainees, 12 months for interns). By signing below, I agree to intern/train only at the original Host Company offering the internship/training.</li>
                    <li>I understand, that the German American Chamber of Commerce California, hereby referred to as GACC CA, is my U.S. Department of State designated Exchange Visitor Program sponsor.</li>
                    <li>I understand that while only GACC California can terminate my program, there may be circumstances under which the Host Company cannot provide proper training anymore. If for any reason (including but not limited to getting fired; termination of the position; injury; disappointment with internship/training conditions, business bankruptcy; reduction in personnel; disciplinary reasons, etc.) I no longer intern/train at the Host Company, I agree to contact GACC California immediately in order for GACC California to look into replacement options. If no Host Company replacement can be secured, I agree to leave the United States within 10 days of the termination of my program by GACC California, and/or not enter the U.S. under GACC California sponsorship to commence internship/training if the Host Company at anytime prior to entry can not provide the agreed-upon program.</li>
                    <li>I understand that U.S. Government agencies having jurisdiction over immigration matters exercise discretion in administering their responsibilities, and therefore GACC California can make no claim or representation with respect to the likelihood of success in any visa application or the time in which a particular application is processed.</li>
                    <li>I also agree and understand that the J-1 visa is an Exchange Visitor Visa and I will be interning/training, and not working at my Host Company, and should not be placed in positions that are filled or would be filled by full-time or part-time employees.</li>
                    <li>I understand and accept that GACC California cannot guarantee that the Host Company will stay in business for the duration of time indicated on the DS-2019 to provide the agreed-upon internship/training, and cannot therefore guarantee that the internship/ training at that Host Company (or any potential other subsequent Host Company) will end up lasting the entire duration of the dates indicated on the DS-2019.</li>
                  </ol> 

                  <h4>2 Intern/Trainee Responsibilities</h4>
        
                  <ol>
                    <li>Arrive and depart the U.S. in accordance with the dates listed on my DS-2019 form. I understand that I have 30 days beyond the date on my DS-2019 form in which I may remain in the U.S. to tie up loose ends and travel within the U.S; however I am not allowed to continue my internship/training during that time;</li>
                    <li>Complete the tasks and activities outlined in Training/Internship Placement Plan (DS-7002) to the utmost of my ability;</li>
                    <li>Complete all GACC California's evaluations in a timely manner;</li>
                    <li>Notify GACC CA within 10 days of a change of address;</li>
                    <li>Maintain for the duration of the Program a functioning email address and phone number, and respond in a timely manner to all communications from GACC CA;</li>
                    <li>Observe all of the Host Company's rules and regulations, especially work regulations and safety rules;</li>
                    <li>Report all strange or unsatisfying situations immediately to GACC California by phone or email;</li>
                    <li>Intern/train only at the originally designated Host Company during the specified dates of internship/training and only in the position described in the Training/Internship Placement Plan (DS-7002);</li>
                    <li>Not for any reason change my internship/training or Host Company without seeking prior written approval from GACC California. It is the determination of GACC California whether a transfer is allowed by the regulations governing J-1 participants. Any change of Host Company without approval of GACC California may be grounds for termination of my internship//training;</li>
                    <li>Observe the rules, regulations, instructions, business hours, and safety guidelines of my Host Company and its representatives;</li>
                    <li>Treat all Host Company equipment (tools, machines, systems as well as other facilities, materials, and products) with care;</li>
                    <li>NOT being in the U.S. for employment, but for a internship/training program;</li>
                    <li>Cooperate and communicate with all GACC California personnel in all aspects of my internship/training and cooperate with requests it deems necessary regarding any aspect of my experiences at the Host Company;</li>
                    <li>Advise GACC CA of plans to travel outside the U.S. while on the J-1 program at least two weeks prior to the expected date of travel;</li>
                    <li>Not change my visa status during my program with GACC CA.</li>
                  </ol> 

                  <h4>3 Hold Harmless</h4>

                  <ol>
                    <li>I do hereby promise, undertake and guarantee to hold harmless and to indemnify the GACC California and all other persons connected with the program and application process from all liabilities, claims, actions, damages, expenses and losses of any nature whatsoever caused by or arising from any aspect of the internship/training, and to hold GACC California, its officers, and representatives harmless in the event of any personal illness, injury, or other problems or events that may cause me to miss all or part of my agreed upon program.</li>
                    <li>I agree to hold the GACC California harmless from any and all claims including but not limited to any representations or misrepresentations on the part of the Host Company, any agency with which I may have contracted in any way related to my internship/training in the USA, or any other entities or companies, related or not related to GACC California, regarding any part of the sponsorship or internship/training in the USA, information given (true, false or otherwise), changes in living, employment or other conditions prior to or after departure for the USA to begin training, laws or regulations affecting my internship/training, or the site of activity. Additionally, if for any reason I or anyone representing or related to me in any way despite my full agreement with all aspects of this contract brings suit or otherwise seeks damages from or against GACC California or any other persons connected therewith for any reason related to any aspect of GACC California sponsorship of me or my family member(s), I agree to and shall immediately pay on an ongoing basis for all legal and related costs and damages incurred by GACC California and any other persons connected therewith in response to such suit, upon receipt of invoice by GACC California. In the event that I am at any time unable to pay GACC California for all of its legal and related costs and damages as described, I agree to postpone such suit until a time when I can do so.</li>
                    <li>I hereby state and affirm that the internship /training procedures and expectations have been presented and explained to my full and complete understanding and satisfaction and that I am voluntarily entering into this agreement to participate in this program.</li>
                  </ol> 
                 <h4>4 Confidentiality</h4>
                 <p>I agree to fully observe confidentiality regarding GACC California activities and communications and Host Company activities and communications regarding this program.</p>
                 <h4>5 Choice of Law</h4>
                 <p>Any and all disputes arising under or out of this Agreement shall be governed by and resolved in accordance with the laws of the State of California, USA. No other law shall be applicable. Any lawsuit arising out of this Agreement, or in connection with this Agreement in any manner, may only be brought in San Diego County, California, USA.</p>
                 <h4>6 Final Reminders</h4>
                 <ol>
                     <li>I understand that the German American Chamber of Commerce California (GACC California) is my J-1 visa sponsor and that I must remain in contact with throughout the duration of my internship/training.</li>
                     <li>I understand that I am NOT permitted to accept ANY outside employment while in the U.S. other than my approved Training/Internship Placement Plan (DS-7002).</li>
                     <li>I understand and agree to contact GACC California within one week of my start date in order to confirm my arrival and validate my J-1 visa.</li>
                    <li>I understand to inform GACC California of my U.S living address and update this information should it change during the time I am in the US.</li>
                    <li>I agree to depart the United States no later than 30 days after the internship/training end date listed on my DS-2019 form and not to attempt to remain in the US to pursue employment. I understand to leave the U.S. within 10 days in case of an earlier termination of my program.</li>
                    <li>I understand that I cannot apply for a J-1 visa in conjunction with filing for any other US non-resident alien visa.</li>
                </ol>
                <p>I certify that I am the person whose name appears in this application and that all information given in my application is true and accurate to the best of my knowledge. I acknowledge that the internship/training procedures and J-1 regulations regarding the visa sponsorship for which I am applying have been explained thoroughly.</p>
         <p>Furthermore, I understand that GACC California cannot guarantee the likelihood of success of any visa application nor guarantee the time frame in which my application is processed.</p>
        <br/>
        <br/>
        <h4>
            I have read and understood all the Terms and Conditions to participate in the GACC California's program.<span class="gaccca-text-required" title="required">*</span> </h4>        
        

                    <span class="gaccca-radio">
                      <input required='' type="radio" id="radio-Yes" value="Yes" name="isAccepted" {{isset($datas['Appli']['Accept_Terms_Conditions__c']) && $datas['Appli']['Accept_Terms_Conditions__c']?'checked':''}}  />
                      <label class="gaccca-radio__label" for="radio-Yes">
                        <span class="gaccca-radio_faux"></span>
                        <span class="gaccca-form-element__label">I agree</span>
                      </label>
                    </span>
                  <br/>
                  <br/>
                  
                  @if (isset($datas['Appli']['Accept_Terms_Conditions__c']) && $datas['Appli']['Accept_Terms_Conditions__c'])
                  @else 
                 
        
                  <button id="gaccca_saveBtn_paa" class="gaccca-button-save ">Save & Continue</button>
                    @endif
        </div>









   
      </div>
  
    </div>

{!! Form::close() !!}
@include('common.footer')

@include('common.footer')
  @else
  Permission denied. Please contact administrator.
  @endif