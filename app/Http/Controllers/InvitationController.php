<?php

namespace App\Http\Controllers;

use App\UserInvite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvitationController extends Controller
{
    public function showSendInvitationForm()
    {
        $link=$this->generateLink();
        return view('invitation.sendInvitation')->with('link',$link);
    }

    public function generateLink()
    {
        $companyId=DB::table('companies')->join('users','users.id','companies.company_id')->select('company_id')->where('company_user_id',Auth::User()->id)->first();
        $invitation_token=str_random(10);
        return urldecode(route('registerEmployee').'?invitation_token='.$invitation_token.'/'.$companyId->company_id);
    }

    public function sendInvite(Request $request)
    {
        $companyId=DB::table('companies')->join('users','users.id','companies.company_id')->select('company_id')->where('company_user_id',Auth::User()->id)->first();
        $token=DB::table('user_invites')->select('user_invite_token')->where('user_invite_email',$request->input('inviteEmail'))->get();
        if($token==null)
        {
            $invite=new UserInvite();
            $invite->user_invite_company_id=$companyId->company_id;
            $invite->user_invite_token=$request->input('token');
            $invite->user_invite_email=$request->input('inviteEmail');
            $invite->save();
        }
        else
        {
            return "invitation already send";
        }
    }

    public function showEmployeeRegistration($token,$company_id)
    {
        return view('invitation.employeeRegistration')->with(['token',$token],['company_id',$company_id]);
    }
}
