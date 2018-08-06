@extends('layouts.app')

@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Import and configure the Firebase SDK -->
  <!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
  <!-- If you do not serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->
  <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>

 <script type="text/javascript">
  /**
     *  Initialize Firebase Here.
     */
  // Initialize Firebase
  var config = {
    apiKey: "{{ config('services.firebase.api_key') }}",
    authDomain: "{{ config('services.firebase.auth_domain') }}",
    projectId:"Livigro-DB",
    databaseURL: "{{ config('services.firebase.database_url') }}",
    storageBucket: "{{ config('services.firebase.storage_bucket') }}",
};
  firebase.initializeApp(config);


    /**
     * Handles the sign up button press.
     */
     function handleSignUp() {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      if (email.length < 4) {
        alert('Please enter an email address.');
        return;
    }
    if (password.length < 4) {
        alert('Please enter a password.');
        return;
    }
      // Sign in with email and pass.
      // [START createwithemail]
      firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        console.log("start");
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/weak-password') {
          alert('The password is too weak.');
      } else {
          alert(errorMessage);
      }
      console.log(error);
        // [END_EXCLUDE]
    });
      // [END createwithemail]   
       initApp();
  }

    /**
     * initApp handles setting up UI event listeners and registering Firebase auth listeners:
     *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
     *    out, and that is where we update the UI.
     */
     function initApp() {
        // alert("initapp");
      // Listening for auth state changes.
      // [START authstatelistener]
      firebase.auth().onAuthStateChanged(function(user) {
        // [START_EXCLUDE silent]
        // document.getElementById('quickstart-verify-email').disabled = true;
        // [END_EXCLUDE]
        if (user) {



            var uid = user.uid;
       console.log(uid);
          // User is signed in.

          var emailVerified = user.emailVerified;
          verifyuremail(); 
    var values = $("#addUser").serializeArray();
    // console.log(values);
    var email = values[1].value;
    var name = values[3].value;
    var phone = values[4].value;


    firebase.database().ref('users/' + uid).set({
        email:email,
        name: name,
        phone: phone,
    
    });



          // [START_EXCLUDE]
// alert("Verify Your Email");
//                           window.location.href = "{{URL::to('/log')}}";

         
          // [END_EXCLUDE]
      } 
        // [START_EXCLUDE silent]
        // [END_EXCLUDE]
    });
      // [END authstatelistener]
     
  }

  function verifyuremail()  {
      // [START sendemailverification]
      firebase.auth().currentUser.sendEmailVerification().then(function() {
        // Email Verification sent!
        // [START_EXCLUDE]
        alert('Email Verification Sent!');
        // [END_EXCLUDE]
    });
      // [END sendemailverification]

      logoutuid();
  }

function logoutuid() {
    firebase.auth().signOut().then(function() {
  // Sign-out successful.
  console.log("logout");
}, function(error) {
  // An error happened.
  console.log(error);
});
}
  window.onload = function() {
     document.getElementById('quickstart-sign-up').addEventListener('click', handleSignUp, false);
  };
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" id="addUser" action="" aria-label="{{ __('Register') }}">
                        @csrf

              

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="tetx"  class="form-control"  name="name" value="" required>

                                
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text"  class="form-control" name="phone" value="" required>

                                
                            </div>
                        </div>

        
</form>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="quickstart-sign-up">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
