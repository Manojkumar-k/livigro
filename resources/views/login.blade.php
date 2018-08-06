@extends('layouts.app')

@section('content')
 
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
     * Handles the sign in button press.
     */
     function toggleSignIn() {
      if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        console.log('signout');
        // [END signout]
    } else {
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
        // [START authwithemail]
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // [START_EXCLUDE]
          if (errorCode === 'auth/wrong-password') {
            alert('Wrong password.');
        } else {
            alert(errorMessage);
        }
        console.log(error);
        document.getElementById('quickstart-sign-in').disabled = false;
          // [END_EXCLUDE]
      });
        // [END authwithemail]
    }
    document.getElementById('quickstart-sign-in').disabled = true;
}


  function sendPasswordReset() {
      var email = document.getElementById('email').value;
      // [START sendpasswordemail]
      firebase.auth().sendPasswordResetEmail(email).then(function() {
        // Password Reset Email Sent!
        // [START_EXCLUDE]
        alert('Password Reset Email Sent!');
        // [END_EXCLUDE]
    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/invalid-email') {
          alert(errorMessage);
      } else if (errorCode == 'auth/user-not-found') {
          alert(errorMessage);
      }
      console.log(error);
        // [END_EXCLUDE]
    });
      // [END sendpasswordemail];
  }
    /**
     * initApp handles setting up UI event listeners and registering Firebase auth listeners:
     *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
     *    out, and that is where we update the UI.
     */
     function initApp() {
      // Listening for auth state changes.
      // [START authstatelistener]
      firebase.auth().onAuthStateChanged(function(user) {
        // [START_EXCLUDE silent]
        // document.getElementById('quickstart-verify-email').disabled = true;
        // [END_EXCLUDE]
        if (user) {



            var uid = user.uid;
            firebase.auth().currentUser.getIdToken(/* forceRefresh */ true).then(function(idToken) {
            // Send token to your backend via HTTPS
            console.log(idToken);
            $.ajax({
                url:'auth',
                method:'post',
                data:{
                    _token: $('meta[name="csrf-token"]').attr('content') ,
                    idtoken:idToken
                    
                },
                success:function(data)
                {
                    console.log("ok");
                    var id=data['uid'];
                    var verify=data['emailVerified'];
                    console.log(data);
                    if(id==uid)
                    {
                      if(!verify)
                      {
                        alert("Please verify Your Email")
                      }
                      else{
                        console.log('success');
                        // user is Authenticated
                        // write your action
                           // history.back();
                           window.location.href="{{url('/home')}}";
                        }

                    }
                },
                error:function(error)
                {
                  console.log("error");
                    console.log(error);
                }

            });
            idToken=null;
            // ...
        }).catch(function(error) {
             // Handle error
         });
          // User is signed in.

          var emailVerified = user.emailVerified;

          // [START_EXCLUDE]
          // document.getElementById('quickstart-sign-in').textContent = 'Sign out';

          if (!emailVerified) {
            // document.getElementById('quickstart-verify-email').disabled = false;
        }
          // [END_EXCLUDE]
      } 
        // [START_EXCLUDE silent]
        document.getElementById('quickstart-sign-in').disabled = false;
        // [END_EXCLUDE]
    });
      // [END authstatelistener]
      document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);

  }
  window.onload = function() {
      initApp();
  };
</script>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  value="{{ old('email') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"   required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="quickstart-sign-in">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('forgot') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
















@endsection