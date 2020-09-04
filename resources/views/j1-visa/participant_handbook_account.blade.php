@include('common.header',['portal_program' =>isset($datas['portalProgram'])?$datas['portalProgram']:''])


{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}


<div class="gaccca-main-containt">


<h1 class="gaccca-h1-padding">Participant Handbook</h1>
<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Your Handbook is an essential part of our program and your application. Most of the questions
        participants have will be answered here. We strongly recommend printing out and studying our
        handbook carefully. If you have a question please first have a look at your handbook and the
        provided links on this page for answers. If you have further questions after referring to the
        handbook, please contact us via email.</p>
</div>
<div class="gaccca-margin-bootom-80">
    <a href="#" style="text-decoration: none;">
        <div class="gaccca-download-participant-handbook gaccca-download-participant-handbook-margin gaccca-download-participant-handbook-padding">
            <i class="fa fa-download" aria-hidden="true"></i>  Download The GACC California Participant Handbook Here
        </div>
    </a>
</div>


<div class="gaccca-grid gaccca-wrap">

    


    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <h2 class="gaccca-padding-left-0 gaccca-text-center">U.S. Embassy Visa Application Process</h2>
           <p class="gaccca-padding-left-25">Paying the embassy fee (160 USD) and scheduling an interview
            <br/>
            <a href="#">http://www.ustraveldocs.com/</a> or <a href="#">https://ais.usvisa-info.com/</a> 

           </p>
           <p class="gaccca-padding-left-25"><a href="#">Fill out the DS-160</a></p>
           <p class="gaccca-padding-left-25"><a href="#">Photo requirement for DS-160</a></p>
           <p class="gaccca-padding-left-25"><a href="#">Visa Appointment & Processing Wait Times</a></p>
        
    </div>

    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">

        <h2 class="gaccca-padding-left-0 gaccca-text-center">Arriving in the U.S.</h2>

        <p class="gaccca-padding-left-25"><a href="#">U.S. Department of State Exchange Visitor Welcome Brochure</a></p>
        <p class="gaccca-padding-left-25"><a href="#">U.S. Department of Homeland Security Port of Entry Fact Sheet</a></p>
        <p class="gaccca-padding-left-25"><a href="#">SEVIS Fact Sheet</a></p>
        <p class="gaccca-padding-left-25"><a href="#">I-94 Travel Records for U.S. Visitors</a></p>
        <p class="gaccca-padding-left-25"><a href="#">Know your Rights Brochure</a> (Wilberforce Pamphlet)</p>
        <p class="gaccca-padding-left-25"><a href="#">Social Security Card Information</a></p>
        <p class="gaccca-padding-left-25"><a href="#">Applying for a Driver's License State Identification Card</a></p>
        <p class="gaccca-padding-left-25"><a href="#">U.S. Department of State Intern Welcome Letter</a></p>
        <p class="gaccca-padding-left-25"><a href="#">U.S. Department of State Trainee Welcome Letter</a></p>
       
        
    </div>


    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <h2 class="gaccca-padding-left-0 gaccca-text-center">While in the U.S.</h2>
           <p class="gaccca-padding-left-25">If you want to travel outside the U.S. during your Internship or training you must submit a Travel Validation with us.
            Without this Travel Validation you will not be able to enter the U.S. again.
           </p>
           <p class="gaccca-padding-left-25">You must submit your Travel Validation at least 2 weeks before your departure. Follow the link below for further instructions:</p>
           <p class="gaccca-padding-left-25"><a href="#">GACC California Travel Validation</a></p>
           <br/>
           <p class="gaccca-padding-left-25">Please save this number in your phone!</p>
           <p class="gaccca-padding-left-25">24-hour Emergency Line (toll-free):</p>
           <p class="gaccca-padding-left-25"><strong>(+1) 888 936-2489</strong></p>
           <br/>
           
           <p class="gaccca-padding-left-25">Join our Pages and Groups to stay connected!</p>
           <p class="gaccca-padding-left-25"><a href="#">GACC California Facebook</a></p>
           <p class="gaccca-padding-left-25"><a href="#">J1 Visa Facebook</a></p>
           <p class="gaccca-padding-left-25"><a href="#">Participants closed group on Facebook</a></p>
           <p class="gaccca-padding-left-25"><a href="#">GACC California Instagram</a></p>
           <p class="gaccca-padding-left-25"><a href="#">GACC California LinkedIn Group</a></p>



    </div>


</div>

</div>


{!! Form::close() !!}
@include('common.footer')