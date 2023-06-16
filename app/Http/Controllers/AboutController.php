<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AboutController extends Controller
{
    //
    public function aboutHome ()
    {
        $about = DB::table('abouts')->first();
        return view('backend.pages.about.about',compact('about'));
    }
    public function aboutUpdate (Request $request)
    {
        $check =DB::table('abouts')->first();
        $data = array();
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path($check->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/profile/'),$filename);
            $data['image'] = 'images/profile/'.$filename;
        }
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['address'] = $request->address;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['age'] = $request->age;
        $data['nationality'] = $request->nationality;
        $data['whatsapp'] = $request->whatsapp;
        $data['languages'] = $request->languages;
        $data['work_year'] = $request->work_year;
        $data['freelance'] = $request->freelance;
        DB::table('abouts')->update($data);
        $notification = array('message' => 'Update Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);

    }


}
