@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Interview Preparation','page'=>'InterviewPreparation','parent_page'=>'Placement Program'])

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST']) !!}

<div class="gaccca-main-containt">
      <h1 class="gaccca-h1-padding">Interview Preparation Guide</h1>
      <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>Even though the American style of interview is usually shorter than other parts of the world, you still need to be fully prepared to give an initial excellent impression to the employer. As soon as your GACC California Program Coordinator provides you with the phone interview guidelines, be ready to discuss any of the following topics. All phone and webcam interviews are pre-arranged by your Coordinator, including any follow-up or second interviews. </p>
         <p>   Before setting up the interview with the potential employer, we will send you the maximum information available on the company. You need to become familiar with the company’s website and all the information provided. Generally, it is a good idea to slightly adjust your answers according to the company’s profile. We recommend you keep a “cheat sheet” of your answers by the phone; don’t simply read your prepared answers. It would sound very unnatural!
         </p> <p>
           In case the employer phones you during an inappropriate time, kindly ask if you can phone back within a short amount of time (no more than 30 minutes) and remember to ask for his/her name and phone number.
         </p> <p>
           Your accommodation in the host country is not the responsibility of the company. If the company mentions this, reassure your speaker that GACC California is assisting you. But if your employer offers housing opportunities, you should take advantage of it!
         </p><p>
         Most internship offers are unpaid – Although some companies may offer financial compensations in certain cases, you should not expect this. You should not ask them about salary during the interview unless the employer speaks about it first. If compensation comes up during the interview, please let the interviewer know that your program coordinator is responsible for negotiating the details.
        </p>
      </div>
      

      <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <h2 class="gaccca-h2-padding">Possible Interview Questions</h2> 
        <div class="gaccca-form-element gaccca-form-element-margin">
            <ul>
                <li>Tell me about yourself.</li>
                <li>What do you know about our company/organization?</li>
                <li>How many hours/week do you want to work? (It is advised to offer 40 hours)</li>
                <li>Why would you like to work for us?</li>
                <li>What is most important to you about your internship in the US?</li>
                <li>Explain to us what makes you suitable to do an internship with our organization. What are your greatest strengths? What are your weaknesses?</li>
                <li>What excites you most about the internship and what do you expect to gain from your experience abroad?</li>
                <li>What are your career objectives?</li>
                <li>Where do you see yourself in five years (How will this internship help you reach your career goals?)</li>
                <li>How will your background be an advantage for our company?</li>
                <li>What do you enjoy doing? What do you not like to do? (Be professional and tactful with your response!)</li>
                <li>Tell us about your last job and explain all duties and responsibilities.</li>
                <li>Give us an example of a problem or conflict you have been confronted with and tell us how you chose to resolve it.</li>
                <li>What are the best part and worst part of your current job/school/internship? (Be professional and tactful with your response!)</li>
                <li>What part of your work do you find difficult and what part easy?</li>
                <li>What do you consider to be your greatest success and why? (Try to focus on what you have learned from this experience)</li>
                <li>What do you consider to be your greatest failure and why? (Try to focus on what you have learned from this experience)</li>
                <li>What have you gained from your professional experience?</li>
                <li>What are your computer skills and level of usage for each software?</li>
                <li>Tell us about your travel experience? What did you learn from it?</li>
                <li>If you were a fruit or a vegetable, what would you be and why?</li>
                <li>Do you speak any other languages? Which level?</li>
                <li>Name one word that best describes you?</li>
                <li>What do you consider to be your greatest accomplishment?</li>
            </ul>

    
            
           
              


        </div>








        <h2 class="gaccca-h2-padding">Golden rules for answering interview questions:</h2> 
        <div class="gaccca-form-element gaccca-form-element-margin">
            <ul>
                <li>Speak clearly and concisely.</li>
                <li>Don't try to answer a question that you do not understand, ask for clarification.</li>
                <li>Talk openly and with enthusiasm about your achievements, but don't overstate them.</li>
                <li>Be confident and focus on your strengths.</li>
                <li>Keep your answers relevant to the question.</li>
                <li>Don't pretend to know something that you don't.</li>
                <li>Remain focused and avoid bad mannerisms, e.g. distracting gestures. Make sure you are in a place free from distractions.</li>
                <li>Try to be yourself. Show sincerity and enthusiasm.</li>
                <li>Never make negative comments about former employers. No matter how tempting it is to want to notify the world about the awful business practices of a previous employer; DON'T DO IT. Remember, be professional and unbiased.</li>
                <li>When the interviewer says, "Do you have any questions?" please say “yes”. It will show the employer you are proactive, and <b>it is your responsibility to find out as much about the internship position as possible so that you can make an informed decision</b>.</li>
                <li>Here are some examples of final questions:
                    <ul style="list-style: lower-alpha;">
                        <li>Will I be working within a team or on my own?</li>
                        <li>How many people will I be working with?</li>
                        <li>What is a typical day like in the office?</li>
                        <li>What types of tasks and projects will I be working on?</li>
                        <li>After an adjustment period, can I take on additional learning opportunities and/or expand my contribution to your company?</li>
                        <li>How can I prepare for this internship?</li>
                    </ul>
                </li>
            </ul>

            <p> <strong> PLEASE NOTE: </strong> Be prepared and online at least 10 minutes prior to your scheduled interview time. If the interviewer does not call with in 15 minutes, please contact the company with the phone number provided by your program coordinator.</p>
    
            
           
              


        </div>



   
      </div>
     
     
    </div>

{!! Form::close() !!}
@include('common.footer')


@else
  Permission denied. Please contact administrator.
  @endif