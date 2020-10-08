@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Write your video script','page'=>'WriteYourScript','parent_page'=>'Placement Program'])
<link href="{{ asset('css/videoScriptCss.css') }}" rel='stylesheet'>
<script src="{{ asset('js/richtext.js') }}"></script>
<style>
  body {
    font-family: Arial;
  }

  /* Style the tab */
  .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }

  /* Style the buttons inside the tab */
  .tab span {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 10px;
    transition: 0.3s;
    font-size: 14px;

  }

  /* Change background color of buttons on hover */
  .tab span:hover {
    background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab span.active {
    background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
  }

  .pd_1rem {
    padding: 0rem 1rem;
  }

  .pd_1rem3 {
    padding: 1rem 1rem 1rem 0rem;
  }



  .myFormStyle {
    background-color: blue;
  }

  .ba-videorecorder-theme-modern-norecorder {
    background-color: none !important;
  }

  .snackbar {
    visibility: visible;
    min-width: 250px;
    margin-left: -125px;
    background-color: #2665d885;
    color: white;
    text-align: center;
    border-radius: 2px;
    padding: 10px;
    position: fixed;
    z-index: 1;
    left: 50%;
    top: 50px;
    font-size: 14px;
  }

  .highlightClass {
    border: 3px solid black;
    padding: 5px;
  }



  .highLightPanelComment {
    border-right: 4px solid blue !important;
  }

  .styleFloat {
    float: right;
  }

  .undoColor {
    background-color: initial;
  }

  .hideDel {
    display: none !important;
  }
</style>
<style type="text/css">
  .AnimatedTP {
    transition: top 1.5s linear;
  }

  .ui-slider-handle {
    border-color: #0078f2 !important;
  }

  .Countdown {
    font-size: 120px;
    position: absolute;
    top: 200px;
    left: 20px;
  }

  .Countdown.ReadyTo {
    font-size: 36px;
  }

  #sliderSize {
    display: inline-block;
    width: 200px;
  }

  #sliderSpeed {
    display: inline-block;
    width: 200px;
  }

  

  .Countdown {
    display: none !important;
  }
  
</style>


<div class="gaccca-main-containt">
  <h1 class="gaccca-h1-padding">Write your video script</h1>
  <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Start drafting your script for your video resume.</p>
    <p> We have provided an optional outline to help structure your script. You can edit the outline to fit your needs.
    </p>
  </div>


  <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

    <div class="gaccca-form-element gaccca-sky-blue-box-margin">

      <div class="gaccca-tab">
        <span id="your_script_btn" class="gaccca-tablinks" onclick="gacccaScriptContentTab(event,'your_script_btn', 'your_script'); return false;">Your Script</span>
        <span id="sample_script_btn" class="gaccca-tablinks" onclick="gacccaScriptContentTab(event,'sample_script_btn', 'sample_script')">Sample Script</span>
        <span id="edited_script_btn" class="gaccca-tablinks" onclick="gacccaScriptContentTab(event,'edited_script_btn', 'edited_script')">Edited Video Script</span>

      </div>

      <div id="your_script" class="gaccca-tabcontent">

        <textarea rows="20" {{$datas["blockWriteScript"]?'readonly':''}} id="WriteScriptId" style="z-index: auto; position: relative; line-height: 24px; font-size: 13px; transition: none; background: #fcfcfc !important;margin: 0px 0px 10px;width: 100%;height: 800px;" >{{isset($datas['app']['Write_Your_Script__c'])?$datas['app']['Write_Your_Script__c']:''}}</textarea>
      </div>

      <div id="sample_script" class="gaccca-tabcontent">

        <p>This sample script will help you get a better understanding of what a video resume script looks like.</p>
        <h4><strong>Brief Introduction</strong></h4>
        <p>Hello! My name is XXXX and I’m interested in applying for an internship with your organization. General Education <br /><br />
          I’m currently a student in my second year of college at XX University in XXXX, Germany, where I’m studying XX. My concentrations are in XXXX which has given me the opportunity to take classes such as XX, XX.
        </p>

        <h4><strong>Practical Experience (Example)</strong></h4>
        <p>During the Fall of 2015, I worked as an Export Marketing Intern at Proctor &amp; Gamble where I was able to gain hands on experience in my field of study. I was able to provide valuable information to my department through my analysis of the German, French, and UK Markets. Additionally, I was able to assist in the production and design of promotional materials and product launches. This experience gave me invaluable communication and teamwork skills and challenged me to think in creative and innovative ways.</p>


        <h4><strong>Special Projects (Example)</strong></h4>
        <p>During my study abroad program at the University of Nottingham in the UK, I had the opportunity to work on the Events Committee of the university’s student association as a social media and marketing coordinator. I was responsible for creatively communicating fun new events to the entire student body in order to increase student engagement on campus. Other Relevant Experience (Example) Additionally, while at the University of Cologne, I have volunteered for a local soccer club where I have helped organize and advertise events hosted for the youth. I have designed flyers to be printed and digitally displayed on the group’s Facebook page which has given me brief insight into the essentials of graphic design and advertising.</p>


        <h4><strong>Closing</strong></h4>
        <p>I feel that these experiences would make me a great asset to your company and I am eager to learn and improve upon the skills that I have. I look forward to an internship in your organization, preferably for XX months beginning in XX (e.g., Spring, Summer, Fall, Winter) of this year. If you would like to learn more about my academic and professional background, please refer to my attached resume. I’d be very happy to answer any further questions you may have in an interview. Thank you so much for your time and consideration. I look forward to hearing from you soon. Sample Video resume from Felix</p>

      </div>
      <div id="edited_script" class="gaccca-tabcontent">
         <div class="gaccca-grid gaccca-wrap">
            <div class="gaccca-col gaccca-large-size_8-of-12 gaccca-medium-size_8-of-12 " onclick='removeHighLight()'>


              <textarea id="videoCcript" Class="content">{{isset($datas['app']['Video_Script_For_RichText__c'])?$datas['app']['Video_Script_For_RichText__c']:''}}</textarea>

            </div>
            <div class="gaccca-col gaccca-large-size_4-of-12 gaccca-medium-size_4-of-12">
              <div class='commentSection' id='commentSection'></div>
            </div>
          </div>
          @if (isset($datas['isInternal']) && $datas['isInternal'])
          <br/><br/><br/>
          <button class="gaccca-button-save " id='saveEditedScript'>Save edited script</button>
          @endif
      </div>

    </div>


    <div class="gaccca-form-element gaccca-sky-blue-box-margin" id='scriptBtns'>
      @if (isset($datas['isInternal']) && !$datas['isInternal'] && isset($datas['blockWriteScript']) && !$datas['blockWriteScript'] )
      <button class="gaccca-button-save "  id='saveScriptbtn'>Save script</button>

      <p> Let us know if you think you finished your script by clicking the button below. </p>

      <p> Your placement coordinator will reply a feedback and maybe improve your draft before you will record your video. </p>
      <button class="gaccca-button-save "  id='readyScriptbtn'>Ready with my script</button>
      @endif
    </div>


  </div>

