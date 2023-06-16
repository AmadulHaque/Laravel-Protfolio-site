<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class ServiceController extends Controller
{

    public function serviceHome()
    {
        $services = DB::table('services')->get();
        return view('backend.pages.service.index',compact('services'));
    }

    public function serviceAdd ()
    {
        return view('backend.pages.service.add');
    }

    public function servicePost (Request $request)
    {
        $data = array();
        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/service/'),$filename);
            $data['icon'] = 'images/service/'.$filename;
        }
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        DB::table('services')->insert($data);
        $notification = array('message' => 'Add Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    // 

    public function serviceEdit ($id)
    {
        $data = DB::table('services')->where('id',$id)->first();

        return view('backend.pages.service.edit',compact('data'));
    }

    public function serviceDelete ($id)
    {
        $check =  DB::table('services')->where('id',$id)->first();
        if ($check->icon) {
            @unlink(public_path($check->icon));
        }
        DB::table('services')->where('id',$id)->delete();
        $notification = array('message' => 'Remove Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function serviceUpdate (Request $request)
    {
       $check =  DB::table('services')->where('id',$request->id)->first();
        $data = array();
        if ($request->file('icon')) {
            @unlink(public_path($check->icon));
            $file = $request->file('icon');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/service/'),$filename);
            $data['icon'] = 'images/service/'.$filename;
        }
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        DB::table('services')->where('id',$request->id)->update($data);
        $notification = array('message' => 'Update Success!','alert-type' => 'success');
        return redirect()->route('serviceHome')->with($notification);
    }




}
