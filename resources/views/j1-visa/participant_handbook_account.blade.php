@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Participant Handbook','page'=>'participant_handbook_account','parent_page'=>'J1 Program'])

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST']) !!}


<div class="gaccca-main-containt gaccca-gutters">


<h1 class="gaccca-h1-padding">Participant Handbook</h1>
<div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
    <p>Your Handbook is an essential part of our program and your application. Most of the questions
        participants have will be answered here. We strongly recommend printing out and studying our
        handbook carefully. If you have a question please first have a look at your handbook and the
        provided links on this page for answers. If you have further questions after referring to the
        handbook, please contact us via email.</p>
</div>


 <div class="gaccca-margin-bootom-80">
     
        <div class="gaccca-download-participant-handbook-green gaccca-download-participant-handbook-margin gaccca-download-participant-handbook-padding">
   <a href="https://gaccca.my.salesforce.com/sfc/p/1I000001fgme/a/1I000000bzFA/yQB29Uz4K_WLgloHYLjhQ4m4DUC20cIoi3K_9B05WTs" style="text-decoration: none;color: inherit;" target='_blank' >         <i class="fa fa-download" aria-hidden="true"></i>  Download The GACC California Participant Handbook Here
            </a>  </div>
   
</div>



<div class="gaccca-grid gaccca-wrap">

    


    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <h2 class="gaccca-padding-left-0 gaccca-text-center">U.S. Embassy Visa Application Process</h2>
           <p class="gaccca-padding-left-25">Paying the embassy fee (160 USD) and scheduling an interview
            <br/>
            <a href="http://www.ustraveldocs.com/" target='_blank' >http://www.ustraveldocs.com/</a> or <a href="https://ais.usvisa-info.com/" target='_blank' >https://ais.usvisa-info.com/</a> 

           </p>
           <p class="gaccca-padding-left-25"><a href="https://ceac.state.gov/genniv/" target='_blank' >Fill out the DS-160</a></p>
           <p class="gaccca-padding-left-25"><a href="https://travel.state.gov/content/visas/en/general/photos.html" target='_blank' >Photo requirement for DS-160</a></p>
           <p class="gaccca-padding-left-25"><a href="https://travel.state.gov/content/travel/en/us-visas/visa-information-resources/wait-times.html" target='_blank' >Visa Appointment &amp; Processing Wait Times</a></p>
        
    </div>

    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">

        <h2 class="gaccca-padding-left-0 gaccca-text-center">Arriving in the U.S.</h2>

        <p class="gaccca-padding-left-25"><a href="https://j1visa.state.gov/wp-content/uploads/2015/03/Brochure-The-Exchange-Visitor-Program.pdf" target="_blank" >U.S. Department of State Exchange Visitor Welcome Brochure</a></p>
        <p class="gaccca-padding-left-25"><a href="https://gaccca.my.salesforce.com/sfc/p/#1I000001fgme/a/1I000000Xr3i/WwerdDDZ48wZVYXxxfzvIZepw.c5iHnYiyOVaN7n0m4" target="_blank">U.S. Department of Homeland Security Port of Entry Fact Sheet</a></p>
        <p class="gaccca-padding-left-25"><a href="https://gaccca.my.salesforce.com/sfc/p/#1I000001fgme/a/1I000000Xr3i/WwerdDDZ48wZVYXxxfzvIZepw.c5iHnYiyOVaN7n0m4" target="_blank">SEVIS Fact Sheet</a></p>
        <p class="gaccca-padding-left-25"><a href="https://i94.cbp.dhs.gov/I94/#/home"  >I-94 Travel Records for U.S. Visitors</a></p>
        <p class="gaccca-padding-left-25"><a href="https://travel.state.gov/content/travel/en/us-visas/visa-information-resources/temporary-workers.html" target="_blank" >Know your Rights Brochure</a> (Wilberforce Pamphlet)</p>
        <p class="gaccca-padding-left-25"><a href="https://www.ssa.gov/pubs/EN-05-10181.pdf" target="_blank" >Social Security Card Information</a></p>
        <p class="gaccca-padding-left-25"><a href="https://www.ice.gov/doclib/sevis/pdf/dmv_factsheet.pdf" target="_blank" >Applying for a Driver's License State Identification Card</a></p>
        <p class="gaccca-padding-left-25"><a href="https://j1visa.state.gov/wp-content/uploads/2019/01/Intern-welcome-letter-2019.pdf" target="_blank">U.S. Department of State Intern Welcome Letter</a></p>
        <p class="gaccca-padding-left-25"><a href="https://j1visa.state.gov/wp-content/uploads/2019/01/Trainee-welcome-letter-2019.pdf" target="_blank">U.S. Department of State Trainee Welcome Letter</a></p>
       
        
    </div>


    <div class="gaccca-col gaccca-large-size_6-of-12 gaccca-medium-size_1-of-1">
        <h2 class="gaccca-padding-left-0 gaccca-text-center">While in the U.S.</h2>
           <p class="gaccca-padding-left-25">If you want to travel outside the U.S. during your Internship or training you must submit a Travel Validation with us.
            Without this Travel Validation you will not be able to enter the U.S. again.
           </p>
           <p class="gaccca-padding-left-25">You must submit your Travel Validation at least 2 weeks before your departure. Follow the link below for further instructions:</p>
           <p class="gaccca-padding-left-25"><a href="/travel_validation_account" target='_blank' >GACC California Travel Validation</a></p>
           <br/>
           <p class="gaccca-padding-left-25">Please save this number in your phone!</p>
           <p class="gaccca-padding-left-25">24-hour Emergency Line (toll-free):</p>
           <p class="gaccca-padding-left-25"><strong>(+1) 888 936-2489</strong></p>
           <br/>
           
           <p class="gaccca-padding-left-25">Join our Pages and Groups to stay connected!</p>
           <p class="gaccca-padding-left-25"><a href="https://www.facebook.com/gaccca/" target='_blank' >GACC California Facebook</a></p>
           <p class="gaccca-padding-left-25"><a href="https://www.facebook.com/j1visa/" target='_blank' >J1 Visa Facebook</a></p>
           <p class="gaccca-padding-left-25"><a href="https://www.facebook.com/groups/325503004157302/" target='_blank' >Participants closed group on Facebook</a></p>
           <p class="gaccca-padding-left-25"><a href="https://www.instagram.com/gaccca/" target='_blank' >GACC California Instagram</a></p>
           <p class="gaccca-padding-left-25"><a href="https://www.linkedin.com/groups/2845426/profile" target='_blank' >GACC California LinkedIn Group</a></p>



    </div>


</div>

</div>


{!! Form::close() !!}
@include('common.footer')



@else
  Permission denied. Please contact administrator.
  @endif