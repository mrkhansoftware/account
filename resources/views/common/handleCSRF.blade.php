<script>
var intervalVarCsrf
function handleCSRF(){
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type: 'POST',
url: 'handleCsrf',
dataType: 'JSON',
success: function (data) {

},
error: function (data) {
if(data.status==419){
    clearInterval(intervalVarCsrf);
if(confirm('Your session has been expired. Please refresh the page and try again')){
window.location.reload();
}else{
    window.location.reload();
}

}    
}
});
}

intervalVarCsrf=setInterval(function(){ handleCSRF(); }, 3000);
</script>