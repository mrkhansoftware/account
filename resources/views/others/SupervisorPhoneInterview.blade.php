@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
        <h1 class="gaccca-h1-padding">Supervisor Phone Interview</h1>
        <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
            <p> <strong>Name of Applicant:</strong> Test User</p>
            <p> <strong>Name of Supervisor:</strong> pts akhan</p>

            <p> <strong>Supervisor Phone Number:</strong> 9782448804</p>

            <p> <strong>Supervisor Email:</strong> ashifkhanpts@gmail.com</p>
            <p> <strong>Host Company:</strong> Ashif Dev Test</p>

           
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
            <p>Questions for the Supervisor Interview:</p>
            <p><u>Pre-interview reminders:</u> This phone interview is to briefly verify the internship. Thanks so much for taking the time out of your schedule.</p>
            <p>Do you have any questions before we get started?</p>
        </div>


        <h2 class="gaccca-h2-padding">Company information:</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Briefly describe your company: </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        In what kind of environment will the intern or trainee be training? (i.e. cubicle-based office, open floor plan, factory setup, etc) </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        What kinds of tasks do you have prepared for the intern or trainee? What about cultural activities? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Will you be the supervisor throughout the duration of the program? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Will the intern or trainee be working with anything that will require extra safety precautions or special training? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Will the intern or trainee be expected to provide any of their own equipment or tools? i.e. laptop etc. </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Have you received a copy of the Host Company Handbook and read it? (If not, please confirm so we can resend it.) </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>



        </div>





        <h2 class="gaccca-h2-padding">Intern/Trainee information:</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        How did you find the intern/trainee?</label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Have you interviewed him or her on the phone or by webcam? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Do you feel his or her English skills are sufficient for what the position requires?
                    </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Has this internship opportunity been advertised to Americans as well? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Can you confirm that you understand the purpose of the J-1 visa program and that you will not attempt to extend an offer of employment or change the visa status of your Interns or Trainees, as it is required that they return home after completing the program? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <p><u>Post-interview reminders:</u><br />
                        The questions are now finished, thank you I have a few final reminders. Do you have any questions before I start? As a next step you will receive a final copy of the Training Plan and Host Company Agreement by email from GACCCA. Please sign and submit as soon as possible.</p>
                        <ul>
                            <li>
                            Must contact GACCCA if the supervisor changes, program dates change, the intern is terminated or quits, the site of activity changes, if the training plan changes, or if the intern  does not show up – VERY important.
                            </li>
                            <li>VERY important to stay in status- we need to know if the intern/trainee has not arrived and there have been delays.  Once check-in is completed the intern can obtain an SSN and they know how to do this.</li>
                            <li>There will be a midpoint and final evaluation during the internship. These are mandatory and must be completed to keep the intern and your company in good standing with the program.</li>
                            <li>The J-1 visa is an internship and training visa, NOT a work visa—the intern or trainee should not be doing any tasks for which your company could hire a normal employee.</li>
                            <li>Intern/trainee is there to assist, should not be in charge of any tasks or projects or be working independently.</li>
                            <li>Are there questions that I can answer for you?</li>
                            </ul>

                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Name of Interviewer:</label>
                    <div class="gaccca-form-element__control">
                        <input type="text" class="gaccca-input" />

                    </div>
                </div>
            </div>



        </div>





        <h2 class="gaccca-h2-padding">Please Note:</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <p>You can sign digitally online with your mouse or on your phone with your finger.</p>
                </div>
            </div>










            <button class="gaccca-button-save gaccca-button-save-margin">Sign &amp; Submit</button>

        </div>



    </div>

{!! Form::close() !!}
@include('common.footer')