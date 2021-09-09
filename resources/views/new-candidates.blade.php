<!DOCTYPE html>
<html>

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->

<title>New-Candidates</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta name="title" content="New-Candidates" />
<meta name="description" content="Over the account you can access the programs and services" />
<meta name="keywords" content="Account IIEEX, Account GACCCA" />
<meta name="robots" content="noindex, nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="English" />
<meta name="revisit-after" content="30 days" />
<meta name="author" content="IIEEX, GACCCA" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://account.iieex.org/new-candidates" />
<meta property="og:site_name" content="https://account.iieex.org" />
<meta name="google-site-verification" content="-6V8H3sxoJ6qUsdyr6IkfGBlVoHhB5C3QQFTFTmR4mI" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" href="{{ asset('images/favicon/favicon-iieex-16.png') }}" type="image/png" sizes="16x16" />
<link rel="icon" href="{{ asset('images/favicon/favicon-iieex-32.png') }}" type="image/png" sizes="32x32" />
<link rel="apple-touch-icon" href="{{ asset('images/favicon/favicon-iieex-60.png') }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/favicon-iieex-76.png') }}" />
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/favicon-iieex-120.png') }}" />
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/favicon-iieex-152.png') }}" />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<link href="{{ asset('css/jquery-ui.css') }}" rel='stylesheet'>
<link href="{{ asset('css/font.css') }}" rel='stylesheet'>
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>

<style>

.gaccca_overlay_loader {
    display: block;
position: fixed; /* Sit on top of the page content */
width: 100%; /* Full width (cover the whole page) */
height: 100%; /* Full height (cover the whole page) */
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: rgba(0,0,0,0.5); /* Black background with opacity */
z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
cursor: pointer; /* Add a pointer on hover */
}
.gaccca_overlay_loader img{
    left: 50%;
    position: fixed;
    top: 50%;
}
</style>
</head>

<body style="background-color: #FFF;" >

 
<div class=" gaccca-newCandidates">
<img src="{{ asset('images/logo/logo12.png') }}" />  
<p >

Thank you for your interest in our International Students. On this page, you find our most current Application who are looking for a great Company in the USA for an Internship or a Trainee. For many of our companies have a huge advantage to host international talents. <br/>
Please see our new and current participants and click on the picture to see their resumes and video. If you have interest in any applicant please contact us and we will schedule an interview. 

</p>
<div class="gaccca-grid gaccca-wrap newCandidate-m">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1 internship-field-all">
<span class="gaccca-tag-blue gaccca-select-tag gaccca-margin15-right">All</span>

</div>
<div class="gaccca-large-size_10-of-12 gaccca-medium-size_10-of-12 gaccca-small-size_1-of-1 internship-field">
@foreach (isset($datas['occupationFieldsList'])?$datas['occupationFieldsList']:[] as $d)
<span class="gaccca-tag-blue gaccca-select-tag gaccca-tag-disabled" data-value='{{$d}}'>{{$d}}</span>
@endforeach
</div>
</div>
<div class="gaccca-grid gaccca-wrap">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1 newCandidate-sm">
    <label>Internship Field</label><br/>
    <select class="gaccca-select internship-field-sm">
        <option value="">All</option>
@foreach (isset($datas['occupationFieldsList'])?$datas['occupationFieldsList']:[] as $d)
<option value="{{$d}}">{{$d}}</option>
@endforeach
</select>
</div>

</div>

<br/>
<div class="gaccca-grid gaccca-wrap newCandidate-m">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1 internship-type-all">
<span class="gaccca-tag-blue gaccca-select-tag gaccca-margin15-right">All</span>

</div>

<div class="gaccca-large-size_10-of-12 gaccca-medium-size_10-of-12 gaccca-small-size_1-of-1 internship-type">
<span class="gaccca-tag-red gaccca-select-tag gaccca-tag-disabled" data-value='Remote'>Remote</span> 
<span class="gaccca-tag-green gaccca-select-tag gaccca-tag-disabled" data-value='On-site'>On-site</span> 
</div>
</div>

<div class="gaccca-grid gaccca-wrap  newCandidate-sm">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1">
<label>Internship Type</label><br/>
    <select class="gaccca-select internship-type-sm" >
        <option value="">All</option>
<option value="Remote">Remote</option>
<option value="On-site">On-site</option>

</select>
</div>

</div>

<div class="loader gaccca_overlay_loader" id='loader'>
<img src="{{ asset('images/loader.gif') }}"  class="loader center" width="50" height="50" />
</div>
<div class="gaccca-grid gaccca-wrap" id="body">

</div>
</div>


</body>
<script>
let intership_field=[];
let intership_type=[];
$(document).ready(function() {
    

    $(".internship-field-all .gaccca-select-tag").click(function(){
        intership_field=[];
        $(".internship-field .gaccca-select-tag").addClass("gaccca-tag-disabled");
        $(".internship-field-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        checkAjaxCall();
});

$(".internship-type-all .gaccca-select-tag").click(function(){
        intership_type=[];
        $(".internship-type .gaccca-select-tag").addClass("gaccca-tag-disabled");
        $(".internship-type-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        checkAjaxCall();
});


$(".internship-field-sm").change(function(){
    intership_field=[];
   if(this.value!=''){
    intership_field.push(this.value);
   }
   checkAjaxCall();
})

$(".internship-type-sm").change(function(){
    intership_type=[];
   if(this.value!=''){
    intership_type.push(this.value);
   }
   checkAjaxCall();
})

    $(".internship-field .gaccca-select-tag").click(function(){
        intership_field=checkValue(this,intership_field);
        if(intership_field.length>0){
            $(".internship-field-all .gaccca-select-tag").addClass("gaccca-tag-disabled");
        }else{
            $(".internship-field-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        }
        checkAjaxCall();
});



$(".internship-type .gaccca-select-tag").click(function(){
    intership_type=checkValue(this,intership_type);
    if(intership_type.length>0){
            $(".internship-type-all .gaccca-select-tag").addClass("gaccca-tag-disabled");
        }else{
            $(".internship-type-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        }
    checkAjaxCall();
});


function checkValue(t,arrayVar){
    var value=$(t).attr("data-value");
var indexNum=arrayVar.indexOf(value);
if(indexNum>-1){
    arrayVar.splice(indexNum, 1);
    $(t).addClass("gaccca-tag-disabled")
}else{
    arrayVar.push(value);
    $(t).removeClass("gaccca-tag-disabled")
}
return arrayVar;
}

function checkAjaxCall(){
ajaxCall();
}

function ajaxCall(){
   var formData = {
        'intership_type': intership_type,
        "intership_field": intership_field,
        "typeInfo": 'search'
    }
    console.log(formData);
    document.getElementById('loader').style.display = 'block';
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
        type: 'post',
        url: 'new-candidates-ajax',
        data: formData,
        dataType: 'html',
        success: function(data) {
            
            const ajaxData = JSON.parse(data);
                console.log(typeof(data));
            $('#body').html(ajaxData.html);
            document.getElementById('loader').style.display = 'none';
           
        },
        error: function(data) {
            document.getElementById('loader').style.display = 'none';
            console.log(data);
        }
    });

}

ajaxCall();

});


</script>

</html>