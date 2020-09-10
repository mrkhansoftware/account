@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}
<div class="gaccca-main-containt">
        <h1 class="gaccca-h1-padding">Applicant Webcam Interview Questions and Report Test User</h1>
        <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
            <p> <strong>Program:</strong> J-1 Intern</p>
            <p><strong>Timeframe of internship (mm/dd/yy):</strong> 01/01/20 to 12/31/21</p>
            <p> <u>Pre-interview reminders:</u> This webcam interview is required by the U.S. Department of State to
                verify your English skills, find out about your educational background and internship or training, and
                to ensure you qualify for the J-1 visa. This is NOT the Consulate or Embassy interview; this is to
                verify eligibility for sponsorship. The final decision on if you will receive the J-1 visa is determined
                at the U.S Consulate/Embassy interview.</p>
        </div>


        <div class="gaccca-form-element gaccca-form-element-margin">
            <p>Questions for the Webcam Interview:</p>
        </div>


        <h2 class="gaccca-h2-padding">Academic Background</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        What do/did you study? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        When did you receive your degree/When do you expect to finish? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        What level is your degree? (Bachelor’s, Master’s, Doctorate, etc) </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        If graduated, what have you been doing since you graduated? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Do you have any previous internship experience in your field? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>



        </div>





        <h2 class="gaccca-h2-padding">Internship/ Training</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Why do you want to do an internship/training in the U.S. specifically? Why not in another
                        english speaking country?</label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        How did you find the internship/training at (Ashif Dev Test)? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Have you had an interview with (pts akhan) or anyone else at the company by phone or webcam?
                    </label>
                    <div class="gaccca-form-element__control">
                        <input type="text" class="gaccca-input" />

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        What skills and knowledge do you hope to gain from this internship/training? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        An important aspect of the J-1 visa is learning about american culture. What plans do you have
                        to engage in activities in your free time? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        How do you expect this experience to benefit your future career? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        What will you do after your training/internship is finished? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>





        </div>





        <h2 class="gaccca-h2-padding">Visa/ Immigration Related:</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">



            <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="select-01">Have you ever been to the United
                        States?</label>
                    <div class="gaccca-form-element__control">
                        <div class="gaccca-select_container">
                            <select class="gaccca-select" id="select-01">
                                <option value="none">--none--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>
                    </div>
                </div>

            </div>




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Have you ever been denied a visa or refused entry to the U.S. in the past? </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Do you have any previous visas to the U.S.? (if yes, GACC California/IIEEX needs a copy)
                    </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>




            <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="select-01">Do you have dual citizenship?</label>
                    <div class="gaccca-form-element__control">
                        <div class="gaccca-select_container">
                            <select class="gaccca-select">
                                <option value="none">--none--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>
                    </div>
                </div>

            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        If Yes </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>









            <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="select-01">Do you have a criminal record background
                        in your home country that could affect your ability to enter the U.S.?</label>
                    <div class="gaccca-form-element__control">
                        <div class="gaccca-select_container">
                            <select class="gaccca-select">
                                <option value="none">--none--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>
                    </div>
                </div>

            </div>


            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        If Yes </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>




            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <p><u>Post-interview reminders:</u><br />
                        The questions are now finished, however you may want to take notes on the following information.
                        A lot of this information can be found in the Participant Handbook as well, which is mandatory
                        to review before your embassy appointment.</p>

                    <ul>
                        <li>
                            The J-1 visa is an internship and training visa, NOT a work visa or tourist visa—the visa
                            interview is brief, however you must be able to demonstrate what<b> professional skills and
                                knowledge</b> you want to get from the experience – improving English is not enough.

                        </li>
                        <li>When your application is approved by GACC California/IIEEX you will receive final documents
                            to sign. Please sign and send them back by email as quickly as possible so we may issue the
                            DS-2019 form via UPS Express (4-6 business days)</li>
                        <li>Will send an email with tracking number and information about next steps: Your Participant
                            Handbook will explain the next steps for the visa interview at the U.S. Consulate/Embassy as
                            well as your arrival in the U.S., however here what you will need to do when you receive
                            your DS-2019 from us:
                            <ol>
                                <li>Pay $220 USD SEVIS fee online. Will receive the website link in email, print the
                                    confirmation page and take the confirmation page w/ you</li>
                                <li>Complete the online DS-160 form, print out the confirmation page with your photo and
                                    barcode at the end of the form and take it with you to the visa interview (the
                                    website will ask you to print it)</li>
                                <li>Schedule the visa interview: Pay the consulate fee which is around $160 USD, then
                                    schedule an appointment, print the confirmation page.</li>
                                <li>Prepare for your interview, review your training plan, and practice English (if
                                    needed)</li>
                            </ol>
                        </li>
                        <li>What to take to your interview/show to the Consular Officer: <ol>
                                <li>(0) Passport</li>
                                <li>(1) DS-2019 – provided by GACC California/IIEEX</li>
                                <li>(2) Training/Internship Placement Plan (DS-7002) signed by you and supervisor
                                    –provided by GACC California/IIEEX</li>
                                <li>(3) SEVIS payment receipt</li>
                                <li>(4) DS-160 Confirmation Page</li>
                                <li>(5) Visa Interview Appointment Confirmation Page</li>
                                <li>(6) Proof of Sufficient Funds (Financial Security Statement form, copy of bank
                                    statement, bank letter of guarantee, and letter of support from parent or relative:
                                    $1300 per month. If receiving a stipend from the company, this counts toward the
                                    proof of funds)</li>
                                <li>(7) Proof of home country ties – letter from potential employer, property,
                                    enrollment certificate, financial expenses paid in home country etc)</li>
                            </ol>
                        </li>
                        <li>Other suggested items will be listed in your Pre-Departure Orientation Handbook</li>
                        <li>GACC California/IIEEX recommends waiting to book flight until after you receive visa, if not
                            then try to book refundable or changeable tickets</li>
                        <li>No guarantee that you will get the J-1 visa at the interview, the final decision lies with
                            Consular Officer</li>
                        <li>The DS-2019 is the most important document, certificate of eligibility to hold the visa in
                            the first place, proof of legal status and means of identification; when traveling always
                            need to carry both DS-2019 + passport </li>
                        <li>After you arrive, you must complete GACC California/IIEEX online check-in within the first
                            one week of your internship or training to validate your J-1 visa status. VERY important to
                            stay in status, also cannot apply for a Social Security Number until after check-in. SSN
                            process will be explained after you completed your check-in.</li>
                        <li>Please keep in mind that you have to complete a monthly check-in with us. At the beginning
                            of each month you will receive an email with the check-in link.</li>
                        <li>Please inform us if you intend to travel outside the U.S. 3 weeks in advance! You will need
                            a travel validation on your DS-2019 form.</li>
                        <li>Evaluations are an important part of the J1 program, mid-point (for internship over 6
                            months), final for everyone, mandatory!</li>
                        <li>Please contact us if you have ANY questions or concerns during your program, we are here to
                            help you!</li>
                    </ul>

                </div>
            </div>




        </div>


        <h2 class="gaccca-h2-padding">Report:</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">




            <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="select-01">The Applicant’s English comprehension
                        ability is</label>
                    <div class="gaccca-form-element__control">
                        <div class="gaccca-select_container">
                            <select class="gaccca-select" id="select-01">
                                <option value="none">--none--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>
                    </div>
                </div>

            </div>


            <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="select-01">The Applicant’s English speaking ability
                        is:</label>
                    <div class="gaccca-form-element__control">
                        <div class="gaccca-select_container">
                            <select class="gaccca-select" id="select-01">
                                <option value="none">--none--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>
                    </div>
                </div>

            </div>



            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Additional information/explanation of the ratings: </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>

            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Additional notes: </label>
                    <div class="gaccca-form-element__control">
                        <textarea required="" class="gaccca-textarea"></textarea>

                    </div>
                </div>
            </div>







            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <p><strong>Definition of Ratings:</strong></p>
                    <p><strong>Excellent:</strong>The applicant has no noticeable grammatical errors, comprehends the
                        interview questions at a normal speed and can think in English. English is both fluent and
                        accurate with a wide vocabulary and good knowledge of colloquial expressions and idioms.</p>
                    <p><strong>Good:</strong>The applicant is able to speak easily and accurately with only small
                        grammatical errors. Vocabulary covers most circumstances and the applicant is able to describe a
                        word if they do not know it and is able to comprehend most conversation.</p>
                    <p><strong>Fair:</strong>The applicant is able to speak with some confidence, despite limited
                        vocabulary. Applicant knows the main tenses and can comprehend and speak on a wide variety of
                        subjects with simple conversation</p>
                    <p><strong>Poor:</strong>The applicant is either unable to speak or can only communicate in a very
                        basic way, mainly in the present and past simple tenses. Applicant cannot understand basic
                        vocabulary or simple questions and lacks the ability to respond with more than a few words.</p>

                </div>
            </div>





            <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
                <div class="gaccca-form-element gaccca-form-element-margin">
                    <label class="gaccca-form-element__label" for="text-input-id-8">
                        Name of Interviewer: </label>
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