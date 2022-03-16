@extends('layouts.app')

@section('content')

         <!-- WRAPPER -->
    <div id="wrapper">
        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification code has been sent to your email address and phone number.') }}
                </div>
            @elseif(session('failed'))
                <div class="alert alert-danger" role="alert">
                    {{ __('Sorry, The code you entered seems to be incorrect, Please enter the correct code.') }}
                </div>
            @endif
        <div class="auth-wrapper">
            <div class="container-fluid">

                <div class="auth-box">
                    <div class="container-fluid panel-auth">

                        <div class="img-con">
                            <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865053/icons/Vector_Smart_Object_s9v7ek.png" />
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="content">
                                <div class="img-con">
                                    <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865080/icons/Message_ecjstn.png" />
                                </div>
                                <h3><b>Verify your contact</b></h3>
                                <p>you will need to veify with otp to complete registration</p>
                                <form class="form-auth-small" method="POST" action="{{ route('verification.code.verify') }}">
                                    @csrf
                                    <div class="container-fluid row">
                                        <div class="col-md-2 col-sm-2 col-xs-3"></div>
                                        <div class="form-group form-con col-md-9 col-sm-8 col-xs-6" id="OTPInput" style="padding:0">
                                            <input type="text" hidden id="code" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" autocomplete="code">

                                        @error('code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-3"></div>
                                    </div>

                                    <p>An email and sms has been sent to email address and phone number with a code to verify your account.<br /> If you have not receive the email after few minutes, please check your spam
                                    </p>

                                    <button type="submit" id="otpSubmit" class="btn btn-primary btn-lg btn-block"> {{ __('Verify Code') }}</button>
                                    </form>
                                    <div class="bottom">
                                        <span class="helper-text"><b></b> <a href="{{ route('verification.code.resend') }}">Resend Code</a></span>
                                    </div>

                            </div>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- END WRAPPER -->

            <script>
                /* This creates all the OTP input fields dynamically. Change the otp_length variable  to change the OTP Length */
                const $otp_length = 6;

                const element = document.getElementById('OTPInput');
                for (let i = 0; i < $otp_length; i++) {
                    let inputField = document.createElement('input'); // Creates a new input element
                    inputField.className = "w-12 h-12 bg-gray-100 border-gray-100 outline-none focus:bg-gray-200 m-2 text-center rounded focus:border-blue-400 focus:shadow-outline";
                    // Do individual OTP input styling here;
                    inputField.style.cssText = "color: transparent; text-shadow: 0 0 0 gray;"; // Input field text styling. This css hides the text caret
                    inputField.id = 'code-field' + i; // Don't remove
                    inputField.maxLength = 1; // Sets individual field length to 1 char
                    element.appendChild(inputField); // Adds the input field to the parent div (OTPInput)
                }

                /*  This is for switching back and forth the input box for user experience */
                const inputs = document.querySelectorAll('#OTPInput > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {

                            if (inputs[i].value == '') {
                                if (i != 0) {
                                    inputs[i - 1].focus();
                                }
                            } else {
                                inputs[i].value = '';
                            }

                        } else if (event.key === "ArrowLeft" && i !== 0) {
                            inputs[i - 1].focus();
                        } else if (event.key === "ArrowRight" && i !== inputs.length - 1) {
                            inputs[i + 1].focus();
                        } else if (event.key != "ArrowLeft" && event.key != "ArrowRight") {
                            inputs[i].setAttribute("type", "text");
                            inputs[i].value = ''; // Bug Fix: allow user to change a random otp digit after pressing it
                            // Hides the text after 1 sec
                        }
                    });
                    inputs[i].addEventListener('input', function() {
                        inputs[i].value = inputs[i].value.toUpperCase(); // Converts to Upper case. Remove .toUpperCase() if conversion isnt required.
                        if (i === inputs.length - 1 && inputs[i].value !== '') {
                            return true;
                        } else if (inputs[i].value !== '') {
                            inputs[i + 1].focus();
                        }
                    });

                }
                /*  This is to get the value on pressing the submit button
                 *   In this example, I used a hidden input box to store the otp after compiling data from each input fields
                 *   This hidden input will have a name attribute and all other single character fields won't have a name attribute
                 *   This is to ensure that only this hidden input field will be submitted when you submit the form */

                document.getElementById('otpSubmit').addEventListener("click", function() {
                    const inputs = document.querySelectorAll('#OTPInput > *[id]');
                    let compiledOtp = '';
                    for (let i = 0; i < inputs.length; i++) {
                        compiledOtp += inputs[i].value;
                    }
                    document.getElementById('code').value = compiledOtp;
                    return true;
                });
            </script>
@endsection
