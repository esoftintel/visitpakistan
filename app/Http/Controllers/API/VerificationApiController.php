<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
class VerificationApiController extends Controller
{
use VerifiesEmails;
/**
* Show the email verification notice.
*
*/
public function show()
{
//
}
/**
* Mark the authenticated user’s email address as verified.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function verify(Request $request) {
$userID = $request['id'];
$user = User::findOrFail($userID);
if($user)
{
    $date = date('Y-m-d g:i:s');
    $user->email_verified_at = $date; // to enable the “email_verified_at field of that user be a current time stamp by mimicing the must verify email feature
    $user->save();
            $result['status']=1;
            $result['result']=$user;
            return response()->json($result);

}
else{
           $result['status']=0;
            $result['result']='Email verification timedout';
            return response()->json($result);
}

}
/**
* Resend the email verification notification.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function resend(Request $request)
{
if ($request->user()->hasVerifiedEmail()) {
return response()->json('User already have verified email!', 422);
// return redirect($this->redirectPath());
}
$request->user()->sendEmailVerificationNotification();
return response()->json('The notification has been resubmitted');
// return back()->with(‘resent’, true);
}
}
