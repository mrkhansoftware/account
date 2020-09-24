<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://assets.ziggeo.com/v2-stable/ziggeo.css" />
    <link href="{{ asset('css/slds.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/all.css') }}" rel='stylesheet'>
    <script src="https://assets.ziggeo.com/v2-stable/ziggeo.js"></script>
    <script>
        var ziggeoApp = new ZiggeoApi.V2.Application({
            token: "80f9af3ec1dfe032714fd61c53f94376"
        });
    </script>
    <style>
        .mainContainer {
            width: 100%;
        }

        .slds-hide-field {
            display: none;
        }

        .slds-element {
            width: 100%;
        }

        .boxContainer {
            text-align: center;
            border: 1px solid white;
            padding: 45px;
            border-radius: 5px;
            margin-top: 6%;
            margin-left: 30%;
            margin-right: 30%;
            background: #80808096;
        }

        @media screen and (max-width: 930px) {
            .boxContainer {
                margin-left: 20%;
                margin-right: 20%;
            }
        }

        @media screen and (max-width: 930px) {
            .boxContainer {
                margin-left: 20%;
                margin-right: 20%;
            }
        }

        @media screen and (max-width: 930px) {
            .boxContainer {
                margin-left: 10%;
                margin-right: 10%;
            }
        }

        .inputPass {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .inputBtn {
            width: 30%;
            background-color: #4c8baf;
            color: white;
            padding: 14px 20px;
            margin: 25px 0px !important;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .slds-scope ol {

            list-style-type: decimal;
            list-style-image: initial;
            list-style-position: initial;
        }

        .slds-scope ul {

            list-style-type: disc;
            list-style-image: initial;
            list-style-position: initial;
        }
    </style>
</head>

<body class="slds-scope" cz-shortcut-listen="true">

@if (isset($datas['needPassword']) && $datas['needPassword'])
<div class='mainContainer'>
                <div class="boxContainer" >
                    <div style="padding-bottom: 19px;color: red;font-size: 15px;">
                    </div>
                    <div class='instrction'>
                        Please enter the password we sent in the email with this link to view the application. 
                    </div>
                   
{!! Form::open(['action' => 'ApplicantResumeController@resumeDetails2','method' => 'POST']) !!}
 <div>
                        <input Class="inputPass" name="password" type='password' placeholder="Password" value="" required/>
                    </div>
                    <div>
                        
                        
                        <button class="inputBtn">Submit</button> 
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

@else
    @if(isset($datas['app']['Template_design__c']) && $datas['app']['Template_design__c']=='One')

    @include('common.ApplicantCVResumeTemplateOne',['datas' =>isset($datas)?$datas:''])

    @elseif(isset($datas['app']['Template_design__c']) && $datas['app']['Template_design__c']=='Two')

    @include('common.ApplicantCVResumeTemplateTwo',['datas' =>isset($datas)?$datas:''])

    @elseif(isset($datas['app']['Template_design__c']) && $datas['app']['Template_design__c']=='Three')

    @include('common.ApplicantCVResumeTemplateThree',['datas' =>isset($datas)?$datas:''])

    @else
    @endif
    @endif
    <div class="demo-only" style="height: 640px;display:none;" id='modalFeedBack'>
        <section role="dialog" tabindex="-1" aria-labelledby="modal-heading-01" aria-modal="true" aria-describedby="modal-content-id-1" class="slds-modal slds-fade-in-open">
            <div class="slds-modal__container">
                <header class="slds-modal__header">
                    <button class="slds-button slds-button_icon slds-modal__close slds-button_icon-inverse modalClass" title="Close">
                        X
                    </button>
                    <h2 id="modal-heading-01" class="slds-text-heading_medium slds-hyphenate">Feedback</h2>
                </header>
                <div class="slds-modal__content slds-p-around_medium" id="modal-content-id-1">
                    <div class="wf-wrap feedbackClass" id='sentMessage'>

                    </div>
                    <div id='modalBody'>
                        <div class="slds-grid">
                            <div class="">
                                <label class="slds-radio__label">Choose an option<span class="required" aria-required="true">*</span></label>
                                <div class="">
                                    <div class="slds-radio">
                                        <input type="radio" onchange="optionChoosed(this,'option1__')" name="feedBackOptions" id="op1" value="I am interested in this applicant, please give me a call" />
                                        <label class="slds-radio__label" for="op1">
                                            <span class="slds-radio_faux"></span>
                                            <span class="slds-form-element__label">I'm interested in this applicant, please give me a call</span>
                                        </label>
                                    </div>
                                    <div class="slds-radio">
                                        <input type="radio" onchange="optionChoosed(this,'option2__')" name="feedBackOptions" id="op2" value="I am interested, would like more information about your programs" />
                                        <label class="slds-radio__label" for="op2">
                                            <span class="slds-radio_faux"></span>
                                            <span class="slds-form-element__label">I'm interested, would like more information about your programs</span>
                                        </label>
                                    </div>
                                    <div class="slds-radio">
                                        <input type="radio" onchange="optionChoosed(this,'option3__')" name="feedBackOptions" id="op3" value="I am interested in scheduling an interview with this applicant" />
                                        <label class="slds-radio__label" for="op3">
                                            <span class="slds-radio_faux"></span>
                                            <span class="slds-form-element__label">I'm interested in scheduling an interview with this applicant</span>
                                        </label>
                                    </div>
                                    <div class="slds-radio">
                                        <input type="radio" onchange="optionChoosed(this,'option4__')" name="feedBackOptions" id="op4" value="Please reach out to my colleague in regards to this applicant" />
                                        <label class="slds-radio__label" for="op4">
                                            <span class="slds-radio_faux"></span>
                                            <span class="slds-form-element__label">Please reach out to my colleague in regards to this applicant</span>
                                        </label>
                                    </div>
                                    <div class="slds-radio">
                                        <input type="radio" onchange="optionChoosed(this,'option5__')" name="feedBackOptions" id="op5" value="The applicant profile does not match our needs" />
                                        <label class="slds-radio__label" for="op5">
                                            <span class="slds-radio_faux"></span>
                                            <span class="slds-form-element__label">The applicant's profile does not match our needs; however, we might have interest in other applicants</span>
                                        </label>
                                    </div>

                                    <div class="slds-radio">
                                        <input type="radio" onchange="optionChoosed(this,'option6__')" name="feedBackOptions" id="op6" value="I am not interested at this time; however, we might have interest in the future" />
                                        <label class="slds-radio__label" for="op6">
                                            <span class="slds-radio_faux"></span>
                                            <span class="slds-form-element__label">I’m not interested at this time; however, we might have interest in the future</span>
                                        </label>
                                    </div>

                                    <div class="slds-radio">
                                        <input type="radio" onchange="optionChoosed(this,'option7__')" name="feedBackOptions" id="op7" value="I am not interested in participating in your program as a host company" />
                                        <label class="slds-radio__label" for="op7">
                                            <span class="slds-radio_faux"></span>
                                            <span class="slds-form-element__label">I’m not interested in participating in your program as a host company</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="slds-grid ">
                            <div class="slds-form-element slds-element slds-hide-field" id='option3__field1'>
                                <label class="slds-form-element__label">Possible Date for a Interview</label>
                                <div class="slds-form-element__control">
                                    <input type="text" name='psbl' id='datepicker2' Class="slds-input" />
                                </div>

                            </div>
                        </div>
                        <div class="slds-grid">
                            <div class="slds-form-element slds-element  slds-hide-field" id='option3__field2'>
                                <label class="slds-form-element__label">Time </label>
                                <div>
                                    <div id="input_2_51">
                                        <input type="text" maxlength="2" style="width: 80px; height: 23px;" id="input_2_51_1" value="" class="slds-input " /> <i>:</i>
                                        <input type="text" style="width: 80px; height: 23px;" maxlength="2" id="input_2_51_2" value="" class="slds-input " />
                                        <select name="input_51[]" id="input_2_51_3" style="width: 80px;height: 29px;" class="slds-select ">
                                            <option value="am">AM</option>
                                            <option value="pm">PM</option>
                                        </select>
                                    </div>
                                    <div id="input_2_51">
                                        <label style="margin-left:25px;">HH</label>
                                        <label style="margin-left:55px;">MM</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="slds-grid ">
                            <div class="slds-form-element slds-element slds-hide-field" id='option4__field1'>
                                <label class="slds-form-element__label" for="Fistname">First name</label>
                                <div class="slds-form-element__control">
                                    <input type="text" id="Fistname" class="  slds-input" />
                                </div>
                            </div>
                        </div>
                        <div class="slds-grid ">

                            <div class="slds-form-element slds-element slds-hide-field" id='option4__field2'>
                                <label class="slds-form-element__label" for="Lastname">Last name</label>
                                <div class="slds-form-element__control">
                                    <input type="text" id="Lastname" class="  slds-input" />
                                </div>
                            </div>
                        </div>
                        <div class="slds-grid ">


                            <div class="slds-form-element slds-element slds-hide-field" id='option4__field3'>
                                <label class="slds-form-element__label" for="text-input-id-1">Email address</label>
                                <div class="slds-form-element__control">
                                    <input type="text" id="Emailaddress" class="  slds-input" />
                                </div>
                            </div>
                        </div>
                        <div class="slds-grid ">



                            <div class="slds-form-element slds-element slds-hide-field" id='option4__field4'>
                                <label class="slds-form-element__label" for="text-input-id-1">Phone number</label>
                                <div class="slds-form-element__control">
                                    <input type="text" id="Phonenumber" class="  slds-input" />
                                </div>
                            </div>
                        </div>




                        <div class="slds-grid">
                            <div class="slds-form-element slds-element  slds-hide-field" id='optionAll__field1'>
                                <label class="slds-form-element__label" for="shortMessage">Please add a short message or other information.</label>
                                <div class="slds-form-element__control">
                                    <textarea Class="slds-textarea "></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="slds-grid ">
                            <div class="slds-form-element slds-hide-field" id='optionAll__field2'>
                                <button class="slds-button slds-button_brand">
                                    SEND
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="slds-backdrop slds-backdrop_open"></div>
    </div>


    <script src="{{ asset('js/jquery-1.8.2.js') }}"></script>
    <script>
        var isOpen = true;
        var clearInt;
        $(document).ready(function() {
            $("#resumeConId").click(function() {
                clearInterval(clearInt);
                $('#docFrame').hide();
                setTimeout(function() {
                    $('.cvContentClass').show();
                }, 500);

            });
            $(".docFrame").click(function() {
                $('.cvContentClass').hide();
                clearInt = setTimeout(function() {
                    $('#docFrame').show();
                }, 2000);
            });
            $(".modalClass").click(function() {
                if (!isOpen) {
                    isOpen = true;
                    $('#modalFeedBack').hide();
                } else {
                    isOpen = false;
                    $('#modalFeedBack').show();
                }

            });
        });
        var btns = document.getElementsByClassName("docList");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

        function videoStatus() {
            alert("watched");
        }

        function optionChoosed(v, opt) {
            $('[id^=option4__]').hide();
            $('[id^=option3__]').hide();
            $('[id^=optionAll__]').show();
            if (opt == 'option3__') {
                $('[id^=option3__]').show();
            } else if (opt == 'option4__') {
                $('[id^=option4__]').show();
            }
        }
    </script>
</body>

</html>