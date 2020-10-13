@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Video Instructions','page'=>'VideoInstructions','parent_page'=>'Placement Program'])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Video Instructions</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>The video script you prepared should be a short presentation of your personality, academic history, previous work experiences and skills.<br/>
           <br/> Also, please describe why you would like to complete an internship in the United States, and what your plans and goals for this internship are.
        </p>
      </div>
      

      <div class="gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1 gaccca-small-size_1-of-1">
        
        <div class="gaccca-form-element gaccca-form-element-margin">
            <p>
               <strong> Do not read your script directly:</strong> instead, summarize the most important points. Feel free to be creative in order to make your application stand out. To use the teleprompter function, copy and paste the text into the teleprompter text box. Make sure to sell yourself in the best way possible! Pay attention to the following details to ensure your video application will convince companies of your personality and qualifications:
            </p>
            <p>
               <strong> Background: </strong> Please choose a plain background, such as a white wall or other neutral color. Avoid shadows by windows or sun light.
            </p>
            
            <p>
              <strong>  Dress code: </strong> Always keep in mind that your video is similar to a personal interview. Dress accordingly to convince companies of your business attitude.
            </p>
       

            <p> <strong>Camera angle: </strong> Your webcam should be positioned so that only your upper body, shoulders and entire head are visible. Your head and shoulder should be visible, and in the center of the frame.
    
            </p>

            <p> <strong> Lighting: </strong> Make sure your video is well lit. Natural or bright lighting is preferred. Duration: The video should not be longer than 2 minutes.</p>
            <p> <strong> Speech: </strong> Please speak naturally and clearly. Memorizing your script leads to the best results. Do more than one recording.</p>
            <p>The goal of this video is to showcase your skills, experience, and personality to the company, and convince them that you are the right person for the job.</p>
           

    
    </div>


</div>
     
    </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif