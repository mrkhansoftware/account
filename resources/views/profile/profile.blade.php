@include('common.header')

  {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'my-profile']) !!}


  <div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">My Profile</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please provide all requested information. The provided information will be used for your visa application.
        </p>
        <p> Please make sure all information is up-to-date.</p>
      </div>
      <h2 class="gaccca-h2-padding">Personal Information</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
          <div class="gaccca-form-element gaccca-form-element-margin gaccca-has-error">
            <label class="gaccca-form-element__label" for="text-input-id-1">
              First Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-1" placeholder="First Name" required="" class="gaccca-input" /> -->
              {!! Form::text('first_name', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-2">
              Last Name <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-2" placeholder="Last Name" required="" class="gaccca-input" /> -->
              {!! Form::text('last_name', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
              
            </div>
          </div>
        </div>
  
  
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-3">
              Date of birth <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element gaccca-form-element-margin-date">
              <!-- <input type="text" id="datepicker" placeholder="DD/MM/YYYY" required="" class="gaccca-input-date" /> -->
              {!! Form::text('last_name', null, [
	              'class'                         => 'gaccca-input-date',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
  
  
        </div>
  
  
   
           <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-4">
                City of birth <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <!-- <input type="text" id="text-input-id-4" placeholder="City of birth" required="" class="gaccca-input" /> -->
                {!! Form::text('city_of_birth', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
                <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
              </div>
          </div>
  
        </div>
          
            
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
              <label class="gaccca-form-element__label" for="text-input-id-5">
                Country of birth <span class="gaccca-text-required" title="required">*</span> </label>
              <div class="gaccca-form-element__control">
                <!-- <input type="text" id="text-input-id-5" placeholder="Country of birth" required="" class="gaccca-input" /> -->
                {!! Form::text('country_of_birth', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
                <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
              </div>
          </div>
  
        </div>
      </div>
      <h2 class="gaccca-h2-padding">Contact Information</h2>
      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-6">
              Email <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <input type="text" id="text-input-id-6" placeholder="Email" required="" class="gaccca-input" />
              {!! Form::email('email', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-7">
              Phone Number <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-7" placeholder="+1" required="" class="gaccca-input" /> -->
              {!! Form::text('phone', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>
       
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-8">
              Address <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
             
                <!-- <textarea  placeholder="Enter Your Address" required="" class="gaccca-textarea"></textarea> -->
                {!! Form::textarea('address', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
             
                <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>
       
       
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-9">
              City <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-9" placeholder="City" required="" class="gaccca-input" /> -->
              {!! Form::text('city', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-10">
              Zip Code <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-10" placeholder="Zip Code" required="" class="gaccca-input" /> -->
              {!! Form::text('zip_code', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
  
          <div class="gaccca-form-element gaccca-form-element-margin">
            <label class="gaccca-form-element__label" for="text-input-id-11">
              Country <span class="gaccca-text-required" title="required">*</span> </label>
            <div class="gaccca-form-element__control">
              <!-- <input type="text" id="text-input-id-11" placeholder="Country" required="" class="gaccca-input" /> -->
              {!! Form::text('country', null, [
	              'class'                         => 'gaccca-input',
	              'required'                      => 'required',
	              ]) !!}
              <span class="gaccca-input-help-text">If you like to change your name, please email us</span>
            </div>
          </div>
        </div>
  
        <!-- <button class="gaccca-button-save gaccca-button-save-margin">Save</button> -->
        <!-- <button id="gaccca_myBtn">Open Modal</button> -->

        {!! Form::submit('Save',array('class'=>'gaccca-button-save gaccca-button-save-margin')); !!}
  
      </div>
    </div>



    {!! Form::close() !!}




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