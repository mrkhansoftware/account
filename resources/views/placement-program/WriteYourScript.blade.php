@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


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
                <button id="your_script_btn" class="gaccca-tablinks" onclick="gacccaScriptContentTab(event, 'your_script'); return false;">Your Script</button>
                <button class="gaccca-tablinks" onclick="gacccaScriptContentTab(event, 'sample_script')">Sample Script</button>
              </div>
              
              <div id="your_script" class="gaccca-tabcontent">
                <textarea  required=""  class="gaccca-script-textarea"></textarea>
              </div>
              
              <div id="sample_script" class="gaccca-tabcontent">
                
                <p>This sample script will help you get a better understanding of what a video resume script looks like.</p> 
                <h4><strong>Brief Introduction</strong></h4>
                <p>Hello! My name is XXXX and I’m interested in applying for an internship with your organization. General Education <br/><br/>
                    I’m currently a student in my second year of college at XX University in XXXX, Germany, where I’m studying XX. My concentrations are in XXXX which has given me the opportunity to take classes such as XX, XX.
                </p>
            
            <h4><strong>Practical Experience (Example)</strong></h4>
            <p>During the Fall of 2015, I worked as an Export Marketing Intern at Proctor & Gamble where I was able to gain hands on experience in my field of study. I was able to provide valuable information to my department through my analysis of the German, French, and UK Markets. Additionally, I was able to assist in the production and design of promotional materials and product launches. This experience gave me invaluable communication and teamwork skills and challenged me to think in creative and innovative ways.</p>
            

            <h4><strong>Special Projects (Example)</strong></h4>
            <p>During my study abroad program at the University of Nottingham in the UK, I had the opportunity to work on the Events Committee of the university’s student association as a social media and marketing coordinator. I was responsible for creatively communicating fun new events to the entire student body in order to increase student engagement on campus. Other Relevant Experience (Example) Additionally, while at the University of Cologne, I have volunteered for a local soccer club where I have helped organize and advertise events hosted for the youth. I have designed flyers to be printed and digitally displayed on the group’s Facebook page which has given me brief insight into the essentials of graphic design and advertising.</p>


            <h4><strong>Closing</strong></h4>
            <p>I feel that these experiences would make me a great asset to your company and I am eager to learn and improve upon the skills that I have. I look forward to an internship in your organization, preferably for XX months beginning in XX (e.g., Spring, Summer, Fall, Winter) of this year. If you would like to learn more about my academic and professional background, please refer to my attached resume. I’d be very happy to answer any further questions you may have in an interview. Thank you so much for your time and consideration. I look forward to hearing from you soon. Sample Video resume from Felix</p>



            </div>
              
    
    </div>


    <div class="gaccca-form-element gaccca-sky-blue-box-margin">


      <p>  Let us know if you think you finished your script by clicking the button below. </p>

      <p>  Your placement coordinator will reply a feedback and maybe improve your draft before you will record your video. </p>
    </div>


</div>
     
    </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif