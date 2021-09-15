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
z-index: 3; /* Specify a stack order in case you're using a different order for other elements */
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
@php $index = 1; @endphp
@foreach (isset($datas['occupationFieldsList'])?$datas['occupationFieldsList']:[] as $d)
<span data-reff='{{$index}}' class="gaccca-tag-blue gaccca-select-tag gaccca-tag-disabled"  data-value='{{$d}}'>{{$d}}</span>
@php $index++; @endphp
@endforeach
</div>
</div>
<div class="gaccca-grid gaccca-wrap">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1 newCandidate-sm">
    <label>Internship Field</label><br/>
    <select class="gaccca-select internship-field-sm" style="height: 100%;" multiple>
        <option value="">All</option>
        @php $index = 1; @endphp
@foreach (isset($datas['occupationFieldsList'])?$datas['occupationFieldsList']:[] as $d)
<option data-reff='{{$index}}' value="{{$d}}">{{$d}}</option>
@php $index++; @endphp
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
<span class="gaccca-tag-red gaccca-select-tag " data-reff='1' data-value='Remote'>Remote</span> 
<span class="gaccca-tag-green gaccca-select-tag " data-reff='2' data-value='On-site'>On-site</span> 
</div>
</div>

<div class="gaccca-grid gaccca-wrap  newCandidate-sm">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1">
<label>Internship Type</label><br/>
    <select class="gaccca-select internship-type-sm" style="height: 100%;" multiple>
        <option value="">All</option>
<option data-reff='1' value="Remote">Remote</option>
<option data-reff='2' value="On-site">On-site</option>

</select>
</div>

</div>
<br/>
<div class="gaccca-grid gaccca-wrap newCandidate-m">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1 internship-month-all">
<span class="gaccca-tag-blue gaccca-select-tag gaccca-margin15-right">All</span>

</div>
<div class="gaccca-large-size_10-of-12 gaccca-medium-size_10-of-12 gaccca-small-size_1-of-1 internship-month">
@php $index = 1; @endphp
@foreach (isset($datas['internshipMonths'])?$datas['internshipMonths']:[] as $d)
<span class="gaccca-tag-blue gaccca-select-tag gaccca-tag-disabled" data-value='{{$d}}' data-reff='{{$index}}'>{{$d}}</span>
@php $index++; @endphp
@endforeach
</div>
</div>
<div class="gaccca-grid gaccca-wrap">

<div class="gaccca-large-size_1-of-12 gaccca-medium-size_1-of-12 gaccca-small-size_1-of-1 newCandidate-sm">
    <label>Internship Start Month</label><br/>
    <select class="gaccca-select internship-month-sm" multiple="multiple" style="height: 100%;">
        <option value="" >All</option>
        @php $index = 1; @endphp
@foreach (isset($datas['internshipMonths'])?$datas['internshipMonths']:[] as $d)
<option data-reff='{{$index}}' value="{{$d}}">{{$d}}</option>
@php $index++; @endphp
@endforeach
</select>
</div>

</div>
<div class="loader gaccca_overlay_loader" id='loader'>
<img src="{{ asset('images/loader.gif') }}"  class="loader center" width="50" height="50" />
</div>
<div class="gaccca-grid gaccca-wrap" id="body">

</div>
</div>
<div class='gaccca-popup-modal-overlay' id='passwordAccessModal'>
<div class="gaccca-popup-modal-newCandidates" id="popupGwarn">
<div class="gaccca-form-element__control">
<label>Please see our candidates by using the provided password.</label><br/>
                                   <span> <input type="Password" id="access-password" placeholder="Password" required="" class="gaccca-input">
                                   </span>
                                   <span>
                                    <button class="gaccca-button-save gaccca-button-access" type='button' id='checkAccess'>Access</button>
                                   </span>
                                   <br/>
                                   <span class="gaccca-error-message" id='inputError'></span>


                                </div>
</div>
</div>  

</body>
<script>
let if_param="{{isset($_GET['if'])?$_GET['if']:''}}";
let it_param="{{isset($_GET['it'])?$_GET['it']:''}}";
let im_param="{{isset($_GET['im'])?$_GET['im']:''}}";
let contactPersonId="{{isset($_GET['contactPersonId'])?$_GET['contactPersonId']:''}}";
let intership_field=[];
let intership_type=[];
let intership_month=[];
let intership_field_att=[];
let intership_type_att=[];
let intership_month_att=[];
let intership_password='';
$(document).ready(function() {

    if_param=if_param.split(',');
    it_param=it_param.split(',');
    im_param=im_param.split(',');
    $.each(if_param, function( intIndex, objValue ){
        objValue=objValue.trim();
        if(objValue=='')return;
        var t=$('.internship-field span[data-reff=' + objValue + ']');
        if(t==undefined)return;
        t.addClass()
        $(".internship-field-all .gaccca-select-tag").addClass("gaccca-tag-disabled");
        $('.internship-field-sm option[data-reff=' + objValue + ']').attr('selected', true);
        t.removeClass("gaccca-tag-disabled");
        intership_field.push(t.attr('data-value'));
        intership_field_att.push(objValue);

});

$.each(im_param, function( intIndex, objValue ){
        objValue=objValue.trim();
        if(objValue=='')return;
        var t=$('.internship-month span[data-reff=' + objValue + ']');
        if(t==undefined)return;
        t.addClass()
        $(".internship-month-all .gaccca-select-tag").addClass("gaccca-tag-disabled");
        t.removeClass("gaccca-tag-disabled");
        intership_month.push(t.attr('data-value'));
        intership_month_att.push(objValue);

});

$.each(it_param, function( intIndex, objValue ){
        objValue=objValue.trim();
        if(objValue=='')return;
        var t=$('.internship-type span[data-reff=' + objValue + ']');
        if(t==undefined)return;
        t.addClass()
        $(".internship-type .gaccca-select-tag").addClass("gaccca-tag-disabled");
        $(".internship-type-all .gaccca-select-tag").addClass("gaccca-tag-disabled");
        t.removeClass("gaccca-tag-disabled");
        intership_type.push(t.attr('data-value'));
        intership_type_att.push(objValue);

});
$('.internship-field-sm').val(intership_field);
$('.internship-type-sm').val(intership_type);
$('.internship-month-sm').val(intership_month);








    $(".internship-field-all .gaccca-select-tag").click(function(){
        intership_field=[];
        intership_field_att=[];
        $(".internship-field .gaccca-select-tag").addClass("gaccca-tag-disabled");
        $(".internship-field-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        checkAjaxCall();
});

$(".internship-month-all .gaccca-select-tag").click(function(){
        intership_month=[];
        intership_month_att=[];
        $(".internship-month .gaccca-select-tag").addClass("gaccca-tag-disabled");
        $(".internship-month-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        checkAjaxCall();
});

$("#checkAccess").click(function(){
    checkAccess()
});
$('#access-password').keypress(function(e){
    if(e.which == 13){
    checkAccess()
    }
    });
function checkAccess(){
    intership_password=$("#access-password").val().trim();
        if(intership_password.length==0){
            $("#inputError").html('This field is required');
            return;
        }
        checkAjaxCall();
}
$(".internship-type-all .gaccca-select-tag").click(function(){
        intership_type=[];
        intership_type_att=[];
        $(".internship-type .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        $(".internship-type-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        checkAjaxCall();
});


$(".internship-field-sm").change(function(){
    intership_field=$(this).val();
    var valueOpp=[];
    $('.internship-field-sm option:selected').each(function(){
    valueOpp.push($(this).attr('data-reff'));
    });
    intership_field_att=valueOpp;
  
    if(intership_field.length>0 && intership_field[0]==''){
        intership_field=[];
        intership_field_att=[];
    }
   checkAjaxCall();
})

$(".internship-month-sm").change(function(){
  

   intership_month=$(this).val();
   var valueOpp=[];
    $('.internship-month-sm option:selected').each(function(){
    valueOpp.push($(this).attr('data-reff'));
    });
    intership_month_att=valueOpp;
    if(intership_month.length>0 && intership_month[0]==''){
        intership_month=[];
        intership_month_att=[];
    }


   checkAjaxCall();
})


$(".internship-type-sm").change(function(){
  
   intership_type=$(this).val();
   var valueOpp=[];
    $('.internship-type-sm option:selected').each(function(){
    valueOpp.push($(this).attr('data-reff'));
    });
    intership_type_att=valueOpp;
    if(intership_type.length>0 && intership_type[0]==''){
        intership_type=[];
        intership_type_att=[];
        
    }
   checkAjaxCall();
})

    $(".internship-field .gaccca-select-tag").click(function(){
        var intership_field_all=checkValue(this,intership_field,intership_field_att);
        intership_field=intership_field_all[0];
        intership_field_att=intership_field_all[1];


        if(intership_field.length>0){
            $(".internship-field-all .gaccca-select-tag").addClass("gaccca-tag-disabled");
        }else{
            $(".internship-field-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        }
        checkAjaxCall();
});

$(".internship-month .gaccca-select-tag").click(function(){
        var intership_month_all=checkValue(this,intership_month,intership_month_att);
        intership_month=intership_month_all[0];
        intership_month_att=intership_month_all[1];
        if(intership_month.length>0){
            $(".internship-month-all .gaccca-select-tag").addClass("gaccca-tag-disabled");
        }else{
            $(".internship-month-all .gaccca-select-tag").removeClass("gaccca-tag-disabled");
        }
        checkAjaxCall();
});



$(".internship-type .gaccca-select-tag").click(function(){
     intership_type=[];
     intership_type_att=[];
     $(".internship-type-all .gaccca-select-tag").addClass("gaccca-tag-disabled")
    $(".internship-type .gaccca-select-tag").addClass("gaccca-tag-disabled");
    $(this).removeClass("gaccca-tag-disabled")
    if($(this).attr("data-value")=='Remote'){
        intership_type.push('Remote');
        intership_type_att.push('1');  
    }else{
        intership_type.push('On-site');
        intership_type_att.push('2');

    }

    checkAjaxCall();
});


function checkValue(t,arrayVar,arrayAttVar){
    var value=$(t).attr("data-value");
    var value_att=$(t).attr("data-reff");
var indexNum=arrayVar.indexOf(value);
if(indexNum>-1){
    arrayVar.splice(indexNum, 1);
    arrayAttVar.splice(indexNum, 1);
    $(t).addClass("gaccca-tag-disabled")
}else{
    arrayVar.push(value);
    arrayAttVar.push(value_att);
    $(t).removeClass("gaccca-tag-disabled")
}
returnArrayInfo=[arrayVar,arrayAttVar];
return returnArrayInfo;
}

function checkAjaxCall(){
    var urlInfo=window.location.protocol + "//" + window.location.host + window.location.pathname +'?';
    urlInfo+='contactPersonId='+contactPersonId;
    urlInfo+='&if='+intership_field_att;
    urlInfo+='&it='+intership_type_att;
    urlInfo+='&im='+intership_month_att;
    
                window.history.pushState({path:urlInfo},'',urlInfo);
ajaxCall();
}

function ajaxCall(){
   var formData = {
        'intership_type': intership_type,
        "intership_field": intership_field,
        "intership_month": intership_month,
         "intership_password":intership_password,
         "contactPersonId":contactPersonId,
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
            
            $('#body').html(ajaxData.html);
            
            if(formData.intership_password==''){
                
                document.getElementById('passwordAccessModal').style.display = 'block';
            }else if(formData.intership_password!='' && ajaxData.pass=='0'){
                document.getElementById('passwordAccessModal').style.display = 'block';
                $('#inputError').html('Please use the right password!');

            }else if(formData.intership_password!='' && ajaxData.pass=='1'){
                document.getElementById('passwordAccessModal').style.display = 'none';
                $('#inputError').html('');
}
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