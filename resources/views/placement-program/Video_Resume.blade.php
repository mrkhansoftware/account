@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Video Resume','page'=>'Video_Resume','parent_page'=>'Placement Program'])
<style>
	.myFormStyle {
		background-color: blue;
	}

	.ba-videorecorder-theme-modern-norecorder {
		background-color: none !important;
	}
</style>
<style type="text/css">
	.AnimatedTP {
		transition: top 1.5s linear;
	}

	.ui-slider-handle {
		border-color: #0078f2 !important;
	}

	.CloseTeleprompterBtn:hover {
		color: black;
	}

	.CloseTeleprompterBtn {
		color: #fff;
		text-decoration: none;
		float: right;
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

	#teleprompterArea {
		max-width: 600px;
		height: 280px;
		min-height: 280px;
	}

	#Teleprompter {
		background-color: rgba(0, 0, 0, 0.9);
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 40%;
		z-index: 90000;
		color: #ffffff;
	}

	#TeleprompterContent {
		width: 46%;
	}

	#TeleprompterControl {
		width: 1280px;
		margin: 0 auto;
	}

	#sliderSize {
		display: inline-block;
		width: 200px;
	}

	#sliderSpeed {
		display: inline-block;
		width: 200px;
	}

	@media screen and (min-width: 1500px) {
		#TeleprompterContent {
			width: 46%;
			margin: 0 27%;
		}
	}

	@media screen and (max-width: 1499px) {
		#TeleprompterContent {
			width: 80%;
			margin: 0 10%
		}

		#TeleprompterControl {
			width: 100%;
			margin: 0 !important;
			border-bottom: 1px solid #000;
		}

		.Countdown {
			display: none !important;
		}
	}
	.labelVideoScript{
		max-width: 80%;
	}
	.previewlabel{
		margin-left: 35px;
	}
	.vdoBorder{
		border-style: solid;
		border-width: 1px;
		border-color: #6ca9f2;
		width: 400px !important;
		height: 300px !important;
		display:block;
	}
	.grayClr{
		color:#8C8C8C;
	}
</style>
<link rel="stylesheet" href="https://assets-cdn.ziggeo.com/v1-stable/ziggeo.css" />
<script src="https://assets-cdn.ziggeo.com/v1-stable/ziggeo.js"></script>
<script>
	ZiggeoApi.token = "80f9af3ec1dfe032714fd61c53f94376";
	var ziggeoApp = new ZiggeoApi.V2.Application({
        token: "80f9af3ec1dfe032714fd61c53f94376"
    });
</script>
<script>
	function initMehtod() {
		// document.getElementsByClassName('ba-videorecorder-theme-modern-norecorder')[0].style.background='none';
		//document.getElementById('vdoBorder').style.display = 'block';
		if (document.getElementsByClassName("ba-videorecorder-chooser-button-0")[0] == undefined) {

			document.getElementById('vdoBorder').style.border = 'none';

		}
		if (document.getElementsByClassName("ba-videorecorder-chooser-button-0")[0] != undefined) {
		document.getElementsByClassName("ba-videorecorder-chooser-button-0")[0].addEventListener("click", function() {
			document.getElementById('vdoBorder').style.border = 'none';

			document.getElementById('telepromtrbtn').click();

		});
		}


	}
</script>
<div class="gaccca-main-containt">
	<h1 class="gaccca-h1-padding">Create Your Video Resume </h1>
	@if (isset($datas['profileLocked']) && $datas['profileLocked'])
	<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
		<p>Your CVOne Video resume was blocked by your placement coordinator. Your placement coordinator is now working on your application. If you have any questions please contact your placement coordinator via emial or schedule a call.</p>
	</div>
	<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1 gaccca-sky-blue-box-margin">
	<label class="gaccca-radio__label previewlabel">
                        <a href="/ApplicantPDFWithVideo" target='_blank'>Preview your video resume</a>
					</label>
		</div>
	@else


	<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
		<p>You have the option to use a teleprompter which automatically appears when you start recording. 
