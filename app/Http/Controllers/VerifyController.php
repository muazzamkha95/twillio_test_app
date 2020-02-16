<?php
namespace App\Http\Controllers;
use Authy\AuthyApi;
use Illuminate\Http\Request;
use App\Library\Services\OneTouch;
use Auth;
class VerifyController extends Controller
{
    public function index()
    {
        return view('auth.verify');
    }
    public function verify(Request $request)
    {
        try {
            $data = $request->validate([
                'verification_code' => ['required', 'numeric'],
            ]);
            $authy_api = new AuthyApi(getenv("AUTHY_SECRET"));
            $res = $authy_api->verifyToken(auth()->user()->authy_id, $data['verification_code']);
            if ($res->bodyvar("success")) {
                \session(['isVerified' => true]);
                return redirect()->route('admin.panel');
            }
            return back()->with(['error' => $res->errors()->message]);
        } catch (\Throwable $th) {
            return back()->with(['error' => $th->getMessage()]);
        }
    }

    public function sms( Request $request){



        $authy_api = new AuthyApi(getenv("AUTHY_SECRET"),'https://api.authy.com');
        $response = $authy_api->requestSms($request->authy_id);

        if ($response->ok()) {
            return response()->json(['message' => 'Verification Code sent via SMS succesfully.']);
        } else {
            return response()->json($response->errors(), 500);
        }
    }

    public function call(Request $request){
        $authy_api = new AuthyApi(getenv("AUTHY_SECRET"),'https://api.authy.com');
        $response = $authy_api->phoneCall($request->authy_id);

        if ($response->ok()) {
            return response()->json(['message' => 'Verification Code sent via Call succesfully.']);
        } else {
            return response()->json($response->errors(), 500);
        }
    }

    public function notification(Request $request){
        $authyApi = new AuthyApi(getenv("AUTHY_SECRET"),'https://api.authy.com');
        $user = Auth::user();
        $authyID = $request->authy_id;
        $username =$user['email'];


        $response = $authyApi->oneTouchVerificationRequest(
            $authyID,
            'Twilio Account Security Quickstart wants authentication approval.',
            120,
            [
                'username' => $username,
                'AuthyID' => $authyID,
                'Location' => 'San Francisco, CA',
                'Reason' => 'Demo by Account Security'
            ]
        );

        if ($response->ok()) {
            $approval_request = (array)$response->bodyvar('approval_request');
            session(['onetouch_uuid' => $approval_request['uuid']]);

            return response()->json(['message' => 'Token verified successfully.']);
        } else {
            return response()->json($response->errors(), 500);
        }
    }
}
