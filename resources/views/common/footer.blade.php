</body>


<script type="text/javascript">

$(document).ready(function(){

$('.gaccca-input-date').datepicker({
  dateFormat: "dd/mm/yy",
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
<script src="{{ asset('js/accountAuthMaintain.js') }}"></script>
</html>