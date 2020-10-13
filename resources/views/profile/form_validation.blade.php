<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>

  <meta name="viewport" content="IE=edge;" />
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
  <!-- <script src="https://code.jquery.com/jquery-3.x-git.min.js"></script> -->
  
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link href="{{ asset('css/font.css') }}"  rel='stylesheet' />

  <!-- <script src="assets/js/jquery-ui.js"></script> -->


  <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('js/parsley.min.js') }}"></script>   
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  

  
</head>

<body>

  <div class="gaccca-header">
    <div class="gaccca-content-header">

      <div class="gaccca-grid gaccca-wrap">

        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

          <div class="gaccca-behind-the-logo gaccca-behind-the-logo-position">

          <img src="{{ asset('images/logo/logo1.png') }}"/>

          </div>
          <ul class="gaccca-display-menu">

            <li class="gaccca-dropdown"><a href="#home">Placement Program</a>

              <div class="gaccca-dropdown-content">
                <a href="/profile_new">Video Tutorials</a>
                <a href="/change_password">Upload Your Documents</a>
                <a href="/close_account">Dos and Don'ts</a>
                <a href="/profile_new">Schedule a Call</a>
                <a href="/change_password">Create your resume</a>
                <a href="/close_account">Write your script</a>

                <a href="/profile_new">Video Instructions</a>
                <a href="/change_password">Record your Video Resume</a>

              </div>

            </li>
            <li class="gaccca-dropdown"><a href="#home">J1 Program</a>

              <div class="gaccca-dropdown-content">
                <a href="/profile_new">Information & Instruction</a>
                <a href="/change_password">Participant Information</a>
                <a href="/close_account">Host Company Information</a>
                <a href="/profile_new">Participant Agreement</a>
                <a href="/change_password">Finalize your Application</a>
                <a href="/close_account">Review your J1 Application</a>

                <a href="/profile_new">Participant Handbook</a>
                <a href="/change_password">Schedule a Call</a>
                <a href="/close_account">Additional Documents</a>

                <a href="/profile_new">Extension Request</a>
                <a href="/change_password">Travel Validation</a>
                <a href="/close_account">Validation & Check-In</a>

                <a href="/profile_new">Monthly Check-In</a>
                <a href="/change_password">Mid-Point Evaluation</a>
                <a href="/close_account">Final Evaluation</a>

              </div>

            </li>
            <li><a href="#home">Sim Card</a></li>
            <li class="gaccca-dropdown">
              <a href="javascript:void(0)" class="gaccca-dropbtn">Profile</a>
              <div class="gaccca-dropdown-content">
                <a href="/profile_new">My Profile</a>
                <a href="/change_password">Password</a>
                <a href="/close_account">Close Account</a>
              </div>
            </li>
            <li><a href="#home">Logout</a></li>
          </ul>
          <!-- <button class="gaccca-openbtn gaccca-header-menu-button" onclick="openNav()">☰</button>   -->
          <button id="openNav" class="gaccca-openbtn gaccca-header-menu-button">☰</button>


        </div>
      </div>
    </div>
  </div>

  <button id="gaccca-scroll-to-top-button" title="Go to top"><i class="fas fa-arrow-up"></i></button>

  <div id="mySidepanel" class="gaccca-sidenav gaccca-sidenav-display">
    <a href="javascript:void(0)" id="closeNav" class="closebtn">×</a>
    <a href="#about">Placement Program</a>





    <button class="gaccca-dropdown-btn">J1 Program
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    <div class="gaccca-dropdown-container">
      <a href="/information_instruction_account_new">Information &amp; Instruction</a>
      <a href="/participant_information_account_new">Participant Information</a>
      <a href="/host_company_information_account_new">Host Company Information</a>
      <a href="/participant_agreement_account_new">Participant Agreement</a>
      <a href="/finalize_application_account_new">Finalize your Application</a>
      <a href="/j1_review_your_application_account_new">Review your J1 Application</a>

      <a href="/participant_handbook_account_new">Participant Handbook</a>
      <a href="/schedule_call_jvisa_new">Schedule a Call</a>
      <a href="/additional_document_J1_new">Additional Documents</a>

      <a href="/extension_request_account_new">Extension Request</a>
      <a href="/travel_validation_account_new">Travel Validation</a>
      <a href="/validation_checkin_account_new">Validation &amp; Check-In</a>

      <a href="/monthly_checkin_new">Monthly Check-In</a>
      <a href="/midpoint_evaluation_account_new">Mid-Point Evaluation</a>
    </div>





    <a href="#clients">Sim Card</a>






    <button class="gaccca-dropdown-btn">Profile
      <i class="fa gaccca-fa-caret-down"></i>
    </button>
    <div class="gaccca-dropdown-container">
      <a href="#">My Profile</a>
      <a href="#">Password</a>
      <a href="#">Close Account</a>
    </div>
    <a href="#contact">Logout</a>
  </div>


  <div class="clear"></div>


  <div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Validation</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
      <p>Please provide all requested information. The provided information will be used for your visa application.
      </p>
      <p> Please make sure all information is up-to-date.</p>
    </div>
    <h2 class="gaccca-h2-padding">Personal Information</h2>


    <!-- <form id="my-profile" data-parsley-validate=""> -->
    {!! Form::open(['action' => 'ParticipantInformationAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'my-profile']) !!}

      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

      <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label" for="text-input-id-poi">
            file input </label><br />
          <div class="gaccca-form-element__control">
            <label class="gaccca-file">
              <input type="file" id="my_file" name="filename" required="" />
              <span class="gaccca-file-custom">Choose file...</span>

            </label>
          </div>
          <span class="gaccca-input-help-text">Please have this form completed and signed by your insurance
            provider.</span>
        </div>





        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin gaccca-has-error">
            <label class="gaccca-form-element__label" for="first-name-input">
              First Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              
              <input type="text" id="first-name-input" required="" class="gaccca-input" />
              <span class="gaccca-error-message" id="first-name-error-msg"></span>
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>




        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin gaccca-has-error">
            <label class="gaccca-form-element__label" for="email-input">
              Email <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="email" name="email" id="email-input"  class="gaccca-input" required="" />
              <span class="gaccca-error-message" id="email-error-msg"></span>
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>


        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin gaccca-has-error">
            <label class="gaccca-form-element__label" for="only-number-input">
              Only Number <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text"  min="0" max="20000" data-parsley-validation-threshold="0"
                data-parsley-trigger="keyup" data-parsley-type="number" class="gaccca-input" required="" />
              <span class="gaccca-error-message" id="only-number-error-msg"></span>
            </div>
          </div>
        </div>



        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Access information </label>
            <div class="gaccca-form-element__control">

              <textarea required="" class="gaccca-textarea"></textarea>
              <span class="gaccca-input-help-text">Keep the DS-160 in REVIEW Mode on last page after <br /> filling out!
                DO NOT sign or send!</span>
            </div>
          </div>
        </div>

        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="select-01">Insurance Provider</label>
            <div class="gaccca-form-element__control">
              <div class="gaccca-select_container">

                <select id="heard" class="gaccca-select" required="">
                  <option value="">Choose..</option>
                  <option value="press">Press</option>
                  <option value="net">Internet</option>
                  <option value="mouth">Word of mouth</option>
                  <option value="other">Other..</option>
                </select>

              </div>
            </div>
          </div>

        </div>




        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

          <div class="gaccca-form-element gaccca-form-element-margin">

            <div class="gaccca-form-element__control">
              <label class="gaccca-form-element__label" for="text-input-id-fn">
                I book as <span class="gaccca-text-required" title="required">*</span> </label>
              <span class="gaccca-radio">
                <input type="radio" id="radio-43" value="43" name="book_as" required="" />
                <label class="gaccca-radio__label" for="radio-43">
                  <span class="gaccca-radio_faux"></span>
                  <span class="gaccca-padding-right-25">Private Customer</span>
                </label>

                <input type="radio" id="radio-44" value="44" name="book_as" />
                <label class="gaccca-radio__label" for="radio-44">
                  <span class="gaccca-radio_faux"></span>
                  <span class="gaccca-padding-right-25">Business Customer</span>
                </label>
              </span>

            </div>

          </div>

        </div>



      




        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

          <div class="gaccca-form-element gaccca-form-element-margin">
            <div class="gaccca-form-element__control">
              <div class="gaccca-checkbox">
                <input type="checkbox" name="options" id="checkbox-unique-id-73" value="checkbox-unique-id-73"
                  checked="" required />
                <label class="gaccca-checkbox__label" for="checkbox-unique-id-73">
                  <span class="gaccca-checkbox_faux"></span>
                  <span class="gaccca-form-element__label">Priority / Expedited Processing within 3 business days,
                    additional fee of EUR/Person</span>
                </label>
              </div>
            </div>
          </div>

        </div>






        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin">
            <table class="gaccca-rating-table">
              <tr>
                <th></th>

                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th></th>

              </tr>
              <tr>
                <td>
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Not at all. </label>
                </td>

                <td>
                  <span class="gaccca-radio">
                    <input type="radio" id="radio-instructions-very-easy" value="radio-instructions-very-easy"
                      name="all_instructions" checked="" />
                    <label class="gaccca-radio__label" for="radio-instructions-very-easy">
                      <span class="gaccca-radio_faux"></span>

                    </label>
                  </span>


                </td>
                <td><span class="gaccca-radio">
                    <input type="radio" id="radio-instructions-easy" value="radio-instructions-easy"
                      name="all_instructions" checked="" />
                    <label class="gaccca-radio__label" for="radio-instructions-easy">
                      <span class="gaccca-radio_faux"></span>

                    </label>
                  </span></td>
                <td><span class="gaccca-radio">
                    <input type="radio" id="radio-instructions-somewhat_difficult"
                      value="radio-instructions-somewhat_difficult" name="all_instructions" checked="" />
                    <label class="gaccca-radio__label" for="radio-instructions-somewhat_difficult">
                      <span class="gaccca-radio_faux"></span>

                    </label></span></td>
                <td><span class="gaccca-radio">
                    <input type="radio" id="radio-instructions-difficult" value="radio-instructions-difficult"
                      name="all_instructions" checked="" />
                    <label class="gaccca-radio__label" for="radio-instructions-difficult">
                      <span class="gaccca-radio_faux"></span>
                    </label></span></td>


                <td><span class="gaccca-radio">
                    <input type="radio" id="radio-instructions-somewhat_difficult"
                      value="radio-instructions-somewhat_difficult" name="all_instructions" checked="" />
                    <label class="gaccca-radio__label" for="radio-instructions-somewhat_difficult">
                      <span class="gaccca-radio_faux"></span>

                    </label></span></td>
                <td><span class="gaccca-radio">
                    <input type="radio" id="radio-instructions-difficult" value="radio-instructions-difficult"
                      name="all_instructions" checked="" />
                    <label class="gaccca-radio__label" for="radio-instructions-difficult">
                      <span class="gaccca-radio_faux"></span>
                    </label></span></td>

                <td>
                  <label class="gaccca-form-element__label" for="text-input-id-8">
                    Yes indeed </label>
                </td>

              </tr>

            </table>
          </div>
        </div>

       


        <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                  Date <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <input type="text" id="text-input-id-4"  required="" class="gaccca-input-date"/>
               
              </div>
          </div>
  
        </div>



      </div>
      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">

        <button type="button" id="save-btn" class="gaccca-button-save gaccca-button-save-margin">Save</button>

      </div>

      {!! Form::close() !!}




  </div>




</body>


<script type="text/javascript">

$(document).ready(function(){

$('.gaccca-input-date').datepicker({

  changeMonth:true,
  changeYear:true,
  onClose: function () {
        $(this).parsley().validate();
    }
});

});

  $("#openNav").bind('click', function () {
    $("#mySidepanel").css('display', 'block');
  });

  $("#closeNav").bind('click', function () {
    $("#mySidepanel").css('display', 'none');
  })

  $(document).ready(function () {
    $(window).resize(function () {
      if ($(window).width() >= 1093) {
        $("#mySidepanel").css('display', 'none');
      }
    });
  });

</script>

<script language="javascript">
  /* IE11 Fix for SP2010 */
  if (typeof (UserAgentInfo) != 'undefined' && !window.addEventListener) {
    UserAgentInfo.strBrowser = 1;
  } 
</script>


<script type="text/javascript">
 
  $(document).ready(function() {
      
      $("#save-btn").on('click', function() {
          $('#my-profile').parsley().validate();
          alert($('#my-profile').parsley().validate());
          if ($('#my-profile').parsley().isValid()) {
              alert('valid');
          } else {
              alert('not valid');
          }
      });
  });



</script>
<script>
  //Get the button

  var mybutton = $("#gaccca-scroll-to-top-button")[0];
  window.onscroll = function () { scrollFunction() };
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  $('#gaccca-scroll-to-top-button').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
  });

</script>
<script>
  $('input[type=file]').on("change", function (ev) {
    $in = $(this);
    var label_lab = $(this).closest("label");
    console.log(label_lab);
    var file_span = $(label_lab).children("span");
    console.log(file_span);
    if (ev.originalEvent != null) {
       if(this.files.length > 0){
        if(this.files[0].name.length > 35){
          $(file_span).text(this.files[0].name.slice(0, 25)+'...');
        }else{
          $(file_span).text(this.files[0].name);
        }

        label_lab[0].title = this.files[0].name;
       }
    }
    document.body.onfocus = function () {
      document.body.onfocus = null;
      setTimeout(function () {
        if ($in.val().length === 0) $(file_span).text('Choose file...');
      }, 1000);
    };
  });

</script>
</html>