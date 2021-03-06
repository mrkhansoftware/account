var config = {
    apiKey: "AIzaSyDoXrUMd94ut_eBbv7BRc-IGWVjh0P58hc",
    authDomain: "gaccca-wordpress.firebaseapp.com",
};
firebase.initializeApp(config);
var providerGoogle = new firebase.auth.GoogleAuthProvider();
var providerFacebook = new firebase.auth.FacebookAuthProvider();

/*firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        currentUserInfo();
        console.log('User is signed in.');
        //window.location.href='/profile_new';
    } else {
        console.log('No User is signed in.');
    }
});
*/



const signupForm = document.querySelector('#signup-form');
if (signupForm != null) {
    signupForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = signupForm['signup-email'].value;
        const password = signupForm['signup-password'].value;
        const firstName = signupForm['signup-firstname'].value;
        const lastName = signupForm['signup-lastname'].value;
        if (email != '' && password != '' && firstName != '' && lastName != '') {
            document.getElementById('loader').style.display = 'block';
        } else {
            return false
        }

        signUpForm(email, password, firstName, lastName, false);
    });
}

function signUpForm(email, password, firstName, lastName, isRedirect) {// alert(isRedirect);
    firebase.auth().createUserWithEmailAndPassword(email, password).then(function (result) {
        console.log(result);
        updateProfile(firstName, lastName, isRedirect);
        signupForm.reset();
        //firebase.auth().signOut();
    }).catch(function (error) {
        document.getElementById('loader').style.display = 'none';
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log('errorCode:' + errorCode);
        //  alert('errorMessage:'+errorMessage);
        var errorCode = error.code;
        var errorMessage = error.message;

        if (errorCode == 'auth/email-already-in-use') {
            document.getElementById('signUpMsg').style.display = 'block';
            document.getElementById('errorMessageSignUp').innerHTML = 'User with this email already exist.';
        } else if (errorCode == 'auth/weak-password') {
            document.getElementById('signUpMsg').style.display = 'block';
            document.getElementById('errorMessageSignUp').innerHTML = 'Password should be at least 6 characters.';
        }


        // ...
    });
}




const loginFormData = document.querySelector('#login-form-data');
const loginForm = document.querySelector('#login-form');
if (loginForm != null) {
    loginForm.addEventListener('click', (e) => {
        e.preventDefault();
        const email = loginFormData['login-email'].value;
        const password = loginFormData['login-password'].value;


        if (email == '' && password == '') {

            $("#login-email").addClass("gaccca-input-error");
            $("#login-password").addClass("gaccca-input-error");
            $("#login-email-error-msg").text('Email is required.');
            $("#login-password-error-msg").text('Password is required.');
            return false;
        } else if (email != '' && password == '') {
            var isTrue = ValidateEmail(email);
            if (isTrue) {
                $("#login-email-error-msg").text('');
                $("#login-email").removeClass("gaccca-input-error");
            } else {
                $("#login-email-error-msg").text('Invalid email address');
                $("#login-email").addClass("gaccca-input-error");
            }
            $("#login-password-error-msg").text('Password is required.');
            $("#login-password").addClass("gaccca-input-error");
            return false;
        } else if (email == '' && password != '') {
            $("#login-email-error-msg").text('Email is required.');
            $("#login-email").addClass("gaccca-input-error");
            $("#login-password-error-msg").text('');
            $("#login-password").removeClass("gaccca-input-error");

            return false;
        } else {
            $("#login-email-error-msg").text('');
            $("#login-password-error-msg").text('');
            $("#login-email").removeClass("gaccca-input-error");
            $("#login-password").removeClass("gaccca-input-error");
            document.getElementById('loader').style.display = 'block';

        }

        // if(password == ''){
        //     alert('The value is required.')
        // }


        // alert(email+'-'+password);
        firebase.auth().signInWithEmailAndPassword(email, password).then(function (result) {
            createOrMergeAccount(true);

        }).catch(function (error) {
            // Handle Errors here.
            document.getElementById('loader').style.display = 'none';
            var errorCode = error.code;
            var errorMessage = error.message;

            if (errorCode == 'auth/user-not-found') {
                document.getElementById('loginMsg').style.display = 'block';
                document.getElementById('errorMessagelogin').innerHTML = 'user not found';
            }
            else if (errorCode == 'auth/wrong-password') {
                document.getElementById('loginMsg').style.display = 'block';
                document.getElementById('errorMessagelogin').innerHTML = 'Password is incorrect';
            }
            // ...
        });

    });
}

