@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'DoAndDontsController@store', 'method' => 'POST',  'id' => 'gacccaForm_doanddont']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Dos and Don’ts</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please review the list of Program “Do’s & Don’ts” below in order to ensure successful cooperation and good communication throughout the application process.<br/>
           <br/> Please read the following items carefully to ensure you understand them:
        </p>
      </div>
      

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <h2 class="gaccca-h2-padding">DOS</h2> 
        <div class="gaccca-form-element gaccca-form-element-margin">
            <p>

                1. <strong>Communicate with us</strong> – Talk to us about your expectations, concerns, changes to your plans, and anything else that could influence your application. Only when we know what you need can we act on your behalf and find the right internship for you. You are also welcome to contact us during or after your internship for assistance or advice.
            </p>
            <p>
                2. <strong>Practice English skills</strong> – Take plenty of time to assess and practice your English skills – You must be able to conduct a phone or webcam interview in English as well as understand the tasks and activities required of you during the internship. If you are unsure about your English ability, ask us!
            </p>
            
            <p>
                3. <strong>Prepare application documents</strong> – Complete your English CV/resume and cover letter within the requested time. We may request modifications or improvements. As a rule of thumb, the final versions of your documents should be completed within a week to prevent any delays in the application process.
            </p>
       

            <p>4. <strong>Be available</strong> – Good cooperation can only work if both parties are able to be contacted easily. Therefore we ask you to: </p>
            
            <ul>
                <li>Check your emails regularly (at least every other day) to ensure you receive all important emails from us, potential companies, and your home-country partner agency(if applicable). Don’t forget to check your Spam folder!</li>
                <li>Inform us as soon as possible if your email address or telephone number changes.</li>
                <li>Let us know if you are going out of town or will be out of contact for a few days or more. If a company contacts us during this time, we need to be able to react quickly.</li>
            </ul>
          

            <p>5. <strong>Prepare for interviews </strong>/ - In the majority of cases, your interview will be by telephone or Skype. While we will of course help you with the organisational aspects of the interviews, it is important that you prepare and research the company as well. We will provide you with all the information you need well in advance of the interview.</p>
            <p>6. <strong>Send us correspondence</strong> – Should a company contact you directly before or after an interview, please forward any correspondence to us. It is in your best interest to keep us informed and above all, it is extremely important that we handle the correspondence.</p>
            <p>7. <strong>Prepare for life abroad</strong> – Just like in your home country, you are responsible for making your way to and from your place of work, to and from the airport etc. While some companies may assist with these costs, it is not common and should not be expected. It is best to travel a few days before your placement begins to give yourself a bit of time to explore and get used to your new surroundings. Your visa sponsor will also assist you in preparing for your arrival to the U.S.</p>
            <p>8. <strong>Keep in contact</strong> – If you have any problems with your internship, accommodations, or something does not live up to your expectations, please contact us immediately. We will investigate the issue and get in contact with the company, landlord, or property manager to come up with a satisfactory arrangement.</p>
            <p>9. <strong>Understand the visa</strong> – In order to enter the United States as an intern, you will need to obtain a J-1 visa. While we will coordinate this process, it is important that you understand the requirements and what will be expected of you as a J-1 visa holder: For more information please visit: www.J1-visa.com or www.B1-visa.com</p>


    
            
           
              


    </div>

    <h2 class="gaccca-h2-padding">DON’TS</h2>
    <div class="gaccca-form-element gaccca-form-element-margin">
    <p>1. <strong> Negotiate with the host company </strong> - Do not speak to the company about your payment or accommodation – we will do this on your behalf.</p>
    <p>2. <strong> Communicate with the host company directly </strong> - Do not take up direct contact with the company yourself. If you have any additional questions after the interview, let us know and we will ask the person responsible.</p>
    <p>3. <strong> Make changes without consulting us </strong> - Please inform us immediately if you want to make changes to your placement or application, e.g. because of a job offer, family issues, or changes in your education. In many cases, we can easily correct the situation and in some cases, postpone the placement.</p>
    <p>4. <strong> Make internship decisions alone </strong> - This includes amount of payment, holiday time, length of internship, location and so on. If you are asked by the company to provide samples of your previous work or projects you’ve worked on, please contact us first before sending. We can review the samples and offer you tips and help to ensure that the positive impression you created at the interview remains.</p>
    <p>5. <strong> Take on too much </strong> - Your first week(s) in the U.S. are going to be exciting, but also exhausting. Take time to rest and allow yourself to adapt and relax. If you have any questions or concerns after you arrival, contact us!</p>
    <p>6. <strong>Handle problems alone </strong> - Contact us immediately. We are on hand and can offer an objective opinion on how to proceed. Please don’t make big decisions without discussing with us first.</p>    
    </div>

    @if (isset($datas['doDontConfirm']) && $datas['doDontConfirm']=='')
    <div class="gaccca-form-element gaccca-form-element-margin">
        <div class="gaccca-form-element__control">
            <span class="gaccca-form-element__label gaccca-m-bottom_none"><strong>I confirm the Dos and Don’ts</strong><span class="gaccca-text-required" title="required">*</span></span>
            <div class="gaccca-checkbox">
            <input type="checkbox" name="confirm" id="checkbox-unique-id-73" value='Yes' required  value="checkbox-unique-id-73"  />
            <label class="gaccca-checkbox__label" for="checkbox-unique-id-73">
              <span class="gaccca-checkbox_faux"></span>
              <span class="gaccca-form-element__label">Yes</span>
            </label>
          </div>
        </div>
      </div>
      <button id="gaccca_saveBtn_doanddont" class="gaccca-button-save gaccca-button-save-margin">Confirm</button>


   
      </div>
     @else
     <div class="gaccca-form-element gaccca-form-element-margin">
     Dos and Don’ts confirmed on  {{$datas['doDontConfirm']}}
     </div>
      @endif
     
    </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif