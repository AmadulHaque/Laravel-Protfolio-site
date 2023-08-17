<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function Contact()
    {
        $contacts = DB::table('contacts')->get();
        return view('backend.pages.Contact.index',compact('contacts'));
    }

    public function ContactPost (Request $request)
    {
        $data = array();
        $data['name'] = "$request->name";
        $data['email'] = "$request->email";
        $data['subject'] = "$request->subject";
        $data['message'] = "$request->message";
        $data['status'] = "New";
        DB::table('contacts')->insert($data);
        $notification = array('message' => 'Approve Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function ContactDelete ($id)
    {
        DB::table('contacts')->where('id',$id)->delete();
        $notification = array('message' => 'Remove Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function ContactApprove($id)
    {
        $data = array();
        $data['status'] = "Approve";
        DB::table('contacts')->where('id',$id)->update($data);
        $notification = array('message' => 'Approve Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function ContactReject($id)
    {
        $data = array();
        $data['status'] = "Reject";
        DB::table('contacts')->where('id',$id)->update($data);
        $notification = array('message' => 'Reject Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

}