</div>

<script>
  
  var myVar;
  var commentList = [];
  var cloneCommentListStr = '';


  function addComment() {
    removeHighLight();
    var domContent = document.getElementsByClassName('richText-editor')[0];
    if (domContent == undefined) {
      return;
    }
    commentList = [];
    var spanList = domContent.getElementsByTagName('span');
    for (sp = 0; sp < spanList.length; sp++) {
      if (spanList[sp].getAttribute("class") != undefined && spanList[sp].getAttribute("class") != 'undoClass' && spanList[sp].getAttribute("class") != 'undoColor') {
        var styleColor = ''
        if (spanList[sp].getAttribute("class") == 'removeClass') {
          styleColor = 'red';
        } else if (spanList[sp].getAttribute("class") == 'editClass') {
          styleColor = 'yellow';
        } else if (spanList[sp].getAttribute("class") == 'suggestionClass') {
          styleColor = 'cyan';
        }
        var comment = '';
        if (spanList[sp].getAttribute("data-value") != null) {
          comment = spanList[sp].getAttribute("data-value");
        }
        var objCom = {
          tag: spanList[sp].innerText,
          comment: comment,
          color: styleColor,
          id: "sp" + sp,
          classInfo: spanList[sp].getAttribute("class")
        };
        //alert(spanList[sp].getAttribute("id"));
        commentList.push(objCom);
      }
      spanList[sp].setAttribute("id", "sp" + sp);
    }
    if (cloneCommentListStr == JSON.stringify(commentList)) {
      return;
    }
    cloneCommentListStr = JSON.stringify(commentList);
    var htmlText = '';
    for (var i = 0; i < commentList.length; i++) { //alert(commentList);
      htmlText += '<div class="commentClass"  id="commentPanel_' + commentList[i].id + '"  style="border-left: 4px solid ' + commentList[i].color + '" onclick="highlight(\'' + commentList[i].id + '\')"><span class="fa fa-tag" ></span><span class="fa fa-trash styleFloat"  onclick="deleteComment(\'' + commentList[i].id + '\',\'' + commentList[i].classInfo + '\')" ></span><span  class="commentClassReply" >' + commentList[i].tag + ' </span> <span class="fa fa-commenting"></span><span contenteditable="true" class="commentClassReply commentBg" id="comment_' + commentList[i].id + '"   onkeyup="updateReply(\'' + commentList[i].id + '\')">' + commentList[i].comment + '</span></div>';
    }
    $("#commentSection").html(htmlText);
    apexSave();
    document.getElementsByClassName("richText-editor")[0].addEventListener("input", function() {
      document.getElementById('videoCcript').value = document.getElementsByClassName('richText-editor')[0].innerHTML;
      apexSave();
    }, false);
  }


  function highlight(ids) {
    removeHighLight();
    $("#commentPanel_" + ids).addClass("highLightPanelComment");
    $("#" + ids).addClass("highlightClass");
  }

  function removeHighLight() {
    $(".highLightPanelComment").removeClass("highLightPanelComment");
    $(".highlightClass").removeClass("highlightClass");
  }
