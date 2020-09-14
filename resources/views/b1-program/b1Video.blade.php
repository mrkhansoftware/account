@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">B Visa Trainings video</h1>
     
     
      @if (isset($datas['isVdeoAvailable']) && $datas['isVdeoAvailable']) 
 <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Please take your time and watch this training video thoroughly to the end. Note all your unanswered questions in the field below and click on the submit button. Please contact us; otherwise, we will follow up soon.
        </p>
       </div>
     
																		<div class="gaccca-center">
																			
																			<div id="replace_me-v2_player"></div>
																		   
		<link rel="stylesheet" href="https://assets.ziggeo.com/v2-stable/ziggeo.css" />
		<script src="https://assets.ziggeo.com/v2-stable/ziggeo.js"></script>
		<script>
			var ziggeoApp = new ZiggeoApi.V2.Application({
				token:"5a468567d6c000081048db95ef255348"
			});
		</script>
		<script>
		var embedding,videoSaved;
		
		ziggeoApp.on("ready", function() {
			var player = new ZiggeoApi.V2.Player({
				element: document.getElementById("replace_me-v2_player"),
				attrs: {
					responsive:true,
					showsettings:false,
					disableseeking:true,
					initialseek:'{{$datas["vdoSeek"]}}',
					theme: "modern",
					themecolor: "red",
					video: '{{$datas["vdoId"]}}'
				}
			});
			
			player.activate();
			
			//document.getElementsByClassName('ba-player-theme-modern-progressbar')[0].innerHTML='';
			var elementss = document.getElementById('replace_me-v2_player');
			embedding = ZiggeoApi.V2.Recorder.findByElement(elementss );
			var flagInit=false;
			embedding.on("playing", function () {
				if(videoSaved==100){
					document.getElementById('videoWatched').innerHTML='100%';
					embedding.pause();
				}
				if(!flagInit){
					myFunction();
					flagInit=true;
				}
			});
			
			
		});
		
		
		
		function myFunction() { //alert();
			var videoPlayed=embedding.get('position');
			var getDuration=embedding.get('duration');
			var videoPrecentage=(videoPlayed/getDuration)*100;
			saveVideoTime(videoPrecentage);
		}
		
		</script>
		
		<div style='margin-top: 15px;display:none'>
			<b>Video Completed:</b> <b id='videoWatched'>{{$datas["videoPrecentage"]}}%</b>
		</div>
		
		
		
	
		
		
		
		
	</div>
          
        <div class="gaccca-form-element gaccca-form-element-margin">
          <label class="gaccca-form-element__label gaccca-full-width" for="text-input-id-fss">
            Lets us know if you have a question for your case which was not answered in the video. *</label>
         <div class="gaccca-form-element__control">
 
             <textarea  name='descriptionOfWork' class="gaccca-textarea gaccca-full-width gaccca-required" id='questionId'></textarea>
           
            
          </div>
        </div>
          <button class="gaccca-button-save gaccca-button-save-margin" id='submitQuestion'>Submit</span>

     @else
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>On this page, we will provide you a video regarding your visa category as soon as we reach some steps in your case. We will send you an email when the video access is available.
        
        </p>
      </div>
   @endif
     
     
    </div>

    <script>
		var completedTime=0;
		function saveVideoTime(timeVdo) {
      document.getElementById('videoWatched').innerHTML=timeVdo+'%'; 
      myFunction() ;
		}    

    
    
    const submitQuestion=document.querySelector('#submitQuestion');
    if(submitQuestion!=null){
      submitQuestion.addEventListener('click', (e)=>{
  if(!confirm('Are you sure?')){
	  return;
  }
   if(document.getElementById('questionId').value.trim().length==0){
    onError('Question field is empty.');
   }else{
    questionMethod(document.getElementById('questionId').value);
   }
    
});
}



function questionMethod (question){

  if(question.trim().length==0)return;
  document.getElementById('loader').style.display='block';
var formData = {
question:question
};
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type: 'POST',
url: 'b1videoUpdate',
data: formData,
dataType: 'json',
success: function (data) {
  document.getElementById('loader').style.display='none';
   if(data=='OK'){
	onUpdate('Thank you, we received your Question!');
	
	document.getElementById('submitQuestion').disabled=true;
	document.getElementById('questionId').value='';
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