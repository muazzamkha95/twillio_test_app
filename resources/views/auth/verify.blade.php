@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Phone Number') }}</div>
                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                    @endif
                    <p class="text-center"><span v-on:click="SendSms()">Please</span> Select Mehtod of varification for this number: {{auth()->user()->phone_number}}</p>
                    <form action="{{route('verify')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="verification_code"
                                class="col-md-4 col-form-label text-md-right">{{ __('OTP: ') }}</label>
                            <div class="col-md-6">
                            <input type="hidden" id="authId" value="{{auth()->user()->authy_id}}"/>
                                <input id="verification_code" type="tel"
                                    class="form-control @error('verification_code') is-invalid @enderror"
                                    name="verification_code" value="{{ old('verification_code') }}" required>
                                @error('verification_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <span class="btn btn-primary"  onClick="SMS()">
                                    SMS
                                </span>
                                <span  class="btn btn-warning"  onClick="Call()">
                                    Call
                                </span>
                                <span  class="btn btn-danger" onClick="Notification()">
                                    Push Notification
                                </span>
                                <button type="submit" class="btn btn-primary">
                                    Verify
                                </button>
                            </div>

                        </div>
                        <div class="text-center" style="margin-top:50px;">
                            <span class="alert alert-success " id="success" style="display:none;"></span>
                            <span class="alert alert-danger" id="error" style="display:none;"></span>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var pollingID;
    function SMS(number){

        var id = document.getElementById("authId").value;
        axios.post('/api/sms', {
            authy_id: id,
        })
        .then(function (response) {
            $('#success').text('Sms Sent Successfully');
            $('#success').show();

            setTimeout(function(){  $('#success').hide(); }, 2000);
            console.log(response);
        })
        .catch(function (error) {
            $('#error').text(error);
            $('#error').show();

            setTimeout(function(){  $('#error').hide(); }, 5000);
            console.log(error);
        });
    }

    function Call(number){
        var id = document.getElementById("authId").value;
        axios.post('/api/call', {
            authy_id: id,
        })
        .then(function (response) {
            $('#success').text('Call arranged. It will take some Seconds');
            $('#success').show();

            setTimeout(function(){  $('#success').hide(); }, 2000);
            console.log(response);
        })
        .catch(function (error) {
            $('#error').text(error);
            $('#error').show();

            setTimeout(function(){  $('#error').hide(); }, 5000);
        });
    }

    function Notification(number){
        var id = document.getElementById("authId").value;
        axios.post('/api/notification', {
            authy_id: id,
        })
        .then(function (response) {
            console.log(response);
            pollingID = $interval(oneTouchStatus, 5000, 12);
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    function oneTouchStatus() {
        $http.post('/api/accountsecurity/onetouchstatus')
            .success(function (data, status, headers, config) {
                console.log("OneTouch Status: ", data);
                if (data.approval_request.status === "approved") {
                    $window.location.href = $window.location.origin + "/ap/admin";
                    $interval.cancel(pollingID);
                } else {
                    console.log("One Touch Request not yet approved");
                }
            })
            .error(function (data, status, headers, config) {
                console.log("OneTouch Polling Status: ", data);
                alert("Something went wrong with the OneTouch polling");
                $interval.cancel(pollingID);
            });
    }

</script>
@endsection