Your most current video script will be inserted automatically on this page.</p>
	</div>
	<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
		<div class="gaccca-form-element gaccca-form-element-margin">
			<div class="vdoBorder" id='vdoBorder' style="{{isset($datas['app']['Link_to_video__c'])?'display:none':'display:block'}}">
			@if (!(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c']))
                   
							<ziggeorecorder ziggeo-timelimit='180' ziggeo-width='400' ziggeo-height='300' ziggeo-theme='modern' allowupload='false' id="myRecorder"></ziggeorecorder>
			
							<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1" id='showLastRecording'style="{{isset($datas['app']['Link_to_video__c'])?'display:block':'display:none'}}" >
				<div class="gaccca-form-element__control"> 
				<label class="gaccca-radio__label ">
                        <a href="javascript:void(0)"  id='show_last'>Show last recording</a>
					</label>
					

			</div>
		</div>
		@endif
			</div>
			<div class='video' style="{{isset($datas['app']['Link_to_video__c'])?'display:block':'display:none'}}" id='vdo_player'>
					<div id="replace_me-v2_player"></div>
					 <script>
						function zigeoAppInit(videoKey){
                        ziggeoApp.on("ready", function() {
                            var player = new ZiggeoApi.V2.Player({
                                element: document.getElementById("replace_me-v2_player"),
                                attrs: {
                                    width: 400,
                                    height: 300,
                                    theme: "modern",
                                    themecolor: "blue",
                                    video: videoKey
                                }
                            });

                            player.activate();
                            var elementss = document.getElementById('replace_me-v2_player');
                            var embedding = ZiggeoApi.V2.Recorder.findByElement(elementss);
                            embedding.on("playing", function() {
                                
                            });

                        });
						}
						zigeoAppInit("{{isset($datas['app']['Link_to_video__c'])?$datas['app']['Link_to_video__c']:''}}");
					</script>
					

					@if (!(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c']))
                   
<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
				<div class="gaccca-form-element__control"> 
				<label class="gaccca-radio__label ">
				<span class='grayClr'>Not yet satisfied with your video? </span> <a href="javascript:void(0)" id='record_again'>Record again!</a>
					</label>
					

			</div>
		</div>
		@endif
                </div>

		</div>
	</div>
	<br/>
			
	<div>  
		<div id="Teleprompter" style="display:none;position;">
			<div class="Countdown" data-readytext="Ready to record">2</div>
			<div style="max-height:360px;overflow:hidden;height:245px;top:0;position:absolute;width:100%;">
				<div id="TeleprompterContent" class="AnimatedTP" style="font-size:24px;font-weight:bold;line-height:130%;position:absolute;top:0;overflow:hidden;"></div>
			</div>
			<div id="TeleprompterControl" style="position:absolute;bottom:0px;overflow:hidden;margin:0 315px;background-color:#0078f2;text-align:center;padding:10px 0 !important;">
				<div style="display:inline-block;width:100px;">Text size</div>
				<div id="sliderSize" style="margin-right:40px;"></div>
				<div style="display:inline-block;width:100px;">Scroll speed</div>
				<div id="sliderSpeed"></div>
				<div style="display:inline-block;width:250px;margin-left:100px;10px 0 !important;"> <i class="fa fa-play" aria-hidden="true"></i>&nbsp;&nbsp; <i class="fa fa-pause" aria-hidden="true"></i>&nbsp;&nbsp; <i class="fa fa-stop" aria-hidden="true"></i>&nbsp;&nbsp; <a href="#" class="CloseTeleprompterBtn">Close Teleprompter</a>
				</div>
			</div>
		</div>
		<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
			<div class="gaccca-form-element gaccca-form-element-margin">
				<div class="gaccca-form-element__control"> 
					
				<span id="telepromtrbtn" class="{{(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c'])?'ShowTeleprompter gaccca-button-save gaccca-btn-disabled-g':'ShowTeleprompter gaccca-button-save'}}">Show Teleprompter

				</span>
				<label class="gaccca-radio__label previewlabel">
                        <a href="/ApplicantPDFWithVideo" target='_blank'>Preview your video resume</a>
					</label>

				</div>
			</div>
		</div>
		<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
			<div class="gaccca-form-element gaccca-form-element-margin">
				<label class="gaccca-form-element__label" for="text-input-id-8"></label>
				<div class="gaccca-form-element__control">
					<textarea name="teleprompter" id="teleprompterArea" data-gramm="true" data-txt_gramm_id="773be24c-eef4-657f-8d24-64ae226215d1" data-gramm_id="773be24c-eef4-657f-8d24-64ae226215d1" spellcheck="false" data-gramm_editor="true" class='gaccca-textarea'>{{isset($datas['app']['Write_Your_Script__c'])?$datas['app']['Write_Your_Script__c']:''}}</textarea>
				</div>
			</div>
		</div>
		@if (!(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c']))
            
		<script>
			jQuery(function() {
				function nl2br(str, is_xhtml) {
					var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
					return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
				}

				jQuery('#teleprompterArea').on('keyup', function() {
					if (jQuery('#Teleprompter').data('show') == true) {
						Content2Teleprompter();
					}
				});
				$(window).on('load', function() {



					// alert();

					var element = document.getElementById('myRecorder');
					var embedding = ZiggeoApi.V2.Recorder.findByElement(element);
					embedding.on("recording", function() {

						//  alert('ready_to_record');
						if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
							return;
						}

						initTeleprompter();
						showTeleprompter();
						resetTeleprompter();
						startTeleprompter();
					});
					embedding.on("uploading", function() {
						jQuery('.Countdown').addClass('ReadyTo').html(jQuery('.Countdown').data('readytext')).show();
						stopTeleprompter();
						resetTeleprompter();
					});
				});
				ZiggeoApi.Events.on('recording', function(data) {
					startTeleprompter();
				});
				ZiggeoApi.Events.on('finished', function(data) {
					jQuery('.Countdown').addClass('ReadyTo').html(jQuery('.Countdown').data('readytext')).show();
					stopTeleprompter();
					resetTeleprompter();
				});
				ZiggeoApi.Events.on('countdown', function(time, data) {

					jQuery('.Countdown').html(Math.round(time / 100) / 10).removeClass('ReadyTo');
					if (time < 100) {
						jQuery('.Countdown').addClass('ReadyTo').html('<span style="color:red;text-transform:uppercase;letter-spacing:3px;font-weight:bold;">Record</span>');
					}
				});

				function Content2Teleprompter() {
					jQuery('#TeleprompterContent').html(nl2br(jQuery('#teleprompterArea').val()));
				}

				function showTeleprompter() {
					if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
						return;
					}
					if (jQuery('#teleprompterArea').val() == '') return;
					jQuery('#Teleprompter').show().data('show', true);
					jQuery(window).scrollTop(0);
				}

				jQuery('.fa-stop', '#Teleprompter').on('click', function() {
					stopTeleprompter();
					resetTeleprompter();
				});
				jQuery('.fa-pause', '#Teleprompter').on('click', function() {
					stopTeleprompter();
				});
				jQuery('.fa-play', '#Teleprompter').on('click', function() {
					startTeleprompter();
				});
				jQuery('.CloseTeleprompterBtn').on('click', function() {
					stopTeleprompter();
					jQuery('#Teleprompter').hide().data('show', false);
				});

				function initTeleprompter() {
					if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
						return;
					}

					Content2Teleprompter();
					jQuery('.Countdown').addClass('ReadyTo').html(jQuery('.Countdown').data('readytext')).show();
					if (typeof jQuery('#sliderSize').data('size') != 'undefined') {
						startSize = jQuery('#sliderSize').data('size');
					} else {
						var startSize = 27;
					}

					jQuery('#sliderSize').slider({
						min: 22,
						max: 50,
						value: startSize,
						slide: function(event, ui) {
							jQuery('#sliderSize').data('size', ui.value);
							jQuery('#TeleprompterContent').css('fontSize', ui.value + 'px');
							recalcTeleprompter();
						}
					});
					jQuery('#sliderSize').data('size', startSize);
					jQuery('#TeleprompterContent').css('fontSize', startSize + 'px');

					if (typeof jQuery('#sliderSpeed').data('speed') != 'undefined') {
						startSpeed = jQuery('#sliderSpeed').data('speed');
					} else {
						var startSpeed = 30;
					}


					jQuery('#sliderSpeed').slider({
						min: 10,
						max: 100,
						value: startSpeed,
						slide: function(event, ui) {
							jQuery('#sliderSpeed').data('speed', ui.value);
						}
					});
					jQuery('#sliderSpeed').data('speed', startSpeed);
				}
				jQuery('.ShowTeleprompter').on('click', function() {
					initTeleprompter();
					showTeleprompter();
					resetTeleprompter();
				});

				function stopTeleprompter() {
					window.clearInterval(teleprompterInterval);
					teleprompterInterval = null;
				}

				function recalcTeleprompter() {
					var heightContainer = jQuery("#TeleprompterContent").height();
					jQuery("#TeleprompterContent").data('parentheight', jQuery("#TeleprompterContent").parent().height() - 40);
					jQuery("#TeleprompterContent").data('height', heightContainer);
					jQuery("#TeleprompterContent").data('targetheight', -1 * heightContainer);
				}

				function resetTeleprompter() {
					recalcTeleprompter();

					jQuery("#TeleprompterContent").removeClass('AnimatedTP');
					jQuery("#TeleprompterContent").css('top', 60 + 'px');
					//jQuery("#TeleprompterContent").addClass('AnimatedTP');
				}

				var teleprompterInterval = null;

				function startTeleprompter() {
					if (teleprompterInterval != null) return;
					//decreaseHeight();
					teleprompterInterval = window.setInterval(decreaseHeight, 1500);
					decreaseHeight();
					jQuery("#TeleprompterContent").addClass('AnimatedTP')

					function decreaseHeight() {
						//console.log(jQuery("#TeleprompterContent").css('top'), jQuery("#TeleprompterContent").position());
						var position = jQuery("#TeleprompterContent").position();

						jQuery("#TeleprompterContent").css({
							'top': (position['top'] - (jQuery('#sliderSpeed').data('speed'))) + 'px'
						});

						if (position.top <= jQuery("#TeleprompterContent").data('targetheight')) {
							stopTeleprompter();
							resetTeleprompter();
							window.setTimeout(startTeleprompter, 1500);
						}

					}
				}

			});
		</script>
		@endif
	</div>
	<div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
		<div class="gaccca-form-element gaccca-form-element-margin">
		@if (!(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c']))
		
		<label class="gaccca-form-element__label labelVideoScript" for="text-input-id-8">Let your placement coordinator know if you think you finished your video resume by clicking the button below. 
The page will be locked until the review is done. Please click only if you are really satisfied with your recordings.</label>
@endif
			<div class="gaccca-form-element__control">
				<br />
				<button id="readyToSend" class=" {{(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c'])?'gaccca-button-save gaccca-btn-disabled-g':'gaccca-button-save'}}">Ready with video resume</button>
				
			</div>
			@if (isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c'])
			<div class="gaccca-form-element__control gaccca-block-msg">
			<br />
			Your video resume is locked.<br/>
Your placement coordinator is now reviewing your recording and will provide feedback soon.



			</div>
			@endif
		</div>
	</div>

	@endif
</div>
@if (!(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c']))

<script>
	const readyToSend = document.querySelector('#readyToSend');
	if (readyToSend != null) {
		readyToSend.addEventListener('click', (e) => {
			if (!confirm('Are you ready with your video resume?')) {
				return;
			}
			readyToSendMethod('readyToSendMethod', '-');
		});
	}
</script>

<script>
	function readyToSendMethod(methodType, vdId) {

		document.getElementById('loader').style.display = 'block'; //alert(vdId);
		var formData = {
			methodType: methodType,
			videoString: vdId
		};
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: 'POST',
			url: 'b1VideScriptReady',
			data: formData,
			dataType: 'json',
			success: function(data) {
				console.log(data)
				if (data == 'OK') {

					if (methodType == 'readyToSendMethod') {
						onUpdate('Thank you, we received your video resume.');
						document.getElementById('readyToSend').disabled = true;
						window.location.reload();return;
					} else if (methodType == 'vdoUpload') {
						
						document.getElementById('Teleprompter').style.display = 'none';
						onUpdate('Video created & submitted on our server.');
						zigeoAppInit(vdId);
						jQuery('#vdoBorder').hide();
		jQuery('#vdo_player').show();
		jQuery('#showLastRecording').show();
					}

				
				} else {

					onError('Error: Please contact the Admin!'+ data);


				}
				document.getElementById('loader').style.display = 'none';
				

			},
			error: function(data) {
				document.getElementById('loader').style.display = 'none';
				onError('Error log: Please contact the Admin!'+ JSON.stringify(data));

				console.log(data);
			}
		});
	}
</script>
@endif
@if (!(isset($datas['app']['Is_Video_Resume_Ready__c']) && $datas['app']['Is_Video_Resume_Ready__c']))
      
<script>
	ZiggeoApi.Events.on("system_ready", function() {
		//Lets get the ziggeo-recorder element reference
		var element = document.getElementById('myRecorder');

		//now lets get the actual Ziggeo embedding / object that we can use
		var recorder = ZiggeoApi.V2.Recorder.findByElement(element);

		// we can also create a global event to fire each time video was uploaded
		recorder.on("verified", function() {
			//alert("The video has been submitted!");
			readyToSendMethod('vdoUpload', recorder.get('video'));
			//savef();
		});
	});
</script>
@endif
<script>
	jQuery('#show_last').click(function(){
		jQuery('#vdoBorder').hide();
		jQuery('#vdo_player').show();
	});

    jQuery('#record_again').click(function(){
		jQuery('#vdoBorder').show();
		jQuery('#vdo_player').hide();
	});

</script>
@include('common.footer') @else Permission denied. Please contact administrator. @endif