</script>
@if (isset($datas['isInternal']) && !$datas['isInternal'])
<script>
  $(document).ready(function() {
    $('.content').richText();
    $('.richText-editor, .commentClassReply').attr('contenteditable', 'false');
    $('.commentClass  .fa-trash').addClass('hideDel');
    $('.clearClassDel:first').addClass('hideDel');

  });
  addComment();

  function apexSave() {
    return;
  }
 
  const saveScriptbtn=document.querySelector('#saveScriptbtn');
    if(saveScriptbtn!=null){
      saveScriptbtn.addEventListener('click', (e)=>{
    var formData = {
scriptInfo:document.getElementById('WriteScriptId').value,
typeStr:'saveScriptbtn'
};
saveInfo(formData);
});
}

const readyScriptbtn=document.querySelector('#readyScriptbtn');
    if(readyScriptbtn!=null){
      readyScriptbtn.addEventListener('click', (e)=>{
        var formData = {
scriptInfo:document.getElementById('WriteScriptId').value,
typeStr:'readyScriptbtn'
};
saveInfo(formData);
});
}

</script>
@else
<script>

const saveEditedScript=document.querySelector('#saveEditedScript');
    if(saveEditedScript!=null){
      saveEditedScript.addEventListener('click', (e)=>{
        var formData = {
scriptInfo:document.getElementById('videoCcript').value,
typeStr:'saveEditedScript'
};
saveInfo(formData);
});
}

  if ('{{$datas["isBeforeSaved"]}}' == 'false') {
    var cont = document.getElementById('videoCcript').value;
    if (cont != '') {
      cont = cont.split('\n');
      document.getElementById('videoCcript').value = cont.join('<br>');
    }

  }
  $(document).ready(function() {
    $('.content').richText();
    $(".richText").keyup(function() {
      document.getElementById('videoCcript').value = document.getElementsByClassName('richText-editor')[0].innerHTML;
      apexSave();
    });
    // get initial position of the element
    var initialTopPos = -1;
    $(window).scroll(function() { // assign scroll event listener
      var fixmeTop = $('.richText-toolbar').offset().top;
      var currentScroll = $(window).scrollTop(); // get current position
      if (initialTopPos < 0 && fixmeTop != 0) {
        initialTopPos = fixmeTop - currentScroll;
      }
      var diff = fixmeTop - initialTopPos;

      if (currentScroll > fixmeTop) {
        $('.richText-toolbar').css({ // scroll to that element or below it
          top: '5px',
          position: 'fixed'
        });
      }
      if (diff == initialTopPos || diff < 0) {
        $('.richText-toolbar').css({ // scroll to that element or below it
          position: 'static'
        });
      }
      // console.log('initialTopPos:'+initialTopPos);


    });
  });

  function updateReply(repId) {
    var comment = document.getElementById('comment_' + repId).innerHTML;
    document.getElementById(repId).setAttribute("data-value", comment);
    document.getElementById('videoCcript').value = document.getElementsByClassName('richText-editor')[0].innerHTML;
    apexSave();
  }

  function apexSave() {
    clearTimeout(myVar);
    myVar = setTimeout(function() {
      //	saveValueInternal();
    }, 500);
  }


  function deleteComment(ids, classInfo) {
    $("#" + ids).addClass("undoColor");
    $("#" + ids).removeClass(classInfo);
    document.getElementById('videoCcript').value = document.getElementsByClassName('richText-editor')[0].innerHTML;
    addComment();
  }
</script>

@endif
<script>

function saveInfo (formData){
  formData.applicantId="{{isset($datas['ap']['Id'])?$datas['ap']['Id']:''}}";
        formData.Contact__c="{{isset($datas['contID'])?$datas['contID']:''}}";
document.getElementById('loader').style.display='block';

$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type: 'POST',
url: 'writeScriptPlacement',
data: formData,
dataType: 'json',
success: function (data) {
  console.log(data);
document.getElementById('loader').style.display='none';
 if(data=='OK' && formData.typeStr=='readyScriptbtn'){
onUpdate('Thank you, we received your video script!');

document.getElementById('scriptBtns').innerHTML='';
document.getElementById('videoCcript').readonly=true;

 }else if(data=='OK'){

 }else{

  onError('Error: Contact to admin');

 }  

},
error: function (data) {
document.getElementById('loader').style.display='none';
onError('Error: Contact to admin');
console.log(data);
}
});
}

</script>

@include('common.footer')


@else
Permission denied. Please contact administrator.
@endif