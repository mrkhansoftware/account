

</body>


<script type="text/javascript">

jQuery(document).ready(function(){

jQuery('.gaccca-input-date').datepicker({
  dateFormat: "dd/mm/yy",
  changeMonth:true,
  changeYear:true,
  onClose: function () {
        jQuery(this).parsley().validate();
    }
});


jQuery("#openNav").bind('click', function () {
    jQuery("#mySidepanel").css('display', 'block');
  });

  jQuery("#closeNav").bind('click', function () {
    jQuery("#mySidepanel").css('display', 'none');
  })

  jQuery(document).ready(function () {
    jQuery(window).resize(function () {
      if (jQuery(window).width() >= 1093) {
        jQuery("#mySidepanel").css('display', 'none');
      }
    });
  });


});

var dropdown =  $('.gaccca-dropdown-btn');
var i;
for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
 }

  

</script>

<script language="javascript">
  /* IE11 Fix for SP2010 */
  if (typeof (UserAgentInfo) != 'undefined' && !window.addEventListener) {
    UserAgentInfo.strBrowser = 1;
  } 
</script>


<script type="text/javascript">
 
  
  //Get the button

  var mybutton = jQuery("#gaccca-scroll-to-top-button")[0];
  window.onscroll = function () { scrollFunction() };
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  jQuery('#gaccca-scroll-to-top-button').click(function () {
    jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
  });


  jQuery('input[type=file]').on("change", function (ev) {
    jQueryin = jQuery(this);
    var label_lab = jQuery(this).closest("label");
    var file_span = jQuery(label_lab).children("span");
    if (ev.originalEvent != null) {
       if(this.files.length > 0){
         var fileTypeAllowed=this.getAttribute('fileTypes')==null?'':this.getAttribute('fileTypes');
         var uploadingFileType=this.files[0].type;
         fileTypeAllowed=fileTypeAllowed.toLowerCase();
         uploadingFileType=uploadingFileType.toLowerCase();

         if(fileTypeAllowed!='' && !fileTypeAllowed.includes(uploadingFileType)){
           this.value='';
           alert('Please upload a valid file as mentioned.');return;
         }

         
        if(this.files[0].name.length > 35){
          jQuery(file_span).text(this.files[0].name.slice(0, 25)+'...');
        }else{
          jQuery(file_span).text(this.files[0].name);
        }

        label_lab[0].title = this.files[0].name;
       }
    }
    document.body.onfocus = function () {
      document.body.onfocus = null;
      setTimeout(function () {
        if (jQueryin.val().length === 0) jQuery(file_span).text('Choose file...');
      }, 1000);
    };
  });
  function onUpdate(msg){  
        jQuery('#message-success').html(msg);
        jQuery('#success-alert').fadeIn();
        setTimeout(function(){
            
            jQuery('#success-alert').fadeOut("slow");
            
        }, 5000);
    }
    
    function onError(msg){  
        jQuery('#message-error').html(msg);
        jQuery('#error-alert').fadeIn();
        setTimeout(function(){
            
            jQuery('#error-alert').fadeOut("slow");
            
        }, 5000);
    }
    function showInput(value,conVal,section){
     document.getElementById(section).style.display=value==conVal?'block':'none';
     document.getElementById(section+'Field').required=value==conVal;
    }
    

function gacccaScriptContentTab(evt, btnId, tabName) {


var i, gaccca_tabcontent, gaccc_tablinks;
 gaccca_tabcontent = $(".gaccca-tabcontent");

for (i = 0; i < gaccca_tabcontent.length; i++) {
gaccca_tabcontent[i].style.display = "none";
}

gaccc_tablinks = $(".gaccca-tablinks");

for (i = 0; i < gaccc_tablinks.length; i++) {
gaccc_tablinks[i].className = gaccc_tablinks[i].className.replace(" gaccca-tab-active", "");
}

jQuery("#"+tabName).css('display','block');

// evt.currentTarget.className += " gaccca-tab-active";
jQuery("#"+btnId).addClass("gaccca-tab-active"); 
}

gacccaScriptContentTab('','phase_btn_1', 'phase__1');


jQuery("#openNav").bind('click',function(){
  jQuery("#mySidepanel").css('display','block');
});

jQuery("#closeNav").bind('click',function(){
  jQuery("#mySidepanel").css('display','none');
})

jQuery(document).ready(function(){
  jQuery(window).resize(function(){
   if (jQuery(window).width() >= 1093) {
    jQuery("#mySidepanel").css('display','none');
}



  });

  
  
});




    jQuery(document).ready(function() {
    $('[id^="gaccca_saveBtn_"]').click(function() {
      jQuery('[id^="gacccaForm_"]').parsley().validate();
      if (jQuery('[id^="gacccaForm_"]').parsley().isValid()) {
              document.getElementById('loader').style.display='block';
          } else {
            document.getElementById('loader').style.display='none';
          }

    });

  });





</script>
@if(!isset($_GET['orgid']) && !isset($_GET['orgidInternal']))

<script src="{{ asset('js/accountAuthMaintain.js') }}"></script>
@endif
</html>