const fbLogin = document.querySelector('#fbLogin');
if (fbLogin != null) {
    fbLogin.addEventListener('click', (e) => {
        fastLogin(providerFacebook);

    });
}
const googleLogin = document.querySelector('#googleLogin');
if (googleLogin != null) {
    googleLogin.addEventListener('click', (e) => {
        fastLogin(providerGoogle);

    });
}
function fastLogin(provider) {
    provider.addScope('email');
    firebase.auth().signInWithPopup(provider).then(function (result) {
        // This gives you a Google Access Token. You can use it to access the Google API.
        var token = result.credential.accessToken;
        console.log(token);
        // The signed-in user info.
        var user = result.user;
        console.log(user);
        createOrMergeAccount(true);
        // ...
    }).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
        // The email of the user's account used.
        var email = error.email;
        // The firebase.auth.AuthCredential type that was used.
        var credential = error.credential;
        // ...




    });
}




function currentUserInfo() {
    var user = firebase.auth().currentUser;
    var userInfo = {};
    userInfo.email = user.providerData[0].email;
    userInfo.providerId = user.providerData[0].providerId;
    userInfo.uid = user.uid;
    userInfo.displayName = user.providerData[0].displayName;
    if (userInfo.displayName != null) {
        var displayName = userInfo.displayName;
        var firstSpace = displayName.indexOf(" ");
        if (firstSpace != -1) {
            userInfo.firstName = displayName.substr(0, firstSpace);
            userInfo.lastName = displayName.substr(firstSpace, displayName.length);
        } else {
            userInfo.firstName = '-';
            userInfo.lastName = displayName;
        }
    }
    //    console.log('userInfo');
    //    console.log(userInfo);
    return userInfo;
}

function updateProfile(firstName, lastName, isRedirect) {
    firebase.auth().currentUser.updateProfile({
        displayName: firstName + ' ' + lastName
    }).then(function () {
        createOrMergeAccount(isRedirect);
        if (!isRedirect) {
            firebase.auth().signOut();
            document.getElementById('loader').style.display = 'none';
            document.getElementById('signUpMsgSuccess').style.display = 'block';
            document.getElementById('loginMsg').style.display = 'none';
            document.getElementById('successMessageSignup').innerHTML = 'Verification link sent on registred email.';
            // alert('account created')
        }

    }).catch(function (error) {
        firebase.auth().signOut();
    });
}

const forgetFormData = document.querySelector('#forget-form-data');
const resetPassBtn = document.querySelector('#resetPassBtn');

if (resetPassBtn != null) {
    resetPassBtn.addEventListener('click', (e) => {
        e.preventDefault();
        document.getElementById('loader').style.display = 'block';
        const email = forgetFormData['forget-pass-email'].value;
        //alert(email);
        var actionCodeSettings = {
            // After password reset, the user will be give the ability to go back
            // to this page.
            url: 'https://account.iieex.org',
            handleCodeInApp: false
        };
        firebase.auth().sendPasswordResetEmail(email, actionCodeSettings)
            .then(function () {
                // Password reset email sent.

                document.getElementById('loader').style.display = 'none';
                document.getElementById('resetMsgSuccess').style.display = 'block';
                document.getElementById('successMessageReset').innerHTML = 'Reset password email sent';
                forgetFormData.rest();
            })
            .catch(function (error) {
                // Error occurred. Inspect error.code.
                document.getElementById('loader').style.display = 'none';
                var errorCode = error.code;
                var errorMessage = error.message;
console.log(errorMessage);
                if (errorCode == 'auth/user-not-found') {
                    document.getElementById('resetMsg').style.display = 'block';
                    document.getElementById('errorMessageReset').innerHTML = 'user not found';
                }
            });

    });
}
const resetFormData = document.querySelector('#reset-form-data');
const resetPassBtnSet = document.querySelector('#resetPassBtnSet');
if (resetPassBtnSet != null) {
    resetPassBtnSet.addEventListener('click', (e) => {
        e.preventDefault();
        var code = codeGlobal;
        var newPassword = document.getElementById('password').value.trim();
        var confirmPassword = document.getElementById('confirmPassword').value.trim();
        if (newPassword.length < 6) {

            onError('Password should be minimum 6 character long');
            return;
        }
        if (newPassword != confirmPassword) {
            onError('Confirm Password is not same');
            return;
        }
        document.getElementById('loader').style.display = 'block';

        firebase.auth().confirmPasswordReset(code, newPassword)
            .then(function () {
                onUpdate('Password reset successfully');
                window.location.href = '/login_account';
            })
            .catch(function (error) {
                document.getElementById('loader').style.display = 'none';
                var errorCode = error.code;
                var errorMessage = error.message;
                console.log('errorCode:' + errorCode);
                if (errorCode == 'auth/invalid-action-code') {
                    onError('Link has been expired.');
                }
            })

    });
}

function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        return (true)
    }
    // alert("You have entered an invalid email address!")
    return (false)
}