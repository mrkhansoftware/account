const userInfo={};
var config = {
    apiKey: "AIzaSyBmMaHSgryh-b19TgfsFslx3VSbxUWnOKE",
    authDomain: "loginaccount-277810.firebaseapp.com",
};
firebase.initializeApp(config);

firebase.auth().onAuthStateChanged(function(user) {
    
    if (user) {
        
        userInfo.email=user.providerData[0].email;
        userInfo.uid=user.uid;
        userInfo.provider=user.providerData[0].providerId;
        console.log(' User is signed in.');
        //callInit(userInfo);
    } else {
        console.log('No User is signed in.');
        window.location.href='/login_account';
    }
});
const resetFormData=document.querySelector('#reset-form-data');
const resetForm=document.querySelector('#reset-form');
if(resetForm!=null){
    resetForm.addEventListener('click', (e)=>{ 
        e.preventDefault();
        
        const oldPassword=resetFormData['old-password'].value.trim();
        const newPassword=resetFormData['new-password'].value.trim();
        const newPasswordRepeat=resetFormData['new-password-repeat'].value.trim();
        if(newPassword.length<6){
        onError('Please choose a password with at least 6 \ characters.');
        return;
    }
        
        
        if(newPassword==newPasswordRepeat){
        document.getElementById('loader').style.display='block';
        firebase.auth().signInWithEmailAndPassword(userInfo.email, oldPassword).then(function(result) { 
        updatePassword(newPassword);
    }).catch(function(error) {
        // Handle Errors here.
        document.getElementById('loader').style.display='none';
        var errorCode = error.code;
        var errorMessage = error.message;
        if(errorCode=='auth/wrong-password'){
        onError('Old password is not correct.');
    }else{
        alert('errorMessage:'+errorMessage);    
    }
        // ...
    });
        
        
        
        
        
        
        
        
        
    }else{
        onError('New password is not same');
        return;
    }
        
        
        
    });
    }
        
        function updatePassword(newPassword){
        var user = firebase.auth().currentUser;
        user.updatePassword(newPassword).then(function() {
        onUpdate('Password has been changed.')
        document.getElementById('loader').style.display='none';
    }).catch(function(error) {
        document.getElementById('loader').style.display='none';
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log('errorCode:'+errorCode);
        alert('errorMessage:'+errorMessage);
    });
    }    
        
        
        function logout(){
        firebase.auth().signOut().then(function() {
        window.location.href='/login_account';
    }).catch(function(error) {
        // An error happened.
    });
    }

    
        
    const saveBtn=document.querySelector('#saveBtn');
    if(saveBtn!=null){
        saveBtn.addEventListener('click', (e)=>{
           // document.getElementById('loader').style.display='block';
        })
    }